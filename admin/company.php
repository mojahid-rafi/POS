<?php include("./header.php"); ?>
<?php require("./src/database.php"); ?>

<div class="content-wrapper">
    <!-- START PAGE CONTENT-->
    <div class="page-heading">
        <!-- <h1 class="page-title">Company Information</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="dashboard.php"><i class="la la-home font-20"></i></a>
            </li>
        </ol> -->
    </div>
    <!--    Enter Your Content Here-->
    <?php
    if (isset($_POST['submit'])) {
        $comname = $_POST['comname'];
        $address = $_POST['address'];
        $comweb = $_POST['comweb'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $rheader = $_POST['rheader'];
        $rpolicy = $_POST['rpolicy'];

        $file = $_FILES['logo'];

        $fileName = rand(10000, 99999) . "-" . time() . ".png";
        move_uploaded_file($file['tmp_name'], "_uploads/" . $fileName);

        $insert = "INSERT INTO `company`(`comname`, `address`, `comweb`, `phone`, `email`, `image`, `rheader`, `rpolicy`) VALUES ('{$comname}', '{$address}', '{$comweb}', '{$phone}', '{$email}', '{$fileName}', '{$rheader}', '{$rpolicy}')";
        $con->query($insert);

    }
    ?>

    <?php
    $select = "SELECT * FROM company";
    $query = $con->query($select);
    $fetch = $query->fetch_all(MYSQLI_ASSOC);

    foreach ($fetch as $row) {
    }
    ?>

    <div class="page-content fade-in-up">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-7">
                    <div class="ibox">
                        <div class="ibox-head">
                            <div class="ibox-title">
                                Company Information
                            </div>
                        </div>
                        <div class="ibox-body">
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label>Company Name : </label>
                                    <input name="comname" class="form-control" type="text"
                                        value="<?php echo $row['comname']; ?>" placeholder="Name" required>
                                </div>

                                <div class="col-sm-6 form-group">
                                    <label>Company Address : </label>
                                    <textarea name="address" id="" cols="2" rows="1" class="form-control"
                                        placeholder="Full Address"><?php echo $row['address']; ?></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label>Phone :</label>
                                    <input name="phone" class="form-control" type="text" placeholder="Phone"
                                        value="<?php echo $row['phone']; ?>">
                                </div>

                                <div class="col-sm-6 form-group">
                                    <label>Email :</label>
                                    <input name="email" class="form-control" type="email" placeholder="Email Address"
                                        value="<?php echo $row['email']; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label>Report Header :</label>
                                    <input name="rheader" class="form-control" type="text" placeholder="Report Header"
                                        value="<?php echo $row['rheader']; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label>Return Policy :</label>
                                    <textarea name="rpolicy" id="rpolicy" cols="2" rows="3" class="form-control"
                                        placeholder="Return Police"><?php echo $row['rpolicy']; ?></textarea>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Company Website : </label>
                                    <input name="comweb" class="form-control" type="text" placeholder="Company Website"
                                        value="<?php echo $row['comweb']; ?>">
                                </div>

                            </div>
                            <input type="submit" value="Update" name="submit" class="btn btn-success mt-2">
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="ibox">
                        <div class="ibox-head">
                            <div class="ibox-title">
                                Company Logo
                            </div>
                        </div>
                        <div class="ibox-body">
                            <div class="col-sm-12 form-group mx-auto">
                                <div>
                                    <img class="img-thumbnail rounded mx-auto d-block" width="350px"
                                        src="./_uploads/logo.png" alt="">
                                </div>
                            </div>
                            <div class="col-sm-12 form-group">
                                <input name="logo" class="form-control" type="file">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <?php include("./footer.php"); ?>