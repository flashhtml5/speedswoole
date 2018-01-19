<?php
class MainController extends BaseController {

    function actionIndex(){
        // 接收页码参数

//        $inde=url(array("c"=>"main","a"=>"index"));
//        echo "这里是汉字软件官网! <a href='#'>".$inde."</a>";

        $this->display("index-app-hanziwrite_0116.html");
    }


}