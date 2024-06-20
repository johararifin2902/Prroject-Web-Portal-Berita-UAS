-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql311.byetcluster.com
-- Generation Time: Jun 20, 2024 at 12:05 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_36714333_portalberita`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `about` longtext NOT NULL,
  `admin_email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `about`, `admin_email`) VALUES
(1, '<p>ihjkjhjkhlkjlkklnkl</p>\r\n', NULL),
(2, '<p>Hahajaja</p>\r\n', NULL),
(3, '<h2>Tentang Kami</h2>\r\n\r\n<p>Selamat datang di JD News, platform berita yang berkomitmen untuk memberikan informasi terkini dan terpercaya kepada pembaca kami. Di JD News, kami menghadirkan berbagai cerita menarik dari berbagai bidang, mulai dari berita politik, ekonomi, hingga teknologi dan gaya hidup. Kami tidak hanya berfokus pada memberitakan kejadian terkini, tetapi juga mendalaminya dengan analisis yang mendalam dan pandangan yang beragam.</p>\r\n\r\n<h3>Misi Kami</h3>\r\n\r\n<p>Misi kami adalah untuk menjadi sumber informasi yang dapat diandalkan bagi masyarakat luas. Kami berkomitmen untuk:</p>\r\n\r\n<ul>\r\n	<li><strong>Integritas</strong>: Menyediakan berita yang akurat, objektif, dan tidak memihak.</li>\r\n	<li><strong>Kualitas</strong>: Memberikan konten berkualitas tinggi yang memberi nilai tambah kepada pembaca.</li>\r\n	<li><strong>Keterbukaan</strong>: Menyajikan berita dengan transparansi dan tanggung jawab.</li>\r\n</ul>\r\n\r\n<h3>Tim Kami</h3>\r\n\r\n<p>Kami bangga dengan tim jurnalis dan editor kami yang berdedikasi, yang bekerja keras setiap hari untuk menyajikan berita yang relevan dan terpercaya kepada Anda. Dengan berbagai latar belakang dan pengalaman, tim kami bersatu dalam semangat untuk menjadikan JD News sebagai salah satu platform berita terdepan di Indonesia.</p>\r\n', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(34) NOT NULL,
  `gender` varchar(15) DEFAULT NULL,
  `dp` varchar(555) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `gender`, `dp`) VALUES
