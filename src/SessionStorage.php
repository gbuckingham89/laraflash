<?php

namespace Gbuckingham89\Laraflash;

interface SessionStorage
{

    /**
     * @param string $key
     * @param mixed $value
     *
     * @return void
     */
    public function flash(string $key, mixed $value = null): void;

    /**
     * @param string $key
     * @param mixed $default
     *
     * @return void
     */
    public function get(string $key, mixed $default = null): void;

    /**
     * @return void
     */
    public function reflash(): void;

}
