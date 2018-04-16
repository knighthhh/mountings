<?php
namespace Admin\Controller;
use Think\Controller;
class KnowdetailController extends Controller {
   
    
    public function get_email(){
    	$model = D('Email');
    	$info = $model -> search();
		//dump($info);die;
		$this->assign($info);
//		print_r($info);
		$this->display();
    }
    
}
