<?php
include 'header.php';
    $karsilasor=$db->prepare("SELECT * from karsila where karsila_id=?");
$karsilasor->execute(array(0));
$karsilacek=$karsilasor->fetch(PDO::FETCH_ASSOC);
 ?>


<header id="neutral" class="dark1 center" style="background-image:url(<?php echo $karsilacek['karsila_arkaplan']?>);"
            data-overlay="8">
            <div class="header-in">
                <div class="caption">
             
                    <h1><a href="play/snake/game.html">🔶</a><?php echo $karsilacek['karsila_byazi']?><a href="play/birdy/game.html">🔷</a></h1>
                    <h6><?php echo $karsilacek['karsila_kyazi']?></h6>
                    <a href="<?php echo $karsilacek['karsila_video']?>" class="btn alt playvideo" data-lity><span><i class="ion-ios-play-outline"></i>Oynat</span></a>
                </div>
                <img class="arrow" src="img/arrow.svg" alt="">
            </div>
        </header>

        <section class="iconblock center">
            <div class="container">
                <div class="row">
                    <div class="col col-md-6 col-md-offset-3 title">
                        <h2>Peki, biz kimiz?</h2>
                        <h4>Önce biraz kendimizden bahsedelim</h4>
                    </div>
                </div>

                <?php   $hakkimizdasor=$db->prepare("SELECT * from hakkimizdaiki where id=?");
$hakkimizdasor->execute(array(0));
$hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC); ?>
                <div class="row m-space">
                    <div class="col-sm-6 col-md-4">
                        <i class="fa fa-ravelry" aria-hidden="true"></i>
                        <h3>Kuruluşumuz</h3>
                        <p><?php echo $hakkimizdacek['kurulusumuz'];?></p>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <i class="fa fa-wpexplorer" aria-hidden="true"></i>
                        <h3>Amacımız</h3>
                        <p><?php echo $hakkimizdacek['amacimiz'];?></p>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <i class="fa fa-trophy" aria-hidden="true"></i>
                        <h3>Ödüllerimiz</h3>
                        <p><?php echo $hakkimizdacek['odullerimiz'];?></p>
                    </div>
                </div>
            </div>
        </section>

          <!-- Gallery
        <section class="gallery no-lr-pad dark2">
            <div class="container-fluid no-pad">
                <div class="row">
                    <div class="col col-md-6 col-md-offset-3 title">
                        <h2>Etkinliklerimiz</h2>
                        <h4>Biraz da kulüp olarak neler yapmışız ona bakalım</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="center-loop-fade">

<?php//  $yaklasanetkinliksor=$db->prepare("select * from yaklasanetkinlikler order by sira");
    //$yaklasanetkinliksor->execute();
                           
//while($yaklasanetkinlikcek=$yaklasanetkinliksor->fetch(PDO::FETCH_ASSOC)){ ?>


                            <div>
                                <a href="<?php echo $yaklasanetkinlikcek['afis']; ?>" data-lity>
                                    <img src="<?php echo $yaklasanetkinlikcek['afis']; ?>" alt="">
                                    <span><?php echo $yaklasanetkinlikcek['adi']; ?></span>
                                </a>
                            </div>
                        
<?php //} ?>

                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- Counter -->
        <section id="c_counter" class="center dark parallax-container" data-overlay="7">
            <?php   $parallaxsor=$db->prepare("SELECT * from parallax where parallax_id=?");
$parallaxsor->execute(array(0));
$parallaxcek=$parallaxsor->fetch(PDO::FETCH_ASSOC); ?>
            <div class="parallax"><img src="<?php echo $parallaxcek['parallax_bir'];?>" alt=""></div>

            <?php //ayar tablosuna eklenecek ?>
            <div class="container-fluid">
                <div class="row m-space">
                    <div class="col-md-3 col-xs-6">
                        <i class="fa fa-user-circle" aria-hidden="true"></i>
                        <h2>11,500</h2>
                        <p>Kayıtlı üye</p>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <i class="fa fa-eercast" aria-hidden="true"></i>
                        <h2>450</h2>
                        <p>Yapılan etkinlik</p>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                        <h2>10,000,000+ dk</h2>
                        <p>Eğlendiğimiz süre</p>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <?php //ayar tablosuna eklenecek 
                         /* $sponsorsor=$db->prepare("select * from sponsor order by sponsor_sira");
                          $sponsorsor->execute();
                          $count = $sponsorsor->rowCount();*/
                        ?>
                        <i class="fa fa-briefcase" aria-hidden="true"></i>
                        <h2>60</h2>
                        <p>Sponsor</p>
                    </div>
                </div>
            </div>
        </section>


        <section class="grey">
            <div class="container">
            <div class="row">
                <div class="col-md-8">
                <h5>VE SON OLARAK</h5>
                    <h2>Sizin için seçtiğimiz en güncel olaylar</h2>
                </div>
            </div>
                <div class="row">
<?php                      
              $konusor=$db->prepare("select * from blogpost order by post_hit DESC limit 21");
              $konusor->execute();

               while($konucek=$konusor->fetch(PDO::FETCH_ASSOC)){  


                  ?>

                    <div class="col-md-4">
                        <div class="news-item short no-border">
                            <div class="article-short">
                                <div class="user-pic">
                                    <img style="width: 50px; height:50px;" src="<?php echo $konucek['post_foto']; ?>" alt="">
                                </div>
                                <a href="blog-post.php?post_id=<?php echo $konucek['post_id']; ?>">
                                    <h3><?php echo $konucek['post_baslik']; ?></h3>
                                    <p><?php echo $konucek['post_tarih']; ?></p>
                                </a>
                            </div>
                        </div>
                    </div>
<?php } ?>


                        <!-- end of news-item -->
                        
                        <!-- end of news-item -->
                </div>
            </div>
        </section>

        <!-- Testimonials -->
        

