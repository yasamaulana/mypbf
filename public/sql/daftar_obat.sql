-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2023 at 06:23 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mypbf`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_obat`
--

CREATE TABLE `daftar_obat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_obat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_obat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_industri` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sediaan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kemasan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vol` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `satuan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


--
-- Dumping data for table `daftar_obat`
--

INSERT INTO `daftar_obat` (`id`, `kode_obat`, `nama_obat`, `nama_industri`, `sediaan`, `kemasan`, `vol`, `satuan`, `status`) VALUES
(3, '20.02.10.2.0356', '0,9% SOD.CHLO.PIPIH U/OGB', '', 'Infus', 'INFUS', '500', 'Ml', 'Disetujui-'),
(4, '20.02.10.2.0368', '0.9% SOD. CHLOR. UNICAP/OGB', '', 'Infus', 'INFUS', '500', 'Ml', 'Disetujui-'),
(5, '30.00.10.2.1637', '0.9% SOD. CHLOR..UNICAP/OGB', '', 'Infus', 'BOTOL', '500', 'Ml', 'Disetujui-'),
(6, '20.02.10.2.0293', '0.9% SOD. CHLORIDA PIPIH', '', 'Infus', 'INFUS', '-', '-', 'Disetujui-'),
(7, '16.03.16.2.0409', '1 SUSUK KB PANJANG 4 CM DAN DIAMETER 2 MM', '', 'Aerosol', '-', '1', 'UNIT', 'Disetujui-'),
(8, '30.00.10.4.2901', '10% DEXTROSE OGB 500 ML', '', 'Infus', 'BOTOL', '500', 'Ml', 'Disetujui-'),
(9, '20.02.10.2.0363', '10% GLUCOSE UNICAP/OGB WB', '', 'Infus', 'BOTOL', '500', 'Ml', 'Disetujui-'),
(10, '30.00.00.4.1612', '2 JEMPOL 5 PACK/APACHE D/E', '', 'Bedak Tabur', '-', '-', '-', 'Disetujui-'),
(11, '20.02.10.1.0460', '2.5% Dex + NKO 45% Unicap', '', 'Infus', 'BOTOL', '500', 'Ml', 'Disetujui-'),
(12, '20.02.10.2.0367', '2.5% DEX+NK 0.45% UNICAP', '', 'Infus', 'INFUS', '500', 'Ml', 'Disetujui-'),
(13, '06.06.01.2.3059', '3 TC BOTOL 60 TABLET 150 MG', '', 'Tablet', 'BUNGKUS', '1', 'Mg', 'Disetujui-'),
(14, '06.06.16.2.3183', '3 TC LARUTAN MINUM BEBAS ALKOHOL BOTOL 240 ML', '', 'Aerosol', 'BOTOL', '240', 'Ml', 'Tidak Disetujui-'),
(15, '30.00.99.9.2477', '368101 - QUICKHEEL LANCET 50Ea', '', 'Serbuk kristal', '-', '50ea', '-', 'Disetujui-'),
(16, '06.06.16.2.4649', '3TC SOLUTION 10 MG/ML x 240ML', '', 'Aerosol', 'BOTOL', '240', 'Ml', 'Disetujui-'),
(17, '06.06.01.3.3943', '3TC TABLET 150MG @60 TAB', '', 'Tablet', '', '150', 'Mg', 'Disetujui-'),
(18, '06.06.01.3.3942', '3TC-HBV 100MG @28 TAB', '', 'Tablet', '', '100', 'Mg', 'Disetujui-'),
(19, '06.06.01.3.3944', '3TC-HBV 100MG ASKES(BOX/28TAB)', '', 'Tablet', '', '100', 'Mg', 'Disetujui-'),
(20, '08.04.15.2.0395', '4-EPEEDO-10 EPIRUBICIN VIAL 10MG', '', 'Injeksi/Serbuk Injeksi', 'VIAL', '10', 'Mg', 'Disetujui-'),
(21, '08.04.15.2.0396', '4-EPEEDO-50 EPIRUBICIN VIAL 50MG', '', 'Injeksi/Serbuk Injeksi', 'VIAL', '50', 'Mg', 'Disetujui-'),
(22, '30.00.10.4.2902', '5% DEXTROSE OGB 1000 ML', '', 'Infus', 'BOTOL', '1000', 'Ml', 'Disetujui-'),
(23, '20.02.10.2.0347', '5% DEXTROSE+ 0,225% SOD CHLORIDE USP', '', 'Infus', 'INFUS', '500', 'Ml', 'Disetujui-'),
(24, '20.02.10.2.0361', '5% GLUCOSE UNICAP/OGB WB', '', 'Infus', 'BOTOL', '500', 'Ml', 'Disetujui-'),
(25, '20.02.10.2.0372', '5% GLUCOSE+0.225NK UNICAP', '', 'Infus', 'INFUS', '500', 'Ml', 'Disetujui-'),
(26, '20.02.10.2.0362', '5% GLUCOSE+NK 0.9% UNICAP', '', 'Infus', 'BOTOL', '500', 'Ml', 'Disetujui-'),
(27, '20.02.10.2.0370', '5D-RS UNICAP/OGB WB', '', 'Infus', 'INFUS', '500', 'Ml', 'Disetujui-'),
(28, '19.01.10.2.0022', '6% Dextran 70 in 0,9% NaCl Btl 500 ml', '', 'Infus', 'BOTOL', '500', 'Ml', 'Disetujui-'),
(29, '30.00.00.4.1429', '97 MBL ES WET DIAM 02 WINE PINK', '', 'Bedak Tabur', '-', '-', 'Gram', 'Disetujui-'),
(30, '18.00.20.2.0002', 'A GREEN LEAF GREENTEA', 'MIDIX GRAHA FARMA', 'Cairan Luar', 'BOTOL', '15', 'Ml', 'Disetujui-'),
(31, 'P-0118', 'A GREEN LEAF HOT', 'MIDIX GRAHA FARMA', 'Cairan Luar', 'BOTOL', '10', 'Ml', 'Tidak Disetujui-'),
(32, 'P-0118', 'A GREEN LEAF LAVENDER', 'MIDIX GRAHA FARMA', 'Cairan Luar', 'BOTOL', '10', 'Ml', 'Tidak Disetujui-'),
(33, 'P-0118', 'A GREEN LEAF ORIGINAL', 'MIDIX GRAHA FARMA', 'Cairan Luar', 'BOTOL', '10', 'Ml', 'Tidak Disetujui-'),
(34, 'P-0672', 'A SCAB 30 ML', 'FAHRENHEIT (PRATAPA NIRMALA)', 'krim / Jelly', 'BOTOL', '30', 'Ml', 'Tidak Disetujui-'),
(35, '18.03.20.3.0001', 'A-BE', 'BIO KUSUMA', '', 'BOTOL', '10', 'Ml', 'Disetujui-'),
(36, '18.03.20.3.0002', 'A-BE Cairan Obat Luar 10 ml', 'BIO KUSUMA', 'Cairan Luar', 'BOTOL', '10', 'Ml', 'DisetujuiNIE tidak terdaftar di BPOM. Silahkan cek kembali NIE produk anda di cekbpom.pom.go.id atau kirimkan bukti NIE ke laporan.pbf@gmail.com'),
(37, '18.05.05.3.1760', 'A-Scabs', '', 'Suspensi', 'BOTOL', '30', 'Ml', 'Disetujui-'),
(38, '11.01.15.3.0081', 'AAFACT 1000 IU', '', 'Injeksi/Serbuk Injeksi', 'VIAL', '10 ml', 'UI/Ml', 'Disetujui-'),
(39, '11.01.15.3.0080', 'AAFACT 500 IU', '', 'Injeksi/Serbuk Injeksi', 'VIAL', '5 ml', 'UI/Ml', 'Disetujui-'),
(40, '23.04.01.2.0238', 'AB-CHOZEPAM TABLET', '', 'Tablet', 'BUNGKUS', '1', 'Mg', 'Disetujui-'),
(41, '23.01.01.2.0007', 'AB-MEROXID TABLET', '', 'Tablet', 'BUNGKUS', '1', 'Mg', 'Disetujui-'),
(42, '23.02.01.2.0126', 'AB-MIRAZIN TABLET', '', 'Tablet', 'BUNGKUS', '1', 'Mg', 'Disetujui-'),
(43, '11.01.01.3.0046', 'AB-VASK 10 MG', '', 'Tablet', 'STRIP', '10', 'Mg', 'Disetujui-'),
(44, '11.01.01.3.0041', 'AB-VASK 5 MG TAB', '', 'Tablet', '', '5 MG', 'Mg', 'Disetujui-'),
(45, '01.02.02.2.0540', 'ABAJOS DOS 10 X 10 KAPSUL', '', 'Capsul', '-', '-', 'Mcg', 'Disetujui-'),
(46, '06.02.01.2.0150', 'ABAKTAL BOTOL 10 TABLET', '', 'Tablet', 'BUNGKUS', '1', 'Mg', 'Disetujui-'),
(47, '06.00.02.2.4900', 'abamox', '', 'Capsul', '', '500', 'Mg', 'Disetujui-'),
(48, '06.02.04.2.1657', 'ABAMOX 60 ML', '', 'Sirop/Sirop Kering', 'BOTOL', '60', 'Ml', 'Disetujui-'),
(49, '06.02.02.2.0657', 'ABAMOX KAPSUL 250 MG', '', 'Capsul', 'DULCET', '250', 'Mg', 'Disetujui-'),
(50, '06.02.02.2.0658', 'ABAMOX KAPSUL 500 MG', '', 'Capsul', 'DULCET', '500', 'Mg', 'Disetujui-'),
(51, '30.00.00.4.2935', 'ABATE 1 GR', '', 'Bedak Tabur', 'BUNGKUS', '10', 'Gram', 'Disetujui-'),
(52, '30.00.01.2.0020', 'ABATRIM TABLET 480 MG', '', 'Tablet', 'BUNGKUS', '480', 'Mg', 'Disetujui-'),
(53, '06.00.04.3.5074', 'Abbot sirup 30 ml mg/ml', '', 'Sirop/Sirop Kering', 'BOTOL', '30 ml', 'Mg/Ml', 'Disetujui-'),
(54, '06.00.04.3.5075', 'Abbotic 125mg/30ml sirup 30ml 125mg/ml', '', 'Sirop/Sirop Kering', 'BOTOL', '30 ml', 'Mg/Ml', 'Disetujui-'),
(55, '06.02.04.2.1658', 'ABBOTIC 30 ML SIROP KERING', '', 'Sirop/Sirop Kering', '', '15', 'Mcg', 'Disetujui-'),
(56, '06.02.04.2.1659', 'ABBOTIC 60 ML SIROP KERING', '', 'Sirop/Sirop Kering', '', '15', 'Mcg', 'Disetujui-'),
(57, '06.02.01.2.0151', 'ABBOTIC FILMTAB 500 MG X 30', '', 'Tablet', 'BUNGKUS', '1', 'Mg', 'Disetujui-'),
(58, '06.02.04.3.3267', 'ABBOTIC GRANULES 250 MG / 50 ML', '', 'Sirop/Sirop Kering', 'BOTOL', '50', 'Mg/Ml', 'Disetujui-'),
(59, '06.02.04.2.1660', 'ABBOTIC GRANULES 30 ML', '', 'Sirop/Sirop Kering', 'BOTOL', '30', 'Ml', 'Disetujui-'),
(60, '06.02.04.2.1661', 'ABBOTIC GRANULES 60 ML', '', 'Sirop/Sirop Kering', 'BOTOL', '60', 'Ml', 'Disetujui-'),
(61, '06.02.15.2.2242', 'ABBOTIC IV', '', 'Injeksi/Serbuk Injeksi', 'BOTOL', '500', 'Ml', 'Disetujui-'),
(62, '06.02.04.2.1662', 'ABBOTIC SIRUP KERING 125/5 ML X 30 ML X 1', '', 'Sirop/Sirop Kering', 'BOTOL', '30', 'Ml', 'Disetujui-'),
(63, '06.02.04.2.1663', 'ABBOTIC SIRUP KERING 60 ML X 1', '', 'Sirop/Sirop Kering', 'BOTOL', '60', 'Ml', 'Disetujui-'),
(64, '06.02.01.2.0152', 'ABBOTIC TABLET 250 MG', '', 'Tablet', 'BUNGKUS', '1', 'Mg', 'Disetujui-'),
(65, '06.02.01.2.0153', 'ABBOTIC TABLET 500 MG', '', 'Tablet', 'AMPUL', '-', 'Mcg', 'Disetujui-'),
(66, '06.02.01.2.0154', 'ABBOTIC XL FILMTAB 500 MG X 10', '', 'Tablet', 'BUNGKUS', '1', 'Mg', 'Disetujui-'),
(67, '06.02.01.2.0155', 'ABBOTIC XL TABLET', '', 'Tablet', 'AMPUL', '-', 'Mcg', 'Disetujui-'),
(68, '06.03.01.2.2654', 'ABBUTOL DOS 100 TABLET 250 MG', '', 'Tablet', 'BUNGKUS', '1', 'Mg', 'Disetujui-'),
(69, '06.03.01.2.2655', 'ABBUTOL DOS 100 TABLET 500 MG', '', 'Tablet', 'BUNGKUS', '1', 'Mg', 'Disetujui-'),
(70, '29.00.04.3.3186', 'ABC', 'AFIFARMA', 'Sirop/Sirop Kering', 'BOTOL', '60', 'Ml', 'Disetujui-'),
(71, '29.00.09.2.0901', 'ABDEC', '', 'Tetes Mulut/Drops', 'KANTONG PLASTIK', '15', 'Ml', 'Disetujui-'),
(72, '29.00.09.2.0902', 'ABDELYN', '', 'Tetes Mulut/Drops', 'KANTONG PLASTIK', '10', 'Ml', 'Disetujui-'),
(73, '26.03.04.2.0779', 'ABDICOLD SIROP 60 ML', '', 'Sirop/Sirop Kering', 'BOTOL', '60', 'Ml', 'Disetujui-'),
(74, '01.02.01.2.0057', 'ABDIFLAM DUS 50 TABLET 50 MG', '', 'Tablet', 'BUNGKUS', '1', 'Mg', 'Disetujui-'),
(75, '01.02.01.2.0058', 'ABDIFLAM TABLET 25 MG', '', 'Tablet', 'BUNGKUS', '1', 'Mg', 'Disetujui-'),
(76, '06.02.15.2.2243', 'ABDIMOX 10 VIAL INJEKSI X 1 G/VIAL', '', 'Injeksi/Serbuk Injeksi', 'BOTOL TETES', '1', 'Gram', 'Disetujui-'),
(77, '06.02.03.2.1315', 'ABDIMOX DOS 10 X 10 KAPLET 500 MG', '', 'Kaplet', 'DULCET', '500', 'Mg', 'Disetujui-'),
(78, '06.02.03.2.1316', 'ABDIPEN KAPLET 500 MG', '', 'Kaplet', 'DROPS', '1', 'UI/Ml', 'Disetujui-'),
(79, '16.02.01.2.0040', 'ABENON DOS 100 TABLET', '', 'Tablet', 'BUNGKUS', '5', 'Mg', 'Disetujui-'),
(80, '01.02.03.2.0730', 'ABFENDOL KAPLET 250 MG', '', 'Kaplet', 'DROPS', '1', 'UI/Ml', 'Disetujui-'),
(81, '01.02.03.2.0731', 'ABFENDOL KAPLET 500 MG', '', 'Kaplet', 'DROPS', '1', 'UI/Ml', 'Disetujui-'),
(82, '30.00.01.3.1758', 'ABILIFY 10 MG', '', 'Tablet', '', '10', 'Mg', 'Disetujui-'),
(83, '23.04.01.3.0385', 'ABILIFY 10 MG 10 TAB', '', 'Tablet', 'STRIP', '10', 'Mg', 'Disetujui-'),
(84, '30.00.01.3.1759', 'ABILIFY 15 MG', '', 'Tablet', '', '15', 'Mg', 'Disetujui-'),
(85, '23.04.01.3.0387', 'ABILIFY 15 MG 10 TAB', '', 'Tablet', 'STRIP', '15', 'Mg', 'Disetujui-'),
(86, '23.06.01.2.0401', 'ABILIFY 5 MG', '', 'Tablet', 'STRIP', '5', 'Mg', 'Disetujui-'),
(87, '23.04.01.3.0383', 'ABILIFY 5 MG 10 TAB', '', 'Tablet', 'STRIP', '5', 'Mg', 'Disetujui-'),
(88, '30.01.15.4.2822', 'ABILIFY DISCMELT 10 MG', '', 'Injeksi/Serbuk Injeksi', 'BUNGKUS', '10', 'Mg', 'Disetujui-'),
(89, '30.01.01.4.2823', 'ABILIFY DISCMELT 15 MG', '', 'Tablet', 'BUNGKUS', '15', 'Mg', 'Disetujui-'),
(90, '23.04.15.3.0413', 'ABILIFY INJECTION', '', 'Injeksi/Serbuk Injeksi', 'VIAL', '1,3', 'Ml', 'Disetujui-'),
(91, 'P-0672', 'ABILIFY ORAL SOLUTION', 'OTSUKA INDONESIA', 'Sirop/Sirop Kering', 'BOTOL', '150', 'Ml', 'Tidak Disetujui-'),
(92, '23.04.05.3.0564', 'ABILIFY ORAL SULUTION', '', 'Suspensi', 'BOTOL', '150', 'Ml', 'Disetujui-'),
(93, '08.05.15.3.0392', 'Abingem 200 Mg Injeksi', '', 'Injeksi/Serbuk Injeksi', 'VIAL', '200', 'Mg', 'Disetujui-'),
(94, '08.05.15.2.0397', 'ABINGEM GEMCITABINE VIAL 200 MG', '', 'Injeksi/Serbuk Injeksi', 'VIAL', '200', 'Mg', 'Tidak Disetujui-'),
(95, '08.05.15.2.0401', 'ABINGEM-1000MG GEMCITABINE INJ', '', 'Injeksi/Serbuk Injeksi', 'VIAL', '1000', 'Mg', 'Tidak Disetujui-'),
(96, '30.00.10.2.0001', 'ABIROM INJEKSI', 'PYRIDAM FARMA TBK', 'Infus', 'VIAL', '-', 'Ml', 'Disetujui-'),
(97, '09.01.01.3.0070', 'ABIXA 10 MG TAB', '', 'Tablet', '', '10', 'Mg', 'Disetujui-'),
(98, '06.00.02.3.4777', 'ABIXIM CAPS 200MG', '', 'Capsul', 'STRIP', '200', 'Mg', 'Disetujui-'),
(99, '06.02.04.2.4675', 'ABIXIM DS 30 ML', '', 'Sirop/Sirop Kering', 'BOTOL', '30', 'Ml', 'Disetujui-'),
(100, '06.02.02.2.4676', 'ABIXIM KAPSUL 100MG', '', 'Capsul', 'STRIP', '100', 'Gram', 'Disetujui-');



--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_obat`
--
ALTER TABLE `daftar_obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_obat`
--
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
