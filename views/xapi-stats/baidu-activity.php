<?php
use app\helpers\CustomizeHelper;
?>
<script>
    var maSeries = [
<?php
    foreach ($maData as $tag=>$timesData) {
        $dataStr = '[';
        foreach ($timesData as $td) {
            $dataStr .= "[{$td[0]}, {$td[1]}],";
        }
        $dataStr .= ']';
        $visible = "true";
        echo "
{
    allowPointSelect: true,
    name: '" . CustomizeHelper::cleanXSS($tag) . "',
    data: {$dataStr},
    visible: {$visible}
},
";
    }
?>
    ];
    var macSeries = [
<?php
    foreach ($macData as $tag=>$timesData) {
        $dataStr = '[';
        foreach ($timesData as $td) {
            $dataStr .= "[{$td[0]}, {$td[1]}],";
        }
        $dataStr .= ']';
        $visible = "true";
        echo "
{
    allowPointSelect: true,
    name: '" . CustomizeHelper::cleanXSS($tag) . "',
    data: {$dataStr},
    visible: {$visible}
},
";
    }
?>
    ];
    var mcSeries = [
<?php
    foreach ($mcData as $tag=>$timesData) {
        $dataStr = '[';
        foreach ($timesData as $td) {
            $dataStr .= "[{$td[0]}, {$td[1]}],";
        }
        $dataStr .= ']';
        $visible = "true";
        echo "
{
    allowPointSelect: true,
    name: '" . CustomizeHelper::cleanXSS($tag) . "',
    data: {$dataStr},
    visible: {$visible}
},
";
    }
?>
    ];
</script>
<script src="/js/baidu-activity.js"></script>
<div id="ma-container"></div>
<div id="mac-container"></div>
<div id="mc-container"></div>
