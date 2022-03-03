-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2021 at 11:55 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adopsi_anak`
--

-- --------------------------------------------------------

--
-- Table structure for table `archive`
--

CREATE TABLE `archive` (
  `id_archive` int(11) NOT NULL,
  `nama_adopter` varchar(255) NOT NULL,
  `nama_panti` varchar(255) NOT NULL,
  `nama_anak` varchar(255) NOT NULL,
  `hari` varchar(255) NOT NULL,
  `bulan` varchar(255) NOT NULL,
  `tahun` varchar(255) NOT NULL,
  `tgl_selesai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `archive`
--

INSERT INTO `archive` (`id_archive`, `nama_adopter`, `nama_panti`, `nama_anak`, `hari`, `bulan`, `tahun`, `tgl_selesai`) VALUES
(4, 'deden', 'deansan', 'hsun', 'selasa', 'januari', '2021', '2021-01-05'),
(5, 'deden', 'deansan', 'hsun', 'selasa', 'januari', '2021', '2021-01-05');

-- --------------------------------------------------------

--
-- Table structure for table `donasi`
--

CREATE TABLE `donasi` (
  `id_donasi` varchar(11) NOT NULL,
  `pendonasi` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nama_panti` varchar(255) NOT NULL,
  `nominal` varchar(255) NOT NULL,
  `tgl_pengajuan` varchar(255) NOT NULL,
  `tgl_selesai` varchar(255) NOT NULL,
  `bukti_struk` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donasi`
--

INSERT INTO `donasi` (`id_donasi`, `pendonasi`, `nama`, `nama_panti`, `nominal`, `tgl_pengajuan`, `tgl_selesai`, `bukti_struk`, `status`) VALUES
('', '', '', 'sayang ibu', '', '', '', '', 0),
('DON001', 'bagas', 'Hamba Allah', 'sayang ibu', '500000', '26-04-2021', '26-04-2021', 'bukti.jpg', 1),
('DON002', 'bagas', 'bagas', 'sayang ibu', '500000', '27-04-2021', '27-04-2021', 'bukti.jpg', 1),
('DON003', 'non user', 'aqil', 'sayang ibu', '500000', '27-04-2021', '27-04-2021', 'bukti.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id_event` varchar(11) NOT NULL,
  `nama_panti` varchar(255) NOT NULL,
  `nama_event` varchar(255) NOT NULL,
  `judul_event` varchar(255) NOT NULL,
  `tanggal_event` date NOT NULL,
  `isi_event` varchar(255) NOT NULL,
  `deskripsi_event` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id_event`, `nama_panti`, `nama_event`, `judul_event`, `tanggal_event`, `isi_event`, `deskripsi_event`, `gambar`) VALUES
('EVN001', 'sayang ibu', 'Santunan Anak Yatim', 'Santunan Anak Yatim', '2021-05-11', 'santunan ini akan digelar pada hari selasa tanggal 11 mei 2021 di Panti asuhan Sayang ibu, santunan ini akan dimulai pada jam 4 sore .', 'Santunan Anak Yatim yang akan digelar di Panti asuhan Sayang Ibu', 'santunan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id_history` int(11) NOT NULL,
  `nama_adopter` varchar(255) NOT NULL,
  `nama_panti` varchar(255) NOT NULL,
  `nama_anak` varchar(255) NOT NULL,
  `hari` varchar(255) NOT NULL,
  `bulan` varchar(255) NOT NULL,
  `tahun` varchar(255) NOT NULL,
  `tgl_selesai` date NOT NULL,
  `kode` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id_history`, `nama_adopter`, `nama_panti`, `nama_anak`, `hari`, `bulan`, `tahun`, `tgl_selesai`, `kode`) VALUES
(3, 'bagas', 'sayang ibu', 'subari', 'Fri', 'June', '2020', '2020-06-19', '');

-- --------------------------------------------------------

--
-- Table structure for table `table_admin`
--

CREATE TABLE `table_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Job` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `role` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_admin`
--

INSERT INTO `table_admin` (`id_admin`, `username`, `password`, `email`, `Job`, `foto`, `role`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', '', '', 'admin'),
(2, 'bagas', '123', 'bagaselditya@gmail.com', 'programmer', 'bagas.jpeg', 'admin'),
(3, 'irfan', '123', 'irfanmaulana@gmail.com', 'database', '', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `table_adopter`
--

CREATE TABLE `table_adopter` (
  `id_adopter` varchar(11) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `telepon` varchar(55) NOT NULL,
  `TTL` date NOT NULL,
  `foto` varchar(255) NOT NULL,
  `role` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_adopter`
--

INSERT INTO `table_adopter` (`id_adopter`, `username`, `password`, `email`, `telepon`, `TTL`, `foto`, `role`) VALUES
('1', 'aqil', '1234', 'ibnuaqil@gmil.com', '213123', '2020-04-08', '', 'adopter'),
('2', 'irfan', '123', 'irfan@gmail.com', '12312314', '2020-03-31', '', 'adopter'),
('3', 'bagas', '1234', 'elditya@gmail.com', '081213074205', '2020-04-20', 'bagas.jpeg', 'adopter'),
('ADP001', 'test', '123', 'test@gmail.com', '09813311', '2021-04-30', 'bagas.jpeg', 'adopter');

-- --------------------------------------------------------

--
-- Table structure for table `table_adopter1`
--

CREATE TABLE `table_adopter1` (
  `id` varchar(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `ktp` varchar(255) NOT NULL,
  `kk` varchar(255) NOT NULL,
  `skck` varchar(255) NOT NULL,
  `bk` varchar(255) NOT NULL,
  `skdk` varchar(255) NOT NULL,
  `slip` varchar(255) NOT NULL,
  `spaa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_adopter1`
--

INSERT INTO `table_adopter1` (`id`, `username`, `ktp`, `kk`, `skck`, `bk`, `skdk`, `slip`, `spaa`) VALUES
('', 'test', '7b62bd42-bc87-4de3-9672-9ee87ab2a6d3_1.jpg', '9e1e89ea-1d47-4f8f-8269-5d8d1fcd644f_1.jpg', '037cf642-6f99-482b-8ee7-bb79ad4cabdf_1.jpg', 'a8f54b90-6064-42dc-b40f-cc1a7113ea90_1.jpg', 'a66f0133-6e95-444b-95c9-986b341cf9e5_1.jpg', 'c2e03a1a-2f2c-4a8b-9381-9aebba6fba5a_1.jpg', '4e94eade-36c5-463c-9245-15d32aef529f_1.jpg'),
('1', 'elditya', 'ktp.png', 'kk.png', 'skck.png', 'bk.png', 'skdk.png', 'slip.png', 'spaa.png'),
('2', 'bagas', 'ktp.jpg', 'kk.jpg', 'skck.jpg', 'bk.jpg', 'skdk.png', 'slip.png', 'spaa.png');

-- --------------------------------------------------------

--
-- Table structure for table `table_anak`
--

CREATE TABLE `table_anak` (
  `id_anak` varchar(11) NOT NULL,
  `nama_anak` varchar(255) NOT NULL,
  `nama_panti` varchar(255) NOT NULL,
  `tl` varchar(255) NOT NULL COMMENT 'tempat lahir',
  `ttl` date NOT NULL COMMENT 'tanggal lahir',
  `umur_anak` varchar(255) NOT NULL,
  `jk` varchar(255) NOT NULL COMMENT 'jenis kelamin',
  `agama` varchar(255) NOT NULL,
  `hobby` varchar(255) NOT NULL,
  `kesehatan` varchar(255) NOT NULL,
  `ket` varchar(255) NOT NULL,
  `sk` varchar(255) NOT NULL COMMENT 'sislislah keluarga',
  `foto_anak` varchar(255) NOT NULL,
  `status_adopsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_anak`
--

INSERT INTO `table_anak` (`id_anak`, `nama_anak`, `nama_panti`, `tl`, `ttl`, `umur_anak`, `jk`, `agama`, `hobby`, `kesehatan`, `ket`, `sk`, `foto_anak`, `status_adopsi`) VALUES
('1', 'subari', 'sayang ibu', 'jakarta', '2015-01-12', '5 tahun', 'laki-laki', 'islam', 'bermain gitar', 'sehat walafiat', 'Subri suhardi anak berjenis kelamin laki laki dan berumur 5 tahun dia memiliki hobby bermain bola', 'akte.jpeg', 'subari.jpg', 'diadopsi'),
('11', 'andi', 'sayang ibu', 'magelang', '2016-04-28', '4 tahun', 'laki laki', 'islam', 'bermain bola', 'sehat walafiat', 'wqeqwewqeqweqwe', 'akte.jpeg', 'aldi.jpg', 'belum diadopsi'),
('13', 'elvy', 'sayang ibu', 'manado', '2018-05-13', '2 tahun', 'permpuan', 'katolik', 'bernyanyti', 'sehat walafiat', 'qweqweqweqweq', 'akte.jpeg', 'elvy.jpg', 'belum diadopsi'),
('3', 'dandi', 'sayang ibu', 'bandung', '2013-06-12', '7 tahun', 'laki-laki', 'islam', 'bermain game', 'sehat walafiat', 'dandi suhardi anak berjenis kelamin laki laki dan berumur 7 tahun dia memiliki hobby bermain game', 'akte.jpeg', 'dandi.jpg', 'belum diadopsi'),
('5', 'vandi kuandi', 'sayang ibu', 'Jakarta', '2006-04-14', '14 tahun', 'laki-laki', 'islam', 'bermain game', 'memiliki penyakit kurang darah jadi suka gampang lemas kalo melakukan aktifitas berat', 'vandi kuandi anak yang lahir di jakarta memiliki jenis kelamin laki laki berumur 14 tahun dan memiliki hobby bermain games', 'akte.jpeg', 'vandi.jpg', 'belum diadopsi'),
('6', 'Sinsin', 'sayang ibu', 'jakarta', '2018-08-15', '2 tahun', 'perempuan', 'kristen', 'main masak masakan', 'memiliki alergi saat pagi hari akan selalu bersin', 'supandi dandi anak laki laki yang memiliki hobby bermain sepak bola anak ini berumur 2 tahun dan lahir dijakarta', 'akte.jpeg', 'supandi.jpg', 'belum diadopsi'),
('7', 'farhan', 'sayang ibu', 'bekasi', '2007-05-13', '13', 'laki-laki', 'islam', 'bermain gitar', 'sehat', 'adawdawdawfawfafawfawfa', 'akte.jpeg', 'farhan.jpg', 'belum diadopsi'),
('ANK001', 'Fadlan', 'sayang ibu', 'Jakarta', '2006-06-14', '14 tahun', 'laki laki', 'islam', 'bermain bola', 'sehat walafiat', '-', 'akte.jpeg', 'fadlan.jpg', 'belum diadopsi'),
('ANK002', 'kaela', 'sayang ibu', 'jakarta', '2011-06-14', '10 tahun', 'perempuan', 'kristen', 'menggambar', 'tidak ada riwayat penyakit', 'aktif bertanya', 'akte.jpeg', 'kaela.jfif', 'belum diadopsi');

-- --------------------------------------------------------

--
-- Table structure for table `table_janji`
--

CREATE TABLE `table_janji` (
  `id_janji` varchar(11) NOT NULL,
  `nama_panti` varchar(255) NOT NULL,
  `nama_anak` varchar(255) NOT NULL,
  `nama_adopter` varchar(255) NOT NULL,
  `hari` varchar(255) NOT NULL,
  `jam` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `kode` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_janji`
--

INSERT INTO `table_janji` (`id_janji`, `nama_panti`, `nama_anak`, `nama_adopter`, `hari`, `jam`, `tanggal`, `kode`) VALUES
('TJN001', 'sayang ibu', 'andi', 'bagas', 'senin', '09:00', '2021-04-05', '1');

-- --------------------------------------------------------

--
-- Table structure for table `table_panti`
--

CREATE TABLE `table_panti` (
  `id_panti` varchar(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nama_panti` varchar(255) NOT NULL,
  `alamat_panti` varchar(255) NOT NULL,
  `nomor_telepon` int(255) NOT NULL,
  `foto_panti` varchar(255) NOT NULL,
  `foto_pf` varchar(255) NOT NULL,
  `no_rek` varchar(255) NOT NULL,
  `role` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_panti`
--

INSERT INTO `table_panti` (`id_panti`, `username`, `password`, `email`, `nama_panti`, `alamat_panti`, `nomor_telepon`, `foto_panti`, `foto_pf`, `no_rek`, `role`) VALUES
('1', 'dandi', '123', 'dandi@gmail.com', 'sayang ibu', 'meruya selatan', 2147483647, 'panti.jpg', 'bagas.jpeg', '88923011', 'panti'),
('4', 'sutaryo', '123', 'sayapkami@gmail.com', 'sayap kami', 'jakarta barat', 2147483647, 'foto_panti.png', 'bapak.jpg', '88731241', 'panti'),
('PNT001', 'test', '123', 'test@gmail.com', 'test', 'test', 812344412, 'gg.jpg', 'doku.png', '86453121', 'panti');

-- --------------------------------------------------------

--
-- Table structure for table `tahapan1`
--

CREATE TABLE `tahapan1` (
  `id_th1` int(11) NOT NULL,
  `nama_adopter` varchar(255) NOT NULL,
  `nama_panti` varchar(255) NOT NULL,
  `nama_anak` varchar(255) NOT NULL,
  `hari` varchar(255) NOT NULL,
  `tgl` date NOT NULL,
  `jam` time NOT NULL,
  `tahapan1` varchar(255) NOT NULL,
  `kode` varchar(11) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tahapan1`
--

INSERT INTO `tahapan1` (`id_th1`, `nama_adopter`, `nama_panti`, `nama_anak`, `hari`, `tgl`, `jam`, `tahapan1`, `kode`, `deskripsi`) VALUES
(18, 'bagas', 'sayang ibu', 'andi', 'Senin', '2021-05-24', '14:00:00', 'tahapan1.jpg', '1', 'Pertemuan pertama dengan pihak panti asuhan');

-- --------------------------------------------------------

--
-- Table structure for table `tahapan2`
--

CREATE TABLE `tahapan2` (
  `id_th2` int(11) NOT NULL,
  `nama_adopter` varchar(255) NOT NULL,
  `nama_panti` varchar(255) NOT NULL,
  `nama_anak` varchar(255) NOT NULL,
  `hari` varchar(255) NOT NULL,
  `tgl` date NOT NULL,
  `jam` time NOT NULL,
  `tahapan2` varchar(255) NOT NULL,
  `kode` varchar(11) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tahapan2`
--

INSERT INTO `tahapan2` (`id_th2`, `nama_adopter`, `nama_panti`, `nama_anak`, `hari`, `tgl`, `jam`, `tahapan2`, `kode`, `deskripsi`) VALUES
(2, 'bagas', 'sayang ibu', 'subari', 'senin', '2020-05-25', '10:00:00', 'tahapan1.jpg', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `tahapan3`
--

CREATE TABLE `tahapan3` (
  `id_th3` int(11) NOT NULL,
  `nama_adopter` varchar(255) NOT NULL,
  `nama_panti` varchar(255) NOT NULL,
  `nama_anak` varchar(255) NOT NULL,
  `hari` varchar(255) NOT NULL,
  `tgl` date NOT NULL,
  `jam` time NOT NULL,
  `tahapan3` varchar(255) NOT NULL,
  `kode` varchar(11) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tahapan3`
--

INSERT INTO `tahapan3` (`id_th3`, `nama_adopter`, `nama_panti`, `nama_anak`, `hari`, `tgl`, `jam`, `tahapan3`, `kode`, `deskripsi`) VALUES
(3, 'bagas', 'sayang ibu', 'subari', 'jumat', '2020-06-12', '10:00:00', 'tahapan1.jpg', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `tahapan4`
--

CREATE TABLE `tahapan4` (
  `id_th4` int(11) NOT NULL,
  `nama_adopter` varchar(255) NOT NULL,
  `nama_panti` varchar(255) NOT NULL,
  `nama_anak` varchar(255) NOT NULL,
  `hari` varchar(255) NOT NULL,
  `tgl` date NOT NULL,
  `jam` time NOT NULL,
  `tahapan4` varchar(255) NOT NULL,
  `kode` varchar(11) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tahapan4`
--

INSERT INTO `tahapan4` (`id_th4`, `nama_adopter`, `nama_panti`, `nama_anak`, `hari`, `tgl`, `jam`, `tahapan4`, `kode`, `deskripsi`) VALUES
(2, 'bagas', 'sayang ibu', 'subari', 'senin', '2020-06-01', '09:00:00', 'tahapan1.jpg', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `tahapan5`
--

CREATE TABLE `tahapan5` (
  `id_th5` int(11) NOT NULL,
  `nama_adopter` varchar(255) NOT NULL,
  `nama_panti` varchar(255) NOT NULL,
  `nama_anak` varchar(255) NOT NULL,
  `hari` varchar(255) NOT NULL,
  `tgl` date NOT NULL,
  `jam` time NOT NULL,
  `tahapan5` varchar(255) NOT NULL,
  `kode` varchar(11) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tahapan5`
--

INSERT INTO `tahapan5` (`id_th5`, `nama_adopter`, `nama_panti`, `nama_anak`, `hari`, `tgl`, `jam`, `tahapan5`, `kode`, `deskripsi`) VALUES
(2, 'bagas', 'sayang ibu', 'subari', 'rabu', '2020-06-03', '09:00:00', 'tahapan1.jpg', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `tahapan6`
--

CREATE TABLE `tahapan6` (
  `id_th6` int(11) NOT NULL,
  `nama_adopter` varchar(255) NOT NULL,
  `nama_panti` varchar(255) NOT NULL,
  `nama_anak` varchar(255) NOT NULL,
  `hari` varchar(255) NOT NULL,
  `tgl` date NOT NULL,
  `jam` time NOT NULL,
  `tahapan6` varchar(255) NOT NULL,
  `kode` varchar(11) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tahapan6`
--

INSERT INTO `tahapan6` (`id_th6`, `nama_adopter`, `nama_panti`, `nama_anak`, `hari`, `tgl`, `jam`, `tahapan6`, `kode`, `deskripsi`) VALUES
(2, 'bagas', 'sayang ibu', 'subari', 'jumat', '2020-06-05', '14:00:00', 'tahapan1.jpg', '1', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `archive`
--
ALTER TABLE `archive`
  ADD PRIMARY KEY (`id_archive`);

--
-- Indexes for table `donasi`
--
ALTER TABLE `donasi`
  ADD PRIMARY KEY (`id_donasi`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id_history`);

--
-- Indexes for table `table_admin`
--
ALTER TABLE `table_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `table_adopter`
--
ALTER TABLE `table_adopter`
  ADD PRIMARY KEY (`id_adopter`);

--
-- Indexes for table `table_adopter1`
--
ALTER TABLE `table_adopter1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_anak`
--
ALTER TABLE `table_anak`
  ADD PRIMARY KEY (`id_anak`);

--
-- Indexes for table `table_janji`
--
ALTER TABLE `table_janji`
  ADD PRIMARY KEY (`id_janji`);

--
-- Indexes for table `table_panti`
--
ALTER TABLE `table_panti`
  ADD PRIMARY KEY (`id_panti`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `nama_panti` (`nama_panti`);

--
-- Indexes for table `tahapan1`
--
ALTER TABLE `tahapan1`
  ADD PRIMARY KEY (`id_th1`);

--
-- Indexes for table `tahapan2`
--
ALTER TABLE `tahapan2`
  ADD PRIMARY KEY (`id_th2`);

--
-- Indexes for table `tahapan3`
--
ALTER TABLE `tahapan3`
  ADD PRIMARY KEY (`id_th3`);

--
-- Indexes for table `tahapan4`
--
ALTER TABLE `tahapan4`
  ADD PRIMARY KEY (`id_th4`);

--
-- Indexes for table `tahapan5`
--
ALTER TABLE `tahapan5`
  ADD PRIMARY KEY (`id_th5`);

--
-- Indexes for table `tahapan6`
--
ALTER TABLE `tahapan6`
  ADD PRIMARY KEY (`id_th6`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `archive`
--
ALTER TABLE `archive`
  MODIFY `id_archive` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `table_admin`
--
ALTER TABLE `table_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tahapan1`
--
ALTER TABLE `tahapan1`
  MODIFY `id_th1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tahapan2`
--
ALTER TABLE `tahapan2`
  MODIFY `id_th2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tahapan3`
--
ALTER TABLE `tahapan3`
  MODIFY `id_th3` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tahapan4`
--
ALTER TABLE `tahapan4`
  MODIFY `id_th4` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tahapan5`
--
ALTER TABLE `tahapan5`
  MODIFY `id_th5` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tahapan6`
--
ALTER TABLE `tahapan6`
  MODIFY `id_th6` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
