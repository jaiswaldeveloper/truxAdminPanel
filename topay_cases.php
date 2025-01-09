<?php include("include/header.php")?>
<style>
label {
    color: #7E7EFF;
}

.underline {
    background: linear-gradient(90deg, rgba(255, 255, 255, 0.00) 9.65%, #7E7EFF 50.33%, rgba(255, 255, 255, 0.00) 87.89%);
    width: 100%;
    height: 1px;

}
</style>
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-transparent">
                        <h4 class="mb-sm-0">Topay cases
                        </h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Menu</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Weight Reconciliation
                                    </a></li>
                                <li class="breadcrumb-item active">Reconcilation Topay amt.
                                </li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-6 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">



                                <div class="col-xxl-12 mb-3">
                                    <label class="" for="autoSizingInputGroup">LR/AWB No.
                                    </label>
                                    <div class="input-group">

                                        <input type="text" class="form-control" id="autoSizingInputGroup"
                                            placeholder="Enter LR/AWB No.">
                                    </div>
                                </div>
                                <div class="col-xxl-12 mb-3">
                                    <label class="" for="autoSizingInputGroup">New payment Mode </label>
                                    <div>
                                        <select class="js-example-basic-single w-100  form-control" name="state">
                                            <option value="" selected>Prepaid</option>
                                            <option value="">COD</option>
                                            <option value="">To-Pay</option>
                                            <option value="">Franchise-ToPay</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-xxl-12 mb-3">
                                    <label class="" for="autoSizingInputGroup">COD/To-Pay Amount

                                    </label>
                                    <div class="input-group">

                                        <input type="text" class="form-control" id="autoSizingInputGroup"
                                            placeholder="Enter COD/To-Pay Amount ">
                                    </div>
                                </div>
                                <div class="col-xxl-12 mb-3">
                                    <label class="" for="autoSizingInputGroup">Profit Amount

                                    </label>
                                    <div class="input-group">

                                        <input type="text" class="form-control" id="autoSizingInputGroup" placeholder="Enter Profit Amount 
">
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <div class="">
                                        <button type="submit" class="btn btn-success w-100 "
                                            style="background: linear-gradient(90deg, #10A81B 0%, #06420B 100%);">Submit
                                        </button>
                                    </div>
                                </div>

                            </div>
                            <div class="underline my-4"></div>


                            <div class="col-xxl-12 mb-3">
                                <h5 class="mb-4">B2C Cases
                                </h5>
                                <div class="col-xxl-12 mb-3">
                                    <label class="" for="autoSizingInputGroup">AWB No.
                                    </label>
                                    <div class="input-group">

                                        <input type="text" class="form-control" id="autoSizingInputGroup"
                                            placeholder="Enter AWB No.">
                                    </div>
                                </div>
                                <div class="col-xxl-12 mb-3">
                                    <label class="" for="autoSizingInputGroup">New payment Mode </label>
                                    <div>
                                        <select class="js-example-basic-single w-100  form-control" name="state">
                                            <option value="" selected>Prepaid</option>
                                            <option value="">COD</option>
                                            <option value="">To-Pay</option>
                                            <option value="">Franchise-ToPay</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-xxl-12 mb-3">
                                    <label class="" for="autoSizingInputGroup">COD/To-Pay Amount

                                    </label>
                                    <div class="input-group">

                                        <input type="text" class="form-control" id="autoSizingInputGroup"
                                            placeholder="Enter COD/To-Pay Amount ">
                                    </div>
                                </div>
                                <div class="col-xxl-12 mb-3">
                                    <label class="" for="autoSizingInputGroup">Profit Amount

                                    </label>
                                    <div class="input-group">

                                        <input type="text" class="form-control" id="autoSizingInputGroup" placeholder="Enter Profit Amount 
">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 mb-3">
                                <div class="">
                                    <button type="submit" class="btn btn-success w-100 "
                                        style="background: linear-gradient(90deg, #10A81B 0%, #06420B 100%);">Submit
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<?php include("include/footer.php")?>