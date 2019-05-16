<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `just_enewsmember`;");
E_C("CREATE TABLE `just_enewsmember` (
  `userid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` char(20) NOT NULL DEFAULT '',
  `password` char(32) NOT NULL DEFAULT '',
  `rnd` char(20) NOT NULL DEFAULT '',
  `email` char(50) NOT NULL DEFAULT '',
  `registertime` int(10) unsigned NOT NULL DEFAULT '0',
  `groupid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `userfen` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `userdate` int(10) unsigned NOT NULL DEFAULT '0',
  `money` float(11,2) NOT NULL DEFAULT '0.00',
  `zgroupid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `havemsg` tinyint(1) NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `salt` char(8) NOT NULL DEFAULT '',
  `userkey` char(12) NOT NULL DEFAULT '',
  `ingid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `agid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `isern` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`userid`),
  UNIQUE KEY `username` (`username`),
  KEY `groupid` (`groupid`),
  KEY `ingid` (`ingid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `just_enewsmember` values('1',0x77696e64,0x6663363239636536663131373830393434663363323465326136623934313430,0x486a586c6f5355374c596f5a48526c4d426d3373,0x77696e644071712e636f6d,'1556788540','1','0','0','0.00','0','0','1',0x69704a457977,0x647465317575514768304a75,'0','0','0');");
E_D("replace into `just_enewsmember` values('2',0x72756e,0x6133623465353665363239616564633731653161386366303536343536653465,0x4e464c426a39634c546f4d336873444251696d46,0x77696e64314071712e636f6d,'1557576373','1','0','0','0.00','0','0','1',0x433771637753,0x794b56576d7a506a54644a55,'0','0','0');");
E_D("replace into `just_enewsmember` values('3',0x61646d696e31,0x3433653330366264366531373964303862333539613834356164343830656661,0x64364e50574a5a78634c4979426d644175485a42,0x313140736461662e61736466,'1557581637','1','0','0','0.00','0','0','1',0x6e6341664c76,0x78704b345a7535484357616c,'0','0','0');");
E_D("replace into `just_enewsmember` values('4',0x616e6c696e61,0x3761353638396638363930616535383236313563663664653264636565386462,0x7067754254344e4d42345a766b35657a68765a45,0x3434363338333630324071712e636f6d,'1557834589','1','0','0','0.00','0','0','1',0x37506b676465,0x6d3959464474474953476477,'0','0','0');");

@include("../../inc/footer.php");
?>