
<?php include ("./header.php"); ?>
<?php require ("./src/database.php"); ?>

        <?php
            $id = $_GET['id'];

            $select = "SELECT * FROM roles WHERE id=$id";
            $query = $con->query($select);
            while($fetch = mysqli_fetch_assoc($query)){
        ?>

                <div class="page-content fade-in-up">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
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
                            </div>
                        </div>
                    </div>
                </div>
<?php

}

?>


<?php include ("./footer.php"); ?>
