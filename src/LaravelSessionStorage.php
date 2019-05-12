<?php

namespace Gbuckingham89\Laraflash;

use Illuminate\Session\Store;

/**
 * Class LaravelSessionStorage
 * @package Gbuckingham89\Laraflash
 */
class LaravelSessionStorage implements SessionStorage
{

    /**
     * @var \Illuminate\Session\Store
     */
    private $session;

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
	 * @param string $value
	 */
	public function flash($key, $value)
	{
		$this->session->flash($key, $value);
	}

	/**
	 * Get a value from the session
	 *
	 * @param string $key
	 * @param null   $default
	 */
	public function get($key, $default=null)
	{
		$this->session->get($key, $default);
	}

	/**
	 * Reflash data in the session
	 */
	public function reflash()
	{
		$this->session->reflash();
	}

}