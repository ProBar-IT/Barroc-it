-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2017 at 10:03 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barroc-it`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_appointments`
--

CREATE TABLE `tbl_appointments` (
  `id` int(11) NOT NULL,
  `customerID` int(11) NOT NULL,
  `projectID` int(11) DEFAULT NULL,
  `appointmentDate` datetime NOT NULL,
  `appointmentMadeAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_appointments`
--

INSERT INTO `tbl_appointments` (`id`, `customerID`, `projectID`, `appointmentDate`, `appointmentMadeAt`) VALUES
(1, 1, 1, '1995-05-09 00:00:00', '1987-01-23 00:00:00'),
(2, 2, 2, '1982-08-30 00:00:00', '2002-12-22 00:00:00'),
(3, 3, 3, '1977-04-18 00:00:00', '1995-11-13 00:00:00'),
(4, 4, 4, '2005-11-14 00:00:00', '1973-04-23 00:00:00'),
(5, 5, 5, '1977-02-06 00:00:00', '2006-07-29 00:00:00'),
(6, 6, 6, '1974-07-20 00:00:00', '2011-07-11 00:00:00'),
(7, 7, 7, '1982-10-11 00:00:00', '1979-02-10 00:00:00'),
(8, 8, 8, '2012-05-28 00:00:00', '1976-11-28 00:00:00'),
(9, 9, 9, '1970-05-15 00:00:00', '1980-10-15 00:00:00'),
(10, 10, 10, '2008-02-23 00:00:00', '1972-11-15 00:00:00'),
(11, 11, 11, '2012-12-07 00:00:00', '2014-01-04 00:00:00'),
(12, 12, 12, '1985-12-11 00:00:00', '2009-11-27 00:00:00'),
(13, 13, 13, '2005-10-22 00:00:00', '2006-10-31 00:00:00'),
(14, 14, 14, '1991-03-02 00:00:00', '1978-02-20 00:00:00'),
(15, 15, 15, '1995-08-13 00:00:00', '1999-07-27 00:00:00'),
(16, 16, 16, '1993-09-16 00:00:00', '2006-03-07 00:00:00'),
(17, 17, 17, '2008-11-26 00:00:00', '1975-05-01 00:00:00'),
(18, 18, 18, '1996-11-21 00:00:00', '1973-08-13 00:00:00'),
(19, 19, 19, '1985-10-21 00:00:00', '1982-09-16 00:00:00'),
(20, 20, 20, '2016-02-01 00:00:00', '1972-03-02 00:00:00'),
(21, 21, 21, '1995-01-21 00:00:00', '1976-07-03 00:00:00'),
(22, 22, 22, '1998-02-25 00:00:00', '2004-06-10 00:00:00'),
(23, 23, 23, '2009-04-04 00:00:00', '2001-08-23 00:00:00'),
(24, 24, 24, '1975-03-01 00:00:00', '1990-07-12 00:00:00'),
(25, 25, 25, '2012-08-01 00:00:00', '1990-02-24 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customers`
--

CREATE TABLE `tbl_customers` (
  `id` int(11) NOT NULL,
  `companyName` varchar(50) NOT NULL,
  `adress` varchar(50) NOT NULL,
  `postalZip` varchar(10) NOT NULL,
  `adress2` varchar(50) NOT NULL,
  `postalZip2` varchar(50) NOT NULL,
  `contactPerson` varchar(50) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `insertion` varchar(50) DEFAULT NULL,
  `lastName` varchar(50) NOT NULL,
  `phoneNumber` varchar(20) NOT NULL,
  `faxNumber` varchar(20) DEFAULT NULL,
  `emailAdress` varchar(50) NOT NULL,
  `potentionalCustomer` tinyint(1) NOT NULL,
  `creditWorthy` tinyint(1) NOT NULL,
  `bankAccountNumber` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_customers`
--

INSERT INTO `tbl_customers` (`id`, `companyName`, `adress`, `postalZip`, `adress2`, `postalZip2`, `contactPerson`, `firstName`, `insertion`, `lastName`, `phoneNumber`, `faxNumber`, `emailAdress`, `potentionalCustomer`, `creditWorthy`, `bankAccountNumber`) VALUES
(1, 'Christiansen, Wyman and Bins', '23929 Harris Squares Apt. 012', '26459', '35160 Spencer Plains\nMarianeland, DC 73186', '09750-6131', 'Conor Braun', 'Tia', NULL, 'Dickens', '442.851.7249 x22017', '(419) 339-1171', 'bonita.thompson@hotmail.com', 1, 1, '87624320237363'),
(2, 'Morissette, Gleason and Sanford', '6360 Mertz Crossing Apt. 848', '39875-0725', '99941 Richard Wall', '05089-0556', 'Donald Kuhlman', 'Damon', NULL, 'Hilpert', '1-572-703-4220', '+13544705248', 'tito03@white.com', 1, 1, '93618449907'),
(3, 'Donnelly Inc', '7084 Franecki Pass Suite 428', '63147-9571', '675 Price Village Suite 026', '91918-7207', 'Della Kautzer V', 'Leon', NULL, 'Gerlach', '340.672.0044', '240-233-7791', 'davis.eileen@morissette.biz', 1, 1, '8474559774'),
(4, 'Kunze, Wuckert and Rodriguez', '680 Hoppe Fort Apt. 959', '17264-3706', '47880 Rhoda Centers', '69020', 'Alex Stehr', 'Monserrate', NULL, 'Marvin', '31794', '+12122153360', 'kunde.nelle@mueller.info', 1, 1, '61538973293'),
(5, 'Ondricka, Gusikowski and Gorczany', '834 Zachery Corner', '46095', '92554 Gerlach Spurs Apt. 808', '67938', 'Prof. Dereck Auer', 'Carmella', NULL, 'Morissette', '657', '1839', 'tbarrows@upton.biz', 1, 1, '2818067680288'),
(6, 'Schuster Group', '6682 Bosco Highway Suite 058', '70919', '98082 Esperanza Branch', '92996-7992', 'Alice Huels', 'Brando', NULL, 'Rowe', '258', '24732', 'antonietta74@kshlerin.org', 1, 1, '5658689233'),
(7, 'Emmerich, Glover and Gusikowski', '2845 Eulalia Turnpike', '79084', '24211 Eldridge Center Suite 445', '52248-1174', 'Dr. Austen Schmeler DDS', 'Korbin', NULL, 'Smith', '52102', '34156', 'heaven26@terry.org', 1, 1, '2190767205'),
(8, 'Kemmer-Murazik', '4547 Shanahan Village Suite 955', '79860-3113', '7938 Windler Via Suite 115', '18146', 'Mr. Halle Schumm', 'Hanna', NULL, 'Gutkowski', '52686', '4380', 'hirthe.kenyatta@yahoo.com', 1, 1, '91992713727'),
(9, 'Moen, Friesen and Lemke', '70329 Flatley Trace', '42494-4137', '112 Elisabeth Motorway', '87961', 'Milton Satterfield', 'Nat', NULL, 'Beatty', '141', '850', 'okuneva.augustine@fritsch.com', 1, 1, '38761665466'),
(10, 'Bergstrom-Beahan', '686 Annamae Road', '84453', '17405 Emard Shore', '01303', 'Jonathan Bode', 'Lura', NULL, 'Kozey', '35688', '74769', 'trohan@hotmail.com', 1, 1, '15741496486'),
(11, 'Reinger-Graham', '9683 Carroll Square', '45282', '4312 Lillie Grove Apt. 940', '83737-4358', 'Abdiel Schaefer DDS', 'Hayden', NULL, 'Goyette', '78604', '590', 'alexa.lindgren@hotmail.com', 1, 1, '286965912'),
(12, 'Bashirian, Lubowitz and Robel', '307 Maya Hollow Apt. 294', '92663-5721', '241 Maggie Heights', '99776', 'Demond Walter', 'Jayne', NULL, 'Marvin', '41044', '2449', 'lind.yoshiko@barton.org', 1, 1, '533593190'),
(13, 'Homenick LLC', '972 Camryn Course', '99676', '8225 Lowe Crossroad', '31700-2655', 'Sierra Kreiger', 'Darrick', NULL, 'Boehm', '5615', '75695', 'pascale85@yahoo.com', 1, 1, '948662385071747'),
(14, 'Ondricka-Nolan', '9399 Mraz Circle Suite 778', '51294', '782 Margarita Forge', '89112-9508', 'Mr. Leopoldo Will', 'Kira', NULL, 'Auer', '67806', '6972', 'octavia87@frami.com', 1, 1, '2609798240'),
(15, 'Rodriguez, Abshire and Schmeler', '83475 Corkery Row', '59348', '827 Dickinson Fords Apt. 661', '74753-5519', 'Ari DuBuque', 'Sydni', NULL, 'Spinka', '707', '16131', 'sawayn.letha@hotmail.com', 1, 1, '673645967'),
(16, 'Hermiston-Hamill', '1549 Fadel Turnpike', '57968', '5373 Domenic Camp', '68137-8859', 'Jakayla Legros', 'Monte', NULL, 'Price', '55754', '653', 'francis99@gleason.com', 1, 1, '35062802121'),
(17, 'Thompson, Upton and Davis', '4454 Shawn Station Apt. 454', '07418', '598 Yundt Crossing Apt. 891', '66346-5172', 'Scottie Swift', 'Tevin', NULL, 'Turner', '463', '2742', 'raynor.carolina@okuneva.org', 1, 1, '134921331518'),
(18, 'Streich-Green', '5035 Annamae Island', '77506', '407 Gorczany Expressway Suite 164', '98329-1575', 'Gregorio Kozey', 'Chandler', NULL, 'Ortiz', '2805', '685', 'dominique66@yahoo.com', 1, 1, '61078976938100'),
(19, 'Russel Group', '3313 Altenwerth Centers', '58458-5053', '635 Predovic Orchard Apt. 053', '99137-4750', 'Devin Kreiger II', 'Bethel', NULL, 'Brakus', '351', '45724', 'loyal.hagenes@barton.com', 1, 1, '452638123718'),
(20, 'Ziemann, Collier and Mraz', '64822 Blick Turnpike Apt. 750', '15498-0687', '9928 Schultz Court Apt. 529', '12168', 'Ms. Tamara Mohr', 'Tyrel', NULL, 'Christiansen', '105', '9437', 'myrl07@crist.net', 1, 1, '21041506302551'),
(21, 'Harris-Tremblay', '6985 Merlin Landing', '94044-8623', '4640 Herman Course Apt. 619', '91751', 'Arturo Davis', 'Maude', NULL, 'Willms', '5534', '9811', 'wpowlowski@wiza.com', 1, 1, '1025637456'),
(22, 'Grady Group', '59176 Mckayla Bridge', '29455-1964', '62494 Eichmann Fords Apt. 967', '04847', 'Lauriane Heller', 'Burnice', NULL, 'Monahan', '7465', '6459', 'aritchie@hotmail.com', 1, 1, '625787523309'),
(23, 'Kuphal PLC', '54912 Arlene Fort Apt. 564', '82593-2189', '294 Nolan Islands', '00904-1414', 'Cristal Wiegand', 'Ezequiel', NULL, 'Pouros', '801', '4185', 'carlotta.oconner@yahoo.com', 1, 1, '60328432456'),
(24, 'Ortiz, Jacobson and Quitzon', '659 Reichel Motorway', '47443-3486', '88475 Goldner Greens Apt. 188', '35626', 'Michel Homenick', 'Cora', NULL, 'Homenick', '590', '73433', 'marilou91@hotmail.com', 1, 1, '1263819986403'),
(25, 'Bechtelar, Koss and Simonis', '4404 Leila Springs', '84544-3452', '913 Demetris Street', '94867', 'Reinhold D\'Amore', 'Rosa', NULL, 'Schmitt', '75983', '6259', 'weissnat.hermina@hotmail.com', 1, 1, '1605118'),
(26, 'Effertz-Schmitt', '6597 Pfannerstill Dam Apt. 557', '47824', '15464 Willow Branch', '40213-5164', 'Annie Gutmann', 'Cale', NULL, 'Jakubowski', '9570', '8307', 'kborer@yahoo.com', 1, 1, '6370466618');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_invoices`
--

CREATE TABLE `tbl_invoices` (
  `id` int(11) NOT NULL,
  `projectID` int(11) NOT NULL,
  `createdAt` datetime NOT NULL,
  `DeletedAt` datetime DEFAULT NULL,
  `description` mediumtext NOT NULL,
  `price` decimal(20,0) NOT NULL,
  `paid` datetime DEFAULT NULL,
  `sent` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_invoices`
--

INSERT INTO `tbl_invoices` (`id`, `projectID`, `createdAt`, `DeletedAt`, `description`, `price`, `paid`, `sent`) VALUES
(1, 1, '1984-11-27 00:00:00', NULL, 'Quaerat sunt expedita aperiam eum officia sit neque.', '191', NULL, NULL),
(2, 2, '2010-11-03 00:00:00', NULL, 'Blanditiis inventore omnis aut mollitia.', '55619', NULL, NULL),
(3, 3, '1993-04-25 00:00:00', NULL, 'Ut fugiat eos molestias quibusdam.', '7928', NULL, NULL),
(4, 4, '1970-05-31 00:00:00', NULL, 'Dolor eos illum atque itaque.', '21793', NULL, NULL),
(5, 5, '1976-02-11 00:00:00', NULL, 'Quia accusantium nobis mollitia ipsam nobis.', '3373', NULL, NULL),
(6, 6, '1977-03-01 00:00:00', NULL, 'Aut qui odit vitae perferendis vitae rerum.', '2969', NULL, NULL),
(7, 7, '2004-10-04 00:00:00', NULL, 'Sequi voluptatibus odit architecto quis adipisci tenetur nisi.', '364', NULL, NULL),
(8, 8, '1980-11-19 00:00:00', NULL, 'Expedita eos quo sit quo.', '731', NULL, NULL),
(9, 9, '1988-11-28 00:00:00', NULL, 'Commodi ipsam voluptas quidem ut.', '6935', NULL, NULL),
(10, 10, '1971-06-07 00:00:00', NULL, 'Repellat veritatis sed suscipit odit molestiae quia.', '834', NULL, NULL),
(11, 11, '1981-06-09 00:00:00', NULL, 'Similique quos ducimus recusandae ut.', '3013', NULL, NULL),
(12, 12, '1989-05-03 00:00:00', NULL, 'Illum in eius enim cupiditate vel nisi deserunt.', '1397', NULL, NULL),
(13, 13, '1970-03-18 00:00:00', NULL, 'Incidunt saepe aliquid provident ipsam quia est.', '6706', NULL, NULL),
(14, 14, '1977-11-29 00:00:00', NULL, 'Rerum et tempore a soluta.', '6794', NULL, NULL),
(15, 15, '1974-05-24 00:00:00', NULL, 'Error odit quia ab similique.', '8993', NULL, NULL),
(16, 16, '1974-11-07 00:00:00', NULL, 'Odio delectus quia ducimus incidunt.', '851', NULL, NULL),
(17, 17, '1974-12-01 00:00:00', NULL, 'Nam non facere amet at quisquam dolorem consequatur.', '109', NULL, NULL),
(18, 18, '1987-10-21 00:00:00', NULL, 'Nemo vel voluptatibus ut officiis.', '60278', NULL, NULL),
(19, 19, '1998-04-07 00:00:00', NULL, 'Id iusto voluptatum eos.', '1861', NULL, NULL),
(20, 20, '2012-03-28 00:00:00', NULL, 'Cum officiis ut est exercitationem veniam odio.', '594', NULL, NULL),
(21, 21, '2006-05-24 00:00:00', NULL, 'Excepturi aut ea nostrum voluptatem rerum quae.', '791', NULL, NULL),
(22, 22, '1981-06-06 00:00:00', NULL, 'Quae quasi veritatis harum necessitatibus officia et porro.', '420', NULL, NULL),
(23, 23, '1991-06-04 00:00:00', NULL, 'Earum dolorem laborum voluptate quasi sit voluptatem doloremque.', '229', NULL, NULL),
(24, 24, '1979-06-11 00:00:00', NULL, 'Culpa natus facilis harum.', '540', NULL, NULL),
(25, 25, '1986-08-02 00:00:00', NULL, 'Laudantium recusandae pariatur quia quo beatae.', '77926', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_projects`
--

CREATE TABLE `tbl_projects` (
  `id` int(11) NOT NULL,
  `customerID` int(11) NOT NULL,
  `description` longtext NOT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime DEFAULT NULL,
  `deletedAt` datetime DEFAULT NULL,
  `deadline` datetime NOT NULL,
  `projectFinish` datetime DEFAULT NULL,
  `projectPrice` decimal(20,0) NOT NULL,
  `operatingSystem` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_projects`
--

INSERT INTO `tbl_projects` (`id`, `customerID`, `description`, `createdAt`, `updatedAt`, `deletedAt`, `deadline`, `projectFinish`, `projectPrice`, `operatingSystem`) VALUES
(1, 1, 'Id impedit consequatur et eum dolores quia dolores.', '2015-11-03 00:00:00', NULL, NULL, '2017-09-04 11:03:18', NULL, '75593', NULL),
(2, 2, 'Nihil tempora cumque voluptas nam.', '1989-07-09 00:00:00', NULL, NULL, '2017-09-24 05:50:29', NULL, '7971', NULL),
(3, 3, 'Ea vitae maxime expedita quaerat vitae qui autem.', '1996-04-19 00:00:00', NULL, NULL, '2017-09-09 04:25:00', NULL, '239', NULL),
(4, 4, 'Aut aut qui magni.', '2017-09-23 00:00:00', NULL, NULL, '2017-09-11 14:38:29', NULL, '2916', NULL),
(5, 5, 'Voluptatem repellat neque et quaerat velit placeat non.', '1971-07-17 00:00:00', NULL, NULL, '2017-09-15 05:04:06', NULL, '3574', NULL),
(6, 6, 'Et est sit et consectetur ex illum et aut.', '1997-05-27 00:00:00', NULL, NULL, '2017-09-27 01:01:03', NULL, '3945', NULL),
(7, 7, 'Labore ut tenetur id quia quam.', '1994-11-05 00:00:00', NULL, NULL, '2017-09-15 11:18:09', NULL, '3535', NULL),
(8, 8, 'Ullam et beatae nihil a.', '1976-01-01 00:00:00', NULL, NULL, '2017-09-03 03:19:27', NULL, '9120', NULL),
(9, 9, 'Autem ratione qui eveniet repellendus vitae veritatis.', '1980-02-02 00:00:00', NULL, NULL, '2017-09-02 06:24:14', NULL, '880', NULL),
(10, 10, 'Molestiae qui unde est qui necessitatibus beatae similique.', '2015-08-20 00:00:00', NULL, NULL, '2017-08-29 09:32:51', NULL, '351', NULL),
(11, 11, 'Sit praesentium iusto rerum officia quia nisi.', '1976-04-09 00:00:00', NULL, NULL, '2017-09-02 23:15:37', NULL, '39057', NULL),
(12, 12, 'Quisquam dolorem necessitatibus dolore eos laborum.', '1976-05-18 00:00:00', NULL, NULL, '2017-09-02 20:13:05', NULL, '4116', NULL),
(13, 13, 'Ab accusamus consequatur voluptatem ut aperiam.', '1989-04-18 00:00:00', NULL, NULL, '2017-09-23 03:24:17', NULL, '31064', NULL),
(14, 14, 'Fugiat veniam non incidunt.', '2005-11-07 00:00:00', NULL, NULL, '2017-09-25 02:28:44', NULL, '253', NULL),
(15, 15, 'Quisquam non praesentium praesentium maiores omnis voluptatem.', '1976-01-25 00:00:00', NULL, NULL, '2017-09-12 17:10:33', NULL, '586', NULL),
(16, 16, 'Est eum voluptatum voluptas laudantium officiis illum.', '1973-09-15 00:00:00', NULL, NULL, '2017-09-11 05:41:00', NULL, '73759', NULL),
(17, 17, 'Esse possimus minima consequuntur eum est dolore odio.', '1990-07-29 00:00:00', NULL, NULL, '2017-08-29 12:17:22', NULL, '5399', NULL),
(18, 18, 'Magnam consequuntur pariatur illum tenetur illum omnis modi.', '1996-01-01 00:00:00', NULL, NULL, '2017-09-20 02:20:14', NULL, '6346', NULL),
(19, 19, 'Quis qui sit occaecati magnam aspernatur quos.', '2008-11-09 00:00:00', NULL, NULL, '2017-09-07 10:41:46', NULL, '3999', NULL),
(20, 20, 'Blanditiis sunt et dolorem.', '2001-03-03 00:00:00', NULL, NULL, '2017-09-03 01:37:12', NULL, '58330', NULL),
(21, 21, 'Quisquam sunt provident non non aspernatur voluptas quia ipsa.', '2007-05-18 00:00:00', NULL, NULL, '2017-09-21 05:36:05', NULL, '91998', NULL),
(22, 22, 'Ipsa at est dicta veniam non.', '2007-09-01 00:00:00', NULL, NULL, '2017-08-30 14:54:12', NULL, '4703', NULL),
(23, 23, 'Exercitationem eos neque facilis molestias qui veniam.', '2005-02-19 00:00:00', NULL, NULL, '2017-09-21 21:09:36', NULL, '965', NULL),
(24, 24, 'In facere fugit quo quas.', '1998-09-24 00:00:00', NULL, NULL, '2017-08-30 11:09:17', NULL, '419', NULL),
(25, 25, 'Illo et quia deserunt.', '1991-01-19 00:00:00', NULL, NULL, '2017-09-14 21:36:43', NULL, '76044', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_appointments`
--
ALTER TABLE `tbl_appointments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customerID_UNIQUE` (`customerID`),
  ADD KEY `projectID_idx` (`projectID`);

--
-- Indexes for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_invoices`
--
ALTER TABLE `tbl_invoices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projectID_idx` (`projectID`);

--
-- Indexes for table `tbl_projects`
--
ALTER TABLE `tbl_projects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customerID_UNIQUE` (`customerID`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_appointments`
--
ALTER TABLE `tbl_appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_invoices`
--
ALTER TABLE `tbl_invoices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_projects`
--
ALTER TABLE `tbl_projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_appointments`
--
ALTER TABLE `tbl_appointments`
  ADD CONSTRAINT `customerID` FOREIGN KEY (`customerID`) REFERENCES `tbl_customers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `projectID` FOREIGN KEY (`projectID`) REFERENCES `tbl_projects` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_invoices`
--
ALTER TABLE `tbl_invoices`
  ADD CONSTRAINT `tbl_invoices_ibfk_1` FOREIGN KEY (`projectID`) REFERENCES `tbl_projects` (`id`);

--
-- Constraints for table `tbl_projects`
--
ALTER TABLE `tbl_projects`
  ADD CONSTRAINT `projects_customers_relation` FOREIGN KEY (`customerID`) REFERENCES `tbl_customers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
