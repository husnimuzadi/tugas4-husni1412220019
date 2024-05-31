-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 31, 2024 at 11:49 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_cat`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `ID_Barang` int NOT NULL,
  `Kode_Barang` varchar(10) DEFAULT NULL,
  `Nama_Barang` varchar(100) DEFAULT NULL,
  `Kategori_Barang` varchar(50) DEFAULT NULL,
  `Deskripsi_Barang` text,
  `Harga_Jual` decimal(10,2) DEFAULT NULL,
  `Stok_Barang` int DEFAULT NULL,
  `Supplier_Barang` varchar(100) DEFAULT NULL,
  `Tanggal_Masuk` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`ID_Barang`, `Kode_Barang`, `Nama_Barang`, `Kategori_Barang`, `Deskripsi_Barang`, `Harga_Jual`, `Stok_Barang`, `Supplier_Barang`, `Tanggal_Masuk`) VALUES
(6, 'CAT001', 'Catylac Emulsion Paint', 'Cat Dinding', 'Cat dinding interior tahan lama, cepat kering.', '150.00', 100, 'PT Warna Indah', '2024-05-01'),
(7, 'CAT002', 'Nippon Paint Weatherbond', 'Cat Eksterior', 'Cat eksterior tahan cuaca.', '200.00', 80, 'PT Warna Maju', '2024-05-05'),
(8, 'CAT003', 'Dulux Gloss Finish', 'Cat Kayu', 'Cat kayu berkualitas tinggi.', '180.00', 0, 'PT Warna Jaya', '2024-05-10'),
(9, 'CAT004', 'Avian Paint Roof Coating', 'Cat Atap', 'Cat atap anti-bocor.', '220.00', 120, 'PT Warna Sejahtera', '2024-05-15'),
(10, 'CAT005', 'Jotun Majestic True Beauty', 'Cat Interior', 'Cat interior kehalusan tinggi.', '190.00', 60, 'PT Warna Berkah', '2024-05-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`ID_Barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `ID_Barang` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
