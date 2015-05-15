<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class ErrorLogController extends BaseController {

    public $title = '服务器错误日志监控';

    public function actionApache() {
        return $this->render('apache');
    }

    public function actionApacheAjax() {
        // The x value is the current JavaScript time, which is the Unix time multiplied 
        // by 1000.
        $x = time() * 1000;
        // The y value is a random number
        $y = rand(0, 100);

        // Create a PHP array and echo it as JSON
        $ret = array($x, $y);
        $this->renderJson($ret);
    }

}
