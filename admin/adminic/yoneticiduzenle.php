<?php
include 'adminheader.php'; 
$kullanicisor=$db->prepare("SELECT * from sauemk_yonetim where id=?");
$id = $_GET['id'];
$kullanicisor->execute(array($id));
$yoneticihesapcek=$kullanicisor->fetch(PDO::FETCH_ASSOC);
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
                                    <span>Yönetici Hesap Düzenleme</span>
                                </li>
                            </ul>

                           
                         
                        </div>

                        <!-- END PAGE BAR -->
                        <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                         <form action="../baglantii/islem.php?id=<?php echo $yoneticihesapcek['id']; ?>" name="kayit" method="POST" onsubmit="return check_login()" class="form-horizontal" enctype="multipart/form-data">
                                                       
                                             <div class="form-body">
                                                        <div class="form-group">
                                                                <div class="col-md-4" style="padding-top: 30px;padding-left: 80px;">
                                                                    <img style="width:200px; height: 300px;" src="../../<?php echo $yoneticihesapcek['foto']?>">
                                                                </div>
                                                                <div class="col-md-8">
                                                                   <div class="col-md-9">
                                                                        <h4><strong>Kişisel Bilgiler</strong></h4>
                                                                        <div class="well">
                                                                            <address>
                                                                                <strong>Ad Soyad</strong>
                                                                                <br/> <?php echo $yoneticihesapcek['isim']?>
                                                                                <br/></address>
                                                                            <address>
                                                                                <strong>Mail Adresi</strong>
                                                                                <br/>
                                                                               <?php echo $yoneticihesapcek['email']?>
                                                                            </address>
                                                                             <address>
                                                                                <strong>Komisyonu</strong>
                                                                                <br/>
                                                                               <?php echo $yoneticihesapcek['komisyon']?>
                                                                            </address>
                                                                             <address>
                                                                                <strong>Kişisel Açıklama</strong>
                                                                                <br/>
                                                                               <?php echo $yoneticihesapcek['aciklama']?>
                                                                            </address>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                             <div class="form-group">
                                                                <label class="col-md-3 control-label">Yeni Şifre</label>
                                                                <div class="col-md-4">
                                                                    <input type="password" name="sifre" class="form-control" placeholder="Enter text">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Şifre Tekrar</label>
                                                                <div class="col-md-4">
                                                                    <input type="password" name="sifre2" class="form-control" placeholder="Enter text">
                                                                </div>
                                                            </div>

                                                          

                                                            <div class="form-group">
                                                                   <label class="col-md-3 control-label">Yönetici Durum</label>
                                                                    <div class="col-md-6">
                                                         <select name="durum" class="bs-select form-control">
                                                         <?php if ($yoneticihesapcek['durum']==1){ ?>
                                                              <option value="1">Hesap Onaylı</option>
                                                               <option value="0">Hesap Onaylı Değil</option>
                                                         <?php }else{?>
                                                              <option value="0">Hesap Onaylı Değil</option>
                                                              <option value="1">Hesap Onaylı</option>
                                                         <?php } ?>
                                                            
                                                              
                                                          </select>
                                                              </div>
                                                      </div>
                                                                  <div class="form-group">
                                                                   <label class="col-md-3 control-label">Statü</label>
                                                                    <div class="col-md-6">
                                                         <select name="statu" class="bs-select form-control">
                                                         <?php if ($yoneticihesapcek['statu']==0){ ?>
                                                              <option value="0">Tam Yetkili(Üst Yönetim-Bilişim)</option>
                                                              <option value="1">Yönetici Onaylama</option>
                                                              <option value="2">Yönetici Onayla</option>
                                                              <option value="3">Yönetici Onaylama</option>
                                                              <option value="4">Yönetici Onayla</option>
                                                              <option value="5">Yönetici Onaylama</option>
                                                         <?php }else if($yoneticihesapcek['statu']==1){?>
                                                              <option value="1">Yönetici Onayla</option>
                                                               <option value="2">Yönetici Onaylama</option>
                                                               <option value="3">Yönetici Onayla</option>
                                                               <option value="0">Tam Yetkili(Üst Yönetim-Bilişim)</option>
                                                         <?php }else if($yoneticihesapcek['statu']==2){ ?>
                                                              <option value="2">Yönetici Onayla</option>
                                                               <option value="3">Yönetici Onaylama</option>
                                                               <option value="0">Tam Yetkili(Üst Yönetim-Bilişim)</option>
                                                               <option value="1">Yönetici Onaylama</option>
                                                          <?php  }else if($yoneticihesapcek['statu']==3){ ?>
                                                              <option value="3">Yönetici Onayla</option>
                                                               <option value="0">Tam Yetkili(Üst Yönetim-Bilişim)</option>
                                                               <option value="1">Yönetici Onayla</option>
                                                               <option value="2">Yönetici Onaylama</option>
                                                          <?php  }else if($yoneticihesapcek['statu']==4){ ?>
                                                              <option value="3">Yönetici Onayla</option>
                                                               <option value="0">Tam Yetkili(Üst Yönetim-Bilişim)</option>
                                                               <option value="1">Yönetici Onayla</option>
                                                               <option value="2">Yönetici Onaylama</option>
                                                          <?php  }else if($yoneticihesapcek['statu']==5){ ?>
                                                              <option value="3">Yönetici Onayla</option>
                                                               <option value="0">Tam Yetkili(Üst Yönetim-Bilişim)</option>
                                                               <option value="1">Yönetici Onayla</option>
                                                               <option value="2">Yönetici Onaylama</option>
                                                          <?php  } ?>
                                                            
                                                              
                                                          </select>
                                                              </div>
                                                      </div>
                                              
                                                      <div class="form-group">
                                                        <label class="col-md-3 control-label">Yönetici Özel Yetki</label>
                                                         <div class="col-md-6">
                                                         <select name="ozel_yetki" class="bs-select form-control">
                                                         <?php if ($yoneticihesapcek['ozel_yetki']==100){ ?>
                                                              <option value="100">Var</option>
                                                               <option value="10">Yok</option>
                                                         <?php }else{?>
                                                              <option value="10">Yok</option>
                                                              <option value="100">Var</option>
                                                         <?php } ?>
                                                            
                                                              
                                                          </select>
                                                              </div>
                                                      </div>
                                                           
                                                            
                                                        <div class="form-actions">
                                                            <div class="row">
                                                                <div class="col-md-offset-3 col-md-4">
                                                                  <button type="submit" name="duzenlehesap" class="btn green">Kaydet</button>
                                                                   
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
                 <script>
                    function check_login(){
                      var parola = document.forms["kayit"]["sifre"].value;
                      var parola2 = document.forms["kayit"]["sifre2"].value;
                      if (parola != parola2) {
                          alert("Şifreler aynı değil.");
                          return false;
                      }
                    }
                  </script>

         <?php 

         include 'adminfooter.php'

          ?>