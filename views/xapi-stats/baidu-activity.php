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
/*
    var reqCountSeries = [
<?php
/*
    foreach ($reqCountData as $path=>$timesData) {
        $dataStr = '[';
        foreach ($timesData as $td) {
            $dataStr .= "[{$td[0]}, {$td[1]}],";
        }
        $dataStr .= ']';
        $visible = ($path == "/" ? "true" : "false");
        echo "
{
    allowPointSelect: true,
    name: '" . CustomizeHelper::cleanXSS($path) . "',
    data: {$dataStr},
    visible: {$visible}
},
";
    }
 */
?>
    ];
 */
</script>
<script src="/js/baidu-activity.js"></script>
<div id="ma-container"></div>

<!--
<div id="req-count-container"></div>
-->
