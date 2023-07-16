-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 16, 2023 at 12:18 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pulmonarycare`
--

-- --------------------------------------------------------

--
-- Table structure for table `diseases`
--

CREATE TABLE `diseases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `diseases`
--

INSERT INTO `diseases` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Penyakit Paru Obstruktif Kronik (PPOK)', 'Penyakit paru obstruktif kronik (PPOK) adalah peradangan paru-paru yang tak kunjung sembuh. Kondisi ini membuat pernapasan menjadi lebih sulit karena peradangan menyebabkan produksi lendir meningkat. Selain itu, alveoli kesulitan membawa oksigen masuk dan mengeluarkan karbon dioksida akibat penebalan lapisan paru-paru.', '2023-07-10 23:15:06', '2023-07-10 23:15:06'),
(2, 'Asma', 'Asma merupakan penyakit paru-paru yang paling sering ditemukan di Indonesia. Berdasarkan data Kemenkes per 2020, 12 juta lebih penduduk Indonesia mengalami asma. Penyakit ini bisa menyerang siapa saja, mulai dari anak-anak hingga orang tua. Penyebabnya bisa karena alergi, stres, emosi yang tidak terkontrol, ataupun kondisi udara sekitar yang tidak baik. Oleh karenanya, saluran pernapasan mengalami pembengkakan dan penyempitan karena iritasi.', '2023-07-10 23:15:06', '2023-07-10 23:15:06'),
(3, 'Bronkitis', 'Bronkitis umumnya terjadi karena virus, tetapi tidak menutup kemungkinan polutan jadi salah satu penyebab bronkus mengalami infeksi. Infeksi biasanya dimulai di hidung atau tenggorokan dan menyebar ke saluran bronkial. Ketika tubuh mencoba melawan infeksi, hal itu menyebabkan saluran bronkial membengkak dan pengidapnya mengalami batuk kering ataupun berdahak. Seiring waktu, kondisi saluran udara kembali membaik jika sistem imun sudah normal. Sebaliknya, sistem imun yang semakin turun menyebabkan bronkitis kronis. Bronkitis kronis sangat sulit untuk disembuhkan. Namun dengan perawatan yang tepat, gejalanya lambat laun kembali mereda', '2023-07-10 23:15:06', '2023-07-10 23:15:06'),
(4, 'Pneumonia', 'Pneumonia adalah infeksi paru-paru yang disebabkan oleh bakteri, virus, atau jamur. Mikroorganisme tumbuh dan berkembang di paru-paru membuat kantung udara (alveoli) menjadi meradang dan dipenuhi cairan sehingga yang mengganggu aliran oksigen. Sebagian orang pulih dalam beberapa minggu dengan antibiotik dan antivirus, namun terkadang kondisinya tetap ada atau malah mengancam nyawa', '2023-07-10 23:15:06', '2023-07-10 23:15:06'),
(5, 'Tuberkulosis (TB)', 'Tuberkulosis (TB) adalah infeksi bakteri di udara yang disebabkan oleh Mycobacterium tuberculosis. Penyakit ini bisa menular ketika orang sehat menghirup udara yang mengandung bakteri dari batuk atau bersin orang terinfeksi TB. Dari paru-paru, bakteri tersebut nantinya bergerak melalui darah atau sistem limfatik ke berbagai bagian tubuh. Meski menular, gejalanya mungkin tidak akan terlihat sampai berbulan-bulan atau bertahun-tahun kemudian sampai sistem imun tubuh mulai melemah.', '2023-07-10 23:15:06', '2023-07-10 23:15:06'),
(6, 'Kanker Paru-Paru', 'Kanker paru-paru adalah penyakit ketika sel abnormal di paru-paru tumbuh secara tidak terduga dan berkembang menjadi tumor ganas. Kanker paru-paru jadi penyebab utama kematian akibat kanker di Amerika Serikat menurut Disease Control and Prevention (CDC). Gejala biasanya tidak muncul sampai sel kanker menyebar ke bagian tubuh lain dan mencegah organ lain berfungsi dengan baik. Pada titik ini, lebih sulit untuk mengobati kanker paru-paru', '2023-07-10 23:15:06', '2023-07-10 23:15:06'),
(7, 'Emfisema', 'Emfisema adalah salah satu penyakit yang termasuk PPOK (penyakit paru obstruktif kronik). Penyakit ini menyebabkan kerusakan di alveoli. Lambat laun, kerusakan tersebut menyebabkan kantung udara pecah dan menciptakan satu kantung udara besar sehingga mencegah oksigen bergerak melalui aliran darah. Selain itu, penyumbatan yang dihasilkannya membuat paru-paru dipenuhi cairan. Tanda emfisema membutuhkan waktu bertahun-tahun untuk berkembang. Pada tahap awal gejalanya meliputi sesak napas, batuk dengan lendir, mengi, dan sesak dada.', '2023-07-10 23:15:06', '2023-07-10 23:15:06'),
(8, 'Emboli Paru', 'Emboli paru terjadi ketika arteri paru tersumbat oleh bekuan darah yang terjadi bagian tubuh lain, terutama kaki. Pada titik tertentu, gumpalan vena dalam ini terlepas dan berjalan melalui sistem peredaran darah hingga menyumbat jaringan paru-paru. Penyumbatan menyebabkan penurunan jumlah oksigen dalam darah. Semakin lama gumpalan menghalangi oksigen, kian banyak kerusakan yang dapat ditimbulkannya pada organ lain', '2023-07-10 23:15:06', '2023-07-10 23:15:06');

