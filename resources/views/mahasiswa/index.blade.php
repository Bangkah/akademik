<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    tbody tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    .form {
        width: 100%;
        margin-bottom: 20px;
    }

    .btn {
        margin: 5px;
        padding: 5px 10px;
        border-radius: 5px;
        cursor: pointer;
    }
    </style>
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
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Nama Mahasiswa</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat Lahir</th>
                    <th>tanggalLahir</th>
                    <th>Alamat</th>
                    <th>agama</th>
                    <th>No Hp</th>
                    <th>Email</th>
                    <th>No KK</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswas as $mahasiswa)
                <tr>
                    <td>{{ $mahasiswa->namamahasiswa }}</td>
                    <td>{{ $mahasiswa->nim }}</td>
                    <td>{{ $mahasiswa->jkel }}</td>
                    <td>{{ $mahasiswa->alamat }}</td>
                    <td>{{ $mahasiswa->tempatlahir }}</td>
                    <td>{{ $mahasiswa->tanggallahir }}</td>
                    <td>{{ $mahasiswa->agama }}</td>
                    <td>{{ $mahasiswa->noTelp }}</td>
                    <td>{{ $mahasiswa->email }}</td>
                    <td>{{ $mahasiswa->noKK }}</td>
                    <td>
                        <a href="{{ route('mahasiswa.edit', $mahasiswa->nim) }}">✏️ Edit</a>
                        <form action="{{ route('mahasiswa.destroy', $mahasiswa->nim) }}" method="POST" >
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