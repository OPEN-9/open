<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html>
 <html lang="zh">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<meta http-equiv="X-UA-Compatible" content="ie=edge">
 	<title></title>
	
	<link href="<?php echo (CSS_URL); ?>index.css" rel="stylesheet" type="text/css" />
	
</head>
 <body>
	<div class="contens">
		<!-- 图片格式
		<img src="<?php echo (IMAGE_URL); ?>th.jpg" /> -->
		<h1 style="color:#ffffff; text-align: center;">标题</h1>
		<div class="text-contents">
			<p class="ppp">
				Mr您能女奥德赛女或我这里是一块文本内容找到一篇很好的很新的文章
				话语分析 (discours啊啊啊e analysis)
				 由 Edwards a阿森松岛发到 nd Potter (1992), Harre (1998) 和 Potter and Wetherell (1998) 所发展的话语心理学力图揭示，在谈话中，参与者的关于事件（记忆、描述、表达）的谈话版本是如何被建构出来，以发挥交流互动的作用。虽然其出发点也是会话分析，它的分析重点是谈话的内容、谈话主题及其社会组织，而不是谈话的语言学组织。该方法把心理现象（如：记忆、认知）当作社会和话语现象来分析。
				 其分析的重点是分析在报告、媒体和话语体系中各种版本的事件的建构。特别是要分析人们如何利用“解释库”来进行这种建构。
				 话语分析不仅被撒的发生用来对日常会话进行分析，而且也用来分析其他类型的材料，如：访谈、媒体报告。
				文本分析
				<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sql): $mod = ($i % 2 );++$i; echo ($sql["name"]); endforeach; endif; else: echo "" ;endif; ?>
				分析电视剧情或者阿斯蒂芬阿飞撒 阿瑟的暗示的流行曲歌词，研究这些媒体如何塑造角色、演员或歌手的形象，以及这些作品所隐藏的某些对人对事的看法
				报章的标题的用字、字体、大小、版面放置、占用的空间等
				分析广告的用色、配乐、选角、桥段
				内容分析
				交付该回家把杂志内的广告阿斯顿发生丰富计划奥术大师马玉涛是大法官收到告诉对方问问特额外、领综援人士、有色人种的遭遇
				统计电影对某些关系的描述，如:老夫少妻、保险从业员与顾客
			</p>
		</div>
		<div class="edit">
			<?php include 'edit.php';?>
		</div>

	</div>
 </body>
 </html>