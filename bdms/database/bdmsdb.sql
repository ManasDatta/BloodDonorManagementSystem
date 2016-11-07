-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2016 at 10:17 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `bdms`
--

CREATE TABLE `bdms` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `dod` varchar(10) DEFAULT NULL,
  `gender` varchar(10) NOT NULL,
  `blood` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bdms`
--

INSERT INTO `bdms` (`fname`, `lname`, `dob`, `dod`, `gender`, `blood`, `address`, `email`, `phone`, `username`, `password`) VALUES
('Abdullah', 'Sadi', '01/01/1993', '02/01/2016', 'Male', 'O+', 'Badda', 'niloy1971@yahoo.com', '01677257730', 'abdullah', 'sadi'),
(' Abid', 'Hasan', '01/01/1993', '01/01/2016', 'Male', 'O+', 'Mirpur', 'abid_hasan112@yahoo.com', '01712918315', 'abid', 'hasan'),
('Ahsanur', 'Rashid', '01/01/1994', '04/21/2016', 'Male', 'O+', 'Bashundhara', 'badhon.rashid@gmail.com', '01777644763', 'ahsanur', 'rashid'),
('Alamin', 'Hossain', '01/01/1993', '03/01/2016', 'Male', 'O+', 'Savar', 'md.alamin5928@gmail.com', '01824225928', 'alamin', 'hossain'),
('Anik', 'Saha', '07/31/1993', '04/01/2016', 'Male', 'AB+', 'Mohammadpur', 'pappubd007@gmail.com', '01672919211', 'anik', 'saha'),
('Ara', 'Hosne', '01/01/1994', '', 'Female', 'O+', 'Bashundhara', 'hosneararumi20@gmail.com', '01680616699', 'ara', 'hosne'),
('Ashik', 'Hasan', '01/01/1993', '06/21/2016', 'Male', 'B+', 'Nikunja', 'viperashik555@gmail.com', '01717416047', 'ashik', 'hasan'),
('Dipon', 'Das', '01/01/1993', '05/01/2016', 'Male', 'A+', 'Nikunja', 'dipon232@gmail.com', '01749610783', 'dipon', 'das'),
('Emon', 'Hossain', '01/01/1994', '04/12/2016', 'Male', 'B+', 'Nikunja', 'emon_live0@yahoo.com', '01683795242', 'emon', 'hossain'),
('Fahim', 'Shahriar', '01/01/1993', '06/01/2016', 'Male', 'B+', 'Nikunja', 'fahimshahriar018@gmail.com', '01836062120', 'fahim', 'shahriar'),
('Jahid', 'Bishwas', '11/20/1992', '07/22/2016', 'Male', 'O-', 'Sadarpur', 'jahidbishwas@gmail.com', '01731728901', 'jahid', 'bishwas'),
('Kaynat', 'Rahee', '03/24/1994', '01/15/2016', 'Male', 'O+', 'Nikunja', 'gs_kaynat@yahoo.com', '01740966056', 'kaynat', 'rahee'),
('Manas', 'Datta', '10/15/1994', '', 'Male', 'B+', 'Nikunja', 'manas.aiub.cse@gmail.com', '01751339699', 'manas', 'datta'),
('Mujtaba', 'Rumi', '01/01/1994', '', 'Male', 'O+', 'Mirpur', 'mujtaba.rumi@yahoo.com', '01680674598', 'mujtaba', 'rumi'),
('Nazmus', 'Sadat', '01/01/1994', '04/21/2016', 'Male', 'AB-', 'Mohakhali', 'saadat.antor@gmail.com', '01744254548', 'nazmus', 'sadat'),
('Omor', 'Faruk', '01/01/1994', '', 'Male', 'A+', 'Badda', 'im.ofarmash@gmail.com', '01670335446', 'omor', 'faruk'),
('Palash', 'Roy', '12/10/1992', '06/22/2016', 'Male', 'O+', 'Mohammadpur', 'palashroy@gmail.com', '01758329262', 'palash', 'roy'),
('Rifat', 'Fatima', '01/01/1994', '07/01/2016', 'Female', 'O-', 'Banani', 'rifatantora@gmail.com', '01925325925', 'rifat', 'fatima'),
('Rizve', 'Amin', '01/01/1994', '02/15/2016', 'Male', 'A+', 'Rampura', 'johirul1993@gmail.com', '01678173287', 'rizve', 'amin'),
('Rokeya', 'Keya', '01/01/1994', '', 'Female', 'A+', 'Narayanganj', 'rokeya_keya@yahoo.com', '01685098809', 'rokeya', 'keya'),
('Ruhul', 'Amin', '01/01/1994', '', 'Male', 'B+', 'Nikunja', 'rumman.ruhul@gmail.com', '01673834042', 'ruhul', 'amin'),
('Shahidul', 'Islam', '01/01/1994', '05/22/2016', 'Male', 'AB+', 'Nikunja', 'shahidulsahel@gmail.com', '01711005036', 'shahidul', 'islam'),
('Shahriar', 'Biggo', '01/01/1994', '06/22/2016', 'Male', 'AB+', 'Uttara', 'shaoibshahriar29@gmail.com', '01723256667', 'shahriar', 'biggo'),
('Shamim', 'Sohel', '01/01/1994', '05/15/2016', 'Male', 'B+', 'Badda', 'srsohel69@gmail.com', '01917662004', 'shamim', 'sohel'),
('Shemul', 'Das', '11/22/1995', '', 'Male', 'AB-', 'Rampura', 'shimultt@gmail.com', '01718885424', 'shemul', 'das'),
('Shirin', 'Shanta', '01/01/1993', '', 'Female', 'O+', 'Badda', 'shan.admission@gmail.com', '01743663558', 'shirin', 'shanta'),
('Shuvo', 'Saha', '12/18/1995', '06/15/2016', 'Male', 'O-', 'Nikunja', 'shuvo.seu.bba@gmail.com', '01761707700', 'shuvo', 'saha'),
('Sowkat', 'Alam', '01/01/1994', '', 'Male', 'A+', 'Badda', 'shakilalam1994@gmail.com', '01620853872', 'sowkat', 'alam'),
('Sufian', 'Setu', '01/01/1993', '03/22/2016', 'Male', 'AB+', 'Nikunja', 'mdabusufiansetu107@gmail.com', '01624918091', 'sufian', 'setu'),
('Sumaiya', 'Jisha', '01/01/1994', '', 'Male', 'B+', 'Banani', 'jisharahaman94@yahoo.com', '01723146585', 'sumaiya', 'jisha'),
('Sumaya', 'Zoha', '01/01/1994', '', 'Female', 'O+', 'Gulshan', 'sumaiyatazzoha@gmail.com', '01682776094', 'sumaya', 'zoha'),
('Waliur', 'Sabit', '02/18/1995', '03/15/2016', 'Male', 'AB-', 'Nikunja', 'waliur.sabit@gmail.com', '01745871019', 'waliur', 'sabit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bdms`
--
ALTER TABLE `bdms`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
