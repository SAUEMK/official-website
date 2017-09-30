<?php

include 'adminheader.php'; 
$karsilasor=$db->prepare("SELECT * from karsila where karsila_id=?");
$karsilasor->execute(array(0));
$karsilacek=$karsilasor->fetch(PDO::FETCH_ASSOC);

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
                                    <span>Anasayfa Karşılama Alanı</span>
                                </li>
                            </ul>
                        </div>

                        <!-- END PAGE BAR -->
                        <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                         <form action="../baglantii/islem.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                                        <div class="form-body">
                                                         <div class="form-group">
                                                                <label class="col-md-3 control-label">Güncel Fotoğraf</label>
                                                                <div class="col-md-4"  >
                                                                    <img style="width:200px; height: 200px;" src="../../<?php echo $karsilacek['karsila_arkaplan']?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Karşılama Arka Plan</label>
                                                                <div class="col-md-4">
                                                                    <input type="file"  name="karsila_arkaplan" class="form-control" >
                                                                    <span class="help-block">Açıklama.</span>
                                                                </div>
                                                            </div>
                                                              <div class="form-group">
                                                                <label class="col-md-3 control-label">Karşılama Yazısı Büyük</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $karsilacek['karsila_byazi']?>" name="karsila_byazi" class="form-control" placeholder="Enter text">
                                                                    <span class="help-block"></span>
                                                                </div>
                                                            </div>
                                                              <div class="form-group">
                                                                <label class="col-md-3 control-label">Karşılama Yazısı Küçük</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $karsilacek['karsila_kyazi']?>" name="karsila_kyazi" class="form-control" placeholder="Enter text">
                                                                    <span class="help-block"></span>
                                                                </div>
                                                            </div>
                                                              <div class="form-group">
                                                                <label class="col-md-3 control-label">Video URL</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $karsilacek['karsila_video']?>" name="karsila_video" class="form-control" placeholder="Enter text">
                                                                    <span class="help-block"></span>
                                                                </div>
                                                            </div>
                                                              
                                                            
                                                        <div class="form-actions">
                                                            <div class="row">
                                                                <div class="col-md-offset-3 col-md-4">
                                                                   <button onclick="return confirm('Bilgileri güncellemek istediğinizden emin misiniz?')"  type="submit" name="guncellekarsila" class="btn green">Kaydet</button>
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