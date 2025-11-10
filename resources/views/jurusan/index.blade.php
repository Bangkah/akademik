<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.', 'resources/js/app.js'])
    
</head>
<body>
    @include('components.navbar')
    <div class="container">
    <a href="" class="btn btn-add">+ Tambah Jurusan</a>

    <table class="table-basic">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Jurusan</th>
                    <th>Nama Jurusan</th>
                    <th>Ketua Jurusan</th>
                    <th>Aksi </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jurusans as $index => $jurusan)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $jurusan->namaJurusan }}</td>
                    <td>{{ $jurusan->kodeJurusan }}</td>
                    <td>{{ $jurusan->ketuaJurusan }}</td>
                    <td>
                    <a href="" class="btn btn-edit">Edit</a>
                    <form action="" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-delete" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                    </form>
                </td>
                </tr>
                @endforeach
            </tbody>
             <caption class="caption-bottom md:caption-bottom">Table Jurusan</caption>
        </table>
    </div>
    </div>
</body>
</html>