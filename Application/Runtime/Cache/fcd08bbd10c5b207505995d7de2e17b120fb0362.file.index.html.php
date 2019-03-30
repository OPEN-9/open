<?php /* Smarty version Smarty-3.1.6, created on 2019-03-28 14:23:06
         compiled from "./Application/Admin/View\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:143195c9b4a354df671-58726102%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fcd08bbd10c5b207505995d7de2e17b120fb0362' => 
    array (
      0 => './Application/Admin/View\\Index\\index.html',
      1 => 1553754181,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143195c9b4a354df671-58726102',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5c9b4a35564eb',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c9b4a35564eb')) {function content_5c9b4a35564eb($_smarty_tpl) {?> <!DOCTYPE html>
 <html lang="zh">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<meta http-equiv="X-UA-Compatible" content="ie=edge">
 	<title></title>
	
	<link href="<?php echo @CSS_URL;?>
home/index.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="<?php echo @JS_URL;?>
home/index.js" type="text/jscript"></script>
 </head>
 <body>
	 <div class="photo">
		<h2>Welcome to my website</h2>
		<h3>Here's a comfortable interface and interaction for you.</h3>
		<h4>Please browse the page and give us valuable advice.</h4>
		<h4>Thank you Your valuable opinions are our greatest motivation.</h4>
		<h5>Wish you a happy life and good-bye.</h5>
		
		<div class="register">
			<p class="title">登录</p>
			
			<form action="index.html" method="post" class="form-class">
				<input type="text"  placeholder="email" name="uname" class="uname"/>
				<input type="password" placeholder="pwd" name="pwd"  class="pwd"/><br/>
				<button type="submit" name='zhuce'>注册</button>
				<button type="submit" name='submit'>登录</button>
			</form>
			
		</div>	
		
		
		<div class="lefts">
			leftclick
			<p class="none1" style="display: none; width: 300px; text-align: center;margin:30px auto; font-size: 16px; color: #333333;">
				1hello Walt Disney creaty Mouse when he worked wi
				ed Mickey Mouse when he worked with hi
				s friends in the old building. They saw m
				ice in and out, so he came the idea that 
				he drew a cartoon mouse. It stood like a h
				uman and wore white gloves in its hand. Chi
				ldren loved this cartoon image so much that 
				Walt Disney started his career successfully.
				s friends in the oica h
				uman and wore white gloves in its hand. Chi
				ldren loved this cartoon image so much that 
				Walt Disney started his career successfully.
			</p>
		</div>

		<div class="rights">
			rightclick
			<p class="none2" style="display: none;width: 400px; text-align: center;margin:30px auto;">
				2hi like a hldren loved this c
				artoon imagld building. They saw m
				ice in and out, so he came the idea that 
				he drew a cartoon mouse. It stood like a h
				he drew a cartoon mouse. It stood like a h
				uman and wore white gloves in its hand. Chi
				ldren loved this cartoon image so much that 
				Walt Disney started his career successfully.
				Walt Disney creaty Mouse when he worked wi
				ed Mickey Mouse when he worked with hi
				s friends in the old building. They saw m
				ice in and out, so he came the idea that 
				ice in and out, so he came the idea that 
				he drew a cartoon mouse. It stood 
			</p>
		</div>
		
		
		
	</div>
 </body>
 </html><?php }} ?>