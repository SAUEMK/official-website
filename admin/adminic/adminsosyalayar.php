<?php

include 'adminheader.php'; 

?>
                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <div class="page-content">
                        <!-- BEGIN PAGE HEADER-->
                     
                        <!-- BEGIN PAGE BAR -->
                        <div class="page-bar">
                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="adminindex.php">Yönetim Paneli</a>
                                    <i class="fa fa-circle"></i>
                                </li>
                                <li>
                                    <span>Sosyal Hesap Ayarları</span>
                                </li>
                            </ul>

                           
                         
                        </div>

                        <!-- END PAGE BAR -->
                        <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                         <form action="../baglantii/islem.php" method="POST" class="form-horizontal">
                                                        <div class="form-body">
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Facebook</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $ayarcek['ayar_facebook']?>" name="ayar_facebook" class="form-control" placeholder="Enter text">
                                                                    <span class="help-block"><?php echo $ayarcek['ayar_facebookaciklama']?></span>
                                                                </div>
                                                            </div>
                                                              <div class="form-group">
                                                                <label class="col-md-3 control-label">Twitter</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $ayarcek['ayar_twitter']?>" name="ayar_twitter" class="form-control" placeholder="Enter text">
                                                                    <span class="help-block"><?php echo $ayarcek['ayar_twitteraciklama']?></span>
                                                                </div>
                                                            </div>
                                                              <div class="form-group">
                                                                <label class="col-md-3 control-label">Instagram</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $ayarcek['ayar_instagram']?>" name="ayar_instagram" class="form-control" placeholder="Enter text">
                                                                    <span class="help-block"><?php echo $ayarcek['ayar_instagramaciklama']?></span>
                                                                </div>
                                                            </div>
                                                              <div class="form-group">
                                                                <label class="col-md-3 control-label">Linkedin</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $ayarcek['ayar_linkedin']?>" name="ayar_linkedin" class="form-control" placeholder="Enter text">
                                                                    <span class="help-block"><?php echo $ayarcek['ayar_linkedinaciklama']?></span>
                                                                </div>
                                                            </div>
                                                              <div class="form-group">
                                                                <label class="col-md-3 control-label">Spotify</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $ayarcek['ayar_spotify']?>" name="ayar_spotify" class="form-control" placeholder="Enter text">
                                                                    <span class="help-block"><?php echo $ayarcek['ayar_spotifyaciklama']?></span>
                                                                </div>
                                                            </div>
                                                              <div class="form-group">
                                                                <label class="col-md-3 control-label">Youtube</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $ayarcek['ayar_youtube']?>" name="ayar_youtube" class="form-control" placeholder="Enter text">
                                                                    <span class="help-block"><?php echo $ayarcek['ayar_youtubeaciklama']?></span>
                                                                </div>
                                                            </div> 
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Snapchat</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $ayarcek['ayar_snapchat']?>" name="ayar_snapchat" class="form-control" placeholder="Enter text">
                                                                    <span class="help-block"><?php echo $ayarcek['ayar_snapchataciklama']?></span>
                                                                </div>
                                                            </div>
                                                             <div class="form-group">
                                                                <label class="col-md-3 control-label">Google +</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $ayarcek['ayar_google']?>" name="ayar_google" class="form-control" placeholder="Enter text">
                                                                    <span class="help-block"><?php echo $ayarcek['ayar_googleaciklama']?></span>
                                                                </div>
                                                            </div>
                                                        <div class="form-actions">
                                                            <div class="row">
                                                                <div class="col-md-offset-3 col-md-4">
                                                                    <button  onclick="return confirm('Bilgileri güncellemek istediğinizden emin misiniz?')" type="submit" name="guncellesosyal" class="btn green">Kaydet</button>
                                                                    <?php 
                                                                      if ($_GET['durum'] == 'ok') {

                                                                          echo "Güncelleme Başarılı!";
                                                                       }
                                                                    ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <!-- END FORM-->
                                                </div>
                                            </div>




                    </div>
                </div>
                <!-- END QUICK SIDEBAR -->

            <!-- END CONTAINER -->
         <?php 

         include 'adminfooter.php'

          ?>