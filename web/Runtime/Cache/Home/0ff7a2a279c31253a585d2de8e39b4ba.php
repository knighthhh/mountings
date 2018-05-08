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
	
	<body>
		<div id="myCarousel" class="carousel slide" style="margin-top: 50px;">
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to = "0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to = "1"></li>
				<li data-target="#myCarousel" data-slide-to = "2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="item active" style="background-color: #FFFFFF;">
					<img src="<?php echo (HOME_IMAGES_URL); ?>/slide1.jpg"/>
				</div>
				<div class="item" style="background-color: #FFFFFF;">
					<img src="<?php echo (HOME_IMAGES_URL); ?>/slide2.jpg"/>
				</div>
				<div class="item" style="background-color: #FFFFFF;">
					<img src="<?php echo (HOME_IMAGES_URL); ?>/slide3.jpg"/>
				</div>
			</div>
			<a href="#myCarousel" data-slide="prev" class="carousel-control left">
				<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<a href="#myCarousel" data-slide="next" class="carousel-control right">
				<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
		</div>
		
		
		<div class="tab1">
			<div class="container">
				<h2 class="tab-h2"></h2>
				<p class="tab-p"></p>
				<div class="row">
					<div class="col-md-6 col">
						<div class="media">
							<div class="media-left">
								<a href="#"><img class="media-object" src="<?php echo (HOME_IMAGES_URL); ?>/tab1-1.jpg"/></a>
							</div>
							<div class="media-body">
								<h2 class="media-heading">齿轮</h2>
								<p style="font-size: 20px;">中国好齿轮</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col">
						<div class="media">
							<div class="media-left">
								<a href="#"><img class="media-object" src="<?php echo (HOME_IMAGES_URL); ?>/tab1-2.jpg"/></a>
							</div>
							<div class="media-body">
								<h2 class="media-heading">起动机</h2>
								<p style="font-size: 20px;">启动的更快</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col">
						<div class="media">
							<div class="media-left">
								<a href="#"><img class="media-object" src="<?php echo (HOME_IMAGES_URL); ?>/tab1-3.jpg"/></a>
							</div>
							<div class="media-body">
								<h2 class="media-heading">刹车片</h2>
								<p style="font-size: 20px;">刹车不失灵</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col">
						<div class="media">
							<div class="media-left">
								<a href="#"><img class="media-object" src="<?php echo (HOME_IMAGES_URL); ?>/tab1-4.jpg"/></a>
							</div>
							<div class="media-body">
								<h2 class="media-heading">发动机</h2>
								<p style="font-size: 20px;">稳定的发动</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!--<div class="tab2">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 tab2s-img">
						<img src="<?php echo (HOME_IMAGES_URL); ?>/tab2.jpg" class="auto img-responsive center-block"/>
					</div>
					<div class="text col-md-6 col-sm-6 tab2-text">
						<h3>兰州是中国唯一一座被黄河穿城而过的省会城市。</h3>
						<p>河两岸，南北两山夹河而立，城中人在这条狭长通透的河谷中生息。</p>
						<p>于是，这又是一个简单直接、率性而为的城市</p>
					</div>
				</div>
			</div>
		</div>
		
		<div class="tab3">
			<div class="container">
				<div class="row">
					<div class="text col-md-6 col-sm-6">
						<h3>南北群山对峙，东西黄河穿城而过</h3>
						<p>西北地区的交通枢纽城市，全国大陆陆域板块几何中心城市</p>
					</div>
					<div class="col-md-6 col-sm-6">
						<img src="<?php echo (HOME_IMAGES_URL); ?>/tab3.jpg"  class="auto img-responsive center-block"/>
					</div>
				</div>
			</div>
		</div>
		-->
		<footer id="footer">
			 <div class="container">
			 	<p>汽车型号 | 汽配查询 | 汽车保养</p>
			 	<p>14计科1班-庄御楠-1414080901101</p>
			 </div>
		</footer>
		
		
		<script type="text/javascript">
			$('.index').addClass('active')
				//轮播图自动播放
				$('#myCarousel').carousel({
					//自动2秒播放
					interval:2000,
				});
				
		
				//设置文字垂直居中
				$(window).load(function(){
					$('.text').eq(0).css('margin-top',($('.auto').eq(0).height() - $('.text').eq(0).height()) / 2 + 'px');
				});
				$(window).resize(function(){
					$('.text').eq(0).css('margin-top',($('.auto').eq(0).height() - $('.text').eq(0).height()) / 2 + 'px');
				});
				
				$(window).load(function(){
					$('.text').eq(1).css('margin-top',($('.auto').eq(1).height() - $('.text').eq(1).height()) / 2 + 'px');
				});
				$(window).resize(function(){
					$('.text').eq(1).css('margin-top',($('.auto').eq(1).height() - $('.text').eq(1).height()) / 2 + 'px');
				});
			
		</script>
		
	</body>
</html>