<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `just_ecms_news_index`;");
E_C("CREATE TABLE `just_ecms_news_index` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `truetime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastdotime` int(10) unsigned NOT NULL DEFAULT '0',
  `havehtml` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `checked` (`checked`),
  KEY `newstime` (`newstime`),
  KEY `truetime` (`truetime`,`id`),
  KEY `havehtml` (`classid`,`truetime`,`havehtml`,`checked`,`id`)
) ENGINE=MyISAM AUTO_INCREMENT=87 DEFAULT CHARSET=utf8");
E_D("replace into `just_ecms_news_index` values('1','4','1','1556697265','1556697503','1557842272','1');");
E_D("replace into `just_ecms_news_index` values('2','4','1','1556784487','1556784659','1557490174','1');");
E_D("replace into `just_ecms_news_index` values('3','4','1','1556784487','1557397734','1557490776','1');");
E_D("replace into `just_ecms_news_index` values('4','4','1','1556784487','1557397746','1557490788','1');");
E_D("replace into `just_ecms_news_index` values('5','4','1','1556784487','1557397756','1557490799','1');");
E_D("replace into `just_ecms_news_index` values('6','4','1','1556784487','1557397756','1557397756','1');");
E_D("replace into `just_ecms_news_index` values('7','4','1','1556784487','1557397756','1557490818','1');");
E_D("replace into `just_ecms_news_index` values('8','4','1','1556784487','1557397768','1557397768','1');");
E_D("replace into `just_ecms_news_index` values('9','4','1','1556784487','1557397768','1557397768','1');");
E_D("replace into `just_ecms_news_index` values('10','4','1','1556784487','1557397768','1557397768','1');");
E_D("replace into `just_ecms_news_index` values('11','4','1','1556784487','1557397768','1557397768','1');");
E_D("replace into `just_ecms_news_index` values('12','4','1','1556784487','1557397768','1557397768','1');");
E_D("replace into `just_ecms_news_index` values('13','4','1','1556784487','1557397768','1557397768','1');");
E_D("replace into `just_ecms_news_index` values('14','4','1','1556784487','1557397788','1557397788','1');");
E_D("replace into `just_ecms_news_index` values('15','4','1','1556784487','1557397788','1557397788','1');");
E_D("replace into `just_ecms_news_index` values('16','4','1','1556784487','1557397788','1557397788','1');");
E_D("replace into `just_ecms_news_index` values('17','4','1','1556784487','1557397788','1557397788','1');");
E_D("replace into `just_ecms_news_index` values('18','4','1','1556784487','1557397788','1557397788','1');");
E_D("replace into `just_ecms_news_index` values('19','4','1','1556784487','1557397788','1557397788','1');");
E_D("replace into `just_ecms_news_index` values('20','4','1','1556784487','1557397788','1557397788','1');");
E_D("replace into `just_ecms_news_index` values('21','4','1','1556784487','1557397788','1557397788','1');");
E_D("replace into `just_ecms_news_index` values('22','4','1','1556784487','1557397788','1557397788','1');");
E_D("replace into `just_ecms_news_index` values('23','4','1','1556784487','1557397788','1557397788','1');");
E_D("replace into `just_ecms_news_index` values('24','4','1','1556784487','1557397788','1557397788','1');");
E_D("replace into `just_ecms_news_index` values('25','4','1','1556784487','1557397788','1557397788','1');");
E_D("replace into `just_ecms_news_index` values('26','4','1','1556784487','1557397802','1557397802','1');");
E_D("replace into `just_ecms_news_index` values('27','4','1','1556784487','1557397802','1557397802','1');");
E_D("replace into `just_ecms_news_index` values('28','4','1','1556784487','1557397802','1557397802','1');");
E_D("replace into `just_ecms_news_index` values('29','4','1','1556697265','1557403109','1557403109','1');");
E_D("replace into `just_ecms_news_index` values('30','4','1','1556784487','1557403109','1557403109','1');");
E_D("replace into `just_ecms_news_index` values('31','4','1','1556784487','1557403109','1557403109','1');");
E_D("replace into `just_ecms_news_index` values('32','4','1','1556784487','1557403109','1557403109','1');");
E_D("replace into `just_ecms_news_index` values('33','4','1','1556784487','1557403109','1557403109','1');");
E_D("replace into `just_ecms_news_index` values('34','4','1','1556784487','1557403109','1557403109','1');");
E_D("replace into `just_ecms_news_index` values('35','4','1','1556784487','1557403109','1557403109','1');");
E_D("replace into `just_ecms_news_index` values('36','4','1','1556784487','1557403109','1557403109','1');");
E_D("replace into `just_ecms_news_index` values('37','4','1','1556784487','1557403109','1557403109','1');");
E_D("replace into `just_ecms_news_index` values('38','4','1','1556784487','1557403109','1557403109','1');");
E_D("replace into `just_ecms_news_index` values('39','4','1','1556784487','1557403109','1557403109','1');");
E_D("replace into `just_ecms_news_index` values('40','4','1','1556784487','1557403109','1557403109','1');");
E_D("replace into `just_ecms_news_index` values('41','4','1','1556784487','1557403109','1557403109','1');");
E_D("replace into `just_ecms_news_index` values('42','4','1','1556784487','1557403109','1557403109','1');");
E_D("replace into `just_ecms_news_index` values('43','4','1','1556784487','1557403109','1557403109','1');");
E_D("replace into `just_ecms_news_index` values('44','4','1','1556784487','1557403109','1557403109','1');");
E_D("replace into `just_ecms_news_index` values('45','4','1','1556784487','1557403109','1557403109','1');");
E_D("replace into `just_ecms_news_index` values('46','4','1','1556784487','1557403109','1557403109','1');");
E_D("replace into `just_ecms_news_index` values('47','4','1','1556784487','1557403109','1557403109','1');");
E_D("replace into `just_ecms_news_index` values('48','4','1','1556784487','1557403109','1557403109','1');");
E_D("replace into `just_ecms_news_index` values('49','4','1','1556784487','1557403109','1557403109','1');");
E_D("replace into `just_ecms_news_index` values('50','4','1','1556784487','1557403109','1557403109','1');");
E_D("replace into `just_ecms_news_index` values('51','4','1','1556784487','1557403109','1557403109','1');");
E_D("replace into `just_ecms_news_index` values('52','4','1','1556784487','1557403109','1557403109','1');");
E_D("replace into `just_ecms_news_index` values('53','4','1','1556784487','1557403109','1557403109','1');");
E_D("replace into `just_ecms_news_index` values('54','4','1','1556784487','1557403109','1557403109','1');");
E_D("replace into `just_ecms_news_index` values('55','4','1','1556784487','1557403109','1557403109','1');");
E_D("replace into `just_ecms_news_index` values('56','4','1','1556784487','1557403109','1557403109','1');");
E_D("replace into `just_ecms_news_index` values('57','4','1','1556784487','1557403123','1557403123','1');");
E_D("replace into `just_ecms_news_index` values('58','4','1','1556784487','1557403123','1557403123','1');");
E_D("replace into `just_ecms_news_index` values('59','4','1','1556697265','1557403123','1557403123','1');");
E_D("replace into `just_ecms_news_index` values('60','4','1','1556784487','1557403123','1557403123','1');");
E_D("replace into `just_ecms_news_index` values('61','4','1','1556784487','1557403123','1557403123','1');");
E_D("replace into `just_ecms_news_index` values('62','4','1','1556784487','1557403123','1557403123','1');");
E_D("replace into `just_ecms_news_index` values('63','4','1','1556784487','1557403123','1557403123','1');");
E_D("replace into `just_ecms_news_index` values('64','4','1','1556784487','1557403123','1557403123','1');");
E_D("replace into `just_ecms_news_index` values('65','4','1','1556784487','1557403123','1557403123','1');");
E_D("replace into `just_ecms_news_index` values('66','4','1','1556784487','1557403123','1557403123','1');");
E_D("replace into `just_ecms_news_index` values('67','4','1','1556784487','1557403123','1557403123','1');");
E_D("replace into `just_ecms_news_index` values('68','4','1','1556784487','1557403123','1557403123','1');");
E_D("replace into `just_ecms_news_index` values('69','4','1','1556784487','1557403123','1557403123','1');");
E_D("replace into `just_ecms_news_index` values('70','4','1','1556784487','1557403123','1557403123','1');");
E_D("replace into `just_ecms_news_index` values('71','4','1','1556784487','1557403123','1557403123','1');");
E_D("replace into `just_ecms_news_index` values('72','4','1','1556784487','1557403123','1557403123','1');");
E_D("replace into `just_ecms_news_index` values('73','4','1','1556784487','1557403123','1557403123','1');");
E_D("replace into `just_ecms_news_index` values('74','4','1','1556784487','1557403123','1557403123','1');");
E_D("replace into `just_ecms_news_index` values('75','4','1','1556784487','1557403123','1557403123','1');");
E_D("replace into `just_ecms_news_index` values('76','4','1','1556784487','1557403123','1557403123','1');");
E_D("replace into `just_ecms_news_index` values('77','4','1','1556784487','1557403123','1557403123','1');");
E_D("replace into `just_ecms_news_index` values('78','4','1','1556784487','1557403123','1557403123','1');");
E_D("replace into `just_ecms_news_index` values('79','4','1','1556784487','1557403123','1557403123','1');");
E_D("replace into `just_ecms_news_index` values('80','4','1','1556784487','1557403123','1557403123','1');");
E_D("replace into `just_ecms_news_index` values('81','4','1','1556784487','1557403123','1557403123','1');");
E_D("replace into `just_ecms_news_index` values('82','4','1','1556784487','1557403123','1557403123','1');");
E_D("replace into `just_ecms_news_index` values('83','4','1','1556784487','1557403123','1557403123','1');");
E_D("replace into `just_ecms_news_index` values('84','4','1','1556784487','1557403123','1557403123','1');");
E_D("replace into `just_ecms_news_index` values('85','4','1','1556784487','1557403123','1557403123','1');");
E_D("replace into `just_ecms_news_index` values('86','4','1','1556784487','1557403123','1557403123','1');");

@include("../../inc/footer.php");
?>