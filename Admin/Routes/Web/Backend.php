<?php
/**
 * Orange Management
 *
 * PHP Version 8.0
 *
 * @package   Modules
 * @copyright Dennis Eichhorn
 * @license   OMS License 1.0
 * @version   1.0.0
 * @link      https://orange-management.org
 */
declare(strict_types=1);

use Modules\TestModule\Controller\Controller;
use phpOMS\Router\RouteVerb;

return [
    '^.*/testmodule.*$' => [
        [
            'dest'       => '\Modules\TestModule\Controller\Controller:testEndpoint',
            'verb'       => RouteVerb::GET,
            'permission' => [
                'module' => Controller::MODULE_NAME,
                'type'   => 1,
                'state'  => 2,
            ],
        ],
    ],
];
