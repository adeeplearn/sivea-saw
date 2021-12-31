@extends('template.index')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Evaluasi Asisten Akhir Semester</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">

                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
{{--                                <div class="card-title">--}}
{{--                                    <h4>EVAS (Evaluasi Asisten) Akhir Semester</h4>--}}
{{--                                    <p>Silahkan isi semua evaluasi dibawah ini</p>--}}
{{--                                </div>--}}
                                <div class="alert alert-secondary">
                                    <strong>Perhatian!</strong> <br/>
                                    <span style="font-size: x-small; ">
                                        Jika Status sudah
                                        <button type="button" class="btn btn-info"><i class="fa fa-check-circle"></i></button> klik tombol selesai
                                        <br/><br/>
                                        <form class="forms-sample" method="POST" action="#">
                                            <input type="hidden" name="evaluasi" value="angketakhir" readonly>
                                            <input type="submit" class="btn btn-success mr-2" value="Klik Selesai disini" disabled>
                                        </form>
                                    </span>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th style="width:10px;">Status </th>
                                            <th style="width:10px;">No</th>
                                            <th>Matakuliah</th>
                                            <th>Nim</th>
                                            <th>Nama Asisten </th>
                                        </tr>
                                        </thead>
                                        <tbody>


                                        <tr>
                                            <td class="py-1">
                                                <button type="submit" class="btn btn-info">
                                                    <i class="fa fa-check-circle"></i>
                                                </button>
                                            </td>
                                            <td>1</td>
                                            <td>Pemrogramman Client Server</td>
                                            <td>14.12.8270</td>
                                            <td>Defri Anshory</td>
                                        </tr>
                                        <tr>
                                            <td class="py-1">
                                                <button type="submit" class="btn btn-success mr-2">
                                                    Isi
                                                </button>
                                            </td>
                                            <td >2</td>
                                            <td>Pemrogramman Client Server</td>
                                            <td>14.12.8279</td>
                                            <td>Denni Ade Sutrisno</td>
                                        </tr>
                                        <tr>
                                            <td class="py-1">
                                                <button type="submit" class="btn btn-success mr-2">
                                                    Isi
                                                </button>
                                            </td>
                                            <td >3</td>
                                            <td>Pemrogramman Client Server</td>
                                            <td>14.12.8280</td>
                                            <td>Galang Adi Puranto</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
