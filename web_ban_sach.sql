-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2021 at 04:43 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_ban_sach`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `username_comment` varchar(30) NOT NULL,
  `comments` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `product_id`, `username_comment`, `comments`) VALUES
(17, 3, 'Đinh Đức Anh', 'Sách hay '),
(18, 3, 'Đinh Đức Anh', 'Sách tốt'),
(19, 1, '', 'sách good chóp'),
(20, 1, '', 'đỉnh của chóp'),
(21, 1, '', 'sách good chóp'),
(22, 1, 'Đức Anh', 'đỉnh của chóp');

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `content` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `product_id`, `content`) VALUES
(1, 1, 'Sách bán chạy');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` int(15) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `fullname`, `password`, `phone`, `email`) VALUES
(8, 'Đinh Đức Anh', '3178914d6e429889da9de8df2a3b8928', 582047030, 'dinhanh21092000@gmail.com'),
(9, 'Đức Anh', '202cb962ac59075b964b07152d234b70', 582047031, 'dinhanh210920000@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(500) NOT NULL,
  `note` text NOT NULL,
  `total` int(11) NOT NULL,
  `created_time` int(11) NOT NULL,
  `last_updated` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `name`, `phone`, `address`, `note`, `total`, `created_time`, `last_updated`) VALUES
(1, 'Đinh Đức Anh', '582047030', 'Trần Đại Nghĩa', 'from Thái Bình with love', 180000, 1614432266, 1614432266),
(2, 'Đinh Đức Anh', '582047030', 'Trần Đại Nghĩa', 'from Thái Bình with love', 180000, 1614432473, 1614432473),
(3, 'Đinh Đức Anh', '582047030', 'from Thái Bình with love', 'hreryetyrurue', 375000, 1614656330, 1614656330),
(4, 'Đức Anh', '582047031', 'Trần Đại Nghĩa', 'from Thái bình with love <3', 500000, 1614656434, 1614656434);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `order_phone` int(30) NOT NULL,
  `order_mail` varchar(50) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_time` int(11) NOT NULL,
  `last_updated` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` float NOT NULL,
  `author` varchar(50) NOT NULL,
  `publishing_company` varchar(50) NOT NULL,
  `publisher` varchar(50) NOT NULL,
  `number_of_page` varchar(50) NOT NULL,
  `form` varchar(50) NOT NULL,
  `weight` varchar(50) NOT NULL,
  `size` varchar(50) NOT NULL,
  `info` text NOT NULL,
  `created_time` int(11) NOT NULL,
  `last_updated` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `image`, `price`, `author`, `publishing_company`, `publisher`, `number_of_page`, `form`, `weight`, `size`, `info`, `created_time`, `last_updated`) VALUES
