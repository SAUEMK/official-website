 <?php
include 'header.php';

 $kat_id=$_GET['kat_id'];

$kategorisor=$db->prepare("SELECT * from kategoriler where kat_id=?");
$kategorisor->execute(array($kat_id));
$kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC);

?>
 
 <!-- Header -->
        <header id="sp2" class="center parallax-container dark" data-overlay="9">
            <div class="parallax"><img src="<?php echo $kategoricek['kat_foto']; ?>" alt=""></div>
            <div class="header-in">
                <div class="caption">
                    <h5>KATEGORİLER</h5>
                    <h1><?php echo $kategoricek['kat_ad']; ?></h1>
                    <h6><?php echo $kategoricek['kat_aciklama']; ?></h6>
                </div>
                <img class="arrow" src="img/arrow.svg" alt="">
            </div>
        </header>

        <section>
            <div class="container">
                <div class="row">

                    <!-- Blog -->
                    <div class="blog three-col">
                        <div class="blog-sizer"></div>



  <?php                            
              $konusor=$db->prepare("select * from blogpost order by post_tarih");
              $konusor->execute();
     

               while($konucek=$konusor->fetch(PDO::FETCH_ASSOC)){   
                    $detay = $konucek['post_detay'];
                    $uzunluk = strlen($detay);
                    $limit =250;
                  ?>
<?php if ($kat_id==$konucek['kat_id']){ ?>
    <div class="blog-item">
                            <div class="thumb1">
                                <a href="blog-post.php?post_id=<?php echo $konucek['post_id']; ?>">
                                    <img src="<?php echo $konucek['post_foto']; ?>" alt="">
                                </a>
                            </div>
                            <div class="article">
                                <span class="tag"><?php echo $kategoricek['kat_ad']; ?></span>
                                <a href="blog-post.php">
                                    <p><?php echo $konucek['post_tarih']; ?></p>
                                    <h3><?php echo $konucek['post_baslik']; ?></h3>
                                </a>
                               <?php  if ($uzunluk > $limit) {
                                      $detay = substr($detay,0,$limit) . " ...";
                                    } ?>
                                   <?php echo $detay ?>
                                <hr>
                                <h5 class="author"><?php echo $konucek['yazan_ad']; ?></h5>
                            </div>
                        </div>
                        <!-- end of item -->
<?php } ?>

                            

<?php } ?>

                       



                    </div>
                </div>
            </div>
        </section>

        <div id="c_newsletter" class="area center parallax-container dark" data-overlay="8">
            <div class="parallax"><img src="img/newsletter/01.jpg" alt=""></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <span class="promo-heading">
                  Haber akışımıza abone olun
               </span>
                        <form action="http://dev.premonday.com/arisn/post">
                            <input type="text" placeholder="E-posta adresiniz">
                            <input type="submit" value="Abone Ol">
                            <p class="note">*E-postanız reklam amaçlı kullanılmayacaktır</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>

<?php
include 'footer.php';
?>