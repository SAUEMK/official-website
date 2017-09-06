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
                                    <span>Sitenin Genel Ayarları</span>
                                </li>
                            </ul>
                        </div>

                        <!-- END PAGE BAR -->
                        <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                         <form action="../baglantii/islem.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                                        <div class="form-body">
                                                        <div class="form-group">
                                                                <label class="col-md-3 control-label">Güncel Logo</label>
                                                                <div class="col-md-4"  >
                                                                    <img style="width:300px; height: 100px;" src="../../<?php echo $ayarcek['ayar_logo']?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Site Logosu</label>
                                                                <div class="col-md-4">
                                                                    <input type="file"  name="ayar_logo" class="form-control" >
                                                                    <span class="help-block"><?php echo $ayarcek['ayar_logoaciklama']?></span>
                                                                </div>
                                                            </div>
                                                              <div class="form-group">
                                                                <label class="col-md-3 control-label">Site URL Adresi</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $ayarcek['ayar_siteurl']?>" name="ayar_siteurl" class="form-control" placeholder="Enter text">
                                                                    <span class="help-block"><?php echo $ayarcek['ayar_siteurlaciklama']?></span>
                                                                </div>
                                                            </div>
                                                              <div class="form-group">
                                                                <label class="col-md-3 control-label">Site Başlığı</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $ayarcek['ayar_title']?>" name="ayar_title" class="form-control" placeholder="Enter text">
                                                                    <span class="help-block"><?php echo $ayarcek['ayar_titleaciklama']?></span>
                                                                </div>
                                                            </div>
                                                              <div class="form-group">
                                                                <label class="col-md-3 control-label">Site Açıklaması</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $ayarcek['ayar_description']?>" name="ayar_description" class="form-control" placeholder="Enter text">
                                                                    <span class="help-block"><?php echo $ayarcek['ayar_descriptionaciklama']?></span>
                                                                </div>
                                                            </div>
                                                              <div class="form-group">
                                                                <label class="col-md-3 control-label">Site Anahtar Kelimeleri</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $ayarcek['ayar_keywords']?>" name="ayar_keywords" class="form-control" placeholder="Enter text">
                                                                    <span class="help-block"><?php echo $ayarcek['ayar_keywordsaciklama']?></span>
                                                                </div>
                                                            </div>
                                                              <div class="form-group">
                                                                <label class="col-md-3 control-label">Site Sahibi</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $ayarcek['ayar_author']?>" name="ayar_author" class="form-control" placeholder="Enter text">
                                                                    <span class="help-block"><?php echo $ayarcek['ayar_authoraciklama']?></span>
                                                                </div>
                                                            </div>
                                                            
                                                        <div class="form-actions">
                                                            <div class="row">
                                                                <div class="col-md-offset-3 col-md-4">
                                                                   <button onclick="return confirm('Bilgileri güncellemek istediğinizden emin misiniz?')" type="submit" name="guncellegenel" class="btn green">Kaydet</button>
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
                <!-- END QUICK SIDEBAR -->

            <!-- END CONTAINER -->
         <?php 

         include 'adminfooter.php'

          ?>