# 阿里云核心SDK(集成STS)

### 安装包
```bash
composer require luoyy/aliyun-core
```
###### 在 app.php 中注册服务器提供者(Laravel5.5+支持自动发现)
```php
luoyy\AliCore\Providers\AcsClientServiceProvider
```
###### ENV
```env
#阿里云CORE配置
ALI_REGION_ID=
ALI_ACCESS_KEY_ID=
ALI_ACCESS_KEY_SECRET=
```

### Quick Sample Usage
```php
/**
 * STS DEMO
 */
use luoyy\AliCore\Facades\AcsClient;
use luoyy\AliCore\Sts\Request\AssumeRoleRequest;


$request = new AssumeRoleRequest();
$request->setRoleSessionName("client_name");
$request->setRoleArn(/*role_arn*/);
$request->setPolicy(/*policy*/);
$request->setDurationSeconds(/*token_expire_time*/);
$response = AcsClient::getAcsResponse($request);
var_dump($response);
```
#### 相关包
| 包名 | 描述 |
| :------------ | :------------ |
| luoyy/aliyun-core-sms |  短信sdk |


### 更新日志
* `2020.09.30`：更新版本到2.0，更新SDK，除了STS其它模块改为omposer包发布
