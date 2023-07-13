
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

            $select = "SELECT * FROM brands WHERE id=$id";
            $query = $con->query($select);
            while($fetch = mysqli_fetch_assoc($query)){
                ?>
           
        <form action="update_brand.php" method="POST">
            <input type="text" name="id" hidden value="<?php echo $fetch['id'];  ?>" >
              <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                      
                      <div class="modal-body">
					  
					  <!--form body start here-->
					  
                      <div class="row">
                    <div class="col-sm-6 form-group">
                        <label>Brands name : </label>
                        <input name="bname" class="form-control" type="text" placeholder="Item Code" value="<?php echo $fetch['name']; ?>">
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
