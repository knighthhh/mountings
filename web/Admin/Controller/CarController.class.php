<?php 
namespace Admin\Controller;
use Think\Controller;

class CarController extends BaseController
{
	public function get_item(){
		$model = D('YipartsItems');
		$info = $model->search();
		//dump($info);die;
		$this->assign($info);
		$this->display();
	}

}

 ?>