-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2018 at 06:16 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ujikom`
--

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `idpelanggan` char(11) NOT NULL,
  `nometer` char(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `alamat` mediumtext NOT NULL,
  `kodetarif` char(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`idpelanggan`, `nometer`, `nama`, `alamat`, `kodetarif`) VALUES
('001', '001', 'Dandy Rahmat Zain', 'Kuningan', 'R1TR22'),
('002', '002', 'Dandy RZ', 'Kuningan', 'R1TR13'),
('003', '003', 'RZ Dandy', 'Kuningan', 'R1TR13'),
('004', '004', 'Dandy', 'Kuningan', 'R1TR09'),
('005', '005', 'DRZ', 'Kuningan', 'R1TR22'),
('006', '006', 'DR.Zain', 'Kuningan', 'R1TR09'),
('007', '007', 'D.Rahmat', 'Kuningan', 'R1TR09'),
('008', '008', 'Dandy R.Zain', 'Kuningan', 'R1TR13'),
('009', '009', 'Dandy Rahmat Z', 'Kuningan', 'R3TR66'),
('010', '010', 'Dandy ZR', 'Kuningan', 'R1TR13');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `idbayar` int(11) NOT NULL,
  `idpelanggan` char(11) NOT NULL,
  `bulan` tinyint(4) NOT NULL,
  `tahun` year(4) NOT NULL,
  `tanggalbayar` date NOT NULL,
  `biayaadmin` mediumint(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`idbayar`, `idpelanggan`, `bulan`, `tahun`, `tanggalbayar`, `biayaadmin`) VALUES
(2, '002', 2, 2018, '2018-02-02', 2500),
(3, '003', 3, 2018, '2018-02-01', 2500),
(4, '004', 12, 2018, '2018-02-02', 2500),
(6, '006', 2, 2018, '2018-02-04', 2500),
(8, '008', 2, 2018, '2018-02-04', 2500),
(9, '009', 1, 2018, '2018-02-04', 2500),
(10, '010', 1, 2018, '2018-02-04', 2500);

--
-- Triggers `pembayaran`
--
DELIMITER $$
CREATE TRIGGER `update_status_bayar` AFTER INSERT ON `pembayaran` FOR EACH ROW BEGIN
UPDATE tagihan SET status='Sudah' WHERE idpelanggan=NEW.idpelanggan AND bulan=NEW.bulan AND tahun=NEW.tahun;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `penggunaan`
--

CREATE TABLE `penggunaan` (
  `idpelanggan` char(11) NOT NULL,
  `bulan` tinyint(4) NOT NULL,
  `tahun` year(4) NOT NULL,
  `meterawal` mediumint(9) NOT NULL,
  `meterakhir` mediumint(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penggunaan`
--

INSERT INTO `penggunaan` (`idpelanggan`, `bulan`, `tahun`, `meterawal`, `meterakhir`) VALUES
('001', 1, 2018, 100, 500),
('002', 2, 2018, 200, 300),
('003', 3, 2018, 500, 1000),
('004', 12, 2018, 300, 600),
('005', 3, 2018, 200, 300),
('006', 2, 2018, 100, 300),
('007', 2, 2018, 300, 1000),
('008', 2, 2018, 300, 700),
('009', 1, 2018, 1000, 8000),
('010', 1, 2018, 100, 800);

--
-- Triggers `penggunaan`
--
DELIMITER $$
CREATE TRIGGER `del_tagihan` AFTER DELETE ON `penggunaan` FOR EACH ROW BEGIN
	DELETE FROM tagihan WHERE
    idpelanggan=OLD.idpelanggan
    AND bulan=OLD.bulan
    AND tahun=OLD.tahun;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tambah_tagihan` AFTER INSERT ON `penggunaan` FOR EACH ROW BEGIN
	INSERT INTO tagihan(idpelanggan,bulan,tahun,jumlahmeter)VALUES(NEW.idpelanggan,NEW.bulan,NEW.tahun,NEW.meterakhir-NEW.meterawal);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `ubah_penggunaan` AFTER UPDATE ON `penggunaan` FOR EACH ROW BEGIN
	UPDATE tagihan SET jumlahmeter=(NEW.meterakhir=NEW.meterawal)
    WHERE
    tagihan.idpelanggan=NEW.idpelanggan AND
    tagihan.bulan=NEW.bulan AND
    tagihan.bulan=NEW.tahun;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tagihan`
