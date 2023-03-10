<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
  <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="pixelstrap">
  <link rel="icon" href="/template/assets/images/favicon.png" type="image/x-icon">
  <link rel="shortcut icon" href="/template/assets/images/favicon.png" type="image/x-icon">
  <title>PENDULI ANAK YATIM PIATU</title>
  <!-- Google font-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
  <!-- Font Awesome-->
  <link rel="stylesheet" type="text/css" href="/template/assets/css/fontawesome.css">
  <!-- ico-font-->
  <link rel="stylesheet" type="text/css" href="/template/assets/css/icofont.css">
  <!-- Themify icon-->
  <link rel="stylesheet" type="text/css" href="/template/assets/css/themify.css">
  <!-- Flag icon-->
  <link rel="stylesheet" type="text/css" href="/template/assets/css/flag-icon.css">
  <!-- Feather icon-->
  <link rel="stylesheet" type="text/css" href="/template/assets/css/feather-icon.css">
  <!-- Plugins css start-->
  <link rel="stylesheet" type="text/css" href="/template/assets/css/select2.css">
  <link rel="stylesheet" type="text/css" href="/template/assets/css/date-picker.css">
  <link rel="stylesheet" type="text/css" href="/template/assets/css/todo.css">
  <link rel="stylesheet" type="text/css" href="/template/assets/css/datatables.css">
  <link rel="stylesheet" type="text/css" href="/template/assets/css/datatable-extension.css">
  <link rel="stylesheet" type="text/css" href="/template/assets/css/jsgrid.css">
  <!-- Plugins css Ends-->
  <!-- Bootstrap css-->
  <link rel="stylesheet" type="text/css" href="/template/assets/css/bootstrap.css">
  <!-- App css-->
  <link rel="stylesheet" type="text/css" href="/template/assets/css/style.css">
  <link id="color" rel="stylesheet" href="/template/assets/css/color-1.css" media="screen">
  <!-- Responsive css-->
  <link rel="stylesheet" type="text/css" href="/template/assets/css/responsive.css">
</head>


