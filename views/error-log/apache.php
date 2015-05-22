<script>
    var data = [];
    data[0] = [
<?php
    foreach ($data404 as $d) {
        echo "[$d[0], $d[1]],";
    }
?>
    ];
    data[1] = [
<?php
    foreach ($data500 as $d) {
        echo "[$d[0], $d[1]],";
    }
?>
    ];
</script>
<script src="/js/error-log-apache.js"></script>
<div>
    <button class='line'>线条图</button>
    <button class='colu'>柱状图</button>
</div>
<div id="apache-container"></div>
