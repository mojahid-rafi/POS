<?php include ("./header.php"); ?>

    <div class="content-wrapper">
        <!-- START PAGE CONTENT-->
        <div class="page-heading">
            <h1 class="page-title">Users</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="dashboard.php"><i class="la la-home font-20"></i></a>
                </li>
               <!-- <li class="breadcrumb-item"></li>-->
            </ol>
        </div>

        <!--    Enter Your Content Here-->
        <form action="" method="post">
            <div class="row">
               <div class="col-sm-6 form-group">
                   <label>Name</label>
                   <input name="name" class="form-control" type="text" placeholder="Name">
               </div>
               <div class="col-sm-6 form-group">
                   <label>Phone</label>
                   <input name="phone" class="form-control" type="email" placeholder="Phone">
               </div>
           </div>
           <div class="row">
               <div class="col-sm-6 form-group">
                   <label>Email</label>
                   <input name="email" class="form-control" type="email" placeholder="Email">
               </div>
               <div class="col-sm-6 form-group">
                    <label for="">Password</label>
                   <input name="password" class="form-control " type="password" placeholder="Password">
               </div>
           </div>
           <div class="row">
               <div class="col-sm-6 form-group">
                   <label>Confirm Password</label>
                   <input name="cpassword" class="form-control" type="password" placeholder="Confirm Password">
               </div>

               <div class="col-md-6 form-group">
                   <label for="">Gender</label>
                   <SELect class="form-control" name="situation">
                       <option value="Ready">---Select Gender---</option>
                       <option value="Male">Male</option>
                       <option value="Female">Female</option>
                   </SELect>
               </div>
               
               <div class="col-sm-12 form-group">
                   <input class="form-control btn btn-default" type="submit" name="submit">
               </div>
           </div>


        </form>

        <?php include ("./footer.php"); ?>
