<?php /* Smarty version Smarty 3.1-RC1, created on 2012-06-08 15:05:45
         compiled from "C:/Users/Supa/default/www/fortumo/templates\partials\img.tpl" */ ?>
<?php /*%%SmartyHeaderCode:182784fd1ea99884621-35432194%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81fd7a1c113899d6a304cfb4633789d1ab67b5ea' => 
    array (
      0 => 'C:/Users/Supa/default/www/fortumo/templates\\partials\\img.tpl',
      1 => 1316092752,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '182784fd1ea99884621-35432194',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'onclick' => 0,
    'aclass' => 0,
    'src' => 0,
    'alt' => 0,
    'class' => 0,
    'id' => 0,
    'nodimension' => 0,
    'width' => 0,
    'height' => 0,
    'align' => 0,
    'border' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1-RC1',
  'unifunc' => 'content_4fd1ea999a8ec',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fd1ea999a8ec')) {function content_4fd1ea999a8ec($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['href']->value)||isset($_smarty_tpl->tpl_vars['onclick']->value)){?><a href="<?php if (isset($_smarty_tpl->tpl_vars['href']->value)){?><?php echo $_smarty_tpl->tpl_vars['href']->value;?>
<?php }else{ ?>javascript:void(0)<?php }?>"<?php if (isset($_smarty_tpl->tpl_vars['onclick']->value)){?> onclick="<?php echo $_smarty_tpl->tpl_vars['onclick']->value;?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['aclass']->value)){?> class="<?php echo $_smarty_tpl->tpl_vars['aclass']->value;?>
"<?php }?>><?php }?><img src="images/<?php echo $_smarty_tpl->tpl_vars['src']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['alt']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['alt']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['class']->value){?>class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
" <?php }?><?php if ($_smarty_tpl->tpl_vars['id']->value){?>id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" <?php }?><?php if (!$_smarty_tpl->tpl_vars['nodimension']->value){?> width="<?php echo $_smarty_tpl->tpl_vars['width']->value;?>
" height="<?php echo $_smarty_tpl->tpl_vars['height']->value;?>
" <?php }?><?php if ($_smarty_tpl->tpl_vars['align']->value){?>style="<?php if ($_smarty_tpl->tpl_vars['align']->value=='center'){?>display:block;margin-left:auto;margin-right:auto;<?php }else{ ?>float: <?php echo $_smarty_tpl->tpl_vars['align']->value;?>
<?php }?>" <?php }?><?php if (isset($_smarty_tpl->tpl_vars['border']->value)){?>border="<?php echo $_smarty_tpl->tpl_vars['border']->value;?>
" <?php }?>/><?php if (isset($_smarty_tpl->tpl_vars['href']->value)||isset($_smarty_tpl->tpl_vars['onclick']->value)){?></a><?php }?><?php }} ?>