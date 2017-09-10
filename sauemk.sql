-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 10 Eyl 2017, 17:53:46
-- Sunucu sürümü: 10.1.21-MariaDB
-- PHP Sürümü: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `sauemk`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `anasayfa_yorum`
--

CREATE TABLE `anasayfa_yorum` (
  `yorum_id` int(11) NOT NULL,
  `yorum_foto` text COLLATE utf8_turkish_ci NOT NULL,
  `yorum_ad` text COLLATE utf8_turkish_ci NOT NULL,
  `yorum_detay` text COLLATE utf8_turkish_ci NOT NULL,
  `yorum_konum` text COLLATE utf8_turkish_ci NOT NULL,
  `yorum_defaultfoto` text COLLATE utf8_turkish_ci NOT NULL,
  `yorum_sira` int(11) NOT NULL,
  `yorum_durum` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `anasayfa_yorum`
--

INSERT INTO `anasayfa_yorum` (`yorum_id`, `yorum_foto`, `yorum_ad`, `yorum_detay`, `yorum_konum`, `yorum_defaultfoto`, `yorum_sira`, `yorum_durum`) VALUES
(1, '', 'Ali Burak Ateş', 'Görüp görebileceğiniz en güzel kulüp.', 'Sakarya Üniversitesi Makine Mühendisliği Öğrencisi', 'img/counters/homer.jpeg', 1, 1),
(2, '', 'Umut Tokoğlu', 'Bir kulüpten fazlası.', 'Sakarya Üniversitesi Bilgisayar Mühendisliği Öğrencisi', 'img/counters/homer.jpeg', 2, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayar`
--

CREATE TABLE `ayar` (
  `ayar_id` int(1) NOT NULL DEFAULT '0',
  `ayar_logo` text COLLATE utf8_turkish_ci NOT NULL,
  `ayar_siteurl` text COLLATE utf8_turkish_ci NOT NULL,
  `ayar_title` text COLLATE utf8_turkish_ci NOT NULL,
  `ayar_description` text COLLATE utf8_turkish_ci NOT NULL,
  `ayar_keywords` text COLLATE utf8_turkish_ci NOT NULL,
  `ayar_author` text COLLATE utf8_turkish_ci NOT NULL,
  `ayar_footer` text COLLATE utf8_turkish_ci NOT NULL,
  `ayar_adminfooter` text COLLATE utf8_turkish_ci NOT NULL,
  `ayar_mailbir` text COLLATE utf8_turkish_ci NOT NULL,
  `ayar_mailiki` text COLLATE utf8_turkish_ci NOT NULL,
  `ayar_adres` text COLLATE utf8_turkish_ci NOT NULL,
  `ayar_facebook` text COLLATE utf8_turkish_ci NOT NULL,
  `ayar_twitter` text COLLATE utf8_turkish_ci NOT NULL,
  `ayar_instagram` text COLLATE utf8_turkish_ci NOT NULL,
  `ayar_linkedin` text COLLATE utf8_turkish_ci NOT NULL,
  `ayar_spotify` text COLLATE utf8_turkish_ci NOT NULL,
  `ayar_youtube` text COLLATE utf8_turkish_ci NOT NULL,
  `ayar_snapchat` text COLLATE utf8_turkish_ci NOT NULL,
  `ayar_google` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtpport` int(11) NOT NULL,
  `ayar_smtpuser` text COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtphost` text COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtppassword` text COLLATE utf8_turkish_ci NOT NULL,
  `ayar_logoaciklama` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_siteurlaciklama` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_titleaciklama` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_descriptionaciklama` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_keywordsaciklama` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_authoraciklama` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_mailbiraciklama` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_mailikiaciklama` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_adresaciklama` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_facebookaciklama` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_twitteraciklama` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_youtubeaciklama` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_instagramaciklama` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_linkedinaciklama` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_spotifyaciklama` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_snapchataciklama` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_googleaciklama` text COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtphostaciklama` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtpuseraciklama` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtppasswordaciklama` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtpportaciklama` varchar(250) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ayar`
--

INSERT INTO `ayar` (`ayar_id`, `ayar_logo`, `ayar_siteurl`, `ayar_title`, `ayar_description`, `ayar_keywords`, `ayar_author`, `ayar_footer`, `ayar_adminfooter`, `ayar_mailbir`, `ayar_mailiki`, `ayar_adres`, `ayar_facebook`, `ayar_twitter`, `ayar_instagram`, `ayar_linkedin`, `ayar_spotify`, `ayar_youtube`, `ayar_snapchat`, `ayar_google`, `ayar_smtpport`, `ayar_smtpuser`, `ayar_smtphost`, `ayar_smtppassword`, `ayar_logoaciklama`, `ayar_siteurlaciklama`, `ayar_titleaciklama`, `ayar_descriptionaciklama`, `ayar_keywordsaciklama`, `ayar_authoraciklama`, `ayar_mailbiraciklama`, `ayar_mailikiaciklama`, `ayar_adresaciklama`, `ayar_facebookaciklama`, `ayar_twitteraciklama`, `ayar_youtubeaciklama`, `ayar_instagramaciklama`, `ayar_linkedinaciklama`, `ayar_spotifyaciklama`, `ayar_snapchataciklama`, `ayar_googleaciklama`, `ayar_smtphostaciklama`, `ayar_smtpuseraciklama`, `ayar_smtppasswordaciklama`, `ayar_smtpportaciklama`) VALUES
(0, 'img/logos/29072299472687125921emk-logo.png', 'www.sauemk.com', 'SAÜEMK', '', '', 'Bilişim & Medya Komisyonu', '2017 © Sakarya Üniversitesi Endüstri Mühendisliği Kulübü. <br>Bu sitenin geliştirilmesi Bilişim & Medya Komisyonu tarafından yapılmıştır. Tüm hakları saklıdır.                          <br>Sitenin güncel versiyonu: 0.1.1.070517<br>', 'Bu sitenin geliştirilmesi Bilişim & Medya Komisyonu tarafından yapılmıştır. Tüm hakları saklıdır. Sitenin güncel versiyonu: 0.1.1.070517', 'noreply@sauemk.com', 'info@sauemk.com', 'Sakarya Üniversitesi\nEndüstri Mühendisliği Fakültesi\nSerdivan Sakarya TR 54000\n\n ', 'https://www.facebook.com/sakaryaemk', 'https://www.twitter.com/sakaryaemk', 'https://www.instagram.com/sakaryaemk', 'https://www.linkedin.com/company-beta/2290074/', '', 'https://www.youtube.com//channel/UCQ47T-uDrRn5Vvp6WXY9n9A', 'https://www.snapchat.com', 'https://www.googleplus.com', 0, '', '', '', 'Bu bölümde siteye eklenecek logo seçilmelidir. ', '', '', '', '', '', '', '', 'Adres veritabanından elle girilmelidir. ', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blogpost`
--

CREATE TABLE `blogpost` (
  `kat_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `post_baslik` text COLLATE utf8_turkish_ci NOT NULL,
  `post_hit` int(4) NOT NULL,
  `post_tarih` text COLLATE utf8_turkish_ci NOT NULL,
  `post_foto` text COLLATE utf8_turkish_ci NOT NULL,
  `post_detay` text COLLATE utf8_turkish_ci NOT NULL,
  `post_onay` int(1) NOT NULL DEFAULT '0',
  `yazan_ad` text COLLATE utf8_turkish_ci NOT NULL,
  `yazan_foto` text COLLATE utf8_turkish_ci NOT NULL,
  `yazan_detay` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `blogpost`
--

INSERT INTO `blogpost` (`kat_id`, `post_id`, `post_baslik`, `post_hit`, `post_tarih`, `post_foto`, `post_detay`, `post_onay`, `yazan_ad`, `yazan_foto`, `yazan_detay`) VALUES
(4, 6, 'Deneme Konusu', 29, '01.09.2017', 'img/konular/278463070326908218102030230265247692704708.jpg', '<h2>Where does it come from?</h2>\r\n\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n', 1, 'T. Umut Tokoğlu', 'img/team-pps/21262289502223927903umut.jpg', 'What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(0, 7, 'adfasfasd', 2, '06.09.2017', 'img/konular/24677295912496928820268503148126794272092451720584229782572804.jpg', '<p>asdfasfasf</p>\r\n', 0, 'T. Umut Tokoğlu', 'img/team-pps/21262289502223927903umut.jpg', '<p>Deneme açıklamasıdır. Orjinali hepsiyle birlikte siteye koyulacaktır.sdfasfsdfasdfsdfasdfasdfsad</p>'),
(4, 8, 'asdfasdfasdf', 0, '06.09.2017', 'img/konular/20779224642293526791213752819921785282012692129850271282731803.jpg', '<p>asdfasdfasdfasdfasdf</p>\r\n', 0, 'T. Umut Tokoğlu', 'img/team-pps/21262289502223927903umut.jpg', '<p>Deneme açıklamasıdır. Orjinali hepsiyle birlikte siteye koyulacaktır.sdfasfsdfasdfsdfasdfasdfsad</p>'),
(4, 9, 'xcfvgsdvfzxcvzxc', 0, '06.09.2017', 'img/konular/30378286662411629041238952082828336282372385726882277892372502.jpg', '<p>sdfsxfsdfasf</p>\r\n', 0, 'T. Umut Tokoğlu', 'img/team-pps/21262289502223927903umut.jpg', '<p>Deneme açıklamasıdır. Orjinali hepsiyle birlikte siteye koyulacaktır.sdfasfsdfasdfsdfasdfasdfsad</p>'),
(4, 10, 'asdfasdfasdf', 0, '06.09.2017', 'img/konular/26287274642277922013253052428130276219892030230265247692704708.jpg', '<p>sadfasdfasdfasdf</p>\r\n', 0, 'T. Umut Tokoğlu', 'img/team-pps/21262289502223927903umut.jpg', '<p>Deneme açıklamasıdır. Orjinali hepsiyle birlikte siteye koyulacaktır.sdfasfsdfasdfsdfasdfasdfsad</p>'),
(4, 11, 'wdefsdfd', 1, '06.09.2017', 'img/konular/3074623140234962539821185282952076526425ceyda.jpg', '<p>wefwerfwerfwergwerg</p>\r\n', 1, 'T. Umut Tokoğlu', 'img/team-pps/21262289502223927903umut.jpg', '<p>Deneme açıklamasıdır. Orjinali hepsiyle birlikte siteye koyulacaktır.sdfasfsdfasdfsdfasdfasdfsad</p>');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blog_yorum`
--

CREATE TABLE `blog_yorum` (
  `yorum_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `isim` text COLLATE utf8_turkish_ci NOT NULL,
  `email` text COLLATE utf8_turkish_ci NOT NULL,
  `website` text COLLATE utf8_turkish_ci NOT NULL,
  `yorum` text COLLATE utf8_turkish_ci NOT NULL,
  `tarih` text COLLATE utf8_turkish_ci NOT NULL,
  `onay` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `blog_yorum`
--

INSERT INTO `blog_yorum` (`yorum_id`, `post_id`, `isim`, `email`, `website`, `yorum`, `tarih`, `onay`) VALUES
(2, 6, 'sadfasdfsdaf', 'umuttokoglu@gmail.com', '', 'asdfsadfsadfsd', '01.09.2017', 1),
(3, 6, 'dsfasdf', 'umuttokoglu@gmail.comsdfa', 'sadfsadf', 'sadfsadfsadfsadf', '01.09.2017', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `galeri`
--

CREATE TABLE `galeri` (
  `album_id` int(11) NOT NULL,
  `album_adi` text COLLATE utf8_turkish_ci NOT NULL,
  `album_detay` text COLLATE utf8_turkish_ci NOT NULL,
  `album_durum` int(1) NOT NULL,
  `album_sira` int(11) NOT NULL,
  `album_kapakfoto` text COLLATE utf8_turkish_ci NOT NULL,
  `album_defaultfoto` text COLLATE utf8_turkish_ci NOT NULL,
  `album_tarih` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `galeri`
--

INSERT INTO `galeri` (`album_id`, `album_adi`, `album_detay`, `album_durum`, `album_sira`, `album_kapakfoto`, `album_defaultfoto`, `album_tarih`) VALUES
(6, 'Deneme  2', '', 1, 2, 'img/galeri_album/2077922464229352679107.jpg', '', '0000-00-00'),
(7, 'Deneme', 'albüm detayı', 1, 1, 'img/galeri_album/2385726882277892372502.jpg', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `galeri_foto`
--

CREATE TABLE `galeri_foto` (
  `album_id` int(11) NOT NULL,
  `album_adi` text COLLATE utf8_turkish_ci NOT NULL,
  `foto_sira` int(11) NOT NULL,
  `foto_id` int(11) NOT NULL,
  `foto` text COLLATE utf8_turkish_ci NOT NULL,
  `foto_durum` int(1) NOT NULL,
  `foto_onecikar` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `galeri_foto`
--

INSERT INTO `galeri_foto` (`album_id`, `album_adi`, `foto_sira`, `foto_id`, `foto`, `foto_durum`, `foto_onecikar`) VALUES
(7, 'Deneme ', 7, 2, 'img/gallery/2244622666254692551604.jpg', 1, 0),
(6, 'Deneme  2 ', 3, 3, 'img/gallery/2330123207203412497312.jpg', 1, 1),
(7, 'Deneme ', 4, 4, 'img/gallery/2614628783295382686901.jpg', 1, 0),
(7, 'Deneme ', 5, 5, 'img/gallery/2980723543231552494618.jpg', 1, 1),
(7, 'Deneme ', 6, 6, 'img/gallery/3091327843245312862416.jpg', 1, 0),
(7, 'Deneme ', 2, 7, 'img/gallery/22841285723054628721Vertical_velocity.jpg', 1, 0),
(7, 'Deneme ', 8, 8, 'img/gallery/255292396021558250557NGnOv.png', 1, 0),
(7, 'Deneme ', 1, 9, 'img/gallery/2762725957222882642207.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizdabir`
--

CREATE TABLE `hakkimizdabir` (
  `yonetici_id` int(11) NOT NULL,
  `yonetici_ad` text COLLATE utf8_turkish_ci NOT NULL,
  `yonetici_soyad` text COLLATE utf8_turkish_ci NOT NULL,
  `yonetici_mail` text COLLATE utf8_turkish_ci NOT NULL,
  `yonetici_telefon` text COLLATE utf8_turkish_ci NOT NULL,
  `yonetici_komisyon` text COLLATE utf8_turkish_ci NOT NULL,
  `yonetici_foto` text COLLATE utf8_turkish_ci NOT NULL,
  `yonetici_facebook` text COLLATE utf8_turkish_ci NOT NULL,
  `yonetici_twitter` text COLLATE utf8_turkish_ci NOT NULL,
  `yonetici_instagram` text COLLATE utf8_turkish_ci NOT NULL,
  `yonetici_linkedin` text COLLATE utf8_turkish_ci NOT NULL,
  `yonetici_sira` int(11) NOT NULL,
  `yonetici_durum` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hakkimizdabir`
--

INSERT INTO `hakkimizdabir` (`yonetici_id`, `yonetici_ad`, `yonetici_soyad`, `yonetici_mail`, `yonetici_telefon`, `yonetici_komisyon`, `yonetici_foto`, `yonetici_facebook`, `yonetici_twitter`, `yonetici_instagram`, `yonetici_linkedin`, `yonetici_sira`, `yonetici_durum`) VALUES
(2, 'Taylan Umut', 'Tokoğlu', 'umut.tokoglu@sauemk.com', '0539 286 7904', 'Bilişim & Medya Komisyonu', 'img/team-pps/21262289502223927903umut.jpg', '', '', '', '', 5, 1),
(3, 'A. Ceyda', 'Babadostu', 'ceyda.babadostu@sauemk.com', '0538 088 4611', 'Eğitim Komisyonu', 'img/team-pps/21185282952076526425ceyda.jpg', '', '', '', '', 8, 1),
(4, 'S. Anıl', 'Erten', 'anil.erten@sauemk.com', '0541 591 3426', 'Kulüp Başkanı', 'img/team-pps/27325202133162823113anil.jpg', '', '', '', '', 1, 1),
(5, 'Ali Burak', 'Ateş', 'aliburak.ates@sauemk.com', '0536 813 1386', 'Eğitim Komisyonu', 'img/team-pps/24065317022765422683aliburak.jpg', '', '', '', '', 9, 1),
(6, 'Cevahir', 'Özgür', 'cevahir.ozgur@sauemk.com', '0531 604 0677', 'Toplumsal Duyarlılık Komisyonu', 'img/team-pps/27342297772799726603cevahir.jpg', '', '', '', '', 10, 1),
(7, 'Erbil', 'Nas', 'erbil.nas@sauemk.com', '0538 274 9132', 'Bilişim & Medya Komisyonu', 'img/team-pps/26320245332009023920erbil.jpg', '', '', '', '', 6, 1),
(8, 'Damla', 'Arslan', 'damla.arslan@sauemk.com', '0531  826 8444', 'Kulüp Sekreteri', 'img/team-pps/26002312832848922194damla.jpg', '', '', '', '', 4, 1),
(9, 'Onur', 'Baygül', 'onur.baygul@sauemk.com', '0536 995 7797', 'Kulüp Başkan Yardımcısı', 'img/team-pps/28616294832335920889onur.jpg', '', '', '', '', 3, 1),
(10, 'Muhammet Emin', 'Atmaca', 'emin.atmaca@sauemk.com', '0554 382 4915', 'İnsan Kaynakları Komisyonu', 'img/team-pps/28204260142191226195emin.jpg', '', '', '', '', 11, 1),
(11, 'Rübeyde', 'Atik ', 'rubeyde.atik@sauemk.com', '0531 862 0805', 'Sosyal Faaliyet Komisyonu', 'img/team-pps/24196238672604420163rubeyde.jpg', '', '', '', '', 13, 1),
(12, 'Kerem', 'Karaca', 'kerem.karaca@sauemk.com', '0537 525 5575', 'Proje Komisyonu', 'img/team-pps/25315215013007831037kerem.png', '', '', '', '', 15, 1),
(13, 'Mertcan', 'Karakaya', 'mertcan.karakaya@sauemk.com', '0545 245 7847', 'Bilişim & Medya Komisyonu', 'img/team-pps/24312238782596924918mertcan.png', '', '', '', '', 7, 1),
(14, 'Mustafa', 'Bayrak', 'mustafa.bayrak@sauemk.com', '0537 650 8928', 'Proje Komisyonu', 'img/team-pps/22383300513160630616mustafa.jpg', '', '', '', '', 16, 1),
(15, 'Ebru', 'Karataş', 'ebru.karatas@sauemk.com', '0505 254 6619', 'İnsan Kaynakları Komisyonu', 'img/team-pps/29032205332099229571ebru.jpg', '', '', '', '', 12, 1),
(16, 'Missem', 'Karakurt', 'missem.karakurt@sauemk.com', '0536 472 1308', 'Kurumsal İletişim Komisyonu', 'img/team-pps/23495319892459629354missem.jpg', '', '', '', '', 19, 1),
(17, 'Zekiye', 'Turgut', 'zekiye.turgut@sauemk.com', '0535 588 3118', 'Kulüp Başkan Yardımcısı', 'img/team-pps/26495229882759620354zekiye.jpg', '', '', '', '', 2, 1),
(18, 'Zeynep', 'Merç', 'zeynep.merc@sauemk.com', '0534 262 2359', 'Teknik Gezi Komisyonu', 'img/team-pps/27436307013079330955zeynep.jpg', '', '', '', '', 18, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizdaiki`
--

CREATE TABLE `hakkimizdaiki` (
  `id` int(11) NOT NULL DEFAULT '0',
  `ekibimiz_hakkinda` text COLLATE utf8_turkish_ci NOT NULL,
  `kurulusumuz` text COLLATE utf8_turkish_ci NOT NULL,
  `amacimiz` text COLLATE utf8_turkish_ci NOT NULL,
  `odullerimiz` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hakkimizdaiki`
--

INSERT INTO `hakkimizdaiki` (`id`, `ekibimiz_hakkinda`, `kurulusumuz`, `amacimiz`, `odullerimiz`) VALUES
(0, 'Buraya İnsan Kaynakları Komisyonunun yazacağı yazı gelecek.', 'Sakarya Üniversitesi Endüstri Mühendisliği Kulübü, 8 Ocak 1994 tarih ve 21812 sayılı Resmi Gazete’de yayınlanan Sakarya Üniversitesi Spor, Kültür ve Sanat Birliği Birim Yönetmeliği uyarınca kurulmuş bir kulüptür.\r\n\r\n', 'Katılım ve paylaşımı esas alarak, öğrencilerde takım çalışması ve liderlik kavramlarını, yaratıcı becerileri, iş ahlakı, sosyal ve çevresel bilinçlenmeyi geliştirmek, Endüstri Mühendisliği bilimini geliştirmeye yönelik bilgi ve araştırma temelini sağlamak ve geliştirilen bu bilgiyi toplumdaki dinamiklerle paylaşıp, endüstriye yaymak.\r\n\r\n\r\n', '100.000 üniversiteli üyenin ve 2.000 öğrenci kulübünün yer aldığı Üniaktivite\'nin Türkiye çapındaki yaklaşık 525 öğrenci kulübünün katılımı ile düzenlediği En Aktif Kulüp Yarışması\'nda finalistliğe çıktık.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE `iletisim` (
  `id` int(11) NOT NULL,
  `isim` text COLLATE utf8_turkish_ci NOT NULL,
  `email` text COLLATE utf8_turkish_ci NOT NULL,
  `telno` text COLLATE utf8_turkish_ci NOT NULL,
  `mesaj` text COLLATE utf8_turkish_ci NOT NULL,
  `tarih` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `iletisim`
--

INSERT INTO `iletisim` (`id`, `isim`, `email`, `telno`, `mesaj`, `tarih`) VALUES
(7, 'asfsdaf', 'umuttokoglu@gmail.com', '', 'sadfasdfsadfas', '01.09.2017 17:04:53'),
(8, 'Mertcan ', 'scnhasdc@gmail.com', 'sfvasfvsfvasfvasfvdsfv', 'dscfrsdfcvsdfcvsdfv', '06.09.2017 13:11:24'),
(9, 'erwesdfgsdf', 'umuttokoglu@gmail.com', 'sadgsdafg', 'sadfasdfasdfasdfasdf', '06.09.2017 21:03:24'),
(10, 'afasdfasdf', 'ceyda.babadostu@sauemk.com', 'asdfasdf', 'sadfasdfasdf', '06.09.2017 21:05:04'),
(11, 'asdfasdf', 'ceyda.babadostu@sauemk.com', 'asdfasdf', 'asdfasdfasdfasdfasdf', '06.09.2017 21:05:36');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `karsila`
--

CREATE TABLE `karsila` (
  `karsila_id` int(1) NOT NULL DEFAULT '0',
  `karsila_arkaplan` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `karsila_byazi` text COLLATE utf8_turkish_ci NOT NULL,
  `karsila_kyazi` text COLLATE utf8_turkish_ci NOT NULL,
  `karsila_video` varchar(150) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `karsila`
--

INSERT INTO `karsila` (`karsila_id`, `karsila_arkaplan`, `karsila_byazi`, `karsila_kyazi`, `karsila_video`) VALUES
(0, 'img/carousel/2241923235317733067002.jpg', 'SAÜEMK GURURLA SUNAR', 'Sitemize göz atmaya başlamadan önce, sizler için hazırladığımız tanıtım videomuzu izlemek ister misiniz?', 'https://youtu.be/MKk1u5RMTn4');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler`
--

CREATE TABLE `kategoriler` (
  `kat_id` int(11) NOT NULL,
  `kat_ad` text COLLATE utf8_turkish_ci NOT NULL,
  `kat_foto` text COLLATE utf8_turkish_ci NOT NULL,
  `kat_aciklama` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kategoriler`
--

INSERT INTO `kategoriler` (`kat_id`, `kat_ad`, `kat_foto`, `kat_aciklama`) VALUES
(4, 'Deneme 2', 'img/kategoriler/270512395730092317242892325513271592556807.jpg', 'Deneme Kategorisidir.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `parallax`
--

CREATE TABLE `parallax` (
  `parallax_id` int(3) NOT NULL DEFAULT '0',
  `parallax_bir` text COLLATE utf8_turkish_ci NOT NULL,
  `parallax_iki` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `parallax`
--

INSERT INTO `parallax` (`parallax_id`, `parallax_bir`, `parallax_iki`) VALUES
(0, 'img/counters/2814530275312852189802.jpg', 'img/testimonials/2009826969256642500203.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sauemk_yonetim`
--

CREATE TABLE `sauemk_yonetim` (
  `id` int(11) NOT NULL,
  `email` text COLLATE utf8_turkish_ci NOT NULL,
  `isim` text COLLATE utf8_turkish_ci NOT NULL,
  `sifre` text COLLATE utf8_turkish_ci NOT NULL,
  `gecicisifre` text COLLATE utf8_turkish_ci NOT NULL,
  `statu` int(2) NOT NULL,
  `aciklama` text COLLATE utf8_turkish_ci NOT NULL,
  `durum` int(1) NOT NULL,
  `foto` text COLLATE utf8_turkish_ci NOT NULL,
  `komisyon` text COLLATE utf8_turkish_ci NOT NULL,
  `ozel_yetki` int(3) NOT NULL DEFAULT '10'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sauemk_yonetim`
--

INSERT INTO `sauemk_yonetim` (`id`, `email`, `isim`, `sifre`, `gecicisifre`, `statu`, `aciklama`, `durum`, `foto`, `komisyon`, `ozel_yetki`) VALUES
(1, 'umut.tokoglu@sauemk.com', 'T. Umut Tokoğlu', 'a07a0c2febff66aa626dcc71332e4882', '', 0, '<p>Deneme a&ccedil;ıklamasıdır. Orjinali hepsiyle birlikte siteye koyulacaktır.sdfasfsdfasdfsdfasdfasdfsad</p>\r\n', 1, 'img/team-pps/21262289502223927903umut.jpg', 'Bilişim & Medya Komisyonu', 10),
(2, 'mertcan.karakaya@sauemk.com', 'Mertcan Karakaya', 'e140a7044670254c55b702663cfd722f', 'EVHH8Vz4mnp19Tw2A154J', 0, '', 1, 'img/accountimg/2213929341266212022024312238782596924918mertcan.png', 'Bilişim & Medya Komisyonu', 10),
(3, 'erbil.nas@sauemk.com', 'Erbil Nas', 'ab1976647821c93fe3a63527d862b9de', 'tnqNsO0KE5hQxE19rIm1F', 0, '<p>efrasdfasdfasdfasdfasdfasdfasdfsdfasdfasdfasdfasdf</p>\r\n', 1, 'img/accountimg/2890525245258372269526320245332009023920erbil.jpg', 'Bilişim & Medya Komisyonu', 10);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sponsor`
--

CREATE TABLE `sponsor` (
  `sponsor_id` int(11) NOT NULL,
  `sponsor_logo` text COLLATE utf8_turkish_ci NOT NULL,
  `sponsor_ad` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `sponsor_sira` int(11) NOT NULL,
  `sponsor_durum` int(11) NOT NULL,
  `sponsor_mail` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sponsor`
--

INSERT INTO `sponsor` (`sponsor_id`, `sponsor_logo`, `sponsor_ad`, `sponsor_sira`, `sponsor_durum`, `sponsor_mail`) VALUES
(2, 'img/logos/2357223348310223021501.png', 'American Life', 2, 1, 'Bilinmiyor.'),
(3, 'img/logos/2084026318284192923502.png', 'Visitick', 1, 1, 'Bilinmiyor.'),
(5, 'img/logos/2801029233296582181403.png', 'Türk Traktör', 3, 1, 'Bilinmiyor.'),
(6, 'img/logos/2445427969291153082804.png', 'Öğrenci Kariyeri', 4, 1, 'Bilinmiyor.'),
(7, 'img/logos/2608226110282462689405.png', 'Reklamotv', 5, 1, 'Bilinmiyor.'),
(8, 'img/logos/2922028971286802750906.png', 'Sakarya Burada', 6, 1, 'Bilinmiyor.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tumetkinlikler`
--

CREATE TABLE `tumetkinlikler` (
  `id` int(11) NOT NULL,
  `yil` int(4) NOT NULL,
  `ad` text COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` text COLLATE utf8_turkish_ci NOT NULL,
  `yilustid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yakinetkinlik`
--

CREATE TABLE `yakinetkinlik` (
  `id` int(1) NOT NULL DEFAULT '0',
  `adi` text COLLATE utf8_turkish_ci NOT NULL,
  `afis` text COLLATE utf8_turkish_ci NOT NULL,
  `slogan` text COLLATE utf8_turkish_ci NOT NULL,
  `detay1ikon` text COLLATE utf8_turkish_ci NOT NULL,
  `detay2ikon` text COLLATE utf8_turkish_ci NOT NULL,
  `detay3ikon` text COLLATE utf8_turkish_ci NOT NULL,
  `detay4ikon` text COLLATE utf8_turkish_ci NOT NULL,
  `detay1baslik` text COLLATE utf8_turkish_ci NOT NULL,
  `detay2baslik` text COLLATE utf8_turkish_ci NOT NULL,
  `detay3baslik` text COLLATE utf8_turkish_ci NOT NULL,
  `detay4baslik` text COLLATE utf8_turkish_ci NOT NULL,
  `detay1` text COLLATE utf8_turkish_ci NOT NULL,
  `detay2` text COLLATE utf8_turkish_ci NOT NULL,
  `detay3` text COLLATE utf8_turkish_ci NOT NULL,
  `detay4` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yakinetkinlik`
--

INSERT INTO `yakinetkinlik` (`id`, `adi`, `afis`, `slogan`, `detay1ikon`, `detay2ikon`, `detay3ikon`, `detay4ikon`, `detay1baslik`, `detay2baslik`, `detay3baslik`, `detay4baslik`, `detay1`, `detay2`, `detay3`, `detay4`) VALUES
(0, 'Rubeyde', 'img/events/2502224215268412031724196238672604420163rubeyde.jpg', 'Rubeyde', '', '', '', '', 'Etkinlik', 'ASdsdgdf', '', 'qwerr', '<p>asdfasdfasdfsadfasdf</p>\r\n', '', '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yaklasanetkinlikler`
--

CREATE TABLE `yaklasanetkinlikler` (
  `id` int(11) NOT NULL,
  `adi` text COLLATE utf8_turkish_ci NOT NULL,
  `afis` text COLLATE utf8_turkish_ci NOT NULL,
  `detay` text COLLATE utf8_turkish_ci NOT NULL,
  `tarih` date NOT NULL,
  `kayitform` text COLLATE utf8_turkish_ci NOT NULL,
  `formonay` int(1) NOT NULL DEFAULT '0',
  `sira` int(11) NOT NULL,
  `onay` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yaklasanetkinlikler`
--

INSERT INTO `yaklasanetkinlikler` (`id`, `adi`, `afis`, `detay`, `tarih`, `kayitform`, `formonay`, `sira`, `onay`) VALUES
(5, 'tinerciler bayramı', 'img/events/3008031799246912833524065317022765422683aliburak.jpg', '<p>asfjklfdhjkhdfgjhjkdfghjdf</p>\r\n', '2017-09-23', 'anan.html', 1, 1, 1),
(6, 'aq mertcanı', 'img/events/2553222779293662258524312238782596924918mertcan.png', '<p>asdhdvgdjvdjfbg</p>\r\n', '2017-09-30', '', 1, 2, 0);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `anasayfa_yorum`
--
ALTER TABLE `anasayfa_yorum`
  ADD PRIMARY KEY (`yorum_id`);

--
-- Tablo için indeksler `ayar`
--
ALTER TABLE `ayar`
  ADD PRIMARY KEY (`ayar_id`);

--
-- Tablo için indeksler `blogpost`
--
ALTER TABLE `blogpost`
  ADD PRIMARY KEY (`post_id`);

--
-- Tablo için indeksler `blog_yorum`
--
ALTER TABLE `blog_yorum`
  ADD PRIMARY KEY (`yorum_id`);

--
-- Tablo için indeksler `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`album_id`);

--
-- Tablo için indeksler `galeri_foto`
--
ALTER TABLE `galeri_foto`
  ADD PRIMARY KEY (`foto_id`);

--
-- Tablo için indeksler `hakkimizdabir`
--
ALTER TABLE `hakkimizdabir`
  ADD PRIMARY KEY (`yonetici_id`);

--
-- Tablo için indeksler `iletisim`
--
ALTER TABLE `iletisim`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `karsila`
--
ALTER TABLE `karsila`
  ADD PRIMARY KEY (`karsila_id`);

--
-- Tablo için indeksler `kategoriler`
--
ALTER TABLE `kategoriler`
  ADD PRIMARY KEY (`kat_id`);

--
-- Tablo için indeksler `parallax`
--
ALTER TABLE `parallax`
  ADD PRIMARY KEY (`parallax_id`);

--
-- Tablo için indeksler `sauemk_yonetim`
--
ALTER TABLE `sauemk_yonetim`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sponsor`
--
ALTER TABLE `sponsor`
  ADD PRIMARY KEY (`sponsor_id`);

--
-- Tablo için indeksler `tumetkinlikler`
--
ALTER TABLE `tumetkinlikler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yakinetkinlik`
--
ALTER TABLE `yakinetkinlik`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yaklasanetkinlikler`
--
ALTER TABLE `yaklasanetkinlikler`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `anasayfa_yorum`
--
ALTER TABLE `anasayfa_yorum`
  MODIFY `yorum_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Tablo için AUTO_INCREMENT değeri `blogpost`
--
ALTER TABLE `blogpost`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Tablo için AUTO_INCREMENT değeri `blog_yorum`
--
ALTER TABLE `blog_yorum`
  MODIFY `yorum_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Tablo için AUTO_INCREMENT değeri `galeri`
--
ALTER TABLE `galeri`
  MODIFY `album_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Tablo için AUTO_INCREMENT değeri `galeri_foto`
--
ALTER TABLE `galeri_foto`
  MODIFY `foto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Tablo için AUTO_INCREMENT değeri `hakkimizdabir`
--
ALTER TABLE `hakkimizdabir`
  MODIFY `yonetici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- Tablo için AUTO_INCREMENT değeri `iletisim`
--
ALTER TABLE `iletisim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Tablo için AUTO_INCREMENT değeri `kategoriler`
--
ALTER TABLE `kategoriler`
  MODIFY `kat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Tablo için AUTO_INCREMENT değeri `sauemk_yonetim`
--
ALTER TABLE `sauemk_yonetim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Tablo için AUTO_INCREMENT değeri `sponsor`
--
ALTER TABLE `sponsor`
  MODIFY `sponsor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Tablo için AUTO_INCREMENT değeri `tumetkinlikler`
--
ALTER TABLE `tumetkinlikler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `yaklasanetkinlikler`
--
ALTER TABLE `yaklasanetkinlikler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
