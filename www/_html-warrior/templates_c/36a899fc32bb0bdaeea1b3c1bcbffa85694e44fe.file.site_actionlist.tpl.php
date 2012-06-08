<?php /* Smarty version Smarty 3.1-RC1, created on 2012-06-01 12:37:07
         compiled from "admin\templates\site_actionlist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26444fc88d43144302-66060876%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36a899fc32bb0bdaeea1b3c1bcbffa85694e44fe' => 
    array (
      0 => 'admin\\templates\\site_actionlist.tpl',
      1 => 1316092719,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26444fc88d43144302-66060876',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actionlist_opened' => 0,
    'build_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1-RC1',
  'unifunc' => 'content_4fc88d4316057',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fc88d4316057')) {function content_4fc88d4316057($_smarty_tpl) {?><div id="htmlwarrior__actionlist" class="htmlwarrior" style="left: <?php if ($_smarty_tpl->tpl_vars['actionlist_opened']->value){?>-200<?php }else{ ?>-2000<?php }?>px;">
  <div id="htmlwarrior__actionlist-inner">
    <div><a href="<?php echo $_smarty_tpl->tpl_vars['build_url']->value;?>
">Build</a></div>
    <div><a href="?multiply=1">Double text</a></div>
  </div>
</div><?php }} ?>