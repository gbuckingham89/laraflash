<?php

namespace Gbuckingham89\Laraflash;

use Illuminate\Support\HtmlString;
use Illuminate\Testing\TestResponse;

abstract class LaraflashAssertions
{
    /**
     * @param \Illuminate\Testing\TestResponse $response
     */
    public static function assertResponseDoesntHaveLaraflash(TestResponse $response): void
    {
        $response->assertSessionMissing('laraflash.level');
        $response->assertSessionMissing('laraflash.message');
    }

    /**
     * @param \Illuminate\Testing\TestResponse $response
     * @param string $level
     * @param string|HtmlString|null $message
     */
    public static function assertResponseHasLaraflash(
        TestResponse $response,
        string $level,
        string|HtmlString|null $message = null
    ): void {
        $response->assertSessionHas('laraflash.level', $level);
        $response->assertSessionHas('laraflash.message', $message);
    }

    /**
     * @param \Illuminate\Testing\TestResponse $response
     * @param string|HtmlString|null $message
     */
    public static function assertResponseHasLaraflashSuccess(
        TestResponse $response,
        string|HtmlString|null $message = null,
    ): void
    {
        self::assertResponseHasLaraflash($response, 'success', $message);
    }

    /**
     * @param \Illuminate\Testing\TestResponse $response
     * @param string|HtmlString|null $message
     */
    public static function assertResponseHasLaraflashInfo(
        TestResponse $response,
        string|HtmlString|null $message = null,
    ): void
    {
        self::assertResponseHasLaraflash($response, 'info', $message);
    }

    /**
     * @param \Illuminate\Testing\TestResponse $response
     * @param string|HtmlString|null $message
     */
    public static function assertResponseHasLaraflashWarning(
        TestResponse $response,
        string|HtmlString|null $message = null,
    ): void
    {
        self::assertResponseHasLaraflash($response, 'warning', $message);
    }

    /**
     * @param \Illuminate\Testing\TestResponse $response
     * @param string|HtmlString|null $message
     */
    public static function assertResponseHasLaraflashDanger(
        TestResponse $response,
        string|HtmlString|null $message = null,
    ): void
    {
        self::assertResponseHasLaraflash($response, 'danger', $message);
    }
}
