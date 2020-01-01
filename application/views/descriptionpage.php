
<!DOCTYPE html>
<html>
    <head>
        <title>Savoy - <?php echo $barang->nama?> </title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
              crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/construct.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/desc.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/open-iconic/font/css/open-iconic-bootstrap.min.css">

    </head>

    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-xs-12 col-sm-12 col-md-6 text-center product-showcase-l">
                    <img class="img-fluid" id="zoomimg" src="<?php echo base_url()?>/assets/img/product/<?php echo $barang->nama?>.jpg" data-zoom-image="<?php echo base_url()?>/assets/img/product/<?php echo $barang->nama?>.jpg" >
                </div>
                <div class="col-12 col-xs-12 col-sm-12 col-md-6 product-showcase-r">
                    <div class="row justify-content-center product-detail">
                        <div class="col-md-8">
                            <h2><?php echo $barang->nama?></h2>
                            <h5>$<?php echo $barang->harga?>.00</h5>
                            <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus blanditiis nisi
                                perspiciatis doloribus temporibus, eligendi ex dignissimos deleniti natus nihil illo
                                facere asperiores architecto commodi doloremque aliquam placeat omnis quibusdam?</p>
                                 <h6 class="mt-4">Hover the image to zoom in</h6>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12">
                                        <form action="<?php echo base_url()?>index.php/Billing_C/index/<?php echo $barang->idbarang;?>">
                                            <div class="row">
                                                <div class="col-md-12 p-0">
                                                    <button class="btn form-control">Add to Cart</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 mt-4 mt-sm-4">
                    <h3>Description</h3>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde delectus dicta, eveniet sit nostrum temporibus
                        quam. Eaque cumque quos praesentium inventore voluptatibus architecto, atque, soluta, veniam earum
                        libero dolorum quae Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste accusamus Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis eligendi unde dignissimos quod incidunt molestiae. Atque quis quidem voluptate repudiandae pariatur ullam repellat autem magnam nostrum deserunt, obcaecati dignissimos assumenda!  </p>

                </div>
                <div class="col-12 col-sm-10 mt-2 commentme">
                    <p><a href="<?php echo site_url('Comment_C/index')?>?idproduk=<?php echo $barang->idbarang?>">See Comments</a></p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-12 text-center product-code mt-4 mt-sm-4">
                    <p>Product code : <?php echo $barang->idbarang?> </p>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-4">
                    <h3>Recommended Product</h3>
                </div>
            </div>
            <div class="row mt-4">
                <?php
                    foreach ($ak as $sim){
                ?>
                    <div class="col-6 col-sm-6 col-md-3 mb-4">
                    <!-- First Row -->
                    <div class="card" >
                        <div class="img-view-bg">
                            <a href="<?php echo site_url('Desc_C/index')?>?idproduk=<?php echo $sim->idbarang?>">
                                <img class="card-img-top img-view" src="<?php echo base_url()?>/assets/img/product/<?php echo $sim->nama?>.jpg">
                            </a>
                            <div class="img-mid-btn">
                                <a href="<?php echo site_url('Desc_C/index')?>?idproduk=<?php echo $sim->idbarang?>"><h1><span class="oi oi-magnifying-glass"></span></h1></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h4 id="card-title" style="width= 100%;"><?php echo $sim->nama?> <?php echo " "." ";?></h4>
                            <p class="card-text">
                                <a href="<?php echo site_url('Desc_C/index')?>?idproduk=<?php echo $sim->idbarang?>">   <?php echo "$".$sim->harga.".00"?></a>
                            </p>
                        </div>
                    </div>
                </div>
                <?php
                    }
                ?>
                
                <!-- <div class="col-6 col-sm-6 col-md-3 mb-4">
                    <div class="card" id="productt2">
                        <div class="img-view-bg">
                            <a href="">
                                <img class="card-img-top img-view" src="">
                            </a>
                            <div class="img-mid-btn">
                                <a href=""><h1><span class="oi oi-magnifying-glass"></span></h1></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h4 id="card-title" style="width= 100%;"></h4>
                            <p class="card-text">
                                <a href=""></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-3 mb-4">
                    <div class="card" id="productt3">
                        <div class="img-view-bg">
                            <a href="">
                                <img class="card-img-top img-view" src="">
                            </a>
                            <div class="img-mid-btn">
                                <a href=""><h1><span class="oi oi-magnifying-glass"></span></h1></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h4 id="card-title" style="width= 100%;"></h4>
                            <p class="card-text">
                                <a href=""></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-3 mb-4">
                    <div class="card" id="productt4">
                        <div class="img-view-bg">
                            <a href="">
                                <img class="card-img-top img-view" src="">
                            </a>
                            <div class="img-mid-btn">
                                <a href=""><h1><span class="oi oi-magnifying-glass"></span></h1></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h4 id="card-title" style="width= 100%;"></h4>
                            <p class="card-text">
                                <a href=""></a>
                            </p>
                        </div>
                    </div>
                </div> -->
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
