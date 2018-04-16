<?php
namespace Home\Controller;
use Think\Controller;
class KnowdetailController extends Controller {
    public function knowdetail(){
    	$user_id = I('get.user_id');
    	$model = D('Ncbi');
    	$info = $model->know_detail($user_id);
    	$this->assign($info);
    	
    	$nav = L('_NAV_');
     	$footer = L('_FOOTER_');
     	$this->assign('nav', $nav);
     	$this->assign('footer', $footer);
    	
        $this->display();
    }
    
    public function email(){
    	$email = I('post.email');
    	$data = array();
    	$data['email'] = $email;
    	$res = M('email') -> add($data);
    }
    
    public function get_email(){
    	$email = I('post.email');
    	$data = array();
    	$data['email'] = $email;
    	$res = M('email') -> add($data);
    }
    
}
