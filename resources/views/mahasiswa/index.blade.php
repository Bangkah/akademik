<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   @vite(['resources/css/app.css', 'resources/css/style.css', 'resources/js/app.js'])
   <style>
    @import "tailwindcss";
    table {
        font-size: 14px;
        justify-content: center;
        align-items: center;
        padding: 9px;
    }
    .container {
        margin-top: 20px;
        display: center;
        justify-content: center;
        align-items: center;
    }
   </style>
</head>
<body>
   @include('components.navbar')
    
    <div class="container">
        
        <a href="" class="btn btn-add">+ Tambah Mahasiswa</a>

        <div class="table-wrapper">
        <table class="table-basic">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Mahasiswa</th>
                    <th>NIM</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Agama</th>
                    <th>No HP</th>
                    <th>Email</th>
                    
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswas as $index=> $mahasiswa)
                <tr>
                    <td>{{ $index + 1}}</td>
                    <td>{{ $mahasiswa->namaMahasiswa }}</td>
                    <td>{{ $mahasiswa->nim }}</td>
                    <td>{{ $mahasiswa->jkel }}</td>
                    <td>{{ $mahasiswa->tempatLahir }}</td>
                    <td>{{ $mahasiswa->tanggalLahir }}</td>
                    <td>{{ $mahasiswa->alamat }}</td>
                    <td>{{ $mahasiswa->agama }}</td>
                    <td>{{ $mahasiswa->noTelp }}</td>
                    <td>{{ $mahasiswa->email }}</td>
                    
                    <td>
                        <a href="" class="btn btn-edit">Edit</a>
                        <form action="" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-delete" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <caption class="caption-bottom md:caption-bottom">Table Mahasiswa</caption>
        </table>
        </div>

    </div>
</body>

</html>
