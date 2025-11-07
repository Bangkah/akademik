<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

     <style>
/* Reset sederhana */
body {
    margin: 0;
    padding: 0;
    font-family: Arial, Helvetica, sans-serif;
    background: #f5f5f5;
}

/* Navbar / menu link */
body > a {
    display: inline-block;
    margin: 10px;
    padding: 8px 15px;
    background: #007bff;
    color: white;
    text-decoration: none;
    border-radius: 6px;
    font-size: 14px;
}

body > a:hover {
    background: #0056b3;
}

/* Judul */
h1 {
    text-align: center;
    margin-top: 20px;
    color: #333;
}

/* Container form / tabel */
.form {
    width: 80%;
    margin: 25px auto;
    background: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 8px rgba(0,0,0,0.1);
}

/* Table */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
}

thead {
    background: #007bff;
    color: white;
}

th, td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: center;
}

tbody tr:hover {
    background: #f1f1f1;
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
