<?php include("include/header.php")?>
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-transparent">
                        <h4 class="mb-sm-0">ADD NEW PICKUP POINT
                        </h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Pickups & Warehouse</a></li>
                                <li class="breadcrumb-item active">Add New Warehouse</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>


            <div class="row my-3">
                <div class="col-lg-12">
                    <div class="card">

                        <div class="card-body">
                            <div class="live-preview">
                                <div class="row gy-4">
                                    <div class="col-xxl-3 col-md-6">
                                        <label for="">Username</label>

                                        <select class="js-example-basic-single w-100 form-control" name="state">
                                            <option value="" selected>All Member</option>
                                            <option value="Office Expense ">Kavita Sharma (TRUXCARGO1) </option>

                                           
                                        </select>
                                    </div>
                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label>Pickup Point Name</label>
                                            <input type="text" class="form-control"
                                                placeholder="Pickup Point Name">
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label>Contact Name *</label>
                                            <input type="text" class="form-control"
                                                placeholder="Contact Name *">
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6">
                                        <div >
                                            <label>Phone</label>
                                            <input type="number" class="form-control"
                                                placeholder="Enter Contact No">
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label>Pincode</label>
                                            <input type="text" class="form-control"
                                                placeholder="Enter Pincode">
                                        </div>
                                    </div>
                                    
                                    <div class="col-xxl-3 col-md-6">
                                        <div >
                                            <label>City</label>
                                            <input type="text" class="form-control"
                                                placeholder="Enter City Name">
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label>Address</label>
                                            <input type="text" class="form-control"
                                                placeholder="Enter Address Line">
                                        </div>
                                    </div>

                                    <div class="col-xxl-3 col-md-6">
                                        <label for="">State</label>

                                        <select class="js-example-basic-single w-100 form-control" name="state">
                                            <option value="" selected>Choose a state</option>
                                            <option value="Office Expense ">Delhi </option>

                                        
                                        </select>
                                    </div>
                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <label>Email</label>
                                            <input type="email" class="form-control"
                                                placeholder="Enter Email ">
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-6">
                                        <label for="">Address Type</label>

                                        <select class="js-example-basic-single w-100 form-control" name="state">
                                            <option value="" selected>Office</option>
                                            <option value="Office Expense ">Shop </option>
                                            <option value="Office Expense ">Home </option>

                                        
                                        </select>
                                    </div>
                                    
                                </div>
                                <!--end row-->

                                <div class="col-xxl-3 mt-5 col-md-6">
                                      <button class="btn btn-success w-100">Add</button>
                                    </div>
                            </div>

                        </div>
                    </div>
                    
                </div>
                <!--end col-->
            </div>

        </div>
    </div>
</div>
<?php include("include/footer.php")?>