<?php /* Smarty version Smarty 3.1-RC1, created on 2012-06-08 15:05:45
         compiled from "C:\Users\Supa\default\www\fortumo\templates\layouts\widget.tpl" */ ?>
<?php /*%%SmartyHeaderCode:151884fd1ea99bd4551-02966716%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '838779205cd69daa6bbbc765cfdbadd6cebab387' => 
    array (
      0 => 'C:\\Users\\Supa\\default\\www\\fortumo\\templates\\layouts\\widget.tpl',
      1 => 1338388052,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '151884fd1ea99bd4551-02966716',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'yield' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1-RC1',
  'unifunc' => 'content_4fd1ea99c732f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fd1ea99c732f')) {function content_4fd1ea99c732f($_smarty_tpl) {?><?php if (!is_callable('smarty_function_htmlwarrior_init')) include 'C:\Users\Supa\default\www\_html-warrior\externals\smarty\libs\plugins\function.htmlwarrior_init.php';
if (!is_callable('smarty_function_htmlwarrior_plugins')) include 'C:\Users\Supa\default\www\_html-warrior\externals\smarty\libs\plugins\function.htmlwarrior_plugins.php';
if (!is_callable('smarty_function_partial')) include 'C:\Users\Supa\default\www\_html-warrior\externals\smarty\libs\plugins\function.partial.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
   "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="et">
  <head>
    <?php echo smarty_function_htmlwarrior_init(array(),$_smarty_tpl);?>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="style/reset.css" media="all" />
    <link rel="stylesheet" type="text/css" href="style/externals/widget.css" media="all" title="" />
    <link rel="stylesheet" type="text/css" href="style/externals/uniform.css" media="all" title="" />
    <link rel="stylesheet" type="text/css" href="style/widget-fonts/fonts.css" media="all" title="" />
    <?php echo smarty_function_htmlwarrior_plugins(array('indent'=>"    "),$_smarty_tpl);?>

    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
  </head>
  <body>
    <div id="main">
      <?php echo $_smarty_tpl->tpl_vars['yield']->value;?>

    </div><!-- #Container -->
    <div id="preload" class="hidden">
      <?php echo smarty_function_partial(array('tpl'=>"img",'src'=>"widget/loader-bg.png",'indent'=>"      "),$_smarty_tpl);?>

    </div>
    <?php echo smarty_function_htmlwarrior_plugins(array('position'=>"bottom",'indent'=>"    "),$_smarty_tpl);?>

    <?php echo smarty_function_partial(array('tpl'=>'script','file'=>"externals/colorbox",'indent'=>"    "),$_smarty_tpl);?>

    <?php echo smarty_function_partial(array('tpl'=>'script','file'=>"externals/uniform",'indent'=>"    "),$_smarty_tpl);?>

    <?php echo smarty_function_partial(array('tpl'=>'script','file'=>"externals/widget",'indent'=>"    "),$_smarty_tpl);?>

    <?php echo smarty_function_htmlwarrior_init(array('position'=>"bottom"),$_smarty_tpl);?>

  </body>
</html><?php }} ?>