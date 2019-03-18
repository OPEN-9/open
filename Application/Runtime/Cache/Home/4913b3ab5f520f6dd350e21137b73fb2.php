<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html>
 <html lang="zh">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<meta http-equiv="X-UA-Compatible" content="ie=edge">
 	<title></title>
 </head>
 <body>
 	<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$aaa): $mod = ($i % 2 );++$i;?><h1> <?php echo ($aaa[sex]); ?> <?php echo ($aaa["id"]); ?> <?php echo ($aaa["name"]); ?>  </h1><?php endforeach; endif; else: echo "" ;endif; ?>
 </body>
 </html>