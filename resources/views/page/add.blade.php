@extends('layouts.header')

@section('content')

<h1>Tambah Data</h1>

<form action="/about" method="POST">
    @csrf
    <ul>
        <li>
            <label>Nama Siswa:</label>
            <input type="text" name="nama_siswa" class="border-2">
        </li>
        <li>
            <label>Kelas:</label>
            <input type="text" name="kelas" class="border-2">
        </li>
        <li>
            <label>Absen:</label>
            <input type="number" name="absen" class="border-2">
        </li>
        <li>
            <button type="submit" class="bg-blue-500 text-white px-4 py-1">
                Submit
            </button>
        </li>
    </ul>
</form>

@endsection
