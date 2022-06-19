-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2022 at 04:12 AM
-- Server version: 10.4.21-MariaDB-log
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sism`
--

-- --------------------------------------------------------

--
-- Table structure for table `disposisi`
--

CREATE TABLE `disposisi` (
  `idDisposisi` int(11) NOT NULL,
  `sifatDisposisi` varchar(15) DEFAULT NULL,
  `tanggalDisposisi` date DEFAULT NULL,
  `tujuanDisposisi` varchar(30) DEFAULT NULL,
  `keteranganDisposisi` varchar(100) DEFAULT NULL,
  `idSuratMasuk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `disposisi`
--

INSERT INTO `disposisi` (`idDisposisi`, `sifatDisposisi`, `tanggalDisposisi`, `tujuanDisposisi`, `keteranganDisposisi`, `idSuratMasuk`) VALUES
(1, 'Sangat Penting', '2022-06-19', 'Siapkan Laporan', 'Test', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `idPengguna` int(11) NOT NULL,
  `namaPengguna` varchar(30) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`idPengguna`, `namaPengguna`, `jabatan`, `username`, `password`) VALUES
(1, 'User 1', 'Master', 'master', 'master'),
(2, 'User 2', 'Admin Web', 'admin', 'admin'),
(3, 'User 3', 'Manager', 'manager', 'manager'),
(4, 'User 4', 'Staf Administrasi', 'staf', 'staf'),
(5, 'User 5', 'Karyawan', 'karyawan', 'karyawan');

-- --------------------------------------------------------

--
-- Table structure for table `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `idSuratKeluar` int(11) NOT NULL,
  `perihalSuratKeluar` varchar(30) NOT NULL,
  `tujuanSuratKeluar` varchar(30) NOT NULL,
  `tanggalSuratKeluar` date NOT NULL,
  `fileSuratKeluar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `surat_keluar`
--

INSERT INTO `surat_keluar` (`idSuratKeluar`, `perihalSuratKeluar`, `tujuanSuratKeluar`, `tanggalSuratKeluar`, `fileSuratKeluar`) VALUES
(1, 'Surat Keputusan Kerjasama', 'PT. Aman Jaya', '2022-06-19', 'Contoh File Surat Keluar 1.docx');

-- --------------------------------------------------------

--
-- Table structure for table `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `idSuratMasuk` int(11) NOT NULL,
  `perihalSuratMasuk` varchar(30) NOT NULL,
  `asalSuratMasuk` varchar(30) NOT NULL,
  `tanggalSuratMasuk` date NOT NULL,
  `fileSuratMasuk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `surat_masuk`
--

INSERT INTO `surat_masuk` (`idSuratMasuk`, `perihalSuratMasuk`, `asalSuratMasuk`, `tanggalSuratMasuk`, `fileSuratMasuk`) VALUES
(1, 'Surat Keputusan', 'PT. Budi Abadi', '2022-06-19', 'Contoh File Surat Masuk 1.docx'),
(2, 'Persetujuan', 'PT. Maju Jaya', '2022-06-19', 'Contoh File Surat Masuk 2.docx');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `disposisi`
--
ALTER TABLE `disposisi`
  ADD PRIMARY KEY (`idDisposisi`),
  ADD KEY `FK_DisposisiSuratMasuk` (`idSuratMasuk`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`idPengguna`);

--
-- Indexes for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD PRIMARY KEY (`idSuratKeluar`);

--
-- Indexes for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`idSuratMasuk`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `disposisi`
--
ALTER TABLE `disposisi`
  ADD CONSTRAINT `FK_DisposisiSuratMasuk` FOREIGN KEY (`idSuratMasuk`) REFERENCES `surat_masuk` (`idSuratMasuk`),
  ADD CONSTRAINT `disposisi_ibfk_1` FOREIGN KEY (`idDisposisi`) REFERENCES `pengguna` (`idPengguna`);

--
-- Constraints for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD CONSTRAINT `surat_keluar_ibfk_1` FOREIGN KEY (`idSuratKeluar`) REFERENCES `pengguna` (`idPengguna`);

--
-- Constraints for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD CONSTRAINT `surat_masuk_ibfk_1` FOREIGN KEY (`idSuratMasuk`) REFERENCES `pengguna` (`idPengguna`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
