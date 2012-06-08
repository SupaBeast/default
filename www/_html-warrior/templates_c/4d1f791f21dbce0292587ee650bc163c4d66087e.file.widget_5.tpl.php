<?php /* Smarty version Smarty 3.1-RC1, created on 2012-06-07 12:51:50
         compiled from "C:\Users\Supa\Desktop\garbage\www\fortumo\templates\pages\widget_5.tpl" */ ?>
<?php /*%%SmartyHeaderCode:211514fc88d5ac0d424-00933705%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d1f791f21dbce0292587ee650bc163c4d66087e' => 
    array (
      0 => 'C:\\Users\\Supa\\Desktop\\garbage\\www\\fortumo\\templates\\pages\\widget_5.tpl',
      1 => 1339062708,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '211514fc88d5ac0d424-00933705',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1-RC1',
  'unifunc' => 'content_4fc88d5ac8dea',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fc88d5ac8dea')) {function content_4fc88d5ac8dea($_smarty_tpl) {?><?php if (!is_callable('smarty_function_partial')) include 'C:\Users\Supa\Desktop\garbage\www\_html-warrior\externals\smarty\libs\plugins\function.partial.php';
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