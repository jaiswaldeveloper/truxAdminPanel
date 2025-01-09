<?php include("include/header.php")?>
<style>
label {
    color: #7E7EFF;
}
</style>
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-transparent">
                        <h4 class="mb-sm-0">B2C payment mode</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Menu</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">B2B Panel</a></li>
                                <li class="breadcrumb-item active">Change payment mode</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-6 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="mb-4">LR transfer</h5>
                            <div class="row">



                                <div class="col-xxl-12 mb-3">
                                    <label class="" for="autoSizingInputGroup">LR/AWB No.
                                    </label>
                                    <div class="input-group">

                                        <input type="password" class="form-control" id="autoSizingInputGroup"
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
</div>
<?php include("include/footer.php")?>