<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html>
 <html lang="zh">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<meta http-equiv="X-UA-Compatible" content="ie=edge">
 	<title></title>
	<link href="<?php echo ($smarty["const"]["CSS_URL"]); ?>admin/index.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="<?php echo ($smarty["const"]["JS_URL"]); ?>admin/index.js" type="text/jscript"></script>
 </head>
 <body>
	 <div class="photo">
		<h2>Welcome to my website</h2>
		<h4>Here's a comfortable interface and interaction for you.</h3>
		<h5>Please browse the page and give us valuable advice.</h4>
		<h5>Thank you Your valuable opinions are our greatest motivation.</h4>
		<h5>Wish you a happy life and good-bye.</h5>
		<p class="date"></p>
		<p class="time"></p>
		
		<div class="lefts">
			leftclick
			<p class="none1" style="display: none; width: 300px; text-align: center;margin:30px auto; font-size: 16px; color: #333333;">
				left
			</p>
		</div>
		
		<div class="register">
			<p class="title">登录</p>
			
			<form action="index.html" method="post" class="form-class">
				<input type="text"  placeholder="email" name="uname" class="uname"/>
				<input type="password" placeholder="pwd" name="pwd"  class="pwd"/><br/>
				<input type="text" class="token" placeholder="验证码" name="token" />
					<img src="<?php echo ($smarty["const"]["verify"]); ?>" onclick="this.src=this.src+'?'+Math.random()">
				<br/>
				<button type="submit" name='zhuce'>注册</button>
				<button type="submit" name='submit'>登录</button>
			</form>
			
		</div>	

		<div class="rights">
			rightclick
			<p class="none2" style="display: none;width: 400px; text-align: center;margin:30px auto;">
				right
			</p>
		</div>
		
		
		
	</div>
 </body>
 </html>