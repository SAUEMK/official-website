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


if (isset($_POST['mesajgonder'])) {


$tarih = date('d.m.Y H:i:s');

$kaydet=$db->prepare("INSERT INTO iletisim SET 
isim=:isim,
email=:email,
telno=:telno,
tarih=:tarih,
mesaj=:mesaj");

$insert=$kaydet->execute(array(
'isim'=>$_POST['isim'],
'email'=>$_POST['email'],
'telno'=>$_POST['telno'],
'tarih'=>$tarih,
'mesaj'=>$_POST['mesaj']
));

if ($insert) {
	Header("Location:../../contact-us.php?send=true");
}
else{
	Header("Location:../../contact-us.php?send=false");
}
}

if (isset($_POST['mesajgonderanasayfa'])) {


$tarih = date('d.m.Y H:i:s');

$kaydet=$db->prepare("INSERT INTO iletisim SET 
isim=:isim,
email=:email,
telno=:telno,
tarih=:tarih,
mesaj=:mesaj");

$insert=$kaydet->execute(array(
'isim'=>$_POST['isim'],
'email'=>$_POST['email'],
'telno'=>$_POST['telno'],
'tarih'=>$tarih,
'mesaj'=>$_POST['mesaj']
));

if ($insert) {
	Header("Location:../../index.php?send=true");
}
else{
	Header("Location:../../index.php?send=false");
}
}

if ($_GET['mesajsil']=="ok") {
	$sil=$db->prepare("DELETE from iletisim where id=:id");

	$kontrol=$sil->execute(array(
		'id'=>$_GET['id']
		));
if ($kontrol) {
	Header("Location:../adminic/adminindex.php?durumsil=ok");
}
else{
	Header("Location:../adminic/adminindex.php?durumsil=no");

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