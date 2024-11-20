-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2024 at 12:13 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agh_validations`
--

-- --------------------------------------------------------

--
-- Table structure for table `ranks`
--

CREATE DATABASE IF NOT EXISTS agh_validations;

USE agh_validations;

CREATE TABLE `ranks` (
  `id` int(11) NOT NULL,
  `rank_id` varchar(5) NOT NULL,
  `rank_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ranks`
--

INSERT INTO `ranks` (`id`, `rank_id`, `rank_name`) VALUES
(1, 'CHN', 'Community Health Nurse'),
(2, 'EN', 'Enrolled Nurse'),
(3, 'MO', 'Midwifery Officer'),
(4, 'NO', 'Nurse Officer'),
(5, 'PCHN', 'Principal Community Health Nurse'),
(6, 'PEN', 'Principal Enrolled Nurse'),
(7, 'PNO', 'Principal Nurse Officer'),
(8, 'SCHN', 'Senior Community Health Nurse'),
(9, 'SEN', 'Senior Enrolled Nurse'),
(10, 'SM', 'Staff Midwife'),
(11, 'SMO', 'Senior Midwifery Officer'),
(12, 'SN', 'Staff Nurse'),
(13, 'SNO', 'Senior Nurse Office'),
(14, 'SSM', 'Senior Staff Midwife'),
(15, 'SSN', 'Senior Staff Nurse'),
(16, 'DCMO', 'Deputy Chief Medical Officer'),
(17, 'SMO', 'Senior Medical Officer'),
(18, 'MEDO', 'Medical Officer'),
(19, 'HA', 'Hospital Administrator'),
(20, 'STG', 'Stenographer'),
(21, 'DCA', 'Deputy Chief Accountant'),
(22, 'SA', 'Senior Accountant'),
(23, 'SFO', 'Senior Finance Officer'),
(24, 'SP', 'Specialist Pharmacist'),
(25, 'PP', 'Principal Pharmacist'),
(26, 'PBS', 'Principal Biomedical Scientist'),
(27, 'BS', 'Biomedical Scientist'),
(28, 'SLA', 'Senior Laboratory Assistant'),
(29, 'LA', 'Laboratory Assistant'),
(30, 'STO', 'Senior Technical Officer'),
(31, 'DCPA', 'Deputy Chief Physician Assistant'),
(32, 'PPA', 'Principal Physician Assistant'),
(33, 'SPA', 'Senior Physician Assistant'),
(34, 'SCRA', 'Senior Certified Registered Anaesthetist'),
(35, 'SSO', 'Senior Supply Officer'),
(36, 'SPHO', 'Senior Public Health Officer'),
(37, 'NTO', 'Nutrition Technical Officer'),
(38, 'PBA', 'Principal Biostatistics Assistant'),
(39, 'BO', 'Biostatistics Officer'),
(40, 'SDT', 'Senior Dental Technician'),
(41, 'SCS', 'Staff Cook Supervisor'),
(42, 'SMA', 'Senior Mortuary Attendant'),
(43, 'MA', 'Mortuary Attendant'),
(44, 'SD', 'Senior Driver'),
(45, 'PT', 'Pharmacy Technician');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `staff_id` varchar(50) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `oname` varchar(255) DEFAULT NULL,
  `gender` varchar(1) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `grade` varchar(10) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `unit` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `staff_id`, `fname`, `lname`, `oname`, `gender`, `phone`, `grade`, `image`, `unit`) VALUES
(1, '689646', 'Abigail', 'Aboraborah', NULL, 'F', '0246337519', 'NO', NULL, 'EYE'),
(2, '1340010', 'Abigail', 'Asiamah', NULL, 'F', '558690530', 'SNO', NULL, 'A&E'),
(3, '1338778', 'Abigail', 'Akonu', 'Bruce', 'F', '0246958484', 'SN', NULL, 'OPD'),
(4, '1361381', 'Abigail', 'Norman', NULL, 'F', '0249497570', 'SN', NULL, 'MW'),
(5, '1397344', 'Abigail', 'Asamoah', NULL, 'F', '0547771890', 'SN', NULL, 'A&E'),
(6, '1398841', 'Abigail', 'Kilson', NULL, 'F', '0549415885', 'SM', NULL, 'NICU'),
(7, '1463557', 'Abigail', 'Ofoe', NULL, 'F', '0550601172', 'SM', NULL, 'RECV'),
(8, '895811', 'Abigail', 'Torto', 'Torshie', 'F', '0241296770', 'PEN', NULL, 'FW'),
(9, '1461158', 'Abubakar', 'Mills', 'Annas', 'M', '0553570325', 'MO', NULL, 'MW'),
(10, '7616', 'Adam', 'Yakubu', NULL, 'M', NULL, 'DCA', NULL, 'ACC'),
(11, '1501477', 'Adriana', 'Woode', NULL, 'F', '0547349472', 'EN', NULL, 'MW'),
(12, '1396431', 'Agnes', 'Bilson', NULL, 'F', '0543508841', 'SM', NULL, 'ANC'),
(13, '978089', 'Agyemang-Duah', 'Lawrencia ', NULL, 'F', '0546329003', 'SSM', NULL, 'RECV'),
(14, '668908', 'Akyen', 'Isaac', NULL, 'M', NULL, 'SPA', NULL, 'OPD'),
(15, '1374883', 'Alberta', 'Yalley', NULL, 'F', '0542899008', 'SM', NULL, 'ANAES'),
(16, '1511179', 'Alberta', 'Blankson', NULL, 'F', '0545074129', 'EN', NULL, 'A&E'),
(17, '1285960', 'Alice', 'Kufah', 'Maa', 'F', '0249394333', 'SSN', NULL, 'PAEDICS'),
(18, '56864', 'Alice', 'Armoh', NULL, 'F', '0204443046', 'MO', NULL, 'RECV'),
(19, '1451762', 'Amy', 'Hughes-Lartey', NULL, 'F', '0244145264', 'SCHN', NULL, 'RCH'),
(20, '1448119', 'Anastasia', 'Armoo', NULL, 'F', '0543656263', 'SEN', NULL, 'VCT'),
(22, '1466836', 'Andrews', 'Baha', NULL, 'M', '0552988234', 'MO', NULL, 'A&E'),
(23, '1000892', 'Angela', 'Kyei Baffour', NULL, 'F', '0247948727', 'SSM', NULL, 'MAT'),
(24, '1102223', 'Angela', 'Gyakye', NULL, 'F', '0248026326', 'SEN', NULL, 'THEATRE'),
(25, '1336326', 'Angelina', 'Obeng', NULL, 'F', '0547499066', 'SN', NULL, 'FW'),
(26, '665800', 'Anita', 'Ansah', 'Sagoe', 'F', '0242321384', 'SNTO', NULL, 'WELLNESS'),
(27, '665904', 'Anita', 'Sarkodie', NULL, 'F', '0243525642', 'SSN ', NULL, 'SL'),
(28, '1451759', 'Anita', 'Donkor', NULL, 'F', '0242433451', 'SEN', NULL, 'PAEDICS'),
(29, '1598815', 'Anita', 'Ennison', 'Pascaline', 'F', '0554148637', 'EN', NULL, 'TB'),
(30, '535154', 'Anna', 'Kaku', 'Bernice', 'F', '0243142404', 'MO', NULL, 'ANC'),
(31, '1452089', 'Ruth', 'Asamoah', NULL, 'F', '0541547678', 'SN', NULL, 'RECV'),
(32, '1338771', 'Azara', 'Abubakari', NULL, 'M', '0249472962', 'SN', NULL, 'OPD'),
(33, '1341224', 'Beatrice', 'Opoku', NULL, 'F', '0248553684', 'SN', NULL, 'RCH'),
(34, '843345', 'Beatrice', 'Ansah-Annam', NULL, 'F', '0549598577', 'SSM', NULL, 'ANC'),
(35, '1396397', 'Belinda', 'Ackon', 'Eshirow', 'F', '0542701721', 'SM', NULL, 'RECV'),
(36, '1501459', 'Benedicta', 'Aikins', 'Egyir', 'F', '0241970466', 'EN', NULL, 'FW'),
(37, '1463600', 'Bernice', 'Antwi', 'Saama', 'F', '0544278566', 'SN', NULL, 'OPD'),
(39, '1448171', 'Betty', 'Baah', NULL, 'F', '0246178112', 'SCHN', NULL, 'OPD'),
(40, '730994', 'Rezuana', 'Bilal', 'B', 'F', '0244715971', 'NO', NULL, 'RECV'),
(41, '1501462', 'Bimpoma', 'Lovia', 'Oheneba', 'F', '0249590865', 'EN', NULL, 'MW'),
(42, '1321983', 'Bismark', 'Owusu', 'Okyere', 'M', '0542512948', 'SSN', NULL, 'A&E'),
(44, '1338757', 'Brenda', 'Sosu-Honu', NULL, 'F', '0546428099', 'SM', NULL, 'MAT'),
(45, '568490', 'Bridget', 'Darkwa', 'Ama', 'F', '0242084161', 'MO', NULL, 'MAT'),
(46, '731848', 'Cecilia', 'Eshun', NULL, 'F', '0245674215', 'SSN', NULL, 'THEATRE'),
(47, '1336211', 'Cecilia', 'Ackon', NULL, 'F', '054157464', 'SN', NULL, 'NICU'),
(48, '1308862', 'Celestial', 'Warden', 'Betty', 'F', '0506203058', 'SCHN', NULL, 'OPD'),
(49, '1098481', 'Charity', 'Asante', NULL, 'F', '0249247276', 'SSN', NULL, 'SL'),
(50, '1321925', 'Charles', 'Azami', NULL, 'M', '0245364911', 'SMA', NULL, 'MORT'),
(51, '609000', 'Christabel', 'Amonoo', NULL, 'F', '0249812645', 'SNO', NULL, 'ENT'),
(53, '976320', 'Clara', 'Mensah', 'Yaa', 'F', '0542880428', 'SEN', NULL, 'FW'),
(54, '1269983', 'Comfort', 'Akakpo', 'Akorfa', 'F', '0246161614', 'SSN', NULL, 'PAEDICS'),
(55, '1396611', 'Comfort', 'Oppong', NULL, 'F', '0540986514', 'SM', NULL, 'MAT'),
(57, '894613', 'Deborah', 'Rockson', NULL, 'F', '0241310651', 'PEN', NULL, 'D&I'),
(58, '724170', 'Dede', 'Osei', 'Amoanimaa', 'F', '0240478355', 'SSM', NULL, 'ANC'),
(59, '689294', 'Diana', 'Yankah', 'Esi Kwakyewaa', 'F', '0541787608', 'SSN', NULL, 'PA'),
(60, '1281235', 'Diana', 'Issaka', NULL, 'F', '0547395912', 'SSN', NULL, 'CDU'),
(61, '1451764', 'Diana', 'Bowoda', NULL, 'F', '0240929812', 'SCHN', NULL, 'RCH'),
(62, '996577', 'Dinah', 'Asare', NULL, 'F', NULL, 'SPA', NULL, 'PA'),
(63, '1274057', 'Dora', 'Adama', NULL, 'F', '0554600313', 'SSM', NULL, 'THEATRE'),
(64, '911695', 'Dorcas', 'Buabin', 'Mensah', 'F', '0559831423', 'SA', NULL, 'ACC'),
(65, '797858', 'Doris', 'Eshun', NULL, 'F', '0206170394', 'NO', NULL, 'ENT'),
(66, '1334460', 'Doris', 'Quaicoe', NULL, 'F', '0578170489', 'SN', NULL, 'MW'),
(67, '1292088', 'Ebenezer', 'Adjei', 'Kofi', 'M', '0247082455', 'MO', NULL, 'MEDO'),
(68, '1281387', 'Ebenezer', 'Opoku', NULL, 'M', '0541415468', 'SSN', NULL, 'A&E'),
(69, '1338776', 'Edith', 'Antwi', NULL, 'F', '0547464501', 'SM', NULL, 'MAT'),
(70, '697108', 'Efua', 'Addo', 'Dansowa', 'F', '0249533082', 'MO', NULL, 'ANC'),
(71, '516095', 'Elizabeth', 'Annang', 'Kai', 'F', '0246699313', 'SNO', NULL, 'MH'),
(72, '726728', 'Elizabeth', 'Eshun', 'Aba', 'F', '0543301774', 'MO', NULL, 'ANC'),
(73, '788191', 'Elizabeth', 'Appiah', 'Adu', 'F', '0249292940', 'MO', NULL, 'WELLNESS'),
(74, '1470352', 'Elizabeth', 'Dudome', 'Mawuse', 'F', '0540226270', 'EN', NULL, 'FW'),
(75, '1100835', 'Elizabeth', 'Takyiwaa', 'Osei', 'F', '0240803416', 'EN', NULL, 'FW'),
(76, '1339051', 'Elizabeth', 'Plange', NULL, 'F', '0248273022', 'SCHN', NULL, 'RCH'),
(77, '1408563', 'Ellen', 'Twumasi', NULL, 'F', '0249948017', 'SN', NULL, 'A&E'),
(78, '1338775', 'Ellen', 'Aboagye ', 'Asumangba', 'F', '0547755234', 'SM', NULL, 'ENT'),
(79, '660332', 'Ellen', 'Aboagye', 'Yeboaa', 'F', '0241536316', 'PCHN', NULL, 'VCT'),
(80, '1505342', 'Ellen', 'Appiah -Kubi', NULL, 'F', '0546010030', 'CHN', NULL, 'CDU'),
(81, '1196500', 'Emelia', 'Kpegbah', 'Emefa', 'F', NULL, 'SLA', NULL, 'SL'),
(82, '997997', 'Emelia', 'Nyanney', 'Winslow', 'F', '0247272926', 'SSN', NULL, 'SL'),
(83, '68009', 'Emmanuel', 'Arthur Assan', NULL, 'M', NULL, 'PBS', NULL, 'LAB'),
(84, '775008', 'Emmanuel', 'Amoah', 'Larbi', 'M', NULL, 'PPA', NULL, NULL),
(85, '838917', 'Enock', 'Ohemeng', NULL, 'M', '0542469857', 'NO', NULL, 'MW'),
(86, '843363', 'Ernestina', 'Appiah', NULL, 'F', '0247759123', 'SSM', NULL, 'MAT'),
(87, '996552', 'Ernestina', 'Blay', NULL, 'F', '0540834314', 'SEN', NULL, 'THEATRE'),
(88, '1317822', 'Esther', 'Ekey', NULL, 'F', '0542797448', 'SSO', NULL, 'GSTORES'),
(90, '763649', 'Esther', 'Arkoh', NULL, 'F', ',0242862371', 'SSM', NULL, 'MAT'),
(91, '1598820', 'Esther', 'Asante', 'Serwaa', 'F', '0268886403', 'EN', NULL, 'D&I'),
(93, '977893', 'Eunice', 'Cobbinah', NULL, 'F', '0540595660', 'SSM', NULL, 'MAT'),
(94, '1001376', 'Evelyn', 'Krakan-Adoh', 'Aku', 'F', NULL, 'PBA', NULL, 'HI'),
(95, '977878', 'Evelyn', 'Amoah', 'Adwoba', 'F', '0547359517', 'SSM', NULL, 'MAT'),
(96, '1394807', 'Evelyn', 'Eshun', 'Jane', 'F', '0547920084', 'SM', NULL, 'MAT'),
(97, '896874', 'Ewura', 'Erskine', 'Abena', 'F', '0240598459', 'PEN', NULL, 'FW'),
(98, '1541148', 'Fati', 'Amadu', NULL, 'F', '0240093875', 'NO', NULL, 'PAEDICS'),
(99, '1336273', 'Faustina', 'Arthur', 'Sarsah', 'F', '0542651807', 'SM', NULL, 'PAEDICS'),
(100, '1511183', 'Fawzia', 'Ibrahim', NULL, 'F', '0243398622', 'EN', NULL, 'MW'),
(101, '1375439', 'Felicia', 'Addei', NULL, 'F', '0541892992', 'SN', NULL, 'NICU'),
(102, '1470385', 'Francisca', 'Amoah', 'Otoo', 'F', '0545330215', 'NO', NULL, 'FW'),
(103, '725645', 'Francisca', 'Arthur', NULL, 'F', '0241697232', 'SSN ', NULL, 'MH'),
(104, '1367637', 'Francisca', 'Aku', 'Orwell', 'F', '0558177046', 'SN', NULL, 'FW'),
(105, '894620', 'Francisca', 'Amoah', 'N.A.', 'F', '024519282', 'PEN', NULL, 'A&E'),
(106, '1448114', 'Francisca', 'Cudjoe', NULL, 'F', '0541811891', 'SEN', NULL, 'A&E'),
(108, '895682', 'Fuseina', 'Tetteh', NULL, 'F', '0246093812', 'PEN', NULL, 'MW'),
(109, '605832', 'Gabriel', 'Sam', NULL, 'M', NULL, 'SMO', NULL, 'MEDO'),
(110, '743718', 'Ganiyu', 'Habib', NULL, 'M', NULL, 'HA', NULL, 'ADM'),
(111, '602303', 'George', 'Hagan', 'Godfred', 'M', NULL, 'DCMO', NULL, 'MEDO'),
(114, '1396594', 'Georgina', 'Odamtten', 'Tsotsoo', 'F', '0541467836', 'SM', NULL, 'THEATRE'),
(115, '899382', 'Georgina', 'Nyamson', NULL, 'F', '0244642953', 'PEN', NULL, 'OPD'),
(116, '999391', 'Gertrude', 'Aikins', NULL, 'F', '0249372852', 'SSM', NULL, 'NICU'),
(117, '899397', 'Gertrude', 'Appiah', NULL, 'F', '0546401466', 'SEN', NULL, 'D&I'),
(118, '1598823', 'Gertrude', 'Addo', NULL, 'F', '0543259279', 'EN', NULL, 'MW'),
(119, '1000756', 'Gifty', 'Idan', NULL, 'F', '0543196086', 'SSN', NULL, 'THEATRE'),
(120, '512940', 'Gifty', 'Cobbinah', NULL, 'F', '0542762396', 'MO', NULL, 'SL'),
(121, '759936', 'Gifty', 'Quansah', NULL, 'F', '0240475801', 'SSM', NULL, 'MAT'),
(122, '1364934', 'Gifty', 'Eshun', NULL, 'F', '0244450508', 'SM', NULL, 'EYE'),
(123, '1451763', 'Gifty', 'Amankrah', 'Wiredu', 'F', '0243654887', 'SCHN', NULL, 'RCH'),
(126, '1501451', 'Godfred', 'Twumasi', NULL, 'M', '0598325990', 'EN', NULL, 'CDU'),
(127, '1308905', 'Grace', 'Nkrumah', NULL, 'F', '0540794821', 'SEN', NULL, 'MW'),
(128, '1598984', 'Grace', 'Donkor', NULL, 'F', '0546289264', 'EN', NULL, 'PAEDICS'),
(129, '1254864', 'Hannah', 'koomson', 'Esi', 'F', '0249052864', 'SSM', NULL, 'MAT'),
(131, '762472', 'Hawa', 'Musah', NULL, 'F', '0249102702', 'SSM', NULL, 'MAT'),
(132, '602408', 'Helen', 'Opoku', NULL, 'F', '0245895522', 'SEN', NULL, 'THEATRE'),
(133, '1523631', 'Helena', 'Koomson', NULL, 'F', '0247856334', 'LA', NULL, 'LAB'),
(134, '1448166', 'Hellen', 'Attor', NULL, 'F', '0249959607', 'SEN', NULL, 'FW'),
(135, '1308921', 'Henrietta', 'Ewiah', NULL, 'F', '0573487308', 'SCHN', NULL, 'RCH'),
(136, '983834', 'Ida', 'Sampede', NULL, 'F', '0540666420', 'SEN', NULL, 'THEATRE'),
(137, '687605', 'Inusah', 'Hawa', NULL, 'F', '0244134245', 'SSM', NULL, 'MAT'),
(138, '905554', 'Irene', 'koomson', NULL, 'F', '0248418755', 'SSM', NULL, 'ANC'),
(139, '156194', 'Isaac', 'Yalley', 'K', 'M', '0542871056', 'SCRA', NULL, 'ANAES'),
(140, '45470', 'Isaac', 'Mensah', NULL, 'M', '0242544429', 'PBA', NULL, 'HI'),
(141, '1501237', 'Isabella', 'Owusu', 'Oforiwaa', 'F', '0549649487', 'CHN', NULL, 'RCH'),
(142, '1470392', 'Issah', 'Ahmed', NULL, 'F', '0270908899', 'EN', NULL, 'A&E'),
(143, '902985', 'James', 'Akumah', 'Elorm', 'M', '0242289212', 'BA', NULL, 'HI'),
(144, '976238', 'Janet', 'Baidoo', NULL, 'F', '0540901152', 'SEN', NULL, 'PAEDICS'),
(145, '1501474', 'Janet', 'Appiah', 'Damoah', 'F', '0553054985', 'EN', NULL, 'RECV'),
(146, '1368658', 'Jemima', 'Essien', 'Bombo', 'F', '0248137643', 'LA', NULL, 'LAB'),
(147, '515324', 'Jennifer', 'Arkhurst', NULL, 'F', '0246804924', 'PNO', NULL, 'THEATRE'),
(148, '797398', 'Jerome', 'Eshun', NULL, NULL, '0249454952', NULL, NULL, 'ANAES'),
(149, '1202937', 'Johnson', 'Agbemafle', NULL, 'M', '0242867703', 'SMO', NULL, 'MEDO'),
(150, '633565', 'Joseph', 'Robinson', NULL, 'M', '0275481674', 'SA', NULL, 'ACC'),
(151, '1334525', 'Josephine', 'Amanfo', NULL, 'F', '0243215888', 'SSN', NULL, 'PAEDICS'),
(153, '1366987', 'Joyce', 'Odei', NULL, 'F', NULL, 'STO', NULL, 'LAB'),
(154, '1292867', 'Joyce', 'Adjei', NULL, 'F', '0542491006', 'SSN', NULL, 'RCH'),
(155, '985232', 'Joyce', 'Eshun', NULL, 'F', '0547851424', 'PEN', NULL, 'PAEDICS'),
(156, '608701', 'Judith', 'Wallace', NULL, 'F', '0242657177', 'NO', NULL, 'SL'),
(158, '1297374', 'Juliana', 'Kontor', 'Kyerewaa', 'F', '0209255701', 'SSM', NULL, 'MAT'),
(159, '732497', 'Juliet', 'Ocran', NULL, 'F', '0516053725', 'SM', NULL, 'THEATRE'),
(160, '1341043', 'Justice', 'Tetteh', 'Freeman', 'M', '0244969983', 'MO', NULL, 'MEDO'),
(161, '807236', 'Justice', 'Arkoh', 'Jnr', 'M', '0546261487', 'SSN', NULL, 'ANAES'),
(162, '1302539', 'Justina', 'Dzakpasu', 'Elorm', 'F', '0246572104', 'SSM', NULL, 'MAT'),
(163, '1413406', 'Kevin', 'Otoo', NULL, 'M', '0545024456', 'SNO', NULL, 'A&E'),
(164, '1523542', 'Khadijah', 'Eduafo', 'Adam', 'M', '0541079093', 'LA', NULL, 'LAB'),
(165, '1598810', 'Khadijah', 'Ibrahim', NULL, 'F', '0559628184', 'EN', NULL, 'MW'),
(166, '1461180', 'Kofi', 'Ayensu', NULL, 'M', '0559414100', 'MO', NULL, 'MEDO'),
(167, '1321390', 'Kofi', 'Turkson', NULL, 'M', NULL, 'SMA', NULL, 'MOG'),
(168, '1480798', 'Kofi', 'Anaab', 'Apai', 'M', '0593094596', 'MA', NULL, 'MOG'),
(169, '731929', 'Latif', 'Mahama', NULL, 'M', '0246938691', 'SSN', NULL, 'SL'),
(170, '976314', 'Lawrencia', 'Abrokwaa', NULL, 'F', '0241538339', 'SSN', NULL, 'CDU'),
(171, '1269987', 'Lawrencia', 'Baiden', NULL, 'F', '0546310798', 'SSN', NULL, 'FW'),
(172, '1395710', 'Lawrencia', 'Quansah', NULL, 'F', '0556515929', 'SM', NULL, 'MAT'),
(173, '1270097', 'Leticia', 'Kwofie', NULL, 'F', '0541285669', 'SSN', NULL, 'NUT'),
(174, '997801', 'Leticia', 'Adjei', 'Animah', 'F', '0546401650', 'SSM', NULL, 'MAT'),
(175, '1452577', 'Leticia', 'Aidoo', NULL, 'F', '0549838163', 'EN', NULL, 'MW'),
(176, '1413379', 'Linda', 'Arhin ', 'Annan', 'F', '0543550620', 'SNO', NULL, 'THEATRE'),
(177, '689183', 'Linda', 'Amponsah', NULL, 'F', '0245684692', 'SEN', NULL, 'CDU'),
(178, '1396698', 'Loretta', 'Botsi', NULL, 'F', '0540898097', 'SN', NULL, 'A&E'),
(179, '797432', 'Lucy', 'Nkrumah', NULL, 'F', '0247794768', 'MO ', NULL, 'ANC'),
(180, '732255', 'Lucy', 'Duah', 'Serwaa', 'F', '0248748474', 'PEN', '', 'OPD'),
(181, '1414139', 'Lydia', 'Arhin ', 'Yaa', 'F', '0547918421', 'SNO', NULL, 'MW'),
(182, '1265091', 'Lydia', 'Asante', NULL, 'F', '548503578', 'SN', NULL, 'RCH'),
(183, '1232278', 'Mabel', 'Agyei', NULL, 'F', '0547768161', 'SSN', NULL, 'A&E'),
(184, '1264876', 'Mabel', 'Mbeah', NULL, 'F', '0240907172', 'SSN', NULL, 'MW'),
(185, '1272093', 'Mabel', 'Mensah', NULL, 'F', '0249491341', 'SSM', NULL, 'MAT'),
(186, '568839', 'Margaret', 'Ewusie', NULL, 'F', '0506771222', 'SSM', NULL, 'RECV'),
(187, '977980', 'Mariam', 'Amadu', NULL, 'F', '0245135593', 'SSM', NULL, 'MAT'),
(188, '1501251', 'Mariam', 'Aminu', NULL, 'F', '0553154694', 'CHN', NULL, 'RCH'),
(189, '1415829', 'Martha', 'Buadii', NULL, 'F', '0543508842', 'SN', NULL, 'NICU'),
(190, '669327', 'Martha', 'Okine', NULL, 'F', '0548057278', 'MO', NULL, 'WELLNESS'),
(191, '700970', 'Martha', 'Nimako', NULL, 'F', '0243082245', 'MO', NULL, 'MAT'),
(192, '543839', 'Mary', 'Obeng', NULL, 'F', NULL, 'PPA', NULL, 'PA'),
(193, '1273338', 'Mary', 'Ntim', NULL, 'F', '0246492784', 'SN', NULL, 'RCH'),
(194, '568552', 'Mary', 'Seebo', NULL, 'F', '0242085886', 'MO', NULL, 'MAT'),
(195, '730445', 'Mary', 'Anaah', 'Zireh', 'F', '0248484774', ' MO', NULL, 'MAT'),
(196, '1501257', 'Mary', 'Mensah', NULL, 'F', '0545366633', 'CHN', NULL, 'RCH'),
(197, '1265103', 'Matilda', 'Oppong', NULL, 'F', '0573696683', 'SSN', NULL, 'FW'),
(198, '878854', 'Mavis', 'Yenli', NULL, 'F', NULL, 'SFO', NULL, 'ACC'),
(199, '621173', 'Mavis', 'Oppong', NULL, 'F', '0551694284', 'SNO', NULL, 'MW'),
(200, '1340498', 'Mavis', 'Gyabeng', NULL, 'F', '0240644778', 'SN', NULL, 'OPD'),
(201, '734639', 'Mavis', 'Konadu', NULL, 'F', '0246845591', 'SSM', NULL, 'MAT'),
(202, '759573', 'Mavis', 'Antor', NULL, 'F', '0249948816', 'SM', NULL, 'MAT'),
(203, '660433', 'Mercy', 'Adams', NULL, 'F', '0247784819', 'MO', NULL, 'MAT'),
(204, '1501447', 'Mercy', 'Antwi-Gyan', NULL, 'F', '0547543245', 'EN', NULL, 'OPD'),
(205, '775446', 'Mildred', 'Ayim', NULL, 'F', '0241535921', 'SSM', NULL, 'NICU'),
(206, '902751', 'Millicent', 'Mireku', 'Mansa', 'F', '0240620950', 'SSM', NULL, 'PAEDICS'),
(207, '803144', 'Millicent', 'Boateng', 'Addae', 'F', '0245530500', 'PEN', NULL, 'CDU'),
(208, '1331813', 'Monica', 'Adubea', NULL, 'F', '0247857626', 'SN', NULL, 'THEATRE'),
(209, '1337498', 'Nana', 'Bosuo', 'Ama', 'F', '0547428335', 'SN', NULL, 'OPD'),
(210, '1002270', 'Nancy', 'Nabie', 'Johnson', 'F', '0546126649', 'STG', NULL, 'ADM'),
(211, '732339', 'Nancy', 'Nkansah', 'Awurakua', 'F', NULL, 'SP', NULL, 'PHARM'),
(212, '1284327', 'Nancy', 'Sam', 'Ketuwah', 'F', '0554593332', 'SSN', NULL, 'OPD'),
(213, '774232', 'Nancy', 'Agyeibea', NULL, 'F', '0246527255', 'SSM', NULL, 'SL'),
(214, '1397737', 'Nancy', 'Enyam', NULL, 'F', '0554223238', 'SM', NULL, 'ANC'),
(215, '1313343', 'Nancy', 'Imbeah', NULL, 'F', '0242861598', 'SEN', NULL, 'CDU'),
(216, '102800', 'Naomi', 'Odoku', 'Aba', 'F', '0244502251', 'DCNO', NULL, 'NURSE-ADM'),
(218, '1448112', 'Olivia', 'Donkoh', 'Love', 'F', '0544766434', 'SEN', NULL, 'CDU'),
(219, '32930', 'Osei-Agyare', 'Freda', NULL, 'F', '0244801516', 'SMO', NULL, 'MAT'),
(220, '1396410', 'Patience', 'Otoo', 'Araba Afedziwa', 'F', '0547290829', 'SM', NULL, 'MAT'),
(221, '1448098', 'Patience', 'Tagbata', NULL, 'F', '0240620950', 'SEN', NULL, 'PAEDICS'),
(222, '1598805', 'Patience', 'Ahiamata', 'Princes', 'F', '0548383545', 'EN', NULL, 'CSSD'),
(224, '1511181', 'Patricia', 'Awuku', 'Kwarteng', 'F', '0548739810', 'EN', NULL, 'PAEDICS'),
(225, '998425', 'Patricia', 'Assefuah', NULL, 'F', '0548449165', 'PCHN', NULL, 'RCH'),
(226, '900425', 'Peace', 'Ahadzi', 'Norkplim', 'F', '0548056822', 'SEN', NULL, 'MAT'),
(227, '998338', 'Pearl', 'Atiawu', 'Asiwome', 'F', '0547881530', 'SSM', NULL, 'THEATRE'),
(228, '1313979', 'Perpetual', 'Nyame', NULL, 'F', '0241379729', 'SEN', NULL, 'CSSD'),
(229, '996049', 'Philipa', 'Yankyera', NULL, 'F', '0541149033', 'SEN', NULL, 'CDU'),
(230, '977897', 'Philomina', 'Nketsiah', NULL, 'F', '0547569257', 'SSM', NULL, 'MAT'),
(231, '1470398', 'Portia', 'Ayensu', 'Anderson', 'F', '0242685915', 'NO', NULL, 'RECV'),
(232, '1406228', 'Portia', 'Owusu', NULL, 'F', '0240655837', 'SM', NULL, 'MAT'),
(233, '1448190', 'Portia', 'Arthur', NULL, 'F', '0506204818', 'SEN', NULL, 'D&I'),
(234, '1191587', 'Prince', 'Nimo', NULL, 'M', NULL, 'BS', NULL, 'LAB'),
(235, '1339253', 'Priscilla', 'Tetteh', 'Yaa', 'F', '0541358378', 'SM', NULL, 'MAT'),
(236, '1397711', 'Priscilla', 'Boadi', 'Ofosuhene', 'F', '0247265750', 'SM', NULL, 'MAT'),
(237, '763583', 'Priscilla', 'Taylor', NULL, 'F', '0244737607', 'PEN', NULL, 'ANC'),
(238, '1470353', 'Priscilla', 'Acquah', 'Brakatu', 'F', '0541613336', 'EN', NULL, 'A&E'),
(239, '1511178', 'Priscilla', 'Appiah', 'Obema', 'F', NULL, 'EN', NULL, NULL),
(240, '1598412', 'Priscilla', 'Mensah', 'Nana', 'F', '0542279496', 'CHN', NULL, 'OPD'),
(241, '69000', 'Rabi', 'Abdulai', NULL, 'M', NULL, 'DCPA', NULL, 'DENT'),
(242, '1100671', 'Rachael', 'Sencherey', NULL, 'F', '0245474345', 'SEN', NULL, 'MW'),
(243, '631224', 'Racheal', 'Addramani', NULL, 'F', '0557272444', 'MO', NULL, 'OPD'),
(244, '1501454', 'Racheal', 'Bentum', NULL, 'F', '0545561246', 'EN', NULL, 'RECV'),
(245, '1334521', 'Rachel', 'Ofosuhemaa', NULL, 'F', '0248283827', 'SSN', NULL, 'FW'),
(246, '788774', 'Randy', 'Opare', 'Tawiah', 'M', '0245705682', 'SSN', NULL, 'PA'),
(247, '530510', 'Ransford', 'Owiredu', 'Asare', 'M', NULL, 'PBS', NULL, 'LAB'),
(248, '1274036', 'Rashida', 'Koom', 'Ishaque', 'F', '0540656364', 'SSM', NULL, 'MAT'),
(249, '1408515', 'Rebecca', 'Boateng Mensah', NULL, 'F', '0248198907', 'SM', NULL, 'MAT'),
(250, '1470383', 'Ennin', 'Rebecca', 'Baaba', 'F', '0542778415', 'EN', NULL, 'A&E'),
(251, '1470396', 'Okine', 'Rebecca', NULL, 'F', '0546252069', 'EN', NULL, 'A&E'),
(252, '707387', 'Amoakoh', 'Regina', NULL, 'F', '0241773911', 'NO', NULL, 'MH'),
(253, '1470769', 'Kyepuo', 'Regina', NULL, 'F', '0542809060', 'SN', NULL, 'CDU'),
(254, '1270087', 'Arthur', 'Regina', NULL, 'F', '0246083872', 'SSM', NULL, 'MAT'),
(255, '1002284', 'Agbovi', 'Richard', 'Mensah', 'M', NULL, 'SD', NULL, 'TNS'),
(256, '689148', 'Nyarko', 'Rosemary', NULL, 'F', '0547256036', 'MO', NULL, 'MAT'),
(257, '1338747', 'Aboagyewaa', 'Rosemary', 'Odame', 'F', '0558269360', 'SM', NULL, 'ANC'),
(258, '1313283', 'Afful', 'Rosemond', NULL, 'F', '0242859057', 'SEN', NULL, 'CDU'),
(259, '1302518', 'Ibrahim', 'Rukaya', NULL, 'F', '0247794341', 'SSM', NULL, 'ANC'),
(260, '1302523', 'Yeboah', 'Ruth', NULL, 'F', '0242070946', 'SSN', NULL, 'MH'),
(261, '665852', 'Hagan', 'Ruth', 'Abbanwah', 'F', '0246577166', 'SM', NULL, 'MAT'),
(262, '1598636', 'Owusu', 'Sandra', 'Agyemang', 'F', '0540304014', 'EN', NULL, 'OPD'),
(265, '1374484', 'Arthur', 'Seth', NULL, 'M', '0256980507', 'SN', NULL, 'MH'),
(267, '979571', 'Conduah', 'Shirley', NULL, 'F', '0241059132', 'SSN', NULL, 'MH'),
(268, '637588', 'Atubiga', 'Shirley', NULL, 'F', '0247682922', 'MO', NULL, 'OPD'),
(269, '700951', 'Fuseini', 'Sophia', NULL, 'F', NULL, 'SDT', NULL, 'DENTAL'),
(270, '1334512', 'Amuah', 'Sophia', 'Marian', 'F', '0549489390', 'SNO', NULL, 'FW'),
(271, '733123', 'Mills', 'Sophia', 'Araba', 'F', '0243649782', 'PEN', NULL, 'FW'),
(272, '995755', 'Akwaboah', 'Sophia', NULL, 'F', '0246976676', 'SEN', NULL, 'THEATRE'),
(273, '1098477', 'Amponsem', 'Stanford', 'Boadi Agyeman', 'M', '0543376400', 'SSN', NULL, 'SL'),
(274, '1470362', 'Fiamekor', 'Stella', NULL, 'F', '0543508873', 'EN', NULL, 'FW'),
(275, '1440919', 'Cobbinah', 'Stephen', NULL, 'M', NULL, 'MA', NULL, 'MORT'),
(276, '1451760', 'Hopper', 'Thelma', NULL, 'F', '0541294452', 'SCHN', NULL, 'VCT'),
(277, '1396426', 'Kessie', 'Theodora', NULL, 'F', '0248744799', 'SN', NULL, 'WELLNESS'),
(278, '1459631', 'Ainyam', 'Theophilus', 'Kwesi', 'M', NULL, 'BS', NULL, 'LAB'),
(279, '1338508', 'Awuah', 'Theresah', NULL, 'F', NULL, 'SM', NULL, 'MAT'),
(280, '1414297', 'Sheesu', 'Umar-Faruk', NULL, 'M', '0547847444', 'MO', NULL, 'A&E'),
(281, '547163', 'Kattah', 'Veronica', NULL, 'F', NULL, 'MO', NULL, 'PAEDICS'),
(282, '608507', 'Mensah', 'Victoria', NULL, 'F', '0246617980', 'SNO', NULL, 'CDU'),
(283, '1000540', 'Quaye', 'Victoria', NULL, 'F', '0248834556', 'SSN', NULL, 'MW'),
(284, '833570', 'Baiden', 'Victoria', 'Francisca', 'F', '0246924322', 'PEN', NULL, 'OPD'),
(285, '1501453', 'Bazar', 'Victoria', NULL, 'F', '0244496453', 'EN', NULL, 'PAEDICS'),
(286, '701886', 'Nkansah', 'Victoria', 'Ofori', 'F', NULL, 'PCHN', NULL, 'NUT'),
(287, '507842', 'Mensah', 'Vida', 'Emmanuella', 'F', '0242686076', 'PNO', NULL, 'PAEDICS'),
(288, '978524', 'Ohene-Wusua', 'Vida', NULL, 'F', '05436833267', 'SSN', NULL, 'PAEDICS'),
(289, '522240', 'Beauty', 'Vifa', NULL, 'F', NULL, 'SCS', NULL, 'CAT'),
(290, '1452312', 'Bawah', 'Vivian', NULL, 'F', '0542633299', 'SEN', NULL, 'CSSD'),
(291, '1459633', 'Alofah', 'Wonderful', 'Leuther', 'M', NULL, 'BS', NULL, 'LAB'),
(292, '1269946', 'Nyarko', 'Yaa', NULL, 'F', ',0547210990', 'SSM', NULL, 'ANC'),
(293, '994511', 'Fatao', 'Zakiatu', NULL, 'F', '0540726292', 'SSN', NULL, 'SL'),
(294, NULL, 'Mensah', 'Abigail', 'Snr', 'F', '0547455939', 'EN', NULL, 'FW'),
(295, NULL, 'Mensah', 'Abigail', 'Jnr', 'F', '0547455990', 'EN', NULL, 'MW'),
(297, NULL, 'Ofori', 'Anita', NULL, 'F', '0249575595', 'SM', NULL, 'RECV'),
(298, NULL, 'Eshun', 'Bernice', NULL, 'F', '0243542236', 'NO', NULL, 'RCH'),
(299, NULL, 'Boadi', 'Ebenezer', 'O', 'M', NULL, NULL, NULL, 'A&E'),
(301, NULL, 'Ghansah', 'Genevieve', NULL, 'F', '0245230088', 'SN', NULL, 'D&I'),
(302, NULL, 'Agyemang-duah', 'Lawrencia', NULL, 'F', '0546329003', 'SSM', NULL, 'RECV'),
(303, NULL, 'Bimpomaah', 'Lovia', NULL, 'F', '0249590865', 'EN', NULL, 'MW'),
(304, NULL, 'Nartey', 'Rebecca', NULL, 'F', '0248130651', 'SN', NULL, 'CDU'),
(305, NULL, 'Obeng', 'Priscilla', NULL, 'F', '0551405126', 'EN', NULL, 'FW'),
(306, NULL, 'Amankrah', 'Regina', NULL, 'F', NULL, 'NO', NULL, 'MH'),
(307, NULL, 'Bilal', 'Rezuana', NULL, 'F', '0244715971', 'NO', NULL, 'RECV'),
(308, NULL, 'Asamoah', 'Ruth', NULL, 'F', '0241546678', 'SN', NULL, 'RECV'),
(309, NULL, 'Agyemang', 'Sandra', NULL, 'F', '0540304014', 'EN', NULL, 'OPD'),
(310, NULL, 'Essien', 'Vanessa', 'Gloria', 'F', '0240658151', 'PEN', NULL, 'WELLNESS'),
(311, 'AGH092', 'Douglas', 'Senzu', NULL, 'M', '0240561313', 'ITM', NULL, 'ADM'),
(312, 'staff_id', 'fname', 'lname', 'oname', 'g', 'phone', 'grade', 'image', 'unit'),
(313, '', 'Anthoinette', 'Arthur', '', 'F', '553508791', 'MCA', '', 'PHARM'),
(364, '1', 'Anthoinette', 'Arthur', '', 'F', '553508791', 'MCA', '', 'PHARM'),
(365, '2', 'Daniel ', 'Ampofo', '', 'M', '245714042', 'HSA', '', 'TNS'),
(366, '3', 'Wilson', 'Asamoah', '', 'M', '', 'ITO', '', 'ADM'),
(372, '9', 'Lucy', 'Oppon', '', 'M', '', 'SO', '', 'GS'),
(375, '12', 'Emmanuel ', 'Omar Quansah', '', 'M', '548250925', 'PHARM', '', 'PHARM'),
(377, '14', 'Evelyn', 'Fosua', '', 'F', '', 'PHARM', '', 'PHARM'),
(378, '15', 'Victoria ', 'Quayson', '', 'F', '248851548', 'MCA', '', 'PHARM'),
(381, '18', 'Dorothy', 'Acquah', '', 'F', '247000061', 'RECA', '', 'HI'),
(382, '19', 'Rebecca', 'Otchere', '', 'F', '555883230', 'RECA', '', 'HI'),
(384, '21', 'Joseph', 'Mensah', '', 'M', '549596692', 'RECA', '', 'MREC'),
(387, '24', 'Rebecca', 'Kanti', '', 'F', '547414215', 'REVO', '', 'ACC'),
(391, '28', 'Priscilla', 'Ampofo', '', 'F', '', 'REVO', '', 'ACC'),
(392, '29', 'Abigail ', 'Sarpomah', '', 'F', '', 'REVO', '', 'ACC'),
(393, '30', 'Agnes ', 'Ashia', '', 'F', '553934470', 'ORD', '', 'ENV'),
(406, '43', 'Rebecca ', 'Arhin', '', 'F', '', 'ORD', '', 'ENV'),
(407, '44', 'Mary ', 'Owusu', '', 'F', '', 'ORD', '', 'ENV'),
(412, '49', 'Kofi', 'Tuli', '', 'M', '0240659571', 'SECT', '', 'ADM'),
(413, '50', 'Hannah', 'Mensah', '', 'F', '', 'SECT', '', 'ADM'),
(415, '2301', 'Anthoinette', 'Arthur', '', 'F', '553508791', 'MCA', '', 'PHARM'),
(422, '2308', 'Dorcas', 'Mensah', '', 'M', '241415918', 'SO', '', 'PHARM'),
(423, '2309', 'Lucy', 'Oppon', '', 'M', '', 'SO', '', 'GS'),
(426, '2312', 'Emmanuel ', 'Omar Quansah', '', 'M', '548250925', 'PHARM', '', 'PHARM'),
(428, '2314', 'Evelyn', 'Fosua', '', 'F', '', 'PHARM', '', 'PHARM'),
(429, '2315', 'Victoria ', 'Quayson', '', 'F', '248851548', 'MCA', '', 'PHARM'),
(430, '2316', 'Eric ', 'Boadu', '', 'M', '544540460', 'RAD', '', 'ADM'),
(431, '2317', 'Justice Moses', 'Baah', '', 'M', '542370040', 'SONO', '', 'ADM'),
(435, '2321', 'Joseph', 'Mensah', '', 'M', '549596692', 'RECA', '', 'MREC'),
(439, '2325', 'Monica', 'Anyanumeh', '', 'F', '241329227', 'REVO', '', 'ACC'),
(440, '2326', 'Patience', 'Yanney', '', 'F', '240304531', 'REVO', '', 'ACC'),
(441, '2327', 'isaac', 'Clarkson', '', 'M', '', 'REVO', '', 'ACC'),
(443, '2329', 'Abigail ', 'Sarpomah', '', 'F', '', 'REVO', '', 'ACC'),
(444, '2330', 'Agnes ', 'Ashia', '', 'F', '553934470', 'ORD', '', 'ENV'),
(445, '2331', 'Margaret', 'Quaicoe', '', 'F', '276711734', 'ORD', '', 'ENV'),
(446, '2332', 'Margaret', 'Donkor', '', 'F', '558178339', 'ORD', '', 'ENV'),
(447, '2333', 'Janet', 'Kwakyewaa', '', 'F', '', 'ORD', '', 'ENV'),
(448, '2334', 'Constance ', 'Donkor', '', 'F', '559392875', 'ORD', '', 'ENV'),
(449, '2335', 'Bashira', 'Adam', '', 'F', '246793617', 'LND', '', 'LND'),
(450, '2336', 'Eric ', 'Asmah', '', 'M', '542237684', 'ORD', '', 'ENV'),
(451, '2337', 'Gideon ', 'Nketsiah', '', 'M', '540225893', 'ORD', '', 'ENV'),
(452, '2338', 'Grace', 'Cudjoe', '', 'F', '598122750', 'ORD', '', 'ENV'),
(453, '2339', 'Patience', 'Ofori', '', 'F', '541059588', 'ORD', '', 'ENV'),
(454, '2340', 'Rosemond ', 'Eshun', '', 'F', '242519580', 'ORD', '', 'ENV'),
(455, '2341', 'Mary', 'Alhassan', '', 'F', '249788165', 'ORD', '', 'ENV'),
(456, '2342', 'Evelyn', 'Assiboh', '', 'F', '543960164', 'ORD', '', 'ENV'),
(457, '2343', 'Rebecca ', 'Arhin', '', 'F', '', 'ORD', '', 'ENV'),
(458, '2344', 'Mary ', 'Owusu', '', 'F', '', 'ORD', '', 'ENV'),
(459, '2345', 'Doris', 'Nkrumah', '', 'F', '', 'ORD', '', 'ENV'),
(460, '2346', 'Comfort ', 'Appoh', '', 'F', '', 'ORD', '', 'ENV'),
(461, '2347', 'Mercy', 'Ackumey', '', 'F', '243088947', 'Cook', '', 'ENV'),
(462, '2348', 'Juliana ', 'Bawah', '', 'F', '241092597', 'ORD', '', 'ENV'),
(464, '2350', 'Hannah', 'Mensah', '', 'F', '', 'secur', '', 'SEC'),
(465, 'staff_id', 'fname', 'lname', 'oname', 'g', 'phone', 'grade', '', 'unit'),
(466, '2301', 'Anthoinette', 'Arthur', '', 'F', '553508791', 'MCA', '', 'PHARM'),
(469, '2304', 'Emmanuel ', 'Adutwum', '', 'M', '244668090', 'Claim', '', 'ACC'),
(470, '2305', 'Andrews ', 'Asarekwaw', '', 'M', '548909165', 'Audit', '', 'Audit'),
(471, '2306', 'Bismark', 'Vondee', '', 'M', '246530959', 'TOL', '', 'LAB'),
(472, '2307', 'Kenneth ', 'Kwofie', '', 'M', '', 'PA', '', 'OPD'),
(474, '2309', 'Lucy', 'Oppon', '', 'M', '', 'SO', '', 'GS'),
(475, '2310', 'Vera ', 'Annan', '', 'F', '243052911', 'MCA', '', 'PHARM'),
(476, '2311', 'Vera ', 'Armah', '', 'F', '', 'MCA', '', 'PHARM'),
(477, '2312', 'Emmanuel ', 'Omar Quansah', '', 'M', '548250925', 'PHARM', '', 'PHARM'),
(478, '2313', 'Rosina ', 'Kwofie', '', 'F', '', 'MCA', '', 'PHARM'),
(479, '2314', 'Evelyn', 'Fosua', '', 'F', '', 'PHARM', '', 'PHARM'),
(480, '2315', 'Victoria ', 'Quayson', '', 'F', '248851548', 'MCA', '', 'PHARM'),
(485, '2320', 'Belinda ', 'Boah', '', 'F', '541698164', 'RECA', '', 'HI'),
(486, '2321', 'Joseph', 'Mensah', '', 'M', '549596692', 'RECA', '', 'MREC'),
(487, '2322', 'Eva', 'Adams', '', 'F', '242617449', 'REVO', '', 'ACC'),
(488, '2323', 'Rosemary ', 'Kwofie', '', 'F', '546722776', 'REVO', '', 'ACC'),
(494, '2329', 'Abigail ', 'Sarpomah', '', 'F', '', 'REVO', '', 'ACC'),
(495, '2330', 'Agnes ', 'Ashia', '', 'F', '553934470', 'ORD', '', 'ENV'),
(508, '2343', 'Rebecca ', 'Arhin', '', 'F', '', 'ORD', '', 'ENV'),
(509, '2344', 'Mary ', 'Owusu', '', 'F', '', 'ORD', '', 'ENV'),
(515, '2350', 'Hannah', 'Mensah', '', 'F', '', 'secur', '', 'SEC'),
(516, '1101', 'Emmanuel', 'Quansah', 'Omar', 'M', '0548250925', 'PT', NULL, 'PHARM'),
(517, '1102', 'Abigail', 'Sarpomah', NULL, 'F', '0554698192', 'REVO', NULL, 'ACC'),
(518, '1103', 'Rebecca', 'Arhin', NULL, 'F', NULL, 'ORD', NULL, 'ENV'),
(519, '1104', 'Mary', 'Owusu', NULL, 'F', NULL, 'ORD', NULL, 'ENV'),
(520, '1406914', 'Emmanuel', 'Osei', NULL, 'M', '0240197842', 'SPM', NULL, 'ADM');

-- --------------------------------------------------------

--
-- Table structure for table `staff_grade`
--

CREATE TABLE `staff_grade` (
  `id` int(11) NOT NULL,
  `staff_id` varchar(50) NOT NULL,
  `rank` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` int(11) NOT NULL,
  `unit_id` varchar(10) NOT NULL,
  `unit_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `unit_id`, `unit_name`) VALUES
(65, 'A&E', 'Accidents & Emergency'),
(66, 'ANC', 'ANC'),
(67, 'CDU', 'Communicable Disease'),
(68, 'CSSD', 'CSSD'),
(69, 'D&I', 'Dressing & Injection'),
(70, 'ENT', 'ENT'),
(71, 'EYE', 'EYE'),
(72, 'FW', 'Female Ward'),
(73, 'MW', 'Male Ward'),
(74, 'MAT', 'Maternity'),
(75, 'MH', 'Mental Health'),
(76, 'NICU', 'NICU'),
(77, 'OPD', 'OPD'),
(78, 'PAEDICS', 'Kids Ward'),
(79, 'RCH', 'RCH'),
(80, 'RECV', 'Recovery'),
(81, 'THEATRE', 'THEATRE'),
(82, 'VCT', 'VCT'),
(83, 'WELLNESS', 'WELLNESS'),
(84, 'MD&PAs', 'Medical Doctors & PAs'),
(85, 'PHARM', 'Pharmacy'),
(86, 'ACC', 'Accounts'),
(87, 'ADM', 'General Administration'),
(88, 'MOG', 'Mortuary'),
(89, 'ENV', 'Environment'),
(90, 'TNS', 'Transport'),
(91, 'PRC', 'Procurement'),
(92, 'HR', 'Human Resource'),
(93, 'CAT', 'Catering'),
(94, 'LAUD', 'Laundry'),
(95, 'SCAN', 'SCAN'),
(96, 'X-RAY', 'X-RAY'),
(97, 'LAB', 'Laboratory'),
(98, 'ANAES', 'Anaesthesia'),
(99, 'MEDO', 'Medical Officer'),
(100, 'PA', 'Physician Assistant'),
(101, 'DENT', 'Dental'),
(102, 'HI', 'Health Information');

-- --------------------------------------------------------

--
-- Table structure for table `unit_ic`
--

CREATE TABLE `unit_ic` (
  `id` int(11) NOT NULL,
  `unit_id` varchar(5) NOT NULL,
  `staff_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL,
  `rank` varchar(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `rank`, `user_id`) VALUES
