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
                        <h4 class="mb-sm-0">Category</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Menu</a></li>

                                <li class="breadcrumb-item"><a href="javascript: void(0);">Cashbook</a></li>
                                <li class="breadcrumb-item active">Category</li>
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
                                    <div class="flex-grow-1">

                                    </div>
                                    <div class="mt-3 mt-lg-0">
                                        <div class="col-auto">
                                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                                id="cashIn-btn" data-bs-target="#AddInModal"><i
                                                    class="ri-add-circle-line align-middle me-1"></i> Add
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
                        <div class="card-body">
                            <div class="listjs-table" id="customerList">

                                <div class="table-responsive table-card mb-1">
                                    <table class="table align-middle table-nowrap" id="customerTable">
                                        <thead class="table-light">
                                            <tr>
                                                <th class="sort" data-sort="id">
                                                    S No. &nbsp;</th>
                                                <th class="sort" data-sort="Pincode">Category</th>


                                                <th class="sort">Action</th>


                                            </tr>
                                        </thead>
                                        <tbody class="list form-check-all">
                                            <tr>
                                                <td>1</td>
                                                <td>Office Expense
                                                </td>


                                                <td>
                                                    <ul class="list-inline hstack gap-2 mb-0">
                                                        <li class="list-inline-item" data-bs-toggle="tooltip"
                                                            data-bs-trigger="hover" data-bs-placement="top"
                                                            title="Edit">
                                                            <a data-bs-toggle="modal" id="cashIn-btn"
                                                                data-bs-target="#editInModal"
                                                                class="text-success d-inline-block">
                                                                <i class="ri-pencil-fill fs-20"> </i>
                                                            </a>
                                                        </li>

                                                        <li class="list-inline-item" data-bs-toggle="tooltip"
                                                            data-bs-trigger="hover" data-bs-placement="top"
                                                            title="Remove">
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
                                    <div class="noresult" style="display: none">
                                        <div class="text-center">
                                            <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"
                                                colors="primary:#121331,secondary:#08a88a"
                                                style="width:75px;height:75px"></lord-icon>
                                            <h5 class="mt-2">Sorry! No Result Found</h5>
                                            <p class="text-muted mb-0">We've searched more than 150+
                                                Orders We did not
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


                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" placeholder="Enter Category" value="Office Expense
">
                                <label for="firstnamefloatingInput">Category </label>
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


                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" placeholder="Enter Category">
                            <label for="firstnamefloatingInput">Category </label>
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