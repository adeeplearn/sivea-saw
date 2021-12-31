@extends('template.index')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
{{--                        <h1 class="m-0">Add new criteria</h1>--}}
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
                                <form class="forms-sample" method="POST" action="#">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Nim</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="nim" value="14.12.8270" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Nama Asisten</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="nama_asisten" id="asisten" placeholder="Nama Asisten" value="Defri Anshory" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="makul" class="col-sm-3 col-form-label">Matakuliah</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="nama_matakuliah" id="makul" value="Pemrograman Client Server" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="saran" class="col-sm-3 col-form-label">Saran dan Kritik</label>
                                        <div class="col-sm-9">
                                            <input type="text" id="saran" class="form-control" name="pesan" value="" required placeholder="Silahkan isi saran dan kritik">
                                        </div>
                                    </div>

                                    <br/><br/>
                                    <input type="hidden" class="form-control" name="kdindikatora1" value="A1" readonly>
                                    <div class="form-group">
                                        <label for="exampleInputName1">1. Kemampuan Menjelaskan Pokok Bahasan/ Topic Secara Tepat </label>
                                        <label for="exampleInputEmail2" class="col-sm-1 col-form-label"></label>
                                        <div class="form-radio col-sm-3">
                                            <label class="form-check-label">
                                                <input type="radio"  class="form-check-input" name="radioa1" id="optionsRadios1" value="1" required> Tidak Baik                            </label>
                                        </div>
                                        <div class="form-radio col-sm-3">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radioa1" id="optionsRadios1" value="2" required> Kurang Baik                            </label>
                                        </div>
                                        <div class="form-radio col-sm-3">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radioa1" id="optionsRadios1" value="3" required> Cukup Baik
                                            </label>
                                        </div>
                                        <div class="form-radio col-sm-3">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radioa1" id="optionsRadios1" value="4" required> Agak Baik
                                            </label>
                                        </div>

                                        <div class="form-radio col-sm-3">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radioa1" id="optionsRadios1" value="5" required> Baik
                                            </label>
                                        </div>

                                        <div class="form-radio col-sm-3">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radioa1" id="optionsRadios1" value="6" required> Sangat baik
                                            </label>
                                        </div>

                                        <div class="form-radio col-sm-3">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radioa1" id="optionsRadios1" value="7" required> Memuaskan
                                            </label>
                                        </div>


                                    </div>
                                    <input type="hidden" class="form-control" name="kdindikatora2" value="A2" readonly>
                                    <div class="form-group">
                                        <label for="exampleInputName1">2. Kemampuan Memberi Contoh Yang Relevan Dan Menjawab Pertanyaan Mahasiswa </label>

                                        <label for="exampleInputEmail2" class="col-sm-1 col-form-label"></label>
                                        <div class="form-radio col-sm-3">
                                            <label class="form-check-label">
                                                <input type="radio"  class="form-check-input" name="radioa2" id="optionsRadios1" value="1" required> Tidak Baik                            </label>
                                        </div>
                                        <div class="form-radio col-sm-3">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radioa2" id="optionsRadios1" value="2" required> Kurang Baik                            </label>
                                        </div>
                                        <div class="form-radio col-sm-3">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radioa2" id="optionsRadios1" value="3" required> Cukup Baik
                                            </label>
                                        </div>
                                        <div class="form-radio col-sm-3">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radioa2" id="optionsRadios1" value="4" required> Agak Baik
                                            </label>
                                        </div>

                                        <div class="form-radio col-sm-3">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radioa2" id="optionsRadios1" value="5" required> Baik
                                            </label>
                                        </div>

                                        <div class="form-radio col-sm-3">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radioa2" id="optionsRadios1" value="6" required> Sangat baik
                                            </label>
                                        </div>

                                        <div class="form-radio col-sm-3">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radioa2" id="optionsRadios1" value="7" required> Memuaskan
                                            </label>
                                        </div>


                                    </div>
                                    <input type="hidden" class="form-control" name="kdindikatora3" value="A3" readonly>
                                    <div class="form-group">
                                        <label for="exampleInputName1">3. Penguasaan Akan Isu-isu Mutakhir Dalam Bidang Yang Diajarkan </label>

                                        <label for="exampleInputEmail2" class="col-sm-1 col-form-label"></label>
                                        <div class="form-radio col-sm-3">
                                            <label class="form-check-label">
                                                <input type="radio"  class="form-check-input" name="radioa3" id="optionsRadios1" value="1" required> Tidak Baik                            </label>
                                        </div>
                                        <div class="form-radio col-sm-3">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radioa3" id="optionsRadios1" value="2" required> Kurang Baik                            </label>
                                        </div>
                                        <div class="form-radio col-sm-3">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radioa3" id="optionsRadios1" value="3" required> Cukup Baik
                                            </label>
                                        </div>
                                        <div class="form-radio col-sm-3">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radioa3" id="optionsRadios1" value="4" required> Agak Baik
                                            </label>
                                        </div>

                                        <div class="form-radio col-sm-3">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radioa3" id="optionsRadios1" value="5" required> Baik
                                            </label>
                                        </div>

                                        <div class="form-radio col-sm-3">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radioa3" id="optionsRadios1" value="6" required> Sangat baik
                                            </label>
                                        </div>

                                        <div class="form-radio col-sm-3">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radioa3" id="optionsRadios1" value="7" required> Memuaskan
                                            </label>
                                        </div>


                                    </div>
                                    <input type="hidden" class="form-control" name="kdindikatora4" value="A4" readonly>
                                    <div class="form-group">
                                        <label for="exampleInputName1">4. Mengunakan Hasil-hasil Penelitian Untuk Meningkatkan Kualitas Perkuliahan </label>

                                        <label for="exampleInputEmail2" class="col-sm-1 col-form-label"></label>
                                        <div class="form-radio col-sm-3">
                                            <label class="form-check-label">
                                                <input type="radio"  class="form-check-input" name="radioa4" id="optionsRadios1" value="1" required> Tidak Baik                            </label>
                                        </div>
                                        <div class="form-radio col-sm-3">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radioa4" id="optionsRadios1" value="2" required> Kurang Baik                            </label>
                                        </div>
                                        <div class="form-radio col-sm-3">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radioa4" id="optionsRadios1" value="3" required> Cukup Baik
                                            </label>
                                        </div>
                                        <div class="form-radio col-sm-3">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radioa4" id="optionsRadios1" value="4" required> Agak Baik
                                            </label>
                                        </div>

                                        <div class="form-radio col-sm-3">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radioa4" id="optionsRadios1" value="5" required> Baik
                                            </label>
                                        </div>

                                        <div class="form-radio col-sm-3">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radioa4" id="optionsRadios1" value="6" required> Sangat baik
                                            </label>
                                        </div>

                                        <div class="form-radio col-sm-3">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radioa4" id="optionsRadios1" value="7" required> Memuaskan
                                            </label>
                                        </div>


                                    </div>
                                    <input type="hidden" class="form-control" name="kdindikatora5" value="A5" readonly>
                                    <div class="form-group">
                                        <label for="exampleInputName1">5. Keragaman Cara Pengukuran Hasil Belajar </label>

                                        <label for="exampleInputEmail2" class="col-sm-1 col-form-label"></label>
                                        <div class="form-radio col-sm-3">
                                            <label class="form-check-label">
                                                <input type="radio"  class="form-check-input" name="radioa5" id="optionsRadios1" value="1" required> Tidak Baik                            </label>
                                        </div>
                                        <div class="form-radio col-sm-3">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radioa5" id="optionsRadios1" value="2" required> Kurang Baik                            </label>
                                        </div>
                                        <div class="form-radio col-sm-3">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radioa5" id="optionsRadios1" value="3" required> Cukup Baik
                                            </label>
                                        </div>
                                        <div class="form-radio col-sm-3">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radioa5" id="optionsRadios1" value="4" required> Agak Baik
                                            </label>
                                        </div>

                                        <div class="form-radio col-sm-3">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radioa5" id="optionsRadios1" value="5" required> Baik
                                            </label>
                                        </div>

                                        <div class="form-radio col-sm-3">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radioa5" id="optionsRadios1" value="6" required> Sangat baik
                                            </label>
                                        </div>

                                        <div class="form-radio col-sm-3">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radioa5" id="optionsRadios1" value="7" required> Memuaskan
                                            </label>
                                        </div>


                                    </div>
                                    <input type="hidden" class="form-control" name="kdindikatora6" value="A6" readonly>
                                    <div class="form-group">
                                        <label for="exampleInputName1">6. Kemampuan Menghidupkan Suasana Kelas </label>

                                        <label for="exampleInputEmail2" class="col-sm-1 col-form-label"></label>
                                        <div class="form-radio col-sm-3">
                                            <label class="form-check-label">
                                                <input type="radio"  class="form-check-input" name="radioa6" id="optionsRadios1" value="1" required> Tidak Baik                            </label>
                                        </div>
                                        <div class="form-radio col-sm-3">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radioa6" id="optionsRadios1" value="2" required> Kurang Baik                            </label>
                                        </div>
                                        <div class="form-radio col-sm-3">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radioa6" id="optionsRadios1" value="3" required> Cukup Baik
                                            </label>
                                        </div>
                                        <div class="form-radio col-sm-3">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radioa6" id="optionsRadios1" value="4" required> Agak Baik
                                            </label>
                                        </div>

                                        <div class="form-radio col-sm-3">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radioa6" id="optionsRadios1" value="5" required> Baik
                                            </label>
                                        </div>

                                        <div class="form-radio col-sm-3">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radioa6" id="optionsRadios1" value="6" required> Sangat baik
                                            </label>
                                        </div>

                                        <div class="form-radio col-sm-3">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radioa6" id="optionsRadios1" value="7" required> Memuaskan
                                            </label>
                                        </div>


                                    </div>
                                    <input type="hidden" class="form-control" name="kdindikatora7" value="A7" readonly>
                                    <div class="form-group">
                                        <label for="exampleInputName1">7. Mampu Menjadi Panutan Mahasiswa Termasuk Menjadi Suri Tauladan Dalam Melaksanakan Pembelajaran Sesuai Dengan Al-islam Kemuhammadiyahan </label>

                                        <label for="exampleInputEmail2" class="col-sm-1 col-form-label"></label>
                                        <div class="form-radio col-sm-3">
                                            <label class="form-check-label">
                                                <input type="radio"  class="form-check-input" name="radioa7" id="optionsRadios1" value="1" required> Tidak Baik                            </label>
                                        </div>
                                        <div class="form-radio col-sm-3">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radioa7" id="optionsRadios1" value="2" required> Kurang Baik                            </label>
                                        </div>
                                        <div class="form-radio col-sm-3">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radioa7" id="optionsRadios1" value="3" required> Cukup Baik
                                            </label>
                                        </div>
                                        <div class="form-radio col-sm-3">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radioa7" id="optionsRadios1" value="4" required> Agak Baik
                                            </label>
                                        </div>

                                        <div class="form-radio col-sm-3">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radioa7" id="optionsRadios1" value="5" required> Baik
                                            </label>
                                        </div>

                                        <div class="form-radio col-sm-3">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radioa7" id="optionsRadios1" value="6" required> Sangat baik
                                            </label>
                                        </div>

                                        <div class="form-radio col-sm-3">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radioa7" id="optionsRadios1" value="7" required> Memuaskan
                                            </label>
                                        </div>


                                    </div>
                                    <input type="hidden" class="form-control" name="kdindikatora8" value="A8" readonly>
                                    <div class="form-group">
                                        <label for="exampleInputName1">8. Keteraturan Dan Ketertiban Jadwal Perkuliahan </label>

                                        <label for="exampleInputEmail2" class="col-sm-1 col-form-label"></label>
                                        <div class="form-radio col-sm-3">
                                            <label class="form-check-label">
                                                <input type="radio"  class="form-check-input" name="radioa8" id="optionsRadios1" value="1" required> Tidak Baik                            </label>
                                        </div>
                                        <div class="form-radio col-sm-3">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radioa8" id="optionsRadios1" value="2" required> Kurang Baik                            </label>
                                        </div>
                                        <div class="form-radio col-sm-3">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radioa8" id="optionsRadios1" value="3" required> Cukup Baik
                                            </label>
                                        </div>
                                        <div class="form-radio col-sm-3">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radioa8" id="optionsRadios1" value="4" required> Agak Baik
                                            </label>
                                        </div>

                                        <div class="form-radio col-sm-3">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radioa8" id="optionsRadios1" value="5" required> Baik
                                            </label>
                                        </div>

                                        <div class="form-radio col-sm-3">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radioa8" id="optionsRadios1" value="6" required> Sangat baik
                                            </label>
                                        </div>

                                        <div class="form-radio col-sm-3">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radioa8" id="optionsRadios1" value="7" required> Memuaskan
                                            </label>
                                        </div>


                                    </div>
                                    <input type="hidden" class="form-control" name="kdindikatora9" value="A9" readonly>
                                    <div class="form-group">
                                        <label for="exampleInputName1">9. Tanggap Terhadap Setiap Tanggapan Dan Pertanyaan Mahasiswa </label>

                                        <label for="exampleInputEmail2" class="col-sm-1 col-form-label"></label>
                                        <div class="form-radio col-sm-3">
                                            <label class="form-check-label">
                                                <input type="radio"  class="form-check-input" name="radioa9" id="optionsRadios1" value="1" required> Tidak Baik                            </label>
                                        </div>
                                        <div class="form-radio col-sm-3">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radioa9" id="optionsRadios1" value="2" required> Kurang Baik                            </label>
                                        </div>
                                        <div class="form-radio col-sm-3">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radioa9" id="optionsRadios1" value="3" required> Cukup Baik
                                            </label>
                                        </div>
                                        <div class="form-radio col-sm-3">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radioa9" id="optionsRadios1" value="4" required> Agak Baik
                                            </label>
                                        </div>

                                        <div class="form-radio col-sm-3">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radioa9" id="optionsRadios1" value="5" required> Baik
                                            </label>
                                        </div>

                                        <div class="form-radio col-sm-3">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radioa9" id="optionsRadios1" value="6" required> Sangat baik
                                            </label>
                                        </div>

                                        <div class="form-radio col-sm-3">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radioa9" id="optionsRadios1" value="7" required> Memuaskan
                                            </label>
                                        </div>


                                    </div>
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
