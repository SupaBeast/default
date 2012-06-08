@title = "Widget second view"
@layout = "widget"
<div id="header">
  <span class="caption">Enter your phone number</span>
  <a href="widget_1.html" id="previous" class="toggle">{partial tpl="img" src="widget/previous.png"}</a>
  <a href="javascript:void(0)" id="close">{partial tpl="img" src="widget/close.png"}</a>
  <a id="help" href="javascript:void(0)">Help</a>
</div>
<div class="loader hidden">
  <ul class="steps">
    <li>
      <span class="icon">{partial tpl="img" src="widget/done.png"}</span>
      <span class="status">SMS Primljeno</span>
      <div class="clear"></div>
    </li>
    <li>
      <span class="icon">{partial tpl="img" src="widget/loader-small.gif"}</span>
      <span class="status">Potvrda poslata</span>
      <div class="clear"></div>
    </li>
    <li>
      <span class="icon">{partial tpl="img" src="widget/on-hold.png"}</span>
      <span class="status">Kompletiranje transakcije</span>
      <div class="clear"></div>
    </li>
    <li>
      <span class="icon">{partial tpl="img" src="widget/error.png"}</span>
      <span class="status">Something went wrong</span>
      <div class="clear"></div>
    </li>
  </ul>
</div>
<div id="mainInner">
  <form action="">
    <div class="row top">
      <span class="operatorSelect">
        <select>
          <option>Выбери оператора сети</option>
          <option>Astrakhan' GSM</option>
          <option>Tele2</option>
          <option>EMT</option>
          <option>Elisa</option>
        </select>
      </span>
    </div>
    <div>
      <span class="input phone">
        <span class="inputInner phone"><input type="text" value="" name=""/></span>
        <a href="javascript:void(0)" class="inputButton01 rfloat toggle widget_3"><span class="inputButton01-inner">OK</span></a>
        <span class="nrHolder">(+372)</span>
      </span>
      <!--<div class="remember textShadow">
        <label><input type="checkbox" name="remember" value="yes" /> Remember my number</label>
      </div> -->
    </div>
  </form>
  <div class="row">
    <div class="operators lfloat">
      {partial tpl="img" class="active" src="widget/elisa.png"}
      {partial tpl="img" class="active" src="widget/emt.png"}
      {partial tpl="img" class="active" src="widget/tele2.png"}
      {partial tpl="img" src="widget/movistar.png"}
      {partial tpl="img" src="widget/nextel.png"}
    </div>
    <div class="text textShadow rfloat">
      <span>Teenusepakkuja: Silver Company Ltd Klienditugi: <a href="javascript:void(0)">silvercoins@fortumo.com</a></span>
    </div>
  </div>
  <div class="row border-top acenter last">
    <span class="amount textShadow">319 Silver Coins = <span class="price">$21</span></span>
  </div>
</div>
{partial tpl="help"}