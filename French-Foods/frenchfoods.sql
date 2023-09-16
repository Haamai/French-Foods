-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2019 at 05:36 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `frenchfoods`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(2) NOT NULL,
  `hoten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `taikhoan` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `quyen` int(1) NOT NULL,
  `trangthai` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idadmin`, `hoten`, `taikhoan`, `matkhau`, `email`, `sdt`, `quyen`, `trangthai`) VALUES
(1, 'Hoàng Thái Vũ', 'hoangvu', 'e10adc3949ba59abbe56e057f20f883e', 'hoangvu3600@gmail.com', '0328068094', 1, 0),
(2, 'Mai Thị Thùy Chi', 'thuychi', '00c66aaf5f2c3f49946f15c1ad2ea0d3', 'maithuychichi@gmail.com', '0397516396', 0, 0),
(3, 'Nguyễn Thị Phấn', 'phannguyen', '00c66aaf5f2c3f49946f15c1ad2ea0d3', 'phannguyen@gmail.com', '0123456789', 0, 0),
(5, 'Nguyễn Minh Tiến', 'tien', 'a161ea403cc8a843178a15861dabb014', 'kiencampha@gmail.com', '0264572866', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `baiviet`
--

CREATE TABLE `baiviet` (
  `idbaiviet` int(6) NOT NULL,
  `chude` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `thoigian` date NOT NULL,
  `nguoiviet` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `baiviet`
--

INSERT INTO `baiviet` (`idbaiviet`, `chude`, `noidung`, `hinhanh`, `thoigian`, `nguoiviet`) VALUES
(1, 'Vichyssoise', 'Vichyssoise là món súp lạnh thanh tao được chế biến từ nguyên liệu là khoai tây, tỏi tây, kem và thịt gà. Món ăn có màu vani tuyệt đẹp cùng sự thống nhất trong hương vị. Nó được phục vụ ở nhiệt độ lạnh để giữ tối đa cho hương vị nhẹ nhàng và tươi mới. Mặc dù công thức nấu ăn của Pháp với các món súp tương tự đã tồn tại trong nhiều thế kỷ. Tuy nhiên, vị đầu bếp cuối cùng sáng chế ra phiên bản hoàn hảo nhất của món ăn này là Louis Diat, ông cũng là người đặt tên cho nó là “vichyssoise” tại khách s', 'vichyssoise.jpg', '2019-09-21', 'cream'),
(2, 'Escargot', 'Thông thường, các món ăn làm từ ốc sên sẽ là những món khai vị trong bữa ăn của người Pháp. Escargot là cách người Pháp gọi ốc sên và là một cái tên vô cùng quen thuộc trong các thực đơn tại nhà hàng Pháp trên toàn thế giới. Có nhiều cách để thưởng thức và người Pháp chọn cách dùng ốc sên với bơ và bánh mì, nướng cùng sốt, nấu súp hoặc làm pizza…Mỗi cách chế biến lại mang hương vị độc đáo riêng nhưng nổi bật hơn cả vẫn là hương vị đậm đà của ốc sên, khiến bất cứ ai cũng không thể quên khi đã một', 'escargots.jpg', '2019-11-15', 'cream'),
(3, 'Nicoise salad', 'Xa lát theo kiểu Nice là một món xà lát gồm cà chua, cá ngừ, trứng luộc già, ô liu vùng Nice và cá cơm biển, trộn với dầu giấm. Nó thường được bày vào đĩa, bát, có hoặc không có xà lách lót bên dưới. Cá ngừ có thể được nấu hoặc dùng loại đóng hộp. Món xa lát này có thể có thêm ớt chuông, hành khô và hoa atisô sống. Tuy nhiên món ăn không có một công thức chính thức, do vậy mỗi đầu bếp có thể quyết định công thức riêng của mình.', 'nicoise_salad.jpg', '2019-08-01', 'cream'),
(4, 'Foie gras', 'Foie gras hay gan ngỗng vỗ béo là món ăn đặc sản của Pháp làm từ gan ngỗng hay vịt. Gan ngỗng béo được chế biến thành món pa tê. Đây là một món ăn cao cấp, tinh tế và nổi tiếng trong văn hóa ẩm thực Pháp bởi hương vị thơm ngon và thành phần dinh dưỡng tuyệt vời. Món ăn không những nổi tiếng tại Pháp, mà còn phổ biến và nhận được sự yêu thích từ khắp quốc gia trên thế giới. ', 'ganngong.jpg', '2019-09-19', 'cream'),
(5, 'Creme Brulee', 'Creme Brulee còn được biết đến là kem cháy, crema catalana, hoặc kem Trinity là một món tráng miệng bao gồm một lớp đế custard béo phủ với một lớp nước caramen cứng. Người ta thường dùng nó ở nhiệt độ phòng. Đế custard theo truyền thống có hương vị vani, nhưng cũng có thể có nhiều loại vị khác. Khi nhắc đến Creme Brulee, người ta thường hay nghĩ đến một sự hòa quyện của vị thanh ngọt và béo mượt hấp dẫn, cùng với lớp đường được khò cứng lại ở trên.', 'creme_brulee.jpg', '2019-12-12', 'cream');

-- --------------------------------------------------------

--
-- Table structure for table `combo`
--

CREATE TABLE `combo` (
  `idcombo` int(6) NOT NULL,
  `tencombo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mota` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `gia` text COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `combo`
--

INSERT INTO `combo` (`idcombo`, `tencombo`, `mota`, `gia`, `hinhanh`) VALUES
(1, 'Combo steak', 'Combo steak 3 món:\r\n- 01 soup theo ngày\r\n- 01 Steak 180 gram\r\n- 01 tráng miệng theo ngày', '449.000', 'combo1.jpg'),
(2, 'Combo cá hồi', 'Combo cá hồi 179k\r\n- 01 soup theo ngày\r\n- 01 cá hồi áp chảo sốt chanh leo\r\n- 01 tráng miệng theo ngày', '399.000', 'combo2.jpg'),
(3, 'Combo bò hầm và rượu vang đỏ', 'Combo bò hầm và rượu vang đỏ:\r\n- 01 bò hầm\r\n- 01 salad theo ngày\r\n- 01 bia hoặc nước ngọt', '499.000', 'combo4.jpg'),
(4, 'Combo tráng miệng', 'Combo tráng miệng:\r\n- 01 kem cháy\r\n- 01 trà hoặc nước ngọt', '99.000', 'combo3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `datban`
--

CREATE TABLE `datban` (
  `iddatban` int(6) NOT NULL,
  `idtaikhoan` int(4) NOT NULL,
  `hoten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `songuoi` int(2) NOT NULL,
  `ngaydb` date NOT NULL,
  `giodb` time NOT NULL,
  `ghichu` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `trangthai` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `datban`
--

INSERT INTO `datban` (`iddatban`, `idtaikhoan`, `hoten`, `songuoi`, `ngaydb`, `giodb`, `ghichu`, `trangthai`) VALUES
(24, 2, 'Hoàng Thái Vũ', 12, '2019-10-31', '18:30:00', 'Cần nhiều món ăn bổ dưỡng', 0),
(25, 2, 'Hoàng Thái Vũ', 12, '2019-10-01', '10:00:00', 'Bàn gần cửa sổ', 0),
(26, 2, 'Hoàng Thái Vũ', 6, '2019-10-10', '08:00:00', 'Cần thức ăn ngon', 0),
(27, 2, 'Hoàng Thái Vũ', 6, '2019-10-20', '20:00:00', 'Cần món hàu nướng', 0),
(37, 7, 'Hoàng Ngọc Hải', 24, '2019-10-25', '03:45:00', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `douong`
--

CREATE TABLE `douong` (
  `idloaidouong` int(6) NOT NULL,
  `iddouong` int(6) NOT NULL,
  `tendouong` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mota` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `gia` text COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `douong`
--

INSERT INTO `douong` (`idloaidouong`, `iddouong`, `tendouong`, `mota`, `gia`, `hinhanh`) VALUES
(11, 91, 'Oranges juice', 'Nước ép cam', '30.000', 'juice.jpg'),
(11, 93, 'Watermelon juice', 'Nước ép dưa hấu', '40.000', 'juice.jpg'),
(11, 95, 'Grapes juice', 'Nước ép nho', '50.000', 'juice.jpg'),
(11, 97, 'Strawberry juice', 'Nước ép dâu tây', '60.000', 'juice.jpg'),
(12, 99, 'Blueberries smoothie', 'Sinh tố việt quất', '100.000', 'smoothie.jpg'),
(12, 100, 'Mango smoothie', 'Sinh tố xoài', '70.000', 'smoothie.jpg'),
(12, 102, 'Avocado smoothie', 'Sinh tố bơ', '90.000', 'smoothie.jpg'),
(12, 104, 'Strawberry smoothie', 'Sinh tố dâu', '100.000', 'smoothie.jpg'),
(14, 105, 'Hồng trà sủi bọt kem muối', 'Hồng trà sủi bọt kem muối', '30.000', 'hong_tra_sui_bot_kem_muoi.jpg'),
(14, 106, 'Trà đào cam xả', 'Trà đào cam xả', '60.000', 'trà_dao_cam_xa.jpg'),
(14, 107, 'Trà hoa cúc', 'Trà hoa cúc', '100.000', 'tra_hoa_cuc.jpg'),
(14, 108, 'Trà thảo mộc', 'Trà thảo mộc', '120.000', 'tra_thao_moc.jpg'),
(15, 112, 'Appletiser apple', 'Nước trái cây có ga vị táo', '200.000', 'appletiser.jpg'),
(15, 116, 'Charitea black', 'Trà đen đá chanh ủ', '300.000', 'charitea.jpg'),
(15, 119, 'Coca cola', 'Nước ngọt có ga', '30.000', 'coca.jpg'),
(15, 120, 'Diet coke', 'Nước ngọt có ga vị trái cây', '50.000', 'diet_coke.jpg'),
(18, 122, 'Sangria oranges and pomegranate', 'Sangria cam lựu', '200.000', 'sangria_cam_luu.jpg'),
(18, 124, 'Sangria matcha', 'Sangria trà xanh', '200.000', 'sangria_matcha.jpg'),
(18, 125, 'Sangria rose', 'Sangria hoa hồng', '250.000', 'sangria_rose.jpg'),
(18, 126, 'Sangria mango, kiwi and pineapple', 'Sangria xoài với kiwi và dứa', '300.000', 'sangria_xoai_kiwi_dua.jpg'),
(16, 128, 'Heineken', 'Bia heineken', '200.000', 'heineken.jpg'),
(16, 129, 'Loroyse', 'Bia loroyse', '400.000', 'loroyse.jpg'),
(16, 130, 'Saint mihal', 'Bia saint mihal', '450.000', 'saint_mihal.jpg'),
(16, 131, 'Saint omer', 'Bia saint omer', '450.000', 'saint_omer.jpg'),
(19, 132, 'Soda apple', 'Soda táo xanh', '30.000', 'soda.jpg'),
(19, 135, 'Soda raspberry', 'Soda phúc bồn tử', '50.000', 'soda.jpg'),
(19, 136, 'Soda blueberry', 'Soda việt quất', '50.000', 'soda.jpg'),
(19, 139, 'Soda coffee', 'Soda cà phê', '60.000', 'soda.jpg'),
(13, 141, 'Noisette', 'Cà phê với sữa được tạo bọt và sữa nóng', '150.000', 'noisette.jpg'),
(13, 142, 'Cappuccino', 'Cà phê với sữa và sữa sủi bọt cùng lớp bột ở trên', '150.000', 'cappuccino.jpg'),
(13, 143, 'Au lait', 'Cà phê espresso với sữa nóng', '100.000', 'au_lait.jpg'),
(13, 144, 'Decaf', 'Cà phê không chức cafein', '200.000', 'decaf.jpg'),
(17, 145, 'Chateau brane bantenac', 'Rượu vang từ nho blend và quả lí chua', '5.000.000', 'wine.jpg'),
(17, 146, 'Chateau langoa barton', 'Rượu vang từ các loại trái cây và cam thảo', '3.000.000', 'wine.jpg'),
(17, 147, 'Chateau lynch moussas-pauillac', 'Rượu vang từ hai loại nho sauvignon merlot ', '2.500.000', 'wine.jpg'),
(17, 149, 'Chateau batailley 2008', 'Rượu vang từ cabernet sauvignon và merlot', '2.900.000', 'wine.jpg'),
(20, 152, 'First aid', 'Cocktail rượu Gin và nước ép nho cùng nha đam', '250.000', 'download3.jpg'),
(20, 153, 'Angelo azzuro', 'Cocktail từ rượu gin, triple sec, blue curacao', '200.000', 'download4.jpg'),
(20, 155, 'Paloma', 'Cocktail nước ép nho và chanh với rượu tequila', '250.000', 'download6.jpg'),
(20, 156, 'White wonder', 'Cocktail nước dừa tươi pha với cam và rượu vodka', '200.000', 'download7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `khnhanxet`
--

CREATE TABLE `khnhanxet` (
  `idnhanxet` int(11) NOT NULL,
  `ngnhanxet` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sdtnhanxet` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ndnhanxet` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `thoigian` date NOT NULL,
  `trangthai` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khnhanxet`
--

INSERT INTO `khnhanxet` (`idnhanxet`, `ngnhanxet`, `sdtnhanxet`, `email`, `ndnhanxet`, `thoigian`, `trangthai`) VALUES
(1, 'Mai Thị Thùy Chi', '0397516396', 'maithuychichi@gmail.com', 'Nguyên liệu của nhà hàng này rất là chất lượng, cả rượu và thịt đều là hàng nhập khẩu. Phải công nhận là thịt nhập khẩu ngon hơn thịt nhà mình nhiều ý. Các món đều rất ngon, mình đã thử steak, súp bí ngô và vịt, ngon. Pate gan ngỗng là món nhất định phải thử ở đây, trời ơi món đặc sản của Pháp, mà nó cũng ngon ngất ngây. Cố gắng đến sớm để tranh được chỗ ngoài ban công thì view đẹp, nhìn thẳng sang bên nhà thờ quá là thích.', '2019-09-26', 0),
(2, 'Hoàng Thái Vũ', '0328068094', 'hoangvu@gmail.com', 'Nhà hàng theo phong cách Pháp nên không gian cứ gọi là nhẹ nhàng, lãng mạn thôi rồi. Bàn ghế xếp vuông vắn, khăn trải bàn trắng tinh, đèn trùm lung linh, nhạc du dương. Đến đội nhân viên phục vụ hình như cũng nhẹ nhàng, duyên dáng hơn các chỗ khác hay sao ấy, mình thấy mấy anh chị lúc nào cũng nhã nhặn, ăn nói nhỏ nhẹ cực luôn. Các món ở đây đều là món Pháp, ăn ngon lắm, kiểu ăn uống thanh cảnh. Món cá hồi hun khói rất ngon, thịt cá mềm, ngọt, ướp gia vị vừa phải chứ không hề bị nồng.', '2019-09-25', 0),
(3, 'Nguyễn Thị Phấn', '0972650460', 'phannguyen@gmail.com', 'Hôm nay mình và bạn đã đến ăn trưa tại nhà hàng, cảm nhận đầu tiên là phong cách bài trí rất đẹp, nhân viên phục vụ tận tình và lịch sự còn đồ ăn thì miễn chê luôn thích thật. Cảm ơn nhà hàng đã dành cho mình 1 bữa ăn trưa thật ngon. Không gian nhà hàng rất đẹp và sang trọng, nhân viên phục về rất nhiệt tình, hòa nhã, quan trọng hơn cả là đồ ăn rất hấp dẫn và đa dạng. Chúc cho nhà hàng ngày càng phát triển nhé.', '2019-09-02', 1),
(4, 'Phạm Trung Kiên', '0982282541', 'kiempham@gmail.com', 'Hôm đến quán là buổi trưa nên không bị đông. Nhân viên phục vụ cũng khá nhiệt tình và nhanh nhẹn. Mình thích view ở đây vừa ăn có thể vừa nhìn cảnh bên ngoài, đồ ăn trang trí đẹp, hơn nhưng chỗ mình đã từng ăn đồ Âu. Steak mềm, thịt ngọt ăn kèm khoai tây nghiền mê li. Tuy nhiên thì có cả rau củ quả mình lại không thích bằng salad nên phải gọi thêm 1 đĩa ngoài. Salad ngoài ăn khá ok không bị ít sốt. Giá cả phải chăng phù hợp với chất lượng. Nhưng bản thân mình vẫn ưa đồ Á hơn.', '2019-08-14', 1);

-- --------------------------------------------------------

--
-- Table structure for table `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `idkhuyenmai` int(11) NOT NULL,
  `tieude` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `nguoivietkm` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tgbatdau` date NOT NULL,
  `tgketthuc` date NOT NULL,
  `hinhanh` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khuyenmai`
--

INSERT INTO `khuyenmai` (`idkhuyenmai`, `tieude`, `noidung`, `nguoivietkm`, `tgbatdau`, `tgketthuc`, `hinhanh`) VALUES
(1, 'Set 3 món ưu đãi cực sốc.', 'Ưu đãi cưc sốc set combo được yêu thích nhất French Foods với giá siêu hấp dẫn chỉ 149K nhé!', 'cream', '2019-09-21', '2019-10-21', 'km_combo.jpg'),
(2, 'Back to school with French Foods.', 'French Foods ưu đãi siêu hấp dẫn chỉ 99k combo 1 món + 1 nước cho sinh viên mùa tựu trường.', 'cream', '2019-09-05', '2019-10-05', 'km_sinhvien.jpg'),
(3, 'Đặt tiệc cưới tháng của mùa yêu.', 'Nhanh tay đặt tiệc cưới tháng 9 để nhận ngay bộ voucher siêu khủng trị giá 1 triệu đồng nhé ! ', 'cream', '2019-09-01', '2019-09-30', 'km_tieccuoi.jpg'),
(4, 'Ăn thả ga tặng Sangria.', 'Tặng ngay Sangria 1000ml cho hóa đơn từ 900k duy nhất trong tháng 9 này!', 'cream', '2019-09-09', '2019-09-29', 'km_thang.jpg'),
(5, 'Tặng ngay 50k khi đăng ký thành viên French Foods.', 'Chỉ cần đăng ký thành viên French Foods của chúng mình bạn sẽ được tặng ngay voucher trị giá 50k.', 'cream', '2019-08-15', '2019-09-30', 'km_tvmoi.jpg'),
(6, 'Sweet combo thay lời muốn nói.', 'Hẹn hò kiểu Pháp siêu lãng mạn, hấp dẫn chỉ với 499k chắc chắn sẽ làm bạn và người ấy hài lòng!', 'cream', '2019-02-10', '2019-02-20', 'km_valentine.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `loaidouong`
--

CREATE TABLE `loaidouong` (
  `idloaidouong` int(6) NOT NULL,
  `tenloaidouong` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mota` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loaidouong`
--

INSERT INTO `loaidouong` (`idloaidouong`, `tenloaidouong`, `mota`) VALUES
(11, 'Juice', 'Nước ép'),
(12, 'Smoothie', 'Sinh tố'),
(13, 'Coffee', 'Cà phê'),
(14, 'Tea', 'Trà'),
(15, 'Soft drinks', 'Nước ngọt có ga'),
(16, 'Beer', 'Bia'),
(17, 'Wine', 'Rượu'),
(18, 'Sangria', 'Đồ uống chứa cồn'),
(19, 'Soda', 'Nước ngọt có ga'),
(20, 'Cocktail', 'Cốc tai');

-- --------------------------------------------------------

--
-- Table structure for table `loaimonan`
--

CREATE TABLE `loaimonan` (
  `idloaimonan` int(6) NOT NULL,
  `tenloaimonan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mota` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loaimonan`
--

INSERT INTO `loaimonan` (`idloaimonan`, `tenloaimonan`, `mota`) VALUES
(1, 'Appetizers', 'Khai vị'),
(2, 'Soup', 'Soup'),
(3, 'Salad', 'Salad'),
(4, 'Fish & Seafood', 'Cá và hải sản'),
(5, 'Poultry', 'Thịt gia cầm'),
(6, 'Pasta', 'Mì Ý'),
(7, 'Meat', 'Thịt'),
(8, 'Fromage', 'Phô mai'),
(9, 'Hamburger', 'Bánh mì kẹp thịt'),
(10, 'Dessert', 'Tráng miệng');

-- --------------------------------------------------------

--
-- Table structure for table `monan`
--

CREATE TABLE `monan` (
  `idloaimonan` int(6) NOT NULL,
  `idmonan` int(6) NOT NULL,
  `tenmonan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mota` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `gia` text COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `monan`
--

INSERT INTO `monan` (`idloaimonan`, `idmonan`, `tenmonan`, `mota`, `gia`, `hinhanh`) VALUES
(1, 1, 'Baked oysters with cheese and garlic', 'Hàu đút lò với phô mai và tỏi là món ăn được nhiều người yêu thích vì hương vị thơm ngon lại giàu chất dinh dưỡng với nguyên liệu chủ yếu là hàu tươi, phô mai, tỏi phục vụ với đồ ăn kèm.', '239.000', 'cheese_baked_oysters.jpg'),
(1, 3, 'Escargot', 'Món ốc sên là một món ăn xuất xứ từ nước Pháp với nguyên liệu là những con ốc sên. Đây là một trong những món truyền thống làm nên danh tiếng cho sự sáng tạo của ẩm thực Pháp là ốc sên nướng bơ, tỏi, mùi tây. ', '349.000', 'escargots.jpg'),
(1, 4, 'Foie gras', 'Gan béo hay gan ngỗng vỗ béo là món ăn đặc sản của Pháp làm từ gan ngỗng hay vịt. Ngỗng được nuôi bằng cách bị buộc nhồi nhét ăn uống hạt bắp khô quá mức để có bộ gan to. Gan ngỗng béo được chế biến thành món pa tê. Món gan béo là một trong những tinh hoa ẩm thực của Pháp trên thế giới.', '189.000', 'ganngong.jpg'),
(1, 10, 'Baked cod', 'Cá tuyết là loại cá thịt trắng có vị thanh dịu và thịt chắc. Mặc dù có nhiều cách chế biến cá tuyết nhưng nướng là cách đơn giản và nhanh chóng nhất. Dù bạn thích vị cá dịu tự nhiên, vị nồng nàn với rau củ hay phủ vụn bánh mì thì đều có thể sử dụng phương pháp nướng vì nướng sẽ giúp đem đến nhiều hương vị cho cá.', '249.000', 'cod.jpg'),
(10, 12, 'Creme brulee', 'Creme brulee còn được biết đến là kem cháy, crema catalana, hoặc kem Trinity là một món tráng miệng bao gồm một lớp đế custard béo phủ với một lớp nước caramen cứng. Người ta thường dùng nó ở nhiệt độ phòng. Đế custard theo truyền thống có hương vị vani, nhưng cũng có thể có nhiều loại vị khác.', '49.000', 'creme_brulee.jpg'),
(10, 17, 'Mousse peach', 'Mousse là thực phẩm chế biến có cấu trúc với nhiều bọt khí kết hợp cho món mousse cấu trúc nhẹ, mịn, xốp. Mousse có thể thanh mịn hoặc béo đặc, tuỳ kỹ thuật chế biến. Bánh mousse đào là sự hòa quyện giữa vị béo ngậy của kem tươi và chút thanh mát ngon ngọt của những miếng đào để cho ra món bánh mousse đào thơm phưng phức.', '49.000', 'mousse_dao.jpg'),
(10, 20, 'Panna cotta', 'Panna cotta là một món ngọt của Ý nấu kem, sữa và đường với bột thạch rồi đợi cho hỗn hợp đông lại. Món này xuất phát từ miền bắc nước Ý, vùng Piedmont rồi được phổ biến khắp đất nước với việc thêm vào các loại dâu dại, nước caramen, các loại sốt sô cô la hoặc trang trí thêm các vệt sốt trái cây.', '39.000', 'panna_cotta.jpg'),
(10, 25, 'Tiramisu', 'Tiramisu là một loại bánh ngọt tráng miệng vị cà phê rất nổi tiếng của nước Ý, gồm các lớp bánh quy Savoiardi, nhúng cà phê xen kẽ với hỗn hợp trứng, đường, phô mai mascarpone đánh bông, thêm một ít bột cacao. Công thức bánh này được biến tấu thành nhiều món bánh và món tráng miệng khác nhau.', '49.000', 'tiramisu.jpg'),
(2, 26, 'Bouillabaisse', 'Bouillabaisse là món cá hầm Provençal truyền thống có nguồn gốc từ thành phố cảng Marseille. Hình thức bouillabaisse của tiếng Pháp và tiếng Anh xuất phát từ từ Provençal Occitan từ bolhabaissa, một hợp chất bao gồm hai động từ bolhir và abaissar.', '249.000', 'bouillabaisse.jpg'),
(2, 28, 'Crab soup', 'Súp cua là một món súp dễ chế biến với nguyên liệu chính là, thịt cua, trứng gà hoặc trứng cút ngoài ra còn có xương gà để làm nồi súp thêm vị ngọt và bỗ dưỡng hoặc hạt bắp. ', '249.000', 'crab_soup.jpg'),
(2, 31, 'Pistou soup', '\'Pistou\' hoặc nước sốt pistou , là một loại nước sốt lạnh Provençal làm từ tép tỏi , húng quế tươi và dầu ô liu . Nó có phần giống với pesto nước sốt Ligurian , mặc dù nó thiếu hạt thông, và đó là nền tảng của món súp ngon tuyệt này.', '199.000', 'pistou_soup.jpg'),
(3, 35, 'Caesar salad', 'Salad Caesar là một món salad xanh của rau diếp romaine và bánh mì nướng với nước cốt chanh, dầu ô liu, trứng, sốt Worrouershire, cá cơm, tỏi, mù tạt Dijon, phô mai Parmesan và hạt tiêu đen. ', '239.000', 'caesar_salad.jpg'),
(3, 39, 'Nicoise salad', 'Xa lát theo kiểu Nice là một món xà lát gồm cà chua, cá ngừ, trứng luộc già, ô liu vùng Nice và cá cơm biển, trộn với dầu giấm. Nó thường được bày vào đĩa, bát, có hoặc không có xà lách lót bên dưới. Cá ngừ có thể được nấu hoặc dùng loại đóng hộp.', '259.000', 'nicoise_salad.jpg'),
(3, 40, 'Seafood salad', 'Có một món salad hải sản truyền thống của Pháp rất được ưa chuộng, đặc biệt là trong những ngày Hè nóng nực, được làm từ mực, tôm, ngao, sò điệp, dầu olive và chanh.', '399.000', 'seafood_salad.jpg'),
(4, 43, 'Baked salmon with garlic', 'Cá hồi vốn đã thơm ngon béo ngậy nên chỉ cần một chút gia vị cũng đủ để món cá hồi hấp dẫn vạn người mê. Ướp gừng, tỏi, gia vị vào cá hồi rồi đem nướng ăn với đồ ăn kèm .', '399.000', 'baked_salmon_with_garlic.jpg'),
(4, 45, 'Cod asparagus', 'Cá tuyết với măng tây nướng kèm rau xanh và đỏ sao lưu cá mềm và chanh kéo mọi thứ lại với nhau. Bạn có thể sử dụng phô mai Parmesan nghiền thay vì Romano. ', '399.000', 'cod_asparagus.jpg'),
(4, 46, 'Grill salmon', 'Cá hồi nướng đậm vị hòa quyện với hương khói than sẽ hấp dẫn lắm luôn. Thịt cá hồi sau khi nướng có vị ngọt thanh, thịt cá chắc nhưng vẫn rất mềm, bạn có thể dùng cùng cơm trắng hay salad đều ngon cả.', '449.000', 'grill_salmon.jpg'),
(4, 51, 'Scallops', 'Với phần thịt trắng ngà, vị ngọt lại mát, sò điệp là món ăn rất tốt cho sức khỏe. Vì vậy các món ăn được làm từ sò điệp luôn rất được yêu thích. Sò điệp nướng mỡ hành có vị ngọt dai của sò điệp, hương thơm mỡ hành và cái thơm thơm, bùi bùi của đậu phộng rang.', '499.000', 'scallops.jpg'),
(5, 53, 'Fried chicken wings with honey', 'Cánh gà tẩm mật ong chiên là một tổ hợp của hương vị, cay nhẹ, béo, giòn tạo nên  miếng thịt chín thơm và mềm bên trong, giòn dai bên ngoài.', '49.000', 'chicken_wings.jpg'),
(5, 54, 'Roasted French duck breast', 'Ức vịt Pháp nướng với phần bên trong thịt vịt chín hồng đào, theo kiểu medium-rare, trong khi phần vỏ bên ngoài thì vàng rộm và giòn tan dùng kèm với sốt cam rượu vang.', '449.000', 'duck_breast.jpg'),
(5, 55, 'Steamed duck breast', 'Ức vịt hấp đem lại vị thơm ngọt rất thanh, thịt mềm chín vừa phải ăn kèm với sốt rượu vang đỏ.', '449.000', 'duck_breast_with_plum.jpg'),
(5, 56, 'La tourte aux pigeons', 'Bồ câu Pháp đút lò nhồi gan ngỗng bỏ lò ăn kèm với sốt và khoai tây nghiền, salad rocket.', '449.000', 'tourte_pigeons.jpg'),
(6, 57, 'Lemony salmon pasta with ricotta', 'Mì ống cá hồi với rau và phô mai ricotta', '199.000', 'lemony_salmon_pasta_with_ricotta.jpg'),
(6, 59, 'Pasta alfredo', 'Mì Ý với sốt alfredo', '149.000', 'pasta_alfredo.jpg'),
(6, 61, 'Pasta seafood', 'Mì Ý hải sản', '249.000', 'pasta_seafood.jpg'),
(9, 64, 'Beef hamburger', 'Hamburger bò', '149.000', 'burger_beef.jpg'),
(9, 65, 'Chicken hamburger', 'Hamburger gà', '239.000', 'burger_chicken.jpg'),
(9, 66, 'Chicken with onion hamburger', 'Hamburger gà với hành tây', '269.000', 'burger_chicken_onion.jpg'),
(9, 67, 'Pork hamburger', 'Hamburger thịt xông khói', '249.000', 'burger_pork.jpg'),
(8, 69, 'Blue', 'Phô mai blue 100 gram', '149.000', 'blue.jpg'),
(8, 71, 'Cheddar', 'Phô mai cheddar 100 gram', '139.000', 'cheddar.jpg'),
(8, 75, 'Feta', 'Phô mai feta 100 gram', '159.000', 'feta.jpg'),
(8, 77, 'Mozzarella', 'Phô mai mozzarella 100 gram', '199.000', 'mozzarella.jpg'),
(7, 80, 'Beef wellingtons', 'Thịt bò ba lớp gồm vỏ bột mì, pate và thịt bò', '349.000', 'beef_wellingtons.jpg'),
(7, 82, 'Braied lamb with tomatoes', 'Thịt cừu hầm với sốt cà chua', '349.000', 'braied_lamb_with_tomatoes.jpg'),
(7, 83, 'Grilled black Angus rib-eye', 'Lạc lưng bò Úc Angus nướng', '499.000', 'grilled_black_angus_ribeye.jpg'),
(7, 87, 'Choucroute garnie', 'Xúc xích, dưa cải Đức, các loại thịt muối và khoai', '600.000', 'choucroute_garnie.jpg'),
(2, 157, 'Vichyssoise', 'Vichyssoise là một món súp từ tỏi tây luộc, hành t', '289.000', 'vichyssoise.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slidetk`
--

CREATE TABLE `slidetk` (
  `idslidetk` int(4) NOT NULL,
  `motatk` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hinhanhtk` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `thoigian` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slidetk`
--

INSERT INTO `slidetk` (`idslidetk`, `motatk`, `hinhanhtk`, `thoigian`) VALUES
(1, 'Khuyến mãi bữa trưa', 'km_buaan.jpg', '2019-09-25'),
(2, 'Khuyến mãi mùa tựu trường', 'km_sinhvien.jpg', '2019-08-15'),
(3, 'Tuyển dụng', 'tuyendung.jpg', '2019-10-10'),
(4, 'Khuyến mãi lẩu phô mai', 'km_lau.jpg', '2019-09-02');

-- --------------------------------------------------------

--
-- Table structure for table `slidett`
--

CREATE TABLE `slidett` (
  `idslidett` int(4) NOT NULL,
  `motatt` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hinhanhtt` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `thoigian` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slidett`
--

INSERT INTO `slidett` (`idslidett`, `motatt`, `hinhanhtt`, `thoigian`) VALUES
(1, 'Tổ chức sự kiện', 'tsck.jpg', '2019-09-26'),
(2, 'Đặt bàn', 'datban.jpg', '2019-09-26'),
(3, 'Món mới', 'monmoi.jpg', '2019-09-17'),
(4, 'Khuyến mãi món mới', 'km_monmoi.jpg', '2019-10-10'),
(5, 'Khuyến mãi tháng 9', 'km_thang.jpg', '2019-09-01'),
(6, 'Khuyến mãi thành viên mới', 'km_tvmoi.jpg', '2019-07-15'),
(7, 'Khuyến mãi bữa trưa', 'km_buaan.jpg', '2019-09-05');

-- --------------------------------------------------------

--
-- Table structure for table `sukienthang`
--

CREATE TABLE `sukienthang` (
  `idsukien` int(11) NOT NULL,
  `tieudesk` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `noidungsk` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `tgbatdau` datetime NOT NULL,
  `tgketthuc` datetime NOT NULL,
  `hinhanh` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sukienthang`
--

INSERT INTO `sukienthang` (`idsukien`, `tieudesk`, `noidungsk`, `tgbatdau`, `tgketthuc`, `hinhanh`) VALUES
(1, 'French Fodds sinh nhật 27 tuổi.', 'French Fooods tổ chức một bữa tiệc kỷ niệm sinh nhật sang trọng miễn phí các loại rượu vang hảo hạng, kết hợp với ẩm thực Pháp tinh tế.', '2019-09-21 08:00:00', '2019-09-21 22:00:00', 'sinhnhat27.jpg'),
(2, 'Đêm tiệc mixology night', 'Đêm tiệc mixology night với những loại cocktail đặc biệt không giới hạn số ly bạn uống chỉ 299k/người.', '2019-08-13 19:00:00', '2019-08-15 22:00:00', 'demtiec.jpg'),
(3, 'Happy Valentine\'s Day 2019', 'French Foods tặng mỗi cặp tình nhân đặt bàn tại nhà hàng trong ngày 14/02/2019 một voucher trị giá 50k.', '2019-02-14 09:00:00', '2019-02-14 21:00:00', 'valentine.jpg'),
(4, 'Merry Christmas 2019', 'Nhân dịp giáng sinh French Foods tặng bạn một ly sangria 200ml khi tới dùng bữa tại nhà hàng.', '2019-12-25 08:00:00', '2019-12-26 20:00:00', 'noel.jpg'),
(5, 'Kết hôn tháng 9 siêu ưu đãi', 'Khách hàng đặt tiệc cưới trong tháng 9 tại French Foods sẽ được tặng ngay voucher 1 triệu đồng.', '2019-09-01 00:00:00', '2019-09-30 00:00:00', 'km_tieccuoi.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `idtaikhoan` int(6) NOT NULL,
  `taikhoan` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hoten` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `tichluy` int(10) NOT NULL,
  `trangthai` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`idtaikhoan`, `taikhoan`, `matkhau`, `hoten`, `sdt`, `email`, `tichluy`, `trangthai`) VALUES
(1, 'cream', 'f2d4476d94dec31a7abb00d82f7e98ac', 'Mai Thị Thùy Chi ', '0397516396', 'maithuy@gmail.com', 500, 1),
(2, 'hoangvu', 'e10adc3949ba59abbe56e057f20f883e', 'Hoàng Thái Vũ', '0328068094', 'hoangvu3600@gmail.com', 1000, 0),
(3, 'tien', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn Minh Tiến', '0264572877', 'tien@gmail.com', 1000, 0),
(4, 'khoa', 'e10adc3949ba59abbe56e057f20f883e', 'Hoàng Văn Khoa', '0264572866', 'khoa@gmail.com', 100, 1),
(7, 'hai', 'e10adc3949ba59abbe56e057f20f883e', 'Hoàng Ngọc Hải', '0264572888', 'kiencampha@gmail.com', 1000, 1),
(8, 'hoangviet', 'e10adc3949ba59abbe56e057f20f883e', 'Hoàng Văn Việt', '0936583447', 'hoangviet@gmail.com', 0, 0),
(10, 'phamly', 'e10adc3949ba59abbe56e057f20f883e', 'Phạm Thị Lý', '0983826139', 'phamly@gmail.com', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tochucsk`
--

CREATE TABLE `tochucsk` (
  `idtochucsk` int(6) NOT NULL,
  `idtaikhoan` int(5) NOT NULL,
  `hoten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `songuoi` int(4) NOT NULL,
  `ngaytochuc` date NOT NULL,
  `giotochuc` time NOT NULL,
  `ghichu` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `trangthai` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tochucsk`
--

INSERT INTO `tochucsk` (`idtochucsk`, `idtaikhoan`, `hoten`, `songuoi`, `ngaytochuc`, `giotochuc`, `ghichu`, `trangthai`) VALUES
(2, 2, 'Hoàng Thái Vũ', 12, '2019-10-18', '18:10:00', 'Bánh kem thật lớn', 0),
(3, 2, 'Hoàng Thái Vũ', 24, '2019-10-20', '19:00:00', 'Nhạc du dương', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tuyendung`
--

CREATE TABLE `tuyendung` (
  `idtuyendung` int(6) NOT NULL,
  `hoten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gioitinh` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `diachi` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `vitri` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tuyendung`
--

INSERT INTO `tuyendung` (`idtuyendung`, `hoten`, `gioitinh`, `ngaysinh`, `diachi`, `vitri`, `sdt`, `email`) VALUES
(1, 'Nguyễn Hoàng Nam', 'Nam', '2000-06-05', 'Quảng Ninh', 'Nhân viên phục vụ', '0264572864', 'nam@gmail.com'),
(2, 'Nguyễn Minh Tiến', 'Nam', '2029-10-15', 'GDFHGJHKJ', 'Nhân viên thu ngân', '0264572877', 'maithuychichi@gmail.com'),
(3, 'Nguyễn Minh Tiến', 'Nam', '2019-10-18', 'uytrew', 'Nhân viên phục vụ', '0264572866', 'maithuychichi@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indexes for table `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`idbaiviet`),
  ADD KEY `nguoiviet` (`nguoiviet`) USING BTREE;

--
-- Indexes for table `combo`
--
ALTER TABLE `combo`
  ADD PRIMARY KEY (`idcombo`);

--
-- Indexes for table `datban`
--
ALTER TABLE `datban`
  ADD PRIMARY KEY (`iddatban`),
  ADD KEY `nguoidat` (`idtaikhoan`) USING BTREE;

--
-- Indexes for table `douong`
--
ALTER TABLE `douong`
  ADD PRIMARY KEY (`iddouong`),
  ADD UNIQUE KEY `a` (`idloaidouong`,`iddouong`);

--
-- Indexes for table `khnhanxet`
--
ALTER TABLE `khnhanxet`
  ADD PRIMARY KEY (`idnhanxet`);

--
-- Indexes for table `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`idkhuyenmai`),
  ADD KEY `nguoiviet` (`nguoivietkm`) USING BTREE;

--
-- Indexes for table `loaidouong`
--
ALTER TABLE `loaidouong`
  ADD PRIMARY KEY (`idloaidouong`);

--
-- Indexes for table `loaimonan`
--
ALTER TABLE `loaimonan`
  ADD PRIMARY KEY (`idloaimonan`);

--
-- Indexes for table `monan`
--
ALTER TABLE `monan`
  ADD PRIMARY KEY (`idmonan`),
  ADD UNIQUE KEY `a` (`idloaimonan`,`idmonan`);

--
-- Indexes for table `slidetk`
--
ALTER TABLE `slidetk`
  ADD PRIMARY KEY (`idslidetk`);

--
-- Indexes for table `slidett`
--
ALTER TABLE `slidett`
  ADD PRIMARY KEY (`idslidett`);

--
-- Indexes for table `sukienthang`
--
ALTER TABLE `sukienthang`
  ADD PRIMARY KEY (`idsukien`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`idtaikhoan`),
  ADD UNIQUE KEY `tk` (`taikhoan`),
  ADD UNIQUE KEY `haha` (`hoten`);

--
-- Indexes for table `tochucsk`
--
ALTER TABLE `tochucsk`
  ADD PRIMARY KEY (`idtochucsk`),
  ADD KEY `hoten` (`idtaikhoan`) USING BTREE;

--
-- Indexes for table `tuyendung`
--
ALTER TABLE `tuyendung`
  ADD PRIMARY KEY (`idtuyendung`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `idbaiviet` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `combo`
--
ALTER TABLE `combo`
  MODIFY `idcombo` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `datban`
--
ALTER TABLE `datban`
  MODIFY `iddatban` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `douong`
--
ALTER TABLE `douong`
  MODIFY `iddouong` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT for table `khnhanxet`
--
ALTER TABLE `khnhanxet`
  MODIFY `idnhanxet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `idkhuyenmai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `loaidouong`
--
ALTER TABLE `loaidouong`
  MODIFY `idloaidouong` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `loaimonan`
--
ALTER TABLE `loaimonan`
  MODIFY `idloaimonan` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `monan`
--
ALTER TABLE `monan`
  MODIFY `idmonan` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT for table `slidetk`
--
ALTER TABLE `slidetk`
  MODIFY `idslidetk` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `slidett`
--
ALTER TABLE `slidett`
  MODIFY `idslidett` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sukienthang`
--
ALTER TABLE `sukienthang`
  MODIFY `idsukien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `idtaikhoan` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tochucsk`
--
ALTER TABLE `tochucsk`
  MODIFY `idtochucsk` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tuyendung`
--
ALTER TABLE `tuyendung`
  MODIFY `idtuyendung` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `baiviet`
--
ALTER TABLE `baiviet`
  ADD CONSTRAINT `baiviet_ibfk_1` FOREIGN KEY (`nguoiviet`) REFERENCES `taikhoan` (`taikhoan`);

--
-- Constraints for table `datban`
--
ALTER TABLE `datban`
  ADD CONSTRAINT `datban_ibfk_1` FOREIGN KEY (`idtaikhoan`) REFERENCES `taikhoan` (`idtaikhoan`);

--
-- Constraints for table `douong`
--
ALTER TABLE `douong`
  ADD CONSTRAINT `douong_ibfk_1` FOREIGN KEY (`idloaidouong`) REFERENCES `loaidouong` (`idloaidouong`);

--
-- Constraints for table `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD CONSTRAINT `khuyenmai_ibfk_1` FOREIGN KEY (`nguoivietkm`) REFERENCES `taikhoan` (`taikhoan`);

--
-- Constraints for table `monan`
--
ALTER TABLE `monan`
  ADD CONSTRAINT `monan_ibfk_1` FOREIGN KEY (`idloaimonan`) REFERENCES `loaimonan` (`idloaimonan`);

--
-- Constraints for table `tochucsk`
--
ALTER TABLE `tochucsk`
  ADD CONSTRAINT `tochucsk_ibfk_1` FOREIGN KEY (`idtaikhoan`) REFERENCES `taikhoan` (`idtaikhoan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
