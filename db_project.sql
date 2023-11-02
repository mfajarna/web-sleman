-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Okt 2023 pada 04.34
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_project`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `aturans`
--

CREATE TABLE `aturans` (
  `id` int(11) NOT NULL,
  `uraian` varchar(1000) NOT NULL,
  `ket` varchar(1000) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `aturans`
--

INSERT INTO `aturans` (`id`, `uraian`, `ket`, `created_at`, `updated_at`) VALUES
(1, 'Pengguna layanan mengisi form surat permohonan peminjaman Gedung Kesenian melalui aplikasi', 'Pengguna internal maupun eksternal', '2023-09-12 04:48:54', '2023-09-12 04:48:54'),
(2, 'Pemberian ijin penggunaan Gedung Kesenian akan disampaikan melalui WA', 'Petugas Gedung Kesenian', '2023-09-12 04:57:50', '2023-09-12 04:57:50'),
(3, 'Pengguna layanan membayar retribusi kepada petugas, satu hari sebelum melaksanakanan kegiatan', 'Petugas memberikan kuitansi / bukti pembayaran', '2023-09-12 04:58:02', '2023-09-12 04:58:02'),
(4, 'Pengguna dilarang menggunakan dan membawa keluar peralatan yang ada di Gedung Kesenian, tanpa seijin petugas', 'Petugas memberikan acc atas ijin pimpinan', '2023-09-12 04:58:14', '2023-09-12 04:58:14'),
(5, 'Pengguna Gedung Kesenian diwajibkan untuk menjaga kebersihan gedung dan sarana prasarananya', 'Petugas menyiapkan tempat sampah (disesuaikan)', '2023-09-12 04:58:27', '2023-09-12 04:58:27'),
(6, 'Dilarang makan dan minum di area panggung dan gamelan', 'Dibuat tanda/petunjuk', '2023-09-12 04:58:39', '2023-09-12 04:58:39'),
(7, 'Apabila terjadi kerusakan dan kehilangan fasilitas/sarana dan prasarana Gedung Kesenian, agar segera dikoordinasikan', 'Petugas cek sarpras sebelum dan sesudah digunakan', '2023-09-12 04:58:51', '2023-09-12 04:58:51'),
(8, 'Apabila terjadi kehilangan atau kerusakan barang milik pribadi, bukan tanggungjawab pengelola Gedung Kesenian', 'Petugas mencatat informasinya', '2023-09-12 04:59:03', '2023-09-12 04:59:03'),
(9, 'Tarif Retribusi :\r\n- 06.00 s.d 18.00 WIB (Rp 250.000,-)\r\n- 18.00 s.d 06.00 WIB (Rp.300.000,-)\r\n- untuk kegiatan bersifat sosial kemasyarakatan antara lain keagamaan, sosial, pendidikan dan budaya yang tidak bersifat profit (75 % dari besaran retribusi)', 'H + 1 disetorkan ke Kas Daerah', '2023-09-12 04:59:17', '2023-09-12 04:59:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `events`
--

INSERT INTO `events` (`id`, `title`, `date`, `created_at`, `updated_at`) VALUES
(1, 'Hari Batik', '2023-10-02', '2023-10-03 18:49:28', '2023-10-03 18:49:28'),
(2, 'Hari minggu', '2023-10-08', '2023-10-03 18:49:52', '2023-10-03 18:49:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_10_04_014451_create_events_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sops`
--

CREATE TABLE `sops` (
  `id` int(11) NOT NULL,
  `aktivitas` varchar(1000) NOT NULL,
  `target` varchar(10) NOT NULL,
  `keterangan` varchar(500) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `sops`
--

INSERT INTO `sops` (`id`, `aktivitas`, `target`, `keterangan`, `created_at`, `updated_at`) VALUES
(6, 'Pengguna layanan mengajukan / mengisi form permohonan peminjaman Gedung Kesenian melalui aplikasi', '10 menit', 'Petugas Gedung Kesenian', '2023-09-12 00:35:30', '2023-09-12 00:35:30'),
(7, 'Permohonan Gedung kesenian di unduh dan di masukan ke SIMARDA', '10 menit', 'Bagian persuratan di Resepsionis Dinas', '2023-09-12 00:37:21', '2023-09-12 00:37:21'),
(8, 'Kepala Dinas mendisposisi surat permohonan kepada Sekretaris', '20 menit', 'Melalui SIMARDA', '2023-09-12 00:40:34', '2023-09-12 00:40:34'),
(9, 'Sekretaris memberikan mandat kepada Kasubag umpeg untuk mengkoorsinasikan', '20 menit', 'Melalui SIMARDA', '2023-09-12 00:44:38', '2023-09-12 00:44:38'),
(10, 'Crosscek jadwal pemakaian Gedung Kesenian melalui aplikasi', '15 menit', 'Petugas Gedung Kesenian', '2023-09-12 00:44:53', '2023-09-12 00:44:53'),
(11, 'Ijin penggunaan Gedung Kesenian (melalui WA)', '10 menit', 'Bagian persuratan di Resepsionis Dinas', '2023-09-12 00:45:09', '2023-09-12 00:45:09'),
(12, 'Pengguna layanan membayar retribusi kepada petugas, satu hari sebelum melaksanakanan kegiatan', '1 hari', 'Petugas Gedung Kesenian', '2023-09-12 00:45:22', '2023-09-12 00:45:22'),
(13, 'Petugas Gedung Kesenian menyiapkan Sarana dan prasarana Gedung Kesenian dan membuka pintu Gedung Kesenian saat akan digunakan', '60 menit', 'Petugas Gedung Kesenian', '2023-09-12 00:45:37', '2023-09-12 00:45:37'),
(14, 'Petugas menyetorkan retribusi kepada bendahara penerima, untuk selanjutnya disetorkan ke Kas Daerah', '1 hari', 'Petugas Gedung Kesenian dan Bendahara Penerima', '2023-09-12 00:45:50', '2023-09-12 00:45:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$lOttfAaccoMMNW7ZBBbzn.hv27M0AeFfxsI5P/8aYWGyh6bi.mJYG', NULL, '2023-09-11 20:34:11', '2023-09-11 20:34:11');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `aturans`
--
ALTER TABLE `aturans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `sops`
--
ALTER TABLE `sops`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `aturans`
--
ALTER TABLE `aturans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sops`
--
ALTER TABLE `sops`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
