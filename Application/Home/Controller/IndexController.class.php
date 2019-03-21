<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
		
		$uname=$_POST['uname'];     
        $upwd=$_POST['upwd'];     
		if(isset($_POST['sub'])){
			
			if(!empty($uname)&&!empty($upwd)){
				$user1 = M('user');
				$select = $user1->query("select * from user where uname='$uname' and upwd='$upwd'");
				if($select){					
					$session = session_start();
					$session['uname'] = $uname;
					$session['upwd'] = $upwd;
					$this ->redirect('Index/show','',3,"登陆成功！前往用户中心");
				}else{
					$this ->redirect('Index/index','',3,"用户名或者密码错误");
				}
			}else{
				$this ->redirect('Index/index','',3,"请填写，用户名或密码");
		    }
			
		}
		
		if(isset($_POST['zc'])){  //如果点击的是注册
		   $this ->redirect('Index/zhuce','',1,"前往用户中心注册");
	    }
	
		$this->display();
    }
	
	public function zhuce(){
	    header("Content-Type:text/html; charset=utf-8");
		$this->display();

		if(isset($_POST['sub'])){
		   $uname=$_POST['uname'];     
		   $upwd=$_POST['upwd'];       
		   $usex=$_POST['usex'];       
		   $utel=$_POST['utel'];      
		   $uqq=$_POST['uqq'];       
		   $uaddress=$_POST['uaddress'];     

			if(!empty($uname)&&!empty($upwd)){
				//判断用户是否已经注册了
				$user1=M();

				$select =$user1->query("select * from think_user where name='$uname' and pwd='$upwd'");
				if($select){//如果存在该用户
				  $this->redirect('Index/index','',3,'该用户已经注册，请直接登陆');           
				 }

			  //注册
			  $data = array(
				 'id'  => NULL,
				 'name' =>$uname,
				 'pwd' =>$upwd,
				 'sex' =>$usex,
				 'tel' =>$utel,
				 'qq' =>$uqq,
				 'address' =>$uaddress,
			  );


			 $insert=M('User')->add($data);
			  if($insert){
				  //如果注册成功  把密码保存在seesion 里
				 // session.start();
				  $session['uname'] =$uname;
				  $session['upwd'] = $upwd;
				  //页面跳转
				  $this->redirect('Index/show','','2','注册成功，前往用户中心');                    
			  }else{
				  echo "<script>alert('注册失败！');</script>";
			  }
			}
	    }
	}
	
	public function show(){ 
		session_start(); 
		$uname=$uname=$_SESSION['uname']; 
		$upwd=$upwd=$_SESSION['upwd'];
		$user=M('user');
		$select=$user->query("select * from user where uname='$uname' and upwd='$upwd'");
		$this->assign('info',$select);
		$this->display();      
	}
	
}