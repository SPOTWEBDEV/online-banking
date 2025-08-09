-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2025 at 01:05 PM
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
-- Database: `online_banking`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@admin.com', 'admin@admin.com');

-- --------------------------------------------------------

--
-- Table structure for table `bank_list`
--

CREATE TABLE `bank_list` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bank_list`
--

INSERT INTO `bank_list` (`id`, `name`) VALUES
(5, 'Accion Opportunity Fund'),
(6, 'Ally Bank'),
(7, 'American Express National Bank'),
(8, 'Bank of America'),
(9, 'BBVA USA'),
(10, 'Capital One'),
(11, 'Charles Schwab Bank'),
(12, 'Chase Bank'),
(13, 'Citibank'),
(14, 'Citizens Bank'),
(15, 'Fifth Third Bank'),
(16, 'First Citizens Bank'),
(17, 'First Horizon Bank'),
(18, 'Goldman Sachs'),
(19, 'Grameen America'),
(20, 'Huntington National Bank'),
(21, 'Justine Petersen'),
(22, 'KeyBank'),
(23, 'M&T Bank'),
(24, 'Morgan Stanley'),
(25, 'Pacific Community Ventures'),
(26, 'PNC Bank'),
(27, 'Regions Bank'),
(28, 'Santander Bank'),
(29, 'TD Bank'),
(30, 'Truist Bank'),
(31, 'U.S. Bank'),
(32, 'Union Bank'),
(33, 'Wells Fargo'),
(34, 'Zions Bank'),
(35, 'Ameris Bank');

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `limit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`id`, `user`, `number`, `date`, `username`, `code`, `status`, `limit`) VALUES
(3, '1', '4027642035253343', '08/29', 'arum  kingsley', '897', 'dclined', '5000'),
(4, '9', '1375026131547201', '08/29', 'Rhonda Lee', '897', 'pending', '5000');

-- --------------------------------------------------------

--
-- Table structure for table `deposit`
--

CREATE TABLE `deposit` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `deposit`
--

INSERT INTO `deposit` (`id`, `user`, `amount`, `date`, `status`, `payment_type`, `address`, `img`) VALUES
(1, '4', '30000', '2025-07-30 04:35:56', 'declined', '4', '66666666666666666666666666', 'btmpERVNRM3NvP3BwPt7MUmE5kVjrzCRxsI1SbEaSLHC3FuCYlLSJmTchV4idMs9iuXLtHBGllNpmKR5dhVedTRUapGJk75W1uao_1753842956.png'),
(2, '1', '100000', '2025-07-30 23:47:15', 'approved', '1', '55555555555555555', 'bFchZkrFavS9A8QnWIhZIQ3cZPB1FF5UJsHH1w47jaEoeOAprKCyFNx0j5qJkJcXt8XeUh0sLgNYytafex6T6eUPReLG2YdRJhGE_1753912035.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE `loan` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` enum('pending','approved','declined') NOT NULL,
  `time` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_details_bank`
--

CREATE TABLE `payment_details_bank` (
  `id` int(11) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `acount_number` varchar(255) NOT NULL,
  `routine_number` varchar(255) NOT NULL,
  `swift_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment_details_bank`
--

INSERT INTO `payment_details_bank` (`id`, `bank_name`, `acount_number`, `routine_number`, `swift_code`) VALUES
(1, 'Usa Bank', '764229211', '637363636', 'SFDHHS86X');

-- --------------------------------------------------------

--
-- Table structure for table `payment_details_crypto`
--

CREATE TABLE `payment_details_crypto` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment_details_crypto`
--

INSERT INTO `payment_details_crypto` (`id`, `name`, `address`, `date`) VALUES
(1, 'Bitcoin', '55555555555555555', '2021-10-08 11:05:42'),
(2, 'Dodgcoin', '22222222222222222', '2021-11-11 13:26:42'),
(4, 'Usdt', '66666666666666666666666666', '2021-11-11 13:26:42'),
(5, 'test', '7777777777777777777777', '2025-07-26 01:39:20');

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `id` int(11) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `receiver_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `receiver_account_number` varchar(255) NOT NULL,
  `receiver_bank` varchar(255) NOT NULL,
  `swift_code` varchar(255) NOT NULL,
  `routine_number` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `sender_name` varchar(255) NOT NULL,
  `receiver_account_type` varchar(255) NOT NULL,
  `otp_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`id`, `amount`, `type`, `receiver_name`, `description`, `date`, `time`, `status`, `receiver_account_number`, `receiver_bank`, `swift_code`, `routine_number`, `country`, `user`, `sender_name`, `receiver_account_type`, `otp_code`) VALUES
