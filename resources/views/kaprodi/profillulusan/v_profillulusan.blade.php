@extends('layout.v_template')

@section('title', 'Profil Lulusan Prodi Teknologi Rekayasa Perangkat')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <!-- <div class="box-header">
                <h3 class="box-title">Data Mata Kuliah</h3>
            </div> -->
            <div class="box-body ">
                <div class="card-body table-responsive p-0" style="height: responsive;">
                    <table id="dataTable" class="table table-striped table-body-fixed text-nowrap table-bordered table-hover">
                        <thead>
                            <tr>
                                <th width="30px">No</th>
                                <th>Profil Lulusan</th>
                                <th>Kualifikasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <tr>
                                <td>{{$no++}}</td>
                                <td>Internet
                                    Explorer 4.0
                                </td>
                                <td>Win 95+</td>
                            </tr>
                            <tr>
                                <td>{{$no++}}</td>
                                <td>Internet
                                    Explorer 5.0
                                </td>
                                <td>Win 95+</td>
                            </tr>
                            <tr>
                                <td>{{$no++}}</td>
                                <td>Internet
                                    Explorer 5.5
                                </td>
                                <td>Win 95+</td>
                            </tr>
                            <tr>
                                <td>{{$no++}}</td>
                                <td>Internet
                                    Explorer 5.5
                                </td>
                                <td>Win 95+</td>
                            </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection