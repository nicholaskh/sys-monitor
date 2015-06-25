<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
?>
<tr>
    <td width='12%'><?= date('Y-m-d H:i:s', $model->ts) ?></td>
    <td width='6%'><?= $model->app ?></td>
    <td><?= HtmlPurifier::process($model->log) ?></td>
</tr>
