<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Crovex - Admin & Dashboard Template</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
  <meta content="" name="author" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <!-- App favicon -->
  <link rel="shortcut icon" href="../assets/images/favicon.ico">

  <!-- jvectormap -->
  <link href="../../plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">

  <!-- App css -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="../assets/css/jquery-ui.min.css" rel="stylesheet">
  <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
  <link href="../assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
  <link href="../assets/css/app.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

  <!-- Top Bar Start -->
  <div class="topbar">

    <!-- LOGO -->
    <div class="topbar-left">
      <a href="../dashboard/crm-index.php" class="logo">
        <span>
          <img src="../assets/images/logo-sm.png" alt="logo-small" class="logo-sm">
        </span>
        <span>
          <img src="../assets/images/logo.png" alt="logo-large" class="logo-lg logo-light">
          <img src="../assets/images/logo-dark.png" alt="logo-large" class="logo-lg">
        </span>
      </a>
    </div>
    <!--end logo-->
    <!-- Navbar -->
    <nav class="navbar-custom">
      <ul class="list-unstyled topbar-nav float-right mb-0">

        <li class="dropdown notification-list">
          <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#"
            role="button" aria-haspopup="false" aria-expanded="false">
            <i class="ti-bell noti-icon"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right dropdown-lg pt-0">

            <h6
              class="dropdown-item-text font-15 m-0 py-3 bg-primary text-white d-flex justify-content-between align-items-center">
              Notifications <span class="badge badge-light badge-pill">0</span>
            </h6>
            <!-- <div class="slimscroll notification-list"></div> -->
            <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
              View all <i class="fi-arrow-right"></i>
            </a>
          </div>
        </li>

        <li class="dropdown">
          <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#"
            role="button" aria-haspopup="false" aria-expanded="false">
            <img src="../assets/images/users/user-1.png" alt="profile-user" class="rounded-circle" />
            <span class="ml-1 nav-user-name hidden-sm">Mohamed <i class="mdi mdi-chevron-down"></i> </span>
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="#"><i class="ti-user text-muted mr-2"></i> Profile</a>
            <a class="dropdown-item" href="#"><i class="ti-settings text-muted mr-2"></i> Settings</a>
            <div class="dropdown-divider mb-0"></div>
            <a class="dropdown-item" href="#"><i class="ti-power-off text-muted mr-2"></i> Logout</a>
          </div>
        </li>
      </ul>
      <!--end topbar-nav-->

      <ul class="list-unstyled topbar-nav mb-0">
        <li>
          <button class="nav-link button-menu-mobile waves-effect waves-light">
            <i class="ti-menu nav-icon"></i>
          </button>
        </li>
        <li class="hide-phone app-search">
          <form role="search" class="">
            <input type="text" id="AllCompo" placeholder="Search..." class="form-control">
            <a href=""><i class="fas fa-search"></i></a>
          </form>
        </li>
      </ul>
    </nav>
    <!-- end navbar-->
  </div>
  <!-- Top Bar End -->


  <!-- Left Sidenav -->
  <div class="left-sidenav">
    <ul class="metismenu left-sidenav-menu">
      <li>
        <a href="javascript: void(0);"><i class="ti-bar-chart"></i><span>Dashboard</span><span class="menu-arrow"><i
              class="mdi mdi-chevron-right"></i></span></a>
        <ul class="nav-second-level" aria-expanded="false">
          <li class="nav-item"><a class="nav-link" href="../dashboard/analytics-index.php"><i
                class="ti-control-record"></i>Analytics</a></li>
        </ul>
      </li>

      <li>
        <a href="javascript: void(0);"><i class="mdi mdi-account"></i><span>Profiles</span><span class="menu-arrow"><i
              class="mdi mdi-chevron-right"></i></span></a>
        <ul class="nav-second-level" aria-expanded="false">
          <li class="nav-item"><a class="nav-link" href="../storage/customers.php"><i
                class="ti-control-record"></i>Customers</a></li>
        </ul>
      </li>

      <li>
        <a href="javascript: void(0);"><i class="mdi mdi-view-grid"></i><span>Storage</span><span class="menu-arrow"><i
              class="mdi mdi-chevron-right"></i></span></a>
        <ul class="nav-second-level" aria-expanded="false">
          <li class="nav-item"><a class="nav-link" href="../storage/stock-yarn.php"><i
                class="ti-control-record"></i>Stock Yarn</a></li>
          <li class="nav-item"><a class="nav-link" href="../storage/stock-fabric.php"><i
                class="ti-control-record"></i>Stock Fabric</a></li>
          <li class="nav-item"><a class="nav-link" href="../storage/stock-order.php"><i
                class="ti-control-record"></i>Orders</a></li>
          <li class="nav-item"><a class="nav-link" href="../storage/invoices.php"><i
                class="ti-control-record"></i>Orders</a></li>
        </ul>
      </li>
      
    </ul>
  </div>
  <!-- end left-sidenav-->

  <div class="page-wrapper">
    <!-- Page Content-->
    <div class="page-content">

      <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
          <div class="col-sm-12">
            <div class="page-title-box">
              <div class="float-right">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="javascript:void(0);">Crovex</a></li>
                  <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                  <li class="breadcrumb-item active">Analytics</li>
                </ol>
              </div>
              <h4 class="page-title">Analytics</h4>
            </div>
            <!--end page-title-box-->
          </div>
          <!--end col-->
        </div>
        <!-- end page title end breadcrumb -->
        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-8">
                    <h4 class="header-title mt-0 mb-3">Sessions By Channel</h4>
                    <div id="barchart" class="apex-charts"></div>
                  </div>
                  <!--end col-->
                  <div class="col-lg-4">
                    <h4 class="header-title mt-0 mb-3">Traffic Sources</h4>
                    <div class="traffic-card">
                      <h3 class="text-dark font-weight-semibold">80</h3>
                      <h5>Right Now</h5>
                    </div>

                    <ul class="list-unstyled url-list mb-0">
                      <li>
                        <i class="mdi mdi-circle-medium text-success"></i>
                        <span>Email</span>
                      </li>
                      <li>
                        <i class="mdi mdi-circle-medium text-pink"></i>
                        <span>Referral</span>
                      </li>
                      <li>
                        <i class="mdi mdi-circle-medium text-purple"></i>
                        <span>Organic</span>
                      </li>
                      <li>
                        <i class="mdi mdi-circle-medium text-warning"></i>
                        <span>Direct</span>
                      </li>
                      <li>
                        <i class="mdi mdi-circle-medium text-secondary"></i>
                        <span>Campaign</span>
                      </li>
                    </ul>
                  </div>
                  <!--end col-->
                </div>
                <!--end row-->
              </div>
              <!--end card-body-->
            </div>
            <!--end card-->
          </div>
          <!--end col-->
          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <h4 class="header-title mt-0 mb-3">Organic Traffic in USA</h4>

                <div class="row">
                  <div class="col-lg-7">
                    <div id="usa" class="drop-shadow-map" style="height: 300px"></div>
                  </div>
                  <!--end col-->
                  <div class="col-lg-5 align-self-center">
                    <div class="">
                      <span class="text-dark">Texas</span>
                      <small class="float-right text-muted ml-3 font-13">81%</small>
                      <div class="progress mt-2" style="height:3px;">
                        <div class="progress-bar bg-pink" role="progressbar" style="width: 81%; border-radius:5px;"
                          aria-valuenow="81" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>

                    <div class="mt-3">
                      <span class="text-dark">Washington</span>
                      <small class="float-right text-muted ml-3 font-13">68%</small>
                      <div class="progress mt-2" style="height:3px;">
                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 68%; border-radius:5px;"
                          aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                    <div class="mt-3">
                      <span class="text-dark">Wyoming</span>
                      <small class="float-right text-muted ml-3 font-13">48%</small>
                      <div class="progress mt-2" style="height:3px;">
                        <div class="progress-bar bg-purple" role="progressbar" style="width: 48%; border-radius:5px;"
                          aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>

                    <div class="mt-3">
                      <span class="text-dark">Virginia</span>
                      <small class="float-right text-muted ml-3 font-13">32%</small>
                      <div class="progress mt-2" style="height:3px;">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 32%; border-radius:5px;"
                          aria-valuenow="32" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                  <!--end col-->
                </div>
                <!--end row-->
              </div>
              <!--end card-body-->
            </div>
            <!--end card-->
          </div>
          <!--end col-->
        </div>
        <!--end row-->
        <div class="row justify-content-center">
          <div class="col-md-6 col-lg-3">
            <div class="card report-card">
              <div class="card-body">
                <div class="d-flex justify-content-between">
                  <div>
                    <p class="text-dark font-weight-semibold font-14">Sessions</p>
                    <h3 class="my-3">24k</h3>
                    <p class="mb-0 text-truncate"><span class="text-success"><i
                          class="mdi mdi-trending-up"></i>8.5%</span> New Sessions Today</p>
                  </div>
                  <div class="align-self-center">
                    <i class="dripicons-user-group report-main-icon bg-soft-purple text-purple"></i>
                  </div>
                </div>
              </div>
              <!--end card-body-->
            </div>
            <!--end card-->
          </div>
          <!--end col-->
          <div class="col-md-6 col-lg-3">
            <div class="card report-card">
              <div class="card-body">
                <div class="d-flex justify-content-between">
                  <div>
                    <p class="text-dark font-weight-semibold font-14">Avg.Sessions</p>
                    <h3 class="my-3">00:18</h3>
                    <p class="mb-0 text-truncate"><span class="text-success"><i
                          class="mdi mdi-trending-up"></i>1.5%</span> Weekly Avg.Sessions</p>
                  </div>
                  <div class="align-self-center">
                    <i class="dripicons-clock report-main-icon bg-soft-danger text-danger"></i>
                  </div>
                </div>
              </div>
              <!--end card-body-->
            </div>
            <!--end card-->
          </div>
          <!--end col-->
          <div class="col-md-6 col-lg-3">
            <div class="card report-card">
              <div class="card-body">
                <div class="d-flex justify-content-between">
                  <div>
                    <p class="text-dark font-weight-semibold font-14">Bounce Rate</p>
                    <h3 class="my-3">$2400</h3>
                    <p class="mb-0 text-truncate"><span class="text-danger"><i
                          class="mdi mdi-trending-down"></i>35%</span> Bounce Rate Weekly</p>
                  </div>
                  <div class="align-self-center">
                    <i class="dripicons-meter report-main-icon bg-soft-secondary text-secondary"></i>
                  </div>
                </div>
              </div>
              <!--end card-body-->
            </div>
            <!--end card-->
          </div>
          <!--end col-->
          <div class="col-md-6 col-lg-3">
            <div class="card report-card">
              <div class="card-body">
                <div class="d-flex justify-content-between">
                  <div>
                    <p class="text-dark font-weight-semibold font-14">Goal Completions</p>
                    <h3 class="my-3">85000</h3>
                    <p class="mb-0 text-truncate"><span class="text-success"><i
                          class="mdi mdi-trending-up"></i>10.5%</span> Completions Weekly</p>
                  </div>
                  <div class="align-self-center">
                    <i class="dripicons-wallet report-main-icon bg-soft-warning text-warning"></i>
                  </div>
                </div>
              </div>
              <!--end card-body-->
            </div>
            <!--end card-->
          </div>
          <!--end col-->
        </div>
        <!--end row-->
        <div class="row">
          <div class="col-lg-8">
            <div class="card">
              <div class="card-body">
                <h4 class="header-title mt-0">Audience Overview</h4>
                <div class="">
                  <div id="liveVisits" class="apex-charts"></div>
                </div>
              </div>
              <!--end card-body-->
              <div class="card-body bg-light chart-report-card">
                <div class="row d-flex justify-content-between">
                  <div class="col-lg-4">
                    <div class="media">
                      <i class="dripicons-user-group report-main-icon bg-card text-dark mr-2"></i>
                      <div class="media-body align-self-center text-truncate">
                        <h4 class="mt-0 mb-0 font-weight-semibold text-dark font-24">140k
                          <span class="text-success  font-12 font-weight-normal"><i
                              class="mdi mdi-arrow-up mr-1"></i>21%</span>
                        </h4>
                        <p class="text-dark font-weight-semibold mb-0 font-14">Users</p>
                      </div>
                      <!--end media-body-->
                    </div>
                    <!--end media-->
                  </div>
                  <!--end col-->
                  <div class="col-lg-4">
                    <div class="media">
                      <i class="dripicons-rocket report-main-icon bg-card text-dark mr-2"></i>
                      <div class="media-body align-self-center text-truncate">
                        <h4 class="mt-0 mb-0 font-weight-semibold text-dark font-24">2154
                          <span class="text-success  font-12 font-weight-normal"><i
                              class="mdi mdi-arrow-up mr-1"></i>21%</span>
                        </h4>
                        <p class="text-dark font-weight-semibold mb-0 font-14">Page views</p>
                      </div>
                      <!--end media-body-->
                    </div>
                    <!--end media-->
                  </div>
                  <!--end col-->
                  <div class="col-lg-4">
                    <div class="media">
                      <i class="dripicons-preview report-main-icon bg-card text-dark mr-2"></i>
                      <div class="media-body align-self-center text-truncate">
                        <h4 class="mt-0 mb-0 font-weight-semibold text-dark font-24">183k
                          <span class="text-success  font-12 font-weight-normal"><i
                              class="mdi mdi-arrow-up mr-1"></i>21%</span>
                        </h4>
                        <p class="text-dark font-weight-semibold mb-0 font-14">Impressions</p>
                      </div>
                      <!--end media-body-->
                    </div>
                    <!--end media-->
                  </div>
                  <!--end col-->
                </div>
                <!--end row-->
              </div>
              <!--end card-body-->
            </div>
            <!--end card-->
          </div>
          <!--end col-->
          <div class="col-lg-4">

            <div class="card">
              <div class="card-body">
                <h4 class="header-title mt-0">Sessions Device</h4>
                <div id="ana_device" class="apex-charts"></div>
                <div class="table-responsive mt-4">
                  <table class="table mb-0">
                    <thead class="thead-light">
                      <tr>
                        <th>Device</th>
                        <th>Sassions</th>
                        <th>Day</th>
                        <th>Week</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">Dasktops</th>
                        <td>1843</td>
                        <td>-3</td>
                        <td>-12</td>
                      </tr>
                      <tr>
                        <th scope="row">Tablets</th>
                        <td>2543</td>
                        <td>-5</td>
                        <td>-2</td>
                      </tr>
                      <tr>
                        <th scope="row">Mobiles</th>
                        <td>3654</td>
                        <td>-5</td>
                        <td>-6</td>
                      </tr>

                    </tbody>
                  </table>
                  <!--end /table-->
                </div>
              </div>
              <!--end card-body-->
            </div>
            <!--end card-->
          </div>
          <!--end col-->
        </div>
        <!--end row-->




        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <h4 class="header-title mt-0 mb-3">Browser Used By Users</h4>
                <div class="table-responsive browser_users">
                  <table class="table mb-0">
                    <thead class="thead-light">
                      <tr>
                        <th class="border-top-0">Browser</th>
                        <th class="border-top-0">Sessions</th>
                        <th class="border-top-0">Bounce Rate</th>
                        <th class="border-top-0">Transactions</th>
                      </tr>
                      <!--end tr-->
                    </thead>
                    <tbody>
                      <tr>
                        <td><i class="fab fa-chrome mr-2 text-danger font-16"></i>Chrome</td>
                        <td>10853<small class="text-muted">(52%)</small></td>
                        <td> 52.80%</td>
                        <td>566<small class="text-muted">(92%)</small></td>
                      </tr>
                      <!--end tr-->
                      <tr>
                        <td><i class="fab fa-safari mr-2 text-info font-16"></i>Safari</td>
                        <td>2545<small class="text-muted">(47%)</small></td>
                        <td> 47.54%</td>
                        <td>498<small class="text-muted">(81%)</small></td>
                      </tr>
                      <!--end tr-->
                      <tr>
                        <td><i class="fab fa-internet-explorer mr-2 text-warning font-16"></i>Internet-Explorer</td>
                        <td>1836<small class="text-muted">(38%)</small></td>
                        <td> 41.12%</td>
                        <td>455<small class="text-muted">(74%)</small></td>
                      </tr>
                      <!--end tr-->
                      <tr>
                        <td><i class="fab fa-opera mr-2 text-danger font-16"></i>Opera</td>
                        <td>1958<small class="text-muted">(31%)</small></td>
                        <td> 36.82%</td>
                        <td>361<small class="text-muted">(61%)</small></td>
                      </tr>
                      <!--end tr-->
                      <tr>
                        <td><i class="fab fa-firefox mr-2 text-blue font-16"></i>Firefox</td>
                        <td>1566<small class="text-muted">(26%)</small></td>
                        <td> 29.33%</td>
                        <td>299<small class="text-muted">(49%)</small></td>
                      </tr>
                      <!--end tr-->
                    </tbody>
                  </table>
                  <!--end table-->
                </div>
                <!--end /div-->
              </div>
              <!--end card-body-->
            </div>
            <!--end card-->
          </div>
          <!--end col-->

          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <h4 class="header-title mt-0 mb-3">Traffic Sources</h4>
                <div class="table-responsive browser_users">
                  <table class="table mb-0">
                    <thead class="thead-light">
                      <tr>
                        <th class="border-top-0">Channel</th>
                        <th class="border-top-0">Sessions</th>
                        <th class="border-top-0">Prev.Period</th>
                        <th class="border-top-0">% Change</th>
                      </tr>
                      <!--end tr-->
                    </thead>
                    <tbody>
                      <tr>
                        <td><a href="" class="text-primary">Organic search</a></td>
                        <td>10853<small class="text-muted">(52%)</small></td>
                        <td>566<small class="text-muted">(92%)</small></td>
                        <td> 52.80% <i class="fas fa-caret-up text-success font-16"></i></td>
                      </tr>
                      <!--end tr-->
                      <tr>
                        <td><a href="" class="text-primary">Direct</a></td>
                        <td>2545<small class="text-muted">(47%)</small></td>
                        <td>498<small class="text-muted">(81%)</small></td>
                        <td> -17.20% <i class="fas fa-caret-down text-danger font-16"></i></td>

                      </tr>
                      <!--end tr-->
                      <tr>
                        <td><a href="" class="text-primary">Referal</a></td>
                        <td>1836<small class="text-muted">(38%)</small></td>
                        <td>455<small class="text-muted">(74%)</small></td>
                        <td> 41.12% <i class="fas fa-caret-up text-success font-16"></i></td>

                      </tr>
                      <!--end tr-->
                      <tr>
                        <td><a href="" class="text-primary">Email</a></td>
                        <td>1958<small class="text-muted">(31%)</small></td>
                        <td>361<small class="text-muted">(61%)</small></td>
                        <td> -8.24% <i class="fas fa-caret-down text-danger font-16"></i></td>
                      </tr>
                      <!--end tr-->
                      <tr>
                        <td><a href="" class="text-primary">Social</a></td>
                        <td>1566<small class="text-muted">(26%)</small></td>
                        <td>299<small class="text-muted">(49%)</small></td>
                        <td> 29.33% <i class="fas fa-caret-up text-success"></i></td>
                      </tr>
                      <!--end tr-->
                    </tbody>
                  </table>
                  <!--end table-->
                </div>
                <!--end /div-->
              </div>
              <!--end card-body-->
            </div>
            <!--end card-->
          </div>
          <!--end col-->
        </div>
        <!--end row-->

      </div><!-- container -->

      <footer class="footer text-center text-sm-left">
        &copy; 2020 Crovex <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i
            class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
      </footer>
      <!--end footer-->
    </div>
    <!-- end page content -->
  </div>
  <!-- end page-wrapper -->




  <!-- jQuery  -->
  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/metismenu.min.js"></script>
  <script src="../assets/js/waves.js"></script>
  <script src="../assets/js/feather.min.js"></script>
  <script src="../assets/js/jquery.slimscroll.min.js"></script>
  <script src="../assets/js/jquery-ui.min.js"></script>

  <script src="../../plugins/apexcharts/apexcharts.min.js"></script>
  <script src="../../plugins/moment/moment.js"></script>
  <script src="../../plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
  <script src="../../plugins/jvectormap/jquery-jvectormap-us-aea-en.js"></script>
  <script src="../assets/pages/jquery.analytics_dashboard.init.js"></script>

  <!-- App js -->
  <script src="../assets/js/app.js"></script>

</body>

</html>