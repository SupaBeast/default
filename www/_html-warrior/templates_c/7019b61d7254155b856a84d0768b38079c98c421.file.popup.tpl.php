<?php /* Smarty version Smarty 3.1-RC1, created on 2012-06-01 12:39:58
         compiled from "C:\Users\Supa\Desktop\garbage\www\fortumo\templates\pages\popup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:98524fc88deef03297-05798888%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7019b61d7254155b856a84d0768b38079c98c421' => 
    array (
      0 => 'C:\\Users\\Supa\\Desktop\\garbage\\www\\fortumo\\templates\\pages\\popup.tpl',
      1 => 1334660285,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98524fc88deef03297-05798888',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1-RC1',
  'unifunc' => 'content_4fc88def0c799',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fc88def0c799')) {function content_4fc88def0c799($_smarty_tpl) {?><?php if (!is_callable('smarty_function_partial')) include 'C:\Users\Supa\Desktop\garbage\www\_html-warrior\externals\smarty\libs\plugins\function.partial.php';
?>@title = "API popup"
@layout = "popup"
  <div id="header">
    <?php echo smarty_function_partial(array('class'=>"img",'tpl'=>"img",'src'=>"base/fortumo-new.png",'indent'=>"    "),$_smarty_tpl);?>

    <h1 class="caption01">Request Info on Mobile Payments API</h1>
  </div>
  <div class="form-wrap">
    <form action="new">
    <div class="input-wrap lfloat">
      <div class="block">
        <label>Full name:</label>
        <input type="text" name="full-name" value="" />
      </div>
      <div class="block">
        <label>Email: <abbr title="required">*</abbr></label>
        <input type="text" name="full-name" value="" />
      </div>
      <div class="block">
        <label>Country:</label>
        <select>
          <option value="volvo">Estonia</option>
          <option value="saab">Russia</option>
        </select> 
      </div>
    </div>
    <div class="input-wrap rfloat">
      <div class="block">
        <label>Website:</label>
        <input type="text" name="full-name" value="" />
      </div>
      <div class="block">
        <label>Comapny:</label>
        <input type="text" name="full-name" value="" />
      </div>
      <div class="block radio-wrap">
        <label>Is your service live ?:</label>
        <span class="radio">
          <input type="radio" class="toggle" name="group2" value="Yes"/>
          <span>Yes</span>
        </span>
        <span class="radio">
          <input type="radio" class="toggle-close" name="group2" value="No"/>
          <span>No</span>
        </span>
      </div>
    </div>
    <div class="clear"></div>
    <div class="dot-line"></div>
    <div class="subject-wrap">
      <div class="block textarea lfloat">
        <label>What do you sell? How much does it cost?:</label>
        <textarea rows="2" cols="20"></textarea> 
      </div>
    </div>
    <div class="input-wrap lfloat hidden">
      <div class="block">
        <label>How many active users do you have?</label>
        <select>
          <option value="volvo">< 1 000</option>
          <option value="saab">1 000 - 100 000</option>
          <option value="saab">100 000 - 1 000 000</option>
          <option value="saab">Over 1 000 000</option>
        </select> 
      </div>
    </div>
    <div class="input-wrap rfloat hidden">
      <div class="block">
        <label>What countries are your users in?</label>
        <input type="text" name="full-name" value="" placeholder="USA, EST, RU etc" />
      </div>
    </div>
    <div class="clear"></div>
    <div class="button rfloat">
      <a href="javascript:void(0)" class="button03"><span class="button03-inner">SEND</span></a>
    </div>
    </form>
  </div><?php }} ?>