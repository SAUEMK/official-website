<!-- Logo Strip -->
        <div id="c_logos" class="area dark1 center">
            <div class="container-fluid">
                <h5>Sponsorlarımız</h5>
                <div class="row">
                    <div class="col-md-12 slide">
<?php
    $sponsorsor=$db->prepare("select * from sponsor order by sponsor_sira");
    $sponsorsor->execute();

while($sponsorcek=$sponsorsor->fetch(PDO::FETCH_ASSOC)){ 
    if ($sponsorcek['sponsor_durum']==1) { ?>
              
         <div><img src=" <?php echo $sponsorcek['sponsor_logo'] ?>" alt=" <?php echo $sponsorcek['sponsor_sira'] ?>"></div>

  <?php } ?>
<?php } ?>
                    </div>
                </div>
            </div>
        </div>
        
<footer id="minimal" class="dark1 center">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <img src="<?php echo $ayarcek['ayar_logo'];?>" width="150" alt="">
                        <div class="social">
                            <a href="<?php echo $ayarcek['ayar_facebook'];?>"><i class="fa fa-facebook"></i></a>
                            <a href="<?php echo $ayarcek['ayar_twitter'];?>"><i class="fa fa-twitter"></i></a>
                            <a href="<?php echo $ayarcek['ayar_instagram'];?>"><i class="fa fa-instagram"></i></a>
                            <a href="<?php echo $ayarcek['ayar_linkedin'];?>"><i class="fa fa-linkedin"></i></a>
                            <a href="<?php echo $ayarcek['ayar_google'];?>"><i class="fa fa-google"></i></a>
                            <a href="<?php echo $ayarcek['ayar_youtube'];?>"><i class="fa fa-youtube"></i></a>
                            <a href="music/index.html"><i class="fa fa-spotify"></i></a>
                        </div>
                        <hr>
                        <p class="footer-text"><?php echo $ayarcek['ayar_footer'];?>
                        <a href="dev/easter01.php">There's nothing here!</a><a href="terms.php">Terms and Conditions</a><a href="policy.php">Cookie Policy</a></p>
                    </div>
                </div>
            </div>
        </footer>

<!-- end of web-in -->
    <script src="vendor/jquery-2.2.1.min.js"></script>
    <script src="vendor/matchHeight-min.js"></script>
    <script src="vendor/contact/validator.js"></script>
    <script src="vendor/contact/contact.js"></script>
    <script src="vendor/pace.min.js"></script>
    <script src="vendor/headroom/headroom.min.js"></script>
    <script src="vendor/owl-slider/owl.carousel.min.js"></script>
    <script src="vendor/slideshow/anime.min.js"></script>
    <script src="vendor/slideshow/imagesloaded.pkgd.min.js"></script>
    <script src="vendor/slideshow/main.js"></script>
    <script src="vendor/parallax/materialize.min.js"></script>
    <script src="vendor/lightbox/lity.min.js"></script>
    <script src="vendor/tabs/jquery.tabslet.min.js"></script>
    <script src="vendor/masonry.pkgd.min.js"></script>
    <script src="vendor/ckeditor/ckeditor.js"></script>
    <script src="js/main.min.js"></script>
</body>

</html>