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
			$pwd=MD5($_POST['pwd']);
			$code1 = $_POST['token'];
			// self  仅限当前页面的方法  this的话是当前函数的方法
			if(self::check_verify($code1) === true)
			{
			if(!empty($uname) && !empty($pwd) && !empty($code1)){
				$manage = M('register');
				$select = $manage->query(" select * from  register where uname='$uname' and upwd='$pwd' ");
				if($select){
					session('register',$select);
					$this->redirect('Index/usecenter','',0,'登陆成功');
				}else{
					$this->redirect('Index/index','',1,'账号密码错误');
				}
				
			}else{
				$mes = '请填写用户名或密码';
				echo '<script>alert("$mes")</script>';
				$this ->redirect('Index/index','',1,"请填写，用户名或密码");
			}
			}else{
				echo 'error';
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
		
		if(isset($_POST['submit'])){
			$uname = $_POST['uname'];
			$pwd   = $_POST['pwd'];
			$phone = $_POST['phone'];
			$name = $_POST['name'];
				
			if(!empty($uname)){
				$manage = M('register');
				$select = $manage->query("select * from register where uname='$uname'");
				
				if($select){
					$this->redirect('Index/register','',1,'账号已存在');
				}else{
					$data = array(
						'uname'  => $uname,
						'pwd'    => $pwd,
						'phone'  => $phone,
						'name'   => $name,
					);
					
					$mysql = M('register')->add($data);
					if($mysql){
						$session['uname'] = $uname;
						$session['pwd']   = $pwd;
						$this->redirect('Index/index','',1,'注册成功');
					}else{
						echo '注册失败';
					}
				}
				
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
		
}