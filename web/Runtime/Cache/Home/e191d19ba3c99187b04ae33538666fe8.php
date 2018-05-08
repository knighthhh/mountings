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
		<!--<title>Title</title>-->

	<body>
		<div class="container" style="margin-top: 80px;">
			<!--<div style="text-align: center;">
				<h1>利用网络数据实现汽车配件标准化</h1>
			</div>
			
			<br /><br />-->

			<div class="container">
				<div class="row">
					<div class="col-md-9 col-sm-6" style="text-align: center;">
						<div class="btn-group btn-group-lg">
							<button id="car" valid="" type="button" class="btn btn-default" data-toggle="modal" data-target="#Modal">品牌</button>
							<button id="car_level1" levelone="" type="button" class="btn btn-default" data-toggle="modal" data-target="#Modal1">车系</button>
							<button id="car_level2" leveltwo="" type="button" class="btn btn-default" data-toggle="modal" data-target="#Modal2">车型</button>
							<button id="car_level3" levelthree="" type="button" class="btn btn-default" data-toggle="modal" data-target="#Modal3">车型明细</button>
							<button id="part" partid="" type="button" class="btn btn-default" data-toggle="modal" data-target="#Modalpart">配件</button>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="btn-group btn-group-lg">
							<button id="query" type="button" class="btn btn-info">查询</button>
						</div>
					</div>
				</div>
				<br /><br /><br /><br />
				<div class="row yiparts_items">
					<!--<div class="col-md-12" >
						<div class="row-fluid">
							<div class="col-md-3">
								<img alt="140x140" src="img/a.jpg" />
							</div>
							<div class="col-md-4">
								<blockquote>
									<p>github是一个全球化的开源社区.</p>
									<small>关键词 </small>
								</blockquote> 
							</div>
							<div class="col-md-5">
								<ul style="list-style: none;">
									<li >
										新闻资讯
									</li>
								</ul>
							</div>
						</div>
					</div>-->
				</div>
			</div>

			<!-- 模态框（Modal） -->
			<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title" >品牌</h4>
						</div>
						<div class="modal-body">
						</div>
						<div class="modal-footer">
						</div>
					</div>
				</div>
			</div>
			
			<div class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title" >车系</h4>
						</div>
						<div class="modal-body">
						</div>
						<div class="modal-footer">
						</div>
					</div>
				</div>
			</div>
			
			<div class="modal fade" id="Modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title" >车型</h4>
						</div>
						<div class="modal-body">
						</div>
						<div class="modal-footer">
						</div>
					</div>
				</div>
			</div>
			
			<div class="modal fade" id="Modal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title" >车型明细</h4>
						</div>
						<div class="modal-body">
						</div>
						<div class="modal-footer">
						</div>
					</div>
				</div>
			</div>
			
			<div class="modal fade" id="Modalpart" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title" >配件</h4>
						</div>
						<div class="modal-body">
						</div>
						<div class="modal-footer">
						</div>
					</div>
				</div>
			</div>
			
			
		</div>
		
		<footer id="footer" style="margin-top: 300px;">
		 <div class="container">
		 	<p>汽车型号 | 汽配查询 | 汽车保养</p>
		 	<p>14计科1班-庄御楠-1414080901101</p>
		 </div>
	</footer>
	</body>
	<script type="text/javascript">
		$('.chaxun').addClass('active');
				host_url = 'http://127.0.0.1';
//		host_url = 'http://139.199.166.127'	;
		$('#car').on('click',function(){
			$.ajax( {
			    url:host_url + '/mountings/web/index.php/Connecter/Car/get_car',
			    data:{
			    },
			    type:'POST',
			    dataType:'json',
			    success:function(data) {
			       	var s="";
					for(var i=0;i<data.length;++i){
						s += '<button valid="'+data[i].valid+'" type="button" class="btn btn-warning ">'+data[i].car_name+'</button>&nbsp;';
					}
					$('.modal-body').html(s);
			     },
			     error : function(XMLHttpRequest, textStatus, errorThrown) {
			     }
			});
		})
		
		$('#car_level1').on('click',function(){
			$.ajax( {
			    url:host_url + '/mountings/web/index.php/Connecter/Car/get_levelone',
			    data:{
			    		level1_bid:$('#car').attr("valid"),
			    },
			    type:'POST',
			    dataType:'json',
			    success:function(data) {
			       	var s="";
					for(var i=0;i<data.length;++i){
						s += '<button levelone="'+data[i].level1_m1id+'" type="button" class="btn btn-warning ">'+data[i].level1_name+'</button>&nbsp;';
					}
					$('.modal-body').html(s);
			     },
			     error : function(XMLHttpRequest, textStatus, errorThrown) {
			     }
			});
		})
		
				
		$('#car_level2').on('click',function(){
			$.ajax( {
			    url:host_url + '/mountings/web/index.php/Connecter/Car/get_leveltwo',
			    data:{
			    		level2_m1id:$('#car_level1').attr("levelone"),
			    },
			    type:'POST',
			    dataType:'json',
			    success:function(data) {
			       	var s="";
					for(var i=0;i<data.length;++i){
						s += '<button leveltwo="'+data[i].level2_m2id+'" type="button" class="btn btn-warning ">'+data[i].level2_name+'</button>&nbsp;';
					}
					$('.modal-body').html(s);
			     },
			     error : function(XMLHttpRequest, textStatus, errorThrown) {
			     }
			});
		})
		
				
		$('#car_level3').on('click',function(){
			$.ajax( {
			    url:host_url + '/mountings/web/index.php/Connecter/Car/get_levelthree',
			    data:{
			    		level3_m2id:$('#car_level2').attr("leveltwo"),
			    },
			    type:'POST',
			    dataType:'json',
			    success:function(data) {
			       	var s="";
					for(var i=0;i<data.length;++i){
						s += '<button levelthree="'+data[i].level3_m3id+'" type="button" class="btn btn-warning ">'+data[i].chexing+'</button>&nbsp;';
					}
					$('.modal-body').html(s);
			     },
			     error : function(XMLHttpRequest, textStatus, errorThrown) {
			     }
			});
		})
		
		$('#part').on('click',function(){
			$.ajax( {
			    url:host_url + '/mountings/web/index.php/Connecter/Car/get_part',
			    data:{
			    		item_m3id:$('#car_level3').attr("levelthree")
			    },
			    type:'POST',
			    dataType:'json',
			    success:function(data) {
			       	var s="";
					for(var i=0;i<data.length;++i){
						s += '<button partid="'+data[i].partid+'" type="button" class="btn btn-warning ">'+data[i].part_name+'</button>&nbsp;';
					}
					$('.modal-body').html(s);
			     },
			     error : function(XMLHttpRequest, textStatus, errorThrown) {
			     }
			});
		})

