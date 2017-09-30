<?php 

error_reporting(0);
 /*if ($kullanicicek['statu']==0 && $kullanicicek['durum']==1) { */?>

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
                                    <span>Sponsorlar</span>
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
                                            <span class="caption-subject bold uppercase">Sponsor Tablosu</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="table-toolbar">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="btn-group">
                                                        <a href="adminsponsorekle.php"><button name="sponsorekle" class="btn sbold green">Yeni Sponsor Ekle
                                                            <i class="fa fa-plus"></i>
                                                        </button></a>
                                                    </div>
                                                    <?php 
                                                        if ($_GET['durumekle'] == 'ok') {
                                                           
                                                            echo "Yeni sponsor başarıyla eklendi!";    
                                                        
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
                                                    <th> Sponsor Sıra </th>
                                                    <th> Sponsor Adı </th>
                                                    <th> Sponsor Mail </th>
                                                    <th> Sponsor Logo </th>
                                                    <th> Sponsor Durum </th>
                                                    <th>  </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php


                                   
              $sponsorsor=$db->prepare("select * from sponsor order by sponsor_sira");
              $sponsorsor->execute();

                                        while($sponsorcek=$sponsorsor->fetch(PDO::FETCH_ASSOC)){  ?>
                                                <tr class="odd gradeX">
                                                   
                                                    <td class="center"> <?php echo $sponsorcek['sponsor_sira'] ?> </td>
                                                    <td><?php echo $sponsorcek['sponsor_ad'] ?></td>
                                                    <td>
                                                        <a href="mailto:<?php echo $sponsorcek['sponsor_mail'] ?>"><?php echo $sponsorcek['sponsor_mail'] ?></a>
                                                    </td>
                                                    <td>
                                                        <img width="150" height="50" src="../../<?php echo $sponsorcek['sponsor_logo'] ?>">
                                                    </td><?php 
                                                        if($sponsorcek['sponsor_durum'] == 1){
                                                            ?><td class="center"> <span class="label label-sm label-success">Onaylanmış Sponsor</span> </td><?php
                                                        }else{?>
                                                            <td class="center"> <span class="label label-sm label-danger">Onaylanmamış Sponsor </span> </td>
                                                        <?php } ?>
                                                     
                                                    <td>
                                                        <div class="btn-group">
                                                            <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Ne Olacak
                                                                <i class="fa fa-angle-down"></i>
                                                            </button>
                                                            <ul class="dropdown-menu pull-left" role="menu">
                                                                <li>
                                                                    <a href="adminsponsorduzenle.php?sponsor_id=<?php echo $sponsorcek['sponsor_id'] ?>">
                                                                      <i class="icon-docs"></i>Düzenle </a>
                                                                </li>
                                                                <li>
                                                                    <a onclick="return confirm('Bu işlemi yapmak istediğinizden emin misiniz? Bu işlem yanlış bir şekilde yapılırsa önemli sonuçlar doğurabilir kesinlikle emin olmadan onaylamayınız.')" href="../baglantii/islem.php?sponsorsil=ok&sponsor_id=<?php echo $sponsorcek['sponsor_id'] ?>">
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



<?php/* }else{*/ ?>
        <!--<h1>Bu sayfaya giriş yetkiniz yok.
         <a href="login.php">Eğer yöneticiyseniz.</a> <a href="../../index.php">Yönetici değilseniz.</a></h1>-->
    <?php /*}*/ ?>
