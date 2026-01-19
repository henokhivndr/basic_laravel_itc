<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Data Siswa</h1>

    @foreach ($data_siswa as $item)
        <ul>
            <li>{{$item['nama_siswa']}}</li>
            <li>{{$item['kelas']}}</li>
            <li>{{$item['absen']}}</li>
        </ul>
    @endforeach
</body>
</html>