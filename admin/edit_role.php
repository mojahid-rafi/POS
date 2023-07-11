
<?php include ("./header.php"); ?>
<?php require ("./src/database.php"); ?>

    <div class="content-wrapper">
        <!-- START PAGE CONTENT-->
        <div class="page-heading">
            <h1 class="page-title">Edit</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="dashboard.php">
                        <i class="la la-home font-20"></i>
                    </a>
                </li>
               <!-- <li class="breadcrumb-item"></li>-->
            </ol>
        </div>

        <?php

            $id = $_GET['id'];

            $select = "SELECT * FROM roles WHERE id=$id";
            $query = $con->query($select);
            while($fetch = mysqli_fetch_assoc($query)){
        ?>
           
        <form action="update_role.php" method="POST">
            <input type="text" name="id" hidden value="<?php echo $fetch['id'];  ?>" >
              <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                      <div class="modal-body">
					  <!--form body start here-->
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>Role name : </label>
                                <input name="role_name" class="form-control" type="text" value="<?php echo $fetch['role_name']; ?>">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Status : </label>
                                <select class="form-control" name="sts" id="" value="<?php echo $fetch['sts']; ?>">
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
						<!--form body end -->
                        </div>
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
