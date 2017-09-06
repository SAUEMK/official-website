<?php 

ob_start();
session_start();
date_default_timezone_set('Europe/Istanbul');
error_reporting(E_ALL ^ E_NOTICE); 

include 'admin/baglantii/baglan.php';

$ayarsor=$db->prepare("SELECT * from ayar where ayar_id=?");
$ayarsor->execute(array(0));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="tr-TR">

<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $ayarcek['ayar_title']?></title>
    
    <meta name="description" content="<?php echo $ayarcek['ayar_aciklama'];?>">
    <meta name="keywords" content="<?php echo $ayarcek['ayar_anahtarkelime'];?>">
    <meta name="author" content="<?php echo $ayarcek['ayar_yazar'];?>">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,400i|Poppins:300,400,500,600" rel="stylesheet">
	<link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">																								 
    <!-- Favicon -->
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="vendor/reset.css">
    <link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/ion-icons/ionicons.min.css">
    <link rel="stylesheet" href="vendor/owl-slider/owl.carousel.css">
    <link rel="stylesheet" href="vendor/slideshow/slideshow.css">
    <link rel="stylesheet" href="vendor/lightbox/lity.min.css">




    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>

<!-- font awesome -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<!-- bootstrap -->
<link rel="stylesheet" href="admin/assets/cyrusassets/bootstrap/css/bootstrap.min.css" />

<!-- animate.css -->
<link rel="stylesheet" href="admin/assets/cyrusassets/animate/animate.css" />
<link rel="stylesheet" href="admin/assets/cyrusassets/animate/set.css" />

<!-- gallery -->
<link rel="stylesheet" href="admin/assets/cyrusassets/gallery/blueimp-gallery.min.css">




    <!-- Theme CSS -->
    <link id="theme" rel="stylesheet" href="css/theme01.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">																																																					  
    <script src="vendor/modernizr.js"></script>
</head>

<body>
    <!-- Scroll up -->
    <div class="scrollup">
        <i class="ion-ios-arrow-up"></i>
    </div>

    <!-- Main Container -->
    <div class="web-in">

        <!-- Navigation -->
        <nav id="light" class="regular">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="logo-holder n_">
                            <div>
                                <a href="index.php">
                                    <img class="logo" src="<?php echo $ayarcek['ayar_logo'] ?>" alt="">
                                    <img class="logo alt" src="<?php echo $ayarcek['ayar_logo'] ?>" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="nav-content n_">
                            <ul class="light-dropdown">
                                <li><a href="index.php">ANA SAYFA</a>
                                </li>
                                <li><a href="events.php">ETKİNLİKLERİMİZ</a>
                                </li>
                                <li><a href="blog.php">EMK BÜLTEN</a>
                                </li>
                                <li><a href="gallery.php">GALERİ</a>
                                </li>
                                <li><a href="about-page.php">HAKKIMIZDA</a>
                                </li>
                                <li><a href="contact-us.php">İLETİŞİM</a>
                                </li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </nav>