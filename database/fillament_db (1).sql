-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 19, 2024 at 04:16 AM
-- Server version: 8.0.2-dmr
-- PHP Version: 8.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fillament_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `article_category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edited_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `slug`, `content`, `img`, `article_category_id`, `created_at`, `updated_at`, `created_by`, `edited_by`) VALUES
(1, 'Bagaimna membuat pernikahan lenggang guys', 'bagaimna-membuat-pernikahan-lenggang-guys', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image/jpeg&quot;,&quot;filename&quot;:&quot;wo1.jpg&quot;,&quot;filesize&quot;:446910,&quot;height&quot;:1080,&quot;href&quot;:&quot;http://127.0.0.1:8000/storage/uploads/VGSTvsoxAwGfBB09Z7cThd3a7nTfCwBYkPv5paDh.jpg&quot;,&quot;url&quot;:&quot;http://127.0.0.1:8000/storage/uploads/VGSTvsoxAwGfBB09Z7cThd3a7nTfCwBYkPv5paDh.jpg&quot;,&quot;width&quot;:1920}\" data-trix-content-type=\"image/jpeg\" data-trix-attributes=\"{&quot;presentation&quot;:&quot;gallery&quot;}\" class=\"attachment attachment--preview attachment--jpg\"><a href=\"http://127.0.0.1:8000/storage/uploads/VGSTvsoxAwGfBB09Z7cThd3a7nTfCwBYkPv5paDh.jpg\"><img src=\"http://127.0.0.1:8000/storage/uploads/VGSTvsoxAwGfBB09Z7cThd3a7nTfCwBYkPv5paDh.jpg\" width=\"1920\" height=\"1080\"><figcaption class=\"attachment__caption\"><span class=\"attachment__name\">wo1.jpg</span> <span class=\"attachment__size\">436.44 KB</span></figcaption></a></figure>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '01JCJBQHNVY41QSRSNX62R42YW.jpg', 1, '2024-11-13 01:55:06', '2024-11-13 02:09:12', NULL, 'admin LTEs'),
(2, 'Bagaimna membuat pernikahan lenggang part 2', 'bagaimna-membuat-pernikahan-lenggang-part-2', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image/jpeg&quot;,&quot;filename&quot;:&quot;buah.jpg&quot;,&quot;filesize&quot;:38391,&quot;height&quot;:417,&quot;href&quot;:&quot;http://127.0.0.1:8000/storage/uploads/ykGRlSfkLz8LBbXFveAHOxbG69aWBfvcTx1XLqcG.avif&quot;,&quot;url&quot;:&quot;http://127.0.0.1:8000/storage/uploads/ykGRlSfkLz8LBbXFveAHOxbG69aWBfvcTx1XLqcG.avif&quot;,&quot;width&quot;:626}\" data-trix-content-type=\"image/jpeg\" data-trix-attributes=\"{&quot;presentation&quot;:&quot;gallery&quot;}\" class=\"attachment attachment--preview attachment--jpg\"><a href=\"http://127.0.0.1:8000/storage/uploads/ykGRlSfkLz8LBbXFveAHOxbG69aWBfvcTx1XLqcG.avif\"><img src=\"http://127.0.0.1:8000/storage/uploads/ykGRlSfkLz8LBbXFveAHOxbG69aWBfvcTx1XLqcG.avif\" width=\"626\" height=\"417\"><figcaption class=\"attachment__caption\"><span class=\"attachment__name\">buah.jpg</span> <span class=\"attachment__size\">37.49 KB</span></figcaption></a></figure>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '01JCJDZCX8YRNM32HB6SQG9B5H.jpg', 1, '2024-11-13 02:34:20', '2024-11-13 02:34:20', 'admin LTEs', NULL),
(3, 'Cara menikahi pacar', 'cara-menikahi-pacar', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '01JCZBFNERG6PK0B975JVJ367N.jpeg', 2, '2024-11-18 03:00:55', '2024-11-18 03:00:55', 'admin LTEs', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `article_categories`
--

CREATE TABLE `article_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `article_categories`
--

