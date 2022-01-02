@extends('template.index')
@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    {{-- <h1 class="m-0"></h1>--}}
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
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">Asisten Yang Dinilai</h2><br>
                            {{--{{route('polling.store')}}--}}
                            <form class="forms-sample" method="POST" action="{{ route('polling.store', ['asistensiId' => $asistensi->id]) }}">
                                @csrf
                                <div class="form-group row">
                                    <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Nim</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="npm" value="{{$asisten->npm}}" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Nama Asisten</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="asisten" id="asisten" placeholder="Nama Asisten" value="{{$asisten->nama_asisten}}" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="makul" class="col-sm-3 col-form-label">Matakuliah</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="matakuliah" id="makul" value="{{$matakuliah->nama_matakuliah}}" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="saran" class="col-sm-3 col-form-label">Saran dan Kritik</label>
                                    <div class="col-sm-9">
                                        <input type="text" id="saran" class="form-control" name="pesan" value="" required placeholder="Silahkan isi saran dan kritik">
                                    </div>
                                </div>

                                <br /><br />
                                @foreach($subcriterias as $subcriteria)
                                <input type="hidden" class="form-control" name="kdindikatora1" value="A1" readonly>
                                <div class="form-group">
                                    <label for="score[{{ $subcriteria->id }}]">{{$subcriteria->id.'. '.$subcriteria->poin_penilaian}}</label>
                                    @foreach($subcriteria->criteria->criteriarating as $rating)
                                    <div class="form-radio col-sm-3">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="score[{{ $subcriteria->id }}]" id="score[{{ $subcriteria->id }}]" value="{{ $rating->id }}" required>{{$rating->description}}</label>
                                    </div>
                                    @endforeach
                                </div>
                                @endforeach
                                <input type="submit" class="btn btn-success mr-2" value="Simpan">
                            </form>
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
