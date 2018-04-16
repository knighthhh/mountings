<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title></title>
<link rel="stylesheet" href="<?php echo (ADMIN_CSS_URL); ?>pintuer.css">
<link rel="stylesheet" href="<?php echo (ADMIN_CSS_URL); ?>admin.css">
<link rel="stylesheet" href="<?php echo (ADMIN_CSS_URL); ?>jquery-ui.min.css">
<link rel="stylesheet" href="<?php echo (ADMIN_LAYUI_URL); ?>css/layui.css">
<link rel="stylesheet" href="<?php echo (ADMIN_CSS_URL); ?>font-awesome.min.css">
<script src="<?php echo (ADMIN_JS_URL); ?>jquery.js"></script>
<script src="<?php echo (ADMIN_JS_URL); ?>jquery-ui.min.js"></script>
<script src="<?php echo (ADMIN_JS_URL); ?>pintuer.js"></script>
<style type="text/css">
	.dialogtable{border-collapse: collapse; width: 100%;padding-top: 12px;}
	.dialogtable th{background-color: #E8E8E8;}
	.dialogtable th,
	.dialogtable td{border: solid 1px #ccc; padding: 8px;valign:middle;}
	.button.border-green{ color:#22CC77;}
	.pagelist span.current{background: #22CC77}
	.level li{float:left;}
	.bread{}
</style>
</head>
<body>
<form method="post" action="/index.php/Admin/Knowdetail/get_email/p/ADMIN_LAYUI_URLcss/layui.css" id="listform">
  <div class="panel admin-panel">
    <!-- <div class="panel-head">
	    <strong class="icon-reorder"> 内容列表</strong>
	</div> -->
    <div class="padding border-bottom">
      <!--<ul class="search" style="padding-left:10px;">
        <li>
        <a class="layui-btn layui-btn-primary" href="/index.php/Admin/User/add"><i class="layui-icon">&#xe654;</i>  添加用户</a> </li>
        <li style="margin-left: 500px">
          <input type="text" placeholder="请" name="searchValue" class="input" style="width:250px; line-height:17px;display:inline-block" />
          <a class="layui-btn layui-btn" style="cursor:pointer" onclick="$('#listform').submit()"><i class="layui-icon">&#xe615;</i>  搜索</a>	
      </ul>-->
    </div>
    <table class="table table-hover text-center">
      <tr>
        <th width="40%" style="">ID</th>
        <th width="40%">email</th>
      </tr>
      <?php if(empty($data)): ?>
      		<tr>
      			<td></td>
      			<td></td>
      			<td></td>
      			<td>
      				<div style="padding:20px"><i class="layui-icon" style="font-size: 30px; color: #22CC77;">&#xe650;</i>空空如也~</div>
      			</td>
      		</tr>
      <?php endif; ?>
    <?php foreach ($data as $k => $v): ?>
        <tr>
          <!--<td style="text-align:left; padding-left:20px;"><input type="checkbox" name="user_id[]" value="<?php echo $v['user_id']; ?>" /><?php echo $v['user_id']; ?></td>-->
          <td><?php echo $v['email_id']; ?></td>
          <td><?php echo $v['email']; ?></td>
          
          
        </tr>
        
    <?php endforeach; ?>
      <!--<tr>
        <td style="text-align:left; padding:19px 0;padding-left:20px;"><input type="checkbox" id="checkall"/>
          全选 </td>
        <td colspan="7" style="text-align:left;padding-left:20px;"><a href="javascript:void(0)" class="button border-red icon-trash-o" style="padding:5px 15px;" onclick="DelSelect()"> 删除</a>
      </tr>-->
      <tr>
      	<td colspan="8">
      	<div class="pagelist">
      		<?php echo ($page); ?>
      		</div>
      	</td>
      </tr>
    </table>
</form>
<script src="<?php echo (ADMIN_LAYUI_URL); ?>lay/dest/layui.all.js"></script>
<script type="text/javascript">


</script>
</body>
</html>