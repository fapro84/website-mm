-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Okt 2022 pada 20.46
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multimedia`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_siswa`
--

CREATE TABLE `data_siswa` (
  `nama` varchar(50) NOT NULL,
  `nis` varchar(5) NOT NULL,
  `kelas` varchar(10) DEFAULT NULL,
  `jk` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_siswa`
--

INSERT INTO `data_siswa` (`nama`, `nis`, `kelas`, `jk`) VALUES
('fapee', '1234', 'XII DKV 1', 'L'),
('Aah Faqih Fuad Aziz', '15596', 'XII DKV 1', 'L'),
('Adi Bayu Setiawan', '15597', 'XII DKV 1', 'L'),
('Adinda Sarah', '15598', 'XII DKV 1', 'P'),
('Afif Zaki Rifda Wibowo', '15599', 'XII DKV 1', 'L'),
('Agung Nugroho Sulistyo Utomo', '15600', 'XII DKV 1', 'L'),
('Amelia Qurota A\'Yun', '15601', 'XII DKV 1', 'P'),
('Arkan Surya Nur Irfanda', '15602', 'XII DKV 1', 'L'),
('Brian Kurnia', '15603', 'XII DKV 1', 'L'),
('Damara Marestya', '15604', 'XII DKV 1', 'L'),
('Elang Abimanyu Putra Kuncara', '15605', 'XII DKV 1', 'L'),
('Faza Febi Aghniya', '15606', 'XII DKV 1', 'P'),
('Fitra Eka Novantoro', '15607', 'XII DKV 1', 'L'),
('Fresti Setyana', '15608', 'XII DKV 1', 'P'),
('Ilham Nurcahyo', '15609', 'XII DKV 1', 'L'),
('Irvan Eka Saputra', '15610', 'XII DKV 1', 'L'),
('Isti\'Anah', '15611', 'XII DKV 1', 'P'),
('Iswanto', '15612', 'XII DKV 1', 'L'),
('Jauza Dhiyah Oktavia', '15613', 'XII DKV 1', 'P'),
('Krisna Ajie Wiyono', '15614', 'XII DKV 1', 'L'),
('Latifah Nurnaningsih', '15615', 'XII DKV 1', 'P'),
('Levana Nikhen Shinta Ayu *', '15616', 'XII DKV 1', 'P'),
('Maulidya Khairun Nisa\'', '15617', 'XII DKV 1', 'P'),
('Muhammad Faris Ardyansyah', '15618', 'XII DKV 1', 'L'),
('Muhammad Indra Maulana Wykhana', '15619', 'XII DKV 1', 'L'),
('Muhammad Irfan', '15620', 'XII DKV 1', 'L'),
('Muhammad Ivan Valensky', '15621', 'XII DKV 1', 'L'),
('Muhammad Rizal Nur Fahreza', '15622', 'XII DKV 1', 'L'),
('Nazal Aryp Riyanto', '15623', 'XII DKV 1', 'L'),
('Ndaru Wisnu Mahendra Aji', '15624', 'XII DKV 1', 'L'),
('Nilam Dwiyanti', '15625', 'XII DKV 1', 'P'),
('Rahardian Daffa Lathif Nandana', '15626', 'XII DKV 1', 'L'),
('Rehan Suradiyanto', '15627', 'XII DKV 1', 'L'),
('Rukhan Nur Hidayat', '15628', 'XII DKV 1', 'L'),
('Salma Fadilla Dwi Faratri', '15629', 'XII DKV 1', 'P'),
('Salwa Afuw Sahajati Putra', '15630', 'XII DKV 1', 'L'),
('Valentina Taufan Andriani', '15631', 'XII DKV 1', 'P'),
('Abdul Hayya', '15632', 'XII DKV 2', 'L'),
('Afin Hidayah', '15633', 'XII DKV 2', 'P'),
('Aldi Assidiq', '15634', 'XII DKV 2', 'L'),
('Alvin Fernanda Priadi Putra', '15635', 'XII DKV 2', 'L'),
('Alvine Yudania', '15636', 'XII DKV 2', 'P'),
('Anisa Beta Septiana', '15637', 'XII DKV 2', 'P'),
('Anugrah Dicky Setyawan', '15638', 'XII DKV 2', 'L'),
('Arif Taufik Hidayat', '15639', 'XII DKV 2', 'L'),
('Danar Pandu Hidayat', '15640', 'XII DKV 2', 'L'),
('Dhimas Galih Fahrezi', '15641', 'XII DKV 2', 'L'),
('Duwi Cahyo Nugroho', '15642', 'XII DKV 2', 'L'),
('Dwi Handika Yulianto', '15643', 'XII DKV 2', 'L'),
('Eggi Kurniawan', '15644', 'XII DKV 2', 'L'),
('Fadhiel Risqi', '15645', 'XII DKV 2', 'L'),
('Fajarwati Retno Hapsari', '15646', 'XII DKV 2', 'P'),
('Hafid Darusalam', '15647', 'XII DKV 2', 'L'),
('Hafidz Nur Ikhwan', '15648', 'XII DKV 2', 'L'),
('Ika Naila Rochmaniar', '15649', 'XII DKV 2', 'P'),
('Iqbal Ramadhan', '15650', 'XII DKV 2', 'L'),
('Khaila Farros Siswanto', '15651', 'XII DKV 2', 'L'),
('Marlina Sugiyanti', '15652', 'XII DKV 2', 'P'),
('Muhammad Alif Luthfi Hakim', '15653', 'XII DKV 2', 'L'),
('Nasywa Nurhaliza Prasetyo', '15655', 'XII DKV 2', 'P'),
('Ngafiyan Syah Mutawakkil N', '15656', 'XII DKV 2', 'L'),
('Nur Rahmat Saputra', '15657', 'XII DKV 2', 'L'),
('Raihan Nur Ikhsan', '15658', 'XII DKV 2', 'L'),
('Rayei Keio Baroroh Wibowo', '15659', 'XII DKV 2', 'P'),
('Ridho Husain Widyatmiko', '15660', 'XII DKV 2', 'L'),
('Rifki Setyadi', '15661', 'XII DKV 2', 'L'),
('Rita Tri Oktavia', '15662', 'XII DKV 2', 'P'),
('Rizky Tama Wicaksono', '15663', 'XII DKV 2', 'L'),
('Rohkhim Anugrah Saputra', '15664', 'XII DKV 2', 'L'),
('Rona Salma Aisyah', '15665', 'XII DKV 2', 'P'),
('Siska Aulia Maharani', '15666', 'XII DKV 2', 'P'),
('Wafiq Azizah', '15667', 'XII DKV 2', 'P'),
('Aisyah Tri Wahyuni', '16169', 'XI DKV 1', 'P'),
('Alfun Dhiya', '16170', 'XI DKV 1', 'L'),
('Anastasia Lintang Pramana*', '16171', 'XI DKV 1', 'P'),
('Arya Eka Saputra', '16172', 'XI DKV 1', 'L'),
('Arya Eka Satriatama', '16173', 'XI DKV 1', 'L'),
('Bezita Rivaldo', '16174', 'XI DKV 1', 'L'),
('Devira Anggraeni', '16175', 'XI DKV 1', 'P'),
('Dinar Veha Aisya', '16176', 'XI DKV 1', 'P'),
('Divanda Ardiansyah', '16177', 'XI DKV 1', 'L'),
('Eka Satriya Herismarwan', '16178', 'XI DKV 1', 'L'),
('Erlina Anggita Putri', '16179', 'XI DKV 1', 'P'),
('Fauzan Ardana', '16180', 'XI DKV 1', 'L'),
('Faziz Ramadhani', '16181', 'XI DKV 1', 'L'),
('Galang Fernando', '16182', 'XI DKV 1', 'L'),
('Hazna Nur Azizah', '16183', 'XI DKV 1', 'P'),
('Ilham Syaiful Latif', '16184', 'XI DKV 1', 'L'),
('Imelda Ayu Anggraeni', '16185', 'XI DKV 1', 'P'),
('Muhammad Fauzil Adhim', '16186', 'XI DKV 1', 'L'),
('Muhammad Hanif Fadhila', '16187', 'XI DKV 1', 'L'),
('Muhammad Zanuar Alfajar', '16188', 'XI DKV 1', 'L'),
('Muhsan Albari', '16189', 'XI DKV 1', 'L'),
('Nabila Faradita Assiffani', '16190', 'XI DKV 1', 'P'),
('Nadhifa Prima Syadi', '16191', 'XI DKV 1', 'P'),
('Najwa Kayla Davisa', '16192', 'XI DKV 1', 'P'),
('Raditya Ziven Al Rizqi', '16193', 'XI DKV 1', 'L'),
('Ridha Novita Handayani', '16194', 'XI DKV 1', 'P'),
('Rifail Adam Sidiq Al Mutakin', '16195', 'XI DKV 1', 'L'),
('Rizky Fatkhurrohman Tilano', '16196', 'XI DKV 1', 'L'),
('Sahasra Kirana Waramahisi Aulia', '16197', 'XI DKV 1', 'P'),
('Sahrul Indra Dwi Arya', '16198', 'XI DKV 1', 'L'),
('Selviyani Latifah', '16199', 'XI DKV 1', 'P'),
('Sevian Dwi Cahya', '16200', 'XI DKV 1', 'L'),
('Slevin Mahdavickia', '16201', 'XI DKV 1', 'L'),
('Talitha Maritza Anandhita', '16202', 'XI DKV 1', 'P'),
('Taufiq Kamal Astanto', '16203', 'XI DKV 1', 'L'),
('Yuki Ramadhan', '16204', 'XI DKV 1', 'L'),
('Aditya Angga Saputra', '16205', 'XI DKV 2', 'L'),
('Ahmad Jalu Wicaksono', '16206', 'XI DKV 2', 'L'),
('Alifian Hamka Wibisana', '16207', 'XI DKV 2', 'L'),
('Alzuna Arzan Dwi Rahandhika', '16208', 'XI DKV 2', 'L'),
('Amelia L\'Enasari Aristianti', '16209', 'XI DKV 2', 'P'),
('Arlinda Prastiwi', '16210', 'XI DKV 2', 'P'),
('Asto Budi Sulistyawan', '16211', 'XI DKV 2', 'L'),
('Aulia Azau Ikhsani', '16212', 'XI DKV 2', 'P'),
('Caniel Moreno', '16213', 'XI DKV 2', 'L'),
('Dimas Ikhwan Farel Sulendro', '16214', 'XI DKV 2', 'L'),
('Dwi Nurmala Sari', '16215', 'XI DKV 2', 'P'),
('Dzaky Idzaa Syikta', '16216', 'XI DKV 2', 'L'),
('Ega Humam Adiyatma', '16217', 'XI DKV 2', 'L'),
('Fikry Ardiansah', '16218', 'XI DKV 2', 'L'),
('Gibran Saputra', '16219', 'XI DKV 2', 'L'),
('Juan Riefka Pramundintya Irawan', '16220', 'XI DKV 2', 'L'),
('Khusnul Khasan Saputra', '16221', 'XI DKV 2', 'L'),
('Luky Arlif Kurniawan', '16222', 'XI DKV 2', 'L'),
('Lutfiani Aisyiya Gustari', '16223', 'XI DKV 2', 'P'),
('Miftakhul Jannah Khurin Ain', '16224', 'XI DKV 2', 'P'),
('Muhammad Abdie Luthfi Alfitra', '16225', 'XI DKV 2', 'L'),
('Mijhammad Fariz Adi Farandsyah', '16226', 'XI DKV 2', 'L'),
('Muhammad Fiqri Ramadhany', '16227', 'XI DKV 2', 'L'),
('Muhammad Nur Ardhiansyah', '16228', 'XI DKV 2', 'L'),
('Muhammad Rizal Arifin', '16229', 'XI DKV 2', 'L'),
('Mustika Risqia Tsani', '16230', 'XI DKV 2', 'P'),
('Olifyano Fahrizal Al Firdaus', '16231', 'XI DKV 2', 'L'),
('Penta Saulung Wijaya', '16232', 'XI DKV 2', 'L'),
('Putri Dita Franika Dewi', '16233', 'XI DKV 2', 'P'),
('Putrianingsih Dwi Kurniawati', '16234', 'XI DKV 2', 'P'),
('Ramadhan Ari Nugroho', '16235', 'XI DKV 2', 'L'),
('Rasya Lathif Nayudha', '16236', 'XI DKV 2', 'L'),
('Rayzel Kinetsha Aurelia', '16237', 'XI DKV 2', 'P'),
('Tiara Nessa Putri', '16238', 'XI DKV 2', 'P'),
('Tyas Novelia Sari', '16239', 'XI DKV 2', 'P'),
('Zulfaa Zuhrotun', '16240', 'XI DKV 2', 'P'),
('Aditya Dwi Aprilia Paramarta', '16746', 'X DKV 1', 'L'),
('Aditya Oktavian Susilo', '16747', 'X DKV 1', 'L'),
('Afin Herwa Megantara', '16748', 'X DKV 1', 'L'),
('Aghniya Ayu Nurhidayah', '16749', 'X DKV 1', 'P'),
('Ajib Kurniawan', '16750', 'X DKV 1', 'L'),
('Aratasya Fuan Azizah', '16751', 'X DKV 1', 'P'),
('Dhian Danar Sawitri', '16752', 'X DKV 1', 'P'),
('Dwi Ayu Primandaputri', '16753', 'X DKV 1', 'P'),
('Farel Tri Waluyo', '16754', 'X DKV 1', 'L'),
('Fenta Novan Amardian', '16755', 'X DKV 1', 'L'),
('Hanifah Fitria Huseini', '16756', 'X DKV 1', 'P'),
('Intan Rahmadani', '16757', 'X DKV 1', 'P'),
('Ismayanti Dwika Lestari', '16758', 'X DKV 1', 'P'),
('Kannya Ribella Prada Anggayasti', '16759', 'X DKV 1', 'P'),
('Lidia Nur Laila Sajidah', '16760', 'X DKV 1', 'P'),
('Lutfiah Irdina Safi', '16761', 'X DKV 1', 'P'),
('Marshanda Amelya Rosana Dewi', '16762', 'X DKV 1', 'P'),
('Mochammad Arief Ardianto', '16763', 'X DKV 1', 'L'),
('Muhammad Alif Fauzi', '16764', 'X DKV 1', 'L'),
('Muhammad Haydar Fatih Mumtaza', '16765', 'X DKV 1', 'L'),
('Muhammad Isyfa\' Lana', '16766', 'X DKV 1', 'P'),
('Muhammad Rivaldo Pratama', '16767', 'X DKV 1', 'L'),
('Naufal Rajwaa Fawwaz', '16768', 'X DKV 1', 'L'),
('Naufal Zaki Satria', '16769', 'X DKV 1', 'L'),
('Ra Putri Soleha Masayu K', '16770', 'X DKV 1', 'P'),
('Reffy Maulana Faustyawan', '16771', 'X DKV 1', 'L'),
('Rendi Aji Saputra', '16772', 'X DKV 1', 'L'),
('Ridho Dika Pratama', '16773', 'X DKV 1', 'L'),
('Rizki Akhla Ham\'Ma', '16774', 'X DKV 1', 'P'),
('Rizkia Mela Hertina', '16775', 'X DKV 1', 'P'),
('Rizky Muhamad Kurniawan', '16776', 'X DKV 1', 'L'),
('Salsabila Aufaa Zahrah', '16777', 'X DKV 1', 'P'),
('Shinta Satria Tami', '16778', 'X DKV 1', 'P'),
('Syafiq Taqy Haidar Kuntoro', '16779', 'X DKV 1', 'L'),
('Tri Apri Hermawan', '16780', 'X DKV 1', 'L'),
('Zordanu', '16781', 'X DKV 1', 'L'),
('Adelia Sekar Pinasti', '16782', 'X DKV 2', 'P'),
('Adinda Berlian Indahsari', '16783', 'X DKV 2', 'P'),
('Amalla Asmaul Chusna', '16784', 'X DKV 2', 'P'),
('Annisa Nur Rahmawati', '16785', 'X DKV 2', 'P'),
('Arya Diazza Ramadhan', '16786', 'X DKV 2', 'L'),
('Aulia Rahmawati', '16787', 'X DKV 2', 'P'),
('Daffa Arya Pradana', '16788', 'X DKV 2', 'L'),
('Deshta Tegar Saputra', '16789', 'X DKV 2', 'L'),
('Farhan Dany Prasetyo', '16790', 'X DKV 2', 'L'),
('Farida', '16791', 'X DKV 2', 'P'),
('Ferdy Aulia Falipan', '16792', 'X DKV 2', 'L'),
('Fia Adilatul Husna', '16793', 'X DKV 2', 'P'),
('Fitriana Endah Setiyaningrum', '16794', 'X DKV 2', 'P'),
('Habibah Ellen Meisaroh', '16795', 'X DKV 2', 'P'),
('Hamdan Al Amin', '16796', 'X DKV 2', 'L'),
('Haradira Alfian Faiar Saputra', '16797', 'X DKV 2', 'L'),
('Ilham Dwi Saputra', '16798', 'X DKV 2', 'L'),
('Irsyad Marga Aryasatya', '16799', 'X DKV 2', 'L'),
('Much Abdul Rasyid', '16800', 'X DKV 2', 'L'),
('Muhammad Agatonica Alfarizki', '16801', 'X DKV 2', 'L'),
('Muhammad Amjad', '16802', 'X DKV 2', 'L'),
('Nauval Sampan Pradana', '16803', 'X DKV 2', 'L'),
('Nirima Ridhotul Afany', '16804', 'X DKV 2', 'P'),
('Nur Ikhsan Fitra', '16805', 'X DKV 2', 'P'),
('Rafi Ahmad', '16806', 'X DKV 2', 'L'),
('Rahmat Fauzi', '16807', 'X DKV 2', 'L'),
('Ramandha Zukhruf Rizal', '16808', 'X DKV 2', 'L'),
('Rei Sang Kakasihku', '16809', 'X DKV 2', 'L'),
('Restu Ragil Mitayani', '16810', 'X DKV 2', 'L'),
('Rino Icha Rahmanto', '16811', 'X DKV 2', 'L'),
('Rista Agustina Hapsari', '16812', 'X DKV 2', 'P'),
('Rizal Kurniawan', '16813', 'X DKV 2', 'L'),
('Silma Fajri Ramadhani', '16814', 'X DKV 2', 'P'),
('Valentina Meyke Salda', '16815', 'X DKV 2', 'P'),
('Wanda Atika Wulan', '16816', 'X DKV 2', 'P'),
('Yoga Alif Darmawan', '16817', 'X DKV 2', 'L');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `kode_kelas` varchar(10) NOT NULL,
  `nama_kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`kode_kelas`, `nama_kelas`) VALUES
