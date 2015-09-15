<table>
<tr><td colspan=4>
<h3>Gcollector</h3>(<?= count($gcollectors) . '台'; ?>)
</td></tr>
<?php
// TODO -- when click button, start/stop/restart the service
foreach ($gcollectors as $g) {
    echo "<tr>
<td><strong>{$g}</strong></td> 
<td><button>启动</button></td>
<td><button>关闭</button></td>
<td><button>重启</button></td>
</tr>
";
}
?>

<tr><td colspan=4>
<h3>Piped</h3>
</td></tr>
<?php
foreach ($pipeds as $p) {
    echo "<tr>
<td><strong>{$p}</strong></td> 
<td><button>启动</button></td>
<td><button>关闭</button></td>
<td><button>重启</button></td>
</tr>
";
}
?>
</table>
