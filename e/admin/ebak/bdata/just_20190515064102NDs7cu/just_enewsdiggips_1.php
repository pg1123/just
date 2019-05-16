<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `just_enewsdiggips`;");
E_C("CREATE TABLE `just_enewsdiggips` (
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `id` int(11) NOT NULL DEFAULT '0',
  `ips` mediumtext NOT NULL,
  KEY `classid` (`classid`,`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `just_enewsdiggips` values('4','2',0x2c3132372e302e302e312c);");
E_D("replace into `just_enewsdiggips` values('4','1',0x2c3132372e302e302e312c3138322e3130372e3130352e31322c312e3230332e38342e3235332c);");
E_D("replace into `just_enewsdiggips` values('4','5',0x2c3132372e302e302e312c);");
E_D("replace into `just_enewsdiggips` values('4','4',0x2c3132372e302e302e312c);");
E_D("replace into `just_enewsdiggips` values('4','80',0x2c3132372e302e302e312c);");
E_D("replace into `just_enewsdiggips` values('4','84',0x2c3132372e302e302e312c);");
E_D("replace into `just_enewsdiggips` values('4','49',0x2c3132372e302e302e312c);");
E_D("replace into `just_enewsdiggips` values('4','3',0x2c312e3230332e38342e3235332c);");

@include("../../inc/footer.php");
?>