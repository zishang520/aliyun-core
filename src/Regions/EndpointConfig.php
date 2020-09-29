<?php
namespace luoyy\AliCore\Regions;

use luoyy\AliCore\Exception\ClientException;
use luoyy\AliCore\Regions\Endpoint;
use luoyy\AliCore\Regions\EndpointProvider;

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

class EndpointConfig
{
    private const ENDPOINTS = [
        'jp-fudao-1' => [
            'RegionIds' => [
                'jp-fudao-1'
            ],
            'productDomains' => [
                'Ecs' => 'ecs-cn-hangzhou.aliyuncs.com'
            ]
        ],
        'me-east-1' => [
            'RegionIds' => [
                'me-east-1'
            ],
            'productDomains' => [
                'Rds' => 'rds.me-east-1.aliyuncs.com',
                'Ecs' => 'ecs.me-east-1.aliyuncs.com',
                'Vpc' => 'vpc.me-east-1.aliyuncs.com',
                'Kms' => 'kms.me-east-1.aliyuncs.com',
                'Cms' => 'metrics.cn-hangzhou.aliyuncs.com',
                'Slb' => 'slb.me-east-1.aliyuncs.com'
            ]
        ],
        'us-east-1' => [
            'RegionIds' => [
                'us-east-1'
            ],
            'productDomains' => [
                'CS' => 'cs.aliyuncs.com',
                'Push' => 'cloudpush.aliyuncs.com',
                'COS' => 'cos.aliyuncs.com',
                'Ess' => 'ess.aliyuncs.com',
                'Ace-ops' => 'ace-ops.cn-hangzhou.aliyuncs.com',
                'Billing' => 'billing.aliyuncs.com',
                'Dqs' => 'dqs.aliyuncs.com',
                'Dds' => 'mongodb.aliyuncs.com',
                'Emr' => 'emr.aliyuncs.com',
                'Sms' => 'sms.aliyuncs.com',
                'Jaq' => 'jaq.aliyuncs.com',
                'HPC' => 'hpc.aliyuncs.com',
                'Location' => 'location.aliyuncs.com',
                'ChargingService' => 'chargingservice.aliyuncs.com',
                'Msg' => 'msg-inner.aliyuncs.com',
                'Commondriver' => 'common.driver.aliyuncs.com',
                'R-kvstore' => 'r-kvstore-cn-hangzhou.aliyuncs.com',
                'Bss' => 'bss.aliyuncs.com',
                'Workorder' => 'workorder.aliyuncs.com',
                'Ocs' => 'm-kvstore.aliyuncs.com',
                'Yundun' => 'yundun-cn-hangzhou.aliyuncs.com',
                'Ubsms-inner' => 'ubsms-inner.aliyuncs.com',
                'Dm' => 'dm.aliyuncs.com',
                'Green' => 'green.aliyuncs.com',
                'Risk' => 'risk-cn-hangzhou.aliyuncs.com',
                'oceanbase' => 'oceanbase.aliyuncs.com',
                'Msc' => 'msc-inner.aliyuncs.com',
                'Yundunhsm' => 'yundunhsm.aliyuncs.com',
                'Iot' => 'iot.us-east-1.aliyuncs.com',
                'jaq' => 'jaq.aliyuncs.com',
                'Oms' => 'oms.aliyuncs.com',
                'live' => 'live.aliyuncs.com',
                'Ecs' => 'ecs-cn-hangzhou.aliyuncs.com',
                'Ubsms' => 'ubsms.aliyuncs.com',
                'Vpc' => 'vpc.aliyuncs.com',
                'Alert' => 'alert.aliyuncs.com',
                'Ace' => 'ace.cn-hangzhou.aliyuncs.com',
                'AMS' => 'ams.aliyuncs.com',
                'ROS' => 'ros.aliyuncs.com',
                'PTS' => 'pts.aliyuncs.com',
                'Qualitycheck' => 'qualitycheck.aliyuncs.com',
                'M-kvstore' => 'm-kvstore.aliyuncs.com',
                'HighDDos' => 'yd-highddos-cn-hangzhou.aliyuncs.com',
                'CmsSiteMonitor' => 'sitemonitor.aliyuncs.com',
                'Rds' => 'rds.aliyuncs.com',
                'BatchCompute' => 'batchCompute.aliyuncs.com',
                'CF' => 'cf.aliyuncs.com',
                'Drds' => 'drds.aliyuncs.com',
                'Acs' => 'acs.aliyun-inc.com',
                'Httpdns' => 'httpdns-api.aliyuncs.com',
                'Location-inner' => 'location-inner.aliyuncs.com',
                'Aas' => 'aas.aliyuncs.com',
                'Sts' => 'sts.aliyuncs.com',
                'Dts' => 'dts.aliyuncs.com',
                'Drc' => 'drc.aliyuncs.com',
                'Vpc-inner' => 'vpc-inner.aliyuncs.com',
                'Cms' => 'metrics.cn-hangzhou.aliyuncs.com',
                'Slb' => 'slb.aliyuncs.com',
                'Crm' => 'crm-cn-hangzhou.aliyuncs.com',
                'Domain' => 'domain.aliyuncs.com',
                'Ots' => 'ots-pop.aliyuncs.com',
                'Oss' => 'oss-cn-hangzhou.aliyuncs.com',
                'Ram' => 'ram.aliyuncs.com',
                'Sales' => 'sales.cn-hangzhou.aliyuncs.com',
                'OssAdmin' => 'oss-admin.aliyuncs.com',
                'Alidns' => 'alidns.aliyuncs.com',
                'Ons' => 'ons.aliyuncs.com',
                'Cdn' => 'cdn.aliyuncs.com',
                'YundunDdos' => 'inner-yundun-ddos.cn-hangzhou.aliyuncs.com'
            ]
        ],
        'ap-northeast-1' => [
            'RegionIds' => [
                'ap-northeast-1'
            ],
            'productDomains' => [
                'Rds' => 'rds.ap-northeast-1.aliyuncs.com',
                'Kms' => 'kms.ap-northeast-1.aliyuncs.com',
                'Vpc' => 'vpc.ap-northeast-1.aliyuncs.com',
                'Ecs' => 'ecs.ap-northeast-1.aliyuncs.com',
                'Cms' => 'metrics.ap-northeast-1.aliyuncs.com',
                'Kvstore' => 'r-kvstore.ap-northeast-1.aliyuncs.com',
                'Slb' => 'slb.ap-northeast-1.aliyuncs.com',
                'Iot' => 'iot.ap-northeast-1.aliyuncs.com'
            ]
        ],
        'cn-hangzhou-bj-b01' => [
            'RegionIds' => [
                'cn-hangzhou-bj-b01'
            ],
            'productDomains' => [
                'Ecs' => 'ecs-cn-hangzhou.aliyuncs.com'
            ]
        ],
        'cn-hongkong' => [
            'RegionIds' => [
                'cn-hongkong'
            ],
            'productDomains' => [
                'Push' => 'cloudpush.aliyuncs.com',
                'COS' => 'cos.aliyuncs.com',
                'Ons' => 'ons.aliyuncs.com',
                'Ess' => 'ess.aliyuncs.com',
                'Ace-ops' => 'ace-ops.cn-hangzhou.aliyuncs.com',
                'Billing' => 'billing.aliyuncs.com',
                'Dqs' => 'dqs.aliyuncs.com',
                'Dds' => 'mongodb.aliyuncs.com',
                'Emr' => 'emr.aliyuncs.com',
                'Sms' => 'sms.aliyuncs.com',
                'Jaq' => 'jaq.aliyuncs.com',
                'CS' => 'cs.aliyuncs.com',
                'Kms' => 'kms.cn-hongkong.aliyuncs.com',
                'Location' => 'location.aliyuncs.com',
                'Msg' => 'msg-inner.aliyuncs.com',
                'ChargingService' => 'chargingservice.aliyuncs.com',
                'R-kvstore' => 'r-kvstore-cn-hangzhou.aliyuncs.com',
                'Alert' => 'alert.aliyuncs.com',
                'Msc' => 'msc-inner.aliyuncs.com',
                'Drc' => 'drc.aliyuncs.com',
                'Yundun' => 'yundun-cn-hangzhou.aliyuncs.com',
                'Ubsms-inner' => 'ubsms-inner.aliyuncs.com',
                'Ocs' => 'm-kvstore.aliyuncs.com',
                'Dm' => 'dm.aliyuncs.com',
                'Risk' => 'risk-cn-hangzhou.aliyuncs.com',
                'oceanbase' => 'oceanbase.aliyuncs.com',
                'Workorder' => 'workorder.aliyuncs.com',
                'Yundunhsm' => 'yundunhsm.aliyuncs.com',
                'Iot' => 'iot.aliyuncs.com',
                'HPC' => 'hpc.aliyuncs.com',
                'jaq' => 'jaq.aliyuncs.com',
                'Oms' => 'oms.aliyuncs.com',
                'live' => 'live.aliyuncs.com',
                'Ecs' => 'ecs-cn-hangzhou.aliyuncs.com',
                'M-kvstore' => 'm-kvstore.aliyuncs.com',
                'Vpc' => 'vpc.aliyuncs.com',
                'BatchCompute' => 'batchCompute.aliyuncs.com',
                'AMS' => 'ams.aliyuncs.com',
                'ROS' => 'ros.aliyuncs.com',
                'PTS' => 'pts.aliyuncs.com',
                'Qualitycheck' => 'qualitycheck.aliyuncs.com',
                'Bss' => 'bss.aliyuncs.com',
                'Ubsms' => 'ubsms.aliyuncs.com',
                'CloudAPI' => 'apigateway.cn-hongkong.aliyuncs.com',
                'Sts' => 'sts.aliyuncs.com',
                'CmsSiteMonitor' => 'sitemonitor.aliyuncs.com',
                'Ace' => 'ace.cn-hangzhou.aliyuncs.com',
                'Mts' => 'mts.cn-hongkong.aliyuncs.com',
                'Location-inner' => 'location-inner.aliyuncs.com',
                'CF' => 'cf.aliyuncs.com',
                'Acs' => 'acs.aliyun-inc.com',
                'Httpdns' => 'httpdns-api.aliyuncs.com',
                'Green' => 'green.aliyuncs.com',
                'Aas' => 'aas.aliyuncs.com',
                'Alidns' => 'alidns.aliyuncs.com',
                'Dts' => 'dts.aliyuncs.com',
                'HighDDos' => 'yd-highddos-cn-hangzhou.aliyuncs.com',
                'Vpc-inner' => 'vpc-inner.aliyuncs.com',
                'Cms' => 'metrics.cn-hangzhou.aliyuncs.com',
                'Slb' => 'slb.aliyuncs.com',
                'Commondriver' => 'common.driver.aliyuncs.com',
                'Domain' => 'domain.aliyuncs.com',
                'Ots' => 'ots-pop.aliyuncs.com',
                'Cdn' => 'cdn.aliyuncs.com',
                'Ram' => 'ram.aliyuncs.com',
                'Drds' => 'drds.aliyuncs.com',
                'Rds' => 'rds.aliyuncs.com',
                'Crm' => 'crm-cn-hangzhou.aliyuncs.com',
                'OssAdmin' => 'oss-admin.aliyuncs.com',
                'Sales' => 'sales.cn-hangzhou.aliyuncs.com',
                'YundunDdos' => 'inner-yundun-ddos.cn-hangzhou.aliyuncs.com',
                'Oss' => 'oss-cn-hongkong.aliyuncs.com'
            ]
        ],
        'cn-beijing-nu16-b01' => [
            'RegionIds' => [
                'cn-beijing-nu16-b01'
            ],
            'productDomains' => [
                'Ecs' => 'ecs-cn-hangzhou.aliyuncs.com'
            ]
        ],
        'cn-beijing-am13-c01' => [
            'RegionIds' => [
                'cn-beijing-am13-c01'
            ],
            'productDomains' => [
                'Ecs' => 'ecs-cn-hangzhou.aliyuncs.com',
                'Vpc' => 'vpc.aliyuncs.com'
            ]
        ],
        'in-west-antgroup-1' => [
            'RegionIds' => [
                'in-west-antgroup-1'
            ],
            'productDomains' => [
                'Ecs' => 'ecs-cn-hangzhou.aliyuncs.com'
            ]
        ],
        'cn-guizhou-gov' => [
            'RegionIds' => [
                'cn-guizhou-gov'
            ],
            'productDomains' => [
                'Ecs' => 'ecs-cn-hangzhou.aliyuncs.com',
                'Vpc' => 'vpc.aliyuncs.com'
            ]
        ],
        'in-west-antgroup-2' => [
            'RegionIds' => [
                'in-west-antgroup-2'
            ],
            'productDomains' => [
                'Ecs' => 'ecs-cn-hangzhou.aliyuncs.com'
            ]
        ],
        'cn-qingdao-cm9' => [
            'RegionIds' => [
                'cn-qingdao-cm9'
            ],
            'productDomains' => [
                'CS' => 'cs.aliyuncs.com',
                'Risk' => 'risk-cn-hangzhou.aliyuncs.com',
                'COS' => 'cos.aliyuncs.com',
                'Ess' => 'ess.aliyuncs.com',
                'Billing' => 'billing.aliyuncs.com',
                'Dqs' => 'dqs.aliyuncs.com',
                'Dds' => 'mongodb.aliyuncs.com',
                'Alidns' => 'alidns.aliyuncs.com',
                'Sms' => 'sms.aliyuncs.com',
                'Drds' => 'drds.aliyuncs.com',
                'HPC' => 'hpc.aliyuncs.com',
                'Location' => 'location.aliyuncs.com',
                'Msg' => 'msg-inner.aliyuncs.com',
                'ChargingService' => 'chargingservice.aliyuncs.com',
                'Ocs' => 'm-kvstore.aliyuncs.com',
                'Alert' => 'alert.aliyuncs.com',
                'Msc' => 'msc-inner.aliyuncs.com',
                'HighDDos' => 'yd-highddos-cn-hangzhou.aliyuncs.com',
                'R-kvstore' => 'r-kvstore-cn-hangzhou.aliyuncs.com',
                'Yundun' => 'yundun-cn-hangzhou.aliyuncs.com',
                'Ubsms-inner' => 'ubsms-inner.aliyuncs.com',
                'Dm' => 'dm.aliyuncs.com',
                'Green' => 'green.aliyuncs.com',
                'YundunDdos' => 'inner-yundun-ddos.cn-hangzhou.aliyuncs.com',
                'oceanbase' => 'oceanbase.aliyuncs.com',
                'Workorder' => 'workorder.aliyuncs.com',
                'Yundunhsm' => 'yundunhsm.aliyuncs.com',
                'Iot' => 'iot.aliyuncs.com',
                'jaq' => 'jaq.aliyuncs.com',
                'Oms' => 'oms.aliyuncs.com',
                'live' => 'live.aliyuncs.com',
                'Ecs' => 'ecs-cn-hangzhou.aliyuncs.com',
                'Ubsms' => 'ubsms.aliyuncs.com',
                'CmsSiteMonitor' => 'sitemonitor.aliyuncs.com',
                'AMS' => 'ams.aliyuncs.com',
                'Crm' => 'crm-cn-hangzhou.aliyuncs.com',
                'PTS' => 'pts.aliyuncs.com',
                'Qualitycheck' => 'qualitycheck.aliyuncs.com',
                'Bss' => 'bss.aliyuncs.com',
                'M-kvstore' => 'm-kvstore.aliyuncs.com',
                'Ace' => 'ace.cn-hangzhou.aliyuncs.com',
                'Mts' => 'mts.cn-qingdao.aliyuncs.com',
                'CF' => 'cf.aliyuncs.com',
                'Httpdns' => 'httpdns-api.aliyuncs.com',
                'Location-inner' => 'location-inner.aliyuncs.com',
                'Aas' => 'aas.aliyuncs.com',
                'Sts' => 'sts.aliyuncs.com',
                'Dts' => 'dts.aliyuncs.com',
                'Emr' => 'emr.aliyuncs.com',
                'Drc' => 'drc.aliyuncs.com',
                'Push' => 'cloudpush.aliyuncs.com',
                'Cms' => 'metrics.aliyuncs.com',
                'Slb' => 'slb.aliyuncs.com',
                'Commondriver' => 'common.driver.aliyuncs.com',
                'Domain' => 'domain.aliyuncs.com',
                'Ots' => 'ots-pop.aliyuncs.com',
                'ROS' => 'ros.aliyuncs.com',
                'Oss' => 'oss-cn-hangzhou.aliyuncs.com',
                'Ram' => 'ram.aliyuncs.com',
                'Sales' => 'sales.cn-hangzhou.aliyuncs.com',
                'Rds' => 'rds.aliyuncs.com',
                'OssAdmin' => 'oss-admin.aliyuncs.com',
                'Ons' => 'ons.aliyuncs.com',
                'Cdn' => 'cdn.aliyuncs.com'
            ]
        ],
        'tw-snowcloud-kaohsiung' => [
            'RegionIds' => [
                'tw-snowcloud-kaohsiung'
            ],
            'productDomains' => [
                'Ecs' => 'ecs-cn-hangzhou.aliyuncs.com'
            ]
        ],
        'cn-shanghai-finance-1' => [
            'RegionIds' => [
                'cn-shanghai-finance-1'
            ],
            'productDomains' => [
                'Kms' => 'kms.cn-shanghai-finance-1.aliyuncs.com',
                'Ecs' => 'ecs-cn-hangzhou.aliyuncs.com',
                'Vpc' => 'vpc.aliyuncs.com',
                'Rds' => 'rds.aliyuncs.com'
            ]
        ],
        'cn-guizhou' => [
            'RegionIds' => [
                'cn-guizhou'
            ],
            'productDomains' => [
                'Ecs' => 'ecs-cn-hangzhou.aliyuncs.com',
                'Vpc' => 'vpc.aliyuncs.com'
            ]
        ],
        'cn-qingdao-finance' => [
            'RegionIds' => [
                'cn-qingdao-finance'
            ],
            'productDomains' => [
                'Oss' => 'oss-cn-qdjbp-a.aliyuncs.com'
            ]
        ],
        'cn-beijing-gov-1' => [
            'RegionIds' => [
                'cn-beijing-gov-1'
            ],
            'productDomains' => [
                'Oss' => 'oss-cn-haidian-a.aliyuncs.com',
                'Rds' => 'rds.aliyuncs.com'
            ]
        ],
        'cn-shanghai' => [
            'RegionIds' => [
                'cn-shanghai'
            ],
            'productDomains' => [
                'CCC' => 'ccc.cn-shanghai.aliyuncs.com',
                'saf' => 'saf.cn-shanghai.aliyuncs.com',
                'ARMS' => 'arms.cn-shanghai.aliyuncs.com',
                'Risk' => 'risk-cn-hangzhou.aliyuncs.com',
                'COS' => 'cos.aliyuncs.com',
                'HPC' => 'hpc.aliyuncs.com',
                'Billing' => 'billing.aliyuncs.com',
                'Dqs' => 'dqs.aliyuncs.com',
                'Drc' => 'drc.aliyuncs.com',
                'Alidns' => 'alidns.aliyuncs.com',
                'Sms' => 'sms.aliyuncs.com',
                'Drds' => 'drds.aliyuncs.com',
                'CS' => 'cs.aliyuncs.com',
                'Kms' => 'kms.cn-shanghai.aliyuncs.com',
                'Location' => 'location.aliyuncs.com',
                'Msg' => 'msg-inner.aliyuncs.com',
                'ChargingService' => 'chargingservice.aliyuncs.com',
                'Ocs' => 'm-kvstore.aliyuncs.com',
                'Alert' => 'alert.aliyuncs.com',
                'Msc' => 'msc-inner.aliyuncs.com',
                'R-kvstore' => 'r-kvstore-cn-hangzhou.aliyuncs.com',
                'Yundun' => 'yundun-cn-hangzhou.aliyuncs.com',
                'Ubsms-inner' => 'ubsms-inner.aliyuncs.com',
                'Dm' => 'dm.aliyuncs.com',
                'Green' => 'green.cn-shanghai.aliyuncs.com',
                'Commondriver' => 'common.driver.aliyuncs.com',
                'oceanbase' => 'oceanbase.aliyuncs.com',
                'Workorder' => 'workorder.aliyuncs.com',
                'Yundunhsm' => 'yundunhsm.aliyuncs.com',
                'Iot' => 'iot.cn-shanghai.aliyuncs.com',
                'Bss' => 'bss.aliyuncs.com',
                'Oms' => 'oms.aliyuncs.com',
                'Ubsms' => 'ubsms.aliyuncs.com',
                'live' => 'live.aliyuncs.com',
                'Ecs' => 'ecs-cn-hangzhou.aliyuncs.com',
                'Ace-ops' => 'ace-ops.cn-hangzhou.aliyuncs.com',
                'CmsSiteMonitor' => 'sitemonitor.aliyuncs.com',
                'BatchCompute' => 'batchCompute.aliyuncs.com',
                'AMS' => 'ams.aliyuncs.com',
                'ROS' => 'ros.aliyuncs.com',
                'PTS' => 'pts.aliyuncs.com',
                'Qualitycheck' => 'qualitycheck.aliyuncs.com',
                'M-kvstore' => 'm-kvstore.aliyuncs.com',
                'Apigateway' => 'apigateway.cn-shanghai.aliyuncs.com',
                'CloudAPI' => 'apigateway.cn-shanghai.aliyuncs.com',
                'Sts' => 'sts.aliyuncs.com',
                'Vpc' => 'vpc.aliyuncs.com',
                'Ace' => 'ace.cn-hangzhou.aliyuncs.com',
                'Mts' => 'mts.cn-shanghai.aliyuncs.com',
                'Dds' => 'mongodb.aliyuncs.com',
                'CF' => 'cf.aliyuncs.com',
                'Acs' => 'acs.aliyun-inc.com',
                'Httpdns' => 'httpdns-api.aliyuncs.com',
                'Push' => 'cloudpush.aliyuncs.com',
                'Location-inner' => 'location-inner.aliyuncs.com',
                'Aas' => 'aas.aliyuncs.com',
                'Emr' => 'emr.aliyuncs.com',
                'Dts' => 'dts.aliyuncs.com',
                'HighDDos' => 'yd-highddos-cn-hangzhou.aliyuncs.com',
                'Jaq' => 'jaq.aliyuncs.com',
                'Cms' => 'metrics.cn-hangzhou.aliyuncs.com',
                'Slb' => 'slb.aliyuncs.com',
                'Crm' => 'crm-cn-hangzhou.aliyuncs.com',
                'Domain' => 'domain.aliyuncs.com',
                'Ots' => 'ots-pop.aliyuncs.com',
                'jaq' => 'jaq.aliyuncs.com',
                'Cdn' => 'cdn.aliyuncs.com',
                'Ram' => 'ram.aliyuncs.com',
                'Sales' => 'sales.cn-hangzhou.aliyuncs.com',
                'Vpc-inner' => 'vpc-inner.aliyuncs.com',
                'Rds' => 'rds.aliyuncs.com',
                'OssAdmin' => 'oss-admin.aliyuncs.com',
                'Ons' => 'ons.aliyuncs.com',
                'Ess' => 'ess.aliyuncs.com',
                'Oss' => 'oss-cn-shanghai.aliyuncs.com',
                'YundunDdos' => 'inner-yundun-ddos.cn-hangzhou.aliyuncs.com',
                'vod' => 'vod.cn-shanghai.aliyuncs.com'
            ]
        ],
        'cn-shenzhen-inner' => [
            'RegionIds' => [
                'cn-shenzhen-inner'
            ],
            'productDomains' => [
                'Risk' => 'risk-cn-hangzhou.aliyuncs.com',
                'COS' => 'cos.aliyuncs.com',
                'Ons' => 'ons.aliyuncs.com',
                'Ess' => 'ess.aliyuncs.com',
                'Billing' => 'billing.aliyuncs.com',
                'Dqs' => 'dqs.aliyuncs.com',
                'Dds' => 'mongodb.aliyuncs.com',
                'Alidns' => 'alidns.aliyuncs.com',
                'Sms' => 'sms.aliyuncs.com',
                'Sales' => 'sales.cn-hangzhou.aliyuncs.com',
                'HPC' => 'hpc.aliyuncs.com',
                'Location' => 'location.aliyuncs.com',
                'Msg' => 'msg-inner.aliyuncs.com',
                'ChargingService' => 'chargingservice.aliyuncs.com',
                'Ocs' => 'm-kvstore.aliyuncs.com',
                'jaq' => 'jaq.aliyuncs.com',
                'Msc' => 'msc-inner.aliyuncs.com',
                'HighDDos' => 'yd-highddos-cn-hangzhou.aliyuncs.com',
                'R-kvstore' => 'r-kvstore-cn-hangzhou.aliyuncs.com',
                'Bss' => 'bss.aliyuncs.com',
                'Ubsms-inner' => 'ubsms-inner.aliyuncs.com',
                'Dm' => 'dm.aliyuncs.com',
                'Commondriver' => 'common.driver.aliyuncs.com',
                'oceanbase' => 'oceanbase.aliyuncs.com',
                'Workorder' => 'workorder.aliyuncs.com',
                'Yundunhsm' => 'yundunhsm.aliyuncs.com',
                'Iot' => 'iot.aliyuncs.com',
                'Alert' => 'alert.aliyuncs.com',
                'Oms' => 'oms.aliyuncs.com',
                'live' => 'live.aliyuncs.com',
                'Ecs' => 'ecs-cn-hangzhou.aliyuncs.com',
                'Ubsms' => 'ubsms.aliyuncs.com',
                'CmsSiteMonitor' => 'sitemonitor.aliyuncs.com',
                'AMS' => 'ams.aliyuncs.com',
                'Crm' => 'crm-cn-hangzhou.aliyuncs.com',
                'PTS' => 'pts.aliyuncs.com',
                'Qualitycheck' => 'qualitycheck.aliyuncs.com',
                'M-kvstore' => 'm-kvstore.aliyuncs.com',
                'Sts' => 'sts.aliyuncs.com',
                'Ace' => 'ace.cn-hangzhou.aliyuncs.com',
                'Mts' => 'mts.cn-shenzhen.aliyuncs.com',
                'CF' => 'cf.aliyuncs.com',
                'Httpdns' => 'httpdns-api.aliyuncs.com',
                'Green' => 'green.aliyuncs.com',
                'Aas' => 'aas.aliyuncs.com',
                'Emr' => 'emr.aliyuncs.com',
                'CS' => 'cs.aliyuncs.com',
                'Drc' => 'drc.aliyuncs.com',
                'Push' => 'cloudpush.aliyuncs.com',
                'Cms' => 'metrics.aliyuncs.com',
                'Slb' => 'slb.aliyuncs.com',
                'YundunDdos' => 'inner-yundun-ddos.cn-hangzhou.aliyuncs.com',
                'Dts' => 'dts.aliyuncs.com',
                'Domain' => 'domain.aliyuncs.com',
                'Ots' => 'ots-pop.aliyuncs.com',
                'ROS' => 'ros.aliyuncs.com',
                'Cdn' => 'cdn.aliyuncs.com',
                'Ram' => 'ram.aliyuncs.com',
                'Drds' => 'drds.aliyuncs.com',
                'Rds' => 'rds.aliyuncs.com',
                'OssAdmin' => 'oss-admin.aliyuncs.com',
                'Location-inner' => 'location-inner.aliyuncs.com',
                'Yundun' => 'yundun-cn-hangzhou.aliyuncs.com',
                'Oss' => 'oss-cn-hangzhou.aliyuncs.com'
            ]
        ],
        'cn-fujian' => [
            'RegionIds' => [
                'cn-fujian'
            ],
            'productDomains' => [
                'Ecs' => 'ecs-cn-hangzhou.aliyuncs.com',
                'Rds' => 'rds.aliyuncs.com'
            ]
        ],
        'in-mumbai-alipay' => [
            'RegionIds' => [
                'in-mumbai-alipay'
            ],
            'productDomains' => [
                'Ecs' => 'ecs-cn-hangzhou.aliyuncs.com'
            ]
        ],
        'us-west-1' => [
            'RegionIds' => [
                'us-west-1'
            ],
            'productDomains' => [
                'CS' => 'cs.aliyuncs.com',
                'COS' => 'cos.aliyuncs.com',
                'Ess' => 'ess.aliyuncs.com',
                'Ace-ops' => 'ace-ops.cn-hangzhou.aliyuncs.com',
                'Billing' => 'billing.aliyuncs.com',
                'Dqs' => 'dqs.aliyuncs.com',
                'Dds' => 'mongodb.aliyuncs.com',
                'Sts' => 'sts.aliyuncs.com',
                'Sms' => 'sms.aliyuncs.com',
                'Jaq' => 'jaq.aliyuncs.com',
                'Push' => 'cloudpush.aliyuncs.com',
                'Alidns' => 'alidns.aliyuncs.com',
                'Location' => 'location.aliyuncs.com',
                'Msg' => 'msg-inner.aliyuncs.com',
                'ChargingService' => 'chargingservice.aliyuncs.com',
                'Ocs' => 'm-kvstore.aliyuncs.com',
                'Bss' => 'bss.aliyuncs.com',
                'Msc' => 'msc-inner.aliyuncs.com',
                'R-kvstore' => 'r-kvstore-cn-hangzhou.aliyuncs.com',
                'Yundun' => 'yundun-cn-hangzhou.aliyuncs.com',
                'Ubsms-inner' => 'ubsms-inner.aliyuncs.com',
                'Dm' => 'dm.aliyuncs.com',
                'Green' => 'green.aliyuncs.com',
                'Risk' => 'risk-cn-hangzhou.aliyuncs.com',
                'oceanbase' => 'oceanbase.aliyuncs.com',
                'Workorder' => 'workorder.aliyuncs.com',
                'Yundunhsm' => 'yundunhsm.aliyuncs.com',
                'Iot' => 'iot.us-west-1.aliyuncs.com',
                'Alert' => 'alert.aliyuncs.com',
                'Oms' => 'oms.aliyuncs.com',
                'live' => 'live.aliyuncs.com',
                'Ecs' => 'ecs-cn-hangzhou.aliyuncs.com',
                'M-kvstore' => 'm-kvstore.aliyuncs.com',
                'Vpc' => 'vpc.aliyuncs.com',
                'BatchCompute' => 'batchCompute.aliyuncs.com',
                'Ace' => 'ace.cn-hangzhou.aliyuncs.com',
                'AMS' => 'ams.aliyuncs.com',
                'ROS' => 'ros.aliyuncs.com',
                'PTS' => 'pts.aliyuncs.com',
                'Qualitycheck' => 'qualitycheck.aliyuncs.com',
                'Ubsms' => 'ubsms.aliyuncs.com',
                'HighDDos' => 'yd-highddos-cn-hangzhou.aliyuncs.com',
                'CmsSiteMonitor' => 'sitemonitor.aliyuncs.com',
                'Rds' => 'rds.aliyuncs.com',
                'Mts' => 'mts.us-west-1.aliyuncs.com',
                'CF' => 'cf.aliyuncs.com',
                'Acs' => 'acs.aliyun-inc.com',
                'Httpdns' => 'httpdns-api.aliyuncs.com',
                'Location-inner' => 'location-inner.aliyuncs.com',
                'Aas' => 'aas.aliyuncs.com',
                'Emr' => 'emr.aliyuncs.com',
                'HPC' => 'hpc.aliyuncs.com',
                'Drc' => 'drc.aliyuncs.com',
                'Vpc-inner' => 'vpc-inner.aliyuncs.com',
                'Cms' => 'metrics.cn-hangzhou.aliyuncs.com',
                'Slb' => 'slb.aliyuncs.com',
                'Crm' => 'crm-cn-hangzhou.aliyuncs.com',
                'Dts' => 'dts.aliyuncs.com',
                'Domain' => 'domain.aliyuncs.com',
                'Ots' => 'ots-pop.aliyuncs.com',
                'Commondriver' => 'common.driver.aliyuncs.com',
                'jaq' => 'jaq.aliyuncs.com',
                'Cdn' => 'cdn.aliyuncs.com',
                'Ram' => 'ram.aliyuncs.com',
                'Drds' => 'drds.aliyuncs.com',
                'OssAdmin' => 'oss-admin.aliyuncs.com',
                'Sales' => 'sales.cn-hangzhou.aliyuncs.com',
                'Ons' => 'ons.aliyuncs.com',
                'Oss' => 'oss-us-west-1.aliyuncs.com',
                'YundunDdos' => 'inner-yundun-ddos.cn-hangzhou.aliyuncs.com'
            ]
        ],
        'cn-shanghai-inner' => [
            'RegionIds' => [
                'cn-shanghai-inner'
            ],
            'productDomains' => [
                'CS' => 'cs.aliyuncs.com',
                'COS' => 'cos.aliyuncs.com',
                'Ess' => 'ess.aliyuncs.com',
                'Billing' => 'billing.aliyuncs.com',
                'Dqs' => 'dqs.aliyuncs.com',
                'Dds' => 'mongodb.aliyuncs.com',
                'Emr' => 'emr.aliyuncs.com',
                'Sms' => 'sms.aliyuncs.com',
                'Drds' => 'drds.aliyuncs.com',
                'HPC' => 'hpc.aliyuncs.com',
                'Location' => 'location.aliyuncs.com',
                'ChargingService' => 'chargingservice.aliyuncs.com',
                'Msg' => 'msg-inner.aliyuncs.com',
                'Commondriver' => 'common.driver.aliyuncs.com',
                'R-kvstore' => 'r-kvstore-cn-hangzhou.aliyuncs.com',
                'jaq' => 'jaq.aliyuncs.com',
                'Msc' => 'msc-inner.aliyuncs.com',
                'Ocs' => 'm-kvstore.aliyuncs.com',
                'Yundun' => 'yundun-cn-hangzhou.aliyuncs.com',
                'Ubsms-inner' => 'ubsms-inner.aliyuncs.com',
                'Dm' => 'dm.aliyuncs.com',
                'Green' => 'green.aliyuncs.com',
                'Risk' => 'risk-cn-hangzhou.aliyuncs.com',
                'oceanbase' => 'oceanbase.aliyuncs.com',
                'Workorder' => 'workorder.aliyuncs.com',
                'Yundunhsm' => 'yundunhsm.aliyuncs.com',
                'Iot' => 'iot.aliyuncs.com',
                'Bss' => 'bss.aliyuncs.com',
                'Oms' => 'oms.aliyuncs.com',
                'live' => 'live.aliyuncs.com',
                'Ecs' => 'ecs-cn-hangzhou.aliyuncs.com',
                'M-kvstore' => 'm-kvstore.aliyuncs.com',
                'CmsSiteMonitor' => 'sitemonitor.aliyuncs.com',
                'Alert' => 'alert.aliyuncs.com',
                'Ace' => 'ace.cn-hangzhou.aliyuncs.com',
                'AMS' => 'ams.aliyuncs.com',
                'ROS' => 'ros.aliyuncs.com',
                'PTS' => 'pts.aliyuncs.com',
                'Qualitycheck' => 'qualitycheck.aliyuncs.com',
                'Ubsms' => 'ubsms.aliyuncs.com',
                'HighDDos' => 'yd-highddos-cn-hangzhou.aliyuncs.com',
                'Rds' => 'rds.aliyuncs.com',
                'Mts' => 'mts.cn-shanghai.aliyuncs.com',
                'CF' => 'cf.aliyuncs.com',
                'Httpdns' => 'httpdns-api.aliyuncs.com',
                'Location-inner' => 'location-inner.aliyuncs.com',
                'Aas' => 'aas.aliyuncs.com',
                'Sts' => 'sts.aliyuncs.com',
                'Dts' => 'dts.aliyuncs.com',
                'Drc' => 'drc.aliyuncs.com',
                'Push' => 'cloudpush.aliyuncs.com',
                'Cms' => 'metrics.aliyuncs.com',
                'Slb' => 'slb.aliyuncs.com',
                'YundunDdos' => 'inner-yundun-ddos.cn-hangzhou.aliyuncs.com',
                'Domain' => 'domain.aliyuncs.com',
                'Ots' => 'ots-pop.aliyuncs.com',
                'Oss' => 'oss-cn-hangzhou.aliyuncs.com',
                'Ram' => 'ram.aliyuncs.com',
                'Sales' => 'sales.cn-hangzhou.aliyuncs.com',
                'Crm' => 'crm-cn-hangzhou.aliyuncs.com',
                'OssAdmin' => 'oss-admin.aliyuncs.com',
                'Alidns' => 'alidns.aliyuncs.com',
                'Ons' => 'ons.aliyuncs.com',
                'Cdn' => 'cdn.aliyuncs.com'
            ]
        ],
        'cn-anhui-gov-1' => [
            'RegionIds' => [
                'cn-anhui-gov-1'
            ],
            'productDomains' => [
                'Ecs' => 'ecs-cn-hangzhou.aliyuncs.com'
            ]
        ],
        'cn-hangzhou-finance' => [
            'RegionIds' => [
                'cn-hangzhou-finance'
            ],
            'productDomains' => [
                'Oss' => 'oss-cn-hzjbp-b-console.aliyuncs.com'
            ]
        ],
        'cn-hangzhou' => [
            'RegionIds' => [
                'cn-hangzhou'
            ],
            'productDomains' => [
                'afs' => 'afs.aliyuncs.com',
                'ARMS' => 'arms.cn-hangzhou.aliyuncs.com',
                'CS' => 'cs.aliyuncs.com',
                'COS' => 'cos.aliyuncs.com',
                'Ess' => 'ess.aliyuncs.com',
                'Ace-ops' => 'ace-ops.cn-hangzhou.aliyuncs.com',
                'Billing' => 'billing.aliyuncs.com',
                'Dqs' => 'dqs.aliyuncs.com',
                'Dds' => 'mongodb.aliyuncs.com',
                'Sts' => 'sts.aliyuncs.com',
                'Sms' => 'sms.aliyuncs.com',
                'Msg' => 'msg-inner.aliyuncs.com',
                'Jaq' => 'jaq.aliyuncs.com',
                'Push' => 'cloudpush.aliyuncs.com',
                'Live' => 'live.aliyuncs.com',
                'Kms' => 'kms.cn-hangzhou.aliyuncs.com',
                'Location' => 'location.aliyuncs.com',
                'Hpc' => 'hpc.aliyuncs.com',
                'ChargingService' => 'chargingservice.aliyuncs.com',
                'R-kvstore' => 'r-kvstore-cn-hangzhou.aliyuncs.com',
                'Alert' => 'alert.aliyuncs.com',
                'Msc' => 'msc-inner.aliyuncs.com',
                'Drc' => 'drc.aliyuncs.com',
                'Yundun' => 'yundun-cn-hangzhou.aliyuncs.com',
                'Ubsms-inner' => 'ubsms-inner.aliyuncs.com',
                'Ocs' => 'm-kvstore.aliyuncs.com',
                'Dm' => 'dm.aliyuncs.com',
                'Green' => 'green.cn-hangzhou.aliyuncs.com',
                'Commondriver' => 'common.driver.aliyuncs.com',
                'oceanbase' => 'oceanbase.aliyuncs.com',
                'Workorder' => 'workorder.aliyuncs.com',
                'Yundunhsm' => 'yundunhsm.aliyuncs.com',
                'Iot' => 'iot.aliyuncs.com',
                'jaq' => 'jaq.aliyuncs.com',
                'Oms' => 'oms.aliyuncs.com',
                'live' => 'live.aliyuncs.com',
                'Ecs' => 'ecs-cn-hangzhou.aliyuncs.com',
                'M-kvstore' => 'm-kvstore.aliyuncs.com',
                'Vpc' => 'vpc.aliyuncs.com',
                'BatchCompute' => 'batchCompute.aliyuncs.com',
                'Domain' => 'domain.aliyuncs.com',
                'AMS' => 'ams.aliyuncs.com',
                'ROS' => 'ros.aliyuncs.com',
                'PTS' => 'pts.aliyuncs.com',
                'Qualitycheck' => 'qualitycheck.aliyuncs.com',
                'Ubsms' => 'ubsms.aliyuncs.com',
                'Apigateway' => 'apigateway.cn-hangzhou.aliyuncs.com',
                'CloudAPI' => 'apigateway.cn-hangzhou.aliyuncs.com',
                'CmsSiteMonitor' => 'sitemonitor.aliyuncs.com',
                'Ace' => 'ace.cn-hangzhou.aliyuncs.com',
                'Mts' => 'mts.cn-hangzhou.aliyuncs.com',
                'Oas' => 'cn-hangzhou.oas.aliyuncs.com',
                'CF' => 'cf.aliyuncs.com',
                'Acs' => 'acs.aliyun-inc.com',
                'Httpdns' => 'httpdns-api.aliyuncs.com',
                'Location-inner' => 'location-inner.aliyuncs.com',
                'Aas' => 'aas.aliyuncs.com',
                'Alidns' => 'alidns.aliyuncs.com',
                'HPC' => 'hpc.aliyuncs.com',
                'Emr' => 'emr.aliyuncs.com',
                'HighDDos' => 'yd-highddos-cn-hangzhou.aliyuncs.com',
                'Vpc-inner' => 'vpc-inner.aliyuncs.com',
                'Cms' => 'metrics.cn-hangzhou.aliyuncs.com',
                'Slb' => 'slb.aliyuncs.com',
                'Risk' => 'risk-cn-hangzhou.aliyuncs.com',
                'Dts' => 'dts.aliyuncs.com',
                'Bss' => 'bss.aliyuncs.com',
                'Ots' => 'ots-pop.aliyuncs.com',
                'Cdn' => 'cdn.aliyuncs.com',
                'Ram' => 'ram.aliyuncs.com',
                'Drds' => 'drds.aliyuncs.com',
                'Rds' => 'rds.aliyuncs.com',
                'Crm' => 'crm-cn-hangzhou.aliyuncs.com',
                'OssAdmin' => 'oss-admin.aliyuncs.com',
                'Sales' => 'sales.cn-hangzhou.aliyuncs.com',
                'Ons' => 'ons.aliyuncs.com',
                'Oss' => 'oss-cn-hangzhou.aliyuncs.com',
                'YundunDdos' => 'inner-yundun-ddos.cn-hangzhou.aliyuncs.com',
                'Dyvmsapi' => 'dyvmsapi.aliyuncs.com',
                'Dysmsapi' => 'dysmsapi.aliyuncs.com',
                'Dycdpapi' => 'dycdpapi.aliyuncs.com',
                'Dyiotapi' => 'dyiotapi.aliyuncs.com',
                'Dyplsapi' => 'dyplsapi.aliyuncs.com',
                'Dypnsapi' => 'dypnsapi.aliyuncs.com',
                'Snsuapi' => 'snsuapi.aliyuncs.com'
            ]
        ],
        'cn-beijing-inner' => [
            'RegionIds' => [
                'cn-beijing-inner'
            ],
            'productDomains' => [
                'Risk' => 'risk-cn-hangzhou.aliyuncs.com',
                'COS' => 'cos.aliyuncs.com',
                'HPC' => 'hpc.aliyuncs.com',
                'Billing' => 'billing.aliyuncs.com',
                'Dqs' => 'dqs.aliyuncs.com',
                'Dds' => 'mongodb.aliyuncs.com',
                'Emr' => 'emr.aliyuncs.com',
                'Sms' => 'sms.aliyuncs.com',
                'Drds' => 'drds.aliyuncs.com',
                'CS' => 'cs.aliyuncs.com',
                'Location' => 'location.aliyuncs.com',
                'ChargingService' => 'chargingservice.aliyuncs.com',
                'Msg' => 'msg-inner.aliyuncs.com',
                'Ess' => 'ess.aliyuncs.com',
                'R-kvstore' => 'r-kvstore-cn-hangzhou.aliyuncs.com',
                'Bss' => 'bss.aliyuncs.com',
                'Workorder' => 'workorder.aliyuncs.com',
                'Drc' => 'drc.aliyuncs.com',
                'Yundun' => 'yundun-cn-hangzhou.aliyuncs.com',
                'Ubsms-inner' => 'ubsms-inner.aliyuncs.com',
                'Ocs' => 'm-kvstore.aliyuncs.com',
                'Dm' => 'dm.aliyuncs.com',
                'YundunDdos' => 'inner-yundun-ddos.cn-hangzhou.aliyuncs.com',
                'oceanbase' => 'oceanbase.aliyuncs.com',
                'Msc' => 'msc-inner.aliyuncs.com',
                'Yundunhsm' => 'yundunhsm.aliyuncs.com',
                'Iot' => 'iot.aliyuncs.com',
                'jaq' => 'jaq.aliyuncs.com',
                'Oms' => 'oms.aliyuncs.com',
                'M-kvstore' => 'm-kvstore.aliyuncs.com',
                'live' => 'live.aliyuncs.com',
                'Ecs' => 'ecs-cn-hangzhou.aliyuncs.com',
                'Alert' => 'alert.aliyuncs.com',
                'CmsSiteMonitor' => 'sitemonitor.aliyuncs.com',
                'Ace' => 'ace.cn-hangzhou.aliyuncs.com',
                'AMS' => 'ams.aliyuncs.com',
                'Ots' => 'ots-pop.aliyuncs.com',
                'PTS' => 'pts.aliyuncs.com',
                'Qualitycheck' => 'qualitycheck.aliyuncs.com',
                'Ubsms' => 'ubsms.aliyuncs.com',
                'Sts' => 'sts.aliyuncs.com',
                'Rds' => 'rds.aliyuncs.com',
                'Mts' => 'mts.cn-beijing.aliyuncs.com',
                'Location-inner' => 'location-inner.aliyuncs.com',
                'CF' => 'cf.aliyuncs.com',
                'Httpdns' => 'httpdns-api.aliyuncs.com',
                'Green' => 'green.aliyuncs.com',
                'Aas' => 'aas.aliyuncs.com',
                'Alidns' => 'alidns.aliyuncs.com',
                'Push' => 'cloudpush.aliyuncs.com',
                'HighDDos' => 'yd-highddos-cn-hangzhou.aliyuncs.com',
                'Cms' => 'metrics.aliyuncs.com',
                'Slb' => 'slb.aliyuncs.com',
                'Commondriver' => 'common.driver.aliyuncs.com',
                'Dts' => 'dts.aliyuncs.com',
                'Domain' => 'domain.aliyuncs.com',
                'ROS' => 'ros.aliyuncs.com',
                'Oss' => 'oss-cn-hangzhou.aliyuncs.com',
                'Ram' => 'ram.aliyuncs.com',
                'Sales' => 'sales.cn-hangzhou.aliyuncs.com',
                'Crm' => 'crm-cn-hangzhou.aliyuncs.com',
                'OssAdmin' => 'oss-admin.aliyuncs.com',
                'Ons' => 'ons.aliyuncs.com',
                'Cdn' => 'cdn.aliyuncs.com'
            ]
        ],
        'cn-haidian-cm12-c01' => [
            'RegionIds' => [
                'cn-haidian-cm12-c01'
            ],
            'productDomains' => [
                'Ecs' => 'ecs-cn-hangzhou.aliyuncs.com',
                'Vpc' => 'vpc.aliyuncs.com',
                'Rds' => 'rds.aliyuncs.com'
            ]
        ],
        'cn-anhui-gov' => [
            'RegionIds' => [
                'cn-anhui-gov'
            ],
            'productDomains' => [
                'Ecs' => 'ecs-cn-hangzhou.aliyuncs.com',
                'Vpc' => 'vpc.aliyuncs.com'
            ]
        ],
        'cn-shenzhen' => [
            'RegionIds' => [
                'cn-shenzhen'
            ],
            'productDomains' => [
                'ARMS' => 'arms.cn-shenzhen.aliyuncs.com',
                'CS' => 'cs.aliyuncs.com',
                'COS' => 'cos.aliyuncs.com',
                'Ons' => 'ons.aliyuncs.com',
                'Ess' => 'ess.aliyuncs.com',
                'Dqs' => 'dqs.aliyuncs.com',
                'Dds' => 'mongodb.aliyuncs.com',
                'Alidns' => 'alidns.aliyuncs.com',
                'Sms' => 'sms.aliyuncs.com',
                'Jaq' => 'jaq.aliyuncs.com',
                'Push' => 'cloudpush.aliyuncs.com',
                'Kms' => 'kms.cn-shenzhen.aliyuncs.com',
                'Location' => 'location.aliyuncs.com',
                'Ocs' => 'm-kvstore.aliyuncs.com',
                'Alert' => 'alert.aliyuncs.com',
                'Drc' => 'drc.aliyuncs.com',
                'R-kvstore' => 'r-kvstore-cn-hangzhou.aliyuncs.com',
                'Yundun' => 'yundun-cn-hangzhou.aliyuncs.com',
                'Ubsms-inner' => 'ubsms-inner.aliyuncs.com',
                'Dm' => 'dm.aliyuncs.com',
                'Commondriver' => 'common.driver.aliyuncs.com',
                'oceanbase' => 'oceanbase.aliyuncs.com',
                'Iot' => 'iot.aliyuncs.com',
                'HPC' => 'hpc.aliyuncs.com',
                'Bss' => 'bss.aliyuncs.com',
                'Oms' => 'oms.aliyuncs.com',
                'Ubsms' => 'ubsms.aliyuncs.com',
                'live' => 'live.aliyuncs.com',
                'Ecs' => 'ecs-cn-hangzhou.aliyuncs.com',
                'M-kvstore' => 'm-kvstore.aliyuncs.com',
                'CmsSiteMonitor' => 'sitemonitor.aliyuncs.com',
                'BatchCompute' => 'batchcompute.cn-shenzhen.aliyuncs.com',
                'Ace' => 'ace.cn-hangzhou.aliyuncs.com',
                'ROS' => 'ros.aliyuncs.com',
                'PTS' => 'pts.aliyuncs.com',
                'Ace-ops' => 'ace-ops.cn-hangzhou.aliyuncs.com',
                'Apigateway' => 'apigateway.cn-shenzhen.aliyuncs.com',
                'CloudAPI' => 'apigateway.cn-shenzhen.aliyuncs.com',
                'Sts' => 'sts.aliyuncs.com',
                'Vpc' => 'vpc.aliyuncs.com',
                'Rds' => 'rds.aliyuncs.com',
                'Mts' => 'mts.cn-shenzhen.aliyuncs.com',
                'Oas' => 'cn-shenzhen.oas.aliyuncs.com',
                'CF' => 'cf.aliyuncs.com',
                'Acs' => 'acs.aliyun-inc.com',
                'Crm' => 'crm-cn-hangzhou.aliyuncs.com',
                'Location-inner' => 'location-inner.aliyuncs.com',
                'Aas' => 'aas.aliyuncs.com',
                'Emr' => 'emr.aliyuncs.com',
                'Dts' => 'dts.aliyuncs.com',
                'HighDDos' => 'yd-highddos-cn-hangzhou.aliyuncs.com',
                'Vpc-inner' => 'vpc-inner.aliyuncs.com',
                'Cms' => 'metrics.cn-hangzhou.aliyuncs.com',
                'Slb' => 'slb.aliyuncs.com',
                'Risk' => 'risk-cn-hangzhou.aliyuncs.com',
                'Domain' => 'domain.aliyuncs.com',
                'Ots' => 'ots-pop.aliyuncs.com',
                'jaq' => 'jaq.aliyuncs.com',
                'Cdn' => 'cdn.aliyuncs.com',
                'Ram' => 'ram.aliyuncs.com',
                'Drds' => 'drds.aliyuncs.com',
                'OssAdmin' => 'oss-admin.aliyuncs.com',
                'Green' => 'green.aliyuncs.com',
                'Httpdns' => 'httpdns-api.aliyuncs.com',
                'Oss' => 'oss-cn-shenzhen.aliyuncs.com'
            ]
        ],
        'ap-southeast-2' => [
            'RegionIds' => [
                'ap-southeast-2'
            ],
            'productDomains' => [
                'Rds' => 'rds.ap-southeast-2.aliyuncs.com',
                'Kms' => 'kms.ap-southeast-2.aliyuncs.com',
                'Vpc' => 'vpc.ap-southeast-2.aliyuncs.com',
                'Ecs' => 'ecs.ap-southeast-2.aliyuncs.com',
                'Cms' => 'metrics.cn-hangzhou.aliyuncs.com',
                'Slb' => 'slb.ap-southeast-2.aliyuncs.com'
            ]
        ],
        'cn-qingdao' => [
            'RegionIds' => [
                'cn-qingdao'
            ],
            'productDomains' => [
                'CS' => 'cs.aliyuncs.com',
                'COS' => 'cos.aliyuncs.com',
                'HPC' => 'hpc.aliyuncs.com',
                'Dqs' => 'dqs.aliyuncs.com',
                'Dds' => 'mongodb.aliyuncs.com',
                'Emr' => 'emr.cn-qingdao.aliyuncs.com',
                'Sms' => 'sms.aliyuncs.com',
                'Jaq' => 'jaq.aliyuncs.com',
                'Dts' => 'dts.aliyuncs.com',
                'Location' => 'location.aliyuncs.com',
                'Ess' => 'ess.aliyuncs.com',
                'R-kvstore' => 'r-kvstore-cn-hangzhou.aliyuncs.com',
                'Alert' => 'alert.aliyuncs.com',
                'Drc' => 'drc.aliyuncs.com',
                'Yundun' => 'yundun-cn-hangzhou.aliyuncs.com',
                'Ubsms-inner' => 'ubsms-inner.cn-qingdao.aliyuncs.com',
                'Ocs' => 'm-kvstore.aliyuncs.com',
                'Dm' => 'dm.aliyuncs.com',
                'Risk' => 'risk-cn-hangzhou.aliyuncs.com',
                'oceanbase' => 'oceanbase.aliyuncs.com',
                'Iot' => 'iot.aliyuncs.com',
                'Bss' => 'bss.aliyuncs.com',
                'Oms' => 'oms.aliyuncs.com',
                'Ubsms' => 'ubsms.cn-qingdao.aliyuncs.com',
                'live' => 'live.aliyuncs.com',
                'Ecs' => 'ecs-cn-hangzhou.aliyuncs.com',
                'M-kvstore' => 'm-kvstore.aliyuncs.com',
                'CmsSiteMonitor' => 'sitemonitor.aliyuncs.com',
                'BatchCompute' => 'batchcompute.cn-qingdao.aliyuncs.com',
                'Ace' => 'ace.cn-hangzhou.aliyuncs.com',
                'Ots' => 'ots-pop.aliyuncs.com',
                'PTS' => 'pts.aliyuncs.com',
                'Ace-ops' => 'ace-ops.cn-hangzhou.aliyuncs.com',
                'Apigateway' => 'apigateway.cn-qingdao.aliyuncs.com',
                'CloudAPI' => 'apigateway.cn-qingdao.aliyuncs.com',
                'Sts' => 'sts.aliyuncs.com',
                'Rds' => 'rds.aliyuncs.com',
                'Mts' => 'mts.cn-qingdao.aliyuncs.com',
                'Location-inner' => 'location-inner.aliyuncs.com',
                'CF' => 'cf.aliyuncs.com',
                'Acs' => 'acs.aliyun-inc.com',
                'Httpdns' => 'httpdns-api.aliyuncs.com',
                'Green' => 'green.aliyuncs.com',
                'Aas' => 'aas.aliyuncs.com',
                'Alidns' => 'alidns.aliyuncs.com',
                'Push' => 'cloudpush.aliyuncs.com',
                'HighDDos' => 'yd-highddos-cn-hangzhou.aliyuncs.com',
                'Vpc-inner' => 'vpc-inner.aliyuncs.com',
                'Cms' => 'metrics.cn-hangzhou.aliyuncs.com',
                'Slb' => 'slb.aliyuncs.com',
                'Commondriver' => 'common.driver.aliyuncs.com',
                'Domain' => 'domain.aliyuncs.com',
                'ROS' => 'ros.aliyuncs.com',
                'jaq' => 'jaq.aliyuncs.com',
                'Cdn' => 'cdn.aliyuncs.com',
                'Ram' => 'ram.aliyuncs.com',
                'Drds' => 'drds.aliyuncs.com',
                'Crm' => 'crm-cn-hangzhou.aliyuncs.com',
                'OssAdmin' => 'oss-admin.aliyuncs.com',
                'Ons' => 'ons.aliyuncs.com',
                'Oss' => 'oss-cn-qingdao.aliyuncs.com'
            ]
        ],
        'cn-shenzhen-su18-b02' => [
            'RegionIds' => [
                'cn-shenzhen-su18-b02'
            ],
            'productDomains' => [
                'Ecs' => 'ecs-cn-hangzhou.aliyuncs.com'
            ]
        ],
        'cn-shenzhen-su18-b03' => [
            'RegionIds' => [
                'cn-shenzhen-su18-b03'
            ],
            'productDomains' => [
                'Ecs' => 'ecs-cn-hangzhou.aliyuncs.com'
            ]
        ],
        'cn-shenzhen-su18-b01' => [
            'RegionIds' => [
                'cn-shenzhen-su18-b01'
            ],
            'productDomains' => [
                'Ecs' => 'ecs-cn-hangzhou.aliyuncs.com'
            ]
        ],
        'ap-southeast-antgroup-1' => [
            'RegionIds' => [
                'ap-southeast-antgroup-1'
            ],
            'productDomains' => [
                'Ecs' => 'ecs-cn-hangzhou.aliyuncs.com'
            ]
        ],
        'oss-cn-bjzwy' => [
            'RegionIds' => [
                'oss-cn-bjzwy'
            ],
            'productDomains' => [
                'Oss' => 'oss-cn-bjzwy.aliyuncs.com'
            ]
        ],
        'cn-henan-am12001' => [
            'RegionIds' => [
                'cn-henan-am12001'
            ],
            'productDomains' => [
                'Ecs' => 'ecs-cn-hangzhou.aliyuncs.com',
                'Vpc' => 'vpc.aliyuncs.com'
            ]
        ],
        'cn-beijing' => [
            'RegionIds' => [
                'cn-beijing'
            ],
            'productDomains' => [
                'ARMS' => 'arms.cn-beijing.aliyuncs.com',
                'CS' => 'cs.aliyuncs.com',
                'COS' => 'cos.aliyuncs.com',
                'Jaq' => 'jaq.aliyuncs.com',
                'Ess' => 'ess.aliyuncs.com',
                'Billing' => 'billing.aliyuncs.com',
                'Dqs' => 'dqs.aliyuncs.com',
                'Dds' => 'mongodb.aliyuncs.com',
                'Sts' => 'sts.aliyuncs.com',
                'Sms' => 'sms.aliyuncs.com',
                'Msg' => 'msg-inner.aliyuncs.com',
                'Sales' => 'sales.cn-hangzhou.aliyuncs.com',
                'HPC' => 'hpc.aliyuncs.com',
                'Oas' => 'cn-beijing.oas.aliyuncs.com',
                'Location' => 'location.aliyuncs.com',
                'Ons' => 'ons.aliyuncs.com',
                'ChargingService' => 'chargingservice.aliyuncs.com',
                'Hpc' => 'hpc.aliyuncs.com',
                'Commondriver' => 'common.driver.aliyuncs.com',
                'Ocs' => 'm-kvstore.aliyuncs.com',
                'jaq' => 'jaq.aliyuncs.com',
                'Workorder' => 'workorder.aliyuncs.com',
                'R-kvstore' => 'r-kvstore-cn-hangzhou.aliyuncs.com',
                'Bss' => 'bss.aliyuncs.com',
                'Ubsms-inner' => 'ubsms-inner.aliyuncs.com',
                'Dm' => 'dm.aliyuncs.com',
                'Risk' => 'risk-cn-hangzhou.aliyuncs.com',
                'oceanbase' => 'oceanbase.aliyuncs.com',
                'Msc' => 'msc-inner.aliyuncs.com',
                'Yundunhsm' => 'yundunhsm.aliyuncs.com',
                'Iot' => 'iot.aliyuncs.com',
                'Alert' => 'alert.aliyuncs.com',
                'Oms' => 'oms.aliyuncs.com',
                'Ubsms' => 'ubsms.aliyuncs.com',
                'live' => 'live.aliyuncs.com',
                'Ecs' => 'ecs-cn-hangzhou.aliyuncs.com',
                'Ace-ops' => 'ace-ops.cn-hangzhou.aliyuncs.com',
                'Vpc' => 'vpc.aliyuncs.com',
                'BatchCompute' => 'batchCompute.aliyuncs.com',
                'AMS' => 'ams.aliyuncs.com',
                'ROS' => 'ros.aliyuncs.com',
                'PTS' => 'pts.aliyuncs.com',
                'M-kvstore' => 'm-kvstore.aliyuncs.com',
                'Apigateway' => 'apigateway.cn-beijing.aliyuncs.com',
                'CloudAPI' => 'apigateway.cn-beijing.aliyuncs.com',
                'Kms' => 'kms.cn-beijing.aliyuncs.com',
                'HighDDos' => 'yd-highddos-cn-hangzhou.aliyuncs.com',
                'CmsSiteMonitor' => 'sitemonitor.aliyuncs.com',
                'Ace' => 'ace.cn-hangzhou.aliyuncs.com',
                'Mts' => 'mts.cn-beijing.aliyuncs.com',
                'CF' => 'cf.aliyuncs.com',
                'Acs' => 'acs.aliyun-inc.com',
                'Httpdns' => 'httpdns-api.aliyuncs.com',
                'Location-inner' => 'location-inner.aliyuncs.com',
                'Aas' => 'aas.aliyuncs.com',
                'Emr' => 'emr.aliyuncs.com',
                'Dts' => 'dts.aliyuncs.com',
                'Drc' => 'drc.aliyuncs.com',
                'Push' => 'cloudpush.aliyuncs.com',
                'Cms' => 'metrics.cn-hangzhou.aliyuncs.com',
                'Slb' => 'slb.aliyuncs.com',
                'Crm' => 'crm-cn-hangzhou.aliyuncs.com',
                'Domain' => 'domain.aliyuncs.com',
                'Ots' => 'ots-pop.aliyuncs.com',
                'Oss' => 'oss-cn-beijing.aliyuncs.com',
                'Ram' => 'ram.aliyuncs.com',
                'Drds' => 'drds.aliyuncs.com',
                'Vpc-inner' => 'vpc-inner.aliyuncs.com',
                'Rds' => 'rds.aliyuncs.com',
                'OssAdmin' => 'oss-admin.aliyuncs.com',
                'Alidns' => 'alidns.aliyuncs.com',
                'Green' => 'green.aliyuncs.com',
                'Yundun' => 'yundun-cn-hangzhou.aliyuncs.com',
                'Cdn' => 'cdn.aliyuncs.com',
                'YundunDdos' => 'inner-yundun-ddos.cn-hangzhou.aliyuncs.com',
                'vod' => 'vod.cn-beijing.aliyuncs.com'
            ]
        ],
        'cn-hangzhou-d' => [
            'RegionIds' => [
                'cn-hangzhou-d'
            ],
            'productDomains' => [
                'CS' => 'cs.aliyuncs.com',
                'COS' => 'cos.aliyuncs.com',
                'Ess' => 'ess.aliyuncs.com',
                'Billing' => 'billing.aliyuncs.com',
                'Dqs' => 'dqs.aliyuncs.com',
                'Dds' => 'mongodb.aliyuncs.com',
                'Emr' => 'emr.aliyuncs.com',
                'Sms' => 'sms.aliyuncs.com',
                'Sales' => 'sales.cn-hangzhou.aliyuncs.com',
                'Dts' => 'dts.aliyuncs.com',
                'Location' => 'location.aliyuncs.com',
                'Msg' => 'msg-inner.aliyuncs.com',
                'ChargingService' => 'chargingservice.aliyuncs.com',
                'R-kvstore' => 'r-kvstore-cn-hangzhou.aliyuncs.com',
                'Bss' => 'bss.aliyuncs.com',
                'Msc' => 'msc-inner.aliyuncs.com',
                'Ocs' => 'm-kvstore.aliyuncs.com',
                'Yundun' => 'yundun-cn-hangzhou.aliyuncs.com',
                'Ubsms-inner' => 'ubsms-inner.aliyuncs.com',
                'Dm' => 'dm.aliyuncs.com',
                'Risk' => 'risk-cn-hangzhou.aliyuncs.com',
                'oceanbase' => 'oceanbase.aliyuncs.com',
                'Workorder' => 'workorder.aliyuncs.com',
                'Alidns' => 'alidns.aliyuncs.com',
                'Iot' => 'iot.aliyuncs.com',
                'HPC' => 'hpc.aliyuncs.com',
                'jaq' => 'jaq.aliyuncs.com',
                'Oms' => 'oms.aliyuncs.com',
                'live' => 'live.aliyuncs.com',
                'Ecs' => 'ecs-cn-hangzhou.aliyuncs.com',
                'M-kvstore' => 'm-kvstore.aliyuncs.com',
                'CmsSiteMonitor' => 'sitemonitor.aliyuncs.com',
                'Alert' => 'alert.aliyuncs.com',
                'Ace' => 'ace.cn-hangzhou.aliyuncs.com',
                'AMS' => 'ams.aliyuncs.com',
                'Ots' => 'ots-pop.aliyuncs.com',
                'PTS' => 'pts.aliyuncs.com',
                'Qualitycheck' => 'qualitycheck.aliyuncs.com',
                'Ubsms' => 'ubsms.aliyuncs.com',
                'Rds' => 'rds.aliyuncs.com',
                'Mts' => 'mts.cn-hangzhou.aliyuncs.com',
                'Location-inner' => 'location-inner.aliyuncs.com',
                'CF' => 'cf.aliyuncs.com',
                'Httpdns' => 'httpdns-api.aliyuncs.com',
                'Green' => 'green.aliyuncs.com',
                'Aas' => 'aas.aliyuncs.com',
                'Sts' => 'sts.aliyuncs.com',
                'Push' => 'cloudpush.aliyuncs.com',
                'HighDDos' => 'yd-highddos-cn-hangzhou.aliyuncs.com',
                'Cms' => 'metrics.aliyuncs.com',
                'Slb' => 'slb.aliyuncs.com',
                'YundunDdos' => 'inner-yundun-ddos.cn-hangzhou.aliyuncs.com',
                'Domain' => 'domain.aliyuncs.com',
                'Commondriver' => 'common.driver.aliyuncs.com',
                'ROS' => 'ros.aliyuncs.com',
                'Cdn' => 'cdn.aliyuncs.com',
                'Ram' => 'ram.aliyuncs.com',
                'Drds' => 'drds.aliyuncs.com',
                'Crm' => 'crm-cn-hangzhou.aliyuncs.com',
                'OssAdmin' => 'oss-admin.aliyuncs.com',
                'Ons' => 'ons.aliyuncs.com',
                'Yundunhsm' => 'yundunhsm.aliyuncs.com',
                'Drc' => 'drc.aliyuncs.com',
                'Oss' => 'oss-cn-hangzhou.aliyuncs.com'
            ]
        ],
        'cn-gansu-am6' => [
            'RegionIds' => [
                'cn-gansu-am6'
            ],
            'productDomains' => [
                'Ecs' => 'ecs-cn-hangzhou.aliyuncs.com',
                'Vpc' => 'vpc.aliyuncs.com',
                'Rds' => 'rds.aliyuncs.com'
            ]
        ],
        'cn-ningxiazhongwei' => [
            'RegionIds' => [
                'cn-ningxiazhongwei'
            ],
            'productDomains' => [
                'Ecs' => 'ecs-cn-hangzhou.aliyuncs.com',
                'Vpc' => 'vpc.aliyuncs.com'
            ]
        ],
        'cn-shanghai-et2-b01' => [
            'RegionIds' => [
                'cn-shanghai-et2-b01'
            ],
            'productDomains' => [
                'CS' => 'cs.aliyuncs.com',
                'Risk' => 'risk-cn-hangzhou.aliyuncs.com',
                'COS' => 'cos.aliyuncs.com',
                'Ons' => 'ons.aliyuncs.com',
                'Ess' => 'ess.aliyuncs.com',
                'Billing' => 'billing.aliyuncs.com',
                'Dqs' => 'dqs.aliyuncs.com',
                'Dds' => 'mongodb.aliyuncs.com',
                'Alidns' => 'alidns.aliyuncs.com',
                'Sms' => 'sms.aliyuncs.com',
                'Jaq' => 'jaq.aliyuncs.com',
                'Dts' => 'dts.aliyuncs.com',
                'Location' => 'location.aliyuncs.com',
                'Msg' => 'msg-inner.aliyuncs.com',
                'ChargingService' => 'chargingservice.aliyuncs.com',
                'Ocs' => 'm-kvstore.aliyuncs.com',
                'Bss' => 'bss.aliyuncs.com',
                'Msc' => 'msc-inner.aliyuncs.com',
                'R-kvstore' => 'r-kvstore-cn-hangzhou.aliyuncs.com',
                'Yundun' => 'yundun-cn-hangzhou.aliyuncs.com',
                'Ubsms-inner' => 'ubsms-inner.aliyuncs.com',
                'Dm' => 'dm.aliyuncs.com',
                'Commondriver' => 'common.driver.aliyuncs.com',
                'oceanbase' => 'oceanbase.aliyuncs.com',
                'Workorder' => 'workorder.aliyuncs.com',
                'Yundunhsm' => 'yundunhsm.aliyuncs.com',
                'Iot' => 'iot.aliyuncs.com',
                'jaq' => 'jaq.aliyuncs.com',
                'Oms' => 'oms.aliyuncs.com',
                'Ubsms' => 'ubsms.aliyuncs.com',
                'live' => 'live.aliyuncs.com',
                'Ecs' => 'ecs-cn-hangzhou.aliyuncs.com',
                'Ace-ops' => 'ace-ops.cn-hangzhou.aliyuncs.com',
                'CmsSiteMonitor' => 'sitemonitor.aliyuncs.com',
                'BatchCompute' => 'batchCompute.aliyuncs.com',
                'Ace' => 'ace.cn-hangzhou.aliyuncs.com',
                'AMS' => 'ams.aliyuncs.com',
                'Ots' => 'ots-pop.aliyuncs.com',
                'PTS' => 'pts.aliyuncs.com',
                'Qualitycheck' => 'qualitycheck.aliyuncs.com',
                'M-kvstore' => 'm-kvstore.aliyuncs.com',
                'Rds' => 'rds.aliyuncs.com',
                'Mts' => 'mts.cn-hangzhou.aliyuncs.com',
                'CF' => 'cf.aliyuncs.com',
                'Acs' => 'acs.aliyun-inc.com',
                'Httpdns' => 'httpdns-api.aliyuncs.com',
                'Location-inner' => 'location-inner.aliyuncs.com',
                'Aas' => 'aas.aliyuncs.com',
                'Sts' => 'sts.aliyuncs.com',
                'HPC' => 'hpc.aliyuncs.com',
                'Emr' => 'emr.aliyuncs.com',
                'HighDDos' => 'yd-highddos-cn-hangzhou.aliyuncs.com',
                'Push' => 'cloudpush.aliyuncs.com',
                'Cms' => 'metrics.aliyuncs.com',
                'Slb' => 'slb.aliyuncs.com',
                'Crm' => 'crm-cn-hangzhou.aliyuncs.com',
                'Alert' => 'alert.aliyuncs.com',
                'Domain' => 'domain.aliyuncs.com',
                'ROS' => 'ros.aliyuncs.com',
                'Cdn' => 'cdn.aliyuncs.com',
                'Ram' => 'ram.aliyuncs.com',
                'Drds' => 'drds.aliyuncs.com',
                'Vpc-inner' => 'vpc-inner.aliyuncs.com',
                'OssAdmin' => 'oss-admin.aliyuncs.com',
                'Sales' => 'sales.cn-hangzhou.aliyuncs.com',
                'Green' => 'green.aliyuncs.com',
                'Drc' => 'drc.aliyuncs.com',
                'Oss' => 'oss-cn-hangzhou.aliyuncs.com',
                'YundunDdos' => 'inner-yundun-ddos.cn-hangzhou.aliyuncs.com'
            ]
        ],
        'cn-ningxia-am7-c01' => [
            'RegionIds' => [
                'cn-ningxia-am7-c01'
            ],
            'productDomains' => [
                'Ecs' => 'ecs-cn-hangzhou.aliyuncs.com',
                'Vpc' => 'vpc.aliyuncs.com'
            ]
        ],
        'cn-shenzhen-finance-1' => [
            'RegionIds' => [
                'cn-shenzhen-finance-1'
            ],
            'productDomains' => [
                'Kms' => 'kms.cn-shenzhen-finance-1.aliyuncs.com',
                'Ecs' => 'ecs-cn-hangzhou.aliyuncs.com',
                'Rds' => 'rds.aliyuncs.com',
                'Vpc' => 'vpc.aliyuncs.com'
            ]
        ],
        'ap-southeast-1' => [
            'RegionIds' => [
                'ap-southeast-1'
            ],
            'productDomains' => [
                'CS' => 'cs.aliyuncs.com',
                'Risk' => 'risk-cn-hangzhou.aliyuncs.com',
                'COS' => 'cos.aliyuncs.com',
                'Ess' => 'ess.aliyuncs.com',
                'Billing' => 'billing.aliyuncs.com',
                'Dqs' => 'dqs.aliyuncs.com',
                'Dds' => 'mongodb.aliyuncs.com',
                'Alidns' => 'alidns.aliyuncs.com',
                'Sms' => 'sms.aliyuncs.com',
                'Drds' => 'drds.aliyuncs.com',
                'Dts' => 'dts.aliyuncs.com',
                'Kms' => 'kms.ap-southeast-1.aliyuncs.com',
                'Location' => 'location.aliyuncs.com',
                'Msg' => 'msg-inner.aliyuncs.com',
                'ChargingService' => 'chargingservice.aliyuncs.com',
                'R-kvstore' => 'r-kvstore-cn-hangzhou.aliyuncs.com',
                'Alert' => 'alert.aliyuncs.com',
                'Msc' => 'msc-inner.aliyuncs.com',
                'HighDDos' => 'yd-highddos-cn-hangzhou.aliyuncs.com',
                'Yundun' => 'yundun-cn-hangzhou.aliyuncs.com',
                'Ubsms-inner' => 'ubsms-inner.aliyuncs.com',
                'Ocs' => 'm-kvstore.aliyuncs.com',
                'Dm' => 'dm.aliyuncs.com',
                'Green' => 'green.aliyuncs.com',
                'Commondriver' => 'common.driver.aliyuncs.com',
                'oceanbase' => 'oceanbase.aliyuncs.com',
                'Workorder' => 'workorder.aliyuncs.com',
                'Yundunhsm' => 'yundunhsm.aliyuncs.com',
                'Iot' => 'iot.ap-southeast-1.aliyuncs.com',
                'HPC' => 'hpc.aliyuncs.com',
                'jaq' => 'jaq.aliyuncs.com',
                'Oms' => 'oms.aliyuncs.com',
                'live' => 'live.aliyuncs.com',
                'Ecs' => 'ecs-cn-hangzhou.aliyuncs.com',
                'M-kvstore' => 'm-kvstore.aliyuncs.com',
                'Vpc' => 'vpc.aliyuncs.com',
                'BatchCompute' => 'batchCompute.aliyuncs.com',
                'AMS' => 'ams.aliyuncs.com',
                'ROS' => 'ros.aliyuncs.com',
                'PTS' => 'pts.aliyuncs.com',
                'Qualitycheck' => 'qualitycheck.aliyuncs.com',
                'Bss' => 'bss.aliyuncs.com',
                'Ubsms' => 'ubsms.aliyuncs.com',
                'Apigateway' => 'apigateway.ap-southeast-1.aliyuncs.com',
                'CloudAPI' => 'apigateway.ap-southeast-1.aliyuncs.com',
                'Sts' => 'sts.aliyuncs.com',
                'CmsSiteMonitor' => 'sitemonitor.aliyuncs.com',
                'Ace' => 'ace.cn-hangzhou.aliyuncs.com',
                'Mts' => 'mts.ap-southeast-1.aliyuncs.com',
                'CF' => 'cf.aliyuncs.com',
                'Crm' => 'crm-cn-hangzhou.aliyuncs.com',
                'Location-inner' => 'location-inner.aliyuncs.com',
                'Aas' => 'aas.aliyuncs.com',
                'Emr' => 'emr.aliyuncs.com',
                'Httpdns' => 'httpdns-api.aliyuncs.com',
                'Drc' => 'drc.aliyuncs.com',
                'Push' => 'cloudpush.aliyuncs.com',
                'Cms' => 'metrics.cn-hangzhou.aliyuncs.com',
                'Slb' => 'slb.aliyuncs.com',
                'YundunDdos' => 'inner-yundun-ddos.cn-hangzhou.aliyuncs.com',
                'Domain' => 'domain.aliyuncs.com',
                'Ots' => 'ots-pop.aliyuncs.com',
                'Cdn' => 'cdn.aliyuncs.com',
                'Ram' => 'ram.aliyuncs.com',
                'Sales' => 'sales.cn-hangzhou.aliyuncs.com',
                'Rds' => 'rds.aliyuncs.com',
                'OssAdmin' => 'oss-admin.aliyuncs.com',
                'Ons' => 'ons.aliyuncs.com',
                'Oss' => 'oss-ap-southeast-1.aliyuncs.com',
                'Dysmsapi' => 'dysmsapi.ap-southeast-1.aliyuncs.com'
            ]
        ],
        'cn-shenzhen-st4-d01' => [
            'RegionIds' => [
                'cn-shenzhen-st4-d01'
            ],
            'productDomains' => [
                'Ecs' => 'ecs-cn-hangzhou.aliyuncs.com'
            ]
        ],
        'eu-central-1' => [
            'RegionIds' => [
                'eu-central-1'
            ],
            'productDomains' => [
                'Rds' => 'rds.eu-central-1.aliyuncs.com',
                'Ecs' => 'ecs.eu-central-1.aliyuncs.com',
                'Vpc' => 'vpc.eu-central-1.aliyuncs.com',
                'Kms' => 'kms.eu-central-1.aliyuncs.com',
                'Cms' => 'metrics.cn-hangzhou.aliyuncs.com',
                'Slb' => 'slb.eu-central-1.aliyuncs.com',
                'Iot' => 'iot.eu-central-1.aliyuncs.com'
            ]
        ],
        'cn-zhangjiakou' => [
            'RegionIds' => [
                'cn-zhangjiakou'
            ],
            'productDomains' => [
                'Rds' => 'rds.cn-zhangjiakou.aliyuncs.com',
                'Ecs' => 'ecs.cn-zhangjiakou.aliyuncs.com',
                'Vpc' => 'vpc.cn-zhangjiakou.aliyuncs.com',
                'Cms' => 'metrics.cn-hangzhou.aliyuncs.com',
                'Slb' => 'slb.cn-zhangjiakou.aliyuncs.com'
            ]
        ]
    ];

    public static function productDomains(&$products)
    {
        $product_domains = [];
        foreach ($products as $ProductName => $DomainName) {
            $product_domains[] = new ProductDomain($ProductName, $DomainName);
        }
        return $product_domains;
    }

    public static function setEndpoints($regionId = 'cn-hangzhou')
    {
        $endpoint = self::ENDPOINTS[$regionId] ?? null;
        if (is_null($endpoint)) {
            throw new ClientException('Invalid RegionId', 'Invalid.RegionId');
        }
        EndpointProvider::setEndpoints([
            new Endpoint($regionId, $endpoint['RegionIds'], self::productDomains($endpoint['productDomains']))
        ]);
    }
}
