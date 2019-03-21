<?php
namespace Admin\Controller;
use Think\Controller;

class IndexController extends Controller {
    function index(){
		echo '<span style="color:#fff;">welcome to here , this is manage address<a href="http://www.baidu.com">click</a></span>';
		$this->display();
    }
	
}