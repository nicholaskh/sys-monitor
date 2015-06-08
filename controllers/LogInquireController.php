<?php

namespace app\controllers;

use app\models\Log;
use yii\data\ActiveDataProvider;
use yii\mongodb\Query;

class LogInquireController extends BaseController {

    public $title = '日志查询';

    public function actionApp() {
        $query = Log::find();
        if ($startDate = \Yii::$app->request->get('startdate')) {
            $sts = strtotime($startDate);
        } else {
            $sts = 0;
        }
        if ($endDate = \Yii::$app->request->get('enddate')) {
            $ets = strtotime($endDate) + 86399;
        } else {
            $ets = time();
        }
        $query = $query->andWhere(['between', 'ts', $sts, $ets]);
        $provider = new ActiveDataProvider([
            'query' => $query,
            'sort' => [
                'defaultOrder' => [
                    'ts' => SORT_DESC,
                ],
                'attributes' => [
                    'ts' => [
                        'label' => '日期',
                    ],
                    'log' => [
                        'label' => '日志',
                    ],
                ],
            ],
            'pagination' => [
                'pageSize' => 30,
            ]
        ]);

        return $this->render('app', [
            'dataProvider' => $provider,
            'startDate' => $startDate,
            'endDate' => $endDate,
        ]);
    }

    // TODO (place holder)
    public function actionAppAjax() {
        $this->renderJson();
    }

}
