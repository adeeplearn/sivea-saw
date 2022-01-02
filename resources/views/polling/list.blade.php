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
                            @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ $message }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @elseif($message = Session::get('failed'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ $message }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif
                            <h4 class="card-title">EVAS (Evaluasi Asisten) Akhir Semester</h4>
                            <p class="card-text">Silahkan isi semua evaluasi dibawah ini</p>
                            <div class="alert alert-secondary">
                                <strong>Perhatian!</strong> <br />
                                <span style="font-size: x-small; ">
                                    Jika Status sudah
                                    <button type="button" class="btn btn-info"><i class="fa fa-check-circle"></i></button> klik tombol selesai
                                    <br /><br />
                                    <form class="forms-sample" method="POST" action="#">
                                        <input type="hidden" name="evaluasi" value="angketakhir" readonly>
                                        <input type="submit" class="btn btn-success mr-2" value="Klik Selesai disini" @if(!$done_all) disabled @endif>
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
                                        @foreach($asistensis as $asistensi)
                                        <tr>
                                            <td class="py-1">
                                                <!-- <a class="btn btn-info" href="{{ route('polling.isi', ['asistensiId' => $asistensi->id]) }}">
                                                    <i class="fa fa-check-circle"></i>
                                                </a> -->
                                                @if($asistensi->alternative_scores->isNotEmpty())
                                                <button type="button" class="btn btn-info"><i class="fa fa-check-circle"></i></button>
                                                @else
                                                <a class="btn btn-success" href="{{ route('polling.isi', ['asistensiId' => $asistensi->id]) }}">
                                                    <span>Isi</span>
                                                </a>
                                                @endif
                                            </td>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $matakuliah->nama_matakuliah }}</td>
                                            <td>{{ $asistensi->asisten->npm }}</td>
                                            <td>{{ $asistensi->asisten->nama_asisten }}</td>
                                        </tr>
                                        @endforeach
                                        <!-- <tr>
                                            <td class="py-1">
                                                <button type="submit" class="btn btn-success mr-2" onclick ="location.href='https://sidomba.umpp.ac.id/angket/isi/32bd9f8bdf3b79f7544f574cd42e77e4'">
                                                    Isi
                                                </button>
                                            </td>
                                            <td >2</td>
                                            <td>Pemrogramman Client Server</td>
                                            <td>14.12.8280</td>
                                            <td>Galang Adi Puranto</td>
                                        </tr>
                                        <tr>
                                            <td class="py-1">
                                                <button type="submit" class="btn btn-success mr-2" onclick ="location.href='https://sidomba.umpp.ac.id/angket/isi/32bd9f8bdf3b79f7544f574cd42e77e4'">
                                                    Isi
                                                </button>
                                            </td>
                                            <td >3</td>
                                            <td>Pemrogramman Client Server</td>
                                            <td>14.12.8279</td>
                                            <td>Denni Ade Sutrisno</td>
                                        </tr> -->
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
