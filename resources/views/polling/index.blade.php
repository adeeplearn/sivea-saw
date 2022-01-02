@extends('template.index')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"></h1>
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
                            <h4 class="card-title">EVAS (Evaluasi Asisten) Akhir Semester</h4><br>
                            <p class="card-text">Silakan pilih mata kuliah dibawah ini</p>
                            <div>
                                @foreach($mengajars as $mengajar)
                                <a class="btn btn-primary btn-sm" href="{{route('polling.asisten', ['mengajarId' => $mengajar->id])}}">{{$mengajar->matakuliah->nama_matakuliah}}</a>
                                @endforeach
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
