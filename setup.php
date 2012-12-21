<?php

require_once(dirname(__FILE__) . DIRECTORY_SEPARATOR .'rfc6238/base32static.php');
session_start();
$secretcode = '12345678901234567890';
$_SESSION['secretcode'] = $secretcode;
;


$url = "http://".$_SERVER["HTTP_HOST"].str_replace(basename($_SERVER["SCRIPT_NAME"]),"",$_SERVER["SCRIPT_NAME"])."setupinitdevice.php?PHPSESSID=".$_COOKIE["PHPSESSID"];


?>
<h1> Please navigate by link below to setup 2 factor auth </h1>
<img src="setupqrcodeimage.php?PHPSESSID=<?php print $_COOKIE["PHPSESSID"]?>" />
<br/>

<a href="<?php print $url?>">This is the same link for debug</a>