(1, 'admin', 'admin@admin.com', '912ec803b2ce49e4a541068d495ab570', 'Male', '60e9c8a33fee18.01922742.jpg'),
(4, 'dynanti', 'dynanti123@gmail.com', '17a25cd5ee6322f620f809ab849ea9e5', 'Female', ''),
(7, 'Dynanti Ananda', 'dynantiandd@gmal.com', 'b0a2c6cb3bfaae958b59e93208f41304', 'Female', ''),
(6, 'Johar Arifin', 'johar290204@gmail.com', '9f4aab391f5e1fab4088319d75bd4fbe', 'Male', ''),
(2, 'johar', 'johararifin1@gmail.com', 'd8f0dac6e7eda4e37e926b1ab5159dbe', 'male', '66681c5b5216f9.07223157.png'),
(3, 'johardynanti', 'muhammadjohar9a19@gmail.', '3bb3673a74e34dbf03afd1ac09c77328', 'Male', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `address` varchar(75) NOT NULL,
  `phn` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `fax` varchar(15) NOT NULL,
  `admin_email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `address`, `phn`, `email`, `fax`, `admin_email`) VALUES
(11, 'hjkhjklj;klj', '09098877678', 'johararifin1@gm', '987897987', NULL),
(12, 'jlkjlkjl', '97079098', 'johararifin1@gm', '987897987', 'johararifin1@gmail.com'),
(13, 'jojopphtdocs\newsfeedadmincontact-us.php</b> on line <b>109</b><br />', '938192830981098', 'admin@admin.com', '81372987', 'admin@admin.com'),
(14, 'Malang, Jawa Timur, Indonesia', '+62 819 3980 38', 'johar290204@gma', '290204', 'johar290204@gmail.com'),
(15, 'Malang, Jawa Timur, Indonesia', '+6281939803884', 'johar290204@gma', '290204', 'johar290204@gmail.com'),
(16, 'Malang, Jawa Timur, Indonesia', '+62 819 3980 38', 'johar290204@gmail.com', '290204', 'johar290204@gmail.com'),
(17, 'Malang, Jawa Timur, Indonesia', '+62 819 3980 3884', 'johar290204@gmail.com', '290204', 'johar290204@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `post_category`
--

CREATE TABLE `post_category` (
  `c_id` int(5) NOT NULL,
  `c_name` varchar(30) NOT NULL,
  `no_of_post` int(11) NOT NULL,
  `admin_email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_category`
--

INSERT INTO `post_category` (`c_id`, `c_name`, `no_of_post`, `admin_email`) VALUES
(36, ' Politik', 4, 'johar290204@gmail.com'),
(37, ' Selebriti', 1, 'johar290204@gmail.com'),
(38, ' Olahraga', 1, 'johar290204@gmail.com'),
(39, ' Bisnis', 1, 'johar290204@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `post_description`
--

CREATE TABLE `post_description` (
  `p_id` int(15) NOT NULL,
  `p_heading` mediumtext NOT NULL,
  `p_description` mediumtext NOT NULL,
  `p_thumbnail` varchar(100) NOT NULL,
  `p_category` varchar(50) DEFAULT NULL,
  `p_carousel` varchar(100) DEFAULT NULL,
  `complete_post` longtext DEFAULT NULL,
  `p_time` varchar(50) DEFAULT NULL,
  `admin_email` varchar(50) DEFAULT NULL,
  `nama_penulis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_description`
--

INSERT INTO `post_description` (`p_id`, `p_heading`, `p_description`, `p_thumbnail`, `p_category`, `p_carousel`, `complete_post`, `p_time`, `admin_email`, `nama_penulis`) VALUES
(67, 'Guru Besar UI Kritik Lembaga Hukum Jadi Senjata Politik', '<p>Guru besar antropologi hukum Universitas Indonesia, Sulistyowati Irianto, mengatakan situasi&nbsp;<a href=\"https://www.tempo.co/tag/hukum\">hukum&nbsp;</a>di Indonesia saat ini tidak lebih baik dibanding tahun-tahun kemarin. Ia menyebut penguasa menggunakan hukum sebagai senjata politik.</p>\r\n', '667389bfd701d5.50283062.jpg', ' Politik', '66738a60280121.40309716.jpg', '<p><strong>TEMPO.CO</strong>,&nbsp;<strong>Jakarta</strong>&nbsp;- Guru besar antropologi hukum Universitas Indonesia, Sulistyowati Irianto, mengatakan situasi&nbsp;<a href=\"https://www.tempo.co/tag/hukum\">hukum&nbsp;</a>di Indonesia saat ini tidak lebih baik dibanding tahun-tahun kemarin. Ia menyebut penguasa menggunakan hukum sebagai senjata politik.</p>\r\n\r\n<p>&ldquo;Diam-diam mereka menggunakan otoritas sebagai lembaga tinggi negara untuk mendefinisikan kekuasaan, kepentingan para elite penguasa,&rdquo; kata Sulistyowati dalam diskusi publik yang digelar Nurcholis Madjid Society bertajuk Hukum sebagai Senjata Politik di Aula Graha STR, Jakarta Selatan, pada Rabu, 19 Juni 2024.</p>\r\n\r\n<p>Sebagai contoh, Sulistyowati menyoroti kinerja Dewan Perwakilan Rakyat yang banyak merevisi Undang-Undang (UU) tanpa urgensi yang jelas. Alih-alih memberi manfaat, UU itu justru potensial melemahkan demokrasi. Misalnya, revisi UU Penyiaran, revisi UU TNI dan Polri, dan sebagainya.<br />\r\n&nbsp;</p>\r\n\r\n<p>Selain itu, ia juga menyebut Mahkamah Konstitusi (<a href=\"https://www.tempo.co/tag/mk\">MK</a>) dan Mahkamah Agung (MA) yang keputusannya kerap menuai kontroversi. Diketahui, MK pernah mengeluarkan putusan tentang batas usia minimum calon presiden dan wakil presiden. Sejumlah pengamat menyebut, putusan itu menguntungkan putra sulung Presiden Jokowi, Gibran Rakabuming Raka untuk maju dalam pemilihan presiden 2024.</p>\r\n\r\n<p>Sedangkan MA, mengabulkan permohonan uji materiil dari Partai Garuda mengenai batas usia calon kepala daerah pada Rabu, 29 Mei 2024. Pengamat menilai putusan itu membuka jalan bagi putra bungsu Jokowi, Kaesang Pangarep untuk maju dalam pemilihan kepala daerah 2024.<br />\r\n&nbsp;</p>\r\n\r\n<p>&ldquo;Saya kurang paham para sarjana hukum yang menjadi hakim-hakim itu, apakah mereka sengaja menyalahgunakan teori yang mereka gunakan di kelas, yaitu positivisme hukum,&rdquo; ucapnya</p>\r\n\r\n<p>Sulistyowati menjelaskan para hakim tersebut meletakkan eksistensi hukum hanya dari teks-teks, per pasal-pasal, dan dilepaskan dari substansinya. Mereka kurang memperhatikan dampak dan keadilan dari hukum itu sendiri.</p>\r\n', '1718848096', 'johar290204@gmail.com', 'johar'),
(68, 'Golkar Lebih Condong Dukung Ridwan Kamil Maju Cagub Jawa Barat Ketimbang Jakarta', '<p>Partai&nbsp;<a href=\"https://www.tempo.co/tag/golkar\" target=\"_blank\">Golkar</a>&nbsp;belum &nbsp;pasti memberikan dukungannya ke&nbsp;<a href=\"https://www.tempo.co/tag/ridwan-kamil\" target=\"_blank\">Ridwan Kamil&nbsp;</a>alias RK untuk maju sebagai bakal calon Gubernur DKI Jakarta di&nbsp;<a href=\"https://www.tempo.co/tag/pilkada-2024\" target=\"_blank\">Pilkada 2024</a>. Hal ini lantaran mempertimbangkan elektabilitas RK di Jawa Barat dinilai lebih tinggi.</p>\r\n', '66738b04a1fc17.19641277.jpg', ' Politik', '66738b68813e84.12720855.jpg', '<p><strong>TEMPO.CO</strong>,&nbsp;<strong>Jakarta</strong>&nbsp;- Partai&nbsp;<a href=\"https://www.tempo.co/tag/golkar\" target=\"_blank\">Golkar</a>&nbsp;belum &nbsp;pasti memberikan dukungannya ke&nbsp;<a href=\"https://www.tempo.co/tag/ridwan-kamil\" target=\"_blank\">Ridwan Kamil&nbsp;</a>alias RK untuk maju sebagai bakal calon Gubernur DKI Jakarta di&nbsp;<a href=\"https://www.tempo.co/tag/pilkada-2024\" target=\"_blank\">Pilkada 2024</a>. Hal ini lantaran mempertimbangkan elektabilitas RK di Jawa Barat dinilai lebih tinggi.</p>\r\n\r\n<p>&quot;Tentu DKI Jakarta kami masih menunggu survei terakhir dan nanti kami putuskan bersama,&quot; kata Ketua Umum Partai Golkar Airlangga Hartarto di komplek perumahan Widya Chandra, Jakarta Selatan pada Rabu, 19 Juni 2024.&nbsp;<br />\r\nAdapun Wakil Ketua Umum Partai Golkar, Ahmad Doli Kurnia Tandjung pada kesempatan yang sama mengatakan untuk Pilkada Jakarta dan Jawa Barat sudah ada pembicaraan dengan partai Koalisi Indonesia Maju (KIM).</p>\r\n\r\n<p>Pihaknya bakal melihat perkembangan survei hingga 27 sampai 29 Agustus 2024 mendatang. Nama Ridwan Kamil muncul sebagai Cagub Jakarta disebut sejak 6 bulan lalu.</p>\r\n\r\n<p>&quot;Tujuh bulan yang lalu kami kasih surat tugas di dua tempat di Jakarta dan Jawa Barat tujuannya untuk melakukan sosialisasi juga membantu pemenangan partai Golkar sambil memetakan respons masyarakat,&quot; kata Doli.</p>\r\n\r\n<p>Doli menjelaskan untuk survei saat ini jika dibandingkan Jakarta dan Jawa Barat, nama Ridwan Kamil masih cukup unggul di Jawa Barat.</p>\r\n\r\n<p>&quot;Ridwan Kamil ini di Jawa Barat sudah teruji pertama&nbsp;<em>approval ratting-</em>nya cukup tinggi sekali, elektabilitas tidak ada yang menandingi,&quot; ujar dia.</p>\r\n\r\n<p>Menurutnya masyarakat Jawa Barat masih menginginkan RK menjadi Gubernurnya. Sementara untuk hasil survei di Jakarta uji coba dilakukan saat Ridwan Kamil mengunggah&nbsp;<em>billboard</em>&nbsp;di akun media sosialnya berisi &#39;<em>on the way</em>&nbsp;ke Jakarta&#39;. &quot;Memang itu punya daya kejut. Nah elektabilitasnya lumayan,&quot; ujarnya.&nbsp;</p>\r\n\r\n<p>Namun, saat ada nama Anies Baswedan dicalonkan dan muncul nama Basuki Tjahja Purnama alias Ahok itu menurunkan elektabilitas Ridwan Kamil.&nbsp;</p>\r\n\r\n<p>Doli menyebut Airlangga menyatakan butuh waktu untuk memutuskan mengusung RK ke mana. &quot;Lihat perkembangan&nbsp;<em>toh</em>&nbsp;juga waktunya masih cukup. Masih ada 2 bulan lagi sampai pendaftaran,&quot; tuturnya.</p>\r\n\r\n<p>Saat ditanya mengenai Ketua Umum Partai Amanat Nasional (PAN) Zulkifli Hasan yang mengklaim semua partai KIM menyetujui RK maju ke Jakarta, Doli mengatakan semua sesuai arahan Airlangga. &quot;Tapi pak Airlangga yang informasi ke kami masih butuh waktu untuk didiskusikan. Sudah sepakat sampai sekarang belum diputuskan,&quot; ujarnya.</p>\r\n\r\n<p>Doli mengatakan untuk saat ini kecenderungan Golkar lebih ke Jawa Barat dibanding Jakarta. &quot;Walau kecenderungan Golkar sekarang mendorong Jawa Barat, kami belum putuskan apa-apa di Jakarta,&quot; tuturnya.</p>\r\n', '1718848360', 'johar290204@gmail.com', 'johar'),
(69, 'Politikus Golkar Bilang Ahmad Luthfi Jadi Prioritas Partainya untuk Diusung di Pilgub Jateng', '<p>Wakil Ketua Umum Partai Golkar Ahmad Doli Kurnia Tandjung mengatakan partainya mempunyai kecenderungan mendukung Inspektur Jenderal&nbsp;<a href=\"https://www.tempo.co/tag/ahmad-luthfi\">Ahmad Luthfi</a>&nbsp;sebagai calon Gubernur Jawa Tengah. Hal ini meski masih ada nama lain yang ditimbang Golkar, yakni Dico Ganinduto.&nbsp;</p>\r\n', '66738bec2db196.63584893.jpg', ' Politik', '66738c2d07e9d8.32096117.jpg', '<p><strong>TEMPO.CO</strong>,&nbsp;<strong>Jakarta</strong>&nbsp;- Wakil Ketua Umum Partai Golkar Ahmad Doli Kurnia Tandjung mengatakan partainya mempunyai kecenderungan mendukung Inspektur Jenderal&nbsp;<a href=\"https://www.tempo.co/tag/ahmad-luthfi\">Ahmad Luthfi</a>&nbsp;sebagai calon Gubernur Jawa Tengah. Hal ini meski masih ada nama lain yang ditimbang Golkar, yakni Dico Ganinduto.&nbsp;</p>\r\n\r\n<p>&quot;Untuk Jawa Tengah kami sudah ada pembicaraan, sementara ini masih Pak Luthfi walaupun&nbsp;<a href=\"https://www.tempo.co/tag/golkar\">Golkar&nbsp;</a>masih menyertakan nama Dico. Tapi sementara kami tetapkan prioritas, salah satunya Pak Luthfi,&quot; kata Doli di komplek perumahan Widya Chandra, Jakarta Selatan, pada Rabu, 19 Juni 2024.</p>\r\n\r\n<p>Ahmad Luthfi diketahui saat ini masih menjabat sebagai Kapolda Jawa Tengah. Namanya diusung Ketua Partai Amanat Nasional (PAN) Zulkifli Hasan. Sementara itu, Doli mengatakan kemunculan nama Dico adalah sebagai tes ombak dengan Raffi Ahmad di Jawa Tengah.</p>\r\n\r\n<p>&quot;Kemarin Dico dalam waktu sebulan terakhir melakukan konsolidasi dengan Raffi Ahmad. Katakanlah mau<em>&nbsp;test the water</em>&nbsp;lah. Makanya sedang kami cermati,&quot; ujarnya. Menurut Doli, dari dua bakal calon itu, kecondongan Golkar tetap mengarah ke Ahmad Luthfi.&nbsp;</p>\r\n\r\n<p>Wakil Ketua Umum PAN Viva Yoga mengatakan partainya sudah berkomunikasi dengan sejumlah partai Koalisi Indonesia Maju (KIM) untuk membahas pengusungan Ahmad Luthfi maju sebagai calon gubernur Jawa Tengah.</p>\r\n\r\n<p>&quot;Kami PAN sudah melakukan komunikasi, terutama anggota KIM dengan Golkar, Gerindra, Demokrat dan lain sebagainya,&quot; kata Viva dihubungi&nbsp;<em>Tempo&nbsp;</em>melalui pesan singkat pada Rabu, 12 Juni 2024.</p>\r\n\r\n<p>PAN menyatakan mendukung Ahmad Luthfi menjadi cagub Jateng 2024 lantaran dia dianggap punya integritas yang baik, memiliki visi, dan pandangan untuk kemajuan Jateng, serta dianggap mampu meningkatkan kesejahteraan rakyat. &quot;Pak Luthfi diterima oleh seluruh komponen di masyarakat di Jawa Tengah,&quot; ujarnya.</p>\r\n', '1718848557', 'johar290204@gmail.com', 'johar'),
(70, 'Bobby Nasution Percaya Diri Hadapi Pesaingnya di Pilkada Sumut, Mulai Edy Rahmayadi hingga Ijeck', '<p>Wali Kota Medan&nbsp;<a href=\"https://www.tempo.co/tag/bobby-nasution\" target=\"_blank\">Bobby Nasution</a>&nbsp;hari ini resmi mendapat surat dukungan dari Ketua Umum Partai&nbsp;<a href=\"https://www.tempo.co/tag/golkar\" target=\"_blank\">Golkar&nbsp;</a>Airlangga Hartarto untuk maju sebagai calon gubernur di<a href=\"https://www.tempo.co/tag/pilkada-sumut\" target=\"_blank\">&nbsp;Pilkada Sumut&nbsp;</a>2024.</p>\r\n', '66738c620a9738.00264158.jpg', ' Politik', '66738cab7925a5.43563455.jpg', '<p><strong>TEMPO.CO</strong>,&nbsp;<strong>Jakarta</strong>&nbsp;- Wali Kota Medan&nbsp;<a href=\"https://www.tempo.co/tag/bobby-nasution\" target=\"_blank\">Bobby Nasution</a>&nbsp;hari ini resmi mendapat surat dukungan dari Ketua Umum Partai&nbsp;<a href=\"https://www.tempo.co/tag/golkar\" target=\"_blank\">Golkar&nbsp;</a>Airlangga Hartarto untuk maju sebagai calon gubernur di<a href=\"https://www.tempo.co/tag/pilkada-sumut\" target=\"_blank\">&nbsp;Pilkada Sumut&nbsp;</a>2024.</p>\r\n\r\n<p>Bobby mengaku percaya diri untuk menang dalam pertarungan di Pilkada Sumatera Utara itu.</p>\r\n\r\n<p>&quot;Ya pede (percaya diri) kan harus lihat gagasannya ya. Yang saya bilang tadi untuk personalnya bukan siap melawan si A, si B. Tapi gagasan kami nanti tarungnya,&quot; kata Bobby usai bertemu Airlangga Hartarto di Kompleks Menteri Widya Chandra, Jakarta Selatan, Rabu, 19 Juni 2024.</p>\r\n\r\n<p>Seperti diketahui sebelumnya Golkar juga telah menugaskan kadernya, Musa Rajekshah alias Ijeck untuk maju di Pilgub Sumut. Selain itu ada pula Edy Rahmayadi yang juga menyatakan akan maju dan telah lolos uji kelayakan di Partai Kebangkitan Bangsa atau PKB.&nbsp;</p>\r\n\r\n<p>Adapun PDIP dikabarkan akan mengusung mantan Gubernur DKI Basuki Tjahaja Purnama alias Ahok untuk maju di Pilgub Sumut. Menanggapi soal nama-nama yang bakal menjadi pesaingnya itu, Bobby mengatakan, semakin banyak yang maju semakin bagus.</p>\r\n\r\n<p>&quot;Karena ini bukan tentang personal siapa saja orangnya, tapi tentang gagasannya,&quot; ujarnya.</p>\r\n\r\n<p>Bobby mengatakan, sebelum meminta dukungan Ketua Umum Partai Golkar, ia sudah melapor ke Gerindra. &quot;Sudah, saya sudah lapor ke Gerindra. Saya sampaikan pertemuan sore ini,&quot; katanya.</p>\r\n\r\n<p>Bobby Nasution telah menjadi kader Gerindra. Ia mendapat kartu tanda anggota pada 20 Mei lalu. Menantu Presiden Jokowi itu kemudian mendaftar ke Gerindra untuk maju Pilgub Sumut.</p>\r\n\r\n<p>Kepada jurnalis, Bobby Nasution mengaku bersyukur bisa bergabung dengan Gerindra dan bisa maju dalam&nbsp;<a href=\"https://www.tempo.co/tag/pilgub-sumut\" target=\"_blank\">Pilgub Sumut</a>.</p>\r\n\r\n<p>&quot;Dengan mengucap bismillah, saya perhari ini menyatakan diri untuk masuk sebagai kader partai Gerindra. Dan alhamdulillah pendaftaran saya langsung diterima oleh ketua DPD Gerindra Sumut. Saya juga menyampaikan akan maju sebagai calon gubernur Sumut,&quot; ujar Bobby.</p>\r\n', '1718848683', 'johar290204@gmail.com', 'johar'),
(71, 'Banyak Rasakan Perbedaan, Cerita Nabila Taqiyyah Bagaimana Kehidupan Setelah Indonesian Idol 2023 Usai', '<p>Runner up Indonesian Idol season 12,&nbsp;<a href=\"https://www.kapanlagi.com/nabila-taqiyyah/\">Nabila Taqiyyah</a>&nbsp;rupanya benar-benar merasakan perubahan dalam hidupnya setelah kompetisi yang ia ikuti selesai. Ia pun mengaku masih tak percaya bahwa dirinya yang dulu bukan siapa-siapa, kini dikenal banyak orang.</p>\r\n', '66738dfe02a5d1.96144165.jpg', ' Selebriti', '66738e4aadcc23.08805092.jpg', '<p><strong>Kapanlagi.com</strong>&nbsp;- Runner up Indonesian Idol season 12,&nbsp;<a href=\"https://www.kapanlagi.com/nabila-taqiyyah/\">Nabila Taqiyyah</a>&nbsp;rupanya benar-benar merasakan perubahan dalam hidupnya setelah kompetisi yang ia ikuti selesai. Ia pun mengaku masih tak percaya bahwa dirinya yang dulu bukan siapa-siapa, kini dikenal banyak orang.</p>\r\n\r\n<p>Saat ditemui di Kapanlagi Youniverse, Jakarta Pusat, Rabu (19/6) Nabila menceritakan bagaimana hal tersebut ia rasakan. Nabila menjelaskan menjadi dikenal banyak orang adalah hal yang seru baginya.</p>\r\n\r\n<p>&quot;Mayan berbeda aja, sekarang itu setiap pergerakan kita selalu dinotice sama fanbase sama netizen,&quot; ungkap Nabila Taqiyyah.</p>\r\n\r\n<p>&quot;Dan juga setiap kita pergi ke mana pun banyak yang kenal, minta foto lah dulu kan nggak, ternyata banyak yang sayang sama aku yang support aku dan makasi banget,&quot; lanjutnya.</p>\r\n\r\n<h2>1. Dapat Hadiah Mic</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Saat ditanya lebih lanjut, Nabila juga menceritakan momen di mana ia diberikan hadiah oleh penggemar. Hadiah tersebut berupa mic yang hingga saat ini selalu ia gunakan ketika manggung.</p>\r\n\r\n<p>&quot;Pernah, bersyukur banget aku pernah dikasih hadiah mic semoga bisa bermanfaat dan sampai sekarang aku pakai manggung,&quot; ujarnya.</p>\r\n\r\n<h2>2. Pernah Down</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Selain itu, meski kini berhasil mendulang popularitas, Nabila juga pernah berada di titik terendah. Baginya, hal ini justru jadi pemacu agar ia bersangat untuk teru berkembang menggapai mimpi.</p>\r\n\r\n<p>&quot;Pernah pastinya itu saat aku lagi down ngerasa kayak aku tuh nggak layak untuk jadi penyanyi,&quot; paparnya.</p>\r\n\r\n<p>&quot;Sempat mikir begitu bakal mungkin orang daerah kayak aku jadi artis, tapi alhamdulillah rejekinya memang di sini,&quot; tukasnya.</p>\r\n', '1718849098', 'johar290204@gmail.com', 'johar'),
(72, 'Joan Mir Dikabarkan Akan Lanjut dengan Honda', '<p>Mantan juara dunia MotoGP, Joan Mir, tidak akan kemana-mana. Mir dikabarkan bersedia memperpanjang kontraknya dengan Honda.<br />\r\n<br />\r\n&nbsp;</p>\r\n', '6673a65653b911.87081709.jpeg', ' Olahraga', '6673a6b5425db8.93300438.jpeg', '<p>Jakarta - Mantan juara dunia MotoGP, Joan Mir, tidak akan kemana-mana. Mir dikabarkan bersedia memperpanjang kontraknya dengan Honda.<br />\r\nMasa depan pebalap Spanyol itu dalam tanda tanya karena kontraknya akan habis pada akhir musim 2024. Pasalnya, performa Mir gagal mendongkrak Honda sejak bergabung setahun lalu.<br />\r\n<br />\r\nJoan Mir hanya finis ke-22 di musim debutnya, sebelum nangkring di posisi 18 klasemen sementara musim ini. Lebih buruk lagi adalah pencapaian terbaik Mir hanyalah sekali finis kelima, yang diraih di balapan utama MotoGP India 2023.<br />\r\n&nbsp;</p>\r\n\r\n<p>Di tengah kesulitan Honda menyediakan motor yang kompetitif, berimbas pada nilai tawar Joan Mir. Pebalap berusia 26 tahun itu mengaku ingin hengkang tapi sepi peminat, bahkan ide pensiun pun menjadi opsi. Sekalipun ada sejumlah rumor yang mengaitkan Joan Mir dengan Gresini dan Trackhouse Aprilia.<br />\r\n<br />\r\n&quot;Tidak ada yang keluar dari Honda dengan posisi yang lebih baik daripada saat mereka masuk. Ketika aku bergabung Honda, aku memiliki banyak tawaran, tapi sekarang tidak seperti ini,&quot; ucap dia belum lama ini.<br />\r\n<br />\r\n&quot;Aku harus menunggu pebalap lain yang lebih diprioritaskan saat ini. Sedikit banyak memang kenyataannya seperti ini. Tidak peduli apa yang sudah anda lakukan di masa lalu. Sekarang itu ada pebalap-pebalap dengan hasil lebih baik, mungkin 4-5 pebalap, yang lebih diprioritaskan.&quot;<br />\r\n<br />\r\nNamun demikian, mantan pebalap Suzuki itu dikabarkan akhirnya membuat keputusan terkait masa depannya. Berdasarkan laporan Motorsport, Honda berhasil meyakinkan Joan Mir bertahan lebih lama.<br />\r\n<br />\r\nPabrikan Jepang itu membutuhkan Joan Mir untuk melanjutkan pengembangan motornya, sekaligus menjadi duet Luca Marini pada musim 2025. Selain itu, Joan Mir diyakini juga telah melihat adanya kemajuan yang dibuat Honda.<br />\r\n<br />\r\nTim satelit Honda, LCR, dikabarkan akan mempertahankan Johann Zarco meskipun nasib Takaaki Nakagami belum diketahui. Sedangkan kini berarti hanya ada dua kursi tersisa di tim pabrikan untuk musim depan: masing-masing satu di Aprilia dan Yamaha.<br />\r\n<br />\r\n&nbsp;</p>\r\n', '1718855349', 'johar290204@gmail.com', 'johar'),
(73, 'Harga Emas Antam Naik Hari Ini, Senada dengan emas Dunia yang Melesat', '<p>Harga emas Logam Mulia produksi PT Aneka Tambang Tbk pada Kamis (20/6/2024) di butik emas LM Graha Dipta Pulo Gadung tercatat Rp1.355.000, melesat Rp6.000 per gram.<br />\r\n&nbsp;</p>\r\n', '6673a7f8102672.04317517.jpeg', ' Bisnis', '6673a839de5460.08715173.jpeg', '<p><strong>Jakarta, CNBC Indonesia</strong>&nbsp;- Harga emas Logam Mulia produksi PT Aneka Tambang Tbk pada Kamis (20/6/2024) di butik emas LM Graha Dipta Pulo Gadung tercatat Rp1.355.000, melesat Rp6.000 per gram.</p>\r\n\r\n<p>Begitu juga dengan harga&nbsp;<em>buyback</em>&nbsp;(harga yang digunakan ketika menjual emas kembali) berada di posisi Rp1.233.000 per gram, melejit Rp6.000.</p>\r\n\r\n<p>Harga emas Antam menguat seiring dengan emas dunia yang melejit.&nbsp;Berdasarkan&nbsp;<em>Reuters&nbsp;</em>harga emas di pasar spot&nbsp;penutupan perdagangan kemarin di US$2.327,47 per troy ons, turun 0,04% dari hari sebelumnya.</p>\r\n\r\n<p>Penjualan ritel Amerika Serikat hampir tidak meningkat pada bulan Mei dan angka untuk bulan sebelumnya direvisi jauh lebih rendah, data menunjukkan pada hari Selasa, menunjukkan aktivitas ekonomi masih lesu pada kuartal kedua.</p>\r\n\r\n<p>Hal ini sedikit meningkatkan kemungkinan penurunan suku bunga Federal Reserve pada bulan September menjadi 67% dari 61% pada hari sebelumnya, menurut perangkat CME FedWatch.</p>\r\n\r\n<p>Penggerak utama pergerakan harga emas masih berupa ekspektasi pasar terhadap kebijakan moneter The Fed dan meskipun&nbsp;harga&nbsp;naik, pergerakan tersebut cukup lemah karena pasar menunggu berita yang lebih penting, kata Ricardo Evangelista, analis senior di ActivTrades.</p>\r\n\r\n<p>Suku bunga yang lebih rendah mengurangi biaya peluang untuk memegang emas batangan yang tidak memberikan imbal hasil.</p>\r\n', '1718855737', 'johar290204@gmail.com', 'johar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`),
  ADD KEY `about_us_ibfk_1` (`admin_email`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contact_us_ibfk_1` (`admin_email`);

--
-- Indexes for table `post_category`
--
ALTER TABLE `post_category`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `post_category_ibfk_1` (`admin_email`);

--
-- Indexes for table `post_description`
--
ALTER TABLE `post_description`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `post_description_ibfk_1` (`admin_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `post_category`
--
ALTER TABLE `post_category`
  MODIFY `c_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `post_description`
--
ALTER TABLE `post_description`
  MODIFY `p_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `about_us`
--
ALTER TABLE `about_us`
  ADD CONSTRAINT `about_us_ibfk_1` FOREIGN KEY (`admin_email`) REFERENCES `admin` (`email`);

--
-- Constraints for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD CONSTRAINT `contact_us_ibfk_1` FOREIGN KEY (`admin_email`) REFERENCES `admin` (`email`);

--
-- Constraints for table `post_category`
--
ALTER TABLE `post_category`
  ADD CONSTRAINT `post_category_ibfk_1` FOREIGN KEY (`admin_email`) REFERENCES `admin` (`email`);

--
-- Constraints for table `post_description`
--
ALTER TABLE `post_description`
  ADD CONSTRAINT `post_description_ibfk_1` FOREIGN KEY (`admin_email`) REFERENCES `admin` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
