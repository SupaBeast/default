<?php /* Smarty version Smarty 3.1-RC1, created on 2012-06-01 14:31:11
         compiled from "C:\Users\Supa\Desktop\garbage\www\fortumo\templates\pages\widget_3.tpl" */ ?>
<?php /*%%SmartyHeaderCode:115134fc88d50599bd6-38637458%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d89a0fe4e8b99d1649d9f789e302f988699d0e5' => 
    array (
      0 => 'C:\\Users\\Supa\\Desktop\\garbage\\www\\fortumo\\templates\\pages\\widget_3.tpl',
      1 => 1338550053,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115134fc88d50599bd6-38637458',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1-RC1',
  'unifunc' => 'content_4fc88d5064b9e',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fc88d5064b9e')) {function content_4fc88d5064b9e($_smarty_tpl) {?><?php if (!is_callable('smarty_function_partial')) include 'C:\Users\Supa\Desktop\garbage\www\_html-warrior\externals\smarty\libs\plugins\function.partial.php';
?>@title = "Widget fifth view"
@layout = "widget"
<div id="header">
  <span class="caption">Full Version Upgrade</span>
  <a href="widget_2.html" id="previous" class="toggle"><?php echo smarty_function_partial(array('tpl'=>"img",'src'=>"widget/previous.png"),$_smarty_tpl);?>
</a>
  <a href="javascript:void(0)" id="close"><?php echo smarty_function_partial(array('tpl'=>"img",'src'=>"widget/close.png"),$_smarty_tpl);?>
</a>
  <a id="help" href="javascript:void(0)">Help</a>
</div>
<?php echo smarty_function_partial(array('tpl'=>"loader",'indent'=>''),$_smarty_tpl);?>

<div id="mainInner">
  <div class="row row03">
    <span class="textShadow">To confirm the purchase, please send a text message with: <span class="point">TXT to 1311</span></span>
  </div>
  <div class="row acenter plusPadding">
    <span class="smsWaiting">
      <span class="icon"><?php echo smarty_function_partial(array('tpl'=>"img",'src'=>"widget/loader-content.gif"),$_smarty_tpl);?>
</span>
      <span class="smsText textShadow">Waiting for SMS</span>
    </span>
  </div>
  <div class="row border-top acenter last">
    <span class="amount textShadow">319 Silver Coins = <span class="price">$21</span></span>
  </div>
</div>
<?php echo smarty_function_partial(array('tpl'=>"help",'indent'=>''),$_smarty_tpl);?>
<?php }} ?>