<?php

namespace Gbuckingham89\Laraflash;

use Illuminate\Support\Facades\Facade as BaseFacade;

/**
 * Class Facade
 * @package Gbuckingham89\Laraflash
 */
class Facade extends BaseFacade
{

    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laraflash';
    }

}