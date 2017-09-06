<?php
include 'adminheader.php'; 

$kullanicisor=$db->prepare("SELECT * from sauemk_yonetim where email=:mail");
$kullanicisor->execute(array(
'mail'=>$_SESSION['kullanici']
    ));
$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);

?>
                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <div class="page-content">
                        <div class="profile">
                            <div class="tabbable-line tabbable-full-width">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#tab_1_1" data-toggle="tab"> Hesabım </a>
                                    </li>
                                    <li>
                                        <a href="#tab_1_3" data-toggle="tab"> Ayarlar </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab_1_1">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <ul class="list-unstyled profile-nav">
                                                    <li>
                                                        <img style="width: 210px; height: 300px;" src="../../<?php echo $kullanicicek['foto']; ?>" class="img-responsive pic-bordered" alt="" />
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="row">
                                                    <div class="col-md-12 profile-info">
                                                        <h1 class="font-green sbold uppercase"><?php echo $kullanicicek['isim']; ?></h1>
                                                       <?php echo $kullanicicek['aciklama']; ?>
                                                        <p>
                                                            <a href="javascript:;"> <?php echo $kullanicicek['mail']; ?> </a>
                                                        </p>
                                                        <ul class="list-inline">
                                                            <li>
                                                                <i class="fa fa-map-marker"></i> Sakarya Üniversitesi </li>
                                                            <li>
                                                                <i class="fa fa-briefcase"></i> <?php echo $kullanicicek['komisyon']; ?> </li>
                                                            <li>
                                                                <i class="fa fa-star"></i><?php if ($kullanicicek['statu']==0) { ?>
                                                                  Tam Yetkili 
                                                                <?php }else if($kullanicicek['statu']==1){ ?>

                                                                <?php }else if($kullanicicek['statu']==2){ ?>

                                                                <?php }else if($kullanicicek['statu']==3){ ?>

                                                                <?php }else if($kullanicicek['statu']==4){ ?>

                                                                <?php }else if($kullanicicek['statu']==5){ ?>

                                                                <?php } ?>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!--end col-md-8-->
                                                  
                                                    <!--end col-md-4-->
                                                </div>
                                                <!--end row-->
                                            </div>
                                        </div>
                                    </div>

                                    <!--tab_1_2-->
                                    <div class="tab-pane" id="tab_1_3">
                                        <div class="row profile-account">
                                            <div class="col-md-3">
                                                <ul class="ver-inline-menu tabbable margin-bottom-10">
                                                    <li class="active">
                                                        <a data-toggle="tab" href="#tab_1-1">
                                                            <i class="fa fa-cog"></i> Kişisel Bilgiler </a>
                                                        <span class="after"> </span>
                                                    </li>
                                                    <li>
                                                        <a data-toggle="tab" href="#tab_2-2">
                                                            <i class="fa fa-picture-o"></i> Profil Fotoğrafı </a>
                                                    </li>
                                                    <li>
                                                        <a data-toggle="tab" href="#tab_3-3">
                                                            <i class="fa fa-lock"></i> Şifre </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="tab-content">
                                                    <div id="tab_1-1" class="tab-pane active">
                                                        <form role="form" action="../baglantii/islem.php?id=<?php echo $kullanicicek['id']; ?>" method="POST">
                                                            <div class="form-group">
                                                                <label class="control-label">İsim</label>
                                                                <input type="text" placeholder="<?php echo $kullanicicek['isim']; ?>" class="form-control" readonly/> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Mail Adresi</label>
                                                                <input type="text"  placeholder="<?php echo $kullanicicek['email']; ?>" class="form-control" readonly/> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Hakkında</label>
                                                                <textarea class="ckeditor" name="aciklama"><?php echo $kullanicicek['aciklama']; ?></textarea>
                                                            </div>
                                                            <div class="margiv-top-10">
                                                                <button type="submit" name="aciklamakaydet" class="btn green"> Değişiklikleri Kaydet </button>
                                                                <a href="adminprofile.php" class="btn default"> İptal Et </a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div id="tab_2-2" class="tab-pane">
                                                        <p>  </p>
                                                        <form action="../baglantii/islem.php?id=<?php echo $kullanicicek['id']; ?>" role="form" method="POST" enctype="multipart/form-data">
                                                            <div class="form-group">
                                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                    <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                                        <img style="width: 200px; height: 150px;" src="../../<?php echo $kullanicicek['foto']; ?>" alt="" /> 
                                                                    </div>
                                                                    <div>
                                                                        <span class="btn default btn-file">
                                                                            <input type="file" name="foto">
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="margin-top-10">
                                                                <button type="submit" name="fotokaydet" class="btn green"> Değişikliği Onayla </button>
                                                                <a href="adminprofile.php" class="btn default"> İptal Et </a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div id="tab_3-3" class="tab-pane">
                                                        <form action="../baglantii/islem.php?id=<?php echo $kullanicicek['id']; ?>" name="kayit" method="POST" onsubmit="return check_login()">
                                                            <div class="form-group">
                                                                <label class="control-label">Yeni Şifren</label>
                                                                <input type="password" name="sifre" class="form-control" /> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Şifre Tekrar</label>
                                                                <input type="password" name="sifre2" class="form-control" /> </div>
                                                            <div class="margin-top-10">
                                                                <button name="sifrekaydet" class="btn green"> Şifreni Değiştir</button> 
                                                                <a href="adminprofile.php" class="btn default"> İptal Et </a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-md-9-->
                                        </div>
                                    </div>
                                    <!--end tab-pane-->
                                  






                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->
                <!-- END QUICK SIDEBAR -->
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