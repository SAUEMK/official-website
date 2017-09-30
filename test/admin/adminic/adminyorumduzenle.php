<?php
include 'adminheader.php'; 
$yorumsor=$db->prepare("SELECT * from blog_yorum where yorum_id=?");
$id = $_GET['yorum_id'];
$yorumsor->execute(array($id));
$yorumcek=$yorumsor->fetch(PDO::FETCH_ASSOC);
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
                                    <span>Yorum Düzenleme</span>
                                </li>
                            </ul>

                           
                         
                        </div>

                        <!-- END PAGE BAR -->
                        <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                         <form action="../baglantii/blogislem.php?yorum_id=<?php echo $yorumcek['yorum_id'] ?>" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                                       
                                             <div class="form-body">
                                              
                                                           
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Yorumu Yazan</label>
                                                                <div class="col-md-4">
                                                                    <input type="text"  class="form-control" placeholder="<?php echo $yorumcek['isim']; ?>" readonly>
                                                                </div>
                                                            </div>
                                                              <div class="form-group">
                                                                <label class="col-md-3 control-label">Mail</label>
                                                                <div class="col-md-4">
                                                                    <input type="text"  class="form-control" placeholder="<?php echo $yorumcek['email']; ?>" readonly>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label"> Yorum </label>
                                                                <div class="col-md-7">
                                                                   <textarea><?php echo $yorumcek['yorum']; ?></textarea>
                                                                </div>
                                                            </div>


                                                              <div class="form-group">
                                                                   <label class="col-md-3 control-label">Yorum Onay</label>
                                                                    <div class="col-md-5">
                                                         <select name="onay" class="bs-select form-control">
                                                         <?php if ($yorumcek['onay']==1){ ?>
                                                              <option value="1">Yorumu Onayla</option>
                                                               <option value="0">Yorumu Onaylama</option>
                                                         <?php }else{?>
                                                              <option value="0">Yorumu Onaylama</option>
                                                              <option value="1">Yorumu Onayla</option>
                                                         <?php } ?>
                                                            
                                                              
                                                          </select>
                                                              </div>
                                                      </div>
                                                              
                                                          
                                                                        
                                                        <div class="form-actions">
                                                            <div class="row">
                                                                <div class="col-md-offset-3 col-md-5">
                                                                  <button  onclick="return confirm('Bilgileri güncellemek istediğinizden emin misiniz?')" type="submit" name="yorumduzenle" class="btn green">Kaydet</button>
                                                                   
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