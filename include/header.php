<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-bs-theme="light" data-body-image="img-1" data-preloader="disable">
<!-- Mirrored from themesbrand.com/velzon/html/galaxy/dashboard-crypto.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Aug 2024 13:03:54 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Truxcargo Dashboard | Truxcargo - CLient pannel & Dashboard </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />

    <link href="assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Layout config Js -->
    <script src="assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />


    <!-- custom Css-->
    <link href="assets/css/custom.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />



    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
    .simplebar-content li.nav-item {
        border-bottom: 1px solid rgba(0, 0, 0, 0.1);
    }

    </style>
</head>

<body>
    <!-- Begin page -->
    <div id="layout-wrapper">
        <header id="page-topbar" style="background: rgba(203, 203, 255, 0.5);">
            <div class="layout-width">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box horizontal-logo">


                            <a href="index.php" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-sm.png" alt="" height="22" />
                                </span>
                                <span class="logo-lg">
                                    <img src="https://truxcargo.com/static/media/footer-logo.821f9b0d5a2377cffae9f09cfbe8963c.svg"
                                        alt="" height="17" />
                                </span>
                            </a>
                        </div>

                        <button type="button"
                            class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger"
                            id="topnav-hamburger-icon">
                            <span class="hamburger-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </button>

                        <!-- App Search-->
                        <form class="app-search d-none d-md-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search by LR/AWB Number"
                                    autocomplete="off" id="search-options" value="" />
                                <span class="mdi mdi-magnify search-widget-icon"></span>
                                <span class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none"
                                    id="search-close-options"></span>
                            </div>

                        </form>
                    </div>

                    <div class="d-flex align-items-center">



                        <div class="dropdown topbar-head-dropdown ms-1 header-item" id="notificationDropdown">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                                id="page-header-notifications-dropdown" data-bs-toggle="dropdown"
                                data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-bell fs-22"></i>
                                <span
                                    class="position-absolute topbar-badge fs-10 translate-middle badge rounded-pill bg-danger">3<span
                                        class="visually-hidden">unread messages</span></span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-notifications-dropdown">
                                <div class="dropdown-head bg-primary bg-pattern rounded-top">
                                    <div class="p-3">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="m-0 fs-16 fw-semibold text-white">
                                                    Notifications
                                                </h6>
                                            </div>
                                            <div class="col-auto dropdown-tabs">
                                                <span class="badge bg-light-subtle text-body fs-13">
                                                    4 New</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="px-2 pt-2">
                                        <ul class="nav nav-tabs dropdown-tabs nav-tabs-custom" data-dropdown-tabs="true"
                                            id="notificationItemsTab" role="tablist">
                                            <li class="nav-item waves-effect waves-light">
                                                <a class="nav-link active" data-bs-toggle="tab" href="#all-noti-tab"
                                                    role="tab" aria-selected="true">
                                                    All (4)
                                                </a>
                                            </li>
                                            <li class="nav-item waves-effect waves-light">
                                                <a class="nav-link" data-bs-toggle="tab" href="#messages-tab" role="tab"
                                                    aria-selected="false">
                                                    Messages
                                                </a>
                                            </li>
                                            <li class="nav-item waves-effect waves-light">
                                                <a class="nav-link" data-bs-toggle="tab" href="#alerts-tab" role="tab"
                                                    aria-selected="false">
                                                    Alerts
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="tab-content position-relative" id="notificationItemsTabContent">
                                    <div class="tab-pane fade show active py-2 ps-2" id="all-noti-tab" role="tabpanel">
                                        <div data-simplebar style="max-height: 300px" class="pe-2">
                                            <div
                                                class="text-reset notification-item d-block dropdown-item position-relative">
                                                <div class="d-flex">
                                                    <div class="avatar-xs me-3 flex-shrink-0">
                                                        <span
                                                            class="avatar-title bg-info-subtle text-info rounded-circle fs-16">
                                                            <i class="bx bx-badge-check"></i>
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <a href="#!" class="stretched-link">
                                                            <h6 class="mt-0 mb-2 lh-base">
                                                                Your <b>Elite</b> author Graphic Optimization
                                                                <span class="text-secondary">reward</span> is
                                                                ready!
                                                            </h6>
                                                        </a>
                                                        <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                            <span><i class="mdi mdi-clock-outline"></i> Just 30
                                                                sec ago</span>
                                                        </p>
                                                    </div>
                                                    <div class="px-2 fs-15">
                                                        <div class="form-check notification-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="all-notification-check01" />
                                                            <label class="form-check-label"
                                                                for="all-notification-check01"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div
                                                class="text-reset notification-item d-block dropdown-item position-relative">
                                                <div class="d-flex">
                                                    <img src="assets/images/users/avatar-2.jpg"
                                                        class="me-3 rounded-circle avatar-xs flex-shrink-0"
                                                        alt="user-pic" />
                                                    <div class="flex-grow-1">
                                                        <a href="#!" class="stretched-link">
                                                            <h6 class="mt-0 mb-1 fs-13 fw-semibold">
                                                                Angela Bernier
                                                            </h6>
                                                        </a>
                                                        <div class="fs-13 text-muted">
                                                            <p class="mb-1">
                                                                Answered to your comment on the cash flow
                                                                forecast's graph 🔔.
                                                            </p>
                                                        </div>
                                                        <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                            <span><i class="mdi mdi-clock-outline"></i> 48 min
                                                                ago</span>
                                                        </p>
                                                    </div>
                                                    <div class="px-2 fs-15">
                                                        <div class="form-check notification-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="all-notification-check02" />
                                                            <label class="form-check-label"
                                                                for="all-notification-check02"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div
                                                class="text-reset notification-item d-block dropdown-item position-relative">
                                                <div class="d-flex">
                                                    <div class="avatar-xs me-3 flex-shrink-0">
                                                        <span
                                                            class="avatar-title bg-danger-subtle text-danger rounded-circle fs-16">
                                                            <i class="bx bx-message-square-dots"></i>
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <a href="#!" class="stretched-link">
                                                            <h6 class="mt-0 mb-2 fs-13 lh-base">
                                                                You have received
                                                                <b class="text-success">20</b> new messages in
                                                                the conversation
                                                            </h6>
                                                        </a>
                                                        <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                            <span><i class="mdi mdi-clock-outline"></i> 2 hrs
                                                                ago</span>
                                                        </p>
                                                    </div>
                                                    <div class="px-2 fs-15">
                                                        <div class="form-check notification-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="all-notification-check03" />
                                                            <label class="form-check-label"
                                                                for="all-notification-check03"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div
                                                class="text-reset notification-item d-block dropdown-item position-relative">
                                                <div class="d-flex">
                                                    <img src="assets/images/users/avatar-8.jpg"
                                                        class="me-3 rounded-circle avatar-xs flex-shrink-0"
                                                        alt="user-pic" />
                                                    <div class="flex-grow-1">
                                                        <a href="#!" class="stretched-link">
                                                            <h6 class="mt-0 mb-1 fs-13 fw-semibold">
                                                                Maureen Gibson
                                                            </h6>
                                                        </a>
                                                        <div class="fs-13 text-muted">
                                                            <p class="mb-1">
                                                                We talked about a project on linkedin.
                                                            </p>
                                                        </div>
                                                        <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                            <span><i class="mdi mdi-clock-outline"></i> 4 hrs
                                                                ago</span>
                                                        </p>
                                                    </div>
                                                    <div class="px-2 fs-15">
                                                        <div class="form-check notification-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="all-notification-check04" />
                                                            <label class="form-check-label"
                                                                for="all-notification-check04"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="my-3 text-center view-all">
                                                <button type="button"
                                                    class="btn btn-soft-success waves-effect waves-light">
                                                    View All Notifications
                                                    <i class="ri-arrow-right-line align-middle"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade py-2 ps-2" id="messages-tab" role="tabpanel"
                                        aria-labelledby="messages-tab">
                                        <div data-simplebar style="max-height: 300px" class="pe-2">
                                            <div class="text-reset notification-item d-block dropdown-item">
                                                <div class="d-flex">
                                                    <img src="assets/images/users/avatar-3.jpg"
                                                        class="me-3 rounded-circle avatar-xs" alt="user-pic" />
                                                    <div class="flex-grow-1">
                                                        <a href="#!" class="stretched-link">
                                                            <h6 class="mt-0 mb-1 fs-13 fw-semibold">
                                                                James Lemire
                                                            </h6>
                                                        </a>
                                                        <div class="fs-13 text-muted">
                                                            <p class="mb-1">
                                                                We talked about a project on linkedin.
                                                            </p>
                                                        </div>
                                                        <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                            <span><i class="mdi mdi-clock-outline"></i> 30 min
                                                                ago</span>
                                                        </p>
                                                    </div>
                                                    <div class="px-2 fs-15">
                                                        <div class="form-check notification-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="messages-notification-check01" />
                                                            <label class="form-check-label"
                                                                for="messages-notification-check01"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="text-reset notification-item d-block dropdown-item">
                                                <div class="d-flex">
                                                    <img src="assets/images/users/avatar-2.jpg"
                                                        class="me-3 rounded-circle avatar-xs" alt="user-pic" />
                                                    <div class="flex-grow-1">
                                                        <a href="#!" class="stretched-link">
                                                            <h6 class="mt-0 mb-1 fs-13 fw-semibold">
                                                                Angela Bernier
                                                            </h6>
                                                        </a>
                                                        <div class="fs-13 text-muted">
                                                            <p class="mb-1">
                                                                Answered to your comment on the cash flow
                                                                forecast's graph 🔔.
                                                            </p>
                                                        </div>
                                                        <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                            <span><i class="mdi mdi-clock-outline"></i> 2 hrs
                                                                ago</span>
                                                        </p>
                                                    </div>
                                                    <div class="px-2 fs-15">
                                                        <div class="form-check notification-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="messages-notification-check02" />
                                                            <label class="form-check-label"
                                                                for="messages-notification-check02"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="text-reset notification-item d-block dropdown-item">
                                                <div class="d-flex">
                                                    <img src="assets/images/users/avatar-6.jpg"
                                                        class="me-3 rounded-circle avatar-xs" alt="user-pic" />
                                                    <div class="flex-grow-1">
                                                        <a href="#!" class="stretched-link">
                                                            <h6 class="mt-0 mb-1 fs-13 fw-semibold">
                                                                Kenneth Brown
                                                            </h6>
                                                        </a>
                                                        <div class="fs-13 text-muted">
                                                            <p class="mb-1">
                                                                Mentionned you in his comment on 📃 invoice
                                                                #12501.
                                                            </p>
                                                        </div>
                                                        <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                            <span><i class="mdi mdi-clock-outline"></i> 10 hrs
                                                                ago</span>
                                                        </p>
                                                    </div>
                                                    <div class="px-2 fs-15">
                                                        <div class="form-check notification-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="messages-notification-check03" />
                                                            <label class="form-check-label"
                                                                for="messages-notification-check03"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="text-reset notification-item d-block dropdown-item">
                                                <div class="d-flex">
                                                    <img src="assets/images/users/avatar-8.jpg"
                                                        class="me-3 rounded-circle avatar-xs" alt="user-pic" />
                                                    <div class="flex-grow-1">
                                                        <a href="#!" class="stretched-link">
                                                            <h6 class="mt-0 mb-1 fs-13 fw-semibold">
                                                                Maureen Gibson
                                                            </h6>
                                                        </a>
                                                        <div class="fs-13 text-muted">
                                                            <p class="mb-1">
                                                                We talked about a project on linkedin.
                                                            </p>
                                                        </div>
                                                        <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                            <span><i class="mdi mdi-clock-outline"></i> 3 days
                                                                ago</span>
                                                        </p>
                                                    </div>
                                                    <div class="px-2 fs-15">
                                                        <div class="form-check notification-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="messages-notification-check04" />
                                                            <label class="form-check-label"
                                                                for="messages-notification-check04"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="my-3 text-center view-all">
                                                <button type="button"
                                                    class="btn btn-soft-success waves-effect waves-light">
                                                    View All Messages
                                                    <i class="ri-arrow-right-line align-middle"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade p-4" id="alerts-tab" role="tabpanel"
                                        aria-labelledby="alerts-tab"></div>

                                    <div class="notification-actions" id="notification-actions">
                                        <div class="d-flex text-muted justify-content-center">
                                            Select
                                            <div id="select-content" class="text-body fw-semibold px-1">
                                                0
                                            </div>
                                            Result
                                            <button type="button" class="btn btn-link link-danger p-0 ms-3"
                                                data-bs-toggle="modal" data-bs-target="#removeNotificationModal">
                                                Remove
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown ms-sm-3 header-item topbar-user">
                            <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <span class="d-flex align-items-center">
                                    <img class="rounded-circle header-profile-user"
                                        src="assets/images/users/avatar-1.jpg" alt="Header Avatar" />
                                    <span class="text-start ms-xl-2">
                                        <span class="d-none d-xl-inline-block ms-1 fw-semibold user-name-text">Anna
                                            Sharma</span>
                                        <span class="d-none d-xl-block ms-1 fs-12 user-name-sub-text">TRUXCARGO1</span>
                                    </span>
                                </span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <h6 class="dropdown-header">Welcome kavita!</h6>


                                <!-- <div class="dropdown-divider"></div> -->


                                <a class="dropdown-item" href="Change-Password.php"><i
                                        class="mdi mdi-lock text-muted fs-16 align-middle me-1"></i>
                                    <span class="align-middle">Change Password</span></a>
                                <a class="dropdown-item" href="auth-logout-basic.html"><i
                                        class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i>
                                    <span class="align-middle" data-key="t-logout">Logout</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- removeNotificationModal -->
        <div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                            id="NotificationModalbtn-close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mt-2 text-center">
                            <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop"
                                colors="primary:#f7b84b,secondary:#f06548" style="width: 100px; height: 100px">
                            </lord-icon>
                            <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                <h4>Are you sure ?</h4>
                                <p class="text-muted mx-4 mb-0">
                                    Are you sure you want to remove this Notification ?
                                </p>
                            </div>
                        </div>
                        <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                            <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">
                                Close
                            </button>
                            <button type="button" class="btn w-sm btn-danger" id="delete-notification">
                                Yes, Delete It!
                            </button>
                        </div>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">

                <!-- Light Logo-->
                <a href="index.php" class="logo logo-light">
                    <span class="logo-sm">
                        <h1 class="text-white fw-bold">T</h1>

                        <!-- <img src="assets/images/logo-sm.png" alt="" height="22" /> -->
                    </span>
                    <span class="logo-lg">
                        <img src="https://truxcargo.com/static/media/footer-logo.821f9b0d5a2377cffae9f09cfbe8963c.svg"
                            alt="" height="30" />
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
                    id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar">
                <div class="container-fluid">
                    <div id="two-column-menu"></div>
                    <ul class="navbar-nav" id="navbar-nav">
                        <li class="menu-title text-white"><span data-key="t-menu">Menu</span></li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="index.php">
                                <i class=" ri-dashboard-line"></i>
                                <span data-key="t-widgets">Dashboard</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="Training-Slots.php">
                                <i class="ri-honour-line"></i>
                                <span data-key="t-widgets">Training</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#CashBook" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="CashBook">
                                <i class="ri-dashboard-2-line"></i>
                                <span data-key="t-dashboards">CashBook</span>
                            </a>
                            <div class="collapse menu-dropdown" id="CashBook">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="NewCashbook.php" class="nav-link" data-key="t-analytics">
                                            New CashBook
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="Cashbook.php" class="nav-link" data-key="t-analytics">
                                            CashBook
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="category.php" class="nav-link" data-key="t-crm">
                                            Category
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="Team-hierarchy.php">
                                <i class="ri-honour-line"></i>
                                <span data-key="t-widgets"> Team Hierarchy</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#Members" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="Members">
                                <i class="ri-dashboard-2-line"></i>
                                <span data-key="t-dashboards">Member Management</span>
                            </a>
                            <div class="collapse menu-dropdown" id="Members">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="dashboard-analytics.html" class="nav-link" data-key="t-analytics">
                                            All Member
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                            Members Commission
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="Pincodes.php">
                                <i class=" ri-pin-distance-line
