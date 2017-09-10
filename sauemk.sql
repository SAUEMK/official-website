-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 10 Eyl 2017, 17:48:11
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

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ayar`
--
ALTER TABLE `ayar`
  ADD PRIMARY KEY (`ayar_id`);

--
-- Tablo için indeksler `hakkimizdabir`
--
ALTER TABLE `hakkimizdabir`
  ADD PRIMARY KEY (`yonetici_id`);

--
-- Tablo için indeksler `karsila`
--
ALTER TABLE `karsila`
  ADD PRIMARY KEY (`karsila_id`);

--
-- Tablo için indeksler `parallax`
--
ALTER TABLE `parallax`
  ADD PRIMARY KEY (`parallax_id`);

--
-- Tablo için indeksler `sponsor`
--
ALTER TABLE `sponsor`
  ADD PRIMARY KEY (`sponsor_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `hakkimizdabir`
--
ALTER TABLE `hakkimizdabir`
  MODIFY `yonetici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- Tablo için AUTO_INCREMENT değeri `sponsor`
--
ALTER TABLE `sponsor`
  MODIFY `sponsor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
