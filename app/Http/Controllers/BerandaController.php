<?php

namespace App\Http\Controllers;
use App\Models\Agenda;
use App\Models\Berita;
use App\Models\GuruBesar;
use App\Models\Jurnal;
use App\Models\Penelitian;
use App\Models\Pengabdian;
use App\Models\Pengumuman;
use App\Models\Question;
use App\Models\UserQuestion;
use Carbon\Carbon;
use App\Models\Alumni;
use App\Models\Banner;
use App\Models\Prestasi;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function mahasiswa()
    {
        $agenda = Agenda::all();
        $prestasi = Prestasi::latest()->get();
        return view('landingpage.mahasiswa', compact('agenda', 'prestasi'));
    }
    public function tentang()
    {
        $gurubesar = GuruBesar::all();
        return view('landingpage.tentang', compact('gurubesar'));
    }

    public function pengabdian()
    {
        $pengabdian = Pengabdian::all();
        return view('landingpage.pengabdian', compact('pengabdian'));
    }

    public function pengumuman()
    {
        $pengumuman = Pengumuman::all();
        return view('landingpage.pengumuman', compact('pengumuman'));
    }

    public function berita()
    {
        $berita = Berita::all();
        // $beda = $berita->created_at->diffForHumans();
        return view('landingpage.berita', compact('berita'));
    }

    public function penelitian()
    {
        $penelitian = Penelitian::all();
        $jurnal = Jurnal::all();
        return view('landingpage.penelitian', compact('penelitian', 'jurnal'));
    }

    public function faq()
    {
        $userQuestion = UserQuestion::latest()->first();
        $beda = $userQuestion->created_at->diffForHumans();
        $faq = Question::all();
        $question = UserQuestion::all()->count();
        $answer = UserQuestion::all()->sum('isanswer');

        return view('landingpage.faq', compact('beda', 'faq', 'question', 'answer'));
    }

    public function questionStore(Request $request)
    {
        $request->validate([
            'ask' => 'required',
        ]);

        UserQuestion::create([
            'ask' => $request->ask,
            'user' => 'Unknown',
            'isanswer' => 0
        ]);
        return redirect(route('faq'))
            ->with('success', 'Pertanyaan berhasil dikirimkan');
    }

    public function alumni()
    {
        $alumni = Alumni::all();
        return view('landingpage.alumni', compact('alumni'));
    }

    public function beranda()
    {
        $banner = Banner::all();
        $sambutan = Berita::where('kategori', 'sambutan')->first();
        // dd($sambutan);
        return view('landingpage.index',compact('banner', 'sambutan'));
    }

    public function jobchannel()
    {
        $client = new Client();
        // $guzzleClient = new \GuzzleHttp\Client(['verify' => false]);
        $request = $client->get('http://dashboard.kampusgratis.id/api/jobChannel');
        $response = $request->getBody()->getContents();
        $result = json_decode($response,true);
        return view('landingpage.job-channel', compact('result'));
    }

    public function registrasi()
    {
        return view('landingpage.registrasi');
    }

    public function post_registrasi(Request $request)
    {
        $client = new Client();
        $request = $client->post('http://dashboard.kampusgratis.id/api/administrasi',
        ['form_params' =>
        [
            'nama_lengkap' => $request->get('nama_lengkap'),
            'nik' => $request->get('nik'),
            'email' => $request->get('email'),
            'prodi' => $request->get('prodi'),
            'tahun_ajar' => $request->get('tahun_ajar'),
            'semester' => $request->get('semester'),
            'alamat_domisili' => $request->get('alamat_domisili'),
            'alamat_ktp' => $request->get('alamat_ktp'),
            'no_hp' => $request->get('no_hp'),
            'tempat_lahir' => $request->get('tempat_lahir'),
            'tgl_lahir' => $request->get('tgl_lahir'),
            'kelamin' => $request->get('kelamin'),
            'kebutuhan_khusus' => $request->get('kebutuhan_khusus'),
            'tinggal' => $request->get('tinggal'),
            'pembiaya' => $request->get('pembiaya'),
            'nama_ayah' => $request->get('nama_ayah'),
            'nama_ibu' => $request->get('nama_ibu'),
            'kerja_ayah' => $request->get('kerja_ayah'),
            'kerja_ibu' => $request->get('kerja_ibu'),
            'pekerjaan' => $request->get('pekerjaan'),
            'penghasilan' => $request->get('penghasilan'),
            'penghasilan_ayah' => $request->get('penghasilan_ayah'),
            'penghasilan_ibu' => $request->get('penghasilan_ibu'),
            'pakta_integritas' => $request->get('pakta_integritas'),
            'scan_ktp' => $request->get('scan_ktp'),
            'scan_kk' => $request->get('scan_kk'),
            'scan_ijazah' => $request->get('scan_ijazah'),
            'pas_foto' => $request->get('pas_foto'),
            'transkip' => $request->get('transkip'),
            'surat_rekomendasi' => $request->get('surat_rekomendasi'),
            'program' => $request->get('program'),
            'isVerified' => false,
        ]] );
        return redirect('/')
        ->with('success', 'Selamat anda sudah terdaftar!');
    }
}
