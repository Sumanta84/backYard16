-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 14, 2025 at 12:53 PM
-- Server version: 8.0.42-0ubuntu0.22.04.1
-- PHP Version: 8.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pdf_converter`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill_client`
--

CREATE TABLE `bill_client` (
  `id` int NOT NULL,
  `invoice_id` varchar(50) DEFAULT NULL,
  `invoice_no` varchar(255) DEFAULT NULL,
  `bill_client_id` varchar(10) DEFAULT NULL,
  `bill_unique_id` varchar(50) DEFAULT NULL,
  `project_title` varchar(100) DEFAULT NULL,
  `flag` varchar(50) DEFAULT NULL,
  `igst` varchar(10) DEFAULT NULL,
  `bill_type` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `gst_rate` varchar(50) DEFAULT NULL,
  `gst_amt` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT '0',
  `wt1_id` varchar(10) DEFAULT NULL,
  `wt2_id` varchar(10) DEFAULT NULL,
  `bill_work_type1` varchar(100) DEFAULT NULL,
  `bill_work_type2` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `hsn_code` varchar(50) DEFAULT NULL,
  `cgst_rate` varchar(10) DEFAULT NULL,
  `cgst_amt` varchar(255) DEFAULT NULL,
  `sgst_rate` varchar(10) DEFAULT NULL,
  `sgst_amt` varchar(255) DEFAULT NULL,
  `igst_rate` varchar(10) DEFAULT NULL,
  `igst_amt` varchar(255) DEFAULT NULL,
  `quantity` varchar(20) DEFAULT NULL,
  `rate` varchar(50) DEFAULT NULL,
  `unit` varchar(10) DEFAULT NULL,
  `total_amt` varchar(50) DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `status` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT '1',
  `bill_created_by` varchar(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `bill_client`
--

INSERT INTO `bill_client` (`id`, `invoice_id`, `invoice_no`, `bill_client_id`, `bill_unique_id`, `project_title`, `flag`, `igst`, `bill_type`, `gst_rate`, `gst_amt`, `wt1_id`, `wt2_id`, `bill_work_type1`, `bill_work_type2`, `hsn_code`, `cgst_rate`, `cgst_amt`, `sgst_rate`, `sgst_amt`, `igst_rate`, `igst_amt`, `quantity`, `rate`, `unit`, `total_amt`, `description`, `status`, `bill_created_by`, `created_at`, `updated_at`) VALUES
(34, 'B16/25-26/2', '', '1', 'RKebtTZi', 'test22', 'original', 'non igst', 'gst', '18', '6156', '5', '39', 'Indexing', 'Book Indexing', '998393', '9', '3078', '9', '3078', '18', '6156', '6840', '05', 'sq.ft', '34200', 'kjh', '1', '2', '2025-06-10 07:16:58', NULL),
(53, 'B16/25-26/1/123', '123', '1', 'Due5v61m', 'test22', 'original', 'non igst', 'non gst', '18', '8.82', '4', '34', 'Editing', 'Book Editing', '998393', '9', '4.41', '9', '4.41', '18', '8.82', '07', '07', 'sq.ft', '49', 'cfghj', '1', '2', '2025-06-13 05:30:29', NULL),
(54, 'B16/25-26/1/123', '123', '1', 'Due5v61m', 'test22', 'original', 'non igst', 'non gst', '18', '8.64', '5', '39', 'Indexing', 'Book Indexing', '998393', '9', '4.32', '9', '4.32', '18', '8.64', '06', '08', 'sq.ft', '48', 'hgjuk', '1', '2', '2025-06-13 05:30:29', NULL),
(55, 'B16/25-26/1/123', '123', '1', 'Due5v61m', 'test22', 'original', 'non igst', 'non gst', '18', '900.9', '11', '106', 'Software', 'IOS App Development', '998314', '9', '450.45', '9', '450.45', '18', '900.9', '065', '077', 'sq.ft', '5005', 'hgj', '1', '2', '2025-06-13 05:30:29', NULL),
(56, 'B16/25-26/1/123', '123', '1', 'Due5v61m', 'test22', 'original', 'non igst', 'non gst', '18', '912.6', '15', '119', 'Video and Photo shooting', 'Video Editing', '998366', '9', '456.3', '9', '456.3', '18', '912.6', '065', '078', 'sq.ft', '5070', 'ghj', '1', '2', '2025-06-13 05:30:29', NULL),
(57, 'B16/25-26/1/123', '123', '1', 'Due5v61m', 'test22', 'original', 'non igst', 'non gst', '18', '994.14', '7', '45', 'Marketing', 'LinkedIn Marketing', '998313', '9', '497.07', '9', '497.07', '18', '994.14', '07', '0789', 'sq.ft', '5523', 'hgjk', '1', '2', '2025-06-13 05:30:29', NULL),
(58, 'B16/25-26/1/123', '123', '1', 'Due5v61m', 'test22', 'original', 'non igst', 'non gst', '12', '569.52', '13', '114', 'Stationery Items', 'Ribbon', '58079090', '6', '284.76', '6', '284.76', '12', '569.52', '07', '0678', 'sq.ft', '4746', 'ghj', '1', '2', '2025-06-13 05:30:29', NULL),
(59, 'B16/25-26/1/123', '123', '1', 'Due5v61m', 'test22', 'original', 'non igst', 'non gst', '18', '9165.6', '16', '145', 'Data Entry &\nDigitization', 'Data Entry &\r\nDigitization', '998313', '9', '4582.8', '9', '4582.8', '18', '9165.6', '760', '067', 'sq.ft', '50920', 'ghj', '1', '2', '2025-06-13 05:30:29', NULL),
(60, 'B16/25-26/1/123', '123', '1', 'Due5v61m', 'test22', 'original', 'non igst', 'non gst', '18', '1123.2', '4', '34', 'Editing', 'Book Editing', '998393', '9', '561.6', '9', '561.6', '18', '1123.2', '08', '780', 'sq.ft', '6240', 'trfgh', '1', '2', '2025-06-13 05:30:29', NULL),
(61, 'B16/25-26/1/123', '123', '1', 'Due5v61m', 'test22', 'original', 'non igst', 'non gst', '18', '92620.8', '14', '135', 'Blank', 'Canvas (synthetic)', '5209', '9', '46310.4', '9', '46310.4', '18', '92620.8', '067', '7680', 'sq.ft', '514560', 'ghj', '1', '2', '2025-06-13 05:30:29', NULL),
(62, 'B16/25-26/1/123', '123', '1', 'Due5v61m', 'test22', 'original', 'non igst', 'non gst', '18', '92620.8', '14', '135', 'Blank', 'Canvas (synthetic)', '5209', '9', '46310.4', '9', '46310.4', '18', '92620.8', '067', '7680', 'sq.ft', '514560', 'ghj', '1', '2', '2025-06-13 05:30:29', NULL),
(63, 'B16/25-26/1/123', '123', '1', 'Due5v61m', 'test22', 'original', 'non igst', 'non gst', '18', '92620.8', '14', '135', 'Blank', 'Canvas (synthetic)', '5209', '9', '46310.4', '9', '46310.4', '18', '92620.8', '067', '7680', 'sq.ft', '514560', 'ghj', '1', '2', '2025-06-13 05:30:29', NULL),
(64, 'B16/25-26/1/123', '123', '1', 'Due5v61m', 'test22', 'original', 'non igst', 'non gst', '18', '92620.8', '14', '135', 'Blank', 'Canvas (synthetic)', '5209', '9', '46310.4', '9', '46310.4', '18', '92620.8', '067', '7680', 'sq.ft', '514560', 'ghj', '1', '2', '2025-06-13 05:30:29', NULL),
(65, 'B16/25-26/1/123', '123', '1', 'Due5v61m', 'test22', 'original', 'non igst', 'non gst', '18', '92620.8', '14', '135', 'Blank', 'Canvas (synthetic)', '5209', '9', '46310.4', '9', '46310.4', '18', '92620.8', '067', '7680', 'sq.ft', '514560', 'ghj', '1', '2', '2025-06-13 05:30:29', NULL),
(66, 'B16/25-26/1/123', '123', '1', 'Due5v61m', 'test22', 'original', 'non igst', 'non gst', '18', '92620.8', '14', '135', 'Blank', 'Canvas (synthetic)', '5209', '9', '46310.4', '9', '46310.4', '18', '92620.8', '067', '7680', 'sq.ft', '514560', 'ghj', '1', '2', '2025-06-13 05:30:29', NULL),
(67, 'B16/25-26/1/123', '123', '1', 'Due5v61m', 'test22', 'original', 'non igst', 'non gst', '18', '92620.8', '14', '135', 'Blank', 'Canvas (synthetic)', '5209', '9', '46310.4', '9', '46310.4', '18', '92620.8', '067', '7680', 'sq.ft', '514560', 'ghj', '1', '2', '2025-06-13 05:30:29', NULL),
(68, 'B16/25-26/1/123', '123', '1', 'Due5v61m', 'test22', 'original', 'non igst', 'non gst', '18', '92620.8', '14', '135', 'Blank', 'Canvas (synthetic)', '5209', '9', '46310.4', '9', '46310.4', '18', '92620.8', '067', '7680', 'sq.ft', '514560', 'ghj', '1', '2', '2025-06-13 05:30:30', NULL),
(69, 'B16/25-26/1/123', '123', '1', 'Due5v61m', 'test22', 'original', 'non igst', 'non gst', '18', '92620.8', '14', '135', 'Blank', 'Canvas (synthetic)', '5209', '9', '46310.4', '9', '46310.4', '18', '92620.8', '067', '7680', 'sq.ft', '514560', 'ghj', '1', '2', '2025-06-13 05:30:30', NULL),
(70, 'B16/25-26/1/123', '123', '1', 'Due5v61m', 'test22', 'original', 'non igst', 'non gst', '18', '4374', '16', '145', 'Data Entry &\nDigitization', 'Data Entry &\r\nDigitization', '998313', '9', '2187', '9', '2187', '18', '4374', '450', '054', 'sq.ft', '24300', 'dfg', '1', '2', '2025-06-13 05:30:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bill_gst`
--

CREATE TABLE `bill_gst` (
  `gst_id` int NOT NULL,
  `invoice_id` varchar(50) DEFAULT NULL,
  `invoice_no` varchar(255) DEFAULT NULL,
  `financial_year` varchar(20) DEFAULT NULL,
  `bill_unique_id` varchar(50) DEFAULT NULL,
  `invoice_type` varchar(20) DEFAULT NULL,
  `order_date` date DEFAULT NULL,
  `place_of_supply` varchar(50) DEFAULT NULL,
  `vehicle_no` varchar(50) DEFAULT NULL,
  `invoice_date` date DEFAULT NULL,
  `order_no` varchar(50) DEFAULT NULL,
  `tax_reverse_charge` varchar(10) DEFAULT NULL,
  `cgst_percentage` varchar(10) DEFAULT NULL,
  `sgst_percentage` varchar(10) DEFAULT NULL,
  `igst_percentage` varchar(10) DEFAULT NULL,
  `total_amt` varchar(50) DEFAULT NULL,
  `sgst_amt` varchar(50) DEFAULT NULL,
  `cgst_amt` varchar(50) DEFAULT NULL,
  `igst_amt` varchar(50) DEFAULT NULL,
  `total_gst_amt` varchar(50) DEFAULT NULL,
  `net_total` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `bill_gst`
--

INSERT INTO `bill_gst` (`gst_id`, `invoice_id`, `invoice_no`, `financial_year`, `bill_unique_id`, `invoice_type`, `order_date`, `place_of_supply`, `vehicle_no`, `invoice_date`, `order_no`, `tax_reverse_charge`, `cgst_percentage`, `sgst_percentage`, `igst_percentage`, `total_amt`, `sgst_amt`, `cgst_amt`, `igst_amt`, `total_gst_amt`, `net_total`, `created_at`, `updated_at`) VALUES
(3, 'B16/25-26/2', '', '25-26', 'RKebtTZi', 'gst', '2025-06-10', 'wb', '7844PO', '2025-06-10', '111', 'Yes', NULL, NULL, NULL, '34200', NULL, NULL, NULL, NULL, NULL, '2025-06-10 07:16:58', '2025-06-10 07:16:58'),
(5, 'B16/25-26/1/123', '123', '25-26', 'Due5v61m', 'non gst', '2025-06-06', 'wb', '7844PO', '2025-06-06', '100', 'Yes', NULL, NULL, NULL, '4732941', NULL, NULL, NULL, NULL, NULL, '2025-06-13 05:30:30', '2025-06-13 05:30:30');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `email`, `phone`, `address`) VALUES
(1, 'angsuman sil', 'angsuman@elphill.com', '7980820673', 'kolkata,dumdum'),
(2, 'riju sil', 'riju@gmail.com', '9749052168', 'kolkata , newtown'),
(3, 'Ram dev', 'ramdev@gmail.com', '6786473892', 'mumbai,film city'),
(4, 'shyam das', 'shyam@gmail.com', '5643236789', 'coochbehar,tufanganj');

-- --------------------------------------------------------

--
-- Table structure for table `client_bill`
--

CREATE TABLE `client_bill` (
  `id` int NOT NULL,
  `invoice_id` varchar(50) DEFAULT NULL,
  `bill_client_id` varchar(10) DEFAULT NULL,
  `bill_unique_id` varchar(50) DEFAULT NULL,
  `project_title` varchar(100) DEFAULT NULL,
  `flag` varchar(50) DEFAULT NULL,
  `bill_type` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `gst_amt` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT '0',
  `bill_work_type2_id` varchar(10) DEFAULT NULL,
  `quantity` varchar(20) DEFAULT NULL,
  `rate` varchar(50) DEFAULT NULL,
  `unit` varchar(10) DEFAULT NULL,
  `total_amt` varchar(50) DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `status` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT '1',
  `bill_created_by` varchar(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `client_bill`
--

INSERT INTO `client_bill` (`id`, `invoice_id`, `bill_client_id`, `bill_unique_id`, `project_title`, `flag`, `bill_type`, `gst_amt`, `bill_work_type2_id`, `quantity`, `rate`, `unit`, `total_amt`, `description`, `status`, `bill_created_by`, `created_at`, `updated_at`) VALUES
(1, 'BY16-20251', '5', 'l6eDqoJR', 'testing', 'original', 'non gst', '0', '1', '2', '1000', 'sq.ft', '2000', 'saas', '0', '1', '2025-04-21 06:29:24', '2025-04-29 06:01:38'),
(2, 'BY16-20251', '5', 'l6eDqoJR', 'testing', 'original', 'non gst', '0', '5', '756', '150', 'number', '113400', 'asfdfgh', '0', '1', '2025-04-21 06:29:24', '2025-04-29 06:01:38'),
(3, 'BY16-20252', '6', '5qCvoDq9', 'test12345', 'original', 'non gst', '0', '1', '77', '154', 'sq.ft', '11858', NULL, '1', '1', '2025-04-22 00:46:07', NULL),
(4, 'BY16-20252', '6', '5qCvoDq9', 'test12345', 'original', 'non gst', '0', '4', '478', '150', 'number', '71700', 'test1234', '1', '1', '2025-04-22 00:46:07', NULL),
(5, 'BY16-20253', '1', 'wLjEJjKL', 'testing', 'original', 'gst', '0', '2', '455', '150', 'sq.ft', '68250', 'sdrfg', '1', '1', '2025-04-22 01:03:46', NULL),
(6, 'BY16-20253', '1', 'wLjEJjKL', 'testing', 'original', 'gst', '0', '6', '478', '154', 'months', '73612', 'sdfg', '1', '1', '2025-04-22 01:03:46', NULL),
(7, 'BY16-20254', '2', 'tezAyIfg', 'test22', 'original', 'gst', '0', '7', '756', '154', 'months', '116424', 'gfc', '0', '1', '2025-04-22 01:04:50', '2025-05-07 03:13:57'),
(8, 'BY16-20254', '2', 'tezAyIfg', 'test22', 'original', 'gst', '0', '4', '478', '100', 'sq.ft', '47800', 'vnn', '0', '1', '2025-04-22 01:04:50', '2025-05-07 03:13:57'),
(9, 'BY16-20255', '2', 'Ed6spg9u', 'test22', 'original', 'non gst', '0', '5', '4', '150', 'number', '600', 'afsfg', '0', '1', '2025-04-25 05:54:15', '2025-04-24 02:12:42'),
(10, 'BY16-20255', '2', 'Ed6spg9u', 'test22', 'original', 'non gst', '0', '8', '45', '154', 'sq.ft', '6930', 'fvbgfdb', '0', '1', '2025-04-25 05:54:15', '2025-04-24 02:12:42'),
(11, 'BY16-20251_D', '5', 'l6eDqoJR_D', 'testing', 'duplicate', 'non gst', '0', '1', '2', '1100', 'sq.ft', '2200', 'saas', '0', '1', '2025-04-22 08:05:36', '2025-04-24 02:12:26'),
(12, 'BY16-20251_D', '5', 'l6eDqoJR_D', 'testing', 'duplicate', 'non gst', '0', '5', '756', '150', 'number', '113400', 'asfdfgh', '0', '1', '2025-04-22 08:05:36', '2025-04-24 02:12:26'),
(13, 'BY16-20251_D', '5', 'l6eDqoJR_D', 'testing', 'duplicate', 'non gst', '0', '1', '2', '1200', 'sq.ft', '2400', 'saas', '0', '1', '2025-04-22 08:29:23', '2025-04-24 02:12:26'),
(14, 'BY16-20251_D', '5', 'l6eDqoJR_D', 'testing', 'duplicate', 'non gst', '0', '5', '756', '160', 'number', '120960', 'asfdfgh', '0', '1', '2025-04-22 08:29:23', '2025-04-24 02:12:26'),
(15, 'BY16-20251_D', '5', 'l6eDqoJR_D', 'testing', 'duplicate', 'non gst', '0', '1', '2', '1200', 'sq.ft', '2400', 'saas', '0', '1', '2025-04-22 08:31:57', '2025-04-24 02:12:26'),
(16, 'BY16-20251_D', '5', 'l6eDqoJR_D', 'testing', 'duplicate', 'non gst', '0', '5', '756', '160', 'number', '120960', 'asfdfgh', '0', '1', '2025-04-22 08:31:57', '2025-04-24 02:12:26'),
(17, 'BY16-20251_D', '5', 'l6eDqoJR_D', 'testing', 'duplicate', 'non gst', '0', '1', '2', '1200', 'sq.ft', '2400', 'saas', '0', '1', '2025-04-22 08:33:28', '2025-04-24 02:12:26'),
(18, 'BY16-20251_D', '5', 'l6eDqoJR_D', 'testing', 'duplicate', 'non gst', '0', '5', '756', '160', 'number', '120960', 'asfdfgh', '0', '1', '2025-04-22 08:33:28', '2025-04-24 02:12:26'),
(19, 'BY16-20251_D', '5', 'l6eDqoJR_D', 'testing', 'duplicate', 'non gst', '0', '1', '2', '1200', 'sq.ft', '2400', 'saas', '0', '1', '2025-04-22 08:34:04', '2025-04-24 02:12:26'),
(20, 'BY16-20251_D', '5', 'l6eDqoJR_D', 'testing', 'duplicate', 'non gst', '0', '5', '756', '160', 'number', '120960', 'asfdfgh', '0', '1', '2025-04-22 08:34:04', '2025-04-24 02:12:26'),
(21, 'BY16-20251_D', '5', 'l6eDqoJR_D', 'testing', 'duplicate', 'non gst', '0', '1', '2', '1000', 'sq.ft', '2000', 'saas', '0', '1', '2025-04-22 23:58:07', '2025-04-24 02:12:26'),
(22, 'BY16-20251_D', '5', 'l6eDqoJR_D', 'testing', 'duplicate', 'non gst', '0', '5', '756', '150', 'number', '113400', 'asfdfgh', '0', '1', '2025-04-22 23:58:07', '2025-04-24 02:12:26'),
(23, 'BY16-20251_D', '5', 'l6eDqoJR_D', 'testing', 'duplicate', 'non gst', '0', '1', '2', '1000', 'sq.ft', '2000', 'saas', '0', '1', '2025-04-22 23:58:29', '2025-04-24 02:12:26'),
(24, 'BY16-20251_D', '5', 'l6eDqoJR_D', 'testing', 'duplicate', 'non gst', '0', '5', '756', '160', 'number', '120960', 'asfdfgh', '0', '1', '2025-04-22 23:58:29', '2025-04-24 02:12:26'),
(25, 'BY16-20251_D', '5', 'l6eDqoJR_D', 'testing', 'duplicate', 'non gst', '0', '1', '2', '1000', 'sq.ft', '2000', 'saas', '0', '1', '2025-04-22 23:59:07', '2025-04-24 02:12:26'),
(26, 'BY16-20251_D', '5', 'l6eDqoJR_D', 'testing', 'duplicate', 'non gst', '0', '5', '756', '160', 'number', '120960', 'asfdfgh', '0', '1', '2025-04-22 23:59:07', '2025-04-24 02:12:26'),
(27, 'BY16-20251_D', '5', 'l6eDqoJR_D', 'testing', 'duplicate', 'non gst', '0', '1', '2', '1000', 'sq.ft', '2000', 'saas', '0', '1', '2025-04-23 00:00:10', '2025-04-24 02:12:26'),
(28, 'BY16-20251_D', '5', 'l6eDqoJR_D', 'testing', 'duplicate', 'non gst', '0', '5', '756', '160', 'number', '120960', 'asfdfgh', '0', '1', '2025-04-23 00:00:10', '2025-04-24 02:12:26'),
(29, 'BY16-20254_D', '2', 'tezAyIfg_D', 'test22', 'duplicate', 'gst', '0', '7', '756', '154', 'months', '116424', 'gfc', '0', '1', '2025-04-23 00:44:20', '2025-04-29 05:59:48'),
(30, 'BY16-20254_D', '2', 'tezAyIfg_D', 'test22', 'duplicate', 'gst', '0', '4', '478', '120', 'sq.ft', '57360', 'vnn', '0', '1', '2025-04-23 00:44:20', '2025-04-29 05:59:48');

-- --------------------------------------------------------

--
-- Table structure for table `client_details`
--

CREATE TABLE `client_details` (
  `id` int NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `company_name` varchar(100) DEFAULT NULL,
  `ph_no` bigint DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `pan_no` varchar(10) DEFAULT NULL,
  `gst_no` varchar(50) DEFAULT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `created_by` varchar(50) DEFAULT NULL,
  `last_updated_by` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `client_details`
--

INSERT INTO `client_details` (`id`, `name`, `company_name`, `ph_no`, `email`, `pan_no`, `gst_no`, `address`, `created_by`, `last_updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Sagaraa', 'aa', 8978458796, 'sagar@elphilltechnology.com', 'GTRYU7894P', '45KJHGFR56', 'Barasat, North 24 pgs ', '2', NULL, NULL, '2025-04-03 01:27:18'),
(2, 'Rajukumar', 'Raju Enterprise', 8978458796, 'raju@elphilltechnology.com', 'RRYU1294U', '56TRE32WEQ', 'Kolkata', '2', NULL, NULL, '2025-04-03 08:21:15'),
(3, 'Ram', NULL, 7845129874, 'ram@elphilltechnology.com', 'RRYU1295T', '457RE32WEL', 'Barasat', '2', NULL, '2025-04-10 06:33:12', '2025-04-10 06:33:12'),
(4, 'Ram Kumar', NULL, 7845129874, 'ram@elphilltechnology.com', 'RRYU1295T', '457RE32WEL', 'Barasat', '2', NULL, '2025-04-10 06:38:04', '2025-04-10 06:38:04'),
(5, 'Abhi Sen', NULL, 7845129874, 'ram@elphilltechnology.com', 'RRYU1295TT', '457RE32WEL', 'Barasat', '1', '1', '2025-04-10 06:41:09', '2025-04-12 07:33:48'),
(6, 'Rohit Sharma', 'Rohit Company', 4758697485, 'rohit@email.com', 'WE2345678Y', '78OIUY45', 'Delhi', NULL, NULL, '2025-04-22 00:46:07', '2025-04-22 00:46:07'),
(8, 'Sagarsssss', NULL, 4758697485, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL),
(9, 'Rohit Sharma', NULL, 8978458796, NULL, NULL, NULL, 'df', '2', NULL, '2025-05-16 01:07:12', '2025-05-16 01:07:12');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hsn_list`
--

CREATE TABLE `hsn_list` (
  `hsn_id` int NOT NULL,
  `hsn_code` varchar(100) DEFAULT NULL,
  `gst` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `hsn_list`
--

INSERT INTO `hsn_list` (`hsn_id`, `hsn_code`, `gst`) VALUES
(1, '998434', '18'),
(2, '998391', '18'),
(3, '998393', '18'),
(4, '998313', '18'),
(5, '370295', '18'),
(6, '3920', '18'),
(7, '998912', '18'),
(8, '4821', '18'),
(9, '6307', '12'),
(10, '39199090', '18'),
(11, '5209', '18'),
(12, '5407', '18'),
(13, '480251', '12'),
(14, '5903', '18'),
(15, '39204900', '18'),
(16, '3921', '18'),
(17, '998431', '18'),
(18, '998314', '18'),
(19, '4911', '12'),
(20, '32151190', '18'),
(21, '998316', '18'),
(22, '6306', '18'),
(23, '3926', '18'),
(24, '39269099', '18'),
(25, '58079090', '12'),
(26, '7009', '18'),
(27, '998366', '18'),
(28, '4911 + 3926', '18'),
(29, '998415', '18');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client_billing`
--

CREATE TABLE `tbl_client_billing` (
  `id` int NOT NULL,
  `client_id` int NOT NULL,
  `unique_id` int NOT NULL,
  `type` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `rate` int NOT NULL,
  `quantity` int NOT NULL,
  `price` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ph_no` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `signature` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `ph_no`, `signature`, `email_verified_at`, `password`, `remember_token`, `role`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Sagar', 'sagar@elphilltechnology.com', '9874561234', '1746179501_3.webp', NULL, '$2y$10$pbS2S2w6l0Cm9z2uAXw4KerqwCqKLh3dTXc.LOBJetbYTHIXO9E5G', NULL, 'user', '1', '2025-04-11 03:03:14', '2025-05-02 03:55:21'),
(2, 'Sagar1', 'sagar1@elphilltechnology.com', '8574961425', '1746179501_3.webp', NULL, '$2y$10$pbS2S2w6l0Cm9z2uAXw4KerqwCqKLh3dTXc.LOBJetbYTHIXO9E5G', NULL, 'admin', '1', '2025-04-11 03:08:08', '2025-05-02 04:59:22'),
(6, 'sd', 'rohit@email.com', '7474747474', '1746179847_6.webp', NULL, '$2y$10$PS0XjChOXdPU1k5jOVq5UuZ7Tt/iiaocceaSc24gNrfqY.l.bGtT2', NULL, 'user', '1', '2025-05-02 04:27:27', '2025-05-02 04:27:27'),
(7, 'sdfsad', 'sdfgsdf@elphilltechnology.com', '4578963214', '1746179890_7.webp', NULL, '$2y$10$UKTxeniO5yN7yyd1CJ6SSu/K.LYVsxhX/JZyOHFr1BGc0KwsI.VgW', NULL, 'user', '1', '2025-05-02 04:28:10', '2025-05-02 04:59:51'),
(8, 'sdaf', 'sadfg@elphilltechnology.com', '4578987845', '1746180211_8.webp', NULL, '$2y$10$7kKVxWLb8UK19ydSvg/.Tex3j.bWYjh2pwv288w7qn6Mq3qGYkWou', NULL, 'user', '1', '2025-05-02 04:33:31', '2025-05-02 04:33:31'),
(9, 'ngd', 'ngnf@f.g', '4545454545', '1746180392_9.webp', NULL, '$2y$10$MIlfnxlBWsH4JMA03fvVk.vI6KzMdMpn8tLCTw.cZ164psHgGhPhC', NULL, 'user', '1', '2025-05-02 04:36:32', '2025-05-02 04:36:32');

-- --------------------------------------------------------

--
-- Table structure for table `work_type_1`
--

CREATE TABLE `work_type_1` (
  `id` int NOT NULL,
  `wt_1_item` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `work_type_1`
--

INSERT INTO `work_type_1` (`id`, `wt_1_item`) VALUES
(1, 'Animation'),
(2, 'Content Writing'),
(3, 'Design'),
(4, 'Editing'),
(5, 'Indexing'),
(6, 'Lamination'),
(7, 'Marketing'),
(8, 'Printing'),
(9, 'Renewal'),
(10, 'Scan'),
(11, 'Software'),
(12, 'Standee'),
(13, 'Stationery Items'),
(14, 'Blank'),
(15, 'Video and Photo shooting'),
(16, 'Data Entry &\nDigitization'),
(17, 'One -Way Vision Printed Material'),
(18, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `work_type_2`
--

CREATE TABLE `work_type_2` (
  `id` int NOT NULL,
  `wt_1_id` varchar(10) NOT NULL,
  `wt_2_item` varchar(100) NOT NULL,
  `price_rate` bigint NOT NULL DEFAULT '0',
  `hsn_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `work_type_2`
--

INSERT INTO `work_type_2` (`id`, `wt_1_id`, `wt_2_item`, `price_rate`, `hsn_id`) VALUES
(1, '1', 'Book Cover Animation', 0, '1'),
(2, '1', 'Card Animation', 0, '1'),
(3, '1', 'Explainer Video Animation', 0, '1'),
(4, '2', 'Content Writing', 0, '2'),
(5, '2', 'Copy Editing', 0, '3'),
(6, '3', 'Award Design', 0, '5'),
(7, '3', 'Birthday Card Design', 0, '5'),
(8, '3', 'Book Cover Design', 0, '5'),
(9, '3', 'Book Layout/Typesetting', 0, '5'),
(10, '3', 'Brochure Design', 0, '5'),
(11, '3', 'Card Design', 0, '5'),
(12, '3', 'Catalogue Design', 0, '5'),
(13, '3', 'Corporate Identity Kit', 0, '5'),
(14, '3', 'Graphic Design', 0, '5'),
(15, '3', 'Identity Card Design', 0, '5'),
(16, '3', 'Leaflet Design', 0, '5'),
(17, '3', 'Letterhead Design', 0, '5'),
(18, '3', 'Logo Design', 0, '5'),
(19, '3', 'Packaging Design', 0, '5'),
(20, '3', 'Social Media Creative', 0, '5'),
(21, '3', 'Stage Design', 0, '5'),
(22, '3', 'Stall Design', 0, '5'),
(23, '3', 'Stationary Design', 0, '5'),
(24, '3', 'Visiting Card Design', 0, '5'),
(25, '3', 'UI/UX Design', 0, '5'),
(26, '3', '3D Design Interior', 0, '5'),
(27, '3', '3D Design Exterior', 0, '5'),
(28, '3', '3D Product Design', 0, '5'),
(29, '3', '2D Stage Design', 0, '5'),
(30, '3', '3D Stage Design', 0, '5'),
(31, '3', '2D Stall Design', 0, '5'),
(32, '3', '3D Stall Design', 0, '5'),
(33, '3', 'Total Design Charges', 0, '5'),
(34, '4', 'Book Editing', 0, '3'),
(36, '3', 'News Paper Editing', 0, '5'),
(37, '3', 'Photo Editing', 0, '5'),
(38, '3', 'Photo Retouching', 0, '5'),
(39, '5', 'Book Indexing', 0, '3'),
(40, '6', 'A4 Lamination', 0, '6'),
(41, '6', 'Card Lamination', 0, '6'),
(42, '7', 'Digital Marketing', 0, '4'),
(43, '7', 'Instagram Marketing', 0, '4'),
(44, '7', 'Facebook Marketing', 0, '4'),
(45, '7', 'LinkedIn Marketing', 0, '4'),
(46, '7', 'X Marketing', 0, '4'),
(48, '8', 'A4 Plain Paper', 0, '20'),
(49, '8', 'A4 Photo Paper', 0, '20'),
(50, '8', 'A4 80 GSM Paper', 0, '20'),
(51, '8', 'A4 100 GSM Bond Paper', 0, '20'),
(52, '8', 'A4 Color Paper', 0, '20'),
(53, '8', 'A4 Color Print', 0, '20'),
(54, '8', 'A4 100 GSM Bond Both Side Print', 0, '20'),
(56, '8', 'A4 80 GSM Both Side Print', 0, '20'),
(57, '8', 'A4 Dummy Note Print', 0, '20'),
(58, '8', '12X18 90 GSM', 0, '20'),
(59, '8', '12X18 100 GSM', 0, '20'),
(60, '8', '12x18 100 GSM Both Side Print', 0, '20'),
(61, '8', '12X18 170 GSM', 0, '20'),
(62, '8', '12x18 170 GSM Both Side Print', 0, '20'),
(63, '8', '12X18 250 GSM', 0, '20'),
(64, '8', '12x18 250 GSM Both Side Print', 0, '20'),
(65, '8', '12X18 300 GSM', 0, '20'),
(66, '8', '12x18 300 GSM Both Side Print', 0, '20'),
(67, '8', '12X18 Transparent Gumming', 0, '20'),
(68, '8', '12x18 Golden Paper', 0, '20'),
(69, '8', '12X18 Texture paper', 0, '20'),
(70, '8', '12x18 Texture paper both side print', 0, '20'),
(71, '8', '12X18 Canvas', 0, '20'),
(72, '8', '12x18 Gumming Sheet Print', 0, '20'),
(73, '8', '12X18 Dummy Note Print', 0, '20'),
(74, '8', 'Legal Paper Print', 0, '20'),
(75, '8', 'Dummy Paper Print', 0, '20'),
(76, '8', '13X19 Print', 0, '20'),
(77, '8', 'Blackback Flex', 0, '8'),
(78, '8', 'Backlit Flex', 0, '8'),
(79, '8', 'Matte Flex', 0, '8'),
(80, '8', 'Star Matte flex', 0, '8'),
(81, '8', 'Star Flex', 0, '8'),
(82, '8', 'A1 Jumbo Paper Print', 0, '8'),
(83, '8', 'A2 Jumbo Paper Print', 0, '8'),
(84, '8', 'Backlit Vinyl Print', 0, '10'),
(85, '8', 'Gloss Vinyl', 0, '10'),
(86, '8', 'Lamination Vinyl', 0, '10'),
(87, '8', 'Matte Vinyl', 0, '10'),
(88, '8', 'Matte Vinyl with Sunboard\r\n3mm', 0, '10'),
(89, '8', 'Matte Vinyl with Sunboard\r\n5mm', 0, '10'),
(90, '8', 'Matte Lamination Print', 0, '10'),
(92, '8', 'LTX Lamination Print', 0, '10'),
(94, '9', 'Domain Renewal', 0, '17'),
(95, '9', 'Email Account Renewal', 0, '29'),
(97, '9', 'Hosting Renewal', 0, '29'),
(98, '10', 'Document Scan', 0, '18'),
(99, '10', 'News Paper Scan', 0, '18'),
(100, '10', 'Photo Scan', 0, '18'),
(101, '10', 'A1 Scan', 0, '18'),
(102, '10', 'A4 Scan', 0, '18'),
(103, '10', '12X18 Scan', 0, '18'),
(104, '11', 'Android App Development', 0, '18'),
(105, '11', 'Billing Software', 0, '18'),
(106, '11', 'IOS App Development', 0, '18'),
(107, '11', 'Software Development', 0, '18'),
(108, '11', 'Software maintenance', 0, '21'),
(109, '11', 'Web Application', 0, '18'),
(110, '12', 'Roll Up Standee', 0, '22'),
(111, '12', 'Roll Up Standee with Fitting', 0, '23'),
(112, '12', 'Roll Up Standee with Print & Fitting', 0, '28'),
(113, '13', 'Card holder', 0, '24'),
(114, '13', 'Ribbon', 0, '25'),
(115, '13', 'Photo Frames', 0, '26'),
(116, '14', 'Sunboard 3mm', 0, '16'),
(117, '14', 'Sunboard 5mm', 0, '16'),
(118, '15', 'Video shooting', 0, '27'),
(119, '15', 'Video Editing', 0, '27'),
(120, '6', 'Lamination with printing', 0, '7'),
(121, '8', 'A4', 0, '20'),
(122, '8', '12X18', 0, '20'),
(123, '8', 'Legal', 0, '20'),
(124, '8', '13X19', 0, '20'),
(125, '8', 'Flex', 0, '8'),
(126, '8', 'Jumbo', 0, '8'),
(127, '8', 'Fabric print (synthetic)', 0, '9'),
(128, '8', 'Vinyl', 0, '10'),
(129, '8', 'Vinyl Wallpaper (PVC-Based)', 0, '10'),
(130, '8', 'Non-Woven Wallpaper\r\n(Print-Ready Coated)', 0, '10'),
(131, '8', 'Fabric-Backed Vinyl\r\nWallpaper', 0, '10'),
(132, '8', 'Canvas Texture\r\nWallpaper', 0, '10'),
(133, '8', 'Peel-and-Stick (Self-\nAdhesive) Wallpaper', 0, '10'),
(134, '8', 'Embossed / 3D Textured\r\nWallpaper', 0, '10'),
(135, '14', 'Canvas (synthetic)', 0, '11'),
(136, '14', 'Fabric (Synthetic)', 0, '12'),
(137, '14', 'Paper a4 etc 12/18 etc', 0, '13'),
(138, '14', 'Flex', 0, '14'),
(139, '14', 'Gloss Vinyl Blank', 0, '15'),
(140, '14', 'Lamination vinyl blank', 0, '15'),
(141, '14', 'Matte Vinyl', 0, '15'),
(142, '14', 'Matte Lamination', 0, '15'),
(143, '10', 'Photocopying', 0, '7'),
(144, '15', 'Photography', 0, '27'),
(145, '16', 'Data Entry &\r\nDigitization', 0, '4'),
(146, '17', 'One-Way Vision Printed Material', 0, '19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill_client`
--
ALTER TABLE `bill_client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bill_gst`
--
ALTER TABLE `bill_gst`
  ADD PRIMARY KEY (`gst_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_bill`
--
ALTER TABLE `client_bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_details`
--
ALTER TABLE `client_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hsn_list`
--
ALTER TABLE `hsn_list`
  ADD PRIMARY KEY (`hsn_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `tbl_client_billing`
--
ALTER TABLE `tbl_client_billing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `work_type_1`
--
ALTER TABLE `work_type_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work_type_2`
--
ALTER TABLE `work_type_2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill_client`
--
ALTER TABLE `bill_client`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `bill_gst`
--
ALTER TABLE `bill_gst`
  MODIFY `gst_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `client_bill`
--
ALTER TABLE `client_bill`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `client_details`
--
ALTER TABLE `client_details`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hsn_list`
--
ALTER TABLE `hsn_list`
  MODIFY `hsn_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_client_billing`
--
ALTER TABLE `tbl_client_billing`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `work_type_1`
--
ALTER TABLE `work_type_1`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `work_type_2`
--
ALTER TABLE `work_type_2`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
