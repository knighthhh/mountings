<?php 
namespace Admin\Controller;
use Think\Controller;

class UserController extends BaseController
{
	public function get_user(){
		$model = D('User');
		$info = $model->search();
		//dump($info);die;
		$this->assign($info);
		$this->display();
	}

}

 ?>