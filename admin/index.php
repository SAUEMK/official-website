<?php
ob_start();
session_start();
error_reporting(0);
include 'baglantii/baglan.php'; 

if(isset($_SESSION['kullanici'])){
$kullanicisor=$db->prepare("SELECT * from sauemk_yonetim where email=:mail");
$kullanicisor->execute(array(
'mail'=>$_SESSION['kullanici']
  ));
$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);

$yetki=$kullanicicek['statu'];

if ($yetki==0) {

 	header("location:adminic/adminindex.php");
}else{
	header("location:adminic/login.php");
}
}else{
	header("location:adminic/login.php");
}
?>
