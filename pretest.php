<?php
/**
 * Created by PhpStorm.
 * User: 70965
 * Date: 2018/1/14
 * Time: 2:02
 */

require_once 'vendor/autoload.php';
//define('APP_DIR', realpath('./'));
//require(APP_DIR.'/protected/lib/speed.php');

echo ("[INFO]Server Start! @7912\n");
$app = new WebWorker\App("0.0.0.0",7912);

//进程数
$app->count = 4;

//自动加载目录--会加载目录下的所有php文件
$app->autoload = array();

//应用级中间件--对所有访问启用ip限制访问
//$app->AddFunc("/",function() {
////    if ( $this->request->server['remote_addr'] != '127.0.0.1' ) {
////        $this->ServerHtml("禁止访问");
////        return true;//返回ture,中断执行后面的路由或中间件，直接返回给浏览器
////    }
//});

//注册路由hello
$app->HandleFunc("/api",

        function() {


        $this->ServerResponse("","html back!");
    }

);


//注册路由json
//$app->HandleFunc("/json",function() {
//    //以json格式响应
//    $this->ServerJson(array("name"=>"WebWorker"));
//});

//注册路由input
//$app->HandleFunc("/input",function() {
//    //获取body
//    $body = $this->request->rawContent();
//    $this->ServerHtml($body);
//});

$config = array();
//$config["redis"]["host"] = "127.0.0.1";
//$config["redis"]["port"] = 6379;
//$config["redis"]["password"] = "123456";
//$config["redis"]["db"] = 1;
////是否自动初始化连接
//$config["redis"]["load"] = 1;
////是否启用协程redis库
//$config["redis"]["coroutine"] = 1;
////记录redis连接池数量
//$config["redis"]["coroutine_count"] = 0;
////存放所有的redis连接
//$config["redis"]["coroutine_pool"] = new SplQueue();

//注册路由redis
//$app->HandleFunc("/redis",function() {
//    $this->redis->set("xtgxiso",time());
//    $str = $this->redis->get("xtgxiso");
//    $this->ServerHtml($str);
//});

//$config['db']['host'] = "127.0.0.1";
//$config['db']['user'] = "root";
//$config['db']['password'] = "123456";
//$config['db']['database'] = "test";
//$config['db']['port'] = 3306;
//$config['db']['charset'] = "utf8";
//$config["db"]["load"] = 1;
//$config["db"]["coroutine"] = 1;
//$config["db"]["coroutine_count"] = 0;
//$config["db"]["coroutine_pool"] = new SplQueue();

//注册路由mysql
//$app->HandleFunc("/mysql",function() {
//    $res = $this->db->query("select * from test where id =2");
//    $this->ServerJson($res);
//});

$app->on404  = function() {
    $this->ServerHtml("我的404");
};

$app->run();