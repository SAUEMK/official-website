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
<span>Tüm Etkinliklere Etkinlik Ekleme</span>
</li>
</ul>
</div>
<!-- END PAGE BAR -->
<div class="portlet-body form">

<label><strong>Yıl Ekle</strong></label>
<!-- BEGIN FORM-->

           
    <div class="form-body">
        <form action="../baglantii/islem.php" method="POST" class="form-horizontal">
            <div class="form-group">
                <label class="col-md-3 control-label">Fotoğraf Durum</label>
                 <div class="col-md-4">
                        <select name="yil" class="bs-select form-control">
                            <option>Hangi yılı ekleyeceğini seç...</option>
                            <option value="1994">1994</option>
                            <option value="1995">1995</option>
                            <option value="1996">1996</option>
                            <option value="1997">1997</option>
                            <option value="1998">1998</option>
                            <option value="1999">1999</option>
                            <option value="2000">2000</option>
                            <option value="2001">2001</option>    
                            <option value="2002">2002</option>
                            <option value="2003">2003</option>
                            <option value="2004">2004</option>
                            <option value="2005">2005</option>
                            <option value="2006">2006</option>
                            <option value="2007">2007</option>
                            <option value="2008">2008</option>
                            <option value="2009">2009</option>    
                            <option value="2010">2010</option>
                            <option value="2011">2011</option>
                            <option value="2012">2012</option>
                            <option value="2013">2013</option>
                            <option value="2014">2014</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>    
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>    
                            <option value="2026">2026</option>
                            <option value="2027">2027</option>
                            <option value="2028">2028</option>
                            <option value="2029">2029</option>
                            <option value="2030">2030</option>
                        </select>
                </div>
            </div>
                
            <div>
                <div class="row">
                    <div class="col-md-offset-3 col-md-4">
                        <button  onclick="return confirm('Fotoğraf eklemek istediğinizden emin misiniz?')" type="submit" name="tumetkinlikyilekle" class="btn green">Ekle</button>
                        
                    </div>
                </div>
            </div>
        </form>
        <!-- END FORM-->
    </div>
<div class="portlet-body form">


<label><strong>Etkinlik Ekle</strong></label>
<!-- BEGIN FORM-->
           
            <div class="form-body">

<form action="../baglantii/islem.php" method="POST" class="form-horizontal">
            <div class="form-group">
                    <label class="col-md-3 control-label">Fotoğraf Durum</label>
                    <div class="col-md-4">
                        <select name="yilustid" class="bs-select form-control">
                        <option>Hangi yıla ekleyeceğini seç...</option>
                        <?php  
                  
    $etkinliksor=$db->prepare("select id,yil from tumetkinlikler where yil NOT IN ( 0 ) order by yil");
    $etkinliksor->execute();
    while($etkinlikcek=$etkinliksor->fetch(PDO::FETCH_ASSOC)){
        if ($etkinlikcek['yilustid']==0) {
        ?>
                            <option value="<?php echo $etkinlikcek['id'] ?>"><?php echo $etkinlikcek['yil'] ?></option>
                       <?php }
                       } ?>    
                        </select>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-md-3 control-label">Etkinlik Adı</label>
                    <div class="col-md-4">
                        <input type="text" name="ad" class="form-control" placeholder="Enter text">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Etkinlik Açıklaması</label>
                    <div class="col-md-6">
                       <textarea name="aciklama" class="ckeditor"></textarea>
                    </div>
                </div>
                
                 
                
            <div class="form-actions">
                <div class="row">
                    <div class="col-md-offset-3 col-md-4">
                        <button  onclick="return confirm('Fotoğraf eklemek istediğinizden emin misiniz?')" type="submit" name="tumetkinlikekle" class="btn green">Ekle</button>
                        
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