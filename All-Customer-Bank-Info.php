<?php include("include/header.php")?>


<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-transparent">
                        <h4 class="mb-sm-0">All Customer Bank Info</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Menu</a></li>
                                <li class="breadcrumb-item active"> Customer</li>

                                <li class="breadcrumb-item active">All Customer Bank Info</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-xl-12">
                    <div class="card-body form-bg-gradient">
                        <form>
                            <div class="row g-3">
                                <div class="col-xxl-5 col-sm-6">
                                    <div class="search-box">
                                        <input type="text" class="form-control search"
                                            placeholder="Search By Name/Phone/Username/Company">
                                        <i class="ri-search-line search-icon"></i>
                                    </div>
                                </div>
                                <!--end col-->

                                <!--end col-->
                                <div class="col-xxl-2 col-sm-4">
                                    <div>
                                        <button type="button" class="btn btn-primary w-100">
                                            Search
                                        </button>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </form>
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
                                                    <div class="d-flex flex-wrap gap-2 my-2">
                                                        <button type="button" class="btn btn-success"
                                                            data-text="Excel"><span><svg width="24" height="24"
                                                                    viewBox="0 0 24 24" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M6.14902 0H14.1761L20.9752 7.09344V20.8744C20.9752 22.5996 19.5748 24 17.8496 24H6.14902C4.42386 24 3.02344 22.5996 3.02344 20.8744V3.12558C3.02344 1.40042 4.42386 0 6.14902 0Z"
                                                                        fill="white" />
                                                                    <path opacity="0.302" fill-rule="evenodd"
                                                                        clip-rule="evenodd"
                                                                        d="M14.1641 0V7.03255H20.9734L14.1641 0Z"
                                                                        fill="#10A81B" />
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M8.3125 17.6075H11.499V18.8151H8.3125V17.6075ZM12.4935 11.4375H15.6901V12.635H12.4935V11.4375ZM8.3125 11.4375H11.499V12.635H8.3125V11.4375ZM12.4935 13.4671H15.6901V14.6747H12.4935V13.4671ZM8.3125 13.4671H11.499V14.6747H8.3125V13.4671ZM12.4935 15.5779H15.6901V16.7855H12.4935V15.5779ZM8.3125 15.5779H11.499V16.7855H8.3125V15.5779ZM12.4935 17.6075H15.6901V18.8151H12.4935V17.6075Z"
                                                                        fill="#10A81B" />
                                                                </svg>
                                                                EXCEL</span></button>
                                                        <button type="button" class="btn btn-info"
                                                            data-text="CSV"><span><svg width="24" height="24"
                                                                    viewBox="0 0 24 24" fill="none"
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
                                                        <button type="button" class="btn btn-danger"
                                                            data-text="PDF"><span><svg width="19" height="24"
                                                                    viewBox="0 0 19 24" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M1.02344 3.12443V3.12442C1.02341 1.67344 2.19684 0.5 3.64786 0.5H11.4586L17.9724 7.28952V20.8756C17.9724 22.3272 16.7984 23.5 15.354 23.5H3.64786C2.19688 23.5 1.02344 22.3266 1.02344 20.8756V3.12443Z"
                                                                        fill="white" stroke="#BC3C43" />
                                                                    <path opacity="0.302"
                                                                        d="M17.2989 6.53449H12.1719V1.23578L17.2989 6.53449Z"
                                                                        fill="white" stroke="#BC3C43" />
                                                                    <path
                                                                        d="M10.0705 14.1193C10.2019 14.1725 10.3273 14.2404 10.4465 14.3217L10.4556 14.3279L10.4556 14.328C10.6616 14.4752 10.8192 14.6763 10.9243 14.9217C11.029 15.1659 11.0727 15.4339 11.0727 15.7183C11.0727 15.9977 11.0287 16.2655 10.9243 16.509C10.8192 16.7544 10.6616 16.9556 10.4555 17.1028L10.4466 17.1091L10.4465 17.109C10.3274 17.1902 10.202 17.2581 10.0708 17.3113C10.0815 17.3079 10.0921 17.3045 10.1027 17.301L10.0705 14.1193ZM10.0705 14.1193C10.0813 14.1227 10.092 14.1261 10.1027 14.1297L10.1028 14.1297C10.3257 14.204 10.5166 14.3039 10.6788 14.4346L10.6788 14.4346L10.6855 14.4399C10.8277 14.5504 10.9523 14.7071 11.0484 14.9252C11.1397 15.146 11.1942 15.4084 11.1942 15.7183C11.1942 16.0218 11.1399 16.2843 11.0484 16.5054C10.9523 16.7235 10.8277 16.8802 10.6855 16.9908L10.6855 16.9907L10.6788 16.9961C10.5166 17.1268 10.3258 17.2266 10.1028 17.301L10.0705 14.1193ZM8.44153 17.4072H8.34407V14.0234H8.44153V14.477V16.9537V17.4072ZM12.8793 15.1786V15.6261V15.6786V16.1261V17.4072H12.7579V14.0234H12.8793V14.477V15.1786ZM4.62144 16.33V17.4072H4.5V14.0234H4.62144V14.477V15.3765V15.83V15.8765V16.33ZM6.46322 14.225C6.37697 14.1462 6.28205 14.0912 6.185 14.0533C6.37696 14.0931 6.51793 14.1705 6.62708 14.2725L6.62706 14.2725L6.6314 14.2765C6.78773 14.4192 6.88233 14.6186 6.88233 14.9267C6.88233 15.2349 6.78773 15.4342 6.6314 15.577L6.63137 15.577L6.62708 15.581C6.51796 15.683 6.37706 15.7603 6.18521 15.8001C6.28217 15.7623 6.377 15.7072 6.46318 15.6285C6.67231 15.4437 6.7669 15.1927 6.7669 14.9268C6.7669 14.6609 6.67242 14.4099 6.46322 14.225Z"
                                                                        fill="white" stroke="#BC3C43" />
                                                                </svg>
                                                                PDF</span></button>
                                                        <button type="button" class="btn btn-light "
                                                            data-text="All Data"><span> <svg width="25" height="24"
                                                                    viewBox="0 0 25 24" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
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
                                        </div><!-- end card header -->
                                    </div>
                                    <!--end col-->
                                </div>

                            </div> <!-- end .h-100-->

                        </div> <!-- end col -->


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
                                            <th class="sort" data-sort="id">#</th>
                                            <th class="sort" data-sort="username">Username</th>
                                            <th class="sort" data-sort="BankHolder">Bank Holder Name</th>
                                            <th class="sort" data-sort="Bank">Bank</th>
                                            <th class="sort" data-sort="Account">Account Name</th>
                                            <th class="sort" data-sort="Ifsc">Ifsc </th>
                                            <th class="sort" data-sort="Cheque">Cancelled Cheque </th>
                                            <th class="sort" data-sort="status">Status</th>
                                            <th class="sort">Action</th>


                                        </tr>
                                    </thead>
                                    <tbody class="list form-check-all">
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <b>TRUXCARGO86</b><br>
                                                Arjesh Goyal
                                            </td>
                                            <td>AJAY ENTERPRISES </td>
                                            <td>Bank of India </td>
                                            <td>711720110000378 </td>
                                            <td>BKID0007117</td>
                                            <td><a href="https://b2b.truxcargo.com/uploads/bankCancel_Cheque.jpeg"
                                                    target="_blank"><img
                                                        src="https://b2b.truxcargo.com/uploads/bank/Cancel_Cheque.jpeg"
                                                        width="100"></a></td>
                                            <td class="status"><span
                                                    class="badge bg-success-subtle text-success ">Verified</span>
                                            </td>
                                            <td>
                                                <ul class="list-inline hstack gap-2 mb-0">
                                                    <li class="list-inline-item" data-bs-toggle="tooltip"
                                                        data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                                                        <a data-bs-toggle="modal" id="cashIn-btn"
                                                            data-bs-target="#editInModal"
                                                            class="text-success d-inline-block">
                                                            <i class="ri-pencil-fill fs-20"> </i>
                                                        </a>
                                                    </li>

                                                </ul>
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

                            <div class="d-flex justify-content-center">
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

        <div class="modal fade" id="editInModal" tabindex="-1" data-bs-backdrop="static"
            aria-labelledby="editInModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-light p-3">
                        <h5 class="modal-title" id="editInModalLabel">Edit Bank
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                            id="close-modal"></button>
                    </div>
                    <form class="tablelist-form" autocomplete="off">
                        <div class="modal-body">


                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" value="TRUXCARGO86
