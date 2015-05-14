<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
$user = \Yii::$app->session->get('user');
$isAdmin = $user->depart == "超级管理员";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>安泰中智在线服务系统</title>
<link href="/css/global.css"  rel="stylesheet" type="text/css">
<script src="/js/jquery.js" type="text/javascript"></script>
<script language="javascript" type="text/javascript" src="/js/My97DatePicker/WdatePicker.js"></script>
<script type=text/javascript>
$(function(){
    $(".mainTb tr").mouseover(function(){   
        //如果鼠标移到class为stripe的表格的tr上时，执行函数   
        $(this).addClass("tdover");}).mouseout(function(){   
            //给这行添加class值为over，并且当鼠标一出该行时执行函数   
            $(this).removeClass("tdover");
        }); //移除该行的class   
        $(".mainTb tr:even").addClass("tdalt");   
        //给class为stripe的表格的偶数行添加class值为alt
}); 
</script>
</head>
<body>
<?php $this->beginBody(); ?>
<div class="header" >
    <div class="innerWrap">
      <div class="logo"><img src="/images/logo.jpg" /></div>
      <div class="topInfo"><span>欢迎您！<?= \Yii::$app->session->get('user')->name ?></span> <a href="/user/logout">退出</a></div>
      <?php
          if ($this->context->hasNav) {
              NavBar::begin([
                  'renderInnerContainer' => false,
                  'options' => [
                      'class' => 'mainNav',
                  ],
              ]);
              if($isAdmin){
                  echo Nav::widget([
                      'encodeLabels' => false,
                      'options' => [],
                      'items' => [
                          ['label' => '<span>首 页</span>', 'url' => ['/site/index']],
                          ['label' => '<span>个人用户</span>', 'url' => ['/staff/'], 'active' => \Yii::$app->controller->id == 'staff' ? true : false],
                          ['label' => '<span>企业用户</span>', 'url' => ['/company/list'], 'active' => \Yii::$app->controller->id == 'company' ? true : false],
                          ['label' => '<span>权限管理</span>', 'url' => ['/user/list'], 'active' => \Yii::$app->controller->id == 'user' ? true : false],
                          ['label' => '<span>职位管理</span>', 'url' => ['/position/list'], 'active' => \Yii::$app->controller->id == 'position' ? true : false],
                          ['label' => '<span>地域管理</span>', 'url' => ['/area/list'], 'active' => \Yii::$app->controller->id == 'area' ? true : false],
                          ['label' => '<span>工资单</span>', 'url' => ['/payroll/list'], 'active' => \Yii::$app->controller->id == 'payroll' ? true : false],
                      ]
                  ]);
              }else{
                  echo Nav::widget([
                      'encodeLabels' => false,
                      'options' => [],
                      'items' => [
                          ['label' => '<span>首 页</span>', 'url' => ['/site/index']],
                          ['label' => '<span>个人用户</span>', 'url' => ['/staff/'], 'active' => \Yii::$app->controller->id == 'staff' ? true : false]
                      ]
                  ]);
              }
              NavBar::end();
          }
      ?>
<!--
      <ul class="mainNav">
        <li><a href="index.php" class="focus"><span>首 页</span></a></li> 
        <li>
            <a href="personal_list.php">
            <span> 个人用户  </span>
            <ul>
                <li><a href="/staff/add">录入信息</a></li>
                <li><a href="personal_list.php">用户管理</a></li>
                <li><a href="personal_piliang.php">批量导入</a></li>           
            </ul>
            </a>
        </li>
        <li>
            <a href="company_add.php" class=""><span>企业用户</span>
            <ul>
                <li><a href="company_add.php">录入信息</a></li>
                <li><a href="company_list.php">企业管理</a></li>               
            </ul>
            </a>
            
        </li>
        <li>
            <a href="auth_list.php" class=""><span>权限管理</span>
            <ul>
                <li><a href="user_add.php">新增管理员</a></li>
                <li><a href="user_list.html">列表</a></li>               
            </ul>
            </a>
            
        </li>   
      </ul>
-->
    </div>
</div>
