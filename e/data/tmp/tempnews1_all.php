<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="renderer" content="webkit">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title><?=$public_r[sitename]?>|<?=$grpagetitle?></title>
<meta name="keywords" content="<?=$ecms_gr[keyboard]?>">
<link href="/just/css/style.css" type="text/css" rel="stylesheet" />
<link type="text/css" rel="stylesheet" href="/skin/cy/css/chanyan.css"/>
<script src="/just/js/jquery-1.11.3.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/just/layui/layui.js"></script>
</head>

<body>
<div id="container">
<script type="text/javascript" src="/just/js/main.js"></script>

<div class="header clearfix ctnt">
    <div class="logo"><img src="/just/images/logo.png" /></div>

    <ul class="layui-nav">
      <li class="layui-nav-item layui-this"> <a href="/">首页</a> </li>


      <?php
        $ecms_bq_sql=sys_ReturnEcmsLoopBq('select classid,classname,classpath from [!db.pre!]enewsclass where bclassid=0 and showclass=0 order by myorder limit 10',20,24,0);
        while($r=$empire->fetch($ecms_bq_sql))
        {
            $s = sys_ReturnEcmsLoopStext($r);
            //$path = $public_r['newsurl'].$r['classpath']; 
            ?>

            <li class="layui-nav-item"> <a href="#"><?php echo $s['classname']; ?></a>
              <dl class="layui-nav-child snav">
                <?php
                  $sql2=sys_ReturnEcmsLoopBq('select classid,classname,classpath from [!db.pre!]enewsclass where bclassid='.$r['classid'].' order by myorder limit 25',20,24,0);
                  while($r2=$empire->fetch($sql2))
                  {
                        $s2 = sys_ReturnEcmsLoopStext($r2);
                    ?>
                    <dd>
                      <a href="<?php echo $s2['classurl']; ?>" class="btit"><?php echo $s2['classname']; ?></a>
                       <div class="snavfl clearfix">
                         
                        <?php 
                            $sql3=sys_ReturnEcmsLoopBq('select classid,classname,classpath from [!db.pre!]enewsclass where bclassid='.$r2['classid'].' order by myorder limit 25',20,24,0);
                            while($r3=$empire->fetch($sql3))
                            {   
                                $s3 = sys_ReturnEcmsLoopStext($r3);
                            ?>
                                <a href="<?php echo $s3['classurl']; ?>"><?php echo $s3['classname']; ?></a>
                        <?php } ?>


                       </div>
                    </dd>
                  <?php } ?>
              </dl>
            </li>
            

    <?php } ?>
      
  
                 <script src="/e/member/login/logined.php"></script>

    </ul>

        <script src="/e/member/login/noLogined.php"></script>


  </div>

<!--登录弹窗-->
  <div class="logina"  id="logintc" style="display:none;">
 <form id="login_form" class="layui-form" method="post" action="/e/member/doaction.php">
    <input type="hidden" name="ecmsfrom" value="9">
    <input name="tobind" type="hidden" id="tobind" value="0">
    <input type="hidden" name="enews" value="login">
    <input type="hidden" name="lifetime" value="3600">
  <div class="layui-form-item">
    <label class="layui-form-label">用户名</label>
    <div class="layui-input-block">
      <input type="text" name="username" id="login_name" lay-verify="title" autocomplete>
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">密码</label>
    <div class="layui-input-block">
      <input type="password" name="password" id="login_password" lay-verify="required" autocomplete>
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">&nbsp;</label>
    <div class="layui-input-block">
      <p><a href="/e/member/GetPassword/">忘记密码？</a></p>
    </div>
  </div>
  <div class="layui-form-item">
    <div class="layui-input-block">
      <button  class="login_button layui-btn layui-btn1" lay-submit="" lay-filter="demo1">立即登录
      <button type="reset" class="layui-btn layui-btn-primary">重置</button>
    </div>
  </div>
