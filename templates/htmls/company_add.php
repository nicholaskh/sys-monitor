<?php include "modules/header.php"?>
<form action="personal_list.php" method="post" name="form1" id="form1">
<div id="content" class="clearfix">
    <div class="contentWrapper">
        <div class="sTitle clearfix">
            <span class="f_l">企业信息录入</span>
            <a href="personal_add.html" class="fanhui inline f_r">返回</a>
        </div>
        <div class="bd_ddd mg_t20">
         <div class="subTitle clearfix"><span class="f_r">录入日期:2015-02-09 05:20:56</span>商务专员:苟淑玲   </div>
         <ul class="commBox clearfix mg_t40">
            <li class="line_title">基本信息</li>
            <li>
                <label>企业名称：</label>
                <input type="text" value="万达集团" msg="姓名不可以空" class="inpCom w300" name="uname">
            </li>
            <li>
                <label>联系人：</label>
                <input type="text" value="李俊良" msg="姓名不可以空" class="inpCom w300" name="contact">          
            </li>
            <li>
                <label>联系电话：</label>
                <input type="text" value="15330066919" msg="姓名不可以空" class="inpCom w300" name="tel">          
            </li>
            <li>
                <label>业务地域：</label>
                <input type="text" value="北京"  maxlength="50" size="25" class="inpCom w300" id="area" name="area">
            </li>
            <li class="line_title">合作方式</li>
            <li class="pd_l40">
                <div class="clearfix">
                    RPO业务
                </div>
                <div class="clearfix">
                    <span class="mg_l10"><input type="checkbox" />代理招聘</span>
                    <span class="mg_l10"><input type="checkbox" />劳务派遣</span>
                </div>
                <div>
                    劳动关系业务
                </div>
                <div class="clearfix">
                    <span class="mg_l10"><input type="checkbox" />社保代理业务</span>
                    <span class="mg_l10"><input type="checkbox" />公积金代理</span>
                    <span class="mg_l10"><input type="checkbox" />代发工资</span>
                    <span class="mg_l10"><input type="checkbox" />代上个税</span>
                </div>
                <div>
                    其他业务
                </div>
                <div class="clearfix">
                    <span class="mg_l10"><input type="checkbox" />咨询业务</span>
                    <span class="mg_l10"><input type="checkbox" />培训业务</span>
                    <span class="mg_l10"><input type="checkbox" />猎头业务</span>
                </div>
            </li>
            <li class="line_title">合同周期</li>
            <li>
                <label>开始时间：</label>
                <input type="text" readonly="readonly" onclick="WdatePicker()" value="" class="inpCom w200 Wdate" name="sDate">
            </li>
            <li>
                <label>结束时间：</label>
                <input type="text" readonly="readonly" onclick="WdatePicker()" value="" class="inpCom w200 Wdate" name="eDate">
            </li>
            <li class="line_title">相关福利</li>
            <li class="pd_l40">
                <div class="clearfix">
                    <span class="mg_l10"><input type="checkbox" />社保五险</span>
                    <span class="mg_l10"><input type="checkbox" />公积金</span>
                </div>
            </li>
            <li class="line_title">其他备注</li>
            <li>
                <label>登陆名称：</label>
                <input type="text" value="" />
            </li>
            <li>
                <label>登陆密码：</label>
                <input type="text" value="" />
            </li>
            <li>
                <label>&nbsp;</label>
                <input type="submit" value="保 存" class="btnCom w80" class="tj" name="button"> </li>
            </ul>
         </div>
    </div>
</div>  
</form>
<?php include "modules/footer.php"?>
