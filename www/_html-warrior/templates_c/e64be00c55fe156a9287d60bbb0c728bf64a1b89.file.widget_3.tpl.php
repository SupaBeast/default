<?php /* Smarty version Smarty 3.1-RC1, created on 2012-06-08 16:38:05
         compiled from "C:\Users\Supa\default\www\fortumo\templates\pages\widget_3.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27324fd1f4fb6dd5c3-90896274%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e64be00c55fe156a9287d60bbb0c728bf64a1b89' => 
    array (
      0 => 'C:\\Users\\Supa\\default\\www\\fortumo\\templates\\pages\\widget_3.tpl',
      1 => 1339162680,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27324fd1f4fb6dd5c3-90896274',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1-RC1',
  'unifunc' => 'content_4fd1f4fb7e746',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fd1f4fb7e746')) {function content_4fd1f4fb7e746($_smarty_tpl) {?><?php if (!is_callable('smarty_function_partial')) include 'C:\Users\Supa\default\www\_html-warrior\externals\smarty\libs\plugins\function.partial.php';
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
  <div class="row border-top acenter">
    <span class="amount textShadow">319 Silver Coins = <span class="price">$21</span></span>
  </div>
  <div class="row border-top acenter last">
    <span class="legalText textShadow">Legal text: Coste del mensaje X,XX€ IVA Incluido. Electronic Corporate Solutions para Fortumo. n.º atn clte. 902599327. s@fortumo.com Apdo. correos 61010 CP. 28036 Madrid. Servicio de ocio y entretenimiento disponible en España para abonados de Movistar, Vodafone y Orange </span>
    <span class="serviceProvide">Teenusepakkuja: Silver Company Ltd Klienditugi: <a href="javascript:void(0)">silvercoins@fortumo.com</a></span>
  </div>
</div>
<?php echo smarty_function_partial(array('tpl'=>"help",'indent'=>''),$_smarty_tpl);?>
<?php }} ?>