<?php
include 'adminheader.php'; 
$albumsor=$db->prepare("SELECT * from galeri where album_id=?");
$id = $_GET['album_id'];
$albumsor->execute(array($id));
$albumcek=$albumsor->fetch(PDO::FETCH_ASSOC);
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
                                    <span>Albüm Düzenleme</span>
                                </li>
                            </ul>

                           
                         
                        </div>

                        <!-- END PAGE BAR -->
                        <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                         <form action="../baglantii/islem.php?album_id=<?php echo $albumcek['album_id'] ?>&album_kapakfoto=<?php echo $albumcek['album_kapakfoto']; ?>" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                                       
                                             <div class="form-body">
                                                        <div class="form-group">
                                                                <label class="col-md-3 control-label">Güncel Fotoğraf</label>
                                                                <div class="col-md-4"  >
                                                                      <?php if($albumcek['album_kapakfoto'] ==''){?>
                                                       <td > <img style="width:365px; height: 216px;" src="../../<?php echo $albumcek['album_defaultfoto']; ?>"></td>
                                                       <?php }else{ ?>
                                                       <td>  <img style="width:365px; height: 216px;" src="../../<?php echo $albumcek['album_kapakfoto']; ?>"></td>
                                                       <?php } ?>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Albüm Kapak Fotoğrafı</label>
                                                                <div class="col-md-5">
                                                                    <input type="file"  name="album_kapakfoto" class="form-control" placeholder="Enter text">
                                                                </div>
                                                            </div>
                                                              <div class="form-group">
                                                                <label class="col-md-3 control-label">Albüm Adı</label>
                                                                <div class="col-md-5">
                                                                    <input type="text" value="<?php echo $albumcek['album_adi']?>" name="album_adi" class="form-control" placeholder="Enter text">
                                                                </div>
                                                            </div>
                                                             <div class="form-group">
                                                                <label class="col-md-3 control-label">Albüm Detay</label>
                                                                <div class="col-md-5">
                                                                    <input type="text" value="<?php echo $albumcek['album_detay']?>" name="album_detay" class="form-control" placeholder="Enter text">
                                                                </div>
                                                            </div>
                                                              
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Albüm Sıra</label>
                                                                <div class="col-md-5">
                                                                    <input type="text" value="<?php echo $albumcek['album_sira']?>" name="album_sira" class="form-control" placeholder="Enter text">
                                                                </div>
                                                            </div>
                                                              <div class="form-group">
                                                                   <label class="col-md-3 control-label">Albüm Durum</label>
                                                                    <div class="col-md-5">
                                                         <select name="album_durum" class="bs-select form-control">
                                                         <?php if ($albumcek['album_durum']==1){ ?>
                                                              <option value="1">Albüm Onayla</option>
                                                               <option value="0">Albüm Onaylama</option>
                                                         <?php }else{?>
                                                              <option value="0">Albüm Onaylama</option>
                                                              <option value="1">Albüm Onayla</option>
                                                         <?php } ?>
                                                            
                                                              
                                                          </select>
                                                              </div>
                                                      </div>
                                                              
                                                          
                                                                        
                                                        <div class="form-actions">
                                                            <div class="row">
                                                                <div class="col-md-offset-3 col-md-5">
                                                                  <button  onclick="return confirm('Bilgileri güncellemek istediğinizden emin misiniz?')" type="submit" name="albumduzenle" class="btn green">Kaydet</button>
                                                                   
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