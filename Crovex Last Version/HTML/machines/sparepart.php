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

        <!-- DataTables -->
        <link href="../../plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="../../plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="../../plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" /> 

        <!-- App css -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/jquery-ui.min.css" rel="stylesheet">
        <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <!-- =================================================================================   Modal   ============================================================================================ -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
  <!--<div class="modal-dialog modal-lg">-->
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Sparepart</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <!--Form-->
            <form action="sparepartinsertcode.php" method="POST">

            <div class="container">
          

              <div class="col-md-14">
                <div class="form-group">
                <input type="text" name="brand" class="form-control" placeholder="Brand">
                </div>
              </div>

              <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                <input type="text" name="machine_type" class="form-control" placeholder="Machine Type">
                </div>
              </div>


              <div class="col-md-6">
                <div class="form-group">
                <input type="text" name="needle1" class="form-control" placeholder="Needle">
                </div>
              </div>
              </div>

              <div class="w-100"></div>            
                  
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                <input type="text" name="needle2" class="form-control" placeholder="Needle">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                <input type="text" name="needle3" class="form-control" placeholder="Needle">
                </div>
              </div>
            </div>
                        
            <div class="w-100"></div> 

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                <input type="number" name="needle4" class="form-control" placeholder="Needles">
                </div>
              </div>
              
              <div class="col-md-6">
                <div class="form-group">
                <input type="number" name="sinker" class="form-control" placeholder="Sinker">
                </div>
              </div>
            </div>        
          </div>
        </div>


            <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="Submit" name="insertdata" class="btn btn-primary">Save Data</button>
        </div>
    </form>
      </div>
    </div>
  </div>
<!-- ======================================================================================================================================================================================== -->
<!-- =================================================================================   Edit Modal   ======================================================================================= -->

<!-- Modal -->
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
  <!--<div class="modal-dialog modal-lg">-->
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Sparepart</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <!--Form-->
            <form action="sparepartupdatecode.php" method="POST">
            <input type="hidden" name="update_id" id="update_id">
              

            <div class="container">

            <div class="col-md-14">
                <div class="form-group">
                <input type="text" name="brand" id="brand" class="form-control" placeholder="Brand">
                </div>
              </div>
          
              <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                <input type="text" name="machine_type" id="machine_type" class="form-control" placeholder="Machine Type">
                </div>
              </div>


              <div class="col-md-6">
                <div class="form-group">
                <input type="text" name="needle1" id="needle1" class="form-control" placeholder="needle1">
                </div>
              </div>
              </div>

              <div class="w-100"></div>            
                  
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                <input type="text" name="needle2" id= "needle2" class="form-control" placeholder="needle2">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                <input type="text" name="needle3" id= "needle3" class="form-control" placeholder="needle3">
                </div>
              </div>
            </div>
                        
            <div class="w-100"></div> 

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                <input type="text" name="needle4" id= "needle4" class="form-control" placeholder="Needle4">
                </div>
              </div>
              
              <div class="col-md-6">
                <div class="form-group">
                <input type="text" name="sinker" id= "sinker" class="form-control" placeholder="Sinker">
                </div>
              </div>


            </div>                      
          </div>
         </div>


        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="Submit" name="updatedata" class="btn btn-primary">Update Data</button>
          
        </div>
        
    </form>
    
      </div>
    </div>
  </div>
  
