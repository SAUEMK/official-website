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
                                    <span>Yöneticiler</span>
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
                                            <span class="caption-subject bold uppercase">Yönetici Hesapları Tablosu</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="table-toolbar">
                                            <div class="row">
                                              <?php if ($kullanicicek['statu']==0 && $kullanicicek['durum']==1) { ?>
                                                          <div class="col-md-6">
                                                  
                                                    <div class="btn-group">
                                                        <a href="yoneticiekle.php"><button name="yhesapekle" class="btn sbold green">Yeni Yönetici Hesabı Ekle
                                                            <i class="fa fa-plus"></i>
                                                        </button></a>
                                                    </div>
                                                    <?php 
                                                        if ($_GET['durumekle'] == 'ok') {
                                                           
                                                            echo "Yeni hesap başarıyla eklendi!";    
                                                        
                                                        }
                                                        else if($_GET['durumsil'] == 'ok'){

                                                            echo "Hesap başarıyla silindi!";  

                                                        }
                                                         else if($_GET['durumguncel'] == 'ok'){

                                                            echo "Hesap başarıyla güncellendi!";  

                                                        }
                                                    ?>
                                                </div>
                                                    <?php } ?>
                                              
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
                                                    <th> Hesap Adı </th>
                                                    <th> Hesap Mail </th>
                                                    <th> Hesap Durum </th>
                                                    <th> Hesap Statü </th>
                                                    <th> Komisyon </th>
                                                    <th> Özel Yetki </th>
                                                    <th>  </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php

              $hesapsor=$db->prepare("select * from sauemk_yonetim order by id");
              $hesapsor->execute();

                                        while($hesapcek=$hesapsor->fetch(PDO::FETCH_ASSOC)){  ?>
                                                <tr class="odd gradeX">
                                                   
                                                    <td><?php echo $hesapcek['isim']; ?></td>
                                                    <td>
                                                        <a href="mailto:"><?php echo $hesapcek['email']; ?></a>
                                                    </td>
                                                   <?php 
                                                        if($hesapcek['durum'] == 1){
                                                            ?><td class="center"> <span class="label label-sm label-success">Onaylanmış Hesap</span> </td><?php
                                                        }else{?>
                                                            <td class="center"> <span class="label label-sm label-danger">Onaylanmamış Hesap</span> </td>
                                                        <?php } 
                                                        ?>
                                                   <?php 
                                                        if ($hesapcek['statu']==0) {
                                                             ?><td class="center"> <span class="label label-sm label-warning">Tam Yetkili</span> </td><?php
                                                        }
                                                        else if ($hesapcek['statu']==1) {
                                                             ?><td class="center"> <span class="label label-sm label-warning">Tamdan az</span> </td><?php
                                                        }
                                                        else if ($hesapcek['statu']==2) {
                                                             ?><td class="center"> <span class="label label-sm label-warning">?</span> </td><?php
                                                        }
                                                        else if ($hesapcek['statu']==3) {
                                                             ?><td class="center"> <span class="label label-sm label-warning">?</span> </td><?php
                                                        }
                                                      ?> 
                                                      <td>
                                                       <?php echo $hesapcek['komisyon']; ?>
                                                          </td>
                                                     <?php 
                                                        if($hesapcek['ozel_yetki'] == 100){
                                                            ?><td class="center"> <span class="label label-sm label-success">Onaylanmış Hesap</span> </td><?php
                                                        }else{?>
                                                            <td class="center"> <span class="label label-sm label-danger">Onaylanmamış Hesap</span> </td>
                                                        <?php } 
                                                        ?>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Ne Olacak
                                                                <i class="fa fa-angle-down"></i>
                                                            </button>
                                                            <ul class="dropdown-menu pull-left" role="menu">
                                                                <li>
                                                                    <a href="yoneticiduzenle.php?id=<?php echo $hesapcek['id'] ?>">
                                                                      <i class="icon-docs"></i>Düzenle</a>
                                                                </li>
                                                                <li>
                                                                    <a onclick="return confirm('Bu işlemi yapmak istediğinizden emin misiniz? Bu işlem yanlış bir şekilde yapılırsa önemli sonuçlar doğurabilir kesinlikle emin olmadan onaylamayınız.')" href="../baglantii/islem.php?hesapsil=ok&id=<?php echo $hesapcek['id']; ?>">
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



<?php //}else{ ?>
        <!--<h1>Bu sayfaya giriş yetkiniz yok.
         <a href="adminindex.php">Eğer yöneticiyseniz.</a> <a href="../../index.php">Yönetici değilseniz.</a></h1>
        -->
    <?php //} ?>
