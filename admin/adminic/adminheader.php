<?php

ob_start();
session_start();
date_default_timezone_set('Europe/Istanbul');
error_reporting(E_ALL ^ E_NOTICE); 

include '../baglantii/baglan.php';


if(isset($_SESSION['kullanici'])){
$kullanicisor=$db->prepare("SELECT * from sauemk_yonetim where email=:mail");
$kullanicisor->execute(array(
'mail'=>$_SESSION['kullanici']
  ));
$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);

$yetki=$kullanicicek['statu'];

if ($yetki==0){


$ayarsor=$db->prepare("SELECT * from ayar where ayar_id=?");
$ayarsor->execute(array(0));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>


<html lang="tr">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>SAÜEMK | Yönetim Paneli</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />





        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>

<!-- font awesome -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<!-- bootstrap -->
<link rel="stylesheet" href="../assets/cyrusassets/bootstrap/css/bootstrap.min.css" />

<!-- animate.css -->
<link rel="stylesheet" href="../assets/cyrusassets/animate/animate.css" />
<link rel="stylesheet" href="../assets/cyrusassets/animate/set.css" />

<!-- gallery -->
<link rel="stylesheet" href="../assets/cyrusassets/gallery/blueimp-gallery.min.css">




<link rel="stylesheet" href="../assets/cyrusassets/style.css">
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="../assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" />
         <link href="../assets/global/plugins/cubeportfolio/css/cubeportfolio.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="../assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="../assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />

        <link href="../assets/pages/css/portfolio.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="../assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="../assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
         <link rel="shortcut icon" href="../../img/logos/emk-logo-min.png"  /> </head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
        <div class="page-wrapper">
            <!-- BEGIN HEADER -->
            <div class="page-header navbar navbar-fixed-top">
                <!-- BEGIN HEADER INNER -->
                <div class="page-header-inner ">
                    <!-- BEGIN LOGO -->
                    <div class="page-logo">
                        <a href="adminindex.php">
                            <img style="width:160px; height: 50px; margin-top: 0px; margin-bottom: 0px;" src="../assets/layouts/layout/img/logo.png" alt="logo" class="logo-default" /> </a>
                        <div class="menu-toggler sidebar-toggler">
                            <span></span>
                        </div>
                    </div>
                    <!-- END LOGO -->
                    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                    <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                        <span></span>
                    </a>
                    <!-- END RESPONSIVE MENU TOGGLER -->

                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                                              
                        <!-- BEGIN USER LOGIN DROPDOWN -->
                            
                            <li class="dropdown dropdown-user">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <img alt="" class="img-circle" src="../../<?php echo $kullanicicek['foto']; ?>" />
                                    <span class="username username-hide-on-mobile"><?php echo $kullanicicek['isim']; ?></span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li>
                                        <a href="adminprofile.php?id=<?php echo $kullanicicek['id']; ?>">
                                            <i class="icon-user"></i> Profil </a>
                                    </li>
                                    <li>
                                        <a href="logout.php">
                                            <i class="icon-key"></i> Çıkış </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- END USER LOGIN DROPDOWN -->
                       
                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
                <!-- END HEADER INNER -->
            </div>
            <!-- END HEADER -->
            <!-- BEGIN HEADER & CONTENT DIVIDER -->
            <div class="clearfix"> </div>
            <!-- END HEADER & CONTENT DIVIDER -->
            <!-- BEGIN CONTAINER -->
            <div class="page-container">
                <!-- BEGIN SIDEBAR -->
                <div class="page-sidebar-wrapper">
                    <!-- BEGIN SIDEBAR -->
        
                    <div class="page-sidebar navbar-collapse collapse">
                        <!-- BEGIN SIDEBAR MENU -->
                       
                        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                          
                            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                            <li class="sidebar-toggler-wrapper hide">
                                <div class="sidebar-toggler">
                                    <span></span>
                                </div>
                            </li>
                            <!-- END SIDEBAR TOGGLER BUTTON -->
                            
                            <li class="sidebar-search-wrapper">
                                <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                               
                                <form class="sidebar-search  " action="page_general_search_3.html" method="POST">
                                    <a href="javascript:;" class="remove">
                                        <i class="icon-close"></i>
                                    </a>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search...">
                                        <span class="input-group-btn">
                                            <a href="javascript:;" class="btn submit">
                                                <i class="icon-magnifier"></i>
                                            </a>
                                        </span>
                                    </div>
                                </form>
                                <!-- END RESPONSIVE QUICK SEARCH FORM -->
                            </li>
                           
                             <li class="nav-item ">
                                <a href="adminindex.php" class="nav-link nav-toggle">
                                    <i class="icon-home"></i>
                                    <span class="title">Anasayfa</span>
                                </a>
                            </li>
                           
                         <li class="nav-item ">
                                <a href="adminsponsor.php" class="nav-link nav-toggle">
                                    <i class="icon-home"></i>
                                    <span class="title">Sponsorlar</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="yoneticihesap.php" class="nav-link nav-toggle">
                                    <i class="icon-home"></i>
                                    <span class="title">Yönetici Panel Hesapları</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="admingaleri.php" class="nav-link nav-toggle">
                                    <i class="icon-home"></i>
                                    <span class="title">Galeri</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="adminetkinlik.php" class="nav-link nav-toggle">
                                    <i class="icon-home"></i>
                                    <span class="title">Etkinlikler</span>
                                </a>
                            </li>
                            <li class="nav-item start ">
                                <a href="#" class="nav-link nav-toggle">
                                    <i class="fa fa-cog"></i>
                                    <span class="title">EMK Bülten</span>
                                    <span class="selected"></span>
                                    <span class="arrow open"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item start active ">
                                        <a href="adminkategori.php" class="nav-link ">
                                            <i class="icon-bar-chart"></i>
                                            <span class="title">Kategoriler</span>
                                            <span class="selected"></span>
                                        </a>
                                    </li>
                                    <li class="nav-item start active ">
                                        <a href="adminkonu.php" class="nav-link ">
                                            <i class="icon-bar-chart"></i>
                                            <span class="title">Konular</span>
                                            <span class="selected"></span>
                                        </a>
                                    </li>
                                     <li class="nav-item start active ">
                                        <a href="adminyorum.php" class="nav-link ">
                                            <i class="icon-bar-chart"></i>
                                            <span class="title">Yorumlar</span>
                                            <span class="selected"></span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item start ">
                                <a href="#" class="nav-link nav-toggle">
                                    <i class="fa fa-cog"></i>
                                    <span class="title">Anasayfa Ayarları</span>
                                    <span class="selected"></span>
                                    <span class="arrow open"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item start active ">
                                        <a href="adminanasayfakarsila.php" class="nav-link ">
                                            <i class="icon-bar-chart"></i>
                                            <span class="title">Anasayfa Karşılama Ekranı</span>
                                            <span class="selected"></span>
                                        </a>
                                    </li>
                                    <li class="nav-item start active ">
                                        <a href="adminparallax.php" class="nav-link ">
                                            <i class="icon-bar-chart"></i>
                                            <span class="title">Parallaxlar</span>
                                            <span class="selected"></span>
                                        </a>
                                    </li>
                                     <li class="nav-item start active ">
                                        <a href="adminanasayfayorum.php" class="nav-link ">
                                            <i class="icon-bar-chart"></i>
                                            <span class="title">Anasayfa Yorumları</span>
                                            <span class="selected"></span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                             <li class="nav-item start ">
                                <a href="#" class="nav-link nav-toggle">
                                    <i class="fa fa-cog"></i>
                                    <span class="title">Hakkımızda Ayarları</span>
                                    <span class="selected"></span>
                                    <span class="arrow open"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item start active ">
                                        <a href="admintakimimiz.php" class="nav-link ">
                                            <i class="icon-bar-chart"></i>
                                            <span class="title">Takımımız</span>
                                            <span class="selected"></span>
                                        </a>
                                    </li>
                                    <li class="nav-item start active ">
                                        <a href="adminhakkimizda.php" class="nav-link ">
                                            <i class="icon-bar-chart"></i>
                                            <span class="title">Hakkımızda</span>
                                            <span class="selected"></span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                             <li class="nav-item start ">
                                <a href="#" class="nav-link nav-toggle">
                                    <i class="fa fa-cog"></i>
                                    <span class="title">Site Ayarları</span>
                                    <span class="selected"></span>
                                    <span class="arrow open"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item start active ">
                                        <a href="admingenelayar.php" class="nav-link ">
                                            <i class="icon-bar-chart"></i>
                                            <span class="title">Genel Ayarlar</span>
                                            <span class="selected"></span>
                                        </a>
                                    </li>
                                    <li class="nav-item start active ">
                                        <a href="adminsosyalayar.php" class="nav-link ">
                                            <i class="icon-bar-chart"></i>
                                            <span class="title">Sosyal Medya</span>
                                            <span class="selected"></span>
                                        </a>
                                    </li>
                                    <li class="nav-item start active ">
                                        <a href="adminmailayar.php" class="nav-link ">
                                            <i class="icon-bar-chart"></i>
                                            <span class="title">Mail Ayarları</span>
                                            <span class="selected"></span>
                                        </a>
                                    </li>
                                     <li class="nav-item start active ">
                                        <a href="adminayaraciklama.php" class="nav-link ">
                                            <i class="icon-bar-chart"></i>
                                            <span class="title">Ayar Açıklama Ayarları</span>
                                            <span class="selected"></span>
                                        </a>
                                    </li>
                                    <li class="nav-item start active ">
                                        <a href="adminfooterayar.php" class="nav-link ">
                                            <i class="icon-bar-chart"></i>
                                            <span class="title">Footer Ayarları</span>
                                            <span class="selected"></span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            
                           <!-- Gerekirse başlık olarak kullan
                           <li class="heading">
                                <h3 class="uppercase">Features</h3>
                            </li>
                             -->

                        </ul>
                        <!-- END SIDEBAR MENU -->
                        <!-- END SIDEBAR MENU -->
                    </div>
                    <!-- END SIDEBAR -->
                </div>
                <!-- END SIDEBAR -->
 <?php } else {
                   
             header("location:login.php");
     }
                    
    }else{
         header("location:login.php");
    }
       ?> 
