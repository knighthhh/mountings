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
        $data['item_m3id'] = I('post.item_m3id');
        
	    $res = $model->alias('a')->join('__YIPARTS_ITEMS__ b on a.partid=b.item_partid','LEFT')->where($data)->select();

    		echo json_encode($res);
	}

	public function get_item(){
	    $model = M('yiparts_items');
        $data['item_m3id'] = I('post.item_m3id');
        $data['item_partid'] = I('post.item_partid');
//      $data['item_m3id'] ='60290';
//      $data['item_partid'] = '135';
        $res = $model->where($data) -> find();
        //用户查询添加记录
        
        if(cookie('user_id')){
        	$data['part_id'] =   $res['item_id'];
        	$data['user_id'] = cookie('user_id');
        	M('user_part') ->add($data);
        }
        
    	echo json_encode($res);
	}
}
