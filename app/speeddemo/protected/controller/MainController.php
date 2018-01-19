<?php
class MainController extends BaseController {

    function actionIndex(){
        // 接收页码参数
        $page = arg("p", 1);

        // 实例化一个guestbook的模型类
        $guestbook = new Model("guestbook");
        // 用findAll()方法查询guestbook表的全部数据
        $this->records = $guestbook->findAll(null, "createtime DESC", "*", array($page, 3));
        // 输出看看
        // dump($this->records);

        $this->pager = $guestbook->page;
        // dump($this->pager);

        $this->display("guestbook.html");
    }

    function actionWrite(){
        //dump(arg());

        // 构造新建留言的数据
        $newrow = array(
            "title"      => arg("title"),    // 字段一一对应
            "contents"   => arg("contents"),
            "username"   => arg("username"),
            "createtime" => time(),   // time()函数可以产生当前时间戳
        );
        // 实例化一个guestbook的模型类
        $guestbook = new Model("guestbook");
        // 使用Model的create方法把前面的数据插入到数据表中
        $result = $guestbook->create($newrow);
        // 输出一下结果，如果是1，那证明已经插入了1条新的数据
        // dump($result);
        $this->tips("留言成功！", url("main", "index"));
    }
}