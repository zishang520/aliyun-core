<?php
namespace luoyy\AliCore\Sts\Request;

use luoyy\AliCore\RpcAcsRequest;

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

class AssumeRoleRequest extends RpcAcsRequest
{

    /**
     * @var string
     */
    protected $requestScheme = 'https';

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Sts',
            '2015-04-01',
            'AssumeRole',
            'sts'
        );
    }

    /**
     * @param string $roleArn
     *
     * @return $this
     */
    public function setRoleArn($roleArn)
    {
        $this->requestParameters['RoleArn'] = $roleArn;
        $this->queryParameters['RoleArn'] = $roleArn;

        return $this;
    }

    /**
     * @param string $roleSessionName
     *
     * @return $this
     */
    public function setRoleSessionName($roleSessionName)
    {
        $this->requestParameters['RoleSessionName'] = $roleSessionName;
        $this->queryParameters['RoleSessionName'] = $roleSessionName;

        return $this;
    }

    /**
     * @param string $durationSeconds
     *
     * @return $this
     */
    public function setDurationSeconds($durationSeconds)
    {
        $this->requestParameters['DurationSeconds'] = $durationSeconds;
        $this->queryParameters['DurationSeconds'] = $durationSeconds;

        return $this;
    }

    /**
     * @param string $policy
     *
     * @return $this
     */
    public function setPolicy($policy)
    {
        $this->requestParameters['Policy'] = $policy;
        $this->queryParameters['Policy'] = $policy;

        return $this;
    }
}
