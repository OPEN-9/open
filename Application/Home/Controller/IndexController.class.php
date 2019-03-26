<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller { 
	public function index(){
		echo 'aaa';
	}
//     public function index(){
// 		
// 		$uname=$_POST['uname'];     
// 		$upwd=MD5($_POST['upwd']);
// 		$user1 = M('user');
// 		
// 		if(isset($_POST['sub'])){
// 			if(!empty($uname)&&!empty($upwd)){                    
// 				$select = $user1->query("select * from user where uname='$uname' and upwd='$upwd'");
// 				
// 				if($select){
// 					// session本地存储自定义名称user
// 					session('user',$select);
// 					var_dump($select);
// 					$this ->redirect('Index/show','',1,"登陆成功！前往用户中心");
// 				}
// 				else{
// 					$this ->redirect('Index/index','',1,"用户名或者密码错误");
// 				}
// 			}
// 			else{
// 				$this ->redirect('Index/index','',1,"请填写，用户名或密码");
// 		    }
// 			
// 		}
// 		
// 		if(isset($_POST['zc'])){  //如果点击的是注册
// 		   $this ->redirect('Index/zhuce','',1,"前往用户中心注册");
// 	    }
// 	
// 		$this->display();
//     }
// 	
// 	public function zhuce(){
// 	    header("Content-Type:text/html; charset=utf-8");
// 		$this->display();
// 		//获取input的内容
// 		if(isset($_POST['sub'])){
// 		    $uname=$_POST['uname'];
// 		    $upwd=$_POST['upwd'];    
// 			$upwd=MD5($_POST['upwd']);
// 		    $phone=$_POST['phone'];     
// 		    $name=$_POST['name'];    
// 			$sex=$_POST['sex'];
// 			$education=$_POST['education'];    
// 			$status=$_POST['status'];    
// 			
// 			if(!empty($uname)){
// 				//判断用户是否已经注册了
// 				$user1=M('user');
// 				//获取库的信息$uname信息(账号);
// 				$select =$user1->query("select * from user where uname='$uname'");
// 				if($select){//如果存在该用户
// 				  $this->redirect('Index/index','',1,'该用户已经注册，请直接登陆');           
// 				 }
// 
// 			  //注册 入库
// 			  $data = array(
// 				 'uname' =>$uname,
// 				 'upwd' => $upwd,
// 				 'phone' =>$phone,
// 				 'sex' => $sex,
// 				 'name' =>$name,
// 				 'status' =>$status,
// 				 'education' =>$education,
// 			  );
// 			  
// 			 $insert=M('user')->add($data);
// 			 
// 			  if($insert){
// 				  //如果注册成功  把密码保存在session 里
// 				 // session.start();
// 				  $session['uname'] =$uname;
// 				  $session['upwd'] = $upwd;
// 				  //页面跳转
// 				  $this->redirect('Index/index','','1','注册成功，前往用户中心');                    
// 			  }else{
// 				  echo "<script>alert('注册失败！');</script>";
// 			  }
// 			}
// 	    }
// 	}
// 	
// 	public function show(){ 
// 		
// 		$user = session('user');
// 		// var_dump($user);
// 		if(empty($user))
// 			echo "<script>alert('请登录在操作！');</script>";
// 
// 		$this->assign('info',$user);
// 		$this->display();      
// 	}
// 	
// 	public function showlist(){
// 		
// 		//$user = new \Home\Model\UserModel();
// 		//$demo = new \Home\Model\DemoModel();
//         // $d =  D("User");("模型标志");
// 		echo "<pre>";
// 		// var_dump($user);
// 		// var_dump($d);
// 		// var_dump($demo);
// 		echo "</pre>";
// 		$this->display();
// 		$user = M('user');
// 		
// 	}
	
	
}