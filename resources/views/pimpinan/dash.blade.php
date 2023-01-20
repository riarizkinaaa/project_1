@extends('layout.pimpinan')
@section('content')
    
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
            <ul>
              <li>
                <form class="form-inline search-form">
                  <div class="search-bg"><i class="fa fa-search"></i>
                    <input class="form-control-plaintext" placeholder="Search here.....">
                  </div>
                </form><span class="d-sm-none mobile-search search-bg"><i class="fa fa-search"></i></span>
              </li>
            </ul>
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
      <!-- Page Header Ends-->
      <!-- Page Body Start-->
      <div class="page-body-wrapper horizontal-menu">
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-sm-6">
                  <h3>Apex Chart</h3>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Charts</li>
                    <li class="breadcrumb-item active">Apex Chart</li>
                  </ol>
                </div>
                <div class="col-sm-6">
                  <!-- Bookmark Start-->
                  <div class="bookmark">
                    
                  </div>
                  <!-- Bookmark Ends-->
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12 col-xl-6 box-col-6">
                <div class="card">
                  <div class="card-header pb-0">
                    <h5>Basic Area Chart </h5>
                  </div>
                  <div class="card-body">
                    <div id="basic-apex"></div>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-xl-6 box-col-6">
                <div class="card">
                  <div class="card-header pb-0">
                    <h5>Area Spaline Chart </h5>
                  </div>
                  <div class="card-body">
                    <div id="area-spaline"></div>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-xl-6 box-col-6">
                <div class="card">
                  <div class="card-header pb-0">
                    <h5>Bar chart</h5>
                  </div>
                  <div class="card-body">
                    <div id="basic-bar"></div>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-xl-6 box-col-6">
                <div class="card">
                  <div class="card-header pb-0">
                    <h5>Column Chart </h5>
                  </div>
                  <div class="card-body">
                    <div id="column-chart"></div>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-xl-6 box-col-12">
                <div class="card">
                  <div class="card-header pb-0">
                    <h5>
                       3d Bubble Chart </h5>
                  </div>
                  <div class="card-body">
                    <div id="chart-bubble"></div>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-xl-6 box-col-12">
                <div class="card">
                  <div class="card-header pb-0">
                    <h5>Candlestick Chart </h5>
                  </div>
                  <div class="card-body">
                    <div id="candlestick"></div>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-xl-6 box-col-6">
                <div class="card">
                  <div class="card-header pb-0">
                    <h5>Stepline Chart </h5>
                  </div>
                  <div class="card-body">
                    <div id="stepline"></div>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-xl-6 box-col-6">
                <div class="card">
                  <div class="card-header pb-0">
                    <h5>Column Chart</h5>
                  </div>
                  <div class="card-body">
                    <div id="annotationchart"></div>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-xl-6 box-col-6">
                <div class="card">
                  <div class="card-header pb-0">
                    <h5>Pie Chart </h5>
                  </div>
                  <div class="card-body apex-chart">
                    <div id="piechart"></div>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-xl-6 box-col-6">
                <div class="card">
                  <div class="card-header pb-0">
                    <h5>Donut Chart</h5>
                  </div>
                  <div class="card-body apex-chart">
                    <div id="donutchart"></div>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-xl-12 box-col-12">
                <div class="card">
                  <div class="card-header pb-0">
                    <h5>Mixed Chart</h5>
                  </div>
                  <div class="card-body">
                    <div id="mixedchart"></div>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-xl-6 box-col-6">
                <div class="card">
                  <div class="card-header pb-0">
                    <h5>Radar Chart </h5>
                  </div>
                  <div class="card-body">
                    <div id="radarchart"></div>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-xl-6 box-col-6">
                <div class="card">
                  <div class="card-header pb-0">
                    <h5>Radial Bar Chart</h5>
                  </div>
                  <div class="card-body">
                    <div id="circlechart"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        
      </div>
    </div>
@endsection

