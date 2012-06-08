<?php /* Smarty version Smarty 3.1-RC1, created on 2012-06-01 12:37:06
         compiled from "C:/Users/Supa/Desktop/garbage/www/fortumo/templates\partials\img.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19954fc88d42a4e544-59371425%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70e903f9d3c1b3505843ab57be6bf4939228c2e8' => 
    array (
      0 => 'C:/Users/Supa/Desktop/garbage/www/fortumo/templates\\partials\\img.tpl',
      1 => 1316092752,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19954fc88d42a4e544-59371425',
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
  'unifunc' => 'content_4fc88d42b3188',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fc88d42b3188')) {function content_4fc88d42b3188($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['href']->value)||isset($_smarty_tpl->tpl_vars['onclick']->value)){?><a href="<?php if (isset($_smarty_tpl->tpl_vars['href']->value)){?><?php echo $_smarty_tpl->tpl_vars['href']->value;?>
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