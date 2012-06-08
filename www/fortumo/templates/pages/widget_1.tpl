@title = "Widget first view"
@layout = "widget"
<div id="header">
  <span class="caption">Pay-by-Mobile</span>
  <span id="logo" >{partial tpl="img" src="widget/fortumo-logo.png"}</span>
  <a href="javascript:void(0)" id="close">{partial tpl="img" src="widget/close.png"}</a>
  <a id="help" href="javascript:void(0)">Help</a>
</div>
{partial tpl="loader"}
<div id="mainInner">
  <ul class="list">
    <li>
      <label>
        <span class="radio"><input type="radio" name="select" value="" /></span>
        33 Silver Supermegacool Coins za 29,90 RSD
      </label>
      <div class="clear"></div>
    </li>
    <li>
      <label>
        <span class="radio"><input type="radio" name="select" value="" /></span>
        66 Silver  Supermegacool Coins za 39,90 RSD
      </label>
      <div class="clear"></div>
    </li>
    <li>
      <label>
        <span class="radio"><input type="radio" name="select" value="" /></span>
        132 Silver Supermegacool  Coins za 49,90 RSD
      </label>
      <div class="clear"></div>
    </li>
    <li class="last">
      <label>
        <span class="radio"><input type="radio" name="select" value="" /></span>
        198 Silver Supermegacool  Coins za 59,90 RSD
      </label>
      <div class="clear"></div>
    </li>
  </ul>
  <div class="row noOverflow">
    <div class="country">
      <span>{partial tpl="img" src="widget/flag.png"}</span>
      <a href="javascript:void(0)" class="countryChange">Change country</a>
      <span class="countrySelect hidden">
        <select>
          <option>Estonia</option>
          <option>USA</option>
          <option>Germany</option>
          <option>United Kingdom</option>
          <option>Norway</option>
          <option>Switzerland</option>
          <option>Bosnia and Herzegovina</option>
          <option>Estonia</option>
          <option>USA</option>
          <option>Germany</option>
          <option>United Kingdom</option>
          <option>Norway</option>
          <option>Switzerland</option>
          <option>Bosnia and Herzegovina</option>
          <option>Estonia</option>
          <option>USA</option>
          <option>Germany</option>
          <option>United Kingdom</option>
          <option>Norway</option>
          <option>Switzerland</option>
          <option>Bosnia and Herzegovina</option>
          <option>Estonia</option>
          <option>USA</option>
          <option>Germany</option>
          <option>United Kingdom</option>
          <option>Norway</option>
          <option>Switzerland</option>
          <option>Bosnia and Herzegovina</option>
          <option>Estonia</option>
          <option>USA</option>
          <option>Germany</option>
          <option>United Kingdom</option>
          <option>Norway</option>
          <option>Switzerland</option>
          <option>Bosnia and Herzegovina</option>
        </select>
      </span>
      <div class="clear"></div>
    </div>
    <a href="javascript:void(0)" class="button01 rfloat toggle widget_2"><span class="button01-inner">OK</span></a>
    <div class="clear"></div>
  </div>
  <div class="clear"></div>
  <div class="row border-top">
    <div class="operators lfloat">
      {partial tpl="img" class="active" src="widget/elisa.png"}
      {partial tpl="img" class="active" src="widget/emt.png"}
      {partial tpl="img" class="active" src="widget/tele2.png"}
      {partial tpl="img" src="widget/movistar.png"}
      {partial tpl="img" src="widget/nextel.png"}
    </div>
    <div class="text rfloat">
      <span>Teenusepakkuja: Silver Company Ltd Klienditugi: <a href="javascript:void(0)">silvercoins@fortumo.com</a></span>
    </div>
    <div class="clear"></div>
  </div>
  <div class="row border-top last">
    <span class="legalText textShadow">Legal text: Coste del mensaje X,XX€ IVA Incluido. Electronic Corporate Solutions para Fortumo. n.º atn clte. 902599327. s@fortumo.com Apdo. correos 61010 CP. 28036 Madrid. Servicio de ocio y entretenimiento disponible en España para abonados de Movistar, Vodafone y Orange </span>
  </div>
</div>
{partial tpl="help"}