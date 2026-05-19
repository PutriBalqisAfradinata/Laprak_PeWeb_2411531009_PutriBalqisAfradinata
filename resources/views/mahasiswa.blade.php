<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Jurusan</th>
    </tr>

    @foreach ($mahasiswas as $mahasiswa)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $mahasiswa->nama }}</td>
        <td>{{ $mahasiswa->nim }}</td>
        <td>{{ $mahasiswa->jurusan }}</td>
    </tr>
    @endforeach

</table>

</body>
</html>