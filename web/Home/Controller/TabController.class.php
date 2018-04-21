<?php
namespace Home\Controller;
use Think\Controller;
class TabController extends Controller {
    public function solutions(){
     	$nav = L('_NAV_');
     	$footer = L('_FOOTER_');
     	$solutions = L('_SOLUTIONS_');
     	$this->assign('nav', $nav);
     	$this->assign('footer', $footer);
     	$this->assign('solutions', $solutions);
        $this->display('solutions');
    }
    
    public function download(){
    	$nav = L('_NAV_');
     	$footer = L('_FOOTER_');
     	$download = L('_DOWNLOAD_');
     	$this->assign('nav', $nav);
     	$this->assign('footer', $footer);
     	$this->assign('download', $download);
     
        $this->display('download');
    }
    
    public function knowledge(){
    	$model = D('Ncbi');
		$info = $model->search();
		if(IS_AJAX){  
			$type = I('get.type');
			$info = $model->ajax_search($type);
            $this->assign($info);// 赋值数据集  
            $html = $this->fetch('Ajaxpage/ajaxpage');   //另建一个html文件用来获取得到的分页内容  
            $this->ajaxReturn($html);  
        } 
//		foreach($info as $value){
//			print_r($value['page']);
//			foreach($value['data'] as $k => $v){
//				print_r($v);
//				echo "<br/><br/><br/><br/>";
//			}
//			echo "<br/><br/><br/><br/>_______________________________________________<br/><br/><br/><br/>"; 
//		}
		//dump($info);die;
		$nav = L('_NAV_');
     	$footer = L('_FOOTER_');
     	$knowledge = L('_KNOWLEDGE_');
     	$this->assign('nav', $nav);
     	$this->assign('footer', $footer);
     	$this->assign('knowledge', $knowledge);
		$this->assign($info);
        $this->display('knowledge');
    }
    
    public function about(){
    	$nav = L('_NAV_');
     	$footer = L('_FOOTER_');
     	$about = L('_ABOUT_');
     	$this->assign('nav', $nav);
     	$this->assign('footer', $footer);
     	$this->assign('about', $about);
     
        $this->display('about');
    }
    
    public function contact(){
    	$nav = L('_NAV_');
     	$footer = L('_FOOTER_');
     	$contact = L('_CONTACT_');
     	$this->assign('nav', $nav);
     	$this->assign('footer', $footer);
     	$this->assign('contact', $contact);
     
        $this->display('contact');
    }
    
    public function chaxun(){
    	
     
        $this->display();
    }
}
