
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


            
            $select = "SELECT * FROM categories WHERE id=$id";
            $query = $con->query($select);
            while($fetch = mysqli_fetch_assoc($query)){
                ?>
           

                



        <form action="update_categories.php" method="POST">
        <input type="text" name="id" hidden value="<?php echo $fetch['id'];  ?>" >
                                  <div class="modal-dialog modal-lg" role="document">
                                      <div class="modal-content">
                                          
                                          <div class="modal-body">
										  
										  <!--form body start here-->
										  
										  
										  
                                          <div class="row">
                                        <div class="col-sm-12 form-group">
                                        <label>Catagory Name : </label>
                                            <input name="cat_name" class="form-control" type="text" placeholder="Catagory Name" value="<?php echo $fetch['cat_name']; ?>" >
                                            <label>Discription : </label>
                                            <textarea name="dis" class="form-control" id="" cols="2" rows="2" placeholder="Discription" value="<?php echo $fetch['discription']; ?>" ></textarea>
                                        </div>
                                        
											<!--form body end -->
											
											
                                          </div>
                                          <div class="modal-footer">
<!--                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
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
