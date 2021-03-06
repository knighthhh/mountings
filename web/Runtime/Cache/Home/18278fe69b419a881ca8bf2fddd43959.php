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
		
	<link rel="stylesheet" href="<?php echo (HOME_CSS_URL); ?>/solutions.css">
	<div id="solutionbody">
		<div class="">
			<div class="home-bg" >
				<div class="picture">
					<img src="<?php echo (HOME_IMAGES_URL); ?>/solutions.png"/>
				</div>
				<div class="home-text">
					<div class="row home-box">
						<div class="response col-lg-7  col-md-7  col-sm-7 col-xs-7 " >
							<div class="home-box-1">
								<h1 class="home-box1-h"><?php echo ($solutions['tab1_h']); ?></h1>
								<p class="home-box1-p mytext-align"  ><?php echo ($solutions['tab1_box1_p']); ?><span class="home-box1-btn1"><a><?php echo ($solutions['tab1_box1_more']); ?></a></span></p>
								
								<p class="home-box1-p home-box1-hidden mytext-align" ><?php echo ($solutions['tab1_box2_p1']); ?><br/><br/><?php echo ($solutions['tab1_box2_p2']); ?><span class="home-box1-btn2"><a> ∧</a></span></p>
								
											
							</div>
							<!--<div class="home-box-2">
								<p class="home-box2-p">Bovine mastitis is the most costly pathology concerning dairy industry. The economic damages resulting of these infections are related with...<span class="home-box2-btn1"><a>learn more ∨</a></span></p>
								<p class="home-box2-p home-box2-hidden">Bovine mastitis is the most costly pathology concerning dairy industry. The economic damages resulting of these infections are related with decreased milk production, changes in milk composition and quality. AptaCam develops fast, accurate and easy-to-use diagnostic devices for bovine mastitis. <span class="home-box2-btn2"><a> ∧</a></span></p>
							</div>-->
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="tab-pro">
			<div class="">
				<!--<p class="">Bovine mastitis is the most costly pathology concerning dairy industry. The economic damages resulting of these infections are related with...<span class="home-box2-btn1"><a>learn more ∨</a></span></p>-->
				<!--<p class="tab-pro-p"><?php echo ($solutions['tab2_box1_p1']); ?></p>-->
				<p class="tab-pro-p mytext-align"><?php echo ($solutions['tab2_box2_p1']); echo ($solutions['tab2_box2_p2']); echo ($solutions['tab2_box2_p3']); echo ($solutions['tab2_box2_p4']); ?></p>
				<!--<p class="tab-pro-p mytext-align"><?php echo ($solutions['tab2_box1_p1']); echo ($solutions['tab2_box1_p2']); ?><span class="tab-pro-btn1"><a><?php echo ($solutions['tab2_box1_more']); ?></a></span></p>-->
				<div class="tab-pro-hidden mytext-align">
					<!--<p class=""><?php echo ($solutions['tab2_box2_p1']); ?></p>-->
					<!--<p class="tab-pro-pb"><?php echo ($solutions['tab2_box2_p1']); echo ($solutions['tab2_box2_p2']); ?></p>
					<p class="tab-pro-pb"><?php echo ($solutions['tab2_box2_p3']); ?></p>-->
					<p class="tab-pro-pb"><?php echo ($solutions['tab2_box2_p1']); echo ($solutions['tab2_box2_p2']); echo ($solutions['tab2_box2_p3']); echo ($solutions['tab2_box2_p4']); ?><span class="tab-pro-btn2"><a> ∧</a></span></p>
				</div>
			</div>
		</div>	
		
		<div id="tab1">
			<a name="pen"></a>
			<div class="">
				<div class="tab1-box1 " >
					<h1><?php echo ($solutions['tab3_h']); ?></h1>
					<p class="mytext-align"><?php echo ($solutions['tab3_p1']); echo ($solutions['tab3_p2']); ?></p> 
					<p ></p>
				</div>
				<div class="container">
					<img src="<?php echo (HOME_IMAGES_URL); ?>/pro2.png" class="auto img-responsive center-block"/>
				</div>
			</div>
		</div>
		
		
		<div id="tab2" style="">
			<a name="bench" ></a>
			<div class="">
				<div class="tab2-box1">
					<h1 ><?php echo ($solutions['tab4_h']); ?></h1>
					<p class="mytext-align"><?php echo ($solutions['tab4_p1']); echo ($solutions['tab4_p2']); echo ($solutions['tab4_p3']); ?></p> 
					<!--<p ><?php echo ($solutions['tab4_p2']); ?></p>
					<p ><?php echo ($solutions['tab4_p3']); ?></p>-->
				</div>
				<div class="container">
					<img src="<?php echo (HOME_IMAGES_URL); ?>/pro1.png"  class="productimg auto img-responsive center-block"/>
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
		$('.Solutions').addClass('active');
		$(document).ready(function(){
			$(".home-box1-btn1").click(function(){
		  	    $(".home-box1-p").hide();
		    	$(".home-box1-hidden").show();
		    });
		    $(".home-box1-btn2").click(function(){
		    	$(".home-box1-p").show();
		  	    $(".home-box1-hidden").hide();
		    });
		    $(".home-box2-btn1").click(function(){
		  	    $(".home-box2-p").hide();
		    	$(".home-box2-hidden").show();
		    });
		    $(".home-box2-btn2").click(function(){
		    	$(".home-box2-p").show();
		  	    $(".home-box2-hidden").hide();
		    });
		    
		     $(".tab-pro-btn1").click(function(){
		  	    $(".tab-pro-p").hide();
		    	$(".tab-pro-hidden").show();
		    });
		    $(".tab-pro-btn2").click(function(){
		    	$(".tab-pro-p").show();
		  	    $(".tab-pro-hidden").hide();
		    });
		});
	</script>
		
</body>
</html>