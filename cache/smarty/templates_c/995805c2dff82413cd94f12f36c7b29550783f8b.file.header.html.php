<?php /* Smarty version Smarty-3.1.21, created on 2015-05-14 10:16:29
         compiled from "/data/www/xiejunOS/view/front/block/header.html" */ ?>
<?php /*%%SmartyHeaderCode:201620175555475fda0fb80-64425484%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '995805c2dff82413cd94f12f36c7b29550783f8b' => 
    array (
      0 => '/data/www/xiejunOS/view/front/block/header.html',
      1 => 1431598545,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '201620175555475fda0fb80-64425484',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_title' => 0,
    'view_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_555475fda1ada3_19500483',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555475fda1ada3_19500483')) {function content_555475fda1ada3_19500483($_smarty_tpl) {?><!DOCTYPE html>
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
