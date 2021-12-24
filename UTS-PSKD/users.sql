-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Sep 2021 pada 10.56
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_skd2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aktif` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_users`, `username`, `password`, `nama`, `email`, `alamat`, `token`, `aktif`) VALUES
(8, 'bagus', 'bagus123', 'Yusuf Bagus Sungging Herlambang', 'bagus.herlambang@student.uns.ac.id', '081333713813', 'bc7e8570d691604e688c1905c41e3be4e42e762cd0a62461dbacbaed3e8bc2eb', '1'),
(12, 'yusuf', 'yusuf123', 'Yusuf Bagus Sungging Herlambang', 'yusuf.herlambang27@gmail.com', '081333713813', '69acc16898bb105a56ba178e372fbdb8d22d0f26fbb5d24e2ab33cfbf34fcf02', '0'),
(13, 'yusuf 123', 'yusuf123', 'Yusuf Bagus Sungging Herlambang', 'yusuf.herlambang30@gmail.com', '081333713813', '69acc16898bb105a56ba178e372fbdb8d22d0f26fbb5d24e2ab33cfbf34fcf02', '0'),
(14, 'yusuf', 'yusuf123', 'Yusuf Bagus Sungging Herlambang', 'yusuf.herlambang40@gmail.com', '081333713813', '69acc16898bb105a56ba178e372fbdb8d22d0f26fbb5d24e2ab33cfbf34fcf02', '0'),
(15, 'yusuf', 'Yusuf123!', 'Yusuf Bagus Sungging Herlambang', 'yusuf.herlambang37@gmail.com', '081333713813', '69acc16898bb105a56ba178e372fbdb8d22d0f26fbb5d24e2ab33cfbf34fcf02', '0'),
(16, 'yusuf', 'Yusuf123A@', 'Yusuf Bagus Sungging Herlambang', 'yusuf.herlambang47@gmail.com', '081333713813', '69acc16898bb105a56ba178e372fbdb8d22d0f26fbb5d24e2ab33cfbf34fcf02', '0'),
(17, 'yusuf 123', 'Yusuf456!', 'Yusuf Bagus Sungging Herlambang', 'yusuf.herlambang50@gmail.com', '081333713813', '69acc16898bb105a56ba178e372fbdb8d22d0f26fbb5d24e2ab33cfbf34fcf02', '0'),
(18, 'yusuf', 'Bagus123!', 'Yusuf Bagus Sungging Herlambang', 'yusuf.herlambang100@gmail.com', '081333713813', '69acc16898bb105a56ba178e372fbdb8d22d0f26fbb5d24e2ab33cfbf34fcf02', '0'),
(19, 'yusuf', 'Yusuf123!', 'Yusuf', 'sintaathaya001@gmail.com0', '081236303951', 'fc098bf380077e15c005a3e4d267baa36c3855a87f827f5d2d38698dfa196fd6', '0'),
(20, 'yusuf', 'Yusuf123$', 'Yusuf', 'sintaathaya00001@gmail.com', '081236303951', '0ea67872601c7cd266728f34566e80ed67984e33cd5156555b7993d546b3301a', '0'),
(21, 'yusuf123', 'Yusuf123!', 'Yusuf', 'sintaathaya001111@gmail.com', '081236303951', '0ea67872601c7cd266728f34566e80ed67984e33cd5156555b7993d546b3301a', '0'),
(22, 'yusuf', 'Yusuf123!', 'Yusuf', 'yusuf.herlambang277@gmail.com', '081326565509', '0ea67872601c7cd266728f34566e80ed67984e33cd5156555b7993d546b3301a', '0'),
(23, 'yusuf123', 'Yusuf123!', 'Yusuf', 'yusuf.herlambang2237@gmail.com', '081326565509', '0ea67872601c7cd266728f34566e80ed67984e33cd5156555b7993d546b3301a', '0'),
(24, 'yusuf123', 'Yusuf123!', 'Yusuf', 'yusuf.herlambang2734@gmail.com', '081326565509', '0ea67872601c7cd266728f34566e80ed67984e33cd5156555b7993d546b3301a', '0'),
(25, 'yusuf123', 'Yusuf123!', 'Yusuf', 'yusuf.herlambang2427@gmail.com', '081326565509', '0ea67872601c7cd266728f34566e80ed67984e33cd5156555b7993d546b3301a', '0'),
(26, 'yusuf123', 'Yusuf123!', 'Yusuf', 'yusuf.herlambang22257@gmail.com', 'Langenharjo', '0ea67872601c7cd266728f34566e80ed67984e33cd5156555b7993d546b3301a', '0'),
(27, 'Bagus123', 'Bagus123!', 'Yusuf Bagus', 'yusuf.herlambang27777@gmail.com', 'Langenharjo', 'de37498f3bed6a5ce4dcc9f4c6324b75cb896e7ef2db5dbcf796a82f4063c491', '0'),
(28, 'yusuf567', 'Yusuf123@', 'Yusuf Bagus Sungging Herlambang', 'yusuf.herlambang300@gmail.com', 'Langenharjo', '3f87807aae7e8b2483f0af7ce68198219fc1bbfbd79bfc02f1a80426f56ad465', '0'),
(29, 'saka123', 'Yusuf123@', 'Yusuf Bagus Sungging Herlambang', 'yusuf.herlambang390@gmail.com', 'Langenharjo', '3f87807aae7e8b2483f0af7ce68198219fc1bbfbd79bfc02f1a80426f56ad465', '0');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
