<?php /* Smarty version Smarty 3.1-RC1, created on 2012-06-01 12:39:54
         compiled from "C:\Users\Supa\Desktop\garbage\www\fortumo\templates\pages\api_new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:293214fc88dea0c1c18-52829725%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1731d5adbb6b5c62d3f838da7466dd8f83d3ecf0' => 
    array (
      0 => 'C:\\Users\\Supa\\Desktop\\garbage\\www\\fortumo\\templates\\pages\\api_new.tpl',
      1 => 1334840847,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '293214fc88dea0c1c18-52829725',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1-RC1',
  'unifunc' => 'content_4fc88dea46110',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fc88dea46110')) {function content_4fc88dea46110($_smarty_tpl) {?><?php if (!is_callable('smarty_function_partial')) include 'C:\Users\Supa\Desktop\garbage\www\_html-warrior\externals\smarty\libs\plugins\function.partial.php';
?>@title = "API Page"
<div class="content">
  <div class="content-inner">
    <div class="features">
      <div class="api-desc new">
        <h1 class="caption01">API</h1>
        <span class="slogans-web">for Developers and Aggregators</span>
        <span class="text">Enabling to easily integrate <b>mobile operator billing</b> with any <b>app, game or web-service.</b></span>
      </div>
      <div class="features-img">
        <?php echo smarty_function_partial(array('class'=>"img",'tpl'=>"img",'src'=>"data/api-features.png",'indent'=>"        "),$_smarty_tpl);?>

        <a class="api" href="javascript:void(0)"><?php echo smarty_function_partial(array('tpl'=>"img",'src'=>"data/api.png"),$_smarty_tpl);?>
</a>
        <a class="mobile-payments-api" href="javascript:void(0)"><?php echo smarty_function_partial(array('tpl'=>"img",'src'=>"data/mobile-payments-api.png"),$_smarty_tpl);?>
</a>
      </div>
      <div class="col col03 col04 col10">
        <div class="row01">
          <a href="javascript:vodi(0)" class="caption04">Mobile Payments API</a>
        </div>
        <div class="row02">
          <span>Simplified API interface for integrating mobile operator billing with any app or web service</span>
        </div>
        <div class="row03">
          <span class="middle">Direct carrier billing + PSMS</span>
        </div>
        <div class="row04">
          <span>Mobile operator billing in 61 countries</span>
        </div>
        <div class="row05">
          <a class="button03 askit" href="popup.html"><span class="button03-inner">Select</span></a>
        </div>
      </div>
      <div class="col col03 col05 col10">
        <div class="row01">
          <a href="javascript:vodi(0)" class="caption04">Premium SMS API</a>
        </div>
        <div class="row02">
          <span>Powerful Premium SMS API for aggreagators, gateways, content & entertainment companies</span>
        </div>
        <div class="row03">
          <span>MO & MT PSMS with async mode, custom keywords etc.</span>
        </div>
        <div class="row04">
          <span>Turn-key PSMS connectivity with next-day activation in 61 countries</span>
        </div>
        <div class="row05">
          <a class="button03" href="javascript:void(0)"><span class="button03-inner">Select</span></a>
        </div>
      </div>
    </div>
    <div class="dot-line"></div>
    <div class="offers">
      <div class="group-content">
        <div class="group-left">
          <div class="lfloat">
            <?php echo smarty_function_partial(array('class'=>"img",'tpl'=>"img",'src'=>"base/answere03.png",'indent'=>"            "),$_smarty_tpl);?>

          </div>
          <div class="text">
            <h2 class="caption03">Global Coverage</h2>
            <p>You can accept payments from <b>61 countries</b> and <b>over 250 mobile operators</b>. Fortumo takes care of localization, compliance and tax management - so you won't have to.</p>
          </div>
        </div>
        <div class="group-right">
          <div class="rfloat">
            <?php echo smarty_function_partial(array('class'=>"img",'tpl'=>"img",'src'=>"base/answere04.png",'indent'=>"            "),$_smarty_tpl);?>

          </div>
          <div class="text">
            <h2 class="caption03">No Setup Fees, No Monthly Fees</h2>
            <p>And no minimum volume commitments. Just a simple % per each transaction. We only make money when you are making money!</p>
          </div>
        </div>
        <div class="clear"></div>
      </div>
      <div class="group-content">
        <div class="group-left">
          <div class="lfloat">
            <?php echo smarty_function_partial(array('class'=>"img",'tpl'=>"img",'src'=>"base/answere02.png",'indent'=>"            "),$_smarty_tpl);?>

          </div>
          <div class="text">
            <h2 class="caption03">Self Service Setup, Live in Minutes</h2>
            <p>One quick <b>30-minute integration</b> & start getting revenue the next day. Why wait?</p>
          </div>
        </div>
        <div class="group-right">
          <div class="rfloat">
            <?php echo smarty_function_partial(array('class'=>"img",'tpl'=>"img",'src'=>"base/answere01.png",'indent'=>"            "),$_smarty_tpl);?>

          </div>
          <div class="text">
            <h2 class="caption03">Exceptional Support</h2>
            <p>We offer support and integration assistance over <b>phone, Skype, e-mail or on-site:</b> whenever it's needed, wherever you are.</p>
          </div>
        </div>
        <div class="clear"></div>
      </div>
    </div>
    <div class="clear"></div>
    <div class="dot-line"></div>
    <div class="faq-questions-wrap api">
      <div class="faq-questions">
        <div class="ptext first">
          <span>Which countries are supported?</span>
          <p>Fortumo has a global coverage by supporting over <b>200 mobile operators</b> in <b>61 countries</b>. In most countries, we support all mobile operators. Even prepaid users can pay.  See full list at <a href="javascript:void(0)">Coverage & Payouts</a> page. </p>
        </div>
        <div class="ptext">
          <span>Are there any setup of monthly fees?</span>
          <p><b>No.</b> Fortumo charges no fixed fees. There are no minimum monthly volume commitments either. Fortumo's commission is entirely made up by a small percentage added on top of mobile operator's share. </p>
        </div>
        <div class="ptext">
          <span>How long does integration take?</span>
          <p>Fortumo has a <b>super-easy sign-up and integration</b> process that usually takes anywhere from <b>15 minutes to a few hours</b> to complete. All you need is to create a Fortumo account, accept our T&amp;C, configure your service, follow <a href="javascript:void(0)">integration instructions</a> and go live. Of course, you can also do it the 'old-fashioned' way, <a href="javascript:void(0)">contact us</a>, sign a contract and ask us to set everything up for you.</p>
        </div>
        <div class="ptext">
          <span>I have questions and I need to speak with a live person.</span>
          <p>Sure! Feel free to drop us an e-mail at <a href="javascript:void(0)">support@fortumo.com></a> or check the bottom of the page to see if our Live Support is online. We will call or e-mail you back shortly!</p>
        </div>
      </div>
      <div id="sidebar">
        <div class="white">
          <div class="integration">
            <h2 class="caption03">Integration Docs</h2>
            <div class="text">
              <ul>
                <li><a href="http://developers.fortumo.com/projects/documentation/wiki/Pay-by-Mobile_Widget">Integration Guidelines</a></li>
                <li><a href="http://fortumo.com/pay-by-mobile/start">Self-Service Setup</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="setup">
          <h2 class="caption03">How to Set it Up?</h2>
          <div class="setup-inner">
            <ol>
              <li><span class="nr">1</span><span class="text"><b>Set up</b> and <b>configure</b> your payments service <b>online</b></span></li>
              <li><span class="nr">2</span><span class="text">Set up a script on your server that communicates with Fortumo through HTTP protocol (<a href="javascript:void(0)">see specification</a>)</span></li>
              <li><span class="nr">3</span><span class="text">Deploy the <b>marketing information</b>, either manually or using XML API</span></li>
              <li><span class="nr">4</span><span class="text last">Go live!</span></li>
            </ol>
          </div>
        </div>
      </div>
      <div class="other-services">
        <div class="white">
          <div class="integration">
            <h2 class="caption03">Other Fortumo Services</h2>
            <div class="text">
              <ul>
                <li><a href="javascript:void(0)">Mobile Payments API</a></li>
                <li><a href="javascript:void(0)">In-App Purchasing for Android</a></li>
                <li><a href="javascript:void(0)">Basic Premium SMS</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="clear"></div>
    </div> <!-- faq-questions-end -->
    <div class="dot-line"></div>
    <div class="testimonial-content">
      <div class="testimonial">
        <span class="quotation-mark">“</span><span class="text">They’ve really nailed the user experience!</span><span class="quotation-mark">”</span>
      </div>
      <div class="testimonial">
        <span class="quotation-mark">“</span><span class="text">No-one monetizes better in emerging markets</span><span class="quotation-mark">”</span>
      </div>
      <div class="testimonial">
        <span class="quotation-mark">“</span><span class="text">Surprisingly fast and seamless integration</span><span class="quotation-mark">”</span>
      </div>
      <div class="developers developers02">
        <a href="javascript:void(0)"><?php echo smarty_function_partial(array('tpl'=>"img",'src'=>"data/rovio.png"),$_smarty_tpl);?>
</a>
        <a href="javascript:void(0)"><?php echo smarty_function_partial(array('tpl'=>"img",'src'=>"data/popcap.png"),$_smarty_tpl);?>
</a>
        <a href="javascript:void(0)"><?php echo smarty_function_partial(array('tpl'=>"img",'src'=>"data/digital-chocolate.png"),$_smarty_tpl);?>
</a>
        <a href="javascript:void(0)"><?php echo smarty_function_partial(array('tpl'=>"img",'src'=>"data/badoo.png"),$_smarty_tpl);?>
</a>
        <a href="javascript:void(0)"><?php echo smarty_function_partial(array('tpl'=>"img",'src'=>"data/alawar.png"),$_smarty_tpl);?>
</a>
        <a href="javascript:void(0)"><?php echo smarty_function_partial(array('tpl'=>"img",'src'=>"data/top.png"),$_smarty_tpl);?>
</a>
        <div class="clear"></div>
      </div>
    </div>
    <div class="dot-line"></div>
    <div class="button-content button-content02">
      <a href="javascript:void(0)" class="button01"><span class="button01-inner">Sign Up ›</span></a>
      <span class="footer-text">
        <span class="text">for a <b>free developer account</b> today & get access to all of our SDKs, APIs and widgets.</span>
        <span>(<b>61 253</b> developers from <b>120</b> countries already signed up!)</span>
      </span>
    </div>
  </div>
</div><?php }} ?>