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
.table thead{
    background: #7939CC;
    color: #fff;
}
.table tbody{
    background: #fff;
    color: #7939CC;
}
.table-nowrap td, .table-nowrap th {
    white-space: normal;
}
</style>
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-transparent">
                        <h4 class="mb-sm-0">PUR Penalty</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Pickups & Warehouse</a></li>
                                <li class="breadcrumb-item active">CashBook</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>

            <div class="plan-overview">
                <div class="row justify-content-center">
                    <h5 class="text-white">CSV File </h5>

                    <hr style="border: 1px dashed; color:#fff">

                    <div class="row">
                        <div class="col-xxl-5 col-sm-6 mb-3">
                            <div>
                                <input class="form-control rounded-5" type="file" id="formFile">
                            </div>
                            <div>
                                <button type="button" class="btn btn-success border-0 rounded-pill w-50 mt-3"
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
                            <h4 class="text-white">Sample</h4>

                        </div>
                        <!--end col-->

                        <div class="col-xxl-5 col-sm-4 col-12 mb-2">

                            <!-- Bordered Tables -->
                            <table class="table table-bordered table-nowrap">
                                <thead>
                                    <tr>
                                        <th scope="col">UserID</th>
                                        <th scope="col">Reason</th>
                                        <th scope="col">Transaction Id</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td >Sample TRUXCARGO1992 </td>
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



    </div>

</div>

<?php include("include/footer.php")?>