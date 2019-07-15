<?php

/*
smarty 可以傳遞對象
也可以使用對象內的方法
但是不建議使用
因為違反了錢後分離的原則
*/

require('../smarty3/smarty-3.1.33/libs/Smarty.class.php');

$smarty = new Smarty();

$smarty->template_dir = "./temp";
$smarty->compile_dir = "./comp";

class man {
    public $name = '劉備';
    public $age = '29';
    public $weapon = '雙劍';
    public function t(){
        echo 6;
    }
}

$smarty->assign('lou',new man());

$smarty->display('news06.html');

?>