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
                                    <span>Konular</span>
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
                                            <span class="caption-subject bold uppercase">Konular Tablosu</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="table-toolbar">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="btn-group">
                                                        <a href="adminkonuekle.php"><button name="takimimizekle" class="btn sbold green">Yeni Konu Ekle
                                                            <i class="fa fa-plus"></i>
                                                        </button></a>
                                                    </div>
                                                    <?php 
                                                        if ($_GET['durumekle'] == 'ok') {
                                                           
                                                            echo "Konu başarıyla eklendi!";    
                                                        
                                                        }
                                                        else if($_GET['durumsil'] == 'ok'){

                                                            echo "Konu başarıyla silindi!";  

                                                        }
                                                         else if($_GET['fotoekle'] == 'no'){

                                                            echo "Bir kapak fotoğrafı seçmeden konu ekleyemezsin!";  

                                                        }
                                                    ?>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="search-page search-content-1">
                         <div class="search-bar  ">
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
                            </div>
                          
                                                </div>
                                            </div>
                                        </div>
                                        <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                            <thead>
                                                <tr>
                                                    <th> Konu Hit </th>                                                    
                                                    <th> Konu Tarih </th>
                                                    <th> Konu Kategori </th>
                                                    <th> Konu Başlık </th>
                                                    <th> Konu Durum </th>
                                                    <th> Konu Yazan Adı </th>
                                                    <th>  </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php


                                   
              $konusor=$db->prepare("select * from blogpost order by post_tarih DESC");
              $konusor->execute();

                                        while($konucek=$konusor->fetch(PDO::FETCH_ASSOC)){  ?>
                                                <tr class="odd gradeX">
                                                    <td class="center" style="text-align: center;"> <?php echo $konucek['post_hit'] ?> </td>
                                                    <td class="center" style="text-align: center;"> <?php echo $konucek['post_tarih'] ?> </td>
                                                    <td class="center" style="text-align: center;"> <?php echo $konucek['kat_id'] ?> </td>
                                                    <td class="center" style="text-align: center;"> <?php echo $konucek['post_baslik'] ?> </td>
                                                    <?php 
                                                        if($konucek['post_onay'] == 1){
                                                            ?>
                                                            <td class="center"> 
                                                                <span class="label label-sm label-success">Onaylanmış Konu</span>
                                                            </td>
                                                        <?php
                                                        }else{
                                                            ?>
                                                            <td class="center">
                                                                <span class="label label-sm label-danger">Onaylanmamış Konu </span>
                                                            </td>
                                                    <?php } ?>
                                                    <td class="center" style="text-align: center;"> <?php echo $konucek['yazan_ad'] ?> </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Ne Olacak
                                                                <i class="fa fa-angle-down"></i>
                                                            </button>
                                                            <ul class="dropdown-menu pull-left" role="menu">
                                                               <li>
                                                                    <a href="adminkonuduzenle.php?post_id=<?php echo $konucek['post_id'] ?>">
                                                                      <i class="icon-docs"></i>Düzenle </a>
                                                                </li>
                                                                <li>
                                                                    <a onclick="return confirm('Bu işlemi yapmak istediğinizden emin misiniz? Bu işlem yanlış bir şekilde yapılırsa önemli sonuçlar doğurabilir kesinlikle emin olmadan onaylamayınız.')" href="../baglantii/blogislem.php?postsil=ok&post_id=<?php echo $konucek['post_id'] ?>">
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

          