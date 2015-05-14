<?php include "modules/header.php"?>
<form action="personal_list.php" method="post" name="form1" id="form1">
<div id="content" class="clearfix">
	<div class="contentWrapper">
		<div class="sTitle clearfix">
			<span class="f_l">个人管理</span>
			<a href="personal_add_in_pos.php" class="fanhui mg_l10 inline f_r">添加入职人员</a>
			<a href="personal_add.php" class="fanhui inline mg_l10 f_r">添加非入职人员</a>
		</div>
		<div class="content fixWid mg_t20">
			<div class="searchSelect clearfix" >
				<label>姓名</label> 
				<input name="uname" type="text" class="inpCom w150 mg_r10" value=""/>
				<label>性别</label> 
				<select name="sex" onChange="javascript:$('#form1').submit();" class="selCom w120 mg_r10">
					<option value="">全部</option>
					<option value="男" >男</option>
					<option value="女" >女</option>
				</select>  
				<label>学历</label> 
				<select name="xueli" onChange="javascript:$('#form1').submit();" class="selCom w120 mg_r10">
					<option value="">全部</option>
					<option value="初中"  >初中</option>
					<option value="高中"  >高中</option>
					<option value="中专"  >中专</option>
					<option value="大专"  >大专</option>
					<option value="本科"  >本科</option>
					<option value="研究生" >研究生</option>
					<option value="博士"  >博士</option>
				</select>  
				<label>状态</label> 
				<select name="flag" onChange="javascript:$('#form1').submit();" class="selCom w120 mg_r10">
					<option value="">全部</option>
					<option value="已在职" >已在职</option>
					<option value="求职中" >求职中</option>
					<option value="面试" >面试</option>
					<option value="入职" >入职</option>
					<option value="转正" >转正</option>
					<option value="离职" >离职</option>
				</select>  
				<label>添加时间</label> 
				<input  type="text"  readonly="readonly" onClick="WdatePicker()"class="inpCom w150 Wdate mg_r10" />
				<label>招聘顾问</label> 
				<select name="mu" onChange="javascript:$('#form1').submit();" class="selCom w120 mg_r10">
					 <option value="">全部</option>
					 <option value="84" >曹雪</option>					
					 <option value="83" >陈伟</option>					
					 <option value="82" >张宏芳</option>					
					 <option value="81" >庄颖</option>					
					 <option value="80" >赵宝松</option>					
					 <option value="79" >李佳</option>					
					 <option value="76" >孙朝辉</option>		
				</select>  
				<label><input type="submit" value="搜索" class="button"/></label>   
			</div>		   	       
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="mainTb mg_t15">
			    <tr>
					<th>
						<div class="t_l pd_l10"><input type="checkbox" name="IDAll" id="IDAll"> 编号</div></th>
					<th>姓名</th>
					<th>性别</th>
					<th>年龄</th>
					<th>毕业院校</th>
					<th>学历</th>
					<th>电话 </th>
					<th>状态</th>
					<th>入职企业</th>
					<th>招聘顾问</th>
					<th>添加时间</th>
					<th>操 作</th>
			    </tr>
			    <tr>
					<td align="center">
					  <div class="t_l pd_l10"><input type="checkbox" name="ChkID[]" id="ChkID" value="76169"> 76169</div>	  		
					</td>
					<td>
					  <strong><a href="personal_show.php?id=76169" target="_blank" style="color: #993300">郭利元</a></strong>
					</td>
					<td>男</td>
					<td>27</td>
					<td>263 来时提前联系</td>
					<td>大专</td>
					<td>18612876373</td>
					<td><font color="#cc0099">求职中</font></td>
					<td></td> 
					<td align="center"><a href="personal_list.php?mu=84">曹雪</a></td>
					<td align="center">2015-02-05</td>
					<td align="center"><a href="personal_edit.php">修改</a> <a href="?action=dell&id=76169" onClick="javascript:return confirm('确定要删除吗？');">删除</a> 
					</td>
			    </tr>
				<tr>
					<td align="center">
					  <div class="t_l pd_l10"><input type="checkbox" name="ChkID[]" id="ChkID" value="76169"> 76169</div>	  		
					</td>
					<td>
					  <strong><a href="personal_show.php?id=76169" target="_blank" style="color: #993300">郭利元</a></strong>
					</td>
					<td>男</td>
					<td>27</td>
					<td>263 来时提前联系</td>
					<td>大专</td>
					<td>18612876373</td>
					<td><font color="#cc0099">求职中</font></td>
					<td></td> 
					<td align="center"><a href="personal_list.php?mu=84">曹雪</a></td>
					<td align="center">2015-02-05</td>
					<td align="center"><a href="personal_edit.php?page=1&id=76169">修改</a> <a href="?action=dell&id=76169" onClick="javascript:return confirm('确定要删除吗？');">删除</a> 
					</td>
			    </tr>
				<tr>
					<td align="center">
					  <div class="t_l pd_l10"><input type="checkbox" name="ChkID[]" id="ChkID" value="76169"> 76169</div>	  		
					</td>
					<td>
					  <strong><a href="personal_show.php?id=76169" target="_blank" style="color: #993300">郭利元</a></strong>
					</td>
					<td>男</td>
					<td>27</td>
					<td>263 来时提前联系</td>
					<td>大专</td>
					<td>18612876373</td>
					<td><font color="#cc0099">求职中</font></td>
					<td></td> 
					<td align="center"><a href="personal_list.php?mu=84">曹雪</a></td>
					<td align="center">2015-02-05</td>
					<td align="center"><a href="personal_edit.php?page=1&id=76169">修改</a> <a href="?action=dell&id=76169" onClick="javascript:return confirm('确定要删除吗？');">删除</a> 
					</td>
			    </tr>
				<tr>
					<td align="center">
					  <div class="t_l pd_l10"><input type="checkbox" name="ChkID[]" id="ChkID" value="76169"> 76169</div>	  		
					</td>
					<td>
					  <strong><a href="personal_show.php?id=76169" target="_blank" style="color: #993300">郭利元</a></strong>
					</td>
					<td>男</td>
					<td>27</td>
					<td>263 来时提前联系</td>
					<td>大专</td>
					<td>18612876373</td>
					<td><font color="#cc0099">求职中</font></td>
					<td></td> 
					<td align="center"><a href="personal_list.php?mu=84">曹雪</a></td>
					<td align="center">2015-02-05</td>
					<td align="center"><a href="personal_edit.php?page=1&id=76169">修改</a> <a href="?action=dell&id=76169" onClick="javascript:return confirm('确定要删除吗？');">删除</a> 
					</td>
			    </tr>
				<tr>
					<td align="center">
					  <div class="t_l pd_l10"><input type="checkbox" name="ChkID[]" id="ChkID" value="76169"> 76169</div>	  		
					</td>
					<td>
					  <strong><a href="personal_show.php?id=76169" target="_blank" style="color: #993300">郭利元</a></strong>
					</td>
					<td>男</td>
					<td>27</td>
					<td>263 来时提前联系</td>
					<td>大专</td>
					<td>18612876373</td>
					<td><font color="#cc0099">求职中</font></td>
					<td></td> 
					<td align="center"><a href="personal_list.php?mu=84">曹雪</a></td>
					<td align="center">2015-02-05</td>
					<td align="center"><a href="personal_edit.php?page=1&id=76169">修改</a> <a href="?action=dell&id=76169" onClick="javascript:return confirm('确定要删除吗？');">删除</a> 
					</td>
			    </tr>
				<tr>
					<td align="center">
					  <div class="t_l pd_l10"><input type="checkbox" name="ChkID[]" id="ChkID" value="76169"> 76169</div>	  		
					</td>
					<td>
					  <strong><a href="personal_show.php?id=76169" target="_blank" style="color: #993300">郭利元</a></strong>
					</td>
					<td>男</td>
					<td>27</td>
					<td>263 来时提前联系</td>
					<td>大专</td>
					<td>18612876373</td>
					<td><font color="#cc0099">求职中</font></td>
					<td></td> 
					<td align="center"><a href="personal_list.php?mu=84">曹雪</a></td>
					<td align="center">2015-02-05</td>
					<td align="center"><a href="personal_edit.php?page=1&id=76169">修改</a> <a href="?action=dell&id=76169" onClick="javascript:return confirm('确定要删除吗？');">删除</a> 
					</td>
			    </tr>
				<tr>
					<td align="center">
					  <div class="t_l pd_l10"><input type="checkbox" name="ChkID[]" id="ChkID" value="76169"> 76169</div>	  		
					</td>
					<td>
					  <strong><a href="personal_show.php?id=76169" target="_blank" style="color: #993300">郭利元</a></strong>
					</td>
					<td>男</td>
					<td>27</td>
					<td>263 来时提前联系</td>
					<td>大专</td>
					<td>18612876373</td>
					<td><font color="#cc0099">求职中</font></td>
					<td></td> 
					<td align="center"><a href="personal_list.php?mu=84">曹雪</a></td>
					<td align="center">2015-02-05</td>
					<td align="center"><a href="personal_edit.php?page=1&id=76169">修改</a> <a href="?action=dell&id=76169" onClick="javascript:return confirm('确定要删除吗？');">删除</a> 
					</td>
			    </tr>
				<tr>
					<td align="center">
					  <div class="t_l pd_l10"><input type="checkbox" name="ChkID[]" id="ChkID" value="76169"> 76169</div>	  		
					</td>
					<td>
					  <strong><a href="personal_show.php?id=76169" target="_blank" style="color: #993300">郭利元</a></strong>
					</td>
					<td>男</td>
					<td>27</td>
					<td>263 来时提前联系</td>
					<td>大专</td>
					<td>18612876373</td>
					<td><font color="#cc0099">求职中</font></td>
					<td></td> 
					<td align="center"><a href="personal_list.php?mu=84">曹雪</a></td>
					<td align="center">2015-02-05</td>
					<td align="center"><a href="personal_edit.php?page=1&id=76169">修改</a> <a href="?action=dell&id=76169" onClick="javascript:return confirm('确定要删除吗？');">删除</a> 
					</td>
			    </tr>
				<tr>
					<td align="center">
					  <div class="t_l pd_l10"><input type="checkbox" name="ChkID[]" id="ChkID" value="76169"> 76169</div>	  		
					</td>
					<td>
					  <strong><a href="personal_show.php?id=76169" target="_blank" style="color: #993300">郭利元</a></strong>
					</td>
					<td>男</td>
					<td>27</td>
					<td>263 来时提前联系</td>
					<td>大专</td>
					<td>18612876373</td>
					<td><font color="#cc0099">求职中</font></td>
					<td></td> 
					<td align="center"><a href="personal_list.php?mu=84">曹雪</a></td>
					<td align="center">2015-02-05</td>
					<td align="center"><a href="personal_edit.php?page=1&id=76169">修改</a> <a href="?action=dell&id=76169" onClick="javascript:return confirm('确定要删除吗？');">删除</a> 
					</td>
			    </tr>
			</table>
		</div>
		<div class="pageNav clearfix"> 
			<div class="pageStatus f_l">
				<span>记录总数：74528 </span>
				<span>当前页/总页数：1/3727 </span>   
			</div>   
			<div class="f_r">
				<span class="current">1</span>
				<a href="#">2</a>
				<a href="#">3</a>
				<a href="#">4</a>
				<a href="#">5</a>
				<a href="#">6</a>
				<a href="#">7</a>
				<a href="#">8</a>
				<a href="#" class="last">尾页 <small>&gt;&gt;</small></a>
				<a href="#" class="next">下一页 <small>&gt;</small></a>			 
			</div>
		</div>
	</div>
</div>  
</form>
<div class="footer">Copyright &copy; 2012-2013 安泰中智在线服务系统 V1.0</div>
</body>
</html>