-- --------------------------------------------------------

--
-- Table structure for table `disease_symptom`
--

CREATE TABLE `disease_symptom` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `disease_id` bigint(20) UNSIGNED NOT NULL,
  `symptom_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `disease_symptom`
--

INSERT INTO `disease_symptom` (`id`, `disease_id`, `symptom_id`) VALUES
(1, 1, 1),
(2, 5, 2),
(3, 6, 2),
(4, 4, 3),
(5, 6, 3),
(6, 1, 4),
(7, 2, 4),
(8, 4, 4),
(9, 6, 4),
(10, 7, 4),
(11, 1, 5),
(12, 2, 5),
(13, 6, 5),
(14, 7, 5),
(15, 3, 6),
(16, 1, 7),
(17, 6, 7),
(18, 5, 7),
(19, 1, 8),
(20, 6, 8),
(21, 7, 8),
(22, 1, 9),
(23, 5, 9),
(24, 6, 9),
(25, 1, 10),
(26, 6, 10),
(27, 7, 10),
(28, 1, 11),
(29, 5, 11),
(30, 6, 11),
(31, 4, 12),
(32, 5, 12),
(33, 1, 13),
(34, 5, 13),
(35, 6, 13),
(36, 1, 14),
(37, 6, 14),
(38, 7, 14),
(39, 6, 15),
(40, 8, 17);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_09_054316_create_diseases_table', 1),
(6, '2023_07_09_054337_create_symptoms_table', 1),
(7, '2023_07_09_054427_create_solutions_table', 1),
(8, '2023_07_09_080826_create_disease_symptom_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `solutions`
--

CREATE TABLE `solutions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text NOT NULL,
  `disease_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `solutions`
--

INSERT INTO `solutions` (`id`, `description`, `disease_id`, `created_at`, `updated_at`) VALUES
(1, 'Menghindari asap rokok dan lingkungan yang berpolusi.', 1, '2023-07-10 23:20:45', '2023-07-10 23:20:45'),
(2, 'Menggunakan obat-obatan bronkodilator untuk membantu membuka saluran pernapasan.', 1, '2023-07-10 23:20:45', '2023-07-10 23:20:45'),
(3, 'Melakukan olahraga pernapasan dan terapi fisik yang direkomendasikan.', 1, '2023-07-10 23:20:45', '2023-07-10 23:20:45'),
(4, 'Menerapkan gaya hidup sehat, termasuk menjaga berat badan ideal dan mengonsumsi makanan bergizi.', 1, '2023-07-10 23:20:45', '2023-07-10 23:20:45'),
(5, 'Menghindari pemicu asma seperti alergen atau iritan tertentu.', 2, '2023-07-10 23:20:45', '2023-07-10 23:20:45'),
(6, 'Menggunakan obat-obatan inhaler yang diresepkan oleh dokter untuk meredakan gejala asma.', 2, '2023-07-10 23:20:45', '2023-07-10 23:20:45'),
(7, 'Memahami dan mengikuti rencana pengelolaan asma yang telah ditetapkan oleh dokter.', 2, '2023-07-10 23:20:45', '2023-07-10 23:20:45'),
(8, 'Melakukan olahraga yang sesuai dan tetap menjaga kebugaran fisik.', 2, '2023-07-10 23:20:45', '2023-07-10 23:20:45'),
(9, 'Mengonsumsi obat-obatan bronkodilator dan ekspektoran yang diresepkan oleh dokter untuk meredakan gejala bronkitis.', 3, '2023-07-10 23:20:45', '2023-07-10 23:20:45'),
(10, 'Minum banyak cairan untuk membantu melunakkan dahak dan mengencerkannya.', 3, '2023-07-10 23:20:45', '2023-07-10 23:20:45'),
(11, 'Menghindari paparan asap rokok dan polusi udara.', 3, '2023-07-10 23:20:45', '2023-07-10 23:20:45'),
(12, 'Istirahat yang cukup dan menjaga kebersihan pernapasan.', 3, '2023-07-10 23:20:45', '2023-07-10 23:20:45'),
(13, 'Mengonsumsi antibiotik yang diresepkan oleh dokter untuk melawan infeksi bakteri.', 4, '2023-07-10 23:20:45', '2023-07-10 23:20:45'),
(14, 'Beristirahat yang cukup untuk membantu pemulihan tubuh.', 4, '2023-07-10 23:20:45', '2023-07-10 23:20:45'),
(15, 'Minum banyak cairan untuk menjaga kecukupan hidrasi.', 4, '2023-07-10 23:20:45', '2023-07-10 23:20:45'),
(16, 'Menerapkan kebersihan tangan yang baik dan menghindari kontak dengan orang yang sakit.', 4, '2023-07-10 23:20:45', '2023-07-10 23:20:45'),
(17, 'Mengikuti program pengobatan TB yang direkomendasikan oleh dokter, termasuk penggunaan antibiotik.', 5, '2023-07-10 23:20:45', '2023-07-10 23:20:45'),
(18, 'Menjaga kebersihan pernapasan dengan menutup mulut dan hidung saat batuk atau bersin.', 5, '2023-07-10 23:20:45', '2023-07-10 23:20:45'),
(19, 'Menghindari berbagi barang-barang pribadi seperti sendok atau gelas dengan orang lain.', 5, '2023-07-10 23:20:45', '2023-07-10 23:20:45'),
(20, 'Menjaga daya tahan tubuh dengan makan makanan sehat dan bergizi.', 5, '2023-07-10 23:20:45', '2023-07-10 23:20:45'),
(21, 'Terapi yang direkomendasikan oleh dokter, seperti kemoterapi, radioterapi, atau pembedahan, tergantung pada jenis dan stadium kanker paru-paru.', 6, '2023-07-10 23:20:45', '2023-07-10 23:20:45'),
(22, 'Menjaga pola makan sehat dan aktifitas fisik yang cukup.', 6, '2023-07-10 23:20:45', '2023-07-10 23:20:45'),
(23, 'Menghindari paparan asap rokok dan polusi udara.', 6, '2023-07-10 23:20:45', '2023-07-10 23:20:45'),
(24, 'Mendapatkan dukungan emosional dan psikologis selama proses pengobatan.', 6, '2023-07-10 23:20:45', '2023-07-10 23:20:45'),
(25, 'Menghentikan kebiasaan merokok dan menghindari paparan asap rokok.', 7, '2023-07-10 23:20:45', '2023-07-10 23:20:45'),
(26, 'Menggunakan obat-obatan bronkodilator dan kortikosteroid untuk membantu meredakan gejala emfisema.', 7, '2023-07-10 23:20:45', '2023-07-10 23:20:45'),
(27, 'Melakukan latihan pernapasan dan terapi fisik untuk membantu memperbaiki kapasitas paru-paru.', 7, '2023-07-10 23:20:45', '2023-07-10 23:20:45'),
(28, 'Menghindari lingkungan yang berpolusi dan mendapatkan vaksinasi yang direkomendasikan.', 7, '2023-07-10 23:20:45', '2023-07-10 23:20:45'),
(29, 'Pengobatan dengan antikoagulan untuk mencegah pembekuan darah.', 8, '2023-07-10 23:20:45', '2023-07-10 23:20:45'),
(30, 'Pemberian obat-obatan pengencer darah untuk mencegah terbentuknya bekuan baru.', 8, '2023-07-10 23:20:45', '2023-07-10 23:20:45'),
(31, 'Melakukan tindakan medis seperti trombolisis atau pemasangan filter vena cava inferior, tergantung pada kondisi pasien.', 8, '2023-07-10 23:20:45', '2023-07-10 23:20:45'),
(32, 'Istirahat yang cukup dan menghindari aktivitas fisik yang berlebihan.', 8, '2023-07-10 23:20:45', '2023-07-10 23:20:45');

-- --------------------------------------------------------

--
-- Table structure for table `symptoms`
--

CREATE TABLE `symptoms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `symptoms`
--

