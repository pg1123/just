<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `just_enewspl_1`;");
E_C("CREATE TABLE `just_enewspl_1` (
  `plid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pubid` bigint(16) NOT NULL DEFAULT '0',
  `username` varchar(20) NOT NULL DEFAULT '',
  `sayip` varchar(20) NOT NULL DEFAULT '',
  `saytime` int(10) unsigned NOT NULL DEFAULT '0',
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `zcnum` smallint(5) unsigned NOT NULL DEFAULT '0',
  `fdnum` smallint(5) unsigned NOT NULL DEFAULT '0',
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `isgood` tinyint(1) NOT NULL DEFAULT '0',
  `saytext` text NOT NULL,
  `eipport` varchar(6) NOT NULL DEFAULT '',
  PRIMARY KEY (`plid`),
  KEY `id` (`id`),
  KEY `classid` (`classid`),
  KEY `pubid` (`pubid`,`checked`,`plid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `just_enewspl_1` values('1','1000010000000001',0x77696e64,0x3132372e302e302e31,'1557043486','1','0','4','1','1','1','0',0xe998bfe890a8e5beb7e58f91e79a84e69292e998bfe696afe89282e88aac,0x3339363134);");
E_D("replace into `just_enewspl_1` values('2','1000010000000001',0x77696e64,0x3132372e302e302e31,'1557043556','1','0','4','0','0','1','0',0x736467667267726667,0x3339363134);");
E_D("replace into `just_enewspl_1` values('3','1000010000000001','',0x3132372e302e302e31,'1557043617','1','0','4','1','0','0','0',0x64766373646166677666736166,0x3339373436);");
E_D("replace into `just_enewspl_1` values('4','1000010000000001',0x77696e64,0x3132372e302e302e31,'1557046879','1','0','4','1','0','1','0',0x61736466736466,0x3431383332);");
E_D("replace into `just_enewspl_1` values('5','1000010000000002',0x77696e64,0x3132372e302e302e31,'1557232004','2','0','4','1','0','1','0',0x6546454146,0x3333323636);");

@include("../../inc/footer.php");
?>