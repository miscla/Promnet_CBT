
CREATE TABLE IF NOT EXISTS `jawaban` (
  `id_jawaban` int(5) NOT NULL AUTO_INCREMENT,
  `id_mhs` int(5) NOT NULL,
  `tgl_tes` date NOT NULL,
  `benar` int(3) NOT NULL DEFAULT '0',
  `salah` int(3) NOT NULL DEFAULT '0',
  `total_nilai` int(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_jawaban`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;


INSERT INTO `jawaban` (`id_jawaban`, `id_mhs`, `tgl_tes`, `benar`, `salah`, `total_nilai`) VALUES
	(1, 2, '2017-01-03', 7, 3, 70);

CREATE TABLE IF NOT EXISTS `jawaban_detail` (
  `id_jawaban_detail` int(5) NOT NULL AUTO_INCREMENT,
  `id_jawaban` int(5) NOT NULL,
  `id_soal` int(5) NOT NULL,
  `id_paket` int(5) NOT NULL,
  `jawaban` varchar(2) NOT NULL,
  `kunci` varchar(2) NOT NULL,
  `nilai` int(3) NOT NULL,
  PRIMARY KEY (`id_jawaban_detail`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO `jawaban_detail` (`id_jawaban_detail`, `id_jawaban`, `id_soal`, `id_paket`, `jawaban`, `kunci`, `nilai`) VALUES
	(1, 1, 19, 1, 'B', 'B', 1),
	(2, 1, 20, 1, 'C', 'C', 1),
	(3, 1, 21, 1, 'B', 'D', 1),
  (4, 1, 22, 1, 'B', 'D', 1),
  (5, 1, 23, 1, 'B', 'A', 1),
  (6, 1, 24, 1, 'A', 'A', 1),
  (7, 1, 25, 1, 'B', 'B', 1),
  (8, 1, 26, 1, 'A', 'A', 1),
  (9, 1, 27, 1, 'A', 'A', 1),
  (10,1, 28, 1, 'D', 'D', 1);

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `id_mhs` int(10) NOT NULL AUTO_INCREMENT,
  `nim` varchar(12) NOT NULL,
  `no_reg` varchar(50) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `ttl` varchar(100),
  `jk` enum('Laki-Laki','Perempuan'),
  `agama` enum('budha','hindu','islam','kristen','konghucu'),
  `alamat` varchar(200),
  `jurusan` varchar(100),  
  `foto` varchar(200),
  PRIMARY KEY (`id_mhs`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO `mahasiswa` (`id_mhs`, `nim`, `no_reg`, `nama`, `ttl`, `jk`, `agama`, `alamat`,`jurusan`,`foto`) VALUES
	(1, '1401549','1','Annisa Rahmayanti','Bandung 18-Maret-1996','Perempuan','ISLAM','Jl. Geger Arum','Pendidikan Ilmu Komputer','-'),
  (2, '1401594','2','Aldy Romansyah Ruchiyat','Bandung 09-Februari-1996','Laki-Laki','ISLAM','Jl. Cisitu Indah 6','Pendidikan Ilmu Komputer',''),
  (3, '1400100','3','Arif Rahman Sidik','Bandung 05-Februari-1995','Laki-Laki','ISLAM','Jl. Cisitu Indah 9','Ilmu Komputer',''),
  (4, '1406232','4','Syifa Solihat','Bandung 09-Mei-1996','Perempuan','ISLAM','Jl. Cisitu Indah 6','Pendidikan Ilmu Komputer',''),
  (5, '1401480','5','Aulia Rahman','Bandung 09-Juni-1996','Laki-Laki','ISLAM','Jl. Cisitu Indah 6','Pendidikan Ilmu Komputer',''),
  (6, '1401567','6','Zakki Mudhoffar','Bandung 09-Januari-1996','Laki-Laki','ISLAM','Jl. Cisitu Indah 6','Pendidikan Ilmu Komputer',''),
  (7, '1405455','7','Asep Sunandar','Bandung 09-April-1996','Laki-Laki','ISLAM','Jl. Cisitu Indah 6','Pendidikan Ilmu Komputer','');     


CREATE TABLE IF NOT EXISTS `paket` (
  `id_paket` int(4) NOT NULL AUTO_INCREMENT,
  `paket` varchar(100) NOT NULL,
  PRIMARY KEY (`id_paket`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO `paket` (`id_paket`, `paket`) VALUES
	(1, 'Rekayasa Perangkat Lunak'),
  (2, 'Pemograman Internet'),
  (3, 'Sistem Operasi'),
  (4, 'Jaringan Komputer');

CREATE TABLE IF NOT EXISTS `soal` (
  `id_soal` int(4) NOT NULL AUTO_INCREMENT,
  `paket` int(4) NOT NULL,
  `soal` longtext NOT NULL,
  `a` longtext NOT NULL,
  `b` longtext NOT NULL,
  `c` longtext NOT NULL,
  `d` longtext NOT NULL,
  `kunci` varchar(2) NOT NULL,
  `status` enum('tampil','tidak') NOT NULL,
  PRIMARY KEY (`id_soal`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO `soal` (`id_soal`, `paket`, `soal`, `a`, `b`, `c`, `d`, `kunci`, `status`) VALUES
  (1, 4, 'Setiap komputer yang terhubung ke jaringan dapat bertindak baik sebagai workstation maupun server disebut jaringan …', 'Peer to peer', 'Client and server','Local Area Network', 'Bus', 'A', 'tampil'),
  (2, 4, '… adalah sebuah perangkat untuk meneruskan Internet ke client yang terhubung dengan server.', 'Proxy', 'Switch', 'Router', 'Gateway','B', 'tampil'),
  (3, 4, 'Salah satu keuntungan jaringan komputer menggunakan topologi bus adalah ….', 'Deteksi dan isolasi kesalahan sangat kecil', 'Kepadatan lalu lintas pada jalur utama', 'Diperlukan repeater untuk jarak jauh', 'Pengembangan jaringan atau penambahan workstation baru dapat dilakukan dengan mudah tanpa menggangu workstation lain.', 'D', 'tampil'),
  (4, 4, 'Salah satu tipe jaringan komputer yang umum dijumpai adalah….', 'Star', 'Bus', 'WAN', 'Client-server','D', 'tampil'),
  (5, 4, 'Perangkat yang berfungsi mengatur pemilihan jalur terbaik untuk dilewati paket data dikenal sebagai ….', 'Switch', 'Router', 'Web server', 'Proxy server','B', 'tampil'),
  (6, 4, 'Berikut ini jenis topologi jaringan komputer, kecuali …', 'Star', 'Bus', 'Ring', 'Wireless','D', 'tampil'),
  (7, 4, 'Komputer yang bertugas menyimpan informasi halaman web yang pernah diakses sebelumnya adalah …', 'Router', 'Web Server', 'Name Server', 'Database server','B', 'tampil'),
  (8, 4, 'Antar muka yang bertugas menerjemahkan satuan informasi terkecil di layer fisik adalah ….', 'NIC/Lan Card', 'USB', 'RJ 45', 'Firewire','A', 'tampil'),
  (9, 4, '192.168.0.10 merupakan contoh pemberian alamat pada sebuah komputer yang akan dihubungkan dalam sebuah jaringan. Angka-angka tersebut dikenal dengan ….', ' TCP/IP', 'Domain', 'Protokol', 'IP Address', 'D', 'tampil'),
  (10, 3, 'Mekanisme untuk menjamin eksekusi yang berurutan pada proses-proses yang bekerja sama agar data tetap konsisten adalah :', 'Sinkronisasi', 'Critical Section', 'Deadlock Prevention', 'Mutual Exclusion','A', 'tampil'),
  (11, 3, 'Informasi yang ada pada device direktori adalah, kecuali :', 'Name', 'Type', 'Adress', 'Maximum Length', 'D', 'tampil'),
  (12, 3, 'Manajemen perangkat I/O mempunyai beragam fungsi, kecuali ', 'Menyediakan perintah untuk perangkat I/O', 'Menangani kesalahan pada perangkat I/O', 'Menangani interupsi perangkat I/O', 'Mengirim perintah ke perangkat I/O agar menyediakan layanan','C', 'tampil'),
  (13, 3, 'Mekanisme CPU dapat menjalankan beberapa I/O device sekaligus disebut ', 'Interrupt', 'Concurrent', 'Caching', 'Input Controler','B', 'tampil'),
  (14, 3, 'Bagian dari program dan diamanatkan untuk selalu berada dalam keadaan mutual exclusion adalah :', 'Semaphore', 'Critical Region', 'Monitor', 'Interrupt', 'B', 'tampil'),
  (15, 3, 'Istilah ”perulangan“ dalam pemograman pascal dikenal dengan ...', 'Repeating', 'Again', 'Looping', 'Replay', 'C', 'tampil'),
  (16, 2, 'Profesi web yang tugasnya adalah pendisainan tampilan situs (web) mulai dari pengolahan gambar, tata letak, warna, dsb merupakan tugas :', 'Web Designer', 'Web Programmer', 'Web Administrator', 'Web Master', 'A', 'tampil'),
  (17, 2, 'Profesi web yang tugasnya adalah pendisainan tampilan situs (web) mulai dari pengolahan gambar, tata letak, warna, dsb merupakan tugas :', 'Web Colector', 'Web Master', 'Web Administrator', 'Web Programmer', 'A', 'tampil'),
  (18, 2, 'Profesi web yang tugasnya yang mengerti akan kesemua hal mulai dari disain, program dan keamanan server namun tidak terlalu turut mencampuri ke masing-masing divisi, cukup dengan mempertanggun jawabkan atas jalannya suatu situs (web), merupakan tugas :', 'Web Designer', ' Web Programmer', 'Web Administrator', 'Web Master', 'D', 'tampil'),
  (19, 1, 'Setiap fase membutuhkan informasi masukan, proses dan difinisi dengan baik adalah','Model biaya', 'Model fase', ' Model prototype ', 'Model seccersive', 'B', 'tampil'),
  (20, 1, 'Melakukan transformasi informasi yang memproduksi, mengatur, memodifikasi, menampilkan atau memancarkan informasi adalah ...', 'Sebagai kendaraan', 'Aplikasi perangkat lunak', ' Sebagai produk', 'Perangkat Lunak System', 'C', 'tampil'),
  (21, 1, 'Faktor-faktor yang melatar belakangi munculnya rekayasa perangkat lunak kecuali….', 'Ketidakmampuan organisasi memprediksi waktu, usaha dan biaya untuk', 'Kemajuan pesat perangkat keras', 'Kemajuan dalam teknik-teknik pembuatan perangkat lunak', 'Software Requirements berhubungan dengan spesifikasi kebutuhan dan persyaratan perangkat lunak', 'D', 'tampil'),
  (22, 1, 'Problem Perangkat Lunak kecuali', 'Perangkat lunak tidak berfungsi secara baik (kualitas yang kurang)', 'Ketidaktepatan penjadwalan proses dan biaya produksi', 'Produktivitas yang belum dapat memenuhi tuntutan kebutuhan pemakai', 'Menghasilkan perangkat lunak yang berkinerja tinggi','D', 'tampil'),
  (23, 1, 'Mencakup kajian teoritis tentang alat bantu dan metode Rekayasa perangkat lunak adalah', 'Software engineering tools and methods', ' Software engineering process', 'Software quality', 'Software engineering management','A', 'tampil'),
  (24, 1, 'Aktivitas pengujian fungsionalitas satuan terkecil dari sebuah perangkat lunak adalah', 'Unit Test (UT)', 'Integration Test (IT)', 'User Acceptance Test (UAT)', 'Strategi perangkat lunak','A', 'tampil'),
  (25, 1, 'Yang dapat memberikan hasil pengujian yang menyeluruh adalah', 'Non-incremental testing', 'Incremental testing', 'Proses debugging', 'machine time','B', 'tampil'),
  (26, 1, 'Suatu proses dimana kebutuhan pemakai diterjemahkan menjadi produk perangkat lunak adalah …', 'Proses Pengembangan Perangkat Lunak', 'Siklus Pengembangan Perangkat Lunak', 'Model Proses Pengembangan Perangkat Lunak', 'Prototyping Model','A', 'tampil'),
  (27, 1, 'Mengoreksi kesalahan pada perangkat lunak, yang baru terdeteksi pada saat perangkat lunak dipergunakan adalah…', 'Corrective Maintenance', 'Adaptive Maintenance', 'Perfektive Maintenance', 'Prototyping Model','A', 'tampil'),
  (28, 1, 'Perangkat lunak yang memadukan wujud  pengulangan dari model prototyping dengan aspek pengendalian dan sistematika darilinear sequential model adalah ...', 'Spiral Model', 'RAD (Rapid Application Development) Model', 'Fourth Generation Techniques (4GT)', 'Prototyping Model','D', 'tampil'),
  (29, 3, 'Ketika Setup selesai dijalankan, berarti proses instalasi sistem operasi telah selesai dan sudah bisa dioperasikan. Namun terkadang tampilannya masih kasar dan sound card belum berfungsi. Ketika Sound card, VGA card, printer, Network/internet Card  penggunannya belum bisa optimal, maka perlu menginstal ….', 'Restart', 'Shoutdown', 'Stanbye', 'Hang','D', 'tampil'),
  (30, 3, 'Anda dapat keluar/close dari program yang tidak berfungsi sebagaimana mestinya secara paksa dengan menekan tombol keyboard secara bersamaan, yaitu ….', 'Alt+F4', 'Ctrl+P', 'Ctrl+I', 'Ctrl+Alt','A', 'tampil'),
  (31, 3, 'Untuk mematikan program pada task manager, pilihlah nama program yang akan dimatikan, lalu tekan tombol ….', 'End task', 'New task', 'Switch to', 'Forced Closed','A', 'tampil'),
  (32, 3, 'Dibawah ini yang tergolong dalam Distribusi Linux adalah…', 'Debian, Mandriva, Orange dan Pinux', 'Knoppix, Ubuntu, Fedor dan Libonux', 'Ubuntu, Redhat, Fedora dan KDE', 'Debian, Mandriva, Ubuntu dan knoppix','D', 'tampil'),
  (33, 4, 'Berikut ini jenis topologi jaringan komputer, kecuali …', 'Star', 'Bus', 'Ring', 'Wireless','D', 'tampil'),
  (34, 2, 'Yang dimaksud dengan halaman Web adalah, kecuali …', 'Halaman elektronik yang dibuka dengan email', ' Halaman online bisa di download', 'Halaman digital yang dibuka dengan web browser', ' Halaman digital yang berisi berbagai jenis data dan gambar.','C', 'tampil'),
  (35, 2, 'Tahun berapa web di buat? …', '1993', '1999', '1991', '2001','C', 'tampil'),
  (36, 2, 'Apa fungsi dari tag center adalah.....', 'Rata tengah', 'Tulisan Strong', 'Rata Tengah', 'Mendefinisikan Tabel','C', 'tampil'),
  (37, 2, 'Listing merupakan ?', ' Menampilkan window baru pada web', 'menampilkan informasi dalam bentuk sel yg terdiri atas baris dan kolom', 'menampilkan informasi dalam bentuk Daftar', 'Menampilkan informasi dalam bentuk Kotak','C', 'tampil'),
  (38, 2, 'Jenis hosting yang bisa digunakan bersama sama dan biaya sewa yang murah dan banyak digunakan adalah …', 'Shared Hosting', 'VPS', 'Dedicated', 'Free Hosting','A', 'tampil'),
  (39, 2, 'Kepanjangan dari VPS …', 'Virtual Private Server', ' Virtual Portal Server', 'Virtual Promote Server', 'Virtual Pusat Service','A', 'tampil'),
  (40, 2, 'Kolokasi adalah …', 'tempat berpusatnya data server yang dipakai', 'tempat yang dipergunakan untuk meletakkan server secara bersama sama di suatu gedung atau ruangan (pusat data).', 'tempat perkumpulan data yang disiapkan', 'tempat menambahkan data yang dibutuhkan','B', 'tampil');

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(10) NOT NULL AUTO_INCREMENT,
  `nim` varchar(12) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `level` enum('admin','siswa') NOT NULL,
    `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

INSERT INTO `user` (`id_user`, `nim`, `nama`, `username`, `pass`, `level`, `status`) VALUES
	(1, '0', 'admin', 'admin', 'admin', 'admin', 1),
  (2, '1401549', 'Annisa Rahmayanti', '1401549', '1401549', 'siswa', 1),
  (3, '1401594', 'Aldy Romansyah Ruchiyat', '1401594', '1401594', 'siswa', 1),
  (4, '1400100', 'Arif Rahman Sidik',  '1400100', '1400100', 'siswa', 1),
  (5, '1406232', 'Syifa Solihat',  '1406232', '1406232', 'siswa', 1),
  (6, '1401480', 'Aulia Rahman',  '1401480', '1401480', 'siswa', 1),
  (7, '1401567', 'Zakki Mudhoffar',  '1401567', '1401567', 'siswa', 1);