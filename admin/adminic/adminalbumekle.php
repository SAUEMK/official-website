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
<span>Galeriye Albüm Ekleme</span>
</li>
</ul>
</div>
<!-- END PAGE BAR -->
<div class="portlet-body form">
<!-- BEGIN FORM-->
<form action="../baglantii/islem.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
           
            <div class="form-body">
                <div class="form-group">
                    <label class="col-md-3 control-label">Albüm Kapak Fotoğrafı</label>
                    <div class="col-md-4">
                        <input type="file"  name="album_kapakfoto" class="form-control" >
                    </div>
                </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Albüm Adı</label>
                    <div class="col-md-4">
                        <input type="text"  name="album_adi" class="form-control" placeholder="Enter text">
                    </div>
                </div>
                 
                  <div class="form-group">
                    <label class="col-md-3 control-label">Albüm Detay</label>
                    <div class="col-md-4">
                        <input type="text" name="album_detay" class="form-control" placeholder="Enter text">
                    </div>
                </div>
           
                <div class="form-group">
                    <label class="col-md-3 control-label">Albüm Sıra</label>
                    <div class="col-md-4">
                        <input type="text" name="album_sira" class="form-control" placeholder="Enter text">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Albüm Durum</label>
                    <div class="col-md-4">
                        <select name="album_durum" class="bs-select form-control">
                            <option value="0">Albümü Onaylama</option>
                            <option value="1">Albümü Onayla</option>
                        </select>
                    </div>
                </div>
                 
                
            <div class="form-actions">
                <div class="row">
                    <div class="col-md-offset-3 col-md-4">
                        <button  onclick="return confirm('Albümü eklemek istediğinizden emin misiniz?')" type="submit" name="albumekle" class="btn green">Ekle</button>
                        
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