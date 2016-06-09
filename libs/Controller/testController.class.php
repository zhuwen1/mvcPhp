<?php
/**
 * Created by PhpStorm.
 * User: zhuwen
 * Date: 2016/6/9
 * Time: 23:27
 * email:1140524662@qq.com
 */
class testController{//控制器的作用是找到相应的模型和视图并且实例化他们
    function show(){
       $testModel=M("test");
        $data = $testModel->get();
       $testView = V('test');
        $testView->display($data);
    }
}