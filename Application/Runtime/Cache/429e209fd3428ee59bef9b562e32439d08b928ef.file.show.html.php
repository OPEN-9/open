<?php /* Smarty version Smarty-3.1.6, created on 2019-03-22 17:41:45
         compiled from "./Application/Home/View\Index\show.html" */ ?>
<?php /*%%SmartyHeaderCode:325455c949529601523-38055226%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '325455c949529601523-38055226',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5c94952967f35',
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c94952967f35')) {function content_5c94952967f35($_smarty_tpl) {?><!DOCTYPE html>
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
				   <td><?php echo $_smarty_tpl->tpl_vars['info']->value[0]['uname'];?>
</td>
				</tr>
				  <td>IDname：</td>
				  <td><?php echo $_smarty_tpl->tpl_vars['info']->value[0]['name'];?>
</td>
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
				   <td><?php echo $_smarty_tpl->tpl_vars['info']->value[0]['upwd'];?>
</td>
				</tr>
				<tr>
				   <td>联系电话</td>
				   <td><?php echo $_smarty_tpl->tpl_vars['info']->value[0]['phone'];?>
</td>
				</tr>

				<tr>
				   <td>status</td>
				   <td><?php echo $_smarty_tpl->tpl_vars['info']->value[0]['status'];?>
</td>
				</tr>

				
			  </table>   
		</center>
	</body>
</html>
<?php }} ?>