<?php

namespace app\controllers;

use Yii;

class SysManagerController extends BaseController {

    public $enableCsrfValidation = false;

    const PATH_GCOLLECTOR = '/gcollector';
    const PATH_PIPED = '/piped';
    
    public function actionSwitch() {
        $zk = Yii::$app->get('zookeeper');
        $zk->connect();
        $gcollectors = $zk->getChildren(self::PATH_GCOLLECTOR);
        $pipeds = $zk->getChildren(self::PATH_PIPED);
        return $this->render('switch', [
            'gcollectors' => $gcollectors,
            'pipeds' => $pipeds,
        ]);
    }

}
