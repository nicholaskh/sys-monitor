<?php include "modules/header.php"?>
<form action="personal_list.php" method="post" name="form1" id="form1">
<div id="content" class="clearfix">
    <div class="contentWrapper">
        <div class="sTitle clearfix">
            <span class="f_l">个人管理</span>
            <a href="personal_add.html" class="fanhui inline f_r">返回</a>
        </div>
        <div class="bd_ddd mg_t20">
         <div class="subTitle clearfix"><span class="f_r">录入日期:2015-02-09 05:20:56</span>招聘顾问:苟淑玲   </div>
         <ul class="commBox clearfix mg_t40">
            <li class="line_title">基本信息</li>
            <li>
                <label>姓名：</label>
                <input type="text" value="张宏艳" msg="姓名不可以空" class="inpCom w300" name="uname">
            </li>
            <li>
                <label>性别：</label>
                <input type="radio" value="男" name="sex"> 男
                <input type="radio" checked="checked" value="女" name="sex">  女              
            </li>
            <li>
                <label>年龄：</label>
                <input type="text" value="38" msg="年龄不可以空" datatype="Require" maxlength="50" size="25" class="inpCom w300" id="age" name="age">
            </li>
            <li>
                <label>毕业院校：</label>
                <input type="text" value="263客服，上"  maxlength="50" size="25" class="inpCom w300" id="age" name="school">
            </li>
            <li>
                <label> 学历：</label>
                <select msg="请选择学历" datatype="Require" name="xueli"  class="selCom w200">
                    <option value="">选择学历</option>
                    <option value="初中">初中</option>
                    <option value="高中">高中</option>
                    <option value="中专">中专</option>
                    <option selected="selected" value="大专">大专</option>
                    <option value="本科">本科</option>
                    <option value="研究生">研究生</option>
                    <option value="博士">博士</option>
                </select>
            </li>
            <li>
                <label>联系电话：</label>
                <input type="text" value="13321179286" maxlength="50" size="25" class="inpCom w300" id="age" name="tel">
            </li>
            <li>
                <label>身份证：</label>
                <input type="text" value="42230219830505444X" maxlength="50" size="25" class="inpCom w300" id="idcard" name="idcard">
            </li>
            <li>
                <label>户口性质：</label>
                <input type="text" value="农业非农" maxlength="50" size="25" class="inpCom w300" id="hukou" name="hukou">
            </li>
            <li class="line_title">
                入职情况：
            </li>
            <li>
                <label>入职企业：</label>
                <select name="danwei"  class="selCom w200">
                    <option value="">选择工作单位</option>
                    <option value="23|健道科技">健道科技</option>
                    <option value="22|先锋智道">先锋智道</option>
                    <option value="21|旗计智能">旗计智能</option>
                    <option value="20|中信银行客服">中信银行客服</option>
                    <option value="19|海王星辰（药店）">海王星辰（药店）</option>
                    <option value="17|蔻露饮用水">蔻露饮用水</option>
                    <option value="16|天宝影城">天宝影城</option>
                    <option value="14|安泰中智">安泰中智</option>
                    <option value="13|邮电器材">邮电器材</option>
                    <option value="12|水环地调">水环地调</option>
                    <option selected="selected" value="9|263网科">263网科</option>
                    <option value="6|小米科技">小米科技</option>
                    <option value="5|爱康国宾">爱康国宾</option>
                </select>
            </li>
            <li>
                <label>入职职位：</label>
                <select name="zhiwei"  class="selCom w200">
                    <option value="">选择职位</option>
                    <option value="23|健道科技">高级经理</option>
                    <option value="22|先锋智道">普通员工</option>
                </select>
            </li>
            <li>
                <label>入职时间：</label>
                <input type="text" readonly="readonly" onclick="WdatePicker()" value="" class="inpCom w200 Wdate" name="inPosDate">
            </li>
            <li>
                <label>入职地区：</label>
                <input type="text" value="" class="inpCom w200 Wdate" name="inPosArea">
            </li>
            <li class="line_title">
                福利类型
            </li>
            <li class="pd_l40">
                <div>社保业务</div>
                <div class="clearfix">
                    <span class="mg_l10"><input type="checkbox" />新参保</span>
                    <span class="mg_l10"><input type="checkbox" />社保续费</span>
                    <span class="mg_l10"><input type="checkbox" />社保补缴</span>
                    <span class="mg_l10"><input type="checkbox" />生育报销（津贴、产前）</span>
                    <span class="mg_l10"><input type="checkbox" />异地转入/转出</span>
                    <span class="mg_l10"><input type="checkbox" />工商认定</span>
                    <span class="mg_l10"><input type="checkbox" />退休</span>
                </div>
                <div>公积金业务</div>
                <div class="clearfix">
                    <span class="mg_l10"><input type="checkbox" />公积金续缴</span>
                    <span class="mg_l10"><input type="checkbox" />公积金补缴</span>
                </div>
                <div>档案业务</div>
                <div class="clearfix">
                    <span class="mg_l10"><input type="checkbox" />档案托管</span>
                </div>
                <div>个税业务</div>
                <div class="clearfix">
                    <span class="mg_l10"><input type="checkbox" />个税代缴</span>
                </div>
            </li>
            <li class="line_title">
                福利缴费时间
            </li>
            <li>
                <label>年份：</label>
                <input type="text">
            </li>
            <li>
                <label>月份：</label>
                <input type="text">
            </li>
            <li class="line_title">
                缴费基数
            </li>
            <li>
                <label>社保：</label>
                <div>养老失业：<input type="text" />&nbsp;&nbsp;&nbsp;&nbsp;医疗、工伤、生育：<input type="text" /></div>
            </li>
            <li>
                <label>公积金：</label>
                <div>缴费基数：<input type="text" />&nbsp;&nbsp;&nbsp;&nbsp;税金：<input type="text" /></div>
            </li>
            <li>
               <label>备注信息：</label>
               <textarea id="age" class="textCom w300 h80" name="des">住在昌平西关，上午</textarea>
            </li>
            <li>
                <label>&nbsp;</label>
                <input type="submit" value="保 存" class="btnCom w80" class="tj" name="button"> </li>
            </ul>
         </div>
    </div>
</div>  
</form>
<div class="footer">Copyright &copy; 2012-2013 安泰中智在线服务系统 V1.0</div>
</body>
</html>
