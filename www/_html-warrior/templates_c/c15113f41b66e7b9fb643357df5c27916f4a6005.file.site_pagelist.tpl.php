<?php /* Smarty version Smarty 3.1-RC1, created on 2012-06-08 15:05:45
         compiled from "admin\templates\site_pagelist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:296824fd1ea99ce9527-25791578%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c15113f41b66e7b9fb643357df5c27916f4a6005' => 
    array (
      0 => 'admin\\templates\\site_pagelist.tpl',
      1 => 1316092719,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '296824fd1ea99ce9527-25791578',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'template_list_opened' => 0,
    'site_filelist_page_edit_link' => 0,
    'site_filelist_layout_edit_link' => 0,
    'site_filelist_template_list' => 0,
    'var' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1-RC1',
  'unifunc' => 'content_4fd1ea99dab30',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fd1ea99dab30')) {function content_4fd1ea99dab30($_smarty_tpl) {?><div id="htmlwarrior__pagelist" class="htmlwarrior" style="left: <?php if ($_smarty_tpl->tpl_vars['template_list_opened']->value){?>-200<?php }else{ ?>-2000<?php }?>px;">
  <div id="htmlwarrior__pagelist-inner">
    <div style="padding: 2px 0;">
      <a href="/" style="font-size: 14px; color: #404040; text-decoration: none; font-weight: bold;">HTML Warrior</a>
    </div>
    <table style="color:black" class="htmlwarrior_templatelist">
      <tbody>
        <tr>
          <td colspan="2">
            edit <a href="<?php echo $_smarty_tpl->tpl_vars['site_filelist_page_edit_link']->value;?>
" class="htmlwarrior_templatelist_active">this page</a>
            or <a class="htmlwarrior_templatelist_active" href="<?php echo $_smarty_tpl->tpl_vars['site_filelist_layout_edit_link']->value;?>
">layout</a>
          </td>
        </tr>
        <tr>
          <td colspan="2" style="height: 7px"></td>
        </tr>
<?php  $_smarty_tpl->tpl_vars['var'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['site_filelist_template_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['var']->key => $_smarty_tpl->tpl_vars['var']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['var']->key;
?>
        <tr>
          <td style="padding-right: 10px;"><a <?php if ($_smarty_tpl->tpl_vars['var']->value['active']){?>class="htmlwarrior_templatelist_active"  <?php }?>href="<?php echo $_smarty_tpl->tpl_vars['var']->value['url'];?>
" style="font-weight:bold;"><?php echo $_smarty_tpl->tpl_vars['var']->value['page'];?>
</a></td>
          <td><a <?php if ($_smarty_tpl->tpl_vars['var']->value['active']){?>class="htmlwarrior_templatelist_active"  <?php }?> href="<?php echo $_smarty_tpl->tpl_vars['var']->value['edit_url'];?>
" style="">(edit)</a></td>
        </tr>
<?php }} ?>
      </tbody>
    </table>
  </div>
</div><?php }} ?>