<?php
require('class/connect.php');
require('class/db_sql.php');
$link=db_connect();
$empire=new mysqlquery();
echo "send start <br />";
include('class/SendEmail.inc.php');
$mail_test="474553214@qq.com";//邮件接收者的E-mail
$sm=EcmsToSendMail($mail_test, "这是一封测试邮件", "邮件测试正常");//邮件接收者的E-mail, 邮件标题, 邮件正文
echo $mail_test." send over <br />";
db_close();
$empire=null;
?>