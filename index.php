<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/6/9
 * Time: 23:47
 */
//url 形式index.php?controller=控制器的名称&method=方法名
require_once('function.php');
$controllerAllow =array('test','index');
$methodAllow = array('test','index','show');
$controller = in_array($_GET['c'],$controllerAllow)?daddslashes($_GET['c']):'index';
$method = in_array($_GET['m'],$methodAllow)?daddslashes($_GET['m']):'index';
C($controller,$method);
?>
