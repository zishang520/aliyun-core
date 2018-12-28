<?php
namespace luoyy\AliCore\Regions;

use luoyy\AliCore\Location\Request\DescribeEndpointRequest;

/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */

class LocationService
{
    /**
     * @var IClientProfile
     */
    private $clientProfile;
    /**
     * @var array
     */
    public static $cache = array();
    /**
     * @var array
     */
    public static $lastClearTimePerProduct = array();
    /**
     * @var string
     */
    public static $serviceDomain = 'location.aliyuncs.com';

    /**
     * LocationService constructor.
     *
     * @param $clientProfile
     */
    public function __construct($clientProfile)
    {
        $this->clientProfile = $clientProfile;
    }

    /**
     * @param $regionId
     * @param $serviceCode
     * @param $endPointType
     * @param $product
     *
     * @return mixed|null
     * @throws ClientException
     */
    public function findProductDomain($regionId, $serviceCode, $endPointType, $product)
    {
        $key = $regionId . '#' . $product;
        $domain = isset(self::$cache[$key]) ? self::$cache[$key] : null;
        if ($domain === null || $this->checkCacheIsExpire($key) == true) {
            $domain = $this->findProductDomainFromLocationService($regionId, $serviceCode, $endPointType);
            self::$cache[$key] = $domain;
        }

        return $domain;
    }

    /**
     * @param $regionId
     * @param $product
     * @param $domain
     */
    public static function addEndPoint($regionId, $product, $domain)
    {
        $key = $regionId . '#' . $product;
        self::$cache[$key] = $domain;
        $lastClearTime = mktime(0, 0, 0, 1, 1, 2999);
        self::$lastClearTimePerProduct[$key] = $lastClearTime;
    }

    /**
     * @param $domain
     */
    public static function modifyServiceDomain($domain)
    {
        self::$serviceDomain = $domain;
    }

    /**
     * @param $key
     *
     * @return bool
     */
    private function checkCacheIsExpire($key)
    {
        $lastClearTime = isset(self::$lastClearTimePerProduct[$key]) ? self::$lastClearTimePerProduct[$key] : null;
        if ($lastClearTime === null) {
            $lastClearTime = time();
            self::$lastClearTimePerProduct[$key] = $lastClearTime;
        }

        $now = time();
        $elapsedTime = $now - $lastClearTime;

        if ($elapsedTime > 3600) {
            $lastClearTime = time();
            self::$lastClearTimePerProduct[$key] = $lastClearTime;
            return true;
        }

        return false;
    }

    /**
     * @param $regionId
     * @param $serviceCode
     * @param $endPointType
     *
     * @return string|null
     * @throws ClientException
     */
    private function findProductDomainFromLocationService($regionId, $serviceCode, $endPointType)
    {
        $request = new DescribeEndpointRequest();
        $request->setId($regionId);
        $request->setServiceCode($serviceCode);
        $request->setType($endPointType);

        $signer = $this->clientProfile->getSigner();
        $credential = $this->clientProfile->getCredential();

        $requestUrl = $request->composeUrl($signer, $credential, self::$serviceDomain);

        $httpResponse = HttpHelper::curl($requestUrl, $request->getMethod(), null, $request->getHeaders());

        if (!$httpResponse->isSuccess()) {
            return null;
        }

        $respObj = json_decode($httpResponse->getBody());
        return $respObj->Endpoints->Endpoint[0]->Endpoint;
    }
}