<?php
include 'header.php';

 $post_id=$_GET['post_id'];

$konusor=$db->prepare("SELECT * from blogpost where post_id=?");
$konusor->execute(array($post_id));
$konucek=$konusor->fetch(PDO::FETCH_ASSOC);


$hit =$konucek['post_hit'];// hit sayımızı aldık 
$hitno = $hit + 1; //ekrandaki sayıyı 1 artıralım 

$duzenle=$db->prepare("UPDATE blogpost SET 
post_hit=:hit
WHERE post_id= $post_id");

$update=$duzenle->execute(array(
'hit'=>$hitno
));

 $kat_id=$konucek['kat_id'];

$kategorisor=$db->prepare("SELECT * from kategoriler where kat_id=?");
$kategorisor->execute(array($kat_id));
$kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC);
?>

<header id="sp1" class="center parallax-container dark" data-overlay="9">
    <div class="parallax"><img src="<?php echo $konucek['post_foto']; ?>" alt=""></div>
        <div class="header-in">
            <div class="caption">
                    <span class="tag"><?php echo $kategoricek['kat_ad']; ?></span>
                    <h1><?php echo $konucek['post_baslik']; ?></h1>
                    <p class="banner-date"><?php echo $konucek['post_tarih']; ?> - <?php echo $konucek['yazan_ad']; ?></p>
            </div>
        <img class="arrow" src="img/arrow.svg" alt="">
    </div>
</header>

<section>
            <div class="container border">
               <?php echo $konucek['post_detay']; ?>
            </div>
        </section>

        <div class="area blog-social">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 hidden-xs">
                        <h3>Bu gönderiyi paylaşmak ister misiniz?</h3>
                    </div>
                    <div class="col-sm-6 col-xs-12 right xs-center">
                        <div class="social">
                            <a href="#"><i class="ion-social-facebook"></i></a>
                            <a href="#"><i class="ion-social-twitter"></i></a>
                            <a href="#"><i class="ion-social-linkedin-outline"></i></a>
                            <a href="#"><i class="ion-social-googleplus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

         <section class="grey">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="posted-by">
                            <h3><?php echo $konucek['yazan_ad']; ?></h3>
                            <div>
                                <img src="<?php echo $konucek['yazan_foto']; ?>" alt="">
                                <?php echo $konucek['yazan_detay']; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="dark1">
            <div class="container">
                <div class="row title">
                    <h2>Öne çıkan haberler</h2>
                </div>

                <div class="row m-space">
 <?php                            
              $konusor=$db->prepare("select * from blogpost order by post_hit DESC limit 3");
              $konusor->execute();
     

               while($konucek=$konusor->fetch(PDO::FETCH_ASSOC)){  
                $detay = $konucek['post_detay'];
                    $uzunluk = strlen($detay);
                    $limit =250;
                  
                $kat_id = $konucek['kat_id'];

                                       $kategorisor=$db->prepare("select * from kategoriler where kat_id=:id");
              $kategorisor->execute(array(
                'id'=>$kat_id
                ));?>
                                   <div class="col-md-4">
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
                        </div>
                        <!-- end of item -->

<?php } ?>

</div>
            </div>
        </section>

        <!-- Comment Listing -->
        <section class="comment-list">
            <div class="container border">
                <div class="row title">
                    <div class="col-md-10 col-md-offset-1">
                        <h2>Peki siz ne düşünüyorsunuz?</h2>
                    </div>
                </div>
<?php                             
    $yorumsor=$db->prepare("select * from blog_yorum order by tarih");
    $yorumsor->execute();
?>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                       
<?php while($yorumcek=$yorumsor->fetch(PDO::FETCH_ASSOC)){
if($yorumcek['onay']==1){ 
                  if($post_id==$yorumcek['post_id']){ ?>
                        <div class="comment">
                            <h4> <?php echo $yorumcek['isim']; ?> </h4>
                            <p class="date-posted"><?php echo $yorumcek['tarih']; ?></p>
                            <p><?php echo $yorumcek['yorum']; ?></p>
                        </div>
                <?php } ?>
            <?php } ?>
<?php } ?>

                    </div>
                </div>
            </div>
        </section>

        <!-- Contact -->
        <section id="c_contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 title">
                        <h2>Yorumunuzu bırakın</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
<!--class="contact-form"--> <form  action="admin/baglantii/blogislem.php?post_id=<?php echo $_GET['post_id']; ?>" method="POST" >
                            <div class="input-field col-sm-12">
                                <div class="form-group">
                                    <input id="form-name" name="isim" type="text" placeholder="İsminiz *" required="required"
                                        data-error="Bu alanın doldurulması zorunludur.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="input-field col-sm-6">
                                <div class="form-group">
                                    <input id="form-email" name="email" type="email" placeholder="E-posta adresiniz *" required="required"
                                        data-error="Bu alanın doldurulması zorunludur.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="input-field col-sm-6">
                                <div class="form-group">
                                    <input id="form-web" name="website" type="text" placeholder="Web siteniz" data-error="">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="input-field col-sm-12">
                                <div class="form-group">
                                    <textarea id="form-textarea" name="yorum" id="" cols="30" rows="5" placeholder="Mesajınızı buraya yazabilirsiniz *" required="required" data-error="Bu alanın doldurulması zorunludur."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-sm-12 center">
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-4">
                                            <button  onclick="return confirm('Tamama bastığınızda yorumunuz onaylanmak için listeye alınacaktır. Onaylandığında yorumunuzu ekranda görebilirsiniz. Onaylanmazsa bu size bir mail ile bildirilecektir.')" type="submit" name="yorumyap" class="btn green">Ekle</button>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>













<?php
include 'footer.php';
?>