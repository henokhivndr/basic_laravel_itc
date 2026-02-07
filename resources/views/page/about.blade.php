@extends('layouts.header')


@section('content')
    <h1>Data Siswa</h1>

    @foreach ($data_siswa as $item)
        <ul>
            <li>{{$item['nama_siswa']}}</li>
            <li>{{$item['kelas']}}</li>
            <li>{{$item['absen']}}</li>
        </ul>
    @endforeach

@endsection

</body>
</html>