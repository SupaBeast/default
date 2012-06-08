@title = "Widget fifth view"
@layout = "widget"
<div id="header">
  <span class="caption">Full Version Upgrade</span>
  <a href="widget_2.html" id="previous" class="toggle">{partial tpl="img" src="widget/previous.png"}</a>
  <a href="javascript:void(0)" id="close">{partial tpl="img" src="widget/close.png"}</a>
  <a id="help" href="javascript:void(0)">Help</a>
</div>
{partial tpl="loader"}
<div id="mainInner">
  <div class="row row03">
    <span class="textShadow">To confirm the purchase, please send a text message with: <span class="point">TXT to 1311</span></span>
  </div>
  <div class="row acenter plusPadding">
    <span class="smsWaiting">
      <span class="icon">{partial tpl="img" src="widget/loader-content.gif"}</span>
      <span class="smsText textShadow">Waiting for SMS</span>
    </span>
  </div>
  <div class="row border-top acenter">
    <span class="amount textShadow">319 Silver Coins = <span class="price">$21</span></span>
  </div>
  <div class="row border-top acenter last">
    <span class="legalText textShadow">Legal text: Coste del mensaje X,XX€ IVA Incluido. Electronic Corporate Solutions para Fortumo. n.º atn clte. 902599327. s@fortumo.com Apdo. correos 61010 CP. 28036 Madrid. Servicio de ocio y entretenimiento disponible en España para abonados de Movistar, Vodafone y Orange </span>
    <span class="serviceProvide">Teenusepakkuja: Silver Company Ltd Klienditugi: <a href="javascript:void(0)">silvercoins@fortumo.com</a></span>
  </div>
</div>
{partial tpl="help"}