<?php /* Smarty version Smarty 3.1-RC1, created on 2012-06-07 12:47:34
         compiled from "C:\Users\Supa\Desktop\garbage\www\fortumo\templates\pages\widget_2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:306564fc88d4a1e91d4-79807399%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8de445bdc52c297d2b89b9690e8661e04cf855b3' => 
    array (
      0 => 'C:\\Users\\Supa\\Desktop\\garbage\\www\\fortumo\\templates\\pages\\widget_2.tpl',
      1 => 1339062445,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '306564fc88d4a1e91d4-79807399',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1-RC1',
  'unifunc' => 'content_4fc88d4a34140',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fc88d4a34140')) {function content_4fc88d4a34140($_smarty_tpl) {?><?php if (!is_callable('smarty_function_partial')) include 'C:\Users\Supa\Desktop\garbage\www\_html-warrior\externals\smarty\libs\plugins\function.partial.php';
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
<div class="loader hidden">
  <ul class="steps">
    <li>
      <span class="icon"><?php echo smarty_function_partial(array('tpl'=>"img",'src'=>"widget/done.png"),$_smarty_tpl);?>
</span>
      <span class="status">SMS Primljeno</span>
      <div class="clear"></div>
    </li>
    <li>
      <span class="icon"><?php echo smarty_function_partial(array('tpl'=>"img",'src'=>"widget/loader-small.gif"),$_smarty_tpl);?>
</span>
      <span class="status">Potvrda poslata</span>
      <div class="clear"></div>
    </li>
    <li>
      <span class="icon"><?php echo smarty_function_partial(array('tpl'=>"img",'src'=>"widget/on-hold.png"),$_smarty_tpl);?>
</span>
      <span class="status">Kompletiranje transakcije</span>
      <div class="clear"></div>
    </li>
    <li>
      <span class="icon"><?php echo smarty_function_partial(array('tpl'=>"img",'src'=>"widget/error.png"),$_smarty_tpl);?>
</span>
      <span class="status">Something went wrong</span>
      <div class="clear"></div>
    </li>
  </ul>
</div>
<div id="mainInner">
  <form action="">
    <div class="row top">
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
    <div>
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