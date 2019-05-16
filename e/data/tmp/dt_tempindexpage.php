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
<title><?=$public_r[sitename]?></title>
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
      
       <?php 
      if($_COOKIE['wwogcmlusername']){
         echo '<div class="hicon clearfix"> <a href="#" class="icon"><i class="fa fa-qq" aria-hidden="true"></i></a> <a href="#" class="icon"><i class="fa fa-share-alt" aria-hidden="true"></i></a> <a href="#" class="icon"><i class="fa fa-question" aria-hidden="true"></i></a> <a href="#" class="icon"><i class="fa fa-bars" aria-hidden="true"></i></a> </div>';
     echo '<li class="layui-nav-item layui-nav-item1 usera" lay-unselect=""> <a href="javascript:;"><img src="/skin/cy/images/noavatar.gif" class="layui-nav-img">'. $_COOKIE['wwogcmlusername']  . '</a>
        <dl class="layui-nav-child">
          <dd><a href="/e/member/cp/">个人中心</a></dd>
          <dd><a href="/e/member/doaction.php?enews=exit">退出</a></dd>
        </dl>
      </li>';
   }
 ?>

    </ul>

    <?php 
      if(!$_COOKIE['wwogcmlusername']){
        echo '<div class="hicon clearfix"> <a href="#" class="icon"><i class="fa fa-qq" aria-hidden="true"></i></a> <a href="#" class="icon"><i class="fa fa-share-alt" aria-hidden="true"></i></a> <a href="#" class="icon"><i class="fa fa-question" aria-hidden="true"></i></a> <a href="#" class="icon"><i class="fa fa-bars" aria-hidden="true"></i></a> </div><div class="login"><a href="#" onclick="logintc()">登录</a>|<a href="#" onclick="design()">注册</a></div>';
      }
    ?>


  </div>

<!--登录弹窗-->
  <div class="logina"  id="logintc" style="display:none;">
 <form class="layui-form" method="post" action="/e/member/doaction.php">
    <input type="hidden" name="ecmsfrom" value="">
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

  <div id="main">
    <div class="cgi cginew">
      <div class="tit clearfix">
        <h2>CGI最新推荐</h2>
        <a href="#"><i class="fa fa-refresh" aria-hidden="true"></i>显示更多</a></div>
      <div class="layui-row">
         <?php 
            $sql4=sys_ReturnEcmsLoopBq('select * from just_ecms_news where isgood=1 order by newstime limit 6',20,24,0);
            while($r4=$empire->fetch($sql4))
            {   
            ?>
                <div class="layui-col-xs3">
                    <div class="grid-demo"><a href="<?php echo $r4['titleurl']; ?>"><img src="<?php echo $r4['titlepic']; ?>" /></a></div>
                </div>
        <?php } ?>
        <!-- <div class="layui-col-xs3">
          <div class="grid-demo"><a href="#"><img src="/just/images/img.jpg" /></a></div>
        </div>
        <div class="layui-col-xs3">
          <div class="grid-demo"><a href="#"><img src="/just/images/img1.jpg" /></a></div>
        </div>
        <div class="layui-col-xs3">
          <div class="grid-demo"><a href="#"><img src="/just/images/img2.jpg" /></a></div>
        </div>
        <div class="layui-col-xs3">
          <div class="grid-demo"><a href="#"><img src="/just/images/img3.jpg" /></a></div>
        </div>
        <div class="layui-col-xs3">
          <div class="grid-demo"><a href="#"><img src="/just/images/img2.jpg" /></a></div>
        </div>
        <div class="layui-col-xs3">
          <div class="grid-demo"><a href="#"><img src="/just/images/img3.jpg" /></a></div>
        </div> -->
      </div>
    </div>
    <div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief">
      <ul class="layui-tab-title">
             
          <?php 
            $sql6=sys_ReturnEcmsLoopBq('select classid,classname,classpath from [!db.pre!]enewsclass where bclassid=0 and showclass=0 order by myorder limit 3',20,24,0);
            $aa = 1;
            while($r6=$empire->fetch($sql6))
            {
            ?>
                <li  <?php if($aa==1) { echo 'class="layui-this"'; }  ?>   >CGI<?php echo $r6['classname']; ?></li>
        <?php 
          $aa++;
         } ?>
   

      </ul>


      <div class="layui-tab-content">


        <?php 
            $sql7=sys_ReturnEcmsLoopBq('select classid,classname,classpath from [!db.pre!]enewsclass where bclassid=0 and showclass=0 order by myorder limit 3',20,24,0);
            $aa = 1;
            while($r7=$empire->fetch($sql7))
            { ?>

              <div class="layui-tab-item <?php if($aa==1) { echo 'layui-show'; }  ?>">
                  <div class="layui-row" id="con">
              <?php
         
              $sql8=sys_ReturnEcmsLoopBq($r7['classid'],12,0,1,'','');
              
              while($r8=$empire->fetch($sql8)){
                echo '<div class="layui-col-xs3">
              <div class="grid-demo"> <a href="'.$r8['titleurl'].'" class="show"> <img src="'.$r8['titlepic'].'" /><span class="new">最新</span>
                <div class="shadow" style="display:none;"> '.$r8['smalltext'].' </div>
                </a>
                <div class="cgiarc">
                  <h3><a href="'.$r8['titleurl'].'">'.$r8['title'].'</a></h3>
                  <div class="tag"><strong><a href="#">插画</a></strong><strong><a href="#">手绘</a></strong><strong><a href="#">绘画</a></strong><strong><a href="#">教程</a></strong><strong><a href="#">场景</a></strong><strong><a href="#">全景</a></strong></div>
                  <div class="action"> <span><i class="fa fa-eye" aria-hidden="true"></i>'.$r8['onclick'].'</span><span><i class="fa fa-commenting-o" aria-hidden="true"></i>'.$r8['plnum'].'</span><span class="handok"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>'.$r8['diggtop'].'</span></div>
                </div>
              </div>
            </div>';
              }
              //exit;
            ?>
                </div>
              <div class="more"><a href="<?php echo $r7['classpath']; ?>">查看全部项目</a></div>
            </div>
        <?php 
          $aa++;
         } ?>



      


      </div>
    </div>



      
    <div class="cgi cgiall">
      <div class="tit clearfix">
        <h2>CGI全部资源</h2>
