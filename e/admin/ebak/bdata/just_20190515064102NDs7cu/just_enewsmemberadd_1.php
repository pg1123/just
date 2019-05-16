<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `just_enewsmemberadd`;");
E_C("CREATE TABLE `just_enewsmemberadd` (
  `userid` int(10) unsigned NOT NULL DEFAULT '0',
  `truename` varchar(20) NOT NULL DEFAULT '',
  `oicq` varchar(25) NOT NULL DEFAULT '',
  `msn` varchar(120) NOT NULL DEFAULT '',
  `mycall` varchar(30) NOT NULL DEFAULT '',
  `phone` varchar(30) NOT NULL DEFAULT '',
  `address` varchar(255) NOT NULL DEFAULT '',
  `zip` varchar(8) NOT NULL DEFAULT '',
  `spacestyleid` smallint(6) NOT NULL DEFAULT '0',
  `homepage` varchar(200) NOT NULL DEFAULT '',
  `saytext` text NOT NULL,
  `company` varchar(255) NOT NULL DEFAULT '',
  `fax` varchar(30) NOT NULL DEFAULT '',
  `userpic` varchar(200) NOT NULL DEFAULT '',
  `spacename` varchar(255) NOT NULL DEFAULT '',
  `spacegg` text NOT NULL,
  `viewstats` int(11) NOT NULL DEFAULT '0',
  `regip` varchar(20) NOT NULL DEFAULT '',
  `lasttime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastip` varchar(20) NOT NULL DEFAULT '',
  `loginnum` int(10) unsigned NOT NULL DEFAULT '0',
  `regipport` varchar(6) NOT NULL DEFAULT '',
  `lastipport` varchar(6) NOT NULL DEFAULT '',
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `just_enewsmemberadd` values('1','','','','','','','','1','','','','','','','','0',0x3132372e302e302e31,'1557565535',0x3132372e302e302e31,'21',0x3333323834,0x3439333338);");
E_D("replace into `just_enewsmemberadd` values('2','','','','','','','','1','','','','','','','','0',0x3132372e302e302e31,'1557873374',0x312e3230332e38342e323533,'24',0x3532393332,0x3333363235);");
E_D("replace into `just_enewsmemberadd` values('3','','','','','','','','1','','','','','','','','0',0x3132372e302e302e31,'1557581637',0x3132372e302e302e31,'1',0x3537323530,0x3537323530);");
E_D("replace into `just_enewsmemberadd` values('4','','','','','','','','1','','','','','','','','0',0x3138322e3130372e3130352e3132,'1557834589',0x3138322e3130372e3130352e3132,'1',0x3536303537,0x3536303537);");

@include("../../inc/footer.php");
?>