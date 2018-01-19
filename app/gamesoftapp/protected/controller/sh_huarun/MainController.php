<?php
class MainController extends BaseController {

    function actionIndex(){
        // 接收页码参数

//        $inde=$this->url2("sh_huarun","main","index");
//        $inde=url(array("c"=>"main","a"=>"index"));
//        echo "这里是华润官网! <a href='#'>".$inde."</a>";

        $this->display("index-event_huarun_0116.html");
    }



}