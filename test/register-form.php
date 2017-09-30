<?php
include 'header.php';


$id = $_GET['id'];

$yaklasanetkinliksor=$db->prepare("SELECT * from yaklasanetkinlikler where id=?");
$yaklasanetkinliksor->execute(array($id));
$yaklasanetkinlikcek=$yaklasanetkinliksor->fetch(PDO::FETCH_ASSOC);



if (isset($id)) { ?>
<iframe src="<?php echo $yaklasanetkinlikcek['kayitform'];?>" width="100%" height="1500" frameborder="0" marginheight="0" marginwidth="0">Yükleniyor...</iframe>
 <?php }else{ ?>
 <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdlTQTvbohqWwN9rvAy3nt9BrgLuoLNz9Ru-_BeE9UqN79xFw/viewform?embedded=true" width="100%" height="1500" frameborder="0" marginheight="0" marginwidth="0">Yükleniyor...</iframe>
   <?php  } ?>


<?php
include 'footer.php';
?>