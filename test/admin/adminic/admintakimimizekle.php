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
<span>Yönetici Ekleme</span>
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
                        <input type="file"  name="yonetici_foto" class="form-control" >
                    </div>
                </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Yönetici Adı</label>
                    <div class="col-md-4">
                        <input type="text"  name="yonetici_ad" class="form-control" placeholder="Enter text">
                    </div>
                </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Yönetici Soyad</label>
                    <div class="col-md-4">
                        <input type="text"  name="yonetici_soyad" class="form-control" placeholder="Enter text">
                    </div>
                </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Yönetici Mail</label>
                    <div class="col-md-4">
                        <input type="text" name="yonetici_mail" class="form-control" placeholder="Enter text">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Yönetici Telefon</label>
                    <div class="col-md-4">
                        <input type="text"  name="yonetici_telefon" class="form-control" placeholder="Enter text">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Yönetici Komisyon</label>
                    <div class="col-md-4">
                        <input type="text" name="yonetici_komisyon" class="form-control" placeholder="Enter text">
                    </div>
                </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Yönetici Facebook</label>
                    <div class="col-md-4">
                        <input type="text"  name="yonetici_facebook" class="form-control" placeholder="Enter text">
                    </div>
                </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Yönetici Twitter</label>
                    <div class="col-md-4">
                        <input type="text"  name="yonetici_twitter" class="form-control" placeholder="Enter text">
                    </div>
                </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Yönetici Instagram</label>
                    <div class="col-md-4">
                        <input type="text"  name="yonetici_instagram" class="form-control" placeholder="Enter text">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Yönetici Linkedin</label>
                    <div class="col-md-4">
                        <input type="text"  name="yonetici_linkedin" class="form-control" placeholder="Enter text">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Yönetici Sıra</label>
                    <div class="col-md-4">
                        <input type="text"  name="yonetici_sira" class="form-control" placeholder="Enter text">
                    </div>
                </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Yönetici Durum</label>
                    <div class="col-md-4">
                            <select name="yonetici_durum" class="bs-select form-control">
                               <option value="1">Yönetici Onayla</option>
                               <option value="0">Yönetici Onaylama</option>
                            </select>
                    </div>
                </div>
                
            <div class="form-actions">
                <div class="row">
                    <div class="col-md-offset-3 col-md-4">
                        <button  onclick="return confirm('Bilgileri güncellemek istediğinizden emin misiniz?')" type="submit" name="yoneticiekle" class="btn green">Ekle</button>
                        
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