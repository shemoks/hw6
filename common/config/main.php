<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'myComponent' => [
            'class' => 'common\components\ExampleComponent',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
