<?php

require('../smarty3/smarty-3.1.33/libs/Smarty.class.php');

$smarty = new Smarty();

$smarty->template_dir = "./temp";
$smarty->compile_dir = "./comp";

/*

append附值:

將同名 key 形成索引陣列

*/

$smarty->append('stu','張三');

$smarty->display('news05.html');


?>