<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
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
					   <td><input type="text" name ="sex" ></td>
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