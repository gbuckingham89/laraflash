<?php

namespace Gbuckingham89\Laraflash;

class Laraflash
{

    /**
     * @var \Gbuckingham89\Laraflash\SessionStorage
     */
    private SessionStorage $session;

    /**
     * Laraflash constructor.
     *
     * @param \Gbuckingham89\Laraflash\SessionStorage $session
     */
    function __construct(SessionStorage $session)
    {
        $this->session = $session;
    }

    /**
     * @return $this
     */
    public function reflash(): self
    {
	    $this->session->reflash();

	    return $this;
    }

    /**
     * @param string $message
     * @param string $level
     *
     * @return $this
     */
    public function flash(string $message, string $level): self
    {
        $this->session->flash('laraflash.message', $message);
        $this->session->flash('laraflash.level', $level);

        return $this;
    }

    /**
     * @param string $message
     *
     * @return $this
     */
    public function success(string $message) :self
    {
        return $this->flash($message, 'success');
    }

    /**
     * @param string $message
     *
     * @return $this
     */
    public function info(string $message): self
    {
        return $this->flash($message, 'info');
    }

    /**
     * @param string $message
     *
     * @return $this
     */
    public function warning(string $message): self
    {
        return $this->flash($message, 'warning');
    }

    /**
     * @param string $message
     *
     * @return $this
     */
    public function danger(string $message): self
    {
        return $this->flash($message, 'danger');
    }

}