<?php
/**
 * Jingga
 *
 * PHP Version 8.2
 *
 * @package   Modules
 * @copyright Dennis Eichhorn
 * @license   OMS License 2.0
 * @version   1.0.0
 * @link      https://jingga.app
 */
declare(strict_types=1);

use Modules\TestModule\Controller\Controller;
use phpOMS\Router\RouteVerb;

return [
    '^.*/testmodule(\?.*$|$)' => [
        [
            'dest'       => '\Modules\TestModule\Controller\Controller:testEndpoint',
            'verb'       => RouteVerb::GET,
            'csrf'       => true,
            'active' => true,
            'permission' => [
                'module' => Controller::NAME,
                'type'   => 1,
                'state'  => 2,
            ],
        ],
    ],
];
