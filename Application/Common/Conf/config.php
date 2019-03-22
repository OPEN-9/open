<?php
return array(
	//'配置项'=>'配置值'
	'URL_ROUTER_ON'   => true, 
	'URL_ROUTE_RULES'=>array(
	
		//路由
		'new/:id\d'    => 'Demo/demo',
		'new/:name'    => 'Demo/demo',
		
	),
	
	'TMPL_ENGINE_TYPE'      =>  'smarty',     // 默认模板引擎 以下设置仅对使用Think模板引擎有效
	'TMPL_DENY_PHP'         =>  false, // 默认模板引擎是否禁用PHP原生代码
	'TMPL_L_DELIM'          =>  '{',            // 模板引擎普通标签开始标记
	'TMPL_R_DELIM'          =>  '}',            // 模板引擎普通标签结束标记
);