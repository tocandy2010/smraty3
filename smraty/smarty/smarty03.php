<?php

/*

css style中括號防衝突

在style樣式中如果將{}不換行形式將會被smarty理解為需要解析
例如: h1{background-color:red} 將會報錯

解決辦法
1. 修改smarty定界標籤 換成更複雜的
    $smarty->left_delimiter = '!{';  自訂左標籤
    $smarty->roght_delimiter = '}!';  自訂右標籤

2.literal 標籤 告訴 smarty此標籤內不用解析
    {literal}h1{background-color:red}{/literal}
*/

require("../smarty3/smarty-3.1.33/libs/Smarty.class.php");

$smarty = new Smarty();

$smarty->template_dir = "./temp";
$smarty->compile_dir = "./comp";

$smarty->left_delimiter = '{!';
$smarty->right_delimiter = '!}';

$smarty->assign('title','titletest');

$smarty->display('news3.html');




?>