<?php
include 'adminheader.php'; 
$yorumsor=$db->prepare("SELECT * from anasayfa_yorum where yorum_id=?");
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
                                    <span>Anasayfa Yorum Düzenleme</span>
                                </li>
                            </ul>

                           
                         
                        </div>

                        <!-- END PAGE BAR -->
                        <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                         <form action="../baglantii/islem.php?yorum_id=<?php echo $yorumcek['yorum_id'] ?>" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                                       
                                             <div class="form-body">
                                                        <div class="form-group">
                                                                <label class="col-md-3 control-label">Güncel Fotoğraf</label>
                                                                <div class="col-md-4"  >
                                                                      <?php if($yorumcek['yorum_foto'] ==''){?>
                                                       <td > <img style="width: 100px; height: 100px;" src="../../<?php echo $yorumcek['yorum_defaultfoto']; ?>"></td>
                                                       <?php }else{ ?>
                                                       <td>  <img src="../../<?php echo $yorumcek['yorum_foto']; ?>"></td>
                                                       <?php } ?>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Yorum Yapan Fotoğraf</label>
                                                                <div class="col-md-4">
                                                                    <input type="file"  name="yorum_foto" class="form-control" placeholder="Enter text">
                                                                </div>
                                                            </div>
                                                              <div class="form-group">
                                                                <label class="col-md-3 control-label">Yorum Yapan Adı</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $yorumcek['yorum_ad']?>" name="yorum_ad" class="form-control" placeholder="Enter text">
                                                                </div>
                                                            </div>
                                                             <div class="form-group">
                                                                <label class="col-md-3 control-label">Yorum Detay</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $yorumcek['yorum_detay']?>" name="yorum_detay" class="form-control" placeholder="Enter text">
                                                                </div>
                                                            </div>
                                                              <div class="form-group">
                                                                <label class="col-md-3 control-label">Yorum Yapan Konum</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $yorumcek['yorum_konum']?>" name="yorum_konum" class="form-control" placeholder="Enter text">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Yorum Sıra</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $yorumcek['yorum_sira']?>" name="yorum_sira" class="form-control" placeholder="Enter text">
                                                                </div>
                                                            </div>
                                                              <div class="form-group">
                                                                   <label class="col-md-3 control-label">Yorum Durum</label>
                                                                    <div class="col-md-4">
                                                         <select name="yorum_durum" class="bs-select form-control">
                                                         <?php if ($yorumcek['yorum_durum']==1){ ?>
                                                              <option value="1">Yorum Onayla</option>
                                                               <option value="0">Yorum Onaylama</option>
                                                         <?php }else{?>
                                                              <option value="0">Yorum Onaylama</option>
                                                              <option value="1">Yorum Onayla</option>
                                                         <?php } ?>
                                                            
                                                              
                                                          </select>
                                                              </div>
                                                      </div>
                                                              
                                                          
                                                                        
                                                        <div class="form-actions">
                                                            <div class="row">
                                                                <div class="col-md-offset-3 col-md-4">
                                                                  <button  onclick="return confirm('Bilgileri güncellemek istediğinizden emin misiniz?')" type="submit" name="duzenleanasayfayorum" class="btn green">Kaydet</button>
                                                                   
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