CREATE DATABASE `hiddensms` /*!40100 DEFAULT CHARACTER SET utf8 */;

CREATE TABLE `phone_log` (
  `idphone_log` int(11) NOT NULL AUTO_INCREMENT,
  `Called` varchar(45) DEFAULT NULL,
  `ToState` varchar(45) DEFAULT NULL,
  `CallerCountry` varchar(45) DEFAULT NULL,
  `Direction` varchar(45) DEFAULT NULL,
  `CallerState` varchar(45) DEFAULT NULL,
  `ToZip` varchar(45) DEFAULT NULL,
  `CallSid` varchar(45) DEFAULT NULL,
  `To` varchar(45) DEFAULT NULL,
  `CallerZip` varchar(45) DEFAULT NULL,
  `ToCountry` varchar(45) DEFAULT NULL,
  `ApiVersion` varchar(45) DEFAULT NULL,
  `CalledZip` varchar(45) DEFAULT NULL,
  `CalledCity` varchar(45) DEFAULT NULL,
  `CallStatus` varchar(45) DEFAULT NULL,
  `From` varchar(45) DEFAULT NULL,
  `AccountSid` varchar(45) DEFAULT NULL,
  `CalledCountry` varchar(45) DEFAULT NULL,
  `CallerCity` varchar(45) DEFAULT NULL,
  `Caller` varchar(45) DEFAULT NULL,
  `FromCountry` varchar(45) DEFAULT NULL,
  `ToCity` varchar(45) DEFAULT NULL,
  `ErrorUrl` varchar(255) DEFAULT NULL,
  `FromCity` varchar(45) DEFAULT NULL,
  `CalledState` varchar(45) DEFAULT NULL,
  `ErrorCode` varchar(45) DEFAULT NULL,
  `FromZip` varchar(45) DEFAULT NULL,
  `FromState` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idphone_log`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

CREATE TABLE `sms_log` (
  `idsms_log` int(11) NOT NULL AUTO_INCREMENT,
  `ToCountry` varchar(45) DEFAULT NULL,
  `ToState` varchar(45) DEFAULT NULL,
  `SmsMessageSid` varchar(45) DEFAULT NULL,
  `NumMedia` varchar(45) DEFAULT NULL,
  `ToCity` varchar(45) DEFAULT NULL,
  `FromZip` varchar(45) DEFAULT NULL,
  `SmsSid` varchar(45) DEFAULT NULL,
  `FromState` varchar(45) DEFAULT NULL,
  `SmsStatus` varchar(45) DEFAULT NULL,
  `FromCity` varchar(45) DEFAULT NULL,
  `Body` varchar(45) DEFAULT NULL,
  `FromCountry` varchar(45) DEFAULT NULL,
  `To` varchar(45) DEFAULT NULL,
  `Tozip` varchar(45) DEFAULT NULL,
  `MessageSid` varchar(45) DEFAULT NULL,
  `AccountSid` varchar(45) DEFAULT NULL,
  `From` varchar(45) DEFAULT NULL,
  `ApiVersion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idsms_log`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;



