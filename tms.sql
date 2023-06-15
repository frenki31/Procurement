--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Aid` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
);

--
-- Table structure for table `bids`
--

CREATE TABLE `bids` (
  `TenderID` int(11) NOT NULL,
  `OrgID` varchar(20) NOT NULL,
  `Charge` float NOT NULL,
  `Months` int(11) NOT NULL
);
--
-- Table structure for table `organization`
--
CREATE TABLE `organization` (
  `OrgID` varchar(20) NOT NULL,
  `OrgName` varchar(250) NOT NULL,
  `OrgEmail` tinytext NOT NULL,
  `OrgPass` longtext NOT NULL
);
--
-- Table structure for table `tender`
--
CREATE TABLE `tender` (
  `TenderID` int(11) NOT NULL,
  `TenderNo` varchar(100) NOT NULL,
  `OrgID` varchar(20) DEFAULT NULL,
  `Department` varchar(50) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Price` float NOT NULL,
  `DueDate` datetime NOT NULL,
  `Duration` int(11) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `filetype` varchar(30) NOT NULL,
  `filesize` int(11) NOT NULL,
  `filecontent` mediumblob NOT NULL,
  `CurrentTime` timestamp NULL DEFAULT current_timestamp()
);
--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Aid`);

--
-- Indexes for table `bids`
--
ALTER TABLE `bids`
  ADD PRIMARY KEY (`TenderID`,`OrgID`),
  ADD KEY `OrgID` (`OrgID`);

--
-- Indexes for table `organization`
--
ALTER TABLE `organization`
  ADD PRIMARY KEY (`OrgID`);

--
-- Indexes for table `tender`
--
ALTER TABLE `tender`
  ADD PRIMARY KEY (`TenderID`),
  ADD KEY `OrgID` (`OrgID`);
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tender`
--
ALTER TABLE `tender`
  MODIFY `TenderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- Constraints for table `bids`
--
ALTER TABLE `bids`
  ADD CONSTRAINT `bids_ibfk_1` FOREIGN KEY (`TenderID`) REFERENCES `tender` (`TenderID`),
  ADD CONSTRAINT `bids_ibfk_2` FOREIGN KEY (`OrgID`) REFERENCES `organization` (`OrgID`);

--
-- Constraints for table `tender`
--
ALTER TABLE `tender`
  ADD CONSTRAINT `tender_ibfk_1` FOREIGN KEY (`OrgID`) REFERENCES `organization` (`OrgID`);
