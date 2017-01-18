<?php

namespace Gbuckingham89\Laraflash;

use Illuminate\Support\Facades\Facade;

/**
 * Class Laraflash
 * @package Gbuckingham89\Laraflash
 */
class Laraflash extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laraflash';
    }
}