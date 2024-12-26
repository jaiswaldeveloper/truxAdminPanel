<?php include("include/header.php")?>

<style>
.team-details-btn {
    display: none;
}

.team-body::before {
    content: "";
    width: 500px;
    height: 350px;
    background: url(assets/images/team-bg.png);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    position: absolute;
    left: 0;
    bottom: 0;
}

.team-body::after {
    content: "";
    width: 219px;
    height: 376px;
    background: url(assets/images/team-bg-after.png);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    position: absolute;
    right: 0;
    bottom: 0;
}

.ceo {
    margin-top: -60%;
    z-index: 2;
    position: sticky;
    width: 100%;
}

.ceo-wrapper {
    width: 14%;
}

#wrapper {
    margin-left: auto;
    margin-right: auto;
    /* max-width: 64em; */
}

.main-team::before {
    display: none
}

/* .organizational-chart ol::before {
    display: none;

} */
.small,
small {
    font-weight: 400;
}

#container {
    float: left;
    padding: 1em;
    width: 100%;
}

.site-name {
    padding: 5px 0 5px 0;
    border-radius: 10px;
    color: #fff;
    background: #3e50b4;
    /* background: -webkit-linear-gradient(left top, #3e50b4, #2196F3); */

    background: #7E7EFF;
}

.outborder {
    display: inline-block;
}

