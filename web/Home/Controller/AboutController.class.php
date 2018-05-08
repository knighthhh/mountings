<?php
namespace Home\Controller;
use Think\Controller;
class AboutController extends BaseController {
    
    
    public function about(){
     	$model = M('user');
     	$data['user_id'] = cookie('user_id');
     	$result = $model -> where($data)->find();
     	$chaxun = M('user_part')
     			  ->alias('a')
     			  ->join('__YIPARTS_ITEMS__ b on a.part_id=b.item_id','LEFT')
     			  ->where($data)
     			  ->select();
			  
     			  
 	  	$assign = array(
			        	'res' => $result,
			        	'chaxun'=>$chaxun
		            );
     	$this->assign($assign);
        $this->display('about');
    }
    
    public function logout(){
		cookie('user_id',null);
		redirect(U('Login/login'));
	}
   
    
}
