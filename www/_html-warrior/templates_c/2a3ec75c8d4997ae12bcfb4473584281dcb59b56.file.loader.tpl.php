<?php /* Smarty version Smarty 3.1-RC1, created on 2012-06-01 12:37:08
         compiled from "C:/Users/Supa/Desktop/garbage/www/fortumo/templates\partials\loader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:232824fc88d446f37c1-13950807%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a3ec75c8d4997ae12bcfb4473584281dcb59b56' => 
    array (
      0 => 'C:/Users/Supa/Desktop/garbage/www/fortumo/templates\\partials\\loader.tpl',
      1 => 1338370201,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '232824fc88d446f37c1-13950807',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1-RC1',
  'unifunc' => 'content_4fc88d447879d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fc88d447879d')) {function content_4fc88d447879d($_smarty_tpl) {?><?php if (!is_callable('smarty_function_partial')) include 'C:\Users\Supa\Desktop\garbage\www\_html-warrior\externals\smarty\libs\plugins\function.partial.php';
?><div class="loader hidden">
  <span class="text">Loading payment data</span>
  <span class="spiner"><?php echo smarty_function_partial(array('tpl'=>"img",'src'=>"widget/loader.gif"),$_smarty_tpl);?>
</span>
  <span class="powered">Powered by <span class="fontBold">fortumo</span></span>
</div><?php }} ?>