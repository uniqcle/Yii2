<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        //Включаем ЧПУ
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,

            'rules' => [
                //Изменение url
                'novosti'   => 'news/news-list', 
                'novosti/<id:\d+>' => 'news/view',
               // 'novosti/<id:\d+>/<test:\w+>' => 'news/view',
                /* [
                    'pattern' => 'novosti/<id:\d+>/<test:\w+>',
                    'route' => 'news/view',
                    'suffix' => '.json',
                ],*/

            ],
        ],
        //Регистрируем класс в качестве компонента Yii
        'stringHelper' => [
            'class' => 'frontend\components\StringHelper',
        ], 

        //Регистрируем компонент отправки почты
        // File config/main.php: 
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => false, //Вкл./Выкл. тестового режима
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.yandex.ru',
                'username' => 'un...@yandex.ru',
                'password' => '******',
                'port' => '465',
                'encryption' => 'ssl',
                 'streamOptions' => [
                    'ssl' => [
                        'allow_self_signed' => true,
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                    ],
                ], 
        ],
],
         
    ],
    'params' => $params,
];