('X DKV 1', 'X DKV 1'),
('X DKV 2', 'X DKV 2'),
('XI DKV 1', 'XI DKV 1'),
('XI DKV 2', 'XI DKV 2'),
('XII DKV 1', 'XII DKV 1'),
('XII DKV 2', 'XII DKV 2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prestasi`
--

CREATE TABLE `prestasi` (
  `nama` varchar(50) NOT NULL,
  `tgl` date NOT NULL,
  `kejuaraan` varchar(20) NOT NULL,
  `tingkat` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `prestasi`
--

INSERT INTO `prestasi` (`nama`, `tgl`, `kejuaraan`, `tingkat`) VALUES
('Malika', '2020-09-09', 'Cyber Secutity', 'provinsi'),
('Sasa', '2021-02-22', 'robotik ', 'provinsi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_guru`
--

CREATE TABLE `tb_guru` (
  `nip` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `jabatan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_guru`
--

INSERT INTO `tb_guru` (`nip`, `nama`, `alamat`, `jabatan`) VALUES
('12234', 'jakaj', 'bantul, yk', 'Ketua Jurusan'),
('12235', 'aaaa', 'tembi, bantul', 'Guru Produktif'),
('12236', 'ggggaga', 'cepit, bantul, yk', 'Guru Produktif'),
('12237', 'agaweg', 'sabdodadi, bantul', 'Guru Produktif'),
('12238', 'awegawh', 'sanden, bantul', 'Guru Produktif'),
('12239', 'ahewahawe', 'barongan, bantul', 'Guru Produktif'),
('12240', 'sdrjlrttj', 'sewon, bantul', 'Guru Produktif'),
('12241', 'tjtjtrdtj', 'pandak, bantul', 'Guru Produktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('fape', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `visimisi`
--

CREATE TABLE `visimisi` (
  `visi` varchar(100) NOT NULL,
  `misi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `visimisi`
--

INSERT INTO `visimisi` (`visi`, `misi`) VALUES
('tes visi', 'tes misi\r\n');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`nis`),
  ADD KEY `kelas` (`kelas`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`kode_kelas`);

--
-- Indeks untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`nama`);

--
-- Indeks untuk tabel `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD CONSTRAINT `data_siswa_ibfk_1` FOREIGN KEY (`kelas`) REFERENCES `kelas` (`kode_kelas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
