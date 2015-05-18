<?php
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;
?>

<style>
.wrapper{width:1000px;margin: 10px 0 0 10px; float:left}
table{display:block;width:1000px;border:1px solid #999}
tr{width: 100%;}
td{vertical-align:top;word-break:break-all;}
ul, li{list-style-type:none;}
li{display: inline}
</style>
<div class="wrapper">
<table>
<tr>
    <th>时间</th>
    <th>日志</th>
</tr>
<?php
echo ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => '_log',
]);
?>
</table>
</div>
