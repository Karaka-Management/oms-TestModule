<?php
/**
 * Karaka
 *
 * PHP Version 8.1
 *
 * @package   Modules\TestModule\Controller
 * @copyright Dennis Eichhorn
 * @license   OMS License 1.0
 * @version   1.0.0
 * @link      https://karaka.app
 */
declare(strict_types=1);

namespace Modules\TestModule\Controller;

use phpOMS\Message\RequestAbstract;
use phpOMS\Message\ResponseAbstract;
use phpOMS\Module\ModuleAbstract;

/**
 * Test controller class.
 *
 * @package Modules\TestModule\Controller
 * @license OMS License 1.0
 * @link    https://karaka.app
 * @since   1.0.0
 */
class Controller extends ModuleAbstract
{
    /**
     * Module path.
     *
     * @var string
     * @since 1.0.0
     */
    public const PATH = __DIR__;

    /**
     * Module version.
     *
     * @var string
     * @since 1.0.0
     */
    public const VERSION = '1.0.0';

    /**
     * Module name.
     *
     * @var string
     * @since 1.0.0
     */
    public const NAME = 'TestModule';

    /**
     * Providing.
     *
     * @var string[]
     * @since 1.0.0
     */
    protected static array $providing = [
    ];

    /**
     * Dependencies.
     *
     * @var string[]
     * @since 1.0.0
     */
    protected static array $dependencies = [];

    /**
     * Test Endpoint
     *
     * @param RequestAbstract  $request  Request
     * @param ResponseAbstract $response Response
     * @param mixed            $data     Generic data
     *
     * @return void
     *
     * @since 1.0.0
     * @codeCoverageIgnore
     */
    public function testEndpoint(RequestAbstract $request, ResponseAbstract $response, mixed $data = null) : void
    {
    }

    /**
     * Test Hook
     *
     * @param mixed $data Generic data
     *
     * @return void
     *
     * @since 1.0.0
     * @codeCoverageIgnore
     */
    public function testHook($data = null) : void
    {
    }
}