INSERT INTO `article_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Weeding', '2024-11-13 01:54:29', '2024-11-13 01:54:29'),
(2, 'Date', '2024-11-13 02:13:03', '2024-11-13 02:13:03');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `address`, `mail`, `telephone1`, `telephone2`, `created_at`, `updated_at`) VALUES
(8, 'Jln Pegangsaan No.2', 'hspartyplanner@gmail.com', '(021) 123 123 123', NULL, '2024-11-18 00:27:53', '2024-11-18 00:27:53');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `message`, `status`, `created_at`, `updated_at`) VALUES
(6, 'Firman Anshari Adjie', 'firmananshariadjie@gmail.com', 'tOLOOOOOOOOOOONGGGG', 'Resolved', '2024-11-18 05:47:22', '2024-11-18 05:53:37'),
(7, 'Firman Anshari Adjie', 'azizah@gmail.com', 'dsadsadsa', 'Resolved', '2024-11-18 05:50:22', '2024-11-18 05:51:58'),
(8, 'Said Ramadhan', 'azizah@gmail.com', 'tolong', 'Resolved', '2024-11-18 20:49:12', '2024-11-18 20:50:08');

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `category` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edited_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `title`, `slug`, `content`, `category`, `img`, `created_at`, `updated_at`, `created_by`, `edited_by`, `description`) VALUES
(1, 'Banner Weeding Organize', 'banner-weeding-organize', '<p><strong>Selamat Datang di Varel`s Organizer</strong></p><p>Kami dengan senang hati menyambut Anda untuk menjadi bagian dari perjalanan indah yang akan kami bantu wujudkan. Di [Nama Wedding Organizer], kami percaya bahwa setiap pernikahan adalah momen yang unik dan berharga. Dengan pengalaman, dedikasi, dan sentuhan kreatif, kami berkomitmen untuk membuat hari istimewa Anda menjadi kenangan yang tak terlupakan.</p><p>Percayakan kepada kami untuk merancang dan mengatur setiap detail pernikahan Anda dengan penuh cinta dan perhatian. Bersama kami, setiap langkah akan terasa lebih mudah, dan hari bahagia Anda akan berjalan sempurna.</p><p>Terima kasih telah memilih kami sebagai mitra dalam mewujudkan pernikahan impian Anda. Kami siap menemani Anda setiap langkah, dengan penuh kebahagiaan dan kebanggaan.</p>', 'contact', '01JCHTTM73N3JCWYN5ZMP8XEZ7.jpg', '2024-11-12 20:59:41', '2024-11-18 01:10:28', NULL, 'admin LTEs', 'asd'),
(2, 'About Us weeding', 'about-us-weeding', '<p>Welcome to <strong>HS Party Planner</strong> – where every celebration becomes a cherished memory. Founded with a passion for creativity and a commitment to excellence, HS Party Planner has quickly grown into a trusted name in event planning. We specialize in crafting unforgettable experiences that are tailored to your unique style, preferences, and vision. Whether you’re planning an intimate gathering, a grand wedding, or a corporate event, our team is dedicated to making every detail perfect, ensuring that your event is as stress-free and enjoyable as possible.</p><p>Our services include full-service event planning, coordination, design, and setup. From conceptualizing themes and arranging decorations to managing schedules and coordinating vendors, we handle it all so that you can focus on making memories. At HS Party Planner, we believe in going above and beyond for our clients, creating celebrations that reflect your personality and create lasting impressions for you and your guests.</p><p>Let us bring your vision to life and turn your dream event into reality. Join the countless happy clients who have trusted us to make their special day unforgettable. <strong>Your dream event awaits – let\'s plan it together with HS Party Planner!</strong></p>', 'about', '01JCMEVAH4YGXE4A7V7SZ7VWVZ.jpg', '2024-11-12 21:43:22', '2024-11-14 18:44:36', NULL, 'admin LTEs', 'Trusted By 200 + satisfied clients'),
(3, 'HS Party Planner', 'hs-party-planner', '<p>style=\"color:red\"&gt; indo &lt;p&gt;</p>', 'banner', '01JCMDJ98QEQTCG2PA9FV7MQ4M.jpg', '2024-11-13 21:05:39', '2024-11-18 01:36:11', 'admin LTEs', 'admin LTEs', 'Selamat Datang di HS Party Planner'),
(4, 'Our Services', 'our-services', NULL, 'service', NULL, '2024-11-14 18:58:35', '2024-11-14 19:00:27', 'admin LTEs', 'admin LTEs', 'What We Offer'),
(5, 'Latest Events', 'latest-events', NULL, 'event', NULL, '2024-11-14 19:07:09', '2024-11-14 19:07:09', 'admin LTEs', NULL, 'Our Social & Professional Events Gallery'),
(6, 'Our Team', 'our-team', NULL, 'team', NULL, '2024-11-14 19:20:27', '2024-11-14 19:20:27', 'admin LTEs', NULL, 'We have experienced chef Team'),
(7, 'Testimonial', 'testimonial', NULL, 'testimonial', NULL, '2024-11-14 19:23:19', '2024-11-14 19:23:19', 'admin LTEs', NULL, 'What Our Customers says!'),
(8, 'Our Article', 'our-article', NULL, 'article', NULL, '2024-11-14 19:31:59', '2024-11-14 19:32:06', 'admin LTEs', 'admin LTEs', 'Be First Who Read News');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gallery_category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `description`, `gallery_category_id`, `created_at`, `updated_at`) VALUES
(1, '01JCQKQZKWZKC9PTCFEG51ACP6.jpg', 'Arab Wedding', 2, '2024-11-13 00:15:33', '2024-11-15 02:51:21'),
(2, '01JCJ71YMDSB61277HPNQ3H0VX.jpg', 'White Dinner ', 2, '2024-11-13 00:33:24', '2024-11-15 02:51:49'),
(3, '01JCQKT2MW4JTS5N7QVC3DBH3Q.jpg', 'Java Style', 2, '2024-11-15 02:52:29', '2024-11-15 02:52:29'),
(4, '01JCQKV0KQ0PZ66SMCRC2TSFXP.jpeg', 'Say Hiiii!!', 2, '2024-11-15 02:53:00', '2024-11-15 02:53:00'),
(5, '01JCQKWANXE49XEENHN8NGGJGP.jpg', 'Great Lunch', 1, '2024-11-15 02:53:43', '2024-11-15 02:53:43'),
(6, '01JCQKX950VY81PBTVZTR00KVT.jpg', 'Simple', 2, '2024-11-15 02:54:14', '2024-11-15 02:54:14'),
(7, '01JCQKY35757EPCB8KEZACWJG1.jpg', 'My Squad', 2, '2024-11-15 02:54:41', '2024-11-15 02:54:41'),
(8, '01JCQKYTXSD4QKDVSSDHDWDGHC.jpeg', 'Love', 2, '2024-11-15 02:55:05', '2024-11-15 02:55:05'),
(9, '01JCQM09E11QAJZJJ15B7DTT6Y.jpeg', 'Preparation', 2, '2024-11-15 02:55:53', '2024-11-15 02:55:53');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_categories`
--

CREATE TABLE `gallery_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery_categories`
--

INSERT INTO `gallery_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Office', '2024-11-13 00:14:56', '2024-11-13 00:14:56'),
(2, 'Party', '2024-11-13 00:15:07', '2024-11-13 00:15:07');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(5, '2024_11_11_023635_create_contents_table', 1),
(8, '2024_11_13_043746_add_column_to_contents_table', 2),
(9, '2024_11_13_055547_create_testimonials_table', 3),
(19, '2024_11_13_063646_create_gallery_categories_table', 4),
(20, '2024_11_13_065125_create_galleries_table', 4),
(21, '2024_11_13_075245_create_article_categories_table', 5),
(22, '2024_11_13_075535_create_articles_table', 5),
(23, '2024_11_13_090452_add_column_to_articles_table', 6),
(24, '2024_11_13_093758_create_teams_table', 7),
(26, '2024_11_14_012528_create_services_table', 8),
(27, '2024_11_15_014009_add_column_to_content_table', 9),
(28, '2024_11_15_024152_add_column_to_services_table', 10),
(29, '2024_11_16_115754_add_column_to_testimonials_table', 11),
(34, '2024_11_18_034625_create_contacts_table', 12),
(35, '2024_11_18_121819_create_contact_us_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edited_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `slug`, `content`, `img`, `created_by`, `edited_by`, `created_at`, `updated_at`, `icon`) VALUES
(1, 'Wedding Planning', 'Layanan perencanaan pernikahan dari awal hingga akhir', 'wedding-planning', '<p><strong>Details:</strong></p><ul><li>Konsultasi awal untuk menentukan tema dan konsep pernikahan.</li><li>Penyusunan anggaran dan jadwal acara.</li><li>Koordinasi dengan vendor seperti katering, dekorasi, fotografi, dan hiburan.</li><li>Peninjauan lokasi acara.</li></ul>', '01JCM69Z5N5EKD56PTCFE8Y05W.jpg', NULL, NULL, '2024-11-13 18:58:47', '2024-11-15 01:37:43', 'fas fa-venus-mars'),
(2, 'Venue Decoration', 'Dekorasi untuk lokasi pernikahan sesuai tema yang diinginkan.', 'venue-decoration', '<p><strong>Details:</strong></p><ul><li>Pilihan tema seperti klasik, rustic, minimalis, atau adat tradisional.</li><li>Penyediaan backdrop, bunga, pencahayaan, dan properti tambahan.</li><li>Koordinasi dekorasi untuk area pelaminan, meja tamu, dan jalan masuk.</li></ul>', NULL, NULL, NULL, '2024-11-13 19:00:12', '2024-11-15 01:29:59', 'fas fa-city'),
(3, 'Catering Service', 'Penyediaan makanan dan minuman untuk tamu undangan.', 'catering-service', '<ul><li><strong>Details:</strong><ul><li>Menu makanan tradisional, internasional, atau gabungan.</li><li>Tasting session untuk memilih menu.</li><li>Pilihan prasmanan, table service, atau stall makanan unik.</li><li>Penanganan kebutuhan khusus seperti vegetarian atau alergi makanan.</li></ul></li></ul><p><br></p>', NULL, NULL, NULL, '2024-11-15 01:30:33', '2024-11-15 01:30:33', 'fas fa-utensils'),
(4, 'Photography and Videography', 'Dokumentasi acara pernikahan secara profesional.', 'photography-and-videography', '<p><strong>Details:</strong></p><ul><li>Pemotretan pre-wedding, akad, dan resepsi.</li><li>Video cinematic highlights dari seluruh acara.</li><li>Pembuatan album fisik dan digital.</li><li>Penyediaan drone untuk pengambilan gambar udara.</li></ul>', NULL, NULL, NULL, '2024-11-15 01:31:04', '2024-11-15 01:31:04', 'fas fa-camera'),
(5, 'Entertainment', 'Hiburan untuk tamu selama acara berlangsung.', 'entertainment', '<p><strong>Details:</strong></p><ul><li>Penyewaan band, penyanyi solo, atau DJ.</li><li>Penampilan tarian adat atau modern.</li><li>MC profesional yang memandu acara.</li><li>Sistem suara dan pencahayaan berkualitas tinggi.</li></ul>', NULL, NULL, NULL, '2024-11-15 01:38:29', '2024-11-15 01:38:29', 'fas fa-video');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `img`, `position`, `created_at`, `updated_at`) VALUES
(1, 'Firman Anshari Adjie', '01JCJEJPHRCJNMWHE231C38BDE.jpg', 'Chef Pancake', '2024-11-13 02:44:53', '2024-11-13 02:44:53'),
(2, 'Sair Ramadhan', '01JCTE6CWRTE31C682PHGPZJTM.jpg', 'Pancake Chef', '2024-11-16 05:12:05', '2024-11-16 05:12:05'),
(3, 'Nichole Lety', '01JCTEB30V26NC1J5QG9GARTAV.jpg', 'Indian Chef', '2024-11-16 05:14:39', '2024-11-16 05:14:39'),
(4, 'Antonia Neni', '01JCTECV8XXETKDGNWRGTN2933.jpeg', 'Pizza Chef', '2024-11-16 05:15:36', '2024-11-16 05:15:36'),
(5, 'Tuti Sari', '01JCTEEM4C1HDZ0XCK2XATEV8D.jpg', 'Pantry Chef', '2024-11-16 05:16:34', '2024-11-16 05:16:34');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `content`, `created_at`, `updated_at`, `image`) VALUES
(1, 'Attallah Arel', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '2024-11-12 23:09:28', '2024-11-16 05:02:46', '01JCTDNAMDEK0FA2JH19ZF94QS.jpg'),
(2, 'Muhammad Faiz', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2024-11-16 05:06:25', '2024-11-16 05:06:25', NULL),
(3, 'Raka Aji', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2024-11-16 05:08:02', '2024-11-16 05:08:02', '01JCTDYZNPY6AJEJ6S5BV5JRZ6.jpg'),
(4, 'Setia Budi', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2024-11-16 05:08:22', '2024-11-16 05:08:22', NULL),
(5, 'Tuti Aisyah', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2024-11-16 05:08:48', '2024-11-16 05:08:48', NULL),
(6, 'Jaka Eko', '<p>&nbsp;<strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</p>', '2024-11-16 05:09:05', '2024-11-16 05:09:05', NULL),
(7, 'Eti Ina', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2024-11-16 05:09:22', '2024-11-16 05:09:22', NULL),
(8, 'Leka Loli', '<p>&nbsp;<strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&nbsp;</p>', '2024-11-18 02:59:46', '2024-11-18 02:59:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin LTEs', 'admin@gmail.com', NULL, '$2y$10$jV.tusOLVPflH0GsDSUYNeVPwdRc6sQhVVMGQ8w.ocs/Ye7celPAu', 'zjsEejwoajhqtSk3n8m2veao9VYaKQd0oGfy6MwWLpeLimIJ0H0llrd8tWSg', '2024-11-11 19:58:28', '2024-11-12 20:37:19'),
(2, 'firman adjie', 'firman@gmail.com', NULL, '$2y$10$jV.tusOLVPflH0GsDSUYNeVPwdRc6sQhVVMGQ8w.ocs/Ye7celPAu', 'icoEkClG8IdeATE4zs9g0Yw3k358qPdHTHka5K30acU2jUU8tNqD2IlooovG', '2024-11-12 20:14:52', '2024-11-12 20:38:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `articles_slug_unique` (`slug`),
  ADD KEY `articles_article_category_id_foreign` (`article_category_id`);

--
-- Indexes for table `article_categories`
--
ALTER TABLE `article_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contents_slug_unique` (`slug`),
  ADD KEY `contents_category_index` (`category`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `galleries_gallery_category_id_foreign` (`gallery_category_id`);

--
-- Indexes for table `gallery_categories`
--
ALTER TABLE `gallery_categories`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `services_slug_unique` (`slug`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
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
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `article_categories`
--
ALTER TABLE `article_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `gallery_categories`
--
ALTER TABLE `gallery_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_article_category_id_foreign` FOREIGN KEY (`article_category_id`) REFERENCES `article_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `galleries`
--
ALTER TABLE `galleries`
  ADD CONSTRAINT `galleries_gallery_category_id_foreign` FOREIGN KEY (`gallery_category_id`) REFERENCES `gallery_categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
