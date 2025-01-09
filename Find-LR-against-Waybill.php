<?php include("include/header.php")?>
<style>
.nav-pills .nav-link.active,
.nav-pills .show>.nav-link {
    background: linear-gradient(180deg, #7E7EFF, #4C4C99) !important;
    box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
}
/* .nav-pills .nav-link {
    box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
    background: #fff !important;
} */


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
                        <h4 class="mb-sm-0">Find LR against Waybill</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Menu</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">B2B Panel</a></li>
                                <li class="breadcrumb-item active">Find LR against Waybill</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-6 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <ul class="nav nav-pills nav-justified gap-2 mb-3" role="tablist">
                                <li class="nav-item waves-effect waves-light">
                                    <a class="nav-link rounded-pill active" data-bs-toggle="tab"
                                        href="#pill-justified-home-1" role="tab">
                                        B2B
                                    </a>
                                </li>
                                <li class="nav-item waves-effect waves-light">
                                    <a class="nav-link rounded-pill " data-bs-toggle="tab"
                                        href="#pill-justified-profile-1" role="tab">
                                        B2C
                                    </a>
                                </li>

                            </ul>
                            <hr style="border : 1px dashed #7E7EFF">
                            <!-- Tab panes -->
                            <div class="tab-content text-muted">
                                <div class="tab-pane active" id="pill-justified-home-1" role="tabpanel">
                                    <div>
                                        <label for="">CSV File</label>
                                        <input type="file" class="form-control rounded-5 w-100">
                                    </div>

                                    <button class="btn btn-success w-100 mt-5"
                                        style="background: linear-gradient(90deg, #10A81B, #007736)">Submit</button>

                                </div>
                                <div class="tab-pane" id="pill-justified-profile-1" role="tabpanel">
                                    <div>
                                        <label for="">CSV File</label>
                                        <input type="file" class="form-control rounded-5 w-100">
                                    </div>

                                    <button class="btn btn-success w-100 mt-5"
                                        style="background: linear-gradient(90deg, #10A81B, #007736)">Submit</button>
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