<?php
include 'header.php';


  $yoneticisor=$db->prepare("select * from hakkimizdabir order by yonetici_sira");
    $yoneticisor->execute();
  $count = $yoneticisor->rowCount();




  $hakkimizdasor=$db->prepare("SELECT * from hakkimizdaiki where id=?");
$hakkimizdasor->execute(array(0));
$hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);

?>

<section>
            <div class="container">
                <div class="row title">
                    <h2>Ekibimizle tanışın!</h2>
                    <h4>Takımımızın <?php echo $count; ?> üyesi de sizlere kendilerini göstermek için burada</h4>
                </div>
                <div class="row m-space">
                 
                    <!-- end of person -->
                    <?php while($yoneticicek=$yoneticisor->fetch(PDO::FETCH_ASSOC)){ 
                        if($yoneticicek['yonetici_durum']==1){?>

                    <div class="col-sm-4 col-md-3 col-xs-12">
                        <div class="team-profile">
                            <div class="team-pic" style="background-image:url(<?php echo $yoneticicek['yonetici_foto'];?>); height:344px;">
                            </div>
                            <div class="name center">
                                <p><?php echo $yoneticicek['yonetici_komisyon'];?></p>
                                <h3><?php echo $yoneticicek['yonetici_ad'];?>&nbsp;<?php echo $yoneticicek['yonetici_soyad'];?></h3>
                                <h9><?php echo $yoneticicek['yonetici_mail'];?></h6>
                                <div class="social">
                                    <a href="<?php echo $yoneticicek['yonetici_facebook'];?>"><i class="ion-social-facebook"></i></a>
                                    <a href="<?php echo $yoneticicek['yonetici_twitter'];?>"><i class="ion-social-twitter"></i></a>
                                    <a href="<?php echo $yoneticicek['yonetici_instagram'];?>"><i class="ion-social-instagram-outline"></i></a>
                                    <a href="<?php echo $yoneticicek['yonetici_linkedin'];?>"><i class="ion-social-linkedin-outline"></i></a>
                                </div>
                                <span><?php echo $yoneticicek['yonetici_telefon'];?></span>
                            </div>
                        </div>
                    </div>
                    <?php }
                    } ?>
                    <!-- end of person -->
                  
                    <!-- end of person -->
                </div>
            </div>
        </section>

<section class="center grey">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <img src="img/logo-banner.svg" class="bm-20" width="40" alt="">
                        <h5>EKİBİMİZ HAKKINDA</h5>
                        <h6><?php echo $hakkimizdacek['ekibimiz_hakkinda'];?></h6>
                    </div>
                </div>
            </div>
        </section>

         <!-- Pictures -->

<?php 
 $fotosor=$db->prepare("SELECT * FROM galeri_foto order by rand() limit 4");
 $fotosor->execute();
  
 ?>

        <div class="image-row no-pad">
            <div class="container-fluid no-max no-pad">
                <div class="row">
                    

<?php while($fotocek=$fotosor->fetch(PDO::FETCH_ASSOC)){ 
              if ($fotocek['foto_durum']==1) { ?>
              <div class="col-sm-3 col-xs-6">
                        <div class="fw-image">
                            <a href="<?php echo $fotocek['foto']; ?>" data-lity>
                                <img style="width: 476px; height: 317px;" src="<?php echo $fotocek['foto']; ?>" alt="">
                            </a>
                        </div>
                        </div>
                    <?php }
                    } ?>


                    
                    

                </div>
            </div>
        </div>

<!-- Work with us -->
        <div id="c_workwithus" class="area center primary">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <span class="promo-heading">Siz de bu ekibin bir parçası olmak ister misiniz?</span>
                        <a href="register-form.php" class="btn"><span>ŞİMDİ ÜYE OL</span></a>
                    </div>
                </div>
            </div>
        </div>

<?php
include 'footer.php';
?>