<!-- ======================================================================================================================================================================================== -->
<!-- ==================================================================================     Delete Modal     ================================================================================ -->
<!-- Delete POP FORM (Bootstrap Modal) -->

  <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delete Data From Stock</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <!--Form-->
            <form action="sparepartdeletecode.php" method="POST">
            <div class="modal-body">
                <input type="hidden" name="delete_id" id="delete_id">
                <h4> Do you want to Delete this Data ? </h4>
                                        
         </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal"> No </button>
          <button type="Submit" name="deletedata" class="btn btn-primary"> Yes Delete it. </button>
        </div>
    </form>
      </div>
    </div>
  </div>
  <!-- ======================================================================================================================================================================================= -->
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
                    <li class="hidden-sm">
                        <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="javascript: void(0);" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            English <img src="../assets/images/flags/us_flag.jpg" class="ml-2" height="16" alt=""/> <i class="mdi mdi-chevron-down"></i> 
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="javascript: void(0);"><span> German </span><img src="../assets/images/flags/germany_flag.jpg" alt="" class="ml-2 float-right" height="14"/></a>
                            <a class="dropdown-item" href="javascript: void(0);"><span> Italian </span><img src="../assets/images/flags/italy_flag.jpg" alt="" class="ml-2 float-right" height="14"/></a>
                            <a class="dropdown-item" href="javascript: void(0);"><span> French </span><img src="../assets/images/flags/french_flag.jpg" alt="" class="ml-2 float-right" height="14"/></a>
                            <a class="dropdown-item" href="javascript: void(0);"><span> Spanish </span><img src="../assets/images/flags/spain_flag.jpg" alt="" class="ml-2 float-right" height="14"/></a>
                            <a class="dropdown-item" href="javascript: void(0);"><span> Russian </span><img src="../assets/images/flags/russia_flag.jpg" alt="" class="ml-2 float-right" height="14"/></a>
                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <i class="ti-bell noti-icon"></i>
                            <span class="badge badge-danger badge-pill noti-icon-badge">2</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-lg pt-0">
                           
                            <h6 class="dropdown-item-text font-15 m-0 py-3 bg-primary text-white d-flex justify-content-between align-items-center">
                                Notifications <span class="badge badge-light badge-pill">2</span>
                            </h6> 
                            <div class="slimscroll notification-list">
                                <!-- item-->
                                <a href="#" class="dropdown-item py-3">
                                    <small class="float-right text-muted pl-2">2 min ago</small>
                                    <div class="media">
                                        <div class="avatar-md bg-primary">
                                           <i class="la la-cart-arrow-down text-white"></i>
                                        </div>
                                        <div class="media-body align-self-center ml-2 text-truncate">
                                            <h6 class="my-0 font-weight-normal text-dark">Your order is placed</h6>
                                            <small class="text-muted mb-0">Dummy text of the printing and industry.</small>
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a><!--end-item-->
                                <!-- item-->
                                <a href="#" class="dropdown-item py-3">
                                    <small class="float-right text-muted pl-2">10 min ago</small>
                                    <div class="media">
                                        <div class="avatar-md bg-success">
                                            <i class="la la-group text-white"></i>
                                        </div>
                                        <div class="media-body align-self-center ml-2 text-truncate">
                                            <h6 class="my-0 font-weight-normal text-dark">Meeting with designers</h6>
                                            <small class="text-muted mb-0">It is a long established fact that a reader.</small>
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a><!--end-item-->
                                <!-- item-->
                                <a href="#" class="dropdown-item py-3">
                                    <small class="float-right text-muted pl-2">40 min ago</small>
                                    <div class="media">
                                        <div class="avatar-md bg-pink">
                                            <i class="la la-list-alt text-white"></i>
                                        </div>
                                        <div class="media-body align-self-center ml-2 text-truncate">
                                            <h6 class="my-0 font-weight-normal text-dark">UX 3 Task complete.</h6>
                                            <small class="text-muted mb-0">Dummy text of the printing.</small>
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a><!--end-item-->
                                <!-- item-->
                                <a href="#" class="dropdown-item py-3">
                                    <small class="float-right text-muted pl-2">1 hr ago</small>
                                    <div class="media">
                                        <div class="avatar-md bg-warning">
                                            <i class="la la-truck text-white"></i>
                                        </div>
                                        <div class="media-body align-self-center ml-2 text-truncate">
                                            <h6 class="my-0 font-weight-normal text-dark">Your order is placed</h6>
                                            <small class="text-muted mb-0">It is a long established fact that a reader.</small>
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a><!--end-item-->
                                <!-- item-->
                                <a href="#" class="dropdown-item py-3">
                                    <small class="float-right text-muted pl-2">2 hrs ago</small>
                                    <div class="media">
                                        <div class="avatar-md bg-info">
                                            <i class="la la-check-circle text-white"></i>
                                        </div>
                                        <div class="media-body align-self-center ml-2 text-truncate">
                                            <h6 class="my-0 font-weight-normal text-dark">Payment Successfull</h6>
                                            <small class="text-muted mb-0">Dummy text of the printing.</small>
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a><!--end-item-->
                            </div>
                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                                View all <i class="fi-arrow-right"></i>
                            </a>
                        </div>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <img src="../assets/images/users/user-1.png" alt="profile-user" class="rounded-circle" /> 
                            <span class="ml-1 nav-user-name hidden-sm">Amelia <i class="mdi mdi-chevron-down"></i> </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><i class="ti-user text-muted mr-2"></i> Profile</a>
                            <a class="dropdown-item" href="#"><i class="ti-wallet text-muted mr-2"></i> My Wallet</a>
                            <a class="dropdown-item" href="#"><i class="ti-settings text-muted mr-2"></i> Settings</a>
                            <a class="dropdown-item" href="#"><i class="ti-lock text-muted mr-2"></i> Lock screen</a>
                            <div class="dropdown-divider mb-0"></div>
                            <a class="dropdown-item" href="#"><i class="ti-power-off text-muted mr-2"></i> Logout</a>
                        </div>
                    </li>
                </ul><!--end topbar-nav-->
    
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
                    <a href="javascript: void(0);"><i class="ti-bar-chart"></i><span>Dashboard</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="../dashboard/analytics-index.php"><i class="ti-control-record"></i>Analytics</a></li>
                        <li class="nav-item"><a class="nav-link" href="../dashboard/crm-index.php"><i class="ti-control-record"></i>CRM</a></li>
                        <li class="nav-item"><a class="nav-link" href="../dashboard/helpdesk-index.php"><i class="ti-control-record"></i>Helpdesk</a></li>
                        <li class="nav-item"><a class="nav-link" href="../dashboard/sales-index.php"><i class="ti-control-record"></i>Sales</a></li> 
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i class="mdi mdi-account"></i><span>Profiles</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="../profiles/profile-contact.php"><i class="ti-control-record"></i>Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="../profiles/profile-employee.php"><i class="ti-control-record"></i>Employees</a></li>
                        <li class="nav-item"><a class="nav-link" href="../profiles/profile-customer.php"><i class="ti-control-record"></i>Customers</a></li>
                    </ul>
                </li>
