<?php
return array(
	//'配置项'=>'配置值'
	'URL_ROUTER_ON'   => true, 
	'URL_ROUTE_RULES'=>array(
	
		//路由
		'new/:id\d'    => 'Demo/demo',
		'new/:name'    => 'Demo/demo',
		
	),
	'DB_TYPE'               =>  'mysql',     // 数据库类型
	'DB_HOST'               =>  '148.70.141.161',127.0.0.1, // 服务器地址
	'DB_NAME'               =>  'test',          // 数据库名
	'DB_USER'               =>  'root',      // 用户名
	'DB_PWD'                =>  'root',          // 密码
	'DB_PORT'               =>  '3306',      //  端口
	'URL_MODEL'             =>  1, 
	
	'TMPL_ENGINE_TYPE'      =>  'smarty',     // 默认模板引擎 以下设置仅对使用Think模板引擎有效
	'TMPL_DENY_PHP'         =>  false, // 默认模板引擎是否禁用PHP原生代码
	'TMPL_L_DELIM'          =>  '{',            // 模板引擎普通标签开始标记
	'TMPL_R_DELIM'          =>  '}',            // 模板引擎普通标签结束标记
	
);