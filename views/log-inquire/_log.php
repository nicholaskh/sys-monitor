<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
?>
<tr>
    <td width='12%'><?= date('Y-m-d H:i:s', $model->ts) ?></td>
    <td><?= HtmlPurifier::process($model->log) ?></td>
</tr>
