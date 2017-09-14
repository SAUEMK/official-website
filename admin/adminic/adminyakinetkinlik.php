<?php

include 'adminheader.php'; 
$yakinetkinliksor=$db->prepare("SELECT * from yakinetkinlik where id=?");
$yakinetkinliksor->execute(array(0));
$yakinetkinlikcek=$yakinetkinliksor->fetch(PDO::FETCH_ASSOC);
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
                                    <span>En Yakın Etkinlik Düzenle</span>
                                </li>
                            </ul>

                           
                         
                        </div>

                        <!-- END PAGE BAR -->
                        <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                         <form action="../baglantii/islem.php" method="POST" class="form-horizontal"  enctype="multipart/form-data">
                                                    <div class="form-body">
                                                        <div class="form-group">
                                                                <label class="col-md-3 control-label">Güncel Afiş</label>
                                                                <div class="col-md-4">
                                                                    <img style="width:250px; height:350px;" src="../../<?php echo $yakinetkinlikcek['afis']?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Afiş</label>
                                                                <div class="col-md-4">
                                                                    <input type="file"  name="afis" class="form-control" placeholder="Enter text">
                                                                  
                                                                </div>
                                                            </div>
                                                              <div class="form-group">
                                                                <label class="col-md-3 control-label">Etkinlik Adı</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $yakinetkinlikcek['adi']?>" name="adi" class="form-control" placeholder="Enter text">
                                                     
                                                                </div>
                                                            </div>
                                                              <div class="form-group">
                                                                <label class="col-md-3 control-label">Entiklik Sloganı</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $yakinetkinlikcek['slogan']?>" name="slogan" class="form-control" placeholder="Enter text">
                   
                                                                </div>
                                                            </div>
                                                             <div class="form-group">
                                                                <label class="col-md-3 control-label"><i class="fa fa-handshake-o" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;<strong>fa fa-handshake-o</strong></label>
                                                                <div class="col-md-7">
                                                                    <label style="text-align:left;" class="col-md-12 control-label">Eğer kullanacaksanız yandaki koyu renkli yazıyı 1. açıklama ikonu alanına kopyalayınız.</label>             
                                                                </div>
                                                            </div>
                                                              <div class="form-group">
                                                                <label class="col-md-3 control-label">Etkinilk 1. Açıklama İkonu</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $yakinetkinlikcek['detay1ikon']?>" name="detay1ikon" class="form-control" placeholder="Enter text">
                                    
                                                                </div>
                                                            </div>
                                                              <div class="form-group">
                                                                <label class="col-md-3 control-label">Etkinlik 1. Açıklama Başlığı</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $yakinetkinlikcek['detay1baslik']?>" name="detay1baslik" class="form-control" placeholder="Enter text">
                                                        
                                                                </div>
                                                            </div>
                                                              <div class="form-group">
                                                                <label class="col-md-3 control-label">Etkinlik 1. Açıklama Detayı</label>
                                                                <div class="col-md-7">
                                                                   <textarea name="detay1" class="ckeditor"><?php echo $yakinetkinlikcek['detay1']?></textarea>                                                    
                                                                </div>
                                                            </div> 
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label"><i class="fa fa-grav" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;<strong>fa fa-grav</strong></label>
                                                                <div class="col-md-7">
                                                                    <label style="text-align:left;" class="col-md-12 control-label">Eğer kullanacaksanız yandaki koyu renkli yazıyı 2. açıklama ikonu alanına kopyalayınız.</label>             
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Etkinilk 2. Açıklama İkonu</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $yakinetkinlikcek['detay2ikon']?>" name="detay2ikon" class="form-control" placeholder="Enter text">

                                                                </div>
                                                            </div>
                                                             <div class="form-group">
                                                                <label class="col-md-3 control-label">Etkinlik 2. Açıklama Başlığı</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $yakinetkinlikcek['detay2baslik']?>" name="detay2baslik" class="form-control" placeholder="Enter text">
                                                                   
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Etkinlik 2. Açıklama Detayı</label>
                                                                <div class="col-md-7">
                                                                    <textarea name="detay2" class="ckeditor"><?php echo $yakinetkinlikcek['detay2']?></textarea> 
                                                                </div>
                                                            </div>
                                                             <div class="form-group">
                                                                <label class="col-md-3 control-label"><i class="fa fa-heartbeat" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;<strong>fa fa-heartbeat</strong></label>
                                                                <div class="col-md-7">
                                                                    <label style="text-align:left;" class="col-md-12 control-label">Eğer kullanacaksanız yandaki koyu renkli yazıyı 3. açıklama ikonu alanına kopyalayınız.</label>             
                                                                </div>
                                                            </div>
                                                              <div class="form-group">
                                                                <label class="col-md-3 control-label">Etkinilk 3. Açıklama İkonu</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $yakinetkinlikcek['detay3ikon']?>" name="detay3ikon" class="form-control" placeholder="Enter text">
                                                                   
                                                                </div>
                                                            </div>
                                                              <div class="form-group">
                                                                <label class="col-md-3 control-label">Etkinlik 3. Açıklama Başlığı</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $yakinetkinlikcek['detay3baslik']?>" name="detay3baslik" class="form-control" placeholder="Enter text">
                                                                
                                                                </div>
                                                            </div>
                                                              <div class="form-group">
                                                                <label class="col-md-3 control-label">Etkinlik 3. Açıklama Detayı</label>
                                                                <div class="col-md-7">
                                                                    <textarea name="detay3" class="ckeditor"><?php echo $yakinetkinlikcek['detay3']?></textarea> 
                                                                </div>
                                                            </div>
                                                             <div class="form-group">
                                                                <label class="col-md-3 control-label"><i class="fa fa-globe" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;<strong>fa fa-globe</strong></label>
                                                                <div class="col-md-7">
                                                                    <label style="text-align:left;" class="col-md-12 control-label">Eğer kullanacaksanız yandaki koyu renkli yazıyı 4. açıklama ikonu alanına kopyalayınız.</label>             
                                                                </div>
                                                            </div>
                                                              <div class="form-group">
                                                                <label class="col-md-3 control-label">Etkinilk 4. Açıklama İkonu</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $yakinetkinlikcek['detay4ikon']?>" name="detay4ikon" class="form-control" placeholder="Enter text">

                                                                </div>
                                                            </div>
                                                              <div class="form-group">
                                                                <label class="col-md-3 control-label">Etkinlik 4. Açıklama Başlığı</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $yakinetkinlikcek['detay4baslik']?>" name="detay4baslik" class="form-control" placeholder="Enter text">
                         
                                                                </div>
                                                            </div> 
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Etkinlik 4. Açıklama Detayı</label>
                                                                <div class="col-md-4">
                                                                     <textarea name="detay4" class="ckeditor"><?php echo $yakinetkinlikcek['detay4']?></textarea> 
                                                                </div>
                                                            </div>
                                                        <div class="form-actions">
                                                            <div class="row">
                                                                <div class="col-md-offset-3 col-md-4">
                                                                    <button  onclick="return confirm('Bilgileri güncellemek istediğinizden emin misiniz?')" type="submit" name="guncelleyakinetkinlik" class="btn green">Kaydet</button>
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