<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     @vite(['resources/css/app.css', 'resources/js/app.js'])
     
</head>
<body>
    @include('components.navbar')
    <div class="container">
   <a href="" class="btn btn-add">+ Tambah Prodi</a>

    <table class="table-basic">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Prodi</th>
                    <th>Kode Prodi</th>
                    <th>kaprodi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($prodis as $index => $prodi)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $prodi->namaProdi }}</td>
                    <td>{{ $prodi->kodeProdi }}</td>
                    <td>{{ $prodi->kaprodi}}</td>
                    <td>
                    <a href="" class="btn btn-edit">Edit</a>
                    <form action="" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-delete" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                    </form>
                </td>
                @endforeach
            </tbody>
             <caption class="caption-bottom md:caption-bottom">Table Prodi</caption>
        </table>
    </div>
</body>
</html>