
<?php include ("./header.php"); ?>
<?php require ("./src/database.php"); ?>

    <div class="content-wrapper">
        <!-- START PAGE CONTENT-->
        <div class="page-heading">
            <h1 class="page-title">Edit</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="dashboard.php"><i class="la la-home font-20"></i></a>
                </li>
               <!-- <li class="breadcrumb-item"></li>-->
            </ol>
        </div>

            <?php

                $id = $_GET['id'];
                $select = "SELECT * FROM suppliers WHERE id=$id";
                $query = $con->query($select);
                while($fetch = mysqli_fetch_assoc($query)){
            ?>
        
        <form action="update_supplier.php" method="POST">
            <input type="text" name="id" hidden value="<?php echo $fetch['id'];  ?>" >
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">             
                        <div class="modal-body">
							 <!--form body start here-->	  
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <label>Party Name : </label>
                                        <input class="form-control" type="text" name="party_name" value="<?php echo $fetch['party_name']; ?> ">
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <label>Phone : </label>
                                        <input class="form-control" type="text" name="phone" value="<?php echo $fetch['phone']; ?> ">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <label>Email : </label>
                                        <input class="form-control" type="text" name="email" value="<?php echo $fetch['email']; ?> ">
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <label>Address :</label>
                                        <textarea class="form-control" name="address_ar" id="" cols="10" rows="2"><?php echo $fetch['address_ar']; ?></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <label>Contact Persone :</label>
                                        <input class="form-control" type="text" name="contact_person" value="<?php echo $fetch['contact_person']; ?> ">
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <label>Contact Persone Phone :</label>
                                        <input class="form-control" type="text" name="cp_phone" value="<?php echo $fetch['cp_phone']; ?> ">
                                    </div>
                                </div>

								<!--form body end -->
											
                            </div>
                    <div class="modal-footer">
                        <button name="submit" class="btn btn-default px-4" type="submit">Update</button>
                    </div>
              </div>
          </div>
      </form>

<?php

}

?>

<?php include ("./footer.php"); ?>
