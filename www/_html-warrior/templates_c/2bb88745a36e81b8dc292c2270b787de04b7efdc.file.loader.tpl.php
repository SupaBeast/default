<?php /* Smarty version Smarty 3.1-RC1, created on 2012-06-08 15:05:51
         compiled from "C:/Users/Supa/default/www/fortumo/templates\partials\loader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:214564fd1ea9f97edf3-16227783%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2bb88745a36e81b8dc292c2270b787de04b7efdc' => 
    array (
      0 => 'C:/Users/Supa/default/www/fortumo/templates\\partials\\loader.tpl',
      1 => 1338370201,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '214564fd1ea9f97edf3-16227783',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1-RC1',
  'unifunc' => 'content_4fd1ea9f9955d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fd1ea9f9955d')) {function content_4fd1ea9f9955d($_smarty_tpl) {?><?php if (!is_callable('smarty_function_partial')) include 'C:\Users\Supa\default\www\_html-warrior\externals\smarty\libs\plugins\function.partial.php';
?><div class="loader hidden">
  <span class="text">Loading payment data</span>
  <span class="spiner"><?php echo smarty_function_partial(array('tpl'=>"img",'src'=>"widget/loader.gif"),$_smarty_tpl);?>
</span>
  <span class="powered">Powered by <span class="fontBold">fortumo</span></span>
</div><?php }} ?>