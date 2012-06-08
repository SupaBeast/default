<?php /* Smarty version Smarty 3.1-RC1, created on 2012-06-08 15:05:49
         compiled from "C:\Users\Supa\default\www\fortumo\templates\layouts\default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:238704fd1ea9d691c82-85792438%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d4a00f46f63d453d30257b81d3c4b0088761fd4' => 
    array (
      0 => 'C:\\Users\\Supa\\default\\www\\fortumo\\templates\\layouts\\default.tpl',
      1 => 1337863683,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '238704fd1ea9d691c82-85792438',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'page' => 0,
    'yield' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1-RC1',
  'unifunc' => 'content_4fd1ea9d8a07f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fd1ea9d8a07f')) {function content_4fd1ea9d8a07f($_smarty_tpl) {?><?php if (!is_callable('smarty_function_htmlwarrior_init')) include 'C:\Users\Supa\default\www\_html-warrior\externals\smarty\libs\plugins\function.htmlwarrior_init.php';
if (!is_callable('smarty_function_htmlwarrior_plugins')) include 'C:\Users\Supa\default\www\_html-warrior\externals\smarty\libs\plugins\function.htmlwarrior_plugins.php';
if (!is_callable('smarty_function_partial')) include 'C:\Users\Supa\default\www\_html-warrior\externals\smarty\libs\plugins\function.partial.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
   "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="et">
  <head>
    <?php echo smarty_function_htmlwarrior_init(array(),$_smarty_tpl);?>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="style/reset.css" media="all" />
    <link rel="stylesheet" type="text/css" href="style/style.css" media="all" title="" />
    <link rel="stylesheet" type="text/css" href="style/fonts/fonts.css" media="all" title="" />
    <link rel="stylesheet" type="text/css" href="style/externals/colorbox.css" media="all" title="" />
    <link rel="stylesheet" type="text/css" href="style/externals/custom-colorbox.css" media="all" title="" />
    <link rel="stylesheet" type="text/css" href="style/externals/uniform.css" media="all" title="" />
    <link rel="stylesheet" type="text/css" href="style/externals/animation.css" media="all" title="" />
    <link rel="stylesheet" type="text/css" href="style/print.css" media="print" title="" />
    <link rel="stylesheet" type="text/css" href="style/externals/ipad.css" media="only screen and (max-device-width: 1024px)" />
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Vibur" type="text/css" />
    <?php echo smarty_function_htmlwarrior_plugins(array('indent'=>"    "),$_smarty_tpl);?>

    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
  </head>
  <body <?php if ($_smarty_tpl->tpl_vars['page']->value=="_index"){?>class="overflow"<?php }?>>
    <div id="background"><?php echo smarty_function_partial(array('tpl'=>"img",'src'=>"base/bg.jpg"),$_smarty_tpl);?>
</div>
    <div id="header">
      <div id="header-inner">
        <a id="logo" href="_index.html"><?php echo smarty_function_partial(array('tpl'=>"img",'src'=>"base/logo.png"),$_smarty_tpl);?>
</a>
        <div id="nav">
          <ul>
            <li><a <?php if ($_smarty_tpl->tpl_vars['page']->value=="index"){?>class="active" <?php }?>href="javascript:void(0)">About</a></li>
            <li><a href="javascript:void(0)">Features</a></li>
            <li><a href="javascript:void(0)">Countries</a></li>
            <li><a href="javascript:void(0)">Support</a></li>
            <li><a href="javascript:void(0)">Blog</a></li>
            <li><a href="javascript:void(0)" class="red">Register</a></li>
            <li><a href="javascript:void(0)" class="red">Sign In</a></li>
          </ul>
        </div>
        <div id="login">
          <span class="info">Loged in as: <a class="account" href="javascript:void(0)">Fortumo</a></span>
          <div class="menu">
            <ul>
              <li><a href="javascript:void(0)">Profile</a></li>
              <li><a href="javascript:void(0)">Payot Configuration</a></li>
              <li><a href="javascript:void(0)">Users</a></li>
              <li class="dot-line"></li>
              <li><a href="javascript:void(0)">New account</a></li>
              <li class="dot-line"></li>
              <li><a class="logout" href="javascript:void(0)">Log out</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div><!-- #header -->
    <div id="container">
      <?php echo $_smarty_tpl->tpl_vars['yield']->value;?>

    </div><!-- #Container -->
    <div id="footer" <?php if ($_smarty_tpl->tpl_vars['page']->value=="_index"||$_smarty_tpl->tpl_vars['page']->value=="404"){?>class="index"<?php }?>>
      <div id="footer-inner">
        <ul id="footer-nav">
          <li><span>&copy; 2012 Fortumo</span></li>
          <li><a href="#">Terms of Service</a></li>
          <li><a href="#">Affiliate</a></li>
          <li><a href="#">support@fortumo.com</a></li>
        </ul>
        <div class="social">
          <a href="javascript:void(0)"><img src="images/data/facebook.png" alt="" title=""  width="32" height="32" /></a>
          <a href="javascript:void(0)"><img src="images/data/twitter.png" alt="" title=""  width="32" height="32" /></a>
        </div>
        <form action="">
          <div class="lang">
            <select class="lang-menu">
              <option>eesti</option>
              <option>inglise</option>
              <option>español</option>
              <option>русский</option>
            </select>
          </div>
        </form>
      </div>
    </div>
    <?php echo smarty_function_htmlwarrior_plugins(array('position'=>"bottom",'indent'=>"    "),$_smarty_tpl);?>

    <?php echo smarty_function_partial(array('tpl'=>'script','file'=>"general",'indent'=>"    "),$_smarty_tpl);?>

    <?php echo smarty_function_partial(array('tpl'=>'script','file'=>"externals/uniform",'indent'=>"    "),$_smarty_tpl);?>

    <?php echo smarty_function_partial(array('tpl'=>'script','file'=>"externals/colorbox",'indent'=>"    "),$_smarty_tpl);?>

    <?php echo smarty_function_partial(array('tpl'=>'script','file'=>"externals/jquery.cycle",'indent'=>"    "),$_smarty_tpl);?>

    <?php echo smarty_function_partial(array('tpl'=>'script','file'=>"externals/jquery.qtip",'indent'=>"    "),$_smarty_tpl);?>

    <?php echo smarty_function_htmlwarrior_init(array('position'=>"bottom"),$_smarty_tpl);?>

  </body>
</html><?php }} ?>