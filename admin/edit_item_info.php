
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


            
            $select = "SELECT * FROM item_info WHERE id=$id";
            $query = $con->query($select);
            while($fetch = mysqli_fetch_assoc($query)){
            ?>
           
        <form action="update_item_info.php" method="POST">
        <input type="text" name="id" hidden value="<?php echo $fetch['id'];  ?>" >
                                  <div class="modal-dialog modal-lg" role="document">
                                      <div class="modal-content">
                                          
                                          <div class="modal-body">
										  
										  <!--form body start here-->
										  
										  
										  
                                          <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Item Code : </label>
                                            <input name="icode" class="form-control" type="text" placeholder="Item Code" value="<?php echo $fetch['item_code']; ?>">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Catagory Id : </label>
                                            <input name="catid" class="form-control" type="text" placeholder="Catagory Id" value="<?php echo $fetch['catagory_id']; ?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Unit : </label>
                                            <input name="unit" class="form-control" type="text" placeholder="Unit" value="<?php echo $fetch['unit']; ?>">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Unit Price :</label>
                                            <input name="uprice" class="form-control" type="text" placeholder="Unit Price" value="<?php echo $fetch['unit_price']; ?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Last Per Price :</label>
                                            <input name="lpprice" class="form-control" type="text" placeholder="Last Per Price" value="<?php echo $fetch['last_pur_price']; ?>">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Barcode :</label>
                                            <input name="barcode" class="form-control" type="text" placeholder="Barcode" value="<?php echo $fetch['barcode']; ?>">
                                        </div>
                                    </div>


											<!--form body end -->
											
											
                                          </div>
                                          <div class="modal-footer">
<!--                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
                                              <button name="submit" class="btn btn-default px-4" type="submit">Update</button>
                                          </div>
                                      </div>
                                  </div>
                              </form>


<?php

}

?>


<?php include ("./footer.php"); ?>
