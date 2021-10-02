<?php

namespace Gbuckingham89\Laraflash\Facade;

use Illuminate\Support\Facades\Facade;

class Laraflash extends Facade
{

    /**
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'laraflash';
    }

}