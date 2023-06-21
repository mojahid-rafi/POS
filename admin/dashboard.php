<?php include ("./header.php"); ?>

    <div class="content-wrapper">

    <!-- START PAGE CONTENT-->
    <div class="page-content fade-in-up">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="ibox bg-success color-white widget-stat">
                    <div class="ibox-body">
                        <h2 class="m-b-5 font-strong">10</h2>
                        <div class="m-b-5">Blood Request</div><i class="ti-shopping-cart widget-stat-icon"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="ibox bg-info color-white widget-stat">
                    <div class="ibox-body">
                        <h2 class="m-b-5 font-strong">25</h2>
                        <div class="m-b-5">New Donor</div><i class="ti-bar-chart widget-stat-icon"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="ibox bg-warning color-white widget-stat">
                    <div class="ibox-body">
                        <h2 class="m-b-5 font-strong">1570</h2>
                        <div class="m-b-5">Total Donor</div><i class="fa fa-heart widget-stat-icon"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="ibox bg-danger color-white widget-stat">
                    <div class="ibox-body">
                        <h2 class="m-b-5 font-strong">3</h2>
                        <div class="m-b-5">Campaign Request</div><i class="ti-user widget-stat-icon"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="ibox">
                    <div class="ibox-body">
                        <div class="flexbox mb-4">
                            <div>
                                <h3 class="m-0">Statistics</h3>
                            </div>
                            <div class="d-inline-flex">
                                <div class="px-3" style="border-right: 1px solid rgba(0,0,0,.1);">
                                    <div class="text-muted">WEEKLY INCOME</div>
                                    <div>
                                        <span class="h2 m-0">$850</span>
                                        <span class="text-success ml-2"><i class="fa fa-level-up"></i> +25%</span>
                                    </div>
                                </div>
                                <div class="px-3">
                                    <div class="text-muted">WEEKLY SALES</div>
                                    <div>
                                        <span class="h2 m-0">240</span>
                                        <span class="text-warning ml-2"><i class="fa fa-level-down"></i> -12%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <canvas id="bar_chart" style="height:260px;"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Blood Group Wise Donor</div>
                    </div>
                    <div class="ibox-body">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <canvas id="doughnut_chart" style="height:160px;"></canvas>
                            </div>
                        </div>
                        <ul class="list-group list-group-divider list-group-full">
                            <li class="list-group-item">A Positive (A+) :
                                <span class="float-right"><i class="fa fa-caret-up"></i> 24%</span>
                            </li>
                            <li class="list-group-item">A Negative (A-) :
                                <span class="float-right"><i class="fa fa-caret-up"></i> 12%</span>
                            </li>
                            <li class="list-group-item">B Positive (B+) :
                                <span class="float-right"><i class="fa fa-caret-down"></i> 4%</span>
                            </li>
                            <li class="list-group-item">B Negative (B-) :
                                <span class="float-right"><i class="fa fa-caret-down"></i> 4%</span>
                            </li>
                            <li class="list-group-item">O Positive (O+) :
                                <span class="float-right"><i class="fa fa-caret-down"></i> 4%</span>
                            </li>
                            <li class="list-group-item">O  Negative (O-) :
                                <span class="float-right"><i class="fa fa-caret-down"></i> 4%</span>
                            </li>
                            <li class="list-group-item">AB Positive (AB+) :
                                <span class="float-right"><i class="fa fa-caret-down"></i> 4%</span>
                            </li>
                            <li class="list-group-item">AB Negative (AB-) :
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