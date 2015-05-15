<?php

namespace app\controllers;

use Yii;
use app\models\SysStats;

class ErrorLogController extends BaseController {

    const SHOW_HIST_LOG_NUMBER = 10;

    public $title = '服务器错误日志监控';

    public function actionApache() {
        $hour = time() - time() % 3600;
        $startHour = $hour - self::SHOW_HIST_LOG_NUMBER * 3600;
        $data404 = SysStats::find()->where(['tag' => 'apache_404'])->andWhere(['between', 'ts', $startHour, $hour])->all();
        //FIXME change tag to apache_500
        $data500 = SysStats::find()->where(['tag' => 'apache_404'])->andWhere(['between', 'ts', $startHour, $hour])->all();
        return $this->render('apache', [
            'data404' => array_map(function($e) {return [$e->ts * 1000, $e->count];}, $data404),
            'data500' => array_map(function($e) {return [$e->ts * 1000, $e->count];}, $data500),
        ]);
    }

    public function actionApacheAjax() {
        $code = \Yii::$app->request->get('code');
        $hour = time() - time() % 3600;
        //FIXME
        //$log = SysStats::find()->where(['tag' => "apache_$code", 'ts' => $hour])->one();
        $log = SysStats::find()->where(['tag' => "apache_404", 'ts' => $hour])->one();
        $count = $log ? $log->count : 10;
        $this->renderJson([$hour * 1000, $count]);
    }

}
