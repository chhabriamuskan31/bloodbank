-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

use bloodbank;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";



--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `bloodinfo`
--
-- drop table bloodinfo;

CREATE TABLE bloodinfo (
  bid int(11) NOT NULL,
  hid int(11) NOT NULL,
  bg varchar(10) NOT NULL,
  PRIMARY KEY (bid),
  CONSTRAINT FK_hospitalbloodinfo FOREIGN KEY (hid) REFERENCES hospitals(id)
) ;


-- Dumping data for table `bloodinfo`
--

INSERT INTO bloodinfo(bid, hid, bg) VALUES
(1, 1, 'B+'),
(2, 2, 'A+');

-- --------------------------------------------------------

--
-- Table structure for table `bloodrequest`
--
-- drop table bloodrequest;
CREATE TABLE bloodrequest (
  reqid int(11) NOT NULL,
  hid int(11) NOT NULL,
  rid int(11) NOT NULL,
  bg varchar(11) NOT NULL,
  status varchar(100) NOT NULL DEFAULT 'Pending',
  PRIMARY KEY (reqid),
  CONSTRAINT FK_hospitalbloodreq FOREIGN KEY (hid) REFERENCES hospitals(id),
  CONSTRAINT FK_receiversbloodreq FOREIGN KEY (rid) REFERENCES receivers(id)
);

--
-- Dumping data for table `bloodrequest`
--

INSERT INTO bloodrequest (reqid, hid, rid, bg, status) VALUES
(1, 1, 1, 'B+', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

CREATE TABLE hospitals (
  id int(11) PRIMARY KEY NOT NULL,
  hname varchar(100) NOT NULL,
  hemail varchar(100) NOT NULL UNIQUE KEY,
  hpassword varchar(100) NOT NULL,
  hphone varchar(100) NOT NULL,
  hcity varchar(100) NOT NULL
);

-- drop table hospitals;
-- Dumping data for table `hospitals`
--

INSERT INTO hospitals (id, hname, hemail, hpassword, hphone, hcity) VALUES
(1, 'Gandhi hospital', 'gandhi@gmail.com', 'gandhi', '7865376358', 'Delhi'),
(2, 'Unknown hospital', 'unknown@gmail.com', 'unknown', '9876543267', 'unknown');

-- --------------------------------------------------------

--
-- Table structure for table `receivers`
--

CREATE TABLE receivers (
  id int(11) PRIMARY KEY NOT NULL,
  rname varchar(100) NOT NULL,
  remail varchar(100) NOT NULL UNIQUE KEY,
  rpassword varchar(100) NOT NULL,
  rphone varchar(100) NOT NULL,
  rbg varchar(10) NOT NULL,
  rcity varchar(100) NOT NULL
); 

--
-- Dumping data for table `receivers`
--

INSERT INTO receivers (id, rname, remail, rpassword, rphone, rbg, rcity) VALUES
(1, 'test', 'test@gmail.com', 'test', '8875643456', 'A+', 'lucknow'),
(2, 'xyz', 'xyz@gmail.com', 'xyz', '8875643456', 'AB+', 'Punjab');

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bloodinfo`
--
ALTER TABLE bloodinfo
  MODIFY bid int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bloodrequest`
--
ALTER TABLE bloodrequest
  MODIFY reqid int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hospitals`
--
ALTER TABLE hospitals
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `receivers`
--
ALTER TABLE receivers
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;


COMMIT;

-- select * from bloodinfo;
-- select * from bloodrequest;

