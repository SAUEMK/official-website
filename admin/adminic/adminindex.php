<?php

include 'adminheader.php'; 
                  
$mesajsor=$db->prepare("select * from iletisim order by tarih DESC limit 15");
$mesajsor->execute();
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
                                    <span>Anasayfa</span>
                                </li>
                            </ul>
                         
                        </div>
                        <!-- END PAGE BAR -->
                        <!-- BEGIN PAGE TITLE-->
                        <h1 class="page-title"> Endüstri Mühendsiliği Kulübü <?php echo $kullanicicek['komisyon'];  ?>
                         
                        </h1>
                            <div class="col-md-9 col-sm-9" >
                                <div class="portlet light bordered" style="margin-bottom: 0px;">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="icon-share font-dark hide"></i>
                                            <span class="caption-subject font-dark bold uppercase">Mesaj Gönderenler</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="scroller" style="height: 300px;" data-always-visible="1" data-rail-visible="0">
                                            <ul class="feeds">
<?php while($mesajcek=$mesajsor->fetch(PDO::FETCH_ASSOC)){ ?>

                                                <li>
                                                    <div class="col1">
                                                        <div class="cont">
                                                            <div class="cont-col1">
                                                                <div class="label label-sm label-info">
                                                                    <i class="fa fa-close"></i>
                                                                </div>
                                                            </div>
                                                            <div class="cont-col2">
                                                                <div class="desc"> <?php echo $mesajcek['email']; ?>
                                                                    <span class="label label-sm label-warning "> <?php echo $mesajcek['isim']; ?>
                                                                        
                                                                    </span>
                                                                </div>
                                                                Mesaj: <?php echo $mesajcek['mesaj']; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col2">
                                                        <div class="date"><?php echo $mesajcek['tarih']; ?></div>
                                                    </div>
                                                </li>

<?php } ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                         <h1 class="page-title"> Sakarya Üniversitesi
                            <br><small>Endüstri Mühendsiliği Kulübü & 2017</small>
                        </h1>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <!-- BEGIN DASHBOARD STATS 1-->
                 
                        <!-- END DASHBOARD STATS 1-->
                      
                    </div>
                </div>
                <!-- END QUICK SIDEBAR -->

            <!-- END CONTAINER -->
         <?php 

         include 'adminfooter.php'

          ?>