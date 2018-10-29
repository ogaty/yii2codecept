<?php
require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/../../vendor/yiisoft/yii2/Yii.php';

$config = require __DIR__ . '/../../config/web.php';

(new yii\web\Application($config));

Codeception\Util\Autoload::register('MyCommon', 'Class', __DIR__ . '/common');
