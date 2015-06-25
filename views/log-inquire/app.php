<?php
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;
?>

<style>
table{display:block;width:1000px;border:1px solid #999}
tr{width: 100%;}
td{vertical-align:top;word-break:break-all;text-align:center;}
ul, li{list-style-type:none;}
li{display: inline}
.search{margin-bottom: 10px;}
.search label{margin-left: 10px;}
.gray{color: #999}
</style>

<div class="search">
<form method="GET" action="">
    <label>起始日期<span class="gray">(YYYY-MM-DD):</span></label>
    <input name="startdate" size=10 <?= ($startDate?"value=$startDate":'')?> />
    <label>结束日期:</label>
    <input name="enddate" size=10 <?= ($endDate?"value=$endDate":'')?> />
    <label>APP:</label>
    <input name="app" size=10 <?= ($app?"value=$app":'')?> />
    <input type="submit" value="查询" />
</form>
</div>
<?php
echo ListView::widget([
    'dataProvider' => $dataProvider,
    'layout' => '{summary}<table>{sorter}{items}</table>{pager}',
    'itemView' => '_log',
    'sorter' => [
        'options' => [
            'tag' => 'tr',
            'item' => function($item, $index) {
                return "<th>{$item}</th>";
            },
        ],
    ]
]);
?>
