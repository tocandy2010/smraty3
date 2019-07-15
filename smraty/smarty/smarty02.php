<?php
/*
附值陣列

可以賦予字串,數字,陣列

模板在解析時行為

1.遇到陣列的key為數字時認為是索引陣列
2.遇到字串時認為是關聯陣列
3.直接使用關聯陣列系統將直接循環賦值(注意重名將會覆蓋)


*/

require("../smarty3/smarty-3.1.33/libs/Smarty.class.php");

$smarty = new Smarty();

$smarty->template_dir = "./temp";
$smarty->compile_dir = "./comp";


$use['name']='劉備';
$use['age' ]= '28';
$use['weapon']='雙劍';


/*
$smarty->assign('name',$use['name']);
$smarty->assign('age',$use['age']);
$smarty->assign('weapon',$use['weapon']);
*/

 //$use2 = ['劉備','28','雙劍'];
// $use2 = ['name'=>'劉備','age'=>'28','weapon'=>'雙劍'];

/*
$use3 = ['name'=>'劉備','age'=>'20',"weapon"=>"雙刀火雞"];
$use4 = ['name'=>'劉備1','age'=>'201',"weapon"=>"雙刀火雞1"];
*/

$use5 = ['country'=>['city'=>['town'=>'miloi']]];
var_dump($use5);
$smarty->assign('location',$use5);

$smarty->display('news2.html');

?>