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
	
	
	public function checkLogin($uname,$upwd){
		
		$data = array();
		if(!empty($uname) && !empty($upwd)){
		//1.这里的业务逻辑,小伙伴们自由发挥.我呢就简单的处理一下.只要接收到数据不为空,就表示成功.
		//2.如果你觉得拼装数组比较麻烦,那么你可以将$this->success()或者$this->error中的第三个参数定义为true,即可返回json数据.例如:$this->success('登陆成功',U('User/index'),true).
		//3.我个人倾向于拼装数组,主要原因是自己拼装的数组数据结构比较明了,方便阅读.
			$data['status'] = 1;
			$data['info'] = '登陆成功';
			$data['url'] = U('User/index');			
		}else{
			$data['status'] = 0;
			$data['info'] = '用户名和密码不能为空';
			$data['url'] = U('Login/index');
		}
		//通过ajaxReturn()方法返回我们之前生成的数组
		$this->ajaxReturn($data);
		
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
			    $url=U('Demo/ajax');
			    $this->ajaxReturn(array('status'=>1,'info'=>'登录成功','url'=>$url));
			}
		}
		
		
		$this->display();
	}
	
	 public function loginout(){
        session('account',null);
        $this->redirect('Demo/ajax');
    }


}