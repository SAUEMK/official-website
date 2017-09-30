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
                                    <span>Takımımız</span>
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
                                            <span class="caption-subject bold uppercase">Takım Tablosu</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="table-toolbar">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="btn-group">
                                                        <a href="admintakimimizekle.php"><button name="takimimizekle" class="btn sbold green">Yeni Yönetici Ekle
                                                            <i class="fa fa-plus"></i>
                                                        </button></a>
                                                    </div>
                                                    <?php 
                                                        if ($_GET['durumekle'] == 'ok') {
                                                           
                                                            echo "Yeni yönetici başarıyla eklendi!";    
                                                        
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
                                                    <th> Yönetici Komisyon </th>
                                                    <th> Yönetici Adı - Soyadı </th>
                                                    <th> Yönetici Mail </th>                                                    
                                                    <th> Yönetici Telefon </th>
                                                    <th> Yönetici Durum </th>
                                                    <th>  </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php


                                   
              $yoneticisor=$db->prepare("select * from hakkimizdabir order by yonetici_sira");
              $yoneticisor->execute();

                                        while($yoneticicek=$yoneticisor->fetch(PDO::FETCH_ASSOC)){  ?>
                                                <tr class="odd gradeX">
                                                   
                                                    <td class="center" style="text-align: center;"> <?php echo $yoneticicek['yonetici_sira'] ?> </td>

                                                    <td><?php echo $yoneticicek['yonetici_komisyon'] ?></td>
                                                    <td><?php echo $yoneticicek['yonetici_ad'] ?>&nbsp;<?php echo $yoneticicek['yonetici_soyad'] ?></td>
                                                    <td>
                                                        <a href="mailto:<?php echo $yoneticicek['yonetici_mail'] ?>"><?php echo $yoneticicek['yonetici_mail'] ?></a>
                                                    </td>
                                                  
                                                    <td><?php echo $yoneticicek['yonetici_telefon'] ?></td>
                                                    <?php 
                                                        if($yoneticicek['yonetici_durum'] == 1){
                                                            ?><td class="center"> <span class="label label-sm label-success">Onaylanmış Yönetici</span> </td><?php
                                                        }else{?>
                                                            <td class="center"> <span class="label label-sm label-danger">Onaylanmamış Yönetici </span> </td>
                                                        <?php } ?>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Ne Olacak
                                                                <i class="fa fa-angle-down"></i>
                                                            </button>
                                                            <ul class="dropdown-menu pull-left" role="menu">
                                                                <li>
                                                                    <a href="admintakimduzenle.php?yonetici_id=<?php echo $yoneticicek['yonetici_id'] ?>">
                                                                      <i class="icon-docs"></i>Düzenle </a>
                                                                </li>
                                                                <li>
                                                                    <a onclick="return confirm('Bu işlemi yapmak istediğinizden emin misiniz? Bu işlem yanlış bir şekilde yapılırsa önemli sonuçlar doğurabilir kesinlikle emin olmadan onaylamayınız.')" href="../baglantii/islem.php?yoneticisil=ok&yonetici_id=<?php echo $yoneticicek['yonetici_id'] ?>">
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

            <!-- END CONTAINER -->
         <?php 

         include 'adminfooter.php'
         ?>

          