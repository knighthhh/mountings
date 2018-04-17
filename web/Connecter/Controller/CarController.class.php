<?php
namespace Connecter\Controller;
use Think\Controller;
class CarController extends Controller {
    public function index(){
     	$nav = L('_NAV_');
     	$footer = L('_FOOTER_');
     	$home = L('_HOME_');
     	$this->assign('nav', $nav);
     	$this->assign('footer', $footer);
     	$this->assign('home', $home);
        $this->display('index');
    }
    
    public function lang(){
	    $wellcome = L('_WELLCOME_');
	    $this->assign('wellcome', $wellcome);
	    $this->display();
	}




	public function get_car(){
	    $model = M('car');
        $res = $model -> select();
    	echo json_encode($res);
	}

	public function get_levelone(){
	    $model = M('car_level1');
	    $data['level1_bid'] = I('post.level1_bid');
        $res = $model->where($data) -> select();
    	echo json_encode($res);
	}

	public function get_leveltwo(){
	    $model = M('car_level2');
        $data['level2_m1id'] = I('post.level2_m1id');
        $res = $model->where($data) -> select();
    	echo json_encode($res);
	}

	public function get_levelthree(){
	    $model = M('car_level3');
        $data['level3_m2id'] = I('post.level3_m2id');
        $res = $model->where($data) -> select();
    	echo json_encode($res);
	}

	public function get_part(){
	    $model = M('partid');
        //$data['partid'] = I('post.partid');
        $res = $model-> select();
    	echo json_encode($res);
	}
}
