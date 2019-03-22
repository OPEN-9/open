<?php
namespace Home\Controller;
use Think\Controller;
class DemoController extends Controller {
	public function demo(){
	   $New = M('user');
	   
        if(isset($_GET['id'])) {
            // 根据id查询结果
            $data = $New->find($_GET['id']);
        }elseif(isset($_GET['name'])){
            // 根据name查询结果
            $data = $New->getByName($_GET['name']);
        }
        $this->data = $data;
		
		$data1 = $New->select();
		$this->assign('data',$data1);
        $this->display();
	}
	
	public function register(){
		$this->display();
		echo '下面是php中的test';
		echo "<img src='".IMAGE_URL.'sl.jpg'."'>";
		
	}
	// 控制器没有这个方法就跳转到这个页面
	public function _empty(){
		echo "<img src='".IMAGE_URL.'error.jpg'."'>";
	}


}