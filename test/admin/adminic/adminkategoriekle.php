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
                                    <span>Kategori Ekleme</span>
                                </li>
                            </ul>

                           
                         
                        </div>

                        <!-- END PAGE BAR -->
                        <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                         <form action="../baglantii/blogislem.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                                       
                                                        <div class="form-body">
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Kategori Fotoğrafı</label>
                                                                <div class="col-md-4">
                                                                    <input type="file"  name="kat_foto" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Kategori Adı</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="" name="kat_ad" class="form-control" placeholder="Enter text">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Kategori Açıklama</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="" name="kat_aciklama" class="form-control" placeholder="Enter text">
                                                                </div>
                                                            </div>
                                                        <div class="form-actions">
                                                            <div class="row">
                                                                <div class="col-md-offset-3 col-md-4">
                                                                    <button  onclick="return confirm('Bilgileri güncellemek istediğinizden emin misiniz?')" type="submit" name="kategoriekle" class="btn green">Ekle</button>
                                                                    
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