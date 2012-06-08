<?php /* Smarty version Smarty 3.1-RC1, created on 2012-06-06 12:46:17
         compiled from "C:/Users/Supa/Desktop/garbage/www/_html-warrior/admin/templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:210604fcf26e9481468-88724968%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'babf642220f2186f7727aee6da823a6ed1b135c7' => 
    array (
      0 => 'C:/Users/Supa/Desktop/garbage/www/_html-warrior/admin/templates\\index.tpl',
      1 => 1316092719,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '210604fcf26e9481468-88724968',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'txt' => 0,
    'access_log' => 0,
    'var' => 0,
    'access_log_site' => 0,
    'files' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1-RC1',
  'unifunc' => 'content_4fcf26e9b9857',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fcf26e9b9857')) {function content_4fcf26e9b9857($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
   "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="et">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['path_code'];?>
/admin/style/reset.css" media="all" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['path_code'];?>
/admin/style/_style.css" media="all" title="" />
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['config']->value['path_code'];?>
/admin/style/jquery-ui.css" media="all" title="" />
    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="icon" href="favicon.png" type="image/png" />
    <title>HTML Warrior</title>
  </head>
  <body>

    <div id="header">
      <div class="rfloat">
        <div><input type="text" id="filter" class="filter" value="<?php echo $_smarty_tpl->tpl_vars['txt']->value['admin_search'];?>
"
              onclick="if(this.value=='<?php echo $_smarty_tpl->tpl_vars['txt']->value['admin_search'];?>
'){ this.value=''; }"
              onblur="if(this.value==''){ this.value='<?php echo $_smarty_tpl->tpl_vars['txt']->value['admin_search'];?>
'; }" /></div>
        <script type="text/javascript">
          var filter = document.getElementById("filter");
          filter.focus();
        </script>
      </div>
      <h1 class="logo sidefloat">HTML Warrior</h1>
    </div>

    <div id="newsite">
      <form action="<?php echo $_smarty_tpl->tpl_vars['config']->value['path_code'];?>
/orb.php">
        <input type="hidden" name="class" value="site" />
        <input type="hidden" name="action" value="create" />
        <input type="hidden" name="redirect" value="1" />

        <div>
          <?php echo $_smarty_tpl->tpl_vars['txt']->value['admin_create_site'];?>
:
          <select name="donor">
            <option value="default">default</option>
            <option value="newsletter">newsletter</option>
          </select>

          <input type="text" name="site_name" value="<?php echo $_smarty_tpl->tpl_vars['txt']->value['admin_new_site_name'];?>
"
                  onclick="if(this.value=='<?php echo $_smarty_tpl->tpl_vars['txt']->value['admin_new_site_name'];?>
'){ this.value=''; }"
                  onblur="if(this.value==''){ this.value='<?php echo $_smarty_tpl->tpl_vars['txt']->value['admin_new_site_name'];?>
'; }" />

          <button><span><?php echo $_smarty_tpl->tpl_vars['txt']->value['admin_create'];?>
</span></button>
        </div>
      </form>
    </div>

    <div id="content">
      <div class="col col01">
        <h1><?php echo $_smarty_tpl->tpl_vars['txt']->value['admin_page_access_log'];?>
</h1>
<?php  $_smarty_tpl->tpl_vars['var'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['access_log']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['var']->key => $_smarty_tpl->tpl_vars['var']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['var']->key;
?>
        <div class="item"><a href="<?php echo $_smarty_tpl->tpl_vars['var']->value['url'];?>
" project="<?php echo $_smarty_tpl->tpl_vars['var']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['var']->value['url_wo_slash'];?>
</a></div>
<?php }} ?>
      </div>

      <div class="col col01">
         <h1><?php echo $_smarty_tpl->tpl_vars['txt']->value['admin_site_access_log'];?>
</h1>
<?php  $_smarty_tpl->tpl_vars['var'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['access_log_site']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['var']->key => $_smarty_tpl->tpl_vars['var']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['var']->key;
?>
        <div class="item"><a href="<?php echo $_smarty_tpl->tpl_vars['var']->value;?>
" project="<?php echo $_smarty_tpl->tpl_vars['var']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['var']->value;?>
</a></div>
<?php }} ?>
      </div>

      <div class="col col01">
         <h1><?php echo $_smarty_tpl->tpl_vars['txt']->value['admin_all_sites'];?>
</h1>

<?php  $_smarty_tpl->tpl_vars['var'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['var']->key => $_smarty_tpl->tpl_vars['var']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['var']->key;
?>
<?php if (strpos($_smarty_tpl->tpl_vars['var']->value["name"],"_")!==0&&$_smarty_tpl->tpl_vars['var']->value["type"]=="dir"&&strpos($_smarty_tpl->tpl_vars['var']->value["name"],"-files")===false&&strpos($_smarty_tpl->tpl_vars['var']->value["name"],"-failid")===false&&strpos($_smarty_tpl->tpl_vars['var']->value["name"],".")===false){?>
        <div class="item"><a href="<?php echo $_smarty_tpl->tpl_vars['var']->value['name'];?>
/index.html" project="<?php echo $_smarty_tpl->tpl_vars['var']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['var']->value['name'];?>
</a></div>
<?php }?>
<?php }} ?>
      </div>
    </div>

    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['path_code'];?>
/admin/scripts/externals/jquery.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['path_code'];?>
/admin/scripts/externals/jquery-ui.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['config']->value['path_code'];?>
/admin/scripts/general.js"></script>
  </body>
</html><?php }} ?>