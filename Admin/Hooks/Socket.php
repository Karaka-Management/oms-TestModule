<?php
/**
 * Jingga
 *
 * PHP Version 8.2
 *
 * @package   Modules\TestModule
 * @copyright Dennis Eichhorn
 * @license   OMS License 2.0
 * @version   1.0.0
 * @link      https://jingga.app
 */
declare(strict_types=1);

return [
    '/POST:Module:TestModule.*?\-create/' => [
        'callback' => ['\Modules\TestModule\Controller\Controller:testHook'],
    ],
];
