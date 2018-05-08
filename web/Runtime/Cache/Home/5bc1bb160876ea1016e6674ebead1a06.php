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
	
	<link rel="stylesheet" href="<?php echo (HOME_CSS_URL); ?>/knowledge.css">
	<style type="text/css">
		.pagelist span.current{background: #22CC77}
		.pagelist {padding:10px 0; text-align:center;}
		.pagelist span,.pagelist a{ border-radius:3px; border:1px solid #dfdfdf;display:inline-block; padding:5px 12px;}
		.pagelist a{ margin:0 3px;}
		.pagelist span.current{ background:#09F; color:#FFF; border-color:#09F; margin:0 2px;}
		.pagelist a:hover{background:#09F; color:#FFF; border-color:#09F; }
		.pagelist label{ padding-left:15px; color:#999;}
		.pagelist label b{color:red; font-weight:normal; margin:0 3px;}
	</style>
	<div id="knowledgebody">
		<div class="home-bg" >
			<div class="picture">
				<img src="<?php echo (HOME_IMAGES_URL); ?>/knowledge.jpg"/>
			</div>
			<div class="home-text">
				<div class="row home-box">
					<div class="response col-lg-7  col-md-7  col-sm-7 col-xs-7 " >
						<div class="home-box-1">
							<h1 class="home-box1-h"><?php echo ($knowledge['tab1_h']); ?></h1>
						</div>
					</div>
				</div>
			</div>
		</div>	
      			
		<div class="tab1">
			<div class="container">
				<div class="row">
					<div class="col-md-2">
						<ul id="myTab" class="nav nav-tabs nav-stacked" style="font-family:  Arial Rounded MT Bold;">
							<li class="swv">
								<a href="#swv" data-toggle="tab">Square Wave Voltammetry</a>
							</li>
							<li class="cyclic">
								<a href="#cyclic" data-toggle="tab">Cyclic Voltammetry</a>
							</li>
							<li class="sinusoid">
								<a href="#sinusoid" data-toggle="tab">Sinusoid</a>
							</li>
							<li class="constant">
								<a href="#constant" data-toggle="tab">Constant Voltage</a>
							</li>
							<li class="linear">
								<a href="#linear" data-toggle="tab">Linear Sweep Voltammetry</a>
							</li>
							<li class="chronoamperometry">
								<a href="#chronoamperometry" data-toggle="tab">Chronoamperometry</a>
							</li>
							<li class="multistep">
								<a href="#multistep" data-toggle="tab">MultiStep Potentiometry</a>
							</li>
							<li class="email">
								<a href="#" class="" data-toggle="modal" data-target="#myModal">Register for the latest contents</a>
							</li>
						</ul>
					</div>
					<div class="col-md-10">
						
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
											&times;
										</button>
										<h4 class="modal-title" id="myModalLabel">
											<?php echo ($knowledge['send_email']); ?>
										</h4>
									</div>
									<div class="modal-body">
										<input type="" name="email" id="" value="" size="80"/>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">close
										</button>
										<button type="button" class="btn btn-primary submit">
											submit
										</button>
									</div>
								</div><!-- /.modal-content -->
							</div><!-- /.modal -->
						</div>
						
						<div id="myTabContent" class="tab-content set" style="font-family:  Arial Rounded MT Bold;">
								<div id="swv" class="tab-pane fade active in">
									<hr />
									<h2>Square Wave Voltammetry</h2>
									<hr />
									<div class="swv_item">
										<ul>
											 <?php foreach ($datas[0]['data'] as $k => $v): ?>
												<li>
													<a href="<?php echo (NCBI_URL); echo $v['pmid']; ?>" target="_blank"><?php echo $v['title']; ?></a>
													<div class="form-group ">
														<span><?php echo $v['authers']; ?></span>
														<div class=""><?php echo $v['periodical']; echo $v['copyright']; ?></div>
													</div>
												</li>
												<hr/>
											 <?php endforeach; ?>
										</ul>
										<div class="pagelist">
							      			<?php echo ($datas[0]['page']); ?>
							      		</div>
									</div>
									
								</div>
								
								<div id="cyclic" class="tab-pane fade">
									<hr />
									<h2>Cyclic Voltammetry</h2>
									<hr />
									<ul>
										 <?php foreach ($datas[1]['data'] as $k => $v): ?>
											<li>
												<a href="/index.php/Home/Knowdetail/knowdetail/user_id/<?php echo $v['id']; ?>" target="_blank"><?php echo $v['title']; ?></a>
												<div class="form-group ">
													<span><?php echo $v['authers']; ?></span>
													<div class=""><?php echo $v['periodical']; echo $v['copyright']; ?></div>
												</div>
											</li>
											<hr/>
										 <?php endforeach; ?>
									</ul>
									<div class="pagelist">
						      			<?php echo ($datas[1]['page']); ?>
						      		</div>
								</div>
								
								<div id="sinusoid" class="tab-pane fade">
									<hr />
									<h2>Sinusoid</h2>
									<hr />
									<ul>
										 <?php foreach ($datas[1]['data'] as $k => $v): ?>
											<li>
												<a href="/index.php/Home/Knowdetail/knowdetail/user_id/<?php echo $v['id']; ?>" target="_blank"><?php echo $v['title']; ?></a>
												<div class="form-group ">
													<span><?php echo $v['authers']; ?></span>
													<div class=""><?php echo $v['periodical']; echo $v['copyright']; ?></div>
												</div>
											</li>
											<hr/>
										 <?php endforeach; ?>
									</ul>
									<div class="pagelist">
						      			<?php echo ($datas[1]['page']); ?>
						      		</div>
								</div>
								
								<div id="constant" class="tab-pane fade">
									<hr />
									<h2>Constant Voltage</h2>
									<hr />
									<ul>
										 <?php foreach ($datas[1]['data'] as $k => $v): ?>
											<li>
												<a href="/index.php/Home/Knowdetail/knowdetail/user_id/<?php echo $v['id']; ?>" target="_blank"><?php echo $v['title']; ?></a>
												<div class="form-group ">
													<span><?php echo $v['authers']; ?></span>
													<div class=""><?php echo $v['periodical']; echo $v['copyright']; ?></div>
												</div>
											</li>
											<hr/>
										 <?php endforeach; ?>
									</ul>
									<div class="pagelist">
						      			<?php echo ($datas[1]['page']); ?>
						      		</div>
								</div>
								
								<div id="linear" class="tab-pane fade">
									<hr />
									<h2>Linear Sweep Voltammetry</h2>
									<hr />
									<ul>
										 <?php foreach ($datas[1]['data'] as $k => $v): ?>
											<li>
												<a href="/index.php/Home/Knowdetail/knowdetail/user_id/<?php echo $v['id']; ?>" target="_blank"><?php echo $v['title']; ?></a>
												<div class="form-group ">
													<span><?php echo $v['authers']; ?></span>
													<div class=""><?php echo $v['periodical']; echo $v['copyright']; ?></div>
												</div>
											</li>
											<hr/>
										 <?php endforeach; ?>
									</ul>
									<div class="pagelist">
						      			<?php echo ($datas[1]['page']); ?>
						      		</div>
								</div>
								
								<div id="chronoamperometry" class="tab-pane fade">
									<hr />
									<h2>Chronoamperometry</h2>
									<hr />
									<ul>
										 <?php foreach ($datas[1]['data'] as $k => $v): ?>
											<li>
												<a href="/index.php/Home/Knowdetail/knowdetail/user_id/<?php echo $v['id']; ?>" target="_blank"><?php echo $v['title']; ?></a>
												<div class="form-group ">
													<span><?php echo $v['authers']; ?></span>
													<div class=""><?php echo $v['periodical']; echo $v['copyright']; ?></div>
												</div>
											</li>
											<hr/>
										 <?php endforeach; ?>
									</ul>
									<div class="pagelist">
						      			<?php echo ($datas[1]['page']); ?>
						      		</div>
								</div>
								
								<div id="multistep" class="tab-pane fade">
									<hr />
									<h2>MultiStep Potentiometry</h2>
									<hr />
									<ul>
										 <?php foreach ($datas[1]['data'] as $k => $v): ?>
											<li>
												<a href="/index.php/Home/Knowdetail/knowdetail/user_id/<?php echo $v['id']; ?>" target="_blank"><?php echo $v['title']; ?></a>
												<div class="form-group ">
													<span><?php echo $v['authers']; ?></span>
													<div class=""><?php echo $v['periodical']; echo $v['copyright']; ?></div>
												</div>
											</li>
											<hr/>
										 <?php endforeach; ?>
									</ul>
									<div class="pagelist">
						      			<?php echo ($datas[1]['page']); ?>
						      		</div>
								</div>
								
							<!--<div id="cyclic" class="tab-pane fade">
								<hr />
								<h2>Cyclic Voltammetry</h2>
								<hr />
								<ul>
									<li>
										<a href="#">Lower Preterm Birth Rates but Persistent Racial Disparities in an Open-Access Health Care System </a>
										<div class="form-group ">
											<span>Engelhardt KA, Hisle-Gorman E, Gorman GH, Dobson NR</span><span class="badge">16</span>
											<span class="">PMID: 29547967</span>
										</div>
									</li>
									<hr />
								</ul>
								<ul class="pagination pagination-lg pull-right">
									<li>
										<a href="#">&laquo;</a>
									</li>
									<li>
										<a href="#">1</a>
									</li>
									<li>
										<a href="#">2</a>
									</li>
									<li>
										<a href="#">3</a>
									</li>
									<li>
										<a href="#">4</a>
									</li>
									<li>
										<a href="#">5</a>
									</li>
									<li>
										<a href="#">&raquo;</a>
									</li>
								</ul>
							</div>-->
							
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
				<div class="widget" style="font-family:  Arial Rounded MT Bold;">
					<h5 class="widgetheading" style="font-family:  Arial Rounded MT Bold;"><?php echo ($footer['contact']); ?></h5>
					<address>
					<strong >AptaCam</strong><br>
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
					<h5 class="widgetheading" style="font-family:  Arial Rounded MT Bold;"><?php echo ($footer['partner']); ?></h5>
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
					<h5 class="widgetheading" style="font-family:  Arial Rounded MT Bold;"><?php echo ($footer['solution']); ?></h5>
					<ul class="link-list" style="font-family:  Arial Rounded MT Bold;">
						<li><a href="/index.php/Home/Tab/solutions#pen"><?php echo ($footer['pen']); ?></a></li>
						<li><a href="/index.php/Home/Tab/solutions#bench"><?php echo ($footer['bench']); ?></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div id="sub-footer">
		<div class="container" id='sub-footer-cr' style="font-family:  Arial Rounded MT Bold;">
			Copyright © 2018. AptaCam-the future of diagnostic
		</div>
	</div>
</footer>

<script src="<?php echo (HOME_JS_URL); ?>/jquery.min.js"></script>
<script src="<?php echo (HOME_JS_URL); ?>/bootstrap.min.js"></script>

	
	<script type="text/javascript">
		$('.Knowledge').addClass('active');
		
		$('.submit').on('click',function(){
			var email = $("input[name='email'] ").val();
			var regex = /^([0-9A-Za-z\-_\.]+)@([0-9a-z]+\.[a-z]{2,3}(\.[a-z]{2})?)$/g;
			if(regex.test(email)){
				url = "/index.php/Home/Knowdetail/email/";
				$.ajax({  
	                type:'post',  
	                url:url,
	                data:{
	                	email:email
	                },
	                success:function(res){  
	                	 $('#myModal').modal('hide') 
	                }  
	            })  
			}else{
				alert("<?php echo ($knowledge['error_email']); ?>");
			}
//			url = "<?php echo (SITE_URL); ?>//index.php/Home/Tab/Knowdetail/email/";
			
		})
		
//		$(".pagelist a").on('click',function(){ //直接用click点击事件因为js没刷新还是会出现跳转，on（“click”,function）事件测试有的页码也会出现跳转
//				
//	            var pageObj = this;  
//	            var url = pageObj.href;  
//	            $.ajax({  
//	                type:'get',  
//	                url:url,
//	                data:{
//	                	type:'swv'
//	                },
//	                success:function(res){  
//	                	 alert(res);
//	                     $(".swv_item").html(res);  
//	                }  
//	            })  
//	  
//	            return false;//取消a链接的跳转  
//	    });
		
		
//		myurl = window.location.href;
//		url_method = myurl.split("method/");
//		if(url_method[1] == "swv"){
//			$('#myTabContent div h2').html('Square Wave Voltammetry');
//		}else if (url_method[1] == "cyclic"){
//			$('#myTabContent div h2').html('Cyclic Voltammetry');
//		}else if (url_method[1] == "sinusoid"){
//			$('#myTabContent div h2').html('Sinusoid');
//		}else if (url_method[1] == "constant"){
//			$('#myTabContent div h2').html('Constant Voltage');
//		}else if (url_method[1] == "linear"){
//			$('#myTabContent div h2').html('Linear Sweep Voltammetry');
//		}else if (url_method[1] == "chronoamperometry"){
//			$('#myTabContent div h2').html('Chronoamperometry');
//		}else if (url_method[1] == "multistep"){
//			$('#myTabContent div h2').html('MultiStep Potentiometry');
//		}
	</script>	
		

</body>
</html>