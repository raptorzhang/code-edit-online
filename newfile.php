<?php
#---------------------------
# PHP Navigator 3.2 (4.0)
# dated: 03-8-2006
# Coded by: Cyril Sebastian,
# Kerala,India
# web: navphp.sourceforge.net
#---------------------------
# PHP Navigator 4.12.20
# dated: 20-07-2007
# edited: 07-06-2011
# Modified by: Paul Wratt
# Melbourne, Australia
# Auckland, New Zealand
# web: phpnav.isource.net.nz
#---------------------------

$dir     = @$_REQUEST['dir'];
$file    = @$_REQUEST['file'];
$change  = @$_REQUEST['change'];
$ajax    = isset($_REQUEST['ajax']);
$details = isset($_REQUEST['details']);

$file   = urldecode($file);
$change = urldecode($change);
$dir    = urldecode($dir);

include_once("config.php");
include_once("functions.php");

getcookies();

include_once("skin.php");

authenticate();	//user login

$chmode=0666;
$newfile_template = "";
$newfile_extension = strtolower(substr(strrchr($change, "."),1));
if($newfile_extension=="php"){
  $newfile_template = @file_get_contents("newfiles/php with html.blank");
  $chmode=0777;
}
if($newfile_extension=="htm" || $newfile_extension=="html"){
  $newfile_template = @file_get_contents("newfiles/html.blank");
}

chdir($dir);

$reply=0;

if(file_exists($change)) $msg="Error: File or folder '$change' already exists!";
elseif(fopen($change,"w")) {
  chmod($change,$chmode);
  file_put_contents($change,$newfile_template);
  $msg="New file '$change' created";
  $reply=1;}
else $msg="Error: Can't create new file '$change'!";

if($ajax)
{
	expired();
	print"|$reply|$msg|";
	if($reply) {
	  if (!$details) filestatus($change)."|";
	  if ($details) filedetails($change)."|";
	}
}