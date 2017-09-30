<?php

ob_start();
session_start();
error_reporting(0);

include 'baglan.php';



/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/


if (isset($_POST['girisyap'])) {

 $kullanici=$_POST['kullanici'];
 $sifre=md5(sha1(md5($_POST['sifre'])));


if ($kullanici && $sifre) {
	$kullanicisor=$db->prepare("SELECT * from sauemk_yonetim where email=:ad and sifre=:sifre");
	$kullanicisor->execute(array(
		'ad'=>$kullanici,
		'sifre'=>$sifre
		));

$say=$kullanicisor->rowCount();

if ($say>0) {

	$_SESSION['kullanici'] =$kullanici ;
	
	header('Location:../adminic/adminindex.php');
}
else{
	header('Location:../adminic/login.php?durum=no');
}
}

}


/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/





/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/


if (isset($_POST['hesapekle'])) {

	$uploads_dir='../../img/accountimg';

	@$tmp_name=$_FILES['foto']["tmp_name"];
	@$name=$_FILES['foto']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir,6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

function rasgeleSifre()
{
 $sifre = ''; //başlangıç değeri boş olarak ayarlanıyor.
 for($i=0;$i<21;$i++)
 {
   switch(rand(1,3))
   {
     case 1: $sifre.=chr(rand(48,57));  break; //0-9
     case 2: $sifre.=chr(rand(65,90));  break; //A-Z
     case 3: $sifre.=chr(rand(97,122)); break; //a-z
   }
 }
 return $sifre;
}
$sifre=rasgeleSifre();
$sifrelenmis=md5(sha1(md5($sifre)));

$kaydet=$db->prepare("INSERT INTO sauemk_yonetim SET 
isim=:ad,
email=:mail,
sifre=:sifre,
gecicisifre=:gecici,
statu=:statu,
durum=:durum,
aciklama=:aciklama,
komisyon=:komisyon,
ozel_yetki=:ozel_yetki,
foto=:foto");

$insert=$kaydet->execute(array(
'ad'=>$_POST['isim'],
'mail'=>$_POST['email'],
'statu'=>$_POST['statu'],
'durum'=>$_POST['durum'],
'gecici'=>$sifre,
'sifre'=>$sifrelenmis,
'aciklama'=>$_POST['aciklama'],
'komisyon'=>$_POST['komisyon'],
'ozel_yetki'=>$_POST['ozel_yetki'],
'foto'=>$refimgyol
));

if ($insert) {

$mail=$_POST['email'];
$isim=$_POST['isim'];

header('Content-Type: text/html; charset=utf-8');
require 'PHPMailerAutoload.php';
$phpmailer = new PHPMailer;
$phpmailer->isSMTP();
$phpmailer->Host = 'mail.sauemk.com'; // duzenlenecek
$phpmailer->SMTPAuth = true;
$phpmailer->Username = 'noreply@sauemk.com'; // duzenlenecek
$phpmailer->Password = 'noreply123456'; // duzenlenecek
$phpmailer->SMTPSecure = 'tls'; // duzenlenecek
$phpmailer->Port = '587'; // duzenlenecek
$phpmailer->From = 'noreply@sauemk.com'; // duzenlenecek
$phpmailer->FromName = 'SAÜEMK'; // duzenlenecek
$phpmailer->AddReplyTo($mail, $isim);
$phpmailer->addAddress($mail, $isim); // duzenlenecek
$phpmailer->isHTML(true);
$phpmailer->Subject = 'Geçici Şifre';
$phpmailer->Body    = '<br><strong>Şifreniz=</strong> '.$sifre;
$phpmailer->CharSet = 'UTF-8';
 
if(!$phpmailer->send()) {



} 

	Header("Location:../adminic/yoneticihesap.php?durumekle=ok");
}
else{
	Header("Location:../adminic/yoneticihesap.php?durumekle=no");
}
}


if (isset($_POST['duzenlehesap'])) {
$id=$_GET['id'];

if ($_POST['sifre']!='') {
		
$yoneticikaydet=$db->prepare("UPDATE sauemk_yonetim SET 
ozel_yetki=:yetki,
statu=:statu,
sifre=:sifre,
durum=:durum
WHERE id=$id");

$update=$yoneticikaydet->execute(array(
'yetki'=>$_POST['ozel_yetki'],
'statu'=>$_POST['statu'],
'sifre'=>md5(sha1(md5($_POST['sifre']))),
'durum'=>$_POST['durum']
));

if ($update) {
	Header("Location:../adminic/yoneticihesap.php?durum=ok");
}
else{
	Header("Location:../adminic/yoneticihesap.php?durum=no");
}
}else{

$yoneticikaydet=$db->prepare("UPDATE sauemk_yonetim SET 
ozel_yetki=:yetki,
statu=:statu,
durum=:durum
WHERE id=$id");

$update=$yoneticikaydet->execute(array(
'yetki'=>$_POST['ozel_yetki'],
'statu'=>$_POST['statu'],
'durum'=>$_POST['durum']
));

if ($update) {
	Header("Location:../adminic/yoneticihesap.php?durum=ok");
}
else{
	Header("Location:../adminic/yoneticihesap.php?durum=no");
}
}

	

}




if ($_GET['hesapsil']=="ok") {
	$sil=$db->prepare("DELETE from sauemk_yonetim where id=:id");

	$kontrol=$sil->execute(array(
		'id'=>$_GET['id']
		));
if ($kontrol) {
	Header("Location:../adminic/yoneticihesap.php?durumsil=ok");
}
else{
	Header("Location:../adminic/yoneticihesap.php?durumsil=no");

}

}




/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/


/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/

if (isset($_POST['sifrekaydet'])) {

$id=$_GET['id'];

$yoneticikaydet=$db->prepare("UPDATE sauemk_yonetim SET
sifre=:sifre
WHERE id=$id");

$update=$yoneticikaydet->execute(array(
'sifre'=>md5(sha1(md5($_POST['sifre'])))
));

if ($update) {
	Header("Location:../adminic/adminprofile.php?durum=ok");
}
else{
	Header("Location:../adminic/adminprofile.php?durum=no");
}
}

if (isset($_POST['aciklamakaydet'])) {

$id=$_GET['id'];

$yoneticikaydet=$db->prepare("UPDATE sauemk_yonetim SET
aciklama=:aciklama
WHERE id=$id");

$update=$yoneticikaydet->execute(array(
'aciklama'=>$_POST['aciklama']
));

if ($update){
	Header("Location:../adminic/adminprofile.php?durum=ok");
}
else{
	Header("Location:../adminic/adminprofile.php?durum=no");
}
}


if (isset($_POST['fotokaydet'])) {

$id=$_GET['id'];

if ($_FILES['foto']["size"]>0) {
$uploads_dir='../../img/team-pps';

	@$tmp_name=$_FILES['foto']["tmp_name"];
	@$name=$_FILES['foto']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir,6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");


	
$karsilakaydet=$db->prepare("UPDATE sauemk_yonetim SET 
foto=:foto
WHERE id=$id");

$update=$karsilakaydet->execute(array(
'foto'=>$refimgyol
));

if ($update) {
	Header("Location:../adminic/adminprofile.php?durum=ok");
}
else{
	Header("Location:../adminic/adminprofile.php?durum=no");
}
}else{

Header("Location:../adminic/adminprofile.php?durum=no");
}
}







/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/





/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/





if (isset($_POST['albumekle'])) {

if ($_FILES['album_kapakfoto']["size"]>0) {
$uploads_dir='../../img/galeri_album';

	@$tmp_name=$_FILES['album_kapakfoto']["tmp_name"];
	@$name=$_FILES['album_kapakfoto']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir,6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

$kaydet=$db->prepare("INSERT INTO galeri SET 
album_adi=:adi,
album_detay=:detay,
album_durum=:durum,
album_sira=:sira,
album_kapakfoto=:kapakfoto");

$insert=$kaydet->execute(array(
'adi'=>$_POST['album_adi'],
'detay'=>$_POST['album_detay'],
'durum'=>$_POST['album_durum'],
'sira'=>$_POST['album_sira'],
'kapakfoto'=>$refimgyol
));

if ($insert) {
	Header("Location:../adminic/adminalbum.php?durumekle=ok");
}
else{
	Header("Location:../adminic/adminalbum.php?durumekle=no");
}
}else{

$kaydet=$db->prepare("INSERT INTO galeri SET 
album_adi=:adi,
album_detay=:detay,
album_durum=:durum,
album_sira=:sira");

$insert=$kaydet->execute(array(
'adi'=>$_POST['album_adi'],
'detay'=>$_POST['album_detay'],
'durum'=>$_POST['album_durum'],
'sira'=>$_POST['album_sira']
));

if ($insert) {
	Header("Location:../adminic/adminalbum.php?durumekle=ok");
}
else{
	Header("Location:../adminic/adminalbum.php?durumekle=no");
}
}
}



if (isset($_POST['albumduzenle'])) {
	

 $id = $_GET['album_id'];
if ($_FILES['album_kapakfoto']["size"]>0) {
	 $uploads_dir='../../img/galeri_album';

	@$tmp_name=$_FILES['album_kapakfoto']["tmp_name"];
	@$name=$_FILES['album_kapakfoto']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir,6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");



$duzenle=$db->prepare("UPDATE galeri SET 
album_adi=:adi,
album_detay=:detay,
album_durum=:durum,
album_sira=:sira,
album_kapakfoto=:kapakfoto
WHERE album_id=$id");

$update=$duzenle->execute(array(
'adi'=>$_POST['album_adi'],
'detay'=>$_POST['album_detay'],
'durum'=>$_POST['album_durum'],
'sira'=>$_POST['album_sira'],
'kapakfoto'=>$refimgyol
));

if ($update) {
	$resimsilunlink=$_GET['album_kapakfoto'];
	unlink("../../$resimsilunlink");
	Header("Location:../adminic/adminalbum.php?durumguncel=ok");
}
else{
	Header("Location:../adminic/adminalbum.php?durum=no");
}
	
}
else{
 $id = $_GET['album_id'];
$duzenle=$db->prepare("UPDATE galeri SET 
album_adi=:adi,
album_detay=:detay,
album_durum=:durum,
album_sira=:sira
WHERE album_id=$id");

$update=$duzenle->execute(array(
'adi'=>$_POST['album_adi'],
'detay'=>$_POST['album_detay'],
'durum'=>$_POST['album_durum'],
'sira'=>$_POST['album_sira']
));

if ($update) {
	Header("Location:../adminic/adminalbum.php?durumguncel=ok");
}
else{
	Header("Location:../adminic/adminalbum.php?durum=no");
}
}


}



if ($_GET['albumsil']=="ok") {
	$sil=$db->prepare("DELETE from galeri where album_id=:album_id");

	$kontrol=$sil->execute(array(
		'album_id'=>$_GET['album_id']
		));
if ($kontrol) {
	Header("Location:../adminic/adminalbum.php?durumsil=ok");
}
else{
	Header("Location:../adminic/adminalbum.php?durumsil=no");

}

}













if (isset($_POST['fotoekle'])) {

if ($_FILES['foto']["size"]>0) {
$uploads_dir='../../img/gallery';

	@$tmp_name=$_FILES['foto']["tmp_name"];
	@$name=$_FILES['foto']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir,6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");


$id=$_GET['album_id'];

$kaydet=$db->prepare("INSERT INTO galeri_foto SET 
album_id=:id,
album_adi=:adi,
foto_durum=:durum,
foto_sira=:sira,
foto=:foto");

$insert=$kaydet->execute(array(
'id'=>$id,
'adi'=>$_POST['album_adi'],
'durum'=>$_POST['foto_durum'],
'sira'=>$_POST['foto_sira'],
'foto'=>$refimgyol
));
if ($insert) {
	Header("Location:../adminic/adminfoto.php?durum=ok");
}
else{
	Header("Location:../adminic/adminfoto.php?durum=no");
}
}
else{
	Header("Location:../adminic/adminfoto.php?fotoyok=no");
}
}



if (isset($_POST['fotoduzenle'])) {

	$id=$_GET['foto_id'];

$yoneticikaydet=$db->prepare("UPDATE galeri_foto SET 
foto_durum=:durum,
foto_sira=:sira,
foto_onecikar=:onecikar
WHERE foto_id=$id");

$update=$yoneticikaydet->execute(array(
'durum'=>$_POST['foto_durum'],
'sira'=>$_POST['foto_sira'],
'onecikar'=>$_POST['foto_onecikar']
));

if ($update) {
	
	Header("Location:../adminic/adminfoto.php?durum=ok");
}
else{
	Header("Location:../adminic/adminfoto.php?durum=no");
}
}




if ($_GET['fotosil']=="ok") {
	$sil=$db->prepare("DELETE from galeri_foto where foto_id=:foto_id");

	$kontrol=$sil->execute(array(
		'foto_id'=>$_GET['foto_id']
		));
if ($kontrol) {
	Header("Location:../adminic/adminfoto.php?durumsil=ok");
}
else{
	Header("Location:../adminic/adminfoto.php?durumsil=no");

}

}



/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/













/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/



/*Tüm Etkinlikler*/

if (isset($_POST['tumetkinlikyilekle'])) {

$yilustid=0;

$kaydet=$db->prepare("INSERT INTO tumetkinlikler SET 
yil=:yil,
yilustid=:id");

$insert=$kaydet->execute(array(
'yil'=>$_POST['yil'],
'id'=>$yilustid
));


if ($insert) {
	Header("Location:../adminic/admintumetkinlinkler.php?durumekle=ok");
}
else{
	Header("Location:../adminic/admintumetkinlinkler.php?durumekle=no");
}
}



if (isset($_POST['tumetkinlikekle'])) {

$kaydet=$db->prepare("INSERT INTO tumetkinlikler SET 
ad=:ad,
yilustid=:id,
aciklama=:aciklama");

$insert=$kaydet->execute(array(
'ad'=>$_POST['ad'],
'id'=>$_POST['yilustid'],
'aciklama'=>$_POST['aciklama']
));


if ($insert) {
	Header("Location:../adminic/admintumetkinlinkler.php?durumekle=ok");
}
else{
	Header("Location:../adminic/admintumetkinlinkler.php?durumekle=no");
}
}





if (isset($_POST['tumetkinlikduzenle'])) {

	$id=$_GET['id'];

$yoneticikaydet=$db->prepare("UPDATE tumetkinlikler SET 
ad=:ad,
aciklama=:aciklama
WHERE id=$id");

$update=$yoneticikaydet->execute(array(
'ad'=>$_POST['ad'],
'aciklama'=>$_POST['aciklama']
));

if ($update) {
	
	Header("Location:../adminic/admintumetkinlinkler.php?durum=ok");
}
else{
	Header("Location:../adminic/admintumetkinlinkler.php?durum=no");
}
}



if ($_GET['etkinliksil']=="ok") {
	$sil=$db->prepare("DELETE from tumetkinlikler where id=:id");

	$kontrol=$sil->execute(array(
		'id'=>$_GET['id']
		));
if ($kontrol) {
	Header("Location:../adminic/admintumetkinlinkler.php?durumsil=ok");
}
else{
	Header("Location:../adminic/admintumetkinlinkler.php?durumsil=no");

}

}




/*Yaklaşan Etkinlikler*/




if (isset($_POST['yaklasanetkinlikekle'])) {


$uploads_dir='../../img/events';

	@$tmp_name=$_FILES['afis']["tmp_name"];
	@$name=$_FILES['afis']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir,6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");


$kaydet=$db->prepare("INSERT INTO yaklasanetkinlikler SET 
tarih=:tarih,
adi=:adi,
detay=:detay,
kayitform=:kayitform,
formonay=:formonay,
onay=:onay,
tur=:tur,
afis=:afis");

$insert=$kaydet->execute(array(
'tarih'=>$_POST['tarih'],
'adi'=>$_POST['adi'],
'detay'=>$_POST['detay'],
'kayitform'=>$_POST['kayitform'],
'formonay'=>$_POST['formonay'],
'onay'=>$_POST['onay'],
'tur'=>$_POST['tur'],
'afis'=>$refimgyol
));


if ($insert) {
	Header("Location:../adminic/adminyaklasanetkinlikler.php?durumekle=ok");
}
else{
	Header("Location:../adminic/adminyaklasanetkinlikler.php?durumekle=no");
}
}






if (isset($_POST['yaklasanetkinlikduzenle'])) {
	

 $id = $_GET['id'];
if ($_FILES['afis']["size"]>0) {
	 $uploads_dir='../../img/events';

	@$tmp_name=$_FILES['afis']["tmp_name"];
	@$name=$_FILES['afis']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir,6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");



$duzenle=$db->prepare("UPDATE yaklasanetkinlikler SET 
adi=:adi,
detay=:detay,
tarih=:tarih,
kayitform=:form,
formonay=:formonay,
onay=:onay,
afis=:afis
WHERE id=$id");

$update=$duzenle->execute(array(
'adi'=>$_POST['adi'],
'detay'=>$_POST['detay'],
'tarih'=>$_POST['tarih'],
'form'=>$_POST['kayitform'],
'formonay'=>$_POST['formonay'],
'onay'=>$_POST['onay'],
'afis'=>$refimgyol
));

if ($update) {
	Header("Location:../adminic/adminyaklasanetkinlikler.php?durumguncel=ok");
}
else{
	Header("Location:../adminic/adminyaklasanetkinlikler.php?durum=no");
}
	
}
else{
 $id = $_GET['id'];
$duzenle=$db->prepare("UPDATE yaklasanetkinlikler SET 
adi=:adi,
detay=:detay,
tarih=:tarih,
kayitform=:form,
formonay=:formonay,
onay=:onay
WHERE id=$id");

$update=$duzenle->execute(array(
'adi'=>$_POST['adi'],
'detay'=>$_POST['detay'],
'tarih'=>$_POST['tarih'],
'form'=>$_POST['kayitform'],
'formonay'=>$_POST['formonay'],
'onay'=>$_POST['onay']
));

if ($update) {
	Header("Location:../adminic/adminyaklasanetkinlikler.php?durumguncel=ok");
}
else{
	Header("Location:../adminic/adminyaklasanetkinlikler.php?durum=no");
}
}


}



if ($_GET['yaklasanetkinliksil']=="ok") {
	$sil=$db->prepare("DELETE from yaklasanetkinlikler where id=:id");

	$kontrol=$sil->execute(array(
		'id'=>$_GET['id']
		));
if ($kontrol) {
	Header("Location:../adminic/adminyaklasanetkinlikler.php?durumsil=ok");
}
else{
	Header("Location:../adminic/adminyaklasanetkinlikler.php?durumsil=no");

}

}







/*En Yakın Etkinlik*/







if (isset($_POST['guncelleyakinetkinlik'])) {

if ($_FILES['afis']["size"]>0) {
$uploads_dir='../../img/events';

	@$tmp_name=$_FILES['afis']["tmp_name"];
	@$name=$_FILES['afis']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir,6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");


	
$ayarkaydet=$db->prepare("UPDATE yakinetkinlik SET 
adi=:adi,
afis=:afis,
slogan=:slogan,
detay1ikon=:detay1ikon,
detay2ikon=:detay2ikon,
detay3ikon=:detay3ikon,
detay4ikon=:detay4ikon,
detay1baslik=:detay1baslik,
detay2baslik=:detay2baslik,
detay3baslik=:detay3baslik,
detay4baslik=:detay4baslik,
detay1=:detay1,
detay2=:detay2,
detay3=:detay3,
detay4=:detay4
WHERE id=0");

$update=$ayarkaydet->execute(array(
'adi'=>$_POST['adi'],
'afis'=>$refimgyol,
'slogan'=>$_POST['slogan'],
'detay1ikon'=>$_POST['detay1ikon'],
'detay2ikon'=>$_POST['detay2ikon'],
'detay3ikon'=>$_POST['detay3ikon'],
'detay4ikon'=>$_POST['detay4ikon'],
'detay1baslik'=>$_POST['detay1baslik'],
'detay2baslik'=>$_POST['detay2baslik'],
'detay3baslik'=>$_POST['detay3baslik'],
'detay4baslik'=>$_POST['detay4baslik'],
'detay1'=>$_POST['detay1'],
'detay2'=>$_POST['detay2'],
'detay3'=>$_POST['detay3'],
'detay4'=>$_POST['detay4']
));

if ($update) {
	Header("Location:../adminic/adminyakinetkinlik.php?durum=ok");
}
else{
	Header("Location:../adminic/adminyakinetkinlik.php?durum=no");
}
}else{

$ayarkaydet=$db->prepare("UPDATE yakinetkinlik SET 
adi=:adi,
slogan=:slogan,
detay1ikon=:detay1ikon,
detay2ikon=:detay2ikon,
detay3ikon=:detay3ikon,
detay4ikon=:detay4ikon,
detay1baslik=:detay1baslik,
detay2baslik=:detay2baslik,
detay3baslik=:detay3baslik,
detay4baslik=:detay4baslik,
detay1=:detay1,
detay2=:detay2,
detay3=:detay3,
detay4=:detay4
WHERE id=0");

$update=$ayarkaydet->execute(array(
'adi'=>$_POST['adi'],
'slogan'=>$_POST['slogan'],
'detay1ikon'=>$_POST['detay1ikon'],
'detay2ikon'=>$_POST['detay2ikon'],
'detay3ikon'=>$_POST['detay3ikon'],
'detay4ikon'=>$_POST['detay4ikon'],
'detay1baslik'=>$_POST['detay1baslik'],
'detay2baslik'=>$_POST['detay2baslik'],
'detay3baslik'=>$_POST['detay3baslik'],
'detay4baslik'=>$_POST['detay4baslik'],
'detay1'=>$_POST['detay1'],
'detay2'=>$_POST['detay2'],
'detay3'=>$_POST['detay3'],
'detay4'=>$_POST['detay4']
));

if ($update) {
	Header("Location:../adminic/adminyakinetkinlik.php?durum=ok");
}
else{
	Header("Location:../adminic/adminyakinetkinlik.php?durum=no");
}
}



}







/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
















/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/

/*AYAR TABLOSUNDA VE YÖNETİM PANELİNDE AYAR SEKMESİNDE YAPILAN İŞLEMLERİN BAŞLANGICI*/


/*SİTENİN GENEL AYARLARINI DÜZENLEMEK İÇİN YAPILAN GÜNCELLEME İŞLEMİ BAŞLANGICI*/
if (isset($_POST['guncellegenel'])) {

if ($_FILES['ayar_logo']["size"]>0) {
$uploads_dir='../../img/logos';

	@$tmp_name=$_FILES['ayar_logo']["tmp_name"];
	@$name=$_FILES['ayar_logo']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir,6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");


	
$ayarkaydet=$db->prepare("UPDATE ayar SET 
ayar_logo=:logo,
ayar_title=:title,
ayar_siteurl=:siteurl,
ayar_description=:description,
ayar_keywords=:keywords,
ayar_author=:author
WHERE ayar_id=0");

$update=$ayarkaydet->execute(array(
'logo'=>$refimgyol,
'title'=>$_POST['ayar_title'],
'siteurl'=>$_POST['ayar_siteurl'],
'description'=>$_POST['ayar_description'],
'keywords'=>$_POST['ayar_keywords'],
'author'=>$_POST['ayar_author']
));

if ($update) {
	Header("Location:../adminic/admingenelayar.php?durum=ok");
}
else{
	Header("Location:../adminic/admingenelayar.php?durum=no");
}
}else{

$ayarkaydet=$db->prepare("UPDATE ayar SET 
ayar_title=:title,
ayar_siteurl=:siteurl,
ayar_description=:description,
ayar_keywords=:keywords,
ayar_author=:author
WHERE ayar_id=0");

$update=$ayarkaydet->execute(array(
'title'=>$_POST['ayar_title'],
'siteurl'=>$_POST['ayar_siteurl'],
'description'=>$_POST['ayar_description'],
'keywords'=>$_POST['ayar_keywords'],
'author'=>$_POST['ayar_author']
));

if ($update) {
	Header("Location:../adminic/admingenelayar.php?durum=ok");
}
else{
	Header("Location:../adminic/admingenelayar.php?durum=no");
}
}



}
/*SİTENİN GENEL AYARLARINI DÜZENLEMEK İÇİN YAPILAN GÜNCELLEME İŞLEMİ SONU*/




/*SİTENİN SOSYAL MEDYA AYARLARINI DÜZENLEMEK İÇİN YAPILAN GÜNCELLEME İŞLEMİ BAŞLANGICI*/
if (isset($_POST['guncellesosyal'])) {
	
$ayarkaydet=$db->prepare("UPDATE ayar SET 
ayar_facebook=:facebook,
ayar_twitter=:twitter,
ayar_instagram=:instagram,
ayar_linkedin=:linkedin,
ayar_spotify=:spotify,
ayar_youtube=:youtube,
ayar_snapchat=:snapchat,
ayar_google=:google
WHERE ayar_id=0");

$update=$ayarkaydet->execute(array(
'facebook'=>$_POST['ayar_facebook'],
'twitter'=>$_POST['ayar_twitter'],
'instagram'=>$_POST['ayar_instagram'],
'linkedin'=>$_POST['ayar_linkedin'],
'spotify'=>$_POST['ayar_spotify'],
'youtube'=>$_POST['ayar_youtube'],
'snapchat'=>$_POST['ayar_snapchat'],
'google'=>$_POST['ayar_google']
));

if ($update) {
	Header("Location:../adminic/adminsosyalayar.php?durum=ok");
}
else{
	Header("Location:../adminic/adminsosyalayar.php?durum=no");
}
}
/*SİTENİN SOSYAL MEDYA AYARLARINI DÜZENLEMEK İÇİN YAPILAN GÜNCELLEME İŞLEMİ SONU*/



/*SİTENİN MAİL AYARLARINI DÜZENLEMEK İÇİN YAPILAN GÜNCELLEME İŞLEMİ BAŞLANGICI*/
if (isset($_POST['guncellemail'])) {
	
$ayarkaydet=$db->prepare("UPDATE ayar SET 
ayar_mailbir=:mailbir,
ayar_mailiki=:mailiki,
ayar_smtphost=:smtphost,
ayar_smtpuser=:smtpuser,
ayar_smtppassword=:smtppassword,
ayar_smtpport=:smtpport
WHERE ayar_id=0");

$update=$ayarkaydet->execute(array(
'mailbir'=>$_POST['ayar_mailbir'],
'mailiki'=>$_POST['ayar_mailiki'],
'smtphost'=>$_POST['ayar_smtphost'],
'smtpuser'=>$_POST['ayar_smtpuser'],
'smtppassword'=>$_POST['ayar_smtppassword'],
'smtpport'=>$_POST['ayar_smtpport']
));

if ($update) {
	Header("Location:../adminic/adminmailayar.php?durum=ok");
}
else{
	Header("Location:../adminic/adminmailayar.php?durum=no");
}
}
/*SİTENİN MAİL AYARLARINI DÜZENLEMEK İÇİN YAPILAN GÜNCELLEME İŞLEMİ SONU*/


/*SİTENİN AYAR AÇIKLAMALARINI DÜZENLEMEK İÇİN YAPILAN GÜNCELLEME İŞLEMİ BAŞLANGICI*/
if (isset($_POST['guncelleaciklama'])) {
	
$ayarkaydet=$db->prepare("UPDATE ayar SET 
ayar_logoaciklama=:logoaciklama,
ayar_siteurlaciklama=:siteurlaciklama,
ayar_titleaciklama=:titleaciklama,
ayar_descriptionaciklama=:descriptionaciklama,
ayar_keywordsaciklama=:keywordsaciklama,
ayar_authoraciklama=:authoraciklama,
ayar_mailbiraciklama=:mailbiraciklama,
ayar_mailikiaciklama=:mailikiaciklama,
ayar_adresaciklama=:adresaciklama,
ayar_facebookaciklama=:facebookaciklama,
ayar_twitteraciklama=:twitteraciklama,
ayar_youtubeaciklama=:youtubeaciklama,
ayar_instagramaciklama=:instagramaciklama,
ayar_linkedinaciklama=:linkedinaciklama,
ayar_spotifyaciklama=:spotifyaciklama,
ayar_snapchataciklama=:snapchataciklama,
ayar_googleaciklama=:googleaciklama,
ayar_smtphostaciklama=:smtphostaciklama,
ayar_smtpuseraciklama=:smtpuseraciklama,
ayar_smtppasswordaciklama=:smtppasswordaciklama,
ayar_smtpportaciklama=:smtpportaciklama

WHERE ayar_id=0");

$update=$ayarkaydet->execute(array(
'logoaciklama'=>$_POST['ayar_logoaciklama'],
'siteurlaciklama'=>$_POST['ayar_siteurlaciklama'],
'titleaciklama'=>$_POST['ayar_titleaciklama'],
'descriptionaciklama'=>$_POST['ayar_descriptionaciklama'],
'keywordsaciklama'=>$_POST['ayar_keywordsaciklama'],
'authoraciklama'=>$_POST['ayar_authoraciklama'],
'mailbiraciklama'=>$_POST['ayar_mailbiraciklama'],
'mailikiaciklama'=>$_POST['ayar_mailikiaciklama'],
'adresaciklama'=>$_POST['ayar_adresaciklama'],
'facebookaciklama'=>$_POST['ayar_facebookaciklama'],
'twitteraciklama'=>$_POST['ayar_twitteraciklama'],
'youtubeaciklama'=>$_POST['ayar_youtubeaciklama'],
'instagramaciklama'=>$_POST['ayar_instagramaciklama'],
'linkedinaciklama'=>$_POST['ayar_linkedinaciklama'],
'spotifyaciklama'=>$_POST['ayar_spotifyaciklama'],
'snapchataciklama'=>$_POST['ayar_snapchataciklama'],
'googleaciklama'=>$_POST['ayar_googleaciklama'],
'smtphostaciklama'=>$_POST['ayar_smtphostaciklama'],
'smtpuseraciklama'=>$_POST['ayar_smtpuseraciklama'],
'smtppasswordaciklama'=>$_POST['ayar_smtppasswordaciklama'],
'smtpportaciklama'=>$_POST['ayar_smtpportaciklama']
));

if ($update) {
	Header("Location:../adminic/adminayaraciklama.php?durum=ok");

}
else{
	Header("Location:../adminic/adminayaraciklama.php?durum=no");
}
}
/*SİTENİN AYAR AÇIKLAMALARINI DÜZENLEMEK İÇİN YAPILAN GÜNCELLEME İŞLEMİ SONU*/

/*SİTENİN SOSYAL MEDYA AYARLARINI DÜZENLEMEK İÇİN YAPILAN GÜNCELLEME İŞLEMİ BAŞLANGICI*/
if (isset($_POST['guncellefooter'])) {
	
$ayarkaydet=$db->prepare("UPDATE ayar SET 
ayar_footer=:footer,
ayar_adminfooter=:adminfooter
WHERE ayar_id=0");

$update=$ayarkaydet->execute(array(
'footer'=>$_POST['ayar_footer'],
'adminfooter'=>$_POST['ayar_adminfooter']
));

if ($update) {
	Header("Location:../adminic/adminfooterayar.php?durum=ok");
}
else{
	Header("Location:../adminic/adminfooterayar.php?durum=no");
}
}
/*SİTENİN SOSYAL MEDYA AYARLARINI DÜZENLEMEK İÇİN YAPILAN GÜNCELLEME İŞLEMİ SONU*/

/*AYAR TABLOSUNDA VE YÖNETİM PANELİNDE AYAR SEKMESİNDE YAPILAN İŞLEMLERİN SONU*/

/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/












/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/


/*SPONSOR TABLOSUNDA VE YÖNETİM PANELİNDE SPONSOR SEKMESİNDE YAPILAN İŞLEMLERİN BAŞLANGICI*/

/*KULÜBÜN ANLAŞTIĞI YENİ SPONSORLARI EKLEMEK İÇİN YAPILAN İŞLEMLERİN BAŞLANGICI*/
if (isset($_POST['sponsorekle'])) {

	$uploads_dir='../../img/logos';

	@$tmp_name=$_FILES['sponsor_logo']["tmp_name"];
	@$name=$_FILES['sponsor_logo']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir,6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");




$kaydet=$db->prepare("INSERT INTO sponsor SET 
sponsor_ad=:ad,
sponsor_sira=:sira,
sponsor_durum=:durum,
sponsor_mail=:mail,
sponsor_logo=:logo");

$insert=$kaydet->execute(array(
'ad'=>$_POST['sponsor_ad'],
'sira'=>$_POST['sponsor_sira'],
'durum'=>$_POST['sponsor_durum'],
'mail'=>$_POST['sponsor_mail'],
'logo'=>$refimgyol
));

if ($insert) {
	Header("Location:../adminic/adminsponsor.php?durumekle=ok");
}
else{
	Header("Location:../adminic/adminsponsor.php?durumekle=no");
}
}

/*KULÜBÜN ANLAŞTIĞI YENİ SPONSORLARI EKLEMEK İÇİN YAPILAN İŞLEMLERİN SONU*/


/*KULÜBÜN ANLAŞMASININ BİTTİĞİ SPONSORLARI SİTEDEN KALDIRMAK İÇİN YAPILAN İŞLEMLERİN BAŞLANGICI*/
if ($_GET['sponsorsil']=="ok") {
	$sil=$db->prepare("DELETE from sponsor where sponsor_id=:sponsor_id");

	$kontrol=$sil->execute(array(
		'sponsor_id'=>$_GET['sponsor_id']
		));
if ($kontrol) {
	Header("Location:../adminic/adminsponsor.php?durumsil=ok");
}
else{
	Header("Location:../adminic/adminsponsor.php?durumsil=no");

}

}
/*KULÜBÜN ANLAŞMASININ BİTTİĞİ SPONSORLARI SİTEDEN KALDIRMAK İÇİN YAPILAN İŞLEMLERİN SONU*/


/*SPONSORLARIN GEREKTİĞİNDE BİLGİLERİNİ GÜNCELLEYEBİLMEK İÇİN YAPILAN İŞLEMLERİN BAŞLANGICI*/
if (isset($_POST['duzenlesponsor'])) {
	

 $id = $_GET['sponsor_id'];
if ($_FILES['sponsor_logo']["size"]>0) {
	 $uploads_dir='../../img/logos';

	@$tmp_name=$_FILES['sponsor_logo']["tmp_name"];
	@$name=$_FILES['sponsor_logo']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir,6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");



$duzenle=$db->prepare("UPDATE sponsor SET 
sponsor_ad=:ad,
sponsor_sira=:sira,
sponsor_durum=:durum,
sponsor_mail=:mail,
sponsor_logo=:logo
WHERE sponsor_id=$id");

$update=$duzenle->execute(array(
'ad'=>$_GET['sponsor_ad'],
'sira'=>$_POST['sponsor_sira'],
'durum'=>$_POST['sponsor_durum'],
'mail'=>$_POST['sponsor_mail'],
'logo'=>$refimgyol
));

if ($update) {
	$resimsilunlink=$_GET['sponsor_logo'];
	unlink("../../$resimsilunlink");
	Header("Location:../adminic/adminsponsor.php?durumguncel=ok");
}
else{
	Header("Location:../adminic/adminsponsor.php?durum=no");
}
	
}
else{
 $id = $_GET['sponsor_id'];
$duzenle=$db->prepare("UPDATE sponsor SET 
sponsor_ad=:ad,
sponsor_sira=:sira,
sponsor_durum=:durum,
sponsor_mail=:mail
WHERE sponsor_id=$id");

$update=$duzenle->execute(array(
'ad'=>$_POST['sponsor_ad'],
'sira'=>$_POST['sponsor_sira'],
'durum'=>$_POST['sponsor_durum'],
'mail'=>$_POST['sponsor_mail']
));

if ($update) {
	Header("Location:../adminic/adminsponsor.php?durumguncel=ok");
}
else{
	Header("Location:../adminic/adminsponsor.php?durum=no");
}
}


}
/*SPONSORLARIN GEREKTİĞİNDE BİLGİLERİNİ GÜNCELLEYEBİLMEK İÇİN YAPILAN İŞLEMLERİN SONU*/


/*SPONSOR TABLOSUNDA VE YÖNETİM PANELİNDE SPONSOR SEKMESİNDE YAPILAN İŞLEMLERİN SONU*/


/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/













/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/


/*ANASAYFA İLE ALAKALI İŞLEMLERİN BAŞLANGICI*/



/*ANASAYFA KARŞILAMA EKRANI İÇİN YAPILAN GÜNCELLEME İŞLEMİ BAŞLANGICI*/
if (isset($_POST['guncellekarsila'])) {

if ($_FILES['karsila_arkaplan']["size"]>0) {
$uploads_dir='../../img/carousel';

	@$tmp_name=$_FILES['karsila_arkaplan']["tmp_name"];
	@$name=$_FILES['karsila_arkaplan']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir,6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");


	
$karsilakaydet=$db->prepare("UPDATE karsila SET 
karsila_arkaplan=:arkaplan,
karsila_byazi=:byazi,
karsila_kyazi=:kyazi,
karsila_video=:video
WHERE karsila_id=0");

$update=$karsilakaydet->execute(array(
'arkaplan'=>$refimgyol,
'byazi'=>$_POST['karsila_byazi'],
'kyazi'=>$_POST['karsila_kyazi'],
'video'=>$_POST['karsila_video']
));

if ($update) {
	Header("Location:../adminic/adminanasayfakarsila.php?durum=ok");
}
else{
	Header("Location:../adminic/adminanasayfakarsila.php?durum=no");
}
}else{

$karsilakaydet=$db->prepare("UPDATE karsila SET 
karsila_byazi=:byazi,
karsila_kyazi=:kyazi,
karsila_video=:video
WHERE karsila_id=0");

$update=$karsilakaydet->execute(array(
'byazi'=>$_POST['karsila_byazi'],
'kyazi'=>$_POST['karsila_kyazi'],
'video'=>$_POST['karsila_video']
));

if ($update) {
	Header("Location:../adminic/adminanasayfakarsila.php?durum=ok");
}
else{
	Header("Location:../adminic/adminanasayfakarsila.php?durum=no");
}
}



}
/*ANASAYFA KARŞILAMA EKRANI İÇİN YAPILAN GÜNCELLEME İŞLEMİ SONU*/







/*ANASAYFA İLE ALAKALI İŞLEMLERİN SONU*/

/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/




/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/


/*PARALLAX İLE ALAKALI İŞLEMLERİN BAŞLANGICI*/


/*PARALLAX FOTOĞRAFLARININ UPDATE İŞLEMİ BAŞLANGICI*/

if (isset($_POST['guncelleparallax'])) {
	
if ($_FILES['parallax_bir']["size"]>0 && $_FILES['parallax_iki']["size"]==0 ) {
	$uploads_dir='../../img/counters';

	@$tmp_name=$_FILES['parallax_bir']["tmp_name"];
	@$name=$_FILES['parallax_bir']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir,6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");



$duzenle=$db->prepare("UPDATE parallax SET 

parallax_bir=:bir
WHERE parallax_id=0");

$update=$duzenle->execute(array(

'bir'=>$refimgyol
));

if ($update) {
	$resimsilunlink=$_GET['parallax_bir'];
	unlink("../../$resimsilunlink");
	Header("Location:../adminic/adminparallax.php?durum=ok");
}
else{
	Header("Location:../adminic/adminparallax.php?durum=no");
}

}
else if($_FILES['parallax_bir']["size"]==0 && $_FILES['parallax_iki']["size"]>0 ){


	 $uploads_dir='../../img/testimonials';

	@$tmp_name=$_FILES['parallax_iki']["tmp_name"];
	@$name=$_FILES['parallax_iki']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir,6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");



$duzenle=$db->prepare("UPDATE parallax SET 

parallax_iki=:iki
WHERE parallax_id=0");

$update=$duzenle->execute(array(

'iki'=>$refimgyol
));

if ($update) {
	$resimsilunlink=$_GET['parallax_iki'];
	unlink("../../$resimsilunlink");
	Header("Location:../adminic/adminparallax.php?durum=ok");
}
else{
	Header("Location:../adminic/adminparallax.php?durum=no");
}
}
else if($_FILES['parallax_bir']["size"]>0 && $_FILES['parallax_iki']["size"]>0 ){


	 $uploads_dirbir='../../img/counters';

	@$tmp_name=$_FILES['parallax_bir']["tmp_name"];
	@$name=$_FILES['parallax_bir']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyolbir=substr($uploads_dirbir,6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dirbir/$benzersizad$name");

	 $uploads_diriki='../../img/testimonials';

	@$tmp_name=$_FILES['parallax_iki']["tmp_name"];
	@$name=$_FILES['parallax_iki']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyoliki=substr($uploads_diriki,6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_diriki/$benzersizad$name");


$duzenle=$db->prepare("UPDATE parallax SET 
parallax_bir=:bir,
parallax_iki=:iki
WHERE parallax_id=0");

$update=$duzenle->execute(array(
'bir'=>$refimgyolbir,
'iki'=>$refimgyoliki
));

if ($update) {
	$resimsilunlinkbir=$_GET['parallax_bir'];
	unlink("../../$resimsilunlinkbir");
	$resimsilunlink=$_GET['parallax_iki'];
	unlink("../../$resimsilunlink");

	Header("Location:../adminic/adminparallax.php?durum=ok");
}
else{
	Header("Location:../adminic/adminparallax.php?durum=no");
}
}else{
	Header("Location:../adminic/adminparallax.php?durum=no");
}

}				

/*PARALLAX FOTOĞRAFLARININ UPDATE İŞLEMİ SONU*/


/*PARALLAX İLE ALAKALI İŞLEMLERİN SONU*/

/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/


/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/


/*HAKKIMIZDA İLE ALAKALI İŞLEMLERİN BAŞLANGICI*/


/*HAKKIMIZDA TAKIMIMIZ INSERT İŞLEMİ BAŞLANGICI*/


if (isset($_POST['yoneticiekle'])) {


if($_FILES['yonetici_foto']["size"]>0){

	$uploads_dir='../../img/team-pps';

	@$tmp_name=$_FILES['yonetici_foto']["tmp_name"];
	@$name=$_FILES['yonetici_foto']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir,6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");




$kaydet=$db->prepare("INSERT INTO hakkimizdabir SET 
yonetici_ad=:ad,
yonetici_soyad=:soyad,
yonetici_mail=:mail,
yonetici_telefon=:telefon,
yonetici_komisyon=:komisyon,
yonetici_facebook=:facebook,
yonetici_twitter=:twitter,
yonetici_instagram=:instagram,
yonetici_linkedin=:linkedin,
yonetici_sira=:sira,
yonetici_durum=:durum,
yonetici_foto=:foto");

$insert=$kaydet->execute(array(
'ad'=>$_POST['yonetici_ad'],
'soyad'=>$_POST['yonetici_soyad'],
'mail'=>$_POST['yonetici_mail'],
'telefon'=>$_POST['yonetici_telefon'],
'komisyon'=>$_POST['yonetici_komisyon'],
'facebook'=>$_POST['yonetici_facebook'],
'twitter'=>$_POST['yonetici_twitter'],
'instagram'=>$_POST['yonetici_instagram'],
'linkedin'=>$_POST['yonetici_linkedin'],
'sira'=>$_POST['yonetici_sira'],
'durum'=>$_POST['yonetici_durum'],
'foto'=>$refimgyol
));

if ($insert) {
	Header("Location:../adminic/admintakimimiz.php?durumekle=ok");
}
else{
	Header("Location:../adminic/admintakimimiz.php?durumekle=no");
}
}else{

$kaydet=$db->prepare("INSERT INTO hakkimizdabir SET 
yonetici_ad=:ad,
yonetici_soyad=:soyad,
yonetici_mail=:mail,
yonetici_telefon=:telefon,
yonetici_komisyon=:komisyon,
yonetici_facebook=:facebook,
yonetici_twitter=:twitter,
yonetici_instagram=:instagram,
yonetici_linkedin=:linkedin,
yonetici_sira=:sira,
yonetici_durum=:durum");

$insert=$kaydet->execute(array(
'ad'=>$_POST['yonetici_ad'],
'soyad'=>$_POST['yonetici_soyad'],
'mail'=>$_POST['yonetici_mail'],
'telefon'=>$_POST['yonetici_telefon'],
'komisyon'=>$_POST['yonetici_komisyon'],
'facebook'=>$_POST['yonetici_facebook'],
'twitter'=>$_POST['yonetici_twitter'],
'instagram'=>$_POST['yonetici_instagram'],
'linkedin'=>$_POST['yonetici_linkedin'],
'sira'=>$_POST['yonetici_sira'],
'durum'=>$_POST['yonetici_durum']
));

if ($insert) {
	Header("Location:../adminic/admintakimimiz.php?durumekle=ok");
}
else{
	Header("Location:../adminic/admintakimimiz.php?durumekle=no");
}
}
}


/*HAKKIMIZDA TAKIMIMIZ INSERT İŞLEMİ SONU*/





/*HAKKIMIZDA TAKIMIMIZ DELETE İŞLEMİ BAŞLANGICI*/

if ($_GET['yoneticisil']=="ok") {
	$sil=$db->prepare("DELETE from hakkimizdabir where yonetici_id=:yonetici_id");

	$kontrol=$sil->execute(array(
		'yonetici_id'=>$_GET['yonetici_id']
		));
if ($kontrol) {
	Header("Location:../adminic/admintakimimiz.php?durumsil=ok");
}
else{
	Header("Location:../adminic/admintakimimiz.php?durumsil=no");

}

}


/*HAKKIMIZDA TAKIMIMIZ DELETE İŞLEMİ SONU*/





/*HAKKIMIZDA TAKIMIMIZ UPDATE İŞLEMİ BAŞLANGICI*/
if (isset($_POST['duzenleyonetici'])) {

	$id=$_GET['yonetici_id'];

if ($_FILES['yonetici_foto']["size"]>0) {
$uploads_dir='../../img/team-pps';

	@$tmp_name=$_FILES['yonetici_foto']["tmp_name"];
	@$name=$_FILES['yonetici_foto']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir,6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");


	
$yoneticikaydet=$db->prepare("UPDATE hakkimizdabir SET 
yonetici_ad=:ad,
yonetici_soyad=:soyad,
yonetici_mail=:mail,
yonetici_telefon=:telefon,
yonetici_komisyon=:komisyon,
yonetici_facebook=:facebook,
yonetici_twitter=:twitter,
yonetici_instagram=:instagram,
yonetici_linkedin=:linkedin,
yonetici_sira=:sira,
yonetici_durum=:durum,
yonetici_foto=:foto
WHERE yonetici_id=$id");

$update=$yoneticikaydet->execute(array(
'ad'=>$_POST['yonetici_ad'],
'soyad'=>$_POST['yonetici_soyad'],
'mail'=>$_POST['yonetici_mail'],
'telefon'=>$_POST['yonetici_telefon'],
'komisyon'=>$_POST['yonetici_komisyon'],
'facebook'=>$_POST['yonetici_facebook'],
'twitter'=>$_POST['yonetici_twitter'],
'instagram'=>$_POST['yonetici_instagram'],
'linkedin'=>$_POST['yonetici_linkedin'],
'sira'=>$_POST['yonetici_sira'],
'durum'=>$_POST['yonetici_durum'],
'foto'=>$refimgyol
));

if ($update) {
	$resimsilunlink=$_GET['yonetici_foto'];
	unlink("../../$resimsilunlink");
	Header("Location:../adminic/admintakimimiz.php?durum=ok");
}
else{
	Header("Location:../adminic/admintakimimiz.php?durum=no");
}
}else{

$yoneticikaydet=$db->prepare("UPDATE hakkimizdabir SET 
yonetici_ad=:ad,
yonetici_soyad=:soyad,
yonetici_mail=:mail,
yonetici_telefon=:telefon,
yonetici_komisyon=:komisyon,
yonetici_facebook=:facebook,
yonetici_twitter=:twitter,
yonetici_instagram=:instagram,
yonetici_linkedin=:linkedin,
yonetici_sira=:sira,
yonetici_durum=:durum
WHERE yonetici_id=$id");

$update=$yoneticikaydet->execute(array(
'ad'=>$_POST['yonetici_ad'],
'soyad'=>$_POST['yonetici_soyad'],
'mail'=>$_POST['yonetici_mail'],
'telefon'=>$_POST['yonetici_telefon'],
'komisyon'=>$_POST['yonetici_komisyon'],
'facebook'=>$_POST['yonetici_facebook'],
'twitter'=>$_POST['yonetici_twitter'],
'instagram'=>$_POST['yonetici_instagram'],
'linkedin'=>$_POST['yonetici_linkedin'],
'sira'=>$_POST['yonetici_sira'],
'durum'=>$_POST['yonetici_durum']
));

if ($update) {
	Header("Location:../adminic/admintakimimiz.php?durum=ok");
}
else{
	Header("Location:../adminic/admintakimimiz.php?durum=no");
}
}



}
/*HAKKIMIZDA TAKIMIMIZ UPDATE İŞLEMİ SONU*/






if (isset($_POST['guncellehakkinda'])) {
	
	if ($_POST['ekibimiz_hakkinda']!="") {
		$ayarkaydet=$db->prepare("UPDATE hakkimizdaiki SET 
ekibimiz_hakkinda=:hakkinda
WHERE id=0");

$update=$ayarkaydet->execute(array(
'hakkinda'=>$_POST['ekibimiz_hakkinda']
));
	}
	if ($_POST['kurulusumuz']!="") {
		$ayarkaydet=$db->prepare("UPDATE hakkimizdaiki SET 

kurulusumuz=:kurulusumuz
WHERE id=0");

$update=$ayarkaydet->execute(array(
'kurulusumuz'=>$_POST['kurulusumuz']
));
	}
	if ($_POST['amacimiz']!="") {
$ayarkaydet=$db->prepare("UPDATE hakkimizdaiki SET 
amacimiz=:amacimiz
WHERE id=0");

$update=$ayarkaydet->execute(array(
'amacimiz'=>$_POST['amacimiz']
));
	}
	if ($_POST['odullerimiz']!="") {
		$ayarkaydet=$db->prepare("UPDATE hakkimizdaiki SET 
odullerimiz=:odullerimiz
WHERE id=0");

$update=$ayarkaydet->execute(array(
'odullerimiz'=>$_POST['odullerimiz']
));
	}


if ($update) {
	Header("Location:../adminic/adminhakkimizda.php?durum=ok");
}
else{
	Header("Location:../adminic/adminhakkimizda.php?durum=no");
}
}











/*HAKKIMIZDA İLE ALAKALI İŞLEMLERİN SONU*/


/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/



/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/

/*ANASAYFA YORUMLARI İLE ALAKALI İŞLEMLERİN BAŞLANGICI*/


/*ANASAYFA YORUM EKLEME İŞLEMİ BAŞLANGICI*/






if (isset($_POST['anasayfayorumekle'])) {


if($_FILES['yorum_foto']["size"]>0){

	$uploads_dir='../../img/team-pps';

	@$tmp_name=$_FILES['yorum_foto']["tmp_name"];
	@$name=$_FILES['yorum_foto']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir,6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");




$kaydet=$db->prepare("INSERT INTO anasayfa_yorum SET 
yorum_foto=:foto,
yorum_ad=:ad,
yorum_detay=:detay,
yorum_konum=:konum,
yorum_sira=:sira,
yorum_durum=:durum");

$insert=$kaydet->execute(array(
'ad'=>$_POST['yorum_ad'],
'detay'=>$_POST['yorum_detay'],
'konum'=>$_POST['yorum_konum'],
'sira'=>$_POST['yorum_sira'],
'durum'=>$_POST['yorum_durum'],
'foto'=>$refimgyol
));

if ($insert) {
	Header("Location:../adminic/adminanasayfayorum.php?durumekle=ok");
}
else{
	Header("Location:../adminic/adminanasayfayorum.php?durumekle=no");
}
}else{
	$at='../../img/counters/homer.png';
$refimgyol=substr($at,6);

$kaydet=$db->prepare("INSERT INTO anasayfa_yorum SET 
yorum_defaultfoto=:foto,
yorum_ad=:ad,
yorum_detay=:detay,
yorum_konum=:konum,
yorum_sira=:sira,
yorum_durum=:durum");

$insert=$kaydet->execute(array(
'ad'=>$_POST['yorum_ad'],
'detay'=>$_POST['yorum_detay'],
'konum'=>$_POST['yorum_konum'],
'sira'=>$_POST['yorum_sira'],
'durum'=>$_POST['yorum_durum'],
'foto'=>$refimgyol
));

if ($insert) {
	Header("Location:../adminic/adminanasayfayorum.php?durumekle=ok");
}
else{
	Header("Location:../adminic/adminanasayfayorum.php?durumekle=no");
}
}
}


/*ANASAYFA YORUM EKLEME İŞLEMİ SONU*/


/*ANASAYFA YORUM UPDATE İŞLEMİ BAŞLANGICI*/
if (isset($_POST['duzenleanasayfayorum'])) {

	$id=$_GET['yorum_id'];

if ($_FILES['yorum_foto']["size"]>0) {
$uploads_dir='../../img/team-pps';

	@$tmp_name=$_FILES['yorum_foto']["tmp_name"];
	@$name=$_FILES['yorum_foto']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir,6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");


	
$yorumkaydet=$db->prepare("UPDATE anasayfa_yorum SET 
yorum_foto=:foto,
yorum_ad=:ad,
yorum_detay=:detay,
yorum_konum=:konum,
yorum_sira=:sira,
yorum_durum=:durum
WHERE yorum_id=$id");

$update=$yorumkaydet->execute(array(
'ad'=>$_POST['yorum_ad'],
'detay'=>$_POST['yorum_detay'],
'konum'=>$_POST['yorum_konum'],
'sira'=>$_POST['yorum_sira'],
'durum'=>$_POST['yorum_durum'],
'foto'=>$refimgyol
));

if ($update) {
	//Default fotoyu silmeyi unutma!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
	$resimsilunlink=$_GET['yorum_foto'];
	unlink("../../$resimsilunlink");
	Header("Location:../adminic/adminanasayfayorum.php?durum=ok");
}
else{
	Header("Location:../adminic/adminanasayfayorum.php?durum=no");
}
}else{

$yorumkaydet=$db->prepare("UPDATE anasayfa_yorum SET 
yorum_ad=:ad,
yorum_detay=:detay,
yorum_konum=:konum,
yorum_sira=:sira,
yorum_durum=:durum
WHERE yorum_id=$id");

$update=$yorumkaydet->execute(array(
'ad'=>$_POST['yorum_ad'],
'detay'=>$_POST['yorum_detay'],
'konum'=>$_POST['yorum_konum'],
'sira'=>$_POST['yorum_sira'],
'durum'=>$_POST['yorum_durum']
));

if ($update) {
	Header("Location:../adminic/adminanasayfayorum.php?durum=ok");
}
else{
	Header("Location:../adminic/adminanasayfayorum.php?durum=no");
}
}



}
/*ANASAYFA YORUM UPDATE İŞLEMİ SONU*/

/*ANASAYFA YORUM SİLME YAPILAN İŞLEMLERİN BAŞLANGICI*/
if ($_GET['yorumsil']=="ok") {
	$sil=$db->prepare("DELETE from anasayfa_yorum where yorum_id=:yorum_id");

	$kontrol=$sil->execute(array(
		'yorum_id'=>$_GET['yorum_id']
		));
if ($kontrol) {
	Header("Location:../adminic/adminanasayfayorum.php?durumsil=ok");
}
else{
	Header("Location:../adminic/adminanasayfayorum.php?durumsil=no");

}

}
/*ANASAYFA YORUM SİLME İŞLEMLERİN SONU*/

/*ANASAYFA YORUMLARI İLE ALAKALI İŞLEMLERİN SONU*/

/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/

?>