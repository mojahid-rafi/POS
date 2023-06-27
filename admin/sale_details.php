<?php include ("./header.php"); ?>

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
                                            <input name="saleprice" class="form-control" type="email" placeholder="Sale Price">
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
                                            <input name="Totaldis" class="form-control" type="text" placeholder="Total Discount">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Vat :</label>
                                            <input name="vat" class="form-control" type="text" placeholder="Vat">
                                        </div>
                                    </div>

											<!--form body end -->
											
											
                                          </div>
                                          <div class="modal-footer">
<!--                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
                                              <button class="btn btn-default px-4" type="submit">Save</button>
                                          </div>
                                      </div>
                                  </div>
                              </form>
                          </div>
        <!-- modal end -->
                    </div>        
                </div>
            </div>
        </div>
    
<?php include ("./footer.php"); ?>