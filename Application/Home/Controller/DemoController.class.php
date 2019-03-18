<?php
namespace Home\Controller;
use Think\Controller;
class DemoController extends Controller {
	public function demo(){
	   $model = M('user');
	   $data = $model->select();
	   $this->assign('data',$data);
	   include('Index.clsaa.php');
	   $this->display();
	   
	}
	
	public function regiser(){
	   echo 'hello,world this is test';
	}


}