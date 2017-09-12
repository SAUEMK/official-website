<?php
include 'header.php';
?>

<!-- Contact -->
        <section id="c_contact" class="halfarea">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-7 col-sm-offset-4 col-md-offset-6">
                        <h2>Bizimle iletişime geçin</h2>
                        <h4>Formu doldurun, en kısa sürede size dönelim.</h4>
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
                            <div class="input-field  col-sm-12">
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
                            <div class="input-field  col-sm-12">
                                <div class="form-group">
                                    <textarea class="col-md-12" id="form-textarea" name="mesaj" id="" cols="55" rows="5" placeholder="Mesajınızı buraya yazabilirsiniz *"
                                        required="required" data-error="Bu alanın doldurulması zorunludur."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <input type="submit" name="mesajgonder" value="Gönder">
                                <div class="messages"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="imagearea col-md-5 col-sm-3">
                <div id="map"></div>
                <script src="js/gmaps.js"></script>
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZx9k0pRe1UtmcERUpw8IzQkKDhx08lUs&callback=initMap"
                    async defer></script>
            </div>
        </section>

        <div class="area blog-social">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 hidden-xs">
                        <h3>Bizi takip etmeyi unutmayın</h3>
                    </div>
                    <div class="col-sm-6 col-xs-12 right xs-center">
                        <div class="social">
                            <a href="<?php echo $ayarcek['ayar_facebook'];?>"><i class="fa fa-facebook"></i></a>
                            <a href="<?php echo $ayarcek['ayar_twitter'];?>"><i class="fa fa-twitter"></i></a>
                            <a href="<?php echo $ayarcek['ayar_instagram'];?>"><i class="fa fa-instagram"></i></a>
                            <a href="<?php echo $ayarcek['ayar_linkedin'];?>"><i class="fa fa-linkedin"></i></a>
                            <a href="<?php echo $ayarcek['ayar_google'];?>"><i class="fa fa-google"></i></a>
                            <a href="<?php echo $ayarcek['ayar_youtube'];?>"><i class="fa fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 title">
                        <h2>Sıkça Sorulan Sorular</h2>
                        <h4>Aklınızda soru kalmasın</h4>
                    </div>
                </div>
                <div class="row m-space">
                    <div class="col-md-6">
                        <h3>General FAQ</h3>
                        <div class="accordion">
                            <li>Q. How can I profit from Themeforest?
                                <ul>
                                    <h3>That's easy, we do it for you!</h3>
                                    <p>Vivamus facilisisnibh scelerisque laoreet. Lorem
                                        ipsum dolor sit amet, consectetur adipisicing
                                        elit. Aspernatur vel distinctio minima ipsa
                                        nostrum quis sequi.</p>
                                    <a href="#" class="btn"><span>More information</span></a>
                                </ul>
                            </li>

                            <li>Q. What am I entitled to use on a daily basis?
                                <ul>
                                    <h3>Food, drink and other supplies...</h3>
                                    <p>Vivamus facilisisnibh scelerisque laoreet. Lorem
                                        ipsum dolor sit amet, consectetur adipisicing
                                        elit. Aspernatur vel distinctio minima ipsa
                                        nostrum quis sequi.</p>
                                </ul>
                            </li>

                            <li>Q. I want to partner with another author, how?
                                <ul>
                                    <h3>You'll need this...</h3>
                                    <p>Vivamus facilisisnibh scelerisque laoreet. Lorem
                                        ipsum dolor sit amet, consectetur adipisicing
                                        elit. Aspernatur vel distinctio minima ipsa
                                        nostrum quis sequi.</p>
                                    <a href="#" class="btn"><span>More information</span></a>
                                </ul>
                            </li>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h3>Service Related</h3>
                        <div class="accordion">
                            <li>Q. Can we supply our own medication?
                                <ul>
                                    <h3>Food, drink and other supplies...</h3>
                                    <p>Vivamus facilisisnibh scelerisque laoreet. Lorem
                                        ipsum dolor sit amet, consectetur adipisicing
                                        elit. Aspernatur vel distinctio minima ipsa
                                        nostrum quis sequi.</p>
                                </ul>
                            </li>

                            <li>Q. When do we get to eat dinner?
                                <ul>
                                    <h3>You'll need this...</h3>
                                    <p>Vivamus facilisisnibh scelerisque laoreet. Lorem
                                        ipsum dolor sit amet, consectetur adipisicing
                                        elit. Aspernatur vel distinctio minima ipsa
                                        nostrum quis sequi.</p>
                                    <a href="#" class="btn"><span>More information</span></a>
                                </ul>
                            </li>
                            <li>Q. How can I profit from Themeforest?
                                <ul>
                                    <h3>That's easy, we do it for you!</h3>
                                    <p>Vivamus facilisisnibh scelerisque laoreet. Lorem
                                        ipsum dolor sit amet, consectetur adipisicing
                                        elit. Aspernatur vel distinctio minima ipsa
                                        nostrum quis sequi.</p>
                                    <a href="#" class="btn"><span>More information</span></a>
                                </ul>
                            </li>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h3>Theme Related</h3>
                        <div class="accordion">
                            <li>Q. How can I profit from Themeforest?
                                <ul>
                                    <h3>That's easy, we do it for you!</h3>
                                    <p>Vivamus facilisisnibh scelerisque laoreet. Lorem
                                        ipsum dolor sit amet, consectetur adipisicing
                                        elit. Aspernatur vel distinctio minima ipsa
                                        nostrum quis sequi.</p>
                                    <a href="#" class="btn"><span>More information</span></a>
                                </ul>
                            </li>

                            <li>Q. What am I entitled to use on a daily basis?
                                <ul>
                                    <h3>Food, drink and other supplies...</h3>
                                    <p>Vivamus facilisisnibh scelerisque laoreet. Lorem
                                        ipsum dolor sit amet, consectetur adipisicing
                                        elit. Aspernatur vel distinctio minima ipsa
                                        nostrum quis sequi.</p>
                                </ul>
                            </li>

                            <li>Q. I want to partner with another author, how?
                                <ul>
                                    <h3>You'll need this...</h3>
                                    <p>Vivamus facilisisnibh scelerisque laoreet. Lorem
                                        ipsum dolor sit amet, consectetur adipisicing
                                        elit. Aspernatur vel distinctio minima ipsa
                                        nostrum quis sequi.</p>
                                    <a href="#" class="btn"><span>More information</span></a>
                                </ul>
                            </li>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h3>Contact Options</h3>
                        <div class="accordion">
                            <li>Q. Can we supply our own medication?
                                <ul>
                                    <h3>Food, drink and other supplies...</h3>
                                    <p>Vivamus facilisisnibh scelerisque laoreet. Lorem
                                        ipsum dolor sit amet, consectetur adipisicing
                                        elit. Aspernatur vel distinctio minima ipsa
                                        nostrum quis sequi.</p>
                                </ul>
                            </li>

                            <li>Q. When do we get to eat dinner?
                                <ul>
                                    <h3>You'll need this...</h3>
                                    <p>Vivamus facilisisnibh scelerisque laoreet. Lorem
                                        ipsum dolor sit amet, consectetur adipisicing
                                        elit. Aspernatur vel distinctio minima ipsa
                                        nostrum quis sequi.</p>
                                    <a href="#" class="btn"><span>More information</span></a>
                                </ul>
                            </li>
                            <li>Q. How can I profit from Themeforest?
                                <ul>
                                    <h3>That's easy, we do it for you!</h3>
                                    <p>Vivamus facilisisnibh scelerisque laoreet. Lorem
                                        ipsum dolor sit amet, consectetur adipisicing
                                        elit. Aspernatur vel distinctio minima ipsa
                                        nostrum quis sequi.</p>
                                    <a href="#" class="btn"><span>More information</span></a>
                                </ul>
                            </li>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php
include 'footer.php';
?>