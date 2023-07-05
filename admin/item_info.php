<?php include ("./header.php"); ?>
<?php require ("./src/database.php"); ?>

    <div class="content-wrapper">
        <!-- START PAGE CONTENT-->
        <div class="page-heading">
            <h1 class="page-title">Item Info</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="dashboard.php"><i class="la la-home font-20"></i></a>
                    </li>
                <!-- <li class="breadcrumb-item"></li>-->
                </ol>
        </div>

        <!--    Enter Your Content Here-->
        <?php
            if (isset($_POST['submit'])){
                $icode = $_POST['icode'];
                $catid = $_POST['catid'];
                $unit = $_POST['unit'];
                $uprice = $_POST['uprice'];
                $lpprice = $_POST['lpprice'];
                $barcode = $_POST['barcode'];
                

                
                $insert = "INSERT INTO `item_info`(`item_code`, `catagory_id`, `unit`, `unit_price`, `last_pur_price`, `barcode`) VALUES ('{$icode}', '{$catid}', '{$unit}', '{$uprice}', '{$lpprice}', '{$barcode}')";
                $con->query($insert);


            };

            
        ?>



        <div class="page-content fade-in-up">
            <div class="row">
                <div class="col-md-12">
                    <div class="ibox">
<<<<<<< HEAD
        <!-- modal button -->
        <div class="ibox-head justify-content-end">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#DonorAdd">
                Add Item
            </button>
        </div>
        <!-- modal button end -->

        <!-- modal start -->
        <div class="modal fade" id="DonorAdd" tabindex="-1" role="dialog" aria-labelledby="DonorAdd" aria-hidden="true">
                              <form action="" method="POST">
                                  <div class="modal-dialog modal-lg" role="document">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <h5 class="modal-title" id="exampleModalLabel">Item</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                              </button>
                                          </div>
                                          <div class="modal-body">
										  
										  <!--form body start here-->
										  
										  
										  
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Item Code : </label>
                                            <input name="icode" class="form-control" type="text" placeholder="Item Code">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Catagory Id : </label>
                                            <input name="catid" class="form-control" type="text" placeholder="Catagory Id">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Unit : </label>
                                            <input name="unit" class="form-control" type="text" placeholder="Unit">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Unit Price :</label>
                                            <input name="uprice" class="form-control" type="text" placeholder="Unit Price">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Last Per Price :</label>
                                            <input name="lpprice" class="form-control" type="text" placeholder="Last Per Price">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Barcode :</label>
                                            <input name="barcode" class="form-control" type="text" placeholder="Barcode">
                                        </div>
                                    </div>

											<!--form body end -->
											
											
                                          </div>
                                          <div class="modal-footer">
<!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
                                              <button name="submit" class="btn btn-default px-4" type="submit">Save</button>
                                          </div>
                                      </div>
                                  </div>
                              </form>
                          </div>
        <!-- modal end -->
        <?php 
            $select = 'SELECT * FROM item_info';
            $query = $con->query($select);
            $result = $query->fetch_all(MYSQLI_ASSOC);
        ?>
                    <div class="ibox-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>

                                <tr>
                                    <th width="50px">SL</th>
                                    <th>Item Code</th>
                                    <th>Catagory Id</th>
                                    <th>Unit</th>
                                    <th>Unit Price</th>
                                    <th>Last Per Price </th>
                                    <th>Barcode</th>
                                    <th>Create At</th>
                                    <th>Update At</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($result as $value): ?>
                                        <tr>
                                            <td><?= $value['id']; ?></td>
                                            <td><?= $value['item_code']; ?></td>
                                            <td><?= $value['catagory_id']; ?></td>
                                            <td><?= $value['unit']; ?></td>
                                            <td><?= $value['unit_price']; ?></td>
                                            <td><?= $value['last_pur_price']; ?></td>
                                            <td><?= $value['barcode']; ?></td>
                                            <td><?= $value['create_at']; ?></td>
                                            <td><?= $value['update_at']; ?></td>
                                            <td> 
                                                <a href="edit_item_info.php?id=<?= $value['id']; ?>" 
                                                class="btn btn-default btn-xs m-r-5">
                                                    <i class="fa fa-pencil font-14"></i>
                                                </a>
                                                
                                                <a href="delete_item_info.php?id=<?= $value['id']; ?>" 
                                                class="btn btn-default btn-xs m-r-5">
                                                    <i class="fa fa-trash font-14"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>        
=======
                        <!-- modal button -->
                        <div class="ibox-head justify-content-end">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#DonorAdd">
                                Add Item
                            </button>
                        </div>
                        <!-- modal button end -->

                        <!-- modal start -->
                        <div class="modal fade" id="DonorAdd" tabindex="-1" role="dialog" aria-labelledby="DonorAdd" aria-hidden="true">
                            <form action="" method="POST">
                                <div class="modal-dialog modal-lg" role="">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Item</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <!--form body start here-->
                                            <div class="row">
                                                <div class="col-sm-6 form-group">
                                                    <label>Item Code : </label>
                                                    <input name="icode" class="form-control" type="text" placeholder="Item Code">
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Select Category</label>
                                                        <select name="catid" class="form-control select2_style1" style="width: 100%;">
                                                            <option value="1">Category 1</option>
                                                            <option value="2">Category 2</option>
                                                            <option value="3">Category 3</option>
                                                            <option value="4">Category 4</option>
                                                            <option value="5">Category 5</option>
                                                            <option value="6">Category 6</option>
                                                            <option value="7">Category 7</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 form-group">
                                                    <label>Unit : </label>
                                                    <input name="unit" class="form-control" type="text" placeholder="Unit">
                                                </div>
                                                <div class="col-sm-6 form-group">
                                                    <label>Unit Price :</label>
                                                    <input name="uprice" class="form-control" type="text" placeholder="Unit Price">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 form-group">
                                                    <label>Last Per Price :</label>
                                                    <input name="lpprice" class="form-control" type="text" placeholder="Last Per Price">
                                                </div>
                                                <div class="col-sm-6 form-group">
                                                    <label>Barcode :</label>
                                                    <input name="barcode" class="form-control" type="text" placeholder="Barcode">
                                                </div>
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

                        <div class="ibox-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th width="50px">SL</th>
                                        <th>Item Code</th>
                                        <th>Catagory Id</th>
                                        <th>Unit</th>
                                        <th>Unit Price</th>
                                        <th>Last Per Price </th>
                                        <th>Barcode</th>
                                        <th>Create At</th>
                                        <th>Update At</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php foreach($result as $value): ?>
                                        <tr>
                                            <td><?= $value['id']; ?></td>
                                            <td><?= $value['item_code']; ?></td>
                                            <td><?= $value['catagory_id']; ?></td>
                                            <td><?= $value['unit']; ?></td>
                                            <td><?= $value['unit_price']; ?></td>
                                            <td><?= $value['last_pur_price']; ?></td>
                                            <td><?= $value['barcode']; ?></td>
                                            <td><?= $value['create_at']; ?></td>
                                            <td><?= $value['update_at']; ?></td>
                                            <td>
                                                <a href="edit_item_info.php?id=<?= $value['id']; ?>" class="btn btn-default btn-xs m-r-5">
                                                    <i class="fa fa-pencil font-14"></i>
                                                </a>
                                                <a href="delete_item_info.php?id=<?= $value['id']; ?>" class="btn btn-default btn-xs m-r-5">
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
>>>>>>> 8b3af10cd1c569a54d03f4fefe34e4d0561faf4a
                </div>
            </div>
    
<?php include ("./footer.php"); ?>