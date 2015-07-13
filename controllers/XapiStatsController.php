<?php

namespace app\controllers;

use app\models\SysStats;

class XapiStatsController extends BaseController {

    const SHOW_XAPI_STATS_NUMBER = 20;
    const XAPI_STATS_INTERVAL = 86400;

    public $title = 'XAPI数据统计';

    public function actionBaiduActivity() {
        $endTime = time() - time() % self::XAPI_STATS_INTERVAL;
        $startTime = $endTime - self::SHOW_XAPI_STATS_NUMBER * self::XAPI_STATS_INTERVAL;
        $maStats = SysStats::find()->where(['regex', 'tag', '/^ma\|.*/'])->andWhere(['between', 'ts', $startTime, $endTime])->orderBy('ts')->all();
        $maData = [];
        foreach ($maStats as $e) {
            $key = explode('|', $e->tag, 2)[1];
            $maData[$key][] = [$e->ts * 1000, $e->value];
        }

        //$reqCounts = SysStats::find()->where(['regex', 'tag', '/^elapsed_count\|.*/'])->andWhere(['between', 'ts', $startTime, $endTime])->orderBy('ts')->all();
        //$reqCountData = [];
        //foreach ($reqCounts as $r) {
        //    $path = explode('|', $r->tag, 2)[1];
        //    $reqCountData[$path][] = [$r->ts * 1000, $r->value];
        //}
        return $this->render('baidu-activity', [
            'maData' => $maData,
        //    'reqCountData' => $reqCountData,
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
