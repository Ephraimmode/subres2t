-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 16, 2022 at 11:15 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `subres_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `interactions`
--

CREATE TABLE `interactions` (
  `id` int(11) NOT NULL,
  `sector_id` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `interactions`
--

INSERT INTO `interactions` (`id`, `sector_id`, `name`, `date`) VALUES
(2417, 'sector_id', 'name', 'date'),
(2418, '3', 'Materials', '2019-12-05'),
(2419, '6', 'Industrials', '2019-12-11'),
(2420, '2', 'Real Estate', '2020-01-06'),
(2421, '2', 'Real Estate', '2020-01-06'),
(2422, '10', 'Energy', '2020-01-06'),
(2423, '6', 'Industrials', '2020-01-06'),
(2424, '10', 'Energy', '2020-01-06'),
(2425, '2', 'Real Estate', '2020-01-07'),
(2426, '10', 'Energy', '2020-01-07'),
(2427, '10', 'Energy', '2020-01-07'),
(2428, '4', 'Communication Services', '2020-01-08'),
(2429, '1', 'Healthcare', '2020-01-08'),
(2430, '2', 'Real Estate', '2020-01-09'),
(2431, '9', 'Information Technology', '2020-01-10'),
(2432, '10', 'Energy', '2020-01-13'),
(2433, '9', 'Information Technology', '2020-01-14'),
(2434, '10', 'Energy', '2020-01-14'),
(2435, '10', 'Energy', '2020-01-15'),
(2436, '7', 'Consumer Staples', '2020-01-15'),
(2437, '7', 'Consumer Staples', '2020-01-15'),
(2438, '10', 'Energy', '2020-01-15'),
(2439, '10', 'Energy', '2020-01-16'),
(2440, '2', 'Real Estate', '2020-01-17'),
(2441, '10', 'Energy', '2020-01-17'),
(2442, '6', 'Industrials', '2020-01-20'),
(2443, '6', 'Industrials', '2020-01-20'),
(2444, '3', 'Materials', '2020-01-21'),
(2445, '6', 'Industrials', '2020-01-21'),
(2446, '2', 'Real Estate', '2020-01-22'),
(2447, '2', 'Real Estate', '2020-01-22'),
(2448, '10', 'Energy', '2020-01-22'),
(2449, '10', 'Energy', '2020-01-22'),
(2450, '6', 'Industrials', '2020-01-23'),
(2451, '9', 'Information Technology', '2020-01-23'),
(2452, '6', 'Industrials', '2020-01-23'),
(2453, '6', 'Industrials', '2020-01-23'),
(2454, '7', 'Consumer Staples', '2020-01-23'),
(2455, '7', 'Consumer Staples', '2020-01-23'),
(2456, '10', 'Energy', '2020-01-24'),
(2457, '3', 'Materials', '2020-01-27'),
(2458, '6', 'Industrials', '2020-01-27'),
(2459, '3', 'Materials', '2020-01-27'),
(2460, '6', 'Industrials', '2020-01-27'),
(2461, '8', 'Financials', '2020-01-27'),
(2462, '8', 'Financials', '2020-01-27'),
(2463, '7', 'Consumer Staples', '2020-01-28'),
(2464, '9', 'Information Technology', '2020-01-28'),
(2465, '7', 'Consumer Staples', '2020-01-28'),
(2466, '11', 'Utilities', '2020-01-28'),
(2467, '5', 'Consumer Discretionary', '2020-01-29'),
(2468, '1', 'Healthcare', '2020-01-29'),
(2469, '10', 'Energy', '2020-01-30'),
(2470, '2', 'Real Estate', '2020-01-30'),
(2471, '2', 'Real Estate', '2020-01-30'),
(2472, '2', 'Real Estate', '2020-01-30'),
(2473, '3', 'Materials', '2020-01-30'),
(2474, '2', 'Real Estate', '2020-01-31'),
(2475, '9', 'Information Technology', '2020-01-31'),
(2476, '9', 'Information Technology', '2020-01-31'),
(2477, '10', 'Energy', '2020-01-31'),
(2478, '1', 'Healthcare', '2020-01-31'),
(2479, '10', 'Energy', '2020-02-03'),
(2480, '11', 'Utilities', '2020-02-03'),
(2481, '10', 'Energy', '2020-02-04'),
(2482, '6', 'Industrials', '2020-02-04'),
(2483, '5', 'Consumer Discretionary', '2020-02-04'),
(2484, '8', 'Financials', '2020-02-05'),
(2485, '11', 'Utilities', '2020-02-05'),
(2486, '6', 'Industrials', '2020-02-06'),
(2487, '10', 'Energy', '2020-02-07'),
(2488, '7', 'Consumer Staples', '2020-02-07'),
(2489, '10', 'Energy', '2020-02-07'),
(2490, '10', 'Energy', '2020-02-07'),
(2491, '1', 'Healthcare', '2020-02-07'),
(2492, '10', 'Energy', '2020-02-10'),
(2493, '3', 'Materials', '2020-02-11'),
(2494, '10', 'Energy', '2020-02-11'),
(2495, '10', 'Energy', '2020-02-12'),
(2496, '2', 'Real Estate', '2020-02-12'),
(2497, '2', 'Real Estate', '2020-02-12'),
(2498, '3', 'Materials', '2020-02-12'),
(2499, '10', 'Energy', '2020-02-12'),
(2500, '6', 'Industrials', '2020-02-12'),
(2501, '8', 'Financials', '2020-02-13'),
(2502, '8', 'Financials', '2020-02-13'),
(2503, '10', 'Energy', '2020-02-13'),
(2504, '7', 'Consumer Staples', '2020-02-14'),
(2505, '5', 'Consumer Discretionary', '2020-02-17'),
(2506, '2', 'Real Estate', '2020-02-18'),
(2507, '5', 'Consumer Discretionary', '2020-02-18'),
(2508, '10', 'Energy', '2020-02-19'),
(2509, '1', 'Healthcare', '2020-02-19'),
(2510, '1', 'Healthcare', '2020-02-21'),
(2511, '1', 'Healthcare', '2020-02-21'),
(2512, '1', 'Healthcare', '2020-02-21'),
(2513, '3', 'Materials', '2020-02-24'),
(2514, '3', 'Materials', '2020-02-24'),
(2515, '3', 'Materials', '2020-02-24'),
(2516, '10', 'Energy', '2020-02-24'),
(2517, '6', 'Industrials', '2020-02-25'),
(2518, '7', 'Consumer Staples', '2020-02-27'),
(2519, '10', 'Energy', '2020-02-28'),
(2520, '6', 'Industrials', '2020-03-02'),
(2521, '5', 'Consumer Discretionary', '2020-03-03'),
(2522, '5', 'Consumer Discretionary', '2020-03-03'),
(2523, '6', 'Industrials', '2020-03-03'),
(2524, '8', 'Financials', '2020-03-05'),
(2525, '8', 'Financials', '2020-03-05'),
(2526, '8', 'Financials', '2020-03-05'),
(2527, '1', 'Healthcare', '2020-03-06'),
(2528, '9', 'Information Technology', '2020-03-13'),
(2529, '11', 'Utilities', '2020-03-16'),
(2530, '3', 'Materials', '2020-03-16'),
(2531, '11', 'Utilities', '2020-03-16'),
(2532, '11', 'Utilities', '2020-03-16'),
(2533, '11', 'Utilities', '2020-03-16'),
(2534, '8', 'Financials', '2020-03-17'),
(2535, '3', 'Materials', '2020-03-18'),
(2536, '9', 'Information Technology', '2020-03-19'),
(2537, '3', 'Materials', '2020-03-19'),
(2538, '9', 'Information Technology', '2020-03-19'),
(2539, '2', 'Real Estate', '2020-03-20'),
(2540, '2', 'Real Estate', '2020-03-20'),
(2541, '10', 'Energy', '2020-03-20'),
(2542, '5', 'Consumer Discretionary', '2020-03-20'),
(2543, '3', 'Materials', '2020-03-20'),
(2544, '10', 'Energy', '2020-03-23'),
(2545, '5', 'Consumer Discretionary', '2020-03-24'),
(2546, '2', 'Real Estate', '2020-03-25'),
(2547, '2', 'Real Estate', '2020-03-31'),
(2548, '2', 'Real Estate', '2020-04-02'),
(2549, '10', 'Energy', '2020-04-02'),
(2550, '11', 'Utilities', '2020-04-02'),
(2551, '10', 'Energy', '2020-04-03'),
(2552, '8', 'Financials', '2020-04-03'),
(2553, '6', 'Industrials', '2020-04-03'),
(2554, '5', 'Consumer Discretionary', '2020-04-06'),
(2555, '10', 'Energy', '2020-04-08'),
(2556, '2', 'Real Estate', '2020-04-09'),
(2557, '2', 'Real Estate', '2020-04-09'),
(2558, '4', 'Communication Services', '2020-04-09'),
(2559, '10', 'Energy', '2020-04-14'),
(2560, '10', 'Energy', '2020-04-15'),
(2561, '10', 'Energy', '2020-04-20'),
(2562, '7', 'Consumer Staples', '2020-04-20'),
(2563, '3', 'Materials', '2020-05-03'),
(2564, '3', 'Materials', '2020-05-03'),
(2565, '7', 'Consumer Staples', '2020-05-05'),
(2566, '2', 'Real Estate', '2020-05-13'),
(2567, '6', 'Industrials', '2020-02-25');

-- --------------------------------------------------------

--
-- Table structure for table `sector`
--

CREATE TABLE `sector` (
  `id` int(11) NOT NULL,
  `sector_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sector`
--

INSERT INTO `sector` (`id`, `sector_id`, `name`, `date_added`) VALUES
(1, 3, 'Energy', '2022-05-16 14:20:44'),
(2, 2, 'Real Estate', '2022-05-16 14:34:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `interactions`
--
ALTER TABLE `interactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sector`
--
ALTER TABLE `sector`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `interactions`
--
ALTER TABLE `interactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2568;

--
-- AUTO_INCREMENT for table `sector`
--
ALTER TABLE `sector`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
