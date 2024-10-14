<?php include("include/header.php")?>
<style>
.select2-container--default .select2-selection--single,
.form-control {
    border: 1px solid #b195e3 !important;
    box-shadow: none;
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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Menu</a></li>
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
                                        <select class="js-example-basic-single w-100 form-control" name="state">
                                            <option value="" selected>Select Any One</option>
                                            <option value="Office Expense ">Kavita (TRUXCARGO1) </option>


                                        </select>
                                    </div>

                                </div>
                                <div class="col-xxl-4 col-sm-4">
                                    <label for="">Pickup Point</label>

                                    <div>
                                        <select class="js-example-basic-single w-100 form-control" name="state">
                                            <option value="" selected>Select Any One</option>

                                            <option value="Cash Out">Trux Cargo HQ (12TH floor GD-ITL tower NSP)
                                            </option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-sm-4">
                                    <label for="">Pickup Point</label>

                                    <div>
                                        <select class="js-example-basic-single w-100 form-control" name="state">
                                            <option value="" selected>Please Select</option>
                                            <option value="Cash In">DELIVERY B2B </option>
                                            <option value="DENSE">DELIVERY DENSE</option>
                                            <option value="Cargo">DELIVERY Cargo</option>
                                            <option value="Lite">DELIVERY Lite</option>
                                            <option value="small">DELIVERY small</option>
                                            <option value="surface">DELIVERY surface</option>
                                            <option value="Large">DELIVERY Large</option>
                                            <option value="Express">DELIVERY Express</option>
                                            <option value="10kg">DELIVERY 10kg</option>
                                            <option value="Heavy">DELIVERY Heavy</option>
                                            <option value="2kg">DELIVERY 2kg</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="col-xxl-4 col-sm-4">
                                    <label for="">Expected Package Count</label>
                                    <div>
                                        <input type="text" placeholder="Enter Expected Package Count"
                                            class="form-control">
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
                                        <select class="js-example-basic-single w-100 form-control" name="state">
                                            <option value="" selected>8:00 am - 10:00 am </option>
                                            <option value="">10:00 am - 1:00 pm </option>
                                            <option value="">01:00 pm - 03:00 pm </option>
                                            <option value="">03:00 pm - 06:00 pm </option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-sm-4">
                                    <div>
                                        <button type="button" class="btn btn-primary w-100"
                                            style="background: linear-gradient(271deg, #10A81B 0%, #06420B 100%);">
                                            Apply
                                        </button>
                                    </div>
                                </div>
                                <hr style="border: 1px dashed #000">

                            </div>
                            <!--end row-->

                            <div class="row">
                                <h4>B2C Bulk Pickup Request (For Delhivery Panel)
                                </h4>
                            </div>

                            <div class="plan-overview">
                                <div class="row justify-content-center">

                                    <hr style="border: 1px dashed; color:#fff">

                                    <div class="row">
                                        <div class="col-xxl-5 col-sm-6">
                                            <div>
                                                <label for="">CSV</label>
                                                <input class="form-control rounded-5" type="file" id="formFile">
                                            </div>
                                            <div>
                                                <button type="button" class="btn btn-success border-0 w-50 mt-3"
                                                    style="background: linear-gradient(90deg, #10A81B 0%, #36CB72 100%);">
                                                    Upload
                                                </button>
                                            </div>
                                        </div>
                                        <!--end col-->

                                        <!--end col-->
                                        <div class="col-xxl-1 col-sm-4 mb-2">
                                        </div>

                                        <!--end col-->

                                        <div class="col-xxl-6 col-sm-4 col-12 mb-2">

                                            <!-- Bordered Tables -->
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-nowrap">
                                                    <thead>
                                                        <tr style="color:#7E7EFF">
                                                            <th scope="col">UserID</th>
                                                            <th scope="col">Shipping Partner</th>
                                                            <th scope="col">Client Location/
                                                                warehouse</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Sample  TRUXCARGO1992 </td>
                                                            <td>Reason of pickup fail</td>
                                                            <td>awb/lr no/pur </td>

                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
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
</div>
</div>


<?php include("include/footer.php")?>