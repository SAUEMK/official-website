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
                                    <span>Sponsor Ekleme</span>
                                </li>
                            </ul>

                           
                         
                        </div>

                        <!-- END PAGE BAR -->
                        <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                         <form action="../baglantii/islem.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                                       
                                                        <div class="form-body">
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Sponsor Logo</label>
                                                                <div class="col-md-4">
                                                                    <input type="file"  name="sponsor_logo" class="form-control" placeholder="Enter text">
                                                                </div>
                                                            </div>
                                                              <div class="form-group">
                                                                <label class="col-md-3 control-label">Sponsor Adı</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="" name="sponsor_ad" class="form-control" placeholder="Enter text">
                                                                </div>
                                                            </div>
                                                              <div class="form-group">
                                                                <label class="col-md-3 control-label">Sponsor Mail</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="" name="sponsor_mail" class="form-control" placeholder="Enter text">
                                                                </div>
                                                            </div>
                                                              <div class="form-group">
                                                                <label class="col-md-3 control-label">Sponsor Sıra</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="" name="sponsor_sira" class="form-control" placeholder="Enter text">
                                                                </div>
                                                            </div>
                                                              <div class="form-group">
                                                                <label class="col-md-3 control-label">Sponsor Durum</label>
                                                                <div class="col-md-4">
                                                                        <select name="sponsor_durum" class="bs-select form-control">
                                                                           <option value="1">Sponsoru Onayla</option>
                                                                           <option value="0">Sponsoru Onaylama</option>
                                                                        </select>
                                                                </div>
                                                            </div>
                                                            
                                                        <div class="form-actions">
                                                            <div class="row">
                                                                <div class="col-md-offset-3 col-md-4">
                                                                    <button  onclick="return confirm('Bilgileri güncellemek istediğinizden emin misiniz?')" type="submit" name="sponsorekle" class="btn green">Ekle</button>
                                                                    
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