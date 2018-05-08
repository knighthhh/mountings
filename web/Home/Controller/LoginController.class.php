<?php 
namespace Home\Controller;
use Think\Controller;

class LoginController extends Controller
{

	public function login(){
		if(IS_POST){
			$model = D('user');
			$name = I('post.name');
			$password = I('post.password');
			$admin = $model->where(array(
				'user_name' => array('eq',$name)
				))->find();
			if($admin){
				if($admin['user_password'] == $password){
					cookie('user_id',$admin['user_id'],3600*24);
					cookie('user_name',$admin['user_name'],3600*24);
					redirect(U('About/about'));
                	exit;
				}else{
					$this->error('帐号或密码错误!', U('Login/login'));
                	exit;
				}
			}else{
				$this->error('帐号或密码错误!', U('Login/login'));
                exit;
			}
		}
		$this->display();
	}

	//退出登录
	public function logout(){
		cookie('user_id',null);
		redirect(U('Login/login'));
	}

	public function reg(){
		if(IS_POST){
			$model = D('user');
			$data['user_name'] = I('post.name');
			$data['user_password'] = I('post.password');
			$admin = $model->add($data);
			redirect(U('Login/login'));
		}else{
			$this->display();
		}
		
		
	}


}

 ?>