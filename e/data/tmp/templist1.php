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
<title><?=$public_r[sitename]?>|[!--pagetitle--]</title>
<link href="/just/css/style.css" type="text/css" rel="stylesheet" />
<script src="/just/js/jquery-1.11.3.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/just/layui/layui.js"></script>
</head>

<body>
<div id="container">
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
 <form class="layui-form" method="post" action="/e/member/doaction.php">
    <input type="hidden" name="ecmsfrom" value="9">
    <input name="tobind" type="hidden" id="tobind" value="0">
    <input type="hidden" name="enews" value="login">
    <input type="hidden" name="lifetime" value="3600">
  <div class="layui-form-item">
    <label class="layui-form-label">用户名</label>
    <div class="layui-input-block">
      <input type="text" name="username" id="username" lay-verify="title" autocomplete>
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">密码</label>
    <div class="layui-input-block">
      <input type="password" name="password" id="password" lay-verify="required" autocomplete>
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
      <button class="layui-btn layui-btn1" lay-submit="" lay-filter="demo1">立即登录
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
            <input type="text" name="username" id="username" lay-verify="title" autocomplete>
          </div>
        </div>

        <div class="layui-form-item">
          <label class="layui-form-label">密码</label>
          <div class="layui-input-block">
            <input type="password" name="password" id="password" lay-verify="required" autocomplete>
          </div>
        </div>

        <div class="layui-form-item">
          <label class="layui-form-label">重复密码</label>
          <div class="layui-input-block">
            <input type="password" name="repassword" id='repassword' lay-verify="required">
          </div>
        </div>

        <div class="layui-form-item">
          <label class="layui-form-label">邮箱</label>
          <div class="layui-input-block">
            <input type="text" name="email" id='email' type="text" lay-verify="required"> 
          </div>
        </div>
        <div class="layui-form-item">
          <div class="layui-input-block">
            <button class="layui-btn layui-btn1" lay-submit="" lay-filter="demo1">立即注册
            <button type="reset" class="layui-btn layui-btn-primary">重置</button>
          </div>
        </div>
</form>
  </div>

<script type="text/javascript">

</script>
  <div class="list">
    <div class="choose clearfix">
       <!-- <span class="this"><a href="[!--news.url--]e/public/ViewClick/?classid=[!--classid--]&id=[!--id--]&down=5">全部</a></span> -->
        <span class="this"><a href="[!--news.url--]e/action/ListInfo.php?classid=[!--self.classid--]&orderby=onclick">全部</a></span>
       <span><a href="[!--news.url--]e/action/ListInfo.php?classid=[!--self.classid--]&orderby=newstime">最新</a></span>
       <span><a href="[!--news.url--]e/action/ListInfo.php?classid=[!--self.classid--]&orderby=diggtop">人气</a></span>
       <span><a href="[!--news.url--]e/action/ListInfo.php?classid=[!--self.classid--]&orderby=onclick">点击</a></span>
       <span><a href="[!--news.url--]e/action/ListInfo.php?classid=[!--self.classid--]&orderby=plnum">回复</a></span>
    </div>
    <div class="layui-tab-content">
    <div class="layui-row">
            [!--empirenews.listtemp--]<!--list.var1-->[!--empirenews.listtemp--]
    </div>
  </div>
　<div class="pageBox pTB20">[!--show.listpage--]</div>

</div>
<!-- 页脚 -->
<div class="footer">
Copyright ©2019 CGITool right reserved.京ICP备11081390号-1
</div>
<script type="text/javascript">
$(function(){
        
$(".show").hover(function() {
  $(this).children(".shadow").show();
}, function() {
  $(this).children(".shadow").hide();
});

})
    
    layui.use('element', function(){
  var element = layui.element; //导航的hover效果、二级菜单等功能，需要依赖element模块
  
  //监听导航点击
  element.on('nav(demo)', function(elem){
    //console.log(elem)
    layer.msg(elem.text());
  });


  layui.use(['form','upload', 'laydate','laypage', 'layer'], function(){
    var form = layui.form,
    layer = layui.layer,
    laydate = layui.laydate;
  });



});


//登录弹窗1
  function logintc(){
      layer.open({
        type: 1,
        title: '用户登录',
        shadeClose: true,
        shade: 0.8,
        area: ['400px', 'auto'],
        content: $('#logintc') //iframe的url
      });
  }


  //注册弹窗^M
function design(){
    layer.open({
        type: 1,
  title: '用户注册',
  shadeClose: true,
  shade: 0.8,
  area: ['400px', 'auto'],
  content: $('#design') //iframe的url
        
});
}




</script>
</body>
</html>
