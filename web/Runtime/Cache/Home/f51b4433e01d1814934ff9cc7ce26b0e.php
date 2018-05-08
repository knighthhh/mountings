<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	
	<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
	<title>Aptacam - Diagnostic Device, Disease Discovery</title>
	<link rel="stylesheet" type="text/css" href="<?php echo (HOME_CSS_URL); ?>/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo (HOME_CSS_URL); ?>/common.css"/>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a href="#" class="navbar-brand logo"><img src="<?php echo (HOME_IMAGES_URL); ?>/logo.png"  alt="Aptacam"></a>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="navbar-collapse">
				<ul class="nav navbar-nav navbar-right" id="navbar-font">
					<li class="Home"><a href="/index.php/Home/Index/index"><?php echo ($nav['home']); ?></a></li>
					<li class="Solutions"><a href="/index.php/Home/Tab/solutions" ><?php echo ($nav['solutions']); ?></a></li>
					<li class="Software"><a href="/index.php/Home/Tab/download"><?php echo ($nav['download']); ?></a></li>
					<li class="Knowledge"><a href="/index.php/Home/Tab/knowledge"><?php echo ($nav['knowledge']); ?></a></li>
					<li class="About"><a href="/index.php/Home/Tab/about"><?php echo ($nav['about']); ?></a></li>
					<li class="Contact"><a href="/index.php/Home/Tab/contact"><?php echo ($nav['contact']); ?></a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<?php echo ($nav['language']); ?><b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
							<li><a href="?l=en-us">English</a></li>
							<li><a href="?l=zh-cn" target="_blank">中文</a></li>
						</ul>
					</li>
				</ul>	
			</div>
		</div>
	</nav>
	
	<link rel="stylesheet" type="text/css" href="<?php echo (HOME_CSS_URL); ?>/animate.css"/>
	<link rel="stylesheet" href="<?php echo (HOME_CSS_URL); ?>/contact.css">
		
	<div id="contact">
		<div class="">
			<div class="contact-bg" >
				<div class="picture">
					<img src="<?php echo (HOME_IMAGES_URL); ?>/contact.png"/>
				</div>
				<div class="contact-text">
					<div class="row contact-box">
						<div class=" col-lg-4  col-md-4  col-sm-4  col-xs-4 " >
							<div class="contact-detail">
								<img src="<?php echo (HOME_IMAGES_URL); ?>/usered.png"/>
								<p><?php echo ($contact['tab1_p1']); ?></p>
							</div>
						</div>
						<div class=" col-lg-4  col-md-4  col-sm-4  col-xs-4 " >
							<div class="contact-detail">
								<img src="<?php echo (HOME_IMAGES_URL); ?>/jxs.png"/>
								<p><?php echo ($contact['tab1_p2']); ?></p>
							</div>
						</div>
						<div class="col-lg-4  col-md-4  col-sm-4  col-xs-4 " >
							<div class="contact-detail">
								<img src="<?php echo (HOME_IMAGES_URL); ?>/partner.png"/>
								<p><?php echo ($contact['tab1_p3']); ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
		<!--地址-->
		<div class="address" >
			<p class="wow bounceInDown" data-wow-duration="1s"><?php echo ($contact['find']); ?></p> 
		</div>
		
		<div id="case">
			<div class="container">
				<div class="row">
					<div class="wow bounceInDown col-lg-6 col-md-6 col-sm-6 col-xs-12" data-wow-duration="2s">
						<div class="thumbnail">
							<img src="<?php echo (HOME_IMAGES_URL); ?>/shumagang.JPG" alt=""/>
							<div class="caption">
								<h4><?php echo ($contact['tab2_box1_h']); ?></h4>
								<p><?php echo ($contact['tab2_box1_p']); ?></p>
							</div>
						</div>
					</div>
					<div class="wow bounceInRight col-lg-6 col-md-6 col-sm-6 col-xs-12" data-wow-duration="0.5s"  data-wow-delay="0.2s">
						<div class="thumbnail">
							<img src="<?php echo (HOME_IMAGES_URL); ?>/shenzhen.jpg" alt="" />
							<div class="caption">
								<h4><?php echo ($contact['tab2_box2_h']); ?></h4>
								<p><?php echo ($contact['tab2_box2_p']); ?></p>
							</div>
						</div>
					</div>
					<div class="wow rollIn col-lg-6 col-md-6 col-sm-6 col-xs-12" data-wow-delay="0.3s">
						<div class="thumbnail">
							<img src="<?php echo (HOME_IMAGES_URL); ?>/jianqiao.jpg" alt="" />
							<div class="caption">
								<h4><?php echo ($contact['tab2_box3_h']); ?></h4>
								<p><?php echo ($contact['tab2_box3_p']); ?></p>
							</div>
						</div>
					</div>
					<div class="wow swing col-lg-6 col-md-6 col-sm-6 col-xs-12" data-wow-duration="1s">
						<div class="thumbnail">
							<img src="<?php echo (HOME_IMAGES_URL); ?>/deguo.jpg" alt="" />
							<div class="caption">
								<h4><?php echo ($contact['tab2_box4_h']); ?></h4>
								<p><?php echo ($contact['tab2_box4_p']); ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		
		
	<footer id="footer">
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<div class="widget" >
					<h5 class="widgetheading"><?php echo ($footer['contact']); ?></h5>
					<address>
					<strong>AptaCam</strong><br>
					 <?php echo ($footer['address']); ?>
					</address>
					<p>
						<i class="icon-phone"></i> +(86) 15218745647<br>
						<i class="icon-envelope-alt"></i> contact@aptacam.com
					</p>
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" >
							
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" >
							
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 thumbnail" id="footthumb" >
								<a href="https://www.crunchbase.com/organization/aptacam" target="_blank"><img src="<?php echo (HOME_IMAGES_URL); ?>/CrunchBase.png" alt=""></a>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 thumbnail" id="footthumb" >
								<a href="https://angel.co/aptacam-limited" target="_blank"><img src="<?php echo (HOME_IMAGES_URL); ?>/angellist.png" alt=""></a>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 thumbnail" id="footthumb" >
								<a href="https://www.linkedin.com/company/6441763/" target="_blank"><img src="<?php echo (HOME_IMAGES_URL); ?>/linkedin.png" alt=""></a>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" >
							
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="widget">
					<h5 class="widgetheading"><?php echo ($footer['partner']); ?></h5>
					<div class="row myfootdiv" >
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 mypartner">
							<div class="col-lg-12 mypardiv1">
								<div class=" thumbnail mypardiv2" id="footthumb">
									<a href="http://www.cam.ac.uk/" target="_blank"><img src="<?php echo (HOME_IMAGES_URL); ?>/cambridge.png" alt=""></a>
								</div>
							</div>
							<div class="col-lg-12 mypardiv1 cyberport">
								<div class="thumbnail mypardiv2" id="footthumb">
									<a href="http://www.cyberport.hk/en" target="_blank"><img src="<?php echo (HOME_IMAGES_URL); ?>/cyberport.png" alt=""></a>
								</div>
							</div>
							<div class="col-lg-12 mypardiv1 arm">
								<div class=" thumbnail mypardiv2" id="footthumb" >
									<a href="http://www.armaccelerator.com/" target="_blank"><img src="<?php echo (HOME_IMAGES_URL); ?>/ARM.png" alt=""></a>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 mypartner">
							<div class="col-lg-12 mypardiv1">
								<div class=" thumbnail mypardiv2" id="footthumb">
									<a href="https://www.startupbootcamp.org/" target="_blank"><img src="<?php echo (HOME_IMAGES_URL); ?>/startbc.png" alt=""></a>
								</div>
							</div>
							<div class="col-lg-12 mypardiv1 merck">
								<div class="thumbnail mypardiv2" id="footthumb">
									<a href="http://www.merck-china.com/en/index.html" target="_blank"><img src="<?php echo (HOME_IMAGES_URL); ?>/merck.png" alt=""></a>
								</div>
							</div>
							<div class="col-lg-12 mypardiv1 johnson">
								<div class="thumbnail mypardiv2" id="footthumb">
									<a href="https://www.jnj.com/" target="_blank"><img src="<?php echo (HOME_IMAGES_URL); ?>/johnson.png" alt=""></a>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 mypartner" >
							<div class="col-lg-12 mypardiv1 hax" >
								<div class="thumbnail mypardiv2" id="footthumb">
									<a href="https://hax.co/" target="_blank"><img src="<?php echo (HOME_IMAGES_URL); ?>/hax.png" alt=""></a>
								</div>
							</div>
							<div class="col-lg-12 mypardiv1 sosv">
								<div class="thumbnail mypardiv2" id="footthumb">
									<a href="https://sosv.com/" target="_blank"><img src="<?php echo (HOME_IMAGES_URL); ?>/sosv.png" alt=""></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="widget">
					<h5 class="widgetheading"><?php echo ($footer['solution']); ?></h5>
					<ul class="link-list">
						<li><a href="/index.php/Home/Tab/solutions#pen"><?php echo ($footer['pen']); ?></a></li>
						<li><a href="/index.php/Home/Tab/solutions#bench"><?php echo ($footer['bench']); ?></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div id="sub-footer">
		<div class="container" id='sub-footer-cr'>
			Copyright © 2018. AptaCam-the future of diagnostic
		</div>
	</div>
</footer>

<script src="<?php echo (HOME_JS_URL); ?>/jquery.min.js"></script>
<script src="<?php echo (HOME_JS_URL); ?>/bootstrap.min.js"></script>

	
	<script type="text/javascript">
		$('.Contact').addClass('active')
	</script>		
		
	<script src="<?php echo (HOME_JS_URL); ?>/wow.min.js"></script>
	<script type="text/javascript">
		new WOW().init();
	</script>
		
</body>
</html>