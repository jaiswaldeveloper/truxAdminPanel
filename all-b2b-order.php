<?php include("include/header.php")?>

<style>
#manifested {
    background: #DCE2FF;
    color: #4656A3;
    font-weight: 600
}

#manifested .badge {
    color: #fff;
    background: #4656A3 !important;
    font-weight: 600
}

#Transit {
    background: #EBDCFF;
    color: #7939CC;
    font-weight: 600
}

#Transit .badge {
    color: #fff;
    background: #7939CC !important;
    font-weight: 600
}

#Pending {
    background: #FFD2D2;
    color: #BC3C43;
    font-weight: 600
}

#Pending .badge {
    color: #fff;
    background: #BC3C43 !important;
    font-weight: 600
}

#ofd {
    background: #FFECCA;
    color: #FFC459;
    font-weight: 600
}

#ofd .badge {
    color: #fff;
    background: #FFC459 !important;
    font-weight: 600
}

#Delivered {
    background: #CDFFD1;
    color: #10A81B;
    font-weight: 600
}

#Delivered .badge {
    color: #fff;
    background: #10A81B !important;
    font-weight: 600
}

#rto {
    background: #D3D3D3;
    color: #4E4E4E;
    font-weight: 600
}

#rto .badge {
    color: #fff;
    background: #4E4E4E !important;
    font-weight: 600
}

#notpick {
    background: #FFBFBF;
    color: #C10000;
    font-weight: 600
}

#notpick .badge {
    color: #fff;
    background: #C10000 !important;
    font-weight: 600
}

/* .pincodes-section .nav-justified .nav-item {
    margin: 0 10px;
} */

.pincodes-section .nav-justified .nav-item .nav-link {
    width: 100%;
    /* border: 1px solid #4C4C99; */
    /* background: #fff; */
    border-radius: 32px;


}

