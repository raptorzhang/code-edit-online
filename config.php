<?php
#---------------------------
# PHP Navigator 4.12.20
# dated: 20-07-2007
# edited: 05-06-2011
# Modified by: Paul Wratt,
# Melbourne, Australia
# Auckland, New Zealand
# web: phpnav.isource.net.nz
#---------------------------
session_start();
#$homedir = $_SERVER['DOCUMENT_ROOT']; # not valid on every server installation
$homedir = $_SERVER['DOCUMENT_ROOT'];
//$homedir = "..";
		# Default directory.

$pathtype = "real";
		# type of path to display in address bar.
		# 'real' full OS path (of web server)
		# 'url' like web address (minus 'http://').
		# 'root' only paths in current web server url root, start is '/'.

$restrict_to_home = false;
		# Restrict access to home folder and below.
		
$user = "raptor";
		# login username

$passwd = "314159";
		# Login password
		
$enable_login = true;
//$enable_login = false;
		# Caution!! 'false' means everyone have access to your files
		# Caution!!  including creating PHP/ASP & using them!
		# Suggested: keep login, and get roFileWalker, install to same directory
		
$mode = "auto";
		# Can take three values 'auto', 'ajax' and 'normal'
		# If you don't know about this, select 'auto'.
		# 'auto' - Your browser compatibility will be automatically detected. (Recommended)
		
$compress = true;
//$compress = false;
		# Compress page using bzip2/gzip/deflate encoding. Recommended.

$cols = "auto";
		# Number of icon columns. Leave as auto for autodetection.
		# 5 best suited for 800x600 and 7 for 1024x768

$thumb = true;
		# Force thumbnail view for all supported images.
		# (This has no relation with the thumbnail in the left pane)

$max_edit_size = 150000000;
		# maximum file size that can be edited (in Bytes).

$word_wrap = "off";
		# word wrap on source editor (unable to toggle at the moment)
		# 'off' or 'virtual'
		
$EditableFiles = "php php4 php3 phtml phps conf cf sh shar csh ksh tcl cgi pl js txt inc html htm shtml css xml xsl ini inf cfg log nfo bat tex sql env example bak";
		# Editable Files

$HTMLfiles = "htm html phtml shtml";
		# Enabled file types for WYSIWYG HTML editor.

$allow_edit_any = true;
		# Allow source veiw of any file (asks like v3.2)

$allow_uploads = true;
		# allow files to be uploaded, use with care
		# 'true' or 'false'

$uploads = 10;
		# No. of files that can be uploaded at a time

$allow_downloads = true;
		# allow zip & download of files and folders
		# 'true' or 'false' 

$download_as_zip = false;
		# download original files or zip them first (not stored on server)
		# 'true' for zipped or 'false' for normal

$startpage = "";
		# default module to start with
		# '' default or 'windowsalt' or 'atari' 

$use_skin = "glassplate";
		# use different icons & images
		# '' for default
		# '42' for v4.2 icons
		# over ride specifics by setting any below

$use_icons = "";
		# '' use file icons in the default skin

$use_groups = "";
		# '' use 'groups' in the default 'skin.php'

$use_layout = "";
		# '' use interface icons in the default skin

$use_colors = "rounded";
		# '' use the default 'skin.css'

// from roFileWalker

$hide_these = array(
	"_*",
	"*.asp*",
	"fileman",
	"phpnav*",
	"navphp*",
	"*filewalker");
		# files and folders not to be displayed
		# NOTE: this can be an array or space separated string
		# "_*"          means any file or folder STARTING with '_'
		# "*.asp*"      means any file ENDING with '.asp' including 'file.aspx'
		# "navphp*"     means any file or folder STARTING with 'navphp' including 'navphp42.zip'
		# "*filewalker" means any folder ENDING with 'FileWalker' like 'dbFileWalker'

$hide_hack = true;
		# if 'false', force current folder path to be scanned for 'hide_these'
		# DANGEROUS!! if 'true', can see hidden directories by typing into address bar

// for navphp 4.42

$view_charset = "UTF-8";//
/*
Supported charsets:
Charset		Aliases		Description
ISO-8859-1	ISO8859-1	 Western European, Latin-1
ISO-8859-15	ISO8859-15	 Western European, Latin-9. Adds the Euro sign,
				 French and Finnish letters missing in Latin-1(ISO-8859-1).
UTF-8	 			 ASCII compatible multi-byte 8-bit Unicode.
cp866		ibm866, 866	 DOS-specific Cyrillic charset.
				 This charset is supported in 4.3.2.
cp1251		Windows-1251,	 Windows-specific Cyrillic charset.
		win-1251, 1251	 This charset is supported in 4.3.2.
cp1252		Windows-1252,	 Windows specific charset for Western European.
		1252
KOI8-R		koi8-ru, koi8r	 Russian. This charset is supported in 4.3.2.
BIG5		950		 Traditional Chinese, mainly used in Taiwan.
GB2312		936		 Simplified Chinese, national standard character set.
BIG5-HKSCS	 		 Big5 with Hong Kong extensions, Traditional Chinese.
Shift_JIS	SJIS, 932	 Japanese
EUC-JP		EUCJP		 Japanese
Note: Any other character sets are not recognized and ISO-8859-1 will be used instead.
*/
