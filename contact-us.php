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
                        <hr>
                        <form class="contact-form" method="post" action="http://dev.premonday.com/arisn/contact.php">
                            <div class="input-field col-sm-12">
                                <div class="form-group">
                                    <input id="form-name" name="name" type="text" placeholder="İsminiz *" required="required"
                                        data-error="Bu alanın doldurulması zorunludur.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="input-field col-sm-12">
                                <div class="form-group">
                                    <input id="form-email" name="email" type="email" placeholder="E-posta adresiniz *" required="required"
                                        data-error="Bu alanın doldurulması zorunludur.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="input-field col-sm-12">
                                <div class="form-group">
                                    <input id="form-tel" name="tel" type="tel" placeholder="Telefon numaranız" data-error="Lütfen doğru bir telefon numarası giriniz.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="input-field col-sm-12">
                                <div class="form-group">
                                    <textarea id="form-textarea" name="Message" id="" cols="30" rows="5" placeholder="Mesajınızı buraya yazabilirsiniz *"
                                        required="required" data-error="Bu alanın doldurulması zorunludur."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <input type="submit" value="Gönder">
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
                            <a href="#"><i class="ion-social-facebook"></i></a>
                            <a href="#"><i class="ion-social-twitter"></i></a>
                            <a href="#"><i class="ion-social-instagram-outline"></i></a>
                            <a href="#"><i class="ion-social-linkedin-outline"></i></a>
                            <a href="#"><i class="ion-social-googleplus"></i></a>
                            <a href="#"><i class="ion-social-snapchat"></i></a>
                            <a href="#"><i class="ion-social-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php
include 'footer.php';
?>