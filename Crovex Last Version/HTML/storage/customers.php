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
  <link href="../assets/css/sweetalert2.min.css" rel="stylesheet" type="text/css" />
  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/js/jquery-ui.min.js"></script>
  <script src="../assets/js/bootstrap.bundle.min.js"></script>
  <script src="../../plugins/bootable/bootstable.js" defer></script>
  <script src="../assets/js/sweetalert2.min.js"></script>
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
          <a href="#" style="font-size: 0.85em !important; color: #1761fd !important"
            class="mdi mdi-plus-circle-outline" onclick="initAdd()" aria-hidden="true" data-toggle="modal"
            data-target="#addModal"></a>
        </li>
        <li class="dropdown notification-list">
          <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#"
            role="button" aria-haspopup="false" aria-expanded="false">
            <i class="ti-bell noti-icon" style="font-size: 27px;"></i>
            <span class="badge badge-danger badge-pill noti-icon-badge">0</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right dropdown-lg pt-0">
            <h6
              class="dropdown-item-text font-15 m-0 py-3 bg-primary text-white d-flex justify-content-between align-items-center">
              <!-- Notifications <span class="badge badge-light badge-pill">2</span> -->
            </h6>
            <!-- <div class="slimscroll notification-list">
            </div> -->
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
                  <li class="breadcrumb-item"><a href="javascript:void(0);">Profiles</a></li>
                  <li class="breadcrumb-item active">Customers</li>
                </ol>
              </div>
              <h4 class="page-title">Customers</h4>
            </div>
          </div>
        </div>
        <div class="row customers">
          <script>
          $(document).ready(function() {
            fetch('customers_connect.php').then(result => result.json()).then(data => {
              console.log(data)
              data.map(customer => {
                let cus =
                  '' +
                  '<div class="col-lg-3">' +
                  '<div class="card client-card pb-2">' +
                  '<div class="card-body text-center">' +
                  '<div class="action-btn d-flex align-items-center justify-content-end"><a href="" class="" data-toggle="modal" data-target="#editModal"><i class="fas fa-pen text-info mr-2 fa-1x"></i></a> <a href="" class="" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash-alt text-danger fa-1x"></i></a></div>' +
                  '<div class="rounded-circle thumb-xl mx-auto d-flex align-items-center justify-content-center" style="background-color: #AAAAAA; color: #fff">' +
                  customer.first_name.split('').slice(0, 1).join('') + '</div>' +
                  '<h5 class=" client-name">' + customer.first_name + ' ' + customer.last_name + '</h5>' +
                  '<span class="text-muted mr-3"><i class="dripicons-location mr-2 text-info"></i>' +
                  customer.city + ', ' + customer.country + '</span>' +
                  '<span class="text-muted"><i class="dripicons-phone mr-2 text-info"></i> +216 ' + customer
                  .phone.split('').slice(0, 2).join('') + ' ' + customer.phone.split('').slice(2, 5).join(
                    '') + ' ' + customer.phone.split('').slice(5, 8).join('') + '</span>' +
                  '<p class="text-muted text-center mt-3">Company : ' + customer.company + '</p>' +
                  '<button type="button" class="btn btn-sm btn-gradient-secondary mr-3" style="width : 80px" data-toggle="modal" data-target="#infoModal">Info</button>' +
                  '<button type="button" class="btn btn-sm btn-gradient-primary" style="width : 80px">Contact</button>'
                '</div>' +
                '</div>' +
                '</div>' +
                '</div>'
                $(".container-fluid .customers").append(cus);
                let infoModal =
                  '<div class="modal fade modal-customer-info" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"' +
                  'aria-hidden="true">' +
                  '<div class="modal-dialog modal-dialog-centered" role="document">' +
                  '<div class="modal-content">' +
                  '<div class="modal-header">' +
                  '<h5 class="modal-title" id="exampleModalLabel">Information about customer</h5>' +
                  '<button type="button" class="close" data-dismiss="modal" aria-label="Close">' +
                  '<span aria-hidden="true">&times;</span>' +
                  '</button>' +
                  '</div>' +
                  '<div class="modal-body">' +
                  '...' +
                  '</div>' +
                  '<div class="modal-footer">' +
                  '<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>' +
                  '</div>' +
                  '</div>' +
                  '</div>' +
                  '</div>';
                $(".container-fluid .customers").append(infoModal);
                let deleteModal =
                  '<div class="modal fade modal-customer-info" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"' +
                  'aria-hidden="true">' +
                  '<div class="modal-dialog modal-dialog-centered" role="document">' +
                  '<div class="modal-content">' +
                  '<div class="modal-header">' +
                  '<h5 class="modal-title" id="exampleModalLabel">Delete customer</h5>' +
                  '<button type="button" class="close" data-dismiss="modal" aria-label="Close">' +
                  '<span aria-hidden="true">&times;</span>' +
                  '</button>' +
                  '</div>' +
                  '<div class="modal-body">' +
                  '...' +
                  '</div>' +
                  '<div class="modal-footer">' +
                  '<button type="button" class="btn btn-danger">Confirm Delete</button>' +
                  '<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>' +
                  '</div>' +
                  '</div>' +
                  '</div>' +
                  '</div>';
                $(".container-fluid .customers").append(deleteModal);
                let editModal =
                  '<div class="modal fade modal-customer-info" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"' +
                  'aria-hidden="true">' +
                  '<div class="modal-dialog modal-dialog-centered" role="document">' +
                  '<div class="modal-content">' +
                  '<div class="modal-header">' +
                  '<h5 class="modal-title" id="exampleModalLabel">Edit customer</h5>' +
                  '<button type="button" class="close" data-dismiss="modal" aria-label="Close">' +
                  '<span aria-hidden="true">&times;</span>' +
                  '</button>' +
                  '</div>' +
                  '<div class="modal-body">' +
                  '...' +
                  '</div>' +
                  '<div class="modal-footer">' +
                  '<button type="button" class="btn btn-secondary">Save changes</button>' +
                  '<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>' +
                  '</div>' +
                  '</div>' +
                  '</div>' +
                  '</div>';
                $(".container-fluid .customers").append(editModal);
              })
            });
          });
          </script>
        </div>
      </div>



    </div>
  </div>

  <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Customer</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Save changes</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <footer class="footer text-center text-sm-left">
    &copy; 2020 Crovex <span class="text-muted d-none d-sm-inline-block float-right">
  </footer>
  </div>
  </div>
  <script src="../assets/js/metismenu.min.js"></script>
  <script src="../assets/js/waves.js"></script>
  <script src="../assets/js/feather.min.js"></script>
  <script src="../assets/js/jquery.slimscroll.min.js"></script>
  <script src="../assets/js/app.js"></script>
  <script src="../assets/js/main.js"></script>
</body>

</html>
