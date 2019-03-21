<?php 

namespace Home\Controller;
use Think\Controller;
class EmptyController extends Controller{
	
	public function _Empty(){
		echo 'error:没有这个控制器';
		echo "<img src='".IMAGE_URL.'hh.jpg'."'>";
	}
	
}

?>