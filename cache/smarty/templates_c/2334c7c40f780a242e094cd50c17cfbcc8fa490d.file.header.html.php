<?php /* Smarty version Smarty-3.1.21, created on 2015-05-14 14:41:06
         compiled from "D:\webhost\xiejunOS\view\front\block\header.html" */ ?>
<?php /*%%SmartyHeaderCode:619955543c0d67f8a6-75789777%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2334c7c40f780a242e094cd50c17cfbcc8fa490d' => 
    array (
      0 => 'D:\\webhost\\xiejunOS\\view\\front\\block\\header.html',
      1 => 1431585601,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '619955543c0d67f8a6-75789777',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55543c0d6818e5_90409838',
  'variables' => 
  array (
    'site_title' => 0,
    'view_dir' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55543c0d6818e5_90409838')) {function content_55543c0d6818e5_90409838($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title><?php echo $_smarty_tpl->tpl_vars['site_title']->value;?>
</title>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['view_dir']->value;?>
/public/js/main.js"><?php echo '</script'; ?>
>
    <link href="<?php echo $_smarty_tpl->tpl_vars['view_dir']->value;?>
/public/css/main.css" media="screen" rel="stylesheet" type="text/css">
</head>
<body>
<div class="body">
    <div class="header">
        header
    </div>
<?php }} ?>
