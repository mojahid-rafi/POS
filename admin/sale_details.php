<?php include ("./header.php"); ?>
<?php require ("./src/database.php"); ?>

    <div class="content-wrapper">
        <!-- START PAGE CONTENT-->
        <div class="page-heading">
            <h1 class="page-title">Sale Details</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="dashboard.php"><i class="la la-home font-20"></i></a>
                </li>
               <!-- <li class="breadcrumb-item"></li>-->
            </ol>
        </div>

        <!--    Enter Your Content Here-->

        <!-- FEW PROBLEM IN INSERT OPTION START -->


        <?php
            if (isset($_POST['submit'])){
                 $saledate = $_POST['saledate'];
                 $innumber = $_POST['innumber'];
                 $itemid = $_POST['itemid'];
                 $saleprice = $_POST['saleprice'];
                 $quentity = $_POST['quentity'];
                 $discount = $_POST['discount'];
                 $totaldis = $_POST['totaldis'];
                 $total = $_POST['total'];
                 $vat = $_POST['vat'];

                
                $insert = "INSERT INTO `sale_details`(`inv_no`, `sale_mstr_id`, `item_id`, `sale_price`, `qty`, `discount`, `total_dis`, `vat`, `total`, `sale_date`) VALUES ('{$innumber}', `sale_mstr_id`, '{$itemid}', '{$saleprice}', '{$quentity}', '{$discount}', '{$totaldis}', '{$vat}', '{$total}', '{$saledate}')";
                $con->query($insert);


            };
        ?>

          <!-- FEW PROBLEM IN INSERT OPTION END -->



        <div class="page-content fade-in-up">
            <div class="row">
                <div class="col-md-12">
                    <div class="ibox">
        <!-- modal button -->
        <div class="ibox-head justify-content-end">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#DonorAdd">
            Add Sale Details
            </button>
        </div>
        <!-- modal button end -->

        <!-- modal start -->
        <div class="modal fade" id="DonorAdd" tabindex="-1" role="dialog" aria-labelledby="DonorAdd" aria-hidden="true">
                              <form action="" method="POST">
                                  <div class="modal-dialog modal-lg" role="document">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <h5 class="modal-title" id="exampleModalLabel">Details</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                              </button>
                                          </div>
                                          <div class="modal-body">
										  
										  <!--form body start here-->
										  
										  
										  
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Sale Date : </label>
                                            <input name="saledate" class="form-control" type="date" placeholder="Sale Date">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Invoice Number : </label>
                                            <input name="innumber" class="form-control" type="text" placeholder="Invoice Number">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Item Id : </label>
                                            <input name="itemid" class="form-control" type="text" placeholder="Item Id">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Sale price : </label>
                                            <input name="saleprice" class="form-control" type="text" placeholder="Sale Price">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Quentity :</label>
                                            <input name="quentity" class="form-control" type="text" placeholder="Quentity">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Discount :</label>
                                            <input name="discount" class="form-control" type="text" placeholder="Discount">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Total Discount :</label>
                                            <input name="totaldis" class="form-control" type="text" placeholder="Total Discount">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Vat :</label>
                                            <input name="vat" class="form-control" type="text" placeholder="Vat">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 form-group">
                                            <label>Total :</label>
                                            <input name="total" class="form-control" type="text" placeholder="Total ">
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
            $select = 'SELECT * FROM sale_details';
            $query = $con->query($select);
            $result = $query->fetch_all(MYSQLI_ASSOC);
        ?>




                    <div class="ibox-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>

                                <tr>
                                    <th width="50px">SL</th>
                                    <th>Sale Date</th>
                                    <th>Invoice Number </th>
                                    <th>Item Id </th>
                                    <th>Sale price </th>
                                    <th>Quentity </th>
                                    <th>Discount</th>
                                    <th>Total Discount</th>
                                    <th>Vat </th>
                                    <th>Total </th>
                                    <th>Create At</th>
                                    <th>Update At</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php foreach($result as $value): ?>
                            <tr>
                                <td><?= $value['id']; ?></td>
                                <td><?= $value['sale_date']; ?></td>
                                <td><?= $value['inv_no']; ?></td>
                                <td><?= $value['item_id']; ?></td>
                                <td><?= $value['sale_price']; ?></td>
                                <td><?= $value['qty']; ?></td>
                                <td><?= $value['discount']; ?></td>
                                <td><?= $value['total_dis']; ?></td>
                                <td><?= $value['vat']; ?></td>
                                <td><?= $value['total']; ?></td>
                                <td><?= $value['create_at']; ?></td>
                                <td><?= $value['update_at']; ?></td>
                                <td> 
                                    <a href="editcustomer.php?id=<?= $value['id']; ?>" class="btn btn-default btn-xs m-r-5"><i class="fa fa-pencil font-14"></i></a><br><br>



                                    <a href="delete_sale_details.php?id=<?= $value['id']; ?>" class="btn btn-default btn-xs m-r-5"><i class="fa fa-trash font-14"></i></a>
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