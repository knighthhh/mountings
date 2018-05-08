<?php
namespace Admin\Model;
use Think\Model;

class YipartsItemsModel extends Model{
	public function search($perPage=8)
	{
		/* 分页 */
        $count = $this->count();
         /*搜索*/
        $where = array();
//      $searchValue = I('post.searchValue');
//      if($searchValue){
//          $where['user_phone'] = array('like',"%$searchValue%");
//          $where['user_name'] = array('like',"%$searchValue%");
//          $where['_logic'] = 'or';
//      }
        //实例化翻页类对象
        $pageObj = new \Think\Page($count, $perPage);
        //设置翻页样式
        $pageObj->setConfig('next', '下一页');
        $pageObj->setConfig('prev', '上一页');
        //生成翻页按钮（上一页，下一页）
        $pageButton = $pageObj->show();
        $data       = $this
            ->where($where)
            ->limit($pageObj->firstRow . "," . $pageObj->listRows)
            ->select();
        return array(
            'data' => $data, //用户信息
            'page' => $pageButton, //分页结果
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