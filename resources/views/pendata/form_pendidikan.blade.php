@extends("layout/template_pendata")
@section('content')



<!-- Page Body Start-->
<div class="page-body-wrapper horizontal-menu">
    <div class="page-body">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3>Formulir Pendataan</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <form class="form theme-form">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="colFormLabelSm26">Pendidikan Anak</label>
                                            <input class="form-control form-control-lg" id="colFormLabelSm26" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="colFormLabelSm26">Kelas Pendidikan Anak</label>
                                            <input class="form-control form-control-lg" id="colFormLabelSm26" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="colFormLabelSm26">Prestasi Formal</label>
                                            <input class="form-control form-control-lg" id="colFormLabelSm26" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="colFormLabelSm26">Prestasi Non Formal</label>
                                            <input class="form-control form-control-lg" id="colFormLabelSm26" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-end">
                                    <button class="btn btn-primary"><a href="/dusun"></a>Next</button>
                                    <input class="btn btn-light" type="reset" value="Cancel">
                                </div>
                                <!-- <div class="card-footer text-end">
                                        <button class="btn btn-primary">simpan</a></button>
                                        <input class="btn btn-light" type="reset" value="Cancel">
                                    </div> -->
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