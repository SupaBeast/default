<?php /* Smarty version Smarty 3.1-RC1, created on 2012-06-08 16:10:04
         compiled from "C:\Users\Supa\default\www\fortumo\templates\pages\widget_4.tpl" */ ?>
<?php /*%%SmartyHeaderCode:90774fd1f501b29fa9-64281530%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7cb1d7eadf2b5a2d70fd2df8c437ca0db029e5df' => 
    array (
      0 => 'C:\\Users\\Supa\\default\\www\\fortumo\\templates\\pages\\widget_4.tpl',
      1 => 1339160985,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '90774fd1f501b29fa9-64281530',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1-RC1',
  'unifunc' => 'content_4fd1f501ce504',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fd1f501ce504')) {function content_4fd1f501ce504($_smarty_tpl) {?><?php if (!is_callable('smarty_function_partial')) include 'C:\Users\Supa\default\www\_html-warrior\externals\smarty\libs\plugins\function.partial.php';
?>@title = "Widget second view"
@layout = "widget"
<div id="header">
  <span class="caption">Enter your phone number</span>
  <a href="widget_3.html" id="previous" class="toggle"><?php echo smarty_function_partial(array('tpl'=>"img",'src'=>"widget/previous.png"),$_smarty_tpl);?>
</a>
  <a href="javascript:void(0)" id="close"><?php echo smarty_function_partial(array('tpl'=>"img",'src'=>"widget/close.png"),$_smarty_tpl);?>
</a>
  <a id="help" href="javascript:void(0)">Help</a>
</div>
<?php echo smarty_function_partial(array('tpl'=>"loader",'indent'=>''),$_smarty_tpl);?>

<div id="mainInner">
  <form action="">
    <div class="plusPadding">
      <span class="desc textShadow acenter">You were sent a PIN code. Please enter it below</span>
      <span class="input pin">
        <span class="inputInner phone"><input type="text" value="" name="" placeholder="Pin Code" class="acenter"/></span>
        <a href="javascript:void(0)" class="inputButton01 rfloat toggle widget_4"><span class="inputButton01-inner">OK</span></a>
      </span>
    </div>
  </form>
  <div class="row">
    <div class="operators">
      <span class="active"><?php echo smarty_function_partial(array('tpl'=>"img",'src'=>"widget/elisa.png"),$_smarty_tpl);?>
</span>
      <span class="active"><?php echo smarty_function_partial(array('tpl'=>"img",'src'=>"widget/emt.png"),$_smarty_tpl);?>
</span>
      <span class="active"><?php echo smarty_function_partial(array('tpl'=>"img",'src'=>"widget/tele2.png"),$_smarty_tpl);?>
</span>
      <span class="active"><?php echo smarty_function_partial(array('tpl'=>"img",'src'=>"widget/movistar.png"),$_smarty_tpl);?>
</span>
      <span class="active"><?php echo smarty_function_partial(array('tpl'=>"img",'src'=>"widget/nextel.png"),$_smarty_tpl);?>
</span>
      <span class="active"><?php echo smarty_function_partial(array('tpl'=>"img",'src'=>"widget/movistar.png"),$_smarty_tpl);?>
</span>
    </div>
  </div>
  <div class="row border-top acenter last">
    <span class="amount textShadow">319 Silver Coins = <span class="price">$21</span></span>
    <span class="serviceProvide">Teenusepakkuja: Silver Company Ltd Klienditugi: <a href="javascript:void(0)">silvercoins@fortumo.com</a></span>
  </div>
</div>
<?php echo smarty_function_partial(array('tpl'=>"help",'indent'=>''),$_smarty_tpl);?>
<?php }} ?>