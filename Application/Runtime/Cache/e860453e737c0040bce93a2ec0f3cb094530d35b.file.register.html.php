<?php /* Smarty version Smarty-3.1.6, created on 2019-04-19 09:49:10
         compiled from "./Application/Home/View\Demo\register.html" */ ?>
<?php /*%%SmartyHeaderCode:148825cb92916ba3476-03145473%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e860453e737c0040bce93a2ec0f3cb094530d35b' => 
    array (
      0 => './Application/Home/View\\Demo\\register.html',
      1 => 1555638364,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '148825cb92916ba3476-03145473',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5cb92916bfed4',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cb92916bfed4')) {function content_5cb92916bfed4($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<script type="text/javascript" src="<?php echo @JS_URL;?>
jquery-1.11.0.js"></script>
		<link href="<?php echo @CSS_URL;?>
home/register.css" rel="stylesheet" type="text/css" />
		<script src="<?php echo @JS_URL;?>
home/register.js" type="text/jscript"></script>
	</head>
	<body>
		<a href="demo.html">这个是html的点击</a>
		<p class="demo">我是demo </p>
		<p id="test">我是test</p>
		<legend>登陆演示表单</legend>
		
		
	<input type="text" name="uname" id="uname"><br>
	<input type="password" name="upwd" id="upwd"><br>
	<input type="submit" value="登陆" id="checkLogin">
	
	
	

		
	</body>
</html>
<?php }} ?>