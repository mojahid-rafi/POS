<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if(!isset($_SESSION['user_name']))
{
    header("location:login.php");
}
?>

<?php include ("./header.php"); ?>
<?php require ("./src/database.php"); ?>


        <!--    Enter Your Content Here-->
        <div class="page-content fade-in-up">
            <div class="row">
                <div class="col-md-12">
                    <div class="ibox">

                    <?php
            if (isset($_POST['submit'])){
                $pname = $_POST['pname'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $conpersone = $_POST['conpersone'];
                $cpphone = $_POST['cpphone'];

                $insert = "INSERT INTO `suppliers`(`party_name`, `party_type`, `address_ar`, `phone`, `email`,`contact_person`, `cp_phone`, `user_id`) VALUES ('{$pname}', 'customer', '{$address}', '{$phone}', '{$email}', '{$conpersone}', '{$cpphone}', '0')";
                $con->query($insert);

};
?>
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
                                            <label>Phone : </label>
                                            <input name="phone" class="form-control" type="text" placeholder="Phone Number">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Email : </label>
                                            <input name="email" class="form-control" type="email" placeholder="Email">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Address :</label>
                                            <textarea name="address" class="form-control" id="address" cols="10" rows="2" placeholder="Address"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Contact Persone :</label>
                                            <input name="conpersone" class="form-control" type="text" placeholder="Contact Persone">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Contact Persone Phone :</label>
                                            <input name="cpphone" class="form-control" type="text" placeholder="Contact Persone Phone">
                                        </div>
                                    </div>

											<!--form body end -->
											
                                          </div>
                                          <div class="modal-footer">
                                              <button name="submit" class="btn btn-default px-4" type="submit">Save</button>
                                          </div>
                                      </div>
                                  </div>
                              </form>
                            </div>
        <!-- modal end -->

                <?php 
                    $select = 'SELECT * FROM suppliers';
                    $query = $con->query($select);
                    $result = $query->fetch_all(MYSQLI_ASSOC);
                ?>

                    <div class="ibox-body">
                        <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                            <thead>

                            <tr>
                                <th width="50px">SL</th>
                                <th>Party Name</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Contact Person</th>
                                <th>CP Phone</th>
                                <th>Action</th>

                            </tr>
                            </thead>
                            <tbody>

                            <?php foreach($result as $value): ?>
                                <tr>
                                    <td><?= $value['id']; ?></td>
                                    <td><?= $value['party_name']; ?></td>
                                    <td><?= $value['address_ar']; ?></td>
                                    <td><?= $value['phone']; ?></td>
                                    <td><?= $value['email']; ?></td>
                                    <td><?= $value['contact_person']; ?></td>
                                    <td><?= $value['cp_phone']; ?></td>

                                    <td>
                                        <a href="editsupplier.php?id=<?= $value['id']; ?>" class="btn btn-default btn-xs m-r-5"><i class="fa fa-pencil font-14"></i></a>

                                        <a href="delete_supplier.php?id=<?= $value['id']; ?>" class="btn btn-default btn-xs m-r-5"><i class="fa fa-trash font-14"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                    </div>        
                </div>
            </div>
 
    
<?php include ("./footer.php"); ?>

            <!-- PAGE LEVEL SCRIPTS-->
            <script type="text/javascript">
                $(function() {
                    $('#example-table').DataTable({
                        pageLength: 10,
                    });
                })
            </script>
