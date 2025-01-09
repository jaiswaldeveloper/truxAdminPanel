<?php include("include/header.php")?>

<style>


.plan-overview .card {
    background: #fff;

}

.table thead {
    background: #7939CC;
    color: #fff;
}

.table tbody {
    background: #fff;
    color: #7939CC;
}

.table-nowrap td,
.table-nowrap th {
    white-space: normal;
}
</style>
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-transparent">
                        <h4 class="mb-sm-0">Find Reopen Dispute LRs</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Menu</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Weight Reconciliation
                                    </a></li>
                                <li class="breadcrumb-item active">Find Reopen Dispute LRs</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>

            <div class="plan-overview">
                <div class="card">
                    <div class="row justify-content-center">

                        <hr style="border: 1px dashed; color:#fff">

                        <div class="row">

                            <div class="col-xxl-5 col-sm-6 mb-3">

                                <div>
                                    <label for="">CSV File</label>
                                    <input class="form-control rounded-5" type="file" id="formFile">
                                </div>
                                <div>
                                    <button type="button" class="btn btn-success border-0  w-50 mt-3"
                                        style="background: linear-gradient(90deg, #10A81B 0%, #36CB72 100%);">
                                        Find
                                    </button>
                                </div>
                            </div>
                            <!--end col-->

                            <!--end col-->
                            <div class="col-xxl-1 col-sm-4 mb-2">

                            </div>
                            <div class="col-xxl-1 col-sm-4 mb-2 mt-3">
                            <h4 style="color: #7E7EFF"
                            >Sample</h4>
                            </div>
                            <!--end col-->

                            <div class="col-xxl-5 col-sm-4 col-12 mb-2">
                                <div class="table-responsive">
                                    <!-- Bordered Tables -->
                                    <table class="table table-bordered table-nowrap">
                                        <thead>
                                            <tr>
                                                <th scope="col">LR No</th>
                                                <th scope="col">Weight</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td> TRUXCARGO1992 </td>
                                                <td>25</td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>






                    </div>
                </div>
                <div class="card my-3">
                    <div class="row justify-content-center">

                        <hr style="border: 1px dashed; color:#fff">

                        <div class="row">
                            <h5 class="mb-3" style="color: #7E7EFF">Regenerate Weight Reconcilliation</h5>

                            <div class="col-xxl-5 col-sm-6 mb-3">

                                <div>
                                    <label for="">CSV File</label>
                                    <input class="form-control rounded-5" type="file" id="formFile">
                                </div>
                                <div>
                                    <button type="button" class="btn btn-success border-0  w-50 mt-3"
                                        style="background: linear-gradient(90deg, #10A81B 0%, #36CB72 100%);">
                                        Import
                                    </button>
                                </div>
                            </div>
                            <!--end col-->

                            <!--end col-->
                            <div class="col-xxl-1 col-sm-4 mb-2">

                            </div>
                            <div class="col-xxl-1 col-sm-4 mb-2 mt-3">
                                <h4 style="color: #7E7EFF"
                                >Sample</h4>
                            </div>
                            <!--end col-->

                            <div class="col-xxl-5 col-sm-4 col-12 mb-2">
                                <div class="table-responsive">
                                    <!-- Bordered Tables -->
                                    <table class="table table-bordered table-nowrap">
                                        <thead>
                                            <tr>
                                                <th scope="col">LR No</th>
                                                <th scope="col">Weight</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td> TRUXCARGO1992 </td>
                                                <td>25</td>

                                            </tr>

                                        </tbody>
                                    </table>
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