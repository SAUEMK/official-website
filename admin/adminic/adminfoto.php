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
                                    <span>Fotoğraflar</span>
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
                                            <span class="caption-subject bold uppercase">Fotoğraflar Tablosu</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="table-toolbar">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="btn-group">
                                                        <a href="adminalbumsec.php"><button  class="btn sbold green">Yeni Fotoğraf Ekle
                                                            <i class="fa fa-plus"></i>
                                                        </button></a>
                                                    </div>
                                                    <?php 
                                                        if ($_GET['durumekle'] == 'ok') {
                                                           
                                                            echo "Yeni fotoğraf başarıyla eklendi!";    
                                                        
                                                        }
                                                        else if($_GET['durumsil'] == 'ok'){

                                                            echo "Kayıt başarıyla silindi!";  

                                                        }
                                                         else if($_GET['fotoyok'] == 'no'){

                                                            echo "Lütfen bir fotoğraf seçip tekrar deneyin!";  

                                                        }
                                                    ?>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="search-page search-content-1">
                           <!-- <div class="search-bar  ">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Arayacağın kelime...">
                                            <span class="input-group-btn">
                                                <button class="btn blue uppercase bold" type="button">Ara</button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                          
                                                </div>
                                            </div>
                                        </div>
                                        <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                            <thead>
                                                <tr>
                                                    <th> Sıra </th>           
                                                    <th> Fotoğraf </th>      
                                                    <th> Albüm Adı </th>                                             
                                                    <th> Fotoğraf Durum </th>
                                                    <th> Fotoğrafı Öne Çıkar </th>
                                                    <th>  </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php


              

              $fotosor=$db->prepare("select * from galeri_foto order by foto_sira");
              $fotosor->execute();
                                        while($fotocek=$fotosor->fetch(PDO::FETCH_ASSOC)){  ?>
                                                <tr class="odd gradeX">
                                                    <td><?php echo $fotocek['foto_sira'] ?></td>
                                                    <td><img style="width: 200px; height: 100px;" src="../../<?php echo $fotocek['foto'] ?>" ></td>
                                                    <td><?php echo $fotocek['album_adi'] ?></td>
                                                   
                                                    
                                                    <?php 
                                                        if($fotocek['foto_durum'] == 1){
                                                            ?><td class="center"> <span class="label label-sm label-success">Onaylanmış Fotoğraf</span> </td><?php
                                                        }else{?>
                                                            <td class="center"> <span class="label label-sm label-danger">Onaylanmamış Fotoğraf</span> </td>
                                                        <?php } ?>
                                                         <?php 
                                                        if($fotocek['foto_onecikar'] == 1){
                                                            ?><td class="center"> <span class="label label-sm label-success">Öne çıkarılmış fotoğraf</span> </td><?php
                                                        }else{?>
                                                            <td class="center"> <span class="label label-sm label-danger">Öne çıkarılmamış fotoğraf</span> </td>
                                                        <?php } ?>
                                                
                                                    <td>
                                                        <div class="btn-group">
                                                            <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Ne Olacak
                                                                <i class="fa fa-angle-down"></i>
                                                            </button>
                                                            <ul class="dropdown-menu pull-left" role="menu">
                                                                <li>
                                                                    <a href="adminfotoduzenle.php?foto_id=<?php echo $fotocek['foto_id'] ?>">
                                                                      <i class="icon-docs"></i>Düzenle</a>
                                                                </li>
                                                                <li>
                                                                     <a onclick="return confirm('Bu işlemi yapmak istediğinizden emin misiniz? Bu işlem yanlış bir şekilde yapılırsa önemli sonuçlar doğurabilir kesinlikle emin olmadan onaylamayınız.')" href="../baglantii/islem.php?fotosil=ok&foto_id=<?php echo $fotocek['foto_id'] ?>">
                                                                      <i class="icon-tag"></i>Kaldır</a>
                                                                </li>
                                                            
                                                            </ul>
                                                        </div>
                                                    </td>
                                                         
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

            <!-- END CONTAINER -->
         <?php 

         include 'adminfooter.php'
         ?>

          