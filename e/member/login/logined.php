<?php
require("../../class/connect.php");
if(!defined('InEmpireCMS'))
{
    exit();
}
eCheckCloseMods('member');//关闭模块
$myuserid=(int)getcvar('mluserid');
$r=array();
$mhavelogin=0;
if($myuserid)
{
    include("../../class/db_sql.php");
    include("../../member/class/user.php");
    include("../../data/dbcache/MemberLevel.php");
    $link=db_connect();
    $empire=new mysqlquery();
    $mhavelogin=1;
    //数据
    $myusername=RepPostVar(getcvar('mlusername'));
    $myrnd=RepPostVar(getcvar('mlrnd'));
    $qcklgr=qCheckLoginAuthstr();
    if(!$qcklgr['islogin'])
    {
        EmptyEcmsCookie();
        $mhavelogin=0;
    }
    else
    {
        $r=$empire->fetch1("select ".eReturnSelectMemberF('userid,username,groupid,userfen,money,userdate,havemsg,checked')." from ".eReturnMemberTable()." where ".egetmf('userid')."='$myuserid' and ".egetmf('rnd')."='$myrnd' limit 1");
        if(empty($r[userid])||$r[checked]==0)
        {
            EmptyEcmsCookie();
            $mhavelogin=0;
        }
    }
    //会员等级
    if(empty($r[groupid]))
    {$groupid=eReturnMemberDefGroupid();}
    else
    {$groupid=$r[groupid];}
    $groupname=$level_r[$groupid]['groupname'];
    //点数
    $userfen=$r[userfen];
    //余额
    $money=$r[money];
    //天数
    $userdate=0;
    if($r[userdate])
    {
        $userdate=$r[userdate]-time();
        if($userdate<=0)
        {$userdate=0;}
        else
        {$userdate=round($userdate/(24*3600));}
    }
    //是否有短消息
    $havemsg="";
    if($r[havemsg])
    {
        $havemsg="<a href='".$public_r['newsurl']."e/member/msg/' target=_blank><font color=red>您有新消息</font></a>";
    }
    //$myusername=$r[username];
}
if($mhavelogin==1)
{
    $lgusername=RepPostVar(getcvar('mlusername'));//登陆用户
?>
document.write('<div class="hicon clearfix"> <a href="#" class="icon"><i class="fa fa-qq" aria-hidden="true"></i></a> <a href="#" class="icon"><i class="fa fa-share-alt" aria-hidden="true"></i></a> <a href="#" class="icon"><i class="fa fa-question" aria-hidden="true"></i></a> <a href="#" class="icon"><i class="fa fa-bars" aria-hidden="true"></i></a> </div> ');
document.write('<li class="layui-nav-item layui-nav-item1 usera" lay-unselect=""> <a href="javascript:;"><img src="/skin/cy/images/noavatar.gif" class="layui-nav-img"><?=$lgusername?></a><dl class="layui-nav-child"><dd><a href="/e/member/cp/">个人中心</a></dd><dd><a class="login_out" href="/e/member/doaction.php?enews=exit">退出</a></dd></dl></li>');
<?php
    db_close();
    $empire=null;
}
else
{
?>
document.write("");
<?php
}
?>