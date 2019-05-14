"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>CGItool</title>
<link href="css/style.css" type="text/css" rel="stylesheet" />
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
   <h2 >重设密码</h2>
    <div class="clearfix"> 
      <p>用户名</p>
      <span><?=$username?></span>
    </div>
   <div class="clearfix"> 
      <p>新密码</p>
      <span><input name="newpassword" type="password" id="newpassword" size="38" class="ipt"></span>
    </div>
<div class="clearfix"> 
      <p>重复新密码</p>
      <span><input name="renewpassword" type="password" id="renewpassword" size="38" class="ipt"></span>
    </div>
 <div class="clearfix"> 
      <p>&nbsp; </p>
      <span><input type="submit" name="button" value="修改" class="tj"> 
        <input name="enews" type="hidden" id="enews" value="DoGetPassword">
        <input name="id" type="hidden" id="id" value="<?=$r[id]?>">
        <input name="tt" type="hidden" id="tt" value="<?=$r[tt]?>">
        <input name="cc" type="hidden" id="cc" value="<?=$r[cc]?>"></span>
    </div>
  </form>
</div>
</body>
</html>
