<script>
    var data404 = [
<?php
    foreach ($data404 as $d) {
        echo "[$d[0], $d[1]-2],";
    }
?>
    ];
    var data500 = [
<?php
    foreach ($data500 as $d) {
        echo "[$d[0], $d[1]],";
    }
?>
    ];
</script>
<script src="/js/error-log-apache.js"></script>
<div id="apache-404-container"></div>
