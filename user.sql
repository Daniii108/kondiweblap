-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: localhost
-- Létrehozás ideje: 2023. Máj 25. 23:02
-- Kiszolgáló verziója: 10.4.28-MariaDB
-- PHP verzió: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `gymfun`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(1, 'jskc', 'gfsa@bxsjd.sh', '9d16b1455173e30587f10b5bcc3d1a4f42e69ab5'),
(2, 'sgddss', 'asgsdsj@ch.hz', 'cf38981c54703cd0e87104c5fc16b9f96bee0319'),
(3, 'sgddss', 'asgsdsj@ch.hz', 'cf38981c54703cd0e87104c5fc16b9f96bee0319'),
(4, 'sgddss', 'asgsdsj@ch.hz', 'cf38981c54703cd0e87104c5fc16b9f96bee0319'),
(5, 'sgddss', 'asgsdsj@ch.hz', 'cf38981c54703cd0e87104c5fc16b9f96bee0319'),
(6, 'sgddss', 'asgsdsj@ch.hz', 'cf38981c54703cd0e87104c5fc16b9f96bee0319'),
(7, 'sgddss', 'asgsdsj@ch.hz', 'cf38981c54703cd0e87104c5fc16b9f96bee0319'),
(8, 'sgddss', 'asgsdsj@ch.hz', 'cf38981c54703cd0e87104c5fc16b9f96bee0319'),
(9, 'sgddss', 'asgsdsj@ch.hz', 'cf38981c54703cd0e87104c5fc16b9f96bee0319');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
