<?php
include("./header.php");
require "../src/database.php";

$db = new MysqliDb();

?>

    <div class="content-wrapper">
    <!-- START PAGE CONTENT-->
    <div class="page-heading">
        <h1 class="page-title">Donor Registration Form</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="dashboard.php"><i class="la la-home font-20"></i></a>
            </li>
            <!-- <li class="breadcrumb-item"></li>-->
        </ol>
    </div>

<?php

    if (isset($_POST['submit'])) {

        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $alt_phone = $_POST['alt_phone'];
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];
        $bgroup = $_POST['blood_group'];
        $division = $_POST['division'];
        $district = $_POST['district'];
        $thana = $_POST['thana'];
        $area = $_POST['area'];
        $dob = $_POST['dob'];
        $sts = $_POST['sts'];
        $gender = $_POST['gender'];


        $sql = "INSERT INTO donors_info(name,gender,blood_group,dob,division_id,district_id,thana_id,area,email,phone,alt_phone,pwd,sts,club_id) values ('{$name}','{$gender}','{$bgroup}','{$dob}','{$division}','{$district}','{$thana}','{$area}','{$email}','{$phone}','{$alt_phone}','{$pwd}','{$sts}','');";
        $con->query($sql);
//        echo $sql;
    };

    ?>

    <!--    Enter Your Content Here-->
    <?php
    $qry = "SELECT * FROM donors_info";
    $DonorsInfo = $con->query($qry);
    $Donors = $DonorsInfo->fetch_all(MYSQLI_ASSOC);

    ?>


    <div class="page-content fade-in-up">
        <div class="row">
            <div class="col-md-12">
                <div class="ibox">
                    <!-- Do you work here-->
                    <div class="ibox-head justify-content-end">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#DonorAdd">
                            Add Donor
                        </button>
                    </div>


                    <div class="ibox-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>

                                <tr>
                                    <th width="50px">SL</th>
                                    <th>Donor Name</th>
                                    <th>Blood Group</th>
                                    <th>Phone</th>
                                    <th>Area</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>

                                <tbody>
                                <?php foreach ($Donors as $donor): ?>
                                    <tr>
                                        <td> <?= $donor['id']; ?></td>
                                        <td> <?= $donor['name']; ?></td>
                                        <td> <?= $donor['blood_group']; ?></td>
                                        <td> <?= $donor['phone']; ?></td>
                                        <td> <?= $donor['area']; ?></td>
                                        <td> <?= $donor['sts']; ?></td>
                                        <td>
                                            <a href="?id=<?= $donor['id']; ?>" class="btn btn-default btn-xs m-r-5"><i
                                                        class="fa fa-pencil font-14"></i></a>
                                            <a href="?id=<?= $donor['id']; ?>" class="btn btn-default btn-xs m-r-5"><i
                                                        class="fa fa-trash font-14"></i></a>

                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="DonorAdd" tabindex="-1" role="dialog" aria-labelledby="DonorAdd"
                             aria-hidden="true">
                            <form action="" method="POST">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add New Blood Donor</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-6 form-group">
                                                    <label>Blood Group</label>
                                                    <select name="blood_group" id="blood group" class="form-control">
                                                        <option value="">--- Select Blood Group ---</option>
                                                        <option value="A positive">A Positive (A+)</option>
                                                        <option value="A  negative">A Negative (A-)</option>
                                                        <option value="B positive">B Positive (B+)</option>
                                                        <option value="B negative">B Negative (B-)</option>
                                                        <option value="O positive">O Positive (O+)</option>
                                                        <option value="O negative">O Negative (O-)</option>
                                                        <option value="AB positive">AB Positive (AB+)</option>
                                                        <option value="AB negative">AB Negative (AB-)</option>
                                                    </select>
                                                </div>

                                                <div class="col-sm-6 form-group">
                                                    <label>Name</label>
                                                    <input name="name" class="form-control" type="text"
                                                           placeholder="Name">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label for="">Gender</label>
                                                    <SELect class="form-control" name="gender">
                                                        <option value="Ready">--- Select Gender ---</option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                    </SELect>
                                                </div>

                                                <div class="col-sm-6 form-group">
                                                    <label for="dob">DOB</label>
                                                    <input type="date" class="form-control" name="dob" id="dob">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-6 form-group">
                                                    <label>Primary Phone</label>
                                                    <input name="phone" class="form-control" type="text" placeholder="Primary Contact">
                                                </div>

                                                <div class="col-sm-6 form-group">
                                                    <label>Alternate Phone</label>
                                                    <input name="alt_phone" class="form-control" type="text"
                                                           placeholder="Alternate Contact">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-12 form-group">
                                                    <label>Email</label>
                                                    <input name="email" class="form-control" type="email"
                                                           placeholder="Email address">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-6 form-group">
                                                    <label for="division">Division</label>
                                                    <select name="division" id="division" class="form-control">
                                                        <option value="">--- Select Division ---</option>
                                                        <option value="Dhaka">Dhaka</option>
                                                        <option value="Barisal">Barisal</option>
                                                        <option value="Chittagong">Chittagong</option>
                                                        <option value="Khulna">Khulna</option>
                                                        <option value="Mymensingh">Mymensingh</option>
                                                        <option value="Rajshahi">Rajshahi</option>
                                                        <option value="Rangpur">Rangpur</option>
                                                        <option value="Sylhet">Sylhet</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6 form-group">
                                                    <label for="District">Discrict</label>
                                                    <select name="district" id="district" class="form-control">
                                                        <option value="">--- Select District ---</option>
                                                        <option value="Bagerhat">Bagerhat</option>
                                                        <option value="Bandarban">Bandarban</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-6 form-group">
                                                    <label>Thana/Upzila</label>
                                                    <select name="thana" id="thana" class="form-control">
                                                        <option value="">--- Select Thana ---</option>
                                                        <option value="banani">Banani</option>
                                                        <option value="pallabi">Pallabi</option>
                                                        <option value="badda">Badda</option>
                                                    </select>
                                                </div>

                                                <div class="col-sm-6 form-group">
                                                    <label>Area</label>
                                                    <input name="area" class="form-control" type="text"
                                                           placeholder="Area">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-6 form-group">
                                                    <label>Password</label>
                                                    <input name="pwd" class="form-control" type="password"
                                                           placeholder="Password">
                                                </div>

                                                <div class="col-sm-6 form-group">
                                                    <label for="">Current Status</label>
                                                    <SELect class="form-control" name="sts">
                                                        <option value="">--- Current Status ---</option>
                                                        <option value="Ready">Ready To Donate</option>
                                                        <option value="Not Ready">Waiting For Donate</option>
                                                    </SELect>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <!--                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
                                            <button class="btn btn-default px-4" name="submit" type="submit">Save
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- END PAGE CONTENT-->

<?php include("./footer.php"); ?>