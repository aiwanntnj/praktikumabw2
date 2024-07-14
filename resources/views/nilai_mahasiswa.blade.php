<!DOCTYPE html>
<html>
<head>
    <title>Nilai Mahasiswa</title>
</head>
<body>
    <h1>Nilai Mahasiswa</h1>
    <p>Nama Mahasiswa: {{ $mahasiswa->nama }}</p>
    <table border="1">
        <tr>
            <th>Matakuliah</th>
            <th>Nilai</th>
        </tr>
        @foreach ($mahasiswa->nilais as $nilai)
        <tr>
            <td>{{ $nilai->matakuliah->nama }}</td>
            <td>{{ $nilai->nilai }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
