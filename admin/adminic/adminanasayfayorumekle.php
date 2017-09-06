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
<span>Anasayfa Yorum Ekleme</span>
</li>
</ul>
</div>
<!-- END PAGE BAR -->
<div class="portlet-body form">
<!-- BEGIN FORM-->
<form action="../baglantii/islem.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
           
            <div class="form-body">
                <div class="form-group">
                    <label class="col-md-3 control-label">Yorum Yapan Fotoğraf</label>
                    <div class="col-md-4">
                        <input type="file"  name="yorum_foto" class="form-control" >
                    </div>
                </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Yorum Yapan Adı</label>
                    <div class="col-md-4">
                        <input type="text"  name="yorum_ad" class="form-control" placeholder="Enter text">
                    </div>
                </div>
                 
                  <div class="form-group">
                    <label class="col-md-3 control-label">Yorum Detay</label>
                    <div class="col-md-4">
                        <input type="text" name="yorum_detay" class="form-control" placeholder="Enter text">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Yorum Yapan Konum</label>
                    <div class="col-md-4">
                        <input type="text"  name="yorum_konum" class="form-control" placeholder="Enter text">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Yorum Sıra</label>
                    <div class="col-md-4">
                        <input type="text" name="yorum_sira" class="form-control" placeholder="Enter text">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Yorum Durum</label>
                    <div class="col-md-4">
                        <select name="yorum_durum" class="bs-select form-control">
                            <option value="0">Yorumu Onaylama</option>
                            <option value="1">Yorumu Onayla</option>
                        </select>
                    </div>
                </div>
                 
                
            <div class="form-actions">
                <div class="row">
                    <div class="col-md-offset-3 col-md-4">
                        <button  onclick="return confirm('Yorumu eklemek istediğinizden emin misiniz?')" type="submit" name="anasayfayorumekle" class="btn green">Ekle</button>
                        
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