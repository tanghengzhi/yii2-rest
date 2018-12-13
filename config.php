<?php
return [
    'id' => 'yii2-rest',
    // the basePath of the application will be the `yii2-rest` directory
    'basePath' => __DIR__,
    // this is where the application will find all controllers
    'controllerNamespace' => 'api\controllers',
    // set an alias to enable autoloading of classes from the 'api' namespace
    'aliases' => [
        '@api' => __DIR__,
    ],
];
