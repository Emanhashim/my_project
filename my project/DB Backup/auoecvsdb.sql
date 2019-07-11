DROP TABLE account;

CREATE TABLE `account` (
  `Fname` varchar(30) NOT NULL,
  `Mname` varchar(30) NOT NULL,
  `Lname` varchar(30) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Phone` int(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(40) DEFAULT '3ff8f9dcad3fe711ddf22a59a2b75b2c',
  `Sex` enum('Male','Female') NOT NULL,
  `Birth_date` date NOT NULL,
  `Role` varchar(15) NOT NULL,
  `status` int(1) DEFAULT '0',
  `Photo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO account VALUES("Abebe","Kebede","Esstifo","Admin","933674790","Abebe143@gmail.com","0ab0ba605fb04160bcd7ecfc92b4d06e","Male","2000-06-17","systemadmin","1","17503130898080mpic.jpg");
INSERT INTO account VALUES("Aman","Asmar","Lema","Feti","958585858","ed@gmail.com","3ff8f9dcad3fe711ddf22a59a2b75b2c","Female","1990-06-24","registrar","0","");
INSERT INTO account VALUES("Markos","Eyob","Abere","Mark143","912345678","Mark143@gmail.com","31528198109743225ff9d0cf04d1fdd1","Male","1990-05-13","registrar","1","21758130898080mpic.jpg");
INSERT INTO account VALUES("sahjhsfhg","jfjhjd","hjjhfdghfdhj","test1","912365545","abebe@gmail.com","3ff8f9dcad3fe711ddf22a59a2b75b2c","Male","2001-06-16","registrar","1","");



DROP TABLE campus;

CREATE TABLE `campus` (
  `CampusID` int(11) NOT NULL AUTO_INCREMENT,
  `CampusName` varchar(25) NOT NULL,
  PRIMARY KEY (`CampusID`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

INSERT INTO campus VALUES("20","Kality Branch");
INSERT INTO campus VALUES("21","Megenagna Campus");
INSERT INTO campus VALUES("22","Olympia Campus");



DROP TABLE certificate;

CREATE TABLE `certificate` (
  `Certificate_No` varchar(255) NOT NULL,
  `Idno` varchar(30) NOT NULL,
  `GPA` decimal(4,2) NOT NULL,
  `EndYear` datetime NOT NULL,
  `Verified` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Certificate_No`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO certificate VALUES("AUC001/19","AU1900/15","3.90","2019-06-17 00:00:00","1");



DROP TABLE department;

CREATE TABLE `department` (
  `DepID` int(5) NOT NULL AUTO_INCREMENT,
  `CampusID` varchar(25) NOT NULL,
  `DepName` varchar(25) NOT NULL,
  `Year` int(11) NOT NULL,
  PRIMARY KEY (`DepID`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

INSERT INTO department VALUES("44","22","Accounting","3");
INSERT INTO department VALUES("43","20","Accounting","3");
INSERT INTO department VALUES("42","21","Computer Science","4");



DROP TABLE loginfail;

CREATE TABLE `loginfail` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(25) NOT NULL,
  `Fail_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

INSERT INTO loginfail VALUES("26","Mark","2019-05-27 08:49:03");
INSERT INTO loginfail VALUES("27","Mark","2019-05-27 09:19:41");
INSERT INTO loginfail VALUES("28","Mark","2019-05-27 09:19:55");
INSERT INTO loginfail VALUES("29","mark","2019-05-27 09:20:17");
INSERT INTO loginfail VALUES("30","mark","2019-05-27 09:20:36");
INSERT INTO loginfail VALUES("31","Mark","2019-05-27 09:20:53");
INSERT INTO loginfail VALUES("32","Eman","2019-05-27 09:22:27");
INSERT INTO loginfail VALUES("33","mark","2019-05-27 09:22:41");
INSERT INTO loginfail VALUES("34","Admin","2019-05-27 09:23:11");
INSERT INTO loginfail VALUES("35","Mark","2019-05-27 09:24:46");
INSERT INTO loginfail VALUES("36","mark","2019-05-27 09:26:07");
INSERT INTO loginfail VALUES("37","ccc","2019-06-08 18:47:01");
INSERT INTO loginfail VALUES("38","Ashe","2019-06-08 18:49:47");
INSERT INTO loginfail VALUES("39","mark","2019-06-09 15:43:48");
INSERT INTO loginfail VALUES("40","Mar","2019-06-09 18:15:22");
INSERT INTO loginfail VALUES("41","mark","2019-06-11 20:32:44");
INSERT INTO loginfail VALUES("42","mark","2019-06-12 03:11:14");
INSERT INTO loginfail VALUES("43","Mark143","2019-06-12 15:26:20");
INSERT INTO loginfail VALUES("44","","2019-06-12 16:18:34");
INSERT INTO loginfail VALUES("45","Admin","2019-06-13 17:40:44");
INSERT INTO loginfail VALUES("46","Mark143","2019-06-14 10:24:12");
INSERT INTO loginfail VALUES("47","Eman","2019-06-16 18:20:58");
INSERT INTO loginfail VALUES("48","admin","2019-06-16 19:41:14");
INSERT INTO loginfail VALUES("49","Admin","2019-06-16 19:45:47");
INSERT INTO loginfail VALUES("50","test1","2019-06-16 19:49:50");



DROP TABLE loginhistory;

CREATE TABLE `loginhistory` (
  `Login_id` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(25) NOT NULL,
  `Login_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Login_id`)
) ENGINE=InnoDB AUTO_INCREMENT=118 DEFAULT CHARSET=latin1;

INSERT INTO loginhistory VALUES("26","Mark","2019-05-27 01:16:15");
INSERT INTO loginhistory VALUES("27","Admin","2019-05-27 02:18:22");
INSERT INTO loginhistory VALUES("28","Mark","2019-05-27 03:43:20");
INSERT INTO loginhistory VALUES("29","Admin","2019-05-27 04:07:25");
INSERT INTO loginhistory VALUES("30","Mark","2019-05-27 04:07:46");
INSERT INTO loginhistory VALUES("31","Admin","2019-05-27 08:14:59");
INSERT INTO loginhistory VALUES("32","mark","2019-05-27 08:16:43");
INSERT INTO loginhistory VALUES("33","Admin","2019-05-27 08:46:20");
INSERT INTO loginhistory VALUES("34","mark","2019-05-27 08:49:15");
INSERT INTO loginhistory VALUES("35","Admin","2019-05-27 09:10:39");
INSERT INTO loginhistory VALUES("36","Admin","2019-05-27 09:23:23");
INSERT INTO loginhistory VALUES("37","Admin","2019-05-27 09:25:11");
INSERT INTO loginhistory VALUES("38","mark","2019-05-27 09:27:20");
INSERT INTO loginhistory VALUES("39","mark","2019-05-27 09:48:01");
INSERT INTO loginhistory VALUES("40","Admin","2019-05-27 09:48:16");
INSERT INTO loginhistory VALUES("41","admin","2019-05-27 10:31:19");
INSERT INTO loginhistory VALUES("42","Mark","2019-05-27 10:40:56");
INSERT INTO loginhistory VALUES("43","Admin ","2019-05-27 10:42:50");
INSERT INTO loginhistory VALUES("44","Mark","2019-05-27 10:46:56");
INSERT INTO loginhistory VALUES("45","Admin","2019-05-31 18:22:12");
INSERT INTO loginhistory VALUES("46","mark","2019-05-31 18:29:38");
INSERT INTO loginhistory VALUES("47","mark","2019-05-31 18:35:14");
INSERT INTO loginhistory VALUES("48","mark","2019-05-31 18:46:15");
INSERT INTO loginhistory VALUES("49","mark","2019-05-31 18:51:29");
INSERT INTO loginhistory VALUES("50","Admin","2019-05-31 20:28:08");
INSERT INTO loginhistory VALUES("51","mark","2019-05-31 20:29:44");
INSERT INTO loginhistory VALUES("52","Mark","2019-05-31 20:44:22");
INSERT INTO loginhistory VALUES("53","Admin","2019-05-31 20:48:58");
INSERT INTO loginhistory VALUES("54","mark","2019-05-31 20:53:01");
INSERT INTO loginhistory VALUES("55","mark","2019-05-31 20:53:02");
INSERT INTO loginhistory VALUES("56","Admin","2019-05-31 20:53:56");
INSERT INTO loginhistory VALUES("57","mark","2019-05-31 21:20:04");
INSERT INTO loginhistory VALUES("58","Admin","2019-06-01 16:43:29");
INSERT INTO loginhistory VALUES("59","MARK","2019-06-01 16:47:12");
INSERT INTO loginhistory VALUES("60","mark","2019-06-01 17:03:48");
INSERT INTO loginhistory VALUES("61","mark","2019-06-01 17:03:48");
INSERT INTO loginhistory VALUES("62","Mark","2019-06-01 17:08:47");
INSERT INTO loginhistory VALUES("63","Admin","2019-06-01 18:14:03");
INSERT INTO loginhistory VALUES("64","Admin","2019-06-01 18:15:40");
INSERT INTO loginhistory VALUES("65","Mark","2019-06-08 12:35:26");
INSERT INTO loginhistory VALUES("66","mark","2019-06-08 12:37:09");
INSERT INTO loginhistory VALUES("67","mark","2019-06-08 12:40:01");
INSERT INTO loginhistory VALUES("68","mark","2019-06-08 12:42:48");
INSERT INTO loginhistory VALUES("69","Admin","2019-06-08 12:47:10");
INSERT INTO loginhistory VALUES("70","mark","2019-06-08 13:13:55");
INSERT INTO loginhistory VALUES("71","mark","2019-06-08 13:29:32");
INSERT INTO loginhistory VALUES("72","Admin","2019-06-08 18:42:44");
INSERT INTO loginhistory VALUES("73","mark","2019-06-08 18:45:53");
INSERT INTO loginhistory VALUES("74","Admin","2019-06-08 18:47:29");
INSERT INTO loginhistory VALUES("75","Ashe","2019-06-08 18:50:20");
INSERT INTO loginhistory VALUES("76","mark","2019-06-08 18:56:39");
INSERT INTO loginhistory VALUES("77","mark","2019-06-09 15:43:57");
INSERT INTO loginhistory VALUES("78","mark","2019-06-09 16:09:25");
INSERT INTO loginhistory VALUES("79","mark","2019-06-09 16:28:35");
INSERT INTO loginhistory VALUES("80","mark","2019-06-09 16:42:46");
INSERT INTO loginhistory VALUES("81","mark","2019-06-09 16:48:23");
INSERT INTO loginhistory VALUES("82","mark","2019-06-09 16:54:32");
INSERT INTO loginhistory VALUES("83","Admin","2019-06-09 17:29:37");
INSERT INTO loginhistory VALUES("84","mark","2019-06-09 18:05:58");
INSERT INTO loginhistory VALUES("85","Mark","2019-06-09 18:15:31");
INSERT INTO loginhistory VALUES("86","Mark","2019-06-10 20:43:57");
INSERT INTO loginhistory VALUES("87","Mark","2019-06-11 10:22:50");
INSERT INTO loginhistory VALUES("88","Admin","2019-06-11 10:28:16");
INSERT INTO loginhistory VALUES("89","Admin","2019-06-11 13:23:51");
INSERT INTO loginhistory VALUES("90","Mark143","2019-06-11 13:39:33");
INSERT INTO loginhistory VALUES("91","Mark143","2019-06-11 20:32:57");
INSERT INTO loginhistory VALUES("92","Mark143","2019-06-12 03:11:25");
INSERT INTO loginhistory VALUES("93","Mark143","2019-06-12 10:09:58");
INSERT INTO loginhistory VALUES("94","admin","2019-06-12 15:19:34");
INSERT INTO loginhistory VALUES("95","Mark143","2019-06-12 15:21:09");
INSERT INTO loginhistory VALUES("96","Mark143","2019-06-12 15:28:59");
INSERT INTO loginhistory VALUES("97","Admin","2019-06-12 15:56:09");
INSERT INTO loginhistory VALUES("98","Mark143","2019-06-13 13:56:33");
INSERT INTO loginhistory VALUES("99","Mark143","2019-06-13 14:26:51");
INSERT INTO loginhistory VALUES("100","Mark143","2019-06-13 14:41:56");
INSERT INTO loginhistory VALUES("101","Mark143","2019-06-13 14:45:29");
INSERT INTO loginhistory VALUES("102","Mark143","2019-06-13 15:40:23");
INSERT INTO loginhistory VALUES("103","Mark143","2019-06-13 17:30:09");
INSERT INTO loginhistory VALUES("104","Admin","2019-06-13 17:40:52");
INSERT INTO loginhistory VALUES("105","Mark143","2019-06-13 18:10:48");
INSERT INTO loginhistory VALUES("106","Admin","2019-06-13 18:24:30");
INSERT INTO loginhistory VALUES("107","Mark143","2019-06-14 10:24:04");
INSERT INTO loginhistory VALUES("108","Mark143","2019-06-14 10:24:19");
INSERT INTO loginhistory VALUES("109","Mark143","2019-06-14 13:56:41");
INSERT INTO loginhistory VALUES("110","mARK143","2019-06-16 18:59:16");
INSERT INTO loginhistory VALUES("111","Admin","2019-06-16 19:41:29");
INSERT INTO loginhistory VALUES("112","Admin","2019-06-16 19:43:37");
INSERT INTO loginhistory VALUES("113","Mark143","2019-06-16 19:43:52");
INSERT INTO loginhistory VALUES("114","Admin","2019-06-16 19:46:01");
INSERT INTO loginhistory VALUES("115","test1","2019-06-16 19:53:39");
INSERT INTO loginhistory VALUES("116","Mark143","2019-06-17 00:45:24");
INSERT INTO loginhistory VALUES("117","Admin","2019-06-17 02:25:05");



DROP TABLE logouthistory;

CREATE TABLE `logouthistory` (
  `Logout_id` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(25) NOT NULL,
  `Logout_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`Logout_id`)
) ENGINE=InnoDB AUTO_INCREMENT=93 DEFAULT CHARSET=latin1;

INSERT INTO logouthistory VALUES("51","Admin","2019-06-08 12:50:17");
INSERT INTO logouthistory VALUES("52","Admin","2019-06-08 12:50:17");
INSERT INTO logouthistory VALUES("53","Mark","2019-06-08 13:28:09");
INSERT INTO logouthistory VALUES("54","Mark","2019-06-08 13:30:32");
INSERT INTO logouthistory VALUES("55","Admin","2019-06-08 18:45:43");
INSERT INTO logouthistory VALUES("56","Mark","2019-06-08 18:46:46");
INSERT INTO logouthistory VALUES("57","Mark","2019-06-08 18:46:46");
INSERT INTO logouthistory VALUES("58","Admin","2019-06-08 18:49:15");
INSERT INTO logouthistory VALUES("59","Admin","2019-06-08 18:49:16");
INSERT INTO logouthistory VALUES("60","Ashe","2019-06-08 18:55:32");
INSERT INTO logouthistory VALUES("61","Mark","2019-06-08 18:57:57");
INSERT INTO logouthistory VALUES("62","Mark","2019-06-08 18:57:57");
INSERT INTO logouthistory VALUES("63","Mark","2019-06-09 16:02:14");
INSERT INTO logouthistory VALUES("64","Mark","2019-06-09 16:22:57");
INSERT INTO logouthistory VALUES("65","Mark","2019-06-09 17:29:22");
INSERT INTO logouthistory VALUES("66","Admin","2019-06-09 18:05:49");
INSERT INTO logouthistory VALUES("67","Mark","2019-06-11 10:28:04");
INSERT INTO logouthistory VALUES("68","Admin","2019-06-11 13:23:34");
INSERT INTO logouthistory VALUES("69","Admin","2019-06-11 13:23:34");
INSERT INTO logouthistory VALUES("70","Admin","2019-06-11 13:39:24");
INSERT INTO logouthistory VALUES("71","Mark143","2019-06-11 18:43:21");
INSERT INTO logouthistory VALUES("72","Mark143","2019-06-12 10:09:51");
INSERT INTO logouthistory VALUES("73","Mark143","2019-06-12 10:37:49");
INSERT INTO logouthistory VALUES("74","Mark143","2019-06-12 15:26:10");
INSERT INTO logouthistory VALUES("75","Admin","2019-06-12 15:28:03");
INSERT INTO logouthistory VALUES("76","Admin","2019-06-12 15:58:03");
INSERT INTO logouthistory VALUES("77","Mark143","2019-06-13 14:21:56");
INSERT INTO logouthistory VALUES("78","Mark143","2019-06-13 14:27:14");
INSERT INTO logouthistory VALUES("79","Mark143","2019-06-13 14:43:43");
INSERT INTO logouthistory VALUES("80","Mark143","2019-06-13 16:18:48");
INSERT INTO logouthistory VALUES("81","Mark143","2019-06-13 17:40:36");
INSERT INTO logouthistory VALUES("82","Admin","2019-06-13 18:03:51");
INSERT INTO logouthistory VALUES("83","Mark143","2019-06-13 18:24:23");
INSERT INTO logouthistory VALUES("84","Mark143","2019-06-14 11:48:13");
INSERT INTO logouthistory VALUES("85","Mark143","2019-06-14 13:56:44");
INSERT INTO logouthistory VALUES("86","Mark143","2019-06-16 19:25:20");
INSERT INTO logouthistory VALUES("87","Admin","2019-06-16 19:43:19");
INSERT INTO logouthistory VALUES("88","Admin","2019-06-16 19:43:42");
INSERT INTO logouthistory VALUES("89","Mark143","2019-06-16 19:44:51");
INSERT INTO logouthistory VALUES("90","test1","2019-06-16 20:09:02");
INSERT INTO logouthistory VALUES("91","Mark143","2019-06-17 02:24:48");
INSERT INTO logouthistory VALUES("92","Admin","2019-06-17 02:32:53");



DROP TABLE passwordresethistory;

CREATE TABLE `passwordresethistory` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(25) NOT NULL,
  `Reset_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO passwordresethistory VALUES("1","test1","2019-06-17 02:32:23","1");



DROP TABLE request;

CREATE TABLE `request` (
  `RID` int(11) NOT NULL AUTO_INCREMENT,
  `Idno` varchar(25) NOT NULL,
  `Offices` varchar(30) NOT NULL DEFAULT 'registrar',
  `messages` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`RID`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

INSERT INTO request VALUES("28","S002","registrar","hsdfdshfh","2019-06-12 09:57:43","1");
INSERT INTO request VALUES("23","E002","registrar","pls rg mark","2019-05-31 20:44:07","1");
INSERT INTO request VALUES("24","A001","registrar","erer","2019-06-01 17:03:25","1");
INSERT INTO request VALUES("25","A005","registrar","pls yistekakel","2019-06-08 12:42:31","1");
INSERT INTO request VALUES("26","9512","registrar","fffff","2019-06-08 13:29:07","1");
INSERT INTO request VALUES("29","S003","registrar","udfjgjfdh","2019-06-12 09:58:21","1");



DROP TABLE student;

CREATE TABLE `student` (
  `Fname` varchar(20) NOT NULL,
  `Mname` varchar(20) NOT NULL,
  `Lname` varchar(20) NOT NULL,
  `Sex` enum('male','female','','') NOT NULL,
  `Birth_date` date NOT NULL,
  `Idno` varchar(30) NOT NULL,
  `Phone` int(15) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `CampusID` varchar(50) NOT NULL,
  `Year` int(11) NOT NULL,
  `DepID` varchar(30) NOT NULL,
  `FiledofStudy` varchar(255) NOT NULL,
  `Program` varchar(25) NOT NULL,
  `Status` tinyint(1) NOT NULL DEFAULT '1',
  `Verified` tinyint(1) NOT NULL DEFAULT '0',
  `Photo` varchar(100) NOT NULL,
  PRIMARY KEY (`Idno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO student VALUES("Medhin","Mehari","Syum","female","2000-06-16","AU1348/15","958585858","Ashe@gmail.com","21","2015","42","Bachelor of Art","Regular","1","0","298833183310382fpic.jpg");
INSERT INTO student VALUES("Eman","Hashem","Abdi","female","1990-06-17","AU1349/15","912367777","Eman@gmail.com","21","2006","42","Bachelor of Art","Regular","1","0","240243183310382fpic.jpg");
INSERT INTO student VALUES("Efrata","Meleke","Adugna","female","1996-08-23","AU1900/15","912367784","Efrata@gmail.com","21","2015","42","Bachelor of Art","Regular","1","1","8119137efi.jpg");



