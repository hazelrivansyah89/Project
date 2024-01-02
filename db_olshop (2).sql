-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2024 at 06:03 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_olshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_artikel`
--

CREATE TABLE `tbl_artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul_artikel` varchar(155) DEFAULT NULL,
  `teks_artikel` text DEFAULT NULL,
  `gambar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_artikel`
--

INSERT INTO `tbl_artikel` (`id_artikel`, `judul_artikel`, `teks_artikel`, `gambar`) VALUES
(3, 'qweqweq', 'qweqew', 'BuktiUpload1.jpg'),
(4, 'qweqweq', 'sad asdasdwqdqw wqd qw', '7286e53f38fd5846ab18f37acd1e7cbe.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(255) DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `deskripsi` mediumtext DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  `berat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_barang`
--

INSERT INTO `tbl_barang` (`id_barang`, `nama_barang`, `id_kategori`, `harga`, `deskripsi`, `gambar`, `berat`) VALUES
(9, 'jiel', 10, 1000000, 'qweqe', 'water_5.jpg', 1000),
(10, 'sepatu', 9, 23434, 'sepatu baru', 'water_36.jpg', 500),
(11, 'baju baru', 5, 23434, 'sepatu baru ', 'water_2.jpg', 600),
(12, 'barang baru', 4, 1235642, 'barang baru niiii', 'water_35.jpg', 1200),
(13, 'barang', 4, 1231233, 'sadfassdf', 'water_1.jpg', 100),
(14, 'Iphone 15', 4, 15000000, 'WebiPhone 15 Rp. 16.499.000 Cara Membeli Promosi & Cicilan Aksesori Tambahan Syarat & Ketentuan Cara Membeli Berbagai cara untuk membeli rangkaian iPhone 15 dan iPhone 15 Pro di mana pun kamu berada. Beli Online Kirim ke Rumah Pembelian dan pengiriman …', 'water_51.jpg', 400),
(15, 'Hazel Rivansyah', 4, 10000000, 'ini sepatu baru jieeellllll wleeeekkkk', 'HAZOL.JPG', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gambar`
--

