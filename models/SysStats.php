<?php

use yii\mongodb\ActiveRecord;

class SysStats extends ActiveRecord
{
    /**
     * @return string the name of the index associated with this ActiveRecord class.
     */
    public static function collectionName()
    {
        return 'sys_stats';
    }

    /**
     * @return array list of attribute names.
     */
    public function attributes()
    {
        return ['_id', 'tag', 'ts', 'count'];
    }
}
