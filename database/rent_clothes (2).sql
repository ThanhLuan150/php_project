-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2023 at 06:15 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rent_clothes`
--

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `id_bills` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `id_statuses` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`id_bills`, `id_users`, `id_statuses`, `created_at`, `updated_at`, `description`) VALUES
(1, 1, NULL, '2023-04-10 16:01:30', NULL, 'done'),
(2, 1, NULL, '2023-05-10 16:01:30', NULL, 'late'),
(3, 1, NULL, '2023-06-10 16:01:30', NULL, 'forget'),
(4, 2, NULL, '2023-05-10 16:01:30', NULL, 'late'),
(5, 2, NULL, '2023-06-10 16:01:30', NULL, 'done'),
(6, 2, NULL, '2023-07-10 16:01:30', NULL, 'forget'),
(7, 3, NULL, '2023-05-10 16:01:30', NULL, 'done'),
(8, 3, NULL, '2023-06-10 16:01:30', NULL, 'forget'),
(9, 3, NULL, '2023-07-10 16:01:30', NULL, 'late'),
(10, 4, NULL, '2023-07-10 16:01:30', NULL, 'done'),
(11, 5, NULL, '2023-07-10 16:01:30', NULL, 'done');

-- --------------------------------------------------------

--
-- Table structure for table `bill_detail`
--

CREATE TABLE `bill_detail` (
  `id_bill_detail` int(11) NOT NULL,
  `id_clothes` int(11) NOT NULL,
  `quality` int(11) NOT NULL,
  `id_bills` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill_detail`
--