</form>
  </div>

  <!--注册弹窗-->
  <div class="logina"  id="design" style="display:none;">
     <form class="layui-form" method="post" name="userinfoform" action="/e/member/doaction.php">
        <input name="tobind" type="hidden" id="tobind" value="0">
        <input type="hidden" name="enews" value="register">
       <input type="hidden" name="ecmsfrom" value="9">

        <div class="layui-form-item">
          <label class="layui-form-label">用户名</label>
          <div class="layui-input-block">
            <input type="text" name="username" id="reg_name" lay-verify="title" autocomplete>
          </div>
        </div>

        <div class="layui-form-item">
          <label class="layui-form-label">密码</label>
          <div class="layui-input-block">
            <input type="password" name="password" id="reg_password" lay-verify="required" autocomplete>
          </div>
        </div>

        <div class="layui-form-item">
          <label class="layui-form-label">重复密码</label>
          <div class="layui-input-block">
            <input type="password" name="repassword" id='reg_repassword' lay-verify="required">
          </div>
        </div>

        <div class="layui-form-item">
          <label class="layui-form-label">邮箱</label>
          <div class="layui-input-block">
            <input type="text" name="email" id='reg_email' type="text" lay-verify="required"> 
          </div>
        </div>
        <div class="layui-form-item">
          <div class="layui-input-block">
            <button  class="reg_button layui-btn layui-btn1" lay-submit="" lay-filter="demo1">立即注册
            <button type="reset" class="layui-btn layui-btn-primary">重置</button>
          </div>
        </div>
</form>
  </div>

  
  <div class="detail">
    <div class="dmain">
      <div class="dmain-t">
        <h1><?=$grpagetitle?></h1>
        <div class="intro">
          <ul>
            <li> 分类：<a href="[!--bclass.url--]"> <?=$class_r[$grbclassid][classname]?> </a> -<a href="<?=$grclassurl?>"> <?=$class_r[$ecms_gr[classid]][classname]?> </a> </li>
            <!-- <li> 分类：合作 - <a href="#" target="_blank">资助&amp;合作</a>- <a href="#" target="_blank">推广教程</a> </li> -->
            <!-- <li> 标签： <a href="#" target="_blank">超写实</a> <a href="#" target="_blank">模型</a> <a href="#" target="_blank">预售</a> <a href="#" target="_blank">场景</a> </li> -->

            <li>
              标签：
              <?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq("select * from [!db.pre!]enewstags order by tagid",0,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>        
              <a href='<?=$public_r[newsurl]?>e/tags/?tagname=<?=$bqr['tagname']?>' class='tag-link-<?=$bqr['tagid']?>' title='<?=$bqr[num]?>个话题' style='font-size: 9pt;' target="_blank"><?=$bqr['tagname']?></a>
              <?php
}
}
?>
            </li>


          </ul>
        </div>
        <div class="conn"> <span class="view"> <i class="fa fa-eye" aria-hidden="true"></i><script src=/e/public/ViewClick/?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&addclick=1></script> </span><span class="talk"> <i class="fa fa-commenting-o" aria-hidden="true"></i><?=$ecms_gr[plnum]?> </span><span class="up" > <i class="fa fa-thumbs-o-up" aria-hidden="true"></i><script src=/e/public/ViewClick/?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&down=5></script> </span> </div>
      </div>
      <div class="dmain-m">
        <?=strstr($ecms_gr[newstext],'[!--empirenews.page--]')?'[!--newstext--]':$ecms_gr[newstext]?>
        <!-- <p>到目前为止人数为138.现在提前结束这次统计.因为不会再次出售.请勿相信一切私人团购.按照之前约定.人气统计费用捐赠给网站...感谢支持我的朋友.以后我也会一如既往的努力.做出更好的作品----atng糖</p>
        <img src="/just/images/pic.jpg" /> </div> -->
      <div class="ding">
        <div class="up"> 
          <a href="JavaScript:makeRequest('/e/public/digg?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&dotop=1&doajax=1&ajaxarea=diggnum','EchoReturnedText','GET','');">顶</a>
          <p class="num"> <span id="diggnum"><script src=/e/public/ViewClick/?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&down=5></script></span> </p>
        </div>
      </div>

      <script src="/e/member/login/loginjs2.php"></script>
      <!-- <div class="download"> <img src="/just/images/downico1_1.gif" />
        <p>注册登录后可下载，点击<a href="#" onclick="logintc()">登录</a>，点击<a href="#" onclick="design()">注册</a></p>
      </div> -->


      <div class="changyan">
      <a id="changyan_area"></a>
      <div id="SOHUCS" sid="11192"><div id="SOHU_MAIN">
      <div class="module-cmt-header">

   

    <div class="clear-g section-title-w">

        <div class="title-user-w">

            <div node-type="user" class="clear-g user-wrap-w user-login">

                <span node-type="user-name" class="wrap-name-w">来一发：</span>

            </div>

        </div>

    </div>

    <div class="section-cbox-w">

        <div class="cbox-block-w clear-g">

            <div node-type="block-head-w" class="block-head-w block-head-login">

                <div node-type="avatar" class="head-img-w">

                    <a href="javascript:void(0);">

                        <img node-type="user-head" src="/skin/cy/images/noavatar.gif" width="42" height="42" alt="">

                        <div node-type="head-img-ie-mask" class="head-img-ie-mask"></div>

                    </a>

                   

                                    </div>

 

            </div>

            <div node-type="login-select" class="block-post-w">

