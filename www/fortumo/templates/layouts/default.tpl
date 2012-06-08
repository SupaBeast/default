<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
   "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="et">
  <head>
    {htmlwarrior_init}
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="style/reset.css" media="all" />
    <link rel="stylesheet" type="text/css" href="style/style.css" media="all" title="" />
    <link rel="stylesheet" type="text/css" href="style/fonts/fonts.css" media="all" title="" />
    <link rel="stylesheet" type="text/css" href="style/externals/colorbox.css" media="all" title="" />
    <link rel="stylesheet" type="text/css" href="style/externals/custom-colorbox.css" media="all" title="" />
    <link rel="stylesheet" type="text/css" href="style/externals/uniform.css" media="all" title="" />
    <link rel="stylesheet" type="text/css" href="style/externals/animation.css" media="all" title="" />
    <link rel="stylesheet" type="text/css" href="style/print.css" media="print" title="" />
    <link rel="stylesheet" type="text/css" href="style/externals/ipad.css" media="only screen and (max-device-width: 1024px)" />
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Vibur" type="text/css" />
    {htmlwarrior_plugins indent="    "}
    <title>{$title}</title>
  </head>
  <body {if $page=="_index"}class="overflow"{/if}>
    <div id="background">{partial tpl="img" src="base/bg.jpg"}</div>
    <div id="header">
      <div id="header-inner">
        <a id="logo" href="_index.html">{partial tpl="img" src="base/logo.png"}</a>
        <div id="nav">
          <ul>
            <li><a {if $page == "index"}class="active" {/if}href="javascript:void(0)">About</a></li>
            <li><a href="javascript:void(0)">Features</a></li>
            <li><a href="javascript:void(0)">Countries</a></li>
            <li><a href="javascript:void(0)">Support</a></li>
            <li><a href="javascript:void(0)">Blog</a></li>
            <li><a href="javascript:void(0)" class="red">Register</a></li>
            <li><a href="javascript:void(0)" class="red">Sign In</a></li>
          </ul>
        </div>
        <div id="login">
          <span class="info">Loged in as: <a class="account" href="javascript:void(0)">Fortumo</a></span>
          <div class="menu">
            <ul>
              <li><a href="javascript:void(0)">Profile</a></li>
              <li><a href="javascript:void(0)">Payot Configuration</a></li>
              <li><a href="javascript:void(0)">Users</a></li>
              <li class="dot-line"></li>
              <li><a href="javascript:void(0)">New account</a></li>
              <li class="dot-line"></li>
              <li><a class="logout" href="javascript:void(0)">Log out</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div><!-- #header -->
    <div id="container">
      {$yield}
    </div><!-- #Container -->
    <div id="footer" {if $page=="_index" || $page=="404"}class="index"{/if}>
      <div id="footer-inner">
        <ul id="footer-nav">
          <li><span>&copy; 2012 Fortumo</span></li>
          <li><a href="#">Terms of Service</a></li>
          <li><a href="#">Affiliate</a></li>
          <li><a href="#">support@fortumo.com</a></li>
        </ul>
        <div class="social">
          <a href="javascript:void(0)"><img src="images/data/facebook.png" alt="" title=""  width="32" height="32" /></a>
          <a href="javascript:void(0)"><img src="images/data/twitter.png" alt="" title=""  width="32" height="32" /></a>
        </div>
        <form action="">
          <div class="lang">
            <select class="lang-menu">
              <option>eesti</option>
              <option>inglise</option>
              <option>español</option>
              <option>русский</option>
            </select>
          </div>
        </form>
      </div>
    </div>
    {htmlwarrior_plugins position="bottom" indent="    "}
    {partial tpl=script file="general"}
    {partial tpl=script file="externals/uniform"}
    {partial tpl=script file="externals/colorbox"}
    {partial tpl=script file="externals/jquery.cycle"}
    {partial tpl=script file="externals/jquery.qtip"}
    {htmlwarrior_init position="bottom"}
  </body>
</html>