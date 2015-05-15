<?php

namespace app\controllers;

use yii\web\Controller;

class BaseController extends Controller {

    public $title;

    protected function renderJson($out) {
        header("Content-type: text/json");
        echo json_encode($out);
    }

}
