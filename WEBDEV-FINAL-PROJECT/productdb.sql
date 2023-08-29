-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2023 at 05:21 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `productdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `producttb`
--

CREATE TABLE `producttb` (
  `id` int(11) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `product_price` float NOT NULL,
  `product_console` varchar(25) NOT NULL,
  `product_image` varchar(235) NOT NULL,
  `description_page` varchar(250) DEFAULT NULL,
  `screenshot_1` varchar(250) DEFAULT NULL,
  `screenshot_2` varchar(250) DEFAULT NULL,
  `screenshot_3` varchar(250) DEFAULT NULL,
  `screenshot_4` varchar(250) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `producttb`
--

INSERT INTO `producttb` (`id`, `product_name`, `product_price`, `product_console`, `product_image`, `description_page`, `screenshot_1`, `screenshot_2`, `screenshot_3`, `screenshot_4`, `description`) VALUES
(1, 'God of War Ragnarok', 59.99, 'Playstation 5', './Games/New Releases/GOD OF WAR - PS5.png', '../5 Game Description Pages/GameDescriptionPage1.php', '../Game Descriptions/Screenshots/God of War/S1.png', '../Game Descriptions/Screenshots/God of War/S2.png', '../Game Descriptions/Screenshots/God of War/S3.png', '../Game Descriptions/Screenshots/God of War/S4.png', 'Against a backdrop of Norse Realms torn asunder by the fury of the Aesir, they’ve been trying their utmost to undo the end times. But despite their best efforts, Fimbulwinter presses onward.\r\n\r\nWitness the changing dynamic of the father-son relations'),
(2, 'Call of Duty: Modern Warf', 69.99, 'Playstation 5', './Games/New Releases/CALL OF DUTY -PS5.png\r\n', '../5 Game Description Pages/GameDescriptionPage2.php', '../Game Descriptions/Screenshots/Call of Duty/s1.png', '../Game Descriptions/Screenshots/Call of Duty/s2.png', '../Game Descriptions/Screenshots/Call of Duty/s3.png', '../Game Descriptions/Screenshots/Call of Duty/s4.png', NULL),
(3, 'Sonic Frontiers', 59.99, 'Nintendo Switch', './Games/New Releases/SONIC FRONTIERS - SWITCH.png', '../5 Game Description Pages/GameDescriptionPage3.php', '../Game Descriptions/Screenshots/Sonic Frontiers/s1.png', '../Game Descriptions/Screenshots/Sonic Frontiers/s2.png', '../Game Descriptions/Screenshots/Sonic Frontiers/s3.png', '../Game Descriptions/Screenshots/Sonic Frontiers/s4.png', NULL),
(4, 'Evil West', 59.99, 'Xbox Series X', './Games/Pre Order/Evil West - Xbox Series X.png', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Dead Island 2: Pulp Editi', 69.99, 'Xbox Series X', './Games/Pre Order/Dead Island 2 Pulp Edition - Xbox Series X.png', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Hogwarts Legacy: Deluxe E', 79.99, 'Playstation 5', './Games/Pre Order/Hogwarts Legacy Deluxe Edition -PS5.png', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Halo Infinite', 20, 'Xbox Series X', './Games/Sale/Halo Infinite - Xbox Series X.png', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Pokemon: Shining Pearl', 39, 'Nintendo Switch', './Games/Sale/Pokemon Shining Pearl - Nintendo Switch.png', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Sonic Colors: Ultimate', 15, 'Playstation 4', './Games/Sale/Sonic Colors Ultimate - PS4.png', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'Evil Dead', 20, 'Playstation 5', 'Games/PS4-PS5/EVIL DEAD PS5 39.99-20.png\r\n', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'Gotham Knights', 69.99, 'Playstation 5', 'Games/PS4-PS5/GOTHAM KNIGHTS PS5 69.99.png\r\n', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'The Quarry', 29, 'Playstation 5', 'Games/PS4-PS5/THE QUARRY PS5 49.99-29.00.png\r\n', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'Marvel\'s Spiderman: Miles', 20, 'Playstation 5', 'Games/PS4-PS5/Marvels Spiderman Miles Morales Standard PS5 20.00.png\r\n', NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'Assassin\'s Creed: Valhall', 59.99, 'Playstation 4', 'Games/PS4-PS5/Assassins Creed Valhalla PS4 59.99.png\r\n', NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'Elden Ring', 39.99, 'Playstation 4', 'Games/PS4-PS5/Elden Ring PS4 59.99-39.99.png\r\n', NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'Marvel\'s Spiderman', 12.99, 'Playstation 4', 'Games/PS4-PS5/Marvels Spiderman PS4 12.99.png\r\n', NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'Starwars Jedi Fall Order', 19.99, 'Playstation 4', 'Games/PS4-PS5/Starwars Jedi Fall Order PS4 19.99.png\r\n', NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'Call of Duty: Black Ops C', 29, 'Xbox One', 'Games/Xbox Series X - Xbox One/CALL OF DUTY BLACK OPS COLD WAR XBOX ONE 29.00.png\r\n', NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'Call of Duty: Modern Warf', 29, 'Xbox One', 'Games/Xbox Series X - Xbox One/CALL OF DUTY MODERN WAREFARE XBOX ONE 29.00.png\r\n', NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'Cyber Punk', 27.99, 'Xbox One', 'Games/Xbox Series X - Xbox One/CyberPunk XboxOne 27.99.png\r\n', NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'Red Dead Redemption II', 19.99, 'Xbox One', 'Games/Xbox Series X - Xbox One/Red Dead Redepemption 2 Xbox One 19.99.png\r\n', NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'Far Cry 6', 49.99, 'Xbox Series X', 'Games/Xbox Series X - Xbox One/FAR CRY 6 XBOX SERIES X 49.99.png\r\n', NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'Grand Theft Auto Trilogy ', 20, 'Xbox Series X', 'Games/Xbox Series X - Xbox One/Grand Theft Auto Trilogy - The definitive edition xbox series x 49.99 - 20.00.png\r\n', NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'Saints Row: Criminal Cust', 39.99, 'Xbox Series X', 'Games/Xbox Series X - Xbox One/Saints Row Criminal Custom Edition Xbox Series X 59.99 - 39.00.png\r\n', NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'Paw Patrol: Grand Prix', 39.99, 'Xbox Series X', 'Games/Xbox Series X - Xbox One/Paw Patrol  Grand Prix Xbox Series X.png', NULL, NULL, NULL, NULL, NULL, NULL),
(27, 'Animal Crossing: New Hori', 39, 'Nintendo Switch', 'Games/Nintendo/Animal Crossing New Horizions Nintendo Switch 39.00.png\r\n', NULL, NULL, NULL, NULL, NULL, NULL),
(28, 'Luigi\'s Manision 3', 59.99, 'Nintendo Switch', 'Games/Nintendo/Luigi\'s Mansion 3 Nintendo Siwtch 59.99.png\r\n', NULL, NULL, NULL, NULL, NULL, NULL),
(29, 'Pokemon Legends: Arceus', 59.99, 'Nintendo Switch', 'Games/Nintendo/Pokemon Legends Arceus Nintendo Switch 59.99.png\r\n', NULL, NULL, NULL, NULL, NULL, NULL),
(30, 'Pokemon Scarlet', 59.99, 'Nintendo Switch', 'Games/Nintendo/Pokemon Scarlet Nintendo Switch 59.99.png\r\n', NULL, NULL, NULL, NULL, NULL, NULL),
(31, 'Pokemon Violet', 59.99, 'Nintendo Switch', 'Games/Nintendo/Pokemon Violet Nintendo Switch 59.99.png\r\n', NULL, NULL, NULL, NULL, NULL, NULL),
(32, 'Super Mario Odyssey', 59.99, 'Nintendo Switch', 'Games/Nintendo/Super Mario Odyssey Nintendo Switch 59.99.png\r\n', NULL, NULL, NULL, NULL, NULL, NULL),
(33, 'Super Mario Party', 59.99, 'Nintendo Switch', 'Games/Nintendo/Super Mario Party Nintendo Siwtch 59.99.png\r\n', NULL, NULL, NULL, NULL, NULL, NULL),
(34, 'The Legend of Zelda: Skyw', 39, 'Nintendo Switch', 'Games/Nintendo/THE LEGEND OF ZELDA SKYWARD SWORD HD NINTENDO SWITCH 39.00.png\r\n', NULL, NULL, NULL, NULL, NULL, NULL),
(35, 'Microsoft Xbox Series X W', 44.99, 'Xbox Series X', 'Accessories/Controllers/Microsoft Xbox Series X Wireless Controller Electric Volt 44.99.png\r\n', NULL, NULL, NULL, NULL, NULL, NULL),
(36, 'Nintendo Switch Joy/Con L', 54.99, 'Nintendo Switch', 'Accessories/Controllers/Microsoft Xbox Series X Wireless Controller Forza Horizon 5 54.99.png\r\n', NULL, NULL, NULL, NULL, NULL, NULL),
(37, 'Nintendo Switch Wireless ', 69.99, 'Nintendo Switch', 'Accessories/Controllers/Nintendo Switch Wireless Pro Controller 69.99.png\r\n', NULL, NULL, NULL, NULL, NULL, NULL),
(38, 'PowerA Enhanced Wireless ', 54.99, 'Nintendo Switch', 'Accessories/Controllers/PowerA Enhanced Wireless Controller for Nintendo Switch DOOM Eternal 54.99.png\r\n', NULL, NULL, NULL, NULL, NULL, NULL),
(39, 'PowerA Pink Lemonade Ehan', 39.99, 'Xbox Series X', 'Accessories/Controllers/PowerA Pink Lemonade Enhanced Wired Controller for Xbox Series X - Xbox One 37.99.png\r\n', NULL, NULL, NULL, NULL, NULL, NULL),
(40, 'Sony DualSense Wireless C', 49.99, 'Playstation 5', 'Accessories/Controllers/Sony DualSense Wireless Controller for Playstation 5 49.99.png\r\n', NULL, NULL, NULL, NULL, NULL, NULL),
(41, 'Sony Playstation 5 DualSe', 22.99, 'Playstation 5', 'Accessories/Controllers/Sony Playstation 5 DualSense Charging Station 22.99.png\r\n', NULL, NULL, NULL, NULL, NULL, NULL),
(42, 'Astro Gaming A50 Wireless', 199.99, 'Playstation 4', 'Accessories/Headsets/Astro Gaming A50 Wireless Gaming Headset with Base station for Playstation 4 199.99.png\r\n', NULL, NULL, NULL, NULL, NULL, NULL),
(43, 'HyperX Cloud Alpha Pro Ga', 54.99, 'PC', 'Accessories/Headsets/HyperX Cloud Alpha Pro Wired Gaming Headset 54.99.png\r\n', NULL, NULL, NULL, NULL, NULL, NULL),
(44, 'Gaming LVL40 Wired Stereo', 15.99, 'Xbox Series X', 'Accessories/Headsets/PDP Gaming LVL40 Wired Stereo Gaming Headset for Xbox Series X-S and Xbox One 15.99.png\r\n', NULL, NULL, NULL, NULL, NULL, NULL),
(45, 'Razor Kraken BT Kitty Edi', 69.99, 'PC', 'Accessories/Headsets/Razer Kraken BT Kitty Edition Wireless Gaming Headset for Mobile 69.99.png\r\n', NULL, NULL, NULL, NULL, NULL, NULL),
(46, 'Sony PULSE 3D Wireless Ga', 69.99, 'Playstation 5', 'Accessories/Headsets/Sony PULSE 3D Wireless Gaming Headset for Playstation 5 69.99.png\r\n', NULL, NULL, NULL, NULL, NULL, NULL),
(47, 'SteelSeries Arctis 5 PUBG', 89.99, 'PC', 'Accessories/Headsets/SteelSeries Arctis 5 PUBG Edition Wired Gaming Headset 89.99.png\r\n', NULL, NULL, NULL, NULL, NULL, NULL),
(48, 'SteelSeries Arctis 7P Plu', 89.99, 'Playstation 5', 'Accessories/Headsets/SteelSeries Arctis 7P Plus Wireless Gaming Headset for PS5, PS4, PC 89.99.png\r\n', NULL, NULL, NULL, NULL, NULL, NULL),
(49, 'PowerA Spectra Infinity E', 44.99, 'Xbox Series X', 'Accessories/Controllers/PowerA Spectra Infinity Enhanced Wired Controller for Xbox Series X 44.99.png\r\n', NULL, NULL, NULL, NULL, NULL, NULL),
(50, 'Atrix Joy/Con Gaming Whee', 9.99, 'Nintendo Switch', 'Accessories/Racing Wheels/Atrix Joy-Con Gaming Wheel for Nintendo Switch 2 Pack 9.99.png\r\n', NULL, NULL, NULL, NULL, NULL, NULL),
(51, 'G920 Driving Force Racing', 199.99, 'Xbox One', 'Accessories/Racing Wheels/G920 Driving Force Racing Wheel for Xbox One and PC 199.99.png\r\n', NULL, NULL, NULL, NULL, NULL, NULL),
(52, 'Logintech G923 TRUEFORCE ', 399.99, 'Xbox Series X', 'Accessories/Racing Wheels/Logintech G923 TRUEFORCE Racing Wheel and Pedals for Xbox Series X 399.99.png\r\n', NULL, NULL, NULL, NULL, NULL, NULL),
(53, 'Logitech G29 Driving Forc', 279.99, 'Playstation 4', 'Accessories/Racing Wheels/Logitech G29 Driving Force Racing Wheel for PS4-5-PC 279.99.png\r\n', NULL, NULL, NULL, NULL, NULL, NULL),
(54, 'Multi-Format Steering Whe', 99.99, 'Playstation 5', 'Accessories/Racing Wheels/Multi-Format Steering Wheel and Pedals Gamestop Exclusive 99.99.png\r\n', NULL, NULL, NULL, NULL, NULL, NULL),
(55, 'Thrustmaster Ferrari 456 ', 129.99, 'Xbox One', 'Accessories/Racing Wheels/Thrustmaster Ferrari 458 Spider Racing Wheel for Xbox One 129.99.png\r\n', NULL, NULL, NULL, NULL, NULL, NULL),
(56, 'Thrustmaster T150 RS Raci', 229.99, 'Playstation 4', 'Accessories/Racing Wheels/Thrustmaster T150 RS Racing Wheel for PS4 229.99.png\r\n', NULL, NULL, NULL, NULL, NULL, NULL),
(57, 'Accessories/Racing Wheels', 89, 'Playstation 4', 'Accessories/Racing Wheels/Thrustmaster T80 Ferrari 488 GTB Edition Racing Wheel for PS4 89.99.png\r\n', NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `producttb`
--
ALTER TABLE `producttb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `producttb`
--
ALTER TABLE `producttb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
