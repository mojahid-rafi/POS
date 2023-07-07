
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
                                <input name="icode" class="form-control" type="text" placeholder="Item Code"value="<?php echo $fetch['item_code']; ?>">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Item Name : </label>
                                <input name="iname" class="form-control" type="text" placeholder="Item Name" value="<?php echo $fetch['item_name']; ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">

                                <?php
                                    $cat_id= $fetch['category_id'];

                                    $select = "SELECT * FROM categories WHERE id=$cat_id";
                                    $query = $con->query($select);
                                    $result = $query->fetch_all(MYSQLI_ASSOC);
                                ?>
                                <label class="">Select Category</label>
                                <select name="cat_id" class="form-control select2_style1" style="width: 100%;">
                                    <option disabled selected value="0">Select Category</option>
                                    <?php
                                        foreach($result as $value): ?>
                                            <option value="<?= $value['id']; ?>"><?= $value['name']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label class="">Select Brand</label>
                                <select name="brand_id" class="form-control select2_style1" style="width: 100%;">
                                <option disabled selected value="0">Select Brand</option>
                                <?php 
                                    $select = 'SELECT * FROM brands';
                                    $query = $con->query($select);
                                    $result = $query->fetch_all(MYSQLI_ASSOC);
                                        foreach($result as $value): ?>
                                            <option value="<?= $value['id']; ?>"><?= $value['name']; ?></option>
                                        <?php endforeach; ?>
                                  </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>Unit : </label>
                                <input name="unit" class="form-control" type="text" placeholder="Unit" value="<?php echo $fetch['unit']; ?>">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Unit Price :</label>
                                <input name="uprice" class="form-control" type="text" placeholder="Unit Price" value="<?php echo $fetch['unit_price']; ?>" >
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>Re Order Level:</label>
                                <input name="reolevel" class="form-control" type="text" placeholder="Re Order Level" value="<?php echo $fetch['rol']; ?>">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Last Per Price :</label>
                                <input name="lpprice" class="form-control" type="text" placeholder="Last Per Price" value="<?php echo $fetch['last_pur_price']; ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>Barcode :</label>
                                <input name="barcode" class="form-control" type="text" placeholder="Barcode" value="<?php echo $fetch['barcode']; ?>">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Status :</label>
                                <select name="sts" id="" class="form-control" value="<?php echo $fetch['sts']; ?>">
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>stock maintain :</label>
                                <select name="stmaintain" id="" class="form-control" value="<?php echo $fetch['stock_mantain']; ?>" >
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Opening Stock :</label>
                                <input name="opstock" class="form-control" type="text" placeholder="Opening Stock" value="<?php echo $fetch['op_stock']; ?>">
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