<body>
  <!-- Loader starts-->
  <div class="loader-wrapper">
    <div class="theme-loader">
      <div class="loader-p"></div>
    </div>
  </div>
  <!-- Loader ends-->
  <!-- page-wrapper Start-->
  <div class="page-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    <div class="page-main-header">
      <div class="main-header-right row m-0">
        <div class="main-header-left">
          <div class="logo-wrapper"><a href="index.html"><img class="img-fluid" src="/template/assets/images/logo/logo.png" alt=""></a></div>
          <div class="dark-logo-wrapper"><a href="index.html"><img class="img-fluid" src="/template/assets/images/logo/dark-logo.png" alt=""></a></div>
          <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center" id="sidebar-toggle"></i></div>
        </div>
        <div class="left-menu-header col">
        </div>
        <div class="nav-right col pull-right right-menu p-0">
          <ul class="nav-menus">
            <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
            <li class="onhover-dropdown p-0">
              <button class="btn btn-primary-light" type="button"><a href="login_two.html"><i data-feather="log-out"></i>Log out</a></button>
            </li>
          </ul>
        </div>
        <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
      </div>
    </div>
    <!-- Page Header Ends  
                              -->
    <!-- Page Body Start-->
    <div class="page-body-wrapper horizontal-menu">
      <!-- Page Sidebar Start-->
      <header class="main-nav">
        <div class="sidebar-user text-center"><a class="setting-primary" href="javascript:void(0)"><i data-feather="settings"></i></a><img class="img-90 rounded-circle" src="/template/assets/images/dashboard/1.png" alt="">
          <div class="badge-bottom"><span class="badge badge-primary">New</span></div><a href="user-profile.html">
            <h6 class="mt-3 f-14 f-w-600">Emay Walter</h6>
          </a>
          <p class="mb-0 font-roboto">Human Resources Department</p>
        </div>
        @include('layout.nav_pendata')
      </header>

      @yield('content')



    </div>
  </div>
  <!-- latest jquery-->
  <script src="/template/assets/js/jquery-3.5.1.min.js"></script>
  <!-- feather icon js-->
  <script src="/template/assets/js/icons/feather-icon/feather.min.js"></script>
  <script src="/template/assets/js/icons/feather-icon/feather-icon.js"></script>
  <!-- Sidebar jquery-->
  <script src="/template/assets/js/sidebar-menu.js"></script>
  <script src="/template/assets/js/config.js"></script>
  <!-- Bootstrap js-->
  <script src="/template/assets/js/bootstrap/popper.min.js"></script>
  <script src="/template/assets/js/bootstrap/bootstrap.min.js"></script>
  <!-- Plugins JS start-->
  <script src="/template
  /assets/js/todo/todo.js"></script>
  <script src="/template/assets/js/datepicker/date-picker/datepicker.js"></script>
  <script src="/template/assets/js/datepicker/date-picker/datepicker.en.js"></script>
  <script src="/template/assets/js/datepicker/date-picker/datepicker.custom.js"></script>
  <script src="/template/assets/js/select2/select2.full.min.js"></script>
  <script src="/template/assets/js/select2/select2-custom.js"></script>
  <script src="/template/assets/js/form-validation-custom.js"></script>
  <script src="/template/assets/js/task/custom.js"></script>
  <script src="/template/assets/js/datatable/datatables/datatable.custom.js"></script>
  <script src="/template/assets/js/tooltip-init.js"></script>
  <script src="/template/assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
  <script src="/template/assets/js/datatable/datatable-extension/dataTables.buttons.min.js"></script>
  <script src="/template/assets/js/datatable/datatable-extension/jszip.min.js"></script>
  <script src="/template/assets/js/datatable/datatable-extension/buttons.colVis.min.js"></script>
  <script src="/template/assets/js/datatable/datatable-extension/pdfmake.min.js"></script>
  <script src="/template/assets/js/datatable/datatable-extension/vfs_fonts.js"></script>
  <script src="/template/assets/js/datatable/datatable-extension/dataTables.autoFill.min.js"></script>
  <script src="/template/assets/js/datatable/datatable-extension/dataTables.select.min.js"></script>
  <script src="/template/assets/js/datatable/datatable-extension/buttons.bootstrap4.min.js"></script>
  <script src="/template/assets/js/datatable/datatable-extension/buttons.html5.min.js"></script>
  <script src="/template/assets/js/datatable/datatable-extension/buttons.print.min.js"></script>
  <script src="/template/assets/js/datatable/datatable-extension/dataTables.bootstrap4.min.js"></script>
  <script src="/template/assets/js/datatable/datatable-extension/dataTables.responsive.min.js"></script>
  <script src="/template/assets/js/datatable/datatable-extension/responsive.bootstrap4.min.js"></script>
  <script src="/template/assets/js/datatable/datatable-extension/dataTables.keyTable.min.js"></script>
  <script src="/template/assets/js/datatable/datatable-extension/dataTables.colReorder.min.js"></script>
  <script src="/template/assets/js/datatable/datatable-extension/dataTables.fixedHeader.min.js"></script>
  <script src="/template/assets/js/datatable/datatable-extension/dataTables.rowReorder.min.js"></script>
  <script src="/template/assets/js/datatable/datatable-extension/dataTables.scroller.min.js"></script>
  <script src="/template/assets/js/datatable/datatable-extension/custom.js"></script>
  <script src="/template/assets/js/jsgrid/jsgrid.min.js"></script>
  <script src="/template/assets/js/jsgrid/griddata.js"></script>
  <script src="/template/assets/js/jsgrid/jsgrid.js"></script>
  <!-- Plugins JS Ends-->
  <!-- Theme js-->
  <script src="/template/assets/js/script.js"></script>
  <script src="/template/assets/js/theme-customizer/customizer.js"></script>
  <!-- login js-->
  <!-- Plugin used-->
</body>

</html>