INSERT INTO `symptoms` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Batuk Kronis', '2023-07-10 23:15:22', '2023-07-10 23:15:22'),
(2, 'Batuk Berdarah', '2023-07-10 23:15:22', '2023-07-10 23:15:22'),
(3, 'Nyeri Dada', '2023-07-10 23:15:22', '2023-07-10 23:15:22'),
(4, 'Sesak Napas', '2023-07-10 23:15:22', '2023-07-10 23:15:22'),
(5, 'Napas pendek', '2023-07-10 23:15:22', '2023-07-10 23:15:22'),
(6, 'Meningkatnya Produksi Lendir', '2023-07-10 23:15:22', '2023-07-10 23:15:22'),
(7, 'Merasa Lelah Setelah Bangun Tidur', '2023-07-10 23:15:22', '2023-07-10 23:15:22'),
(8, 'Suara Terdengar Serak', '2023-07-10 23:15:22', '2023-07-10 23:15:22'),
(9, 'Penurunan Berat Badan', '2023-07-10 23:15:22', '2023-07-10 23:15:22'),
(10, 'Kelelahan', '2023-07-10 23:15:22', '2023-07-10 23:15:22'),
(11, 'Kehilangan Nafsu Makan', '2023-07-10 23:15:22', '2023-07-10 23:15:22'),
(12, 'Demam Tinggi', '2023-07-10 23:15:22', '2023-07-10 23:15:22'),
(13, 'Kesulitan Tidur', '2023-07-10 23:15:22', '2023-07-10 23:15:22'),
(14, 'Berat Saat Bernapas', '2023-07-10 23:15:22', '2023-07-10 23:15:22'),
(15, 'Kesulitan Menelan', '2023-07-10 23:15:22', '2023-07-10 23:15:22'),
(16, 'Pembengkakan kaki atau tungkai', '2023-07-10 23:15:22', '2023-07-10 23:15:22'),
(17, 'Kuku Terlihat Membiru', '2023-07-10 23:15:22', '2023-07-10 23:15:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user',
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mona Stoltenberg Jr.', 'admin', 'bpadberg@gmail.com', '$2y$10$GJ.2yFfdVDywSL2Ns6uLieNU1I64qv8kQf8GiT4jLnOpoXmcDrRJC', 'd5AM1fURtN', '2023-07-10 23:14:36', '2023-07-10 23:14:36'),
(2, 'June O\'Hara', 'user', 'gleason.heidi@gmail.com', '$2y$10$coFBiuMnntJiMnMKeOUv1OIipTSWLgf.H1ozo9ezVzRJos1vDoMQa', 'EXFdJDy1LWyo1flcZYqtCuNacy92ymFcMGm6ZGNa4jV9BtlWbHGpDB8wPBAO', '2023-07-10 23:14:36', '2023-07-10 23:14:36'),
(3, 'Darrel Lesch', 'user', 'rhea.oberbrunner@hoppe.com', '$2y$10$xxoFbn9F9/xIJvt./K2YVOGt0xxzPWEJW9zxuTo/ZjqMwHzyUE4tK', 'kXWAFvhE8Uz6qISCuXFlehpQKEuE3dKMJ6W3CUo214l0PZPj3H54AE7xOwqg', '2023-07-10 23:14:36', '2023-07-10 23:14:36'),
(4, 'Eliane Lueilwitz', 'user', 'collins.lukas@yahoo.com', '$2y$10$hJ8kgn5j3SPyExqAlSg38eEUcVe4T1V/TneRWPWrIg9Z6wVleD.d2', 'Vh5Ebde8yb', '2023-07-10 23:14:36', '2023-07-10 23:14:36'),
(5, 'Emely McCullough', 'admin', 'wschiller@hotmail.com', '$2y$10$fwKyWtZUvRBv48YW1WKmzuqBbQmznG5K3DoOy81e2akDwl/ZmuoyG', 'JMqd0HpGyX', '2023-07-10 23:14:36', '2023-07-10 23:14:36'),
(6, 'Amari Grady', 'user', 'koch.sandra@adams.com', '$2y$10$iH9JLelmB2gRgTHQcVgVc.P4ugGzDti2nnW5XGatNyAiifvqUBLUK', 'qrSoqzyWvc', '2023-07-10 23:14:36', '2023-07-10 23:14:36'),
(7, 'Delphine Reynolds', 'admin', 'zhoppe@gmail.com', '$2y$10$fKh1TCQwa.nABa7OruWxAOCeg4Ayy4TQMXBx0VaK9dUW4JwHnOioq', '6GVqqXDE6y', '2023-07-10 23:14:36', '2023-07-10 23:14:36'),
(8, 'Terrence Satterfield', 'admin', 'ssmitham@yahoo.com', '$2y$10$DP.yJ41P1/pJGAOA5ILe8OyRbSM2AgDAgHV.DbrtPn9zaByOoNPBK', 'Hu4vjf9pNo', '2023-07-10 23:14:36', '2023-07-10 23:14:36'),
(9, 'Brayan Stehr Jr.', 'user', 'hegmann.mitchel@yahoo.com', '$2y$10$rw4OehF91iL1mPTxmyEkaeuRj4PJ4g4DXppb7VwnOxqQDjIHZzeS6', '5k64XJEU24', '2023-07-10 23:14:36', '2023-07-10 23:14:36'),
(10, 'Emiliano Gusikowski', 'admin', 'tstamm@yahoo.com', '$2y$10$WHL5lGmjt.WNs3IlIqszCO/BML7t.lpI.q444VyIM5gR9w/RjHsvm', 'C1EGWYw5iP', '2023-07-10 23:14:36', '2023-07-10 23:14:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diseases`
--
ALTER TABLE `diseases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disease_symptom`
--
ALTER TABLE `disease_symptom`
  ADD PRIMARY KEY (`id`),
  ADD KEY `disease_symptom_disease_id_foreign` (`disease_id`),
  ADD KEY `disease_symptom_symptom_id_foreign` (`symptom_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `solutions`
--
ALTER TABLE `solutions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `solutions_disease_id_foreign` (`disease_id`);

--
-- Indexes for table `symptoms`
--
ALTER TABLE `symptoms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diseases`
--
ALTER TABLE `diseases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `disease_symptom`
--
ALTER TABLE `disease_symptom`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `solutions`
--
ALTER TABLE `solutions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `symptoms`
--
ALTER TABLE `symptoms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `disease_symptom`
--
ALTER TABLE `disease_symptom`
  ADD CONSTRAINT `disease_symptom_disease_id_foreign` FOREIGN KEY (`disease_id`) REFERENCES `diseases` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `disease_symptom_symptom_id_foreign` FOREIGN KEY (`symptom_id`) REFERENCES `symptoms` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `solutions`
--
ALTER TABLE `solutions`
  ADD CONSTRAINT `solutions_disease_id_foreign` FOREIGN KEY (`disease_id`) REFERENCES `diseases` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
