
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


            
            $select = "SELECT * FROM sale_mastr WHERE id=$id";
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
                                            <label>Product  Id : </label>
                                            <input name="pid" class="form-control" type="text" placeholder="product Id" value="<?php echo $fetch['p_id']; ?>" >
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Phone : </label>
                                            <input name="phone" class="form-control" type="text" placeholder="Phone Number" value="<?php echo $fetch['phone']; ?>" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Email : </label>
                                            <input name="email" class="form-control" type="email" placeholder="Email" value="<?php echo $fetch['email']; ?>" >
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Product Type :</label>
                                            <input name="ptype" class="form-control" type="text" placeholder="Product Type" value="<?php echo $fetch['product_type']; ?>" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Total :</label>
                                            <input name="total" class="form-control" type="text" placeholder="Total" value="<?php echo $fetch['total']; ?>" >
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Discount :</label>
                                            <input name="discount" class="form-control" type="text" placeholder="Discount"  value="<?php echo $fetch['discount']; ?>" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Payable :</label>
                                            <input name="payable" class="form-control" type="text" placeholder="Payable"  value="<?php echo $fetch['payable']; ?>" >
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Paid :</label>
                                            <input name="paid" class="form-control" type="text" placeholder="Paid"  value="<?php echo $fetch['paid']; ?>" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Refund :</label>
                                            <input name="refund" class="form-control" type="text" placeholder="refund"  value="<?php echo $fetch['refund']; ?>" >
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Due :</label>
                                            <input name="due" class="form-control" type="text" placeholder="Due"  value="<?php echo $fetch['due']; ?>" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Pay Mode :</label>
                                            <input name="paymode" class="form-control" type="text" placeholder="Pay Mode" value="<?php echo $fetch['pay_mode']; ?>"  >
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
