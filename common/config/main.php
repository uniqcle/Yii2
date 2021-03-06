<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'StringHelper' =>  [
            'class' => 'common\components\StringHelper',
        ], 
        'FileHelper' => [
            'class' => 'common\components\FileHelper'
        ]
    ],
];
