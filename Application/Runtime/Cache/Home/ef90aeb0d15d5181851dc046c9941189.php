<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<center>
			 <table id="tbinfo" name="info">
				<tr>
				  <td>ID：</td>
				  <td><?php echo ($info[0]['name']); ?></td>
				</tr>
				<tr>
				  <td>性别：</td>
				  <td>
					 <?php if($info[0]['sex'] == 1 ): ?>女<?php elseif($info[0]['sex'] == 0): ?>男 <?php else: ?> 
					 value3<?php endif; ?>      
				  </td>
				</tr>       
				<tr>
				   <td>密 码</td>
				   <td><?php echo ($info1[1]['upwd']); ?></td>
				</tr>
				<tr>
				   <td>联系电话</td>
				   <td><?php echo ($info[0]['phone']); ?></td>
				</tr>

				<tr>
				   <td>QQ</td>
				   <td><?php echo ($info[0]['qq']); ?></td>
				</tr>

				<tr>
				   <td>联系地址</td>
				   <td><?php echo ($info[0]['address']); ?></td>
				</tr>
			  </table>   
		</center>
	</body>
</html>