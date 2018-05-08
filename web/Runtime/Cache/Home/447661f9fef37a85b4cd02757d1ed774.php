<?php if (!defined('THINK_PATH')) exit();?> <!--<?php if(is_array($list)): foreach($list as $key=>$vv): echo ($data); ?>
    <div class="title"><?php echo ($vv["title"]); ?></div>  
    <div class="content"><?php echo ($vv["content"]); ?></div>  
    <hr size="5" color="red" /><?php endforeach; endif; ?>  -->
<!--<div class="page"> 
	<?php print_r($data); ?>
	<?php echo ($data); ?> 
</div> -->

<ul>
	 <?php foreach ($data as $k => $v): ?>
		<li>
			<a href="<?php echo $v['id']; ?>"><?php echo $v['title']; ?></a>
			<div class="form-group ">
				<span><?php echo $v['authers']; ?></span>
				<div class=""><?php echo $v['periodical']; echo $v['copyright']; ?></div>
			</div>
		</li>
		<hr/>
	 <?php endforeach; ?>
</ul>
<div class="pagelist">
	<?php echo ($page); ?>
</div>