<?php
return array(
	'DB_TYPE'       => 'mysql',     // 数据库类型
	// 'DB_HOST' 		=> 'yintong8888.mysql.rds.aliyuncs.com',	//主机地址
	// 'DB_NAME' 		=> 'yintong',		//数据库名
	// 'DB_USER' 		=> 'aa9808',		//数据库用户名
	// 'DB_PWD' 		=> 'aa9808',		//数据库密码
	'DB_HOST' 		=> 'localhost',	//主机地址
	'DB_NAME' 		=> 'weixintp',		//数据库名
	'DB_USER' 		=> 'root',		//数据库用户名
	'DB_PWD' 		=> '',		//数据库密码
	'DB_prefix' 	=> 'weixintp_',		//数据表前缀
	'DEFAULT_THEME' => 'default',	//默认模板文件
	'SESSION_OPTIONS'=>array(
    'type'=> 'db',//session采用数据库保存
    'expire'=>1440,//session过期时间，如果不设就是php.ini中设置的默认值
     ),
   'SESSION_TABLE'=>'weixintp_session',
    'DEFAULT_MODULE'        =>  'Home',  // 默认模块
    'DEFAULT_CONTROLLER'    =>  'Index', // 默认控制器名称
    'DEFAULT_ACTION'        =>  'main', // 默认操作名称
);