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
	
	<link rel="stylesheet" href="<?php echo (HOME_CSS_URL); ?>/about.css">	
	<div id="about">
		<div class="">
			<div class="home-bg" >
				<div class="picture">
					<img src="<?php echo (HOME_IMAGES_URL); ?>/yiliao3.png"/>
				</div>
				<div class="home-text">
					<div class="home-box" style="padding: 0;">
						<div class="home-box-1">
							<!--<h1 class="home-box-h">Company Introduction</h1>
							<p class="home-box-p">AptaCam is dedicated to develop fast, senstive and easy-to-use portable diagnostic devices for infectious disease in farm animals and humans. We design reagents based on the biomarkers of pathogens, and apply novel biosensors to measure the (bio)chemical changes within minutes... <span class="home-box-btn1"><a>more ∨</a></span></p>
							<p class="home-box-p home-box-hidden">AptaCam is dedicated to develop fast, senstive and easy-to-use portable diagnostic devices for infectious disease in farm animals and humans. We design reagents based on the biomarkers of pathogens, and apply novel biosensors to measure the (bio)chemical changes within minutes. At the heart of AptaCam is the passion to make molecular recognition easier and faster. The easy-to-use sensing platform can capture nano-level signal within minutes, which save time and reduce loss for farmers and patients.<span class="home-box-btn2"><a> ∧</a></span></p>-->
							<div class="row" >
								<div id="rexs-8" class="col-lg-7 col-md-7 col-sm-7 col-xs-7" >
									<h1 class="home-box-h"><?php echo ($about['tab1_h']); ?></h1>
									<p class="home-box-p mytext-align" ><?php echo ($about['tab1_box1_p']); ?><span class="home-box-btn1"><a><?php echo ($about['tab1_box1_more']); ?></a></span></p>
									<p class="home-box-p home-box-hidden mytext-align"><?php echo ($about['tab1_box2_p1']); ?><br/><br/><?php echo ($about['tab1_box2_p2']); ?><span class="home-box-btn2"><a> ∧</a></span></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="">
			<div class="tab1-bg" >
				<div class="picture">
					<img src="<?php echo (HOME_IMAGES_URL); ?>/team.jpg"/>
				</div>
				<div class="tab1-text">
					<div class="tab1-box">
						<div id="rowmargin"  class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
								<div id="case" >
									<div class="" >
										<div class="row ">
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<div id='partner' class="thumbnail ">
													<img src="<?php echo (HOME_IMAGES_URL); ?>/man.png" alt="" />
													<div id='mycaption' class="caption ">
														<h5><?php echo ($about['tab2_per1_h1']); ?></h5>
														<h6><?php echo ($about['tab2_per1_h2']); ?></h6>
														<p class="jiesao" title="<?php echo ($about['tab2_per1_p']); ?>"><?php echo ($about['tab2_per1_p']); ?></p>
														
													</div>
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<div id='partner' class="thumbnail">
													<img src="<?php echo (HOME_IMAGES_URL); ?>/man.png" alt="" />
													<div id='mycaption' class="caption">
														<h5><?php echo ($about['tab2_per2_h1']); ?></h5>
														<h6><?php echo ($about['tab2_per2_h2']); ?></h6>
														<p class="jiesao" title="<?php echo ($about['tab2_per2_p']); ?>"><?php echo ($about['tab2_per2_p']); ?></p>
													</div>
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<div id='partner' class="thumbnail">
													<img src="<?php echo (HOME_IMAGES_URL); ?>/women.png" alt="" />
													<div id='mycaption' class="caption">
														<h5><?php echo ($about['tab2_per3_h1']); ?></h5>
														<h6><?php echo ($about['tab2_per3_h2']); ?></h6>
														<p class="jiesao" title="<?php echo ($about['tab2_per3_p']); ?>"><?php echo ($about['tab2_per3_p']); ?></p>
													</div>
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<div id='partner' class="thumbnail">
													<img src="<?php echo (HOME_IMAGES_URL); ?>/women.png" alt="" />
													<div id='mycaption' class="caption">
														<h5><?php echo ($about['tab2_per4_h1']); ?></h5>
														<h6><?php echo ($about['tab2_per4_h2']); ?></h6>
														<p class="jiesao" title="<?php echo ($about['tab2_per4_p']); ?>"><?php echo ($about['tab2_per4_p']); ?></p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
								<div class="tab1-box-team">
									<h1 class="tab1-box-h"><?php echo ($about['tab2_h']); ?></h1>
									<p class="tab1-box-p mytext-align"><?php echo ($about['tab2_box1_p']); ?><span class="tab1-box-btn1"><a><?php echo ($about['tab2_box1_more']); ?></a></span></p>
									<p class="tab1-box-p tab1-box-hidden mytext-align"><?php echo ($about['tab2_box2_p']); ?><span class="tab1-box-btn2"><a> ∧</a></span></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="">
			<div class="tab2-bg" >
				<div class="picture">
					<img src="<?php echo (HOME_IMAGES_URL); ?>/map.png"/>
				</div>
				<div class="tab2-text">
					<div class="tab2-box">
						<div class="tab2-box-1">
							<h1 class="tab2-box-h"><?php echo ($about['tab3_h']); ?></h1>
							<p class="tab2-box-p mytext-align"><?php echo ($about['tab3_p']); ?></p>
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
		$('.About').addClass('active');
		$(document).ready(function(){
			$(".home-box-btn1").click(function(){
		  	    $(".home-box-p").hide();
		    	$(".home-box-hidden").show();
		    });
		    $(".home-box-btn2").click(function(){
		    	$(".home-box-p").show();
		  	    $(".home-box-hidden").hide();
		    });
		    
	    	$(".tab1-box-btn1").click(function(){
		  	    $(".tab1-box-p").hide();
		    	$(".tab1-box-hidden").show();
		    });
		    $(".tab1-box-btn2").click(function(){
		    	$(".tab1-box-p").show();
		  	    $(".tab1-box-hidden").hide();
		    });
		});
	</script>
</body>
</html>