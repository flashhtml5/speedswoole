<?php

date_default_timezone_set('PRC');


$config = array(
	/*'rewrite' => array(
		'admin/index.html' => 'admin/main/index',
		'admin/<c>_<a>.html'    => 'admin/<c>/<a>', 
		'<c>/<a>'          => '<c>/<a>',
		'/'                => 'main/index',
	),*/
);

$domain = array(
	"192.168.1.18" => array( // 调试配置
		'debug' => 1,
		'mysql' => array(

				'MYSQL_HOST' => '127.0.0.1',
				'MYSQL_PORT' => '3306',
				'MYSQL_USER' => 'root',
				'MYSQL_DB'   => 'test',
				'MYSQL_PASS' => 'Mededu123!',
				'MYSQL_CHARSET' => 'utf8',
            'PDO::ATTR_PERSISTENT'=>true,

		),
	),
	"speedphp.com" => array( //线上配置
		'debug' => 0,
		'mysql' => array(),
	),
);
if(empty($domain[$_SERVER["HTTP_HOST"]])) die("配置域名不正确，请确认".$_SERVER["HTTP_HOST"]."的配置是否存在！");

return $domain[$_SERVER["HTTP_HOST"]] + $config;