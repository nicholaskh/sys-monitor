<?php
use app\helpers\CustomizeHelper;
?>
<script>
    var series = [
<?php
    foreach ($data as $path=>$timesData) {
        $dataStr = '[';
        foreach ($timesData as $td) {
            $dataStr .= "[{$td[0]}, {$td[1]}],";
        }
        $dataStr .= ']';
        $visible = ($path == "/" ? "true" : "false");
        echo "
{
    allowPointSelect: true,
    name: '" . CustomizeHelper::getInstance()->cleanXSS($path) . "',
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
