<?php
include 'adminheader.php'; 
$yoneticisor=$db->prepare("SELECT * from hakkimizdabir where yonetici_id=?");
$id = $_GET['yonetici_id'];
$yoneticisor->execute(array($id));
$yoneticicek=$yoneticisor->fetch(PDO::FETCH_ASSOC);
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
                                    <span>Yönetici Düzenleme</span>
                                </li>
                            </ul>

                           
                         
                        </div>

                        <!-- END PAGE BAR -->
                        <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                         <form action="../baglantii/islem.php?yonetici_id=<?php echo $yoneticicek['yonetici_id'] ?>" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                                       
                                             <div class="form-body">
                                                        <div class="form-group">
                                                                <label class="col-md-3 control-label">Güncel Fotoğraf</label>
                                                                <div class="col-md-4"  >
                                                                    <img style="width:250px; height: 360px;" src="../../<?php echo $yoneticicek['yonetici_foto']?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Yönetici Fotoğraf</label>
                                                                <div class="col-md-4">
                                                                    <input type="file"  name="yonetici_foto" class="form-control" placeholder="Enter text">
                                                                </div>
                                                            </div>
                                                              <div class="form-group">
                                                                <label class="col-md-3 control-label">Yönetici Adı</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $yoneticicek['yonetici_ad']?>" name="yonetici_ad" class="form-control" placeholder="Enter text">
                                                                </div>
                                                            </div>
                                                             <div class="form-group">
                                                                <label class="col-md-3 control-label">Yönetici Soyadı</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $yoneticicek['yonetici_soyad']?>" name="yonetici_soyad" class="form-control" placeholder="Enter text">
                                                                </div>
                                                            </div>
                                                              <div class="form-group">
                                                                <label class="col-md-3 control-label">Yönetici Mail</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $yoneticicek['yonetici_mail']?>" name="yonetici_mail" class="form-control" placeholder="Enter text">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Yönetici Telefon</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $yoneticicek['yonetici_telefon']?>" name="yonetici_telefon" class="form-control" placeholder="Enter text">
                                                                </div>
                                                            </div>
                                                             <div class="form-group">
                                                                <label class="col-md-3 control-label">Yönetici Komisyon</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $yoneticicek['yonetici_komisyon']?>" name="yonetici_komisyon" class="form-control" placeholder="Enter text">
                                                                </div>
                                                            </div>
                                                              <div class="form-group">
                                                                <label class="col-md-3 control-label">Yönetici Facebook</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $yoneticicek['yonetici_facebook']?>" name="yonetici_facebook" class="form-control" placeholder="Enter text">
                                                                </div>
                                                            </div>
                                                              <div class="form-group">
                                                                <label class="col-md-3 control-label">Yönetici Twitter</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $yoneticicek['yonetici_twitter']?>" name="yonetici_twitter" class="form-control" placeholder="Enter text">
                                                                </div>
                                                            </div>
                                                              <div class="form-group">
                                                                <label class="col-md-3 control-label">Yönetici Instagram</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $yoneticicek['yonetici_instagram']?>" name="yonetici_instagram" class="form-control" placeholder="Enter text">
                                                                </div>
                                                            </div>
                                                              <div class="form-group">
                                                                <label class="col-md-3 control-label">Yönetici Linkedin</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $yoneticicek['yonetici_linkedin']?>" name="yonetici_linkedin" class="form-control" placeholder="Enter text">
                                                                </div>
                                                            </div>
                                                              <div class="form-group">
                                                                <label class="col-md-3 control-label">Yönetici Sıra</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $yoneticicek['yonetici_sira']?>" name="yonetici_sira" class="form-control" placeholder="Enter text">
                                                                </div>
                                                            </div>
                                                             <div class="form-group">
                                                                   <label class="col-md-3 control-label">Yönetici Durum</label>
                                                                    <div class="col-md-4">
                                                         <select name="yonetici_durum" class="bs-select form-control">
                                                         <?php if ($yoneticicek['yonetici_durum']==1){ ?>
                                                              <option value="1">Yönetici Onayla</option>
                                                               <option value="0">Yönetici Onaylama</option>
                                                         <?php }else{?>
                                                              <option value="0">Yönetici Onaylama</option>
                                                              <option value="1">Yönetici Onayla</option>
                                                         <?php } ?>
                                                            
                                                              
                                                          </select>
                                                              </div>
                                                      </div>
                                                                           
                                                        <div class="form-actions">
                                                            <div class="row">
                                                                <div class="col-md-offset-3 col-md-4">
                                                                  <button  onclick="return confirm('Bilgileri güncellemek istediğinizden emin misiniz?')" type="submit" name="duzenleyonetici" class="btn green">Kaydet</button>
                                                                   
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