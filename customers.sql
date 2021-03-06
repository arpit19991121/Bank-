
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


-- Database: `bank`
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(255) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `current_balance` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `name`, `email`, `current_balance`) VALUES
(1, 'Ram gulati', 'ramgulati@gmail.com', 35000),
(2, 'Harsimran Bagga', 'baggaji@gmail.com', 65000),
(3, 'Vikas shukla', 'vshukla@gmail.com', 10000),
(4, 'Suresh Raina', 'rainasuresh@gmail.com', 65000),
(5, 'Ankit Yadav', 'yadav234@gmail.com', 75644),
(6, 'Digambar Jain', 'digambarjain@gmail.com', 45000),
(7, 'Karan Mehta', 'kmehta@gmail.com', 35000),
(8, 'Suman Makkar', 'makkarsuman@gmail.com', 65000),
(9, 'Pawan kumar', 'kumarpawan@gmail.com', 75000),
(10, 'Shyam Sharma', 'sharmaji@gmail.com', 80000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);
COMMIT;
