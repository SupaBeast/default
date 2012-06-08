<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
   "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="et">
  <head>
    {htmlwarrior_init}
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="style/externals/api-popup.css" media="all" title="" />
    <link rel="stylesheet" type="text/css" href="style/fonts/fonts.css" media="all" title="" />
    {htmlwarrior_plugins indent="    "}
    <title>{$title}</title>
  </head>
  <body>
    <div id="api-popup">
      {$yield}
    </div><!-- #Container -->
    {htmlwarrior_plugins position="bottom" indent="    "}
    {partial tpl=script file="externals/api.popup"}
    {partial tpl=script file="externals/colorbox"}
    {htmlwarrior_init position="bottom"}
  </body>
</html>