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
                                            <label class="form-label" for="exampleFormControlSelect29">Dusun</label>
                                            <select class="form-select form-control-lg digits" id="exampleFormControlSelect29">
                                                <option>Pilih Dusun</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer text-end">
                                    <button class="btn btn-primary"><a href="/data_anak"></a>Simpan</button>
                                    <input class="btn btn-light" type="reset" value="Cancel">
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