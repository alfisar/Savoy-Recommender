<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/comment.css">

        <title>IKAE -  <?php echo $barang->nama?> | Comments</title>
        <?php    // by nim = 1301164318 / max 
    $uname = $this->session->userdata('username');
        ?>
        <!--Comment Section-->
        <?php $atribut = array(
    'class' => 'login-form',
    'role' => 'form'
);?>
        <?php
        echo form_open("Rating_C/index",$atribut);
        ?>
        <div class="container-fluid comment">
            <div class="row">
                <div class="col-sm-12 col-md-6 offset-md-2">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo site_url('Desc_C/index')?>?idproduk=<?php echo $barang->idbarang?>"><?php echo $barang->nama?></a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a>Comment</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-2 header-comment" >
                    <img src="<?php echo base_url()?>/assets/img/product/<?php echo $barang->nama?>.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-sm-12 col-md-6 header-comment">
                    <div class="h-c-cap">
                        <h1><?php echo $barang->nama?></h1>
                        <h4>$<?php echo $barang->harga?>.00</h4>
                        <div class="form-group">
                            <input type="hidden" id="custId" name="custId" value="3487">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-8 text-center mt-5">
                    <form action="">
                        <div class="form-group">
                        <div class="rate">
                            <input type="radio" id="star5" name="rate" value="5" />
                            <label for="star5" title="text">5 stars</label>
                            <input type="radio" id="star4" name="rate" value="4" />
                            <label for="star4" title="text">4 stars</label>
                            <input type="radio" id="star3" name="rate" value="3" />
                            <label for="star3" title="text">3 stars</label>
                            <input type="radio" id="star2" name="rate" value="2" />
                            <label for="star2" title="text">2 stars</label>
                            <input type="radio" id="star1" name="rate" value="1" />
                            <label for="star1" title="text">1 star</label>
                        </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn form-control btn-cmt mb-3" >Submit</button>
                        </div>
                    </form>
                    <hr>
                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="col-sm-12 col-md-8">
                    <?php if($comment == null){ ?>
                        <h2 class="text-center lead mb-5 mt-5"></h2>
                    <?php
                    }
                    else {
                        foreach ($comment as $cmt) {
                        $userme = $cmt->user;
                    ?>
                    <div class="otr-cmt">
                        <h4 class="ml-4 mt-4"><?php echo $cmt->user; ?> <?php if ($cmt->user == $uname ){ ?>
                            <a href="<?php echo site_url('Comment_C/del_cmt')?>?comment1=<?php echo $cmt->comment?>">
                                <span class="oi oi-x float-right mr-4"></span>
                            </a>
                            <?php }?></h4>
                        <p class="ml-4 mr-4"><?php echo $cmt->comment; ?></p>
                    </div>
                    <?php 
                        }
                    }
                    ?>
                </div>
            </div>
        </div>

        </body>
</html>
