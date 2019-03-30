<?php /* Smarty version Smarty-3.1.6, created on 2019-03-28 14:02:58
         compiled from "./Application/Admin/View\Index\register.html" */ ?>
<?php /*%%SmartyHeaderCode:179245c9c1fbb72eaf4-77272312%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f50359df331ade09618da4595e5146da14c65b0' => 
    array (
      0 => './Application/Admin/View\\Index\\register.html',
      1 => 1553752977,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179245c9c1fbb72eaf4-77272312',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5c9c1fbb76f88',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c9c1fbb76f88')) {function content_5c9c1fbb76f88($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<link type="text/css" rel="stylesheet" href="<?php echo @CSS_URL;?>
admin/register.css" />
	<body>
		
		<div class="contens">
			<h1 style="text-align:center; color: #fff;">welcome to this layou</h1>
			
			<div class="register">
				<p class="title">注册</p>
				
				<form action="register.html" method="post" class="form-class">
					<input type="text"  placeholder="email" name="uname" class="uname"/>
					<input type="password" placeholder="pwd" name="pwd"  class="pwd"/><br/>
					<input type="text" placeholder="手机" name="phone"  class="phone"/><br/>
					<input type="text" placeholder="名称" name="name"  class="name"/><br/>
					<button name="submit" type="submit">注册</button>
				</form>
				
			</div>	

		</div>
		
	</body>
</html>
<?php }} ?>