<!-- resources/views/mahasiswa/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-4">
    <h2>Daftar Mahasiswa</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Jurusan</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mahasiswa as $mhs)
                <tr>
                    <td>{{ $mhs->nim }}</td>
                    <td>{{ $mhs->nama }}</td>
                    <td>{{ $mhs->jenis_kelamin }}</td>
                    <td>{{ $mhs->tanggal_lahir }}</td>
                    <td>{{ $mhs->alamat }}</td>
                    <td>{{ $mhs->jurusan }}</td>
                    <td>{{ $mhs->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
