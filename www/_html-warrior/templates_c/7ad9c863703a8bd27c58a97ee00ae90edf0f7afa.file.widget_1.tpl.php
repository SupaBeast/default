<?php /* Smarty version Smarty 3.1-RC1, created on 2012-06-08 17:05:16
         compiled from "C:\Users\Supa\default\www\fortumo\templates\pages\widget_1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:101314fd1ea9f69c8a2-06835088%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ad9c863703a8bd27c58a97ee00ae90edf0f7afa' => 
    array (
      0 => 'C:\\Users\\Supa\\default\\www\\fortumo\\templates\\pages\\widget_1.tpl',
      1 => 1339164314,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '101314fd1ea9f69c8a2-06835088',
  'function' => 
  array (
  ),
  'version' => 'Smarty 3.1-RC1',
  'unifunc' => 'content_4fd1ea9f8da0b',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fd1ea9f8da0b')) {function content_4fd1ea9f8da0b($_smarty_tpl) {?><?php if (!is_callable('smarty_function_partial')) include 'C:\Users\Supa\default\www\_html-warrior\externals\smarty\libs\plugins\function.partial.php';
?>@title = "Widget first view"
@layout = "widget"
<div id="header">
  <span class="caption">Pay-by-Mobile</span>
  <span id="logo" ><?php echo smarty_function_partial(array('tpl'=>"img",'src'=>"widget/fortumo-logo.png"),$_smarty_tpl);?>
</span>
  <a href="javascript:void(0)" id="close"><?php echo smarty_function_partial(array('tpl'=>"img",'src'=>"widget/close.png"),$_smarty_tpl);?>
</a>
  <a id="help" href="javascript:void(0)">Help</a>
</div>
<?php echo smarty_function_partial(array('tpl'=>"loader",'indent'=>''),$_smarty_tpl);?>

<div id="mainInner">
  <ul class="list">
    <li>
      <label>
        <span class="radio"><input type="radio" name="select" value="" /></span>
        33 Silver Supermegacool Coins za 29,90 RSD
      </label>
      <div class="clear"></div>
    </li>
    <li>
      <label>
        <span class="radio"><input type="radio" name="select" value="" /></span>
        66 Silver  Supermegacool Coins za 39,90 RSD
      </label>
      <div class="clear"></div>
    </li>
    <li>
      <label>
        <span class="radio"><input type="radio" name="select" value="" /></span>
        132 Silver Supermegacool  Coins za 49,90 RSD
      </label>
      <div class="clear"></div>
    </li>
    <li class="last">
      <label>
        <span class="radio"><input type="radio" name="select" value="" /></span>
        198 Silver Supermegacool  Coins za 59,90 RSD
      </label>
      <div class="clear"></div>
    </li>
  </ul>
  <div class="row noOverflow">
    <div class="country">
      <span><?php echo smarty_function_partial(array('tpl'=>"img",'src'=>"widget/flag.png"),$_smarty_tpl);?>
</span>
      <a href="javascript:void(0)" class="countryChange">Change country</a>
      <span class="countrySelect hidden">
        <select>
          <option>Estonia</option>
          <option>USA</option>
          <option>Germany</option>
          <option>United Kingdom</option>
          <option>Norway</option>
          <option>Switzerland</option>
          <option>Bosnia and Herzegovina</option>
          <option>Estonia</option>
          <option>USA</option>
          <option>Germany</option>
          <option>United Kingdom</option>
          <option>Norway</option>
          <option>Switzerland</option>
          <option>Bosnia and Herzegovina</option>
          <option>Estonia</option>
          <option>USA</option>
          <option>Germany</option>
          <option>United Kingdom</option>
          <option>Norway</option>
          <option>Switzerland</option>
          <option>Bosnia and Herzegovina</option>
          <option>Estonia</option>
          <option>USA</option>
          <option>Germany</option>
          <option>United Kingdom</option>
          <option>Norway</option>
          <option>Switzerland</option>
          <option>Bosnia and Herzegovina</option>
          <option>Estonia</option>
          <option>USA</option>
          <option>Germany</option>
          <option>United Kingdom</option>
          <option>Norway</option>
          <option>Switzerland</option>
          <option>Bosnia and Herzegovina</option>
        </select>
      </span>
      <div class="clear"></div>
    </div>
    <a href="javascript:void(0)" class="button01 rfloat toggle widget_2"><span class="button01-inner">OK</span></a>
    <div class="clear"></div>
  </div>
  <div class="clear"></div>
  <div class="row border-top">
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
  <div class="row border-top last">
    <span class="legalText textShadow">Legal text: Coste del mensaje X,XX€ IVA Incluido. Electronic Corporate Solutions para Fortumo. n.º atn clte. 902599327. s@fortumo.com Apdo. correos 61010 CP. 28036 Madrid. Servicio de ocio y entretenimiento disponible en España para abonados de Movistar, Vodafone y Orange </span>
    <span class="serviceProvide">Teenusepakkuja: Silver Company Ltd Klienditugi: <a href="javascript:void(0)">silvercoins@fortumo.com</a></span>
  </div>
</div>
<?php echo smarty_function_partial(array('tpl'=>"help",'indent'=>''),$_smarty_tpl);?>
<?php }} ?>