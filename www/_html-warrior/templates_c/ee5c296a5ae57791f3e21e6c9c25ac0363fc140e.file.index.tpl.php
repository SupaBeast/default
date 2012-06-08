<?php /* Smarty version Smarty 3.1-RC1, created on 2012-06-08 16:33:15
         compiled from "C:\Users\Supa\default\www\fortumo\templates\pages\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8914fd1ff1bae0092-05654237%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee5c296a5ae57791f3e21e6c9c25ac0363fc140e' => 
    array (
      0 => 'C:\\Users\\Supa\\default\\www\\fortumo\\templates\\pages\\index.tpl',
      1 => 1325083198,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8914fd1ff1bae0092-05654237',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'out' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1-RC1',
  'unifunc' => 'content_4fd1ff1bb6982',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fd1ff1bb6982')) {function content_4fd1ff1bb6982($_smarty_tpl) {?>@layout = false

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
   "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Fortumo HTML prototype</title>
    
    <style type="text/css">
    * {margin:0;padding:0;}
    ul {list-style-type: none;padding-left: 10px;}
    h1 {font-size:20px; margin-bottom: 20px;}
    h3 {margin-top: 10px;}
    #content {width: 480px;margin: 0 auto;padding: 30px 20px; background: white; margin-top: 10px;}
    body{width:100%;background:#f6f6f6;font:12px/20px Arial, sans-serif;color:#404040;}
    a{color:#007CC3;text-decoration:none;}
    a:hover{text-decoration:underline;}
    </style>
    
  </head>
  <body>



    <div id="content">
      <h1>Fortumo HTML prototype</h1>

      <?php echo $_smarty_tpl->tpl_vars['out']->value;?>

    </div><!-- #content -->

  </body>
</html><?php }} ?>