<!--
                <li>
                    <a href="javascript: void(0);"><i class="fas fa-shopping-basket"></i><span>Product</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="../product/ecommerce-products.html"><i class="ti-control-record"></i>Product</a></li>
                        <li class="nav-item"><a class="nav-link" href="../product/ecommerce-product-list.html"><i class="ti-control-record"></i>Product List</a></li>
                        <li class="nav-item"><a class="nav-link" href="../product/ecommerce-product-detail.html"><i class="ti-control-record"></i>Product Detail</a></li>
                        <li class="nav-item"><a class="nav-link" href="../product/ecommerce-cart.html"><i class="ti-control-record"></i>Cart</a></li>
                        <li class="nav-item"><a class="nav-link" href="../product/ecommerce-checkout.html"><i class="ti-control-record"></i>Checkout</a></li>
                    </ul>
                </li>
-->
                <li>
                    <a href="javascript: void(0);"><i class="mdi mdi-view-grid"></i><span>Storage</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="../storage/stock-yarn.php"><i class="ti-control-record"></i>Stock Yarn</a></li>
                        <li class="nav-item"><a class="nav-link" href="../storage/stock-fabric.php"><i class="ti-control-record"></i>Stock Fabric</a></li>
                        <li class="nav-item"><a class="nav-link" href="../storage/stock-order.php"><i class="ti-control-record"></i>Orders</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i class="mdi mdi-factory"></i><span>Machines</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="../machines/machines.php"><i class="ti-control-record"></i>Machines</a></li>
                        <li class="nav-item"><a class="nav-link" href="../machines/sparepart.php"><i class="ti-control-record"></i>Sparepart</a></li>
                    </ul>
                </li>
                
                <li>
                    <a href="javascript: void(0);"><i class="mdi mdi-settings"></i><span>Settings</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="../settings/settings-setting.php"><i class="ti-control-record"></i>Settings</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);"><i class="ti-lock"></i><span>Authentication</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="../authentication/auth-login.html"><i class="ti-control-record"></i>Log in</a></li>
                        <li class="nav-item"><a class="nav-link" href="../authentication/auth-register.html"><i class="ti-control-record"></i>Register</a></li>
                        <li class="nav-item"><a class="nav-link" href="../authentication/auth-recover-pw.html"><i class="ti-control-record"></i>Recover Password</a></li>
                        <li class="nav-item"><a class="nav-link" href="../authentication/auth-lock-screen.html"><i class="ti-control-record"></i>Lock Screen</a></li>
                        <li class="nav-item"><a class="nav-link" href="../authentication/auth-404.html"><i class="ti-control-record"></i>Error 404</a></li>
                        <li class="nav-item"><a class="nav-link" href="../authentication/auth-500.html"><i class="ti-control-record"></i>Error 500</a></li>
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
                        <p class="text-muted mb-2">
                            </p>
                            <div class="page-title-box">
                                <span class="float-left">
                                    <a href="#" class="btn btn-primary" data-toggle= "modal" data-target="#exampleModal">New</a>
                                </span>
                                <div class="float-right">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Crovex</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Machines</a></li>
                                        <li class="breadcrumb-item active">Sparepart</li>
                                    </ol>
                                </div>
                                <p class="text-muted mb-5">
                                </p>
                              <!--  <h4 class="page-title">Sparepart</h4>
-->
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
    
                                    <h4 class="mt-0 header-title">Sparepart List</h4>
                                    
 <!-- =================================================================================   Table   ============================================================================================ -->
