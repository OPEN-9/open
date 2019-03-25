<?php /* Smarty version Smarty-3.1.6, created on 2019-03-22 16:07:11
         compiled from "./Application/Home/View\Index\zhuce.html" */ ?>
<?php /*%%SmartyHeaderCode:315535c94970e551d84-54443257%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4651094981e0179ae1bd63c359434d4110258e26' => 
    array (
      0 => './Application/Home/View\\Index\\zhuce.html',
      1 => 1553242018,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '315535c94970e551d84-54443257',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5c94970e59e24',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c94970e59e24')) {function content_5c94970e59e24($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<center>
			<form method="post">
				<table>
					 <tr>
					   <td>账 号</td>
					   <td><input type="text" name ="uname" ></td>
					</tr>
					 <tr>
					   <td>密 码</td>
					   <td><input type="password" name ="upwd" ></td>
					</tr> 
					
					<tr>
					   <td>性别</td>
					   <td>
						   <select name="sex">
							   <option value="1">男</option>
							   <option value="2">女</option>
						   </select>
					   </td>
					</tr>

					<tr>
					   <td>联系电话</td>
					   <td><input type="text" name ="phone" ></td>
					</tr>
					<tr>
					   <td>名称</td>
					   <td><input type="text" name ="name" ></td>
					</tr>
					<tr>
					   <td>身份证</td>
					   <td><input type="text" name ="status" ></td>
					</tr>
					<tr>
					   <td>学历</td>
					   <td><input type="text" name ="education" ></td>
					</tr>
					<tr>
					   <td colspan="2">           
						   <input type="submit" name ="sub" value="注册">
						   <input type="submit" name ="ret"  value="重置">           
					   </td>       
					</tr>
				</table>
			</form>
		</center>
	</body>
</html>
<?php }} ?>