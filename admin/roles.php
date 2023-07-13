<?php //include ("./header.php"); ?>
<?php require ("./src/database.php"); ?>

        <!--Enter Your Content Here-->
        <?php
            if(isset($_POST['submit'])){
                $role_name = $_POST['role_name'];
                $sts = $_POST['sts'];
                $insert = "INSERT INTO `roles`(`role_name`, `sts`, `user_id`) VALUES ('{$role_name}', '{$sts}', '0')";
                $qry = $con->query($insert);
            }
        ?>

        <div class="page-content fade-in-up">
            <div class="row">
                <div class="col-md-12">
                    <div class="ibox">
                        <!-- modal button -->
                        <div class="ibox-head">
                            <!-- Button trigger modal -->
                            <div class="ibox-title"> Roles</div>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#DonorAdd">
                                Add Role
                            </button>
                        </div>
                        <!-- modal button end -->
                        <!-- modal start -->
                        <div class="modal fade" id="DonorAdd" tabindex="-1" role="dialog" aria-labelledby="DonorAdd" aria-hidden="true">
                            <form action="" method="POST">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Role</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-6 form-group">
                                                    <label>Role Name : </label>
                                                    <input name="role_name" class="form-control" type="text" placeholder="Role Name" required>
                                                </div>
                                                <div class="col-sm-6 form-group">
                                                    <label>Status : </label>
                                                    <select class="form-control" name="sts" id="">
                                                        <option value="">Select Status</option>
                                                        <option value="1">Active</option>
                                                        <option value="0">Inactive</option>
                                                    </select>
                                                </div>
                                            </div>
                                        <div class="modal-footer">
                                            <button name="submit" class="btn btn-default px-4" type="submit">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                        <!-- modal end -->

                        <?php
                            $select = "SELECT * FROM roles";
                            $query = $con->query($select);
                            $result = $query->fetch_all(MYSQLI_ASSOC);
                        ?>

                        <div class="ibox-body">
                            <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th width="50px">SL</th>
                                        <th>Role Name</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php foreach($result as $value): ?>
                                        <tr>
                                            <td><?= $value['id']; ?></td>
                                            <td><?= $value['role_name']; ?></td>
                                            <td><?= $value['sts']; ?></td>
                                            <td>
                                                <a href="edit_role.php?id=<?= $value['id']; ?>" class="btn btn-default btn-xs m-r-5"><i class="fa fa-pencil font-14"></i></a>
                                                <a href="delete_role.php?id=<?= $value['id']; ?>" class="btn btn-default btn-xs m-r-5"><i class="fa fa-trash font-14"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php //include ("./footer.php"); ?>

            <!-- PAGE LEVEL SCRIPTS-->
            <script type="text/javascript">
                $(function() {
                    $('#example-table').DataTable({
                        pageLength: 10,
                    });
                })
            </script>
