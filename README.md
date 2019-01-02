# 阿里云核心SDK(附加STS和短信)

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


/**
 * SMS DEMO
 */
use luoyy\AliCore\Facades\AcsClient;
use luoyy\AliCore\Sms\Request\SendSmsRequest;


// 初始化SendSmsRequest实例用于设置发送短信的参数
$request = new SendSmsRequest();
//可选-启用https协议
//$request->setProtocol("https");
// 必填，设置短信接收号码
$request->setPhoneNumbers(/*mobile*/);
// 必填，设置签名名称，应严格按"签名名称"填写，请参考: https://dysms.console.aliyun.com/dysms.htm#/develop/sign
$request->setSignName(/*sign_name*/);
// 必填，设置模板CODE，应严格按"模板CODE"填写, 请参考: https://dysms.console.aliyun.com/dysms.htm#/develop/template
$request->setTemplateCode(/*template_code*/);
// 可选，设置模板参数, 假如模板中存在变量需要替换则为必填项
$request->setTemplateParam(json_encode(/*template_params*/, JSON_UNESCAPED_UNICODE));
// 可选，设置流水号
// $request->setOutId("yourOutId");
// 选填，上行短信扩展码（扩展码字段控制在7位或以下，无特殊需求用户请忽略此字段）
// $request->setSmsUpExtendCode("1234567");
// 发起访问请求
$response = AcsClient::getAcsResponse($request);
var_dump($response);
```
