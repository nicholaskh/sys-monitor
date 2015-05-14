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
            <li class="line_title">
                目前状态：
            </li>
            <li>
                <label>&nbsp;</label>
                <input type="radio" onclick="selectPaytime(0)" value="已在职" name="flag">已在职
                <input type="radio" onclick="selectPaytime(0)" value="求职中" name="flag">求职中    
                <input type="radio" onclick="selectPaytime(1)" target="interview" value="面试" name="flag"> 面试 
                <input type="radio" onclick="selectPaytime(0)" value="转正" name="flag"> 转正  
                <input type="radio" onclick="selectPaytime(0)" value="离职" name="flag"> 离职   
                <div style="display:none;" class='pops' id="interview">
                    <div class="clearfix">
                        <label>面试时间：</label>
                        <input type="text" readonly="readonly" onclick="WdatePicker()" value="" class="inpCom w200 Wdate" name="interviewDate">
                    </div>
                    <div class="mg_t10 clearfix">
                    <label>面试企业：</label>
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
                    </div>
                </div>
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
<?php include "modules/footer.php"?>