<!-- ======================================================================================================================================================================================== -->

    
        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">           
            <thead class="thead-light">

                <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection, 'pjdb');

                $query = "SELECT * FROM sparepart_table";
                $query_run = mysqli_query($connection,$query);
            
                ?>
                  <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Brand</th>
                  <th scope="col">Type</th>
                  <th scope="col">Needle</th>
                  <th scope="col">Needle</th>
                  <th scope="col">Needle</th>
                  <th scope="col">Needle</th>
                  <th scope="col">Sinker</th>
                  <th scope="col">Action</th>
						    	</tr>
                </thead>
                <tfoot>
                  <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Brand</th>
                  <th scope="col">Type</th>
                  <th scope="col">Needle</th>
                  <th scope="col">Needle</th>
                  <th scope="col">Needle</th>
                  <th scope="col">Needle</th>
                  <th scope="col">Sinker</th>
                  <th scope="col">Action</th>
                  </tr>
                </tfoot>
                <tbody>
                <?php
                if ($query_run)
                {
                    foreach($query_run as $row)
                {
                ?>        
                      
						
                <tr>
                  <td> <?php echo $row['id']; ?></td>
                  <td> <?php echo $row['brand']; ?></td>
                  <td> <?php echo $row['machine_type']; ?></td>
                  <td> <?php echo $row['needle1']; ?></td> 
                  <td> <?php echo $row['needle2']; ?></td>
                  <td> <?php echo $row['needle3']; ?></td>
                  <td> <?php echo $row['needle4']; ?></td>
                  <td> <?php echo $row['sinker']; ?></td>
                  <td> 
                  <a href="#!" class="editbtn" data-toggle="tooltip" data-original-title="Edit">
                    <i class="fas fa-user-edit blue-text"></i>
                  </a>
                  &ensp;
 
                  <a href="#!" class="deletebtn" data-toggle="tooltip" data-original-title="Delete">
                    <i class="fas fa-trash text-red"></i>
                  </a>
                  </td>
                </tr>															
                </tbody>
                <?php
                    }
                }
                else
                {
                    echo "Not Record Found";
                }
                ?>
              </table>
            </div>
          </div>

      <!-- ======================================================================================================================================================================================== -->
    
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->                                      

                </div><!-- container -->

                <footer class="footer text-center text-sm-left">
                    &copy; 2020 Crovex <span class="text-muted d-none d-sm-inline-block float-right">
                </footer><!--end footer-->
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->

        


        <!-- jQuery  -->
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/jquery-ui.min.js"></script>
        <script src="../assets/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/js/metismenu.min.js"></script>
        <script src="../assets/js/waves.js"></script>
        <script src="../assets/js/feather.min.js"></script>
        <script src="../assets/js/jquery.slimscroll.min.js"></script>    
        
        <!-- Required datatable js -->
        <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../../plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="../../plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="../../plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="../../plugins/datatables/jszip.min.js"></script>
        <script src="../../plugins/datatables/pdfmake.min.js"></script>
        <script src="../../plugins/datatables/vfs_fonts.js"></script>
        <script src="../../plugins/datatables/buttons.html5.min.js"></script>
        <script src="../../plugins/datatables/buttons.print.min.js"></script>
        <script src="../../plugins/datatables/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="../../plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="../../plugins/datatables/responsive.bootstrap4.min.js"></script>
        <script src="../assets/pages/jquery.datatable.init.js"></script>

        <!-- App js -->
        <script src="../assets/js/app.js"></script>
        
        <!-- =============================================================================================       Delete Button        ========================================================================================== -->


<script>
  $(document).ready(function(){
    $('#datatable-basic').DataTable();
  });  

</script>  

<script>
    $(document).ready(function(){
        $('.deletebtn').on('click', function(){
            $('#deletemodal').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function(){
                return $(this).text();
                
            }).get();

            console.log(data);

            $('#delete_id').val(data[0]);

        });


    });
</script>  
<!-- =================================================================================================================================================================================================================== -->

<!-- ==============================================================================================       Edit Button        =========================================================================================== -->

<script>
    $(document).ready(function(){
        $('.editbtn').on('click', function(){
            $('#editmodal').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function(){
                return $(this).text();
                
            }).get();

            console.log(data);

            $('#update_id').val(data[0]);
            $('#brand').val(data[1]);
            $('#machine_type').val(data[2]);
            $('#needle1').val(data[3]);
            $('#needle2').val(data[4]);
            $('#needle3').val(data[5]);
            $('#needle4').val(data[6]);
            $('#sinker').val(data[7]);

            $.notify("Enter: Bounce In from TopExit: Bounce Up and Out", {
	animate: {
		enter: 'animated bounceInDown',
		exit: 'animated bounceOutUp'
	}
});
        });


    });
</script>  
<!-- =================================================================================================================================================================================================================== -->

    </body>

</html>