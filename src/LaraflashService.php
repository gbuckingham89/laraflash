<?php

namespace Gbuckingham89\Laraflash;

/**
 * Class LaraflashService
 * @package Gbuckingham89\Laraflash
 */
class LaraflashService
{

    /**
     * @var \Gbuckingham89\Laraflash\SessionStorage
     */
    private $session;

    /**
     * LaraflashService constructor.
     *
     * @param \Gbuckingham89\Laraflash\SessionStorage $session
     */
    function __construct(SessionStorage $session)
    {
        $this->session = $session;
    }

	/**
	 * @return \Gbuckingham89\Laraflash\LaraflashService
	 */
	public function reflash()
    {
	    $this->session->flash('laraflash.message', $this->session->get('laraflash.message'));
	    $this->session->flash('laraflash.level', $this->session->get('laraflash.level'));
	    return $this;
    }

    /**
     * @param string $message
     * @param string $level
     *
     * @return \Gbuckingham89\Laraflash\LaraflashService
     */
    public function flash($message, $level)
    {
        $this->session->flash('laraflash.message', $message);
        $this->session->flash('laraflash.level', $level);
        return $this;
    }

    /**
     * @param string $message
     *
     * @return \Gbuckingham89\Laraflash\LaraflashService
     */
    public function success($message)
    {
        return $this->flash($message, 'success');
    }

    /**
     * @param string $message
     *
     * @return \Gbuckingham89\Laraflash\LaraflashService
     */
    public function info($message)
    {
        return $this->flash($message, 'info');
    }

    /**
     * @param string $message
     *
     * @return \Gbuckingham89\Laraflash\LaraflashService
     */
    public function warning($message)
    {
        return $this->flash($message, 'warning');
    }

    /**
     * @param string $message
     *
     * @return \Gbuckingham89\Laraflash\LaraflashService
     */
    public function danger($message)
    {
        return $this->flash($message, 'danger');
    }

}