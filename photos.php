<?php
include 'header.php';
    $fotosor=$db->prepare("select * from galeri_foto order by foto_sira");
    $fotosor->execute();

$id = $_GET['album_id'];

    $albumsor=$db->prepare("SELECT * from galeri where album_id=?");
$albumsor->execute(array($id));
$albumcek=$albumsor->fetch(PDO::FETCH_ASSOC);
?>

<!-- Header -->
<header id="sp3" class="dark1" style="background-image:url(img/headers/subpage.jpg)"
            data-overlay="9">
            <div class="header-in">
                <div class="caption2">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 page-title">
                                <h1 class="h3"><?php echo $albumcek['album_adi']; ?></h1></div>
                            <div class="col-xs-6 right breadcrumbs hidden-xs">
                                <a href="gallery.php"><i class="ion-arrow-return-left"></i>Geri dön</a> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
<section class="no-pad">
            <div class="container-fluid no-max no-pad">
                <div class="row">
  <div class="masonry four-col no-margin">
                        <div class="grid-sizer"></div>
                        <?php
                        while($fotocek=$fotosor->fetch(PDO::FETCH_ASSOC)){
                            $id = $_GET['album_id'];
                            if($id == $fotocek['album_id']){
                                if($fotocek['foto_durum']==1){ ?>




                    <!-- Masonry -->
                  
                        
                        <div class="grid-item">
                
                            <a href="<?php echo $fotocek['foto']; ?>" data-lity><img src="<?php echo $fotocek['foto']; ?>" alt="">
                            </a>
                        </div>
                        <!-- end of item -->
                        <?php   }
                             }
                          }
                        ?>
                    </div>
                </div>
            </div>
        </section>
 

<?php
include 'footer.php';
?>