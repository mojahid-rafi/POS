
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
            $select = "SELECT * FROM users WHERE id=$id";
            $query = $con->query($select);
            while($fetch = mysqli_fetch_assoc($query)){
        ?>
        <form action="update_users.php" method="POST">
            <input type="text" name="id" hidden value="<?php echo $fetch['id'];  ?>" >
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
					  
					  <!--form body start here-->
                              <div class="row">
                                   <div class="col-sm-6 form-group">
                                       <label>Name</label>
                                       <input name="name" class="form-control" type="text" placeholder="Name" value="<?php echo $fetch['user_name']; ?>" >
                                   </div>
                                   <div class="col-sm-6 form-group">
                                       <label>Display Name</label>
                                       <input name="dname" class="form-control" type="text" placeholder="Display Name" value="<?php echo $fetch['display_name']; ?>">
                                   </div>
                               </div>
                                   <div class="row">
                                   <div class="col-sm-6 form-group">
                                       <label>Email</label>
                                       <input name="email" class="form-control" type="email" placeholder="Email" value="<?php echo $fetch['email']; ?>">
                                   </div>
                                   <div class="col-sm-6 form-group">
                                       <label>Role</label>
                                           <select name="role" class="form-control" id="role" value="<?php echo $fetch['role']; ?>">
                                               <option value="1">1</option>
                                               <option value="2">2</option>
                                           </select>
                                   </div>
                               </div>
                               <div class="row">
                                   <div class="col-sm-6 form-group">
                                       <label>Status</label>
                                           <select name="sts" class="form-control" id="sts" value="<?php echo $fetch['sts']; ?>">
                                               <option value="Active">Active</option>
                                               <option value="inactive">Inactive</option>
                                           </select>
                                   </div>
                                   <div class="col-sm-6 form-group">
                                       <label>Password</label>
                                       <input name="password" class="form-control" type="password" placeholder="Password" value="<?php echo $fetch['user_password']; ?>">
                                   </div>
                               </div>
                               <div class="row">
                                   <div class="col-sm-6 form-group">
                                       <label>Confirm Password</label>
                                       <input name="cpassword" class="form-control" type="password" placeholder="Confirm Password" value="<?php echo $fetch['user_con_password']; ?>" >
                                   </div>
                               </div>
					  
						<!--form body end -->
						
                        <div class="modal-footer">
                            <button name="submit" class="btn btn-default px-4" type="submit">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

<?php

}

?>

<?php include ("./footer.php"); ?>
