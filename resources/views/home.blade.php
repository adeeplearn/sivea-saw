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
                <div class="col-lg-12">
                    <div class="card">
                        <h3 class="card-title p-4"> Selamat Datang di SIVEA Forum Asisten Universitas Amikom Yogyakarta</h3>
                        <div class="card-body">
                            <div class="alert alert-info">
                                <strong>Apakah SIVEA ? </strong> <br>
                                <p>
                                    Sistem Evaluasi Asisten, instrumen untuk menilai kinerja asisten dalam proses pembelajaran di akhir semester.

                                </p>
                            </div>
                            <div class="alert alert-success">
                                <strong>Apakah SIVEA Tetap Anonim ?</strong> <br>
                                <p>
                                    Tentu saja, Kerahasiaan identitas penilai kami jaga. Oleh karena itu berikan penilaian yang sejujurnya.
                                </p>

                            </div>
                            <div class="alert alert-danger">
                                <strong>Mengapa Mengisi SIVEA ?</strong> <br>
                                <p>
                                    Dengan mengisi SIVEA berarti Bapak dan Ibu Dosen telah berpartisipasi untuk membantu meningkatkan mutu asistensi.
                                    SIVEA bermanfaat bagi asisten untuk memperbaiki diri bila memang masih terdapat kekurangan serta mengembangkan potensi dan kelebihan yang dimilikinya.
                                </p>
                                <div>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- /.content -->
            </div>
        </div>
    </div>
</div>
<!-- /.content-wrapper -->
@endsection
