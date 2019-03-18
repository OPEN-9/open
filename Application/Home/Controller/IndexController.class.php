<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
		// 打印url路径
	    // echo U("Index/index");
		echo 'ss';
    }
	
	 public function test(){
	   $model = M('user');
	   $data = $model->select();
	   $this->assign('data',$data);
	   $this->display();
	}
	
	public function hello()
	{
		echo 'hello';
	}
	
	
}