<?php
namespace Admin\Controller;
use Think\Controller;

class ManageController extends Controller{
	
	function login(){
		$this->display();
		echo 'hello,world';
		
		// 调用其他控制器  首先实例化其他控制 在输出.
		// $data = new A('Index');  快捷函数实例化控制对象;
		// R('Index/index'); 更便捷的方法 :R(Index/index);
		$data = new IndexController();
		echo $data->index();
	}
	
	public function abc(){
		echo 'abccccc';
	}
	
}


?>