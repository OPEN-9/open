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
		if(IS_POST){
			$username=$_POST['uname'];
			$pwd=$_POST['upwd'];
			if($username=='' || $pwd==''){
			    $this->ajaxReturn(array('status'=>0,'info'=>'name and pwdnot empty','url'=>''));
			}
			$User = D("User");
			$result=$User->getUser("uname='".$username."' and upwd='".md5($pwd)."'");
			if(empty($result)){
			    $this->ajaxReturn(array('status'=>0,'info'=>'登录失败','url'=>''));
			}else{
			    session('account',$result['account']);
			    $url=U('Index/show');
			    $this->ajaxReturn(array('status'=>1,'info'=>'登录成功','url'=>$url));
			}
		}
		
		
		$this->display();
	}
	
	 public function loginout(){
        session('account',null);
        $this->redirect('Index/index');
    }


}