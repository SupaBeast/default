<?php /* Smarty version Smarty 3.1-RC1, created on 2012-06-01 14:31:12
         compiled from "C:\Users\Supa\Desktop\garbage\www\fortumo\templates\pages\widget_4.tpl" */ ?>
<?php /*%%SmartyHeaderCode:133744fc88d564997c5-81054283%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3aeb38a32e388a5605bbe0aa3a978d722d065f8' => 
    array (
      0 => 'C:\\Users\\Supa\\Desktop\\garbage\\www\\fortumo\\templates\\pages\\widget_4.tpl',
      1 => 1338550047,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '133744fc88d564997c5-81054283',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1-RC1',
  'unifunc' => 'content_4fc88d5661c32',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fc88d5661c32')) {function content_4fc88d5661c32($_smarty_tpl) {?><?php if (!is_callable('smarty_function_partial')) include 'C:\Users\Supa\Desktop\garbage\www\_html-warrior\externals\smarty\libs\plugins\function.partial.php';
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
    <div>
      <span class="desc textShadow acenter">You were sent a PIN code. Please enter it below</span>
      <span class="input pin">
        <span class="inputInner phone"><input type="text" value="" name="" placeholder="Pin Code" class="acenter"/></span>
        <a href="javascript:void(0)" class="inputButton01 rfloat toggle widget_4"><span class="inputButton01-inner">OK</span></a>
      </span>
    </div>
  </form>
  <div class="row">
    <div class="operators lfloat">
      <?php echo smarty_function_partial(array('tpl'=>"img",'class'=>"active",'src'=>"widget/elisa.png",'indent'=>"      "),$_smarty_tpl);?>

      <?php echo smarty_function_partial(array('tpl'=>"img",'class'=>"active",'src'=>"widget/emt.png",'indent'=>"      "),$_smarty_tpl);?>

      <?php echo smarty_function_partial(array('tpl'=>"img",'class'=>"active",'src'=>"widget/tele2.png",'indent'=>"      "),$_smarty_tpl);?>

      <?php echo smarty_function_partial(array('tpl'=>"img",'src'=>"widget/movistar.png",'indent'=>"      "),$_smarty_tpl);?>

      <?php echo smarty_function_partial(array('tpl'=>"img",'src'=>"widget/nextel.png",'indent'=>"      "),$_smarty_tpl);?>

    </div>
    <div class="text textShadow rfloat">
      <span>Teenusepakkuja: Silver Company Ltd Klienditugi: <a href="javascript:void(0)">silvercoins@fortumo.com</a></span>
    </div>
  </div>
  <div class="row border-top acenter last">
    <span class="amount textShadow">319 Silver Coins = <span class="price">$21</span></span>
  </div>
</div>
<?php echo smarty_function_partial(array('tpl'=>"help",'indent'=>''),$_smarty_tpl);?>
<?php }} ?>