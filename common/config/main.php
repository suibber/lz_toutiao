<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=louzhe_toutiao',
            'username' => 'root',
            'password' => 'maiyGs@liowe83',
            'charset' => 'utf8',
            'tablePrefix'=>'toutiao_',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
                'rules' => [
                // your rules go here
            ],
        ],
    ],
];
