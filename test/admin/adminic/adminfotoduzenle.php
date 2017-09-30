<?php
include 'adminheader.php'; 
$fotosor=$db->prepare("SELECT * from galeri_foto where foto_id=?");
$id = $_GET['foto_id'];
$fotosor->execute(array($id));
$fotocek=$fotosor->fetch(PDO::FETCH_ASSOC);
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
                                    <span>Fotoğraf Düzenleme</span>
                                </li>
                            </ul>

                           
                         
                        </div>

                        <!-- END PAGE BAR -->
                        <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                         <form action="../baglantii/islem.php?foto_id=<?php echo $fotocek['foto_id'] ?>" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                                       
                                             <div class="form-body">
                                               <div class="form-group">
                                              <label class="col-md-3 control-label">Fotoğraf</label>
                                                                <div class="col-md-4"  >
                                                                <img style="width: 400; height: 400px;" src="../../<?php echo $fotocek['foto']; ?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Fotoğraf Sıra</label>
                                                                <div class="col-md-5">
                                                                    <input type="text" value="<?php echo $fotocek['foto_sira']?>" name="foto_sira" class="form-control" placeholder="Enter text">
                                                                </div>
                                                            </div>
                                                             <div class="form-group">
                                                                   <label class="col-md-3 control-label">Fotoğraf Öne Çıkar</label>
                                                                    <div class="col-md-5">
                                                         <select name="foto_onecikar" class="bs-select form-control">
                                                         <?php if ($fotocek['foto_onecikar']==1){ ?>
                                                              <option value="1">Fotğrafı Öne Çıkar</option>
                                                               <option value="0">Fotğrafı Öne Çıkarma</option>
                                                         <?php }else{?>
                                                              <option value="0">Fotğrafı Öne Çıkarma</option>
                                                              <option value="1">Fotğrafı Öne Çıkar</option>
                                                         <?php } ?>
                                                            
                                                              
                                                          </select>
                                                              </div>
                                                      </div>
                                                              
                                                              <div class="form-group">
                                                                   <label class="col-md-3 control-label">Fotoğraf Durum</label>
                                                                    <div class="col-md-5">
                                                         <select name="foto_durum" class="bs-select form-control">
                                                         <?php if ($fotocek['foto_durum']==1){ ?>
                                                              <option value="1">Fotğrafı Onayla</option>
                                                               <option value="0">Fotğrafı Onaylama</option>
                                                         <?php }else{?>
                                                              <option value="0">Fotğrafı Onaylama</option>
                                                              <option value="1">Fotğrafı Onayla</option>
                                                         <?php } ?>
                                                            
                                                              
                                                          </select>
                                                              </div>
                                                      </div>
                                                              
                                                          
                                                                        
                                                        <div class="form-actions">
                                                            <div class="row">
                                                                <div class="col-md-offset-3 col-md-5">
                                                                  <button  onclick="return confirm('Bilgileri güncellemek istediğinizden emin misiniz?')" type="submit" name="fotoduzenle" class="btn green">Kaydet</button>
                                                                   
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