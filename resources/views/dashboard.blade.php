@extends('template.index')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
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
                <div class="col-lg-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h2 class="text-center my-2"> Total Matakuliah</h2>
                            <h1 class="text-center">{{$matakuliahs->count()}}</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h2 class="text-center my-2">Total Kriteria</h2>
                            <h1 class="text-center">{{$criterias->count()}}</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h2 class="text-center my-2">Total Sub Kriteria</h2>
                            <h1 class="text-center">{{$subcriterias->count()}}</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title"> Keterangan Kriteria : </h2><br /><br />
                            <ol>
                                @foreach($criterias as $criteria)
                                <li>{{$criteria->name}}</li>
                                <p>{{$criteria->description}}</p>
                                @endforeach
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
