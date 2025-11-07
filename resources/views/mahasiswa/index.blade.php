<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <div class="container">
        <div class="header">
            <div class="breadcrumb">
                <a href="../">Dashboard</a> 
                <a href="mahasiswa">mahasiswa</a>
                <a href="dosen">dosen</a>
                <a href="jurusan">jurusan</a>
                <a href="prodi">prodi</a>
            </div>
            <h1>Data Mahasiswa</h1>
            <p>Kelola data mahasiswa Politeknik Negeri Lhokseumawe</p>
        </div>
        
        <div class="table-container">
            <?php if (empty($mahasiswa)): ?>
                <div class="no-data">
                    <h3>Tidak ada data mahasiswa</h3>
                    <p>Silakan tambah data mahasiswa baru</p>
                </div>
            <?php else: ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIM</th>
                            <th>Nama Mahasiswa</th>
                            <th>Alamat</th>
                            <th>Kelas</th>
                            <th>Program Studi</th>
                            <th>Jurusan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $no = $offset + 1;
                        foreach ($mahasiswa as $row): 
                        ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><strong><?= escape($row['nim']) ?></strong></td>
                            <td><?= escape($row['nama_mahasiswa']) ?></td>
                            <td><?= escape($row['alamat'] ?? '-') ?></td>
                            <td><?= escape($row['nama_kelas'] ?? '-') ?></td>
                            <td><?= escape($row['nama_prodi'] ?? '-') ?></td>
                            <td><?= escape($row['nama_jurusan'] ?? '-') ?></td>
                            <td>
                                <a href="edit.php?nim=<?= urlencode($row['nim']) ?>" class="btn btn-warning btn-sm">✏️ Edit</a>
                                <a href="delete.php?nim=<?= urlencode($row['nim']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">🗑️ Hapus</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                
                <!-- Pagination -->
                <?php if ($totalPages > 1): ?>
                <div class="pagination">
                    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                        <?php if ($i == $page): ?>
                            <span class="current"><?= $i ?></span>
                        <?php else: ?>
                            <a href="?page=<?= $i ?><?= $search ? "&search=" . urlencode($search) : '' ?>"><?= $i ?></a>
                        <?php endif; ?>
                    <?php endfor; ?>
                </div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>