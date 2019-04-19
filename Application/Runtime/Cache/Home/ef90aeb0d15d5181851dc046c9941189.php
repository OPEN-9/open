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
				<tr>
				   <td>login</td>
				   <td><?php echo ($info[0]['uname']); ?></td>
				</tr>
				  <td>IDname：</td>
				  <td><?php echo ($info[0]['name']); ?></td>
				</tr>
				<tr>
				  <td>性别：</td>
					<td>
						<?php if(strtoupper($sex['1']) != 1): ?>m
						<?php else: ?> wm<?php endif; ?>
					</td>
				</tr>       
				<tr>
				   <td>密 码</td>
				   <td><?php echo ($info[0]['upwd']); ?></td>
				</tr>
				<tr>
				   <td>联系电话</td>
				   <td><?php echo ($info[0]['phone']); ?></td>
				</tr>

				<tr>
				   <td>status</td>
				   <td><?php echo ($info[0]['status']); ?></td>
				</tr>

				
			  </table>   
		</center>
	</body>
</html>