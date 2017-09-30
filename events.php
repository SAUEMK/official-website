<?php
include 'header.php';

  $etkinliksor=$db->prepare("select * from yaklasanetkinlikler order by tarih DESC");
    $etkinliksor->execute();
    $var1 = 'img/event-icon/proje.png';
    $var2 = 'img/event-icon/egitim.png';
    $var3 = 'img/event-icon/sosyal-faaliyet.png';
    $var4 = 'img/event-icon/teknik-gezi.png';
    $var5 = 'img/event-icon/toplumsal-duyarlılık.png';//Her yere eklenecek 
?>

	<section id="cd-timeline" class="cd-container" style="margin-top: 100px;">
		
   <?php while($etkinlikcek=$etkinliksor->fetch(PDO::FETCH_ASSOC)){ ?>
   	<?php if ($etkinlikcek['onay']==1){ ?>
   		

		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-picture">
				<img  src="<?php /*if($etkinlikcek['tur']==0){ 
						echo $var1;
				}else if($etkinlikcek['tur']==1){
						echo $var2;
				}else if($etkinlikcek['tur']==2){
						echo $var3;
				}else if($etkinlikcek['tur']==3){
						echo $var3;
				}   */?>" alt="">
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content" style="font-size: 100% !important;">
				<img style="width:380px;height: 500px;" src="<?php echo $etkinlikcek['afis']; ?>">
				<h2 style="font-size: 150% !important;"><?php echo $etkinlikcek['adi']; ?></h2>
				<?php echo $etkinlikcek['detay']; ?>
				<?php if ($etkinlikcek['formonay']==1) { ?>
				<a href="register-form.php?id=<?php echo $etkinlikcek['id']; ?>" class="cd-read-more" style="font-size: 100% !important;">Kayıt Ol</a>
				<?php } ?>
				
				<span class="cd-date" style="font-size: 110% !important;"><?php echo $etkinlikcek['tarih']; ?></span>
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->
		   	<?php } ?>
<?php } ?>
		
	
	</section> <!-- cd-timeline -->

<?php
include 'footer.php';
?>