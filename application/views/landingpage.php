
<!DOCTYPE html>
<html>
    <head>
        <title>IKAE - Buy everything you need in premium quality </title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
              crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo base_url('/assets/css/construct.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('/assets/open-iconic/font/css/open-iconic-bootstrap.min.css');?>">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row jumbotron jumbotron-fluid jumbo-header">
                <div class="col-sm-12">
                    <div class="header-caption">
                        <h1>IKAE</h1>
                        <p>Buy everything you need in premium quality</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <?php 
            //Melakukan perulangan untuk membuat card
            $i = 1;
            foreach ($barang as $brg) {
                if ($i % 4 == 1) { // if untuk membuat row apa saat card sudah 4                                 
            ?>
            <div class="row row-space">
                <?php	}?>
                <div class="col-6 col-sm-6 col-md-3 mb-4">
                    <div class="card">
                        <div class="img-view-bg">
                            <a href="<?php echo site_url('Desc_C/index')?>?idproduk=<?php echo $brg->idbarang?>">
                                <img class="card-img-top img-view" src="<?php echo base_url()?>/assets/img/product/<?php echo $brg->nama?>.jpg">
                            </a>
                            <div class="img-mid-btn">
                                <a href="<?php echo site_url('Desc_C/index')?>?idproduk=<?php echo $brg->idbarang?>"><h1><span class="oi oi-magnifying-glass"></span></h1></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h4 id="card-title"><?php echo $brg->nama?> <?php echo " "." ";?></h4>
                            <p class="card-text">
                                <a href="<?php echo site_url('Desc_C/index')?>?idproduk=<?php echo $brg->idbarang?>">   <?php echo "$".$brg->harga.".00"?></a>
                            </p>
                        </div>
                    </div>
                </div>
                <?php
                    if (($i % 4 == 0) && ($i != 0)) { // penutup div untuk row
                ?>
            </div>
            <?php } $i++; ?>
            <?php  } ?>

            <div class="row row-space">
                <div class="col-sm-12">
                    <div class="bottom-bar">
                        <p class="text-center">All products are loaded.</p>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/wishlist.js"></script>
