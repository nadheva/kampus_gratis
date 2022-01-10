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
        return view('landingpage.index',compact('banner'));
    }

    public function jobchannel()
    {
        $client = new Client();
        // $guzzleClient = new \GuzzleHttp\Client(['verify' => false]);
        $request = $client->get('http://dashboard.kampusgratis.id/api/jobChannel');
        $response = $request->getBody()->getContents();
        $result = json_decode($response,true);
        // dd($result);


        // foreach($result["data"] as  $key => $value){
        //     $data[] =  $value;

        // };

        // dd($data);

        return view('landingpage.job-channel', compact('result'));
    }
}
