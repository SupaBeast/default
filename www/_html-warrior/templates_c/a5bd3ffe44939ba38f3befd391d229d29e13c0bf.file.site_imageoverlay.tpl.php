<?php /* Smarty version Smarty 3.1-RC1, created on 2012-06-08 15:05:45
         compiled from "admin\templates\site_imageoverlay.tpl" */ ?>
<?php /*%%SmartyHeaderCode:190114fd1ea99dd0dc5-29760357%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5bd3ffe44939ba38f3befd391d229d29e13c0bf' => 
    array (
      0 => 'admin\\templates\\site_imageoverlay.tpl',
      1 => 1316092719,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '190114fd1ea99dd0dc5-29760357',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1-RC1',
  'unifunc' => 'content_4fd1ea99eac97',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fd1ea99eac97')) {function content_4fd1ea99eac97($_smarty_tpl) {?><div id="htmlwarrior__imageoverlaycontrols_wrap">
  <div id="htmlwarrior__imageoverlaycontrols_mousehook"><!-- --></div>
  <div id="htmlwarrior__imageoverlaycontrols" class="htmlwarrior" style="display: <?php if ($_COOKIE['htmlwarrior__imageoverlaycontrols_visible']==='true'){?>block<?php }else{ ?>none<?php }?>">
    <div id="htmlwarrior__imageoverlaycontrols-inner">
      
      <div class="htmlwarrior__imageoverlaycontrols-row">
        <div class="htmlwarrior__imageoverlaycontrols-caption">
          Opacity
        </div>
        <div id="htmlwarrior__imageoverlaycontrols-opacity-slider"></div>
      </div>
      
      <div class="htmlwarrior__imageoverlaycontrols-row">
        <div class="htmlwarrior__imageoverlaycontrols-caption">
          Position X
        </div>
        <div class="htmlwarrior__imageoverlaycontrols-mover htmlwarrior__imageoverlaycontrols-xmover">
          <div id="htmlwarrior__xmover-left" class="htmlwarrior__imageoverlaycontrols-mover-decrease"></div>
          <input id="htmlwarrior__imageoverlaycontrols-xmover-input" class="htmlwarrior__imageoverlaycontrols-mover-input" type="text" value="0" />
          <div id="htmlwarrior__xmover-right" class="htmlwarrior__imageoverlaycontrols-mover-increase"></div>
        </div>
      </div>

      <div class="htmlwarrior__imageoverlaycontrols-row">
        
        <div class="htmlwarrior__imageoverlaycontrols-caption">
          Position Y
        </div>
        <div class="htmlwarrior__imageoverlaycontrols-mover htmlwarrior__imageoverlaycontrols-ymover">
          <div id="htmlwarrior__ymover-down" class="htmlwarrior__imageoverlaycontrols-mover-decrease"></div>
          <input id="htmlwarrior__imageoverlaycontrols-ymover-input" class="htmlwarrior__imageoverlaycontrols-mover-input" type="text" value="0" />
          <div id="htmlwarrior__ymover-up" class="htmlwarrior__imageoverlaycontrols-mover-increase"></div>
        </div>
      </div>

      <div class="htmlwarrior__imageoverlaycontrols-row">
        
        <div class="htmlwarrior__imageoverlaycontrols-caption">
          Lock?
        </div>
        <div class="c">
          <input type="checkbox" />
        </div>
      </div>

      <div class="htmlwarrior__imageoverlaycontrols-row-buttons">
        <a id="htmlwarrior__imageoverlaycontrols_toggle" class="htmlwarrior__imageoverlaycontrols-row-button" href="javascript:void(0)">toggle</a>
        <a id="htmlwarrior__imageoverlaycontrols_reset" class="htmlwarrior__imageoverlaycontrols-row-button" href="javascript:void(0)">reset</a>
      </div>
    </div>
  </div>
</div>
<!--

--><?php }} ?>