<!DOCTYPE html>
<html
  lang="en"
  data-layout="vertical"
  data-topbar="light"
  data-sidebar="dark"
  data-sidebar-size="lg"
  data-sidebar-image="none"
  data-bs-theme="light"
  data-body-image="img-1"
  data-preloader="disable"
>
  <!-- Mirrored from themesbrand.com/velzon/html/galaxy/dashboard-crypto.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Aug 2024 13:03:54 GMT -->
  <head>
    <meta charset="utf-8" />
    <title>Truxcargo Dashboard | Truxcargo - CLient pannel & Dashboard </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      content="Premium Multipurpose Admin & Dashboard Template"
      name="description"
    />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />

    <link href="assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Layout config Js -->
    <script src="assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link
      href="assets/css/bootstrap.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="assets/css/custom.min.css" rel="stylesheet" type="text/css" />
    <link
      href="assets/libs/swiper/swiper-bundle.min.css"
      rel="stylesheet"
      type="text/css"
    />
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
                <a href="index.php" class="logo logo-dark">
                  <span class="logo-sm">
                    <!-- <img src="assets/images/logo-sm.png" alt="" height="22" /> -->
                  </span>
                  <span class="logo-lg">
                    <img src="https://truxcargo.com/static/media/footer-logo.821f9b0d5a2377cffae9f09cfbe8963c.svg" alt="" height="17" />
                  </span>
                </a>

                <a href="index.php" class="logo logo-light">
                  <span class="logo-sm">
                    <!-- <img src="assets/images/logo-sm.png" alt="" height="22" /> -->
                  </span>
                  <span class="logo-lg">
                    <img
                      src="https://truxcargo.com/static/media/footer-logo.821f9b0d5a2377cffae9f09cfbe8963c.svg"
                      alt=""
                      height="17"
                    />
                  </span>
                </a>
              </div>

              <button
                type="button"
                class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger"
                id="topnav-hamburger-icon"
              >
                <span class="hamburger-icon">
                  <span></span>
                  <span></span>
                  <span></span>
                </span>
              </button>

              <!-- App Search-->
              <form class="app-search d-none d-md-block">
                <div class="position-relative">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Search by LR/AWB Number"
                    autocomplete="off"
                    id="search-options"
                    value=""
                  />
                  <span class="mdi mdi-magnify search-widget-icon"></span>
                  <span
                    class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none"
                    id="search-close-options"
                  ></span>
                </div>
                
              </form>
            </div>

            <div class="d-flex align-items-center">
              


              <div
                class="dropdown topbar-head-dropdown ms-1 header-item"
                id="notificationDropdown"
              >
                <button
                  type="button"
                  class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                  id="page-header-notifications-dropdown"
                  data-bs-toggle="dropdown"
                  data-bs-auto-close="outside"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="bx bx-bell fs-22"></i>
                  <span
                    class="position-absolute topbar-badge fs-10 translate-middle badge rounded-pill bg-danger"
                    >3<span class="visually-hidden">unread messages</span></span
                  >
                </button>
                <div
                  class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                  aria-labelledby="page-header-notifications-dropdown"
                >
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
                            4 New</span
                          >
                        </div>
                      </div>
                    </div>

                    <div class="px-2 pt-2">
                      <ul
                        class="nav nav-tabs dropdown-tabs nav-tabs-custom"
                        data-dropdown-tabs="true"
                        id="notificationItemsTab"
                        role="tablist"
                      >
                        <li class="nav-item waves-effect waves-light">
                          <a
                            class="nav-link active"
                            data-bs-toggle="tab"
                            href="#all-noti-tab"
                            role="tab"
                            aria-selected="true"
                          >
                            All (4)
                          </a>
                        </li>
                        <li class="nav-item waves-effect waves-light">
                          <a
                            class="nav-link"
                            data-bs-toggle="tab"
                            href="#messages-tab"
                            role="tab"
                            aria-selected="false"
                          >
                            Messages
                          </a>
                        </li>
                        <li class="nav-item waves-effect waves-light">
                          <a
                            class="nav-link"
                            data-bs-toggle="tab"
                            href="#alerts-tab"
                            role="tab"
                            aria-selected="false"
                          >
                            Alerts
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div
                    class="tab-content position-relative"
                    id="notificationItemsTabContent"
                  >
                    <div
                      class="tab-pane fade show active py-2 ps-2"
                      id="all-noti-tab"
                      role="tabpanel"
                    >
                      <div
                        data-simplebar
                        style="max-height: 300px"
                        class="pe-2"
                      >
                        <div
                          class="text-reset notification-item d-block dropdown-item position-relative"
                        >
                          <div class="d-flex">
                            <div class="avatar-xs me-3 flex-shrink-0">
                              <span
                                class="avatar-title bg-info-subtle text-info rounded-circle fs-16"
                              >
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
                              <p
                                class="mb-0 fs-11 fw-medium text-uppercase text-muted"
                              >
                                <span
                                  ><i class="mdi mdi-clock-outline"></i> Just 30
                                  sec ago</span
                                >
                              </p>
                            </div>
                            <div class="px-2 fs-15">
                              <div class="form-check notification-check">
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  value=""
                                  id="all-notification-check01"
                                />
                                <label
                                  class="form-check-label"
                                  for="all-notification-check01"
                                ></label>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div
                          class="text-reset notification-item d-block dropdown-item position-relative"
                        >
                          <div class="d-flex">
                            <img
                              src="assets/images/users/avatar-2.jpg"
                              class="me-3 rounded-circle avatar-xs flex-shrink-0"
                              alt="user-pic"
                            />
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
                              <p
                                class="mb-0 fs-11 fw-medium text-uppercase text-muted"
                              >
                                <span
                                  ><i class="mdi mdi-clock-outline"></i> 48 min
                                  ago</span
                                >
                              </p>
                            </div>
                            <div class="px-2 fs-15">
                              <div class="form-check notification-check">
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  value=""
                                  id="all-notification-check02"
                                />
                                <label
                                  class="form-check-label"
                                  for="all-notification-check02"
                                ></label>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div
                          class="text-reset notification-item d-block dropdown-item position-relative"
                        >
                          <div class="d-flex">
                            <div class="avatar-xs me-3 flex-shrink-0">
                              <span
                                class="avatar-title bg-danger-subtle text-danger rounded-circle fs-16"
                              >
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
                              <p
                                class="mb-0 fs-11 fw-medium text-uppercase text-muted"
                              >
                                <span
                                  ><i class="mdi mdi-clock-outline"></i> 2 hrs
                                  ago</span
                                >
                              </p>
                            </div>
                            <div class="px-2 fs-15">
                              <div class="form-check notification-check">
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  value=""
                                  id="all-notification-check03"
                                />
                                <label
                                  class="form-check-label"
                                  for="all-notification-check03"
                                ></label>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div
                          class="text-reset notification-item d-block dropdown-item position-relative"
                        >
                          <div class="d-flex">
                            <img
                              src="assets/images/users/avatar-8.jpg"
                              class="me-3 rounded-circle avatar-xs flex-shrink-0"
                              alt="user-pic"
                            />
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
                              <p
                                class="mb-0 fs-11 fw-medium text-uppercase text-muted"
                              >
                                <span
                                  ><i class="mdi mdi-clock-outline"></i> 4 hrs
                                  ago</span
                                >
                              </p>
                            </div>
                            <div class="px-2 fs-15">
                              <div class="form-check notification-check">
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  value=""
                                  id="all-notification-check04"
                                />
                                <label
                                  class="form-check-label"
                                  for="all-notification-check04"
                                ></label>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="my-3 text-center view-all">
                          <button
                            type="button"
                            class="btn btn-soft-success waves-effect waves-light"
                          >
                            View All Notifications
                            <i class="ri-arrow-right-line align-middle"></i>
                          </button>
                        </div>
                      </div>
                    </div>

                    <div
                      class="tab-pane fade py-2 ps-2"
                      id="messages-tab"
                      role="tabpanel"
                      aria-labelledby="messages-tab"
                    >
                      <div
                        data-simplebar
                        style="max-height: 300px"
                        class="pe-2"
                      >
                        <div
                          class="text-reset notification-item d-block dropdown-item"
                        >
                          <div class="d-flex">
                            <img
                              src="assets/images/users/avatar-3.jpg"
                              class="me-3 rounded-circle avatar-xs"
                              alt="user-pic"
                            />
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
                              <p
                                class="mb-0 fs-11 fw-medium text-uppercase text-muted"
                              >
                                <span
                                  ><i class="mdi mdi-clock-outline"></i> 30 min
                                  ago</span
                                >
                              </p>
                            </div>
                            <div class="px-2 fs-15">
                              <div class="form-check notification-check">
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  value=""
                                  id="messages-notification-check01"
                                />
                                <label
                                  class="form-check-label"
                                  for="messages-notification-check01"
                                ></label>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div
                          class="text-reset notification-item d-block dropdown-item"
                        >
                          <div class="d-flex">
                            <img
                              src="assets/images/users/avatar-2.jpg"
                              class="me-3 rounded-circle avatar-xs"
                              alt="user-pic"
                            />
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
                              <p
                                class="mb-0 fs-11 fw-medium text-uppercase text-muted"
                              >
                                <span
                                  ><i class="mdi mdi-clock-outline"></i> 2 hrs
                                  ago</span
                                >
                              </p>
                            </div>
                            <div class="px-2 fs-15">
                              <div class="form-check notification-check">
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  value=""
                                  id="messages-notification-check02"
                                />
                                <label
                                  class="form-check-label"
                                  for="messages-notification-check02"
                                ></label>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div
                          class="text-reset notification-item d-block dropdown-item"
                        >
                          <div class="d-flex">
                            <img
                              src="assets/images/users/avatar-6.jpg"
                              class="me-3 rounded-circle avatar-xs"
                              alt="user-pic"
                            />
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
                              <p
                                class="mb-0 fs-11 fw-medium text-uppercase text-muted"
                              >
                                <span
                                  ><i class="mdi mdi-clock-outline"></i> 10 hrs
                                  ago</span
                                >
                              </p>
                            </div>
                            <div class="px-2 fs-15">
                              <div class="form-check notification-check">
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  value=""
                                  id="messages-notification-check03"
                                />
                                <label
                                  class="form-check-label"
                                  for="messages-notification-check03"
                                ></label>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div
                          class="text-reset notification-item d-block dropdown-item"
                        >
                          <div class="d-flex">
                            <img
                              src="assets/images/users/avatar-8.jpg"
                              class="me-3 rounded-circle avatar-xs"
                              alt="user-pic"
                            />
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
                              <p
                                class="mb-0 fs-11 fw-medium text-uppercase text-muted"
                              >
                                <span
                                  ><i class="mdi mdi-clock-outline"></i> 3 days
                                  ago</span
                                >
                              </p>
                            </div>
                            <div class="px-2 fs-15">
                              <div class="form-check notification-check">
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  value=""
                                  id="messages-notification-check04"
                                />
                                <label
                                  class="form-check-label"
                                  for="messages-notification-check04"
                                ></label>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="my-3 text-center view-all">
                          <button
                            type="button"
                            class="btn btn-soft-success waves-effect waves-light"
                          >
                            View All Messages
                            <i class="ri-arrow-right-line align-middle"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                    <div
                      class="tab-pane fade p-4"
                      id="alerts-tab"
                      role="tabpanel"
                      aria-labelledby="alerts-tab"
                    ></div>

                    <div class="notification-actions" id="notification-actions">
                      <div class="d-flex text-muted justify-content-center">
                        Select
                        <div
                          id="select-content"
                          class="text-body fw-semibold px-1"
                        >
                          0
                        </div>
                        Result
                        <button
                          type="button"
                          class="btn btn-link link-danger p-0 ms-3"
                          data-bs-toggle="modal"
                          data-bs-target="#removeNotificationModal"
                        >
                          Remove
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="dropdown ms-sm-3 header-item topbar-user">
                <button
                  type="button"
                  class="btn"
                  id="page-header-user-dropdown"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <span class="d-flex align-items-center">
                    <img
                      class="rounded-circle header-profile-user"
                      src="assets/images/users/avatar-1.jpg"
                      alt="Header Avatar"
                    />
                    <span class="text-start ms-xl-2">
                      <span
                        class="d-none d-xl-inline-block ms-1 fw-semibold user-name-text"
                        >Anna Sharma</span
                      >
                      <span
                        class="d-none d-xl-block ms-1 fs-12 user-name-sub-text"
                        >TRUXCARGO1</span
                      >
                    </span>
                  </span>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                  <!-- item-->
                  <h6 class="dropdown-header">Welcome kavita!</h6>
                  <a class="dropdown-item" href="profile.php"
                    ><i
                      class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"
                    ></i>
                    <span class="align-middle">Profile</span></a
                  >
                  <a class="dropdown-item" href="apps-chat.html"
                    ><i
                      class="mdi mdi-message-text-outline text-muted fs-16 align-middle me-1"
                    ></i>
                    <span class="align-middle">KYC</span></a
                  >
                  
                  <!-- <div class="dropdown-divider"></div> -->

                  <a class="dropdown-item" href="membership.php"
                    ><span
                      class="badge bg-success-subtle text-success mt-1 float-end"
                      >New</span
                    ><i
                      class="mdi mdi-cog-outline text-muted fs-16 align-middle me-1"
                    ></i>
                    <span class="align-middle">Memebership</span></a
                  >
                  
                  <a class="dropdown-item" href="auth-lockscreen-basic.html"
                    ><i
                      class="mdi mdi-lock text-muted fs-16 align-middle me-1"
                    ></i>
                    <span class="align-middle">Settings</span></a
                  >
                  <a class="dropdown-item" href="auth-logout-basic.html"
                    ><i
                      class="mdi mdi-logout text-muted fs-16 align-middle me-1"
                    ></i>
                    <span class="align-middle" data-key="t-logout"
                      >Logout</span
                    ></a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>

      <!-- removeNotificationModal -->
      <div
        id="removeNotificationModal"
        class="modal fade zoomIn"
        tabindex="-1"
        aria-hidden="true"
      >
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
                id="NotificationModalbtn-close"
              ></button>
            </div>
            <div class="modal-body">
              <div class="mt-2 text-center">
                <lord-icon
                  src="https://cdn.lordicon.com/gsqxdxog.json"
                  trigger="loop"
                  colors="primary:#f7b84b,secondary:#f06548"
                  style="width: 100px; height: 100px"
                ></lord-icon>
                <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                  <h4>Are you sure ?</h4>
                  <p class="text-muted mx-4 mb-0">
                    Are you sure you want to remove this Notification ?
                  </p>
                </div>
              </div>
              <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                <button
                  type="button"
                  class="btn w-sm btn-light"
                  data-bs-dismiss="modal"
                >
                  Close
                </button>
                <button
                  type="button"
                  class="btn w-sm btn-danger"
                  id="delete-notification"
                >
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
          <!-- Dark Logo-->
          <a href="index.php" class="logo logo-dark">
            <span class="logo-sm">
              <img src="assets/images/logo-sm.png" alt="" height="22" />
            </span>
            <span class="logo-lg">
              <img src="assets/images/logo-dark.png" alt="" height="17" />
            </span>
          </a>
          <!-- Light Logo-->
          <a href="index.php" class="logo logo-light">
            <span class="logo-sm">
              <img src="assets/images/logo-sm.png" alt="" height="22" />
            </span>
            <span class="logo-lg">
              <img src="https://truxcargo.com/static/media/footer-logo.821f9b0d5a2377cffae9f09cfbe8963c.svg" alt="" height="25" />
            </span>
          </a>
          <button
            type="button"
            class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover"
          >
            <i class="ri-record-circle-line"></i>
          </button>
        </div>

        <div id="scrollbar">
          <div class="container-fluid">
            <div id="two-column-menu"></div>
            <ul class="navbar-nav" id="navbar-nav">
              <li class="menu-title"><span data-key="t-menu">Menu</span></li>
              <li class="nav-item">
                <a class="nav-link menu-link" href="index.php">
                  <i class="ri-honour-line"></i>
                  <span data-key="t-widgets">Dashboard</span>
                </a>
              </li>
              <li class="nav-item">
                <a
                  class="nav-link menu-link"
                  href="#sidebarDashboards"
                  data-bs-toggle="collapse"
                  role="button"
                  aria-expanded="false"
                  aria-controls="sidebarDashboards"
                >
                  <i class="ri-dashboard-2-line"></i>
                  <span data-key="t-dashboards">My Orders</span>
                </a>
                <div class="collapse menu-dropdown" id="sidebarDashboards">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a
                        href="dashboard-analytics.html"
                        class="nav-link"
                        data-key="t-analytics"
                      >
                        Create New Order
                      </a>
                    </li>
                    <li class="nav-item">
                      <a
                        href="dashboard-crm.html"
                        class="nav-link"
                        data-key="t-crm"
                      >
                        All Order
                      </a>
                    </li>
                    <li class="nav-item">
                      <a
                        href="index.php"
                        class="nav-link"
                        data-key="t-ecommerce"
                      >
                        Ready To Ship
                      </a>
                    </li>
                    <li class="nav-item">
                      <a
                        href="dashboard-crypto.html"
                        class="nav-link"
                        data-key="t-crypto"
                      >
                        Draft orders
                      </a>
                    </li>
                    <li class="nav-item">
                      <a
                        href="dashboard-projects.html"
                        class="nav-link"
                        data-key="t-projects"
                      >
                        Manage Documents
                      </a>
                    </li>
                    <li class="nav-item">
                      <a
                        href="dashboard-nft.html"
                        class="nav-link"
                        data-key="t-nft"
                      >
                        Channel Orders</a
                      >
                    </li>
                    <li class="nav-item">
                      <a
                        href="dashboard-job.html"
                        class="nav-link"
                        data-key="t-job"
                        >Bulk Orders</a
                      >
                    </li>
                    <li class="nav-item">
                      <a
                        href="dashboard-job.html"
                        class="nav-link"
                        data-key="t-job"
                        >Reports</a
                      >
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link menu-link" href="index.php">
                  <i class="ri-honour-line"></i>
                  <span data-key="t-widgets">Pickup Points</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link menu-link" href="index.php">
                  <i class="ri-honour-line"></i>
                  <span data-key="t-widgets">Pickup Request</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link menu-link" href="index.php">
                  <i class="ri-honour-line"></i>
                  <span data-key="t-widgets">Weight Reconciliation</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link menu-link" href="index.php">
                  <i class="ri-honour-line"></i>
                  <span data-key="t-widgets">Delivery Appointment</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link menu-link" href="index.php">
                  <i class="ri-honour-line"></i>
                  <span data-key="t-widgets">NDR & Exceptions</span>
                </a>
              </li>
              <!-- end Dashboard Menu -->
           
              <!-- end Dashboard Menu -->

             
              <li class="nav-item">
                <a
                  class="nav-link menu-link"
                  href="#sidebarPages"
                  data-bs-toggle="collapse"
                  role="button"
                  aria-expanded="false"
                  aria-controls="sidebarPages"
                >
                  <i class="ri-pages-line"></i>
                  <span data-key="t-pages">Finance & COD</span>
                </a>
                <div class="collapse menu-dropdown" id="sidebarPages">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a
                        href="pages-starter.html"
                        class="nav-link"
                        data-key="t-starter"
                      >
                        COD Remittance
                      </a>
                    </li>
                    
                    <li class="nav-item">
                      <a
                        href="pages-team.html"
                        class="nav-link"
                        data-key="t-team"
                      >
                        Finance Remittance
                      </a>
                    </li>
                    <li class="nav-item">
                      <a
                        href="pages-timeline.html"
                        class="nav-link"
                        data-key="t-timeline"
                      >
                        Wallet
                      </a>
                    </li>
                   
                  </ul>
                </div>
              </li>

              <li class="nav-item">
                <a
                  class="nav-link menu-link"
                  href="#sidebarLanding"
                  data-bs-toggle="collapse"
                  role="button"
                  aria-expanded="false"
                  aria-controls="sidebarLanding"
                >
                  <i class="ri-rocket-line"></i>
                  <span data-key="t-landing">Billing</span>
                </a>
                <div class="collapse menu-dropdown" id="sidebarLanding">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a
                        href="landing.html"
                        class="nav-link"
                        data-key="t-one-page"
                      >
                        B2B invoice
                      </a>
                    </li>
                    <li class="nav-item">
                      <a
                        href="nft-landing.html"
                        class="nav-link"
                        data-key="t-nft-landing"
                      >
                        B2C Invoice
                      </a>
                    </li>
                    <li class="nav-item">
                      <a
                        href="job-landing.html"
                        class="nav-link"
                        data-key="t-job"
                        >Third Party Invoice</a
                      >
                    </li>
                    <li class="nav-item">
                      <a
                        href="job-landing.html"
                        class="nav-link"
                        data-key="t-job"
                        >OnDemand GST Inovice</a
                      >
                    </li>
                    <li class="nav-item">
                      <a
                        href="job-landing.html"
                        class="nav-link"
                        data-key="t-job"
                        >Credit Notes</a
                      >
                    </li>
                    
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link menu-link" href="index.php">
                  <i class="ri-honour-line"></i>
                  <span data-key="t-widgets">Pincode Serviceabilty</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link menu-link" href="index.php">
                  <i class="ri-honour-line"></i>
                  <span data-key="t-widgets">Price List</span>
                </a>
              </li>

              <li class="nav-item">
                <a
                  class="nav-link menu-link"
                  href="#sidebarUI"
                  data-bs-toggle="collapse"
                  role="button"
                  aria-expanded="false"
                  aria-controls="sidebarUI"
                >
                  <i class="ri-pencil-ruler-2-line"></i>
                  <span data-key="t-base-ui">Integrations</span>
                </a>
                <div
                  class="collapse menu-dropdown mega-dropdown-menu"
                  id="sidebarUI"
                >
                  <div class="row">
                    <div class="col-lg-4">
                      <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                          <a
                            href="ui-alerts.html"
                            class="nav-link"
                            data-key="t-alerts"
                            >Rest API's</a
                          >
                        </li>
                        <li class="nav-item">
                          <a
                            href="ui-badges.html"
                            class="nav-link"
                            data-key="t-badges"
                            >Plugins</a
                          >
                        </li>
                        
                      </ul>
                    </div>
                   
                   
                  </div>
                </div>
              </li>

              <li class="nav-item">
                <a
                  class="nav-link menu-link"
                  href="#sidebarAdvanceUI"
                  data-bs-toggle="collapse"
                  role="button"
                  aria-expanded="false"
                  aria-controls="sidebarAdvanceUI"
                >
                  <i class="ri-stack-line"></i>
                  <span data-key="t-advance-ui">Resource Center</span>
                </a>
                <div class="collapse menu-dropdown" id="sidebarAdvanceUI">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a
                        href="advance-ui-sweetalerts.html"
                        class="nav-link"
                        data-key="t-sweet-alerts"
                        >Zone List</a
                      >
                    </li>
                    <li class="nav-item">
                      <a
                        href="advance-ui-nestable.html"
                        class="nav-link"
                        data-key="t-nestable-list"
                        >Transporter ID's</a
                      >
                    </li>
                    <li class="nav-item">
                      <a
                        href="advance-ui-scrollbar.html"
                        class="nav-link"
                        data-key="t-scrollbar"
                        >Package Guide</a
                      >
                    </li>
                    <li class="nav-item">
                      <a
                        href="advance-ui-animation.html"
                        class="nav-link"
                        data-key="t-animation"
                        >Prohibits Items</a
                      >
                    </li>
                    
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link menu-link" href="index.php">
                  <i class="ri-honour-line"></i>
                  <span data-key="t-widgets">Customer Support</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link menu-link" href="index.php">
                  <i class="ri-honour-line"></i>
                  <span data-key="t-widgets">Shop</span>
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