(1, 'Bạn chỉ sống có một lần ', 'https://salt.tikicdn.com/media/catalog/product/b/a/ban-chi-song-co-mot-lan.jpg', 60000, 'Nhã Nam tuyển chọn', 'NXB Trẻ', 'NXB Trẻ', '128', 'Bìa mềm', '150', '13 x 20.5', 'Đời người chỉ sống một lần, nên sống sao cho trọn vẹn và xứng đáng. Quyển sách tập hợp những câu chuyện, câu nói hay về tinh thần, về cuộc sống. Qua những câu chuyện và câu nói hay đó, hy vọng độc giả sẽ được truyền cảm hứng, được tiếp thêm sức mạnh, để vui sống và sống cuộc đời có ý nghĩa và trọn vẹn nhất.</br>\r\nBạn chỉ sống có một lần thực sự là tách trà ấm mà bạn có thể tranh thủ dùng trong chốc lát. Kết thúc rồi nên đọc lại lần hai để ngấm hơn. Ngấm rồi thì hãy cố gắng thực hiện nhiều nhất có thể, bởi vì Bạn chỉ sống có một lần!</br>\r\nCuốn sách truyền cảm hứng cho tôi hành động và ước mơ, cho tôi hiểu và trân trọng những điều đang có trong hiện tại và sống hết mình với nó, trọn vẹn với từng ngày, từng phút giây mình có được và hài lòng với lựa chọn của mình. Mỗi lựa chọn cho ta một kinh nghiệm, một giá trị, lựa chọn khác nhau sẽ cho kết quả khác nhau nhưng cuối mỗi ngày, cũng là mỗi bước chân đi, ta lại rút ra cho mình một bài học, giá trị cuộc sống giản dị vậy và nhưng có phải ai cũng biết tận hưởng đâu. Sống một cuộc đời có nghĩa, thì chỉ cần một lần là đủ…', 2019, 2020),
(2, 'Hạt Giống Tâm Hồn - Tuyển Chọn Những Câu Chuyện Hay Nhất', 'https://nhasachquangloi.vn/pub/media/catalog/product/cache/3bd4b739bad1f096e12e3a82b40e551a/t/n/tn-kns-trv-944_4.jpg', 120000, 'Nhiều tác giả', 'Nhà Xuất Bản Tổng hợp TP.HCM', 'First News - Trí Việt', '335', 'Bìa cứng', '200', '14.5 x 20.5 cm', 'Cuộc sống của chúng ta ra sao, luôn ngập tràn sợ hãi và oán hờn hay chấp nhận và vui sống để vươn lên, tùy thuộc vào cách ta đối mặt với những khó khăn thử thách ta gặp phải trên con đường mình đi. </br>\r\n\r\nTuyển Chọn Những Câu Chuyện Hay Nhất Hạt Giống Tâm Hồn sẽ là người bạn đồng hành cùng độc giả vượt qua những khó khăn thử thách trong cuộc sống thường ngày như nỗi mất mát, nổi đau tổn thương tinh thần, tình cảm, niềm tin, bệnh tật, những thăng trầm trên bước đường theo đuổi ước mơ của cuộc đời hay vươn lên cho cuộc sống tốt đẹp hơn. Qua hơn 10 năm từ khi ra đời, Hạt Giống Tâm Hồn là một trong những bộ sách có giá trị được bạn độc yêu thích nhất tại Việt Nam. Thực sự Hạt Giống Tâm Hồn đã làm thay đổi cuộc sống của rất nhiều người, truyền cảm hứng, niềm tin và giá trị sống đến cho nhiều bạn đọc Việt Nam.</br>\r\n\r\nGiá sản phẩm  đã bao gồm thuế theo luật hiện hành. Tuy nhiên tuỳ vào từng loại sản phẩm hoặc phương thức, địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, ...', 2014, 2016),
(3, 'Python cơ bản', 'https://salt.tikicdn.com/ts/product/38/40/88/b962e19641b05c06324b416c6aa5d38b.jpg', 125000, 'Bùi Việt Hà', 'NXB Đại Học Quốc Gia Hà Nội', 'ĐHQG Hà Nội', '253', 'Bìa mềm', '160', '13 x 20.5', '<b>SÁCH PYTHON CƠ BẢN</b> </br>\r\n\r\nHiện nay ngôn ngữ lập trình bậc cao Python đang nổi lên như một ngôn ngữ lập trình được sử dụng NHIỀU NHẤT trên thế giới. Điều này được giải thích bằng các lý do sau:</br>\r\n\r\nPython là ngôn ngữ lập trình bậc cao khá đơn giản, dễ học, dễ viết.</br>\r\n\r\nCách viết lệnh của Python khá đặc biệt, sử dụng các dấu cách (viết thụt vào) để mô tả các nhóm (block) lệnh. Đặc điểm này làm cho việc viết lệnh Python gần giống với cách viết, trình bày văn bản hàng ngày. Chính đặc điểm này làm cho ngôn ngữ lập trình Python rất dễ viết, trong sáng, ngày càng phát triển và được đưa vào môi trường giáo dục thay cho các ngôn ngữ truyền thống như Pascal, C hay Java.</br>\r\n\r\nPython là ngôn ngữ mã nguồn mở và cho phép cộng đồng có thể đóng góp bằng cách bổ sung các module, các kho hàm số, thư viện thuật toán. Điều này làm cho Python phát triển BÙNG NỔ trong giới khoa học và giáo dục đại học. Đặc biệt trong một số ngành mũi nhọn của CNTT như IoT, trí tuệ nhân tạo (AI), dữ liệu lớn (big data) và CMCN 4.0, các phát triển rất nhanh thời gian gần đây của công nghệ đều gắn liền với Python.</br>\r\n\r\nNgoài các lý do nêu trên, Python còn có một tính chất khác biệt nữa: Python là ngôn ngữ thông dịch và luôn có môi trường tương tác Python Shell đi kèm. Chính môi trường tương tác này sẽ giúp ích rất nhiều cho những người muốn làm quen và học Python.</br>\r\n\r\nSách Pyhon cơ bản là cuốn sách đầu tiên, cơ bản, dành cho người mới bắt đầu học ngôn ngữ lập trình này.\r\n\r\nSách dày 254 trang, bao gồm 16 chương, cùng với trên 350 bài tập từ đơn giản đến phức tạp, phù hợp cho mọi đối tượng từ cấp THCS, THPT hoặc sinh viên đại học. Sách cũng có thể dùng cho giáo viên dạy Tin học các trường phổ thông và đại học.</br>\r\n\r\n\r\nNội dung các chủ đề của sách Python cơ bản như sau:</br>\r\n1. Bắt đầu với Python.</br>\r\n2. Làm quen môi trường lập trình Python.</br>\r\n3. Input và chuyển đổi dữ liệu.</br>\r\n4. Hàm số.</br>\r\n5. Đối tượng trong Python.</br>\r\n6. Kiểu dữ liệu List. Mảng một chiều.</br>\r\n7. List của List. Mảng nhiều chiều.</br>\r\n8. Khái niệm Module.</br>\r\n9. Xâu ký tự.</br>\r\n10. Đọc và ghi tệp.</br>\r\n11. Câu lệnh điều kiện.</br>\r\n12. Đệ quy.</br>\r\n13. Kiểu dữ liệu Từ điển.</br>\r\n14. Kiểu dữ liệu Tập hợp.</br>\r\n15. Đồ họa con Rùa.</br>\r\n16. Bắt lỗi và kiểm soát lỗi trong Python.</br>\r\nMỗi chương sẽ bắt đầu bằng mô tả mục đích của chương, tiếp theo là dãy các hoạt động kiến thức cần học và dạy. Sách có thể dùng cho việc tự học hoặc giáo viên giảng dạy trên lớp. Sau mỗi chương là phần câu hỏi, bài tập chi tiết.</br>\r\n\r\nGiá sản phẩm trên Tiki đã bao gồm thuế theo luật hiện hành. Tuy nhiên tuỳ vào từng loại sản phẩm hoặc phương thức, địa chỉ giao hàng mà có thể phát sinh thêm chi phí khác như phí vận chuyển, phụ phí hàng cồng kềnh, ...</br>', 2020, 2021);

-- --------------------------------------------------------

--
-- Table structure for table `product-member`
--

CREATE TABLE `product-member` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `info` text NOT NULL,
  `size` varchar(100) NOT NULL,
  `status` text NOT NULL,
  `publishing-company` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `price` int(11) NOT NULL,
  `form` int(11) NOT NULL,
  `member-name` varchar(100) NOT NULL,
  `member-mail` varchar(100) NOT NULL,
  `member-phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product-member`
--
ALTER TABLE `product-member`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product-member`
--
ALTER TABLE `product-member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
