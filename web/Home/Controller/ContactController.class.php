<?php
namespace Home\Controller;
use Think\Controller;
class ContactController extends Controller {
    public function save_info(){
     	$name = I('post.name');
		$email = I('post.email');
		$text = I('post.text');
		
		$data = array();
    	$data['con_name'] = $name;
    	$data['con_email'] = $email;
    	$data['con_text'] = $text;
    	
    	$res = M('contact') -> add($data);
    }
}
