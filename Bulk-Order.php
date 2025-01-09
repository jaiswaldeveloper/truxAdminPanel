<?php include("include/header.php")?>

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-transparent">
                        <h4 class="mb-sm-0">Bulk Order</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Menu</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">B2C Panel</a></li>
                                <li class="breadcrumb-item active">Bulk Order</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">

                    <div class="h-100">
                        <div class="row mb-3 pb-1">
                            <div class="col-12">
                                <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                    <div class="flex-grow-1"></div>
                                    <div class="mt-3 mt-lg-0">
                                        <div class="col-auto">
                                            <button type="button" class="btn btn-primary"><svg width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12 0C9.62663 0 7.30655 0.703788 5.33316 2.02236C3.35977 3.34094 1.8217 5.21509 0.913451 7.4078C0.00519943 9.60051 -0.232441 12.0133 0.230582 14.3411C0.693605 16.6689 1.83649 18.8071 3.51472 20.4853C5.19295 22.1635 7.33115 23.3064 9.65892 23.7694C11.9867 24.2324 14.3995 23.9948 16.5922 23.0866C18.7849 22.1783 20.6591 20.6402 21.9776 18.6668C23.2962 16.6935 24 14.3734 24 12C24 8.8174 22.7357 5.76516 20.4853 3.51472C18.2348 1.26428 15.1826 0 12 0ZM15.9365 19.73H8.06351C7.79829 19.73 7.54393 19.6246 7.3564 19.4371C7.16886 19.2496 7.06351 18.9952 7.06351 18.73C7.06351 18.4648 7.16886 18.2104 7.3564 18.0229C7.54393 17.8354 7.79829 17.73 8.06351 17.73H15.9365C16.2017 17.73 16.4561 17.8354 16.6436 18.0229C16.8311 18.2104 16.9365 18.4648 16.9365 18.73C16.9365 18.9952 16.8311 19.2496 16.6436 19.4371C16.4561 19.6246 16.2017 19.73 15.9365 19.73ZM16.6435 12.208L12.704 16.15C12.5165 16.3375 12.2622 16.4428 11.997 16.4428C11.7318 16.4428 11.4775 16.3375 11.29 16.15L7.35651 12.217C7.1686 12.0295 7.06288 11.775 7.0626 11.5096C7.06231 11.2441 7.1675 10.9894 7.35501 10.8015C7.54251 10.6136 7.79699 10.5079 8.06244 10.5076C8.3279 10.5073 8.5826 10.6125 8.77051 10.8L11 13.0295V4.1825C11 3.91728 11.1054 3.66293 11.2929 3.47539C11.4804 3.28786 11.7348 3.1825 12 3.1825C12.2652 3.1825 12.5196 3.28786 12.7071 3.47539C12.8946 3.66293 13 3.91728 13 4.1825V13.0235L15.2295 10.794C15.4181 10.6118 15.6707 10.511 15.9329 10.5133C16.1951 10.5156 16.4459 10.6208 16.6313 10.8062C16.8167 10.9916 16.9219 11.2424 16.9242 11.5046C16.9265 11.7668 16.8257 12.0194 16.6435 12.208Z"
                                                        fill="white" />
                                                </svg>

                                                Download Sample</button>
                                        </div>
                                    </div>
                                </div><!-- end card header -->
                            </div>
                            <!--end col-->
                        </div>

                    </div> <!-- end .h-100-->

                </div> <!-- end col -->


            </div>
            <div class="plan-overview">
                <div class="card">
                    <div class="card-body">
                       

                        <div class="row">

                          
                            <div class="col-xxl-4 col-sm-4 mb-3">
                                    <div>
                                    <label for="">User ID</label>

                                        <select class="js-example-basic-single w-100 form-control" name="state">
                                            <option value="" selected>Select Any One</option>
                                            <option value="">TRUXCARGO1 (KAVITA SHARMA)</option>

                                        </select>

                                    </div>
                                </div>
                            <div class="col-xxl-4 col-sm-4 mb-3">
                                    <div>
                                    <label for="">Pickup Point</label>

                                        <select class="js-example-basic-single w-100 form-control" name="state">
                                            <option value="" selected> Please Select </option>

                                        </select>

                                    </div>
                                </div>
                            <!--end col-->

                            <div class="col-xxl-4 col-sm-6 mb-3">
                                <div>
                                    <label for="">CSV File</label>
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                                
                            </div>
                            <div class="col-xxl-2 col-sm-6 mb-3">
                            
                            <button type="button" class="btn btn-success border-0 w-100 mt-3"
                                        style="background: linear-gradient(90deg, #10A81B 0%, #36CB72 100%);">
                                        Import
                                    </button>
                                
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>



    </div>

</div>

<?php include("include/footer.php")?>