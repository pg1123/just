
<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<?php
$public_diyr['pagetitle']='会员中心';
$url="<a href=../../../>首页</a>&nbsp;>&nbsp;<a href=../cp/>会员中心</a>";
require(ECMS_PATH.'e/template/incfile/header.php');
?>
<div class="app-content-body ">

<div class="bg-light lter b-b wrapper-md">
  <h1 class="m-n font-thin h3">控制面板</h1>
<small class="text-muted">欢迎你 <?=$user[username]?>（<?=$level_r[$r[groupid]][groupname]?>）</small>
</div>
<div class="wrapper-md">
<div class="row">
        <div class="col-md-12">
          <div class="row row-sm text-center">
            <div class="col-lg-3 col-md-6">
                <a class="block panel padder-v item">
                <div class="h1 text-info font-thin h1"><?=$level_r[$r[groupid]][groupname]?></div>
                <span class="text-muted text-xs">当前用户组</span>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
              <a class="block panel padder-v bg-primary item" href="<?=$public_r['newsurl']?>e/member/my/">
                <span class="text-white font-thin h1 block"><?=$r[userfen]?>元</span>
                <span class="text-muted text-xs">余额</span>
              </a>
            </div>
            <div class="col-lg-3 col-md-6">
              <a class="block panel padder-v bg-info item" href="<?=$public_r['newsurl']?>e/member/my/">
                <span class="text-white font-thin h1 block"><?=$r[userfen]?>
                  点</span>
                <span class="text-muted text-xs">点数</span>
              </a>
            </div>
            <div class="col-lg-3 col-md-6">
              <a class="block panel padder-v item" href="<?=$public_r['newsurl']?>e/ShopSys/ListDd/">
                <div class="font-thin h1">我的订单</div>
                <span class="text-muted text-xs">购物</span>
               </a> 
            </div>
          </div>
        </div>
        
      </div>


</div>



	</div>
    
    

   <?php
require(ECMS_PATH.'e/template/incfile/footer.php');
?> 
    
