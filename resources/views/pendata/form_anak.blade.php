@extends("layout.template_pendata")
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
                        <form action="{{ route('dataY.store') }}">
                            <div class="card-body">

                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="nama_lengkap">nama lengkap</label>
                                            <input class="form-control form-control-lg" id="nama_lengkap" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="nomor_kk">No kk</label>
                                            <input class="form-control form-control-lg" name="nomor_kk" id="nomor_kk" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="nomor_nik">Nomor NIK</label>
                                            <input class="form-control form-control-lg" id="nomor_nik" type="text">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="alamat">Alamat</label>
                                            <input class="form-control form-control-lg" name="alamat" id="alamat" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="jenis_kelamin">Jenis Kelamin</label>
                                            <select class="form-select form-control-lg digits" id="jenis_kelamin">
                                                <option>Pilih Jenis Kelamin</option>
                                                <option>Perempuan</option>
                                                <option>Laiki-Laki</option>
                                            </select>
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="tempat_lahir">Tempat Lahir</label>
                                            <input class="form-control form-control-lg" name="tempat_lahir" id="tempat_lahir" type="text">
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="tgl_lahir">Tanggal Lahir</label>
                                            <input class="form-control form-control-lg" name="tgl_lahir" id="tgl_lahir" type="date">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="alamat_sekolah">Alamat Sekolah</label>
                                            <input class="form-control form-control-lg" name="alamat_sekolah" id="alamat_sekolah" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="status_anak">Status Anak</label>
                                            <select class="form-select form-control-lg digits" name="status_anak" id="status_anak">
                                                <option>Pilih Status Anak</option>
                                                <option>Yatim</option>
                                                <option>Piatu</option>
                                                <option>Yatim-Piatu</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3 row">
                                            <label class="form-label" for="foto_anak">Foto Anak</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" name="foto_anak" type="file">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-end">
                                    <button class="btn btn-primary" type="submit">save</button>
                                    {{-- <input class="btn btn-light" type="reset" value="Cancel"> --}}
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