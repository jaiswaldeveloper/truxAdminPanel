<?php include("include/header.php")?>

<style>
.plan-overview {
    border-radius: 14px;
    background: linear-gradient(93deg, rgba(17, 35, 165, 0.75) 0%, rgba(121, 57, 204, 0.52) 100%);
    padding: 20px;
    margin-bottom: 2rem;
}

.plan-overview .card {
    background: #fff;

}
</style>
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-transparent">
                        <h4 class="mb-sm-0">CashBook (New)</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Menu</a></li>

                                <li class="breadcrumb-item"><a href="javascript: void(0);">CashBook</a></li>
                                <li class="breadcrumb-item active">CashBook New</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>

            <div class="plan-overview">
                <div class="row justify-content-center">
                    <h5 class="text-white">Bulk Upload</h5>

                    <hr style="border: 1px dashed; color:#fff">

                    <div class="row">
                        <div class="col-xxl-5 col-sm-6 mb-3">
                            <div>
                                <input class="form-control rounded-5" type="file" id="formFile">
                            </div>
                        </div>
                        <!--end col-->

                        <!--end col-->
                        <div class="col-xxl-2 col-sm-4 mb-2">
                            <div>
                                <button type="button" class="btn btn-success border-0  w-100"
                                    style="background: linear-gradient(90deg, #10A81B 0%, #36CB72 100%);">
                                    Import
                                </button>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-2 col-md-6">

                        </div>
                        <div class="col-xxl-3 col-sm-4 col-12 mb-2">
                            <div class="d-flex w-100 gap-5">
                                <button type="button" class="btn btn-success btn-border" data-bs-toggle="modal"
                                    id="cashIn-btn" data-bs-target="#cashInModal">
                                    <i class=" ri-add-circle-fill fs-18"> </i> Cash In
                                </button>
                                <button type="button" class="btn btn-danger btn-border " data-bs-toggle="modal"
                                    id="cashOut-btn" data-bs-target="#cashOutModal">
                                    <i class=" ri-indeterminate-circle-fill fs-18"> </i> Cash Out

                                </button>
                            </div>

                        </div>
                        <div class="col-xxl-1 col-sm-4 col-6 mb-2">


                        </div>
                    </div>



                    <div class="col-lg-3 col-md-6">
                        <div class="card m-0">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class=" flex-shrink-0">
                                        <span class="avatar-title text-primary fs-3">
                                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_3161_23964)">
                                                    <path
                                                        d="M20.75 10.5H3.25C2.01 10.5 1 11.509 1 12.75V22.25C1 23.491 2.01 24.5 3.25 24.5H20.75C21.99 24.5 23 23.491 23 22.25V12.75C23 11.509 21.99 10.5 20.75 10.5ZM5.75 18.25H4.75C4.336 18.25 4 17.914 4 17.5C4 17.086 4.336 16.75 4.75 16.75H5.75C6.164 16.75 6.5 17.086 6.5 17.5C6.5 17.914 6.164 18.25 5.75 18.25ZM12 21C10.07 21 8.5 19.43 8.5 17.5C8.5 15.57 10.07 14 12 14C13.93 14 15.5 15.57 15.5 17.5C15.5 19.43 13.93 21 12 21ZM19.25 18.25H18.25C17.836 18.25 17.5 17.914 17.5 17.5C17.5 17.086 17.836 16.75 18.25 16.75H19.25C19.664 16.75 20 17.086 20 17.5C20 17.914 19.664 18.25 19.25 18.25Z"
                                                        fill="#007736" />
                                                    <path
                                                        d="M15.7072 6.20675L12.7072 9.20675C12.3162 9.59775 11.6842 9.59775 11.2932 9.20675L8.29319 6.20675C8.00719 5.92075 7.92119 5.49075 8.07619 5.11675C8.23019 4.74375 8.59619 4.49975 9.00019 4.49975H15.0002C15.4042 4.49975 15.7702 4.74375 15.9242 5.11675C16.0792 5.49075 15.9932 5.92075 15.7072 6.20675Z"
                                                        fill="#007736" />
                                                    <path
                                                        d="M12 0.5C11.447 0.5 11 0.948 11 1.5V7.75C11 8.302 11.447 8.75 12 8.75C12.553 8.75 13 8.302 13 7.75V1.5C13 0.948 12.553 0.5 12 0.5Z"
                                                        fill="#007736" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_3161_23964">
                                                        <rect width="24" height="24" fill="white"
                                                            transform="translate(0 0.5)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>

                                        </span>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <p class="text-uppercase fw-semibold fs-12  mb-1" style="color: #007736">
                                            Cash In
                                        </p>
                                    </div>

                                </div>
                                <h4 class=" mb-0 mt-2">₹<span class="counter-value" data-target=" 4839700.00">0</span>
                                </h4>

                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                    <div class="col-lg-1"></div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card m-0">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class=" flex-shrink-0">
                                        <span class="avatar-title text-primary fs-3">
                                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_3161_23976)">
                                                    <path
                                                        d="M8.29281 3.79325L11.2928 0.79325C11.6838 0.40225 12.3158 0.40225 12.7068 0.79325L15.7068 3.79325C15.9928 4.07925 16.0788 4.50925 15.9238 4.88325C15.7698 5.25625 15.4038 5.50025 14.9998 5.50025H8.99981C8.59581 5.50025 8.22981 5.25625 8.07581 4.88325C7.92081 4.50925 8.00681 4.07925 8.29281 3.79325Z"
                                                        fill="#BC3C43" />
                                                    <path
                                                        d="M12 9.5C12.553 9.5 13 9.052 13 8.5V2.25C13 1.698 12.553 1.25 12 1.25C11.447 1.25 11 1.698 11 2.25V8.5C11 9.052 11.447 9.5 12 9.5Z"
                                                        fill="#BC3C43" />
                                                    <path
                                                        d="M20.75 10.5H3.25C2.01 10.5 1 11.509 1 12.75V22.25C1 23.491 2.01 24.5 3.25 24.5H20.75C21.99 24.5 23 23.491 23 22.25V12.75C23 11.509 21.99 10.5 20.75 10.5ZM5.75 18.25H4.75C4.336 18.25 4 17.914 4 17.5C4 17.086 4.336 16.75 4.75 16.75H5.75C6.164 16.75 6.5 17.086 6.5 17.5C6.5 17.914 6.164 18.25 5.75 18.25ZM12 21C10.07 21 8.5 19.43 8.5 17.5C8.5 15.57 10.07 14 12 14C13.93 14 15.5 15.57 15.5 17.5C15.5 19.43 13.93 21 12 21ZM19.25 18.25H18.25C17.836 18.25 17.5 17.914 17.5 17.5C17.5 17.086 17.836 16.75 18.25 16.75H19.25C19.664 16.75 20 17.086 20 17.5C20 17.914 19.664 18.25 19.25 18.25Z"
                                                        fill="#BC3C43" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_3161_23976">
                                                        <rect width="24" height="24" fill="white"
                                                            transform="translate(0 0.5)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>

                                        </span>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <p class="text-uppercase fw-semibold fs-12 mb-1" style="color: #BC3C43">
                                            Cash Out </p>
                                    </div>

                                </div>
                                <h4 class=" mb-0 mt-2">₹<span class="counter-value" data-target=" 4723732.51">0</span>
                                </h4>

                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                    <div class="col-lg-1"></div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card m-0">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class=" flex-shrink-0">
                                        <span class="avatar-title text-primary fs-3">
                                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M20.7075 1.76172H3.29251C1.89001 1.76172 0.75 2.90173 0.75 4.30423V13.5067C0.75 14.9017 1.89001 16.0417 3.29251 16.0417H20.7075C22.11 16.0417 23.25 14.9017 23.25 13.5067V4.30423C23.25 2.90173 22.11 1.76172 20.7075 1.76172ZM3.92248 8.90173C3.92248 8.30174 4.41 7.81423 5.00999 7.81423H6.10501C6.705 7.81423 7.19252 8.30174 7.19252 8.90173C7.19252 9.50173 6.705 9.9892 6.10501 9.9892H5.00999C4.41 9.9892 3.92248 9.50173 3.92248 8.90173ZM8.18999 8.90173C8.18999 6.80174 9.90001 5.09173 12 5.09173C14.1 5.09173 15.81 6.80175 15.81 8.90174C15.81 11.0017 14.1 12.7117 12 12.7117C9.90001 12.7117 8.18999 11.0017 8.18999 8.90173ZM18.99 9.9892H17.895C17.295 9.9892 16.8075 9.50173 16.8075 8.90173C16.8075 8.30174 17.295 7.81423 17.895 7.81423H18.99C19.59 7.81423 20.0775 8.30174 20.0775 8.90173C20.0775 9.50173 19.59 9.9892 18.99 9.9892Z"
                                                    fill="#4656A3" />
                                                <path
                                                    d="M12.0022 10.5356C12.9052 10.5356 13.6372 9.80361 13.6372 8.90062C13.6372 7.99764 12.9052 7.26562 12.0022 7.26562C11.0992 7.26562 10.3672 7.99764 10.3672 8.90062C10.3672 9.80361 11.0992 10.5356 12.0022 10.5356Z"
                                                    fill="#4656A3" />
                                                <path
                                                    d="M22.1613 17.332H1.8387C1.23766 17.332 0.75 17.8193 0.75 18.4207C0.75 19.0221 1.23766 19.5094 1.8387 19.5094H22.1613C22.7623 19.5094 23.25 19.0221 23.25 18.4207C23.25 17.8193 22.7623 17.332 22.1613 17.332Z"
                                                    fill="#4656A3" />
                                                <path
                                                    d="M22.1613 21.0664H1.8387C1.23766 21.0664 0.75 21.5537 0.75 22.1551C0.75 22.7565 1.23766 23.2438 1.8387 23.2438H22.1613C22.7623 23.2438 23.25 22.7565 23.25 22.1551C23.25 21.5537 22.7623 21.0664 22.1613 21.0664Z"
                                                    fill="#4656A3" />
                                            </svg>


                                        </span>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <p class="text-uppercase fw-semibold fs-12 mb-1" style="color: #4656A3">
                                            Net Balance: </p>
                                    </div>

                                </div>
                                <h4 class=" mb-0 mt-2">₹<span class="counter-value" data-target=" 115967.49">0</span>
                                </h4>

                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->




                </div>
            </div>
            <div class="row mb-4">
                <div class="col-xl-12">
                    <div class="card-body form-bg-gradient">
                        <form>
                            <div class="row g-3">


                                <!--end col-->
                                <div class="col-xxl-2 col-sm-4">
                                    <div>
                                        <select class="js-example-basic-single w-100 form-control" name="state">
                                            <option value="" selected>All Category</option>
                                            <option value="Office Expense ">Office Expense </option>

                                            <option value="Driver's Labour Charges ">Driver's Labour Charges </option>
                                            <option value="Road Tax ">Road Tax </option>
                                            <option value="Warehouse Expenses ">Warehouse Expenses </option>
                                            <option value="Vehicle Expenses">Vehicle Expenses </option>
                                            <option value="Pickup or Ad-hoc vehicle ">Pickup or Ad-hoc vehicle </option>
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
                                            <option value="Pending Payments  ">miscellaneous expense </option>
                                        </select>
                                    </div>

                                </div>
                                <div class="col-xxl-2 col-sm-4">
                                    <div>
                                        <select class="js-example-basic-single w-100 form-control" name="state">
                                            <option value="" selected>All Type</option>
                                            <option value="Cash In">Cash In </option>

                                            <option value="Cash Out">Cash Out</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-sm-4">
                                    <div>
                                        <select class="js-example-basic-single w-100 form-control" name="state">
                                            <option value="" selected>All Payment Mode</option>
                                            <option value="Cash ">Cash </option>

                                            <option value="Online">Online</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="col-xxl-2 col-sm-4">
                                    <div>

                                        <select class="js-example-basic-single w-100 form-control" name="state">
                                            <option value="" selected>All </option>
                                            <option value="Single Panel">Today</option>
                                            <option value="B2B & cargo">Yesterday</option>
                                            <option value="B2B & Dense">Last 7 days</option>
                                            <option value="Dense & Cargo">Last 30 days</option>
                                            <option value="3 panels">This Month</option>
                                            <option value="3 panels">Last Month</option>
                                        </select>

                                    </div>
                                </div>

                                <!--end col-->
                                <div class="col-xxl-2 col-sm-4">
                                    <div>
                                        <button type="button" class="btn btn-primary w-100"
                                            style="background: linear-gradient(90deg, #10A81B 0%, #06420B 100%);"> <i
                                                class="ri-equalizer-fill me-1 align-bottom"></i>
                                            Apply
                                        </button>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </form>
                    </div>
                    <div class="files">
                        <div style="float: right" ;>
                            <div class="d-flex flex-wrap gap-2 my-2">
                                <button type="button" class="btn btn-success btn-animation waves-effect waves-light"
                                    data-text="Excel"><span><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M6.14902 0H14.1761L20.9752 7.09344V20.8744C20.9752 22.5996 19.5748 24 17.8496 24H6.14902C4.42386 24 3.02344 22.5996 3.02344 20.8744V3.12558C3.02344 1.40042 4.42386 0 6.14902 0Z"
                                                fill="white" />
                                            <path opacity="0.302" fill-rule="evenodd" clip-rule="evenodd"
                                                d="M14.1641 0V7.03255H20.9734L14.1641 0Z" fill="#10A81B" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M8.3125 17.6075H11.499V18.8151H8.3125V17.6075ZM12.4935 11.4375H15.6901V12.635H12.4935V11.4375ZM8.3125 11.4375H11.499V12.635H8.3125V11.4375ZM12.4935 13.4671H15.6901V14.6747H12.4935V13.4671ZM8.3125 13.4671H11.499V14.6747H8.3125V13.4671ZM12.4935 15.5779H15.6901V16.7855H12.4935V15.5779ZM8.3125 15.5779H11.499V16.7855H8.3125V15.5779ZM12.4935 17.6075H15.6901V18.8151H12.4935V17.6075Z"
                                                fill="#10A81B" />
                                        </svg>
                                        EXCEL</span></button>
                                <button type="button" class="btn btn-info btn-animation waves-effect waves-light"
                                    data-text="CSV"><span><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_3194_22406)">
                                                <path
                                                    d="M12 0C9.62663 0 7.30655 0.703788 5.33316 2.02236C3.35977 3.34094 1.8217 5.21509 0.913451 7.4078C0.00519943 9.60051 -0.232441 12.0133 0.230582 14.3411C0.693605 16.6689 1.83649 18.8071 3.51472 20.4853C5.19295 22.1635 7.33115 23.3064 9.65892 23.7694C11.9867 24.2324 14.3995 23.9948 16.5922 23.0866C18.7849 22.1783 20.6591 20.6402 21.9776 18.6668C23.2962 16.6935 24 14.3734 24 12C24 8.8174 22.7357 5.76516 20.4853 3.51472C18.2348 1.26428 15.1826 0 12 0ZM15.9365 19.73H8.06351C7.79829 19.73 7.54393 19.6246 7.3564 19.4371C7.16886 19.2496 7.06351 18.9952 7.06351 18.73C7.06351 18.4648 7.16886 18.2104 7.3564 18.0229C7.54393 17.8354 7.79829 17.73 8.06351 17.73H15.9365C16.2017 17.73 16.4561 17.8354 16.6436 18.0229C16.8311 18.2104 16.9365 18.4648 16.9365 18.73C16.9365 18.9952 16.8311 19.2496 16.6436 19.4371C16.4561 19.6246 16.2017 19.73 15.9365 19.73ZM16.6435 12.208L12.704 16.15C12.5165 16.3375 12.2622 16.4428 11.997 16.4428C11.7318 16.4428 11.4775 16.3375 11.29 16.15L7.35651 12.217C7.1686 12.0295 7.06288 11.775 7.0626 11.5096C7.06231 11.2441 7.1675 10.9894 7.35501 10.8015C7.54251 10.6136 7.79699 10.5079 8.06244 10.5076C8.3279 10.5073 8.5826 10.6125 8.77051 10.8L11 13.0295V4.1825C11 3.91728 11.1054 3.66293 11.2929 3.47539C11.4804 3.28786 11.7348 3.1825 12 3.1825C12.2652 3.1825 12.5196 3.28786 12.7071 3.47539C12.8946 3.66293 13 3.91728 13 4.1825V13.0235L15.2295 10.794C15.4181 10.6118 15.6707 10.511 15.9329 10.5133C16.1951 10.5156 16.4459 10.6208 16.6313 10.8062C16.8167 10.9916 16.9219 11.2424 16.9242 11.5046C16.9265 11.7668 16.8257 12.0194 16.6435 12.208Z"
                                                    fill="white" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_3194_22406">
                                                    <rect width="24" height="24" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        CSV</span></button>
                                <button type="button" class="btn btn-danger btn-animation waves-effect waves-light"
                                    data-text="PDF"><span><svg width="19" height="24" viewBox="0 0 19 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M1.02344 3.12443V3.12442C1.02341 1.67344 2.19684 0.5 3.64786 0.5H11.4586L17.9724 7.28952V20.8756C17.9724 22.3272 16.7984 23.5 15.354 23.5H3.64786C2.19688 23.5 1.02344 22.3266 1.02344 20.8756V3.12443Z"
                                                fill="white" stroke="#BC3C43" />
                                            <path opacity="0.302" d="M17.2989 6.53449H12.1719V1.23578L17.2989 6.53449Z"
                                                fill="white" stroke="#BC3C43" />
                                            <path
                                                d="M10.0705 14.1193C10.2019 14.1725 10.3273 14.2404 10.4465 14.3217L10.4556 14.3279L10.4556 14.328C10.6616 14.4752 10.8192 14.6763 10.9243 14.9217C11.029 15.1659 11.0727 15.4339 11.0727 15.7183C11.0727 15.9977 11.0287 16.2655 10.9243 16.509C10.8192 16.7544 10.6616 16.9556 10.4555 17.1028L10.4466 17.1091L10.4465 17.109C10.3274 17.1902 10.202 17.2581 10.0708 17.3113C10.0815 17.3079 10.0921 17.3045 10.1027 17.301L10.0705 14.1193ZM10.0705 14.1193C10.0813 14.1227 10.092 14.1261 10.1027 14.1297L10.1028 14.1297C10.3257 14.204 10.5166 14.3039 10.6788 14.4346L10.6788 14.4346L10.6855 14.4399C10.8277 14.5504 10.9523 14.7071 11.0484 14.9252C11.1397 15.146 11.1942 15.4084 11.1942 15.7183C11.1942 16.0218 11.1399 16.2843 11.0484 16.5054C10.9523 16.7235 10.8277 16.8802 10.6855 16.9908L10.6855 16.9907L10.6788 16.9961C10.5166 17.1268 10.3258 17.2266 10.1028 17.301L10.0705 14.1193ZM8.44153 17.4072H8.34407V14.0234H8.44153V14.477V16.9537V17.4072ZM12.8793 15.1786V15.6261V15.6786V16.1261V17.4072H12.7579V14.0234H12.8793V14.477V15.1786ZM4.62144 16.33V17.4072H4.5V14.0234H4.62144V14.477V15.3765V15.83V15.8765V16.33ZM6.46322 14.225C6.37697 14.1462 6.28205 14.0912 6.185 14.0533C6.37696 14.0931 6.51793 14.1705 6.62708 14.2725L6.62706 14.2725L6.6314 14.2765C6.78773 14.4192 6.88233 14.6186 6.88233 14.9267C6.88233 15.2349 6.78773 15.4342 6.6314 15.577L6.63137 15.577L6.62708 15.581C6.51796 15.683 6.37706 15.7603 6.18521 15.8001C6.28217 15.7623 6.377 15.7072 6.46318 15.6285C6.67231 15.4437 6.7669 15.1927 6.7669 14.9268C6.7669 14.6609 6.67242 14.4099 6.46322 14.225Z"
                                                fill="white" stroke="#BC3C43" />
                                        </svg>
                                        PDF</span></button>
                                <button type="button" class="btn btn-light btn-animation waves-effect waves-light"
                                    data-text="All Data"><span> <svg width="25" height="24" viewBox="0 0 25 24"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_3194_22392)">
                                                <path
                                                    d="M12.5 0C10.1266 0 7.80655 0.703788 5.83316 2.02236C3.85977 3.34094 2.3217 5.21509 1.41345 7.4078C0.505199 9.60051 0.267559 12.0133 0.730582 14.3411C1.1936 16.6689 2.33649 18.8071 4.01472 20.4853C5.69295 22.1635 7.83115 23.3064 10.1589 23.7694C12.4867 24.2324 14.8995 23.9948 17.0922 23.0866C19.2849 22.1783 21.1591 20.6402 22.4776 18.6668C23.7962 16.6935 24.5 14.3734 24.5 12C24.5 8.8174 23.2357 5.76516 20.9853 3.51472C18.7348 1.26428 15.6826 0 12.5 0ZM16.4365 19.73H8.56351C8.29829 19.73 8.04393 19.6246 7.8564 19.4371C7.66886 19.2496 7.56351 18.9952 7.56351 18.73C7.56351 18.4648 7.66886 18.2104 7.8564 18.0229C8.04393 17.8354 8.29829 17.73 8.56351 17.73H16.4365C16.7017 17.73 16.9561 17.8354 17.1436 18.0229C17.3311 18.2104 17.4365 18.4648 17.4365 18.73C17.4365 18.9952 17.3311 19.2496 17.1436 19.4371C16.9561 19.6246 16.7017 19.73 16.4365 19.73ZM17.1435 12.208L13.204 16.15C13.0165 16.3375 12.7622 16.4428 12.497 16.4428C12.2318 16.4428 11.9775 16.3375 11.79 16.15L7.85651 12.217C7.6686 12.0295 7.56288 11.775 7.5626 11.5096C7.56231 11.2441 7.6675 10.9894 7.85501 10.8015C8.04251 10.6136 8.29699 10.5079 8.56244 10.5076C8.8279 10.5073 9.0826 10.6125 9.27051 10.8L11.5 13.0295V4.1825C11.5 3.91728 11.6054 3.66293 11.7929 3.47539C11.9804 3.28786 12.2348 3.1825 12.5 3.1825C12.7652 3.1825 13.0196 3.28786 13.2071 3.47539C13.3946 3.66293 13.5 3.91728 13.5 4.1825V13.0235L15.7295 10.794C15.9181 10.6118 16.1707 10.511 16.4329 10.5133C16.6951 10.5156 16.9459 10.6208 17.1313 10.8062C17.3167 10.9916 17.4219 11.2424 17.4242 11.5046C17.4265 11.7668 17.3257 12.0194 17.1435 12.208Z"
                                                    fill="black" fill-opacity="0.75" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_3194_22392">
                                                    <rect width="24" height="24" fill="white"
                                                        transform="translate(0.5)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        All Data</span></button>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>



        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="listjs-table" id="customerList">

                            <div class="table-responsive table-card mb-1">
                                <table class="table align-middle table-nowrap" id="customerTable">
                                    <thead class="table-light">
                                        <tr>
                                            <th class="sort" data-sort="id">ID &nbsp;</th>
                                            <th class="sort" data-sort="date">Date</th>
                                            <th class="sort" data-sort="username">Username</th>
                                            <th class="sort" data-sort="name">Name</th>
                                            <th class="sort" data-sort="type">Type</th>
                                            <th class="sort" data-sort="info">Contact &nbsp;</th>
                                            <th class="sort" data-sort="company">Company &nbsp;</th>
                                            <th class="sort" data-sort="gst">GST & Prefernce &nbsp;</th>
                                            <th class="sort" data-sort="cod">COD &nbsp;</th>
                                            <th class="sort" data-sort="poc">POC</th>
                                            <th class="sort" data-sort="status">Status</th>


                                        </tr>
                                    </thead>
                                    <tbody class="list form-check-all">
                                        <tr>
                                            <td>1</td>
                                            <td class="date">06 Apr, 2021</td>
                                            <td>TRUXCARGO12</td>
                                            <td>Alok Kumar </td>
                                            <td>Postpaid
                                                (Transporter)</td>
                                            <td>9718685216</td>
                                            <td>Mirc Electronic </td>
                                            <td>NA
                                                (Yes)</td>
                                            <td>Weekly</td>
                                            <td>shubham</td>
                                            <td class="status"><span
                                                    class="badge bg-success-subtle text-success text-uppercase">Active</span>
                                            </td>



                                        </tr>

                                    </tbody>
                                </table>
                                <div class="noresult" style="display: none">
                                    <div class="text-center">
                                        <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"
                                            colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px">
                                        </lord-icon>
                                        <h5 class="mt-2">Sorry! No Result Found</h5>
                                        <p class="text-muted mb-0">We've searched more than 150+ Orders We did not
                                            find any orders for you search.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-end">
                                <div class="pagination-wrap hstack gap-2">
                                    <a class="page-item pagination-prev disabled" href="javascript:void(0);">
                                        Previous
                                    </a>
                                    <ul class="pagination listjs-pagination mb-0"></ul>
                                    <a class="page-item pagination-next" href="javascript:void(0);">
                                        Next
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end col -->
        </div>





        <div class="modal fade" id="cashInModal" tabindex="-1" aria-labelledby="cashInModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-light p-3">
                        <h5 class="modal-title" id="cashInModalLabel">CASH IN
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                            id="close-modal"></button>
                    </div>
                    <form class="tablelist-form" autocomplete="off">
                        <div class="modal-body">

                            <div class="form-floating mb-3">
                                <input type="datetime-local" class="form-control" placeholder="Enter your firstname">
                                <label for="firstnamefloatingInput">Date </label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" placeholder="Enter your amount">
                                <label for="firstnamefloatingInput">Amount </label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" placeholder="Enter your Remark">
                                <label for="firstnamefloatingInput">Remark </label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="floatingSelect"
                                    aria-label="Floating label select example">
                                    <option value="" selected>select Category</option>
                                    <option value="Office Expense ">Office Expense </option>

                                    <option value="Driver's Labour Charges ">Driver's Labour Charges </option>
                                    <option value="Road Tax ">Road Tax </option>
                                    <option value="Warehouse Expenses ">Warehouse Expenses </option>
                                    <option value="Vehicle Expenses">Vehicle Expenses </option>
                                    <option value="Pickup or Ad-hoc vehicle ">Pickup or Ad-hoc vehicle </option>
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
                                    <option value="Pending Payments  ">miscellaneous expense </option>
                                </select>
                                <label for="floatingSelect">All Category</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="floatingSelect"
                                    aria-label="Floating label select example">
                                    <option value="" selected>select Payment Mode</option>
                                    <option value="Cash ">Cash </option>

                                    <option value="Online">Online</option>
                                </select>
                                <label for="floatingSelect">All Payment Mode</label>
                            </div>



                            <div class="form-floating mb-3">
                                <select class="form-select" id="floatingSelect"
                                    aria-label="Floating label select example">
                                    <option value="" selected>select by</option>
                                    <option value="Gourav ">Gourav </option>

                                    <option value="Vikas">Vikas</option>
                                </select>
                                <label for="floatingSelect"> Payment By</label>
                            </div>


                            <div class="mt-5">
                                <div class="hstack gap-2 justify-content-end">
                                    <button type="submit" class="btn btn-success w-100" id="add-btn"
                                        style="background: linear-gradient(90deg, #10A81B 0%, #06420B 100%);">Add
                                    </button>
                                    <button type="button" class="btn btn-light w-100"
                                        data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>





    </div>
    <div class="modal fade" id="cashOutModal" tabindex="-1" aria-labelledby="cashOutModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-light p-3">
                    <h5 class="modal-title" id="cashOutModalLabel">CASH OUT
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        id="close-modal"></button>
                </div>
                <form class="tablelist-form" autocomplete="off">
                    <div class="modal-body">

                        <div class="form-floating mb-3">
                            <input type="datetime-local" class="form-control" placeholder="Enter your firstname">
                            <label for="firstnamefloatingInput">Date </label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" placeholder="Enter your amount">
                            <label for="firstnamefloatingInput">Amount </label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" placeholder="Enter your Remark">
                            <label for="firstnamefloatingInput">Remark </label>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                <option value="" selected>select Category</option>
                                <option value="Office Expense ">Office Expense </option>

                                <option value="Driver's Labour Charges ">Driver's Labour Charges </option>
                                <option value="Road Tax ">Road Tax </option>
                                <option value="Warehouse Expenses ">Warehouse Expenses </option>
                                <option value="Vehicle Expenses">Vehicle Expenses </option>
                                <option value="Pickup or Ad-hoc vehicle ">Pickup or Ad-hoc vehicle </option>
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
                                <option value="Pending Payments  ">miscellaneous expense </option>
                            </select>
                            <label for="floatingSelect">All Category</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                <option value="" selected>select Payment Mode</option>
                                <option value="Cash ">Cash </option>

                                <option value="Online">Online</option>
                            </select>
                            <label for="floatingSelect">All Payment Mode</label>
                        </div>



                        <div class="form-floating mb-3">
                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                <option value="" selected>select by</option>
                                <option value="Gourav ">Gourav </option>

                                <option value="Vikas">Vikas</option>
                            </select>
                            <label for="floatingSelect"> Payment By</label>
                        </div>


                        <div class="mt-5">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="submit" class="btn btn-success w-100" id="add-btn"
                                    style="background: linear-gradient(90deg, #10A81B 0%, #06420B 100%);">Add </button>
                                <button type="button" class="btn btn-light w-100"
                                    data-bs-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include("include/footer.php")?>