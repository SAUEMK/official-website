<?php

ob_start();
session_start();
error_reporting(0);
	
date_default_timezone_set('Europe/Istanbul');

include 'baglan.php';


/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/
/*						SAÜEMK						*/


if (isset($_POST['kategoriekle'])) {

if ($_FILES['kat_foto']["size"]>0) {
	 $uploads_dir='../../img/kategoriler';

	@$tmp_name=$_FILES['kat_foto']["tmp_name"];
	@$name=$_FILES['kat_foto']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir,6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

$kaydet=$db->prepare("INSERT INTO kategoriler SET 
kat_ad=:ad,
kat_foto=:fot,
kat_aciklama=:aciklama");

$insert=$kaydet->execute(array(
'ad'=>$_POST['kat_ad'],
'fot'=>$refimgyol,
'aciklama'=>$_POST['kat_aciklama']
));

if ($insert) {
	Header("Location:../adminic/adminkategori.php?durumekle=ok");
}
else{
	Header("Location:../adminic/adminkategori.php?durumekle=no");
}
}else{
	Header("Location:../adminic/adminkategori.php?durumekle=no");
}
}

if ($_GET['katsil']=="ok") {
	$sil=$db->prepare("DELETE from kategoriler where kat_id=:kat_id");

	$kontrol=$sil->execute(array(
		'kat_id'=>$_GET['kat_id']
		));
if ($kontrol) {
	Header("Location:../adminic/adminkategori.php?durumsil=ok");
}
else{
	Header("Location:../adminic/adminkategori.php?durumsil=no");

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




if (isset($_POST['konuekle'])) {


if ($_FILES['post_foto']["size"]>0) {
	 $uploads_dir='../../img/konular';

	@$tmp_name=$_FILES['post_foto']["tmp_name"];
	@$name=$_FILES['post_foto']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir,6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

$tarih = date('d.m.Y');

$kaydet=$db->prepare("INSERT INTO blogpost SET 
kat_id=:id,
post_baslik=:baslik,
post_tarih=:tarih,
post_detay=:detay,
post_onay=:onay,
yazan_ad=:ad,
yazan_foto=:yazan_foto,
yazan_detay=:yazan_detay,
post_foto=:foto");

$insert=$kaydet->execute(array(
'id'=>$_POST['kat_id'],
'baslik'=>$_POST['post_baslik'],
'tarih'=>$tarih,
'detay'=>$_POST['post_detay'],
'onay'=>$_POST['post_onay'],
'ad'=>$_POST['yazan_ad'],
'yazan_foto'=>$_POST['yazan_foto'],
'yazan_detay'=>$_POST['yazan_detay'],
'foto'=>$refimgyol
));

if ($insert) {
	Header("Location:../adminic/adminkonu.php?durumekle=ok");
}
else{
	Header("Location:../adminic/adminkonu.php?durumekle=no");
}
}else{
	Header("Location:../adminic/adminkonu.php?fotoekle=no");
}
}


if ($_GET['postsil']=="ok") {
	$sil=$db->prepare("DELETE from blogpost where post_id=:post_id");

	$kontrol=$sil->execute(array(
		'post_id'=>$_GET['post_id']
		));
if ($kontrol) {
	Header("Location:../adminic/adminkonu.php?durumsil=ok");
}
else{
	Header("Location:../adminic/adminkonu.php?durumsil=no");

}

}



if (isset($_POST['konuduzenle'])) {
	

 $id = $_GET['post_id'];
if ($_FILES['post_foto']["size"]>0 && $_POST['kat_id']!='') {
	 $uploads_dir='../../img/konular';

	@$tmp_name=$_FILES['post_foto']["tmp_name"];
	@$name=$_FILES['post_foto']["name"];
	$benzersizsayi1=rand(20000,32000);
	$benzersizsayi2=rand(20000,32000);
	$benzersizsayi3=rand(20000,32000);
	$benzersizsayi4=rand(20000,32000);
	$benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
	$refimgyol=substr($uploads_dir,6)."/".$benzersizad.$name;
	@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");



$duzenle=$db->prepare("UPDATE blogpost SET 
post_baslik=:baslik,
post_detay=:detay,
post_onay=:onay,
post_foto=:foto
WHERE post_id=$id");

$update=$duzenle->execute(array(
'baslik'=>$_POST['post_baslik'],
'detay'=>$_POST['post_detay'],
'onay'=>$_POST['post_onay'],
'foto'=>$refimgyol
));

if ($update) {
	Header("Location:../adminic/adminkonu.php?durumguncel=ok");
}
else{
	Header("Location:../adminic/adminkonu.php?durum=no");
}
}else{

$duzenle=$db->prepare("UPDATE blogpost SET
post_baslik=:baslik,
post_detay=:detay,
post_onay=:onay
WHERE post_id=$id");

$update=$duzenle->execute(array(
'baslik'=>$_POST['post_baslik'],
'detay'=>$_POST['post_detay'],
'onay'=>$_POST['post_onay']
));

if ($update) {
	Header("Location:../adminic/adminkonu.php?durumguncel=ok");
}
else{
	Header("Location:../adminic/adminkonu.php?durum=no");
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



if (isset($_POST['yorumyap'])) {

$id = $_GET['post_id'];
$tarih = date('d.m.Y');

$kaydet=$db->prepare("INSERT INTO blog_yorum SET 
post_id=:id,
isim=:isim,
tarih=:tarih,
email=:email,
website=:website,
yorum=:yorum");

$insert=$kaydet->execute(array(
'id'=>$id,
'isim'=>$_POST['isim'],
'tarih'=>$tarih,
'email'=>$_POST['email'],
'website'=>$_POST['website'],
'yorum'=>$_POST['yorum']
));

if ($insert) {
	Header("Location:../../blog-post.php?post_id=$id");
}
else{
	Header("Location:../../blog-post.php?post_id=$id");
}
}


if ($_GET['yorumsil']=="ok") {
	$sil=$db->prepare("DELETE from blog_yorum where yorum_id=:yorum_id");

	$kontrol=$sil->execute(array(
		'yorum_id'=>$_GET['yorum_id']
		));
if ($kontrol) {
	Header("Location:../adminic/adminyorum.php?durumsil=ok");
}
else{
	Header("Location:../adminic/adminyorum.php?durumsil=no");

}

}





if (isset($_POST['yorumduzenle'])) {
	

 $id = $_GET['yorum_id'];

$duzenle=$db->prepare("UPDATE blog_yorum SET 
onay=:onay
WHERE yorum_id=$id");

$update=$duzenle->execute(array(
'onay'=>$_POST['onay']
));

if ($update) {
	Header("Location:../adminic/adminyorum.php?durumguncel=ok");
}
else{
	Header("Location:../adminic/adminyorum.php?durum=no");
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
?>