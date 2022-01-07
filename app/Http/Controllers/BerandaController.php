<?php

namespace App\Http\Controllers;
use App\Models\Agenda;
use App\Models\GuruBesar;
use App\Models\Pengabdian;
use App\Models\Pengumuman;
use App\Models\Question;
use App\Models\UserQuestion;
use Carbon\Carbon;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function mahasiswa()
    {
        $agenda = Agenda::all();
        return view('landingpage.mahasiswa', compact('agenda'));
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
}