">
                                <label for="firstnamefloatingInput">Username </label>
                            </div>
                            <div class="d-flex flex-lg-nowrap flex-wrap justify-content-between w-100 gap-2">
                                <div class="form-floating mb-3  w-100">
                                    <input type="text" class="form-control" value="711720110000378
">
                                    <label for="firstnamefloatingInput">Account No </label>
                                </div>
                                <div class="form-floating mb-3  w-100">
                                    <input type="text" class="form-control" value="BKID0007117
">
                                    <label for="firstnamefloatingInput">IFSC </label>
                                </div>

                            </div>
                            <div class=" mb-3 ">
                                <button class="btn btn-success">Verified</button>
                            </div>

                            <div class="d-flex flex-lg-nowrap flex-wrap justify-content-between w-100 gap-2">
                                <div class="form-floating mb-3   w-100">
                                    <input type="text" class="form-control" value="Bank of India
">
                                    <label for="firstnamefloatingInput">Bank Name </label>
                                </div>
                                <div class="form-floating mb-3  w-100">
                                    <input type="text" class="form-control" value="AJAY ENTERPRISES
">
                                    <label for="firstnamefloatingInput">Account Holder Name </label>
                                </div>
                                <div class="form-floating mb-3  w-100">
                                    <input type="text" class="form-control" value="1">
                                    <label for="firstnamefloatingInput">Verified Account </label>
                                </div>

                            </div>
                            <div>
                                <label for="">Cancel Cheque</label>
                                <div class=" file-design mb-3 w-75 ">
                                    <input type="file" >

                                </div>

                                <small>(Max size: 100KB)</small>
                                <br>

                                <a href="https://b2b.truxcargo.com/uploads/bank/Cancel_Cheque.jpeg" target="_blank"><img src="https://b2b.truxcargo.com/uploads/bank/Cancel_Cheque.jpeg" style="width:auto; height:150px"></a>
                            </div>
                    </form>
                </div>
            </div>





        </div>

    </div>
</div>


<?php include("include/footer.php")?>