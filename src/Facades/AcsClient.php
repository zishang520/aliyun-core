<?php
namespace luoyy\AliCore\Facades;

use Illuminate\Support\Facades\Facade;
use luoyy\AliCore\DefaultAcsClient;

/**
 */
class AcsClient extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return DefaultAcsClient::class;
    }
}
