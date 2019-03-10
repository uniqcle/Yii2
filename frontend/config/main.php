<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'language' => 'ru-RU',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
            'enableCsrfValidation' => true,  //Включаем мета-теги, которые позволяют блокировать поддельные запросы
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
            'class' => 'common\components\StringHelper',
        ], 

        //Регистрируем компонент отправки почты
        // File config/main.php: 
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => false, //Вкл./Выкл. тестового режима
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.yandex.ru',
                'username' => 'uniqcle@yandex.ru',
                'password' => 'Kirill2207',
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


         //На время разработки isotope отключаем стандартные комплекты ресурсов Yii2 js
        /* 'assetManager' => [
            'bundles' => [
                    //Подключаем JqueryAsset
                    'yii\web\JqueryAsset' => [
                        'js'=>[]
                    ],
                    'yii\web\YiiAsset' => [
                        'js'=>[]
                    ],
                    'yii\bootstrap\BootstrapPluginAsset' => [
                        'js'=>[]
                    ],
              ],
         ],*/


         
    ],
    'params' => $params,

    //Устанавливаем глобально псевдонимы
    'aliases' => [
        '@upload' => '/var/www/project/frontend/web/upload',
        '@photos' => '@upload/photos', 
        '@images' => '/files/photos'
    ]
];