INSERT INTO `bill_detail` (`id_bill_detail`, `id_clothes`, `quality`, `id_bills`, `created_at`, `updated_at`) VALUES
(1, 2, 2, 1, '2023-04-10 16:01:30', NULL),
(2, 3, 2, 1, '2023-04-10 16:01:30', NULL),
(3, 4, 2, 2, '2023-05-10 16:01:30', NULL),
(4, 5, 2, 2, '2023-05-10 16:01:30', NULL),
(5, 6, 2, 3, '2023-06-10 16:01:30', NULL),
(6, 7, 2, 3, '2023-06-10 16:01:30', NULL),
(7, 8, 2, 4, '2023-06-10 16:01:30', NULL),
(8, 9, 2, 5, '2023-06-10 16:01:30', NULL),
(9, 10, 2, 6, '2023-06-10 16:01:30', NULL),
(10, 11, 2, 7, '2023-06-10 16:01:30', NULL),
(11, 12, 2, 8, '2023-06-10 16:01:30', NULL),
(12, 13, 1, 9, '2023-06-10 16:01:30', NULL),
(13, 14, 2, 10, '2023-06-10 16:01:30', NULL),
(14, 15, 1, 11, '2023-06-10 16:01:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id_blogs` int(11) NOT NULL,
  `image` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id_cards` int(11) NOT NULL,
  `id_clothes` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id_categories` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `tiencoc` int(11) NOT NULL,
  `rent_prices` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id_categories`, `name`, `created_at`, `updated_at`, `tiencoc`, `rent_prices`) VALUES
(1, 'Ão Ä‘á»‘i khÃ¢m', '2023-04-09 11:53:31', NULL, 100000, 200000),
(2, 'Ão giao lÄ©nh', '2023-04-09 11:54:31', NULL, 150000, 300000),
(3, 'Ão nháº­t bÃ¬nh', '2023-04-09 11:55:31', NULL, 200000, 400000),
(4, 'Ão táº¥c', '2023-04-09 11:56:31', NULL, 50000, 100000),
(5, 'Ão ngá»§ thÃ¢n', '2023-04-09 11:57:31', NULL, 75000, 150000);

-- --------------------------------------------------------

--
-- Table structure for table `cccd`
--

CREATE TABLE `cccd` (
  `id_cccd` int(11) NOT NULL,
  `id_bill_detail` int(11) NOT NULL,
  `front_image` text NOT NULL,
  `back_iimage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `clothes`
--

CREATE TABLE `clothes` (
  `id_clothes` int(11) NOT NULL,
  `image` text NOT NULL,
  `name` varchar(40) NOT NULL,
  `description` text DEFAULT NULL,
  `id_categories` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `sex` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clothes`
--

INSERT INTO `clothes` (`id_clothes`, `image`, `name`, `description`, `id_categories`, `created_at`, `updated_at`, `sex`) VALUES
(1, 'https://i.pinimg.com/736x/45/6d/e9/456de922731a0227be015d1bb825caa0--vietnam-korea.jpg', 'Ão NgÅ© ThÃ¢n thá»i Nguyá»…n-Viá»‡t ph', NULL, 5, '2023-04-09 11:55:31', NULL, 'nu'),
(2, 'https://vietphuc.net/wp-content/uploads/2021/05/IMG_0200.jpg', 'Ão NgÅ© ThÃ¢n Tay Cháº½n váº£i sa hoáº·', NULL, 5, '2023-04-09 11:55:31', NULL, 'nu'),
(3, 'https://i.pinimg.com/736x/4b/21/3a/4b213a5265f84f585a69315d88e0d560.jpg', 'Ão NgÅ© ThÃ¢n tay thá»¥ng', NULL, 5, '2023-04-09 11:55:31', NULL, 'nam'),
(4, 'https://i.pinimg.com/originals/2b/83/2d/2b832d66d8c77fde9b9993fa8ade5466.jpg', 'Ão NgÅ© ThÃ¢n tay dÃ i tÃ­m', NULL, 5, '2023-04-09 11:55:31', NULL, 'nu'),
(5, 'https://i.pinimg.com/originals/3c/a2/c8/3ca2c8967467a68a6ee0d50e283011dd.jpg', 'Ão NgÅ© ThÃ¢n thá»i Nguyá»…n', NULL, 5, '2023-04-09 11:55:31', NULL, 'nu'),
(6, 'https://cotranghoangcung.com/wp-content/uploads/2021/12/189958071_4155887221161737_1382701908358323962_n.jpg', 'Ão NgÅ© ThÃ¢n váº£i sa hÃ n', NULL, 5, '2023-04-09 11:55:31', NULL, 'nu'),
(7, 'https://cotranghoangcung.com/wp-content/uploads/2021/12/190102650_4155887171161742_5636596352801830650_n.jpg', 'Ão NgÅ© ThÃ¢n cá»• trang HoÃ ng Cung', NULL, 5, '2023-04-09 11:55:31', NULL, 'nu'),
(8, 'https://i.pinimg.com/originals/c8/e5/1d/c8e51dd471245fb129c13724d4efcfe1.jpg', 'Ão NgÅ© ThÃ¢n tiá»ƒu thÆ°', NULL, 5, '2023-04-09 11:55:31', NULL, 'nu'),
(9, 'https://i0.wp.com/www.saigonaodai.net/wp-content/uploads/2020/12/%C3%A1o-ng%C5%A9-th%C3%A2n-tay-ch%E1%BA%BDn-in-hoa-v%C4%83n-m%C3%A0u-%C4%91%E1%BB%8F.jpg?fit=1024%2C1700&ssl=1', 'Ão NgÅ© ThÃ¢n tay cháº½n in hoa vÄƒn', NULL, 5, '2023-04-09 11:55:31', NULL, 'nam'),
(10, 'https://anhnghethuatxua.com/wp-content/uploads/2020/07/ZEN_9811-1-878x1024.jpg', 'Ão NgÅ© ThÃ¢n tay cháº½n-á»¶ VÃ¢n CÃ¡c', NULL, 5, '2023-04-09 11:55:31', NULL, 'nu'),
(11, 'https://vietphuc.net/wp-content/uploads/2021/05/IMG_9025-1-768x1152.jpg', 'Ão NgÅ© ThÃ¢n Viá»‡t cá»• phá»¥c cÃ¡ch ', NULL, 5, '2023-04-09 11:55:31', NULL, 'nam'),
(12, 'https://vietphuc.net/wp-content/uploads/2021/05/1WV05246-1365x2048.jpg', 'Ão NgÅ© ThÃ¢n tay cháº½n váº£i Ä‘Å©i tu', NULL, 5, '2023-04-09 11:55:31', NULL, 'nu'),
(13, 'https://1.bp.blogspot.com/-ZAh1dUzQ1sM/YEsFYH7Zf1I/AAAAAAAA4rs/O8tqy8PUMl4qgSwiyPLnSZV4o2J3yXJMwCLcBGAsYHQ/s957/ao-ngu-than-in-hoa-van-mau-tra-xanh.jpg', 'Ão NgÅ© ThÃ¢n Ä‘áº¹p chá»¥p ká»‰ yáº¿u ', NULL, 5, '2023-04-09 11:55:31', NULL, 'nam'),
(14, 'https://vietphuc.net/wp-content/uploads/2021/05/1WV05614-600x900.jpg', 'Ão NgÅ© ThÃ¢n Tay Cháº½n HSSV váº£i Ä‘Å', NULL, 5, '2023-04-09 11:55:31', NULL, 'nam'),
(15, 'https://cotranghoangcung.com/wp-content/uploads/2021/12/189146681_4155908831159576_824723857400436331_n.jpg', 'Ão NgÅ© ThÃ¢n Nam sa HÃ n tÃ­m hoa vÄƒn', NULL, 5, '2023-04-09 11:55:31', NULL, 'nam'),
(16, 'https://i.pinimg.com/originals/a7/8d/c0/a78dc0ee750278979ba5a049ffb656e6.jpg', 'Ão NgÅ© ThÃ¢n thá»i Nguyá»…n', NULL, 5, '2023-04-09 11:55:31', NULL, 'nam'),
(17, 'https://i.ytimg.com/vi/Eb2af86dvDk/maxresdefault.jpg', 'Ão NgÅ© ThÃ¢n Nam qua nhá»¯ng thÄƒng tr', NULL, 5, '2023-04-09 11:55:31', NULL, 'nam'),
(18, 'https://tse4.mm.bing.net/th?id=OIP.ezJiWFloRUq9jlGSmaoJWAHaLH&pid=Api&P=0', 'Ão NgÅ© ThÃ¢n hoa vÄƒn Ä‘á»™c Ä‘Ã¡o', NULL, 5, '2023-04-09 11:55:31', NULL, 'nam'),
(19, 'https://vietphuc.net/wp-content/uploads/2021/05/1WV05631-1024x1536.jpg', 'Ão NgÅ© ThÃ¢n tay Ä‘en cho nam', NULL, 5, '2023-04-09 11:55:31', NULL, 'nam'),
(20, 'https://cf.shopee.vn/file/d0b863d55cf6347976176e9fac21ede1', 'Ão khoÃ¡c Ä‘á»‘i khÃ¢m LiÃªn Hoa', ' Äá»‘i KhÃ¢m (å°è¥Ÿ) Chá»¯ KhÃ¢m (è¥Ÿ) cÃ³ nghÄ©a lÃ  váº¡t Ã¡o trÆ°á»›c. Äá»‘i KhÃ¢m lÃ  dáº¡ng Ã¡o cÃ³ hai váº¡t trÆ°á»›c Ä‘áº·t song song nhau, thÆ°á»ng Ä‘á»ƒ buÃ´ng thá»ng. Tuá»³ vÃ o thá»i Ä‘áº¡i, Ä‘á»‘i khÃ¢m cÃ²n cÃ³ nhá»¯ng tÃªn nhÆ° bá»‘i tá»­ è¤™å­ (thá»i Tá»‘ng), phi phong (thá»i Minh), vÃ  nháº­t bÃ¬nh (thá»i Nguyá»…n).', 1, '2023-04-09 11:53:31', NULL, 'nu'),
(21, 'https://1.bp.blogspot.com/-z7wD6zhoLis/Xy_3C17HeoI/AAAAAAAAy0M/KuPAnK-uvQkD7pd6l2Q1nrsyHFw5nPiigCLcBGAsYHQ/w457-h640/cho%2Bthue%2Bao%2Bdoi%2Bkham.jpg', 'Ão khoÃ¡c Ä‘á»‘i khÃ¢m', 'Äá»‘i KhÃ¢m (å°è¥Ÿ) Chá»¯ KhÃ¢m (è¥Ÿ) cÃ³ nghÄ©a lÃ  váº¡t Ã¡o trÆ°á»›c. Äá»‘i KhÃ¢m lÃ  dáº¡ng Ã¡o cÃ³ hai váº¡t trÆ°á»›c Ä‘áº·t song song nhau, thÆ°á»ng Ä‘á»ƒ buÃ´ng thá»ng. Tuá»³ vÃ o thá»i Ä‘áº¡i, Ä‘á»‘i khÃ¢m cÃ²n cÃ³ nhá»¯ng tÃªn nhÆ° bá»‘i tá»­ è¤™å­ (thá»i Tá»‘ng), phi phong (thá»i Minh), vÃ  nháº­t bÃ¬nh (thá»i Nguyá»…n).', 1, '2023-04-09 11:53:31', NULL, 'nu'),
(22, 'https://vietphuc.net/wp-content/uploads/2021/04/SAN_5111-1-768x1151.jpg', 'Ão Äá»‘i KhÃ¢m (Unisex)', 'Äá»‘i KhÃ¢m (å°è¥Ÿ) Chá»¯ KhÃ¢m (è¥Ÿ) cÃ³ nghÄ©a lÃ  váº¡t Ã¡o trÆ°á»›c. Äá»‘i KhÃ¢m lÃ  dáº¡ng Ã¡o cÃ³ hai váº¡t trÆ°á»›c Ä‘áº·t song song nhau, thÆ°á»ng Ä‘á»ƒ buÃ´ng thá»ng. Tuá»³ vÃ o thá»i Ä‘áº¡i, Ä‘á»‘i khÃ¢m cÃ²n cÃ³ nhá»¯ng tÃªn nhÆ° bá»‘i tá»­ è¤™å­ (thá»i Tá»‘ng), phi phong (thá»i Minh), vÃ  nháº­t bÃ¬nh (thá»i Nguyá»…n).', 1, '2023-04-09 11:53:31', NULL, 'nam'),
(23, 'https://cf.shopee.vn/file/764699d3afd72a2ea9eaf152c2d5d251_tn', 'Ão Äá»‘i KhÃ¢m (Unisex)', ' Äá»‘i KhÃ¢m (å°è¥Ÿ) Chá»¯ KhÃ¢m (è¥Ÿ) cÃ³ nghÄ©a lÃ  váº¡t Ã¡o trÆ°á»›c. Äá»‘i KhÃ¢m lÃ  dáº¡ng Ã¡o cÃ³ hai váº¡t trÆ°á»›c Ä‘áº·t song song nhau, thÆ°á»ng Ä‘á»ƒ buÃ´ng thá»ng. Tuá»³ vÃ o thá»i Ä‘áº¡i, Ä‘á»‘i khÃ¢m cÃ²n cÃ³ nhá»¯ng tÃªn nhÆ° bá»‘i tá»­ è¤™å­ (thá»i Tá»‘ng), phi phong (thá»i Minh), vÃ  nháº­t bÃ¬nh (thá»i Nguyá»…n).', 1, '2023-04-09 11:53:31', NULL, 'nu'),
(24, 'https://cf.shopee.vn/file/f6bb08f09ae593d2ea34b0e38717b20f_tn', 'Ão khoÃ¡c Ä‘á»‘i khÃ¢m Nháº­t VÃ¢n', 'Äá»‘i KhÃ¢m (å°è¥Ÿ) Chá»¯ KhÃ¢m (è¥Ÿ) cÃ³ nghÄ©a lÃ  váº¡t Ã¡o trÆ°á»›c. Äá»‘i KhÃ¢m lÃ  dáº¡ng Ã¡o cÃ³ hai váº¡t trÆ°á»›c Ä‘áº·t song song nhau, thÆ°á»ng Ä‘á»ƒ buÃ´ng thá»ng. Tuá»³ vÃ o thá»i Ä‘áº¡i, Ä‘á»‘i khÃ¢m cÃ²n cÃ³ nhá»¯ng tÃªn nhÆ° bá»‘i tá»­ è¤™å­ (thá»i Tá»‘ng), phi phong (thá»i Minh), vÃ  nháº­t bÃ¬nh (thá»i Nguyá»…n).', 1, '2023-04-09 11:53:31', NULL, 'nu'),
(25, 'https://cf.shopee.vn/file/321489576e2bb805edcd955204ef42ff_tn', 'Ão khoÃ¡c Ä‘á»‘i khÃ¢m|Ä‘áº¡i viá»‡t fa', 'Äá»‘i KhÃ¢m (å°è¥Ÿ) Chá»¯ KhÃ¢m (è¥Ÿ) cÃ³ nghÄ©a lÃ  váº¡t Ã¡o trÆ°á»›c. Äá»‘i KhÃ¢m lÃ  dáº¡ng Ã¡o cÃ³ hai váº¡t trÆ°á»›c Ä‘áº·t song song nhau, thÆ°á»ng Ä‘á»ƒ buÃ´ng thá»ng. Tuá»³ vÃ o thá»i Ä‘áº¡i, Ä‘á»‘i khÃ¢m cÃ²n cÃ³ nhá»¯ng tÃªn nhÆ° bá»‘i tá»­ è¤™å­ (thá»i Tá»‘ng), phi phong (thá»i Minh), vÃ  nháº­t bÃ¬nh (thá»i Nguyá»…n).', 1, '2023-04-09 11:53:31', NULL, 'nu'),
(26, 'https://cf.shopee.vn/file/5e801e090c34cd9e94bd3573b6d70463_tn', 'Ão khoÃ¡c Äá»‘i KhÃ¢m Gáº¡ch Hoa', 'Äá»‘i KhÃ¢m (å°è¥Ÿ) Chá»¯ KhÃ¢m (è¥Ÿ) cÃ³ nghÄ©a lÃ  váº¡t Ã¡o trÆ°á»›c. Äá»‘i KhÃ¢m lÃ  dáº¡ng Ã¡o cÃ³ hai váº¡t trÆ°á»›c Ä‘áº·t song song nhau, thÆ°á»ng Ä‘á»ƒ buÃ´ng thá»ng. Tuá»³ vÃ o thá»i Ä‘áº¡i, Ä‘á»‘i khÃ¢m cÃ²n cÃ³ nhá»¯ng tÃªn nhÆ° bá»‘i tá»­ è¤™å­ (thá»i Tá»‘ng), phi phong (thá»i Minh), vÃ  nháº­t bÃ¬nh (thá»i Nguyá»…n).', 1, '2023-04-09 11:53:31', NULL, 'nu'),
(27, 'https://tailocwedding.vn/wp-content/uploads/2022/11/190389852_4143671385716654_7283893473213946319_n-1024x1536.jpg', 'Ão Ä‘á»‘i khÃ¢m', 'Äá»‘i KhÃ¢m (å°è¥Ÿ) Chá»¯ KhÃ¢m (è¥Ÿ) cÃ³ nghÄ©a lÃ  váº¡t Ã¡o trÆ°á»›c. Äá»‘i KhÃ¢m lÃ  dáº¡ng Ã¡o cÃ³ hai váº¡t trÆ°á»›c Ä‘áº·t song song nhau, thÆ°á»ng Ä‘á»ƒ buÃ´ng thá»ng. Tuá»³ vÃ o thá»i Ä‘áº¡i, Ä‘á»‘i khÃ¢m cÃ²n cÃ³ nhá»¯ng tÃªn nhÆ° bá»‘i tá»­ è¤™å­ (thá»i Tá»‘ng), phi phong (thá»i Minh), vÃ  nháº­t bÃ¬nh (thá»i Nguyá»…n).', 1, '2023-04-09 11:53:31', NULL, 'nu'),
(28, 'https://tse3.mm.bing.net/th?id=OIP.9jXeXyNAa5hWGW9NtJ43UQHaLH&pid=Api&P=0', 'Ão Táº¥c thÆ° sinh nam', NULL, 4, '2023-04-09 11:53:31', NULL, 'nam'),
(29, 'https://cotranghoangcung.com/wp-content/uploads/2021/12/160860147_3936820186401776_155210930724253641_n.jpg', 'Ão Táº¥c QuÃ½ NhÃ¢n', NULL, 4, '2023-04-09 11:53:31', NULL, 'nu'),
(30, 'https://i.pinimg.com/originals/71/84/5f/71845f32b0494de5093b2d5254c3fe14.jpg', 'Ão Táº¥c ÄÃ¡p á»¨ng', NULL, 4, '2023-04-09 11:53:31', NULL, 'nu'),
(31, 'https://i.pinimg.com/736x/88/e5/60/88e5603f0f453c5657f53ef127091e67.jpg', 'Ão Táº¥c ThÆ°á»ng Táº¡i', NULL, 4, '2023-04-09 11:53:31', NULL, 'nu'),
(32, 'https://trangphucchupanhsaigon.com/wp-content/uploads/2021/08/o-t%E1%BA%A5c-v%C3%A0ng-e1629277791650.jpg', 'Ão Táº¥c HoÃ ng háº­u', NULL, 4, '2023-04-09 11:53:31', NULL, 'nu'),
(33, 'https://vietphuc.net/wp-content/uploads/2021/04/1D5A0985-1024x1536.jpg', 'Ão Táº¥c QuÃ½ Phi', NULL, 4, '2023-04-09 11:53:31', NULL, 'nu'),
(34, 'https://cotranghoangcung.com/wp-content/uploads/2019/12/sanpham-cotrang15-300x450.jpg', 'Ão Táº¥c HoÃ ng ThÆ°á»£ng', NULL, 4, '2023-04-09 11:53:31', NULL, 'nu'),
(35, 'https://gaubeo.store/wp-content/uploads/2022/03/Ao-Tac-To-Kinh-mau-tim-so-8-Viet-Phuc-Gau-Beo-Store-6.jpg', 'Ão Táº¥c Ná»¯ Tá»­', NULL, 4, '2023-04-09 11:53:31', NULL, 'nu'),
(36, 'https://cotranghoangcung.com/wp-content/uploads/2021/12/181698089_4083106238439836_7006226767469216143_n.jpg', 'Ão Táº¥c HoÃ ng QuÃ½ Phi', NULL, 4, '2023-04-09 11:53:31', NULL, 'nu'),
(37, 'https://i.pinimg.com/originals/f9/ae/79/f9ae7979e2e054f25526734131cc923d.jpg', 'Ão Táº¥c Giai NhÃ¢n', NULL, 4, '2023-04-09 11:53:31', NULL, 'nu'),
(38, 'https://vietphuc.net/wp-content/uploads/2021/04/SAN_6096-copy-1024x1536.jpg', 'Ão Táº¥c CÃ´ng ChÃºa', NULL, 4, '2023-04-09 11:53:31', NULL, 'nu'),
(39, 'https://s3-ap-southeast-1.amazonaws.com/images.spiderum.com/sp-images/9173eef0baf811e89742f31402bd50d9.jpg', ' Ão Táº¥c ThÃ¡i Tá»­', NULL, 4, '2023-04-09 11:53:31', NULL, 'nam'),
(40, 'https://tintuc.hahalolo.com/wp-content/uploads/2020/09/119663607_790008351800371_2770565228184954282_n.jpg', 'Ão Táº¥c HoÃ ng ThÃ¡i Háº­u', NULL, 4, '2023-04-09 11:53:31', NULL, 'nu'),
(41, 'https://vietphuc.net/wp-content/uploads/2022/09/IMG_1157-280x420.gif', 'Ão Táº¥c Phi Táº§ng', NULL, 4, '2023-04-09 11:53:31', NULL, 'nu'),
(42, 'https://image2.tienphong.vn/w665/Uploaded/2020/dg_bfjysszl/2020_10_08/845c3bfe_2984_41b6_b87a_44ea187e9f75_blrs.jpeg', 'Ão Táº¥c Táº§ng Vá»‹', NULL, 4, '2023-04-09 11:53:31', NULL, 'nu'),
(43, 'https://i.pinimg.com/originals/28/c2/86/28c286b9e9812722cb3326a977d23d04.jpg', 'Ão Táº¥c HoÃ ng Tá»­', NULL, 4, '2023-04-09 11:53:31', NULL, 'nam'),
(44, 'https://cotranghoangcung.com/wp-content/uploads/2019/12/sanpham-cotrang15.jpg', 'Ão Táº¥c ThÃ¡i ThÆ°á»£ng HoÃ ng', NULL, 4, '2023-04-09 11:53:31', NULL, 'nam'),
(45, 'https://namtuyen.com/wp-content/uploads/2021/03/ao-dai-tay-thung-nam-tuyen-9-500x692.jpg', 'Ão Táº¥c QuÃ½ Phi', NULL, 4, '2023-04-09 11:53:31', NULL, 'nu'),
(46, 'https://cotranghoangcung.com/wp-content/uploads/2021/12/166557401_3977831755633952_2867253799609111809_n.jpg', 'Ão Táº¥c ThÃ¡i Tá»­ Phi', NULL, 4, '2023-04-09 11:53:31', NULL, 'nu'),
(47, 'https://namtuyen.com/wp-content/uploads/2021/03/ao-dai-tay-thung-nam-tuyen-3-500x692.jpg', 'Ão Táº¥c Thá»«a TÆ°á»›ng', NULL, 4, '2023-04-09 11:53:31', NULL, 'nam'),
(48, 'https://i.pinimg.com/originals/94/66/ea/9466eab7ae6cb04720966affdaba1b98.jpg', 'Ão giao lÄ©nh ', NULL, 2, '2023-04-09 11:53:31', NULL, 'Nu'),
(49, 'https://i.pinimg.com/736x/7e/c5/07/7ec507380375c35da0033144d97ec54c--vi%E1%BB%87t-nam.jpg', 'Ão giao lÄ©nh', NULL, 2, '2023-04-09 11:53:31', NULL, 'Nam'),
(50, 'https://i.pinimg.com/originals/83/de/75/83de759b3b4982ee4ae764a2a76165b3.jpg', 'Ão giao lÄ©nh', NULL, 2, '2023-04-09 11:53:31', NULL, 'Nu'),
(51, 'https://i.pinimg.com/736x/8a/8b/89/8a8b8952a6031c4c8f41bed31eb8daa9.jpg', 'Ão giao lÄ©nh', NULL, 2, '2023-04-09 11:53:31', NULL, 'Nam'),
(52, 'https://i.pinimg.com/originals/47/9f/68/479f68cff51010111974bfecb2bfd37e.png', 'Ão giao lÄ©nh', NULL, 2, '2023-04-09 11:53:31', NULL, 'Nam'),
(53, 'https://i.pinimg.com/originals/e2/6a/be/e26abe259d0fbd84e1e8756e4c0a89ce.jpg', 'Ão giao lÄ©nh', NULL, 2, '2023-04-09 11:53:31', NULL, 'Nu'),
(54, 'https://i.pinimg.com/originals/88/ba/9a/88ba9adecc374f160dbd05db7a322231.jpg', 'Ão giao lÄ©nh', NULL, 2, '2023-04-09 11:53:31', NULL, 'Nu'),
(55, 'https://i.pinimg.com/originals/8a/2b/8a/8a2b8acfd4233153c2dd27ca73abdadd.png', 'Ão giao lÄ©nh', NULL, 2, '2023-04-09 11:53:31', NULL, 'Nam'),
(56, 'https://3.bp.blogspot.com/-UVo7s1CVH3Q/W8mOJvQU28I/AAAAAAAAAxw/ryi-J3-2c-sySyrKDt2eBWmC83fsjn7YACPcBGAYYCw/s1600/a%25CC%2581o%2Bgiao%2Bli%25CC%2583nh.jpg', 'Ão giao lÄ©nh', NULL, 2, '2023-04-09 11:53:31', NULL, 'Nu'),
(57, 'https://i.pinimg.com/736x/51/38/c4/5138c4392e11d967ad186e90d90f0d88.jpg', 'Ão giao lÄ©nh', NULL, 2, '2023-04-09 11:53:31', NULL, 'Nam'),
(58, 'https://vietphuc.net/wp-content/uploads/2021/05/IMG_8787-600x900-1.jpg', 'Ão giao lÄ©nh', NULL, 2, '2023-04-09 11:53:31', NULL, 'Nu'),
(59, 'https://i.pinimg.com/236x/bf/fd/d2/bffdd22787d43db78d66a462d7069bde.jpg?nii=t', 'Ão giao lÄ©nh', NULL, 2, '2023-04-09 11:53:31', NULL, 'Nam'),
(60, 'https://i.pinimg.com/736x/56/51/9b/56519b39c8ecfef75b7ce461cf56f37c.jpg', 'Ão giao lÄ©nh', NULL, 2, '2023-04-09 11:53:31', NULL, 'Nu'),
(61, 'https://i.pinimg.com/originals/ae/8c/ac/ae8cac15ebdc08cc9db0d7ffd5cab7f2.jpg', 'Ão giao lÄ©nh', NULL, 2, '2023-04-09 11:53:31', NULL, 'Nam'),
(62, 'https://designlife.vn/wp-content/uploads/2020/07/ao-giao-linh-dep.jpg', 'Ão giao lÄ©nh', NULL, 2, '2023-04-09 11:53:31', NULL, 'Nu'),
(63, 'https://64.media.tumblr.com/bf2b432e4e4337b0dbba0601f2cb54b0/tumblr_ovoaciQRce1wa6dqco7_640.jpg', 'Ão giao lÄ©nh', NULL, 2, '2023-04-09 11:53:31', NULL, 'Nam'),
(64, 'https://i.pinimg.com/originals/28/b9/74/28b974ab36770483f231a6ae33b916b0.jpg', 'Ão giao lÄ©nh', NULL, 2, '2023-04-09 11:53:31', NULL, 'Nu'),
(65, 'https://i.pinimg.com/236x/87/7c/4e/877c4e954c795e4b0b37dce61746ff80.jpg?nii=t', 'Ão giao lÄ©nh', NULL, 2, '2023-04-09 11:53:31', NULL, 'Nam'),
(66, 'https://i2.wp.com/www.saigonaodai.net/wp-content/uploads/2020/06/ao-giao-linh-tphcm.jpg?fit=600%2C1032&ssl=1', 'Ão giao lÄ©nh', NULL, 2, '2023-04-09 11:53:31', NULL, 'Nam'),
(67, 'https://1.bp.blogspot.com/-hD_6_rejckw/YMoGGT_JSRI/AAAAAAAA8FI/kSSAg4CueR0TqXjoIvFq5WSdMk114JuoQCLcBGAsYHQ/s1811/giao%2Blinh%2Btay%2Bchen%2B%25283%2529.jpg', 'Ão giao lÄ©nh', NULL, 2, '2023-04-09 11:53:31', NULL, 'Nam'),
(68, 'https://afamilycdn.com/150157425591193600/2022/12/9/1-nb1-scaled-1670575399862737277046.jpg', 'Ão Nháº­t BÃ¬nh quÃ½ phÃ¡i', NULL, 3, '2023-04-09 11:53:31', NULL, 'Nu'),
(69, 'https://tailocwedding.vn/wp-content/uploads/2022/02/ao-nhat-binh-4.jpg', 'Ão giao lÄ©nh quÃ½ tá»™c', NULL, 3, '2023-04-09 11:53:31', NULL, 'Nam'),
(70, 'https://chothueaodaitphcm.com/wp-content/uploads/2022/04/ao-nhat-binh-3-2.jpg', 'Ão Nháº­t BÃ¬nh nhÃ  TÃ¢n', NULL, 3, '2023-04-09 11:53:31', NULL, 'Nu'),
(71, 'https://bizweb.dktcdn.net/thumb/grande/100/175/849/products/avaao-nhat-binha5b52f44b03a7a64232-20211218.jpg?v=1639822046660', 'Ão Nháº­t BÃ¬nh nháº­t ná»¯ vÆ°Æ¡ng', NULL, 3, '2023-04-09 11:53:31', NULL, 'Nu'),
(72, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQxWKgoRvnZ8eyCndPgmDeA2cpolZdlnIFiIQ&usqp=CAU', 'Ão Nháº­t BÃ¬nh Háº­u Cung', NULL, 3, '2023-04-09 11:53:31', NULL, 'Nu'),
(73, 'https://icdn.dantri.com.vn/thumb_w/770/2022/01/24/xu-huong-thoi-trang-viet-phuc-vao-le-tetdocx-1642994528989.jpeg', 'Ão Nháº­t BÃ¬nh Hoan cung', NULL, 3, '2023-04-09 11:53:31', NULL, 'Nam'),
(74, 'https://ivymoda.com/assets/files/news/2022/02/23/8c52f762363d1a495bf9294e10197d48.png', 'Ão Nháº­t BÃ¬nh HoÃ ng Háº­u', NULL, 3, '2023-04-09 11:53:31', NULL, 'Nu'),
(75, 'https://images2.thanhnien.vn/uploaded/ngocthanh/2019_08_17/co-phuc-yvanhien2_EBER.jpg?width=500', 'Ão Nháº­t BÃ¬nh quÃ½ phÃ¡i', NULL, 3, '2023-04-09 11:53:31', NULL, 'Nu'),
(76, 'https://topsao.vn/wp-content/uploads/2018/10/02/Tranh-s%E1%BB%A7ng-Thanh-Duy-th%C3%A0nh-c%C3%B4ng-%C4%90%C3%A0o-B%C3%A1-L%E1%BB%99c-tr%E1%BB%9F-th%C3%A0nh-T%E1%BA%A7n-m%E1%BA%B7c-%C3%A1o-Nh%E1%BA%ADt-B%C3%ACnh-quy%E1%BB%81n-qu%C3%BD-652x367.jpg', 'Ão Nháº­t BÃ¬nh - Topsao', NULL, 3, '2023-04-09 11:53:31', NULL, 'Nu'),
(77, 'https://vn-test-11.slatic.net/p/e2e2116394133bc84bc6abc78ee54efc.jpg', 'Ão Nháº­t BÃ¬nh CÃ¡ch TÃ¢n', NULL, 3, '2023-04-09 11:53:31', NULL, 'Nu'),
(78, 'https://phapnhan.org/tv/wp-content/uploads/2021/09/14.jpg', 'Ão cÃ  sa Nháº­t BÃ¬nh', NULL, 3, '2023-04-09 11:53:31', NULL, 'Nam'),
(79, 'https://doanhnghiepkinhtexanh.vn/uploads/images/2022/04/14/ao-nhat-binh-1649920673.jpg', 'Ão Nháº­t BÃ¬nh Triá»u Nguyá»…n', NULL, 3, '2023-04-09 11:53:31', NULL, 'Nam'),
(80, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTpL4VbLdtGaJc7kLDNC_-JFsIeYNMd4a1JMw&usqp=CAU', 'Ão cÆ°á»›i Nháº­t BÃ¬nh ', NULL, 3, '2023-04-09 11:53:31', NULL, 'Nam'),
(81, 'https://bizweb.dktcdn.net/100/175/849/files/cho-thue-ao-nhat-binh-thoi-nguyen-co-phuc-viet-nam-o-ha-noi-02.jpg?v=1609570720377', 'Ão Nháº­t BÃ¬nh Thá»i Nguyá»…n ', NULL, 3, '2023-04-09 11:53:31', NULL, 'Nu'),
(82, 'https://vanhoagiaoduc.com.vn/wp-content/uploads/2021/04/vay-ao-nhat-binh-hoai-niem-van-hoa-cung-dinh-viet-nam-ao-nhat-binh-cach-tan.jpg', 'VÃ¡y Ão Nháº­t BÃ¬nh  ', NULL, 3, '2023-04-09 11:53:31', NULL, 'Nu'),
(83, 'https://vanhoagiaoduc.com.vn/wp-content/uploads/2021/04/vay-ao-nhat-binh-hoai-niem-van-hoa-cung-dinh-viet-nam-ao-nhat-binh-cach-tan.jpg', 'VÃ¡y Ão Nháº­t BÃ¬nh ', NULL, 3, '2023-04-09 11:53:31', NULL, 'Nu');

-- --------------------------------------------------------

--
-- Table structure for table `cloth_detail`
--

CREATE TABLE `cloth_detail` (
  `id_detail` int(11) NOT NULL,
  `id_clothes` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cloth_sizes`
--

CREATE TABLE `cloth_sizes` (
  `id_cloth_sizes` int(11) NOT NULL,
  `id_clothes` int(11) NOT NULL,
  `id_sizes` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id_contents` int(11) NOT NULL,
  `id_categories` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lienhe`
--

CREATE TABLE `lienhe` (
  `id_lienhe` int(11) NOT NULL,
  `nameuser` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sdt` int(11) DEFAULT NULL,
  `tieude` varchar(100) NOT NULL,
  `noidung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id_sizes` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id_statuses` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(30) NOT NULL,
  `confirm_password` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `username`, `password`, `confirm_password`, `email`, `created_at`, `updated_at`) VALUES
(1, 'adukt82', '123456adu', '123456adu', 'adu@gmail.com', '2023-04-09 11:57:31', NULL),
(2, 'phanductho', '123456tho', '123456tho', 'phanductho@gmail.com', '2023-04-09 11:57:31', NULL),
(3, 'phanthanhvuong', '12345678', '12345678', 'vuongphan@gmail.com', '2023-04-09 11:57:31', NULL),
(4, 'truongthanhluan', '987654321', '987654321', 'thanhluong@gmail.com', '2023-04-09 11:57:31', NULL),
(5, 'dangtrung', '12345619', '12345619', 'dangtrung@gmail.com', '2023-04-09 11:57:31', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id_bills`),
  ADD KEY `id_users` (`id_users`),
  ADD KEY `id_statuses` (`id_statuses`);

--
-- Indexes for table `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD PRIMARY KEY (`id_bill_detail`),
  ADD KEY `id_clothes` (`id_clothes`),
  ADD KEY `id_bills` (`id_bills`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id_blogs`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id_cards`),
  ADD KEY `id_clothes` (`id_clothes`),
  ADD KEY `id_users` (`id_users`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_categories`);

--
-- Indexes for table `cccd`
--
ALTER TABLE `cccd`
  ADD PRIMARY KEY (`id_cccd`),
  ADD KEY `id_bill_detail` (`id_bill_detail`);

--
-- Indexes for table `clothes`
--
ALTER TABLE `clothes`
  ADD PRIMARY KEY (`id_clothes`),
  ADD KEY `id_categories` (`id_categories`);

--
-- Indexes for table `cloth_detail`
--
ALTER TABLE `cloth_detail`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `id_clothes` (`id_clothes`);

--
-- Indexes for table `cloth_sizes`
--
ALTER TABLE `cloth_sizes`
  ADD PRIMARY KEY (`id_cloth_sizes`),
  ADD KEY `id_sizes` (`id_sizes`),
  ADD KEY `id_clothes` (`id_clothes`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id_contents`),
  ADD KEY `id_categories` (`id_categories`);

--
-- Indexes for table `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`id_lienhe`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id_sizes`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id_statuses`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `id_bills` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `bill_detail`
--
ALTER TABLE `bill_detail`
  MODIFY `id_bill_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id_blogs` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id_cards` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_categories` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cccd`
--
ALTER TABLE `cccd`
  MODIFY `id_cccd` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clothes`
--
ALTER TABLE `clothes`
  MODIFY `id_clothes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `cloth_detail`
--
ALTER TABLE `cloth_detail`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cloth_sizes`
--
ALTER TABLE `cloth_sizes`
  MODIFY `id_cloth_sizes` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id_contents` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `id_lienhe` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id_sizes` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id_statuses` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `bills_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`),
  ADD CONSTRAINT `bills_ibfk_2` FOREIGN KEY (`id_statuses`) REFERENCES `statuses` (`id_statuses`);

--
-- Constraints for table `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD CONSTRAINT `bill_detail_ibfk_1` FOREIGN KEY (`id_clothes`) REFERENCES `clothes` (`id_clothes`),
  ADD CONSTRAINT `bill_detail_ibfk_2` FOREIGN KEY (`id_bills`) REFERENCES `bills` (`id_bills`);

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_ibfk_1` FOREIGN KEY (`id_clothes`) REFERENCES `clothes` (`id_clothes`),
  ADD CONSTRAINT `carts_ibfk_2` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`);

--
-- Constraints for table `cccd`
--
ALTER TABLE `cccd`
  ADD CONSTRAINT `cccd_ibfk_1` FOREIGN KEY (`id_bill_detail`) REFERENCES `bill_detail` (`id_bill_detail`);

--
-- Constraints for table `clothes`
--
ALTER TABLE `clothes`
  ADD CONSTRAINT `clothes_ibfk_1` FOREIGN KEY (`id_categories`) REFERENCES `categories` (`id_categories`);

--
-- Constraints for table `cloth_detail`
--
ALTER TABLE `cloth_detail`
  ADD CONSTRAINT `cloth_detail_ibfk_1` FOREIGN KEY (`id_clothes`) REFERENCES `clothes` (`id_clothes`),
  ADD CONSTRAINT `cloth_detail_ibfk_2` FOREIGN KEY (`id_clothes`) REFERENCES `clothes` (`id_clothes`);

--
-- Constraints for table `cloth_sizes`
--
ALTER TABLE `cloth_sizes`
  ADD CONSTRAINT `cloth_sizes_ibfk_1` FOREIGN KEY (`id_sizes`) REFERENCES `sizes` (`id_sizes`),
  ADD CONSTRAINT `cloth_sizes_ibfk_2` FOREIGN KEY (`id_clothes`) REFERENCES `clothes` (`id_clothes`);

--
-- Constraints for table `contents`
--
ALTER TABLE `contents`
  ADD CONSTRAINT `contents_ibfk_1` FOREIGN KEY (`id_categories`) REFERENCES `categories` (`id_categories`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
