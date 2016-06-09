<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/6/9
 * Time: 23:50
 * 存储mvc中必须用到的函数
 */
//c方法传递两个参数。一个是控制器名，一个是方法名字
function C($name,$method){
    require_once("libs/Controller/".$name."Controller.class.php");
    eval('
    $obj = new '.$name.'Controller();
    $obj->'.$method.'();');
}
function M($name){
    require_once ("libs/Model/".$name."Model.class.php");
    eval('$obj = new '.$name.'Model();');
    return $obj;
}
function V($name){
    require_once("libs/View/".$name."View.class.php");
    eval('$obj = new '.$name.'View();');
    return $obj;
}
function daddslashes($str){
    return (!get_magic_quotes_gpc())?addslashes($str):$str;
}