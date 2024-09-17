-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for toko_elektronik
DROP DATABASE IF EXISTS `toko_elektronik`;
CREATE DATABASE IF NOT EXISTS `toko_elektronik` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `toko_elektronik`;

-- Dumping structure for table toko_elektronik.produk
DROP TABLE IF EXISTS `produk`;
CREATE TABLE IF NOT EXISTS `produk` (
  `id` int NOT NULL AUTO_INCREMENT,
  `thumbnail` varchar(255) DEFAULT NULL,
  `kategori` varchar(100) DEFAULT NULL,
  `produk` varchar(255) DEFAULT NULL,
  `harga` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table toko_elektronik.produk: ~9 rows (approximately)
REPLACE INTO `produk` (`id`, `thumbnail`, `kategori`, `produk`, `harga`) VALUES
	(2, 'https://images.samsung.com/is/image/samsung/p6pim/id/sm-f721bzdaxid/gallery/id-galaxy-z-flip4-f721-sm-f721bzdaxid-534237011?$650_519_PNG$', 'Samsung', 'Samsung Z Flip', 10000000),
	(3, 'https://i01.appmifile.com/webfile/globalimg/id/cms/92879113-C29E-4671-7E34-49895772C27F!800x800!85.jpg', 'Xiaomi', 'Xiaomi Redmi Note 11 Pro', 3200000),
	(8, 'assets/Advan G9 Pro.jpg', 'Advan', 'Advan G9 Pro', 2000000),
	(9, 'assets/iPhone 13 128GB Starlight.webp', 'Apple', 'iPhone 13 128GB Starlight', 20000000),
	(10, 'assets/iPhone 15 128GB Pink.webp', 'Apple', 'iPhone 15 128GB Pink', 25000000),
	(11, 'assets/Nexian TAP G868.jpg', 'Nexian', 'Nexian TAP G868', 300000),
	(12, 'assets/Samsung Gallaxy A54 5G.jpg', 'Samsung', 'Samsung Gallaxy A54 5G', 4500000),
	(13, 'assets/Samsung Gallaxy S20.jpg', 'Samsung', 'Samsung Gallaxy S20', 5600000),
	(14, 'assets/Xiomi Redmi Note 10 Pro.jfif', 'Xiomi', 'Xiomi Redmi Note 10 Pro', 2000000);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
