<?php
namespace Admin\Controller;
use Think\Controller;
// require './Application/Sphinx/Sphinx/SphinxAPI.php';
require './Application/Sphinx/Sphinx/SphinxAPI.php';
class IndexController extends Controller {
	
	
	function usecenter(){
		
		$model = D('register');
		$test = $this->assign('info',$model);
		$this->display();
		
	}
	
	function check_verify($code, $id = ''){
		$verify = new \Think\Verify();
		return $verify->check($code, $id);
	}
	
    function index(){
		if(IS_POST){
			$uname=$_POST['uname'];
			$upwd=MD5($_POST['upwd']);
			$code1 = $_POST['token'];
			// self  仅限当前页面的方法  this的话是当前函数的方法
			if(self::check_verify($code1) === true)
			{
				if(!empty($uname) && !empty($upwd) && !empty($code1)){
					$manage = M('register');
					$select = $manage->query(" select * from  register where uname='$uname' and upwd='$upwd' ");
					if($select){
						session('register',$select);
						$this->redirect('Index/usecenter','',0,'登陆成功');
					}else{
						$this->redirect('Index/index','',1,'账号密码错误');
					}
					
				}else{
					$mes = 'null';
					echo '<script>alert("$mes")</script>';
					$this ->redirect('Index/index','',1,"请填写，用户名或密码");
				}
			}else{
				$mes = 'tokenerror';
				echo '<script>alert'.($mes).'</script>';
				$this ->redirect('Index/index','',10,"请填写，用户名或密码");
			};
			
		}
		if(isset($_POST['zhuce'])){
			$this ->redirect('Index/register','',0,"前往注册页面");
		}
		$this->display();
    }
	
	public function verify() {
		$Verify =     new \Think\Verify();
		$Verify->fontSize = 30;
		$Verify->length   = 4;
		$Verify->useNoise = false;
		$Verify->entry();
	}
	 
	function register(){
		
		if(IS_POST){
			// ajax判断用户名是否重复
			$uname1 = $_POST['uname1'];
			if(isset($uname1) || !empty($uname1)){
				$manage = M('register');
				$data1 = $manage->query("select * from register where uname='$uname1'");
				
				if($data1){
					$chinass = '已注册';
					$this->ajaxReturn($chinass,'json');
				}else{
					$chinass = "√";
					$this->ajaxReturn($chinass,'json');
				}
				
			}
					
					$uname = $_POST['uname'];
					$upwd   = MD5($_POST['upwd']);
					$phone = $_POST['phone'];
					$name = $_POST['name'];
					$manage = M('register');
					$data2 = $manage->query("select * from register where uname='$uname'");
					
					// 不允许重复的用户注册
					if(!$data2)
					
					$data = array(
						'uname'  => $uname,
						'upwd'   => $upwd,
						'phone'  => $phone,
						'name'   => $name,
					);
					
					$mysql = M('register')->add($data);
					if($mysql){
						$session['uname'] = $uname;
						$session['upwd']   = $upwd;
						$this->redirect('Index/index','',1,'注册成功');
					}else{
						echo '注册失败';
					}
		
		}
		
		$this->display();
	}
	
	
	function usecenter1(){
	// 		$abc  = new  \Sphinx\Sphinx\SphinxClient();
	// 		echo $abc->setMatchMode();
	// 		var_dump($abc);
			
	// 		$sphinx  = new  \Sphinx\Sphinx\SphinxClient();
	// 		
	// 		// var_dump($sphinx);
	// 		$sphinx1 = $this->get('search');
	// 		var_dump($sphinx1);die();
			
			
	// 		$sphinx->setMatchMode(SPH_MATCH_ANY);
	// 		$sphinx->SetLimits(1, 5);
	// 		$improt = $sphinx->searchEx();
	// 		$result = $info['matches'];
	//  		var_dump($info);die();
	// 存放注释
	// 		$kua1 = A('Home/Index');
	// 		var_dump($kua1);
	// 		$this->display();
	// 		$kua = A('Sphinx/Sphinx'); //跨控制器调用
	// 		echo $kua->SetConnectTimeout();
	
	}
	
	
	function edit1(){
		
	}
		
}