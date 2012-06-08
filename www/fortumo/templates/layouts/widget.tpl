<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
   "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="et">
  <head>
    {htmlwarrior_init}
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="style/reset.css" media="all" />
    <link rel="stylesheet" type="text/css" href="style/externals/widget.css" media="all" title="" />
    <link rel="stylesheet" type="text/css" href="style/externals/uniform.css" media="all" title="" />
    <link rel="stylesheet" type="text/css" href="style/widget-fonts/fonts.css" media="all" title="" />
    {htmlwarrior_plugins indent="    "}
    <title>{$title}</title>
  </head>
  <body>
    <div id="main">
      {$yield}
    </div><!-- #Container -->
    <div id="preload" class="hidden">
      {partial tpl="img" src="widget/loader-bg.png"}
    </div>
    {htmlwarrior_plugins position="bottom" indent="    "}
    {partial tpl=script file="externals/colorbox"}
    {partial tpl=script file="externals/uniform"}
    {partial tpl=script file="externals/widget"}
    {htmlwarrior_init position="bottom"}
  </body>
</html>