<?php 
     $yorumsor=$db->prepare("select * from anasayfa_yorum order by yorum_sira");
    $yorumsor->execute();
                           

 ?>
                        
                         <section id="c_testimonials" class="center parallax-container dark" data-overlay="8">
        <div class="parallax"><img src="<?php echo $parallaxcek['parallax_iki'];?>" alt=""></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="slider">
                       
<?php while($yorumcek=$yorumsor->fetch(PDO::FETCH_ASSOC)){ 
if ($yorumcek['yorum_durum'] ==1) { ?>
        <div>
<?php           if($yorumcek['yorum_foto'] ==''){?>
                    <td > <img class="person" style="width: 100px;height: 100px;" src="<?php echo $yorumcek['yorum_defaultfoto']; ?>"></td>
                <?php }else{ ?>
                    <td>  <img class="person" style="width: 100px;height: 100px;" src="<?php echo $yorumcek['yorum_foto']; ?>"></td>
                <?php } ?>
                <h6>
                    “<?php echo $yorumcek['yorum_detay']; ?>”
                </h6>
                <h3>- <?php echo $yorumcek['yorum_ad']; ?></h3>
                <h5 class="no-pad-top"><?php echo $yorumcek['yorum_konum']; ?></h5>
        </div>
<?php } 
} ?>


                       
                        <h3>Kulübümüz hakkında yaptığınız geri dönüşler bizim için çok önemli. Bizim için bir yorum yapmak ister misiniz?<br><br><a href="comment.php" class="btn"><span>Yorum bırakın</span></a></h3>
                </div>
            </div>
        </div>
    </section>
                     
					 
					 <!-- Social -->
        <div class="social-strip dark3 center">
            <div class="container-fluid">
								   
                <div class="row">
                    <div class="col-xs-2 social facebook"><a href="<?php echo $ayarcek['ayar_facebook'];?>"><i class="fa fa-facebook"></i></a></div>
                    <div class="col-xs-2 social twitter"><a href="<?php echo $ayarcek['ayar_twitter'];?>"><i class="fa fa-twitter"></i></a></div>
                    <div class="col-xs-2 social instagram"><a href="<?php echo $ayarcek['ayar_instagram'];?>"><i class="fa fa-instagram"></i></a></div>
                    <div class="col-xs-2 social linkedin"><a href="<?php echo $ayarcek['ayar_linkedin'];?>"><i class="fa fa-linkedin"></i></a></div>
                    <div class="col-xs-2 social googleplus"><a href="<?php echo $ayarcek['ayar_google'];?>"><i class="fa fa-google"></i></a></div>
                    <div class="col-xs-2 social youtube"><a href="<?php echo $ayarcek['ayar_youtube'];?>"><i class="fa fa-youtube"></i></a></div>
						 
													 
																					  
								  
																																																																		 
						  
                </div>
            </div>
        </div>

        <!-- Contact -->
        <section id="c_contact">
            <div class="container">
                <div class="row">
                     <div class="col-md-6 col-sm-7">
                        <h4>Bize ulaşmak mı istiyordunuz?</h4>
                        <?php if ($_GET['send']=='true'){ ?>
                            <h5>Mesajınız başarıyla gönderildi.</h5>
                       <?php }else if($_GET['send']=='false'){?>
                            <h5>Bir hata oluştu. İnternet bağlantınızı kontrol edip tekrar deneyin.</h5>
                       <?php } ?>
                        <hr>        <!--class="contact-form"-->
                        <form  method="POST" action="admin/baglantii/iletisimislem.php">
                            <div class="input-field col-sm-12">
                                <div class="form-group">
                                    <input class="col-md-10" id="form-name" name="isim" type="text" placeholder="İsminiz *" required="required"
                                        data-error="Bu alanın doldurulması zorunludur.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="input-field col-sm-12">
                                <div class="form-group">
                                    <input class="col-md-10" id="form-email" name="email" type="email" placeholder="E-posta adresiniz *" required="required"
                                        data-error="Bu alanın doldurulması zorunludur.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="input-field col-sm-12">
                                <div class="form-group">
                                    <input class="col-md-10" id="form-tel" name="telno" type="tel" placeholder="Telefon numaranız" data-error="Lütfen doğru bir telefon numarası giriniz.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="input-field col-sm-12">
                                <div class="form-group">
                                    <textarea class="col-md-12" id="form-textarea" name="mesaj" id="" cols="55" rows="5" placeholder="Mesajınızı buraya yazabilirsiniz *"
                                        required="required" data-error="Bu alanın doldurulması zorunludur."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <input type="submit" name="mesajgonderanasayfa" value="Gönder">
                                <div class="messages"></div>
                            </div>
                        </form>
                    </div>

                    <div class="col-md-3 col-md-offset-1">
                        <h5>Adresimiz</h5>
                        <p><?php echo $ayarcek['ayar_adres'];?>
                        </p>
                        <hr>                       
                        <h5>E-posta Adresimiz</h5>
                        <p><?php echo $ayarcek['ayar_mailiki'];?></p>
                    </div>
                </div>
            </div>
  </section>
        <!-- Work with us -->
        <div id="c_workwithus" class="area center primary">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <span class="promo-heading">Bizimle birlikte geleceğe yön vermek ister misiniz?</span>
                        <a href="register-form.php" class="btn"><span>ŞİMDİ ÜYE OL</span></a>
                    </div>
                </div>
            </div>
        </div>
        
<?php
include 'footer.php';
?>