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
    <h1>tabel dosen</h1>

    <div class="form">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Prodi</th>
                    <th>Akreditasi</th>
                    <th>kaprodi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($prodis as $index => $p)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $p->nama_prodi }}</td>
                    <td>{{ $p->akreditasi }}</td>
                    <td>{{ $p->kaprodi}}</td>
                    <td>
                        <a href="{{ url('prodi/edit/'.$p->id) }}" class="btn btn-warning">Edit</a>
                        <a href="{{ url('prodi/delete/'.$p->id) }}" class="btn btn-danger" onclick="return confirm('Yakin hapus data?')">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>