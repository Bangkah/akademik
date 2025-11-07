<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->
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

/* Hover baris */
tbody tr:hover {
    background: #f1f1f1;
}

/* Tombol */
.btn {
    padding: 5px 10px;
    border-radius: 5px;
    border: none;
    text-decoration: none;
    cursor: pointer;
    font-size: 13px;
}

.btn-warning {
    background: #ffc107;
    color: black;
}

.btn-warning:hover {
    background: #e0a800;
}

.btn-danger {
    background: #dc3545;
    color: white;
}

.btn-danger:hover {
    background: #b02a37;
}

     </style>
</head>
<body>
    <a href="../">Dashboard</a>
    <a href="mahasiswa">mahasiswa</a>
    <a href="dosen">dosen</a>
    <a href="jurusan">jurusan</a>
    <a href="prodi">prodi</a>
    <h1>tabel dosen</h1>
    
    <div class="form">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIDN</th>
                    <th>Nama Dosen</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dosen as $index => $d)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $d->nidn }}</td>
                    <td>{{ $d->nama_dosen }}</td>
                    <td>{{ $d->alamat ?? '-' }}</td>
                    <td>
                        <a href="{{ route('dosen.edit', $d->nidn) }}" class="btn btn-warning btn-sm">✏️ Edit</a>
                        <form action="{{ route('dosen.destroy', $d->nidn) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">🗑️ Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>