.pincodes-section .nav-pills .nav-link.active,
.nav-pills .show>.nav-link {

    border-radius: 32px;
    background: linear-gradient(90deg, #7E7EFF 0%, #4C4C99 100%);
}


.scrolling-wrapper {
    overflow-x: auto;
    white-space: nowrap;
}

.scrolling-wrapper ul {
    display: inline-block;
    white-space: nowrap;
    border-bottom: none;
}

.scrolling-wrapper li {
    display: inline-block;
    margin-right: 10px;
}

.scrolling-wrapper::-webkit-scrollbar {
    display: none;
}

.scrolling-wrapper {
    -ms-overflow-style: none;
    scrollbar-width: none;
}
</style>
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-transparent">
                        <h4 class="mb-sm-0">All B2B Order </h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Menu</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">B2B Panel</a></li>
                                <li class="breadcrumb-item active">All B2B Order</li>
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
                                            placeholder="Search by Request LR">
                                        <i class="ri-search-line search-icon"></i>
                                    </div>
                                </div>
                                <!--end col-->



                                <div class="col-xxl-3 col-sm-4">
                                    <div>

                                        <select class="js-example-basic-single w-100 form-control" name="state">
                                            <option value="" selected>All Member</option>
                                            <option value="">TRUXCARGO1 (KAVITA SHARMA)</option>

                                        </select>

                                    </div>
                                </div>
                                <div class="col-xxl-3 col-sm-4">
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

                                <div class="col-xxl-3 col-sm-4">
                                    <div>

                                        <select class="js-example-basic-single w-100 form-control" name="state">
                                            <option value="" selected>All Status </option>
                                            <option value="">Manifest</option>
                                            <option value="">In Transit</option>
                                            <option value="">Out For Delhivery</option>
                                            <option value="">Delhivery</option>
                                            <option value="">Not Picked</option>
                                            <option value="">RTO</option>
                                            <option value="">Pending</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-xxl-3 col-sm-4">
                                    <div>

                                        <select class="js-example-basic-single w-100 form-control" name="state">
                                            <option value="" selected>All Panel</option>
                                            <option value="">TRUXCARGODENSE B2B</option>
                                            <option value="">Delhivery B2B</option>
                                            <option value="">Delhivery cargo</option>
                                            <option value="">Rivigo</option>
                                            <option value="">Gati</option>
                                            <option value="">Oxygen</option>
                                            <option value="">DTDC B2B</option>
                                            <option value="">Delhivery Lite</option>
                                            <option value="">Smartr</option>
                                            <option value="">Ekart B2B</option>
                                            <option value="">Bluedart Surface</option>
                                            <option value="">Bluedart Air</option>
                                            <option value="">Vxpress</option>
                                        </select>

                                    </div>
                                </div>

                                <div class="col-xxl-3 col-sm-4">
                                    <div>

                                        <select class="js-example-basic-single w-100 form-control" name="state">
                                            <option value="" selected>All Payment</option>
                                            <option value="">COD</option>
                                            <option value="">Prepaid</option>
                                            <option value="">To-pay</option>
                                            <option value="">Franchise To-Pay</option>

                                        </select>

                                    </div>
                                </div>



                                <!--end col-->
                                <div class="col-xxl-2 col-sm-4">
                                    <div>
                                        <button type="button" class="btn btn-primary w-100"
                                            style="background: linear-gradient(90deg, #10A81B 0%, #06420B 100%);">
                                             
                                            Apply
                                        </button>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </form>
                    </div>

                    <div class="pincodes-section">


                        <div class="row justify-content-end mt-3">
                            <div class="col-xl-12">
                                <div class="scrolling-wrapper">

                                    <ul class="nav  nav-justified mb-3" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link" id="manifested" data-bs-toggle="tab">
                                                Manifested <span class="badge bg-danger  ">467</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link align-middle" id="Transit">
                                                In Transit <span class="badge bg-danger">936</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link align-middle" id="Pending">
                                                Pending <span class="badge bg-danger  ">47</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link align-middle" id="ofd">
                                                OFD <span class="badge bg-danger  ">47</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link align-middle" id="Delivered">
                                                Delivered <span class="badge bg-danger  ">28955</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link align-middle" id="rto">
                                                RTO <span class="badge bg-danger  ">47</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link align-middle" id="notpick">
                                                Not Picked <span class="badge bg-danger  ">47</span>
                                            </a>
                                        </li>

                                    </ul>
                                </div>




                            </div>
                        </div>

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
                                            <th scope="col" style="width: 10px;">
                                                    <div class="form-check">
                                                        <input class="form-check-input fs-15" type="checkbox" id="checkAll" value="option">
                                                    </div>
                                                </th>
                                                <th class="sort" data-sort="id"> CREATED BY &nbsp;</th>
                                                <th class="sort" data-sort="">LR No.</th>
                                                <th class="sort" data-sort="username">Order ID</th>
                                                <th class="sort" data-sort="name">AWB No.</th>
                                                <th class="sort" data-sort="type">Manifest Date &nbsp;</th>
                                                <th class="sort" data-sort="type">Manifest At &nbsp;</th>
                                                <th class="sort" data-sort="info">Origin &nbsp;</th>
                                                <th class="sort" data-sort="company">Payment Mode &nbsp;</th>
                                                <th class="sort" data-sort="cod">COD Amount &nbsp;</th>
                                                <th class="sort" data-sort="poc">Profit Amount</th>
                                                <th class="sort" data-sort="status">Panel</th>
                                                <th class="sort" data-sort="status">Status</th>


                                            </tr>
                                        </thead>
                                        <tbody class="list form-check-all">
                                            <tr>
                                            <th scope="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                                    </div>
                                                </th>
                                                <td><b>TRUXCARGO877</b> <br>
                                                Anurag Kumar</td>
                                                <td>270765932</td>
                                                <td>26541874</td>
                                                <td>18520111953523</td>
                                                <td class="date">06 Apr, 2021</td>
                                                <td>Delhi </td>
                                                <td>Delhi</td>
                                                <td>To-Pay	</td>
                                                <td>1253.93 </td>
                                                <td>0</td>
                                                <td>Delhivery Cargo	</td>
                                                <td class="status">
                                                    <span
                                                        class="badge bg-success-subtle text-secondary text-uppercase">Manifest</span>
                                                </td>



                                            </tr>

                                        </tbody>
                                    </table>
                                    <div class="noresult" style="display: none">
                                        <div class="text-center">
                                            <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"
                                                colors="primary:#121331,secondary:#08a88a"
                                                style="width:75px;height:75px"></lord-icon>
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


        </div>

    </div>
</div>

<!-- Modal -->
<div class="modal fade flip" id="deleteOrder" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body p-5 text-center">
                <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop"
                    colors="primary:#405189,secondary:#f06548" style="width:90px;height:90px"></lord-icon>
                <div class="mt-4 text-center">
                    <h4>You are about to delete a order ?</h4>
                    <p class="text-muted fs-15 mb-4">Deleting your order will remove all of your information from our
                        database.</p>
                    <div class="hstack gap-2 justify-content-center remove">
                        <button class="btn btn-link link-success fw-medium text-decoration-none" id="deleteRecord-close"
                            data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</button>
                        <button class="btn btn-danger" id="delete-record">Yes, Delete It</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end modal -->
<?php include("include/footer.php")?>