--

CREATE TABLE `tagihan` (
  `idpelanggan` char(11) NOT NULL,
  `bulan` tinyint(4) NOT NULL,
  `tahun` year(4) NOT NULL,
  `jumlahmeter` mediumint(9) NOT NULL,
  `status` enum('Belum','Sudah') NOT NULL DEFAULT 'Belum'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tagihan`
--

INSERT INTO `tagihan` (`idpelanggan`, `bulan`, `tahun`, `jumlahmeter`, `status`) VALUES
('001', 1, 2018, 400, 'Belum'),
('002', 2, 2018, 100, 'Sudah'),
('003', 3, 2018, 500, 'Sudah'),
('004', 12, 2018, 300, 'Sudah'),
('005', 3, 2018, 100, 'Belum'),
('006', 2, 2018, 200, 'Sudah'),
('007', 2, 2018, 700, 'Belum'),
('008', 2, 2018, 400, 'Sudah'),
('009', 1, 2018, 7000, 'Sudah'),
('010', 1, 2018, 700, 'Sudah');

-- --------------------------------------------------------

--
-- Table structure for table `tarif`
--

CREATE TABLE `tarif` (
  `kodetarif` char(6) NOT NULL,
  `daya` mediumint(9) NOT NULL,
  `tarifperkwh` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tarif`
--

INSERT INTO `tarif` (`kodetarif`, `daya`, `tarifperkwh`) VALUES
('R1TR09', 900, 1352),
('R1TR13', 1300, 1467.52),
('R1TR22', 2200, 1467.52),
('R2TR35', 3500, 1467.52),
('R3TR66', 6600, 1467.52);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user` varchar(20) NOT NULL,
  `pass` char(32) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `level` enum('Admin','Petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user`, `pass`, `nama`, `level`) VALUES
('admin', 'admin', 'Dandy', 'Admin'),
('petugas', 'petugas', 'Dandy Rahmat Zain', 'Petugas');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_penggunaan_tagihan`
-- (See below for the actual view)
--
CREATE TABLE `v_penggunaan_tagihan` (
`idpelanggan` char(11)
,`nometer` char(11)
,`nama` varchar(150)
,`alamat` mediumtext
,`kodetarif` char(6)
,`tarifperkwh` float
,`bulan` tinyint(4)
,`tahun` year(4)
,`meterawal` mediumint(9)
,`meterakhir` mediumint(9)
,`jumlahmeter` mediumint(9)
,`status` enum('Belum','Sudah')
,`total_tagihan` double(19,2)
);

-- --------------------------------------------------------

--
-- Structure for view `v_penggunaan_tagihan`
--
DROP TABLE IF EXISTS `v_penggunaan_tagihan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_penggunaan_tagihan`  AS  select `pelanggan`.`idpelanggan` AS `idpelanggan`,`pelanggan`.`nometer` AS `nometer`,`pelanggan`.`nama` AS `nama`,`pelanggan`.`alamat` AS `alamat`,`pelanggan`.`kodetarif` AS `kodetarif`,`tarif`.`tarifperkwh` AS `tarifperkwh`,`penggunaan`.`bulan` AS `bulan`,`penggunaan`.`tahun` AS `tahun`,`penggunaan`.`meterawal` AS `meterawal`,`penggunaan`.`meterakhir` AS `meterakhir`,`tagihan`.`jumlahmeter` AS `jumlahmeter`,`tagihan`.`status` AS `status`,round((`tagihan`.`jumlahmeter` * `tarif`.`tarifperkwh`),2) AS `total_tagihan` from (((`pelanggan` join `tarif` on((`tarif`.`kodetarif` = `pelanggan`.`kodetarif`))) join `penggunaan` on((`penggunaan`.`idpelanggan` = `pelanggan`.`idpelanggan`))) join `tagihan` on((`tagihan`.`idpelanggan` = `pelanggan`.`idpelanggan`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`idpelanggan`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`idbayar`);

--
-- Indexes for table `penggunaan`
--
ALTER TABLE `penggunaan`
  ADD PRIMARY KEY (`idpelanggan`,`bulan`,`tahun`);

--
-- Indexes for table `tagihan`
--
ALTER TABLE `tagihan`
  ADD PRIMARY KEY (`idpelanggan`);

--
-- Indexes for table `tarif`
--
ALTER TABLE `tarif`
  ADD PRIMARY KEY (`kodetarif`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `idbayar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
