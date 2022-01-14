<x-guest-layout>
    <style>
    .styled-table {
        border-collapse: collapse;
        margin: 25px 0;
        min-width: 800px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    }
        .styled-table thead tr {
        background-color: #009879;
        color: #ffffff;
        text-align: left;
    }
    .styled-table th,
    .styled-table td {
        padding: 12px 15px;
    }
    .styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
    }

    .styled-table tbody tr:nth-of-type(even) {
        background-color: #f3f3f3;
    }

    .styled-table tbody tr:last-of-type {
        border-bottom: 2px solid #009879;
    }
    .styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
    }
    .emphasized { font-style: italic; }
    </style>
    <section class="py-5">
        <div class="container">
            <div class="row position-relative">
                <!-- SVG decoration -->
                <figure class="position-absolute top-0 start-0 d-none d-sm-block">	
                    <svg width="22px" height="22px" viewBox="0 0 22 22">
                        <polygon class="fill-purple" points="22,8.3 13.7,8.3 13.7,0 8.3,0 8.3,8.3 0,8.3 0,13.7 8.3,13.7 8.3,22 13.7,22 13.7,13.7 22,13.7 "></polygon>
                    </svg>
                </figure>
            
                <!-- Title and breadcrumb -->
                <div class="col-lg-10 mx-auto text-center position-relative">
                    <!-- SVG decoration -->
                    <figure class="position-absolute top-50 end-0 translate-middle-y">
                        <svg width="27px" height="27px">
                            <path class="fill-orange" d="M13.122,5.946 L17.679,-0.001 L17.404,7.528 L24.661,5.946 L19.683,11.533 L26.244,15.056 L18.891,16.089 L21.686,23.068 L15.400,19.062 L13.122,26.232 L10.843,19.062 L4.557,23.068 L7.352,16.089 L-0.000,15.056 L6.561,11.533 L1.582,5.946 L8.839,7.528 L8.565,-0.001 L13.122,5.946 Z"></path>
                        </svg>
                    </figure>
                    
                    <!-- Title -->
                    <h1>Peraturan Akademik</h1>
                    <!-- Breadcrumb -->
                    <div class="d-flex justify-content-center position-relative">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                                <li class="breadcrumb-item"><a href="{{url('pendidikan')}}">Pendidikan</a></li>
                                <li class="breadcrumb-item"><a href="{{url('sarjana')}}">Sarjana</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Peraturan Akademik</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pb-0 py-lg-0">
        <div class="container">
            <div class="row">
                <!-- Main content START -->
                <div class="col-lg-0">
                    <div class="bg-body shadow rounded-2 p-4">
                        <div class="tab-content pt-2" id="course-pills-tabContent">
                                <h5 class="mb-3">1. Nilai Kredit</h5>
                                <p class="mb-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Satuan dasar untuk perencanaan beban kegiatan akademik adalah Satuan Kredit Semester (SKS). Sesuai dengan Peraturan Menteri Pendidikan dan Kebudayaan (Permendikbud) Nomor 3 Tahun 2020 tentang Standar Nasional Pendidikan Tinggi bahwa mata kuliah yang mempunyai nilai satu SKS berarti mata kuliah tersebut diberikan setiap minggu dalam satu semester dengan kegiatan proses belajar selama satu sesi (50 menit), 60 menit penugasan terstruktur (dari dosen), dan 60 menit kegiatan mandiri. Satu semester terdiri dari 16 minggu perkuliahan yang terbagi menjadi 14 kali tatap muka di kelas, 1 kali Ujian Tengah Semester (UTS), dan 1 kali Ujian Akhir Semester (UAS).</p>
                                <p class="mb-3">
                                <div class="card">
                                <div class="table-responsive">
                                <table class="table styled-table">
                                    <thead>
                                        <tr>
                                          <th>No.</th>
                                          <th>Program</th>
                                          <th>SKS</th>
                                          <th>Masa Studi (Semester)</th>
                                          <th>Masa Studi (Tahun)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                          <td>1.</td>
                                          <td>D1</td>
                                          <td>36</td>
                                          <td>2 Semester</td>
                                          <td>1-2 Tahun</td>
                                        </tr>
                                        <tr>
                                          <td>2.</td>
                                          <td>S1</td>
                                          <td>144</td>
                                          <td>8 Semester</td>
                                          <td>4-7 Tahun</td>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                                </div>
                                </p>
                                <p class="mb-3">Sesuai dengan aturan yang tertera pada:</p>
                                <p class="mb-3"><strong> No 3 Tahun 2020 Pasal 17 ayat (1) Standar Nasional Pendidikan Tinggi Tentang Masa dan beban belajar penyelenggaraan program pendidikan</strong></p>
                                <p class="mb-3">
                                <h6 class="pb-0 py-lg-2"><strong>PROGRAM SARJANA</strong></h6>
                                    <div class="card">
                                        <div class="table-responsive">
                                        <table class="table styled-table">
                                            <tbody class="mb-3">
                                                <tr>
                                                  <td>1 SKS</td>
                                                  <td>170 Menit/Minggu/Semester (2 Jam 50 Menit)</td>
                                                </tr>
                                                <tr>
                                                  <td>1 Semester</td>
                                                  <td>16 kali pertemuan (sudah termasuk UTS dan UAS)</td>
                                                </tr>
                                                <tr>
                                                  <td>1 Tahun</td>
                                                  <td>2 semester (32 kali pertemuan)</td>
                                                </tr>
                                                <tr>
                                                  <td>Beban rata-rata belajar mahasiswa per hari</td>
                                                  <td>8 jam/hari</td>
                                                </tr>
                                                <tr>
                                                  <td>Beban rata-rata belajar mahasiswa per minggu</td>
                                                  <td>40 jam/minggu/5hari</td>
                                                </tr>
                                                <tr>
                                                  <td>Beban rata-rata mahasiswa per semester</td>
                                                  <td>640 jam/semester</td>
                                                </tr>
                                                <tr>
                                                  <td>144 SKS</td>
                                                  <td>5.120 jam/minggu/semester</td>
                                                </tr>
                                                <tr>
                                                  <td>Durasi belajar total dalam semester</td>
                                                  <td>8 semester</td>
                                                </tr>
                                                <tr>
                                                  <td>Durasi belajar total dalam semester</td>
                                                  <td>4 tahun</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        </div>
                                    </div>
                                </p>
                                <p class="mb-3">
                                    <h6 class="pb-0 py-lg-2"><strong>PROGRAM DIPLOMA 1</strong></h6>
                                    <div class="card">
                                        <div class="table-responsive">
                                        <table class="table styled-table">
                                            <tbody class="mb-3">
                                                <tr>
                                                  <td>1 SKS</td>
                                                  <td>170 Menit/Minggu/Semester (2 Jam 50 Menit)</td>
                                                </tr>
                                                <tr>
                                                  <td>1 Semester</td>
                                                  <td>16 kali pertemuan (sudah termasuk UTS dan UAS)</td>
                                                </tr>
                                                <tr>
                                                  <td>1 Tahun</td>
                                                  <td>2 semester (32 kali pertemuan)</td>
                                                </tr>
                                                <tr>
                                                  <td>Beban rata-rata belajar mahasiswa per hari</td>
                                                  <td>8 jam/hari</td>
                                                </tr>
                                                <tr>
                                                  <td>Beban rata-rata belajar mahasiswa per minggu</td>
                                                  <td>40 jam/minggu/5hari</td>
                                                </tr>
                                                <tr>
                                                  <td>Beban rata-rata mahasiswa per semester</td>
                                                  <td>640 jam/semester</td>
                                                </tr>
                                                <tr>
                                                  <td>144 SKS</td>
                                                  <td>5.120 jam/minggu/semester</td>
                                                </tr>
                                                <tr>
                                                  <td>Durasi belajar total dalam semester</td>
                                                  <td>8 semester</td>
                                                </tr>
                                                <tr>
                                                  <td>Durasi belajar total dalam semester</td>
                                                  <td>4 tahun</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        </div>
                                    </div>
                                </p>
                                <p class="mb-3">
                                    <h6 class="pb-0 py-lg-2"><strong>PERHITUNGAN 1 SKS DIPLOMA & SARJANA</strong></h6>
                                    <ul>
                                        <li>1 SKS = 170 Menit/Minggu/Semester</li>
                                        <li>50 Menit = Kegiatan tatap muka
                                        <ol>
                                            <li>Presentasi Tugas</li>
                                            <li>Diskusi Kelompok</li>
                                            <li>Menyusun Resume</li>
                                        </ol>
                                        </li>
                                        <li>60 Menit = Kegiatan terstruktur
                                        <ol>
                                            <li>Mengerjakan soal/tugas di rumah</li>
                                            <li>Membuat Terjemahan</li>
                                            <li>Mencari Makna/Arti dari Ilmu yang sedang dipelajari</li>
                                        </ol>
                                        </li>
                                        <li>60 Menit = Kegiatan mandiri
                                            <ol type="a">
                                                <li>Persiapan Belajar</li>
                                                    <ol>
                                                        <li>Menyusun Strategi Belajar</li>
                                                        <li>Mempelajari Materi Ajar</li>
                                                        <li>Menjalankan Instruksi Tugas</li>
                                                    </ol>
                                                <li>Pengembangan Diri
                                                    <ol>
                                                        <li>Mengoreksi Tugas</li>
                                                        <li>Mengembangkan Pemikiran melalui referensi lain</li>
                                                        <li>Meminta Tanggapan Pihak Lain</li>
                                                        <li>Mengembangkan Karya</li>
                                                    </ol>
                                                </li>
                                            </ol>
                                        </li>
                                    </ul>
                                </p>
                             <h5 class="pb-0 py-lg-2">2. Penentuan Beban Studi</h5>
                             <P class="mb-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pada semester pertama, mahasiswa diwajibkan menempuh paket mata kuliah. Sedang pada semester berikutnya jumlah SKS yang bisa ditempuh ditentukan berdasarkan Indeks Prestasi (IP) semester yang didapat dari semester sebelumnya, dengan ketentuan sebagai berikut:
                            </P>
                            <div class="card">
                                <div class="table-responsive">
                                <table class="table align-items-center styled-table">
                                    <thead>
                                        <tr>
                                          <th>Prestasi Semester (IPS)</th>
                                          <th>Beban Studi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                          <td>3.00 - 4.00</td>
                                          <td>22 - 24 SKS</td>
                                        </tr>
                                        <tr>
                                          <td>2.50 - 2.99</td>
                                          <td>19 - 21 SKS</td>
                                        </tr>
                                        <tr>
                                          <td>2.00 - 2.49</td>
                                          <td>16 - 18 SKS</td>
                                        </tr>
                                        <tr>
                                          <td>1.51 - 1.99</td>
                                          <td>12 - 15 SKS</td>
                                        </tr>
                                        <tr>
                                          <td>≤ 1.50</td>
                                          <td>12 SKS</td>
                                        </tr>
                                    </tbody>
                                </table>
                                </div>
                                </div>
                            </div>
                            <P class="mb-3">Jumlah SKS maksimal yang diambil oleh mahasiswa setiap semester adalah 24 SKS. Ketentuan IP semester akan secara otomatis terekam dalam rencana studi mahasiswa dan mahasiswa dilarang mengambil mata kuliah melebihi SKS yang ditentukan. Sistem informasi akademik secara otomatis akan menampilkan jumlah SKS yang dapat diambil pada menu SIAKAD Kampus Gratis.</P>
                        <h5 class="pb-0 py-lg-2">3. Pengisian Kartu Rencana Studi </h5>
                        <P class="mb-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pengisian rencana studi dilakukan melalui portal Sistem Akademik pada tiap semester sesuai dengan yang diterbitkan oleh Bagian Staf Admin Kampus Gratis. Mahasiswa dapat menyunting (edit) pengisian rencana studi sesuai dengan jadwal yang ditetapkan.</P>
                        <h5 class="pb-0 py-lg-2">4. Perkuliahan</h5>
                        <p class="mb-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kegiatan perkuliahan selama masa pandemi dilakukan sepenuhnya melalui media daring (<span class="emphasized">online</span>). Perkuliahan dirancang oleh dosen pengampu dengan sistem sinkron maupun asinkron. Media perkuliahan yang digunakan adalah Aplikasi Kampus Gratis, <span class="emphasized">Zoom Meeting, Google Meet, Webex Meeting, Google Classroom</span>, dan sebagainya. Kegiatan perkuliahan diselenggarakan 14 kali dalam satu semester yang dibagi menjadi tujuh minggu sebelum UTS dan tujuh minggu setelahnya. Perkuliahan diselenggarakan setiap hari dari Senin–Jumat, mulai pukul 07.00–21.00 WIB. Jeda sesi perkuliahan antara sesi pertama dan kedua adalah 30 menit. Jeda istirahat siang adalah pukul 12.30–13.00 WIB. Mahasiswa wajib mengikuti peraturan dan tata tertib presensi selama masa perkuliahan daring.</p>
                    </div>
                    </div>
                 <!-- Content END -->
                </div>
                <section>
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                    <div class="container d-flex justify-container-center">
                        <div class="row">
                            <div class="col-md-12">
                                <div id="donutchart" style="width: 900px; height: 500px;"></div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
                </div>
                <!-- Main content END -->
 
              
                </div>
                <!-- Right sidebar END -->
    
            </div><!-- Row END -->
        </div>
    </section>
    <!-- =======================
    Page content END -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</x-guest-layout>