"></i>
                                <span data-key="t-widgets">Pincodes</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#Customer" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="Customer">
                                <i class="ri-dashboard-2-line"></i>
                                <span data-key="t-dashboards">Customer</span>
                            </a>
                            <div class="collapse menu-dropdown" id="Customer">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="AllCustomer.php" class="nav-link" data-key="t-analytics">
                                            All Customer
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="Active-Customer.php" class="nav-link" data-key="t-crm">
                                            Active Customer
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="Rare-Customer.php" class="nav-link" data-key="t-crm">
                                            Rare Customer
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                            Lead Customer
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="Plan-subscription.php" class="nav-link" data-key="t-crm">
                                            Plan subscription </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="All-Customer-Bank-Info.php" class="nav-link" data-key="t-crm">
                                            Bank Info
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                            Wallet Info
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#warehouse" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="warehouse">
                                <i class=" ri-home-6-line
"></i>
                                <span data-key="t-dashboards">Pickups & Warehouse</span>
                            </a>
                            <div class="collapse menu-dropdown" id="warehouse">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="bluedart-pickup.php" class="nav-link" data-key="t-analytics">
                                            Bluedart Pickup
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="b2b-pickup.php" class="nav-link" data-key="t-crm">
                                            B2B Pickup
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="b2c-pickup.php" class="nav-link" data-key="t-crm">
                                            B2C Pickup
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="add-pickup.php" class="nav-link" data-key="t-crm">
                                            Add Pickup
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="PUR-Penalty.php" class="nav-link" data-key="t-crm">
                                            Pickup Penalty
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                            All Warehouse
                                        </a>
                                    </li>



                                </ul>
                            </div>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link menu-link" href="Ndr.php">
                                <i class=" ri-door-lock-box-line
