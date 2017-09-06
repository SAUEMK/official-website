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
                                    <span>Yönetici Hesap Ekleme</span>
                                </li>
                            </ul>

                           
                         
                        </div>

                        <!-- END PAGE BAR -->
                        <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                         <form action="../baglantii/islem.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
                                                       
                                                        <div class="form-body">
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Yönetici Fotoğraf</label>
                                                                <div class="col-md-4">
                                                                    <input type="file"  name="foto" class="form-control" placeholder="Enter text">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Yönetici Adı</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="" name="isim" class="form-control" placeholder="Enter text">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Yönetici Mail</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" value="" name="email" class="form-control" placeholder="Enter text">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                              <label class="col-md-3 control-label">Yönetim Pozisyonu</label>
                                                              <div class="col-md-4">
                                                                 <select name="komisyon" class="bs-select form-control" required="required">
                                                                       <option>Yönetim pozisyonunu seç...</option>
                                                                       <option value="Kulüp Başkanı">Kulüp Başkanı</option>
                                                                       <option value="Kulüp Başkan Yardımcısı">Kulüp Başkan Yardımcısı</option>
                                                                       <option value="Kulüp Sekreteri">Kulüp Sekreteri</option>
                                                                       <option value="Bilişim & Medya Komisyonu">Bilişim & Medya Komisyonu</option>
                                                                       <option value="Eğitim Komisyonu">Eğitim Komisyonu</option>
                                                                       <option value="Teknik Gezi Komisyonu">Teknik Gezi Komisyonu</option>
                                                                       <option value="İnsan Kaynakları Komisyonu">İnsan Kaynakları Komisyonu</option>
                                                                       <option value="Sosyal Faaliyet Komisyonu">Sosyal Faaliyet Komisyonu</option>
                                                                       <option value="Finans Komisyonu">Finans Komisyonu</option>
                                                                       <option value="Toplumsal Duyarlılık Komisyonu">Toplumsal Duyarlılık Komisyonu</option>
                                                                       <option value="Proje Komisyonu">Proje Komisyonu</option>
                                                                       <option value="Kurumsal İletişim Komisyonu">Kurumsal İletişim Komisyonu</option>
                                                                  </select>
                                                              </div>
                                                           </div>

                                                           <div class="form-group">
                                                                <label class="col-md-3 control-label">Yönetici Açıkaması</label>
                                                                <div class="col-md-7">
                                                                    <textarea class="ckeditor" name="aciklama"></textarea>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                              <label class="col-md-3 control-label">Statü</label>
                                                              <div class="col-md-4">
                                                                 <select name="statu" class="bs-select form-control">
                                                                 <option>Site yönetimindeki statü durumunu seç...</option>
                                                                       <option value="0">Tam Yetkili(Üst Yönetim-Bilişim)</option>
                                                                       <option value="1">Yönetici Onaylama</option>
                                                                       <option value="2">Yönetici Onayla</option>
                                                                       <option value="3">Yönetici Onaylama</option>
                                                                       <option value="4">Yönetici Onayla</option>
                                                                       <option value="5">Yönetici Onaylama</option>
                                                                  </select>
                                                              </div>
                                                           </div>





                                                           <div class="form-group">
                                                                <label class="col-md-3 control-label">Yönetici Durum</label>
                                                                <div class="col-md-4">
                                                                        <select name="durum" class="bs-select form-control">
                                                                        <option>Yönetici aktif-pasif durumunu seç...</option>
                                                                           <option value="1">Yönetici Onayla</option>
                                                                           <option value="0">Yönetici Onaylama</option>
                                                                        </select>
                                                                </div>
                                                            </div>
                                                            
                                                           <div class="form-group">
                                                                <label class="col-md-3 control-label">Yönetici Özel Yetki</label>
                                                                <div class="col-md-4">
                                                                        <select name="ozel_yetki" class="bs-select form-control">
                                                                        <option>Yöneticinin özel yetkisi olup olmadığını seç...</option>
                                                                           <option value="10">Yok</option>
                                                                           <option value="100">Var</option>
                                                                        </select>
                                                                </div>
                                                            </div>






                                                        <div class="form-actions">
                                                            <div class="row">
                                                                <div class="col-md-offset-3 col-md-4">
                                                                    <button  onclick="return confirm('Bilgileri güncellemek istediğinizden emin misiniz?')" type="submit" name="hesapekle" class="btn green">Ekle</button>
                                                                    
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