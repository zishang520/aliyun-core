<?php
namespace luoyy\AliCore\Auth;

use luoyy\AliCore\Auth\Credential;
use luoyy\AliCore\Http\HttpHelper;
use luoyy\AliCore\Sts\Request\AssumeRoleRequest;

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

class RamRoleArnService
{
    /**
     * @var IClientProfile
     */
    private $clientProfile;
    /**
     * @var null|string
     */
    private $lastClearTime = null;
    /**
     * @var null|string
     */
    private $sessionCredential = null;
    /**
     * @var string
     */
    public static $serviceDomain = 'sts.aliyuncs.com';

    /**
     * RamRoleArnService constructor.
     *
     * @param $clientProfile
     */
    public function __construct($clientProfile)
    {
        $this->clientProfile = $clientProfile;
    }

    /**
     * @return Credential|string|null
     * @throws ClientException
     */
    public function getSessionCredential()
    {
        if ($this->lastClearTime != null && $this->sessionCredential != null) {
            $now = time();
            $elapsedTime = $now - $this->lastClearTime;
            if ($elapsedTime <= 3600 * 0.8) {
                return $this->sessionCredential;
            }
        }

        $credential = $this->assumeRole();

        if ($credential == null) {
            return null;
        }

        $this->sessionCredential = $credential;
        $this->lastClearTime = time();

        return $credential;
    }

    /**
     * @return Credential|null
     * @throws ClientException
     */
    private function assumeRole()
    {
        $signer = $this->clientProfile->getSigner();
        $ramRoleArnCredential = $this->clientProfile->getCredential();

        $request = new AssumeRoleRequest();
        $request->setRoleArn($ramRoleArnCredential->getRoleArn());
        $request->setRoleSessionName($ramRoleArnCredential->getRoleSessionName());
        $request->setDurationSeconds(3600);

        $requestUrl = $request->composeUrl($signer, $ramRoleArnCredential, self::$serviceDomain);

        $httpResponse = HttpHelper::curl($requestUrl, $request->getMethod(), null, $request->getHeaders());

        if (!$httpResponse->isSuccess()) {
            return null;
        }

        $respObj = json_decode($httpResponse->getBody());

        $sessionAccessKeyId = $respObj->Credentials->AccessKeyId;
        $sessionAccessKeySecret = $respObj->Credentials->AccessKeySecret;
        $securityToken = $respObj->Credentials->SecurityToken;
        return new Credential($sessionAccessKeyId, $sessionAccessKeySecret, $securityToken);
    }
}
