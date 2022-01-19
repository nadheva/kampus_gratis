<?php

namespace Database\Seeders;

use App\Models\Berita;
use Illuminate\Database\Seeder;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Berita::create([
            'id' => 1,
            'judul' => 'Sambutan Pimpinan Kampus Gratis',
            'penulis' => 'Bunaiya',
            'gambar' =>'03',
            'kategori' => 'sambutan',
            'isi' => '
            Kampus Gratis, sebagai perguruan tinggi untuk mengemban misi memeratakan pendidikan bagi seluruh warga Negara Indonesia dimanapun mereka berada. Mulai didirikan pada tahun 2021 dan dirancang untuk memfasilitasi mereka yang tidak mempunyai kesempatan menyelesaikan studinya di perguruan tinggi karena berbagai hambatan termasuk faktor ekonomi, geografis dan demografis. Oleh karenanya, Kampus Gratis hadir untuk menjangkau yang tak terjangkau. Website ini adalah salah satu media untuk memperkenalkan dan memberikan informasi secara lengkap mengenai Kampus Gratis, baik untuk mahasiswa maupun masyarakat umum. Kampus Gratis secara konsisten dan konstruktif terus berupaya dan menunjukkan komitmen untuk menjadi yang terbaik dalam memberikan layanan pendidikan melalui sistem pendidikan tinggi terbuka dan jarak jauh (PTTJJ), yang disesuaikan dengan kebutuhan industri dan perkembangan teknologi.
            <br> <br>
            Sebagai bentuk kontribusi terhadap pendidikan tinggi nasional, Kampus Gratis terus melakukan terobosan baru yang inovatif untuk menghasilkan lulusan berkualitas tinggi. Disamping itu, sebagai realisasi dari filosofi pendidikan sepanjang hayat (lifelong learning), Kampus Gratis mengembangkan dan memberikan layanan program sertifikat serta berbagai layanan pendidikan gratis melalui berbagai Sumber Pembelajaran Terbuka dan kuliah gratis secara massif, terbuka dan daring/online.
            <br> <br>
            Bersama Anda semua, Kampus Gratis hadir untuk mengemban amanah bangsa yang luhur dalam meningkatkan kecerdasan dan martabat bangsa Indonesia tercinta. Mari kita bangun dan jaga negeri ini dengan mewujudkan pagar bangsa yang berkualitas.

            '
        ]);
    }
}
