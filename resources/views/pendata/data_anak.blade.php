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
                            <h3>Data Anak Yatim Piatu</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="sort-panel mb-3">
                            <label>Sorting Field:
                                <select class="btn btn-primary dropdown-toggle btn-sm" id="sortingField">
                                    <option>Nama</option>
                                    <option>Usia</option>
                                    <option>Jenis Kelamin</option>
                                    <option>Status Anak</option>
                                    <option>Dusun</option>
                                </select>
                            </label>
                            <div class="d-inline">
                                <button class="btn btn-sm btn-secondary" id="sort" type="button">Sort</button>
                            </div>
                        </div>
                        <!-- Container-fluid starts-->
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">No</th>
                                                        <th scope="col">Nama Lengkap Anak</th>
                                                        <th scope="col">Tanggal Lahir</th>
                                                        <th scope="col">Usia</th>
                                                        <th scope="col">Jenis Kelamin</th>
                                                        <th scope="col">Status Anak</th>
                                                        <th scope="col">Dusun</th>
                                                        <th scope="col">#</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>Tiger Nixon</td>
                                                        <td>System Architect</td>
                                                        <td>Edinburgh</td>
                                                        <td>61</td>
                                                        <td>2011/04/25</td>
                                                        <td>$320,800</td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Container-fluid Ends-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection