<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bebas;

class BebasController extends Controller
{
    public function index() {
        $data = Bebas::get();

        return view('page.about', ['data_siswa' => $data]);
    }

    public function create() {
        return view('page.add');
    }

    public function store(Request $request) {
        $request->validate([
            'nama_siswa'=>'required',
            'kelas'=>'required',
            'absen'=>'required'
        ]);

        Bebas::create([
            'nama_siswa'=>$request->nama_siswa,
            'kelas'=>$request->kelas,
            'absen'=>$request->absen
        ]);

        return redirect('/about');
    }
}
