<?php /*%%SmartyHeaderCode:70285c95aec6d801d7-01621970%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8378b70862d866fede2c1372bd9cfe4821690da8' => 
    array (
      0 => './Application/Home/View\\Index\\index.html',
      1 => 1553238100,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '70285c95aec6d801d7-01621970',
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5c95aec6de34c',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c95aec6de34c')) {function content_5c95aec6de34c($_smarty_tpl) {?> <!DOCTYPE html>
 <html lang="zh">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<meta http-equiv="X-UA-Compatible" content="ie=edge">
 	<title></title>
 </head>
 <body>
	 
	<h1>用户登录中心</h1>
	<form method="post" action="index">
		<input type="text" placeholder="num:" name="uname" /><br/>
		<input type="password" placeholder="pwd:" name="upwd" />
		<input type="hidden" name="id" />
		<input type="submit" name="sub" />
	</form>
 </body>
 </html><?php }} ?>