<?php
namespace luoyy\AliCore\Regions;

use luoyy\AliCore\Regions\Endpoint;
use luoyy\AliCore\Regions\EndpointProvider;
use luoyy\AliCore\Regions\ProductDomain;

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
    public static function regionIds()
    {
        return array('jp-fudao-1', 'me-east-1', 'us-east-1', 'ap-northeast-1', 'cn-hangzhou-bj-b01', 'cn-hongkong', 'cn-beijing-nu16-b01', 'cn-beijing-am13-c01', 'in-west-antgroup-1', 'cn-guizhou-gov', 'in-west-antgroup-2', 'cn-qingdao-cm9', 'tw-snowcloud-kaohsiung', 'cn-shanghai-finance-1', 'cn-guizhou', 'cn-qingdao-finance', 'cn-beijing-gov-1', 'cn-shanghai', 'cn-shenzhen-inner', 'cn-fujian', 'in-mumbai-alipay', 'us-west-1', 'cn-shanghai-inner', 'cn-anhui-gov-1', 'cn-hangzhou-finance', 'cn-hangzhou', 'cn-beijing-inner', 'cn-haidian-cm12-c01', 'cn-anhui-gov', 'cn-shenzhen', 'ap-southeast-2', 'cn-qingdao', 'cn-shenzhen-su18-b02', 'cn-shenzhen-su18-b03', 'cn-shenzhen-su18-b01', 'ap-southeast-antgroup-1', 'oss-cn-bjzwy', 'cn-henan-am12001', 'cn-beijing', 'cn-hangzhou-d', 'cn-gansu-am6', 'cn-ningxiazhongwei', 'cn-shanghai-et2-b01', 'cn-ningxia-am7-c01', 'cn-shenzhen-finance-1', 'ap-southeast-1', 'cn-shenzhen-st4-d01', 'eu-central-1', 'cn-zhangjiakou');
    }

    public static function productDomains()
    {
        return array(new ProductDomain('afs', 'afs.aliyuncs.com'), new ProductDomain('ARMS', 'arms.cn-hangzhou.aliyuncs.com'), new ProductDomain('CS', 'cs.aliyuncs.com'), new ProductDomain('COS', 'cos.aliyuncs.com'), new ProductDomain('Ess', 'ess.aliyuncs.com'), new ProductDomain('Ace-ops', 'ace-ops.cn-hangzhou.aliyuncs.com'), new ProductDomain('Billing', 'billing.aliyuncs.com'), new ProductDomain('Dqs', 'dqs.aliyuncs.com'), new ProductDomain('Dds', 'mongodb.aliyuncs.com'), new ProductDomain('Sts', 'sts.aliyuncs.com'), new ProductDomain('Sms', 'sms.aliyuncs.com'), new ProductDomain('Msg', 'msg-inner.aliyuncs.com'), new ProductDomain('Jaq', 'jaq.aliyuncs.com'), new ProductDomain('Push', 'cloudpush.aliyuncs.com'), new ProductDomain('Live', 'live.aliyuncs.com'), new ProductDomain('Kms', 'kms.cn-hangzhou.aliyuncs.com'), new ProductDomain('Location', 'location.aliyuncs.com'), new ProductDomain('Hpc', 'hpc.aliyuncs.com'), new ProductDomain('ChargingService', 'chargingservice.aliyuncs.com'), new ProductDomain('R-kvstore', 'r-kvstore-cn-hangzhou.aliyuncs.com'), new ProductDomain('Alert', 'alert.aliyuncs.com'), new ProductDomain('Msc', 'msc-inner.aliyuncs.com'), new ProductDomain('Drc', 'drc.aliyuncs.com'), new ProductDomain('Yundun', 'yundun-cn-hangzhou.aliyuncs.com'), new ProductDomain('Ubsms-inner', 'ubsms-inner.aliyuncs.com'), new ProductDomain('Ocs', 'm-kvstore.aliyuncs.com'), new ProductDomain('Dm', 'dm.aliyuncs.com'), new ProductDomain('Green', 'green.cn-hangzhou.aliyuncs.com'), new ProductDomain('Commondriver', 'common.driver.aliyuncs.com'), new ProductDomain('oceanbase', 'oceanbase.aliyuncs.com'), new ProductDomain('Workorder', 'workorder.aliyuncs.com'), new ProductDomain('Yundunhsm', 'yundunhsm.aliyuncs.com'), new ProductDomain('Iot', 'iot.aliyuncs.com'), new ProductDomain('jaq', 'jaq.aliyuncs.com'), new ProductDomain('Oms', 'oms.aliyuncs.com'), new ProductDomain('live', 'live.aliyuncs.com'), new ProductDomain('Ecs', 'ecs-cn-hangzhou.aliyuncs.com'), new ProductDomain('M-kvstore', 'm-kvstore.aliyuncs.com'), new ProductDomain('Vpc', 'vpc.aliyuncs.com'), new ProductDomain('BatchCompute', 'batchCompute.aliyuncs.com'), new ProductDomain('Domain', 'domain.aliyuncs.com'), new ProductDomain('AMS', 'ams.aliyuncs.com'), new ProductDomain('ROS', 'ros.aliyuncs.com'), new ProductDomain('PTS', 'pts.aliyuncs.com'), new ProductDomain('Qualitycheck', 'qualitycheck.aliyuncs.com'), new ProductDomain('Ubsms', 'ubsms.aliyuncs.com'), new ProductDomain('Apigateway', 'apigateway.cn-hangzhou.aliyuncs.com'), new ProductDomain('CloudAPI', 'apigateway.cn-hangzhou.aliyuncs.com'), new ProductDomain('CmsSiteMonitor', 'sitemonitor.aliyuncs.com'), new ProductDomain('Ace', 'ace.cn-hangzhou.aliyuncs.com'), new ProductDomain('Mts', 'mts.cn-hangzhou.aliyuncs.com'), new ProductDomain('Oas', 'cn-hangzhou.oas.aliyuncs.com'), new ProductDomain('CF', 'cf.aliyuncs.com'), new ProductDomain('Acs', 'acs.aliyun-inc.com'), new ProductDomain('Httpdns', 'httpdns-api.aliyuncs.com'), new ProductDomain('Location-inner', 'location-inner.aliyuncs.com'), new ProductDomain('Aas', 'aas.aliyuncs.com'), new ProductDomain('Alidns', 'alidns.aliyuncs.com'), new ProductDomain('HPC', 'hpc.aliyuncs.com'), new ProductDomain('Emr', 'emr.aliyuncs.com'), new ProductDomain('HighDDos', 'yd-highddos-cn-hangzhou.aliyuncs.com'), new ProductDomain('Vpc-inner', 'vpc-inner.aliyuncs.com'), new ProductDomain('Cms', 'metrics.cn-hangzhou.aliyuncs.com'), new ProductDomain('Slb', 'slb.aliyuncs.com'), new ProductDomain('Risk', 'risk-cn-hangzhou.aliyuncs.com'), new ProductDomain('Dts', 'dts.aliyuncs.com'), new ProductDomain('Bss', 'bss.aliyuncs.com'), new ProductDomain('Ots', 'ots-pop.aliyuncs.com'), new ProductDomain('Cdn', 'cdn.aliyuncs.com'), new ProductDomain('Ram', 'ram.aliyuncs.com'), new ProductDomain('Drds', 'drds.aliyuncs.com'), new ProductDomain('Rds', 'rds.aliyuncs.com'), new ProductDomain('Crm', 'crm-cn-hangzhou.aliyuncs.com'), new ProductDomain('OssAdmin', 'oss-admin.aliyuncs.com'), new ProductDomain('Sales', 'sales.cn-hangzhou.aliyuncs.com'), new ProductDomain('Ons', 'ons.aliyuncs.com'), new ProductDomain('Oss', 'oss-cn-hangzhou.aliyuncs.com'), new ProductDomain('YundunDdos', 'inner-yundun-ddos.cn-hangzhou.aliyuncs.com'), new ProductDomain('Dyvmsapi', 'dyvmsapi.aliyuncs.com'), new ProductDomain('Dysmsapi', 'dysmsapi.aliyuncs.com'), new ProductDomain('Dycdpapi', 'dycdpapi.aliyuncs.com'), new ProductDomain('Dyiotapi', 'dyiotapi.aliyuncs.com'), new ProductDomain('Dyplsapi', 'dyplsapi.aliyuncs.com'), new ProductDomain('Dypnsapi', 'dypnsapi.aliyuncs.com'), new ProductDomain('Snsuapi', 'snsuapi.aliyuncs.com'));
    }

    public static function setEndpoints($regionId = 'cn-hangzhou')
    {
        EndpointProvider::setEndpoints(array(new Endpoint($regionId, self::regionIds(), self::productDomains())));
    }
}
