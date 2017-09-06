<?php
include 'header.php';


$fotosor=$db->prepare("select * from galeri_foto order by foto_sira");
$fotosor->execute();
?>

<!-- Gallery -->
        <section class="gallery">
            <div class="container">
                <div class="row">
                    <div class="col col-md-6 col-md-offset-3 title">
                        <h2>Öne çıkanlar</h2>
                        <h4>Yaptığımız etkinliklerden en iyi fotoğraflar</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="center-loop">
                          
<?php 
            while($fotocek=$fotosor->fetch(PDO::FETCH_ASSOC)){ 
              if ($fotocek['foto_onecikar']==1) {?>
  <div>
                                <a href="<?php echo $fotocek['foto']; ?>" data-lity>
                                    <img src="<?php echo $fotocek['foto']; ?>" alt="">
                                </a>
                                       </div>
                              <?php }
                                } ?>
                     
                         
                        </div>  
                    </div>
                </div>
            </div>
        </section>

<!-- Tabs -->
<section>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 title">
                        <h2>Tüm Fotoğraflar</h2>
                        <h4>Tek galeri, bütün arşiv</h4>
                    </div>
                </div>
                <div class="row m-space portfolio list">
 <?php


                                   
              $albumsor=$db->prepare("select * from galeri order by album_sira");
              $albumsor->execute();
              while($albumcek=$albumsor->fetch(PDO::FETCH_ASSOC)){ 
              if ($albumcek['album_durum']==1) {?>


                    <div class="col-md-3 col-xs-6 mh">
                        <a href="photos.php?album_id=<?php echo $albumcek['album_id']; ?>">
                            <div class="project-image">
                                <img src="<?php echo $albumcek['album_kapakfoto']; ?>" alt="">
                            </div>
                            <div class="project-info">
                               <!-- <h5>22.02.2017</h5> -->
                                <h3><?php echo $albumcek['album_adi']; ?></h3>
                                <ul class="tags">
                                    <li><!--DOLDUR AQ--></li>
                                </ul>
                            </div>
                        </a>
                    </div>
                    <!-- end of item -->
     <?php   } ?>
  
   
<?php } ?>

                </div>
            </div>
        </section>
        
<?php
include 'footer.php';
?>