.site,
.subdomain,
.subdomain2,
.redirects,
.host,
.email,
.email2,
.dns {
    display: inline-block;
    background-size: 4762px 48px;
    /* width: 48px;
        height: 48px; */
    background-image: url(http://www.rayan.co/uploads/icon_spritemap.svg);
}

.chart-text {
    display: block;
    /* padding: 5px 0 8px 0 !important; */
    font-size: 16px;
    color: #fff;
    font-weight: bold
}

.subchart-text h5 {
    margin: 0;
    color: #fff;
}

.subchart-text {
    text-align: "center";
    -webkit-transition: all .3s ease-in-out;
    -moz-transition: all .3s ease-in-out;
    -o-transition: all .3s ease-in-out;
    -ms-transition: all .3s ease-in-out;
    transition: all .3s ease-in-out;
    background: url(http://www.rayan.co/uploads/right.png) no-repeat left;
    display: block;
    padding: 5px !important;
    font-size: 14px;
    font-weight: bold;
    color: #ffffff;
    font-weight: bold;
    border-radius: 5px;
    background: linear-gradient(90deg, #546CFF 0%, #324199 100%);
}



.site {
    background-position: -3654px 0;
}

.subdomain {
    background-position: -3919px 0;
}

.subdomain2 {
    background-position: -106px 0;
}

.redirects {
    background-position: -3389px 0;
}

.host {
    background-position: -4501.9px 0;
}

.email {
    background-position: -1483px 0
}

.email2 {
    background-position: -1325px 0;
}

.dns {
    background-position: -4713.9px 0;
}

@media screen and (max-width: 64em) {


    ol.organizational-chart>li>div:first-of-type:after,
    ol.organizational-chart>li>div:before {
        display: none;
    }

    ol.organizational-chart>li>ol:before {
        left: 49.5% !important;
        right: 0;
    }

    ol.organizational-chart>li>ol:after {
        left: 0;
        width: 50% !important;
    }

    .ceo {
        margin-top: inherit;
        z-index: 2;
        position: inherit;
        width: 100%;

    }

    .team-body::before {
        width: 100%;

    }

    .ceo-wrapper {
        width: 100%;
    }

    .team-body::after {
        display: none;
    }

    .team-details-btn {
        display: block;
    }

    .team-details {
        display: none;
    }
}

.text-holder {
    display: inline-block;
    font-size: 15px;
    vertical-align: top;
    margin-top: 1px;
    margin-left: 10px;
    line-height: 22px;
    text-align: left
}

.text-holder span {
    font-size: 13px;
    display: block;
}

.img-holder {
    width: 30px;
    height: 30px;
    border-radius: 50%;
    display: inline-block;
    background: #fff;
    padding: 4px;
}

.img-holder img {
    width: 100%;
}


ol.organizational-chart,
ol.organizational-chart ol,
ol.organizational-chart li,
ol.organizational-chart li>div {
    position: relative;
}

ol.organizational-chart,
ol.organizational-chart ol {
    list-style: none;
    margin: 0;
    padding: 0;
}

ol.organizational-chart {
    text-align: center;
}

ol.organizational-chart ol {
    padding-top: 1em;
}

ol.organizational-chart ol:before,
ol.organizational-chart ol:after,
ol.organizational-chart li:before,
ol.organizational-chart li:after,
ol.organizational-chart>li>div:before,
ol.organizational-chart>li>div:after {
    background-color: #324199;
    content: '';
    position: absolute;
}

ol.organizational-chart li:before {
    background: #ffffff;
    z-index: 2;
    background: linear-gradient(90deg, #546CFF 0%, #324199 100%);
    border: 3px solid #ffffff;
}

ol.organizational-chart ol>li {
    padding: 1em 0 0 1em;
}

ol.organizational-chart>li ol:before {
    height: 1em;
    left: 50%;
    top: 0;
    width: 3px;
}

ol.organizational-chart>li ol:after {
    height: 3px;
    left: 3px;
    top: 1em;
    width: 50%;
}

ol.organizational-chart>li ol>li:not(:last-of-type):before {
    height: 10px;
    left: -4px;
    top: 1.7em;
    width: 11px;
    border-radius: 50px
}

ol.organizational-chart>li ol>li:not(:last-of-type):after {
    height: 100%;
    left: 0;
    top: 0;
    width: 3px;
}

ol.organizational-chart>li ol>li:last-of-type:before {
    height: 10px;
    left: -4px;
    top: 1.7em;
    width: 11px;
    background: linear-gradient(90deg, #546CFF 0%, #324199 100%);
    border: 3px solid #ffffff;
    border-radius: 50px;
}

ol.organizational-chart>li ol>li:last-of-type:after {
    height: 1.7em;
    left: 0;
    top: 0;
    width: 3px;
}

ol.organizational-chart li>div {}

/*** PRIMARY ***/
ol.organizational-chart>li>div {}

ol.organizational-chart>li>div:before {
    bottom: 2em;
    height: 3px;
    right: -1em;
    width: 1em;
}

ol.organizational-chart>li>div:first-of-type:after {
    bottom: 0;
    height: 2em;
    right: -1em;
    width: 3px;
}

ol.organizational-chart>li>div+div {
    margin-top: 1em;
}

ol.organizational-chart>li>div+div:after {
    height: calc(100% + 1em);
    right: -1em;
    top: -1em;
    width: 3px;
}

/*** SECONDARY ***/
ol.organizational-chart>li>ol:before {
    left: inherit;
    right: 0;
}

ol.organizational-chart>li>ol:after {
    left: 0;
    width: 100%;
}

ol.organizational-chart>li>ol>li>div {
    /* border: 2px solid #546CFF; */
    display: block;
    border-radius: 10px;
    padding: 10px 0 5px 0;
    background: linear-gradient(90deg, #7E7EFF 0%, #6D6DB5 100%);
    color: #fff;
}

/*** TERTIARY ***/
ol.organizational-chart>li>ol>li>ol>li>div {
    display: list-item;
    text-align: center
}

/*** QUATERNARY ***/
ol.organizational-chart>li>ol>li>ol>li>ol>li>div {
    background-color: #fca858;
}

/*** QUINARY ***/
ol.organizational-chart>li>ol>li>ol>li>ol>li>ol>li>div {
    background-color: #fddc32;
}

/*** MEDIA QUERIES ***/
@media only screen and (min-width: 64em) {

    ol.organizational-chart {
        margin-left: -1em;
        margin-right: -1em;
    }

    /* PRIMARY */
    ol.organizational-chart>li>div {
        display: block;
        float: none;
        margin: 0 1em 1em 1em;
        vertical-align: bottom;
        width: 15%;
        margin: auto;
        /* margin-top: 2% */
    }

    ol.organizational-chart>li>div:only-of-type {
        margin-bottom: 0;
    }

    ol.organizational-chart>li>div:first-of-type:nth-last-of-type(2),
    ol.organizational-chart>li>div:first-of-type:nth-last-of-type(2)~div {
        width: calc((100% / 2) - 2em - 4px);
    }

    ol.organizational-chart>li>div:first-of-type:nth-last-of-type(3),
    ol.organizational-chart>li>div:first-of-type:nth-last-of-type(3)~div {
        width: calc((100% / 3) - 2em - 4px);
    }

    ol.organizational-chart>li>div:first-of-type:nth-last-of-type(4),
    ol.organizational-chart>li>div:first-of-type:nth-last-of-type(4)~div {
        width: calc((100% / 4) - 2em - 4px);
    }

    ol.organizational-chart>li>div:first-of-type:nth-last-of-type(5),
    ol.organizational-chart>li>div:first-of-type:nth-last-of-type(5)~div {
        width: calc((100% / 5) - 2em - 4px);
    }

    ol.organizational-chart>li>div:before,
    ol.organizational-chart>li>div:after {
        bottom: -1em !important;
        top: inherit !important;
    }

    ol.organizational-chart>li>div:before {
        height: 1em !important;
        left: 50% !important;
        width: 3px !important;
    }

    ol.organizational-chart>li>div:only-of-type:after {
        display: none;
    }

    ol.organizational-chart>li>div:first-of-type:not(:only-of-type):after,
    ol.organizational-chart>li>div:last-of-type:not(:only-of-type):after {
        bottom: -1em;
        height: 3px;
        width: calc(50% + 1em + 3px);
    }

    ol.organizational-chart>li>div:first-of-type:not(:only-of-type):after {
        left: calc(50% + 3px);
    }

    ol.organizational-chart>li>div:last-of-type:not(:only-of-type):after {
        left: calc(-1em - 3px);
    }

    ol.organizational-chart>li>div+div:not(:last-of-type):after {
        height: 3px;
        left: -2em;
        width: calc(100% + 4em);
    }

    /* SECONDARY */
    ol.organizational-chart>li>ol {
        display: flex;
        flex-wrap: nowrap;
    }

    ol.organizational-chart>li>ol:before,
    ol.organizational-chart>li>ol>li:before {
        height: 10px !important;
        left: 50% !important;
        top: -4px !important;
        border-radius: 50px;
        /* width: 11px !important; */
        z-index: 1;
    }

    ol.organizational-chart>li>ol:after {
        display: none;
    }

    ol.organizational-chart>li>ol>li {
        flex-grow: 1;
        padding-left: 1em;
        padding-right: 1em;
        padding-top: 1em;
    }

    ol.organizational-chart>li>ol>li:only-of-type {
        padding-top: 0;
    }

    ol.organizational-chart>li>ol>li:only-of-type:before,
    ol.organizational-chart>li>ol>li:only-of-type:after {
        display: none;
    }

    ol.organizational-chart>li>ol>li:first-of-type:not(:only-of-type):after,
    ol.organizational-chart>li>ol>li:last-of-type:not(:only-of-type):after {
        height: 3px;
        top: 0;
        width: 50%;
    }

    ol.organizational-chart>li>ol>li:first-of-type:not(:only-of-type):after {
        left: 50%;
    }

    ol.organizational-chart>li>ol>li:last-of-type:not(:only-of-type):after {
        left: 0;
    }

    ol.organizational-chart>li>ol>li+li:not(:last-of-type):after {
        height: 3px;
        left: 0;
        top: 0;
        width: 100%;
    }

}
</style>
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-transparent">
                        <h4 class="mb-sm-0">Team hierarchy</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Menu</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Team hierarchy</a></li>
                                <li class="breadcrumb-item active">Team hierarchy</li>
                            </ol>
                        </div>

                    </div>
                </div>

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
                                                Team Hierarchy</button>
                                        </div>
                                    </div>
                                </div><!-- end card header -->
                            </div>
                            <!--end col-->
                        </div>




                    </div> <!-- end .h-100-->

                </div> <!-- end col -->



                <div class="card" style="min-height: 900px">
                    <div class="card-body team-body">




                        <div id="wrapper">
                            <div id="container">

                                <ol class="organizational-chart ">
                                    <li class="main-team">
                                        <div class="site-name team">
                                            <!-- <div class="site"></div> -->
                                            <div class="text-holder">
                                                <h4 class="text-white">Team</h4>
                                            </div>
                                        </div>
                                        <ol>
                                            <li class="ceo-wrapper">

                                                <a class="">
                                                    <img src="assets/images/ceo.png" alt="" srcset="" class="ceo">
                                                    <div class="">Mr. Gaurav Sharma</div>
                                                    <div class="">CEO & Founder</div>
                                                </a>


                                            </li>
                                            <li>
                                                <div class="outborder">
                                                    <div class=" chart-text">Kavita Sharma</div>
                                                    <div class="subdomain">IT Manager</div>

                                                </div>
                                                <button
                                                    class="toggle-details-btn btn btn-success rounded-pill team-details-btn mt-2 w-100">Team
                                                    Members</button>

                                                <ol class="team-details">
                                                    <li>
                                                        <div class="subchart-text">
                                                            <h5>Amit jaiswal</h5>
                                                            <small>Reactjs Developer</small>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="subchart-text">
                                                            <h5>Abhay Raj</h5>
                                                            <small>App Developer</small>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="subchart-text">
                                                            <h5>Rahul</h5>
                                                            <small>Seo Marketing</small>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="subchart-text">
                                                            <h5>Shalini</h5>
                                                            <small>Animator</small>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="subchart-text">
                                                            <h5>Snehil</h5>
                                                            <small>Graphic Designer/UI & UX</small>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="subchart-text">
                                                            <h5>Divansh</h5>
                                                            <small>Social Media Marketing</small>
                                                        </div>
                                                    </li>
                                                </ol>
                                            </li>

                                            <li>
                                                <div class="outborder">
                                                    <div class=" chart-text">Vikas</div>
                                                    <div class="subdomain">Account Manager</div>
                                                </div>
                                                <button
                                                    class="toggle-details-btn btn btn-success rounded-pill team-details-btn mt-2 w-100">Team
                                                    Members</button>
                                                <ol class="team-details">
                                                    <li>
                                                        <div class="subchart-text">
                                                            <h5>Amit Rawat</h5>
                                                            <small>Accountant</small>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="subchart-text">
                                                            <h5>Kaushal</h5>
                                                            <small>Jr Accountant</small>
                                                        </div>
                                                    </li>


                                                </ol>
                                            </li>

                                            <li>
                                                <div class="outborder">
                                                    <div class=" chart-text">Lalit.upreti</div>
                                                    <div class="subdomain">Operation Manager</div>
                                                </div>
                                                <button
                                                    class="toggle-details-btn btn btn-success rounded-pill team-details-btn mt-2 w-100">Team
                                                    Members</button>
                                                <ol class="team-details">
                                                    <li>
                                                        <div class="subchart-text">
                                                            <h5>Deepak</h5>
                                                            <small>Team Leader</small>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="subchart-text">
                                                            <h5>Sagar</h5>
                                                            <small>Associate</small>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="subchart-text">
                                                            <h5>Naushad</h5>
                                                            <small>Associate</small>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="subchart-text">
                                                            <h5>Veeru</h5>
                                                            <small>Associate</small>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="subchart-text">
                                                            <h5>Vishal</h5>
                                                            <small>Associate</small>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="subchart-text">
                                                            <h5>Suhail</h5>
                                                            <small>Associate</small>
                                                        </div>
                                                    </li>
                                                </ol>
                                            </li>
                                            <li>
                                                <div class="outborder">
                                                    <div class=" chart-text">Arun </div>
                                                    <div class="subdomain">Sales Mananger</div>
                                                </div>
                                                <button
                                                    class="toggle-details-btn btn btn-success rounded-pill team-details-btn mt-2 w-100">Team
                                                    Members</button>
                                                <ol class="team-details">
                                                    <li>
                                                        <div class="subchart-text">
                                                            <h5>Sadanand</h5>
                                                            <small>Sales Executive</small>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="subchart-text">
                                                            <h5>Shubham</h5>
                                                            <small>Sales Executive</small>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="subchart-text">
                                                            <h5>Rustam</h5>
                                                            <small>Associate</small>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="subchart-text">
                                                            <h5>Manmohan</h5>
                                                            <small>Weight Reconcilation</small>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="subchart-text">
                                                            <h5>Dheraj</h5>
                                                            <small>Inside Sales</small>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="subchart-text">
                                                            <h5>Sheetal</h5>
                                                            <small>Inside Sales</small>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="subchart-text">
                                                            <h5>Monika</h5>
                                                            <small>Inside Sales</small>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="subchart-text">
                                                            <h5>Pardeep</h5>
                                                            <small>Sales Executive</small>
                                                        </div>
                                                    </li>

                                                </ol>
                                            </li>
                                            <li>
                                                <div class="outborder">
                                                    <div class=" chart-text">Shivali</div>
                                                    <div class="subdomain">Fleet Manager</div>
                                                </div>
                                                <button
                                                    class="toggle-details-btn btn btn-success rounded-pill team-details-btn mt-2 w-100">Team
                                                    Members</button>

                                                <ol class="team-details">
                                                    <li>
                                                        <div class="subchart-text">
                                                            <h5>Laxmikant</h5>
                                                            <small>Team Leader</small>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="subchart-text">
                                                            <h5>Sachin</h5>
                                                            <small>Fleet Associate</small>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="subchart-text">
                                                            <h5>Sourav</h5>
                                                            <small>Fleet Associate</small>
                                                        </div>
                                                    </li>

                                                </ol>
                                            </li>
                                            <li>
                                                <div class="outborder">
                                                    <div class=" chart-text">Shalu</div>
                                                    <div class="subdomain">HR</div>
                                                </div>

                                            </li>


                                        </ol>
                                    </li>
                                </ol>

                            </div>
                        </div>

                    </div>
                </div>



                <div class="row my-5">
                    <div class="col-lg-12">


                        <div class="card">

                            <div class="table-responsive">
                                <table id="example" class="table " style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>
                                                Team Members &nbsp;</th>
                                            <th>Designation</th>


                                            <th>Reporting Manager </th>
                                            <th>Action </th>


                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td>Gaurav</td>
                                            <td>Founder
                                            </td>
                                            <td></td>

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
            <div class="modal fade" id="AddInModal" tabindex="-1" aria-labelledby="AddInModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header bg-light p-3">
                            <h5 class="modal-title" id="AddInModalLabel">Add Team
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                id="close-modal"></button>
                        </div>
                        <form class="tablelist-form" autocomplete="off">
                            <div class="modal-body">


                                <div class="form-floating mb-3">
                                    <select class="form-select" id="floatingSelect"
                                        aria-label="Floating label select example">
                                        <option selected>Select Any One</option>
                                        <option value="">Sourav.kumar</option>
                                        <option value="">Ajay</option>
                                        <option value="">Sandeep</option>
                                        <option value="">Tinku</option>
                                        <option value="">Khushi</option>
                                        <option value="">Jay</option>
                                        <option value="">Pradeep.Maurya</option>
                                        <option value="">Deepanshu</option>
                                        <option value="">Umarpal</option>
                                    </select>
                                    <label for="floatingSelect">Team Members </label>
                                </div>
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="floatingSelect"
                                        aria-label="Floating label select example">
                                        <option selected>Select Any One</option>
                                        <option value="">Admin</option>
                                        <option value="">Sadanadnd</option>
                                        <option value="">Lalit.upreti</option>
                                        <option value="">Sagar</option>
                                        <option value="">Kavita</option>
                                        <option value="">Shivali</option>
                                        <option value="">Truxcargo</option>

                                    </select>
                                    <label for="floatingSelect">Parent Team </label>
                                </div>


                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" placeholder="Enter Designation">
                                    <label for="firstnamefloatingInput">Designation </label>
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

        <div class="modal fade" id="editInModal" tabindex="-1" aria-labelledby="editInModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-light p-3">
                        <h5 class="modal-title" id="editInModalLabel">Edit Team
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                            id="close-modal"></button>
                    </div>
                    <form class="tablelist-form" autocomplete="off">
                        <div class="modal-body">


                            <div class="form-floating mb-3">
                                <select class="form-select" id="floatingSelect"
                                    aria-label="Floating label select example">
                                    <option selected>Select Any One</option>
                                    <option value="">Sourav.kumar</option>
                                    <option value="">Ajay</option>
                                    <option value="">Sandeep</option>
                                    <option value="">Tinku</option>
                                    <option value="">Khushi</option>
                                    <option value="">Jay</option>
                                    <option value="">Pradeep.Maurya</option>
                                    <option value="">Deepanshu</option>
                                    <option value="">Umarpal</option>
                                </select>
                                <label for="floatingSelect">Team Members </label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="floatingSelect"
                                    aria-label="Floating label select example">
                                    <option selected>Select Any One</option>
                                    <option value="">Admin</option>
                                    <option value="">Sadanadnd</option>
                                    <option value="">Lalit.upreti</option>
                                    <option value="">Sagar</option>
                                    <option value="">Kavita</option>
                                    <option value="">Shivali</option>
                                    <option value="">Truxcargo</option>

                                </select>
                                <label for="floatingSelect">Parent Team </label>
                            </div>


                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" placeholder="Enter Designation">
                                <label for="firstnamefloatingInput">Designation </label>
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
<script>
$(document).ready(function() {
    // Initially hide the team details
    // $(".team-details").hide();

    // Toggle team details on button click
    $(".toggle-details-btn").click(function() {
        $(this).next(".team-details").slideToggle(); // Slide toggle for the team details

        // Change the button text and color to indicate current state
        var currentText = $(this).text();
        if (currentText === "Team Members") {
            $(this).text("Hide Members");
            $(this).addClass("btn-danger"); // Add red color using Bootstrap's "btn-danger" class
            $(this).removeClass("btn-success"); // Remove green color
        } else {
            $(this).text("Team Members");
            $(this).addClass("btn-success"); // Add green color back
            $(this).removeClass("btn-danger"); // Remove red color
        }
    });
});
</script>

<?php include("include/footer.php")?>