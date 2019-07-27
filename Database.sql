CREATE TABLE `jobs` (
  `jobID` int(5) NOT NULL AUTO_INCREMENT,
  `cName` varchar(50) DEFAULT NULL,
  `cEmail` varchar(50) DEFAULT NULL,
  `cExperience` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`jobID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;


CREATE TABLE `musician` (
  `MusicianId` varchar(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Musician_Image_URL` varchar(50) NOT NULL,
  `month` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`MusicianId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `orders` (
   `OrderID` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `state` varchar(30) DEFAULT NULL,
  `zip` varchar(5) DEFAULT NULL,
  `creditcard` varchar(20) DEFAULT NULL,
  `month` varchar(10) DEFAULT NULL,
  `year` varchar(10) DEFAULT NULL,
  primary key(`OrderID`)
  ) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;


CREATE TABLE `performance` (
  `performanceID` varchar(10) NOT NULL,
  `musicianID` varchar(10) DEFAULT NULL,
  `month` varchar(20) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`performanceID`),
  KEY `musicianID` (`musicianID`),
  CONSTRAINT `performance_ibfk_1` FOREIGN KEY (`musicianID`) REFERENCES `musician` (`MusicianId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

insert into performance values('P001','M001','January','Melanie Morris');
insert into performance values('P002','M002','February','Tahoe Greg');
insert into performance values('P003','M003','March','St Vincent');
insert into performance values('P004','M004','April','David George');



CREATE TABLE `product` (
  `id_product` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(250) NOT NULL,
  `Product_Image_URL` varchar(50) DEFAULT NULL,
  `quantity` int(4) DEFAULT NULL,
  `price` decimal(6,2) NOT NULL,
  PRIMARY KEY (`id_product`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

create table OrderItems(
  `OrderID` int(5) NOT NULL AUTO_INCREMENT,
  `product` varchar(20) DEFAULT NULL,
  `qty` int(3) DEFAULT NULL,
  `cost` varchar(5),
  `price` varchar(5),
   primary key(`OrderID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
