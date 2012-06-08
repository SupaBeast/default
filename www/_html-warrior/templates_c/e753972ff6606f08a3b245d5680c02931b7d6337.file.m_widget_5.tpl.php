<?php /* Smarty version Smarty 3.1-RC1, created on 2012-06-01 12:39:58
         compiled from "C:\Users\Supa\Desktop\garbage\www\fortumo\templates\pages\m_widget_5.tpl" */ ?>
<?php /*%%SmartyHeaderCode:106074fc88deea3efc2-65189012%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e753972ff6606f08a3b245d5680c02931b7d6337' => 
    array (
      0 => 'C:\\Users\\Supa\\Desktop\\garbage\\www\\fortumo\\templates\\pages\\m_widget_5.tpl',
      1 => 1338540409,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '106074fc88deea3efc2-65189012',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1-RC1',
  'unifunc' => 'content_4fc88deeb4783',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fc88deeb4783')) {function content_4fc88deeb4783($_smarty_tpl) {?><?php if (!is_callable('smarty_function_partial')) include 'C:\Users\Supa\Desktop\garbage\www\_html-warrior\externals\smarty\libs\plugins\function.partial.php';
?>@title = "Widget fifth view"
@layout = "widget"
<div id="header">
  <span class="caption">Full Version Upgrade</span>
  <a href="widget_4.html" id="previous" class="toggle"><?php echo smarty_function_partial(array('tpl'=>"img",'src'=>"widget/previous.png"),$_smarty_tpl);?>
</a>
  <a href="javascript:void(0)" id="close"><?php echo smarty_function_partial(array('tpl'=>"img",'src'=>"widget/close.png"),$_smarty_tpl);?>
</a>
  <a id="help" href="javascript:void(0)">Help</a>
</div>
<div id="mainInner">
  <div class="row row03">
    <span class="textShadow">To confirm the purchase, please send a text message with: <span class="point">TXT to 1311</span></span>
  </div>
  <div class="row acenter plusPadding">
    <a href="widget_6.html" class="button01 toggle"><span class="button01-inner">Open messaging app</span></a>
  </div>
  <div class="row row02 border-top">
    <span class="textShadow">0.32 EUR for 41 Silver Coins will be charged to your mobile phone (5601202) bill. </span>
  </div>
</div><?php }} ?>