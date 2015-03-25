-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2015 at 02:44 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_purco_cms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_action_perm`
--

CREATE TABLE IF NOT EXISTS `tbl_action_perm` (
`Action_Id` int(225) NOT NULL,
  `RId` int(225) DEFAULT NULL,
  `Page_Id` int(225) DEFAULT NULL,
  `sub_page_Id` int(225) DEFAULT NULL,
  `StartDate` varchar(100) DEFAULT NULL,
  `EndDate` varchar(100) DEFAULT NULL,
  `ContentAdd` int(25) DEFAULT NULL,
  `ContentUpdate` int(25) DEFAULT NULL,
  `ContentView` int(25) DEFAULT NULL,
  `ContentDelete` int(25) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_action_perm`
--

INSERT INTO `tbl_action_perm` (`Action_Id`, `RId`, `Page_Id`, `sub_page_Id`, `StartDate`, `EndDate`, `ContentAdd`, `ContentUpdate`, `ContentView`, `ContentDelete`) VALUES
(9, 9, 20, NULL, '03/31/2015', '03/18/2015', 1, 0, 0, 1),
(10, 7, 6, NULL, '03/02/2015', '03/31/2015', 1, 1, 1, 0),
(11, 8, 11, NULL, '03/29/2015', '04/30/2015', 1, 1, 0, 0),
(14, 7, 20, NULL, '03/29/2015', '12/30/2016', 0, 0, 1, 0),
(16, 7, 6, NULL, '03/15/2015', '03/19/2015', 1, 0, 0, 1),
(17, 3, 16, 1, '03/24/2015', '03/25/2015', 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_address_all`
--

CREATE TABLE IF NOT EXISTS `tbl_address_all` (
`Address_Id` int(225) NOT NULL,
  `Main_Id` varchar(225) NOT NULL,
  `Address_name` varchar(100) DEFAULT NULL,
  `Address1` varchar(100) DEFAULT NULL,
  `Address2` varchar(100) DEFAULT NULL,
  `City` varchar(100) DEFAULT NULL,
  `State` varchar(100) DEFAULT NULL,
  `Country` varchar(100) DEFAULT NULL,
  `Postal_code` varchar(50) DEFAULT NULL,
  `Last_modified` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_address_all`
--

INSERT INTO `tbl_address_all` (`Address_Id`, `Main_Id`, `Address_name`, `Address1`, `Address2`, `City`, `State`, `Country`, `Postal_code`, `Last_modified`) VALUES
(1, 'rbX', 'Mailing Address', 'office 2', 'Street 11', 'Karachi', 'select', 'select', '3211', '2015-03-23'),
(2, 'rbX', 'Residential Address', 'house #123', 'Street 34', 'Karachi', 'select', 'select', '1213', '2015-03-23'),
(3, 'qpw', 'Mailing Address', 'street 11 ', 'house 4', 'Florida', 'select', 'select', '1234', '2015-03-23'),
(4, 'qpw', 'Residential Address', 'street 11 ', 'house 6', 'Florida', 'select', 'select', '1234', '2015-03-23'),
(5, '7gA', 'Mailing Address', '', '', '', '', '', '', '2015-03-23'),
(6, '7gA', 'Residential Address', '', '', '', '', '', '', '2015-03-23');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact_info`
--

CREATE TABLE IF NOT EXISTS `tbl_contact_info` (
`ContactId` int(225) NOT NULL,
  `Main_Id` varchar(225) NOT NULL,
  `Phone_no` varchar(100) DEFAULT NULL,
  `Fax_no` varchar(100) DEFAULT NULL,
  `Email_address` varchar(100) DEFAULT NULL,
  `Mobile` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact_info`
--

INSERT INTO `tbl_contact_info` (`ContactId`, `Main_Id`, `Phone_no`, `Fax_no`, `Email_address`, `Mobile`) VALUES
(1, 'rbX', '2222222', '111', 'aaa@aaa.com', NULL),
(2, 'qpw', '1222334444', ' 1223', 'acb@office.com', NULL),
(3, '7gA', '', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee_details`
--

CREATE TABLE IF NOT EXISTS `tbl_employee_details` (
`ID` int(225) NOT NULL,
  `Firstname` varchar(100) DEFAULT NULL,
  `Middlename` varchar(50) DEFAULT NULL,
  `Lastname` varchar(50) DEFAULT NULL,
  `EmployeeManager` varchar(100) DEFAULT NULL,
  `ActiveStatus` int(50) DEFAULT NULL,
  `Birthdate` date DEFAULT NULL,
  `SSN` varchar(100) DEFAULT NULL,
  `LisenceNO` varchar(225) DEFAULT NULL,
  `LisenceDate` varchar(100) DEFAULT NULL,
  `HireDate` varchar(100) DEFAULT NULL,
  `TerminationDate` varchar(100) DEFAULT NULL,
  `ReHireDate` varchar(100) DEFAULT NULL,
  `ReTerminationDate` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `Emp_Id` varchar(225) DEFAULT NULL,
  `RId` int(225) DEFAULT NULL,
  `LastModified` varchar(100) DEFAULT NULL,
  `LoginName` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_employee_details`
--

INSERT INTO `tbl_employee_details` (`ID`, `Firstname`, `Middlename`, `Lastname`, `EmployeeManager`, `ActiveStatus`, `Birthdate`, `SSN`, `LisenceNO`, `LisenceDate`, `HireDate`, `TerminationDate`, `ReHireDate`, `ReTerminationDate`, `Password`, `Emp_Id`, `RId`, `LastModified`, `LoginName`) VALUES
(3, 'Ali', 'Ahmed', 'Shah', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ali123', 'rbX', NULL, NULL, 'AliAhmed'),
(6, 'Zuhaib', 'Ali ', 'Shah', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '123456', 'm1g', NULL, '2015-03-19', 'mz.ashah'),
(7, 'sana', 'Aslam', 'khan', 'sana', 0, '0000-00-00', '231213', '2133', '1313123', '06/02/2009', '0000-00-00', '0000-00-00', '0000-00-00', '123456', 'qpw', NULL, '2015-03-24 01:20:17', 'SanaA'),
(9, 'New', 'Test', 'Check', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '123456', '7gA', NULL, '2015-03-23', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee_info`
--

CREATE TABLE IF NOT EXISTS `tbl_employee_info` (
`Id` int(225) NOT NULL,
  `LegalName` varchar(100) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Emp_Id` varchar(225) DEFAULT NULL,
  `EmergencyContactName` varchar(100) DEFAULT NULL,
  `EmergencyContactNo` varchar(100) DEFAULT NULL,
  `Spouse` varchar(100) DEFAULT NULL,
  `EmailSignature` varchar(100) DEFAULT NULL,
  `LastModified` date DEFAULT NULL,
  `Mobile_no` varchar(100) DEFAULT NULL,
  `Phone` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_employee_info`
--

INSERT INTO `tbl_employee_info` (`Id`, `LegalName`, `Email`, `Emp_Id`, `EmergencyContactName`, `EmergencyContactNo`, `Spouse`, `EmailSignature`, `LastModified`, `Mobile_no`, `Phone`) VALUES
(1, 'Muhammad Ali', 'asd@aaa.com', 'rbX', 'My name', '23434324', 'abcs', 'my sign', '2015-03-23', '1234566', '66666666666'),
(2, 'Sana', 'sana@abc.com', 'qpw', 'dad', '123344555', 'aa', 'Sana aslam', '2015-03-23', '0987654321', '123456'),
(3, '', '', '7gA', '', '', '', '', '2015-03-23', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee_system_preferences`
--

CREATE TABLE IF NOT EXISTS `tbl_employee_system_preferences` (
`Id` int(225) NOT NULL,
  `DefaultClaimView` varchar(100) DEFAULT NULL,
  `DefaultPrinter` varchar(100) DEFAULT NULL,
  `NotificationEmailAddress` varchar(100) DEFAULT NULL,
  `EmailBBCProgram` varchar(100) DEFAULT NULL,
  `Menuorder` varchar(100) DEFAULT NULL,
  `Emp_Id` int(225) DEFAULT NULL,
  `LastModified` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pages`
--

CREATE TABLE IF NOT EXISTS `tbl_pages` (
`Page_Id` int(225) NOT NULL,
  `Page` varchar(100) NOT NULL,
  `Private` varchar(100) DEFAULT NULL,
  `Path` varchar(255) NOT NULL,
  `menuActive` varchar(255) NOT NULL,
  `MenuPosition` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pages`
--

INSERT INTO `tbl_pages` (`Page_Id`, `Page`, `Private`, `Path`, `menuActive`, `MenuPosition`) VALUES
(5, 'Dashboard', '', 'main/dashboard', 'dashboard', 1),
(6, 'Claims', NULL, 'ClaimController/newclaim', 'ClaimController', 2),
(9, 'Clients', NULL, 'ClientController/client', 'client', 3),
(10, 'Library', NULL, 'LibraryController/search', 'search', 4),
(11, 'Calender', NULL, 'CalenderController/calender', 'calender', 5),
(12, 'Employees', NULL, 'EmployeeController/employeeall', 'employees', 6),
(13, 'Letter Templates', NULL, 'LetterController/letter', 'letter', 7),
(14, 'Statute', NULL, 'StatuteController/search', 'Statutesearch', 8),
(15, 'Payments', NULL, 'PaymentController/payment', 'PaymentController', 9),
(16, 'Admin Users', NULL, 'RegController/getall', 'RegController', 10),
(17, 'Organization Type', NULL, 'OrganizationController/organization', 'OrganizationController', 11),
(18, 'Disbursment', NULL, 'DisbursmentController/disbursmentinfo', 'DisbursmentController', 12),
(19, 'Reports', NULL, 'ReportController/create', 'ReportController', 13),
(20, 'Automobile', NULL, 'AutomobileController/make', 'AutomobileController', 14),
(21, 'Checks', NULL, 'CheckController/check', 'CheckController', 15),
(22, 'Geograpical Location', NULL, 'GeographicalController/location', 'GeographicalController', 16),
(23, 'Additional Information', NULL, 'AddotionalInfoController/additionalinfo', 'AddotionalInfoController', 17),
(24, 'Involved Party Type', NULL, 'InvolvedPartyController/involved', 'InvolvedPartyController', 18),
(25, 'Journal Canned Entry', NULL, 'JournalCannedController/jcann', 'JournalCannedController', 19);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_permission_pages`
--

CREATE TABLE IF NOT EXISTS `tbl_permission_pages` (
`PermPageId` int(225) NOT NULL,
  `Page_Id` int(225) NOT NULL,
  `RId` varchar(225) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_permission_pages`
--

INSERT INTO `tbl_permission_pages` (`PermPageId`, `Page_Id`, `RId`) VALUES
(18, 9, '004'),
(19, 10, '004'),
(20, 11, '004'),
(21, 12, '004'),
(22, 13, '004'),
(23, 14, '004'),
(24, 15, '004'),
(25, 16, '004'),
(26, 17, '004'),
(27, 18, '004'),
(28, 19, '004'),
(29, 20, '004'),
(30, 21, '004'),
(31, 22, '004'),
(32, 23, '004'),
(33, 24, '004'),
(34, 0, '0'),
(35, 0, '0'),
(36, 9, '007'),
(37, 19, '007'),
(38, 12, '003'),
(40, 5, '004'),
(41, 6, '004'),
(43, 20, '007'),
(44, 17, '009'),
(45, 16, '003');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_position`
--

CREATE TABLE IF NOT EXISTS `tbl_position` (
`Position_Id` int(225) NOT NULL,
  `PositionTitle` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE IF NOT EXISTS `tbl_roles` (
  `RId` varchar(255) NOT NULL,
  `RoleTitle` varchar(100) NOT NULL,
  `Description` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`RId`, `RoleTitle`, `Description`) VALUES
('002', 'System Administrator', 'System Administrator'),
('003', 'Managers', 'Managers'),
('004', 'Admin', 'Admin'),
('005', 'Specialist', 'Specialist'),
('006', 'In-house Attorney', 'In-house Attorney'),
('007', 'Client', 'Client'),
('008', 'Renter', 'Renter'),
('009', 'Attorney', 'Attorney');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sub_menus`
--

CREATE TABLE IF NOT EXISTS `tbl_sub_menus` (
`Menu_Id` int(11) NOT NULL,
  `Menu_Title` varchar(255) NOT NULL,
  `Menu_Function` varchar(255) NOT NULL,
  `Menu_Controller` varchar(255) NOT NULL,
  `Page_Id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sub_menus`
--

INSERT INTO `tbl_sub_menus` (`Menu_Id`, `Menu_Title`, `Menu_Function`, `Menu_Controller`, `Page_Id`) VALUES
(1, 'Manage Users', 'getall', 'RegController', 16),
(2, 'Manage Role', 'getall2', 'RoleController', 16),
(3, 'Permission to Role', 'permsrole', 'RoleController', 16),
(4, 'Menu Permission', 'Getallrecord', 'PagesController', 16);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
`UId` int(225) NOT NULL,
  `RId` varchar(225) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Full_name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Status` int(50) NOT NULL,
  `DateModified` datetime NOT NULL,
  `CreationDate` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`UId`, `RId`, `Username`, `Password`, `Full_name`, `Email`, `Status`, `DateModified`, `CreationDate`) VALUES
(8, '004', 'admin', 'admin', 'Purco Admin', 'admin@purco.com', 1, '2015-03-18 05:33:21', '2015-03-18 05:29:44'),
(9, '007', 'purcoclient', '123456', 'Purco Client', 'purcoclient@gmail.com', 1, '2015-03-19 11:49:39', '2015-03-19 11:49:39'),
(10, '003', 'manager', '123456', 'Manager Purco', 'manager@purco.com', 0, '2015-03-23 12:06:32', '2015-03-19 03:17:13'),
(11, '007', 'SanaA', '123456', 'sana Aslam khan', 'sana@abc.com', 1, '2015-03-23 02:49:52', '2015-03-23 11:38:17'),
(12, '007', 'AliAhmed', 'asdfg', 'Ali Ahmed Shah', 'ali@aaa.com', 1, '2015-03-23 11:59:41', '2015-03-23 11:59:41'),
(13, '010', 'test', '123456', 'New Test Check', 'test@test.com', 0, '2015-03-23 12:17:30', '2015-03-23 12:17:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_action_perm`
--
ALTER TABLE `tbl_action_perm`
 ADD PRIMARY KEY (`Action_Id`);

--
-- Indexes for table `tbl_address_all`
--
ALTER TABLE `tbl_address_all`
 ADD PRIMARY KEY (`Address_Id`);

--
-- Indexes for table `tbl_contact_info`
--
ALTER TABLE `tbl_contact_info`
 ADD PRIMARY KEY (`ContactId`);

--
-- Indexes for table `tbl_employee_details`
--
ALTER TABLE `tbl_employee_details`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_employee_info`
--
ALTER TABLE `tbl_employee_info`
 ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_employee_system_preferences`
--
ALTER TABLE `tbl_employee_system_preferences`
 ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_pages`
--
ALTER TABLE `tbl_pages`
 ADD PRIMARY KEY (`Page_Id`);

--
-- Indexes for table `tbl_permission_pages`
--
ALTER TABLE `tbl_permission_pages`
 ADD PRIMARY KEY (`PermPageId`);

--
-- Indexes for table `tbl_position`
--
ALTER TABLE `tbl_position`
 ADD PRIMARY KEY (`Position_Id`);

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
 ADD PRIMARY KEY (`RId`);

--
-- Indexes for table `tbl_sub_menus`
--
ALTER TABLE `tbl_sub_menus`
 ADD PRIMARY KEY (`Menu_Id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
 ADD PRIMARY KEY (`UId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_action_perm`
--
ALTER TABLE `tbl_action_perm`
MODIFY `Action_Id` int(225) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tbl_address_all`
--
ALTER TABLE `tbl_address_all`
MODIFY `Address_Id` int(225) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_contact_info`
--
ALTER TABLE `tbl_contact_info`
MODIFY `ContactId` int(225) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_employee_details`
--
ALTER TABLE `tbl_employee_details`
MODIFY `ID` int(225) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_employee_info`
--
ALTER TABLE `tbl_employee_info`
MODIFY `Id` int(225) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_employee_system_preferences`
--
ALTER TABLE `tbl_employee_system_preferences`
MODIFY `Id` int(225) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_pages`
--
ALTER TABLE `tbl_pages`
MODIFY `Page_Id` int(225) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tbl_permission_pages`
--
ALTER TABLE `tbl_permission_pages`
MODIFY `PermPageId` int(225) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `tbl_position`
--
ALTER TABLE `tbl_position`
MODIFY `Position_Id` int(225) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_sub_menus`
--
ALTER TABLE `tbl_sub_menus`
MODIFY `Menu_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
MODIFY `UId` int(225) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
