<?php include ("./header.php"); ?>
<?php require ("./src/database.php"); ?>

    <div class="content-wrapper">
        <!-- START PAGE CONTENT-->
        <div class="page-heading">
            <h1 class="page-title">Sale Master</h1>
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
                 $paymode = $_POST['saledate'];
                 $innumber = $_POST['innumber'];
                 $pid = $_POST['pid'];
                 $phone = $_POST['phone'];
                 $email = $_POST['email'];
                 $ptype = $_POST['ptype'];
                 $total = $_POST['total'];
                 $discount = $_POST['discount'];
                 $payable = $_POST['payable'];
                 $paid = $_POST['paid'];
                 $refund = $_POST['refund'];
                 $due = $_POST['due'];
                 $paymode = $_POST['paymode'];

                
                $insert = "INSERT INTO `sale_mastr`(`inv_no`, `p_id`, `phone`, `email`, `product_type`, `total`, `discount`, `payable`, `paid`, `refund`, `due`, `pay_mode`, `sale_date`) VALUES ('{$innumber}', '{$pid}', '{$phone}', '{$email}', '{$ptype}', '{$total}', '{$discount}', '{$payable}', '{$paid}', '{$refund}','{$due}', '{$paymode}', '{$paymode}')";
                $con->query($insert);


            };
        ?>




        <div class="page-content fade-in-up">
            <div class="row">
                <div class="col-md-12">
                    <div class="ibox">
        <!-- modal button -->
        <div class="ibox-head justify-content-end">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#DonorAdd">
                Add Sale Master
            </button>
        </div>
        <!-- modal button end -->

        <!-- modal start -->
        <div class="modal fade" id="DonorAdd" tabindex="-1" role="dialog" aria-labelledby="DonorAdd" aria-hidden="true">
                              <form action="" method="POST">
                                  <div class="modal-dialog modal-lg" role="document">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <h5 class="modal-title" id="exampleModalLabel">Sale Master</h5>
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
                                            <label>Product  Id : </label>
                                            <input name="pid" class="form-control" type="text" placeholder="product Id">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Phone : </label>
                                            <input name="phone" class="form-control" type="text" placeholder="Phone Number">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Email : </label>
                                            <input name="email" class="form-control" type="email" placeholder="Email">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Product Type :</label>
                                            <input name="ptype" class="form-control" type="text" placeholder="Product Type">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Total :</label>
                                            <input name="total" class="form-control" type="text" placeholder="Total">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Discount :</label>
                                            <input name="discount" class="form-control" type="text" placeholder="Discount">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Payable :</label>
                                            <input name="payable" class="form-control" type="text" placeholder="Payable">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Paid :</label>
                                            <input name="paid" class="form-control" type="text" placeholder="Paid">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Refund :</label>
                                            <input name="refund" class="form-control" type="text" placeholder="refund">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Due :</label>
                                            <input name="due" class="form-control" type="text" placeholder="Due">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Pay Mode :</label>
                                            <input name="paymode" class="form-control" type="text" placeholder="Pay Mode">
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
            $select = 'SELECT * FROM sale_mastr';
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
                                    <th>Product Id </th>
                                    <th>Phone </th>
                                    <th>Email </th>
                                    <th>Product Type</th>
                                    <th>Total</th>
                                    <th>Discount </th>
                                    <th>Payable </th>
                                    <th>Paid </th>
                                    <th>Refund </th>
                                    <th>Due </th>
                                    <th>Pay Mode </th>
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
                                <td><?= $value['p_id']; ?></td>
                                <td><?= $value['phone']; ?></td>
                                <td><?= $value['email']; ?></td>
                                <td><?= $value['product_type']; ?></td>
                                <td><?= $value['total']; ?></td>
                                <td><?= $value['discount']; ?></td>
                                <td><?= $value['payable']; ?></td>
                                <td><?= $value['paid']; ?></td>
                                <td><?= $value['refund']; ?></td>
                                <td><?= $value['due']; ?></td>
                                <td><?= $value['pay_mode']; ?></td>
                                <td><?= $value['sale_date']; ?></td>
                                <td><?= $value['create_at']; ?></td>
                                <td><?= $value['update_at']; ?></td>
                                <td> 
                                    <a href="edit_sale_master.php?id=<?= $value['id']; ?>" class="btn btn-default btn-xs m-r-5"><i class="fa fa-pencil font-14"></i></a><br><br>



                                    <a href="delete_sale_master.php?id=<?= $value['id']; ?>" class="btn btn-default btn-xs m-r-5"><i class="fa fa-trash font-14"></i></a>
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