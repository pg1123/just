<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="renderer" content="webkit">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title><?=$public_r[sitename]?></title>
<link href="/just/css/style.css" type="text/css" rel="stylesheet" />
</head>

<body>


<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='取回密码';
$url="<a href=../../../>首页</a>&nbsp;>&nbsp;<a href=../cp/>会员中心</a>&nbsp;>&nbsp;取回密码";
?>
<div class="app-content-body ">
    <form name="GetPassForm" method="POST" action="../doaction.php">
    <h2 > 取回密码</h2>
    <div class="clearfix"> 
      <p>用户名</p>
      <span><input name="username" type="text" id="username" size="38" class="ipt"></span>
    </div>
    <div class="clearfix"> 
      <p>邮箱</p>
      <span><input name="email" type="text" id="email" size="38" class="ipt"></span>
    </div>
    <div class="clearfix"> 
      <p>验证码</p>
      <span><input name="key" type="text" id="key" size="6" class="ipt ipt1"> <img src="../../ShowKey/?v=getpassword" name="getpasswordKeyImg" id="getpasswordKeyImg" onclick="getpasswordKeyImg.src='../../ShowKey/?v=getpassword&t='+Math.random()" title="看不清楚,点击刷新"></span>
    </div>
    <div class="clearfix"> 
      <p>&nbsp; </p>
      <span> <input type="submit" name="button" value="提交" class="btn btn-primary tj"> <input name="enews" type="hidden" id="enews" value="SendPassword"><a href="#">返回网站首页</a></span>
    </div>

  </form>
</div>
</body>
</html>
