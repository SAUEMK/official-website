<?php
include 'adminheader.php'; 
$yaklasanetkinliksor=$db->prepare("SELECT * from yaklasanetkinlikler where id=?");
$id = $_GET['id'];
$yaklasanetkinliksor->execute(array($id));
$yaklasanetkinlikcek=$yaklasanetkinliksor->fetch(PDO::FETCH_ASSOC);
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
                                    <span>Yaklaşan Etkinlikler Etkinlik Düzenleme</span>
                                </li>
                            </ul>

                           
                         
                        </div>

                        <!-- END PAGE BAR -->
                        <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                         <form action="../baglantii/islem.php?id=<?php echo $yaklasanetkinlikcek['id'] ?>" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                                       
            <div class="form-body">
              <div class="form-group">
                    <label class="col-md-3 control-label">Güncel Afiş</label>
                    <div class="col-md-4">
                        <img style="height:300px; width: 200px; " src="../../<?php echo $yaklasanetkinlikcek['afis']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Etkinlik Afişi</label>
                    <div class="col-md-4">
                        <input type="file" name="afis" class="form-control" placeholder="Enter text">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Etkinlik Tarihi</label>
                    <div class="col-md-4">
                        <input type="date" value="<?php echo $yaklasanetkinlikcek['tarih']; ?>" name="tarih" class="form-control" placeholder="Enter text">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Etkinlik Adı</label>
                    <div class="col-md-4">
                        <input type="text" value="<?php echo $yaklasanetkinlikcek['adi']; ?>" name="adi" class="form-control" placeholder="Enter text">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Etkinlik Detayı</label>
                    <div class="col-md-7">
                        <textarea name="detay" class="ckeditor"><?php echo $yaklasanetkinlikcek['detay']; ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Etkinlik Kayıt Formu</label>
                    <div class="col-md-5">
                      <input type="text" value="<?php echo $yaklasanetkinlikcek['kayitform']; ?>" name="kayitform" class="form-control" placeholder="Enter text">
                    </div>
                </div>
                 <div class="form-group">
                    <label class="col-md-3 control-label">Etkinlik Kayıt Formu Durumu</label>
                    <div class="col-md-4">
                    <?php if ($yaklasanetkinlikcek['formonay']==1) { ?>
                        <select name="formonay" class="bs-select form-control">
                            <option value="1">Formu Onayla</option>
                            <option value="0">Formu Onaylama</option>
                        </select>
                    <?php }else{ ?>
                        <select name="formonay" class="bs-select form-control">
                            <option value="0">Formu Onaylama</option>
                            <option value="1">Formu Onayla</option>
                        </select>
                       <?php } ?>
                        
                    </div>
                </div>  
                <div class="form-group">
                    <label class="col-md-3 control-label">Etkinlik Durumu</label>
                    <div class="col-md-4">
                    <?php if ($yaklasanetkinlikcek['durum']==1) { ?>
                        <select name="onay" class="bs-select form-control">
                            <option value="1">Etkinlik Onayla</option>
                            <option value="0">Etkinlik Onaylama</option>
                        </select>
                    <?php }else{ ?>
                        <select name="onay" class="bs-select form-control">
                            <option value="0">Etkinlik Onaylama</option>
                            <option value="1">Etkinlik Onayla</option>
                        </select>
                       <?php } ?>
                        
                    </div>
                </div>  
                                                        <div class="form-actions">
                                                            <div class="row">
                                                                <div class="col-md-offset-3 col-md-5">
                                                                  <button  onclick="return confirm('Bilgileri güncellemek istediğinizden emin misiniz?')" type="submit" name="yaklasanetkinlikduzenle" class="btn green">Kaydet</button>
                                                                   
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