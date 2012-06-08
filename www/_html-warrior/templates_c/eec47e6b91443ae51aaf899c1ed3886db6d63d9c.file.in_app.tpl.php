<?php /* Smarty version Smarty 3.1-RC1, created on 2012-06-01 12:39:57
         compiled from "C:\Users\Supa\Desktop\garbage\www\fortumo\templates\pages\in_app.tpl" */ ?>
<?php /*%%SmartyHeaderCode:129424fc88ded16c995-77168766%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eec47e6b91443ae51aaf899c1ed3886db6d63d9c' => 
    array (
      0 => 'C:\\Users\\Supa\\Desktop\\garbage\\www\\fortumo\\templates\\pages\\in_app.tpl',
      1 => 1333376730,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '129424fc88ded16c995-77168766',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty 3.1-RC1',
  'unifunc' => 'content_4fc88ded41f18',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fc88ded41f18')) {function content_4fc88ded41f18($_smarty_tpl) {?><?php if (!is_callable('smarty_function_partial')) include 'C:\Users\Supa\Desktop\garbage\www\_html-warrior\externals\smarty\libs\plugins\function.partial.php';
?>@title = "In-App Payments for Android"

<div class="content no-bg">
  <div class="content-inner no-padding">
    <div class="acenter bg-white">
      <h1 class="caption01">In-App Payments</h1>
      <h2 class="caption03">with one-click checkout, using mobile operator billing on any Android device </h2>
    </div>
    <div class="slogans slogans-web bg-white">
      <span>single items</span>
      <span>-</span>
      <span>virtual credits</span>
      <span>-</span>
      <span>subscription</span>
    </div>
    <div class="mobile-widget">
      <div class="box-spacer height-50"></div>
      <div class="box left">
        <div class="img">
          <?php echo smarty_function_partial(array('tpl'=>"img",'src'=>"data/in-app-first.png",'indent'=>"          "),$_smarty_tpl);?>

        </div>
        <div class="text">
          <h2 class="caption03">1-click checkout</h2>
          <p>No need to enter long credit card numbers. No need to register before making a payment. Hit "Pay" and the purchase is completed with just one click - <b>in less than 5 seconds.</b></p>
        </div>
      </div>
      <div class="box-spacer"></div>
      <div class="box right">
        <div class="img in-app-second">
          <?php echo smarty_function_partial(array('tpl'=>"img",'src'=>"data/in-app-second.png",'indent'=>"          "),$_smarty_tpl);?>

        </div>
        <div class="text">
          <h2 class="caption03">Mobile operator billing</h2>
          <p>Globally, <b>four times</b> more people have mobile phones than credit cards. In emerging markets, the difference can be ten-fold. That's why Fortumo's in-app purchasing uses <b>mobile operator billing</b> - so more people can pay!</p>
        </div>
      </div>
      <div class="box-spacer"></div>
      <div class="box left">
        <div class="img all-devices">
          <?php echo smarty_function_partial(array('tpl'=>"img",'src'=>"data/in-app-third.png",'indent'=>"          "),$_smarty_tpl);?>

        </div>
        <div class="text">
          <h2 class="caption03">On any Android device</h2>
          <p>Fortumo's in-app purchasing works on any Android device - <b>phones, tablets, e-readers…</b> with just one simple integration. </p>
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
              <p>You can accept payments from <b>61 countries</b> and <b>over 250 mobile operators</b>. Fortumo takes care of localization, compliance and tax management - so you won't have to.</p>
            </div>
          </div>
          <div class="group-right">
            <div class="rfloat">
              <?php echo smarty_function_partial(array('class'=>"img",'tpl'=>"img",'src'=>"base/answere02.png",'indent'=>"              "),$_smarty_tpl);?>

            </div>
            <div class="text">
              <h2 class="caption03">Self Service Setup, Live in Minutes</h2>
              <p>One quick <b>30-minute integration</b> & start getting revenue the next day. Why wait?</p>
            </div>
          </div>
          <div class="clear"></div>
        </div>
        <div class="group-content">
          <div class="group-left">
            <div class="lfloat">
              <?php echo smarty_function_partial(array('class'=>"img",'tpl'=>"img",'src'=>"base/fully-localized.png",'indent'=>"              "),$_smarty_tpl);?>

            </div>
            <div class="text">
              <h2 class="caption03">Fully Localized</h2>
              <p>… in <b>32 languages</b> means improved conversion rates anywhere where English is not the first language. </p>
            </div>
          </div>
          <div class="group-right">
            <div class="rfloat">
              <?php echo smarty_function_partial(array('class'=>"img",'tpl'=>"img",'src'=>"base/answere01.png",'indent'=>"              "),$_smarty_tpl);?>

            </div>
            <div class="text">
              <h2 class="caption03">Feature-Packed, yet Light</h2>
              <p>Single items. Virtual currencies. Non-consumable items. Volume discounts. All packed into a <b>lightweight, native-looking UI</b>.</p>
            </div>
          </div>
          <div class="clear"></div>
        </div>
        <div class="group-content">
          <div class="group-left">
            <div class="lfloat">
              <?php echo smarty_function_partial(array('class'=>"img qtip",'tpl'=>"img",'src'=>"base/offline.png",'indent'=>"              "),$_smarty_tpl);?>

            </div>
            <div class="text">
              <h2 class="caption03">No Data Connection Needed</h2>
              <p>You wouldn't expect your payment service to <b>work without data connection</b>, would you? But guess what - Fortumo does! So you would never miss out on an impulse purchase again*. </p>
            </div>
          </div>
          <div class="group-right">
            <div class="rfloat">
              <?php echo smarty_function_partial(array('class'=>"img",'tpl'=>"img",'src'=>"base/support.png",'indent'=>"              "),$_smarty_tpl);?>

            </div>
            <div class="text">
              <h2 class="caption03">Exceptional Support</h2>
              <p>We offer support and integration assistance over <b>phone, Skype, e-mail or on-site:</b> whenever it's needed, wherever you are.</p>
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
            <p>Fortumo has a global coverage by supporting over <b>200 mobile operators</b> in <b>61 countries</b>. In most countries, we support all mobile operators. Even prepaid users can pay.  See full list at <a href="javascript:void(0)">Coverage & Payouts</a> page. </p>
          </div>
          <div class="ptext">
            <span>Are there any setup of monthly fees?</span>
            <p><b>No.</b> Fortumo charges no fixed fees. There are no minimum monthly volume commitments either. Fortumo's commission is entirely made up by a small percentage added on top of mobile operator's share. </p>
          </div>
          <div class="ptext">
            <span>Is there a 70/30 revenue-sharing or does it differ by country?</span>
            <p>Payouts for mobile payments are set by mobile operators and they <b>differ by country</b>. They range from <b>>85%</b> of the price in countries with payment-friendly mobile operators to <b><50%</b> in emerging markets, where it's harder from mobile operators to collect money from users. See full list at  <a href="javascript:void(0)">Coverage & Payouts</a> page (or ask us to send you a proposal!).</p>
          </div>
          <div class="testimonial-content in-app">
            <div class="knowledge">
              <?php echo smarty_function_partial(array('class'=>"img",'tpl'=>"img",'src'=>"data/peter-vesterbacka.png",'indent'=>"              "),$_smarty_tpl);?>

              <div class="text">
                <span class="quotation-mark">“</span>
                <span class="text-inner">
                  <p>Mobile billing is great for in-app purchasing. Fortumo is one of the highest-flying birds in the mobile billing space because they've really nailed the user experience.</p>
                  <div class="clear"></div>
                  <span class="sign">Peter Vesterbacka</span>
                  <span class="position">Mighty Eagle, Rovio</span>
                </span>
                <span class="quotation-mark">”</span>
              </div>
            </div>
          </div>
          <div class="ptext">
            <span>Is the checkout flow different depending on device?</span>
            <p>Yes. Fortumo can automatically detect which device and browser you are using and adjust the flow accordingly. (Please click on a Fortumo payments button in the top part of the screen to see the Fortumo checkout flow. If you point your mobile browser to <a href="javascript:void(0)">http://m.fortumo.com</a>, you can see the mobile optimized flow.)</p>
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
                <li><span class="nr">1</span><span class="text"><b>Sign up</b> for free</span></li>
                <li><span class="nr">2</span><span class="text"><b>Download</b> the billing libary</span></li>
                <li><span class="nr">3</span><span class="text"><b>Integrate</b> it with your app</span></li>
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
      </div> <!-- Sms-questions-end -->
      <div class="line-content">
        <div class="dot-line dot-line02"></div>
        <div class="item">
          <div class="item-img">
            <?php echo smarty_function_partial(array('tpl'=>"img",'src'=>"base/percent.png",'indent'=>"            "),$_smarty_tpl);?>

            <span class="nr">80<span class="percent">%</span></span>
          </div>
          <div class="share">
            <span class="text">revenue sharing</span>
            <span>in some countries</span>
            <a href="javascript:void(0)">See full list ›</a>
          </div>
        </div>
        <div class="item">
          <div class="item-img">
            <?php echo smarty_function_partial(array('tpl'=>"img",'src'=>"base/percent.png",'indent'=>"            "),$_smarty_tpl);?>

            <span class="text">61</span>
          </div>
          <div class="share">
            <span class="text">countries</span>
            <span>Europe, USA, Asia, LatAm</span>
            <a href="javascript:void(0)">See all ›</a>
          </div>
        </div>
        <div class="clear"></div>
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