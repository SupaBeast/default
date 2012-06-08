<?php /* Smarty version Smarty 3.1-RC1, created on 2012-06-01 12:39:58
         compiled from "C:\Users\Supa\Desktop\garbage\www\fortumo\templates\pages\m_widget_4.tpl" */ ?>
<?php /*%%SmartyHeaderCode:256784fc88dee1e9ac9-60083641%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88535d96cf3d2dc296cb40a7fabcef1c66b64991' => 
    array (
      0 => 'C:\\Users\\Supa\\Desktop\\garbage\\www\\fortumo\\templates\\pages\\m_widget_4.tpl',
      1 => 1338301733,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '256784fc88dee1e9ac9-60083641',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1-RC1',
  'unifunc' => 'content_4fc88dee2b262',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fc88dee2b262')) {function content_4fc88dee2b262($_smarty_tpl) {?><?php if (!is_callable('smarty_function_partial')) include 'C:\Users\Supa\Desktop\garbage\www\_html-warrior\externals\smarty\libs\plugins\function.partial.php';
?>@title = "Widget forth view"
@layout = "widget"
<div id="header">
  <span class="caption">Full Version Upgrade</span>
  <a href="widget_1.html" id="previous" class="toggle"><?php echo smarty_function_partial(array('tpl'=>"img",'src'=>"widget/previous.png"),$_smarty_tpl);?>
</a>
  <a href="javascript:void(0)" id="close"><?php echo smarty_function_partial(array('tpl'=>"img",'src'=>"widget/close.png"),$_smarty_tpl);?>
</a>
  <a id="help" href="javascript:void(0)">Help</a>
</div>
<?php echo smarty_function_partial(array('tpl'=>"loader",'indent'=>''),$_smarty_tpl);?>

<div id="mainInner">
  <div class="appImg">
    <div class="appImgInner">
      <div class="mask"><?php echo smarty_function_partial(array('tpl'=>"img",'src'=>"widget/img-mask.png"),$_smarty_tpl);?>
</div>
      <div class="img"><?php echo smarty_function_partial(array('tpl'=>"img",'src'=>"widget/sample.png"),$_smarty_tpl);?>
</div>
      <span class="text textShadow">App name</span>
    </div>
  </div>
  <form action="">
    <div class="phoneContent">
      <span class="desc textShadow">Purchase 'Full Version Upgrade' from Island Gaming for $1.99 to your mobile phone (+372) 56612389</span>
      <span class="input phone">
        <span class="inputInner phone"><input type="text" value="" name="" placeholder="Billing ZIP"/></span>
        <a href="widget_5.html" class="inputButton01 rfloat toggle"><span class="inputButton01-inner">OK</span></a>
      </span>
      <div class="remember agree textShadow">
        <label><input type="checkbox" name="agree" value="yes" /> I agree to the <a href="javascript:void(0)">Terms of Use</a></label>
      </div>
    </div>
  </form>
  <div class="row row02 border-top">
    <span class="textShadow">Charges must be authorized by the account holder and will be applied to your wireless bill. Messaging and data rates apply.</span>
  </div>
</div><?php }} ?>