(1, '5500', 'credit', '', '....', '2022-06-04', '01:42', 'approved', '', '', '', '', '', '4', 'mark henry', '', ''),
(2, '15430', 'credit', '', 'work', '2022-07-21', '23:48', 'approved', '', '', '', '', '', '4', 'Michael James Anderson', '', ''),
(3, '12', 'debit', 'mmicheal', 'ncncncnc', '2025-08-08', '10:14:52', 'cancelled', '84859478395', 'Goldman Sachs', '48jjd', '467378564', 'Argentina', '4', 'mmicheal', 'Fixed Deposit', '815167'),
(4, '12', 'debit', 'mmicheal', 'ncncncnc', '2025-08-08', '10:18:15', 'pending', '84859478395', 'Goldman Sachs', '48jjd', '467378564', 'Argentina', '4', 'mmicheal', 'Fixed Deposit', '577025'),
(5, '404', 'debit', 'emeka', 'for school fee', '2025-08-08', '10:48:03', 'cancelled', '748464', 'Ally Bank', '48jjd', '457373', 'Andorra', '4', 'emeka', 'Online Banking', '229752');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `pin` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `date_created` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `balance` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `ssn` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `currency` varchar(255) NOT NULL,
  `account_number` varchar(255) NOT NULL,
  `status` enum('suspended','active') NOT NULL,
  `birth` varchar(255) NOT NULL,
  `account_type` varchar(255) NOT NULL,
  `account_limit` int(11) DEFAULT 5000,
  `tax_code` varchar(255) NOT NULL,
  `cot_code` varchar(255) NOT NULL,
  `imf_code` varchar(255) NOT NULL,
  `billing_status` varchar(255) DEFAULT 'deactivate',
  `loan_balance` int(11) NOT NULL,
  `kyc` varchar(255) NOT NULL DEFAULT 'unverified',
  `2_step_verification` tinyint(1) NOT NULL DEFAULT 0,
  `transfer_count` int(11) NOT NULL DEFAULT 0,
  `status_message` varchar(9000) NOT NULL,
  `wrong_attempts` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `pin`, `firstname`, `lastname`, `date_created`, `occupation`, `country`, `address`, `gender`, `balance`, `phone`, `ssn`, `profile`, `currency`, `account_number`, `status`, `birth`, `account_type`, `account_limit`, `tax_code`, `cot_code`, `imf_code`, `billing_status`, `loan_balance`, `kyc`, `2_step_verification`, `transfer_count`, `status_message`, `wrong_attempts`) VALUES
