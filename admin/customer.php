<?php include ("./header.php"); ?>
<?php require ("./src/database.php"); ?>

    <div class="content-wrapper">
        <!-- START PAGE CONTENT-->
        <div class="page-heading">
            <h1 class="page-title">Customer</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="dashboard.php"><i class="la la-home font-20"></i></a>
                </li>
               <!-- <li class="breadcrumb-item"></li>-->
            </ol>
        </div>
        <?php
            if (isset($_POST['submit'])){
                $pname = $_POST['pname'];
                $ptype = $_POST['ptype'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $conpersone = $_POST['conpersone'];
                $cpphone = $_POST['cpphone'];

                
                $insert = "INSERT INTO `customer`(`party_name`, `party_type`, `address_ar`, `phone`, `email`, `contact_person`, `cp_phone`) VALUES ('{$pname}','{$ptype}','{$phone}','{$email}','{$address}','{$conpersone}','{$cpphone}')";
                $con->query($insert);
            };

            
        ?>

        <!--    Enter Your Content Here-->
        <div class="page-content fade-in-up">
            <div class="row">
                <div class="col-md-12">
                    <div class="ibox">
        <!-- modal button -->
        <div class="ibox-head justify-content-end">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#DonorAdd">
                Add Customer
            </button>
        </div>
        <!-- modal button end -->

 
        <!-- modal start -->
        <div class="modal fade" id="DonorAdd" tabindex="-1" role="dialog" aria-labelledby="DonorAdd" aria-hidden="true">
                              <form action="" method="POST">
                                  <div class="modal-dialog modal-lg" role="document">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <h5 class="modal-title" id="exampleModalLabel">Customer</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                              </button>
                                          </div>
                                          <div class="modal-body">
										  
										  <!--form body start here-->
										  
										  
										  
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Party Name : </label>
                                            <input name="pname" class="form-control" type="text" placeholder="Full Name" required>
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
            $select = 'SELECT * FROM customer';
            $query = $con->query($select);
            $result = $query->fetch_all(MYSQLI_ASSOC);
        ?>




                    <div class="ibox-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>

                                <tr>
                                    <th width="50px">SL</th>
                                    <th>Party Name</th>
                                    <th>Party Type</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Contact Person</th>
                                    <th>Contact Person Phone</th>
                                    <th>Acct Head</th>
                                    <th>Head Type</th>
                                    <th>Create At</th>
                                    <th>Update At</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php foreach($result as $value): ?>
                            <tr>
                                <td><?= $value['id']; ?></td>
                                <td><?= $value['party_name']; ?></td>
                                <td><?= $value['party_type']; ?></td>
                                <td><?= $value['address_ar']; ?></td>
                                <td><?= $value['phone']; ?></td>
                                <td><?= $value['email']; ?></td>
                                <td><?= $value['contact_person']; ?></td>
                                <td><?= $value['cp_phone']; ?></td>
                                <td><?= $value['acct_head']; ?></td>
                                <td><?= $value['head_type']; ?></td>
                                <td><?= $value['create_at']; ?></td>
                                <td><?= $value['updated_at']; ?></td>
                            </tr>
                        <?php endforeach; ?>

            
                                </tbody>
                            </table>
                        </div>



                    </div>        
                </div>
            </div>
        </div>
    
<?php include ("./footer.php"); ?>