CREATE TABLE `tbl_gambar` (
  `id_gambar` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `ket` varchar(255) DEFAULT NULL,
  `gambar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_gambar`
--

INSERT INTO `tbl_gambar` (`id_gambar`, `id_barang`, `ket`, `gambar`) VALUES
(6, 2, 'Gambar aw', 'water 1.jpg'),
(7, 2, 'Gambar aw', 'water 2.jpg'),
(8, 4, 'gambar aw', 'Screenshot_2023-11-20_2339584.png'),
(9, 4, 'sdd', 'yurike.jpg'),
(10, 3, 'asd', 'tengku.jpg'),
(16, 1, '232', 'faruq.jpg'),
(17, 14, '1', 'water_1.jpg'),
(18, 14, '2', 'water_2.jpg'),
(19, 14, '3', 'water_3.jpg'),
(21, 9, '1', 'HAZOL.JPG'),
(22, 9, '2', 'water_21.jpg'),
(23, 15, 'tengku', 'tengku1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'pakaian wanita'),
(3, 'perhiasan'),
(4, 'aksesoris'),
(5, 'wanita'),
(8, 'asd'),
(9, 'tawar'),
(10, 'awasdasd');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pelanggan`
--

CREATE TABLE `tbl_pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_pelanggan` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `foto` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pelanggan`
--

INSERT INTO `tbl_pelanggan` (`id_pelanggan`, `nama_pelanggan`, `email`, `password`, `foto`) VALUES
(2, 'ajel', 'ajel@gmail.com', '123', 'foto.jpg'),
(4, '123', '123@gmail.com', '12', NULL),
(9, 'hazel', 'hazel89@gmail.com', '123', 'foto.jpg'),
(12, '123', '1234@gmail.com', '123', NULL),
(13, 'hazel rivansyah', 'hazel@gmail.com', '123', 'foto.jpg'),
(14, 'udin', 'udin@gmail.com', '123', 'foto.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rekening`
--

CREATE TABLE `tbl_rekening` (
  `id_rekening` int(11) NOT NULL,
  `nama_bank` varchar(25) DEFAULT NULL,
  `no_rek` varchar(25) DEFAULT NULL,
  `atas_nama` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_rekening`
--

INSERT INTO `tbl_rekening` (`id_rekening`, `nama_bank`, `no_rek`, `atas_nama`) VALUES
(1, 'BRI', '1234-1234-1234-1234', 'hazel'),
(2, 'BNI', '4321-4341-2431-321', 'Jiel');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rinci_transaksi`
--

CREATE TABLE `tbl_rinci_transaksi` (
  `id_rinci` int(11) NOT NULL,
  `no_order` varchar(25) DEFAULT NULL,
  `id_barang` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_rinci_transaksi`
--

INSERT INTO `tbl_rinci_transaksi` (`id_rinci`, `no_order`, `id_barang`, `qty`) VALUES
(3, '231226U7U8ZGAZ', 15, 2),
(4, '231226U7U8ZGAZ', 14, 3),
(5, '23122642AJG5F0', 15, 2),
(6, '23122642AJG5F0', 14, 3),
(7, '231226WQSHA1SN', 15, 1),
(8, '231226NCDIHUMJ', 14, 1),
(9, '231226NCDIHUMJ', 13, 1),
(10, '231226NCDIHUMJ', 12, 1),
(11, '231226ROGNVHTX', 15, 1),
(12, '231226ROGNVHTX', 14, 1),
(13, '231226ROGNVHTX', 13, 1),
(14, '231227QCN3WZTT', 15, 1),
(15, '231227QCN3WZTT', 14, 1),
(16, '231227RTQAOJ1Y', 15, 1),
(17, '231227RTQAOJ1Y', 14, 1),
(18, '231227RTQAOJ1Y', 13, 1),
(19, '231229DJFJFDLM', 15, 1),
(20, '240102JHTJSUGI', 15, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_setting`
--

CREATE TABLE `tbl_setting` (
  `id` int(1) NOT NULL,
  `nama_toko` varchar(255) DEFAULT NULL,
  `lokasi` int(11) DEFAULT NULL,
  `alamat_toko` text DEFAULT NULL,
  `no_telpon` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_setting`
--

INSERT INTO `tbl_setting` (`id`, `nama_toko`, `lokasi`, `alamat_toko`, `no_telpon`) VALUES
(1, 'Hallo Water Shop 89', 152, 'jl. Patria Sari, Rumbai , Pekanbaru', '082259862066');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_pelanggan` int(11) DEFAULT NULL,
  `no_order` varchar(25) NOT NULL,
  `tgl_order` date DEFAULT NULL,
  `nama_penerima` varchar(25) DEFAULT NULL,
  `hp_penerima` varchar(15) DEFAULT NULL,
  `provinsi` varchar(25) DEFAULT NULL,
  `kota` varchar(25) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `kode_pos` varchar(8) DEFAULT NULL,
  `expedisi` varchar(255) DEFAULT NULL,
  `paket` varchar(255) DEFAULT NULL,
  `estimasi` varchar(255) DEFAULT NULL,
  `ongkir` int(11) DEFAULT NULL,
  `berat` int(11) DEFAULT NULL,
  `grand_total` int(11) DEFAULT NULL,
  `total_bayar` int(11) DEFAULT NULL,
  `status_bayar` int(1) DEFAULT NULL,
  `bukti_bayar` text DEFAULT NULL,
  `atas_nama` varchar(25) DEFAULT NULL,
  `nama_bank` varchar(25) DEFAULT NULL,
  `no_rek` varchar(25) DEFAULT NULL,
  `status_order` int(1) DEFAULT NULL,
  `no_resi` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`id_transaksi`, `id_pelanggan`, `no_order`, `tgl_order`, `nama_penerima`, `hp_penerima`, `provinsi`, `kota`, `alamat`, `kode_pos`, `expedisi`, `paket`, `estimasi`, `ongkir`, `berat`, `grand_total`, `total_bayar`, `status_bayar`, `bukti_bayar`, `atas_nama`, `nama_bank`, `no_rek`, `status_order`, `no_resi`) VALUES
(7, 9, '231226U7U8ZGAZ', '2023-12-26', 'hazel', '123123123123', 'Sumatera Barat', 'Tanah Datar', 'jl.batusangkar', '2665', 'tiki', 'ECO', '4 Hari', 114000, 3200, 65000000, 65114000, 1, 'Hello_water.png', 'hazel', 'bri', '123-123-123-123', 1, NULL),
(8, 9, '23122642AJG5F0', '2023-12-26', 'hazel', '123456789123', 'Sumatera Barat', 'Tanah Datar', 'jl.batusangkar', '2665', 'tiki', 'ECO', '4 Hari', 114000, 3200, 65000000, 65114000, 1, 'BuktiUpload1.jpg', 'hazel', 'bri', '123-123-123-123', 3, 'PDG123123123123'),
(9, 9, '231226WQSHA1SN', '2022-12-26', 'hazel', '123456789123', 'Sumatera Barat', 'Tanah Datar', 'jl.batusangkar', '2665', 'tiki', 'ECO', '4 Hari', 38000, 1000, 10000000, 10038000, 1, 'BuktiUpload.jpg', 'hazel', 'bri', '123-123-123-123', 3, 'JKT123424242323'),
(11, 2, '231226ROGNVHTX', '2023-12-26', 'ajel', '123123123123', 'Sumatera Selatan', 'Prabumulih', 'batusangakaer jl 10', '13113', 'jne', 'OKE', '3-6 Hari', 50000, 1500, 26231233, 26281233, 0, NULL, NULL, NULL, NULL, 0, NULL),
(12, 9, '231227QCN3WZTT', '2023-12-27', 'hazel', '123123123123', 'Banten', 'Lebak', 'jl.batusangkar', '2665', 'tiki', 'REG', '2-3 Hari', 36000, 1400, 25000000, 25036000, 1, 'download.png', 'hazel', 'bni', '123-123-123-123', 1, NULL),
(13, 9, '231227RTQAOJ1Y', '2023-12-27', 'hazel', '123123123123', 'Bangka Belitung', 'Bangka Barat', 'jl.batusangkar', '2665', 'jne', 'OKE', '3-6 Hari', 60000, 1500, 26231233, 26291233, 0, NULL, NULL, NULL, NULL, 0, NULL),
(14, 9, '231229DJFJFDLM', '2023-12-29', 'hazel', '123123123123', 'Banten', 'Pandeglang', 'jl.batusangkar', '2665', 'jne', 'REG', '2-3 Hari', 15000, 1000, 10000000, 10015000, 1, 'glass_water_splash_5k-3840x2160.jpg', 'hazel', 'bri', '123-123-123-123', 3, 'JKT123424242323'),
(15, 9, '240102JHTJSUGI', '2024-01-02', 'faruk', '1243123123', 'Sumatera Barat', 'Tanah Datar', 'ladkfnlksdanfp', '12312', 'jne', 'REG', '2-3 Hari', 100000, 2000, 20000000, 20100000, 1, 'BuktiUpload2.jpg', 'sadf', 'sdfd', '12312312312', 3, '1231231231');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(25) DEFAULT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL,
  `level_user` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `username`, `password`, `level_user`) VALUES
(2, 'ucup', 'user', 'user', 2),
(3, 'hazel', 'hazel89', 'hazel89', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tbl_gambar`
--
ALTER TABLE `tbl_gambar`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `tbl_rekening`
--
ALTER TABLE `tbl_rekening`
  ADD PRIMARY KEY (`id_rekening`);

--
-- Indexes for table `tbl_rinci_transaksi`
--
ALTER TABLE `tbl_rinci_transaksi`
  ADD PRIMARY KEY (`id_rinci`);

--
-- Indexes for table `tbl_setting`
--
ALTER TABLE `tbl_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_gambar`
--
ALTER TABLE `tbl_gambar`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_rekening`
--
ALTER TABLE `tbl_rekening`
  MODIFY `id_rekening` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_rinci_transaksi`
--
ALTER TABLE `tbl_rinci_transaksi`
  MODIFY `id_rinci` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
