#
# TABLE STRUCTURE FOR: admin
#

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` text,
  `status` int(1) DEFAULT NULL,
  `id_penduduk` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `akses` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO `admin` (`id_admin`, `username`, `password`, `status`, `id_penduduk`, `akses`) VALUES ('2', 'admin1', 'e00cf25ad42683b3df678c61f42c6bda', '1', '2018-02-23 19:59:55', '1');
INSERT INTO `admin` (`id_admin`, `username`, `password`, `status`, `id_penduduk`, `akses`) VALUES ('9', 'admin22', '1341215dbe9acab4361fd6417b2b11bc', '1', '2018-02-23 20:04:55', '2');
INSERT INTO `admin` (`id_admin`, `username`, `password`, `status`, `id_penduduk`, `akses`) VALUES ('10', 'mul', '353942263d1bedfbe06b7bfa78226253', '1', '2018-02-24 14:24:36', '1');


#
# TABLE STRUCTURE FOR: agama
#

DROP TABLE IF EXISTS `agama`;

CREATE TABLE `agama` (
  `id_agama` varchar(10) NOT NULL,
  `agama` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_agama`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `agama` (`id_agama`, `agama`) VALUES ('000000001', 'Islam');
INSERT INTO `agama` (`id_agama`, `agama`) VALUES ('000000002', 'Kristen');
INSERT INTO `agama` (`id_agama`, `agama`) VALUES ('000000003', 'Katholik');
INSERT INTO `agama` (`id_agama`, `agama`) VALUES ('000000004', 'Hindu');
INSERT INTO `agama` (`id_agama`, `agama`) VALUES ('000000005', 'Budha');
INSERT INTO `agama` (`id_agama`, `agama`) VALUES ('000000006', 'Khonghucu');


#
# TABLE STRUCTURE FOR: desa
#

DROP TABLE IF EXISTS `desa`;

CREATE TABLE `desa` (
  `desa` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `about` text,
  PRIMARY KEY (`desa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `desa` (`desa`, `kecamatan`, `kabupaten`, `about`) VALUES ('TAEH BARUAH', 'PAYAKUMBUH', 'LIMA PULUH KOTA', 'TAEH BARUAH MERUPAKAN DESA YANG SANGAT INDAH, DI DESA TAEH BARUAH ADA WALI NAGARI YANG SIAP MENDATA SEMUA WARGA DI TAEH BARUAH');


#
# TABLE STRUCTURE FOR: kategori
#

DROP TABLE IF EXISTS `kategori`;

CREATE TABLE `kategori` (
  `id_kategori` varchar(30) NOT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES ('000000001', 'TK');
INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES ('000000002', 'SD');
INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES ('000000003', 'SMP / MTS');
INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES ('000000004', 'SMA / SMK');
INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES ('000000005', 'KULIAH');
INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES ('000000006', 'TIDAK SEKOLAH');


#
# TABLE STRUCTURE FOR: kk
#

DROP TABLE IF EXISTS `kk`;

CREATE TABLE `kk` (
  `id_kk` varchar(20) NOT NULL,
  `no_kk` varchar(50) DEFAULT NULL,
  `rt` varchar(5) DEFAULT NULL,
  `rw` varchar(5) DEFAULT NULL,
  `kk` varchar(30) DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id_kk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `kk` (`id_kk`, `no_kk`, `rt`, `rw`, `kk`, `status`) VALUES ('000000001', '15992072516', '05', '20', '09276576', '1');


#
# TABLE STRUCTURE FOR: penduduk
#

DROP TABLE IF EXISTS `penduduk`;

CREATE TABLE `penduduk` (
  `nik` varchar(100) NOT NULL,
  `nama` varchar(150) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` varchar(10) DEFAULT NULL,
  `jk` varchar(10) DEFAULT NULL,
  `golongan_darah` varchar(5) DEFAULT NULL,
  `alamat` text,
  `pekerjaan` text,
  `kewarganegaraan` varchar(50) DEFAULT NULL,
  `id_agama` varchar(30) DEFAULT NULL,
  `id_kk` varchar(50) DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `id_kategori` varchar(222) NOT NULL,
  PRIMARY KEY (`nik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `penduduk` (`nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jk`, `golongan_darah`, `alamat`, `pekerjaan`, `kewarganegaraan`, `id_agama`, `id_kk`, `foto`, `status`, `id_kategori`) VALUES ('09276576', 'SILFIA1', 'PAYAKUMBUH1', '04/01/2018', 'Laki-laki', 'O', 'TAEH', 'MANTAP', 'INDONESIA', '000000002', '000000001', 'uploadfoto2018021106453609276576.jpeg', '1', 'TK');
INSERT INTO `penduduk` (`nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jk`, `golongan_darah`, `alamat`, `pekerjaan`, `kewarganegaraan`, `id_agama`, `id_kk`, `foto`, `status`, `id_kategori`) VALUES ('2316', '682', '678', '11/02/2018', 'Laki-laki', 'A', 'DSA', 'HDJKS', 'INDONESIA', '000000003', '000000001', 'uploadfoto201802110706042316.jpeg', '1', 'TIDAK SEKOLAH');


