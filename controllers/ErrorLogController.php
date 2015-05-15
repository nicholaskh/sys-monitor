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
        $data = SysStats::find()->where(['tag' => 'nginx_404'])->andWhere(['between', 'ts', $startHour, $hour])->all();
        return $this->render('apache', [
            'data' => array_map(function($e) {return [$e->ts * 1000, $e->count];}, $data),
        ]);
    }

    public function actionApacheAjax() {
        $hour = time() - time() % 3600;
        $log = SysStats::find()->where(['tag' => 'nginx_404', 'ts' => $hour])->one();
        $count = $log ? $log->count : 10;
        $this->renderJson([$hour * 1000, $count]);
    }

}
