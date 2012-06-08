@title = "Widget forth view"
@layout = "widget"
<div id="header">
  <span class="caption">Full Version Upgrade</span>
  <a href="widget_1.html" id="previous" class="toggle">{partial tpl="img" src="widget/previous.png"}</a>
  <a href="javascript:void(0)" id="close">{partial tpl="img" src="widget/close.png"}</a>
  <a id="help" href="javascript:void(0)">Help</a>
</div>
{partial tpl="loader"}
<div id="mainInner">
  <div class="appImg">
    <div class="appImgInner">
      <div class="mask">{partial tpl="img" src="widget/img-mask.png"}</div>
      <div class="img">{partial tpl="img" src="widget/sample.png"}</div>
      <span class="text textShadow">App name</span>
    </div>
  </div>
  <form action="">
    <div class="phoneContent">
      <span class="desc textShadow">Purchase 'Full Version Upgrade' from Island Gaming for $1.99 to your mobile phone (+372) 56612389</span>
      <span class="input phone">
        <span class="inputInner phone"><input type="text" value="" name="" placeholder="Billing ZIP"/></span>
        <a href="widget_5.html" class="inputButton01 rfloat toggle"><span class="inputButton01-inner">OK</span></a>
      </span>
      <div class="remember agree textShadow">
        <label><input type="checkbox" name="agree" value="yes" /> I agree to the <a href="javascript:void(0)">Terms of Use</a></label>
      </div>
    </div>
  </form>
  <div class="row row02 border-top">
    <span class="textShadow">Charges must be authorized by the account holder and will be applied to your wireless bill. Messaging and data rates apply.</span>
  </div>
</div>