<script>
    var series = [
<?php
    foreach ($data as $path=>$timesData) {
        $dataStr = '[';
        foreach ($timesData as $td) {
            $dataStr .= "[{$td[0]}, {$td[1]}]";
        }
        $dataStr .= ']';
        echo "
{
    allowPointSelect: true,
    name: '{$path}执行时间',
    data: $dataStr
},
";
    }
?>
    ];
</script>
<script src="/js/elapsed-stats.js"></script>
<div id="elapsed-container"></div>
