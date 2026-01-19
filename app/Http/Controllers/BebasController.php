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
}
