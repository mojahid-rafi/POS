<?php include ("./header.php"); ?>

    <div class="content-wrapper">
        <!-- START PAGE CONTENT-->
        <div class="page-heading">
            <h1 class="page-title">Blood Request</h1>
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
                Add Donation
            </button>
        </div>
        <!-- modal button end -->

        <!-- modal start -->
        <div class="modal fade" id="DonorAdd" tabindex="-1" role="dialog" aria-labelledby="DonorAdd" aria-hidden="true">
                              <form action="post">
                                  <div class="modal-dialog modal-lg" role="document">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <h5 class="modal-title" id="exampleModalLabel">Blood Request</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                              </button>
                                          </div>
                                          <div class="modal-body">
										  
										  <!--form body start here-->
										  
										  
										  
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Request From : </label>
                                            <input name="reqfrom" class="form-control" type="text" placeholder="Full Name">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label> Patient Name : </label>
                                            <input name="pname" class="form-control" type="text" placeholder="Patient Name">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Blood Group: </label>
                                            <select name="bgroup" id="bgroup" class="form-control">
                                                <option value="">---SELECT YOUR BLOOD GROUP---</option>
                                                <option value="A Positive (A+)">A Positive (A+) </option>
                                                <option value="A Negative (A-)">A Negative (A-) </option>
                                                <option value="B Positive (B+)">B positive (B+) </option>
                                                <option value="B Negative (B-)">B Negative (B-) </option>
                                                <option value="O Positive (O+)">O Positive (O+) </option>
                                                <option value="O Negative (O-)">O Negative (O-) </option>
                                                <option value="AB Positive (AB+)">AB Positive (AB+) </option>
                                                <option value="AB Negative (AB-)">AB Negative (AB-) </option>
                                            
                                            </select>
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>No of Unit :</label>
                                            <input name="nfunit" class="form-control" type="number" placeholder="Number of Unit">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Donation Date:</label>
                                            <input name="ddate" class="form-control" type="date" placeholder="Enter Your Date">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Days Left:</label>
                                            <input name="dayleft" class="form-control" type="number" placeholder="Enter Your last Date">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Location:</label>
                                            <textarea name="location" class="form-control" name="location" id="location" cols="10" rows="2" placeholder="Hospital Name & Full Address"></textarea>
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