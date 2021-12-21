@extends('template.index')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Program Studi</h1>
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
                                @endif

                                <a href="{{route('prodis.create')}}" class='btn btn-primary'> <span
                                        class='fa fa-plus'></span> Add Prodi</a>
                                <br>
                                <table id="mytable" class="display nowrap table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Kode</th>
                                        <th>Prodi</th>
                                        <th>Jenjang</th>
                                        <th>Alias</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($prodis as $prodi)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $prodi->kode}}</td>
                                            <td>{{ $prodi->nama_prodi}}</td>
                                            <td>{{ $prodi->jenjang}}</td>
                                            <td>{{ $prodi->alias}}</td>
                                            <td>
                                                <form action="{{ route('prodis.destroy',$prodi->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <span data-toggle="tooltip" data-placement="bottom" title="Edit Data">
                                                    <a href="{{ route('prodis.edit',$prodi->id) }}"
                                                       class="btn btn-primary"><span class="fa fa-edit"></span>
                                                    </a>
                                                </span>
                                                    <span data-toggle="tooltip" data-placement="bottom" title="Delete Data">
                                                    <button type="submit" class="btn btn-danger">
                                                        <span class="fa fa-trash-alt"></span>
                                                    </button>
                                                </span>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
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

@section('script')
    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()

            $('#mytable').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });

    </script>
@endsection
