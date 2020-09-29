<?php
namespace luoyy\AliCore;

use luoyy\AliCore\AcsRequest;
use luoyy\AliCore\Auth\BearerTokenCredential;

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

abstract class RpcAcsRequest extends AcsRequest
{
    /**
     * @var string
     */
    private $dateTimeFormat = 'Y-m-d\TH:i:s\Z';
    /**
     * @var array
     */
    private $domainParameters = [];

    /**
     * RpcAcsRequest constructor.
     *
     * @param string      $product
     * @param string      $version
     * @param string      $actionName
     * @param string|null $locationServiceCode
     * @param string      $locationEndpointType
     */
    public function __construct($product, $version, $actionName, $locationServiceCode = null, $locationEndpointType = 'openAPI')
    {
        parent::__construct($product, $version, $actionName, $locationServiceCode, $locationEndpointType);
        $this->setMethod('GET');
        $this->setAcceptFormat('JSON');
    }

    /**
     * @param string|bool $value
     *
     * @return string
     */
    private function prepareValue($value)
    {
        return is_bool($value) ? json_encode($value) : $value;
    }

    /**
     * @param $iSigner
     * @param $credential
     * @param $domain
     *
     * @return bool|mixed|string
     */
    public function composeUrl($iSigner, $credential, $domain)
    {
        $apiParams = parent::getQueryParameters();
        foreach ($apiParams as $key => $value) {
            $apiParams[$key] = $this->prepareValue($value);
        }
        $apiParams['RegionId'] = $this->getRegionId();
        $apiParams['AccessKeyId'] = $credential->getAccessKeyId();
        $apiParams['Format'] = $this->getAcceptFormat();
        $apiParams['SignatureMethod'] = $iSigner->getSignatureMethod();
        $apiParams['SignatureVersion'] = $iSigner->getSignatureVersion();
        if ($iSigner->getSignatureType() != null) {
            $apiParams['SignatureType'] = $iSigner->getSignatureType();
        }
        $apiParams['SignatureNonce'] = md5(uniqid(mt_rand(), true));
        $apiParams['Timestamp'] = gmdate($this->dateTimeFormat);
        $apiParams['Action'] = $this->getActionName();
        $apiParams['Version'] = $this->getVersion();
        if ($credential->getSecurityToken() != null) {
            $apiParams['SecurityToken'] = $credential->getSecurityToken();
        }
        if ($credential instanceof BearerTokenCredential) {
            $apiParams['BearerToken'] = $credential->getBearerToken();
        }
        $apiParams['Signature'] = $this->computeSignature($apiParams, $credential->getAccessSecret(), $iSigner);
        if (parent::getMethod() === 'POST') {
            $requestUrl = $this->getProtocol() . '://' . $domain . '/';
            foreach ($apiParams as $apiParamKey => $apiParamValue) {
                $this->putDomainParameters($apiParamKey, $apiParamValue);
            }
            return $requestUrl;
        }

        $requestUrl = $this->getProtocol() . '://' . $domain . '/?';
        return $requestUrl . http_build_query($apiParams);
    }

    /**
     * @param $parameters
     * @param $accessKeySecret
     * @param $iSigner
     *
     * @return mixed
     */
    private function computeSignature($parameters, $accessKeySecret, $iSigner)
    {
        ksort($parameters);
        $stringToSign = parent::getMethod() . '&%2F&' . rawurlencode(http_build_query($parameters, '', '&', PHP_QUERY_RFC3986));
        return $iSigner->signString($stringToSign, $accessKeySecret . "&");
    }

    /**
     * @return array
     */
    public function getDomainParameter()
    {
        return $this->domainParameters;
    }

    /**
     * @param $name
     * @param $value
     */
    public function putDomainParameters($name, $value)
    {
        $this->domainParameters[$name] = $value;
    }
}