</div>
      <div class="layui-row flow-default clearfix" id="LAY_demo1">

            <!-- <div class="layui-col-xs3">
              <div class="grid-demo"> <a href="#" class="show"> <img src="/just/images/img1.jpg" /></a>
                <div class="cgiarc">
                  <div class="cgiarc1">
                  <h3><a href="#" title="渲云渲染，让渲染更高效">渲云渲染，让渲染更高效</a></h3>
                  <div class="tag"><strong><a href="#">插画</a></strong><strong><a href="#">手绘</a></strong><strong><a href="#">绘画</a></strong><strong><a href="#">教程</a></strong><strong><a href="#">场景</a></strong><strong><a href="#">全景</a></strong></div>
                  <div class="tag tag1"><strong>标签</strong><strong>标签</strong><strong>标签</strong><strong>标签</strong><strong>标签</strong></div>
                  </div>
                  <div class="action"> <span><i class="fa fa-eye" aria-hidden="true"></i>66</span><span><i class="fa fa-commenting-o" aria-hidden="true"></i>12</span><span class="handok"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>24</span></div>
                </div>
              </div>
            </div> -->

            <?php 
            $sql5=sys_ReturnEcmsLoopBq('select * from just_ecms_news order by newstime desc limit 24',20,24,0);
            while($r5=$empire->fetch($sql5))
            {   
            ?>
            <div class="layui-col-xs3">
              <div class="grid-demo"> <a href="<?php echo $r5['titleurl']; ?>" class="show"> <img src="<?php echo $r5['titlepic']; ?>" /></a>
                <div class="cgiarc">
                  <div class="cgiarc1">
                  <h3><a href="<?php echo $r5['titleurl']; ?>" title="<?php echo $r5['title']; ?>"><?php echo $r5['title']; ?></a></h3>
                  <div class="tag tag1"><strong>标签</strong><strong>标签</strong><strong>标签</strong><strong>标签</strong><strong>标签</strong></div>
                  </div>
                  <div class="action"> <span><i class="fa fa-eye" aria-hidden="true"></i><?php echo $r5['onclick']; ?></span><span><i class="fa fa-commenting-o" aria-hidden="true"></i><?php echo $r5['plnum']; ?></span><span class="handok"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i><?php echo $r5['diggtop']; ?></span></div>
                </div>
              </div>
            </div>



        <?php } ?>



           

          </div>
    </div>
            <p class="nodata"></p>
  </div>

 

<!-- 页脚 -->
<!-- 页脚 -->
<div class="footer">
Copyright ©2019 CGITool right reserved.京ICP备11081390号-1
</div>
</div>
<script type="text/javascript">
$(function(){
    $(".show").hover(function() {
      $(this).children(".shadow").show();
    }, function() {
      $(this).children(".shadow").hide();
    });


    var winH = $(window).height(); //页面可视区域高度  
    var i = 4;  
    $(window).scroll(function() {  
        var pageH = $(document.body).height();  
        var scrollT = $(window).scrollTop(); //滚动条top  
        var aa = (pageH - winH - scrollT) / winH;  
        if (aa < 0.02) {
            $.getJSON("/e/extend/cmsdxmore.php",{page:i,cd:1},function(json){
                if(json){
                    var str = "";
                    $.each(json, function(index, array) {

                         str = str + '<div class="layui-col-xs3">';
                         str = str + '<div class="grid-demo"> <a href="' + array['titleurl'] + '" class="show"> <img src="'+ array['titlepic'] +'" /></a>';
                         str = str + '<div class="cgiarc">';
                         str = str + '<div class="cgiarc1">';
                         str = str + '<h3><a href="' + array['titleurl'] + '" title="' + array['title'] + '">' + array['title'] +  '</a></h3>';
                         str = str + '<div class="tag tag1"><strong>标签</strong><strong>标签</strong><strong>标签</strong><strong>标签</strong><strong>标签</strong></div>';
                         str = str + '</div>';
                         str = str + '<div class="action"> <span><i class="fa fa-eye" aria-hidden="true"></i>' +array['onclick']+ '</span><span><i class="fa fa-commenting-o" aria-hidden="true"></i>'+ array['plnum'] +'</span><span class="handok"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>'+array['diggtop']+'</span></div>';
                         str = str + '</div>';
                         str = str + '</div>';
                         str = str + '</div>';
                        $('#LAY_demo1').append(str);
                    });
                    i++;
                } else {
                    $(".nodata").show().html("别滚动了，已经到底了。。。");
                    return false;
                }


            });



            /*$.getJSON("result.php", {page: i}, function(json) {  
                if (json) {  
                    var str = "";  
                    $.each(json, function(index, array) {  
                        var str = "<div class="single_item"><div class="element_head">";  
                        var str = str + "<div class="date">" + array['date'] + "</div>";  
                        var str = str + "<div class="author">" + array['author'] + "</div>";  
                        var str = str + "</div><div class="content">" + array['content'] + "</div></div>";  
                        $("#container").append(str);  
                    });  
                    i++;  
                } else {  
                    $(".nodata").show().html("别滚动了，已经到底了。。。");  
                    return false;  
                }  
            });  */
        }  
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


//登录弹窗
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