(2, 'arum101', 'arumkingsley9@gmail.com', '$2y$10$/Q3WQSfTeH6C8tRYGs63fezDStVwv2YPRO0aTQnIM7.GGEfPDXYIi', '1111', 'arum ', 'kingsley', '2025-08-04 19:24:18', 'programmer', 'Angola', 'enugu  nigeria obeagu ', 'male', '0', '11111', '1111', 'arumkingsley9_gmail_com_1754335458.png', '$', '2147483647', 'active', '2025-08-04', 'Savings', 5000, '', '', '', 'deactivate', 0, 'unverified', 0, 0, '', 0),
(3, 'Gutiérrez', 'mangercello@gmail.com', '$2y$10$3PgIhKpJ6nn6JjbqXFwdeuiSNxt5D4sKLsP/uzOGlhWajZvKPnN9e', '172005', 'William ', 'Levy ', '2025-08-04 19:34:32', 'Actor ', 'Select Country', '2536 Privet Cres Mississauga ON L5B 2S4', 'male', '0', '4174966610', '122331', 'mangercello_gmail_com_1754336072.jpeg', '$', '2147483647', 'active', '1980-08-29', 'Savings', 5000, '', '', '', 'deactivate', 0, 'unverified', 0, 0, '', 0),
(4, 'Thebest', 'spotwebdev.com@gmail.com', '$2y$10$8pn42j0PlbG45gbjRoo.ROdCVTanDgcCU694jEONFWhdXYlZMQhVG', '0810', 'Firstclass', 'Thebest', '2025-08-04 21:01:51', 'Web developer ', 'Brunei', 'Mtd gariki ', 'male', '3773', '093938734', 'pp', 'spotwebdev_com_gmail_com_1754341312.jpg', '€', '2147483647', 'suspended', '2025-07-15', 'Current', 5000, '', '', '', 'deactivate', 0, 'unverified', 0, 0, 'Your account has been suspended after 3 incorrect PIN attempts.', 3),
(5, 'garcia3310', 'martinezgarcia3310@gmail.com', '$2y$10$FgiT0JbuHEzQxoWzJBYeDOWWEwSNNCIOforhnMfRc8NrXsW4msKOm', '3310', 'martinez', 'garcia', '2025-08-04 21:37:01', 'lumberjack supervisor', 'United States of America', 'indiana united state ', 'male', '20930', '7188707384', '1111', 'martinezgarcia3310_gmail_com_1754343421.jpg', '$', '2005902045', 'active', '1962-06-17', 'Savings', 5000, '', '', '', 'deactivate', 0, 'unverified', 0, 0, '', 0),
(6, 'Zaynmalik11', 'huntd281@gmail.com', '$2y$10$fp0.FD9RcmWeVN4ubqpDHOHtdSzF6PBiHPP9Z/C2xuLKb21UdRf8e', '1122', 'Zayn', 'Malik', '2025-08-05 09:14:28', 'Musician', 'United Kingdom', '16 Acacia Avenue LONDON EC1Y 8SY UNITED KINGDOM', 'male', '0', '09065802340', '12345', 'huntd281_gmail_com_1754385268.jpeg', '$', '2147483647', 'active', '1998-08-05', 'Current', 5000, '', '', '', 'deactivate', 0, 'unverified', 0, 0, '', 0),
(7, 'Zaynjavaddmalik', 'huntd2006@gmail.com', '$2y$10$e6L4Jux848uZ.Jv0J7GXAuJFEQVJdFnmPGuxFXu5hL1SWqZHUNNZ2', '2016', 'Zayn', 'Javadd Malik ', '2025-08-05 09:18:35', 'Musicians ', 'United States of America', '16 Acacia Avenue LONDON EC1Y 8SY UNITED KINGDOM', 'male', '0', '09130342170', '1111', 'huntd2006_gmail_com_1754385515.jpeg', '$', '2147483647', 'active', '1993-01-12', 'Current', 5000, '', '', '', 'deactivate', 0, 'unverified', 0, 0, '', 0),
(8, 'Zayn', 'Zaynmalik11281@gmail.com', '$2y$10$42SF7DqHE18Xm.6X2ZAsweWtk2tQHCtK3lZ8Ofyp1zSIud1.PLuNm', '1122', 'Zayn', 'Javadd Malik ', '2025-08-05 09:29:30', 'Musician', 'United Kingdom', '16 Acacia Avenue LONDON EC1Y 8SY UNITED KINGDOM', 'male', '0', '08037439264', '1234', 'Zaynmalik11281_gmail_com_1754386170.jpeg', '$', '2147483647', 'active', '1993-01-12', 'Current', 5000, '', '', '', 'deactivate', 0, 'unverified', 0, 0, '', 0),
(9, 'Babygirl25', 'lee52rhonda@gmail.com', '$2y$10$921ayMj6OwjuOifp5PF38Otk4fXwWKeB03emCxEI4sX94OVYFo3om', '4377', 'Rhonda', 'Lee', '2025-08-05 16:58:51', 'Sales', 'United States of America', 'Po Box 127', 'female', '0', '4179430712', '494806967', 'lee52rhonda_gmail_com_1754413131.jpg', '$', '2147483647', 'active', '1967-01-07', 'Online Banking', 5000, '', '', '', 'deactivate', 0, 'unverified', 0, 0, '', 0),
(10, 'arum101', 'arumkingsley49@gmail.com', '$2y$10$tCFlz2qM4QXBmKNWB7.YU.zqIYBXKmWZXRXX/5ybIFNzeKlc34QjK', '2006', 'arum ', 'kingsley', '2025-08-05 17:59:57', 'programmer', 'Nigeria', 'enugu  nigeria obeagu ', 'male', '0', '09017862743', '1111', 'arumkingsley49_gmail_com_1754416797.jpg', '€', '5701925111', 'active', '2025-07-29', 'Savings', 5000, '', '', '', 'deactivate', 0, 'unverified', 0, 0, '', 0),
(11, '', 'spotwebdev1.com@gmail.com', '$2y$10$0vwXRv8mU8/W9OAch3TvNeOQgZjSnFuvo/ZcOFYBfEh9gaQGfw7da', '0000', 'Ezea', 'Ugochukwu', '2025-08-09 08:17:14', '', 'Nigeria', '', '', '0', '', 'pp', 'spotwebdev1_com_gmail_com_1754720234.jpg', 'Fr', '2196722921', 'active', '2025-08-05', 'Fixed Deposit', 5000, '', '', '', 'deactivate', 0, 'unverified', 0, 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `withdraw`
--

CREATE TABLE `withdraw` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `status` enum('pending','approved','declined') NOT NULL,
  `description` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bank_list`
--
ALTER TABLE `bank_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deposit`
--
ALTER TABLE `deposit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loan`
--
ALTER TABLE `loan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_details_bank`
--
ALTER TABLE `payment_details_bank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_details_crypto`
--
ALTER TABLE `payment_details_crypto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transfer`
--
ALTER TABLE `transfer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `withdraw`
--
ALTER TABLE `withdraw`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bank_list`
--
ALTER TABLE `bank_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `card`
--
ALTER TABLE `card`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `deposit`
--
ALTER TABLE `deposit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `loan`
--
ALTER TABLE `loan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_details_bank`
--
ALTER TABLE `payment_details_bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment_details_crypto`
--
ALTER TABLE `payment_details_crypto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transfer`
--
ALTER TABLE `transfer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `withdraw`
--
ALTER TABLE `withdraw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
