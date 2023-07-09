<?php include ("./header.php"); ?>
<?php require ("./src/database.php"); ?>



    <div class="content-wrapper">
        <!-- START PAGE CONTENT-->
        <div class="page-heading">
<!--            <h1 class="page-title">Categories</h1>-->
<!--            <ol class="breadcrumb">-->
<!--                <li class="breadcrumb-item">-->
<!--                    <a href="dashboard.php"><i class="la la-home font-20"></i></a>-->
<!--                </li>-->
<!--                <li class="breadcrumb-item"></li>-->
<!--            </ol>-->
        </div>

        <!--    Enter Your Content Here-->
        <div class="page-content fade-in-up">
            <div class="row">
                <div class="col-md-12">
                    <div class="ibox">
                        <div class="ibox-head">
                            <div class="ibox-title">Category Information</div>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#DonorAdd">
                                Add Catagories
                            </button>
                        </div>

                        <?php
                            if (isset($_POST['submit'])){
                                $cat_name = $_POST['cat_name'];
                                $dis = $_POST['dis'];

                                $insert = "INSERT INTO `categories`(`name`, `discription`,`user_id`) VALUES ('{$cat_name}','{$dis}',                '0')";
                                $con->query($insert);
                            };
                        ?>

                    <!-- modal start -->
                        <div class="modal fade" id="DonorAdd" tabindex="-1" role="dialog" aria-labelledby="DonorAdd"                aria-hidden="true">
                              <form action="" method="POST">
                                  <div class="modal-dialog modal-lg" role="document">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <h5 class="modal-title" id="exampleModalLabel">Supplier</h5>
                                              <button type="button" class="close" data-dismiss="modaria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                              </button>
                                          </div>
                                          <div class="modal-body">
                                        
		                				  <!--form body start here-->
                                        
                                                <div class="row">
                                                    <div class="col-sm-12 form-group">
                                                        <label>Catagory Name : </label>
                                                        <input name="cat_name" class="form-control" type="teplaceholder="Catagory               Name">
                                                        <label>Discription : </label>
                                                        <textarea name="dis" class="form-control" id="" cols="2"                rows=placeholder="Discription"></textarea>
                                                    </div>  
                                                </div>
		                					<!--form body end -->
                                        
                                          </div>
                                          <div class="modal-footer">
                                              <button name="submit" class="btn btn-default px-4" type="submit">Sabutton>
                                          </div>
                                      </div>
                                  </div>
                              </form>               
                            </div>
        <!-- modal end -->

        <?php 
            $select = 'SELECT * FROM categories';
            $query = $con->query($select);
            $result = $query->fetch_all(MYSQLI_ASSOC);
        ?>

        <div class="ibox-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>

                                    <tr>
                                        <th width="50px">SL</th>
                                        <th>Catagory Name</th>
                                        <th>Discription</th>

                                    </tr>
                                </thead>
                                <tbody>

                                <?php foreach($result as $value): ?>
                                    <tr>
                                        <td><?= $value['id']; ?></td>
                                        <td><?= $value['name']; ?></td>
                                        <td><?= $value['discription']; ?></td>

                                        <td> 
                                            <a href="edit_categories.php?id=<?= $value['id']; ?>" class="btn btn-default        btn-xs m-r-5"><i class="fa fa-pencil font-14"></i></a>

                                         <a href="delete_categories.php?id=<?= $value['id']; ?>" class="btn btn-default btn-xs      m-r-5"><i class="fa fa-trash font-14"></i></a>
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