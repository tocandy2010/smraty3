<?php
require('../smarty3/smarty-3.1.33/libs/Smarty.class.php');

/*

smarty 3種附值方式

1.assign附值
2.系統保留變數:
    $smarty.get
    $smarty.post
    $smarty.cookies
    $smarty.session
    $smarty.const
    $smarty.server
    $smarty.get.(get url 變數)
3.使用配置文件 config
    1.在html 頁面引入 config檔案 
        {config_load file="配置文件路徑}
    2.在模板內指定配置文件路徑
        $smarty->config_dir = "./config";
    3.引用 $smarty.config.變數名稱
*/

$smarty = new Smarty();

define('t',66);

$smarty->template_dir = "./temp";
$smarty->compile_dir = "./comp";
$smarty->config_dir = "./config";



$smarty->display('news04.html');

?>