<?php

header("content-type:text/html;charset=utf8");

//定义css/image/js

define("SITE_URL","http://cf.com/");
define('CSS_URL',SITE_URL."application/home/public/css/home/");
define('IMAGE_URL',SITE_URL."application/home/public/image/home/");
define('JS_URL',SITE_URL."application/home/public/js/home/");

define('CSS_URL1',SITE_URL."application/admin/public/css/home/");
define('IMAGE_URL1',SITE_URL."application/admin/public/image/home/");
define('JS_URL1',SITE_URL."application/admin/public/js/home/");

// 定义应用目录
define('APP_PATH','./Application/');

//调试
define('APP_DEBUG',true);

// 引入ThinkPHP入口文件
include "ThinkPHP/ThinkPHP.php";

// 检测PHP环境
// if(version_compare(PHP_VERSION,’5.3.0’,’<’)) die(‘require PHP > 5.3.0 !’);


