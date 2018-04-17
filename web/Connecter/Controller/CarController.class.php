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
	    $model = M('car');
	    $data['level1_bid'] = I('post.level1_bid');
        $res = $model->where($data) -> select();
    	echo json_encode($res);
	}

	public function get_leveltwo(){
	    $model = M('car');
        $res = $model -> select();
    	echo json_encode($res);
	}

	public function get_levelthree(){
	    $model = M('car');
        $res = $model -> select();
    	echo json_encode($res);
	}

	public function get_part(){
	    $model = M('car');
        $res = $model -> select();
    	echo json_encode($res);
	}
}
