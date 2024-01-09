-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jan 2024 pada 05.57
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbproject`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `company_profiles`
--

CREATE TABLE `company_profiles` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `major` varchar(45) NOT NULL,
  `email` varchar(128) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `company_profiles`
--

INSERT INTO `company_profiles` (`id`, `id_user`, `name`, `description`, `address`, `phone`, `major`, `email`, `created_at`, `updated_at`) VALUES
(19, 63, 'Sansan entertainment', 'jgfguiop', 'jln gunung jati depan ruka adidas no.12 ', '(657) 876-567', 'MultiMedia', '', '2024-01-03 03:22:01', '2024-01-03 03:22:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_member`
--

CREATE TABLE `data_member` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `jenis_kelamin` varchar(13) NOT NULL,
  `nama_sekolah` varchar(128) NOT NULL,
  `alamat_sekolah` varchar(128) NOT NULL,
  `nis` int(11) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jurusan` varchar(128) NOT NULL,
  `no_pembimbing` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_member`
--

INSERT INTO `data_member` (`id`, `id_user`, `name`, `email`, `image`, `jenis_kelamin`, `nama_sekolah`, `alamat_sekolah`, `nis`, `tgl_lahir`, `jurusan`, `no_pembimbing`) VALUES
(0, 71, 'hanisah', 'hhhhanisaa@gmail.com', '', '', '', '', 0, '0000-00-00', '', 0),
(0, 72, 'tania novianti', 'noviantitania585@gmail.com', '', '', '', '', 0, '0000-00-00', '', 0),
(0, 73, 'tania novianti', 'tania123@gmail.com', '', '', '', '', 0, '0000-00-00', '', 0),
(0, 74, 'ilma', 'ilma@gmail.com', '', '', '', '', 0, '0000-00-00', '', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kode_area`
--

CREATE TABLE `kode_area` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `kode` varchar(128) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kode_area`
--

INSERT INTO `kode_area` (`id`, `id_user`, `kode`, `status`) VALUES
(1, 63, 'area 1', 0),
(2, 63, 'area 2', 0),
(4, 63, 'area 4', 0),
(5, 63, 'area 5', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan`
--

CREATE TABLE `pengajuan` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `jurusan` varchar(128) NOT NULL,
  `nama_sekolah` varchar(128) NOT NULL,
  `alamat_sekolah` varchar(128) NOT NULL,
  `nis` int(11) NOT NULL,
  `no_pembimbing` int(13) NOT NULL,
  `status` enum('Pending','Approve','Reject') NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tempatpkl`
--

CREATE TABLE `tb_tempatpkl` (
  `id_tempat` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_tempat` varchar(128) NOT NULL,
  `alamat_tempat` varchar(200) NOT NULL,
  `deskripsi` text NOT NULL,
  `Jurusan` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `no_telp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_tempatpkl`
--

INSERT INTO `tb_tempatpkl` (`id_tempat`, `id_user`, `nama_tempat`, `alamat_tempat`, `deskripsi`, `Jurusan`, `gambar`, `no_telp`) VALUES
(47, 63, 'Sansan entertainment', 'jln gunung jati depan ruka adidas no.12', 'iuytg.dsg', 'MultiMedia', 'e09a64380065e4c345a71503ac745d5f.jpg', 0),
(48, 63, 'Sansan entertainment', 'jln gunung jati depan ruka adidas no.12', 'lkiuyt', 'MultiMedia', 'e3efe8a5d15c3623ba347b2def1880fe4.jpg', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL DEFAULT 'default.jpg',
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(63, 'sandiseng', 'sandi12345@gmail.com', 'default.png', '$2y$10$9wRug6NIbMsACYkVqFbQ5u.dXaUNh1MTy8WVOutytDr2wSNdsd2sW', 1, 1, 1703758977),
(71, 'hanisah', 'hhhhanisaa@gmail.com', 'default.png', '$2y$10$XXlymfQRpaf94gZBkKcEue4UBPFGHiz4EZX1XHsmu52s5Gyzh7KBK', 2, 1, 1704275094),
(72, 'tania novianti', 'noviantitania585@gmail.com', 'default.png', '$2y$10$036UqR9oF..j2MwteFEDH.9wEDkaUtQ2h4YmZpxpj878qM6FDwX92', 3, 1, 1704353283),
(73, 'tania novianti', 'tania123@gmail.com', 'default.png', '$2y$10$B7Fi/g0cJWV2/EYvgK1JaOBrt4oGP.9Si6/i55vEIpq7T/hw64X.C', 3, 1, 1704688014),
(74, 'ilma', 'ilma@gmail.com', 'default.png', '$2y$10$zdBDUsPuzJvgRTMZ5x8VmuZNCxOt9Xg6daASqSTHI.ZEfoSRkcK9y', 2, 1, 1704776215);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member'),
(3, 'perusahaan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `company_profiles`
--
ALTER TABLE `company_profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kode_area`
--
ALTER TABLE `kode_area`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_tempatpkl`
--
ALTER TABLE `tb_tempatpkl`
  ADD PRIMARY KEY (`id_tempat`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `company_profiles`
--
ALTER TABLE `company_profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `kode_area`
--
ALTER TABLE `kode_area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_tempatpkl`
--
ALTER TABLE `tb_tempatpkl`
  MODIFY `id_tempat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
