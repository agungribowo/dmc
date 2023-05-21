-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11 Des 2017 pada 09.12
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dmc`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `kodeadmin` int(11) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`kodeadmin`, `UserName`, `Password`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_konsumen`
--

CREATE TABLE `tbl_konsumen` (
  `IdKonsumen` varchar(11) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `NamaDepan` varchar(20) NOT NULL,
  `NamaBelakang` varchar(20) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `Kota` varchar(20) NOT NULL,
  `Provinsi` varchar(20) NOT NULL,
  `KodePos` varchar(10) NOT NULL,
  `Telepon` varchar(12) NOT NULL,
  `Gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_konsumen`
--

INSERT INTO `tbl_konsumen` (`IdKonsumen`, `UserName`, `Password`, `Email`, `NamaDepan`, `NamaBelakang`, `Alamat`, `Kota`, `Provinsi`, `KodePos`, `Telepon`, `Gambar`) VALUES
('K0001', 'Dera', 'b82b7072688b6f15d630dad7e6ca4f74c805b2ee', 'dera@mail.com', 'Dera', 'Meili', 'jl. dasadarma', 'Bekasi', 'Jawa Barat', '17118', '092324345346', '-'),
('K0002', 'hani', 'b01e8d072c3111c943c73c2550eeb869e805a3c3', 'hani@mail.com', 'Hani', 'Fisti', 'Jl. Kurawa', 'Jakarta', 'Jakarta', '10000', '098329887710', '-'),
('K0003', 'dedy', '38a914ffa74746658ba166d91149753d32d0650b', 'dendy@mail.com', 'Dedy', 'Dermawan', 'Jl. Kemangi 5', 'Jakarta', 'Jakarta', '14003', '089654322221', '-'),
('K0004', 'susi', 'd62d29b9b7878f90bfa3af0ab45db6e918aa4c00', 'susi@mail.com', 'Susi', 'Susan', 'Jl. Tarawang', 'Bekasi', 'Jawa Barat', '17113', '096785856744', '-'),
('K0006', 'darto', '6591c7402fd61002dce0028c2fe6ebc95f1b2aa6', 'darto@mail.com', 'Darto', 'Suhendi', 'Jl. Ramayana', 'Bekasi', 'Jawa Barat', '17118', '081324556672', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pembayaran`
--

CREATE TABLE `tbl_pembayaran` (
  `IdPembayaran` varchar(11) NOT NULL,
  `IdPemesanan` varchar(11) NOT NULL,
  `TanggalTransfer` date NOT NULL,
  `Bank` varchar(30) NOT NULL,
  `NoRekening` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pembayaran`
--

INSERT INTO `tbl_pembayaran` (`IdPembayaran`, `IdPemesanan`, `TanggalTransfer`, `Bank`, `NoRekening`) VALUES
('B0001', 'P0003', '2017-12-09', 'BRI', '719101001911234');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pemesanan`
--

CREATE TABLE `tbl_pemesanan` (
  `IdPemesanan` varchar(10) NOT NULL,
  `IdKonsumen` varchar(10) NOT NULL,
  `IdRumah` varchar(10) NOT NULL,
  `TanggalPemesanan` date NOT NULL,
  `kodeadmin` int(11) NOT NULL,
  `status` enum('Menunggu Konfirmasi','Disetujui','Ditolak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pemesanan`
--

INSERT INTO `tbl_pemesanan` (`IdPemesanan`, `IdKonsumen`, `IdRumah`, `TanggalPemesanan`, `kodeadmin`, `status`) VALUES
('P0003', 'K0001', 'R0011', '2017-12-05', 201701, 'Disetujui'),
('P0004', 'K0002', 'R0013', '2017-12-05', 201701, 'Menunggu Konfirmasi'),
('P0005', 'K0006', 'R0002', '2017-12-08', 201701, 'Menunggu Konfirmasi'),
('P0006', 'K0006', 'R0003', '2017-12-08', 201701, 'Menunggu Konfirmasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `IdRumah` varchar(10) NOT NULL,
  `TypeRumah` varchar(20) NOT NULL,
  `NamaRumah` varchar(20) NOT NULL,
  `AlamatRumah` varchar(30) NOT NULL,
  `BlokRumah` varchar(5) NOT NULL,
  `HargaRumah` varchar(20) NOT NULL,
  `GambarRumah` text,
  `KeteranganRumah` text,
  `BookingFee` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_produk`
--

INSERT INTO `tbl_produk` (`IdRumah`, `TypeRumah`, `NamaRumah`, `AlamatRumah`, `BlokRumah`, `HargaRumah`, `GambarRumah`, `KeteranganRumah`, `BookingFee`) VALUES
('R0001', '6m x 10m', 'Rumah Tapak', 'Jl. Merpati 1', 'A', '600', 'lebar_4_x_5_tipe@2x_(cluster).jpg', '-', '10jt'),
('R0002', '6m x 12m', 'Rumah Tapak', 'Jl. merbabu 4', 'A', '700', 'lebar_4_x_5_tipe@2x(baru)1.jpg', '-', '5jt'),
('R0003', '5m x 13m', 'rumah kontrakan', 'jl. Gapo', 'A', '750', 'lebar_4_x_5_tipe@2x_(cluster)1.jpg', '0', '10jt'),
('R0006', '5m x 4m', 'Rumah Tapak', 'Jl. Merapi 1', 'A', '500', 'lebar_4_x_5_tipe@2x(gaya_bali)1.jpg', '0', '10jt'),
('R0007', '5m x 4m', 'Rumah Tapak', 'Jl. Merapi 1', 'A', '500', 'lebar_4_x_5_tipe@2x.jpg', '0', '10jt'),
('R0008', '6m x 5m', 'Town House', 'Jl. Merapi 1', 'A', '700', 'lebar_5_x_6_tipe@2x.jpg', '0', '10jt'),
('R0009', '12m x 5m', 'Town House', 'Jl. Merapi 1', 'A', '800', 'lebar_5_x_6_tipe@2x1.jpg', '0', '10jt'),
('R0010', '10m x 6m', 'Town House', 'Jl. Merapi 1', 'A', '900', 'lebar_6_x_10_tipe@2x.jpg', '0', '10jt'),
('R0011', '12,5m x 6m', 'Town House', 'Jl. Merapi 1', 'A', '900', 'lebar_6_x_12,5_tipe@2x.jpg', '0', '10jt'),
('R0012', '15m x 6m', 'Town House', 'Jl. Merapi 1', 'A', '900', 'lebar_6_x_15_tipe@2x1.jpg', '0', '10jt'),
('R0013', '10m x 8m', 'Town House', 'Jl. Merapi 10', 'A', '900', 'lebar_8_x_10_tipe@2x.jpg', '0', '10jt'),
('R0014', '12,5m x 8m', 'Town House', 'Jl. Merapi 1', 'A', '800', 'lebar_8_x_12,5_tipe@2x1.jpg', '0', '10jt'),
('R0015', '22m x 12m', 'Town House', 'Jl. Merapi 12', 'A', '900', 'lebar_12_x_22_tipe@2x.jpg', '0', '10jt');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`kodeadmin`);

--
-- Indexes for table `tbl_konsumen`
--
ALTER TABLE `tbl_konsumen`
  ADD PRIMARY KEY (`IdKonsumen`);

--
-- Indexes for table `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  ADD PRIMARY KEY (`IdPembayaran`),
  ADD KEY `IdPemesanan` (`IdPemesanan`);

--
-- Indexes for table `tbl_pemesanan`
--
ALTER TABLE `tbl_pemesanan`
  ADD PRIMARY KEY (`IdPemesanan`),
  ADD KEY `IdKonsumen` (`IdKonsumen`),
  ADD KEY `IdRumah` (`IdRumah`),
  ADD KEY `kodeadmin` (`kodeadmin`);

--
-- Indexes for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`IdRumah`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  ADD CONSTRAINT `tbl_pembayaran_ibfk_1` FOREIGN KEY (`IdPemesanan`) REFERENCES `tbl_pemesanan` (`IdPemesanan`);

--
-- Ketidakleluasaan untuk tabel `tbl_pemesanan`
--
ALTER TABLE `tbl_pemesanan`
  ADD CONSTRAINT `tbl_pemesanan_ibfk_1` FOREIGN KEY (`IdKonsumen`) REFERENCES `tbl_konsumen` (`IdKonsumen`),
  ADD CONSTRAINT `tbl_pemesanan_ibfk_2` FOREIGN KEY (`IdRumah`) REFERENCES `tbl_produk` (`IdRumah`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
