<?php

namespace app\controllers;

use Yii;
use app\models\SysStats;

class ErrorLogController extends BaseController {

    const SHOW_HIST_LOG_NUMBER = 10;
    const HIST_LOG_INTERVAL = 3600;

    public $title = '服务器错误日志监控';

    public function actionApache() {
        $hour = time() - time() % self::HIST_LOG_INTERVAL;
        $startHour = $hour - self::SHOW_HIST_LOG_NUMBER * self::HIST_LOG_INTERVAL;
        $data404 = SysStats::find()->where(['tag' => 'apache_404'])->andWhere(['between', 'ts', $startHour, $hour])->all();
        $data500 = SysStats::find()->where(['tag' => 'apache_500'])->andWhere(['between', 'ts', $startHour, $hour])->all();
        return $this->render('apache', [
            'data404' => array_map(function($e) {return [$e->ts * 1000, $e->value];}, $data404),
            'data500' => array_map(function($e) {return [$e->ts * 1000, $e->value];}, $data500),
        ]);
    }

    public function actionApacheAjax() {
        $hour = time() - time() % 3600;
        $log = SysStats::find()->where(['tag' => ['apache_404', 'apache_500'], 'ts' => $hour])->all();
        $ret = [];
        foreach ($log as $l) {
            if ($l->tag == 'apache_404') {
                $ret[0] = [$hour * 1000, $l->value];
            } else {
                $ret[1] = [$hour * 1000, $l->value];
            }
        }
        for ($i = 0; $i < 2; $i ++) {
            if (!isset($ret[$i])) {
                $ret[$i] = [$hour * 1000, 0];
            }
        }
        $this->renderJson($ret);
    }

}
