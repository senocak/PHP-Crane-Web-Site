<?php 
include("config.php");
if(empty($_GET['name']) || empty($_GET['email']) || empty($_GET['konu'])|| empty($_GET['message'])){
	echo "hata";
}else{
	$name = $_GET['name'];
	$email = $_GET['email'];
	$konu = $_GET['konu'];
	$mesaj = $_GET['message'];
	$tarih=date("d/m/Y");
	$gonder=mysql_query("insert into mesaj(isim,email,konu,mesaj,durum,tarih)values('$name','$email','$konu','$mesaj','0','$tarih')");
	if($gonder){
		echo "ok";
	}else{
		echo "hata";
	}
}
?>