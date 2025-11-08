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

    <div class="form">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Jurusan</th>
                    <th>Nama Jurusan</th>
                    <th>Ketua Jurusan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jurusans as $index => $j)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $j->kode_jurusan }}</td>
                    <td>{{ $j->nama_jurusan }}</td>
                    <td>
                        <a href="{{ route('jurusan.edit', $j->kode_jurusan) }}" class="btn btn-warning btn-sm">✏️ Edit</a>
                        <form action="{{ route('jurusan.destroy', $j->kode_jurusan) }}" method="POST" style="display:inline;">
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