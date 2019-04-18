<?php
namespace Home\Model;
use Think\Model;
class UserModel extends Model{
	
	function test(){
		
		$User = M("User"); // 实例化User对象
		$User->add($data);
		$this->display();
		
	}
	

}	 
?>