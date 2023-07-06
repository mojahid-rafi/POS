<?php include ("./header.php"); ?>
<?php require ("./src/database.php"); ?>

    <div class="content-wrapper">
        <!-- START PAGE CONTENT-->
        <div class="page-heading">
            <h1 class="page-title">Company</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="dashboard.php"><i class="la la-home font-20"></i></a>
                </li>
               <!-- <li class="breadcrumb-item"></li>-->
            </ol>
        </div>
         <!--    Enter Your Content Here-->
        <?php
            if(isset($_POST['submit'])){
                $comname = $_POST['comname'];
                $comlogo = $_POST['comlogo'];
                $address = $_POST['address'];
                $comweb = $_POST['comweb'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                $fax = $_POST['fax'];
                $rheader = $_POST['rheader'];
                $rpolicy = $_POST['rpolicy'];

                $insert = "INSERT INTO `company`(`comname`, `comlogo`, `address`, `comweb`, `phone`, `email`, `fax`, `rheader`, `rpolicy`) VALUES ('{$comname}', '{$comlogo}', '{$address}', '{$comweb}', '{$phone}', '{$email}', '{$fax}', '{$rheader}', '{$rpolicy}')";

                $con->query($insert);
            }
        ?>


         <div class="page-content fade-in-up">
            <div class="row">
                <div class="col-md-12">
                    <div class="ibox">
        <!-- modal button -->
        <div class="ibox-head justify-content-end">
            <!-- Button trigger modal -->
            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#DonorAdd">
                Add Customer
            </button> -->
        </div>
        <!-- modal button end -->

        <!-- modal start -->
    <div class="modal fade" id="DonorAdd" tabindex="-1" role="dialog" aria-labelledby="DonorAdd" aria-hidden="true">
        <form action="" method="POST">
              <!-- <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Company</h5> -->
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      <div class="modal-body">
					  
					  <!--form body start here-->
					  	  
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <label>Company Name : </label>
                        <input name="comname" class="form-control" type="text" placeholder="Name" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>Company Logo : </label>
                        <input name="comlogo" class="form-control" type="file" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <label>Company Address : </label>
                        <textarea name="address" id="" cols="2" rows="1" class="form-control" placeholder="Full Address"></textarea>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>Company Website : </label>
                        <input name="comweb" class="form-control" type="text" placeholder="Company Website">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <label>Phone :</label>
                        <input name="phone" class="form-control" type="text" placeholder="Phone"></div>
                    <div class="col-sm-6 form-group">
                        <label>Email :</label>
                        <input name="email" class="form-control" type="email" placeholder="Email Address">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <label>Fax :</label>
                        <input name="fax" class="form-control" type="text" placeholder="Fax">
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>Report Header :</label>
                        <input name="rheader" class="form-control" type="text" placeholder="Report Header">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 form-group">
                        <label>Return Policy :</label>
                        <textarea name="rpolicy" id="rpolicy" cols="2" rows="3" class="form-control" placeholder="Return Police"></textarea>
                    </div>
                </div>
						<!--form body end -->
						
                      </div>
                      <!-- <div class="modal-footer"> -->
<!-- <btton type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
                          <button name="submit" class="btn btn-default " type="submit">Update</button>
                      <!-- </div>
                  </div>
              </div> -->
        </form>
    </div>

    <?php
        $select = "SELECT * FROM company";
        $query = $con->query($select);
        $fetch = $query->fetch_all(MYSQLI_ASSOC);
    ?>

       </div>
   </div>

  </div>        
</div>
    
<?php include ("./footer.php"); ?>