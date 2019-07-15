<?php

/*

if else 判斷
成對標籤出現
語法:
{if 判斷式}

{else if 判斷式子}

{else}

{/if}

*/


require_once('../smarty3/smarty-3.1.33/libs/Smarty.class.php');

$smarty = new Smarty();

$smarty->template_dir = './temp';
$smarty->compile_dir = './comp';

$smarty->assign('price',6000);

$smarty->display('news08.html');
?>