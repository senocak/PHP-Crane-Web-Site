<?php

$domain=$_SERVER['SERVER_NAME']; 
$licenseServer = "http://lisans.bilgimedya.com.tr/api.php";  
$ch = curl_init();
curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $licenseServer);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, "code=71b9b5bc1094ee6eaeae8253e787d654&domain=$domain");
$result= json_decode(curl_exec($ch), true);
curl_close($ch);
if($result['kod'] != 200) {
$html = "<table align='center' width='100%' style='padding:15px; border-color:#F00; border-style:solid; background-color:#FF6C70; font-size:50px; '><tr><td>$result[durum] : <b></b> </u>$result[aciklama]</u></td ></tr></table>";
die( $html );
}



$hostname = "canbervinc.com.tr";
$db_username = "canbervinc";
$db_password = "canbervinc";
$db_name = 'canbervinc';
if(!@mysql_connect($hostname,$db_username, $db_password)) die(mysql_error());
if(!@mysql_select_db($db_name)) die(mysql_error());
mysql_query("SET NAMES 'UTF8'");
mysql_query("SET character_set_connection = 'UTF8'");
mysql_query("SET character_set_client = 'UTF8'");
mysql_query("SET character_set_results = 'UTF8'");
$ayarlar=mysql_fetch_object(mysql_query("select * from ayarlar"));
define("Site_url","$ayarlar->site_url") ; 


session_start();
$_SESSION['dil'] = isset($_SESSION['dil']) ? $_SESSION['dil'] : "tr"; 
if($_SESSION['dil']==""){
	$_SESSION['dil']="tr";
}
if($_SESSION['dil']=="tr"){
	include("tr.php");	
}else{
	include("en.php");
}
function url_duzenle($text){ 
	$search = array(' ','ö','ü','ı','ğ','ç','ş','/','?','Ö','Ü','I','Ğ','Ç','Ş','&');
	$replace = array('_','o','u','i','g','c','s','_','_','o','u','i','g','c','s','_');
	$new_text = str_replace($search,$replace,trim($text));
	return $new_text;
}
function kucuk($text2){ 
	$search2 = array('A','B','C','Ç','D','E','F','G','H','I','İ','J','K','L','M','N','O','Ö','P','R','S','Ş','T','U','Ü','V','Y','Z','X','W');
	$replace2 = array('a','b','c','ç','d','e','f','g','h','ı','i','j','k','l','m','n','o','ö','p','r','s','ş','t','u','ü','v','y','z','x','w');
	$new_text2 = str_replace($search2,$replace2,trim($text2));
	return $new_text2;
}
?>