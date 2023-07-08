<?php include ("./header.php"); ?>
<?php require ("./src/database.php"); ?>

    <div class="content-wrapper">
        <!-- START PAGE CONTENT-->
        <div class="page-heading">
            <h1 class="page-title">Users</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="dashboard.php"><i class="la la-home font-20"></i></a>
                </li>
               <!-- <li class="breadcrumb-item"></li>-->
            </ol>
        </div>
        <?php
            if (isset($_POST['submit'])){
                $name = $_POST['name'];
                $dname = $_POST['dname'];
                $email = $_POST['email'];
                $role = $_POST['role'];
                $sts = $_POST['sts'];
                $password = $_POST['password'];
                $cpassword = $_POST['cpassword'];

                $insert = "INSERT INTO `users`(`user_name`, `display_name`, `email`, `role`, `sts`, `user_password`, `user_con_password`,`user_id`) VALUES ('{$name}', '{$dname}', '{$email}', '{$role}', '{$sts}', '{$password}', '{$cpassword}','0')";
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
                Add User
            </button>
        </div>
        <!-- modal button end -->
        <!-- modal start -->
        <div class="modal fade" id="DonorAdd" tabindex="-1" role="dialog" aria-labelledby="DonorAdd" aria-hidden="true">
            <form action="" method="POST">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Users</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
					  
					  <!--form body start here-->
                         <div class="row">
                              <div class="col-sm-6 form-group">
                                  <label>Name</label>
                                  <input name="name" class="form-control" type="text" placeholder="Name">
                              </div>
                              <div class="col-sm-6 form-group">
                                  <label>Display Name</label>
                                  <input name="dname" class="form-control" type="text" placeholder="Display Name">
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-sm-6 form-group">
                                  <label>Email</label>
                                  <input name="email" class="form-control" type="email" placeholder="Email">
                              </div>
                              <div class="col-sm-6 form-group">
                                  <label>Role</label>
                                      <select name="role" class="form-control" id="role">
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                      </select>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-sm-6 form-group">
                                  <label>Status</label>
                                      <select name="sts" class="form-control" id="sts">
                                          <option value="Active">Active</option>
                                          <option value="inactive">Inactive</option>
                                      </select>
                              </div>
                              <div class="col-sm-6 form-group">
                                  <label>Password</label>
                                  <input name="password" class="form-control" type="password" placeholder="Password">
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-sm-6 form-group">
                                  <label>Confirm Password</label>
                                  <input name="cpassword" class="form-control" type="password" placeholder="Confirm Password">
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

        </div>
      <?php 
            $select = 'SELECT * FROM users';
            $query = $con->query($select);
            $result = $query->fetch_all(MYSQLI_ASSOC);
        ?>
                   <div class="ibox-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th width="50px">SL</th>
                                        <th>Name</th>
                                        <th>Display Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Status</th>
                                        <th>Password</th>
                                        <th>Confirm Password</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php foreach($result as $value): ?>

                                <tr>
                                    <td><?= $value['id']; ?></td>
                                    <td><?= $value['user_name']; ?></td>
                                    <td><?= $value['display_name']; ?></td>
                                    <td><?= $value['email']; ?></td>
                                    <td><?= $value['role']; ?></td>
                                    <td><?= $value['sts']; ?></td>
                                    <td><?= $value['user_password']; ?></td>
                                    <td><?= $value['user_con_password']; ?></td>
                                    <td> 
                                        <a href="edit_users.php?id=<?= $value['id']; ?>" class="btn btn-default btn-xs  m-r-5">
                                            <i class="fa fa-pencil font-14"></i>
                                        </a>

                                        <a href="delete_users.php?id=<?= $value['id']; ?>" class="btn btn-default btn-xs    m-r-5">
                                            <i class="fa fa-trash font-14"></i>
                                        </a>
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
    
<?php include ("./footer.php"); ?>