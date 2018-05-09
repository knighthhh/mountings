<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	
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
	
	<div  style="margin-top: 50px;margin-bottom: 0px;">
		<div  id="about">
	
			<div class="container">
				<div class="row">
					<div class="col-md-3 hidden-xs hidden-sm ">
						<div class="list-group hidden-sm">
							 <a class="list-group-item" href="#1">1.我的信息</a>
							 <a class="list-group-item" href="#2">2.修改资料</a>
							 <a class="list-group-item" href="#3">3.已查询零件</a>
						</div>
					</div>
					<div class="col-md-9 about">
						<a name="1"></a>
							<h3>我的信息</h3>
							<p>用户名：<span id="user_name"><?php echo $res['user_name']; ?></span>	</p>
							<p>
								<form action="logout" method="post">
									<button id="logout" type="submit" value="">退出登录</button>
								</form>
								
							</p>
							
						<a name="2"></a>
							<h3>修改资料</h3>
							<form action="" method="post">
								<label for="">原始密码</label><input type="password" name="oldpd" id="oldpd" value=""/><br	/>
								<label for="">新密码  </label><input type="password" name="newpd" id="newpd" value=""/><br/>
								
								<input id="submit" type="button" value="提交"/>
							</form>
						<br/>
							
						<a name="3"></a>
							<h3>已查询零件</h3>
							<?php foreach ($chaxun as $k => $v): ?>
								<div class="col-md-12" >
									<div class="row-fluid">
										<div class="col-md-3">
											<img alt="140x140" src="<?php echo $v['item_img']; ?>" />
										</div>
										<div class="col-md-4">
											<blockquote>
												<!--<p></p>-->
												<small><?php echo $v['item_oe']; ?></small>
											</blockquote> 
										</div>
										<div class="col-md-5">
											<ul style="list-style: none;">
												<li ><?php echo $v['item_arg1']; ?></li>
												<li ><?php echo $v['item_arg2']; ?></li>
												<li ><?php echo $v['item_arg3']; ?></li>
												<li ><?php echo $v['item_arg4']; ?></li>
												<li ><?php echo $v['item_arg5']; ?></li>
											</ul>
										</div>
									</div>
								</div>

							<?php endforeach; ?>
					</div>
				</div>
			</div>
					
		</div>
	</div>
	
	<footer id="footer" style="margin-top: 0px;">
		 <div class="container">
		 	<p>汽车型号 | 汽配查询 | 汽车保养</p>
		 	<p>14计科1班-庄御楠-1414080901101</p>
		 </div>
	</footer>
	<script type="text/javascript">
		host_url = 'http://127.0.0.1';
		$('.about').addClass('active');
		$('#submit').on('click',function(){
			user_name = $('#user_name').html();
			oldpd = $('#oldpd').val();
			newpd = $('#newpd').val();
			$.ajax( {
			    url:host_url + '/mountings/web/index.php/Connecter/User/update_password',
			    data:{
			    	user_name:user_name,
			    	oldpd:oldpd,
			    	newpd:newpd
			    },
			    type:'POST',
			    dataType:'json',
			    success:function(data) {
			    	if(data['result'] == true){
			    		alert('修改成功');
			    	}else{
			    		alert('原密码错误');
			    	}
			     },
			     error : function(XMLHttpRequest, textStatus, errorThrown) {
			     }
			});
		})
		
	</script>
</body>
</html>