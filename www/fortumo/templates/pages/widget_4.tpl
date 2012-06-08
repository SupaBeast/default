@title = "Widget second view"
@layout = "widget"
<div id="header">
  <span class="caption">Enter your phone number</span>
  <a href="widget_3.html" id="previous" class="toggle">{partial tpl="img" src="widget/previous.png"}</a>
  <a href="javascript:void(0)" id="close">{partial tpl="img" src="widget/close.png"}</a>
  <a id="help" href="javascript:void(0)">Help</a>
</div>
{partial tpl="loader"}
<div id="mainInner">
  <form action="">
    <div class="plusPadding">
      <span class="desc textShadow acenter">You were sent a PIN code. Please enter it below</span>
      <span class="input pin">
        <span class="inputInner phone"><input type="text" value="" name="" placeholder="Pin Code" class="acenter"/></span>
        <a href="javascript:void(0)" class="inputButton01 rfloat toggle widget_4"><span class="inputButton01-inner">OK</span></a>
      </span>
    </div>
  </form>
  <div class="row">
    <div class="operators">
      <span class="active">{partial tpl="img" src="widget/elisa.png"}</span>
      <span class="active">{partial tpl="img" src="widget/emt.png"}</span>
      <span class="active">{partial tpl="img" src="widget/tele2.png"}</span>
      <span class="active">{partial tpl="img" src="widget/movistar.png"}</span>
      <span class="active">{partial tpl="img" src="widget/nextel.png"}</span>
      <span class="active">{partial tpl="img" src="widget/movistar.png"}</span>
    </div>
  </div>
  <div class="row border-top acenter last">
    <span class="amount textShadow">319 Silver Coins = <span class="price">$21</span></span>
    <span class="serviceProvide">Teenusepakkuja: Silver Company Ltd Klienditugi: <a href="javascript:void(0)">silvercoins@fortumo.com</a></span>
  </div>
</div>
{partial tpl="help"}