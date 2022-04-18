<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BannerController extends Controller
{
    public function index()
    {
        return view('admin.banner.index', [
            'banner' => Banner::latest()->paginate(8)
        ]);
    }

    public function create()
    {
        return view('admin.banner.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'heading' => 'required|string|max:255|min:5',
            'deskripsi' => 'required|min:20',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if (isset($request->gambar)) {
            $extention = $request->gambar->extension();
            $file_name = time() . '.' . $extention;
            $txt = "storage/banner/" . $file_name;
            $request->gambar->storeAs('public/banner', $file_name);
        } else {
            $file_name = null;
        }

        Banner::create([
            'heading' => $request->heading,
            'deskripsi' => $request->deskripsi,
            'gambar' => $txt,
        ]);
        return redirect()->route('banner.index')->with([Alert::success('Berhasil', 'Data berhasil ditambahkan!')]);
    }

    public function show($id)
    {
        return view('admin.banner.detail', [
            'banner' => Banner::find($id)
        ]);
    }

    public function edit($id)
    {
        return view('admin.banner.edit', [
            'banner' => Banner::find($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $banner = Banner::findOrFail($id);
        if (isset($request->gambar)) {
            $extention = $request->gambar->extension();
            $file_name = time() . '.' . $extention;
            $txt = "storage/banner/" . $file_name;
            $request->gambar->storeAs('public/banner', $file_name);
            $banner->gambar = $txt;
        }

        $banner->heading = $request->heading;
        $banner->deskripsi = $request->deskripsi;

        $banner->save();
        return redirect()->route('banner.index')
            ->with([Alert::success('Berhasil', 'Data Berhasil Diubah')]);
    }

    public function destroy($id)
    {
        Banner::where('id', $id)->delete();
        return redirect()->route('banner.index')->with([Alert::success('Berhasil', 'Data Berhasil DiHapus')]);
    }
}
