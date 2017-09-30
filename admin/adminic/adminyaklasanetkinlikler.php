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
                                    <span>Yaklaşan Etkinlikler</span>
                                </li>
                            </ul>
                         
                        </div>
                        <!-- END PAGE BAR -->

                 
                        <div class="row">
                            <div class="col-md-12">
                                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption font-dark">
                                            <i class="icon-settings font-dark"></i>
                                            <span class="caption-subject bold uppercase">Yaklaşan Etkinlikler Tablosu</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="table-toolbar">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="btn-group">
                                                        <a href="adminyaklasanetkinlikekle.php"><button name="anasayfayorumekle" class="btn sbold green">Yeni Etkinlik Ekle
                                                            <i class="fa fa-plus"></i>
                                                        </button></a>
                                                    </div>
                                                    <?php 
                                                        if ($_GET['durumekle'] == 'ok') {
                                                           
                                                            echo "Yeni yorum başarıyla eklendi!";    
                                                        
                                                        }
                                                        else if($_GET['durumsil'] == 'ok'){

                                                            echo "Kayıt başarıyla silindi!";  

                                                        }
                                                         else if($_GET['durumguncel'] == 'ok'){

                                                            echo "Kayıt başarıyla güncellendi!";  

                                                        }
                                                    ?>
                                                </div>
                                            <div class="col-md-6">
                                                <div class="search-page search-content-1">
                                                   <div class="search-bar  ">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control" placeholder="Arayacağın yıl...">
                                                                    <span class="input-group-btn">
                                                                        <button class="btn blue uppercase bold" type="button">Ara</button>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                            <thead>
                                                <tr>
                                                    <th> Etkinlik Düzenleyen Komisyon </th>                                                
                                                    <th> Tarih </th>
                                                    <th> Etkinlik Afişi </th>     
                                                    <th> Etkinlik Adı </th>      
                                                    <th> Etkinlik Detayı </th>
                                                    <th> Kayıt Formu </th>
                                                    <th> Kayıt Formu Onay </th>
                                                    <th> Etkinlik Durum </th>
                                                    <th>  </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php


                                   
              $yaklasanetkinliksor=$db->prepare("select * from yaklasanetkinlikler order by tarih");
              $yaklasanetkinliksor->execute();

                                        while($yaklasanetkinlikcek=$yaklasanetkinliksor->fetch(PDO::FETCH_ASSOC)){  ?>
                                                <tr class="odd gradeX">
                                                    <td><?php echo $yaklasanetkinlikcek['tur']; ?></td>
                                                    <td><?php echo $yaklasanetkinlikcek['tarih']; ?></td>
                                                    <td><img style="width: 100px; height: 300px;" src="../../<?php echo $yaklasanetkinlikcek['afis'] ?>"></td> 
                                                    <td><?php echo $yaklasanetkinlikcek['adi'] ?></td>
                                                    <td><?php echo $yaklasanetkinlikcek['detay'] ?></td> 
                                                    <td><?php echo $yaklasanetkinlikcek['kayitform'] ?></td>
                                                    <td><?php echo $yaklasanetkinlikcek['formonay'] ?></td>
                                                    <td><?php echo $yaklasanetkinlikcek['onay'] ?></td>
                                                    <td>
                                                      <div class="btn-group">
                                                            <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Ne Olacak
                                                                <i class="fa fa-angle-down"></i>
                                                            </button>
                                                            <ul class="dropdown-menu pull-right" role="menu">
                                                                <li>
                                                                    <a href="adminyaklasanetkinlikduzenle.php?id=<?php echo $yaklasanetkinlikcek['id'] ?>">
                                                                      <i class="icon-docs"></i>Düzenle </a>
                                                                </li>
                                                                <li>
                                                                    <a onclick="return confirm('Bu işlemi yapmak istediğinizden emin misiniz? Bu işlem yanlış bir şekilde yapılırsa önemli sonuçlar doğurabilir kesinlikle emin olmadan onaylamayınız.')" href="../baglantii/islem.php?yaklasanetkinliksil=ok&id=<?php echo $yaklasanetkinlikcek['id'] ?>">
                                                                      <i class="icon-tag"></i>Kaldır</a>
                                                                </li>
                                                            
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>

                                        <?php } ?>
                                            </tbody>
                                        </table>
                                         </div>
                                </div>
                                <!-- END EXAMPLE TABLE PORTLET-->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END QUICK SIDEBAR -->
            </div>
            <!-- END CONTAINER -->
         <?php 

         include 'adminfooter.php'
         ?>

          