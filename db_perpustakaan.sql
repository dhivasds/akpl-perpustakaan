-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2021 at 05:26 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku_detail`
--

CREATE TABLE `buku_detail` (
  `id` int(11) NOT NULL,
  `judul_buku` varchar(75) NOT NULL,
  `isi_buku` text NOT NULL,
  `penulis` varchar(55) NOT NULL,
  `tahun_terbit` int(5) NOT NULL,
  `jenis_buku` varchar(55) NOT NULL,
  `bahasa` varchar(55) NOT NULL,
  `penerbit` varchar(55) NOT NULL,
  `gambar` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku_detail`
--

INSERT INTO `buku_detail` (`id`, `judul_buku`, `isi_buku`, `penulis`, `tahun_terbit`, `jenis_buku`, `bahasa`, `penerbit`, `gambar`) VALUES
(14, 'Mindset', 'Kesuksesan tak hanya buah bakat dan kecerdasan serta usaha. Cara kita memandang diri, dunia, dan kesuksesan juga amat berperan. Karena itu, kunci sukses dalam segala pentas kehidupan sesungguhnya adalah pola pikir sehat. Orang berpola pikir sehat tidak menyalahkan keadaan dirinya. Alih-alih mengandalkan bakat dan kecerdasan, dia lebih menekankan proses belajar dan peran ikhtiar. Baginya, kesuksesan atau kegagalan di masa kini bukanlah cerminan dari masa datang.<br>\r\n\r\nPaparan tentang kesuksesan dalam buku ini sangat mendasar dan langka. Lazimnya, buku-buku tentang kesuksesan lebih menawarkan sisi-sisi praktis. Tetapi, buku ini justru mengajak Anda menggarap inti masalah kesuksesan: pikiran. Tak hanya itu, buku ini mengontraskan dengan apik tokoh-tokoh duniadi bidang musik, sastra, sains, olahraga, dan bisnis--yang berpola pikir tetap (ﬁxed mindset) dan berpola pikir tumbuh (growth mindset). Ternyata, tokoh yang berpola pikir tumbuh lebih mampu mempertahankan kesuksesan dan kegembiraan hidup.<br>\r\n\r\nBagi Anda penikmat buku motivasi, teramat sayang bila Anda tak melahap isi buku ini. Bagi Anda para pemimpin, eksekutif, guru, orangtua, atau pelatih olahraga, buku ini sangat membantu dalam mengubah para pembelajar bermasalah menjadi insan-insan sukses dan bahagia. Sebagai pribadi pun, Anda tak bakal kecewa dengan buku hasil penelitian 20 tahun lebih dari ahli kenamaan di bidang psikologi kepribadian ini. Banyak inspirasi yang niscaya membuat Anda senantiasa optimis, gembira, dan terampil membangkitkan kemampuan-kemampuan dahsyat dalam diri Anda.', 'Carol S. Dweck', 2019, 'Self Improvement', 'Indonesia', 'BACA', '61bf5827f2e9f.jpg'),
(15, 'Bulan', 'Miss Selena bersama Av berniat untuk mengajak mereka berkunjung ke klan Matahari selama kurang lebih dua minggu. Av memiliki rencana hendak menemui ketua konsil klan Matahari. Diduga Konsil klan Matahari ingin menguasai klan matahari guna mencari federasi dalam melawan Tamus yang diperkirakan akan bebas dan juga membebaskan raja tanpa mahkota.<br>\r\n\r\nSaat sudah di klan Matahari mereka disambut oleh Festival Matahari Bunga Matahari. Di saja Raib, Seli, Ali, juga Ily diminta untuk menjadi peserta kesepuluh dari Festival Bunga Matahari oleh ketua konsil klan Matahari, yaitu Av dan Miss Selena.<br>\r\n\r\nDengan segala kemampuan yang dimiliki oleh Seli, Raib, dan Ily bersamaan dengan senjata panah dan pemukul, mereka mempunyai tekad untuk melewati rintangan yang sangat berbahaya itu.<br>\r\n\r\nFestival Bunga Matahari merupakan suatu ajang kompetisi terpenting di klan Matahari dan sudah menjadi sebuah tradisi pada tiap tahunnya.<br>\r\n\r\nSembilan kontingen atau rombongan dari sembilan fraksi seluruh negeri berkompetisi untuk mendapati bunga matahari pertama mekar di suatu tempat yang dirahasiakan. Barangsiapa yang menemukan bunga tersebut maka kontingen yang bersangkutanlah yang akan menjadi pemenang di festival itu.<br>\r\n\r\nPeserta lombanya, yaitu anak muda tangguh, dan sudah terlatih, serta menguasai kemampuan untuk mempertahankan hidup dengan baik. Hal itu karena akan ada berbagai rintangan untuk menemukan dan mendapati bunga tersebut. Apabila yang memetik adalah orang dengan penuh ambisi, bunga matahari itu akan mengeluarkan senjata dan kekuasaan. Sementara, apabila yang memetik adalah orang dengan penuh keingintahuan, bunga matahari itu akan memberikan ilmu baru, pengetahuan, dan teknologi.<br>\r\n\r\nPerjalanan pertama, mereka memperoleh petunjuk untuk mendapati bunyi suling yang tak terhenti. Kemudian, mereka pun berhasil mendapati petunjuk itu sesudah mendengar ada suara air terjun. Lalu saat melakukan perjalanan untuk menuju ke petunjuk selanjutnya, mereka banyak menghadapi rintangan, di antaranya serangan dari burung, gorila, tergenang banjir yang meluap, bahkan tunggangan mereka, yakni empat harimau pun menghilang. Mereka terpaksa berjalan kaki untuk mendapatkan petunjuk berikutnya.<br>', 'Tere Liye', 2015, 'Novel', 'Indonesia', 'Gramedia Pustaka Utama', '61bf590093e65.jpg'),
(16, 'Mantappu Jiwa', 'Mantappu Jiwa berisi kisah hidup Jerome sampai bisa kuliah di Jepang dan menjadi Youtuber terkenal. Rupanya keinginan Jerome untuk kuliah sudah tercetus sejak dia SD, karena alasan yang sangat sederhana: dia ingin pergi ke luar negeri seperti teman-temannya. Kisahnya pun mengalir ke bagaimana Jerome mencari beasiswa S1 penuh di luar negeri sejak SMP, perjuangannya belajar matematika dan ikut banyak lomba sejak SMA, dan jatuh bangunnya untuk mendapatkan beasiswa NUS, NTU, dan akhirnya Mitsui Busan ke Jepang.<br>\r\n\r\nSetelah sampai di Jepang dengan beasiswa penuhpun, perjuangan Jerome masih belum berakhir. Jerome masih harus belajar menaklukan Bahasa Jepang dari nol, belajar Matematika, Kimia, dan Fisika dalam Bahasa Jepang, serta beradaptasi di negara asing sampai akhirnya berhasil lulus menjadi mahasiswa di Waseda University.', 'Jerome Polin', 2019, 'Self Improvement', 'Indonesia', 'Gramedia Pustaka Utama', '61bf59a018a74.jpg'),
(17, 'Laskar Pelangi', 'Bangunan itu nyaris rubuh. Dindingnya miring bersangga sebalok kayu. Atapnya bocor di mana-mana. Tetapi, berpasang-pasang mata mungil menatap penuh harap. Hendak ke mana lagikah mereka harus bersekolah selain tempat itu? Tak peduli seberat apa pun kondisi sekolah itu, sepuluh anak dari keluarga miskin itu tetap bergeming. Di dada mereka, telah menggumpal tekad untuk maju.”<br>\r\n\r\nBegitu banyak hal menakjubkan yang terjadi dalam masa kecil para anggota Laskar Pelangi. Sebelas orang anak Melayu Belitong yang luar biasa ini tak menyerah walau keadaan tak bersimpati pada mereka. Tengoklah Lintang, seorang kuli kopra cilik yang genius dan dengan senang hati bersepeda 80 kilometer pulang pergi untuk memuaskan dahaganya akan ilmu bahkan terkadang hanya untuk menyanyikan padamu negeri di akhir jam sekolah atau Mahar, seorang pesuruh tukang parut kelapa sekaligus seniman dadakan yang imajinatif, tak logis, kreatif, dan sering diremehkan sahabat-sahabatnya, namun berhasil mengangkat derajat sekolah kampung mereka dalam karnaval 17 Agustus, dan juga sembilan orang Laskar Pelangi lain yang begitu bersemangat dalam menjalani hidup dan berjuang meraih cita-cita.<br>\r\n\r\nIronisnya kehidupan mereka, kejujuran pemikiran mereka, indahnya petualangan mereka, dan temukan diri Anda tertawa, menangis, dan tersentuh saat membaca setiap lembarnya. Buku ini dipersembahkan buat mereka yang meyakini the magic of childhood memories, dan khususnya juga buat siapa saja yang masih meyakini adanya pintu keajaiban lain untuk mengubah dunia pendidikan.<br>\r\n\r\nLaskar Pelangi, kisah perjuangan anak-anak untuk mendapatkan ilmu. Diceritakan dengan lucu dan menggelitik, novel ini menjadi novel terlaris di Indonesia. Inspiratif dan layak dimiliki siapa saja yang mencintai pendidikan dan keajaiban masa kanak-kanak.', 'Andrea Hirata', 2005, 'Novel', 'Indonesia', 'Andrea Hirata', '61bf5a1d1f08c.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(7, 'admin', '$2y$10$bWg5MIe1lLWPUtJVzq0rO.aJqqslEQSuklSccJk2LSZB7Zz4GV29e', 'admin'),
(11, 'user', '$2y$10$tGZi2o20pW.3cLs0bMsjVuddA.BzAxmQ.NdIWJ46s5isyk1I0LPXu', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku_detail`
--
ALTER TABLE `buku_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku_detail`
--
ALTER TABLE `buku_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
