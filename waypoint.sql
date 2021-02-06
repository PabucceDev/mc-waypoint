-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: sql213.epizy.com
-- Üretim Zamanı: 06 Şub 2021, 03:01:44
-- Sunucu sürümü: 5.6.48-88.0
-- PHP Sürümü: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `waypoint`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(60) UNSIGNED NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'Pabucce', ''),
(2, 'Nebicimsey', ''),
(3, 'KEZZAP', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `waypoints`
--

CREATE TABLE `waypoints` (
  `id` int(60) UNSIGNED NOT NULL,
  `isim` varchar(20) CHARACTER SET latin5 NOT NULL,
  `kordinat` varchar(100) NOT NULL,
  `kod` mediumtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `waypoints`
--

INSERT INTO `waypoints` (`id`, `isim`, `kordinat`, `kod`) VALUES
(6, 'maden', '366 12 91', '/tp 366 12 91'),
(9, 'ev', '315 61 153', '/tp 315 61 153'),
(8, 'netherda kale', '349 74 168', '/tp 349 74 168'),
(11, 'maden-2', '309 6 28', '/tp 309 6 28'),
(12, 'maden-2 devamı', '328 11 -59', '/tp 328 11 -59'),
(13, 'madenli köy', '-269 57 -254', '/tp -269 57 -254'),
(14, 'tasakli maden', '281 13 -60', '/tp 281 13 -60'),
(16, 'maden orman ici', '375 68 395', '/tp 375 68 395');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `password` (`password`);

--
-- Tablo için indeksler `waypoints`
--
ALTER TABLE `waypoints`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `isim` (`isim`),
  ADD UNIQUE KEY `kordinat` (`kordinat`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(60) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `waypoints`
--
ALTER TABLE `waypoints`
  MODIFY `id` int(60) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
