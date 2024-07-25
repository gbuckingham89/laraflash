<?php

namespace Gbuckingham89\Laraflash;

use Illuminate\Support\HtmlString;

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
     * @param string|HtmlString $message
     * @param string $level
     *
     * @return $this
     */
    public function flash(string|HtmlString $message, string $level): self
    {
        $this->session->flash('laraflash.message', $message);
        $this->session->flash('laraflash.level', $level);

        return $this;
    }

    /**
     * @param string|HtmlString $message
     *
     * @return $this
     */
    public function success(string|HtmlString $message) :self
    {
        return $this->flash($message, 'success');
    }

    /**
     * @param string|HtmlString $message
     *
     * @return $this
     */
    public function info(string|HtmlString $message): self
    {
        return $this->flash($message, 'info');
    }

    /**
     * @param string|HtmlString $message
     *
     * @return $this
     */
    public function warning(string|HtmlString $message): self
    {
        return $this->flash($message, 'warning');
    }

    /**
     * @param string|HtmlString $message
     *
     * @return $this
     */
    public function danger(string|HtmlString $message): self
    {
        return $this->flash($message, 'danger');
    }

}
