<?php

namespace Gbuckingham89\Laraflash;

use Illuminate\Session\Store;

class LaravelSessionStorage implements SessionStorage
{

    /**
     * @var \Illuminate\Session\Store
     */
    private Store $session;

    /**
     * LaravelSessionStorage constructor.
     *
     * @param \Illuminate\Session\Store $session
     */
    function __construct(Store $session)
    {
        $this->session = $session;
    }

	/**
	 * Flash a value to the session
	 *
	 * @param string $key
	 * @param mixed $value
     *
     * @return void
	 */
	public function flash(string $key, $value=null): void
	{
		$this->session->flash($key, $value);
	}

	/**
	 * Get a value from the session
	 *
	 * @param string $key
	 * @param mixed $default
     *
     * @return void
	 */
	public function get(string $key, $default=null): void
	{
		$this->session->get($key, $default);
	}

	/**
	 * Reflash data in the session
     *
     * @return void
	 */
	public function reflash(): void
	{
		$this->session->reflash();
	}

}