<script>
    var data = [];
    data = [
<?php
    foreach ($data as $d) {
        echo "[$d[0], $d[1]],";
    }
?>
    ];
</script>
<script src="/js/elapsed-stats.js"></script>
<div id="elapsed-container"></div>
