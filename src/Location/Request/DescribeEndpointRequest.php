<?php
namespace luoyy\AliCore\Location\Request;

use luoyy\AliCore\RpcAcsRequest;

class DescribeEndpointRequest extends RpcAcsRequest
{
    public function __construct()
    {
        parent::__construct('Location', '2015-06-12', 'DescribeEndpoints');
        $this->setProtocol("https");
        $this->setMethod("POST");
    }

    private $id;

    private $serviceCode;

    private $type;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        $this->queryParameters["Id"] = $id;
    }

    public function getServiceCode()
    {
        return $this->serviceCode;
    }

    public function setServiceCode($serviceCode)
    {
        $this->serviceCode = $serviceCode;
        $this->queryParameters["ServiceCode"] = $serviceCode;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
        $this->queryParameters["Type"] = $type;
    }
}
