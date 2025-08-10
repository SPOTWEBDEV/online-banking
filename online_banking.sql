-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2025 at 02:52 PM
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
(7, '300', 'debit', 'chimaka okechukwu', 'for Buying of oil', '2025-08-10', '11:26:40', 'pending', '4567384536', 'First Citizens Bank', '', '', '', '4', 'chimaka okechukwu', 'fixed', '478793'),
(8, '400', 'debit', 'chimaka okechukwu', 'for my child school fee', '2025-08-10', '11:35:11', 'cancelled', '45678476', 'First Horizon Bank', '5673', '34567', 'Angola', '4', 'chimaka okechukwu', 'Domicilary Account', '629768');

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
  `kyc` enum('unverified','verified','submited','rejected') NOT NULL DEFAULT 'unverified',
  `2_step_verification` tinyint(1) NOT NULL DEFAULT 0,
  `transfer_count` int(11) NOT NULL DEFAULT 0,
  `status_message` varchar(9000) NOT NULL,
  `wrong_attempts` int(11) NOT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `pin`, `firstname`, `lastname`, `date_created`, `occupation`, `country`, `address`, `gender`, `balance`, `phone`, `ssn`, `profile`, `currency`, `account_number`, `status`, `birth`, `account_type`, `account_limit`, `tax_code`, `cot_code`, `imf_code`, `billing_status`, `loan_balance`, `kyc`, `2_step_verification`, `transfer_count`, `status_message`, `wrong_attempts`, `city`) VALUES
(2, 'arum101', 'arumkingsley9@gmail.com', '$2y$10$/Q3WQSfTeH6C8tRYGs63fezDStVwv2YPRO0aTQnIM7.GGEfPDXYIi', '1111', 'arum ', 'kingsley', '2025-08-04 19:24:18', 'programmer', 'Angola', 'enugu  nigeria obeagu ', 'male', '0', '11111', '1111', 'arumkingsley9_gmail_com_1754335458.png', '$', '2147483647', 'active', '2025-08-04', 'Savings', 5000, '', '', '', 'deactivate', 0, 'unverified', 0, 0, '', 0, ''),
(3, 'Gutiérrez', 'mangercello@gmail.com', '$2y$10$3PgIhKpJ6nn6JjbqXFwdeuiSNxt5D4sKLsP/uzOGlhWajZvKPnN9e', '172005', 'William ', 'Levy ', '2025-08-04 19:34:32', 'Actor ', 'Select Country', '2536 Privet Cres Mississauga ON L5B 2S4', 'male', '0', '4174966610', '122331', 'mangercello_gmail_com_1754336072.jpeg', '$', '2147483647', 'active', '1980-08-29', 'Savings', 5000, '', '', '', 'deactivate', 0, 'unverified', 0, 0, '', 0, ''),
(4, 'Thebest', 'spotwebdev.com@gmail.com', '$2y$10$8pn42j0PlbG45gbjRoo.ROdCVTanDgcCU694jEONFWhdXYlZMQhVG', '0810', 'Firstclass', 'Thebest', '2025-08-04 21:01:51', 'None', 'Brunei', 'Mtd gariki ', 'male', '3461', '093938734', 'pp', 'spotwebdev_com_gmail_com_1754341312.jpg', '€', '2147483647', 'active', '2025-07-15', 'Current', 5000, '', '', '', 'deactivate', 0, 'rejected', 0, 3, 'Your account has been suspended due to recent transactions on your account. <br><br>Please <strong>contact our abuse and fraud team</strong> by visiting the <a style=\" border-bottom:2px solid; color:red \" href=\"http://localhost/online-banking/ contact.php\">Contact Page</a> or using the <strong>live support</strong> at the bottom right of this page', 0, 'enugu');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
