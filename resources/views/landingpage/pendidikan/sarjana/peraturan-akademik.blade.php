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
    .tengah {  margin-left: auto;
      margin-right: auto;}
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
                                <p class="mb-3 mx-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Satuan dasar untuk perencanaan beban kegiatan akademik adalah Satuan Kredit Semester (SKS). Sesuai dengan Peraturan Menteri Pendidikan dan Kebudayaan (Permendikbud) Nomor 3 Tahun 2020 tentang Standar Nasional Pendidikan Tinggi bahwa mata kuliah yang mempunyai nilai satu SKS berarti mata kuliah tersebut diberikan setiap minggu dalam satu semester dengan kegiatan proses belajar selama satu sesi (50 menit), 60 menit penugasan terstruktur (dari dosen), dan 60 menit kegiatan mandiri. Satu semester terdiri dari 16 minggu perkuliahan yang terbagi menjadi 14 kali tatap muka di kelas, 1 kali Ujian Tengah Semester (UTS), dan 1 kali Ujian Akhir Semester (UAS).</p>
                                <p class="mb-3">
                                <div class="card">
                                <div class="table-responsive">
                                <table class="styled-table tengah" style="align-content: center">
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
                                <p class="mb-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sesuai dengan aturan yang tertera pada:</p>
                                <p class="mb-3"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No 3 Tahun 2020 Pasal 17 ayat (1) Standar Nasional Pendidikan Tinggi Tentang Masa dan beban belajar penyelenggaraan program pendidikan</strong></p>
                                <p class="mb-3">
                                <h6 class="pb-0 py-lg-2"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PROGRAM SARJANA</strong></h6>
                                    <div class="card">
                                        <div class="table-responsive">
                                        <table class="tengah styled-table">
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
                                    <h6 class="pb-0 py-lg-2"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PROGRAM DIPLOMA 1</strong></h6>
                                    <div class="card">
                                        <div class="table-responsive">
                                        <table class="tengah styled-table">
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
                                    <h6 class="pb-0 py-lg-2"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PERHITUNGAN 1 SKS DIPLOMA & SARJANA</strong></h6>
                                    <ul class="mx-5">
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
                             <P class="mb-3 mx-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pada semester pertama, mahasiswa diwajibkan menempuh paket mata kuliah. Sedang pada semester berikutnya jumlah SKS yang bisa ditempuh ditentukan berdasarkan Indeks Prestasi (IP) semester yang didapat dari semester sebelumnya, dengan ketentuan sebagai berikut:
                            </P>
                            <div class="card">
                                <div class="table-responsive">
                                <table class="tengah align-items-center styled-table">
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
                            <P class="mb-3 mx-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jumlah SKS maksimal yang diambil oleh mahasiswa setiap semester adalah 24 SKS. Ketentuan IP semester akan secara otomatis terekam dalam rencana studi mahasiswa dan mahasiswa dilarang mengambil mata kuliah melebihi SKS yang ditentukan. Sistem informasi akademik secara otomatis akan menampilkan jumlah SKS yang dapat diambil pada menu SIAKAD Kampus Gratis.</P>
                        <h5 class="pb-0 py-lg-2">3. Pengisian Kartu Rencana Studi </h5>
                        <P class="mb-3 mx-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pengisian rencana studi dilakukan melalui portal Sistem Akademik pada tiap semester sesuai dengan yang diterbitkan oleh Bagian Staf Admin Kampus Gratis. Mahasiswa dapat menyunting (edit) pengisian rencana studi sesuai dengan jadwal yang ditetapkan.</P>
                        <h5 class="pb-0 py-lg-2">4. Perkuliahan</h5>
                        <p class="mb-3 mx-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kegiatan perkuliahan selama masa pandemi dilakukan sepenuhnya melalui media daring (<span class="emphasized">online</span>). Perkuliahan dirancang oleh dosen pengampu dengan sistem sinkron maupun asinkron. Media perkuliahan yang digunakan adalah Aplikasi Kampus Gratis, <span class="emphasized">Zoom Meeting, Google Meet, Webex Meeting, Google Classroom</span>, dan sebagainya. Kegiatan perkuliahan diselenggarakan 14 kali dalam satu semester yang dibagi menjadi tujuh minggu sebelum UTS dan tujuh minggu setelahnya. Perkuliahan diselenggarakan setiap hari dari Senin–Jumat, mulai pukul 07.00–21.00 WIB. Jeda sesi perkuliahan antara sesi pertama dan kedua adalah 30 menit. Jeda istirahat siang adalah pukul 12.30–13.00 WIB. Mahasiswa wajib mengikuti peraturan dan tata tertib presensi selama masa perkuliahan daring.</p>
                        <p class="mb-3">
                          <h6 class="pb-0 py-lg-2"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.1 Aturan dan Tata Tertib (Mahasiswa)</strong></h6>
                        </p>
                        <p class="mb-3 mx-5"><strong>Peraturan dan Tata Tertib Kelas Daring (Online) :</strong>
                          <ul>
                            <ol type="1">
                              <li>Mahasiswa hadir sesuai dengan jadwal dan masuk ke portal daring yang telah diinformasikan oleh dosen pengampu mata kuliah melalui SIAKAD atau informasi dari Bagian Akademik melalui siaran email.</li>
                              <li>Mahasiswa wajib mematuhi mekanisme presensi yang ditetapkan oleh dosen pengampu mata kuliah selama mengikuti perkuliahan daring.</li>
                              <li>Mahasiswa harus mematuhi etika perkuliahan daring, yaitu:
                                <ol type="a" class="mx-1">
                                  <li>Mematikan mikrofon ketika masuk kelas daring,</li>
                                  <li>Mengaktifkan fitur video ketika diminta oleh dosen pengampu,</li>
                                  <li>Mengajukan pertanyaan dengan menggunakan fitur raise hand atau ketik pertanyaan melalui kolom percakapan (chat box), </li>
                                  <li>Bijaksana dalam menggunakan fitur kelas daring,</li>
                                  <li>Jika ingin meninggalkan ruang daring sementara, (misalnya: izin ke belakang), mahasiswa menuliskan keperluan tersebut melalui kolom percakapan.</li>
                                </ol>
                              </li>
                            </ol>
                          </ul>
                        </p>
                        <p class="mb-3">
                          <h6 class="pb-0 py-lg-2"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.2 Presensi Mahasiswa</strong></h6>
                        </p>
                        <p class="mb-3">
                          <ul>
                            <ol type="1">
                              <li>Mahasiswa wajib hadir mengikuti perkuliahan.</li>
                              <li>Mahasiswa bertanggung jawab penuh terhadap presensinya.</li>
                              <li>Mahasiswa wajib melakukan presensi dan telah terverifikasi oleh sistem</li>
                              <li>Jika mahasiswa terlambat mengikuti kelas dan tidak diizinkan masuk ke media perkuliahan oleh dosen, maka mahasiswa tersebut dinyatakan tidak hadir</li>
                              <li>Ketidakhadiran yang dapat ditoleransi adalah sebagai berikut:
                                <ol type="a">
                                  <li>Sakit: dibuktikan dengan surat dokter otentik dan berstempel resmi.</li>
                                  <li>Keluarga inti meninggal (ayah, ibu, kakek, nenek, adik, kakak, anak): dibuktikan dengan surat keterangan meninggal dari pejabat yang berwenang (surat keluarga/RT/RW/Kelurahan atau akta kematian).</li>
                                  <li>Tugas fakultas dan atau universitas (seperti : mengikuti kompetisi atau konferensi yang membawa nama program studi, departemen, fakultas, atau universitas) yang dibuktikan dengan surat keterangan dari Staf Admin Kampus Gratis</li>
                                  <li>Acara keagamaan yang waktunya tidak bisa dijadwalkan sebelumnya, misalnya menunaikan ibadah haji atau ibadah lainnya. Mahasiswa harus menunjukkan bukti surat perjalanan.</li>
                                </ol>
                              </li>
                              <li>Semua bukti meninggalkan kelas diserahkan ke bagian Staf Admin Kampus Gratis. Batas akhir penyerahan bukti ketidakhadiran adalah satu minggu setelah tanggal ketidakhadiran. Jika lebih dari satu minggu dari ketidakhadiran, izin ketidakhadiran tidak diproses.</li>
                              <li>Mahasiswa yang mengalami bentrok jam kuliah (untuk kasus perubahan jadwal kuliah nonpermanen) karena dosen menunda atau menggeser jadwal kuliah, mahasiswa dianggap masuk. Dengan catatan mahasiswa tersebut hadir pada salah satu mata kuliah dan mengisi formulir kuliah bentrok di pelayanan kuliah.</li>
                              <li>Mahasiswa dapat mengikuti UAS jika tingkat kehadirannya minimal 75% dari jumlah pertemuan kuliah sebanyak 14 kali. Apabila kehadiran dosen tidak mencapai 14 kali pertemuan, maka jumlah kehadiran dihitung dari jumlah pertemuan yang terselenggara. Misalnya: pertemuan yang terselenggara hanya 10 kali pertemuan, maka yang dihitung 75% dari 10 kali pertemuan.</li>
                              <li>Mahasiswa dapat mengikuti UAS jika sudah mengikuti pelatihan <span class="emphasized">soft skills</span> yang wajib diikuti pada semester berjalan (mengacu pada bab pelatihan <span class="emphasized">soft skills</span>).</li>
                              <li>Jika sampai dengan sebelum UTS mahasiswa sudah tidak hadir lebih dari tiga kali, maka mahasiswa yang bersangkutan tetap diperkenankan mengikuti UTS. Namun, pada akhir semester, mahasiswa tersebut tidak diperbolehkan mengikuti UAS sesuai ketentuan minimal presensi 75%</li>
                              <li>Komplain presensi kehadiran kurang dari 75% akan dilayani pada pekan terakhir semester berjalan. Di luar waktu tersebut, komplain tersebut tidak dilayani dan keterangan presensi tersebut dianggap benar.</li>
                            </ol>
                          </ul>
                        </p>
                        <p class="mb-3">
                          <h6 class="pb-0 py-lg-2"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.3 Pengulangan Mata kuliah</strong></h6>
                          <p class="mb-3 mx-5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mahasiswa diberi kesempatan untuk mengulang pengambilan mata kuliah jika nilai yang didapatkan tidak mencapai nilai minimal lulus. <span style="background-color:yellow;color:black;">Pada pengulangan mata kuliah, mahasiswa masih dimungkinkan untuk memperoleh nilai maksimal A.</span></p>
                        </p>
                        <p class="mb-3">
                          <h6 class="pb-0 py-lg-2"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.4 Pembatalan Mata kuliah</strong></h6>
                          <p class="mb-3 mx-5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ketentuan pembatalan pengambilan mata kuliah (drop) dapat dilakukan pada masa pembatalan (maksimal tiga minggu sesudah masa akhir pengisian rencana studi). Di luar masa pembatalan mata kuliah tersebut, mahasiswa sudah tidak diperkenankan melakukan pembatalan, kecuali disetujui oleh Ketua Program Studi Sarjana pada masing-masing program studi.</p>
                        </p>
                        <p class="mb-3">
                          <h6 class="pb-0 py-lg-2"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.5 Ujian Semester</strong></h6>
                          <p class="mb-3 mx-5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ujian untuk semua mata kuliah terdiri atas ujian sisipan dan ujian akhir yang diadakan masing-masing satu kali untuk satu mata kuliah, yang penyelenggaraannya dilaksanakan oleh Bagian Staf Admin Kampus Gratis. Mahasiswa yang tidak hadir sesuai dengan jadwal ujian, dinyatakan tidak menggunakan kesempatan ujian tersebut, dan kehilangan kesempatan mengikuti ujian tersebut.</p>
                          <p class="mb-3 mx-5"><strong>Tata tertib mengikuti Ujian Tengah Semester (UTS) dan Ujian Akhir Semester (UAS):</strong>
                            <ul>
                              <ol type="1">
                                <li>Terdaftar sebagai mahasiswa aktif atau herregistrasi pada semester berjalan,</li>
                                <li>Ketentuan minimal presensi kehadiran kuliah 75%,</li>
                                <li>Membawa kartu ujian yang dibuktikan dengan surat bukti telah boleh mengikuti ujian atau berhak mengikuti ujian. Jika belum bisa mendapatkan kartu ujian maka segera hubungi dosen mata kuliah untuk meminta pengganti tugas tambahan,</li>
                                <li>Datang tepat pada waktu yang telah ditentukan. Peserta yang terlambat datang hanya boleh masuk ke menu halaman ujian sebelum ujian berlangsung 15 menit,</li>
                                <li>Menandatangani daftar hadir secara online,</li>
                                <li>Peserta ujian dilarang meninggalkan halaman ujian selama ujian berlangsung. Apabila keluar dianggap ujian sudah selesai dan tidak diperkenankan mengerjakan ujian lagi dan,</li>
                                <li><span style="color:red;">Peserta yang melakukan tindakan kecurangan tidak akan ditegur oleh petugas, tetapi akan dicatat oleh petugas pada berita acara dan akan dikenakan sanksi (mengacu pada bab tata perilaku).</span></li>
                              </ol>
                            </ul>
                          </p>
                          <p class="mb-3 mx-5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Penyelenggaraan Ujian Tengah Semester (UTS) dan Ujian Akhir Semester (UAS) dilaksanakan dengan moda daring (online) dengan media Aplikasi Kampus Gratis, <span class="emphasized">Zoom Meeting, Google classroom, Google Form, online exam</span> SIAKAD Kampus Gratis, atau media lainnya</p>
                          <p class="mb-3 mx-5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:black;font-weight:bold">Mahasiswa wajib memiliki koneksi internet yang baik dan reliabel.</span> Apabila mahasiswa memiliki koneksi internet yang kurang baik dan reliabel, maka harus menyertakan pemberitahuan minimal 1 hari (24 jam) sebelum pelaksanaan ujian kepada Staf Admin. Pengawasan ujian dapat diselenggarakan dan dilakukan oleh bagian Staf Admin Kampus Gratis.</p>
                          <p class="mb-3 mx-5"><strong>Mahasiswa diperkenankan mengajukan permohonan pengajuan ujian pengganti apabila:</strong>
                            <ul>
                              <ol type="1">
                                <li>Rawat inap (opname) di Rumah Sakit: dibuktikan dengan surat rawat inap yang otentik dan berstempel resmi.</li>
                                <li>Keluarga inti meninggal (ayah, ibu, kakek, nenek, adik, kakak, anak): dibuktikan dengan surat keterangan meninggal dari pejabat yang berwenang (surat keluarga/RT/RW/Kelurahan atau akta kematian).</li>
                                <li>Tugas fakultas dan/atau universitas (seperti mengikuti kompetisi atau konferensi yang membawa nama program studi, departemen, fakultas, atau universitas) yang dibuktikan dengan surat keterangan dari Staf Admin Kampus Gratis.</li>
                                <li>Acara keagamaan yang waktunya tidak bisa dijadwalkan sebelumnya, misalnya menunaikan ibadah haji. Mahasiswa harus menunjukkan bukti surat perjalanan.</li>
                              </ol>
                            </ul>
                          </p>
                          <p class="mb-3 mx-5"><strong>Prosedur pengajuan pengganti ujian semester:</strong>
                            <ul>
                              <ol type="1">
                                <li>Mahasiswa mengajukan Surat Permohonan pengganti ujian ditujukan kepada Wakil Dekan Bidang Akademik dan Kemahasiswaan</li>
                                <li>Keluarga inti meninggal (ayah, ibu, kakek, nenek, adik, kakak, anak): dibuktikan dengan surat keterangan meninggal dari pejabat yang berwenang (surat keluarga/RT/RW/Kelurahan atau akta kematian).</li>
                                <li>Tugas fakultas dan/atau universitas (seperti mengikuti kompetisi atau konferensi yang membawa nama program studi, departemen, fakultas, atau universitas) yang dibuktikan dengan surat keterangan dari Staf Admin Kampus Gratis.</li>
                                <li>Acara keagamaan yang waktunya tidak bisa dijadwalkan sebelumnya, misalnya menunaikan ibadah haji. Mahasiswa harus menunjukkan bukti surat perjalanan.</li>
                              </ol>
                            </ul>
                          </p>
                          <p class="mb-3 mx-5"><strong>Prosedur pengajuan pengganti ujian semester:</strong>
                            <ul>
                              <ol type="1">
                                <li>Mahasiswa mengajukan Surat Permohonan pengganti ujian ditujukan kepada Wakil Dekan Bidang Akademik dan Kemahasiswaan,</li>
                                <li>Staf Admin memproses Surat Permohonan pengganti ujian kepada Dosen Pengampu mata kuliah,</li>                          
                                <li>Surat dikirim kepada Dosen pengampu mata kuliah, sedangkan tembusan untuk mahasiswa yang bersangkutan.</li>
                              </ol>
                            </ul>
                          </p>
                        </p>
                        <h5 class="pb-0 py-lg-2">5. Sistem Transfer Kredit </h5>
                        <P class="mb-3 mx-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mahasiswa yang hendak menempuh paparan internasional (<span class="emphasized">international exposure</span>) dan ingin mengajukan transfer kredit, berkewajiban mengisi lembar kontrak belajar (<span class="emphasized">learning agreement</span>) yang disetujui oleh <span style="background-color: yellow;color:black;">Pengelola Program Studi dan Departemen</span> sebelum berangkat ke luar negeri atau sebelum menjalani program. Pengelola Program Studi memiliki kewenangan untuk memberikan penilaian kontrak belajar yang diajukan oleh mahasiswa. <span style="background-color: yellow;color:black;">Petunjuk teknis transfer kredit sudah diatur melalui</span> . Mahasiswa wajib berkomunikasi dengan Pengelola Program Studi Sarjana jika terjadi perubahan pengambilan mata kuliah yang ditempuh di luar negeri dan memperbarui lembar kontrak belajar (learning agreement). Perubahan kontrak belajar harus diketahui dan disetujui oleh Ketua Program Studi Sarjana di masing-masing departemen.</P>
                        <p class="mb-3 mx-3">Mahasiswa dapat mengajukan transfer kredit untuk kegiatan perkuliahan di luar program studi dan universitas, baik di dalam maupun di luar negeri (summer course). Pengajuan transfer kredit tidak hanya berlaku untuk mahasiswa program IUP, tetapi juga untuk mahasiswa reguler.</p>
                        <p class="mb-3 mx-3">Mahasiswa yang ingin mengajukan transfer kredit wajib untuk membuat surat pengajuan melalui bagian akademik dengan menyertakan poster kegiatan atau silabus kegiatan. Pengajuan transfer kredit akan diputuskan dalam rapat yudisium transfer kredit oleh pengelola program studi.</p>
                        <p class="mb-3 mx-3">Proses persetujuan kontrak belajar dapat diajukan melalui Bagian Akademik (email: learning.kampusgratis1@gmail.com). Durasi proses transfer kredit memerlukan waktu sekitar lima minggu sejak dokumen dimasukkan.</p>
                        <h5 class="pb-0 py-lg-2">6. Sistem Transfer Kredit Program Merdeka Belajar-Kampus Merdeka (MBKM) </h5>
                        <p class="mb-3 mx-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Program Merdeka Belajar-Kampus Merdeka (MBKM) merupakan program yang dirancang untuk memberikan hak di luar program studi yang ditempuh. MBKM merupakan langkah pemerintah untuk melakukan link and match antara dunia kampus dengan industri dan juga dengan masa depan yang mengalami perubahan cepat. Mahasiswa diberikan kebebasan mengambil SKS di luar program studi. Berikut adalah skema program Merdeka Belajar-Kampus Merdeka (MBKM).</p>
                        <p class="mb-3 mx-5">
                          <ul>
                            <ol type="1">
                              <li>Paling sedikit empat semester dan paling lama sebelas semester, merupakan pembelajaran di dalam program studi,</li>
                              <li>Satu semester atau setara dengan 20 SKS merupakan pembelajaran di luar program studi pada perguruan tinggi yang sama dan,</li>
                              <li>Paling lama dua semester atau setara dengan 40 SKS, merupakan:</br>Pembelajaran pada program studi yang sama di perguruan tinggi yang berbeda.</li>
                                <ol type="a">
                                  <li>Pembelajaran pada program studi yang berbeda di perguruan tinggi yang berbeda dan/atau,</li>
                                  <li>Pembelajaran di luar perguruan tinggi.</li>
                                </ol>
                            </ol>
                          </ul>
                        </p>
                        <p class="mb-3 mx-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Berbagai bentuk kegiatan belajar di luar perguruan tinggi, diantaranya adalah melakukan magang atau kerja praktek di industri atau tempat kerja lainnya, melaksanakan proyek pengabdian kepada masyarakat di desa, mengajar di satuan pendidikan, mengikuti pertukaran mahasiswa, melakukan penelitian, melakukan kegiatan kewirausahaan, membuat studi/proyek independen, dan mengikuti program kemanusisaan. Semua kegiatan tersebut harus dilaksanakan dengan bimbingan dari dosen. Kampus merdeka diharapkan dapat memberikan pengalaman kontekstual lapangan yang akan meningkatkan kompetensi mahasiswa secara utuh, siap kerja, atau menciptakan lapangan kerja baru.</p>
                        <p class="mb-3 mx-2">Informasi terkait sistem transfer kredit program Merdeka Belajar-Kampus Merdeka (MBKM) silakan bisa <u><a href="#" style="color: yellow">klik disini</a>.</u></p>
                        <h5 class="pb-0 py-lg-2">7. Indeks Prestasi (IP)</h5>
                        <p class="mb-3 mx-3">Indeks Prestasi (IP) diihitung dengan menggunakan rumus sebagai berikut:</p>
                        <p class="mb-3 mx-3">Untuk menghitung IP tersebut, nilai huruf diubah menjadi nilai bobot menurut ketentuan sebagai berikut:</p>
                        <p class="mb-3">
                          <div class="card">
                          <div class="table-responsive">
                          <table class="styled-table tengah">
                              <thead>
                                  <tr>
                                    <th>Nilai Huruf</th>
                                    <th>Nilai Angka</th>
                                    <th>Bobot</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                    <td>A</td>
                                    <td>85-100</td>
                                    <td>4.00</td>
                                  </tr>
                                  <tr>
                                    <td>A-</td>
                                    <td>80-84.99</td>
                                    <td>3.70</td>
                                  </tr>
                                  <tr>
                                    <td>B+</td>
                                    <td>75-79.99</td>
                                    <td>3.30</td>
                                  </tr>
                                  <tr>
                                    <td>B</td>
                                    <td>70-74.99</td>
                                    <td>3.00</td>
                                  </tr>
                                  <tr>
                                    <td>B-</td>
                                    <td>65-69.99</td>
                                    <td>2.70</td>
                                  </tr>
                                  <tr>
                                    <td>C+</td>
                                    <td>60-64.99</td>
                                    <td>2.30</td>
                                  </tr>
                                  <tr>
                                    <td>C</td>
                                    <td>55-59.99</td>
                                    <td>2.00</td>
                                  </tr>
                                  <tr>
                                    <td>D</td>
                                    <td>40-54.99</td>
                                    <td>1.00</td>
                                  </tr>
                                  <tr>
                                    <td>E</td>
                                    <td>0-39.99</td>
                                    <td>0.00</td>
                                  </tr>
                              </tbody>
                          </table>
                          </div>
                          </div>
                          </p>
                          <p class="mb-3 mx-3">Contoh: Pada suatu semester seorang mahasiswa menempuh 6 mata kuliah dengan hasil sebagai berikut.</p>
                          <p class="mb-3">
                            <div class="card">
                            <div class="table-responsive">
                            <table class="styled-table tengah" style="align-content: center">
                                <thead>
                                    <tr>
                                      <th>Mata Kuliah</th>
                                      <th>Nilai</th>
                                      <th>Kredit</th>
                                      <th>N x K</th>
                                      <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                      <td>1</td>
                                      <td>A</td>
                                      <td>4</td>
                                      <td>4.00 x 4</td>
                                      <td>16.00</td>
                                    </tr>
                                    <tr>
                                      <td>2</td>
                                      <td>A</td>
                                      <td>4</td>
                                      <td>4.00 x 4</td>
                                      <td>16.00</td>
                                    </tr>
                                    <tr>
                                      <td>3</td>
                                      <td>A</td>
                                      <td>4</td>
                                      <td>4.00 x 4</td>
                                      <td>16.00</td>
                                    </tr>
                                    <tr>
                                      <td>4</td>
                                      <td>A</td>
                                      <td>4</td>
                                      <td>4.00 x 4</td>
                                      <td>16.00</td>
                                    </tr>
                                    <tr>
                                      <td>5</td>
                                      <td>A</td>
                                      <td>4</td>
                                      <td>4.00 x 4</td>
                                      <td>16.00</td>
                                    </tr>
                                    <tr>
                                      <td>6</td>
                                      <td>A</td>
                                      <td>4</td>
                                      <td>4.00 x 4</td>
                                      <td>16.00</td>
                                    </tr>
                                    <tr>
                                      <td><strong>Jumlah</strong></td>
                                      <td></td>
                                      <td><strong>18</strong></td>
                                      <td></td>
                                      <td><strong>45.60</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                            </div>
                            </p>
                            <h5 class="pb-0 py-lg-2">8. Indeks Prestasi Kumulatif (IPK)</h5>
                            <p class="mb-3 mx-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Indeks Prestasi Kumulatif (IPK) dihitung dengan cara yang sama dengan Indeks Prestasi Semester. IPK merupakan hasil studi mahasiswa dari awal sampai dengan semester tertentu. Bila dikehendaki, orang tua atau wali mahasiswa dapat meminta salinan kartu hasil studi ini dengan mengajukan surat permohonan yang ditujukan kepada Wakil Dekan Bidang Akademik dan Kemahasiswaan.</p>
                            <P class="mb-3 mx-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IPK minimal yang menjadi syarat penulisan skripsi, ujian skripsi, serta kelulusan adalah 2,50 (mengacu pada bab ketentuan tugas akhir dan bab ketentuan ujian akhir). Sesuai dengan Kebijakan Akademik yang tertuang dalam surat keputusan Nomor 3077/J01.1.12/PP/2014 Tanggal 17 Juli 2014, mengatur bahwa:
                              <ul>
                                <ol type="1">
                                  <li>Pertama, seluruh mata kuliah yang diambil dalam menempuh Pendidikan Sarjana (S1) di FEB UGM digunakan untuk penghitungan Indeks Prestasi Kumulatif (IPK) dan dimasukkan di dalam transkrip.</li>
                                  <li>Kedua, untuk mata kuliah yang diambil di luar negeri, selama dapat ditransfer, akan muncul di transkrip (atas rekomendasi Pengelola Program Studi Sarjana). Jika seorang mahasiswa memiliki jumlah SKS kumulatif melebihi dari ketentuan atau lebih dari 144/145 SKS, seluruh mata kuliah yang berstatus mata kuliah wajib yang didapatkan dari transfer kredit maupun dari hasil belajar di FEB UGM, tidak dapat dihapus dari rekam akademik atau transkrip. Namun, mahasiswa dapat mengajukan permohonan untuk tidak memperhitungkan kelebihan mata kuliah pilihan di perhitungan IPK melalui Ketua Program Studi Sarjana di masing-masing departemen jika mata kuliah pilihan yang diambil melebihi dari ketentuan kurikulum Program Studi Sarjana. Prosedur tersebut dapat dilakukan oleh mahasiswa ketika sudah menyelesaikan dan dinyatakan lulus ujian dengan rincian sebagai berikut.</li>
                                </ol>
                              </ul>
                            </P>
                            <h5 class="pb-0 py-lg-2">9. Jumlah SKS Wajib dan Pilihan Program Sarjana dengan Kurikulum 2018</h5>
                            <h5 class="pb-0 py-lg-2">10. Evaluasi Hasil dan Batas Masa Studi Program Studi Sarjana</h5>
                            <p class="mb-3 mx-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sesuai dengan Prosedur Internal Evaluasi Studi Program Sarjana Fakultas Ekonomika dan Bisnis Kampus Gratis Nomor yang disusun berdasarkan … tentang Informasi Kebijakan Akademik Evaluasi Studi Program Sarjana Kampus Gratis, berikut ini adalah tahapan-tahapan pelaksanaan evaluasi studi program sarjana.</p>
                            <p class="mb-3 mx-3"><strong>A. Evaluasi Dua Tahun Pertama Program Studi Sarjana (4 Semester Awal)</strong>
                            <ul>
                              <ol type="1">
                                <li>Dalam 4 semester awal, mahasiswa harus menyelesaikan sekurang-kurangnya 30 SKS lulus dan atau mendapatkan IPK minimal 2,0.</li>
                                <li>Bagian Akademik menerbitkan pengumuman akademik bagi seluruh mahasiswa yang sudah menempuh studi pada semester 1, 2, dan 3 untuk mengecek perolehan nilai kumulatif setiap semester. Mahasiswa melakukan konsultasi akademik ke Dosen Pembimbing Akademik (DPA) masing-masing sebagai langkah untuk memperbaiki kinerja akademik pada semester berikutnya.</li>
                                <li>Surat Peringatan Dini 1 diterbitkan berdasar nilai akhir semester 1.</li>
                                <li>Surat Peringatan Dini 2 diterbitkan berdasar nilai kumulatif di akhir semester 1 dan 2.</li>
                                <li>Surat Peringatan Dini 3 diterbitkan berdasar nilai kumulatif di akhir semester 1, 2, dan 3.</li>
                                <li>Mahasiswa yang mendapat Surat Peringatan Dini karena tidak menunjukkan kinerja akademik harus membuat surat pernyataan di atas materai 10.000 yang menyatakan bersedia memperbaiki kinerja akademik sesuai dengan ketentuan yang berlaku.</li>
                              </ol>
                            </ul>
                            </p>
                            <p class="mb-3 mx-3"><strong>B. Evaluasi Masa Studi Normal (8 Semester)</strong>
                            <ul>
                              <ol type="1">
                                <li>Dalam masa semester 8, mahasiswa wajib menempuh sekurang-kurangnya 80 SKS lulus dan IPK minimal. Apabila mahasiswa tidak memenuhi ketentuan tersebut, Prodi akan menerbitkan Surat Peringatan Tengah Periode Masa Studi ke-1, ke-2, dan ke-3.</li>
                                <li>Surat Peringatan Tengah Periode Masa Studi ke-1 diterbitkan di akhir semester 8.</li>
                                <li>Surat Peringatan Tengah Periode Masa Studi ke-2 diterbitkan di akhir semester 9.</li>
                                <li>Surat Peringatan Tengah Periode Masa Studi ke-3 diterbitkan di akhir semester 10.</li>
                                <li>Prodi memantau perkembangan studi mahasiswa tersebut dan dapat bekerja sama dengan Bagian Akademik dan staf admin untuk proses pemantauan studi mahasiswa program Sarjana yang masuk dalam evaluasi studi.</li>
                                <li>Mahasiswa berkewajiban untuk memperpanjang masa studi per semester untuk mengaktifkan status akademik dan mendapatkan fasilitas pembimbingan akademik, akses fasilitas akademik, dan pencatatan transaksi akademik.</li>
                              </ol>
                            </ul>
                            </p>
                            <p class="mb-3 mx-3"><strong>C. Evaluasi Batas Akhir Masa Studi (14 Semester)</strong>
                            <ul>
                              <ol type="1">
                                <li>Mahasiswa harus sudah menyelesaikan/lulus sekurang-kurangnya 120 SKS dan IPK minimal 2,5 pada akhir semester 11.</li>
                                <li>Apabila pada akhir semester 11 mahasiswa tidak memenuhi kinerja akademik sebagaimana di butir …, maka Program Studi mengeluarkan Surat Peringatan Akhir ke-1.</li>
                                <li>Surat Peringatan Akhir ke-2 akan diterbitkan di akhir semester ke-12 jika mahasiswa belum menyelesaikan/lulus minimal 135 SKS dan IPK minimal 2,5.</li>
                                <li>Surat Peringatan Akhir ke-3 akan diterbitkan di akhir semester ke-13 jika mahasiswa belum menyelesaikan/lulus minimal 144 SKS dan IPK minimal 2,5.</li>
                                <li>Mahasiswa diminta mengundurkan diri jika tidak memenuhi ketentuan Jumlah SKS Lulus pada akhir semester 14 dan Prodi mengusulkan drop out (DO) apabila mahasiswa tidak menulis surat pengunduran diri.</li>
                              </ol>
                            </ul>
                          </p>
                            <p class="mb-3 mx-3"><strong>D. Persyaratan Minimal Lulus</strong></br>
                              <p class="mb-3 mx-4">Sesuai dengan Kebijakan Akademik tentang Persyaratan Nilai Minimal dan Ketentuan Umum Pendaftaran Ujian Skripsi dan Komprehensif bagi Mahasiswa Sarjana FEB Kampus Gratis … tentang Persyaratan nilai Minimal untuk Mengikuti Ujian Skripsi dan Komprehensif, serta buku panduan akademik program Sarjana tahun 2022, persyaratan minimal nilai lulus diatur sebagai berikut.</p>
                            <ul>
                              <ol type="1">
                                <li>Mahasiswa Angkatan 2018 dan sesudahnya harus memiliki nilai minimal C untuk seluruh mata kuliah wajib, pilihan, dan nilai ujian skripsi.</li>
                                <li>Mahasiswa Angkatan 2017 dan sebelumnya harus memiliki nilai minimal C- untuk seluruh mata kuliah wajib, pilihan, dan nilai ujian skripsi.</li>
                              </ol>
                            </ul>
                            </p>
                            <p class="mb-3 mx-3"><strong>E. Perpanjangan Masa Studi Mahasiswa Program Studi Sarjana</strong>
                              <p class="mb-3 mx-4">Mahasiswa yang tidak dapat menyelesaikan studi sampai batas maksimal diwajibkan mengajukan permohonan perpanjangan masa studi dengan ketentuan sebagai berikut.</p>
                              <ul>
                                <ol type="1">
                                  <li>Perpanjangan masa studi akan diberikan kepada mahasiswa yang tinggal/sedang menyelesaikan tugas penulisan skripsi atau ujian skripsi.</li>
                                  <li>Pada saat pengajuan perpanjangan masa studi, mahasiswa harus menunjukkan perkembangan penyelesaian studinya dengan diketahui oleh dosen pembimbing skripsi.</li>
                                  <li>Mahasiswa Angkatan 2015 dan sesudahnya harus memperpanjang masa studi setelah semester ke-10 berakhir. Perpanjangan studi diajukan dua bulan sebelum semester berikutnya dimulai. Perpanjangan studi diberikan maksimal sampai dengan semester ke-14. Setelah semester ke-14, mahasiswa tidak diberikan izin untuk memperpanjang studi. Hal ini sesuai dengan ketentuan Permendikbud Nomor 3 Tahun 2020 pada pasal 17 ayat (1) d.</li>
                                  <li>Mahasiswa yang mengajukan perpanjangan masa studi diwajibkan memenuhi peraturan baik administrasi keuangan maupun akademik.</li>
                                  <li>Mahasiswa bersedia mengundurkan diri atau diberhentikan apabila sampai batas waktu yang ditentukan mahasiswa tidak berhasil memenuhi syarat kelulusan.</li>
                                  <li>Mahasiswa harus sudah mengajukan surat permohonan perpanjangan masa studi kepada Wakil Dekan Bidang Akademik dan Kemahasiswaan FEB UGM paling lambat dua bulan sebelum batas akhir masa studi.</li>
                                  <li>Mahasiswa yang mengajukan permohonan perpanjangan masa studi diwajibkan menandatangani surat pernyataan perpanjangan masa studi yang ditempeli meterai, yang menyatakan bahwa mahasiswa bersedia memenuhi peraturan administrasi keuangan dan akademik, dan apabila sampai batas waktu yang ditentukan ternyata mahasiswa belum berhasil memenuhi syarat kelulusan, maka yang bersangkutan bersedia mengundurkan diri.</li>
                                </ol>
                              </ul>
                            </p>
                            <p class="mb-3 mx-3"><strong>F. Kebijakan DROP-OUT (DO) Program Studi Sarjana</strong>
                              <p class="mb-3 mx-4">Dalam kasus pelanggaran yang serius, FEB Kampus Gratis dapat meninjau kembali status dan hak sebagai mahasiswa. Beberapa kondisi yang dapat menyebabkan <span class="emphasized">Drop Out</span>, yaitu:</p>
                              <ul>
                                <ol type="1">
                                  <li>Mahasiswa melakukan tindak kejahatan yang dapat merusak nama baik FEB Kampus Gratis,</li>
                                  <li>Mahasiswa tidak dapat menyelesaikan studi setelah melewati masa studi,</li>
                                  <li>Mahasiswa melakukan pelanggaran peraturan dan kode etik akademik (berbuat curang atau plagiat) yang dianggap sebagai sebuah pelanggaran serius,</li>
                                  <li>Mahasiswa me lakukan perbuatan yang melanggar norma, seperti: pelecehan seksual, mempermalukan institusi, serta bertindak asusila,</li>
                                  <li>Terbukti secara sah melakukan tindak pidana sesuai ketetapan pengadilan,</li>
                                  <li>Terlibat kasus NAPZA (narkotika, psikotropika, dan zat adiktif lainnya),</li>
                                  <li>Terlibat tindak pidana/criminal,</li>
                                  <li>Melakukan perusakan pada fasilitas yang tersedia di kampus, atau</li>
                                  <li>Diterima sebagai mahasiswa Kampus Gratis melalui cara dan prosedur yang tidak benar atau tidak sah.</li>
                                </ol>
                              </ul>
                            </p>
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