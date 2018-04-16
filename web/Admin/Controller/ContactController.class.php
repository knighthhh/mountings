<?php
namespace Admin\Controller;
use Think\Controller;
class ContactController extends Controller {
   
    
    public function get_text(){
    	$model = D('Contact');
    	$info = $model -> search();
		//dump($info);die;
		$this->assign($info);
//		print_r($info);
		$this->display();
    }
    
}
