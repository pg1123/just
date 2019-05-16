<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `just_enewsclass`;");
E_C("CREATE TABLE `just_enewsclass` (
  `classid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `bclassid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classname` varchar(50) NOT NULL DEFAULT '',
  `sonclass` text NOT NULL,
  `is_zt` tinyint(1) NOT NULL DEFAULT '0',
  `lencord` smallint(6) NOT NULL DEFAULT '0',
  `link_num` tinyint(4) NOT NULL DEFAULT '0',
  `newstempid` smallint(6) NOT NULL DEFAULT '0',
  `onclick` int(11) NOT NULL DEFAULT '0',
  `listtempid` smallint(6) NOT NULL DEFAULT '0',
  `featherclass` text NOT NULL,
  `islast` tinyint(1) NOT NULL DEFAULT '0',
  `classpath` text NOT NULL,
  `classtype` varchar(10) NOT NULL DEFAULT '',
  `newspath` varchar(20) NOT NULL DEFAULT '',
  `filename` tinyint(1) NOT NULL DEFAULT '0',
  `filetype` varchar(10) NOT NULL DEFAULT '',
  `openpl` tinyint(1) NOT NULL DEFAULT '0',
  `openadd` tinyint(1) NOT NULL DEFAULT '0',
  `newline` int(11) NOT NULL DEFAULT '0',
  `hotline` int(11) NOT NULL DEFAULT '0',
  `goodline` int(11) NOT NULL DEFAULT '0',
  `classurl` varchar(200) NOT NULL DEFAULT '',
  `groupid` smallint(6) NOT NULL DEFAULT '0',
  `myorder` smallint(6) NOT NULL DEFAULT '0',
  `filename_qz` varchar(20) NOT NULL DEFAULT '',
  `hotplline` tinyint(4) NOT NULL DEFAULT '0',
  `modid` smallint(6) NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `firstline` tinyint(4) NOT NULL DEFAULT '0',
  `bname` varchar(50) NOT NULL DEFAULT '',
  `islist` tinyint(1) NOT NULL DEFAULT '0',
  `searchtempid` smallint(6) NOT NULL DEFAULT '0',
  `tid` smallint(6) NOT NULL DEFAULT '0',
  `tbname` varchar(60) NOT NULL DEFAULT '',
  `maxnum` int(11) NOT NULL DEFAULT '0',
  `checkpl` tinyint(1) NOT NULL DEFAULT '0',
  `down_num` tinyint(4) NOT NULL DEFAULT '0',
  `online_num` tinyint(4) NOT NULL DEFAULT '0',
  `listorder` varchar(50) NOT NULL DEFAULT '',
  `reorder` varchar(50) NOT NULL DEFAULT '',
  `intro` text NOT NULL,
  `classimg` varchar(255) NOT NULL DEFAULT '',
  `jstempid` smallint(6) NOT NULL DEFAULT '0',
  `addinfofen` int(11) NOT NULL DEFAULT '0',
  `listdt` tinyint(1) NOT NULL DEFAULT '0',
  `showclass` tinyint(1) NOT NULL DEFAULT '0',
  `showdt` tinyint(1) NOT NULL DEFAULT '0',
  `checkqadd` tinyint(1) NOT NULL DEFAULT '0',
  `qaddlist` tinyint(1) NOT NULL DEFAULT '0',
  `qaddgroupid` text NOT NULL,
  `qaddshowkey` tinyint(1) NOT NULL DEFAULT '0',
  `adminqinfo` tinyint(1) NOT NULL DEFAULT '0',
  `doctime` smallint(6) NOT NULL DEFAULT '0',
  `classpagekey` varchar(255) NOT NULL DEFAULT '',
  `dtlisttempid` smallint(6) NOT NULL DEFAULT '0',
  `classtempid` smallint(6) NOT NULL DEFAULT '0',
  `nreclass` tinyint(1) NOT NULL DEFAULT '0',
  `nreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `nrejs` tinyint(1) NOT NULL DEFAULT '0',
  `nottobq` tinyint(1) NOT NULL DEFAULT '0',
  `ipath` varchar(255) NOT NULL DEFAULT '',
  `addreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `haddlist` tinyint(4) NOT NULL DEFAULT '0',
  `sametitle` tinyint(1) NOT NULL DEFAULT '0',
  `definfovoteid` smallint(6) NOT NULL DEFAULT '0',
  `wburl` varchar(255) NOT NULL DEFAULT '',
  `qeditchecked` tinyint(1) NOT NULL DEFAULT '0',
  `wapstyleid` smallint(6) NOT NULL DEFAULT '0',
  `repreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `pltempid` smallint(6) NOT NULL DEFAULT '0',
  `cgroupid` text NOT NULL,
  `yhid` smallint(6) NOT NULL DEFAULT '0',
  `wfid` smallint(6) NOT NULL DEFAULT '0',
  `cgtoinfo` tinyint(1) NOT NULL DEFAULT '0',
  `bdinfoid` varchar(25) NOT NULL DEFAULT '',
  `repagenum` smallint(5) unsigned NOT NULL DEFAULT '0',
  `keycid` smallint(6) NOT NULL DEFAULT '0',
  `allinfos` int(10) unsigned NOT NULL DEFAULT '0',
  `infos` int(10) unsigned NOT NULL DEFAULT '0',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `oneinfo` tinyint(1) NOT NULL DEFAULT '0',
  `addsql` varchar(255) NOT NULL DEFAULT '',
  `wapislist` tinyint(1) NOT NULL DEFAULT '0',
  `fclast` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`classid`),
  KEY `bclassid` (`bclassid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8");
E_D("replace into `just_enewsclass` values('1','0',0xe69599e7a88b,0x7c347c357c,'0','60','10','0','0','1','','0',0x6a69616f6368656e67,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','1','1','10',0xe69599e7a88b,'1','0','1',0x6e657773,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','1','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1556696990','0','','0','1557872950');");
E_D("replace into `just_enewsclass` values('2','1',0x3344e69599e7a88b,0x7c347c357c,'0','60','10','0','0','1',0x7c317c,'0',0x6a69616f6368656e672f33646a69616f6368656e67,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','1','1','10',0x3344e69599e7a88b,'1','0','1',0x6e657773,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','1','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1556697043','0','','0','1557403162');");
E_D("replace into `just_enewsclass` values('3','1',0x3244e69599e7a88b,0x7c,'0','60','10','0','0','1',0x7c317c,'0',0x6a69616f6368656e672f32646a69616f6368656e67,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','1','1','10',0x3344e69599e7a88b,'1','0','1',0x6e657773,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','1','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1556697076','0','','0','1557403337');");
E_D("replace into `just_enewsclass` values('4','2',0x33642d31,'','0','60','10','1','0','1',0x7c317c327c,'1',0x6a69616f6368656e672f33646a69616f6368656e672f336431,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','1','1','10',0x33642d31,'0','0','1',0x6e657773,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','1','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','86','86','1556697238','0','','0','1557403197');");
E_D("replace into `just_enewsclass` values('5','2',0x33642d32,'','0','60','10','1','0','1',0x7c317c327c,'1',0x6a69616f6368656e672f33646a69616f6368656e672f336432,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','1','1','10',0x33642d31,'0','0','1',0x6e657773,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','1','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1556697258','0','','0','1557403207');");
E_D("replace into `just_enewsclass` values('6','0',0xe8bdafe4bbb62fe68f92e4bbb6,0x7c,'0','60','10','0','0','1','','0',0x7275616e6a69616e6368616a69616e,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','1','1','10',0xe69599e7a88b,'1','0','1',0x6e657773,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','1','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1556863682','0','','0','1557873190');");
E_D("replace into `just_enewsclass` values('7','6',0xe8bdafe4bbb6e4b880,0x7c,'0','60','10','0','0','1',0x7c367c,'0',0x7275616e6a69616e6368616a69616e2f7275616e6a69616e7969,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','1','1','10',0xe8bdafe4bbb6e4b880,'1','0','1',0x6e657773,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','1','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1556869446','0','','0','1557403375');");
E_D("replace into `just_enewsclass` values('8','0',0xe7b4a0e69d90,0x7c,'0','60','10','0','0','1','','0',0x7375636169,0x2e68746d6c,0x592d6d2d64,'0',0x2e68746d6c,'0','1','10','10','10','','0','0','','10','1','1','10',0xe7b4a0e69d90,'1','0','1',0x6e657773,'0','0','2','2',0x69642044455343,0x6e65777374696d652044455343,'','','1','0','0','0','0','0','0','','0','0','0','','1','1','0','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1557843767','0','','0','1557873200');");

@include("../../inc/footer.php");
?>