<?php

include 'adminheader.php'; 
$hakkimizdasor=$db->prepare("SELECT * from hakkimizdaiki where id=?");
$hakkimizdasor->execute(array(0));
$hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);

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
                                    <span>Hakkımızda Ayarları - Devam</span>
                                </li>
                            </ul>

                           
                         
                        </div>

                        <!-- END PAGE BAR -->
                        <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                         <form action="../baglantii/islem.php" method="POST" class="form-horizontal">
                                                        <div class="form-body">
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Hakkımızda Yazısı</label>
                                                                <div class="col-md-7">
                                                                   <textarea name="ekibimiz_hakkinda" id="editor1" rows="15" cols="80" class="ckeditor">
                                                                       <?php echo $hakkimizdacek['ekibimiz_hakkinda'];?>
                                                                    </textarea>
                                                                </div>
                                                            </div>
                                                           <div class="form-group">
                                                                <label class="col-md-3 control-label">Anasayfa Kuruluşumuz Yazısı</label>
                                                                <div class="col-md-7">
                                                                   <textarea name="kurulusumuz" id="editor1" rows="15" cols="80" class="ckeditor">
                                                                       <?php echo $hakkimizdacek['kurulusumuz'];?>
                                                                    </textarea>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Anasayfa Amacımız Yazısı</label>
                                                                <div class="col-md-7">
                                                                   <textarea name="amacimiz" id="editor1" rows="15" cols="80" class="ckeditor">
                                                                       <?php echo $hakkimizdacek['amacimiz'];?>
                                                                    </textarea>
                                                                </div>
                                                            </div>
                                                         </div>
                                                          <div class="form-group">
                                                                <label class="col-md-3 control-label">Anasayfa Ödüllerimiz Yazısı</label>
                                                                <div class="col-md-7">
                                                                   <textarea name="odullerimiz" id="editor1" rows="15" cols="80" class="ckeditor">
                                                                       <?php echo $hakkimizdacek['odullerimiz'];?>
                                                                    </textarea>
                                                                </div>
                                                            </div>
                                                         </div>
                                                        <div class="form-actions">
                                                            <div class="row">
                                                                <div class="col-md-offset-3 col-md-4">
                                                                    <button  onclick="return confirm('Bilgileri güncellemek istediğinizden emin misiniz?')" type="submit" name="guncellehakkinda" class="btn green">Kaydet</button>
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