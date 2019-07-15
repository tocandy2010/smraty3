<?php

//測試

//1.下載smarty並引入類
require("../smarty3/smarty-3.1.33/libs/Smarty.class.php");

//2.實例化對象
$smarty = new Smarty();

//3.配置路徑
$smarty->template_dir = './temp';
$smarty->compile_dir = './comp';

//4.附值
$smarty->assign('title','titletest');
$smarty->assign('content','contetnttest');

$smarty->display('news.html')



?>