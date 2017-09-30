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
                                    <span>Mail Ayarları</span>
                                </li>
                            </ul>

                           
                         
                        </div>

                        <!-- END PAGE BAR -->
                        <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                         <form action="../baglantii/islem.php" method="POST" class="form-horizontal">
                                                        <div class="form-body">
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Kulüp Maili(1)</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $ayarcek['ayar_mailbir']?>" name="ayar_mailbir" class="form-control" placeholder="Enter text">
                                                                    <span class="help-block"><?php echo $ayarcek['ayar_mailbiraciklama']?></span>
                                                                </div>
                                                            </div>
                                                              <div class="form-group">
                                                                <label class="col-md-3 control-label">Kulüp Maili(2)</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $ayarcek['ayar_mailiki']?>" name="ayar_mailiki" class="form-control" placeholder="Enter text">
                                                                    <span class="help-block"><?php echo $ayarcek['ayar_mailikiaciklama']?></span>
                                                                </div>
                                                            </div>
                                                              <div class="form-group">
                                                                <label class="col-md-3 control-label">SMTP Host</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $ayarcek['ayar_smtphost']?>" name="ayar_smtphost" class="form-control" placeholder="Enter text">
                                                                    <span class="help-block"><?php echo $ayarcek['ayar_smtphostaciklama']?></span>
                                                                </div>
                                                            </div>
                                                              <div class="form-group">
                                                                <label class="col-md-3 control-label">SMTP Kullanıcı Adı</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $ayarcek['ayar_smtpuser']?>" name="ayar_smtpuser" class="form-control" placeholder="Enter text">
                                                                    <span class="help-block"><?php echo $ayarcek['ayar_smtpuseraciklama']?></span>
                                                                </div>
                                                            </div>
                                                              <div class="form-group">
                                                                <label class="col-md-3 control-label">SMTP Şifre</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $ayarcek['ayar_smtppassword']?>" name="ayar_smtppassword" class="form-control" placeholder="Enter text">
                                                                    <span class="help-block"><?php echo $ayarcek['ayar_smtppasswordaciklama']?></span>
                                                                </div>
                                                            </div>
                                                              <div class="form-group">
                                                                <label class="col-md-3 control-label">SMTP Port</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $ayarcek['ayar_smtpport']?>" name="ayar_smtpport" class="form-control" placeholder="Enter text">
                                                                    <span class="help-block"><?php echo $ayarcek['ayar_smtpportaciklama']?></span>
                                                                </div>
                                                            </div> 
                                                            
                                                        <div class="form-actions">
                                                            <div class="row">
                                                                <div class="col-md-offset-3 col-md-4">
                                                                    <button  onclick="return confirm('Bilgileri güncellemek istediğinizden emin misiniz?')" type="submit" name="guncellemail" class="btn green">Kaydet</button>
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