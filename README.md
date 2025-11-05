**Description:**

Project ini merupakan sistem informasi akademik sederhana yang dibangun menggunakan Laravel Framework dan MySQL
Database. Sistem ini menyediakan fitur CRUD (Create, Read, Update, Delete) untuk mengelola data dosen, mahasiswa,
jurusan, dan prodi. Sistem ini dibuat untuk memenuhi tugas Workshop Web.

**Technologies Used:**

*   Laravel Framework
*   MySQL Database 

**Features:**

*   **CRUD Dosen:**  Memungkinkan pembuatan, pembacaan, pembaruan, dan penghapusan data dosen.
*   **CRUD Mahasiswa:** Memungkinkan pembuatan, pembacaan, pembaruan, dan penghapusan data mahasiswa.
*   **CRUD Jurusan:** Memungkinkan pembuatan, pembacaan, pembaruan, dan penghapusan data jurusan.
*   **CRUD Program Studi:** Memungkinkan pembuatan, pembacaan, pembaruan, dan penghapusan data program studi.

**Database Schema (Simplified):**

*   **Dosen Table:** (nip, namaDosen, jkel, alamat, tempatlahir, tanggallahir, agama, nohp, nokk)
*   **Mahasiswa Table:** (nim, namaMahasiswa, jkel, alamat, tempatlahir, tanggallahir, agama, nohp, nokk, kodeprodi, idkelas)
*   **Jurusan Table:** (kodejurusan, namajurusan, kajur, nipkajur, ket)
*   **prodi Table:** (kodeprodi, namaprodi, statusakred, jenjang, kaprodi, nip kaprodi, ket, kodejurusan)
*   **kelas Table:** (idkelas, namakelas, ket)

**Future Improvements:**

*   Implementasi fitur login dan otentikasi pengguna.
*   Desain UI yang lebih menarik dan user-friendly.
*   Integrasi dengan layanan pihak ketiga.
*   Implementasi fitur pencarian (search) data.
