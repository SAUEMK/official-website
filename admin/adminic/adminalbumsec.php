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
                                    <span>Albümler</span>
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
                                            <span class="caption-subject bold uppercase">Albüm Tablosu</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="table-toolbar">
                                            <div class="row">
                                                <div class="col-md-12">
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
                                                    <th> Sıra </th>     
                                                    <th> AlbümKapak Fotoğrafı </th>      
                                                    <th> Albüm Adı </th>
                                                    <th> Albüm Detay </th>                                                 
                                                    <th> Albüm Durum </th>
                                                    <th>  </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php


                                   
              $albumsor=$db->prepare("select * from galeri order by album_sira");
              $albumsor->execute();

                                        while($albumcek=$albumsor->fetch(PDO::FETCH_ASSOC)){  ?>
                                                
                                                <tr class="odd gradeX">
                                                  
                                                    <td class="center" style="text-align: center;"> <?php echo $albumcek['album_sira'] ?> </td>
                                                    <td><img style="width: 250px; height: 100px;" src="../../<?php echo $albumcek['album_kapakfoto'] ?>" ></td>
                                                    <td><?php echo $albumcek['album_adi'] ?></td>
                                                    
                                                    <td>
                                                        <?php echo $albumcek['album_detay'] ?>
                                                    </td>
                                                  
                                                    
                                                    <?php 
                                                        if($albumcek['album_durum'] == 1){
                                                            ?><td class="center"> <span class="label label-sm label-success">Onaylanmış album</span> </td><?php
                                                        }else{?>
                                                            <td class="center"> <span class="label label-sm label-danger">Onaylanmamış album</span> </td>
                                                        <?php } ?>
                                                    <td>
                                                        <div class="btn-group">
                                                           <a href="adminfotoekle.php?album_id=<?php echo $albumcek['album_id']; ?>"><button class="btn btn-xs green" type="submit">Albümü Seç</a> 
                                                            </button>
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

          