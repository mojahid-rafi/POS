<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    if(!isset($_SESSION['user_name']))
    {
        header("location:login.php");
    }
?>

<?php include ("./header.php"); ?>

    <div class="content-wrapper">

    <!-- START PAGE CONTENT-->
    <div class="page-content fade-in-up">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="ibox bg-success color-white widget-stat">
                    <div class="ibox-body">
                        <h2 class="m-b-5 font-strong">10</h2>
                        <div class="m-b-5">Today's Sale</div><i class="ti-shopping-cart widget-stat-icon"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="ibox bg-info color-white widget-stat">
                    <div class="ibox-body">
                        <h2 class="m-b-5 font-strong">25</h2>
                        <div class="m-b-5">Today's Purchase</div><i class="ti-bar-chart widget-stat-icon"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="ibox bg-warning color-white widget-stat">
                    <div class="ibox-body">
                        <h2 class="m-b-5 font-strong">1570</h2>
                        <div class="m-b-5">Payment Receive</div><i class="fa fa-heart widget-stat-icon"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="ibox bg-danger color-white widget-stat">
                    <div class="ibox-body">
                        <h2 class="m-b-5 font-strong">3</h2>
                        <div class="m-b-5">Today's Expense</div><i class="ti-user widget-stat-icon"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Last 10 Invoice</div>
                    </div>
                    <div class="ibox-body">
                        <ul class="list-group list-group-divider list-group-full">
                            <li class="list-group-item">Invoice No :
                                <span class="float-right">Total:  1860</span>
                            </li>
                            <li class="list-group-item">Invoice No :
                                <span class="float-right">Total:  1670</span>
                            </li>
                            <li class="list-group-item">Invoice No :
                                <span class="float-right">Total:  1540</span>
                            </li>
                            <li class="list-group-item">Invoice No :
                                <span class="float-right">Total:  1390</span>
                            </li>
                            <li class="list-group-item">Invoice No :
                                <span class="float-right">Total:  1980</span>
                            </li>
                            <li class="list-group-item">Invoice No :
                                <span class="float-right">Total:  1690</span>
                            </li>
                            <li class="list-group-item">Invoice No :
                                <span class="float-right">Total:  1250</span>
                            </li>
                            <li class="list-group-item">Invoice No :
                                <span class="float-right">Total:  1120</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Reach ROL</div>
                    </div>
                    <div class="ibox-body">
                        <ul class="list-group list-group-divider list-group-full">
                            <li class="list-group-item">Item Name :
                                <span class="float-right">Stock : 24</span>
                            </li>
                            <li class="list-group-item">Item Name :
                                <span class="float-right">Stock : 12</span>
                            </li>
                            <li class="list-group-item">Item Name :
                                <span class="float-right">Stock : 10</span>
                            </li>
                            <li class="list-group-item">Item Name :
                                <span class="float-right">Stock : 13</span>
                            </li>
                            <li class="list-group-item">Item Name :
                                <span class="float-right">Stock : 17</span>
                            </li>
                            <li class="list-group-item">Item Name :
                                <span class="float-right">Stock : 11</span>
                            </li>
                            <li class="list-group-item">Item Name :
                                <span class="float-right">Stock : 19</span>
                            </li>
                            <li class="list-group-item">Item Name :
                                <span class="float-right">Stock : 22</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Top 10 Customers</div>
                    </div>
                    <div class="ibox-body">
                        <ul class="list-group list-group-divider list-group-full">
                            <li class="list-group-item">Customer Name :
                                <span class="float-right"><i class="fa fa-caret-up"></i> 24%</span>
                            </li>
                            <li class="list-group-item">Customer Name :
                                <span class="float-right"><i class="fa fa-caret-up"></i> 12%</span>
                            </li>
                            <li class="list-group-item">Customer Name :
                                <span class="float-right"><i class="fa fa-caret-down"></i> 4%</span>
                            </li>
                            <li class="list-group-item">Customer Name :
                                <span class="float-right"><i class="fa fa-caret-down"></i> 4%</span>
                            </li>
                            <li class="list-group-item">Customer Name :
                                <span class="float-right"><i class="fa fa-caret-down"></i> 4%</span>
                            </li>
                            <li class="list-group-item">Customer Name :
                                <span class="float-right"><i class="fa fa-caret-down"></i> 4%</span>
                            </li>
                            <li class="list-group-item">Customer Name :
                                <span class="float-right"><i class="fa fa-caret-down"></i> 4%</span>
                            </li>
                            <li class="list-group-item">Customer Name :
                                <span class="float-right"><i class="fa fa-caret-down"></i> 4%</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- END PAGE CONTENT-->


<?php include ("./footer.php"); ?>