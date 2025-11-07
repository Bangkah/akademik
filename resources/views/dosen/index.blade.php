<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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