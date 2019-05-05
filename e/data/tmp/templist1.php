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
      <li class="layui-nav-item layui-this"> <a href="/">首页1</a> </li>


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
      <li class="layui-nav-item layui-nav-item1" lay-unselect=""> <a href="javascript:;"><img src="/just/images/user.png" class="layui-nav-img">用户00368</a>
        <dl class="layui-nav-child">
          <dd><a href="javascript:;">充值服务</a></dd>
          <dd><a href="/e/member/doaction.php?enews=exit">退出</a></dd>
        </dl>
      </li>
    </ul>

    <?php 
      if(!$_COOKIE['wwogcmlusername']){
        echo '<div class="hicon clearfix"> <a href="#" class="icon"><i class="fa fa-qq" aria-hidden="true"></i></a> <a href="#" class="icon"><i class="fa fa-share-alt" aria-hidden="true"></i></a> <a href="#" class="icon"><i class="fa fa-question" aria-hidden="true"></i></a> <a href="#" class="icon"><i class="fa fa-bars" aria-hidden="true"></i></a> </div><div class="login"><a href="/e/member/login">登录</a>|<a href="/e/member/register">注册</a></div>';
      }
    ?>

  </div>
  <div class="list">
    <div class="choose clearfix">
       <span class="this"><a href="#">全部</a></span>
       <span><a href="#">最新</a></span>
       <span><a href="#">人气</a></span>
       <span><a href="#">点击</a></span>
       <span><a href="#">回复</a></span>
    </div>
    <div class="layui-tab-content">
    <div class="layui-row">
            <div class="layui-col-xs3">
              <div class="grid-demo"> <a href="detail.html" class="show"> <img src="/just/images/img.jpg" /><span class="new">最新</span>
                <div class="shadow" style="display:none;"> 犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具之一。犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具 </div>
                </a>
                <div class="cgiarc">
                  <h3><a href="detail.html">渲云渲染，让渲染更高效</a></h3>
                  <div class="tag"><strong><a href="#">插画</a></strong><strong><a href="#">手绘</a></strong><strong><a href="#">绘画</a></strong><strong><a href="#">教程</a></strong><strong><a href="#">场景</a></strong><strong><a href="#">全景</a></strong></div>
                  <div class="action"> <span><i class="fa fa-eye" aria-hidden="true"></i>66</span><span><i class="fa fa-commenting-o" aria-hidden="true"></i>12</span><span class="handok"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>24</span></div>
                </div>
              </div>
            </div>
            <div class="layui-col-xs3">
              <div class="grid-demo"> <a href="detail.html" class="show"> <img src="/just/images/img2.jpg" /><span class="new">最新</span>
                <div class="shadow" style="display:none;"> 犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具之一。犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具 </div>
                </a>
                <div class="cgiarc">
                  <h3><a href="detail.html">渲云渲染，让渲染更高效</a></h3>
                  <div class="tag"><strong><a href="#">插画</a></strong><strong><a href="#">手绘</a></strong><strong><a href="#">绘画</a></strong><strong><a href="#">教程</a></strong><strong><a href="#">场景</a></strong><strong><a href="#">全景</a></strong></div>
                  <div class="action"> <span><i class="fa fa-eye" aria-hidden="true"></i>66</span><span><i class="fa fa-commenting-o" aria-hidden="true"></i>12</span><span class="handok"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>24</span></div>
                </div>
              </div>
            </div>
            <div class="layui-col-xs3">
              <div class="grid-demo"> <a href="detail.html" class="show"> <img src="/just/images/img.jpg" /><span class="new">最新</span>
                <div class="shadow" style="display:none;"> 犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具之一。犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具 </div>
                </a>
                <div class="cgiarc">
                  <h3><a href="detail.html">渲云渲染，让渲染更高效</a></h3>
                  <div class="tag"><strong><a href="#">插画</a></strong><strong><a href="#">手绘</a></strong><strong><a href="#">绘画</a></strong><strong><a href="#">教程</a></strong><strong><a href="#">场景</a></strong><strong><a href="#">全景</a></strong></div>
                  <div class="action"> <span><i class="fa fa-eye" aria-hidden="true"></i>66</span><span><i class="fa fa-commenting-o" aria-hidden="true"></i>12</span><span class="handok"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>24</span></div>
                </div>
              </div>
            </div>
            <div class="layui-col-xs3">
              <div class="grid-demo"> <a href="#" class="show"> <img src="/just/images/img3.jpg" /><span class="new">最新</span>
                <div class="shadow" style="display:none;"> 犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具之一。犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具 </div>
                </a>
                <div class="cgiarc">
                  <h3><a href="#">渲云渲染，让渲染更高效</a></h3>
                  <div class="tag"><strong><a href="#">插画</a></strong><strong><a href="#">手绘</a></strong><strong><a href="#">绘画</a></strong><strong><a href="#">教程</a></strong><strong><a href="#">场景</a></strong><strong><a href="#">全景</a></strong></div>
                  <div class="action"> <span><i class="fa fa-eye" aria-hidden="true"></i>66</span><span><i class="fa fa-commenting-o" aria-hidden="true"></i>12</span><span class="handok"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>24</span></div>
                </div>
              </div>
            </div>
            <div class="layui-col-xs3">
              <div class="grid-demo"> <a href="#" class="show"> <img src="/just/images/img.jpg" /><span class="new">最新</span>
                <div class="shadow" style="display:none;"> 犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具之一。犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具 </div>
                </a>
                <div class="cgiarc">
                  <h3><a href="#">渲云渲染，让渲染更高效</a></h3>
                  <div class="tag"><strong><a href="#">插画</a></strong><strong><a href="#">手绘</a></strong><strong><a href="#">绘画</a></strong><strong><a href="#">教程</a></strong><strong><a href="#">场景</a></strong><strong><a href="#">全景</a></strong></div>
                  <div class="action"> <span><i class="fa fa-eye" aria-hidden="true"></i>66</span><span><i class="fa fa-commenting-o" aria-hidden="true"></i>12</span><span class="handok"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>24</span></div>
                </div>
              </div>
            </div>
            <div class="layui-col-xs3">
              <div class="grid-demo"> <a href="#" class="show"> <img src="/just/images/img1.jpg" /><span class="new">最新</span>
                <div class="shadow" style="display:none;"> 犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具之一。犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具 </div>
                </a>
                <div class="cgiarc">
                  <h3><a href="#">渲云渲染，让渲染更高效</a></h3>
                  <div class="tag"><strong><a href="#">插画</a></strong><strong><a href="#">手绘</a></strong><strong><a href="#">绘画</a></strong><strong><a href="#">教程</a></strong><strong><a href="#">场景</a></strong><strong><a href="#">全景</a></strong></div>
                  <div class="action"> <span><i class="fa fa-eye" aria-hidden="true"></i>66</span><span><i class="fa fa-commenting-o" aria-hidden="true"></i>12</span><span class="handok"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>24</span></div>
                </div>
              </div>
            </div>
            <div class="layui-col-xs3">
              <div class="grid-demo"> <a href="#" class="show"> <img src="/just/images/img.jpg" /><span class="new">最新</span>
                <div class="shadow" style="display:none;"> 犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具之一。犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具 </div>
                </a>
                <div class="cgiarc">
                  <h3><a href="#">渲云渲染，让渲染更高效</a></h3>
                  <div class="tag"><strong><a href="#">插画</a></strong><strong><a href="#">手绘</a></strong><strong><a href="#">绘画</a></strong><strong><a href="#">教程</a></strong><strong><a href="#">场景</a></strong><strong><a href="#">全景</a></strong></div>
                  <div class="action"> <span><i class="fa fa-eye" aria-hidden="true"></i>66</span><span><i class="fa fa-commenting-o" aria-hidden="true"></i>12</span><span class="handok"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>24</span></div>
                </div>
              </div>
            </div>
            <div class="layui-col-xs3">
              <div class="grid-demo"> <a href="#" class="show"> <img src="/just/images/img2.jpg" /><span class="new">最新</span>
                <div class="shadow" style="display:none;"> 犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具之一。犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具 </div>
                </a>
                <div class="cgiarc">
                  <h3><a href="#">渲云渲染，让渲染更高效</a></h3>
                  <div class="tag"><strong><a href="#">插画</a></strong><strong><a href="#">手绘</a></strong><strong><a href="#">绘画</a></strong><strong><a href="#">教程</a></strong><strong><a href="#">场景</a></strong><strong><a href="#">全景</a></strong></div>
                  <div class="action"> <span><i class="fa fa-eye" aria-hidden="true"></i>66</span><span><i class="fa fa-commenting-o" aria-hidden="true"></i>12</span><span class="handok"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>24</span></div>
                </div>
              </div>
            </div>
            <div class="layui-col-xs3">
              <div class="grid-demo"> <a href="#" class="show"> <img src="/just/images/img.jpg" /><span class="new">最新</span>
                <div class="shadow" style="display:none;"> 犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具之一。犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具 </div>
                </a>
                <div class="cgiarc">
                  <h3><a href="#">渲云渲染，让渲染更高效</a></h3>
                  <div class="tag"><strong><a href="#">插画</a></strong><strong><a href="#">手绘</a></strong><strong><a href="#">绘画</a></strong><strong><a href="#">教程</a></strong><strong><a href="#">场景</a></strong><strong><a href="#">全景</a></strong></div>
                  <div class="action"> <span><i class="fa fa-eye" aria-hidden="true"></i>66</span><span><i class="fa fa-commenting-o" aria-hidden="true"></i>12</span><span class="handok"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>24</span></div>
                </div>
              </div>
            </div>
            <div class="layui-col-xs3">
              <div class="grid-demo"> <a href="#" class="show"> <img src="/just/images/img1.jpg" /><span class="new">最新</span>
                <div class="shadow" style="display:none;"> 犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具之一。犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具 </div>
                </a>
                <div class="cgiarc">
                  <h3><a href="#">渲云渲染，让渲染更高效</a></h3>
                  <div class="tag"><strong><a href="#">插画</a></strong><strong><a href="#">手绘</a></strong><strong><a href="#">绘画</a></strong><strong><a href="#">教程</a></strong><strong><a href="#">场景</a></strong><strong><a href="#">全景</a></strong></div>
                  <div class="action"> <span><i class="fa fa-eye" aria-hidden="true"></i>66</span><span><i class="fa fa-commenting-o" aria-hidden="true"></i>12</span><span class="handok"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>24</span></div>
                </div>
              </div>
            </div>
            <div class="layui-col-xs3">
              <div class="grid-demo"> <a href="#" class="show"> <img src="/just/images/img.jpg" /><span class="new">最新</span>
                <div class="shadow" style="display:none;"> 犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具之一。犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具 </div>
                </a>
                <div class="cgiarc">
                  <h3><a href="#">渲云渲染，让渲染更高效</a></h3>
                  <div class="tag"><strong><a href="#">插画</a></strong><strong><a href="#">手绘</a></strong><strong><a href="#">绘画</a></strong><strong><a href="#">教程</a></strong><strong><a href="#">场景</a></strong><strong><a href="#">全景</a></strong></div>
                  <div class="action"> <span><i class="fa fa-eye" aria-hidden="true"></i>66</span><span><i class="fa fa-commenting-o" aria-hidden="true"></i>12</span><span class="handok"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>24</span></div>
                </div>
              </div>
            </div>
            <div class="layui-col-xs3">
              <div class="grid-demo"> <a href="#" class="show"> <img src="/just/images/img2.jpg" /><span class="new">最新</span>
                <div class="shadow" style="display:none;"> 犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具之一。犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具 </div>
                </a>
                <div class="cgiarc">
                  <h3><a href="#">渲云渲染，让渲染更高效</a></h3>
                  <div class="tag"><strong><a href="#">插画</a></strong><strong><a href="#">手绘</a></strong><strong><a href="#">绘画</a></strong><strong><a href="#">教程</a></strong><strong><a href="#">场景</a></strong><strong><a href="#">全景</a></strong></div>
                  <div class="action"> <span><i class="fa fa-eye" aria-hidden="true"></i>66</span><span><i class="fa fa-commenting-o" aria-hidden="true"></i>12</span><span class="handok"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>24</span></div>
                </div>
              </div>
            </div>
            <div class="layui-col-xs3">
              <div class="grid-demo"> <a href="#" class="show"> <img src="/just/images/img.jpg" /><span class="new">最新</span>
                <div class="shadow" style="display:none;"> 犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具之一。犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具 </div>
                </a>
                <div class="cgiarc">
                  <h3><a href="#">渲云渲染，让渲染更高效</a></h3>
                  <div class="tag"><strong><a href="#">插画</a></strong><strong><a href="#">手绘</a></strong><strong><a href="#">绘画</a></strong><strong><a href="#">教程</a></strong><strong><a href="#">场景</a></strong><strong><a href="#">全景</a></strong></div>
                  <div class="action"> <span><i class="fa fa-eye" aria-hidden="true"></i>66</span><span><i class="fa fa-commenting-o" aria-hidden="true"></i>12</span><span class="handok"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>24</span></div>
                </div>
              </div>
            </div>
            <div class="layui-col-xs3">
              <div class="grid-demo"> <a href="#" class="show"> <img src="/just/images/img1.jpg" /><span class="new">最新</span>
                <div class="shadow" style="display:none;"> 犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具之一。犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具 </div>
                </a>
                <div class="cgiarc">
                  <h3><a href="#">渲云渲染，让渲染更高效</a></h3>
                  <div class="tag"><strong><a href="#">插画</a></strong><strong><a href="#">手绘</a></strong><strong><a href="#">绘画</a></strong><strong><a href="#">教程</a></strong><strong><a href="#">场景</a></strong><strong><a href="#">全景</a></strong></div>
                  <div class="action"> <span><i class="fa fa-eye" aria-hidden="true"></i>66</span><span><i class="fa fa-commenting-o" aria-hidden="true"></i>12</span><span class="handok"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>24</span></div>
                </div>
              </div>
            </div>
            <div class="layui-col-xs3">
              <div class="grid-demo"> <a href="#" class="show"> <img src="/just/images/img.jpg" /><span class="new">最新</span>
                <div class="shadow" style="display:none;"> 犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具之一。犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具 </div>
                </a>
                <div class="cgiarc">
                  <h3><a href="#">渲云渲染，让渲染更高效</a></h3>
                  <div class="tag"><strong><a href="#">插画</a></strong><strong><a href="#">手绘</a></strong><strong><a href="#">绘画</a></strong><strong><a href="#">教程</a></strong><strong><a href="#">场景</a></strong><strong><a href="#">全景</a></strong></div>
                  <div class="action"> <span><i class="fa fa-eye" aria-hidden="true"></i>66</span><span><i class="fa fa-commenting-o" aria-hidden="true"></i>12</span><span class="handok"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>24</span></div>
                </div>
              </div>
            </div>
            <div class="layui-col-xs3">
              <div class="grid-demo"> <a href="#" class="show"> <img src="/just/images/img2.jpg" /><span class="new">最新</span>
                <div class="shadow" style="display:none;"> 犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具之一。犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具 </div>
                </a>
                <div class="cgiarc">
                  <h3><a href="#">渲云渲染，让渲染更高效</a></h3>
                  <div class="tag"><strong><a href="#">插画</a></strong><strong><a href="#">手绘</a></strong><strong><a href="#">绘画</a></strong><strong><a href="#">教程</a></strong><strong><a href="#">场景</a></strong><strong><a href="#">全景</a></strong></div>
                  <div class="action"> <span><i class="fa fa-eye" aria-hidden="true"></i>66</span><span><i class="fa fa-commenting-o" aria-hidden="true"></i>12</span><span class="handok"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>24</span></div>
                </div>
              </div>
            </div>
            <div class="layui-col-xs3">
              <div class="grid-demo"> <a href="#" class="show"> <img src="/just/images/img.jpg" /><span class="new">最新</span>
                <div class="shadow" style="display:none;"> 犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具之一。犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具 </div>
                </a>
                <div class="cgiarc">
                  <h3><a href="#">渲云渲染，让渲染更高效</a></h3>
                  <div class="tag"><strong><a href="#">插画</a></strong><strong><a href="#">手绘</a></strong><strong><a href="#">绘画</a></strong><strong><a href="#">教程</a></strong><strong><a href="#">场景</a></strong><strong><a href="#">全景</a></strong></div>
                  <div class="action"> <span><i class="fa fa-eye" aria-hidden="true"></i>66</span><span><i class="fa fa-commenting-o" aria-hidden="true"></i>12</span><span class="handok"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>24</span></div>
                </div>
              </div>
            </div>
            <div class="layui-col-xs3">
              <div class="grid-demo"> <a href="#" class="show"> <img src="/just/images/img1.jpg" /><span class="new">最新</span>
                <div class="shadow" style="display:none;"> 犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具之一。犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具 </div>
                </a>
                <div class="cgiarc">
                  <h3><a href="#">渲云渲染，让渲染更高效</a></h3>
                  <div class="tag"><strong><a href="#">插画</a></strong><strong><a href="#">手绘</a></strong><strong><a href="#">绘画</a></strong><strong><a href="#">教程</a></strong><strong><a href="#">场景</a></strong><strong><a href="#">全景</a></strong></div>
                  <div class="action"> <span><i class="fa fa-eye" aria-hidden="true"></i>66</span><span><i class="fa fa-commenting-o" aria-hidden="true"></i>12</span><span class="handok"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>24</span></div>
                </div>
              </div>
            </div>
            <div class="layui-col-xs3">
              <div class="grid-demo"> <a href="#" class="show"> <img src="/just/images/img.jpg" /><span class="new">最新</span>
                <div class="shadow" style="display:none;"> 犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具之一。犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具 </div>
                </a>
                <div class="cgiarc">
                  <h3><a href="#">渲云渲染，让渲染更高效</a></h3>
                  <div class="tag"><strong><a href="#">插画</a></strong><strong><a href="#">手绘</a></strong><strong><a href="#">绘画</a></strong><strong><a href="#">教程</a></strong><strong><a href="#">场景</a></strong><strong><a href="#">全景</a></strong></div>
                  <div class="action"> <span><i class="fa fa-eye" aria-hidden="true"></i>66</span><span><i class="fa fa-commenting-o" aria-hidden="true"></i>12</span><span class="handok"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>24</span></div>
                </div>
              </div>
            </div>
            <div class="layui-col-xs3">
              <div class="grid-demo"> <a href="#" class="show"> <img src="/just/images/img2.jpg" /><span class="new">最新</span>
                <div class="shadow" style="display:none;"> 犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具之一。犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具 </div>
                </a>
                <div class="cgiarc">
                  <h3><a href="#">渲云渲染，让渲染更高效</a></h3>
                  <div class="tag"><strong><a href="#">插画</a></strong><strong><a href="#">手绘</a></strong><strong><a href="#">绘画</a></strong><strong><a href="#">教程</a></strong><strong><a href="#">场景</a></strong><strong><a href="#">全景</a></strong></div>
                  <div class="action"> <span><i class="fa fa-eye" aria-hidden="true"></i>66</span><span><i class="fa fa-commenting-o" aria-hidden="true"></i>12</span><span class="handok"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>24</span></div>
                </div>
              </div>
            </div>
            <div class="layui-col-xs3">
              <div class="grid-demo"> <a href="#" class="show"> <img src="/just/images/img.jpg" /><span class="new">最新</span>
                <div class="shadow" style="display:none;"> 犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具之一。犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具 </div>
                </a>
                <div class="cgiarc">
                  <h3><a href="#">渲云渲染，让渲染更高效</a></h3>
                  <div class="tag"><strong><a href="#">插画</a></strong><strong><a href="#">手绘</a></strong><strong><a href="#">绘画</a></strong><strong><a href="#">教程</a></strong><strong><a href="#">场景</a></strong><strong><a href="#">全景</a></strong></div>
                  <div class="action"> <span><i class="fa fa-eye" aria-hidden="true"></i>66</span><span><i class="fa fa-commenting-o" aria-hidden="true"></i>12</span><span class="handok"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>24</span></div>
                </div>
              </div>
            </div>
            <div class="layui-col-xs3">
              <div class="grid-demo"> <a href="#" class="show"> <img src="/just/images/img1.jpg" /><span class="new">最新</span>
                <div class="shadow" style="display:none;"> 犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具之一。犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具 </div>
                </a>
                <div class="cgiarc">
                  <h3><a href="#">渲云渲染，让渲染更高效</a></h3>
                  <div class="tag"><strong><a href="#">插画</a></strong><strong><a href="#">手绘</a></strong><strong><a href="#">绘画</a></strong><strong><a href="#">教程</a></strong><strong><a href="#">场景</a></strong><strong><a href="#">全景</a></strong></div>
                  <div class="action"> <span><i class="fa fa-eye" aria-hidden="true"></i>66</span><span><i class="fa fa-commenting-o" aria-hidden="true"></i>12</span><span class="handok"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>24</span></div>
                </div>
              </div>
            </div>
            <div class="layui-col-xs3">
              <div class="grid-demo"> <a href="#" class="show"> <img src="/just/images/img.jpg" /><span class="new">最新</span>
                <div class="shadow" style="display:none;"> 犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具之一。犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具 </div>
                </a>
                <div class="cgiarc">
                  <h3><a href="#">渲云渲染，让渲染更高效</a></h3>
                  <div class="tag"><strong><a href="#">插画</a></strong><strong><a href="#">手绘</a></strong><strong><a href="#">绘画</a></strong><strong><a href="#">教程</a></strong><strong><a href="#">场景</a></strong><strong><a href="#">全景</a></strong></div>
                  <div class="action"> <span><i class="fa fa-eye" aria-hidden="true"></i>66</span><span><i class="fa fa-commenting-o" aria-hidden="true"></i>12</span><span class="handok"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>24</span></div>
                </div>
              </div>
            </div>
            <div class="layui-col-xs3">
              <div class="grid-demo"> <a href="#" class="show"> <img src="/just/images/img2.jpg" /><span class="new">最新</span>
                <div class="shadow" style="display:none;"> 犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具之一。犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具 </div>
                </a>
                <div class="cgiarc">
                  <h3><a href="#">渲云渲染，让渲染更高效</a></h3>
                  <div class="tag"><strong><a href="#">插画</a></strong><strong><a href="#">手绘</a></strong><strong><a href="#">绘画</a></strong><strong><a href="#">教程</a></strong><strong><a href="#">场景</a></strong><strong><a href="#">全景</a></strong></div>
                  <div class="action"> <span><i class="fa fa-eye" aria-hidden="true"></i>66</span><span><i class="fa fa-commenting-o" aria-hidden="true"></i>12</span><span class="handok"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>24</span></div>
                </div>
              </div>
            </div>
            <div class="layui-col-xs3">
              <div class="grid-demo"> <a href="#" class="show"> <img src="/just/images/img.jpg" /><span class="new">最新</span>
                <div class="shadow" style="display:none;"> 犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具之一。犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具 </div>
                </a>
                <div class="cgiarc">
                  <h3><a href="#">渲云渲染，让渲染更高效</a></h3>
                  <div class="tag"><strong><a href="#">插画</a></strong><strong><a href="#">手绘</a></strong><strong><a href="#">绘画</a></strong><strong><a href="#">教程</a></strong><strong><a href="#">场景</a></strong><strong><a href="#">全景</a></strong></div>
                  <div class="action"> <span><i class="fa fa-eye" aria-hidden="true"></i>66</span><span><i class="fa fa-commenting-o" aria-hidden="true"></i>12</span><span class="handok"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>24</span></div>
                </div>
              </div>
            </div>
            <div class="layui-col-xs3">
              <div class="grid-demo"> <a href="#" class="show"> <img src="/just/images/img1.jpg" /><span class="new">最新</span>
                <div class="shadow" style="display:none;"> 犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具之一。犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具 </div>
                </a>
                <div class="cgiarc">
                  <h3><a href="#">渲云渲染，让渲染更高效</a></h3>
                  <div class="tag"><strong><a href="#">插画</a></strong><strong><a href="#">手绘</a></strong><strong><a href="#">绘画</a></strong><strong><a href="#">教程</a></strong><strong><a href="#">场景</a></strong><strong><a href="#">全景</a></strong></div>
                  <div class="action"> <span><i class="fa fa-eye" aria-hidden="true"></i>66</span><span><i class="fa fa-commenting-o" aria-hidden="true"></i>12</span><span class="handok"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>24</span></div>
                </div>
              </div>
            </div>
            <div class="layui-col-xs3">
              <div class="grid-demo"> <a href="#" class="show"> <img src="/just/images/img.jpg" /><span class="new">最新</span>
                <div class="shadow" style="display:none;"> 犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具之一。犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具 </div>
                </a>
                <div class="cgiarc">
                  <h3><a href="#">渲云渲染，让渲染更高效</a></h3>
                  <div class="tag"><strong><a href="#">插画</a></strong><strong><a href="#">手绘</a></strong><strong><a href="#">绘画</a></strong><strong><a href="#">教程</a></strong><strong><a href="#">场景</a></strong><strong><a href="#">全景</a></strong></div>
                  <div class="action"> <span><i class="fa fa-eye" aria-hidden="true"></i>66</span><span><i class="fa fa-commenting-o" aria-hidden="true"></i>12</span><span class="handok"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>24</span></div>
                </div>
              </div>
            </div>
            <div class="layui-col-xs3">
              <div class="grid-demo"> <a href="#" class="show"> <img src="/just/images/img2.jpg" /><span class="new">最新</span>
                <div class="shadow" style="display:none;"> 犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具之一。犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具 </div>
                </a>
                <div class="cgiarc">
                  <h3><a href="#">渲云渲染，让渲染更高效</a></h3>
                  <div class="tag"><strong><a href="#">插画</a></strong><strong><a href="#">手绘</a></strong><strong><a href="#">绘画</a></strong><strong><a href="#">教程</a></strong><strong><a href="#">场景</a></strong><strong><a href="#">全景</a></strong></div>
                  <div class="action"> <span><i class="fa fa-eye" aria-hidden="true"></i>66</span><span><i class="fa fa-commenting-o" aria-hidden="true"></i>12</span><span class="handok"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>24</span></div>
                </div>
              </div>
            </div>
            <div class="layui-col-xs3">
              <div class="grid-demo"> <a href="#" class="show"> <img src="/just/images/img.jpg" /><span class="new">最新</span>
                <div class="shadow" style="display:none;"> 犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具之一。犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具 </div>
                </a>
                <div class="cgiarc">
                  <h3><a href="#">渲云渲染，让渲染更高效</a></h3>
                  <div class="tag"><strong><a href="#">插画</a></strong><strong><a href="#">手绘</a></strong><strong><a href="#">绘画</a></strong><strong><a href="#">教程</a></strong><strong><a href="#">场景</a></strong><strong><a href="#">全景</a></strong></div>
                  <div class="action"> <span><i class="fa fa-eye" aria-hidden="true"></i>66</span><span><i class="fa fa-commenting-o" aria-hidden="true"></i>12</span><span class="handok"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>24</span></div>
                </div>
              </div>
            </div>
            <div class="layui-col-xs3">
              <div class="grid-demo"> <a href="#" class="show"> <img src="/just/images/img1.jpg" /><span class="new">最新</span>
                <div class="shadow" style="display:none;"> 犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具之一。犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具 </div>
                </a>
                <div class="cgiarc">
                  <h3><a href="#">渲云渲染，让渲染更高效</a></h3>
                  <div class="tag"><strong><a href="#">插画</a></strong><strong><a href="#">手绘</a></strong><strong><a href="#">绘画</a></strong><strong><a href="#">教程</a></strong><strong><a href="#">场景</a></strong><strong><a href="#">全景</a></strong></div>
                  <div class="action"> <span><i class="fa fa-eye" aria-hidden="true"></i>66</span><span><i class="fa fa-commenting-o" aria-hidden="true"></i>12</span><span class="handok"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>24</span></div>
                </div>
              </div>
            </div>
            <div class="layui-col-xs3">
              <div class="grid-demo"> <a href="#" class="show"> <img src="/just/images/img.jpg" /><span class="new">最新</span>
                <div class="shadow" style="display:none;"> 犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具之一。犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具 </div>
                </a>
                <div class="cgiarc">
                  <h3><a href="#">渲云渲染，让渲染更高效</a></h3>
                  <div class="tag"><strong><a href="#">插画</a></strong><strong><a href="#">手绘</a></strong><strong><a href="#">绘画</a></strong><strong><a href="#">教程</a></strong><strong><a href="#">场景</a></strong><strong><a href="#">全景</a></strong></div>
                  <div class="action"> <span><i class="fa fa-eye" aria-hidden="true"></i>66</span><span><i class="fa fa-commenting-o" aria-hidden="true"></i>12</span><span class="handok"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>24</span></div>
                </div>
              </div>
            </div>
            <div class="layui-col-xs3">
              <div class="grid-demo"> <a href="#" class="show"> <img src="/just/images/img2.jpg" /><span class="new">最新</span>
                <div class="shadow" style="display:none;"> 犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具之一。犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具 </div>
                </a>
                <div class="cgiarc">
                  <h3><a href="#">渲云渲染，让渲染更高效</a></h3>
                  <div class="tag"><strong><a href="#">插画</a></strong><strong><a href="#">手绘</a></strong><strong><a href="#">绘画</a></strong><strong><a href="#">教程</a></strong><strong><a href="#">场景</a></strong><strong><a href="#">全景</a></strong></div>
                  <div class="action"> <span><i class="fa fa-eye" aria-hidden="true"></i>66</span><span><i class="fa fa-commenting-o" aria-hidden="true"></i>12</span><span class="handok"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>24</span></div>
                </div>
              </div>
            </div>
            <div class="layui-col-xs3">
              <div class="grid-demo"> <a href="#" class="show"> <img src="/just/images/img.jpg" /><span class="new">最新</span>
                <div class="shadow" style="display:none;"> 犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具之一。犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具 </div>
                </a>
                <div class="cgiarc">
                  <h3><a href="#">渲云渲染，让渲染更高效</a></h3>
                  <div class="tag"><strong><a href="#">插画</a></strong><strong><a href="#">手绘</a></strong><strong><a href="#">绘画</a></strong><strong><a href="#">教程</a></strong><strong><a href="#">场景</a></strong><strong><a href="#">全景</a></strong></div>
                  <div class="action"> <span><i class="fa fa-eye" aria-hidden="true"></i>66</span><span><i class="fa fa-commenting-o" aria-hidden="true"></i>12</span><span class="handok"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>24</span></div>
                </div>
              </div>
            </div>
            <div class="layui-col-xs3">
              <div class="grid-demo"> <a href="#" class="show"> <img src="/just/images/img1.jpg" /><span class="new">最新</span>
                <div class="shadow" style="display:none;"> 犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具之一。犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具 </div>
                </a>
                <div class="cgiarc">
                  <h3><a href="#">渲云渲染，让渲染更高效</a></h3>
                  <div class="tag"><strong><a href="#">插画</a></strong><strong><a href="#">手绘</a></strong><strong><a href="#">绘画</a></strong><strong><a href="#">教程</a></strong><strong><a href="#">场景</a></strong><strong><a href="#">全景</a></strong></div>
                  <div class="action"> <span><i class="fa fa-eye" aria-hidden="true"></i>66</span><span><i class="fa fa-commenting-o" aria-hidden="true"></i>12</span><span class="handok"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>24</span></div>
                </div>
              </div>
            </div>
            <div class="layui-col-xs3">
              <div class="grid-demo"> <a href="#" class="show"> <img src="/just/images/img.jpg" /><span class="new">最新</span>
                <div class="shadow" style="display:none;"> 犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具之一。犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具 </div>
                </a>
                <div class="cgiarc">
                  <h3><a href="#">渲云渲染，让渲染更高效</a></h3>
                  <div class="tag"><strong><a href="#">插画</a></strong><strong><a href="#">手绘</a></strong><strong><a href="#">绘画</a></strong><strong><a href="#">教程</a></strong><strong><a href="#">场景</a></strong><strong><a href="#">全景</a></strong></div>
                  <div class="action"> <span><i class="fa fa-eye" aria-hidden="true"></i>66</span><span><i class="fa fa-commenting-o" aria-hidden="true"></i>12</span><span class="handok"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>24</span></div>
                </div>
              </div>
            </div>
            <div class="layui-col-xs3">
              <div class="grid-demo"> <a href="#" class="show"> <img src="/just/images/img2.jpg" /><span class="new">最新</span>
                <div class="shadow" style="display:none;"> 犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具之一。犀牛的V-Ray 提供了可视化的最先进的解渲云渲染，让渲染更高效。犀牛是当今最流行的基于Windows的NURBS建模工具 </div>
                </a>
                <div class="cgiarc">
                  <h3><a href="#">渲云渲染，让渲染更高效</a></h3>
                  <div class="tag"><strong><a href="#">插画</a></strong><strong><a href="#">手绘</a></strong><strong><a href="#">绘画</a></strong><strong><a href="#">教程</a></strong><strong><a href="#">场景</a></strong><strong><a href="#">全景</a></strong></div>
                  <div class="action"> <span><i class="fa fa-eye" aria-hidden="true"></i>66</span><span><i class="fa fa-commenting-o" aria-hidden="true"></i>12</span><span class="handok"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>24</span></div>
                </div>
              </div>
            </div>
          </div>
          <div id="demo8"></div>
    </div>
  </div>
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
});
layui.use(['laypage', 'layer'], function(){
  var laypage = layui.laypage
  ,layer = layui.layer;
  
  //总页数低于页码总数
  laypage.render({
    elem: 'demo8'
    ,count: 1000
    ,layout: ['limit', 'prev', 'page', 'next']
  });
  });
</script>
</body>
</html>
