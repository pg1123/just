<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `just_enewsuserloginck`;");
E_C("CREATE TABLE `just_enewsuserloginck` (
  `userid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `andauth` varchar(32) NOT NULL DEFAULT '',
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `just_enewsuserloginck` values('1',0x6664666330666432393364383234323465323030643239373837666564633336);");

@include("../../inc/footer.php");
?>