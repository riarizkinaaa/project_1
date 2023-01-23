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
                                    <option>Dusun</option>
                                </select>
                            </label>
                            <div class="d-inline">
                                <button class="btn btn-sm btn-secondary" id="sort" type="button">Sort</button>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="dt-ext table-responsive">
                                        <table class="display" id="multilevel-btn">
                                            <thead>
                                                <tr>
                                                    <th>Nama Lengkap Anak</th>
                                                    <th>Tanggal Lahir</th>
                                                    <th>Usia</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>Status Anak</th>
                                                    <th>Dusun</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tiger Nixon</td>
                                                    <td>System Architect</td>
                                                    <td>Edinburgh</td>
                                                    <td>61</td>
                                                    <td>2011/04/25</td>
                                                    <td>$320,800</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection