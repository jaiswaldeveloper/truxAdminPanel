<?php include("include/header.php")?>
<style>
    .select2-container--default .select2-selection--single {
    border: 1px solid #8c68cd !important;
}
</style>
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-transparent">
                        <h4 class="mb-sm-0">Add Pickup Request</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Pickups & Warehouse</a></li>
                                <li class="breadcrumb-item active">Add Pickup Request</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>


            <div class="row">
                <div class="card">
                    <div class="card-body">
                    <form>
                                        <div class="row g-3">


                                            <!--end col-->
                                            <div class="col-xxl-4 col-sm-4">
                                                <label for="">Customer</label>
                                                <div>
                                                    <select class="js-example-basic-single w-100 form-control"
                                                        name="state">
                                                        <option value="" selected>All Category</option>
                                                        <option value="Office Expense ">Office Expense </option>

                                                        <option value="Driver's Labour Charges ">Driver's Labour Charges
                                                        </option>
                                                        <option value="Road Tax ">Road Tax </option>
                                                        <option value="Warehouse Expenses ">Warehouse Expenses </option>
                                                        <option value="Vehicle Expenses">Vehicle Expenses </option>
                                                        <option value="Pickup or Ad-hoc vehicle ">Pickup or Ad-hoc
                                                            vehicle </option>
                                                        <option value="Received Amount	 ">Received Amount </option>
                                                        <option value="Drivers Food ">Drivers Food </option>
                                                        <option value="Pollution Expanse  ">Pollution Expanse </option>
                                                        <option value="MCD Toll  ">MCD Toll </option>
                                                        <option value="Toll Tax ">Toll Tax </option>
                                                        <option value=" Field expense  "> Field expense </option>
                                                        <option value="Pending Payments  ">FUEL PAYMENT </option>
                                                        <option value="Pending Payments  ">AD-HOC Vehicle </option>
                                                        <option value="Pending Payments  ">ad hoc driver </option>
                                                        <option value="Pending Payments  ">fastag recharge </option>
                                                        <option value="Pending Payments  ">Pending Payments </option>
                                                        <option value="Pending Payments  ">miscellaneous expense
                                                        </option>
                                                    </select>
                                                </div>

                                            </div>
                                            <div class="col-xxl-4 col-sm-4">
                                            <label for="">Pickup Point</label>

                                                <div>
                                                    <select class="js-example-basic-single w-100 form-control"
                                                        name="state">
                                                        <option value="" selected>All Type</option>
                                                        <option value="Cash In">Cash In </option>

                                                        <option value="Cash Out">Cash Out</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xxl-4 col-sm-4">
                                            <label for="">Pickup Point</label>

                                                <div>
                                                    <select class="js-example-basic-single w-100 form-control"
                                                        name="state">
                                                        <option value="" selected>All Type</option>
                                                        <option value="Cash In">Cash In </option>

                                                        <option value="Cash Out">Cash Out</option>

                                                    </select>
                                                </div>
                                            </div>
                                          
                                            <div class="col-xxl-4 col-sm-4">
                                            <label for="">Expected Package Count</label>
                                            <div>
                                                    <input type="text" placeholder="Enter Expected Package Count" class="form-control">
                                               
                                                </div>
                                          
                                            </div>
                                          
                                           
                                            <div class="col-xxl-4 col-sm-4">
                                            <label for="">Pickup Date</label>

                                                <div>
                                                    <input type="date" class="form-control">
                                               
                                                </div>
                                            </div>
                                          
                                            
                                            <div class="col-xxl-4 col-sm-4">
                                            <label for="">Pickup Point</label>

                                                <div>
                                                    <select class="js-example-basic-single w-100 form-control"
                                                        name="state">
                                                        <option value="" selected>8:00 am - 10:00 am </option>
                                                        <option value="" >10:00 am - 1:00 pm </option>

                                                        <option value="" >01:00 pm - 03:00 pm </option>
                                                        <option value="" >03:00 pm - 06:00 pm </option>

                                                    </select>
                                                </div>
                                            </div>
                                          
                                          
                                        </div>
                                        <!--end row-->
                                    </form>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include("include/footer.php")?>