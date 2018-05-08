<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
	
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
	<title>利用网络数据实现汽车配件标准化</title>
	<link rel="stylesheet" type="text/css" href="<?php echo (HOME_CSS_URL); ?>/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo (HOME_CSS_URL); ?>/common.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo (HOME_CSS_URL); ?>/style.css"/>
	<script src="<?php echo (HOME_JS_URL); ?>/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?php echo (HOME_JS_URL); ?>/jquery.min.js" type="text/javascript" charset="utf-8"></script>

</head>
<body>
	
	<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<a href="#" class="navbar-brand logo" style="padding-top: 10px;font-size: 24px;"><span class="glyphicon glyphicon-home"></span> 汽配查询系统</a>
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="index "><a href="/mountings/web/index.php/Home/Index/index"><span class="glyphicon glyphicon-fire"></span> 首页</a></li>
						<li class="chaxun"><a href="/mountings/web/index.php/Home/Tab/chaxun"><span class="glyphicon glyphicon-list"></span> 查询配件</a></li>
						<li class="about"><a href="/mountings/web/index.php/Home/About/about"><span class="glyphicon glyphicon-question-sign"></span> 我的信息</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
		<script src="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"></script>
		<script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
		<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
<body>
	<div class="" style="margin-top: 50px;">
		<form action="/mountings/web/index.php/Home/Login/reg" method="post">
		    <div class="panel loginbox" >
		        <div class="text-center margin-big padding-big-top"><h1>用户注册</h1></div>
		        <div class="panel-body" style="padding:30px; padding-bottom:10px; padding-top:10px;">
		            <div class="form-group">
		                <div class="field field-icon-right text-center" >
		                    <input type="text" class="input input-big" name="name" placeholder="注册账号" data-validate="required:请填写账号" />
		                    <span class="icon icon-user margin-small"></span>
		                </div>
		            </div>
		            <div class="form-group">
		                <div class="field field-icon-right text-center" >
		                    <input type="password" class="input input-big" name="password" placeholder="注册密码" data-validate="required:请填写密码" />
		                    <span class="icon icon-key margin-small"></span>
		                </div>
		            </div>
		        </div>
		        <div style="padding:30px;" class="text-center">
		        	<input type="submit"  class="button button-block bg-main text-big input-big" value="提交">
		        </div>
		    </div>
		</form>   
	</div>
	
	<footer id="footer" style="margin-top: 300px;">
		 <div class="container">
		 	<p>汽车型号 | 汽配查询 | 汽车保养</p>
		 	<p>14计科1班-庄御楠-1414080901101</p>
		 </div>
	</footer>
		
</body>
<script type="text/javascript">
	$('#reg').on('click',function(){
		self.location='reg'; 
	})
</script>
</html>