<?php

// change the following paths if necessary
$yii = dirname(__FILE__) . '/../yii/framework/yii.php';

// If we are accessing this system on our local host...
if (gethostbyname($_SERVER['SERVER_NAME']) == '127.0.0.1') {
    $config = dirname(__FILE__) . '/../protected/config/dev.php';
    defined('YII_DEBUG') or define('YII_DEBUG', true);
    defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL', 3);
} else {
    $config = dirname(__FILE__) . '/../protected/config/main.php';
}

require_once($yii);

Yii::createWebApplication($config)->run();
