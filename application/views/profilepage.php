<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Profil</title>
    <!-- Load your Bootstrap CSS Here -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <!-- Load your CSS Style Here! -->
    <link href="<?php echo base_url('assets/css/profile.css');?>" rel="stylesheet">
    <!-- Script -->
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-center name-me">
            <div class="col-md-6">
                <h1><center><?php echo $this->session->userdata('username');?> </center></h1>
            </div>
        </div>
        <div class="row">
            <div>
                <div>
                    <div class="container">
                        <div class="row">
                        <?php 
                             if ( $this->session->flashdata('data') == 'tidak') {
            
                        ?>
                            <div id="billingF" class="col-md-6">
                                <!-- Insert Upper Text Here -->
                                <p style="padding-top: 2%; font-size: 20px;">
                                    <strong>Fill your Identity</strong>
                                </p>
                                <!-- Insert Your Form Here -->
                                <?php $atribut = array(
                                    'class' => 'login-form',
                                     'role' => 'form'
                                );?>
                            <?php
                                 echo form_open("Profile_C/data_user",$atribut);
                            ?>
                                    <div class="form-row">
                                        <div class="fname-cont col-md-6 mb-6">
                                            <label for="fname">First name</label>
                                            <input type="text" name="first" class="form-control" id="fname" required>
                                        </div>
                                        <div class="lname-cont col-md-6 mb-6">
                                            <label for="lname">Last name</label>
                                            <input type="text" name="last" class="form-control" id="lname" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="email-cont col-md-12 mb-12">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" class="form-control" id="email">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="prov-cont col-md-4 mb-3">
                                            <label for="prov">Province</label>
                                            <input type="text" name="province" class="form-control" id="prov" required>
                                        </div>
                                        <div class="city-cont col-md-4 mb-3">
                                            <label for="city">City</label>
                                            <input type="text" name="city" class="form-control" id="city" required>
                                        </div>
                                        <div class="dist-cont col-md-4 mb-3">
                                            <label for="district">District</label>
                                            <input type="text" name="district" class="form-control" id="district" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-12 mb-12">
                                            <label class="äddress-cont" for="address">Address</label>
                                            <input type="text" name="address" class="form-control" id="adress" placeholder="Street name">
                                            <input type="text" style="margin-top: 4%" class="form-control" id="street" placeholder="Cluster, Suite, Apartment, etc">
                                        </div>
                                    </div>
                                    <div class="form-row" style="margin-top: 4%">
                                        <div class="col-md-6 mb-6">
                                            <label class="zip-cont" for="zip">Zip Code</label>
                                            <input type="text" name="zip" class="form-control" id="zip">
                                        </div>
                                        <div class="col-md-6 mb-6">
                                            <label class="phone-cont" for="phone">Phone Number</label>
                                            <input type="text" name="phone" class="form-control" id="phone">
                                        </div>
                                    </div>
                                    <div>
                                        <input type="submit" class="btn btn-dark btn-block" style="margin-top: 4%" value="SAVE"></input>
                                    </div>
                                
                            </div>

                        <?php 
                            }
                            else{
                        ?>
                             <div id="billingF" class="col-md-6">
                                <!-- Insert Upper Text Here -->
                                <p style="padding-top: 2%; font-size: 20px;">
                                    <strong> <?php echo $profile1->fname; echo " "; echo $profile1->lname;?> </strong>
                                </p>
                        
                                <table class="table table-responsive">
                                    <tr>
                                        <td>
                                            First Name
                                        </td>
                                        <td>
                                            :
                                        </td>
                                        <td>
                                            <?php echo $profile1->fname;?>
                                        </td>
                                    </tr>
                                     <tr>
                                        <td>
                                            Last Name
                                        </td>
                                        <td>
                                            :
                                        </td>
                                        <td>
                                            <?php echo $profile1->lname;?>
                                        </td>
                                    </tr>
                                     <tr>
                                        <td>
                                            Email
                                        </td>
                                        <td>
                                            :
                                        </td>
                                        <td>
                                            <?php echo $profile1->email;?>
                                        </td>
                                    </tr>
                                     <tr>
                                        <td>
                                            Province
                                        </td>
                                        <td>
                                            :
                                        </td>
                                        <td>
                                            <?php echo $profile1->province;?>
                                        </td>
                                    </tr>
                                     <tr>
                                        <td>
                                            City
                                        </td>
                                        <td>
                                            :
                                        </td>
                                        <td>
                                            <?php echo $profile1->city;?>
                                        </td>
                                    </tr>
                                     <tr>
                                        <td>
                                            District
                                        </td>
                                        <td>
                                            :
                                        </td>
                                        <td>
                                            <?php echo $profile1->district;?>
                                        </td>
                                    </tr>
                                     <tr>
                                        <td>
                                            Address
                                        </td>
                                        <td>
                                            :
                                        </td>
                                        <td>
                                            <?php echo $profile1->address;?>
                                        </td>
                                    </tr>
                                     <tr>
                                        <td>
                                            Zip Code
                                        </td>
                                        <td>
                                            :
                                        </td>
                                        <td>
                                            <?php echo $profile1->zip;?>
                                        </td>
                                    </tr>
                                     <tr>
                                        <td>
                                            Phone Number
                                        </td>
                                        <td>
                                            :
                                        </td>
                                        <td>
                                            <?php echo $profile1->phone;?>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        <?php 
                            }
                        ?>      
                            
                            <div class="col-md-6">
                                <!-- Insert Upper Text Here -->
                                <p style="padding-top: 2%; font-size: 20px;">
                                    <strong>Order History</strong>
                                </p>
                                <!-- Insert Table Here-->
                                <table class="table table-responsive">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Product Name</th>
                                            <th>Price</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                        <?php 
                                $i = 1;
                                foreach ($order as $ord ) {
                         ?>
                                        <tr>
                                            <td><?php echo $i ?></td>
                                            <td><?php echo $ord->namabarang; ?></td>
                                            <td>$<?php echo $ord->harga; ?>.00</td>
                                            <td><span class="badge badge-primary">Completed</span></td>
                                        </tr>
                        <?php 
                                    $i++;
                                } 

                        ?>
                                        <!-- <tr>
                                            <td>2</td>
                                            <td>Door Bumper</td>
                                            <td>ID002</td>
                                            <td>14/3/15</td>
                                            <td>$399.99</td>
                                            <td><span class="badge badge-success">Shipped</span></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Door Bumper</td>
                                            <td>ID003</td>
                                            <td>13/3/15</td>
                                            <td>$399.99</td>
                                            <td><span class="badge badge-primary">Completed</span></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Door Bumper</td>
                                            <td>ID003</td>
                                            <td>13/3/15</td>
                                            <td>$399.99</td>
                                            <td><span class="badge badge-danger">Canceled</span></td>
                                        </tr> -->
                                    </tbody>            
                                </table>
                                <!-- Pindah ke description page, itemnya bebas -->
                                <div class="row">
                                  <div class="col-sm-6">
                                    <div class="card">
                                      <div class="card-body">
                                        <div class="thumb" style="background-image: url('img/product/basketjpg.jpg')"></div>
                                        <h5 class="card-title">Special Price For Special User</h5>
                                        <p class="card-text">Get 10% off from purchasing Summer Lampion.</p> 
                                        <a href="#" class="btn btn-secondary">See Detail</a>
                                      </div>
                                    </div>
                                  </div>
                                  <!-- Pindah ke catalog/landing page -->
                                  <div class="col-sm-6">
                                    <div class="card">
                                      <div class="card-body">
                                        <h5 class="card-title">Summer Catalog is Finally Here!</h5>
                                        <p class="card-text">Find your summer needs on summer catalog</p>
                                        <a href="#" class="btn btn-secondary">See Detail</a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
