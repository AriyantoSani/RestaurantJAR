-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2020 at 04:40 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurantdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `amount` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `paymentMethod_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `date`, `amount`, `order_id`, `user_id`, `paymentMethod_id`) VALUES
(1, '2020-01-07 03:29:41', 2, 2, 4, 1),
(2, '2020-01-07 03:29:16', 3, 1, 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `price` varchar(45) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `food_category_id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `name`, `price`, `status`, `food_category_id`, `link`, `description`) VALUES
(1, 'Salad', '7000', 1, 1, 'https://www.onceuponachef.com/images/2019/07/Big-Italian-Salad-760x983.jpg', ''),
(2, 'Ketoprak', '7000', 0, 1, 'https://www.masakapahariini.com/wp-content/uploads/2018/08/ketoprak-MAHI-2.jpg', ''),
(3, 'Gado-gado', '8000', 1, 1, 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a2/Gado_gado.jpg/1200px-Gado_gado.jpg', ''),
(4, 'Pudding', '5000', 0, 1, 'https://www.yummytummyaarthi.com/wp-content/uploads/2017/08/1-9.jpg', ''),
(5, 'Pecel', '8000', 1, 1, 'https://sifu.unileversolutions.com/image/id-ID/recipe-topvisual/2/1260-709/pecel-madiun-50447633.jpg', ''),
(6, 'Indomie Goreng', '8000', 1, 2, 'https://cdn0-production-images-kly.akamaized.net/ZRydGFEA6M2KwFUiZQti1bCkUSQ=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/2964333/original/040327100_1573470874-15876789_791554644317395_266044254432788480_n.jpg', ''),
(7, 'Ayam Goreng', '10000', 1, 2, 'https://selerasa.com/wp-content/uploads/2015/12/images_daging_ayam-goreng.jpg', ''),
(8, 'Nasi Goreng', '11000', 0, 2, 'https://www.masakapahariini.com/wp-content/uploads/2019/01/nasi-goreng-jawa-620x440.jpg', ''),
(9, 'Bakmi Ayam', '12000', 1, 2, 'https://selerasa.com/wp-content/uploads/2015/05/images_mie_Mie_ayam_14-mie-ayam-kampung.jpg', ''),
(10, 'Cumi Balado', '12000', 0, 2, 'https://img-global.cpcdn.com/recipes/65a9c303f2668371/751x532cq70/cumi-balado-foto-resep-utama.jpg', ''),
(11, 'Dadar Gulung', '12000', 1, 3, 'https://asset-a.grid.id/crop/0x0:0x0/700x465/photo/2019/03/13/3822778270.jpg', ''),
(12, 'Mochi', '12000', 1, 3, 'https://truffle-assets.imgix.net/b2dc7846-1549_neopolitanstrawberrymochi_land1.jpg', ''),
(13, 'Gelato', '10000', 1, 3, 'https://awsimages.detik.net.id/community/media/visual/2018/03/18/5f2f1cd8-f3cf-4f92-b802-ebd63f84c42c.jpeg?w=700&q=90', ''),
(14, 'Teh Manis', '3000', 1, 2, 'https://cdn0-production-images-kly.akamaized.net/lB-Z7YU-uhhDBYNgjohOBCtzbGk=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/804508/original/057982300_1422864990-mint-tea.jpg', ''),
(15, 'Milo', '6000', 1, 2, 'http://3.bp.blogspot.com/_C5mYKN-2Akk/TNZYYGwYwTI/AAAAAAAAAAM/Mg1iAlMbcBo/s1600/milo.jpg', ''),
(16, 'Jeruk', '6000', 1, 2, 'https://cdn0-production-images-kly.akamaized.net/xfj7ph2Ja-9mO1-38Q_qJUnhwT4=/17x0:926x512/640x360/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/2247300/original/097384400_1528762027-Es_jeruk-pinteest.jpg', ''),
(17, 'Nutrisari', '5000', 1, 2, 'https://s2.bukalapak.com/img/7923267261/w-1000/PhotoGrid_1505362693195_scaled.jpg', ''),
(18, 'Jus Mangga', '8000', 1, 2, 'https://hellosehat.com/wp-content/uploads/2019/03/shutterstock_1265282248.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `foodcategory`
--

CREATE TABLE `foodcategory` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `foodcategory`
--

INSERT INTO `foodcategory` (`id`, `name`) VALUES
(1, 'Appetizer'),
(2, 'Main Course'),
(3, 'Desert'),
(4, 'Beverage');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `total_price` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `amount` int(11) NOT NULL,
  `table_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `order_date`, `total_price`, `status`, `amount`, `table_id`) VALUES
(1, '2020-01-07 03:31:50', 21000, 0, 3, 1),
(2, '2020-01-07 03:33:08', 20000, 0, 2, 3),
(3, '2020-01-07 03:33:12', 17000, 0, 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orderdetail`
--

INSERT INTO `orderdetail` (`id`, `food_id`, `order_id`, `quantity`, `status`) VALUES
(1, 6, 1, 1, 2),
(2, 7, 1, 1, 2),
(3, 14, 1, 1, 0),
(4, 9, 2, 2, 0),
(5, 18, 2, 2, 0),
(6, 8, 3, 1, 0),
(7, 16, 3, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `orderdetailtrack`
--

CREATE TABLE `orderdetailtrack` (
  `id` int(11) NOT NULL,
  `orderDetail_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `paymentmethod`
--

CREATE TABLE `paymentmethod` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `paymentmethod`
--

INSERT INTO `paymentmethod` (`id`, `name`) VALUES
(1, 'Cash'),
(2, 'Credit'),
(3, 'e-Money');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`) VALUES
(1, 'Guest'),
(2, 'Admin'),
(3, 'Cashier'),
(4, 'Waiter'),
(5, 'Kitchen');

-- --------------------------------------------------------

--
-- Table structure for table `table`
--

CREATE TABLE `table` (
  `id` int(11) NOT NULL,
  `no_table` varchar(45) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table`
--

INSERT INTO `table` (`id`, `no_table`, `status`) VALUES
(1, '01', 0),
(2, '02', 0),
(3, '03', 0),
(4, '04', 0),
(5, '05', 0),
(6, '06', 0),
(7, '07', 0),
(8, '08', 0),
(9, '09', 0),
(10, '10', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `phone_number` varchar(45) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `first_name`, `last_name`, `email`, `phone_number`, `role_id`) VALUES
(2, '1772046', 'ea7966f90de2bf520e3f0042053e6ec3', 'Ariyanto', 'Sani', 'ariyantosani555@gmail.com', '082316997753', 3),
(3, '1772044', 'be874a520136497ccfd1f74cad11a3bc', 'Roy', 'Parsaoran', 'roy@gmail.com', '08123456789', 2),
(4, '1772004', '5d55d24e5f82ec62c93946c644c1e049', 'Jonathan', 'Bernad', 'jonathan@gmail.com', '08123456789', 4),
(5, '1772012', 'd16ce8d401952ef8449ed5d13408cdaf', 'Kafka', 'Febian', 'kafka@gmail.com', '08123456789', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_bill_order1_idx` (`order_id`),
  ADD KEY `fk_bill_user1_idx` (`user_id`),
  ADD KEY `fk_bill_paymentMethod1_idx` (`paymentMethod_id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_food_detail_food_category1_idx` (`food_category_id`);

--
-- Indexes for table `foodcategory`
--
ALTER TABLE `foodcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_order_table1_idx` (`table_id`);

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_orderDetail_food1_idx` (`food_id`),
  ADD KEY `fk_orderDetail_order1_idx` (`order_id`);

--
-- Indexes for table `orderdetailtrack`
--
ALTER TABLE `orderdetailtrack`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_orderDetailTrack_orderDetail1_idx` (`orderDetail_id`);

--
-- Indexes for table `paymentmethod`
--
ALTER TABLE `paymentmethod`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table`
--
ALTER TABLE `table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_role_idx` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `foodcategory`
--
ALTER TABLE `foodcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orderdetailtrack`
--
ALTER TABLE `orderdetailtrack`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `paymentmethod`
--
ALTER TABLE `paymentmethod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `table`
--
ALTER TABLE `table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `fk_bill_order1` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_bill_paymentMethod1` FOREIGN KEY (`paymentMethod_id`) REFERENCES `paymentmethod` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_bill_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `food`
--
ALTER TABLE `food`
  ADD CONSTRAINT `fk_food_detail_food_category1` FOREIGN KEY (`food_category_id`) REFERENCES `foodcategory` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `fk_order_table1` FOREIGN KEY (`table_id`) REFERENCES `table` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD CONSTRAINT `fk_orderDetail_food1` FOREIGN KEY (`food_id`) REFERENCES `food` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_orderDetail_order1` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `orderdetailtrack`
--
ALTER TABLE `orderdetailtrack`
  ADD CONSTRAINT `fk_orderDetailTrack_orderDetail1` FOREIGN KEY (`orderDetail_id`) REFERENCES `orderdetail` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_user_role` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
