
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


            
            $select = "SELECT * FROM sale_details WHERE id=$id";
            $query = $con->query($select);
            while($fetch = mysqli_fetch_assoc($query)){
                ?>
           

                



        <form action="updatecustomer.php" method="POST">
        <input type="text" name="id" hidden value="<?php echo $fetch['id'];  ?>" >
                                  <div class="modal-dialog modal-lg" role="document">
                                      <div class="modal-content">
                                          
                                          <div class="modal-body">
										  
										  <!--form body start here-->
										  
										  
										  
                                          <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Sale Date : </label>
                                            <input name="saledate" class="form-control" type="date" placeholder="Sale Date" value="<?php echo $fetch['sale_date']; ?>" >
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Invoice Number : </label>
                                            <input name="innumber" class="form-control" type="text" placeholder="Invoice Number" value="<?php echo $fetch['inv_no']; ?>" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Item Id : </label>
                                            <input name="itemid" class="form-control" type="text" placeholder="Item Id" value="<?php echo $fetch['item_id']; ?>"  >
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Sale price : </label>
                                            <input name="saleprice" class="form-control" type="text" placeholder="Sale Price" value="<?php echo $fetch['sale_price']; ?>" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Quentity :</label>
                                            <input name="quentity" class="form-control" type="text" placeholder="Quentity" value="<?php echo $fetch['qty']; ?>" >
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Discount :</label>
                                            <input name="discount" class="form-control" type="text" placeholder="Discount" value="<?php echo $fetch['discount']; ?>" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Total Discount :</label>
                                            <input name="totaldis" class="form-control" type="text" placeholder="Total Discount" value="<?php echo $fetch['total_dis']; ?>" >
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Vat :</label>
                                            <input name="vat" class="form-control" type="text" placeholder="Vat" value="<?php echo $fetch['vat']; ?>" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 form-group">
                                            <label>Total :</label>
                                            <input name="total" class="form-control" type="text" placeholder="Total " value="<?php echo $fetch['total']; ?>" >
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
