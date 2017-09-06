<?php
include 'adminheader.php'; 
$konusor=$db->prepare("SELECT * from blogpost where post_id=?");
$id = $_GET['post_id'];
$konusor->execute(array($id));
$konucek=$konusor->fetch(PDO::FETCH_ASSOC);
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
                                    <span>Konu Düzenleme</span>
                                </li>
                            </ul>

                           
                         
                        </div>

                        <!-- END PAGE BAR -->
                        <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                         <form action="../baglantii/blogislem.php?post_id=<?php echo $konucek['post_id'] ?>" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                                       
                                             <div class="form-body">
                                               <div class="form-group">
                                              <label class="col-md-3 control-label">Güncel Fotoğraf</label>
                                                                <div class="col-md-4"  >
                                                                <img style="width: 200; height: 100px;" src="../../<?php echo $konucek['post_foto']; ?>">
                                                                </div>
                                                            </div>
                                                             <div class="form-group">
                                                                <label class="col-md-3 control-label">Konu Kapak Fotoğrafı</label>
                                                                <div class="col-md-4">
                                                                    <input type="file" name="post_foto" class="form-control">
                                                                </div>
                                                             </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Konu Başlığı</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $konucek['post_baslik']; ?>" name="post_baslik" class="form-control" placeholder="Enter text">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Konu Detayı</label>
                                                                <div class="col-md-7">
                                                                   <textarea name="post_detay" class="ckeditor"><?php echo $konucek['post_detay']; ?></textarea>
                                                                </div>
                                                            </div>


                                                              <div class="form-group">
                                                                   <label class="col-md-3 control-label">Konu Onay</label>
                                                                    <div class="col-md-5">
                                                         <select name="post_onay" class="bs-select form-control">
                                                         <?php if ($konucek['post_onay']==1){ ?>
                                                              <option value="1">Konuyu Onayla</option>
                                                               <option value="0">Konuyu Onaylama</option>
                                                         <?php }else{?>
                                                              <option value="0">Konuyu Onaylama</option>
                                                              <option value="1">Konuyu Onayla</option>
                                                         <?php } ?>
                                                            
                                                              
                                                          </select>
                                                              </div>
                                                      </div>
                                                              
                                                          
                                                                        
                                                        <div class="form-actions">
                                                            <div class="row">
                                                                <div class="col-md-offset-3 col-md-5">
                                                                  <button  onclick="return confirm('Bilgileri güncellemek istediğinizden emin misiniz?')" type="submit" name="konuduzenle" class="btn green">Kaydet</button>
                                                                   
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