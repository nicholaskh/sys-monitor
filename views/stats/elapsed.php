<?php
use app\helpers\CustomizeHelper;
?>
<script>
    var elapsedSeries = [
<?php
    foreach ($elapsedData as $path=>$timesData) {
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
?>
    ];

    var reqCountSeries = [
<?php
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
?>
    ];
</script>
<script src="/js/elapsed-stats.js"></script>
<div id="elapsed-container"></div>

<div id="req-count-container"></div>
