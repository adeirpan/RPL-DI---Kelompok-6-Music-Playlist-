-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Jun 2022 pada 12.13
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tune`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(5, '2022_05_22_140905_music', 1),
(6, '2022_05_31_141743_create_user_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `musics`
--

CREATE TABLE `musics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `artist` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `album` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path_lirik` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `path_chord` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `path_downloadmusic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `path_music` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path_imgPoster` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jmlDiputar` int(11) NOT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `musics`
--

INSERT INTO `musics` (`id`, `title`, `artist`, `album`, `year`, `genre`, `path_lirik`, `path_chord`, `path_downloadmusic`, `path_music`, `path_imgPoster`, `time`, `jmlDiputar`, `last_used_at`, `created_at`, `updated_at`) VALUES
(1, 'Hati-hati di Jalan', 'Tulus', 'Manusia', '2022', 'pop, jazz', 'https://portalpekalongan.pikiran-rakyat.com/gaya-hidup/pr-1914703897/ini-lirik-lagu-hati-hati-di-jalan-milik-tulus-yang-viral-di-indonesia?page=2', 'https://www.chordtela.com/2022/03/tulus-hati-hati-di-jalan.html', 'https://www84.zippyshare.com/d/gvQLbwOW/15126/TULUS-Hati-Hati-di-Jalan.mp3', 'music/musicList/TULUS - Hati-Hati di Jalan.mp3', 'https://i.scdn.co/image/ab67616d0000b273b55d26c578e30129b0a7e86e', '4:02', 0, '2022-05-23 17:01:16', '2022-05-23 17:01:16', NULL),
(2, 'To the Bone', 'Pamungkas', 'Flying Solo', '2019', 'R&B/Soul, Pop', 'https://surabaya.tribunnews.com/2021/03/22/lirik-dan-terjemahan-lagu-to-the-bone-pamungkas-viral-di-tiktok-i-want-you-to-the-bone', 'https://www.chordtela.com/2020/05/pamungkas-to-bone.html', 'https://mdelta.123tokyo.xyz/get.php/b/33/oIYWenB637c.mp3?cid=MTI1LjE2NC4yMy4xNDd8TW96aWxsYS81LjAgKFdpbmRvd3MgTlQgMTAuMDsgV2luNjQ7IHg2NCkgQXBwbGVXZWJLaXQvNTM3LjM2IChLSFRNTCwgbGlrZSBHZWNrbykgQ2hyb21lLzEwMi4wLjAuMCBTYWZhcmkvNTM3LjM2fElE&h=MsGk9zQLtgieYgQN7Tm', 'music\\musicList\\Pamungkas - To The Bone.mp3', 'https://cultura.id/wp-content/uploads/2019/12/pamungkas-flying-solo.jpg', '3:50', 0, '2022-05-23 17:33:19', '2022-05-23 17:33:19', NULL),
(3, 'Until I Found You', 'Stephen Sanchez', 'Until I Found You', '2021', 'Pop', 'https://www.celebrities.id/read/lirik-lagu-until-i-found-you-dan-terjemahan-t6UV99', 'https://www.chordtela.com/2022/05/stephen-sanchez-until-i-found-you.html', 'https://cdn02.ytapi.download/dl?hash=ANHSNlu2FuOecYKYpuoiZ6PrWqquOzbFkIrW%2FO0Av1QoaNgAdugosbS9NwMyoEkYq91Ak8aOEcg0qoJEtGCawEAtn7VmoccHGRKKaLuyAVZtfv9%2BN33vqjSTiC0bOLmz4jgBGu7kA959gLXkIi1Fn6RyES%2FIj%2BGzagxv02epUYmQw09v%2BeNR2htd0pGQvpRO86N4LaudfSiYQhi3', 'music\\musicList\\Stephen Sanchez - Until I Found You (Lyrics).mp3', 'https://assets.promediateknologi.com/crop/0x0:0x0/x/photo/2022/06/09/2534961276.jpg', '2:57', 0, NULL, NULL, NULL),
(4, 'Easy On Me', 'Adele', 'Easy On Me', '2021', 'POP', 'https://www.insertlive.com/film-dan-musik/20211015200142-197-246502/lirik-lagu-terjemahan-easy-on-me--adele', 'https://www.chordtela.com/2021/10/adele-easy-on-me.html', 'http://webblogkkn.unsyiah.ac.id/keudeunga16/mp3/download-lagu-adele-easy-on-me/', 'music\\musicList\\Adele - Easy On Me (Lyrics).mp3', 'https://cdn0-production-images-kly.akamaized.net/3D7aC35CKKW9_YnTX38BhYF58Y8=/640x640/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/3603151/original/034050800_1634272566-FBle30gVIAMW73K.jpg', '3:40', 0, NULL, NULL, NULL),
(5, 'Bocil Kematian Athem', 'Windah', 'Bocil Kematian', '2022', 'POP', 'https://g.co/kgs/p76dmx', 'https://solo.tribunnews.com/2020/10/09/chord-kunci-gitar-dan-lirik-lagu-safe-and-sound-rebelution-when-we-come-down', 'https://downloadlagu321.net/different-heaven-safe-and-sound-ncs-release-mp3/2607491.html', 'music\\musicList\\Bocil.mp3', 'https://server-avatar.nimostatic.tv/201904141555283725470_1639512755129_avatar.jpg', '3:12', 0, NULL, NULL, NULL),
(6, 'Mars Telkom University', 'Mahasiswa Telkom University', 'Mars Telkom University', '2019', 'POP', 'https://baa.telkomuniversity.ac.id/wp-content/uploads/2013/04/MARS-HYMNE-TELKOM-UNIVERSITY.pdf', 'https://chordify.net/chords/mars-telkom-university-telkom-university', 'https://gudanglagu456.cc/download/mars-telkom-university', 'music\\musicList\\Mars Telkom University.mp3', 'https://pbs.twimg.com/profile_images/1262792807137153024/WKcQEgIZ_400x400.jpg', '2:17', 0, NULL, NULL, NULL),
(7, 'Spongebob Squarepants Ripped Pants', 'Spongebob Squarepants', 'spongebob squarepants ripped pants', '2012', 'KIDS', 'https://www.merdeka.com/artis/lirik-lagu-ripped-pants-spongebob-squarepants-kln.html', 'https://tabs.ultimate-guitar.com/tab/misc-cartoons/spongebob-squarepants-ripped-pants-chords-655517', 'https://metrolagu321.cc/download/spongebob-ripped-pants/', 'music\\musicList\\SpongeBob SquarePants - The Ripped Pants Song - Nickelodeon UK.mp3', 'https://images-na.ssl-images-amazon.com/images/I/6146jhTHRQL._SX492_BO1,204,203,200_.jpg', '1:20', 0, NULL, NULL, NULL),
(8, 'Spongebob Squarepants Sweet Victory', 'Spongebob Squarepants', 'Spongebob Squarepants Sweet Victory', '2012', 'KIDS', 'https://lirik.kapanlagi.com/artis/spongebob-squarepants/sweet-victory/', 'https://tabs.ultimate-guitar.com/tab/david-glen-eisley/sweet-victory-chords-891135', 'https://m.downloadlagu321.site/mp3/spongebob-sweet-victory.html', 'music\\musicList\\Spongebob Squarepants - Sweet Victory (FULL VERSION).mp3', 'https://i.ytimg.com/vi/k9iYm9PEAHg/maxresdefault.jpg', '4:32', 0, NULL, NULL, NULL),
(9, 'Pupus', 'Dewa', 'Cintailah Cinta', '2002', 'POP', 'https://genius.com/Dewa-pupus-lyrics', 'https://www.chordtela.com/2021/09/pupus-dewa-19-feat-virzha.html', 'https://downloadlagu321.net/dewa-19-pupus-mp3/3874151.html', 'music\\musicList\\Dewa - Pupus Official Video.mp3', 'https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2020/01/15/3769342905.jpg', '5:06', 0, NULL, NULL, NULL),
(10, 'Rumah ke Rumah', 'Hindia', 'Menari dengan Bayangan', '2019', 'POP', 'https://genius.com/Hindia-rumah-ke-rumah-lyrics', 'https://www.chordtela.com/2020/04/hindia-rumah-ke-rumah.html', 'https://downloadlagu321.net/hindia-rumah-ke-rumah-mp3/1570116.html', 'music\\musicList\\Hindia - Rumah ke Rumah (Lyrics Video).mp3', 'https://i1.sndcdn.com/artworks-000670215820-vgnm0p-t500x500.jpg', '4:38', 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenisKelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `premiumStatus` tinyint(1) NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `jenisKelamin`, `premiumStatus`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ade irpan', 'adeirpan706@gmail.com', NULL, '$2y$10$cqEAsobonqIrC/5kDZRKxOwb09Hfsi332yQei.R1k6axF8RKNaKly', 'laki-laki', 0, 'guest', NULL, '2022-05-31 08:01:37', '2022-05-31 08:01:37'),
(2, 'Hikami keren', 'hikami@gmail.com', NULL, '$2y$10$F5taKWMya59.7coM6IoN4egDQddT2vPDuYyBhfGXZqH3tIhlvyi..', 'laki-laki', 1, 'guest', NULL, '2022-05-31 08:58:52', '2022-06-20 02:43:37'),
(3, 'Rezki Fauzan', 'rezki@gmail.com', NULL, '$2y$10$iIxVDJ9yl1jnytSn3gziZeK/4y80EwaafpkTQx1b10XHgJ0hPx7am', 'laki-laki', 0, 'guest', NULL, '2022-06-04 00:04:15', '2022-06-04 00:04:15'),
(4, 'randy keren', 'randy@gmail.com', NULL, '$2y$10$6u/D/LVDRBNR2jOUDLg4vuV9qvgvsWPZ9adLBsao9XDUb850UyKOK', 'laki-laki', 0, 'guest', NULL, '2022-06-19 23:46:57', '2022-06-20 00:51:00');

--
-- Indexes for dumped tables
--

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
-- Indeks untuk tabel `musics`
--
ALTER TABLE `musics`
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
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `musics`
--
ALTER TABLE `musics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
