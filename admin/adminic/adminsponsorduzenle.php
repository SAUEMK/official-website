<?php
include 'adminheader.php'; 
$sponsorsor=$db->prepare("SELECT * from sponsor where sponsor_id=?");
$id = $_GET['sponsor_id'];
$sponsorsor->execute(array($id));
$sponsorcek=$sponsorsor->fetch(PDO::FETCH_ASSOC);
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
                                    <span>Sponsor Düzenleme</span>
                                </li>
                            </ul>

                           
                         
                        </div>

                        <!-- END PAGE BAR -->
                        <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                         <form action="../baglantii/islem.php?sponsor_id=<?php echo $sponsorcek['sponsor_id'] ?>" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                                       
                                             <div class="form-body">
                                                        <div class="form-group">
                                                                <label class="col-md-3 control-label">Güncel Logo</label>
                                                                <div class="col-md-4"  >
                                                                    <img style="width:300px; height: 100px;" src="../../<?php echo $sponsorcek['sponsor_logo']?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Sponsor Logo</label>
                                                                <div class="col-md-4">
                                                                    <input type="file"  name="sponsor_logo" class="form-control" placeholder="Enter text">
                                                                </div>
                                                            </div>
                                                              <div class="form-group">
                                                                <label class="col-md-3 control-label">Sponsor Adı</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $sponsorcek['sponsor_ad']?>" name="sponsor_ad" class="form-control" placeholder="Enter text">
                                                                </div>
                                                            </div>
                                                              <div class="form-group">
                                                                <label class="col-md-3 control-label">Sponsor Mail</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $sponsorcek['sponsor_mail']?>" name="sponsor_mail" class="form-control" placeholder="Enter text">
                                                                </div>
                                                            </div>
                                                              <div class="form-group">
                                                                <label class="col-md-3 control-label">Sponsor Sıra</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $sponsorcek['sponsor_sira']?>" name="sponsor_sira" class="form-control" placeholder="Enter text">
                                                                </div>
                                                            </div>
                                                              <div class="form-group">
                                                                <label class="col-md-3 control-label">Sponsor Durum</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="<?php echo $sponsorcek['sponsor_durum']?>" name="sponsor_durum" class="form-control" placeholder="Enter text">
                                                                </div>
                                                            </div>
                                                            
                                                        <div class="form-actions">
                                                            <div class="row">
                                                                <div class="col-md-offset-3 col-md-4">
                                                                  <button  onclick="return confirm('Bilgileri güncellemek istediğinizden emin misiniz?')" type="submit" name="duzenlesponsor" class="btn green">Kaydet</button>
                                                                   
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