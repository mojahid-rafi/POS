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

        <div class="page-content fade-in-up">
            <div class="row">
                <div class="col-md-12">
                    <div class="ibox">
                        <div class="modal fade" id="DonorAdd" tabindex="-1" role="dialog" aria-labelledby="DonorAdd" aria-hidden="true">
                            <form action="" method="POST">
                                <button type="button" class="close" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                    <div class="modal-body">
                                                        
                                        <div class="row">
                                            <div class="col-sm-6 form-group">
                                                <label>Customer : </label>
                                                <input name="customer" class="form-control" type="text" placeholder="">
                                            </div>
                                            <div class="col-sm-6 form-group">
                                                <label>Sale Date : </label>
                                                <input name="sale_date" class="form-control" type="text">
                                            </div>
                                        </div>
                                    </div>
                            </form>
        </div> 
    </div>
</div>


        <div class="page-content fade-in-up">
            <div class="row">
                <div class="col-md-12">
                    <div class="ibox">
                        <div class="modal fade" id="DonorAdd" tabindex="-1" role="dialog" aria-labelledby="DonorAdd" aria-hidden="true">

                            <form action="" method="POST">
                                <button type="button" class="close" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                    <div class="modal-body">              
                                        <div class="row">
                                            <div class="container shadow min-vh-100 py-4">
                                                <div class="row">
                                                    <div class="col-md-5 mx-auto">
                                                        <div class="small fw-light">search input with icon</div>
                                                        <div class="input-group">
                                                            <input class="form-control border-end-0 border rounded-pill" type="search" value="search"                                           id="example-search-input">
                                                            <span class="input-group-append">
                                                                <button class="btn btn-outline-secondary bg-white border-bottom-0 border rounded-pill ms-n5"                                            type="button">
                                                                    <i class="fa fa-search"></i>
                                                                </button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>


                                            <div class="col-sm-6 form-group">
                                                <label>Sale Date : </label>
                                                <input name="sale_date" class="form-control" type="text">
                                            </div>
                                        </div>
                                    </div>
                            </form>
                </div>
            </div>
        </div>


        <div class="page-content fade-in-up">
            <div class="row">
                <div class="col-md-12">
                    <div class="ibox">
                        <div class="modal fade" id="DonorAdd" tabindex="-1" role="dialog" aria-labelledby="DonorAdd" aria-hidden="true">
                            <form action="" method="POST">
                                <button type="button" class="close" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                    <div class="modal-body">
                                                        
                                        <div class="row">
                                            <div class="col-sm-6 form-group">
                                                <label>Amount </label>
                                                <input name="customer" class="form-control" type="text" placeholder="">
                                            </div>
                                            <div class="col-sm-6 form-group">
                                                <label>Paid on </label>
                                                <input name="sale_date" class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-sm-6 form-group">
                                                <label>Payment Method </label>
                                                <input name="pay_method" class="form-control" type="text">
                                            </div>
                                            <div class="col-sm-6 form-group">
                                                <label>Payment Account </label>
                                                <input name="pay_account" class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-sm-12 form-group">
                                                <label>Payment note </label>
                                                <textarea name="pay_note" id="" cols="1" rows="3" class="form-control" ></textarea>
                                            </div>
                                        </div>
                                    </div>
                            </form>
        </div> 
    </div>
</div>
    
<?php include ("./footer.php"); ?>