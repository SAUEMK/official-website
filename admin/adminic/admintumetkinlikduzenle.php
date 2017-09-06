<?php
include 'adminheader.php'; 
$etkinliksor=$db->prepare("SELECT * from tumetkinlikler where id=?");
$id = $_GET['id'];
$etkinliksor->execute(array($id));
$etkinlikcek=$etkinliksor->fetch(PDO::FETCH_ASSOC);
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
                                    <span>Tüm Etkinlikler Etkinlik Düzenleme</span>
                                </li>
                            </ul>

                           
                         
                        </div>

                        <!-- END PAGE BAR -->
                        <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                         <form action="../baglantii/islem.php?id=<?php echo $etkinlikcek['id'] ?>" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                                       
                                             <div class="form-body">
                                                           
                                            
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Etkinlik Adı</label>
                                                                <div class="col-md-5">
                                                                    <input type="text" value="<?php echo $etkinlikcek['ad']?>" name="ad" class="form-control" placeholder="Enter text">
                                                                </div>
                                                            </div>
                                                           
                                                              
                                                          <div class="form-group">
                                                                <label class="col-md-3 control-label">Etkinlik Açıklaması</label>
                                                                <div class="col-md-5">
                                                                    <textarea name="aciklama" class="ckeditor"><?php echo $etkinlikcek['aciklama']?></textarea> 
                                                                </div>
                                                            </div>
                                                                        
                                                        <div class="form-actions">
                                                            <div class="row">
                                                                <div class="col-md-offset-3 col-md-5">
                                                                  <button  onclick="return confirm('Bilgileri güncellemek istediğinizden emin misiniz?')" type="submit" name="tumetkinlikduzenle" class="btn green">Kaydet</button>
                                                                   
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