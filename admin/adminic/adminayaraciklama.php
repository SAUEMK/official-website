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
                                    <span>Ayarların AÇıklamaları</span>
                                </li>
                            </ul>

                           
                         
                        </div>

                        <!-- END PAGE BAR -->
                        <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                         <form action="../baglantii/islem.php" method="POST" class="form-horizontal">
                                                        <div class="form-body">
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Logo Ayarı Açıklama</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $ayarcek['ayar_logoaciklama']?>" name="ayar_logoaciklama" class="form-control" placeholder="Enter text">
                                                                    <span class="help-block">Yapılması gereken işlem ile ilgili açıklama gelecek.</span>
                                                                </div>
                                                            </div>
                                                              <div class="form-group">
                                                                <label class="col-md-3 control-label">Site URL Ayarı Açıklama</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $ayarcek['ayar_siteurlaciklama']?>" name="ayar_siteurlaciklama" class="form-control" placeholder="Enter text">
                                                                    <span class="help-block">Yapılması gereken işlem ile ilgili açıklama gelecek.</span>
                                                                </div>
                                                            </div>
                                                              <div class="form-group">
                                                                <label class="col-md-3 control-label">Başlık Ayarı Açıklama</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $ayarcek['ayar_titleaciklama']?>" name="ayar_titleaciklama" class="form-control" placeholder="Enter text">
                                                                    <span class="help-block">Yapılması gereken işlem ile ilgili açıklama gelecek.</span>
                                                                </div>
                                                            </div>
                                                              <div class="form-group">
                                                                <label class="col-md-3 control-label">Açıklama Ayarı Açıklama</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $ayarcek['ayar_descriptionaciklama']?>" name="ayar_descriptionaciklama" class="form-control" placeholder="Enter text">
                                                                    <span class="help-block">Yapılması gereken işlem ile ilgili açıklama gelecek.</span>
                                                                </div>
                                                            </div>
                                                              <div class="form-group">
                                                                <label class="col-md-3 control-label">Anahtar Kelime Ayarı Açıklama</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $ayarcek['ayar_keywordsaciklama']?>" name="ayar_keywordsaciklama" class="form-control" placeholder="Enter text">
                                                                    <span class="help-block">Yapılması gereken işlem ile ilgili açıklama gelecek.</span>
                                                                </div>
                                                            </div>
                                                              <div class="form-group">
                                                                <label class="col-md-3 control-label"> Site Sahibi Ayarı Açıklaması</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $ayarcek['ayar_authoraciklama']?>" name="ayar_authoraciklama" class="form-control" placeholder="Enter text">
                                                                    <span class="help-block">Yapılması gereken işlem ile ilgili açıklama gelecek.</span>
                                                                </div>
                                                            </div> 
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Kulüp Mail(1) Ayarı Açıklama</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $ayarcek['ayar_mailbiraciklama']?>" name="ayar_mailbiraciklama" class="form-control" placeholder="Enter text">
                                                                    <span class="help-block">Yapılması gereken işlem ile ilgili açıklama gelecek.</span>
                                                                </div>
                                                            </div>
                                                               <div class="form-group">
                                                                <label class="col-md-3 control-label">Kulüp Mail(2) Ayarı Açıklama</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $ayarcek['ayar_mailikiaciklama']?>" name="ayar_mailikiaciklama" class="form-control" placeholder="Enter text">
                                                                    <span class="help-block">Yapılması gereken işlem ile ilgili açıklama gelecek.</span>
                                                                </div>
                                                            </div>
                                                              <div class="form-group">
                                                                <label class="col-md-3 control-label">Adres Ayarı Açıklama</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $ayarcek['ayar_adresaciklama']?>" name="ayar_adresaciklama" class="form-control" placeholder="Enter text">
                                                                    <span class="help-block">Yapılması gereken işlem ile ilgili açıklama gelecek.</span>
                                                                </div>
                                                            </div>
                                                              <div class="form-group">
                                                                <label class="col-md-3 control-label">Facebook Ayarı Açıklama</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $ayarcek['ayar_facebookaciklama']?>" name="ayar_facebookaciklama" class="form-control" placeholder="Enter text">
                                                                    <span class="help-block">Yapılması gereken işlem ile ilgili açıklama gelecek.</span>
                                                                </div>
                                                            </div>
                                                              <div class="form-group">
                                                                <label class="col-md-3 control-label">Twitter Ayarı Açıklama</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $ayarcek['ayar_twitteraciklama']?>" name="ayar_twitteraciklama" class="form-control" placeholder="Enter text">
                                                                    <span class="help-block">Yapılması gereken işlem ile ilgili açıklama gelecek.</span>
                                                                </div>
                                                            </div>
                                                              <div class="form-group">
                                                                <label class="col-md-3 control-label">Youtube Ayarı Açıklama</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $ayarcek['ayar_youtubeaciklama']?>" name="ayar_youtubeaciklama" class="form-control" placeholder="Enter text">
                                                                    <span class="help-block">Yapılması gereken işlem ile ilgili açıklama gelecek.</span>
                                                                </div>
                                                            </div>
                                                              <div class="form-group">
                                                                <label class="col-md-3 control-label">Instagram Ayarı Açıklama</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $ayarcek['ayar_instagramaciklama']?>" name="ayar_instagramaciklama" class="form-control" placeholder="Enter text">
                                                                    <span class="help-block">Yapılması gereken işlem ile ilgili açıklama gelecek.</span>
                                                                </div>
                                                            </div> 
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Linkedin Ayarı Açıklama</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $ayarcek['ayar_linkedinaciklama']?>" name="ayar_linkedinaciklama" class="form-control" placeholder="Enter text">
                                                                    <span class="help-block">Yapılması gereken işlem ile ilgili açıklama gelecek.</span>
                                                                </div>
                                                            </div>
                                                               <div class="form-group">
                                                                <label class="col-md-3 control-label">Spotify Ayarı Açıklama</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $ayarcek['ayar_spotifyaciklama']?>" name="ayar_spotifyaciklama" class="form-control" placeholder="Enter text">
                                                                    <span class="help-block">Yapılması gereken işlem ile ilgili açıklama gelecek.</span>
                                                                </div>
                                                            </div>
                                                              <div class="form-group">
                                                                <label class="col-md-3 control-label">Snapchat Ayarı Açıklama</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $ayarcek['ayar_snapchataciklama']?>" name="ayar_snapchataciklama" class="form-control" placeholder="Enter text">
                                                                    <span class="help-block">Yapılması gereken işlem ile ilgili açıklama gelecek.</span>
                                                                </div>
                                                            </div>
                                                             <div class="form-group">
                                                                <label class="col-md-3 control-label">Google + Ayarı Açıklama</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $ayarcek['ayar_googleaciklama']?>" name="ayar_googleaciklama" class="form-control" placeholder="Enter text">
                                                                    <span class="help-block">Yapılması gereken işlem ile ilgili açıklama gelecek.</span>
                                                                </div>
                                                            </div>
                                                              <div class="form-group">
                                                                <label class="col-md-3 control-label">SMTP Host Ayarı Açıklama</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $ayarcek['ayar_smtphostaciklama']?>" name="ayar_smtphostaciklama" class="form-control" placeholder="Enter text">
                                                                    <span class="help-block">Yapılması gereken işlem ile ilgili açıklama gelecek.</span>
                                                                </div>
                                                            </div>
                                                              <div class="form-group">
                                                                <label class="col-md-3 control-label">SMTP Kullanıcı Adı Ayarı Açıklama</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $ayarcek['ayar_smtpuseraciklama']?>" name="ayar_smtpuseraciklama" class="form-control" placeholder="Enter text">
                                                                    <span class="help-block">Yapılması gereken işlem ile ilgili açıklama gelecek.</span>
                                                                </div>
                                                            </div>
                                                              <div class="form-group">
                                                                <label class="col-md-3 control-label">SMTP Şifre Ayarı Açıklama</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $ayarcek['ayar_smtppasswordaciklama']?>" name="ayar_smtppasswordaciklama" class="form-control" placeholder="Enter text">
                                                                    <span class="help-block">Yapılması gereken işlem ile ilgili açıklama gelecek.</span>
                                                                </div>
                                                            </div>
                                                              <div class="form-group">
                                                                <label class="col-md-3 control-label">SMTP Port Ayarı Açıklama</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $ayarcek['ayar_smtpportaciklama']?>" name="ayar_smtpportaciklama" class="form-control" placeholder="Enter text">
                                                                    <span class="help-block">Yapılması gereken işlem ile ilgili açıklama gelecek.</span>
                                                                </div>
                                                            </div> 
                                                        <div class="form-actions">
                                                            <div class="row">
                                                                <div class="col-md-offset-3 col-md-4">
                                                                    <button  onclick="return confirm('Bilgileri güncellemek istediğinizden emin misiniz?')" type="submit" name="guncelleaciklama" class="btn green">Kaydet</button>
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