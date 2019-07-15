<?php

require('../smarty3/smarty-3.1.33/libs/Smarty.class.php');

/*
簡化模板
目的:簡化每次都要指定路徑

1.自訂類繼承自Smarty,先執行一遍 父類的 __construct 以確保設定與父類相同
在使用
settemplateDir
setcompileDir
修改路徑


*/
class Mysmarty extends Smarty {
    public function __construct(){
        parent::__construct();
        $this->settemplateDir('./temp');
        $this->setcompileDir('./comp');
    }
}


$smarty = new Mysmarty();

$smarty->assign('t','test');

$smarty->display('news07.html');

?>