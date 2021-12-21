@extends('template.index')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Tambah Program Studi</h1>
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
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form action="{{route('prodis.store')}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="kode">Kode :</label>
                                        <div class="input-group">
                                            <input id="kode" type="number" class="form-control" placeholder="e.g. 99"
                                                   name="kode" required >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Nama :</label>
                                        <div class="input-group">
                                            <input id="name" type="text" class="form-control" placeholder="e.g. Sistem Informasi"
                                                   name="nama_prodi" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="jenjang">Jenjang :</label>
                                        <div class="input-group">
                                            <input id="jenjang" type="text" class="form-control" placeholder="e.g. S1"
                                                   name="jenjang" required maxlength="2">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="alias">Alias :</label>
                                        <div class="input-group">
                                            <input id="alias" type="text" class="form-control" placeholder="e.g. S1SI"
                                                   name="alias" required>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                        <!-- /.card -->
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

