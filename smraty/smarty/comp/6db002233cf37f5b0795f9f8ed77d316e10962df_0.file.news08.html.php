<?php
/* Smarty version 3.1.33, created on 2019-07-15 15:17:06
  from 'C:\xampp\htdocs\smraty\smarty\temp\news08.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d2c7cd2a3d177_06173342',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6db002233cf37f5b0795f9f8ed77d316e10962df' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smraty\\smarty\\temp\\news08.html',
      1 => 1563196624,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d2c7cd2a3d177_06173342 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>給女朋友買包</h1>
    <h1><?php if ($_smarty_tpl->tpl_vars['price']->value >= 10000) {?>
    喜歡
    <?php } elseif ($_smarty_tpl->tpl_vars['price']->value >= 6000) {?>
    還行
    <?php } else { ?>
    nono
    <?php }?>
    </h1>
</body>
</html><?php }
}
