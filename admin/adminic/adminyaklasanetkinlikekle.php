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
<span>Yaklaşan Etkinliklere Etkinlik Ekleme</span>
</li>
</ul>
</div>
<!-- END PAGE BAR -->


<div class="portlet-body form">


<label><strong>Etkinlik Ekle</strong></label>
<!-- BEGIN FORM-->
           
            <div class="form-body">

<form action="../baglantii/islem.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="col-md-3 control-label">Etkinlik Tarihi</label>
                    <div class="col-md-4">
                        <input type="date" name="tarih" class="form-control" placeholder="Enter text">
                    </div>
                </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Etkinlik Afişi</label>
                    <div class="col-md-4">
                        <input type="file" name="afis" class="form-control" placeholder="Enter text">
                    </div>
                </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Etkinlik Adı</label>
                    <div class="col-md-4">
                        <input type="text" name="adi" class="form-control" placeholder="Enter text">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Etkinlik Detayı</label>
                    <div class="col-md-7">
                        <textarea name="detay" class="ckeditor"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Etkinlik Kayıt Formu</label>
                    <div class="col-md-5">
                      <input type="text" name="kayitform" class="form-control" placeholder="Enter text">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Etkinlik Kayıt Formu Onay</label>
                    <div class="col-md-4">
                        <select name="formonay" class="bs-select form-control">
                            <option value="0">Formu Onaylama</option>
                            <option value="1">Formu Onayla</option>
                        </select>
                    </div>
                </div>
                <?php  $yaklasanetkinliksor=$db->prepare("select * from yaklasanetkinlikler order by sira desc limit 0, 1");
                $yaklasanetkinliksor->execute();
                $yaklasanetkinlikcek=$yaklasanetkinliksor->fetch(PDO::FETCH_ASSOC);?>
                 <div class="form-group">
                    <label class="col-md-3 control-label">Etkinlik Ekranda Gösterme Sırası</label>
                    <div class="col-md-4">
                      <input type="text" name="sira" class="form-control" value="<?php echo $yaklasanetkinlikcek['sira']+1; ?>" required="" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Etkinlik Durumu</label>
                    <div class="col-md-4">
                        <select name="onay" class="bs-select form-control">
                            <option value="0">Etkinlik Onaylama</option>
                            <option value="1">Etkinlik Onayla</option>
                        </select>
                    </div>
                </div>
                 
                
            <div class="form-actions">
                <div class="row">
                    <div class="col-md-offset-3 col-md-4">
                        <button  onclick="return confirm('Fotoğraf eklemek istediğinizden emin misiniz?')" type="submit" name="yaklasanetkinlikekle" class="btn green">Ekle</button>
                        
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