//事件、/////////////////////////////、、、、、、、、、、、、、、、、、、

		$('#Modal .modal-body').on('click','button',function(){
			valid = $(this).attr('valid');
			name = $(this).html();
			$('#car').attr("valid",valid);
			$('#car').html(name);
			$('#Modal').modal('hide');
			
			$('#car_level1').html('车系');
			$('#car_level2').html('车型');
			$('#car_level3').html('车型明细');
			$('#part').html('配件');
			
		})
		
		$('#Modal1 .modal-body').on('click','button',function(){
			levelone = $(this).attr('levelone');
			name = $(this).html();
			$('#car_level1').attr("levelone",levelone);
			$('#car_level1').html(name);
			$('#Modal1').modal('hide');
			
			$('#car_level2').html('车型');
			$('#car_level3').html('车型明细');
			$('#part').html('配件');
		})
		
		$('#Modal2 .modal-body').on('click','button',function(){
			leveltwo = $(this).attr('leveltwo');
			name = $(this).html();
			$('#car_level2').attr("leveltwo",leveltwo);
			$('#car_level2').html(name);
			$('#Modal2').modal('hide');
			
			$('#car_level3').html('车型明细');
			$('#part').html('配件');
		})
		
		$('#Modal3 .modal-body').on('click','button',function(){
			levelthree = $(this).attr('levelthree');
			name = $(this).html();
			$('#car_level3').attr("levelthree",levelthree);
			$('#car_level3').html(name);
			$('#Modal3').modal('hide');
			
			$('#part').html('配件');
		})
		
		$('#Modalpart .modal-body').on('click','button',function(){
			partid = $(this).attr('partid');
			name = $(this).html();
			$('#part').attr("partid",partid);
			$('#part').html(name);
			$('#Modalpart').modal('hide');
		})
		
//查询
		$('#query').on('click',function(){
			item_m3id = $('#car_level3').attr("levelthree");
			item_partid = $('#part').attr("partid");
			$.ajax( {
			    url:host_url + '/mountings/web/index.php/Connecter/Car/get_item',
			    data:{
			    		item_m3id:item_m3id,
			    		item_partid:item_partid
			    },
			    type:'POST',
			    dataType:'json',
			    success:function(data) {
//			    	if(data.length==0){
//			    		var s="";
//			    		$('.yiparts_items').html(s);
//			    	}else{
//			    		var s="";
//						for(var i=0;i<data.length;++i){
//							s +='<div class="col-md-12" ><div class="row-fluid"><div class="col-md-3">';
//							s +='<img alt="140x140" src="'+data[i].item_img+'" /></div><div class="col-md-4">';
//							s +='<blockquote><p>'+$("#part").html()+'</p><small>'+data[i].item_oe+'</small></blockquote></div><div class="col-md-5"><ul style="list-style: none;">';
//							s +='<li >'+data[i].item_arg1+'</li><li>'+data[i].item_arg2+'</li><li>'+data[i].item_arg3+'</li><li>'+data[i].item_arg4+'</li><li>'+data[i].item_arg5+'</li></ul></div></div></div>';
//						}
//						$('.yiparts_items').html(s);
//			    	}
				
		    		var s="";
					s +='<div class="col-md-12" ><div class="row-fluid"><div class="col-md-3">';
					s +='<img alt="140x140" src="'+data.item_img+'" /></div><div class="col-md-4">';
					s +='<blockquote><p>'+$("#part").html()+'</p><small>'+data.item_oe+'</small></blockquote></div><div class="col-md-5"><ul style="list-style: none;">';
					s +='<li >'+data.item_arg1+'</li><li>'+data.item_arg2+'</li><li>'+data.item_arg3+'</li><li>'+data.item_arg4+'</li><li>'+data.item_arg5+'</li></ul></div></div></div>';
					$('.yiparts_items').html(s);
			       	
			     },
			     error : function(XMLHttpRequest, textStatus, errorThrown) {
			     }
			});
		})
		
		
	</script>

</html>