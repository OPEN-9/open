<?php /*%%SmartyHeaderCode:200685c95aed92d89b4-47665384%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '429e209fd3428ee59bef9b562e32439d08b928ef' => 
    array (
      0 => './Application/Home/View\\Index\\show.html',
      1 => 1553243985,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '200685c95aed92d89b4-47665384',
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5c95aed9352ad',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c95aed9352ad')) {function content_5c95aed9352ad($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<center>
			 <table id="tbinfo" name="info">
				<tr>
				<tr>
				   <td>login</td>
				   <td>123456</td>
				</tr>
				  <td>IDname：</td>
				  <td>测试</td>
				</tr>
				<tr>
				  <td>性别：</td>
					<td>
						<if condition="strtoupper($sex['1']) neq 1">m
						<else /> wm
						</if>
					</td>
				</tr>       
				<tr>
				   <td>密 码</td>
				   <td>e10adc3949ba59abbe56e057f20f883e</td>
				</tr>
				<tr>
				   <td>联系电话</td>
				   <td>13945614641</td>
				</tr>

				<tr>
				   <td>status</td>
				   <td>651351531</td>
				</tr>

				
			  </table>   
		</center>
	</body>
</html>
<?php }} ?>