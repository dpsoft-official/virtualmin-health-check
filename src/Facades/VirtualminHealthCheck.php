<?php

namespace Dpsoft\VirtualminHealthCheck\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Dpsoft\VirtualminHealthCheck\VirtualminHealthCheck
 */
class VirtualminHealthCheck extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'virtualmin-health-check';
    }
}
