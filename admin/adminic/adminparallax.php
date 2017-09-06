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
                                    <span>Parallaxlar</span>
                                </li>
                            </ul>

                           
                         
                        </div>

                        <!-- END PAGE BAR -->
                        <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                         <form action="../baglantii/islem.php" enctype="multipart/form-data" method="POST" class="form-horizontal" >
                                                        <div class="form-body">
                                                         <div class="form-group">
                                                                <label class="col-md-3 control-label">Parallax 1</label>
                                                                <?php  
                                                                    $parallaxsor=$db->prepare("SELECT * from parallax where parallax_id=?");
                                                                    $parallaxsor->execute(array(0));
                                                                    $parallaxcek=$parallaxsor->fetch(PDO::FETCH_ASSOC); 
                                                                ?>
                                                                <div class="col-md-4">
                                                                    <img style="height: 200px; width: 300px;" src="../../<?php echo $parallaxcek['parallax_bir'];?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Fotoğraf Seç</label>
                                                                <div class="col-md-4">
                                                                    <input type="file"  name="parallax_bir" class="form-control" >
                                                                    <span class="help-block"><?php echo $ayarcek['ayar_mailbiraciklama']?></span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Parallax 2</label>
                                                                <div class="col-md-4">
                                                                    <img style="height: 200px; width: 300px;" src="../../<?php echo $parallaxcek['parallax_iki'];?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Fotoğraf Seç</label>
                                                                <div class="col-md-4">
                                                                    <input type="file"  name="parallax_iki" class="form-control">
                                                                    <span class="help-block"><?php echo $ayarcek['ayar_mailbiraciklama']?></span>
                                                                </div>
                                                            </div>
                                                             
                                                            </div> 
                                                            
                                                        <div class="form-actions">
                                                            <div class="row">
                                                                <div class="col-md-offset-3 col-md-4">
                                                                    <button  onclick="return confirm('Bilgileri güncellemek istediğinizden emin misiniz?')" type="submit" name="guncelleparallax" class="btn green">Kaydet</button>
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