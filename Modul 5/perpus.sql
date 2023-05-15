SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `judul_buku` varchar(500) DEFAULT NULL,
  `penulis` varchar(500) DEFAULT NULL,
  `penerbit` varchar(250) DEFAULT NULL,
  `tahun_terbit` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `buku` (`id_buku`, `judul_buku`, `penulis`, `penerbit`, `tahun_terbit`) VALUES
(1, 'Janji gk ?', 'prot', 'njirmedia', 1945),
(3, 'TwiceLand', 'JYP', 'JYPEntertainment', 2022);

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `nama_member` varchar(250) DEFAULT NULL,
  `nomor_member` varchar(15) DEFAULT NULL,
  `password` varchar(45) NOT NULL,
  `alamat` text DEFAULT NULL,
  `tgl_mendaftar` datetime DEFAULT NULL,
  `tgl_terakhir_bayar` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `member` (`id_member`, `nama_member`, `nomor_member`, `password`, `alamat`, `tgl_mendaftar`, `tgl_terakhir_bayar`) VALUES
(1, 'UwU', '20108173', 'pass1234', 'test1', '2022-04-30 11:31:37', '2022-05-07'),
(2, 'wew', '20108172', 'punya123', 'gang', '2022-04-30 11:31:37', '2022-05-06'),
(37, 'OmO', 'A1-221133', 'member22', 'deded', '2022-05-22 12:52:05', '2022-05-25');

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `tgl_peminjaman` date DEFAULT NULL,
  `tgl_kembali` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `peminjaman` (`id_peminjaman`, `tgl_peminjaman`, `tgl_kembali`) VALUES
(1, '2022-05-09', '2022-05-10');

ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);


ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

-
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`);

ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;
