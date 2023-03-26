<?php
#---------------------------
# PHP Navigator 4.12.12
# dated: 20-07-2007
# edited: 06-10-2008
# Modified by: Paul Wratt,
# Melbourne,Australia
# web: phpnav.isource.net.nz
#---------------------------

@include_once("config.php");
@include_once("functions.php");

setcookies();

print "<script>";
if ($startpage=='') print "window.location.href='windows.php';";
elseif (file_exists("$startpage.php")) print "window.location.href='$startpage.php';";
elseif (file_exists("windows.php")) print "window.location.href='windows.php';";
print "</script>";