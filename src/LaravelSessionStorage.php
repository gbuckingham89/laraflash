<?php

namespace Gbuckingham89\Laraflash;

use Illuminate\Session\Store;

class LaravelSessionStorage implements SessionStorage
{
    /**
     * @var \Illuminate\Session\Store
     */
    private Store $sessionStore;

    /**
     * LaravelSessionStorage constructor.
     *
     * @param \Illuminate\Session\Store $sessionStore
     */
    function __construct(Store $sessionStore)
    {
        $this->sessionStore = $sessionStore;
    }

	/**
	 * Flash a value to the session
	 *
	 * @param string $key
	 * @param mixed $value
     *
     * @return void
	 */
	public function flash(string $key, mixed $value = null): void
	{
		$this->sessionStore->flash($key, $value);
	}

	/**
	 * Get a value from the session
	 *
	 * @param string $key
	 * @param mixed $default
     *
     * @return void
	 */
	public function get(string $key, mixed $default = null): void
	{
		$this->sessionStore->get($key, $default);
	}

	/**
	 * Reflash data in the session
     *
     * @return void
	 */
	public function reflash(): void
	{
		$this->sessionStore->reflash();
	}
}
