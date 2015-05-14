<?php
use app\helpers\CustomizeHelper;
?>
<form action="personal_list.php" method="post" name="form1" id="form1">
<div id="content" class="clearfix">
	<div class="contentWrapper">
		<div class="sTitle clearfix">
			<span class="f_l">系统管理中心</span>
		</div>
		<div class="content fixWid mg_t20">
			<table cellspacing="0" cellpadding="0" border="0" align="center" width="100%" class="mainTb">
				<tr class="tdalt">
					<td width="10%"><strong><?php echo \Yii::$app->session->get('user')['depart'];?></strong></td>
					<td width="40%"></td>
					<td width="10%"></td>
					<td width="40%"></td>
				</tr> 
				<tr>
					<td>用户名</td>
					<td><?php echo \Yii::$app->session->get('user')['name'];?></td>
					<td>当前IP地址</td>
					<td><?php echo CustomizeHelper::getIP();?></td>
				</tr>
				<tr>
					<td>角色</td>
					<td><?php echo \Yii::$app->session->get('user')['job'];?></td>
					<td>最后登陆时间</td>
					<td><?php echo date('Y-m-d h:i:s',time());?></td>
				</tr>
			</table>
		</div>
	</div>
</div>  
</form>
