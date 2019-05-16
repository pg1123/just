<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `just_enewsfile_1`;");
E_C("CREATE TABLE `just_enewsfile_1` (
  `fileid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pubid` bigint(16) unsigned NOT NULL DEFAULT '0',
  `filename` char(60) NOT NULL DEFAULT '',
  `filesize` int(10) unsigned NOT NULL DEFAULT '0',
  `path` char(20) NOT NULL DEFAULT '',
  `adduser` char(30) NOT NULL DEFAULT '',
  `filetime` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `no` char(60) NOT NULL DEFAULT '',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `onclick` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `cjid` int(10) unsigned NOT NULL DEFAULT '0',
  `fpath` tinyint(1) NOT NULL DEFAULT '0',
  `modtype` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`fileid`),
  KEY `id` (`id`),
  KEY `type` (`type`),
  KEY `classid` (`classid`),
  KEY `pubid` (`pubid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `just_enewsfile_1` values('5','1000010000000001',0x39386636616332663139386532636131396633303965323066366532666665382e6a7067,'24182',0x323031392f30352d3130,0x61646d696e,'1557490984','4',0x696d67322e6a7067,'1','0','1','0','1','0');");
E_D("replace into `just_enewsfile_1` values('2','1000010000000002',0x38363032636364353461623532626163333564333436316134646431303938332e6a7067,'24182',0x323031392f30352d3032,0x61646d696e,'1556784597','4',0x696d67322e6a7067,'1','0','2','0','1','0');");
E_D("replace into `just_enewsfile_1` values('3','1000010000000002',0x64383966353331643234343730396165393633646562336566313337623234392e6a7067,'71251',0x323031392f30352d3032,0x61646d696e,'1556784654','4',0x363336393232343733393435323038303832383037373338352e6a7067,'1','0','2','0','1','0');");

@include("../../inc/footer.php");
?>