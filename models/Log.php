<?php

namespace app\models;

use \yii\mongodb\ActiveRecord;

class Log extends ActiveRecord {
    /**
     * @return string the name of the index associated with this ActiveRecord class.
     */
    public static function collectionName()
    {
        return 'log';
    }

    /**
     * @return array list of attribute names.
     */
    public function attributes()
    {
        return ['_id', 'ts', 'app', 'log'];
    }
}
