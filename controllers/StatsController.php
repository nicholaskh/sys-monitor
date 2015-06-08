<?php

namespace app\controllers;

use app\models\SysStats;

class StatsController extends BaseController {

    const SHOW_ELAPSED_STATS_NUMBER = 100;
    const ELAPSED_STATS_INTERVAL = 300;

    public $title = '数据统计';

    public function actionElapsed() {
        $endTime = time() - time() % self::ELAPSED_STATS_INTERVAL;
        $startTime = $endTime - self::SHOW_ELAPSED_STATS_NUMBER * self::ELAPSED_STATS_INTERVAL;
        $elapseds = SysStats::find()->where(['regex', 'tag', '/^elapsed\|.*/'])->andWhere(['between', 'ts', $startTime, $endTime])->all();
        $elapsedData = [];
        foreach ($elapseds as $e) {
            $path = explode('|', $e->tag, 2)[1];
            $elapsedData[$path][] = [$e->ts * 1000, $e->value];
        }

        $reqCounts = SysStats::find()->where(['regex', 'tag', '/^elapsed_count\|.*/'])->andWhere(['between', 'ts', $startTime, $endTime])->all();
        $reqCountData = [];
        foreach ($reqCounts as $r) {
            $path = explode('|', $r->tag, 2)[1];
            $reqCountData[$path][] = [$r->ts * 1000, $r->value];
        }
        return $this->render('elapsed', [
            'elapsedData' => $elapsedData,
            'reqCountData' => $reqCountData,
        ]);
    }

    // TODO
    public function actionElapsedAjax() {
        $endTime = time() - time() % self::ELAPSED_STATS_INTERVAL;
        $log = SysStats::find()->where(['tag' => '/^elapsed\|/', 'ts' => $endTime])->one();
        $value = ($log ? $log->value : 0);
        $this->renderJson([$endTime * 1000, $value]);
    }

}
