<?php

namespace Gbuckingham89\Laraflash;

/**
 * Interface SessionStorage
 * @package Gbuckingham89\Laraflash
 */
interface SessionStorage
{
    /**
     * @param string $key
     * @param string $value
     */
    public function flash($key, $value);
}