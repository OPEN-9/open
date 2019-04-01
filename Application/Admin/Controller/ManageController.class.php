<?php
namespace Admin\Controller;
use Think\Controller;
use \Admin\Model\Api\SphinxClient as SphinxClient;
require './Application/Admin/Model/Api/sphinx.php';
class ManageController extends Controller{
	
	public function testdata(){

		if (true){//隔断代码 想看api接口是可以改为true
			// 使用Sphinx来完成查询
			$sc = new SphinxClient();             // 生成客户端
			$sc->setServer('localhost',9312);    // 设置服务器
			// $sc->query('查询的关键词', 索引文件的名称);
			$keyword="this";
			$indexname ='src1';
			$res = $sc->query($keyword,$indexname);
			var_dump($res);
			/*$ids   = $res['id'];
			$id = array_keys($ids);
			$id = implode(',',$id); 
			mysql_connect("148.70.141.161",'root','123456');
			mysql_query('use php');
			$sql="id, group_id, UNIX_TIMESTAMP(date_added) AS date_added, title, content";
			$res = mysql_query($sql);
			*/
		   











		}
		
		

	}
	
	function login(){
		$this->display();
		echo 'hello,world';
		
		// 调用其他控制器  首先实例化其他控制 在输出.
		// $data = new A('Index');  快捷函数实例化控制对象;
		// R('Index/index'); 更便捷的方法 :R(Index/index);
		$data = new IndexController();
		echo $data->index();
	}
	
	public function abc(){
		echo 'abccccc';
	}
	
	
}


?>
	