<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>@charset "utf-8";
/* CSS Document */
@import url("font-awesome.min.css");
@import url("../layui/css/layui.css");
* {padding: 0;margin: 0;}
.clearfix {*zoom: 1;}
.clearfix:before, .clearfix:after {display: table;line-height: 0;content: "";}
.clearfix:after {clear: both;}
li {list-style: none;}
a {color: #333;text-decoration: none;}
a:focus {outline: none;}
button, input {font-family: "微软雅黑";outline: none;}
#container{ font-size:14px;font-family: "微软雅黑"; color:#333;}
body{ background-color:#f7f7f7;}
.ctnt{ min-width:1080px; }
/*头部导航*/
.header { position:relative; background-color:#393d49; width:100%; }
.header .logo{ float:left; margin-left:20px; margin-right:50px; }
.header .logo{ height:20px; margin-top:20px;}
.header .hicon{ position:absolute ; right:20px; top:15px; }
.header .icon{ display:block; float:left; width:30px; height:30px; border:1px solid #525659; border-radius:40px;  text-align:center; margin:0 5px; }
.header .fa{line-height:30px;}
.header .fa-qq{ color:#5192cc;}
.header .fa-share-alt{ color:#efc758;}
.header .fa-question{ color:#f17252; font-size:18px;}
.header .fa-bars{ color:#86b653;}
.header a.icon:hover{ background-color:#565b67;}
.layui-nav{ position:initial;}
.layui-nav-item a{ font-size:16px; }
.layui-nav .layui-nav-item a{padding:0 20px;}
.layui-nav .layui-nav-item1 a{padding:0 20px; font-size:14px;}
.layui-nav-child dd a{ font-size:14px;}
.layui-nav-img{ width:28px; height:28px;}
.layui-nav .layui-this:after, .layui-nav-bar, .layui-nav-tree .layui-nav-itemed:after{ background-color:inherit; height:0;}
.layui-nav .layui-this{ background-color:#0158ff}
.header .login{ position:absolute ; right:190px; top:20px;color:#c4c5c9;}
.header .login a{ color:#c4c5c9; margin:0 8px;}
.header .login a:hover{ color:#fff;}
.layui-nav .usera{ position: absolute; right: 200px; }
/*主要内容*/
#main{ width:90%; padding:0 5%; margin:0 auto; min-width:1080px;}
.cgi ,.cgijc{ padding-top:20px;}
.tit{ padding-bottom:10px; line-height:30px;}
.tit h2{ float:left; display:block; font-size:20px;}
.tit a{ float:right; font-size:12px;}
.tit a i{ margin-right:8px;}
.tit a:hover{ color:#0058fe;}
.layui-row img{width:100%;}
.cgi .layui-row{ margin:0 -8px;}
.cgi .layui-row a.show{display:block; position:relative;}
.cgi .layui-row img{ width:100%;}
.grid-demo{ margin: 0 8px;}
.new{ background-color:#0158ff; display:blockl; color:#fff; font-size:12px; height:18px; line-height:18px; padding:0 5px; border-radius:3px; position:absolute; right:0px; top:0;}
.layui-tab{ margin:20px 0; margin-bottom:0;}
.layui-tab-title{border-bottom:none;  margin:0 auto;border:1px solid #ddd;background-color:#eee; height:36px;}
.layui-tab-title li{ font-size:14px; line-height:36px;border-right:1px solid #ddd;}
.layui-tab-title li:last-child{ border-right:none;}
.layui-tab-brief>.layui-tab-title .layui-this {color: #fff; border-bottom:none; background-color:#0158ff;}
.layui-tab-brief>.layui-tab-more li.layui-this:after, .layui-tab-brief>.layui-tab-title .layui-this:after{ border-bottom:none;}
.layui-tab-content{ padding:10px 0; padding-top:16px;}
.layui-tab-content .layui-row{margin:0 -8px;}
.layui-tab-content .layui-row .grid-demo{ margin:0 8px; border:1px solid #ddd; margin-bottom:16px; background-color:#fff;}
.layui-tab-content .layui-row a.show{overflow:hidden;position:relative;  display:block;}
.layui-tab-content .more{ text-align:center; margin-top:10px;}
.layui-tab-content .more a{ border-radius:30px; height:36px; line-height:36px; padding:0 30px; border:1px solid #ddd; display:inline-block; background-color:#eee;}
.layui-tab-content .more a:hover{background-color:#0158ff; color:#fff;}
.shadow{ position:absolute; top:0; left:0; right:0; bottom:0; background-color:rgba(0,0,0,0.5); color:#fff; text-align:left; border-radius:3px; padding:10px; overflow:hidden;} 
.cgiarc{ padding:10px;}
.cgiarc1{ height:64px;}
.cgiarc h3 a{font-size:14px; height:20px; line-height:20px; overflow:hidden; white-space:nowrap;text-overflow: ellipsis; display:block; color:#333; margin-bottom:2px;}
.cgiarc h3 a:hover{ color:#0058fe;}
.tag{ height:20px; overflow:hidden; line-height:20px;font-size:13px; }
.tag strong{ color:#999; font-weight:normal; padding-right:5px;}
.tag a{ color:#999;}
.tag a:hover{ color:#0158ff;}
.action{border-top:1px solid #ddd; margin-left:-10px; margin-right:-10px; padding:10px; padding-bottom:0; color:#999;margin-top:6px;}
.action span{ padding-right:10px;}
.action i{ margin-right:4px;}
.action .handok{ float:right; padding-right:0;}
.action .handok i:hover{color:#0058fe; cursor:pointer;}
.cgiall .grid-demo{ margin-bottom:16px; border:1px solid #ddd; margin:0 8px; margin-bottom:16px; background-color:#fff; }
.layui-flow-more a cite {border-radius: 30px;height: 36px;line-height: 36px;padding: 0 30px;border: 1px solid #ddd;display: inline-block;}
.layui-flow-more a cite:hover{background-color:#0158ff; color:#fff;}
.cginew .layui-col-xs3:nth-child(5),.cginew .layui-col-xs3:nth-child(6){ display:none;}
.layui-laypage .layui-laypage-curr .layui-laypage-em{    background-color: #0158ff;}
.list{ min-width:1000px;}
.list .layui-tab-content{width:90%; padding:0 5%; margin:0 auto;}
.choose{ background-color:#fff; border:1px solid #ddd; border-left:none; border-right:none; width:90%; padding:0 5%; margin:18px 0; height:44px; }
.choose a{ color:#999; margin:0 10px; line-height:42px; display:inline-block;}
.choose .this a{ border-bottom:3px solid #0158ff; color:#0158ff; font-weight:bold;}
.detail{width:90%; padding:0 5%; }
.dmain{border:1px solid #ddd; background-color:#fff; padding:30px; margin-top:20px;}
.dmain-t{    line-height: 28px;text-align: left;color: #666;}
.dmain-t h1{ line-height: 48px;font-size: 30px;color: #000;padding: 20px 0px;}
.dmain-t a{margin-right: 10px;color:#0158ff;}
.dmain-t .conn { height: 50px;border-bottom: 1px solid #ddd;}
.dmain-t .conn span{height: 16px;padding-right: 20px;line-height: 50px;color: #999;font-size: 14px;}
.dmain-t .conn span i{ margin-right:5px;}
.layui-nav .snav{ width:700px; font-size:14px; padding:10px;}
.snavfl{ padding:0 15px;}
.layui-nav .snav .snavfl a{ display:block; float:left; margin-right:20px; padding:4px 0; line-height:20px;}
.layui-nav .layui-nav-item .snav .btit{ color:#0158ff; margin-bottom:-5px; margin-left:-5px;}
.layui-nav .layui-nav-item .snav a:hover{ background:inherit; color:#0158ff;}
.layui-nav .snav dd.layui-this a, .snav dd.layui-this{ background:inherit; color:#333; }
.layui-nav .layui-nav-item .snav dd{ padding-bottom:10px;}
.dmain-m{ padding:20px 0;}
.dmain-m img{ max-width:100%;}
.dmain-m p{ line-height:20px; padding:10px 0;}
.ding{height: 86px;background: #21242e; margin:20px -30px;}
.ding .up{    float: right;height: 86px;width: 355px;background: #0158ff;}
.ding a{display: block;float: left;width: 80px;height: 86px;line-height: 86px;background: #0158ff;background: url(../images/up.png) no-repeat 38px center;padding-left: 90px;color: #fff;font-size: 20px; cursor:pointer;}
.ding .mun{    float: right;width: auto;margin-right: 20px;font-size: 18px;color: #afb6e0;line-height: 86px;}
.ding span{    font-size: 18px;color: #afb6e0;line-height: 86px;float: right;width: auto;margin-right: 20px;}
.ding a:hover{ display:block; float:left; width:80px; height:86px; line-height:86px; background:#f60 url(../images/up.png) no-repeat 38px center; padding-left:90px; color:#fff; font-size:20px;}
.download p{ color:#999; margin-top:10px;}
.download a{ color:#0158ff;}
.pingl{ background-color:#fff; border:1px solid #ddd; margin-top:10px; padding:20px 30px;}
.title{height: 50px; line-height: 50px; font-size: 20px; border-bottom:1px solid #ddd; padding-bottom:10px;}
.title span{font-size: 14px; color: #666;}
.new_message{ padding:20px 0;}
.new_message .input{height:30px; line-height:30px;color: #666;}
.new_message .input input{ float:left; height:28px; line-height:28px; background:#f0f0f0; border:1px solid #d4d4d4; text-align:left; padding-left:1%; width:200px; color:#666;}
.new_message .textarea {padding-bottom: 12px;position: relative;}
.new_message .textarea textarea {padding: 5px 1%; background:#f0f0f0;width: 98%;height: 150px;border: 1px solid #d4d4d4;color: #666;line-height: 24px;}

.new_message .input img{ float:left; margin-left:8px; width:100px; height:30px; margin-right:8px;}
.new_message .input .btn{ float:right; width:100px; height:30px; line-height:30px; text-align:center; font-size:14px; color:#fff; background:#0158ff;cursor: pointer; border:none;}
.new_message a{color:#0158ff;}
.message_list li {border-bottom: 1px solid #eaeaea;text-align: left;padding:16px 0;position:relative; padding-bottom:30px;}
.message_list li .img{width: 48px;height: 48px;margin-right: 4px; position:absolute;}
.message_list li .rightarea{ padding-left:70px;}
.message_list li .rightarea .who{ height: 20px;line-height: 20px; color: #333}
.message_list li .rightarea .who span{  color:#999;}
.message_list li .rightarea .txts{line-height: 20px; color: #000; font-size: 14px;}
.message_list li .rightarea a.reply{ display:block; float:right; width:40px; height:18px; line-height:18px; text-align:center;border: 1px solid #d4d4d4;color:#0158ff;}
.message_list li .rightarea .replys{border-top: 1px solid #eaeaea; padding-top:10px;margin-top:10px;float:left;}
.txts {padding: 20px 0px 50px 0px;}
.textli{ border-bottom:1px solid #eaeaea; padding-bottom:30px;}
.textlia{ padding-left:50px; padding-top:30px;}
/*登录注册*/
.logina{ padding:30px 40px; padding-left:0; padding-bottom: 20px; }
.logina p a{ color:#0158ff;  }
.logina .layui-btn1,.layui-layer-title{ background-color:#0158ff;   }
.logina .layui-btn:hover{border-color: #0158ff}
.logina input{height: 38px;line-height: 1.3;border:1px solid #e6e6e6;background-color: #fff; border-radius: 2px;display: block;width: 230px;padding-left: 10px;}
/*无限加载更多*/
.pageBox {text-align: center;}
.pageBox a {border:1px solid #ddd;display:inline-block;margin-right:6px;color: #707070;padding:0 8px;height:32px;font:bold 14px/34px arial;}
.pageBox a:hover,.pageBox a:active{background:#3aa9f2;color: #FFFFFF;text-decoration: none;}
.pageBox .cur { background: #3aa9f2;border: 1px solid #3aa9f2;text-decoration: none;}
.pageBox a.cur {color: #fff;}
.pageBox .disabled {width: 79px;}
.nodata{ text-align: center; line-height: 80px;  }
.footer{background-color:#393d49; width:100%; line-height: 60px; color: #fff; text-align: center;}
/*找回密码*/
.app-content-body{ width:500px; margin:0 auto; margin-top:40px; background-color:#fff; padding-bottom:20px; border:1px solid #ddd;}
.app-content-body div{ margin-bottom:15px;}
.app-content-body h2{    padding: 0 15px;display:block;height: 42px;line-height: 42px;border-bottom: 1px solid #eee;font-size: 16px;color: #fff;background-color: #3596dd; margin-bottom:40px;
}
.app-content-body p ,.app-content-body span{ display:block; float:left;}
.app-content-body p{padding: 9px 15px;width: 80px;font-weight: 400;text-align: right;}
.app-content-body .ipt{height: 38px;line-height: 1.3;border: 1px solid #e6e6e6;background-color: #fff;border-radius: 2px;display: block;width: 230px;padding-left: 10px;}
.app-content-body .ipt1{ float:left; width:120px; margin-right:6px;}
.app-content-body .tj{background-color: #3596dd;    display: inline-block;height: 38px;line-height: 38px;padding: 0 30px;color: #fff;white-space: nowrap;text-align: center;font-size: 14px; border: none;border-radius: 2px;cursor: pointer;}
.app-content-body img{ height:30px; margin-top:4px;}
.app-content-body span a{ color:#3596dd; margin-left:10px;}
.app-content-body span a:hover{ text-decoration:underline;}
@media(min-width:1600px){
	.layui-col-xs3{ width:16.666%;}
	.cginew .layui-col-xs3:nth-child(5),.cginew .layui-col-xs3:nth-child(6){ display:block;}
	}
























