<?php /* Smarty version Smarty 3.1-RC1, created on 2012-06-08 16:03:23
         compiled from "C:\Users\Supa\default\www\fortumo\templates\pages\widget_5.tpl" */ ?>
<?php /*%%SmartyHeaderCode:78344fd1f81b6f9e59-00211185%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32a0b9c26ea1ca3e2a14305b5aa18f3a8ec6d20a' => 
    array (
      0 => 'C:\\Users\\Supa\\default\\www\\fortumo\\templates\\pages\\widget_5.tpl',
      1 => 1339062708,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '78344fd1f81b6f9e59-00211185',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1-RC1',
  'unifunc' => 'content_4fd1f81b7e889',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fd1f81b7e889')) {function content_4fd1f81b7e889($_smarty_tpl) {?><?php if (!is_callable('smarty_function_partial')) include 'C:\Users\Supa\default\www\_html-warrior\externals\smarty\libs\plugins\function.partial.php';
?>@title = "Widget third view"
@layout = "widget"
<div id="header">
  <span class="caption">Transaction progress</span>
  <a href="javascript:void(0)" id="close"><?php echo smarty_function_partial(array('tpl'=>"img",'src'=>"widget/close.png"),$_smarty_tpl);?>
</a>
  <a id="help" href="javascript:void(0)">Help</a>
</div>
<?php echo smarty_function_partial(array('tpl'=>"loader",'indent'=>''),$_smarty_tpl);?>

<div id="mainInner">
  <div class="row top">
    <div class="msg success">
      <span class="textShadow">Transakcija uspešna obavljena!</span>
    </div>
  </div>
  <div class="row">
    <div class="msg error">
      <span class="textShadow">Something went wrong!</span>
    </div>
  </div>
  <div class="row acenter">
    <a href="javascript:void(0)" class="button01"><span class="button01-inner">Return to merchant</span></a>
  </div>
</div>
<?php echo smarty_function_partial(array('tpl'=>"help",'indent'=>''),$_smarty_tpl);?>
<?php }} ?>