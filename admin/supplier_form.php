<?php include ("./header.php"); ?>
<?php require ("./src/database.php"); ?>

<?php
            if (isset($_POST['submit'])){
                $pname = $_POST['pname'];
                $ptype = $_POST['ptype'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $conpersone = $_POST['conpersone'];
                $cpphone = $_POST['cpphone'];

                
                $insert = "INSERT INTO supplier(party_name,party_type,address_ar,phone,email,contact_person,cp_phone) VALUES ('{$pname}','{$ptype}','{$address}','{$phone}','{$email}','{$conpersone}','{$cpphone}')";
                $con->query($insert);

};
?>

    <div class="content-wrapper">
        <!-- START PAGE CONTENT-->
        <div class="page-heading">
            <h1 class="page-title">Supplier Form</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="dashboard.php"><i class="la la-home font-20"></i></a>
                </li>
               <!-- <li class="breadcrumb-item"></li>-->
            </ol>
        </div>

        <!--    Enter Your Content Here-->
        <div class="page-content fade-in-up">
            <div class="row">
                <div class="col-md-12">
                    <div class="ibox">
        <!-- modal button -->
        <div class="ibox-head justify-content-end">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#DonorAdd">
                Add Supplier
            </button>
        </div>
        <!-- modal button end -->

        <!-- modal start -->
        <div class="modal fade" id="DonorAdd" tabindex="-1" role="dialog" aria-labelledby="DonorAdd" aria-hidden="true">
                              <form action="" method="POST">
                                  <div class="modal-dialog modal-lg" role="document">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <h5 class="modal-title" id="exampleModalLabel">Supplier</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                              </button>
                                          </div>
                                          <div class="modal-body">
										  
										  <!--form body start here-->
										  
										  
										  
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Party Name : </label>
                                            <input name="pname" class="form-control" type="text" placeholder="Full Name">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Party Type : </label>
                                            <input name="ptype" class="form-control" type="text" placeholder="Party Type">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Phone : </label>
                                            <input name="phone" class="form-control" type="text" placeholder="Phone Number">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Email : </label>
                                            <input name="email" class="form-control" type="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Address :</label>
                                            <textarea name="address" class="form-control" id="address" cols="10" rows="2" placeholder="Address"></textarea>
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Contact Persone :</label>
                                            <input name="conpersone" class="form-control" type="text" placeholder="Contact Persone">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Contact Persone Phone :</label>
                                            <input name="cpphone" class="form-control" type="text" placeholder="Contact Persone Phone">
                                        </div>
                                    </div>

											<!--form body end -->
											
											
                                          </div>
                                          <div class="modal-footer">
<!--                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
                                              <button name="submit" class="btn btn-default px-4" type="submit">Save</button>
                                          </div>
                                      </div>
                                  </div>
                              </form>
                              
                          </div>
        <!-- modal end -->
        <?php 
            $select = "SELECT * FROM supplier";
            $query = con->query($select);
        ?>
                    </div>        
                </div>
            </div>
        </div>
    
<?php include ("./footer.php"); ?>