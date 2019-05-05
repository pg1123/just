<?php
require("../../class/connect.php");
eCheckCloseMods('pl');//关闭模块
$id=(int)$_GET['id'];
$classid=(int)$_GET['classid'];
$num=(int)$_GET['num'];
if($num<1||$num>80)
{
	$num=10;
}
$doaction=$_GET['doaction']=='dozt'?'dozt':'';
require("../../class/db_sql.php");
require("../../class/q_functions.php");
$link=db_connect();
$empire=new mysqlquery();
//专题
if($doaction=='dozt')
{
	if(empty($classid))
	{
		exit();
	}
	//信息
	$infor=$empire->fetch1("select ztid,restb from {$dbtbpre}enewszt where ztid='$classid' limit 1");
	if(!$infor['ztid'])
	{
		exit();
	}
	$pubid='-'.$classid;
}
else
{
	if(empty($id)||empty($classid))
	{
		exit();
	}
	include("../../data/dbcache/class.php");
	if(empty($class_r[$classid]['tbname']))
	{
		exit();
	}
	//信息
	$infor=$empire->fetch1("select classid,restb from {$dbtbpre}ecms_".$class_r[$classid]['tbname']." where id='$id' limit 1");
	if(!$infor['classid']||$infor['classid']!=$classid)
	{
		exit();
	}
	$pubid=ReturnInfoPubid($classid,$id);
}
//排序
$addorder='plid desc';
$myorder=(int)$_GET['myorder'];
if($myorder==1)
{
	$addorder='plid';
}
$sql=$empire->query("select * from {$dbtbpre}enewspl_".$infor['restb']." where pubid='$pubid' and checked=0 order by ".$addorder." limit ".$num);
?>
document.write("<div class=\"list-block-gw list-newest-w\">        <div node-type=\"cmt-list-title\" class=\"block-title-gw\">            <ul class=\"clear-g\">                <li>                    <div class=\"title-name-gw title-name-bg\">                    <div class=\"title-name-gw-tag\"></div>最新评论</div>                </li>            </ul>        </div>        <div node-type=\"cmt-list\" id=\"cy-cmt-list\">                     ");
<?php
while($r=$empire->fetch($sql))
{
	$plusername=$r[username];
	if(empty($r[username]))
	{
		$plusername='匿名';
	}
	if($r[userid])
	{
		$plusername="<a href='$public_r[newsurl]e/space/?userid=$r[userid]' target='_blank'>$r[username]</a>";
	}
	$saytime=date('Y-m-d H:i:s',$r['saytime']);
	//ip
	$sayip=ToReturnXhIp($r[sayip]);
	$saytext=str_replace("\r\n","",$r['saytext']);
	$saytext=addslashes(RepPltextFace(stripSlashes($saytext)));//替换表情
?>
document.write("<div class=\"clear-g block-cont-gw\">    <div class=\"cont-head-gw\">        <div class=\"head-img-gw\">            <a node-type=\"photo\">                <div class=\"img-corner\"></div>                <img src=\"/skin/cy/images/noavatar.gif\" width=\"42\" height=\"42\">            </a>        </div>    </div>    <div class=\"cont-msg-gw\">        <div class=\"msg-wrap-gw\">            <div class=\"wrap-user-gw global-clear-spacing\">                                <span class=\"user-time-gw\"><?=$saytime?></span>                <span node-type=\"nickname\" class=\"user-name-gw\"><a><?=$plusername?></a></span>                                               <span class=\"user-address-gw\">[<i>ip：</i><?=$sayip?>]</span>                            </div>                                  <div class=\"wrap-issue-gw\">                <p class=\"issue-wrap-gw\"><span class=\"wrap-word-gw\"><?=$saytext?></span></p>                <div class=\"cy-see-more\">                    <span></span><i></i>                </div>            </div>            <!-- 图片展示 -->                       <div node-type=\"btns-bar\" class=\"clear-g wrap-action-gw\">                <div node-type=\"action-click-gw\" class=\"action-click-gw global-clear-spacing\">                                     <i class=\"gap-gw\"></i>                    <span node-type=\"support\" class=\"click-ding-gw\">                       <a href=\"JavaScript:makeRequest(\'/e/pl/doaction.php?enews=DoForPl&plid=<?=$r[plid]?>&classid=<?=$classid?>&id=<?=$id?>&dopl=1&doajax=1&ajaxarea=zcpldiv<?=$r[plid]?>\',\'EchoReturnedText\',\'GET\',\'\');\"><i class=\"icon-gw icon-ding-bg\"></i><em id=\"zcpldiv<?=$r[plid]?>\" class=\"icon-name-bg\"><?=$r[zcnum]?></em></a>                    </span>                    <i class=\"gap-gw\"></i>                    <span node-type=\"oppose\" class=\"click-cai-gw\">                       <a href=\"JavaScript:makeRequest(\'/e/pl/doaction.php?enews=DoForPl&plid=<?=$r[plid]?>&classid=<?=$classid?>&id=<?=$id?>&dopl=0&doajax=1&ajaxarea=fdpldiv<?=$r[plid]?>\',\'EchoReturnedText\',\'GET\',\'\');\"><i class=\"icon-gw icon-cai-bg\"></i><em id=\"fdpldiv<?=$r[plid]?>\" class=\"icon-name-bg\"><?=$r[fdnum]?></em></a>                    </span>                <i class=\"gap-gw\"></i><span class=\"click-prop-gw\"><span class=\"prop-span\"><a></a></span></span></div>                           </div>                    </div>    </div></div>");
<?php
}
?>
document.write(" </div></div>");
<?php
db_close();
$empire=null;
?>