<?php
namespace Admin\Model;
use Think\Model;

class UserModel extends Model{
	public function search($perPage=6)
	{
		/* 分页 */
        $count = $this->count();
        //实例化翻页类对象
        $pageObj = new \Think\Page($count, $perPage);
        //设置翻页样式
        $pageObj->setConfig('next', '下一页');
        $pageObj->setConfig('prev', '上一页');
        //生成翻页按钮（上一页，下一页）
        $pageButton = $pageObj->show();
        $data       = $this
            ->limit($pageObj->firstRow . "," . $pageObj->listRows)
            ->select();
        // 获取第一条数据
        $first=$data[0];
        $first['title']=array();
        $user_data[$first['mg_id']]=$first;
       
        return array(
            'data' => $user_data, //数据库信息
            'page' => $pageButton, //分页结果
        );
	}

	protected function _before_insert(&$data,$option){

		$data['create_time'] = date('Y-m-d H:i:s');
	}

	 protected function _before_update(&$data,$option)
    {
        $data['create_time'] = date('Y-m-d H:i:s');
    }

    protected function _before_delete($option){
    	
    }
}


?>