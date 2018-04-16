<?php
namespace Home\Model;
use Think\Model;

class NcbiModel extends Model{
	public function search($perPage=6)
	{
		/* 分页 */
       
        
         /*搜索*/
//      $where = array();
//      $searchValue = 'swv';
//      if($searchValue){
//          $where['type'] = array('eq',$searchValue);
//      }
//      //实例化翻页类对象
//      $pageObj = new \Think\Page($count, $perPage);
//      //设置翻页样式
//      $pageObj->lastSuffix =false;
//      $pageObj->rollPage = 5;
//      
//      $pageObj->setConfig('next', '下一页');
//      $pageObj->setConfig('prev', '上一页');
//      //生成翻页按钮（上一页，下一页）
//      $pageButton = $pageObj->show();
//      $data       = $this
//          ->where($where)
//          ->limit($pageObj->firstRow . "," . $pageObj->listRows)
//          ->select();
//      return array(
//          'data' => $data, //用户信息
//          'page' => $pageButton, //分页结果
//      );
        
		$datas = array();
		$methods = array('swv','cyclic','sinusoid','constant','linear','chronoamperometry','multistep');
        for($i=0;$i<7;$i++){
        	$where = array();
	        $where['type'] = array('eq',$methods[$i]);
	        $count = $this->where($where)->count();
	        //实例化翻页类对象
	        $pageObj = new \Think\Page($count, $perPage);
	        //设置翻页样式
	        $pageObj->lastSuffix =false;
	        $pageObj->rollPage = 6;
	        $pageObj->setConfig('next', 'next');
	        $pageObj->setConfig('prev', 'prev');
	        //生成翻页按钮（上一页，下一页）
	        $pageButton = $pageObj->show();
	        $data    = $this
	            ->where($where)
	            ->limit($pageObj->firstRow . "," . $pageObj->listRows)
	            ->select();
	        $push_res = array(
				        	'data' => $data, //用户信息
			            	'page' => $pageButton, //分页结果
			            );
	        array_push($datas,$push_res);
        }
         
        return array('datas'=>$datas);

	}
	
	public function ajax_search($type,$perPage=6){
		$where = array();
        $where['type'] = array('eq',$type); 
		$count      = $this->where($where)->count();// 查询满足要求的总记录数  
        $pageObj 	= new \Think\Page($count, $perPage);
        //设置翻页样式
        $pageObj->lastSuffix =false;
        $pageObj->rollPage = 6;
        $pageObj->setConfig('next', 'next');
        $pageObj->setConfig('prev', 'prev');
        $pageButton = $pageObj->show();
        
        
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性 
       
        $data = $this->where($where)->limit($pageObj->firstRow . "," . $pageObj->listRows)->select();  
        
        return array(
        	'data' => $data,
        );
	}
	
	public function know_detail($user_id){
		$where = array();
        $where['id'] = array('eq',$user_id); 
		$data 	= $this
	            ->where($where)
	            ->find();
	            
	    return array(
	    	'data' => $data
	    );
		
	}
	

	protected function _before_insert(&$data,$option){
		
	}

	 protected function _before_update(&$data,$option)
    {
       
    }

    protected function _before_delete($option){
    	

    }
}


?>