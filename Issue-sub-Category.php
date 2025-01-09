<?php include("include/header.php")?>
<style>
.select2-container--default .select2-selection--single {
    border-radius: 50px;
    background: #FFF;
    box-shadow: 0px 4px 4px 0px rgba(126, 126, 255, 0.30);
    border: 1px solid #7E7EFF !important;
}
</style>

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-transparent">
                        <h4 class="mb-sm-0">Support Issue Sub Category
                        </h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Menu</a></li>

                                <li class="breadcrumb-item"><a href="javascript: void(0);">Support</a></li>
                                <li class="breadcrumb-item active">Issue sub Category</li>
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
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                id="cashIn-btn" data-bs-target="#AddInModal"><i
                                                    class="ri-add-circle-line align-middle me-1"></i> Add Issue
                                                Category</button>
                                        </div>
                                    </div>
                                </div><!-- end card header -->
                            </div>
                            <!--end col-->
                        </div>

                    </div> <!-- end .h-100-->

                </div> <!-- end col -->


            </div>
            <div class="row">
                <div class="col-lg-12">


                    <div class="card">

                        <div class="table-responsive">
                            <table id="example" class="table " style="width:100%">
                                <thead>
                                    <tr>
                                        <th>S No. &nbsp;</th>
                                        <th>Category</th>
                                        <th>Sub Category </th>

                                        <th>Action &nbsp;</th>


                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>1</td>
                                        <td>Account Related
                                        </td>
                                        <td>Update Contact Details
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

                                                <li class="list-inline-item" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                                                    <a class="text-danger d-inline-block remove-item-btn"
                                                        data-bs-toggle="modal" href="#deleteOrder">
                                                        <i class="ri-delete-bin-5-fill fs-16"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </td>



                                    </tr>
                                </tbody>

                            </table>


                        </div>
                    </div>

                    <!-- end col -->
                </div>
                <!-- end col -->
            </div>



        </div>


        <div class="modal fade" id="editInModal" tabindex="-1" aria-labelledby="editInModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-light p-3">
                        <h5 class="modal-title" id="editInModalLabel">Edit Category
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                            id="close-modal"></button>
                    </div>
                    <form class="tablelist-form" autocomplete="off">
                        <div class="modal-body">


                        <div>
                        <label for="firstnamefloatingInput"> Category </label>

                            <select class="form-select mb-3 w-100" aria-label="Default select example"
                               >
                                <option value="" selected>Select Any One</option>
                                <option value="">Account Related</option>
                                <option value="">Branch/FE Related</option>
                                <option value="">Client Panel Related issues</option>
                                <option value="">Delivery Related</option>
                                <option value="">Finance Related Issues</option>
                                <option value="">Operation Related</option>
                                <option value="">Package Details Related </option>
                                <option value="">Pick up Related</option>
                                <option value="">Pick up Request</option>
                                <option value="">Product Related</option>
                                <option value="">Report Related</option>
                            </select>



                        </div>
                        <div class=" mb-3">
                            <label for="firstnamefloatingInput">Sub Category </label>
                            <input type="text" class="form-control" value="Update Contact Details" >
                        </div>

                            <div class="mt-5">
                                <div class="hstack gap-2 justify-content-end">
                                    <button type="submit" class="btn btn-success w-100" id="add-btn"
                                        style="background: linear-gradient(90deg, #10A81B 0%, #06420B 100%);">Update
                                    </button>
                                    <button type="button" class="btn btn-light w-100"
                                        data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>





        </div>

        <!-- container-fluid -->
    </div>


    <!-- End Page-content -->
    <div class="modal fade" id="AddInModal" tabindex="-1" aria-labelledby="AddInModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-light p-3">
                    <h5 class="modal-title" id="AddInModalLabel">Add Category
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        id="close-modal"></button>
                </div>
                <form class="tablelist-form" autocomplete="off">
                    <div class="modal-body">

                        <div>
                        <label for="firstnamefloatingInput"> Category </label>

                            <select class="form-select mb-3 w-100" aria-label="Default select example"
                               >
                                <option value="" selected>Select Any One</option>
                                <option value="">Account Related</option>
                                <option value="">Branch/FE Related</option>
                                <option value="">Client Panel Related issues</option>
                                <option value="">Delivery Related</option>
                                <option value="">Finance Related Issues</option>
                                <option value="">Operation Related</option>
                                <option value="">Package Details Related </option>
                                <option value="">Pick up Related</option>
                                <option value="">Pick up Request</option>
                                <option value="">Product Related</option>
                                <option value="">Report Related</option>
                            </select>



                        </div>
                        <div class=" mb-3">
                            <label for="firstnamefloatingInput">Sub Category </label>
                            <input type="text" class="form-control" placeholder="Enter Sub Category">
                        </div>


                        <div class="mt-5">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="submit" class="btn btn-success w-100" id="add-btn"
                                    style="background: linear-gradient(90deg, #10A81B 0%, #06420B 100%);">Save </button>
                                <button type="button" class="btn btn-light w-100"
                                    data-bs-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>



</div>

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
<?php include("include/footer.php")?>