

--
-- Database: `absmeukp_erp`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `att_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_employee` int(11) NOT NULL,
  `emp_timein` datetime NOT NULL,
  `emp_timeout` datetime NOT NULL,
  `emp_note` text NOT NULL,
  PRIMARY KEY (`att_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;



--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `id_company` int(11) NOT NULL AUTO_INCREMENT,
  `name_company` varchar(150) NOT NULL,
  `gst_company` varchar(150) NOT NULL,
  `add_company` text NOT NULL,
  `city_company` varchar(150) NOT NULL,
  `district_company` varchar(150) NOT NULL,
  `state_company` varchar(150) NOT NULL,
  `isocode_country` varchar(150) NOT NULL,
  `po_company` varchar(150) NOT NULL,
  `email_company` varchar(150) NOT NULL,
  `website_company` varchar(150) NOT NULL,
  `phone_company` varchar(150) NOT NULL,
  `fax_company` varchar(150) NOT NULL,
  `mobile_company` varchar(150) NOT NULL,
  PRIMARY KEY (`id_company`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-

--
-- Table structure for table `department_details`
--

CREATE TABLE IF NOT EXISTS `department_details` (
  `deptid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `departmentname` varchar(1000) NOT NULL,
  `place` varchar(1000) NOT NULL,
  `status` bit(1) NOT NULL DEFAULT b'1',
  PRIMARY KEY (`deptid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;


--
-- Table structure for table `employee_certif`
--

CREATE TABLE IF NOT EXISTS `employee_certif` (
  `certif_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_employee` int(11) NOT NULL,
  `emp_certification` varchar(150) NOT NULL,
  `emp_institute` varchar(150) NOT NULL,
  `emp_granteddate` date NOT NULL,
  `emp_validthrudate` date NOT NULL,
  `certif_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`certif_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;



--
-- Table structure for table `employee_depd`
--

CREATE TABLE IF NOT EXISTS `employee_depd` (
  `depd_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_employee` int(11) NOT NULL,
  `emp_dname` varchar(150) NOT NULL,
  `emp_ddob` date NOT NULL,
  `emp_duid` int(11) NOT NULL,
  `depd_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`depd_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;


--
-- Table structure for table `employee_details`
--

CREATE TABLE IF NOT EXISTS `employee_details` (
  `emp_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_no` varchar(150) NOT NULL,
  `emp_fname` varchar(150) NOT NULL,
  `emp_mname` varchar(150) NOT NULL,
  `emp_lname` varchar(150) NOT NULL,
  `emp_nationality` varchar(150) NOT NULL,
  `emp_dob` date NOT NULL,
  `emp_gender` varchar(150) NOT NULL,
  `emp_maritalstatus` varchar(150) NOT NULL,
  `emp_uid` int(11) NOT NULL,
  `emp_drivinglicense` varchar(150) NOT NULL,
  `emp_employmentstatus` varchar(150) NOT NULL,
  `emp_jobtitle` varchar(150) NOT NULL,
  `emp_paygrade` varchar(150) NOT NULL,
  `emp_paddress` text NOT NULL,
  `emp_taddress` text NOT NULL,
  `emp_city` varchar(150) NOT NULL,
  `emp_country` varchar(150) NOT NULL,
  `emp_state` varchar(150) NOT NULL,
  `emp_po` int(11) NOT NULL,
  `emp_homeph` varchar(150) NOT NULL,
  `emp_mobile` varchar(150) NOT NULL,
  `emp_workph` varchar(150) NOT NULL,
  `emp_workemail` varchar(150) NOT NULL,
  `emp_privatemail` varchar(150) NOT NULL,
  `emp_joineddate` date NOT NULL,
  `emp_confirmationdate` date NOT NULL,
  `emp_terminationdate` date NOT NULL,
  `emp_department` varchar(150) NOT NULL,
  `emp_supervisor` varchar(150) NOT NULL,
  `emp_notes` text NOT NULL,
  `emp_status` varchar(150) NOT NULL,
  `managerid` int(11) NOT NULL,
  `emp_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `seen_status` int(1) NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;



--
-- Table structure for table `employee_doc`
--

CREATE TABLE IF NOT EXISTS `employee_doc` (
  `doc_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_employee` varchar(150) NOT NULL,
  `emp_document` varchar(150) NOT NULL,
  `emp_ddateadded` date NOT NULL,
  `emp_dvaliduntil` date NOT NULL,
  `emp_dstatus` int(11) NOT NULL,
  `emp_dDetails` text NOT NULL,
  `uploaded_file` varchar(1000) NOT NULL,
  `doc_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`doc_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;


--
-- Table structure for table `employee_econt`
--

CREATE TABLE IF NOT EXISTS `employee_econt` (
  `econt_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_employee` int(11) NOT NULL,
  `emp_ecname` varchar(150) NOT NULL,
  `emp_ecrelationship` varchar(150) NOT NULL,
  `emp_echomephone` varchar(150) NOT NULL,
  `emp_ecworkphone` varchar(150) NOT NULL,
  `emp_ecmobilephone` varchar(150) NOT NULL,
  `econt_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`econt_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;



--
-- Table structure for table `employee_edu`
--

CREATE TABLE IF NOT EXISTS `employee_edu` (
  `edu_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_employee` int(11) NOT NULL,
  `emp_qualification` varchar(150) NOT NULL,
  `emp_institute` varchar(150) NOT NULL,
  `emp_sdate` date NOT NULL,
  `emp_cdate` date NOT NULL,
  `edu_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`edu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;



--
-- Table structure for table `employee_lang`
--

CREATE TABLE IF NOT EXISTS `employee_lang` (
  `lang_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_employee` int(11) NOT NULL,
  `emp_language` varchar(150) NOT NULL,
  `emp_reading` int(11) NOT NULL,
  `emp_speaking` int(11) NOT NULL,
  `emp_writing` int(11) NOT NULL,
  `emp_understanding` int(11) NOT NULL,
  `lang_timestamp` datetime NOT NULL,
  PRIMARY KEY (`lang_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;



--
-- Table structure for table `employee_skills`
--

CREATE TABLE IF NOT EXISTS `employee_skills` (
  `skill_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_employee` int(11) NOT NULL,
  `emp_skill` varchar(150) NOT NULL,
  `emp_skilldetails` text NOT NULL,
  `skills_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`skill_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;



--
-- Table structure for table `leaveaccount`
--

CREATE TABLE IF NOT EXISTS `leaveaccount` (
  `accountid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `empid` int(10) unsigned NOT NULL,
  `leavetype` varchar(1000) NOT NULL,
  `credit` float(5,2) unsigned DEFAULT NULL,
  `balance` float(5,2) unsigned DEFAULT NULL,
  `fromdt` date DEFAULT NULL,
  `todt` date DEFAULT NULL,
  `status` bit(1) NOT NULL DEFAULT b'1',
  PRIMARY KEY (`accountid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `leave_details`
--

CREATE TABLE IF NOT EXISTS `leave_details` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(10) unsigned NOT NULL,
  `fromdt` date DEFAULT NULL,
  `todt` date DEFAULT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `days` float(5,2) unsigned DEFAULT NULL,
  `title` varchar(1000) NOT NULL,
  `leavereasson` varchar(1000) NOT NULL,
  `url` varchar(150) NOT NULL,
  `status` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=48 ;

