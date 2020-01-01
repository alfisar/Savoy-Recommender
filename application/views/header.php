<html>
    <!--
by nim = 1301164401 / fajar rizqi
-->
    <head>

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
              crossorigin="anonymous">
              
        <link rel="icon" href="<?php echo base_url('/assets/img/logob64.png');?>">
        
        <link rel="stylesheet" href="<?php echo base_url('/assets/css/hf.css')?>">
        <link href="<?php echo base_url('assets/css/login.css')?>" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/comment.css">
        
        <link rel="stylesheet" href="<?php echo base_url('/assets/open-iconic/font/css/open-iconic-bootstrap.min.css');?>">

    </head>
    <body>
        <nav class="navbar navbar-expand-md sticky-top header-top">
            <div class="navbar-collapse collapse w-100 order-1 order-md-0 twocollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('Landing_C/index') ?>">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="mr-auto order-0">
                <button class="navbar-toggler justify-content-start" type="button" data-toggle="collapse" data-target=".twocollapse">
                    <span class="oi oi-grid-three-up"></span>
                </button>
            </div>
            <div class="mx-auto order-0 savoy">
                <a class="navbar-brand mx-auto text-center" href="<?php echo site_url('Landing_C/index') ?>">IKAE</a>
            </div>
            <div class="navbar-collapse collapse w-100 order-3 twocollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <?php 
                        if ($this->session->userdata('username')!== null) {
                        ?>
                    <li class="nav-item"> 
                        <a class="nav-link" href="<?php echo site_url('Profile_C/index') ?>">My Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('Logout_C/index')?>">Logout</a>
                    </li>
                    <?php
                    }
                   else {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('Login_C/index') ?>">Sign in</a>
                    </li>
                    <?php 
                   }
                    ?>
                </ul>
            </div>
            <?php 
            if ($this->session->userdata('username')!== null) {
                        ?>
            <ul class="nav ml-auto order-md-4 order-sm-0">
                <li class="nav-item">
                    <a href="#" class="nav-link">Cart</a>
                </li>
            </ul>
             <?php }
            else { ?>
            <ul class="nav ml-auto order-md-4 order-sm-0 invisible">
                <li class="nav-item">
                    <a href="#" class="nav-link">Cart</a>
                </li>
            </ul>
            <?php }?>
        </nav>
    </body>
</html>