(1, 'sno-512', '$2y$10$d1skHzwLNI5TdlnlI8jJuuGwmc/bQeYSE/wm6.1N/gEQPmcTbnRV2', 'ITO', 311),
(2, 'sno-513', '$2y$10$d1skHzwLNI5TdlnlI8jJuuGwmc/bQeYSE/wm6.1N/gEQPmcTbnRV2', NULL, 25),
(3, 'sno-520', '$2y$10$d1skHzwLNI5TdlnlI8jJuuGwmc/bQeYSE/wm6.1N/gEQPmcTbnRV2', NULL, 4),
(4, 'sno-232', '$2y$10$d1skHzwLNI5TdlnlI8jJuuGwmc/bQeYSE/wm6.1N/gEQPmcTbnRV2', NULL, 83),
(5, 'sno-546', '$2y$10$d1skHzwLNI5TdlnlI8jJuuGwmc/bQeYSE/wm6.1N/gEQPmcTbnRV2', NULL, 78),
(6, 'sno-275', '$2y$10$d1skHzwLNI5TdlnlI8jJuuGwmc/bQeYSE/wm6.1N/gEQPmcTbnRV2', NULL, 30),
(7, 'sno-32', '$2y$10$d1skHzwLNI5TdlnlI8jJuuGwmc/bQeYSE/wm6.1N/gEQPmcTbnRV2', NULL, 287),
(8, 'sno-39', '$2y$10$d1skHzwLNI5TdlnlI8jJuuGwmc/bQeYSE/wm6.1N/gEQPmcTbnRV2', NULL, 270),
(9, 'sno-43', '$2y$10$d1skHzwLNI5TdlnlI8jJuuGwmc/bQeYSE/wm6.1N/gEQPmcTbnRV2', NULL, 181),
(10, 'sno-38', '$2y$10$d1skHzwLNI5TdlnlI8jJuuGwmc/bQeYSE/wm6.1N/gEQPmcTbnRV2', NULL, 71),
(11, 'sno-386', '$2y$10$d1skHzwLNI5TdlnlI8jJuuGwmc/bQeYSE/wm6.1N/gEQPmcTbnRV2', NULL, 5),
(12, 'sno-141', '$2y$10$d1skHzwLNI5TdlnlI8jJuuGwmc/bQeYSE/wm6.1N/gEQPmcTbnRV2', NULL, 228),
(13, 'sno-36', '$2y$10$d1skHzwLNI5TdlnlI8jJuuGwmc/bQeYSE/wm6.1N/gEQPmcTbnRV2', NULL, 282),
(14, 'sno-227', '$2y$10$d1skHzwLNI5TdlnlI8jJuuGwmc/bQeYSE/wm6.1N/gEQPmcTbnRV2', NULL, 219),
(15, 'sno-47', '$2y$10$d1skHzwLNI5TdlnlI8jJuuGwmc/bQeYSE/wm6.1N/gEQPmcTbnRV2', NULL, 231),
(16, 'sno-35', '$2y$10$d1skHzwLNI5TdlnlI8jJuuGwmc/bQeYSE/wm6.1N/gEQPmcTbnRV2', NULL, 147),
(17, 'sno-222', '$2y$10$d1skHzwLNI5TdlnlI8jJuuGwmc/bQeYSE/wm6.1N/gEQPmcTbnRV2', NULL, 167),
(18, 'sno-270', '$2y$10$d1skHzwLNI5TdlnlI8jJuuGwmc/bQeYSE/wm6.1N/gEQPmcTbnRV2', NULL, 139),
(19, 'sno-254', '$2y$10$d1skHzwLNI5TdlnlI8jJuuGwmc/bQeYSE/wm6.1N/gEQPmcTbnRV2', NULL, 109),
(20, 'sno-445', '$2y$10$d1skHzwLNI5TdlnlI8jJuuGwmc/bQeYSE/wm6.1N/gEQPmcTbnRV2', NULL, 2),
(21, 'sno-285', '$2y$10$d1skHzwLNI5TdlnlI8jJuuGwmc/bQeYSE/wm6.1N/gEQPmcTbnRV2', NULL, 268),
(22, 'sno-286', '$2y$10$d1skHzwLNI5TdlnlI8jJuuGwmc/bQeYSE/wm6.1N/gEQPmcTbnRV2', NULL, 190),
(23, 'sno-50', '$2y$10$d1skHzwLNI5TdlnlI8jJuuGwmc/bQeYSE/wm6.1N/gEQPmcTbnRV2', NULL, 301),
(24, 'sno-263', '$2y$10$d1skHzwLNI5TdlnlI8jJuuGwmc/bQeYSE/wm6.1N/gEQPmcTbnRV2', NULL, 241),
(25, 'sno-344', '$2y$10$fRly.zXSEoPIr8gXIgdeFeH9eFJ4RaMwJgY4.ypkacS82EZH9Ua1y', NULL, 143),
(26, 'sno-255', '$2y$10$d1skHzwLNI5TdlnlI8jJuuGwmc/bQeYSE/wm6.1N/gEQPmcTbnRV2', NULL, 10),
(27, 'sno-264', '$2y$10$d1skHzwLNI5TdlnlI8jJuuGwmc/bQeYSE/wm6.1N/gEQPmcTbnRV2', NULL, 192),
(29, 'sno-27', '$2y$10$d1skHzwLNI5TdlnlI8jJuuGwmc/bQeYSE/wm6.1N/gEQPmcTbnRV2', 'Admin', 110),
(30, 'sno-28', '$2y$10$d1skHzwLNI5TdlnlI8jJuuGwmc/bQeYSE/wm6.1N/gEQPmcTbnRV2', NULL, 365),
(31, 'sno-259', '$2y$10$d1skHzwLNI5TdlnlI8jJuuGwmc/bQeYSE/wm6.1N/gEQPmcTbnRV2', 'MEDO', 109),
(32, 'sno-672', '$2y$10$wVO64uLB7UaqY1eNOxVpieMBj8QshT5Qqxn/Fk5rsbfznovBkMJ8O', 'Admin', 210);

-- --------------------------------------------------------

--
-- Table structure for table `validations`
--

CREATE TABLE `validations` (
  `id` int(11) NOT NULL,
  `staff_id` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(4) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `validated_by` varchar(50) NOT NULL,
  `date_validated` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ranks`
--
ALTER TABLE `ranks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `staff_id_2` (`staff_id`),
  ADD KEY `fname` (`fname`),
  ADD KEY `lname` (`lname`),
  ADD KEY `unit` (`unit`),
  ADD KEY `grade` (`grade`);

--
-- Indexes for table `staff_grade`
--
ALTER TABLE `staff_grade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unit_ic`
--
ALTER TABLE `unit_ic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username_2` (`username`),
  ADD KEY `username` (`username`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `validations`
--
ALTER TABLE `validations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ranks`
--
ALTER TABLE `ranks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=521;

--
-- AUTO_INCREMENT for table `staff_grade`
--
ALTER TABLE `staff_grade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `unit_ic`
--
ALTER TABLE `unit_ic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=211;

--
-- AUTO_INCREMENT for table `validations`
--
ALTER TABLE `validations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
