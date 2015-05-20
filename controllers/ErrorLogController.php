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
        $data = SysStats::find()->where(['tag' => 'apache_404'])->andWhere(['between', 'ts', $startHour, $hour])->all();
        $stime = count($data) > 0 ? $data[0]->ts : 0;
        $etime = count($data) > 0 ? $data[count($data) - 1]->ts : 0;
        $data404 = [];
        if (count($data)) {
            for ($t = $stime, $i = 0, $j = 0; $t <= $etime; $t += self::HIST_LOG_INTERVAL, $i++) {
                $d = $data[$j];
                if ($d->ts == $t) {
                    $data404[$i] = [$d->ts * 1000, $d->value];
                    $j++;
                } else {
                    $data404[$i] = [$t * 1000, 0];
                }
            }
        }

        $data = SysStats::find()->where(['tag' => 'apache_500'])->andWhere(['between', 'ts', $startHour, $hour])->all();
        $stime = count($data) > 0 ? $data[0]->ts : 0;
        $etime = count($data) > 0 ? $data[count($data) - 1]->ts : 0;
        $data500 = [];
        if (count($data)) {
            for ($t = $stime, $i = 0, $j = 0; $t <= $etime; $t += self::HIST_LOG_INTERVAL, $i++) {
                $d = $data[$j];
                if ($d->ts == $t) {
                    $data500[$i] = [$d->ts * 1000, $d->value];
                    $j++;
                } else {
                    $data500[$i] = [$t * 1000, 0];
                }
            }
        }
        return $this->render('apache', [
            'data404' => $data404,
            'data500' => $data500,
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
