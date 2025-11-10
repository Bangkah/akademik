<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    @include('components.navbar')

    <div class="container mx-auto px-6 py-10">
        <h1 class="text-3xl font-semibold mb-6">Dashboard</h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

            <div class="bg-white shadow-md rounded-lg p-6 border border-gray-200 hover:shadow-lg transition">
                <a href="{{ Route('mahasiswa.index') }}">
                <h2 class="text-xl font-medium mb-2 text-gray-700">Jumlah Mahasiswa</h2>
                <p class="text-4xl font-bold text-blue-600">{{ $jumlahMahasiswa }}</p>
                </a>
            </div>

            <div class="bg-white shadow-md rounded-lg p-6 border border-gray-200 hover:shadow-lg transition">
                <a href="{{ Route('dosen.index') }}">
                    <h2 class="text-xl font-medium mb-2 text-gray-700">Jumlah Dosen</h2>
                    <p class="text-4xl font-bold text-blue-600">{{ $jumlahDosen }}</p>
                </a>
            </div>

            <div class="bg-white shadow-md rounded-lg p-6 border border-gray-200 hover:shadow-lg transition">
                <a href="{{ Route('jurusan.index') }}">
                    <h2 class="text-xl font-medium mb-2 text-gray-700">Jumlah Jurusan</h2>
                    <p class="text-4xl font-bold text-green-600">{{ $jumlahJurusan }}</p>
                </a>
            </div>

            <div class="bg-white shadow-md rounded-lg p-6 border border-gray-200 hover:shadow-lg transition">
                <a href="{{ Route('jurusan.index')}}">
                    <h2 class="text-xl font-medium mb-2 text-gray-700">Jumlah Program Studi</h2>
                <p class="text-4xl font-bold text-purple-600">{{ $jumlahProdi }}</p>
                </a>
            </div>

        </div>
    </div>
</body>
</html>
