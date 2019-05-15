<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `just_enewstags`;");
E_C("CREATE TABLE `just_enewstags` (
  `tagid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tagname` char(20) NOT NULL DEFAULT '',
  `num` int(10) unsigned NOT NULL DEFAULT '0',
  `isgood` tinyint(1) NOT NULL DEFAULT '0',
  `cid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `tagtitle` char(60) NOT NULL DEFAULT '',
  `tagkey` char(100) NOT NULL DEFAULT '',
  `tagdes` char(255) NOT NULL DEFAULT '',
  `fclast` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`tagid`),
  UNIQUE KEY `tagname` (`tagname`),
  KEY `isgood` (`isgood`),
  KEY `cid` (`cid`),
  KEY `num` (`num`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `just_enewstags` values('1',0xe69599e7a88b,'1','0','0','','','','1557295889');");
E_D("replace into `just_enewstags` values('2',0xe6a8a1e59e8b,'1','0','0','','','','1557295913');");
E_D("replace into `just_enewstags` values('3',0xe5908ee69c9f,'1','0','0','','','','1557295920');");
E_D("replace into `just_enewstags` values('4',0xe5bbbae6a8a1,'1','0','0','','','','1557295931');");

@include("../../inc/footer.php");
?>