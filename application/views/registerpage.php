<?php
// by nim = 1301164036 /alfisar 1301164550 / amalia ?>
<?php
if ($this->session->flashdata('alert')=='sukses_daftar'){
    echo "<script>alert('Sukses Mendaftar, Silahkan Login');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>chips ahoy</title>
        <!-- Load your Bootstrap CSS Here -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
        <!-- Load your CSS Style Here! -->
        <link href="<?php echo base_url('assets/css/login.css');?>" rel="stylesheet">
        <!-- Script -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="../js/JavaScript.js"></script>
    </head>
    <body>
        <!-- Form Area -->		
        <div class = "container-fluid form-contain">
            <?php $atribut = array(
    'class' => 'login-form',
    'role' => 'form'
);?>
            <?php
            echo form_open("Register_C/daftar_akun",$atribut);
            ?>
            <div class="row sign-bg">
                <div class="col-sm-12">
                    <h2 class="text-center">Register</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="email-cont" for="email" style="margin-top: 4%"><h5>Email</h5></label>
                        <input type="email" name="email" class="form-control" placeholder="you@example.com" required id="Email">
                    </div>
                    <div class="form-group">
                        <label class="pass-cont" for="password"><h5>Password</h5></label>
                        <input type="password" name="pass1" class="form-control" placeholder="enter password" required id="pass">
                    </div>
                    <div class="form-group">
                        <label class="pass2-cont" for="password"><h5>Confirm Password</h5></label>
                        <input type="password" name="pass2" class="form-control" placeholder="enter password" required id="pass2">
                    </div>
                    <div class"form-group">
                        <button class="btn btn-in form-control" type="submit" id="submit">
                            Submit
                        </button>
                    </div>
                    <p class = " text-center regme mt-5">
                        <a href="<?php echo site_url('Login_C/index') ?>">Already have an account?</a>
                    </p>
                </div>
            </div>
        </div>
        </html>
