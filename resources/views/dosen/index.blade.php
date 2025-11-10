<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     @vite(['resources/css/app.css', 'resources/js/app.js'])
      <link rel="stylesheet" href="resources/css/style.css">
     
</head>
<body>
  @include('components.navbar')

  <div class="container">
    <a href="" class="btn btn-add">+ Tambah Dosen</a>

    <table class="table-basic">
        <thead>
            <tr>
                <th>No</th>
                <th>NIDN</th>
                <th>Nama Dosen</th>
                <th>jabatan</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dosens as $index=> $dosen)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $dosen->nidn }}</td>
                <td>{{ $dosen->namaDosen }}</td>
                <td>{{ $dosen->jabatan}}</td>
                <td>{{ $dosen->alamat ?? '-' }}</td>
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
       <caption class="caption-bottom md:caption-bottom">Table Dosen</caption>

    </table>

</div>

</body>
</html>