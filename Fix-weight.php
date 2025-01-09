<?php include("include/header.php")?>
<style>
label {
    color: #7E7EFF;
}

.Dimensions-slot label {
    color: #fff;
}

.Dimensions-slot {
    background: #7E7EFF;
    padding: 1rem;
    border-radius: 5px;
    min-height: 150px;
    position: relative;
    overflow: hidden;
}

.border-end {
    width: 2px;
    min-height: 150px;
    background: #fff;
    margin: auto;


}

.Dimensions-slot::before {
    content: "";
    background: url("assets/images/element-cal.png");
    width: 100%;
    height: 85px;
    position: absolute;
    bottom: 0;
    left: 0;
    background-repeat: no-repeat;

}

.cm {
    position: relative;
}

.Dimensions-slot .form-control {
    border-radius: 8px;
    border: 0.5px solid rgba(255, 255, 255, 0.00);
    background: radial-gradient(236.47% 132.1% at 0% 9.38%, rgba(255, 255, 255, 0.40) 0%, rgba(255, 255, 255, 0.00) 100%);
    backdrop-filter: blur(21px);
    z-index: 0;

}

.Dimensions-slot::placeholder {
    color: #fff !important;

}

.cm::before {
    content: "cm";
    background: #fff;
    height: 100%;
    position: absolute;
    z-index: 1;
    border-radius: 5px;
    margin: auto;
    right: 0;
    padding: 8px;
    z-index: 2;

}
</style>
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-transparent">
                        <h4 class="mb-sm-0">Fix weight</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Menu</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">B2B Panel</a></li>
                                <li class="breadcrumb-item active">Fix weight</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-xl-8 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="mb-3">LR transfer</h5>
                            <div class="row">


                                <div class="col-xxl-12 mb-2 ">
                                    <label class="" for="autoSizingInputGroup">LR Details
                                    </label>
                                    <div class="input-group">

                                        <input type="text" class="form-control" id="autoSizingInputGroup" placeholder="Enter LR No. 
">
                                    </div>
                                </div>
                                <div class="col-xxl-12 mb-3">
                                    <label class="" for="autoSizingInputGroup">Weight
                                    </label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="autoSizingInputGroup" placeholder="Enter Weight 
">
                                    </div>
                                </div>
                                <div class="col-xxl-12 mb-3">
                                    <div class="Dimensions-slot">
                                        <h5>Dimensions(cm)
                                        </h5>

                                        <div class="row">

                                            <div class="col-xxl-8">
                                                <div class="row justify-content-center">
                                                    <div class="col-xxl-3 mb-3">
                                                        <label class="" for="autoSizingInputGroup">Qty*
                                                        </label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control"
                                                                id="autoSizingInputGroup" placeholder=" qty">
                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-3 mb-3">
                                                        <label class="" for="autoSizingInputGroup">Length*
                                                        </label>
                                                        <div class="input-group cm">
                                                            <input type="text" class="form-control "
                                                                id="autoSizingInputGroup" placeholder=" Length ">
                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-3 mb-3">
                                                        <label class="" for="autoSizingInputGroup">Weight*
                                                        </label>
                                                        <div class="input-group cm">
                                                            <input type="text" class="form-control "
                                                                id="autoSizingInputGroup" placeholder=" Weight ">
                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-3 mb-3">
                                                        <label class="" for="autoSizingInputGroup">Breadth*
                                                        </label>
                                                        <div class="input-group cm">
                                                            <input type="text" class="form-control "
                                                                id="autoSizingInputGroup" placeholder=" Breadth ">
                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-5 mb-3">
                                                        <div class="">
                                                            <button class="btn btn-light rounded-pill w-100 mt-3"><svg
                                                                    width="22" height="22" viewBox="0 0 22 22"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M17 0.25H5C3.74071 0.251588 2.53345 0.752542 1.643 1.643C0.752542 2.53345 0.251588 3.74071 0.25 5V17C0.251588 18.2593 0.752542 19.4666 1.643 20.357C2.53345 21.2475 3.74071 21.7484 5 21.75H17C18.2593 21.7484 19.4666 21.2475 20.357 20.357C21.2475 19.4666 21.7484 18.2593 21.75 17V5C21.7484 3.74071 21.2475 2.53345 20.357 1.643C19.4666 0.752542 18.2593 0.251588 17 0.25ZM16 12C13.7909 12 12 13.7909 12 16C12 16.2652 11.8946 16.5196 11.7071 16.7071C11.5196 16.8946 11.2652 17 11 17C10.7348 17 10.4804 16.8946 10.2929 16.7071C10.1054 16.5196 10 16.2652 10 16C10 13.7909 8.20914 12 6 12C5.73478 12 5.48043 11.8946 5.29289 11.7071C5.10536 11.5196 5 11.2652 5 11C5 10.7348 5.10536 10.4804 5.29289 10.2929C5.48043 10.1054 5.73478 10 6 10C8.20914 10 10 8.20914 10 6C10 5.73478 10.1054 5.48043 10.2929 5.29289C10.4804 5.10536 10.7348 5 11 5C11.2652 5 11.5196 5.10536 11.7071 5.29289C11.8946 5.48043 12 5.73478 12 6C12 8.20914 13.7909 10 16 10C16.2652 10 16.5196 10.1054 16.7071 10.2929C16.8946 10.4804 17 10.7348 17 11C17 11.2652 16.8946 11.5196 16.7071 11.7071C16.5196 11.8946 16.2652 12 16 12Z"
                                                                        fill="#7E7EFF" />
                                                                </svg>
                                                                Add More</button>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>


                                            <div class="col-xxl-1 mb-3">
                                                <div class="border-end"></div>
                                            </div>
                                            <div class="col-xxl-3 mb-3">
                                                <img src="./assets/images/cal-demisiion.png" alt="" srcset=""
                                                    class="w-100">
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-12mb-3">
                                    <div class="">
                                        <button type="submit" class="btn btn-success w-100 lh-lg"
                                            style="background: linear-gradient(90deg, #10A81B 0%, #06420B 100%) ">Submit
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