"></i>
                                <span data-key="t-widgets">NDR</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#B2b" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="B2b">
                                <i class="ri-dashboard-2-line"></i>
                                <span data-key="t-dashboards">B2B Panel</span>
                            </a>
                            <div class="collapse menu-dropdown" id="B2b">
                                <ul class="nav nav-sm flex-column">

                                    <li class="nav-item">
                                        <a href="LR-number-B2B.php" class="nav-link" data-key="t-crm">
                                            LR Number
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="all-b2b-order.php" class="nav-link" data-key="t-crm">
                                            All Order
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="mis-report-b2b.php" class="nav-link" data-key="t-crm">
                                            MIS Report
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                            Change Payment Mode
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                            Non Listed LRs
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                            Challan Without Manifiest
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                            Delhivery Appointment
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                            Waybill Copy
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                            Shiping Label
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                            Delhivery Challan
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                            LR Trasfer
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                            Fix Weight
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                            Not Picked
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                            Update Address
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                            Profit Check
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                            DTDC LRs
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                            Find LR Against Waybill
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                            Bluedart Series
                                        </a>
                                    </li>



                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#B2C" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="B2C">
                                <i class="ri-dashboard-2-line"></i>
                                <span data-key="t-dashboards">B2C Panel</span>
                            </a>
                            <div class="collapse menu-dropdown" id="B2C">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="dashboard-analytics.html" class="nav-link" data-key="t-analytics">
                                            All Order
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                            MIS Report
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                            Change Payment Mode
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                            Shipping label
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                            Add Bulk Order
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                            Not Picked
                                        </a>
                                    </li>



                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#Weight" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="Weight">
                                <i class=" ri-scales-line"></i>
                                <span data-key="t-dashboards">Weight Reconcilation</span>
                            </a>
                            <div class="collapse menu-dropdown" id="Weight">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="dashboard-analytics.html" class="nav-link" data-key="t-analytics">
                                            Weight Reconcilation
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                            Dispute Raised
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                            Dispute Settle
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                            Reopen Dispute
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                            B2C Weight Reconcilation
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                            Delivery Charges
                                        </a>
                                    </li>
                        </li>
                        <li class="nav-item">
                            <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                Recon.Topay Amt
                            </a>
                        </li>
                        </li>
                        <li class="nav-item">
                            <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                MOP Affected
                            </a>
                        </li>



                    </ul>
                </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#Accounts" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="Accounts">
                        <i class=" ri-account-pin-box-line"></i>
                        <span data-key="t-dashboards">Accounts</span>
                    </a>
                    <div class="collapse menu-dropdown" id="Accounts">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="dashboard-analytics.html" class="nav-link" data-key="t-analytics">
                                    Top Outstanding
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                    E-Wallet
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                    Overall Sale
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#Remittance" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="Account">
                                    <i class="ri-dashboard-2-line"></i>
                                    <span data-key="t-dashboards">Remittance</span>
                                </a>
                                <div class="collapse menu-dropdown" id="Remittance">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="dashboard-analytics.html" class="nav-link" data-key="t-analytics">
                                                COD Remittance
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                                Franchise Remittance
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                                Cheque Remittance
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                                COD Calc
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                                Early COD LRs
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                                Early COD Request
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                                Remittance & Wallet Updates
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                                COD Reconscilation
                                            </a>
                                        </li>




                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#Billing" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="Billing">
                                    <i class="ri-dashboard-2-line"></i>
                                    <span data-key="t-dashboards">Billing</span>
                                </a>
                                <div class="collapse menu-dropdown" id="Billing">
                                    <ul class="nav nav-sm flex-column">




                                        <li class="nav-item">
                                            <a class="nav-link menu-link" href="#Billingpvt" data-bs-toggle="collapse"
                                                role="button" aria-expanded="false" aria-controls="Billingpvt">
                                                <i class="ri-dashboard-2-line"></i>
                                                <span data-key="t-dashboards">Billing Pvt LTD</span>
                                            </a>
                                            <div class="collapse menu-dropdown" id="Billingpvt">
                                                <ul class="nav nav-sm flex-column">

                                                    <li class="nav-item">
                                                        <a href="dashboard-analytics.html" class="nav-link"
                                                            data-key="t-analytics">
                                                            B2B Billing
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                                            Third Party Billing
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                                            B2B Memo
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                                            B2C Billing
                                                        </a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                                            Credit Notes
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                                            CN Processing
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                                            Credit Notes
                                                        </a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                                            Topay Collection
                                                        </a>
                                                    </li>




                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link menu-link" href="#Proprietor" data-bs-toggle="collapse"
                                                role="button" aria-expanded="false" aria-controls="Proprietor">
                                                <i class="ri-dashboard-2-line"></i>
                                                <span data-key="t-dashboards">Billing Proprietor</span>
                                            </a>
                                            <div class="collapse menu-dropdown" id="Proprietor">
                                                <ul class="nav nav-sm flex-column">

                                                    <li class="nav-item">
                                                        <a href="dashboard-analytics.html" class="nav-link"
                                                            data-key="t-analytics">
                                                            B2B Billing
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                                            Third Party Billing
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                                            B2B Memo
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                                            B2C Billing
                                                        </a>
                                                    </li>







                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="dashboard-analytics.html" class="nav-link" data-key="t-analytics">
                                                Online Payment
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                                Inovice against LR
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                                Delivery Billing
                                            </a>
                                        </li>




                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#Reports" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="Reports">
                                    <i class="ri-dashboard-2-line"></i>
                                    <span data-key="t-dashboards">Reports</span>
                                </a>
                                <div class="collapse menu-dropdown" id="Reports">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="dashboard-analytics.html" class="nav-link" data-key="t-analytics">
                                                GSTR1
                                            </a>
                                        </li>



                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#Purchase" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="Purchase">
                                    <i class="ri-dashboard-2-line"></i>
                                    <span data-key="t-dashboards">Purchase</span>
                                </a>
                                <div class="collapse menu-dropdown" id="Purchase">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="dashboard-analytics.html" class="nav-link" data-key="t-analytics">
                                                Party List
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="dashboard-analytics.html" class="nav-link" data-key="t-analytics">
                                                Sub-Party List
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="dashboard-analytics.html" class="nav-link" data-key="t-analytics">
                                                Purchase Bill
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="dashboard-analytics.html" class="nav-link" data-key="t-analytics">
                                                Record Payment
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="dashboard-analytics.html" class="nav-link" data-key="t-analytics">
                                                Import Purchase
                                            </a>
                                        </li>



                                    </ul>
                                </div>
                            </li>




                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#Support" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="Support">
                        <i class=" ri-notification-3-line"></i>
                        <span data-key="t-dashboards">Support </span>
                    </a>
                    <div class="collapse menu-dropdown" id="Support">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="dashboard-analytics.html" class="nav-link" data-key="t-analytics">
                                    Issue Category
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                    Issue Sub Category
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                    Support Ticket
                                </a>
                            </li>



                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#Maping" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="Maping">
                        <i class="ri-dashboard-2-line"></i>
                        <span data-key="t-dashboards">Sales Maping </span>
                    </a>
                    <div class="collapse menu-dropdown" id="Maping">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="dashboard-analytics.html" class="nav-link" data-key="t-analytics">
                                    Sales Target
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                    Listed Clients
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                    OverAll Performance
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                    B2B Performance
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                    B2C Performance
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                    Sales Report
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                    Datewise Report
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                    Price Camparision
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                    TPL
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                    TPL Winner
                                </a>
                            </li>



                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#Additional" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="Additional">
                        <i class="ri-dashboard-2-line"></i>
                        <span data-key="t-dashboards">Additional Section </span>
                    </a>
                    <div class="collapse menu-dropdown" id="Additional">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="dashboard-analytics.html" class="nav-link" data-key="t-analytics">
                                    Website Enquiry
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                    Payment Code
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                    Notification
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                    Terms And Policy
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                    Shop
                                </a>
                            </li>



                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#Partner" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="Partner">
                        <i class="ri-dashboard-2-line"></i>
                        <span data-key="t-dashboards">Partner </span>
                    </a>
                    <div class="collapse menu-dropdown" id="Partner">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="dashboard-analytics.html" class="nav-link" data-key="t-analytics">
                                    B2B Partner
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                    All B2C Partner
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                    B2C Pricing
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                    B2C Fuel
                                </a>
                            </li>




                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="index.php">
                        <i class="ri-honour-line"></i>
                        <span data-key="t-widgets">B2B Matrix</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#Employees" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="Employees">
                        <i class=" ri-group-line
"></i>
                        <span data-key="t-dashboards">Employees </span>
                    </a>
                    <div class="collapse menu-dropdown" id="Employees">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="dashboard-analytics.html" class="nav-link" data-key="t-analytics">
                                    Truxcargo Private Limited
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">
                                    Truxcargo
                                </a>
                            </li>






                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="index.php">
                        <i class=" ri-user-shared-line"></i>
                        <span data-key="t-widgets">Login User Panel</span>
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link menu-link" href="index.php">
                        <i class=" ri-logout-box-r-line"></i>
                        <span data-key="t-widgets">Logout</span>
                    </a>
                </li>





                </ul>
            </div>
            <!-- Sidebar -->
        </div>

        <div class="sidebar-background"></div>
    </div>
    <!-- Left Sidebar End -->
    <!-- Vertical Overlay-->
    <div class="vertical-overlay"></div>