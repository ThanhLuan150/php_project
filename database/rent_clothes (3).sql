-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 13, 2023 lúc 02:24 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `rent_clothes`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bills`
--

CREATE TABLE `bills` (
  `id_bills` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `id_statuses` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `bills`
--

INSERT INTO `bills` (`id_bills`, `id_users`, `id_statuses`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, '2023-04-10 16:01:30', NULL),
(2, 1, NULL, '2023-05-10 16:01:30', NULL),
(3, 1, NULL, '2023-06-10 16:01:30', NULL),
(4, 2, NULL, '2023-05-10 16:01:30', NULL),
(5, 2, NULL, '2023-06-10 16:01:30', NULL),
(6, 2, NULL, '2023-07-10 16:01:30', NULL),
(7, 3, NULL, '2023-05-10 16:01:30', NULL),
(8, 3, NULL, '2023-06-10 16:01:30', NULL),
(9, 3, NULL, '2023-07-10 16:01:30', NULL),
(10, 4, NULL, '2023-07-10 16:01:30', NULL),
(11, 5, NULL, '2023-07-10 16:01:30', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_detail`
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
-- Đang đổ dữ liệu cho bảng `bill_detail`
--

INSERT INTO `bill_detail` (`id_bill_detail`, `id_clothes`, `quality`, `id_bills`, `created_at`, `updated_at`) VALUES
(43, 22, 2, 1, '2023-04-10 16:01:30', NULL),
(44, 21, 2, 1, '2023-04-10 16:01:30', NULL),
(45, 20, 2, 2, '2023-05-10 16:01:30', NULL),
(46, 19, 2, 2, '2023-05-10 16:01:30', NULL),
(47, 18, 2, 3, '2023-06-10 16:01:30', NULL),
(48, 17, 2, 3, '2023-06-10 16:01:30', NULL),
(49, 16, 2, 4, '2023-06-10 16:01:30', NULL),
(50, 9, 2, 5, '2023-06-10 16:01:30', NULL),
(51, 10, 2, 6, '2023-06-10 16:01:30', NULL),
(52, 11, 2, 7, '2023-06-10 16:01:30', NULL),
(53, 12, 2, 8, '2023-06-10 16:01:30', NULL),
(54, 13, 1, 9, '2023-06-10 16:01:30', NULL),
(55, 14, 2, 10, '2023-06-10 16:01:30', NULL),
(56, 15, 1, 11, '2023-06-10 16:01:30', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blogs`
--

CREATE TABLE `blogs` (
  `id_blogs` int(11) NOT NULL,
  `image` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `carts`
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
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id_categories` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `rent_prices` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `tiencoc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id_categories`, `name`, `rent_prices`, `created_at`, `updated_at`, `tiencoc`) VALUES
(1, 'Áo đối khâm', 200000, '2023-04-09 11:53:31', NULL, 100000),
(2, 'Áo giao lĩnh', 300000, '2023-04-09 11:54:31', NULL, 150000),
(3, 'Áo nhật bình', 400000, '2023-04-09 11:55:31', NULL, 200000),
(4, 'Áo tấc', 100000, '2023-04-09 11:56:31', NULL, 50000),
(5, 'Áo ngủ thân', 150000, '2023-04-09 11:57:31', NULL, 75000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cccd`
--

CREATE TABLE `cccd` (
  `id_cccd` int(11) NOT NULL,
  `id_bill_detail` int(11) NOT NULL,
  `front_image` text NOT NULL,
  `back_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `clothes`
--

CREATE TABLE `clothes` (
  `id_clothes` int(11) NOT NULL,
  `image` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `sex` varchar(3) NOT NULL,
  `description` text DEFAULT NULL,
  `id_categories` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `clothes`
--

INSERT INTO `clothes` (`id_clothes`, `image`, `name`, `sex`, `description`, `id_categories`, `created_at`, `updated_at`) VALUES
(9, 'https://cf.shopee.vn/file/d0b863d55cf6347976176e9fac21ede1', 'Áo khoác đối khâm Liên Hoa', 'nu', ' Đối Khâm (對襟) Chữ Khâm (襟) có nghĩa là vạt áo trước. Đối Khâm là dạng áo có hai vạt trước đặt song song nhau, thường để buông thỏng. Tuỳ vào thời đại, đối khâm còn có những tên như bối tử 褙子 (thời Tống), phi phong (thời Minh), và nhật bình (thời Nguyễn).', 1, '2023-04-09 11:53:31', NULL),
(10, 'https://1.bp.blogspot.com/-z7wD6zhoLis/Xy_3C17HeoI/AAAAAAAAy0M/KuPAnK-uvQkD7pd6l2Q1nrsyHFw5nPiigCLcBGAsYHQ/w457-h640/cho%2Bthue%2Bao%2Bdoi%2Bkham.jpg', 'Áo khoác đối khâm', 'nu', 'Đối Khâm (對襟) Chữ Khâm (襟) có nghĩa là vạt áo trước. Đối Khâm là dạng áo có hai vạt trước đặt song song nhau, thường để buông thỏng. Tuỳ vào thời đại, đối khâm còn có những tên như bối tử 褙子 (thời Tống), phi phong (thời Minh), và nhật bình (thời Nguyễn).', 1, '2023-04-09 11:53:31', NULL),
(11, 'https://vietphuc.net/wp-content/uploads/2021/04/SAN_5111-1-768x1151.jpg', 'Áo Đối Khâm (Unisex)', 'nam', 'Đối Khâm (對襟) Chữ Khâm (襟) có nghĩa là vạt áo trước. Đối Khâm là dạng áo có hai vạt trước đặt song song nhau, thường để buông thỏng. Tuỳ vào thời đại, đối khâm còn có những tên như bối tử 褙子 (thời Tống), phi phong (thời Minh), và nhật bình (thời Nguyễn).', 1, '2023-04-09 11:53:31', NULL),
(12, 'https://cf.shopee.vn/file/764699d3afd72a2ea9eaf152c2d5d251_tn', 'Áo Đối Khâm (Unisex)', 'nu', ' Đối Khâm (對襟) Chữ Khâm (襟) có nghĩa là vạt áo trước. Đối Khâm là dạng áo có hai vạt trước đặt song song nhau, thường để buông thỏng. Tuỳ vào thời đại, đối khâm còn có những tên như bối tử 褙子 (thời Tống), phi phong (thời Minh), và nhật bình (thời Nguyễn).', 1, '2023-04-09 11:53:31', NULL),
(13, 'https://cf.shopee.vn/file/f6bb08f09ae593d2ea34b0e38717b20f_tn', 'Áo khoác đối khâm Nhật Vân', 'nu', 'Đối Khâm (對襟) Chữ Khâm (襟) có nghĩa là vạt áo trước. Đối Khâm là dạng áo có hai vạt trước đặt song song nhau, thường để buông thỏng. Tuỳ vào thời đại, đối khâm còn có những tên như bối tử 褙子 (thời Tống), phi phong (thời Minh), và nhật bình (thời Nguyễn).', 1, '2023-04-09 11:53:31', NULL),
(14, 'https://cf.shopee.vn/file/321489576e2bb805edcd955204ef42ff_tn', 'Áo khoác đối khâm|đại việt fancy', 'nu', 'Đối Khâm (對襟) Chữ Khâm (襟) có nghĩa là vạt áo trước. Đối Khâm là dạng áo có hai vạt trước đặt song song nhau, thường để buông thỏng. Tuỳ vào thời đại, đối khâm còn có những tên như bối tử 褙子 (thời Tống), phi phong (thời Minh), và nhật bình (thời Nguyễn).', 1, '2023-04-09 11:53:31', NULL),
(15, 'https://cf.shopee.vn/file/5e801e090c34cd9e94bd3573b6d70463_tn', 'Áo khoác Đối Khâm Gạch Hoa', 'nu', 'Đối Khâm (對襟) Chữ Khâm (襟) có nghĩa là vạt áo trước. Đối Khâm là dạng áo có hai vạt trước đặt song song nhau, thường để buông thỏng. Tuỳ vào thời đại, đối khâm còn có những tên như bối tử 褙子 (thời Tống), phi phong (thời Minh), và nhật bình (thời Nguyễn).', 1, '2023-04-09 11:53:31', NULL),
(16, 'https://tailocwedding.vn/wp-content/uploads/2022/11/190389852_4143671385716654_7283893473213946319_n-1024x1536.jpg', 'Áo đối khâm', 'nu', 'Đối Khâm (對襟) Chữ Khâm (襟) có nghĩa là vạt áo trước. Đối Khâm là dạng áo có hai vạt trước đặt song song nhau, thường để buông thỏng. Tuỳ vào thời đại, đối khâm còn có những tên như bối tử 褙子 (thời Tống), phi phong (thời Minh), và nhật bình (thời Nguyễn).', 1, '2023-04-09 11:53:31', NULL),
(17, 'https://i.pinimg.com/originals/94/66/ea/9466eab7ae6cb04720966affdaba1b98.jpg', 'Áo giao lĩnh ', 'Nu', '', 2, '2023-04-09 11:53:31', NULL),
(18, 'https://i.pinimg.com/736x/7e/c5/07/7ec507380375c35da0033144d97ec54c--vi%E1%BB%87t-nam.jpg', 'Áo giao lĩnh', 'Nam', '', 2, '2023-04-09 11:53:31', NULL),
(19, 'https://i.pinimg.com/originals/83/de/75/83de759b3b4982ee4ae764a2a76165b3.jpg', 'Áo giao lĩnh', 'Nu', '', 2, '2023-04-09 11:53:31', NULL),
(20, 'https://i.pinimg.com/736x/8a/8b/89/8a8b8952a6031c4c8f41bed31eb8daa9.jpg', 'Áo giao lĩnh', 'Nam', '', 2, '2023-04-09 11:53:31', NULL),
(21, 'https://i.pinimg.com/originals/47/9f/68/479f68cff51010111974bfecb2bfd37e.png', 'Áo giao lĩnh', 'Nam', '', 2, '2023-04-09 11:53:31', NULL),
(22, 'https://i.pinimg.com/originals/e2/6a/be/e26abe259d0fbd84e1e8756e4c0a89ce.jpg', 'Áo giao lĩnh', 'Nu', '', 2, '2023-04-09 11:53:31', NULL),
(23, 'https://i.pinimg.com/originals/88/ba/9a/88ba9adecc374f160dbd05db7a322231.jpg', 'Áo giao lĩnh', 'Nu', '', 2, '2023-04-09 11:53:31', NULL),
(24, 'https://i.pinimg.com/originals/8a/2b/8a/8a2b8acfd4233153c2dd27ca73abdadd.png', 'Áo giao lĩnh', 'Nam', '', 2, '2023-04-09 11:53:31', NULL),
(25, 'https://3.bp.blogspot.com/-UVo7s1CVH3Q/W8mOJvQU28I/AAAAAAAAAxw/ryi-J3-2c-sySyrKDt2eBWmC83fsjn7YACPcBGAYYCw/s1600/a%25CC%2581o%2Bgiao%2Bli%25CC%2583nh.jpg', 'Áo giao lĩnh', 'Nu', '', 2, '2023-04-09 11:53:31', NULL),
(26, 'https://i.pinimg.com/736x/51/38/c4/5138c4392e11d967ad186e90d90f0d88.jpg', 'Áo giao lĩnh', 'Nam', '', 2, '2023-04-09 11:53:31', NULL),
(27, 'https://vietphuc.net/wp-content/uploads/2021/05/IMG_8787-600x900-1.jpg', 'Áo giao lĩnh', 'Nu', '', 2, '2023-04-09 11:53:31', NULL),
(28, 'https://i.pinimg.com/236x/bf/fd/d2/bffdd22787d43db78d66a462d7069bde.jpg?nii=t', 'Áo giao lĩnh', 'Nam', '', 2, '2023-04-09 11:53:31', NULL),
(29, 'https://i.pinimg.com/736x/56/51/9b/56519b39c8ecfef75b7ce461cf56f37c.jpg', 'Áo giao lĩnh', 'Nu', '', 2, '2023-04-09 11:53:31', NULL),
(30, 'https://i.pinimg.com/originals/ae/8c/ac/ae8cac15ebdc08cc9db0d7ffd5cab7f2.jpg', 'Áo giao lĩnh', 'Nam', '', 2, '2023-04-09 11:53:31', NULL),
(31, 'https://designlife.vn/wp-content/uploads/2020/07/ao-giao-linh-dep.jpg', 'Áo giao lĩnh', 'Nu', '', 2, '2023-04-09 11:53:31', NULL),
(32, 'https://64.media.tumblr.com/bf2b432e4e4337b0dbba0601f2cb54b0/tumblr_ovoaciQRce1wa6dqco7_640.jpg', 'Áo giao lĩnh', 'Nam', '', 2, '2023-04-09 11:53:31', NULL),
(33, 'https://i.pinimg.com/originals/28/b9/74/28b974ab36770483f231a6ae33b916b0.jpg', 'Áo giao lĩnh', 'Nu', '', 2, '2023-04-09 11:53:31', NULL),
(34, 'https://i.pinimg.com/236x/87/7c/4e/877c4e954c795e4b0b37dce61746ff80.jpg?nii=t', 'Áo giao lĩnh', 'Nam', '', 2, '2023-04-09 11:53:31', NULL),
(35, 'https://i2.wp.com/www.saigonaodai.net/wp-content/uploads/2020/06/ao-giao-linh-tphcm.jpg?fit=600%2C1032&ssl=1', 'Áo giao lĩnh', 'Nam', '', 2, '2023-04-09 11:53:31', NULL),
(36, 'https://1.bp.blogspot.com/-hD_6_rejckw/YMoGGT_JSRI/AAAAAAAA8FI/kSSAg4CueR0TqXjoIvFq5WSdMk114JuoQCLcBGAsYHQ/s1811/giao%2Blinh%2Btay%2Bchen%2B%25283%2529.jpg', 'Áo giao lĩnh', 'Nam', '', 2, '2023-04-09 11:53:31', NULL),
(37, 'https://i.pinimg.com/736x/45/6d/e9/456de922731a0227be015d1bb825caa0--vietnam-korea.jpg', 'Áo Ngũ Thân thời Nguyễn-Việt phục', 'nu', NULL, 5, '2023-04-09 11:55:31', NULL),
(38, 'https://vietphuc.net/wp-content/uploads/2021/05/IMG_0200.jpg', 'Áo Ngũ Thân Tay Chẽn vải sa hoặc tơ cho nữ ', 'nu', NULL, 5, '2023-04-09 11:55:31', NULL),
(39, 'https://i.pinimg.com/736x/4b/21/3a/4b213a5265f84f585a69315d88e0d560.jpg', 'Áo Ngũ Thân tay thụng', 'nam', NULL, 5, '2023-04-09 11:55:31', NULL),
(40, 'https://i.pinimg.com/originals/2b/83/2d/2b832d66d8c77fde9b9993fa8ade5466.jpg', 'Áo Ngũ Thân tay dài tím', 'nu', NULL, 5, '2023-04-09 11:55:31', NULL),
(41, 'https://i.pinimg.com/originals/3c/a2/c8/3ca2c8967467a68a6ee0d50e283011dd.jpg', 'Áo Ngũ Thân thời Nguyễn', 'nu', NULL, 5, '2023-04-09 11:55:31', NULL),
(42, 'https://cotranghoangcung.com/wp-content/uploads/2021/12/189958071_4155887221161737_1382701908358323962_n.jpg', 'Áo Ngũ Thân vải sa hàn', 'nu', NULL, 5, '2023-04-09 11:55:31', NULL),
(43, 'https://cotranghoangcung.com/wp-content/uploads/2021/12/190102650_4155887171161742_5636596352801830650_n.jpg', 'Áo Ngũ Thân cổ trang Hoàng Cung', 'nu', NULL, 5, '2023-04-09 11:55:31', NULL),
(44, 'https://i.pinimg.com/originals/c8/e5/1d/c8e51dd471245fb129c13724d4efcfe1.jpg', 'Áo Ngũ Thân tiểu thư', 'nu', NULL, 5, '2023-04-09 11:55:31', NULL),
(45, 'https://i0.wp.com/www.saigonaodai.net/wp-content/uploads/2020/12/%C3%A1o-ng%C5%A9-th%C3%A2n-tay-ch%E1%BA%BDn-in-hoa-v%C4%83n-m%C3%A0u-%C4%91%E1%BB%8F.jpg?fit=1024%2C1700&ssl=1', 'Áo Ngũ Thân tay chẽn in hoa văn', 'nam', NULL, 5, '2023-04-09 11:55:31', NULL),
(46, 'https://anhnghethuatxua.com/wp-content/uploads/2020/07/ZEN_9811-1-878x1024.jpg', 'Áo Ngũ Thân tay chẽn-Ỷ Vân Các', 'nu', NULL, 5, '2023-04-09 11:55:31', NULL),
(47, 'https://vietphuc.net/wp-content/uploads/2021/05/IMG_9025-1-768x1152.jpg', 'Áo Ngũ Thân Việt cổ phục cách tân', 'nam', NULL, 5, '2023-04-09 11:55:31', NULL),
(48, 'https://vietphuc.net/wp-content/uploads/2021/05/1WV05246-1365x2048.jpg', 'Áo Ngũ Thân tay chẽn vải đũi tuyến Nhật', 'nu', NULL, 5, '2023-04-09 11:55:31', NULL),
(49, 'https://1.bp.blogspot.com/-ZAh1dUzQ1sM/YEsFYH7Zf1I/AAAAAAAA4rs/O8tqy8PUMl4qgSwiyPLnSZV4o2J3yXJMwCLcBGAsYHQ/s957/ao-ngu-than-in-hoa-van-mau-tra-xanh.jpg', 'Áo Ngũ Thân đẹp chụp kỉ yếu cho nam', 'nam', NULL, 5, '2023-04-09 11:55:31', NULL),
(50, 'https://vietphuc.net/wp-content/uploads/2021/05/1WV05614-600x900.jpg', 'Áo Ngũ Thân Tay Chẽn HSSV vải đũi tuyết Nhật', 'nam', NULL, 5, '2023-04-09 11:55:31', NULL),
(51, 'https://cotranghoangcung.com/wp-content/uploads/2021/12/189146681_4155908831159576_824723857400436331_n.jpg', 'Áo Ngũ Thân Nam sa Hàn tím hoa văn', 'nam', NULL, 5, '2023-04-09 11:55:31', NULL),
(52, 'https://i.pinimg.com/originals/a7/8d/c0/a78dc0ee750278979ba5a049ffb656e6.jpg', 'Áo Ngũ Thân thời Nguyễn', 'nam', NULL, 5, '2023-04-09 11:55:31', NULL),
(53, 'https://i.ytimg.com/vi/Eb2af86dvDk/maxresdefault.jpg', 'Áo Ngũ Thân Nam qua những thăng trầm', 'nam', NULL, 5, '2023-04-09 11:55:31', NULL),
(54, 'https://tse4.mm.bing.net/th?id=OIP.ezJiWFloRUq9jlGSmaoJWAHaLH&pid=Api&P=0', 'Áo Ngũ Thân hoa văn độc đáo', 'nam', NULL, 5, '2023-04-09 11:55:31', NULL),
(55, 'https://vietphuc.net/wp-content/uploads/2021/05/1WV05631-1024x1536.jpg', 'Áo Ngũ Thân tay đen cho nam', 'nam', NULL, 5, '2023-04-09 11:55:31', NULL),
(56, 'https://tse3.mm.bing.net/th?id=OIP.9jXeXyNAa5hWGW9NtJ43UQHaLH&pid=Api&P=0', 'Áo Tấc thư sinh nam', 'nam', NULL, 4, '2023-04-09 11:53:31', NULL),
(57, 'https://cotranghoangcung.com/wp-content/uploads/2021/12/160860147_3936820186401776_155210930724253641_n.jpg', 'Áo Tấc Quý Nhân', 'nu', NULL, 4, '2023-04-09 11:53:31', NULL),
(58, 'https://i.pinimg.com/originals/71/84/5f/71845f32b0494de5093b2d5254c3fe14.jpg', 'Áo Tấc Đáp Ứng', 'nu', NULL, 4, '2023-04-09 11:53:31', NULL),
(59, 'https://i.pinimg.com/736x/88/e5/60/88e5603f0f453c5657f53ef127091e67.jpg', 'Áo Tấc Thường Tại', 'nu', NULL, 4, '2023-04-09 11:53:31', NULL),
(60, 'https://trangphucchupanhsaigon.com/wp-content/uploads/2021/08/o-t%E1%BA%A5c-v%C3%A0ng-e1629277791650.jpg', 'Áo Tấc Hoàng hậu', 'nu', NULL, 4, '2023-04-09 11:53:31', NULL),
(61, 'https://vietphuc.net/wp-content/uploads/2021/04/1D5A0985-1024x1536.jpg', 'Áo Tấc Quý Phi', 'nu', NULL, 4, '2023-04-09 11:53:31', NULL),
(62, 'https://cotranghoangcung.com/wp-content/uploads/2019/12/sanpham-cotrang15-300x450.jpg', 'Áo Tấc Hoàng Thượng', 'nu', NULL, 4, '2023-04-09 11:53:31', NULL),
(63, 'https://gaubeo.store/wp-content/uploads/2022/03/Ao-Tac-To-Kinh-mau-tim-so-8-Viet-Phuc-Gau-Beo-Store-6.jpg', 'Áo Tấc Nữ Tử', 'nu', NULL, 4, '2023-04-09 11:53:31', NULL),
(64, 'https://cotranghoangcung.com/wp-content/uploads/2021/12/181698089_4083106238439836_7006226767469216143_n.jpg', 'Áo Tấc Hoàng Quý Phi', 'nu', NULL, 4, '2023-04-09 11:53:31', NULL),
(65, 'https://i.pinimg.com/originals/f9/ae/79/f9ae7979e2e054f25526734131cc923d.jpg', 'Áo Tấc Giai Nhân', 'nu', NULL, 4, '2023-04-09 11:53:31', NULL),
(66, 'https://vietphuc.net/wp-content/uploads/2021/04/SAN_6096-copy-1024x1536.jpg', 'Áo Tấc Công Chúa', 'nu', NULL, 4, '2023-04-09 11:53:31', NULL),
(67, 'https://s3-ap-southeast-1.amazonaws.com/images.spiderum.com/sp-images/9173eef0baf811e89742f31402bd50d9.jpg', ' Áo Tấc Thái Tử', 'nam', NULL, 4, '2023-04-09 11:53:31', NULL),
(68, 'https://tintuc.hahalolo.com/wp-content/uploads/2020/09/119663607_790008351800371_2770565228184954282_n.jpg', 'Áo Tấc Hoàng Thái Hậu', 'nu', NULL, 4, '2023-04-09 11:53:31', NULL),
(69, 'https://vietphuc.net/wp-content/uploads/2022/09/IMG_1157-280x420.gif', 'Áo Tấc Phi Tầng', 'nu', NULL, 4, '2023-04-09 11:53:31', NULL),
(70, 'https://image2.tienphong.vn/w665/Uploaded/2020/dg_bfjysszl/2020_10_08/845c3bfe_2984_41b6_b87a_44ea187e9f75_blrs.jpeg', 'Áo Tấc Tầng Vị', 'nu', NULL, 4, '2023-04-09 11:53:31', NULL),
(71, 'https://i.pinimg.com/originals/28/c2/86/28c286b9e9812722cb3326a977d23d04.jpg', 'Áo Tấc Hoàng Tử', 'nam', NULL, 4, '2023-04-09 11:53:31', NULL),
(72, 'https://cotranghoangcung.com/wp-content/uploads/2019/12/sanpham-cotrang15.jpg', 'Áo Tấc Thái Thượng Hoàng', 'nam', NULL, 4, '2023-04-09 11:53:31', NULL),
(73, 'https://namtuyen.com/wp-content/uploads/2021/03/ao-dai-tay-thung-nam-tuyen-9-500x692.jpg', 'Áo Tấc Quý Phi', 'nu', NULL, 4, '2023-04-09 11:53:31', NULL),
(74, 'https://cotranghoangcung.com/wp-content/uploads/2021/12/166557401_3977831755633952_2867253799609111809_n.jpg', 'Áo Tấc Thái Tử Phi', 'nu', NULL, 4, '2023-04-09 11:53:31', NULL),
(75, 'https://namtuyen.com/wp-content/uploads/2021/03/ao-dai-tay-thung-nam-tuyen-3-500x692.jpg', 'Áo Tấc Thừa Tướng', 'nam', NULL, 4, '2023-04-09 11:53:31', NULL),
(76, 'https://afamilycdn.com/150157425591193600/2022/12/9/1-nb1-scaled-1670575399862737277046.jpg', 'Áo Nhật Bình quý phái', 'Nu', NULL, 3, '2023-04-09 11:53:31', NULL),
(77, 'https://tailocwedding.vn/wp-content/uploads/2022/02/ao-nhat-binh-4.jpg', 'Áo giao lĩnh quý tộc', 'Nam', NULL, 3, '2023-04-09 11:53:31', NULL),
(78, 'https://chothueaodaitphcm.com/wp-content/uploads/2022/04/ao-nhat-binh-3-2.jpg', 'Áo Nhật Bình nhà Tân', 'Nu', NULL, 3, '2023-04-09 11:53:31', NULL),
(79, 'https://bizweb.dktcdn.net/thumb/grande/100/175/849/products/avaao-nhat-binha5b52f44b03a7a64232-20211218.jpg?v=1639822046660', 'Áo Nhật Bình nhật nữ vương', 'Nu', NULL, 3, '2023-04-09 11:53:31', NULL),
(80, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQxWKgoRvnZ8eyCndPgmDeA2cpolZdlnIFiIQ&usqp=CAU', 'Áo Nhật Bình Hậu Cung', 'Nu', NULL, 3, '2023-04-09 11:53:31', NULL),
(81, 'https://icdn.dantri.com.vn/thumb_w/770/2022/01/24/xu-huong-thoi-trang-viet-phuc-vao-le-tetdocx-1642994528989.jpeg', 'Áo Nhật Bình Hoan cung', 'Nam', NULL, 3, '2023-04-09 11:53:31', NULL),
(82, 'https://ivymoda.com/assets/files/news/2022/02/23/8c52f762363d1a495bf9294e10197d48.png', 'Áo Nhật Bình Hoàng Hậu', 'Nu', NULL, 3, '2023-04-09 11:53:31', NULL),
(83, 'https://images2.thanhnien.vn/uploaded/ngocthanh/2019_08_17/co-phuc-yvanhien2_EBER.jpg?width=500', 'Áo Nhật Bình quý phái', 'Nu', NULL, 3, '2023-04-09 11:53:31', NULL),
(84, 'https://topsao.vn/wp-content/uploads/2018/10/02/Tranh-s%E1%BB%A7ng-Thanh-Duy-th%C3%A0nh-c%C3%B4ng-%C4%90%C3%A0o-B%C3%A1-L%E1%BB%99c-tr%E1%BB%9F-th%C3%A0nh-T%E1%BA%A7n-m%E1%BA%B7c-%C3%A1o-Nh%E1%BA%ADt-B%C3%ACnh-quy%E1%BB%81n-qu%C3%BD-652x367.jpg', 'Áo Nhật Bình - Topsao', 'Nu', NULL, 3, '2023-04-09 11:53:31', NULL),
(85, 'https://vn-test-11.slatic.net/p/e2e2116394133bc84bc6abc78ee54efc.jpg', 'Áo Nhật Bình Cách Tân', 'Nu', NULL, 3, '2023-04-09 11:53:31', NULL),
(86, 'https://phapnhan.org/tv/wp-content/uploads/2021/09/14.jpg', 'Áo cà sa Nhật Bình', 'Nam', NULL, 3, '2023-04-09 11:53:31', NULL),
(87, 'https://doanhnghiepkinhtexanh.vn/uploads/images/2022/04/14/ao-nhat-binh-1649920673.jpg', 'Áo Nhật Bình Triều Nguyễn', 'Nam', NULL, 3, '2023-04-09 11:53:31', NULL),
(88, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTpL4VbLdtGaJc7kLDNC_-JFsIeYNMd4a1JMw&usqp=CAU', 'Áo cưới Nhật Bình ', 'Nam', NULL, 3, '2023-04-09 11:53:31', NULL),
(89, 'https://bizweb.dktcdn.net/100/175/849/files/cho-thue-ao-nhat-binh-thoi-nguyen-co-phuc-viet-nam-o-ha-noi-02.jpg?v=1609570720377', 'Áo Nhật Bình Thời Nguyễn ', 'Nu', NULL, 3, '2023-04-09 11:53:31', NULL),
(90, 'https://vanhoagiaoduc.com.vn/wp-content/uploads/2021/04/vay-ao-nhat-binh-hoai-niem-van-hoa-cung-dinh-viet-nam-ao-nhat-binh-cach-tan.jpg', 'Váy Áo Nhật Bình  ', 'Nu', NULL, 3, '2023-04-09 11:53:31', NULL),
(91, 'https://vanhoagiaoduc.com.vn/wp-content/uploads/2021/04/vay-ao-nhat-binh-hoai-niem-van-hoa-cung-dinh-viet-nam-ao-nhat-binh-cach-tan.jpg', 'Váy Áo Nhật Bình ', 'Nu', NULL, 3, '2023-04-09 11:53:31', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cloth_detail`
--

CREATE TABLE `cloth_detail` (
  `id_detail` int(11) NOT NULL,
  `id_clothes` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cloth_sizes`
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
-- Cấu trúc bảng cho bảng `contents`
--

CREATE TABLE `contents` (
  `id_contents` int(11) NOT NULL,
  `id_categories` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lienhe`
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
-- Cấu trúc bảng cho bảng `sizes`
--

CREATE TABLE `sizes` (
  `id_sizes` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sizes`
--

INSERT INTO `sizes` (`id_sizes`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'S', '', '2023-04-11 15:17:35', NULL),
(2, 'M', '', '2023-04-11 15:18:35', NULL),
(3, 'L', '', '2023-04-11 15:19:35', NULL),
(4, 'XL', '', '2023-04-11 15:20:35', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `statuses`
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
-- Cấu trúc bảng cho bảng `users`
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
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id_users`, `username`, `password`, `confirm_password`, `email`, `created_at`, `updated_at`) VALUES
(1, 'adukt82', '123456adu', '123456adu', 'adu@gmail.com', '2023-04-09 11:57:31', NULL),
(2, 'phanductho', '123456tho', '123456tho', 'phanductho@gmail.com', '2023-04-09 11:57:31', NULL),
(3, 'phanthanhvuong', '12345678', '12345678', 'vuongphan@gmail.com', '2023-04-09 11:57:31', NULL),
(4, 'truongthanhluan', '987654321', '987654321', 'thanhluong@gmail.com', '2023-04-09 11:57:31', NULL),
(5, 'dangtrung', '12345619', '12345619', 'dangtrung@gmail.com', '2023-04-09 11:57:31', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id_bills`),
  ADD KEY `id_users` (`id_users`),
  ADD KEY `id_statuses` (`id_statuses`);

--
-- Chỉ mục cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD PRIMARY KEY (`id_bill_detail`),
  ADD KEY `id_clothes` (`id_clothes`),
  ADD KEY `id_bills` (`id_bills`);

--
-- Chỉ mục cho bảng `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id_blogs`);

--
-- Chỉ mục cho bảng `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id_cards`),
  ADD KEY `id_clothes` (`id_clothes`),
  ADD KEY `id_users` (`id_users`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_categories`);

--
-- Chỉ mục cho bảng `cccd`
--
ALTER TABLE `cccd`
  ADD PRIMARY KEY (`id_cccd`),
  ADD KEY `id_bill_detail` (`id_bill_detail`);

--
-- Chỉ mục cho bảng `clothes`
--
ALTER TABLE `clothes`
  ADD PRIMARY KEY (`id_clothes`),
  ADD KEY `id_categories` (`id_categories`);

--
-- Chỉ mục cho bảng `cloth_detail`
--
ALTER TABLE `cloth_detail`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `id_clothes` (`id_clothes`);

--
-- Chỉ mục cho bảng `cloth_sizes`
--
ALTER TABLE `cloth_sizes`
  ADD PRIMARY KEY (`id_cloth_sizes`),
  ADD KEY `id_sizes` (`id_sizes`),
  ADD KEY `id_clothes` (`id_clothes`);

--
-- Chỉ mục cho bảng `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id_contents`),
  ADD KEY `id_categories` (`id_categories`);

--
-- Chỉ mục cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`id_lienhe`);

--
-- Chỉ mục cho bảng `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id_sizes`);

--
-- Chỉ mục cho bảng `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id_statuses`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bills`
--
ALTER TABLE `bills`
  MODIFY `id_bills` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  MODIFY `id_bill_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT cho bảng `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id_blogs` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `carts`
--
ALTER TABLE `carts`
  MODIFY `id_cards` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id_categories` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `cccd`
--
ALTER TABLE `cccd`
  MODIFY `id_cccd` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `clothes`
--
ALTER TABLE `clothes`
  MODIFY `id_clothes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT cho bảng `cloth_detail`
--
ALTER TABLE `cloth_detail`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `cloth_sizes`
--
ALTER TABLE `cloth_sizes`
  MODIFY `id_cloth_sizes` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `contents`
--
ALTER TABLE `contents`
  MODIFY `id_contents` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `id_lienhe` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id_sizes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id_statuses` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `bills_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`),
  ADD CONSTRAINT `bills_ibfk_2` FOREIGN KEY (`id_statuses`) REFERENCES `statuses` (`id_statuses`);

--
-- Các ràng buộc cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD CONSTRAINT `bill_detail_ibfk_1` FOREIGN KEY (`id_clothes`) REFERENCES `clothes` (`id_clothes`),
  ADD CONSTRAINT `bill_detail_ibfk_2` FOREIGN KEY (`id_bills`) REFERENCES `bills` (`id_bills`);

--
-- Các ràng buộc cho bảng `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_ibfk_1` FOREIGN KEY (`id_clothes`) REFERENCES `clothes` (`id_clothes`),
  ADD CONSTRAINT `carts_ibfk_2` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`);

--
-- Các ràng buộc cho bảng `cccd`
--
ALTER TABLE `cccd`
  ADD CONSTRAINT `cccd_ibfk_1` FOREIGN KEY (`id_bill_detail`) REFERENCES `bill_detail` (`id_bill_detail`);

--
-- Các ràng buộc cho bảng `clothes`
--
ALTER TABLE `clothes`
  ADD CONSTRAINT `clothes_ibfk_1` FOREIGN KEY (`id_categories`) REFERENCES `categories` (`id_categories`);

--
-- Các ràng buộc cho bảng `cloth_detail`
--
ALTER TABLE `cloth_detail`
  ADD CONSTRAINT `cloth_detail_ibfk_1` FOREIGN KEY (`id_clothes`) REFERENCES `clothes` (`id_clothes`),
  ADD CONSTRAINT `cloth_detail_ibfk_2` FOREIGN KEY (`id_clothes`) REFERENCES `clothes` (`id_clothes`);

--
-- Các ràng buộc cho bảng `cloth_sizes`
--
ALTER TABLE `cloth_sizes`
  ADD CONSTRAINT `cloth_sizes_ibfk_1` FOREIGN KEY (`id_sizes`) REFERENCES `sizes` (`id_sizes`),
  ADD CONSTRAINT `cloth_sizes_ibfk_2` FOREIGN KEY (`id_clothes`) REFERENCES `clothes` (`id_clothes`);

--
-- Các ràng buộc cho bảng `contents`
--
ALTER TABLE `contents`
  ADD CONSTRAINT `contents_ibfk_1` FOREIGN KEY (`id_categories`) REFERENCES `categories` (`id_categories`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
