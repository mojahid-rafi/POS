<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Dashboard - Blood Club Management System By Team Error</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="./assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="./assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="./assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet"/>
    <!-- PLUGINS STYLES-->
    <link href="./assets/vendors/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet"/>
    <link href="./assets/vendors/select2/dist/css/select2.min.css" rel="stylesheet"/>
    <link href="./assets/vendors/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css" rel="stylesheet"/>
    <link href="./assets/vendors/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet"/>
    <link href="./assets/vendors/jquery-minicolors/jquery.minicolors.css" rel="stylesheet"/>
    <!-- THEME STYLES-->
    <link href="assets/css/main.min.css" rel="stylesheet"/>
    <!-- PAGE LEVEL STYLES-->

</head>

<body class="fixed-navbar">
<div class="page-wrapper">
    <!-- START HEADER-->
    <header class="header">
        <div class="page-brand">
            <a class="link" href="index.html">
                    <span class="brand">Donor
                        <span class="brand-tip">Management</span>
                    </span>
                <span class="brand-mini">BCM</span>
            </a>
        </div>
        <div class="flexbox flex-1">
            <!-- START TOP-LEFT TOOLBAR-->
            <ul class="nav navbar-toolbar">
                <li>
                    <a class="nav-link sidebar-toggler js-sidebar-toggler"><i class="ti-menu"></i></a>
                </li>
                <li>
                    <form class="navbar-search" action="javascript:;">
                        <div class="rel">
                            <span class="search-icon"><i class="ti-search"></i></span>
                            <input class="form-control" placeholder="Search here...">
                        </div>
                    </form>
                </li>
            </ul>
            <!-- END TOP-LEFT TOOLBAR-->
            <!-- START TOP-RIGHT TOOLBAR-->
            <ul class="nav navbar-toolbar">
                <li class="dropdown dropdown-user">
                    <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                        <img src="./assets/img/admin-avatar.png"/>
                        <span></span>Admin<i class="fa fa-angle-down m-l-5"></i></a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#"><i class="fa fa-user"></i>Profile</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-cog"></i>Settings</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-support"></i>Support</a>
                        <li class="dropdown-divider"></li>
                        <a class="dropdown-item" href="#"><i class="fa fa-power-off"></i>Logout</a>
                    </ul>
                </li>
            </ul>
            <!-- END TOP-RIGHT TOOLBAR-->
        </div>
    </header>
    <!-- END HEADER-->
    <!-- START SIDEBAR-->
    <nav class="page-sidebar" id="sidebar">
        <div id="sidebar-collapse">
            <div class="admin-block d-flex">
                <div>
                    <img src="./assets/img/admin-avatar.png" width="45px"/>
                </div>
                <div class="admin-info">
                    <div class="font-strong">Team Error</div>
                    <small>Administrator</small>
                </div>
            </div>
            <ul class="side-menu metismenu">
                <li>
                    <a class="active" href="./dashboard.php"><i class="sidebar-item-icon fa fa-th-large"></i>
                        <span class="nav-label">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:;"><i class="sidebar-item-icon fa fa-bookmark"></i>
                        <span class="nav-label">Donor Management</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-2-level collapse">
                        <li>
                            <a href="./add-blood-donor.php">Add New Donor</a>
                        </li>
                        <li>
                            <a href="./add-blood-donation.php">Add Donation</a>
                        </li>
                        <li>
                            <a href="./blood_donation.php">Blood Donation</a>
                        </li>
                        <li>
                            <a href="./blood_request.php">Blood Request</a>
                        </li>
                        <li>
                            <a href="./blood_club_info.php">Blood Club Info</a>
                        </li>
                        <li>
                            <a href="./feedback.php">Feedback</a>
                        </li>
                        <li>
                            <a href="./campaign_request.php">Campaign Request</a>
                        </li>
                    </ul>
                </li>

                <li class="heading">Samples</li>
                <li>
                    <a href="javascript:;"><i class="sidebar-item-icon fa fa-bookmark"></i>
                        <span class="nav-label">UI Sample</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-2-level collapse">
                        <li>
                            <a href="./form_basic.php">Form Basic</a>
                        </li>
                        <li>
                            <a href="./blank.php">Blank Page</a>
                        </li>
                        <li>
                            <a href="./form_advanced.php">Form advanced</a>
                        </li>
                        <li>
                            <a href="./form_masks.php">Form masks</a>
                        </li>
                    </ul>
                </li>


            </ul>
        </div>
    </nav>
    <!-- END SIDEBAR-->