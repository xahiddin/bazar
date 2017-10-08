<?php
return array(
	//'配置项'=>'配置值'
    'TMPL_PARSE_STRING'=>array(
        '__BOOTSTRAP__'=>__ROOT__.'/Public/bootstrap/dist',
        '__JS__'=>__ROOT__.'/Public/scripts',
        '__FONT__'=>__ROOT__.'/Public/uyfont',
    ),
    /* 数据库设置 */
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'test',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'xm',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
);