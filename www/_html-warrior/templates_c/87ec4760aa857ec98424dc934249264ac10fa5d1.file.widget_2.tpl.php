<?php /* Smarty version Smarty 3.1-RC1, created on 2012-06-08 16:44:21
         compiled from "C:\Users\Supa\default\www\fortumo\templates\pages\widget_2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:296334fd1ea9962f8a4-86798160%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87ec4760aa857ec98424dc934249264ac10fa5d1' => 
    array (
      0 => 'C:\\Users\\Supa\\default\\www\\fortumo\\templates\\pages\\widget_2.tpl',
      1 => 1339163048,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '296334fd1ea9962f8a4-86798160',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1-RC1',
  'unifunc' => 'content_4fd1ea9985c02',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fd1ea9985c02')) {function content_4fd1ea9985c02($_smarty_tpl) {?><?php if (!is_callable('smarty_function_partial')) include 'C:\Users\Supa\default\www\_html-warrior\externals\smarty\libs\plugins\function.partial.php';
?>@title = "Widget second view"
@layout = "widget"
<div id="header">
  <span class="caption">Enter your phone number</span>
  <a href="widget_1.html" id="previous" class="toggle"><?php echo smarty_function_partial(array('tpl'=>"img",'src'=>"widget/previous.png"),$_smarty_tpl);?>
</a>
  <a href="javascript:void(0)" id="close"><?php echo smarty_function_partial(array('tpl'=>"img",'src'=>"widget/close.png"),$_smarty_tpl);?>
</a>
  <a id="help" href="javascript:void(0)">Help</a>
</div>
<?php echo smarty_function_partial(array('tpl'=>"loader",'indent'=>''),$_smarty_tpl);?>

<div id="mainInner">
  <form action="">
    <div class="row top plusPadding">
      <span class="operatorSelect">
        <select>
          <option>Выбери оператора сети</option>
          <option>Astrakhan' GSM</option>
          <option>Tele2</option>
          <option>EMT</option>
          <option>Elisa</option>
        </select>
      </span>
    </div>
    <div class="plusPadding">
      <span class="input phone">
        <span class="inputInner phone"><input type="text" value="" name=""/></span>
        <a href="javascript:void(0)" class="inputButton01 rfloat toggle widget_3"><span class="inputButton01-inner">OK</span></a>
        <span class="nrHolder">(+372)</span>
      </span>
      <!--<div class="remember textShadow">
        <label><input type="checkbox" name="remember" value="yes" /> Remember my number</label>
      </div> -->
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