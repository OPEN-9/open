<?php
namespace Admin\Controller;
use Think\Controller;
use \Admin\Model\Api\SphinxClient as SphinxClient;
require './Application/Admin/Model/Api/sphinx.php';
class ManageController extends Controller{
	
	public function testdata(){

// 		if (true){//隔断代码 想看api接口是可以改为true
// 			// 使用Sphinx来完成查询
// 			$sc = new SphinxClient();             // 生成客户端
// 			$sc->setServer('localhost',9312);     // 设置服务器
// 			// $sc->query('查询的关键词', 索引文件的名称);
// 			$keyword="this";
// 			$indexname ='src1';
// 			$res = $sc->query($keyword,$indexname);
// 			var_dump($res);
// }
		   
 
			$list= array();
		// if(!empty($_POST)){}
			$sc = new SphinxClient(); // 实例化Api
			$sc->setServer('localhost', 9306); // 设置服务端，第一个参数sphinx服务器地址，第二个sphinx监听端口
			$res = $sc->query('this', 'test1'); // 执行查询，第一个参数查询的关键字，第二个查询的索引名称，mysql索引名称（这个也是在配置文件中定义的），多个索引名称以,分开，也可以用*表示所有索引。
			var_dump($res);
		   

	}
	
	function supply(){
		
		$this->display();
		echo 'hello,world';

	}
	
	public function abc(){
		
		echo 'abccccc';
		// 调用其他控制器  首先实例化其他控制 在输出.
		// $data = new A('Index');  快捷函数实例化控制对象;
		// R('Index/index'); 更便捷的方法 :R(Index/index);
		$data = new IndexController();
		echo $data->index();
		
	}
	
}


?>
	