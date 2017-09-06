<?php
include 'adminheader.php'; 

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
                                    <span>Konu Ekleme</span>
                                </li>
                            </ul>

                           
                         
                        </div>

                        <!-- END PAGE BAR -->
                        <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                         <form action="../baglantii/blogislem.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                                       
                                                        <div class="form-body">
                                                          <div class="form-group">
                                                                <label class="col-md-3 control-label">Konu Kapak Fotoğrafı</label>
                                                                <div class="col-md-4">
                                                                    <input type="file" name="post_foto" class="form-control">
                                                                </div>
                                                            </div>
                                                             <div class="form-group">
                                                                <label class="col-md-3 control-label">Konuyu Ekleyeceğin Kategori</label>
                                                                 <div class="col-md-4">
                                                                    <?php
                                                                        $kategorisor=$db->prepare("select * from kategoriler order by kat_ad");
                                                                        $kategorisor->execute();
                                                                    ?>
                                                                        <select name="kat_id" class="bs-select form-control">
                                                                            <option>Hangi Kategoriye ekleyeceğini seç...</option>
                                                                            <?php  while($kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC)){ ?>
                                                                            <option value="<?php echo $kategoricek['kat_id'] ?> "><?php echo $kategoricek['kat_ad'] ?> </option>
                                                                            <?php } ?>
                                                                        </select>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Konu Başlığı</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="" name="post_baslik" class="form-control" placeholder="Enter text">
                                                                </div>
                                                            </div>
                                                          
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Konu Detayı</label>
                                                                <div class="col-md-7">
                                                                   <textarea name="post_detay" class="ckeditor"></textarea>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Konu Onay</label>
                                                                <div class="col-md-4">
                                                                    <select name="post_onay" class="bs-select form-control">
                                                                        <option value="0">Konuyu Onaylama</option>
                                                                        <option value="1">Konuyu Onayla</option>
                                                                    </select>
                                                                </div>
                                                            </div>



                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Konuyu Yazanın Fotoğrafı</label>
                                                                <img style="width: 100px; height: 100px; padding-left: 15px;"  src="../../<?php echo $kullanicicek['foto']; ?>">
                                                                    <input type="hidden" value="<?php echo $kullanicicek['foto']; ?>" name="yazan_foto" class="form-control" readonly>
                                                                
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Konuyu Yazanın Adı</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $kullanicicek['isim']; ?>" name="yazan_ad" class="form-control" placeholder="Enter text" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Konuyu Yazanın Açıklaması</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $kullanicicek['aciklama']; ?>" name="yazan_detay" class="form-control" placeholder="Enter text" readonly>
                                                                </div>
                                                            </div>




                                                        <div class="form-actions">
                                                            <div class="row">
                                                                <div class="col-md-offset-3 col-md-4">
                                                                    <button  onclick="return confirm('Bilgileri güncellemek istediğinizden emin misiniz?')" type="submit" name="konuekle" class="btn green">Ekle</button>
                                                                    
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