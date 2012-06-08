<?php /* Smarty version Smarty 3.1-RC1, created on 2012-06-08 15:05:49
         compiled from "C:\Users\Supa\default\www\fortumo\templates\pages\mobile_payments.tpl" */ ?>
<?php /*%%SmartyHeaderCode:230334fd1ea9d0aff73-87062477%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0afa65bae531a54ae6daba978a136fae48f43758' => 
    array (
      0 => 'C:\\Users\\Supa\\default\\www\\fortumo\\templates\\pages\\mobile_payments.tpl',
      1 => 1338541593,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '230334fd1ea9d0aff73-87062477',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1-RC1',
  'unifunc' => 'content_4fd1ea9d35254',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fd1ea9d35254')) {function content_4fd1ea9d35254($_smarty_tpl) {?><?php if (!is_callable('smarty_function_partial')) include 'C:\Users\Supa\default\www\_html-warrior\externals\smarty\libs\plugins\function.partial.php';
?>@title = "Mobile Web Payments"

<div class="content no-bg">
  <div class="content-inner no-padding">
    <div class="acenter bg-white">
      <h1 class="caption01">Mobile Payments for Web Apps</h1>
      <h2 class="caption03">Let your users pay and seamlessly charge the purchase to their mobile operator bill</h2>
    </div>
    <div class="slogans slogans-web bg-white">
      <span>online browser</span>
      <span>-</span>
      <span>mobile web</span>
      <span>-</span>
      <span>html5 apps</span>
    </div>
    <div class="mobile-widget">
      <div class="box-spacer height-50"></div>
      <div class="box left">
        <div class="img macbook">
          <?php echo smarty_function_partial(array('tpl'=>"img",'src'=>"data/macbook-new02.png",'indent'=>"          "),$_smarty_tpl);?>

          <a class="fortumo-pay" href="widget_1.html"></a>
        </div>
        <div class="text">
          <h2 class="caption03">In any browser. Online...</h2>
          <p>… in desktop, Facebook or web apps. User clicks "Pay", sees a page with payment instructions and uses her mobile phone to complete purchase -- all in less than 20 seconds!</p>
        </div>
      </div>
      <div class="box-spacer"></div>
      <div class="box right">
        <div class="img">
          <?php echo smarty_function_partial(array('tpl'=>"img",'src'=>"data/android-widget-img.png",'indent'=>"          "),$_smarty_tpl);?>

        </div>
        <div class="text">
          <h2 class="caption03">In your pocket...</h2>
          <p>… in any mobile browser and in HTML5 apps. When detecting that user is on a mobile device, Fortumo's payment pages automatically morph themselves into slick, small-screen-optimized version of our checkout flow.</p>
        </div>
      </div>
      <div class="box-spacer"></div>
      <div class="box left">
        <div class="img all-devices">
          <?php echo smarty_function_partial(array('tpl'=>"img",'src'=>"data/all-devices.png",'indent'=>"          "),$_smarty_tpl);?>

        </div>
        <div class="text">
          <h2 class="caption03">… or within a mobile app.</h2>
          <p>Fortumo's HTML5-checkout can be called from any mobile app, on any platform, in a 100% transparent browser window -- without the user even leaving the app.</p>
        </div>
      </div>
      <div class="box-spacer"></div>
    </div>
    <div class="bg-wrap">
      <div class="dot-line"></div>
      <div class="sms-features">
        <div class="group-content">
          <div class="group-left">
            <div class="lfloat">
              <?php echo smarty_function_partial(array('class'=>"img",'tpl'=>"img",'src'=>"base/answere03.png",'indent'=>"              "),$_smarty_tpl);?>

            </div>
            <div class="text">
              <h2 class="caption03">Global Coverage</h2>
              <p>You can accept payments from XX countries, from over 200 mobile operators, in over 45 currencies. Fortumo takes care of localization, regulatory compliance and all local tax management -- so you won't have to. </p>
            </div>
          </div>
          <div class="group-right">
            <div class="rfloat">
              <?php echo smarty_function_partial(array('class'=>"img",'tpl'=>"img",'src'=>"base/answere04.png",'indent'=>"              "),$_smarty_tpl);?>

            </div>
            <div class="text">
              <h2 class="caption03">No Setup Fees, No Monthly Fees</h2>
              <p>And no minimum volume commitments. Just a simple % per each transaction.</p>
            </div>
          </div>
          <div class="clear"></div>
        </div>
        <div class="group-content">
          <div class="group-left">
            <div class="lfloat">
              <?php echo smarty_function_partial(array('class'=>"img",'tpl'=>"img",'src'=>"base/answere02.png",'indent'=>"              "),$_smarty_tpl);?>

            </div>
            <div class="text">
              <h2 class="caption03">Self Service Setup, Live in Minutes</h2>
              <p>One quick integration & start getting revenue from 61 countries the next day.</p>
            </div>
          </div>
          <div class="group-right">
            <div class="rfloat">
              <?php echo smarty_function_partial(array('class'=>"img",'tpl'=>"img",'src'=>"base/answere01.png",'indent'=>"              "),$_smarty_tpl);?>

            </div>
            <div class="text">
              <h2 class="caption03">Exceptional Support</h2>
              <p>We offer support and integration assistance over phone, Skype, e-mail or on-site: whenever it's needed, wherever you are. </p>
            </div>
          </div>
          <div class="clear"></div>
        </div>
      </div>
      <div class="dot-line"></div>
      <div class="sms-questions-wrap">
        <div class="sms-questions">
          <div class="ptext first">
            <span>Which countries are supported?</span>
            <p>Fortumo has a global coverage by supporting over 200 mobile operators in XX countries. In most countries, we support all mobile operators. Even prepaid users can pay. We're adding about 2-4 countries to our coverage each quarter.</p>
            <p>See the full list of currently supported countries and mobile operators at our <a href="javascript:void(0)">Coverage & Payouts</a> page.</p>
          </div>
          <div class="ptext">
            <span>Are there any fixed fees? </span>
            <p>Fortumo charges no setup fees and no monthly fees. There are also no minimum monthly volume commitments. We feel that it's only fair for us to make money when our customers are making money. Thus, Fortumo only charges a small % of each transaction. </p>
          </div>
          <div class="ptext">
            <span>What are the payouts?</span>
            <p>Payouts differ by country. They can range from over 85% in countries with payment-friendly mobile operators to 50% in emerging markets, where it's harder from mobile operators to collect money from users.</p>
            <p>See the full list of payouts at our <a href="javascript:void(0)">Coverage & Payouts</a> page. We also offer volume-based pricing for merchants who already generate significant revenue.</p>
          </div>
          <div class="ptext">
            <span>What's the checkout flow like?</span>
            <p>Please click on a Fortumo payments button in the top part of the screen to see the Fortumo checkout flow. If you point your mobile browser to http://m.fortumo.com, you can see the mobile optimized flow. The cool thing is that you only need to do one integration for both -- we can automatically detect which device and browser you are using and adjust the flow accordingly.</p>
          </div>
          <div class="ptext">
            <span>Can I set it up myself or do I need to sign a contract first?</span>
            <p>Fortumo has a super-easy sign-up and integration process. All you need is to create a Fortumo account, accept our T&C, configure your service, copy-and-paste payment code to your page and go live. Of course, you can also do it the "old-fashioned" way, <a href="javascript:void(0)">contact us</a>, sign a contract and ask us to set everything up for you. </p>
          </div>
          <div class="ptext">
            <span>I have questions and I need to speak with a live person. </span>
            <p>Sure! Feel free to drop us an e-mail at <a href="mailto:support@fortumo.com">support@fortumo.com</a> or check the bottom of the page to see if our Live Support is online. We will call or e-mail you back within a few hours.</p>
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
                <li><span class="nr">1</span><span class="text">Set up your payments service <a class="link" href="http://fortumo.com/pay-by-mobile/start">online</a></span></li>
                <li><span class="nr">2</span><span class="text">Paste Fortumo's pay-by-mobile button to your site. See <a class="link" href="http://developers.fortumo.com/projects/documentation/wiki/Pay-by-Mobile_Widget">instructions</a></span></li>
                <li><span class="nr">3</span><span class="text last">Go live!</span></li>
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
      </div> <!-- Sms-questions-end -->
      <div class="dot-line"></div>
      <div class="testimonials-small">
        <div class="group first">
          <?php echo smarty_function_partial(array('class'=>"img",'tpl'=>"img",'src'=>"data/travian.png",'indent'=>"          "),$_smarty_tpl);?>

          <div class="text">
            <p>Travian has integrated Fortumo <b>in addition</b> to their existing payment providers not least because Fortumo has <b>super-easy integration.</b></p>
          </div>
        </div>
        <div class="group">
          <?php echo smarty_function_partial(array('class'=>"img",'tpl'=>"img",'src'=>"data/topeleven.png",'indent'=>"          "),$_smarty_tpl);?>

          <div class="text">
            <p>Top Eleven Football Manager uses  Fortumo for selling credits in their number one online game because no-one has comparable <b>coverage in emerging markets.</b></p>
          </div>
        </div>
        <div class="group">
          <?php echo smarty_function_partial(array('class'=>"img",'tpl'=>"img",'src'=>"data/paymentwall.png",'indent'=>"          "),$_smarty_tpl);?>

          <div class="text">
            <p>Paymentwall is using Fortumo as their primary mobile payments provider in a number of countries because Fortumo has superior <b>conversion rates.</b></p>
          </div>
        </div>
      </div>
      <div class="dot-line"></div>
      <div class="button-content button-content02">
        <a href="javascript:void(0)" class="button01"><span class="button01-inner">Sign Up ›</span></a>
        <span class="footer-text">
          <span class="text">for a <b>free developer account</b> today & get access to all of our SDKs, APIs and widgets.</span>
          <span><b>61 253</b> developers from <b>120</b> countries already signed up!</span>
        </span>
      </div>
    </div>
  </div>
</div><?php }} ?>