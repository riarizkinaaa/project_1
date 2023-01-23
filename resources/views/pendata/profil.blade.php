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
                            <h3>Profil</h3>
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
                                <div class="card-body">

                                    <div class="row mb-2">
                                        <div class="profile-title">
                                            <div class="media"> <img class="img-70 rounded-circle" alt="" src="/template/assets/images/user/7.jpg">
                                                <div class="media-body">
                                                    <h3 class="mb-1 f-20 txt-primary">MARK JECNO</h3>
                                                    <p class="f-12">DESIGNER</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <form class="card">
                                <div class="card-header pb-0">
                                    <h4 class="card-title mb-0">Profil Saya</h4>
                                    <div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a></div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Nama lengkap</label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Email</label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Alamat</label>
                                                <input class="form-control" type="email">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Nomor Telepon</label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Status</label>
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