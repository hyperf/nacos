<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
return [
    'service' => [
        // nacos server url like https://nacos.hyperf.io, Priority is higher than host:port
        // 'url' => '',
        // The nacos host info
        'host' => '127.0.0.1',
        'port' => 8848,
        'service_name' => 'service01',
        // The nacos account info
        'username' => null,
        'password' => null,
        'guzzle' => [
            'config' => null,
        ],
        'instance' => [
            'heartbeat' => 5
        ],
    ],
];
