<?php

return [
    'app' => [
        'basePath' => dirname(__DIR__).'/src',
        /*
        'controllerMap' => [
            'fixture' => [ // Fixture generation command line.
                '__class' => 'yii\faker\FixtureController',
            ],
        ],
        */
    ],

    'logger' => [
        '__construct()' => [
            'targets' => [
                [
                    '__class' => Yiisoft\Log\FileTarget::class,
                    'levels'  => ['error', 'warning'],
                ],
            ],
        ],
    ],

    'cache' => [
        '__class' => Yiisoft\Cache\Cache::class,
        'handler' => [
            '__class'   => Yiisoft\Cache\FileCache::class,
            'keyPrefix' => 'my-project',
        ],
    ],
    'db' => array_filter([
        '__class'           => yii\db\Connection::class,
        'dsn'               => $params['db.dsn'],
        'username'          => $params['db.username'],
        'password'          => $params['db.password'],
        'enableSchemaCache' => defined('YII_ENV') && YII_ENV !== 'dev',
    ]),
];
