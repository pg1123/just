<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `just_enewslog`;");
E_C("CREATE TABLE `just_enewslog` (
  `loginid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `logintime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `loginip` varchar(20) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(30) NOT NULL DEFAULT '',
  `loginauth` tinyint(1) NOT NULL DEFAULT '0',
  `ipport` varchar(6) NOT NULL DEFAULT '',
  PRIMARY KEY (`loginid`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=118 DEFAULT CHARSET=utf8");
E_D("replace into `just_enewslog` values('1',0x61646d696e,'2019-05-01 15:44:39',0x3132372e302e302e31,'1','','0',0x3532313036);");
E_D("replace into `just_enewslog` values('2',0x61646d696e,'2019-05-01 17:35:42',0x3132372e302e302e31,'1','','0',0x3537353938);");
E_D("replace into `just_enewslog` values('3',0x61646d696e,'2019-05-01 22:09:08',0x3132372e302e302e31,'1','','0',0x3535353238);");
E_D("replace into `just_enewslog` values('4',0x61646d696e,'2019-05-02 11:53:09',0x3132372e302e302e31,'1','','0',0x3532363434);");
E_D("replace into `just_enewslog` values('5',0x61646d696e,'2019-05-02 14:28:12',0x3132372e302e302e31,'1','','0',0x3536333534);");
E_D("replace into `just_enewslog` values('6',0x61646d696e,'2019-05-02 14:30:25',0x3132372e302e302e31,'1','','0',0x3536343736);");
E_D("replace into `just_enewslog` values('7',0x61646d696e,'2019-05-02 17:38:52',0x3132372e302e302e31,'1','','0',0x3436343838);");
E_D("replace into `just_enewslog` values('8',0x61646d696e,'2019-05-02 18:37:12',0x3132372e302e302e31,'1','','0',0x3537363430);");
E_D("replace into `just_enewslog` values('9',0x61646d696e,'2019-05-03 08:21:31',0x3132372e302e302e31,'1','','0',0x3538393238);");
E_D("replace into `just_enewslog` values('10',0x61646d696e,'2019-05-03 10:54:44',0x3132372e302e302e31,'1','','0',0x3339333238);");
E_D("replace into `just_enewslog` values('11',0x61646d696e,'2019-05-03 14:09:28',0x3132372e302e302e31,'1','','0',0x3434303838);");
E_D("replace into `just_enewslog` values('12',0x61646d696e,'2019-05-03 15:41:01',0x3132372e302e302e31,'1','','0',0x3435353930);");
E_D("replace into `just_enewslog` values('13',0x61646d696e,'2019-05-03 15:41:20',0x3132372e302e302e31,'1','','0',0x3435353930);");
E_D("replace into `just_enewslog` values('14',0x61646d696e,'2019-05-03 15:42:40',0x3132372e302e302e31,'1','','0',0x3435373630);");
E_D("replace into `just_enewslog` values('15',0x61646d696e,'2019-05-03 16:51:45',0x3132372e302e302e31,'1','','0',0x3439313336);");
E_D("replace into `just_enewslog` values('16',0x77696e64,'2019-05-05 15:22:16',0x3132372e302e302e31,'0','','0',0x3338303034);");
E_D("replace into `just_enewslog` values('17',0x61646d696e,'2019-05-05 15:22:20',0x3132372e302e302e31,'1','','0',0x3338303034);");
E_D("replace into `just_enewslog` values('18',0x61646d696e,'2019-05-05 22:17:38',0x3132372e302e302e31,'1','','0',0x3433323736);");
E_D("replace into `just_enewslog` values('19',0x61646d696e,'2019-05-05 22:23:42',0x3132372e302e302e31,'1','','0',0x3433373330);");
E_D("replace into `just_enewslog` values('20',0x77696e64,'2019-05-05 22:29:59',0x3132372e302e302e31,'0','','0',0x3434303730);");
E_D("replace into `just_enewslog` values('21',0x61646d696e,'2019-05-05 22:30:02',0x3132372e302e302e31,'1','','0',0x3434303730);");
E_D("replace into `just_enewslog` values('22',0x61646d696e,'2019-05-05 22:40:27',0x3132372e302e302e31,'1','','0',0x3434353630);");
E_D("replace into `just_enewslog` values('23',0x65636d73,'2019-05-05 22:42:01',0x3132372e302e302e31,'0','','0',0x3434373436);");
E_D("replace into `just_enewslog` values('24',0x61646d696e,'2019-05-05 22:42:07',0x3132372e302e302e31,'1','','0',0x3434373436);");
E_D("replace into `just_enewslog` values('25',0x61646d696e,'2019-05-05 22:47:18',0x3132372e302e302e31,'1','','0',0x3435303738);");
E_D("replace into `just_enewslog` values('26',0x61646d696e,'2019-05-05 22:49:52',0x3132372e302e302e31,'1','','0',0x3435333932);");
E_D("replace into `just_enewslog` values('27',0x61646d696e,'2019-05-05 22:56:45',0x3132372e302e302e31,'1','','0',0x3436323634);");
E_D("replace into `just_enewslog` values('28',0x61646d696e,'2019-05-05 23:10:38',0x3132372e302e302e31,'1','','0',0x3436323536);");
E_D("replace into `just_enewslog` values('29',0x61646d696e,'2019-05-05 23:11:21',0x3132372e302e302e31,'1','','0',0x3436323836);");
E_D("replace into `just_enewslog` values('30',0x61646d696e,'2019-05-06 20:16:05',0x3132372e302e302e31,'1','','0',0x3536343534);");
E_D("replace into `just_enewslog` values('31',0x61646d696e,'2019-05-06 21:41:02',0x3132372e302e302e31,'1','','0',0x3538383534);");
E_D("replace into `just_enewslog` values('32',0x61646d696e,'2019-05-06 21:45:48',0x3132372e302e302e31,'1','','0',0x3539323638);");
E_D("replace into `just_enewslog` values('33',0x61646d696e,'2019-05-06 22:02:33',0x3132372e302e302e31,'1','','0',0x3539353436);");
E_D("replace into `just_enewslog` values('34',0x61646d696e,'2019-05-06 22:13:22',0x3132372e302e302e31,'1','','0',0x3538313138);");
E_D("replace into `just_enewslog` values('35',0x61646d696e,'2019-05-06 22:26:17',0x3132372e302e302e31,'1','','0',0x3538343630);");
E_D("replace into `just_enewslog` values('36',0x61646d696e,'2019-05-06 22:37:27',0x3132372e302e302e31,'1','','0',0x3538363534);");
E_D("replace into `just_enewslog` values('37',0x61646d696e,'2019-05-06 22:41:47',0x3132372e302e302e31,'1','','0',0x3538373236);");
E_D("replace into `just_enewslog` values('38',0x61646d696e,'2019-05-06 22:42:46',0x3132372e302e302e31,'1','','0',0x3538373732);");
E_D("replace into `just_enewslog` values('39',0x61646d696e,'2019-05-07 06:39:39',0x3132372e302e302e31,'1','','0',0x3538383932);");
E_D("replace into `just_enewslog` values('40',0x61646d696e,'2019-05-07 20:23:00',0x3132372e302e302e31,'1','','0',0x3333323636);");
E_D("replace into `just_enewslog` values('41',0x61646d696e,'2019-05-08 13:50:49',0x3132372e302e302e31,'1','','0',0x3436353130);");
E_D("replace into `just_enewslog` values('42',0x61646d696e,'2019-05-08 14:09:16',0x3132372e302e302e31,'1','','0',0x3437393338);");
E_D("replace into `just_enewslog` values('43',0x61646d696e,'2019-05-08 14:14:03',0x3132372e302e302e31,'1','','0',0x3438313032);");
E_D("replace into `just_enewslog` values('44',0x61646d696e,'2019-05-08 15:19:02',0x3132372e302e302e31,'1','','0',0x3438343338);");
E_D("replace into `just_enewslog` values('45',0x61646d696e,'2019-05-08 17:49:26',0x3132372e302e302e31,'1','','0',0x3439353236);");
E_D("replace into `just_enewslog` values('46',0x61646d696e,'2019-05-08 18:43:44',0x3132372e302e302e31,'1','','0',0x3532383038);");
E_D("replace into `just_enewslog` values('47',0x61646d696e,'2019-05-09 08:09:24',0x3132372e302e302e31,'1','','0',0x3534393932);");
E_D("replace into `just_enewslog` values('48',0x61646d696e,'2019-05-09 18:18:05',0x3132372e302e302e31,'1','','0',0x3537393630);");
E_D("replace into `just_enewslog` values('49',0x61646d696e,'2019-05-09 18:49:02',0x3132372e302e302e31,'1','','0',0x3630393932);");
E_D("replace into `just_enewslog` values('50',0x61646d696e,'2019-05-09 19:57:58',0x3132372e302e302e31,'1','','0',0x3335383738);");
E_D("replace into `just_enewslog` values('51',0x61646d696e,'2019-05-09 20:04:10',0x3132372e302e302e31,'1','','0',0x3336303430);");
E_D("replace into `just_enewslog` values('52',0x61646d696e,'2019-05-09 20:30:01',0x3132372e302e302e31,'1','','0',0x3435373036);");
E_D("replace into `just_enewslog` values('53',0x61646d696e,'2019-05-09 20:34:47',0x3132372e302e302e31,'1','','0',0x3437323632);");
E_D("replace into `just_enewslog` values('54',0x61646d696e,'2019-05-09 20:42:07',0x3132372e302e302e31,'1','','0',0x3439363032);");
E_D("replace into `just_enewslog` values('55',0x61646d696e,'2019-05-09 20:51:09',0x3132372e302e302e31,'1','','0',0x3532373432);");
E_D("replace into `just_enewslog` values('56',0x61646d696e,'2019-05-09 21:11:07',0x3132372e302e302e31,'1','','0',0x3534383436);");
E_D("replace into `just_enewslog` values('57',0x61646d696e,'2019-05-09 21:37:34',0x3132372e302e302e31,'1','','0',0x3337303436);");
E_D("replace into `just_enewslog` values('58',0x61646d696e,'2019-05-09 21:40:35',0x3132372e302e302e31,'1','','0',0x3337323432);");
E_D("replace into `just_enewslog` values('59',0x61646d696e,'2019-05-09 21:59:00',0x3132372e302e302e31,'1','','0',0x3430363232);");
E_D("replace into `just_enewslog` values('60',0x61646d696e,'2019-05-10 08:07:05',0x3132372e302e302e31,'1','','0',0x3439303538);");
E_D("replace into `just_enewslog` values('61',0x61646d696e,'2019-05-10 08:22:10',0x3132372e302e302e31,'1','','0',0x3532353334);");
E_D("replace into `just_enewslog` values('62',0x61646d696e,'2019-05-10 19:29:20',0x3132372e302e302e31,'1','','0',0x3535363236);");
E_D("replace into `just_enewslog` values('63',0x61646d696e,'2019-05-10 19:55:50',0x3132372e302e302e31,'1','','0',0x3536353830);");
E_D("replace into `just_enewslog` values('64',0x61646d696e,'2019-05-10 19:57:03',0x3132372e302e302e31,'1','','0',0x3536353830);");
E_D("replace into `just_enewslog` values('65',0x61646d696e,'2019-05-10 20:07:23',0x3132372e302e302e31,'1','','0',0x3537303530);");
E_D("replace into `just_enewslog` values('66',0x61646d696e,'2019-05-11 14:45:59',0x3132372e302e302e31,'1','','0',0x3630343138);");
E_D("replace into `just_enewslog` values('67',0x61646d696e,'2019-05-11 22:08:42',0x3132372e302e302e31,'1','','0',0x3537373836);");
E_D("replace into `just_enewslog` values('68',0x61646d696e,'2019-05-12 07:16:02',0x3132372e302e302e31,'1','','0',0x3539353638);");
E_D("replace into `just_enewslog` values('69',0x72756e,'2019-05-12 10:11:04',0x3132372e302e302e31,'0','','0',0x3333353630);");
E_D("replace into `just_enewslog` values('70',0x72756e,'2019-05-12 10:11:11',0x3132372e302e302e31,'0','','0',0x3333353630);");
E_D("replace into `just_enewslog` values('71',0x77696e64,'2019-05-12 10:11:17',0x3132372e302e302e31,'0','','0',0x3333353630);");
E_D("replace into `just_enewslog` values('72',0x61646d696e,'2019-05-12 13:19:13',0x3132372e302e302e31,'1','','0',0x3433343236);");
E_D("replace into `just_enewslog` values('73',0x61646d696e,'2019-05-12 14:02:33',0x3132372e302e302e31,'1','','0',0x3437363434);");
E_D("replace into `just_enewslog` values('74',0x61646d696e,'2019-05-12 15:21:13',0x3132372e302e302e31,'1','','0',0x3530343730);");
E_D("replace into `just_enewslog` values('75',0x61646d696e,'2019-05-12 15:36:50',0x3132372e302e302e31,'1','','0',0x3530393438);");
E_D("replace into `just_enewslog` values('76',0x61646d696e,'2019-05-12 15:38:05',0x3132372e302e302e31,'1','','0',0x3530393538);");
E_D("replace into `just_enewslog` values('77',0x72756e,'2019-05-13 21:34:08',0x3132372e302e302e31,'0','','0',0x3338333932);");
E_D("replace into `just_enewslog` values('78',0x61646d696e,'2019-05-13 21:34:11',0x3132372e302e302e31,'1','','0',0x3338333932);");
E_D("replace into `just_enewslog` values('79',0x61646d696e,'2019-05-14 08:26:20',0x3132372e302e302e31,'1','','0',0x3339383630);");
E_D("replace into `just_enewslog` values('80',0x61646d696e,'2019-05-14 14:34:43',0x3131312e3230372e35332e313735,'1','','0',0x3333343634);");
E_D("replace into `just_enewslog` values('81',0x61646d696e,'2019-05-14 18:18:43',0x3138322e3130372e3130352e3132,'1','','0',0x3535373131);");
E_D("replace into `just_enewslog` values('82',0x61646d696e,'2019-05-14 18:37:09',0x3131312e3230372e35332e313735,'1','','0',0x3338333730);");
E_D("replace into `just_enewslog` values('83',0x61646d696e,'2019-05-14 18:45:23',0x3138322e3130372e3130352e3132,'1','','0',0x3632393434);");
E_D("replace into `just_enewslog` values('84',0x61646d696e,'2019-05-14 18:49:09',0x3131312e3230372e35332e313735,'1','','0',0x3338373836);");
E_D("replace into `just_enewslog` values('85',0x61646d696e,'2019-05-14 19:00:34',0x3131312e3230372e35332e313735,'1','','0',0x3338393434);");
E_D("replace into `just_enewslog` values('86',0x61646d696e,'2019-05-14 19:10:40',0x3138322e3130372e3130352e3132,'1','','0',0x3533373734);");
E_D("replace into `just_enewslog` values('87',0x61646d696e,'2019-05-14 19:13:32',0x3131312e3230372e35332e313735,'1','','0',0x3339303332);");
E_D("replace into `just_enewslog` values('88',0x61646d696e,'2019-05-14 19:15:16',0x3138322e3130372e3130352e3132,'1','','0',0x3533383338);");
E_D("replace into `just_enewslog` values('89',0x61646d696e,'2019-05-14 19:15:37',0x3131312e3230372e35332e313735,'1','','0',0x3339303930);");
E_D("replace into `just_enewslog` values('90',0x61646d696e,'2019-05-14 19:15:46',0x3138322e3130372e3130352e3132,'1','','0',0x3533383339);");
E_D("replace into `just_enewslog` values('91',0x61646d696e,'2019-05-14 19:20:51',0x3138322e3130372e3130352e3132,'1','','0',0x3533393133);");
E_D("replace into `just_enewslog` values('92',0x61646d696e,'2019-05-14 20:51:52',0x312e3230332e38342e323533,'1','','0',0x3332363037);");
E_D("replace into `just_enewslog` values('93',0x61646d696e,'2019-05-14 21:05:30',0x312e3230332e38342e323533,'1','','0',0x3332393233);");
E_D("replace into `just_enewslog` values('94',0x61646d696e,'2019-05-14 21:11:28',0x312e3230332e38342e323533,'1','','0',0x3333313239);");
E_D("replace into `just_enewslog` values('95',0x61646d696e,'2019-05-14 21:16:20',0x312e3230332e38342e323533,'1','','0',0x3333323532);");
E_D("replace into `just_enewslog` values('96',0x61646d696e,'2019-05-14 21:22:03',0x312e3230332e38342e323533,'1','','0',0x3333333834);");
E_D("replace into `just_enewslog` values('97',0x61646d696e,'2019-05-14 21:23:36',0x312e3230332e38342e323533,'1','','0',0x3333343035);");
E_D("replace into `just_enewslog` values('98',0x61646d696e,'2019-05-14 21:24:46',0x312e3230332e38342e323533,'1','','0',0x3333333834);");
E_D("replace into `just_enewslog` values('99',0x61646d696e,'2019-05-14 21:29:01',0x312e3230332e38342e323533,'1','','0',0x3333363933);");
E_D("replace into `just_enewslog` values('100',0x61646d696e,'2019-05-14 21:34:04',0x312e3230332e38342e323533,'1','','0',0x3333373735);");
E_D("replace into `just_enewslog` values('101',0x61646d696e,'2019-05-14 21:44:35',0x312e3230332e38342e323533,'1','','0',0x3332303033);");
E_D("replace into `just_enewslog` values('102',0x61646d696e,'2019-05-14 21:54:47',0x312e3230332e38342e323533,'1','','0',0x3332313638);");
E_D("replace into `just_enewslog` values('103',0x61646d696e,'2019-05-14 22:02:31',0x312e3230332e38342e323533,'1','','0',0x3332363838);");
E_D("replace into `just_enewslog` values('104',0x61646d696e,'2019-05-14 22:03:46',0x312e3230332e38342e323533,'1','','0',0x3332363838);");
E_D("replace into `just_enewslog` values('105',0x61646d696e,'2019-05-14 22:07:53',0x312e3230332e38342e323533,'1','','0',0x3332383334);");
E_D("replace into `just_enewslog` values('106',0x61646d696e,'2019-05-14 22:09:02',0x312e3230332e38342e323533,'1','','0',0x3332383330);");
E_D("replace into `just_enewslog` values('107',0x61646d696e,'2019-05-14 22:09:31',0x312e3230332e38342e323533,'1','','0',0x3332383330);");
E_D("replace into `just_enewslog` values('108',0x61646d696e,'2019-05-14 22:16:21',0x312e3230332e38342e323533,'1','','0',0x3333343237);");
E_D("replace into `just_enewslog` values('109',0x61646d696e,'2019-05-14 22:17:16',0x312e3230332e38342e323533,'1','','0',0x3333343539);");
E_D("replace into `just_enewslog` values('110',0x61646d696e,'2019-05-14 22:21:28',0x312e3230332e38342e323533,'1','','0',0x3333373230);");
E_D("replace into `just_enewslog` values('111',0x72756e,'2019-05-14 22:32:44',0x312e3230332e38342e323533,'0','','0',0x3332333330);");
E_D("replace into `just_enewslog` values('112',0x61646d696e,'2019-05-14 22:32:47',0x312e3230332e38342e323533,'1','','0',0x3332333330);");
E_D("replace into `just_enewslog` values('113',0x61646d696e,'2019-05-15 05:22:04',0x312e3230332e38342e323533,'1','','0',0x3333303537);");
E_D("replace into `just_enewslog` values('114',0x61646d696e,'2019-05-15 06:06:50',0x312e3230332e38342e323533,'1','','0',0x3332323434);");
E_D("replace into `just_enewslog` values('115',0x61646d696e,'2019-05-15 06:23:53',0x312e3230332e38342e323533,'1','','0',0x3333303534);");
E_D("replace into `just_enewslog` values('116',0x61646d696e,'2019-05-15 06:26:35',0x312e3230332e38342e323533,'1','','0',0x3333323632);");
E_D("replace into `just_enewslog` values('117',0x61646d696e,'2019-05-15 06:27:10',0x312e3230332e38342e323533,'1','','0',0x3333323632);");

@include("../../inc/footer.php");
?>