<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>AptaCam管理中心</title>  
    <link rel="stylesheet" href="<?php echo (ADMIN_CSS_URL); ?>pintuer.css">
    <link rel="stylesheet" href="<?php echo (ADMIN_CSS_URL); ?>admin.css">
    <link rel="stylesheet" href="<?php echo (ADMIN_CSS_URL); ?>font-awesome.min.css">
    <script src="<?php echo (ADMIN_JS_URL); ?>jquery.js"></script>   
    <style type="text/css">
        .leftnav-title{background: #f2f9fd;color: black;height: 40px}
        .header{background: #449d9d;}
    </style>
</head>
<body style="background-color:#f2f9fd;">
<div class="header bg-main">
  <div class="logo margin-big-left fadein-top">

    <h1><img src="<?php echo (ADMIN_IMAGES_URL); ?>y.png" class="radius-circle rotate-hover" height="50" alt="" />AptaCam后台管理中心</h1>

  </div>
  <!-- <div class="head-l"><a class="button button-little bg-blue" href="" target="_blank"><span class="icon-home"></span> 前台首页</a> &nbsp;&nbsp;<a class="button button-little bg-red" href="login.html"><span class="icon-power-off"></span> 退出登录</a> </div> -->
  <div class="head-l"><a class="button button-little bg-red" href="/index.php/Admin/Login/logout"><span class="icon-power-off"></span> 退出登录</a> </div>
</div>
<div class="leftnav" style="overflow-x:scroll">
  <div class="leftnav-title" style="font-size: 16px"><strong><span class="fa fa-bars"></span>菜单列表</strong></div>
  <h2><span class="fa fa-user-circle"></span>网站管理</h2>
  <ul> 
    
    
   	<?php  echo authCheck(MODULE_NAME.'/Knowdetail/get_email',cookie('id'),'<li><a href="/index.php/Admin/Knowdetail/get_email" target="right"><span class="icon-caret-right"></span>email</a></li>'); ?>
    <?php  echo authCheck(MODULE_NAME.'/Contact/get_text',cookie('id'),'<li><a href="/index.php/Admin/Contact/get_text" target="right"><span class="icon-caret-right"></span>message</a></li>'); ?>
      
  </ul>   
  <h2><span class="fa fa-hospital-o active"></span>数据管理</h2>
 
</div>
<script type="text/javascript">
$(function(){
  $(".leftnav h2").click(function(){
	  $(this).next().slideToggle(300);
    if($(this).css("color")!=="rgb(34, 204, 119)"){
      $(this).css("color","#22CC77"); 
    }else{
      $(this).css("color","black");
    }
    
	  //$(this).toggleClass("qwe"); 
  })
  $(".leftnav ul li a").click(function(){
	    $("#a_leader_txt").text($(this).text());
  })
});
</script>
<ul class="bread">
  <li><a href="<?php echo U('main'); ?>" target="right" class="icon-home"> 首页</a></li>
  <li id="a_leader_txt">网站信息</li>
</ul>
<div class="admin">
  <iframe scrolling="auto" rameborder="0" src="<?php echo U('main'); ?>" name="right" width="100%" height="100%"></iframe>
</div>
</body>
</html>