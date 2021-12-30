@extends('template.index')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Add new Matakuliah</h1>
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
                                <form action="{{route('matakuliahs.store')}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="prodi">Prodi :</label>
                                        <select class="form-control" id="prodi" name="prodi_id">
                                            @foreach ($prodis as $prodi)
                                                <option value="{{ $prodi->id }}">{{ $prodi->jenjang.' '.$prodi->nama_prodi }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="alias"> Alias:</label>
                                        <div class="input-group">
                                            <input id="alias" type="text" class="form-control" placeholder="e.g. SI037"
                                                   name="alias" maxlength="5" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Nama :</label>
                                        <div class="input-group">
                                            <input id="nama" type="text" class="form-control" placeholder="e.g. PEMROGRAMAN CLIENT SERVER"
                                                   name="nama_matakuliah" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="sks">Sks :</label>
                                        <div class="input-group">
                                            <input id="sks" type="number" class="form-control" placeholder="e.g. 2"
                                                   name="sks" required>
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

