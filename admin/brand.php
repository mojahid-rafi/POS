<?php include ("./header.php"); ?>
<?php require ("./src/database.php"); ?>

<?php
            if (isset($_POST['submit'])){
                $bname = $_POST['bname'];
  
                $insert = "INSERT INTO `brands`(`brand_name`) VALUES ('{$bname}')";
                $con->query($insert);

};
?>

    <div class="content-wrapper">
        <!-- START PAGE CONTENT-->
        <div class="page-heading">
            <h1 class="page-title">Brands</h1>
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
                Add Brand
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
                                            <label>Brand Name : </label>
                                            <input name="bname" class="form-control" type="text" placeholder="Brand Name">
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
            $select = 'SELECT * FROM brands';
            $query = $con->query($select);
            $result = $query->fetch_all(MYSQLI_ASSOC);
        ?>



        <div class="ibox-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>

                                <tr>
                                    <th width="50px">SL</th>
                                    <th>Brand Name</th>
                                    
                                </tr>
                                </thead>
                                <tbody>

                                <?php foreach($result as $value): ?>
                            <tr>
                                <td><?= $value['id']; ?></td>
                                <td><?= $value['brand_name']; ?></td>

                                <td> 
                                    <a href="edit_brand.php?id=<?= $value['id']; ?>" class="btn btn-default btn-xs m-r-5"><i class="fa fa-pencil font-14"></i></a>

                                 <a href="delete_brand.php?id=<?= $value['id']; ?>" class="btn btn-default btn-xs m-r-5"><i class="fa fa-trash font-14"></i></a>
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