<?php
namespace Admin\Controller;
use Think\Controller;
require './Application/Sphinx/Sphinx/SphinxAPI.php';
class IndexController extends Controller {
	
	
	function usecenter(){

		$abc  = new  \Sphinx\Sphinx\SphinxClient();
		echo $abc->SetLimits();
		
		
	}

	function usecenter1(){
	// 存放注释
	// 		$kua1 = A('Home/Index');
	// 		var_dump($kua1);
	// 		$this->display();
	// 		$kua = A('Sphinx/Sphinx'); //跨控制器调用
	// 		echo $kua->SetConnectTimeout();
	
	}



source src1
{
  type          = mysql

  sql_host      = 148.70.141.161
  sql_user      = root
  sql_pass      = 123456
  sql_db        = mysql
  sql_port      = 3306

  sql_query     = \
  SELECT id, group_id, UNIX_TIMESTAMP(date_added) AS date_added, title, content \
  FROM documents

  sql_attr_uint         = group_id
  sql_attr_timestamp    = date_added
}
index test1
{
  source            = src1
  path              = /var/lib/sphinxsearch/data/test1
  docinfo           = extern
}
searchd
{
  listen            = 9306:mysql41
  log               = /var/log/sphinxsearch/searchd.log
  query_log         = /var/log/sphinxsearch/query.log
  read_timeout      = 5
  max_children      = 30
  pid_file          = /var/run/sphinxsearch/searchd.pid
  seamless_rotate   = 1
  preopen_indexes   = 1
  unlink_old        = 1
  binlog_path       = /var/lib/sphinxsearch/data
}



















	
	
	
	
	
    function index(){
		
		if(isset($_POST['submit'])){
			
			$uname=$_POST['uname'];
			$pwd=$_POST['pwd'];
			if(!empty($uname) && !empty($pwd)){
				
				$manage = M('register');
				$select = $manage->query(" select * from  register where uname='$uname' and pwd='$pwd' ");
				if($select){
					session('register',$select);
					$this->redirect('Index/usecenter','',0,'登陆成功');
				}else{
					$this->redirect('Index/index','',2,'账号密码错误');
				}
				
			}else{
				$mes = '请填写用户名或密码';
				echo '<script>alert("$mes")</script>';
				// $this ->redirect('Index/index','',1,"请填写，用户名或密码");
			}
		}
		
		if(isset($_POST['zhuce'])){
			
			$this ->redirect('Index/register','',0,"前往注册页面");
			
		}
		
		$this->display();
		
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
	
	
	
}