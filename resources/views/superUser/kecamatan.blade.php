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
    <title>viho - Premium Admin Template</title>
    <!-- Google font-->
    {{-- boostrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
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
    <link rel="stylesheet" type="text/css" href="/template/assets/css/datatables.css">
    <link rel="stylesheet" type="text/css" href="/template/assets/css/datatable-extension.css">
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
              <li class="onhover-dropdown">
                <div class="bookmark-box"><i data-feather="star"></i></div>
                <div class="bookmark-dropdown onhover-show-div">
                  <div class="form-group mb-0">
                    <div class="input-group">
                      <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-search"></i></span></div>
                      <input class="form-control" type="text" placeholder="Search for bookmark...">
                    </div>
                  </div>
                  <ul class="m-t-5">
                    <li class="add-to-bookmark"><i class="bookmark-icon" data-feather="inbox"></i>Email<span class="pull-right"><i data-feather="star"></i></span></li>
                    <li class="add-to-bookmark"><i class="bookmark-icon" data-feather="message-square"></i>Chat<span class="pull-right"><i data-feather="star"></i></span></li>
                    <li class="add-to-bookmark"><i class="bookmark-icon" data-feather="command"></i>Feather Icon<span class="pull-right"><i data-feather="star"></i></span></li>
                    <li class="add-to-bookmark"><i class="bookmark-icon" data-feather="airplay"></i>Widgets<span class="pull-right"><i data-feather="star">   </i></span></li>
                  </ul>
                </div>
              </li>
              <li class="onhover-dropdown">
                <div class="notification-box"><i data-feather="bell"></i><span class="dot-animated"></span></div>
                <ul class="notification-dropdown onhover-show-div">
                  <li>
                    <p class="f-w-700 mb-0">You have 3 Notifications<span class="pull-right badge badge-primary badge-pill">4</span></p>
                  </li>
                  <li class="noti-primary">
                    <div class="media"><span class="notification-bg bg-light-primary"><i data-feather="activity"> </i></span>
                      <div class="media-body">
                        <p>Delivery processing </p><span>10 minutes ago</span>
                      </div>
                    </div>
                  </li>
                  <li class="noti-secondary">
                    <div class="media"><span class="notification-bg bg-light-secondary"><i data-feather="check-circle"> </i></span>
                      <div class="media-body">
                        <p>Order Complete</p><span>1 hour ago</span>
                      </div>
                    </div>
                  </li>
                  <li class="noti-success">
                    <div class="media"><span class="notification-bg bg-light-success"><i data-feather="file-text"> </i></span>
                      <div class="media-body">
                        <p>Tickets Generated</p><span>3 hour ago</span>
                      </div>
                    </div>
                  </li>
                  <li class="noti-danger">
                    <div class="media"><span class="notification-bg bg-light-danger"><i data-feather="user-check"> </i></span>
                      <div class="media-body">
                        <p>Delivery Complete</p><span>6 hour ago</span>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li>
                <div class="mode"><i class="fa fa-moon-o"></i></div>
              </li>
              <li class="onhover-dropdown"><i data-feather="message-square"></i>
                <ul class="chat-dropdown onhover-show-div">
                  <li>
                    <div class="media"><img class="img-fluid rounded-circle me-3" src="/template/assets/images/user/4.jpg" alt="">
                      <div class="media-body"><span>Ain Chavez</span>
                        <p class="f-12 light-font">Lorem Ipsum is simply dummy...</p>
                      </div>
                      <p class="f-12">32 mins ago</p>
                    </div>
                  </li>
                  <li>
                    <div class="media"><img class="img-fluid rounded-circle me-3" src="/template/assets/images/user/1.jpg" alt="">
                      <div class="media-body"><span>Erica Hughes</span>
                        <p class="f-12 light-font">Lorem Ipsum is simply dummy...</p>
                      </div>
                      <p class="f-12">58 mins ago</p>
                    </div>
                  </li>
                  <li>
                    <div class="media"><img class="img-fluid rounded-circle me-3" src="/template/assets/images/user/2.jpg" alt="">
                      <div class="media-body"><span>Kori Thomas</span>
                        <p class="f-12 light-font">Lorem Ipsum is simply dummy...</p>
                      </div>
                      <p class="f-12">1 hr ago</p>
                    </div>
                  </li>
                  <li class="text-center"> <a class="f-w-700" href="javascript:void(0)">See All     </a></li>
                </ul>
              </li>
              <li class="onhover-dropdown p-0">
                <button class="btn btn-primary-light" type="button"><a href="login_two.html"><i data-feather="log-out"></i>Log out</a></button>
              </li>
            </ul>
          </div>
          <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
        </div>
      </div>
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper horizontal-menu">
        <!-- Page Sidebar Start-->
        <header class="main-nav">
          <div class="sidebar-user text-center"><a class="setting-primary" href="javascript:void(0)"><i data-feather="settings"></i></a><img class="img-90 rounded-circle" src="/template/assets/images/dashboard/1.png" alt="">
            <div class="badge-bottom"><span class="badge badge-primary">New</span></div><a href="user-profile.html">
              <h6 class="mt-3 f-14 f-w-600">Emay Walter</h6></a>
            <p class="mb-0 font-roboto">Human Resources Department</p>
            <ul>
              <li><span><span class="counter">19.8</span>k</span>
                <p>Follow</p>
              </li>
              <li><span>2 year</span>
                <p>Experince</p>
              </li>
              <li><span><span class="counter">95.2</span>k</span>
                <p>Follower </p>
              </li>
            </ul>
          </div>
         @include('layout.nav_admin')
        </header>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-sm-6">
                  <h3>Basic Button</h3>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item">Extension Data Tables</li>
                    <li class="breadcrumb-item active">Basic Button</li>
                  </ol>
                </div>
                <div class="col-sm-6">
                  <!-- Bookmark Start-->
                  <div class="bookmark">
                    <ul>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Tables"><i data-feather="inbox"></i></a></li>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Chat"><i data-feather="message-square"></i></a></li>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Icons"><i data-feather="command"></i></a></li>
                      <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Learning"><i data-feather="layers"></i></a></li>
                      <li><a href="javascript:void(0)"><i class="bookmark-search" data-feather="star"></i></a>
                        <form class="form-inline search-form">
                          <div class="form-group form-control-search">
                            <input type="text" placeholder="Search..">
                          </div>
                        </form>
                      </li>
                    </ul>
                  </div>
                  <!-- Bookmark Ends-->
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  
                  <div class="card-body btn-showcase">
                    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalmdo" data-whatever="@fat">tambah data</button>
                    <div class="modal fade" id="exampleModalfat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel2">New message</h5>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form>
                              <div class="mb-3">
                                <label class="col-form-label" for="recipient-name">kecamatan</label>
                                <input class="form-control" type="text" value="@fat">
                              </div>
                              <div class="mb-3">
                                <label class="col-form-label" for="message-text">Message:</label>
                                <textarea class="form-control" id="message-text"></textarea>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal fade" id="exampleModalmdo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">New message</h5>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          {{-- tempat mengedit --}}
                          <div class="modal-body">
                            <form action="{{ route('kecamatan.store') }}" method="post">
                              @csrf
                              <div class="mb-3">
                                <label class="col-form-label" for="kecamatan">kecamatan</label>
                                <input class="form-control" name="kecamatan" id="kecamatan" type="text">
                              </div>
                            </form>
                          </div>
                          <div class="modal-footer">
                            {{-- <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button> --}}
                            <button class="btn btn-primary" type="submit">Send message</button>
                          </div>
                          {{-- end --}}
                        </div>
                      </div>
                    </div>
                  <div class="card-body">
                    <div class="dt-ext table-responsive">
                      <table class="display" id="custom-button">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Kecamatan</th>
                            <th>Aksi</th>
                           
                          </tr>
                        </thead>
                        <tbody>
                          @php
                              $no=1;
                          @endphp
                          @foreach ($kecamatan as $kec)
                           <tr>
                             <td>{{ $no++ }}</td>
                             <td>{{ $kec->kecamatan }}</td>
                             <td> 
                             <div class="card-body btn-showcase">
                              <button class="btn btn-primary tombol-ubah" type="button" data-bs-toggle="modal" data-bs-target="#modal_ubah" data-whatever="@fat" data-id="{{ $kec->id_kecamatan }}">
                              <i style="color: white" class="bi bi-pencil-square"></i>

                              </button>
                              
                              </div>
                              
                             </td>
                             <td>
                              <form action="{{ route('kecamatan.destroy',$kec->id_kecamatan) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" style="background-color: red"><i class="bi bi-trash-fill" style="color: white"></i></button>
                                
                             </td>
                           </tr>
                              
                          @endforeach

                          <div class="modal fade" id="exampleModalmdo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title">New message</h5>
                                  <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                {{-- tempat mengedit --}}
                                <div class="modal-body">
                                  <form action="{{ route('kecamatan.update',$kec->id_kecamatan) }}" method="post">
                                    @csrf
                                    @method('put')
                                    <div class="mb-3">
                                      <label class="col-form-label" for="kecamatan">kecamatan</label>
                                      <input class="form-control" name="kecamatan" value="{{ $kec->kecamatan }}" id="kecamatan" type="text">
                                    </div>
                                  </form>
                                </div>
                                <div class="modal-footer">
                                  {{-- <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button> --}}
                                  <button class="btn btn-primary" type="submit">Send message</button>
                                </div>
                                {{-- end --}}
                              </div>
                            </div>
                          </div>

                          <div class="modal fade" id="modal_ubah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel2">New message</h5>
                                  <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <form action="{{ route('kecamatan.update',$kec->id_kecamatan) }}" method="post">
                                    @csrf
                                    @method('put')
                                    <input type="hidden" name="id_kec" id="id_kec">
                                    <div class="mb-3">
                                      <label class="col-form-label" for="nama_kecamatan">kecamatan</label>
                                      <input class="form-control" type="text" name="nama_kecamatan" id="nama_kecamatan" >
                                    </div>
                                    <button class="btn btn-info" type="submit">update</button>
                                  </form>
                                </div>
                              </div>
                            </div>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-12">
                
              </div>
              <div class="col-sm-12">
               
              </div>
              <div class="col-sm-12">
                
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
        
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
    <script src="/template/assets/js/tooltip-init.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="/template/assets/js/script.js"></script>
    <script src="/template/assets/js/theme-customizer/customizer.js"></script>
    <script>

      $(function() {
  
        $('.tombol-ubah').on('click', function() {
            const id = $(this).data('id')
            $('.form-ubah form').attr('action', '/kecamatan/update/' + id)
            // console.log(id);
  
            $.ajax({
                url: `/kecamatan/` + id + `/edit`,
                method: 'get',
                dataType: 'json',
                success: function(data) {
                    // console.log(data)
                    $('#id_kec').val(data.id_kecamatan)
                    $('#nama_kecamatan').val(data.kecamatan)
  
                }
            })
        })
    })
    </script>
    <!-- login js-->
    <!-- Plugin used-->
  </body>
</html>