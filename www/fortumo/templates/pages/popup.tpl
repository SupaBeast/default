@title = "API popup"
@layout = "popup"
  <div id="header">
    {partial class="img" tpl="img" src="base/fortumo-new.png"}
    <h1 class="caption01">Request Info on Mobile Payments API</h1>
  </div>
  <div class="form-wrap">
    <form action="new">
    <div class="input-wrap lfloat">
      <div class="block">
        <label>Full name:</label>
        <input type="text" name="full-name" value="" />
      </div>
      <div class="block">
        <label>Email: <abbr title="required">*</abbr></label>
        <input type="text" name="full-name" value="" />
      </div>
      <div class="block">
        <label>Country:</label>
        <select>
          <option value="volvo">Estonia</option>
          <option value="saab">Russia</option>
        </select> 
      </div>
    </div>
    <div class="input-wrap rfloat">
      <div class="block">
        <label>Website:</label>
        <input type="text" name="full-name" value="" />
      </div>
      <div class="block">
        <label>Comapny:</label>
        <input type="text" name="full-name" value="" />
      </div>
      <div class="block radio-wrap">
        <label>Is your service live ?:</label>
        <span class="radio">
          <input type="radio" class="toggle" name="group2" value="Yes"/>
          <span>Yes</span>
        </span>
        <span class="radio">
          <input type="radio" class="toggle-close" name="group2" value="No"/>
          <span>No</span>
        </span>
      </div>
    </div>
    <div class="clear"></div>
    <div class="dot-line"></div>
    <div class="subject-wrap">
      <div class="block textarea lfloat">
        <label>What do you sell? How much does it cost?:</label>
        <textarea rows="2" cols="20"></textarea> 
      </div>
    </div>
    <div class="input-wrap lfloat hidden">
      <div class="block">
        <label>How many active users do you have?</label>
        <select>
          <option value="volvo">< 1 000</option>
          <option value="saab">1 000 - 100 000</option>
          <option value="saab">100 000 - 1 000 000</option>
          <option value="saab">Over 1 000 000</option>
        </select> 
      </div>
    </div>
    <div class="input-wrap rfloat hidden">
      <div class="block">
        <label>What countries are your users in?</label>
        <input type="text" name="full-name" value="" placeholder="USA, EST, RU etc" />
      </div>
    </div>
    <div class="clear"></div>
    <div class="button rfloat">
      <a href="javascript:void(0)" class="button03"><span class="button03-inner">SEND</span></a>
    </div>
    </form>
  </div>