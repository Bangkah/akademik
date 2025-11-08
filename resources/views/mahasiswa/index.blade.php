<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <a href="../">Dashboard</a>
    <a href="mahasiswa">mahasiswa</a>
    <a href="dosen">dosen</a>
    <a href="jurusan">jurusan</a>
    <a href="prodi">prodi</a>
    <h1>tabel mahasiswa</h1>

    <div class="form">
        <table>
            <thead>
                <tr>
                    <th>Nama Mahasiswa</th>
                    <th>NIM</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Agama</th>
                    <th>No HP</th>
                    <th>Email</th>
                    <th>No KK</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswas as $mahasiswa)
                <tr>
                    <td>{{ $mahasiswa->namaMahasiswa }}</td>
                    <td>{{ $mahasiswa->nim }}</td>
                    <td>{{ $mahasiswa->jkel }}</td>
                    <td>{{ $mahasiswa->tempatLahir }}</td>
                    <td>{{ $mahasiswa->tanggalLahir }}</td>
                    <td>{{ $mahasiswa->alamat }}</td>
                    <td>{{ $mahasiswa->agama }}</td>
                    <td>{{ $mahasiswa->noTelp }}</td>
                    <td>{{ $mahasiswa->email }}</td>
                    <td>{{ $mahasiswa->noKK }}</td>
                    <td>
                        <a href="{{ route('mahasiswa.edit', $mahasiswa->nim) }}">✏️ Edit</a>
                        <form action="{{ route('mahasiswa.destroy', $mahasiswa->nim) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Yakin ingin menghapus data ini?')">🗑️ Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
