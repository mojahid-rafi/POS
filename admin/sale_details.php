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
                                    <div class="ibox-body">
                                                        
                                        <div class="row">
                                            <div class="col-sm-6 form-group">

                                                <label class="">Select Customer</label>
                                                    <select name="brand_id" class="form-control select2_style1" style="width: 100%;">
                                                    <option disabled selected value="0">Select Custoemr</option>
                                                    <?php 
                                                        $select = "SELECT * FROM customers";
                                                        $query = $con->query($select);
                                                        $result = $query->fetch_all(MYSQLI_ASSOC);
                                                            foreach($result as $value): ?>
                                                                <option value="<?= $value['id']; ?>"><?= $value['party_name']; ?></option>
                                                            <?php endforeach; ?>
                                                    </select>

                                            </div>
                                            <div class="col-sm-6 form-group">
                                                <label>Sale Date : </label>
                                                <input name="sale_date" class="form-control" type="date" placeholder="dd/mm/yyyy">
                                            </div>
                                        </div>
                                    </div>
                            </form>
        </div> 
    </div>
</div>


 
            <div class="row">
                <div class="col-md-8">
                    <div class="ibox">
                        <div class="modal fade" id="DonorAdd" tabindex="-1" role="dialog" aria-labelledby="DonorAdd" aria-hidden="true">

                            <form action="" method="POST">
                                <button type="button" class="close" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                    <div class="ibox-body">              
                                        <div class="row">
                                            <div class="container shadow min-vh-100 py-4">
                                                <div class="row">
                                                    <div class="col-md-6 mx-auto">

                                                        <div class="input-group">
                                                            <input class="form-control border-end-0 border rounded-pill" type="search" value="search"                                           id="example-search-input">
                                                            <span class="input-group-append">
                                                                <button class="btn btn-outline-secondary bg-white border-bottom-0 border rounded-pill ms-n5"type="button">
                                                                    <i class="fa fa-search"></i>
                                                                </button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>  
                                                <div class="row">
                                            <div class="col-sm-12 form-group">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                    <th scope="col">Product</th>
                                                    <th scope="col">Unit price</th>
                                                    <th scope="col">Quantity</th>
                                                    <th scope="col">Discount</th>
                                                    <th scope="col">Tax</th>
                                                    <th scope="col">Price inc.tax</th>
                                                    <th scope="col">Subtotal</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Phone</td>
                                                        <td>1</td>
                                                        <td>10000</td>
                                                        <td>100</td>
                                                        <td>150</td>
                                                        <td>50</td>
                                                        <td>10250</td>
                                                    </tr>
                                                </tbody>
                                            </table>    
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div>
                            </form>
                        </div>               
                    </div>
                 </div>
            </div>
        </div>


        <div class="page-content fade-in-up">
            <div class="row">
                <div class="col-md-4">
                    <div class="ibox">
                        <div class="modal fade" id="DonorAdd" tabindex="-1" role="dialog" aria-labelledby="DonorAdd" aria-hidden="true">
                            <form action="" method="POST">
                                <button type="button" class="close" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                    <div class="ibox-body">
                                                        
                                        <div class="row">
                                            <div class="offset-1 col-sm-2 form-group">
                                                <label>Total </label>
                                                <input name="customer" class="form-control" type="text" placeholder="">
                                            </div>
                                            <div class="col-sm-2 form-group">
                                                <label>Discount </label>
                                                <input name="sale_date" class="form-control" type="text">
                                            </div>
                                            <div class="col-sm-2 form-group">
                                                <label>Payable </label>
                                                <input name="pay_method" class="form-control" type="text">
                                            </div>
                                            <div class="col-sm-2 form-group">
                                                <label>Paid </label>
                                                <input name="pay_account" class="form-control" type="text">
                                            </div>
                                            <div class="col-sm-2 form-group">
                                                <label>Refund </label>
                                                <input name="refund" class="form-control" type="text">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    
<?php include ("./footer.php"); ?>