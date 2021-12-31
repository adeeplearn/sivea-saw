@extends('template.index')
@section('content')
    <div class="main-panel">
        <div class="col-lg-12 grid-margin stretch-card card">
            <div class="card-body">
                <h4 class="card-title">Edom (Evaluasi Dosen Mengajar) Akhir Semester</h4>
                <p class="card-description">
                    Silahkan isi semua evaluasi dibawah ini
                </p>
                <div class="alert alert-info">
                    <strong>Perhatian!</strong> <br/>
                    <font size="2"> Jika Status sudah <button type="button" class="btn btn-info mdi mdi-check"></button> klik tombol selesai
                        <br/><br/>
                        <form class="forms-sample" method="POST" action="https://sidomba.umpp.ac.id/angket/selesai">
                            <input type="hidden" name="evaluasi" value="angketakhir" readonly>
                            <input type="submit" class="btn btn-success mr-2" value="Klik Selesai disini" disabled>
                        </form>
                    </font>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th style="width:10px;">Status </th>
                            <th style="width:10px;">No</th>
                            <th>Nama Dosen </th>
                            <th>Matakuliah </th>
                            <th>Kelas </th>

                        </tr>
                        </thead>
                        <tbody>


                        <tr>
                            <td class="py-1">

                                <button type="submit" class="btn btn-info mdi mdi-check"></button></td>
                            <td class="py-1">1</td>
                            <td>Risdiani</td>
                            <td>Agama</td>
                            <td>10201UP</td>

                        </tr>

                        <tr>
                            <td class="py-1">

                                <button type="submit" class="btn btn-info mdi mdi-check"></button></td>
                            <td class="py-1">2</td>
                            <td>Mujianto </td>
                            <td>Pancasila</td>
                            <td>10201UP</td>

                        </tr>

                        <tr>
                            <td class="py-1">

                                <button type="submit" class="btn btn-info mdi mdi-check"></button></td>
                            <td class="py-1">3</td>
                            <td>R. Kurniawan Dwi<br/>Septiady</td>
                            <td>Pancasila</td>
                            <td>10201UP</td>

                        </tr>

                        <tr>
                            <td class="py-1">

                                <button type="submit" class="btn btn-info mdi mdi-check"></button></td>
                            <td class="py-1">4</td>
                            <td>Mujianto </td>
                            <td>Kewarganegaraan</td>
                            <td>10201UP</td>

                        </tr>

                        <tr>
                            <td class="py-1">

                                <button type="submit" class="btn btn-success mr-2" onclick ="location.href='https://sidomba.umpp.ac.id/angket/isi/32bd9f8bdf3b79f7544f574cd42e77e4'">Isi</button></td>
                            <td class="py-1">5</td>
                            <td>R. Kurniawan Dwi<br/>Septiady</td>
                            <td>Kewarganegaraan</td>
                            <td>10201UP</td>

                        </tr>

                        <tr>
                            <td class="py-1">

                                <button type="submit" class="btn btn-success mr-2" onclick ="location.href='https://sidomba.umpp.ac.id/angket/isi/77d3aa79c7c10ed852e2f8075b7d2a7e'">Isi</button></td>
                            <td class="py-1">6</td>
                            <td>Trisna Megawaty,<br/>M.Pd</td>
                            <td>Bahasa Indonesia</td>
                            <td>10201UP</td>

                        </tr>

                        <tr>
                            <td class="py-1">

                                <button type="submit" class="btn btn-success mr-2" onclick ="location.href='https://sidomba.umpp.ac.id/angket/isi/0b9156421658ef4d47cdf4997a5c7a41'">Isi</button></td>
                            <td class="py-1">7</td>
                            <td>TRI SAKTI WIROTOMO</td>
                            <td>Bahasa Indonesia</td>
                            <td>10201UP</td>

                        </tr>

                        <tr>
                            <td class="py-1">

                                <button type="submit" class="btn btn-success mr-2" onclick ="location.href='https://sidomba.umpp.ac.id/angket/isi/6728d311ee3817e706e8f9b40808f3a2'">Isi</button></td>
                            <td class="py-1">8</td>
                            <td>WINDHA WIDIASTUTI</td>
                            <td>Patient Safety</td>
                            <td>10201UP</td>

                        </tr>

                        <tr>
                            <td class="py-1">

                                <button type="submit" class="btn btn-success mr-2" onclick ="location.href='https://sidomba.umpp.ac.id/angket/isi/4ce755e8c65cd0e1120e98215b503f2d'">Isi</button></td>
                            <td class="py-1">9</td>
                            <td>ISYTI'AROH</td>
                            <td>Patient Safety</td>
                            <td>10201UP</td>

                        </tr>

                        <tr>
                            <td class="py-1">

                                <button type="submit" class="btn btn-success mr-2" onclick ="location.href='https://sidomba.umpp.ac.id/angket/isi/1e2f032843d5f7dca7c29b1e7b883345'">Isi</button></td>
                            <td class="py-1">10</td>
                            <td>WINDHA WIDIASTUTI</td>
                            <td>Psikologi</td>
                            <td>10201UP</td>

                        </tr>

                        <tr>
                            <td class="py-1">

                                <button type="submit" class="btn btn-success mr-2" onclick ="location.href='https://sidomba.umpp.ac.id/angket/isi/7a43b493871747f98e708ae4a4d3a0f5'">Isi</button></td>
                            <td class="py-1">11</td>
                            <td>YUNI SANDRA PRATIWI</td>
                            <td>Psikologi</td>
                            <td>10201UP</td>

                        </tr>

                        <tr>
                            <td class="py-1">

                                <button type="submit" class="btn btn-success mr-2" onclick ="location.href='https://sidomba.umpp.ac.id/angket/isi/c01816e6bcb84cc5e44427a549f2a77b'">Isi</button></td>
                            <td class="py-1">12</td>
                            <td>WINDHA WIDIASTUTI</td>
                            <td>Etika Keperawatan</td>
                            <td>10201UP</td>

                        </tr>

                        <tr>
                            <td class="py-1">

                                <button type="submit" class="btn btn-success mr-2" onclick ="location.href='https://sidomba.umpp.ac.id/angket/isi/c010d589d5e08b92cbd3b8227387d43f'">Isi</button></td>
                            <td class="py-1">13</td>
                            <td>ISYTI'AROH</td>
                            <td>Etika Keperawatan</td>
                            <td>10201UP</td>

                        </tr>

                        <tr>
                            <td class="py-1">

                                <button type="submit" class="btn btn-success mr-2" onclick ="location.href='https://sidomba.umpp.ac.id/angket/isi/2f26ddc6e069d5fd61bc463c668c0066'">Isi</button></td>
                            <td class="py-1">14</td>
                            <td>TRI SAKTI WIROTOMO</td>
                            <td>Ilmu Biomedik Dasar</td>
                            <td>10201UP</td>

                        </tr>

                        <tr>
                            <td class="py-1">

                                <button type="submit" class="btn btn-success mr-2" onclick ="location.href='https://sidomba.umpp.ac.id/angket/isi/641f64e89ddfc3670b9389471d5d0f97'">Isi</button></td>
                            <td class="py-1">15</td>
                            <td>FIRMAN FARADISI</td>
                            <td>Ilmu Biomedik Dasar</td>
                            <td>10201UP</td>

                        </tr>

                        <tr>
                            <td class="py-1">

                                <button type="submit" class="btn btn-success mr-2" onclick ="location.href='https://sidomba.umpp.ac.id/angket/isi/bfff4d9a7eeeebd7acd5eb89263d0416'">Isi</button></td>
                            <td class="py-1">16</td>
                            <td>NURUL AKTIFAH</td>
                            <td>Ilmu Biomedik Dasar</td>
                            <td>10201UP</td>

                        </tr>

                        <tr>
                            <td class="py-1">

                                <button type="submit" class="btn btn-success mr-2" onclick ="location.href='https://sidomba.umpp.ac.id/angket/isi/00e4080b9d8521ab52d030fb2d66e69d'">Isi</button></td>
                            <td class="py-1">17</td>
                            <td>NUNIEK NIZMAH<br/>FAJRIYAH</td>
                            <td>Konsep Dasar Keperawatan</td>
                            <td>10201UP</td>

                        </tr>

                        <tr>
                            <td class="py-1">

                                <button type="submit" class="btn btn-success mr-2" onclick ="location.href='https://sidomba.umpp.ac.id/angket/isi/a608db4a85b2454d3c25b44e7027eb62'">Isi</button></td>
                            <td class="py-1">18</td>
                            <td>FIRMAN FARADISI</td>
                            <td>Konsep Dasar Keperawatan</td>
                            <td>10201UP</td>

                        </tr>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
