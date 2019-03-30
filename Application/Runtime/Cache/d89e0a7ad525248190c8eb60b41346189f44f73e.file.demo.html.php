<?php /* Smarty version Smarty-3.1.6, created on 2019-03-28 09:18:27
         compiled from "./Application/Home/View\Demo\demo.html" */ ?>
<?php /*%%SmartyHeaderCode:299505c9b49daecbfe6-47444501%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd89e0a7ad525248190c8eb60b41346189f44f73e' => 
    array (
      0 => './Application/Home/View\\Demo\\demo.html',
      1 => 1553735889,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '299505c9b49daecbfe6-47444501',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5c9b49daf23bb',
  'variables' => 
  array (
    'Think' => 0,
    'sql' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c9b49daf23bb')) {function content_5c9b49daf23bb($_smarty_tpl) {?> <!DOCTYPE html>
 <html lang="zh">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<meta http-equiv="X-UA-Compatible" content="ie=edge">
 	<title></title>
	
	<link href="<?php echo @CSS_URL;?>
home/index.css" rel="stylesheet" type="text/css" />
	
</head>
 <body>
	<div class="contens">
		<!-- 图片格式
		<img src="<?php echo $_smarty_tpl->tpl_vars['Think']->value['const']['IMAGE_URL'];?>
th.jpg" /> -->
		<h1 style="color:#ffffff; text-align: center;">标题</h1>
		<div class="text-contents">
			<p class="ppp">
				Mr您能女奥德赛女或我这里是一块文本内容找到一篇很好的很新的文章
				话语分析 (discours啊啊啊e analysis)
				 由 Edwards a阿森松岛发到 nd Potter (1992), Harre
				 (1998) 和 Potter and Wetherell (1998) 所发展的话语心理
				 学力图揭示，在谈话中，参与者的关于事件（记忆、描述、表达）
				 谈话版本是如何被建构出来，以发挥交流互动的作用。虽然其出发点
				 也是会话分析，它的分析重点是谈话的内容、谈话主题及其社会组织，
				 而不是谈话的语言学组织。该方法把心理现象（如：记忆、认知）当作社会
				 和话语现象来分析。
				 其分析的重点是分析在报告、媒体和话语体系中各种版本的
				事件的建构。特别是要分析人们如何利用“解释库”来进行这种建构。
				 话语分析不仅被撒的发生用来对日常会话进行分析，而且也用来分析其
				他类型的材料，如：访谈、媒体报告。
				文本分析
				<volist name='data' id='sql'>
					 <p class="abcc">我是第一个 <?php echo $_smarty_tpl->tpl_vars['sql']->value['name'];?>
</p>
				</volist>
			</p>
		</div>
		<div class="edit">
			<<?php ?>?php include 'edit.php';?<?php ?>>
		</div>
		<a href="register.html">本地点击</a><br />
		<a href='www.com'>这是一个错位的点击<a/><br />
		<a href='http://www.baidu.com'>这是一个百度的点击<a/>
	</div>
 </body>
 </html><?php }} ?>