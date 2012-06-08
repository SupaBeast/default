<?php /* Smarty version Smarty 3.1-RC1, created on 2012-06-01 12:39:52
         compiled from "C:\Users\Supa\Desktop\garbage\www\fortumo\templates\pages\404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:149894fc88de8632412-70303362%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f0f6efde117c724224add8bc12de71274c6a118' => 
    array (
      0 => 'C:\\Users\\Supa\\Desktop\\garbage\\www\\fortumo\\templates\\pages\\404.tpl',
      1 => 1336055736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '149894fc88de8632412-70303362',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1-RC1',
  'unifunc' => 'content_4fc88de86cb2b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fc88de86cb2b')) {function content_4fc88de86cb2b($_smarty_tpl) {?><?php if (!is_callable('smarty_function_partial')) include 'C:\Users\Supa\Desktop\garbage\www\_html-warrior\externals\smarty\libs\plugins\function.partial.php';
?>@title = "404"

<div class="content">
  <div class="content-inner">
    <div class="not-found">
      <div class="description">
        <h1>Oops!</h1>
        <h2>This is awkward.</h2>
        <p>You’re looking for something that doesn’t actually exist...</p>
        <a href="javascript:void(0)" class="button05"><span class="button05-inner">Try going to our homepage</span></a>
      </div>
      <div class="clouds"><?php echo smarty_function_partial(array('tpl'=>"img",'src'=>"base/404-clouds.png"),$_smarty_tpl);?>
</div>
      <div class="airplane"><?php echo smarty_function_partial(array('tpl'=>"img",'src'=>"base/404-airplane.png"),$_smarty_tpl);?>
</div>
    </div>
  </div>
</div><?php }} ?>