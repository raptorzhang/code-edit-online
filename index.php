<?php

@include_once("config.php");
@include_once("functions.php");

setcookies();

print "<script>";
if ($startpage=='') print "window.location.href='windows.php';";
elseif (file_exists("$startpage.php")) print "window.location.href='$startpage.php';";
elseif (file_exists("windows.php")) print "window.location.href='windows.php';";
print "</script>";
