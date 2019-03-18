<?php

header("content-type:text/html;charset=utf8");

//定义css/image/js

define("SITE_URL","http://cf.com/");
define('CSS_URL',SITE_URL."application/home/public/css/home/");
define('IMAGE_URL',SITE_URL."application/home/public/image/home/");
define('JS_URL',SITE_URL."application/home/public/js/home/");

// 定义应用目录
define('APP_PATH','./Application/');

//调试
define('APP_DEBUG',true);

// 引入ThinkPHP入口文件
include "ThinkPHP/ThinkPHP.php";



