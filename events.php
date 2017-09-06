<?php
include 'header.php';
 $yaklasanetkinliksor=$db->prepare("select * from yaklasanetkinlikler order by sira");
    $yaklasanetkinliksor->execute();
?>





        <?php 
            $yakinetkinliksor=$db->prepare("SELECT * from yakinetkinlik where id=?");
            $yakinetkinliksor->execute(array(0));
            $yakinetkinlikcek=$yakinetkinliksor->fetch(PDO::FETCH_ASSOC);
        ?>

   
        <section class="halfarea dark1">
            <div class="col-md-4 col-sm-2 imagearea">
                <img class="imagearea-img" src="<?php echo $yakinetkinlikcek['afis']?>" alt=""><!--Resim kısmına etkinliğin afişi gelecek ama boyutlarının özel ayarlanması lazım-->
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-9 col-md-offset-5 col-sm-offset-3">
                        <div class="row">
                            <div class="col-sm-12">
                                <h2><?php echo $yakinetkinlikcek['adi']?></h2>
                                <h4><?php echo $yakinetkinlikcek['slogan']?></h4>
                            </div>
                        </div>
                         <div class="row m-space">
                            <div class="col-sm-6 service">
                                <i class="<?php echo $yakinetkinlikcek['detay1ikon']?>"></i>
                                <h5><?php echo $yakinetkinlikcek['detay1baslik']?></h5>
                               <?php echo $yakinetkinlikcek['detay1']?>
                            </div>
                            <div class="col-sm-6 service">
                                <i class="<?php echo $yakinetkinlikcek['detay2ikon']?>"></i>
                                <h5><?php echo $yakinetkinlikcek['detay2baslik']?></h5>
                                <?php echo $yakinetkinlikcek['detay2']?>
                            </div>
                            <div class="col-sm-6 service">
                                <i class="<?php echo $yakinetkinlikcek['detay3ikon']?>"></i>
                                <h5><?php echo $yakinetkinlikcek['detay3baslik']?></h5>
                               <?php echo $yakinetkinlikcek['detay3']?>
                            </div>
                            <div class="col-sm-6 service">
                                <i class="<?php echo $yakinetkinlikcek['detay4ikon']?>"></i>
                                <h5><?php echo $yakinetkinlikcek['detay4baslik']?></h5>
                                <?php echo $yakinetkinlikcek['detay4']?>
                            </div>
                    </div>
                </div>
            </div>
            </div>
        </section>




<?php
    $var='col-md-6 col-sm-3 imagearea';
    $var2='col-md-6 col-sm-3 imagearea col-md-offset-6 col-sm-offset-9 ';   
    $var3='col-md-5 col-sm-8';
    $var4='col-md-5 col-sm-8 col-md-offset-7 col-sm-offset-4';                              
   
    while($yaklasanetkinlikcek=$yaklasanetkinliksor->fetch(PDO::FETCH_ASSOC)){
?>
        <section class="halfarea center grey">
            <div class="<?php if ($yaklasanetkinlikcek['sira']%2==0) {
                    echo $var;
                }else{
                    echo $var2;
                } ?>">      
                <img class="imagearea-img" src="<?php echo $yaklasanetkinlikcek['afis']; ?>" alt="">
            </div>
        <div class="container">
            <div class="row">
                <div class="<?php if ($yaklasanetkinlikcek['sira']%2!=0) {
                        echo $var3;
                    }else{
                        echo $var4;
                    } ?>">         
                    <h2><?php echo $yaklasanetkinlikcek['adi']; ?></h2>
                    <?php echo $yaklasanetkinlikcek['detay']; ?>
                    <?php if ($yaklasanetkinlikcek['formonay']==1) { ?>
                       <a href="register-form.php?id=<?php echo $yaklasanetkinlikcek['id']; ?>" class="btn"><span>Katılmak istiyorum</span></a>
                   <?php } ?>
                   
                </div>
            </div>
        </div>
        </section>
<?php 
    }
?>




        <!-- Accordion -->
        <section class="dark1">
            <div class="container">
                <div class="row m-space">
                    <div class="col col-md-6 col-md-offset-3 title">
                        <h2>Tüm Etkinliklerimiz</h2>
                        <h4>Bugüne gelene kadar neler yapmışız neler</h4>
                    </div>



  <?php


                                   
              $etkinliksor=$db->prepare("select id,yil from tumetkinlikler where yil NOT IN ( 0 ) order by id");
              $etkinliksor->execute();



                                        while($etkinlikcek=$etkinliksor->fetch(PDO::FETCH_ASSOC)){ 

$id=$etkinlikcek['id'];

                                       $altetkinliksor=$db->prepare("select * from tumetkinlikler where yilustid=:id");
              $altetkinliksor->execute(array(
                'id'=>$id
                ));
?>
                    <div class="col-md-6">
                        <div class="accordion">
                            <h5><?php echo $etkinlikcek['yil'] ?></h5>
                           <?php  while($altetkinlikcek=$altetkinliksor->fetch(PDO::FETCH_ASSOC)){  ?>
                            <li><?php echo $altetkinlikcek['ad'] ?>
                                <ul>
                                    <p><?php echo $altetkinlikcek['aciklama'] ?></p>
                                </ul>
                            </li>
                            <?php } ?>    
                        </div>
                    </div>
                    
<?php 
}?>





                    </div>
                </div>
        </section>

<?php
include 'footer.php';
?>