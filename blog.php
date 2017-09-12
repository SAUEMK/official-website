<?php
include 'header.php';
?>

<section>
            <div class="container-fluid no-max">
                <div class="row">

                    <!-- Blog -->
                    <div class="col-md-9">
                        <div class="blog three-col">
                            <div class="blog-sizer"></div>

   <?php


                                   
              $konusor=$db->prepare("select * from blogpost order by post_tarih");
              $konusor->execute();

              $sayfada=10;
              $sorgu=$db->prepare("select * from blogpost");
              $sorgu->execute();
              $say=$sorgu->rowCount();
              $toplam=ceil($say/$sayfada);
              $sayfa=isset($_GET['sayfa']) ? (int) $_GET['sayfa'] :1;
              if($sayfa<1) $sayfa=1;
              if($sayfa>$toplam) $sayfa=$toplam;
              $limit=($sayfa-1)*$sayfada;
              $konusor=$db->prepare("select * from blogpost order by post_tarih DESC limit $limit,$sayfada");
              $konusor->execute();





               while($konucek=$konusor->fetch(PDO::FETCH_ASSOC)){ 
               $kat_id = $konucek['kat_id'];

                                       $kategorisor=$db->prepare("select * from kategoriler where kat_id=:id");
              $kategorisor->execute(array(
                'id'=>$kat_id
                ));
                  $detay = $konucek['post_detay'];
                    $uzunluk = strlen($detay);
                    $limit =250;
                  ?>



                            <div class="blog-item">
                            <div class="thumb1">
                                <a href="blog-post.php?post_id=<?php echo $konucek['post_id']; ?>">
                                    <img src="<?php echo $konucek['post_foto']; ?>" alt="">
                                </a>
                            </div>
                            <div class="article">
                                <?php while($kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC)){  ?>
                                <span class="tag"><?php echo $kategoricek['kat_ad']; ?></span>
                                <?php } ?>
                                <a href="blog-post.php?post_id=<?php echo $konucek['post_id']; ?>">
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



                    </div>


                         <div class="row blog-controls center">



 <ul class="pagination">
        <?php 
        $s=0;
        while ($s <$toplam) {
          $s++;?> 
        
        <?php if ($s==$sayfa) {?>


           <li class="active"><a href="blog.php?sayfa=<?php echo $s; ?>"><?php echo $s; ?><span class="sr-only"></span></a></li>

        
       <?php } else { ?>
           <li ><a href="blog.php?sayfa=<?php echo $s; ?>"><?php echo $s; ?><span class="sr-only"></span></a></li>

        <?php } 
          }
          ?>
        </ul>





                        </div>
                




                </div>

                    <div class="col-md-3 sidebar">
                        <div class="item">
                            <h3>Kategoriler</h3>
                            <hr>
                     <?php                                   
                          $kategorisor=$db->prepare("select * from kategoriler order by kat_ad");
                          $kategorisor->execute();
                        ?>

                            <ul class="list">
                            <?php   while($kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC)){ ?>
                                <li><a href="blog-cat.php?kat_id=<?php echo $kategoricek['kat_id']; ?>"><?php echo $kategoricek['kat_ad']; ?></a></li>
                                <?php } ?>
                            </ul>



                        </div>

<?php      $konusor=$db->prepare("select * from blogpost order by post_hit limit 5");
              $konusor->execute();

            ?>


                        <div class="item">
                            <h3>En çok ziyaret edilenler</h3>
                            <hr>
                            


<?php  while($konucek=$konusor->fetch(PDO::FETCH_ASSOC)){ 
             ?><div class="row">
                                <a href="blog-post.php?post_id=<?php echo $konucek['post_id']; ?>">
                                    <div class="col-xs-4 image-fw">
                                        <img style="height: 70px;width: 70px;" src="<?php echo $konucek['post_foto']; ?>" alt="">
                                    </div>
                                    <div class="col-xs-8">
                                        <h3 class="lp-title"><?php echo $konucek['post_baslik']; ?></h3>
                                    </div>
                                </a>
</div>
<?php } ?>


                            
                        </div>
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
                        <form action="">
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