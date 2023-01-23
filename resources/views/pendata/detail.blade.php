@extends("layout/template_pendata")
@section('content')

<!-- page-wrapper Start-->
<div class="page-wrapper" id="pageWrapper">
    <!-- Page Body Start-->
    <div class="page-body-wrapper horizontal-menu">
        <div class="page-body">
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3>Detail Data</h3>
                            <ol class="breadcrumb">
                                <!-- <li class="onhover-dropdown p-0">
                                    <button class="btn btn-primary btn-block"><a href="/data_anak"></a>Back</button>
                                </li> -->
                                <li class="breadcrumb-item"><a href="/data_anak">/Back</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="edit-profile">
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="card">
                                <!-- <div class="card-header pb-0">
                                        <h4 class="card-title mb-0">My Profile</h4>
                                        <div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a></div>
                                    </div> -->
                                <div class="card-body">
                                    <div class="row mb-2">
                                        <div class="profile-title">
                                            <div class="media"> <img class="img-70 rounded-circle" alt="" src="/template/assets/images/user/7.jpg">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <th scope="col">Nama Lengkap Anak</th>
                                        <th scope="col">Tanggal Lahir</th>
                                        <th scope="col">Usia</th>
                                        <th scope="col">Jenis Kelamin</th>
                                        <th scope="col">Status Anak</th>
                                        <th scope="col">Dusun</th> -->

                                    <div class="mb-3">
                                        <label class="form-label">Nama Lengkap Anak</label>
                                        <input class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Tanggal Lahir</label>
                                        <input class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Usia</label>
                                        <input class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Jenis Kelamin</label>
                                        <input class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Status</label>
                                        <input class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Dususn</label>
                                        <input class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <form class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Nama Wali</label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Pekerjaan Wali</label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Nomor KK</label>
                                                <input class="form-control" type="email">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Nomor NIK</label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Alamat</label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Pendidikan</label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">kelas Pendidikan</label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Prestasi Formal</label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Prestasi Non Formal</label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->
        </div>
    </div>
</div>
@endsection