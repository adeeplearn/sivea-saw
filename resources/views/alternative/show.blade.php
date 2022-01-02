@extends('template.index')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Calculate Alternatives Score</h1>
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
              <h3>{{ $matakuliah->nama_matakuliah }}</h3>
              <nav>
                <div class="nav nav-tabs" role="tablist">
                  <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-step1" role="tab">Langkah 1</a>
                  <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-step2" role="tab">Langkah 2</a>
                  <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-step3" role="tab">Langkah 3</a>
                  <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-step4" role="tab">Langkah 4</a>
                  <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-step5" role="tab">Langkah 5</a>
                </div>
              </nav>
              <br />
              <div class="tab-content">
                <div class="tab-pane fade show active" id="nav-step1" role="tabpanel">
                  <table id="mytable" class="display nowrap table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th rowspan="2">#</th>
                        <th rowspan="2">Name</th>
                        @foreach ($criterias as $criteria)
                        <th colspan="{{ $criteria->subcriteria->count() }}">{{ $criteria->name }}</th>
                        @endforeach
                      </tr>
                      <tr>
                        @foreach ($criterias as $criteria)
                        @foreach ($criteria->subcriteria as $subcriteria)
                        <th>N{{ $loop->parent->iteration }}{{ $loop->iteration }}</th>
                        @endforeach
                        @endforeach
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($asistens as $asisten)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $asisten->nama_asisten }}</td>
                        @foreach ($criterias as $criteria)
                        @foreach ($criteria->subcriteria as $subcriteria)
                        <td>{{ $step1[$asisten->id][$criteria->id][$subcriteria->id] }}</td>
                        @endforeach
                        @endforeach
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <div class="tab-pane fade" id="nav-step2" role="tabpanel">
                  <table id="mytable" class="display nowrap table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Name</th>
                        @foreach ($criterias as $criteria)
                        <th>{{ $criteria->name }}</th>
                        @endforeach
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($asistens as $asisten)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $asisten->nama_asisten }}</td>
                        @foreach ($criterias as $criteria)
                        <td>{{ $step2[$asisten->id][$criteria->id] }}</td>
                        @endforeach
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <div class="tab-pane fade" id="nav-step3" role="tabpanel">
                  <table id="mytable" class="display nowrap table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Name</th>
                        @foreach ($criterias as $criteria)
                        <th>{{ $criteria->name }}</th>
                        @endforeach
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($asistens as $asisten)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $asisten->nama_asisten }}</td>
                        @foreach ($criterias as $criteria)
                        <td>{{ round($step3[$asisten->id][$criteria->id], 3) }}</td>
                        @endforeach
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <div class="tab-pane fade" id="nav-step4" role="tabpanel">
                  <table id="mytable" class="display nowrap table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Name</th>
                        @foreach ($criterias as $criteria)
                        <th>{{ $criteria->name }}</th>
                        @endforeach
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($asistens as $asisten)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $asisten->nama_asisten }}</td>
                        @foreach ($criterias as $criteria)
                        <td>{{ round($step4[$asisten->id][$criteria->id],3) }}</td>
                        @endforeach
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <div class="tab-pane fade" id="nav-step5" role="tabpanel">
                  <table id="mytable" class="display nowrap table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Nilai Preferensi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($step5 as $asisten_id => $score)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $asistens[$asisten_id]->nama_asisten }}</td>
                        <td>{{ round($score,3) }}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
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
  $(function() {
    $('[data-toggle="tooltip"]').tooltip()

    // $('#mytable').DataTable({
    //     "paging": true,
    //     "lengthChange": false,
    //     "searching": false,
    //     "ordering": true,
    //     "info": true,
    //     "autoWidth": false,
    //     "responsive": true,
    // });
  });
</script>
@endsection
