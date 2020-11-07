<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Crovex - Admin & Dashboard Template</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
  <meta content="" name="author" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="shortcut icon" href="../assets/images/favicon.ico">
  <link href="../../plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="../assets/css/jquery-ui.min.css" rel="stylesheet">
  <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
  <link href="../assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
  <link href="../assets/css/app.css" rel="stylesheet" type="text/css" />
  <link href="../assets/css/sweetalert2.min.css" rel="stylesheet" type="text/css"/>

</head>

<body>
  <div class="topbar">
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
    <nav class="navbar-custom">
      <ul class="list-unstyled topbar-nav float-right mb-0">
        <li class="ses2"><span class="ml-1 nav-user-name hidden-sm">Add New</span></li>
        <li class="ses" style="display: flex !important;align-items: center !important; margin-top: -3px !important;">
        <a href="#" style="font-size: 0.85em !important; color: #1761fd !important" class="mdi mdi-plus-circle-outline" onclick="initAdd()" aria-hidden="true"></a>
        </li>
        <li class="dropdown notification-list">
          <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#"
            role="button" aria-haspopup="false" aria-expanded="false">
            <i class="ti-bell noti-icon" style="font-size: 27px;"></i>
            <!-- <span class="badge badge-danger badge-pill noti-icon-badge">2</span> -->
          </a>
          <div class="dropdown-menu dropdown-menu-right dropdown-lg pt-0">
            <h6
              class="dropdown-item-text font-15 m-0 py-3 bg-primary text-white d-flex justify-content-between align-items-center">
              Notifications <span class="badge badge-light badge-pill">0</span>
            </h6>
            <!-- <div class="slimscroll notification-list">
            </div> -->
            <a href="javascript:void(0);" class="dropdown-item text-center text-primary" onclick="getCustomers()">
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
      <ul class="list-unstyled topbar-nav mb-0">
        <li>
          <button class="nav-link button-menu-mobile waves-effect waves-light">
            <i class="ti-menu nav-icon"></i>
          </button>
        </li>
        <li class="hide-phone app-search">
          <form role="search" class="">
            <input type="text" id="AllCompo" placeholder="Search..." class="form-control global_filter">
            <a href=""><i class="fas fa-search"></i></a>
          </form>
        </li>
      </ul>
    </nav>
  </div>
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
          <!-- <li class="nav-item"><a class="nav-link" href="../storage/employees.php"><i
                class="ti-control-record"></i>Employees</a></li> -->
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
          <li class="nav-item"><a class="nav-link" href="../storage/stock-orders.php"><i
                class="ti-control-record"></i>Orders</a></li>
          <li class="nav-item"><a class="nav-link" href="../storage/invoices.php"><i
                class="ti-control-record"></i>Invoices</a></li>
        </ul>
      </li>

    </ul>
  </div>
  <div class="page-wrapper">
    <div class="page-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12">
            <div class="page-title-box">
              <div class="float-right">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="javascript:void(0);">Crovex</a></li>
                  <li class="breadcrumb-item"><a href="javascript:void(0);">Storage</a></li>
                  <li class="breadcrumb-item active">Yarn List</li>
                </ol>
              </div>
              <h4 class="page-title">Yarn List</h4>
            </div>
          </div>
        </div>
        <div class="row4">
          <div class="col-12">
            <div class="card table-responsive py-">
              <div class="card-body" style="padding: 0.80rem !important">
                <table id="datatable-basic" class=" table dt-responsive nowrap"
                  style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Customer</th>
                      <th scope="col">Yarn Type</th>
                      <th scope="col">Yarn Count</th>
                      <th scope="col">Color</th>
                      <th scope="col">Date</th>
                      <th scope="col">LOT#</th>
                      <th scope="col">Weight</th>
                      <th scope="col">Unit Price</th>
                      <th scope="col" name="buttons">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Customer</th>
                      <th scope="col">Yarn Type</th>
                      <th scope="col">Yarn Count</th>
                      <th scope="col">Color</th>
                      <th scope="col">Date</th>
                      <th scope="col">LOT#</th>
                      <th scope="col">Weight</th>
                      <th scope="col">Unit Price</th>
                      <th scope="col">Action</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="footer text-center text-sm-left">
    &copy; 2020 Crovex <span class="text-muted d-none d-sm-inline-block float-right">
  </footer>
  </div>
  </div>
  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/js/jquery-ui.min.js"></script>
  <script src="../assets/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/metismenu.min.js"></script>
  <script src="../assets/js/waves.js"></script>
  <script src="../assets/js/feather.min.js"></script>
  <script src="../assets/js/jquery.slimscroll.min.js"></script>
  <script src="../assets/js/app.js"></script>
  <script src="../assets/js/main.js"></script>
  <script src="../../plugins/bootable/bootstable.js" defer></script>
  <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="../../plugins/datatables/dataTables.bootstrap4.min.js"></script>
  <script src="../assets/js/sweetalert2.min.js"></script>

  <script>
  $(document).ready(function() {
    $('#datatable-basic').DataTable({
      "processing": true,
      "serverSide": true,
      "ajax": "Datatable.php",
    });
  });
  </script>

  <script>
  $(document).ready(function() {
    $($(".row")[12]).css("margin-top", "12px");
    $($($(".row")[12]).children().last()).css({"margin-top": "0px","display":"flex","justify-content": "flex-end"});
    $($($(".row")[12]).children().last()).css({"margin-top": "0px","display":"flex","justify-content": "flex-end"});
    $($(".row")[11]).css({"margin-left": "-13px !important","margin-right": "-13px !important"});
    $($($("#datatable-basic_wrapper").children()[1])[0].childNodes[0]).css({"padding-right": "0px", "padding-left": "0px", "margin-left": "-1px"});
  });
  </script>
</body>

</html>
