-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Mar 2021 pada 12.03
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_penjualan_barang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `kode_barcode` varchar(50) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `satuan` varchar(50) NOT NULL,
  `harga_beli` varchar(11) NOT NULL,
  `stok` varchar(20) NOT NULL,
  `harga_jual` varchar(20) NOT NULL,
  `profit` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`kode_barcode`, `nama_barang`, `satuan`, `harga_beli`, `stok`, `harga_jual`, `profit`) VALUES
('0999871445289', 'Buku', 'PACK', '100000', '8', '2000000', '1900000'),
('23467045658768', 'Pepsodent', 'LUSIN', '10000', '2', '20000', '10000'),
('2366528905', 'test1234', 'LUSIN', '50000', '6', '200000', '150000'),
('554389002457', 'Galon', 'PCS', '25000', '4', '50000', '25000'),
('76981039475822', 'Roti', 'PACK', '12000', '0', '15000', '3000'),
('8995757412003', 'ENVELOPE', 'PACK', '8000', '5', '12000', '4000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_konsumen`
--

CREATE TABLE `tb_konsumen` (
  `kode_konsumen` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `alamat_kecamatan` varchar(150) NOT NULL,
  `telpon` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_konsumen`
--

INSERT INTO `tb_konsumen` (`kode_konsumen`, `nama`, `alamat`, `alamat_kecamatan`, `telpon`, `email`) VALUES
(1, 'Lutri', 'Villa Sentosa', 'ggfgfgfhhg', '5354545', 'lutriveflina@gmail.com'),
(2, 'Ayunda', 'jakarta selatan', '6yrytryrtyrtr', '376800455787', 'ayunda@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pembelian`
--

CREATE TABLE `tb_pembelian` (
  `kode_pembelian` int(11) NOT NULL,
  `nofaktur` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_supplier` varchar(20) NOT NULL,
  `nama_barang` varchar(150) NOT NULL,
  `kode_barcode` varchar(50) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pembelian`
--

INSERT INTO `tb_pembelian` (`kode_pembelian`, `nofaktur`, `tanggal`, `nama_supplier`, `nama_barang`, `kode_barcode`, `stok`) VALUES
(5, 'TP001', '2019-03-29', 'PT. Cemilan Sentosa', 'ffffff', 'ENVELOPE', 3),
(7, 'TP002', '2019-03-29', 'PT. Jaya Sentosa', 'hgfhghfghhh', 'SAMBAL ABC 123', 1),
(8, 'TP003', '2019-03-28', 'PT. Jaya Sentosa', '', 'SAMBAL ABC ', 1),
(9, 'TP005', '2019-03-15', 'PT. Cemilan Sentosa', '', 'Roti', 1),
(10, 'TP004', '2019-03-13', 'PT. Jaya Sentosa', '', 'ENVELOPE', 1),
(11, 'TP006', '2019-04-01', 'PT.Bahagia Selalu', '', 'Buku', 1),
(12, 'TP007', '2019-04-01', 'PT. Jaya Sentosa', '', '23467045658768', 1),
(13, 'TP0011', '2019-04-25', 'PT. Cemilan Sentosa', '', '23467045658768', 3),
(14, 'TP006', '2019-04-29', 'PT. Cemilan Sentosa', '', '8995757412003', 5),
(15, 'TP008', '2019-05-02', 'PT. Cemilan Sentosa', '', '0999871445289', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_podaily`
--

CREATE TABLE `tb_podaily` (
  `kode_penjualan` int(11) NOT NULL,
  `tanggal` varchar(16) NOT NULL,
  `id_konsumen` varchar(17) NOT NULL,
  `bayar` varchar(20) NOT NULL,
  `kembali` varchar(20) NOT NULL,
  `nama_po` varchar(100) NOT NULL,
  `nama_toko` varchar(100) NOT NULL,
  `item_list` varchar(100) NOT NULL,
  `qty` int(20) NOT NULL,
  `unit` varchar(30) NOT NULL,
  `harga` int(20) NOT NULL,
  `jml_tag` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_podaily`
--

INSERT INTO `tb_podaily` (`kode_penjualan`, `tanggal`, `id_konsumen`, `bayar`, `kembali`, `nama_po`, `nama_toko`, `item_list`, `qty`, `unit`, `harga`, `jml_tag`) VALUES
(1, '20/04/2021', '1', '100000', '36000', 'gfhfhjgjghjh', 'ghjghjhgjh', 'ghjhgjgh', 6, '66', 8, 5000),
(10, '545545', '', '', '', 'sddssd', 'dvcxvcx', '', 0, '66', 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_supplier`
--

CREATE TABLE `tb_supplier` (
  `id` int(11) NOT NULL,
  `nama_supplier` varchar(20) NOT NULL,
  `tlp` varchar(12) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_supplier`
--

INSERT INTO `tb_supplier` (`id`, `nama_supplier`, `tlp`, `alamat`) VALUES
(1, 'PT. Cemilan Sentosa', '9499959944', 'jakarta'),
(2, 'PT.Bahagia Selalu', '9599599549', 'padang'),
(3, 'PT. Jaya Sentosa', '959959955', 'padang barat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `name`, `password`, `level`) VALUES
(1, 'nesa', 'nesa', '123', 'kasir'),
(2, 'dimas', 'dimas', '123', 'kasir');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`kode_barcode`);

--
-- Indeks untuk tabel `tb_konsumen`
--
ALTER TABLE `tb_konsumen`
  ADD PRIMARY KEY (`kode_konsumen`);

--
-- Indeks untuk tabel `tb_pembelian`
--
ALTER TABLE `tb_pembelian`
  ADD PRIMARY KEY (`kode_pembelian`);

--
-- Indeks untuk tabel `tb_podaily`
--
ALTER TABLE `tb_podaily`
  ADD PRIMARY KEY (`kode_penjualan`);

--
-- Indeks untuk tabel `tb_supplier`
--
ALTER TABLE `tb_supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_konsumen`
--
ALTER TABLE `tb_konsumen`
  MODIFY `kode_konsumen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_pembelian`
--
ALTER TABLE `tb_pembelian`
  MODIFY `kode_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tb_podaily`
--
ALTER TABLE `tb_podaily`
  MODIFY `kode_penjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_supplier`
--
ALTER TABLE `tb_supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
