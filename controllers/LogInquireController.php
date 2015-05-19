<?php

namespace app\controllers;

use app\models\Log;
use yii\data\ActiveDataProvider;
use yii\mongodb\Query;

class LogInquireController extends BaseController {

    public $title = '日志查询';

    public function actionApp() {
        $provider = new ActiveDataProvider([
            'query' => Log::find(),
            'sort' => [
                'defaultOrder' => [
                    'ts' => SORT_DESC,
                ],
            ],
            'pagination' => [
                'pageSize' => 30,
            ]
        ]);

        return $this->render('app', [
            'dataProvider' => $provider,
        ]);
    }

    // TODO (place holder)
    public function actionAppAjax() {
        $this->renderJson();
    }

}
