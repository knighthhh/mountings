<?php
namespace Home\Controller;
use Think\Controller;
class AboutController extends BaseController {
    
    
    public function about(){
     	$model = M('user');
     	$data['user_id'] = cookie('user_id');
     	$result = $model -> where($data)->find();
 	  	$assign = array(
			        	'res' => $result
		            );
//		         print_r($assign);
     	$this->assign($assign);
        $this->display('about');
    }
    
   
    
}
