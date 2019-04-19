<?php
namespace Home\Controller;
use Think\Controller;
class DemoController extends Controller {

	public function demo1(){
		$mysql = M('user');
		$abc = $mysql->select();
		$this->assign('data',$abc);
		$this->display();
	}
	
	public function register(){
		$this->display();
	}
	
	// 控制器没有这个方法就跳转到这个页面
	public function _empty(){
		
		echo "<img src='".IMAGE_URL.'error.jpg'."'>";
		
	}
	
	public function test(){
		
		$this->display();
	}
	
	 public function loginout(){
        session('account',null);
        $this->redirect('Index/index');
    }


}