<!-- 放置cbox初始状态 -->

<script>

                       function CheckPl(obj)

                       {

                       if(obj.saytext.value=="")

                       {

                       alert("您没什么话要说吗？");

                       obj.saytext.focus();

                       return false;

                       }

                       return true;

                       }

                       </script>

                      

<form action="/e/pl/doaction.php" method="post" name="saypl" id="saypl" onsubmit="return CheckPl(document.saypl)">

 

 <div class="module-cmt-box">

    <!-- 展开状态 -->

    <div class="post-wrap-w">

        <div class="post-wrap-border-l"></div>

        <div class="post-wrap-border-r"></div>

        <div node-type="post-wrap-main" class="post-wrap-main">

            <div class="post-wrap-border-t">

                <div node-type="post-wrap-border-t-l" class="post-wrap-border-t-l"></div>

                <div node-type="post-wrap-border-t-r" class="post-wrap-border-t-r" style="margin-left: 115px;"></div>

            </div>

            <div class="wrap-area-w">

                <div class="area-textarea-w">

            <textarea name="saytext" id="saytext" placeholder="有事没事说两句..." class="textarea-fw textarea-bf"></textarea>

                </div>

            </div>

        </div>

        <div class="clear-g wrap-action-w">

           <div class="action-function-w">

    <ul class="clear-g">

           <input name="nomember" type="checkbox" id="nomember" value="1" checked="checked" style=" width: 18px;height: 18px;"/><span style="padding-left: 4px;padding-right: 10px;">匿名评论</span>

<input name="key" placeholder="请输入验证码" type="text" size="10" style="padding-left: 42px;border: 1px solid #4398ED;border-radius: 12px;color: #000;font-family: 'Open Sans',sans-serif;font-size: 1em;height: 28px;padding: 0 10px;">

<img src="/e/ShowKey/?v=pl" align="absmiddle" style="width:60px" name="plKeyImg" id="plKeyImg" onclick="plKeyImg.src='/e/ShowKey/?v=pl&t='+Math.random()" title="看不清楚,点击刷新" />

</ul>              

            </div>

            <div class="clear-g action-issue-w">

                <div class="issue-btn-w">

                    <a href="javascript:void(0)">

                        <button node-type="issue" class="btn-fw"></button>

                    </a>

                </div>

 

            </div>

           

        </div>

    </div>

</div>

<input name="id" type="hidden" id="id" value="<?=$ecms_gr[id]?>" />

<input name="classid" type="hidden" id="classid" value="<?=$ecms_gr[classid]?>" />

<input name="enews" type="hidden" id="enews" value="AddPl" />

<input name="repid" type="hidden" id="repid" value="0" />

<input type="hidden" name="ecmsfrom" value="<?=$grtitleurl?>">

 

</form>

<div class="list-comment-empty-w">

                </div>

               

            </div>

        </div>

    </div>

</div>

<div node-type="module-cmt-list" class="module-cmt-list section-list-w">

   

    <div class="cmt-list-type">

        <ul class="clear-g type-lists">

                <li class="type-list active">评论</li>

        </ul>

        <div class="cmt-list-border"></div>

        <div class="cmt-list-number">

            <span class="comment-number"><span class="cy-number"><script type="text/javascript" src="/e/public/ViewClick/?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&down=2"></script></span>人参与,<span class="cy-number"><script type="text/javascript" src="/e/public/ViewClick/?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&down=2"></script></span>条评论</span>

        </div>

    </div>
      <!-- 评论列表  S -->
       <!-- 最新评论 -->
      <script src="/e/pl/more/?classid=<?=$ecms_gr[classid]?>&id=<?=$ecms_gr[id]?>&num=10"></script>
      </div>
      <!-- 评论列表  E -->
      </div></div>
      </div>





    </div>

</div>
    <!-- 页脚 -->
<div class="footer">
Copyright ©2019 CGITool right reserved.京ICP备11081390号-1
</div>

<script type="text/javascript" src="/skin/default/js/tabs.js"></script>
<script type="text/javascript" src="/e/data/js/ajax.js"></script>
<script type="text/javascript">

</script>

</body>
</html>
