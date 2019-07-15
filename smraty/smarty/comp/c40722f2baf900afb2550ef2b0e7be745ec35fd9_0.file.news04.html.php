<?php
/* Smarty version 3.1.33, created on 2019-07-13 14:27:25
  from 'C:\xampp\htdocs\smraty\smarty\temp\news04.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d29ce2d6c9b97_86347603',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c40722f2baf900afb2550ef2b0e7be745ec35fd9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smraty\\smarty\\temp\\news04.html',
      1 => 1563020843,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d29ce2d6c9b97_86347603 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "../conf/floor.conf", null, 0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $_GET['id'];?>
</h1>
    <h1><?php echo $_SERVER['REQUEST_TIME'];?>
</h1>
    <h1><?php echo @constant('t');?>
</h1>
    <h1><?php echo $_smarty_tpl->smarty->ext->configload->_getConfigVariable($_smarty_tpl, 'tel');?>
</h1>
    <h1><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'age');?>
</h1>
    <h1><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'name');?>
</h1>
</body>
</html><?php }
}
