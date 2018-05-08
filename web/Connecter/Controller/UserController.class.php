<?php
namespace Connecter\Controller;
use Think\Controller;
class UserController extends Controller {
   public function update_password(){
   		$model = M('user');
   		$data['user_name'] = I('post.user_name');
	    $data['user_password'] = I('post.oldpd');
	  
        $findres = $model->where($data) -> find();
        if($findres){
        	$res['result'] = true;
        	$updateid['user_name'] = I('post.user_name');
        	$update['user_password'] = I('post.newpd');
        	$model -> where($updateid) -> save($update);
        }else{
        	$res['result'] = flase;
        }
    	echo json_encode($res);
   }
}
