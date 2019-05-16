<?php
define('EmpireCMSAdmin','1');
define('EmpireCMSAPage','login');
define('EmpireCMSNFPage','1');
require("../class/connect.php");
require("../class/functions.php");
//风格
$loginadminstyleid=EcmsReturnAdminStyle();
//变量处理
$empirecmskey1='';
$empirecmskey2='';
$empirecmskey3='';
$empirecmskey4='';
$empirecmskey5='';
if($_POST['empirecmskey1']&&$_POST['empirecmskey2']&&$_POST['empirecmskey3']&&$_POST['empirecmskey4']&&$_POST['empirecmskey5'])
{
	$empirecmskey1=RepPostVar($_POST['empirecmskey1']);
	$empirecmskey2=RepPostVar($_POST['empirecmskey2']);
	$empirecmskey3=RepPostVar($_POST['empirecmskey3']);
	$empirecmskey4=RepPostVar($_POST['empirecmskey4']);
	$empirecmskey5=RepPostVar($_POST['empirecmskey5']);
	$ecertkeyrndstr=$empirecmskey1.'#!#'.$empirecmskey2.'#!#'.$empirecmskey3.'#!#'.$empirecmskey4.'#!#'.$empirecmskey5;
	esetcookie('ecertkeyrnds',$ecertkeyrndstr,0);
}
elseif(getcvar('ecertkeyrnds'))
{
	$certr=explode('#!#',getcvar('ecertkeyrnds'));
	$empirecmskey1=RepPostVar($certr[0]);
	$empirecmskey2=RepPostVar($certr[1]);
	$empirecmskey3=RepPostVar($certr[2]);
	$empirecmskey4=RepPostVar($certr[3]);
	$empirecmskey5=RepPostVar($certr[4]);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>账户登录 -CGI-Tool</title>
<link rel="stylesheet" type="text/css" href="loginimg/login.css" />
<link rel="shortcut icon" href="/favicon.ico" />
<script>
if(self!=top)
{
	parent.location.href='index.php';
}
function CheckLogin(obj){
	if(obj.username.value=='')
	{
		alert('请输入用户名');
		obj.username.focus();
		return false;
	}
	if(obj.password.value=='')
	{
		alert('请输入登录密码');
		obj.password.focus();
		return false;
	}
	if(obj.loginauth!=null)
	{
		if(obj.loginauth.value=='')
		{
			alert('请输入认证码');
			obj.loginauth.focus();
			return false;
		}
	}
	if(obj.key!=null)
	{
		if(obj.key.value=='')
		{
			alert('请输入验证码');
			obj.key.focus();
			return false;
		}
	}
	return true;
}
</script>
</head>
<body onLoad="document.login.username.focus();">
		<div class="head">
            <div class="area">
			<a href="../../">
			<div class="logo"><img src="loginimg/logo.png"/></div>
			<h2>管理后台</h2></a>
			</div>
			
        </div>
          <div class="login_main">
            <form name="login" id="login" method="post" action="ecmsadmin.php" onSubmit="return CheckLogin(document.login);">
              <input type="hidden" name="enews" value="login">
              <div class="login_box">
                <div class="banner"><img src="loginimg/login_banner.jpg" /></div>
                  <div class="login">
                    <h2>管理员登录</h2>
                      <ul>
                        <li><label for="account">帐&nbsp;&nbsp;号：</label>
                          <p class="l_r"><input value='' id="account" name="username" class="text" type="text" maxlength="128" /></p></li>
                          <li><label for="pwd">密&nbsp;&nbsp;码：</label>
                          <p class="l_r"><input id="pwd" value='' name="password" class="text" type="password" maxlength="16" /></p></li>
  
                        <li id="li_code">
                          <label for="code">提&nbsp;&nbsp;问：</label>
                          <p class="l_r">
                            <select name="equestion" id="equestion" onchange="if(this.options[this.selectedIndex].value==0){showanswer.style.display='none';}else{showanswer.style.display='';}" style="border: 1px solid #B0B0B0;">
                              <option value="0">无安全提问</option>
                              <option value="1">母亲的名字</option>
                              <option value="2">爷爷的名字</option>
                              <option value="3">父亲出生的城市</option>
                              <option value="4">您其中一位老师的名字</option>
                              <option value="5">您个人计算机的型号</option>
                              <option value="6">您最喜欢的餐馆名称</option>
                              <option value="7">驾驶执照的最后四位数字</option>
                        </select></p></li>
                 <li id="showanswer">
                   <label for="pwd">答&nbsp;&nbsp;案：</label>
                   <p class="l_r"><input id="pwd" value='' name="eanswer" class="text" type="text" maxlength="16" /></p></li>
                
				<?php
  if($ecms_config['esafe']['loginauth'])
  {
  ?>
  <li>
  <label for="code">认证码：</label>
  <p class="l_r"><input name="loginauth" type="password" id="loginauth" class="text" size="24"/></p></li>
    <?php
  }
 ?>
  <?php
  if(empty($public_r['adminloginkey']))
  {
  ?>
  <li><label for="code">验证码：</label>
  <div class="l_r"><input id="code" name="key" class="key" type="text" maxlength="4"/></div>
  <div class="code_img"><img src="ShowKey.php" name="KeyImg" id="KeyImg" align="bottom" alt="看不清楚,点击刷新"><span><a id="code_img_handler" href="javascript:void(0);" onClick="KeyImg.src='ShowKey.php?'+Math.random()">换一张</a></span></div>
  
  </li>

    <?php
  }
?>
</ul>
<input id="submit" type="submit" class="submit" value="登 录"/>
<div class="pwd_find">
<a href="../../">网站首页</a></div>
</div>
</div>
<input name="empirecmskey1" type="hidden" id="empirecmskey1" value="<?php echo $empirecmskey1;?>">
<input name="empirecmskey2" type="hidden" id="empirecmskey2" value="<?php echo $empirecmskey2;?>">
<input name="empirecmskey3" type="hidden" id="empirecmskey3" value="<?php echo $empirecmskey3;?>">
<input name="empirecmskey4" type="hidden" id="empirecmskey4" value="<?php echo $empirecmskey4;?>">
<input name="empirecmskey5" type="hidden" id="empirecmskey5" value="<?php echo $empirecmskey5;?>">
</form>
</div>
<div class="foot">
<p> Copyright ©2019 CGITool right reserved.京ICP备11081390号-1 </p>
</div>
<script>
if(document.login.equestion.value==0)
{
	showanswer.style.display='none';
}
</script>
</body>
</html>