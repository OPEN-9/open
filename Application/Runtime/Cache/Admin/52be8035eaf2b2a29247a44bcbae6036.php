<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<script type="text/javascript" src="<?php echo (JS_URL); ?>jquery-1.11.0.js"></script>
	<script src="<?php echo (JS_URL); ?>admin/register.js" type="text/jscript"></script>
	<link type="text/css" rel="stylesheet" href="<?php echo (CSS_URL); ?>admin/register.css" />
	<body>
		
<div class="contens">
	<h1 style="text-align:center; color: #fff;">welcome to this layou</h1>
	
	<div class="register">
		<p class="title">注册</p>
		<form action="register.html" method="post" class="form-class"><br/>
			<input type="text"  placeholder="name" name="uname" class="uname"/><br/>
			<span class="abcc"></span><br/>
			<input type="password" placeholder="pwd" name="upwd"  class="upwd"/><br/>
			<input type="text" placeholder="手机" name="phone"  class="phone"/><br/>
			<input type="text" placeholder="名称" name="name"  class="name"/><br/>
			<!-- <input type="text" placeholder="email" name="email"  class="email"/><br/> -->
			<button name="submit" type="submit">注册</button>
		</form>
		
	</div>	
</div>
		
	</body>
</html>