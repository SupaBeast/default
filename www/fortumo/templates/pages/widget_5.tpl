@title = "Widget third view"
@layout = "widget"
<div id="header">
  <span class="caption">Transaction progress</span>
  <a href="javascript:void(0)" id="close">{partial tpl="img" src="widget/close.png"}</a>
  <a id="help" href="javascript:void(0)">Help</a>
</div>
{partial tpl="loader"}
<div id="mainInner">
  <div class="row top">
    <div class="msg success">
      <span class="textShadow">Transakcija uspešna obavljena!</span>
    </div>
  </div>
  <div class="row">
    <div class="msg error">
      <span class="textShadow">Something went wrong!</span>
    </div>
  </div>
  <div class="row acenter">
    <a href="javascript:void(0)" class="button01"><span class="button01-inner">Return to merchant</span></a>
  </div>
</div>
{partial tpl="help"}