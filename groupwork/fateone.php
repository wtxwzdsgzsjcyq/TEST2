<?php
$res=mysqli_connect('localhost','root','972723fti1g1','yingling');
if(mysqli_connect_errno()){
  echo mysqli_connect_error();
}
mysqli_set_charset($res,'utf8');
?>

<!DOCTYPE html>
<!-- saved from url=(0033)https://fgowiki.com/list?id=gamev -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width,initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/homemobile.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <script src="js/hm.js"></script><script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.lazyload.min.js"></script>
    <script type="text/javascript" src="js/jquery.base64.js"></script>
    <script type="text/javascript">var STATIC_BASE_HOST = 'img.fgowiki.com'; var STATIC_BASE_URL = '//img.fgowiki.com'</script>
    <title>Fate/Grand Order中文Wiki主题攻略站 [文章列表]</title>
    <link rel="stylesheet" type="text/css" href="////cdn.fgowiki.com/wp-content/themes/umowang/layouts/home.css?ver=1.0.0" />
    <link rel="stylesheet" type="text/css" href="////cdn.fgowiki.com/wp-content/themes/umowang/layouts/footer.css?ver=1.0.0" />

    <meta name="robots" content="noindex,follow">
    <link rel="canonical" href="https://fgowiki.com/list">
    <meta property="og:locale" content="zh_CN">
    <meta property="og:type" content="article">
    <meta property="og:title" content="Fate/Grand Order中文Wiki主题攻略站 [文章列表]">
    <meta property="og:url" content="https://fgowiki.com/list">
    <meta property="og:site_name" content="Fate/Grand Order中文Wiki主题攻略站">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Fate/Grand Order中文Wiki主题攻略站 [文章列表]">

    <link rel="dns-prefetch" href="https://s.w.org/">
    <link rel="https://api.w.org/" href="https://fgowiki.com/wp-json/">
    <link rel="alternate" type="application/json+oembed" href="https://fgowiki.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Ffgowiki.com%2Flist">
    <link rel="alternate" type="text/xml+oembed" href="https://fgowiki.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Ffgowiki.com%2Flist&amp;format=xml">
</head>
<body>
<div id="page" class="">
<link rel="stylesheet" href="css/font-im.css">

//----------头栏
<div class="login-top">
<div class="container">
<a title="Fate/Grand Order官网" class="navbar-brand head-link head-link-now myhome" href="#"></span>主页</a>
<a title="头像生成器" class="navbar-brand head-link" href="#"></span>头像生成器</a>
<img src="images/loading.gif" alt="logo" style="position:absolute;top:3px;left:50%;width:20px;margin-left: -10px;">
<div class="checkbox pull-right" style=" margin:13px 0; width:80px;">
<label>
<input class="top_check" type="checkbox" name="checkbox" value="-1" onclick="newtarget();">窗口
</label>
</div>
<div class="user_info_pc pull-right"><a href="login.html" class="head-link">登陆</a></div>
<form class="form-inline navbar-right" method="get" action="https://fgowiki.com/">
<div class="form-group">
<div class="input-group">
<input type="text" class="form-control" id="s" name="s" placeholder="搜索" value="" required="">
<div class="input-group-addon"><button class="search-btn"><span data-icon="U" aria-hidden="true"></span></button></div>
</div>
</div>
</form>
</div>
</div>


<div id="headertop" class="header header-ontop">
<div class="header-main">
<a href="#"></a>
<div class="user_info_mob pull-right"><a href="#">登陆</a></div>
<a title="头像生成器" class="head-link pull-right" href="#"></span>头像生成器</a>
</div>
</div>


<div class="header-container">
        <ul class="header-nav" id="nav-hide">
            <li class="menu1"><a class="css2bcc1448c4e52" href="fateone.php">游戏动态</a></li>
            <ul class="">
                <li><a class="css2bcc1448c4e52" href="game.php">游戏文章</a></li>
                <li><a class="css2bcc1448c4e52" href="wenzhang.php">更新文章</a></li>
                <li><a class="css2bcc1448c4e52" href="#">攻略文章</a></li>
                <li><a class="css2bcc1448c4e52" href="#">新手文章</a></li>
                <li><a class="css2bcc1448c4e52" href="#c">同人漫画</a></li>
            </ul>
            <li class="menu2"><a class="css2bcc1448c4e52" href="#">图鉴大全</a></li>
            <ul class="">
                <li><a class="css2bcc1448c4e52" href="yingling.php">英灵图鉴</a></li>
                <li><a class="css2bcc1448c4e52" href="#">礼装图鉴</a></li>
                <li><a class="css2bcc1448c4e52" href="#">素材图鉴</a></li>

            </ul>
            <li class="menu3"><a class="css2bcc1448c4e52" href="#">攻略工具</a></li>
            <ul class="">
                <li style="display:none"><a class="css2bcc1448c4e52" href="#">入门介绍</a></li>
                <li><a class="css2bcc1448c4e52" href="#">剧情前瞻</a></li>
                <li><a class="css2bcc1448c4e52" href="#">扭蛋模拟</a></li>
                <li><a class="css2bcc1448c4e52" href="#">素材地图</a></li>
                <li><a class="css2bcc1448c4e52" href="#">主角装备</a></li>
                <li><a class="css2bcc1448c4e52" href="#">官方漫画</a></li>
                <li><a class="css2bcc1448c4e52" href="#">组队交友</a></li>
            </ul>
        </ul>
    </div>

    <div class="container outer">
        <div class="banner"><img src="images/Banner.jpg" width="100%"></div>
        <div class="row" id="row-move">
            <div class="col-md-3 navi">
                <ul class="nav nav-pills nav-stacked menu" style="">
                    <li role="presentation" class="menu1"><a href="fateone.php">游戏动态</a></li>
                    <ul class="nav nav-pills nav-stacked submenu">
                        <li role="presentation"><a href="game.php" class="gamevbg">游戏文章</a></li>
                        <li role="presentation"><a href="wenzhang.php" class="updatebg">更新文章</a></li>
                        <li role="presentation"><a href="#" class="raidersbg">攻略文章</a></li>
                        <li role="presentation"><a href="#" class="freshmanbg">新手文章</a></li>
                        <li role="presentation"><a href="#" class="comicbg">同人漫画</a></li>
                    </ul>
                    <li role="presentation" class="menu2"><a href="#">图鉴大全</a></li>
                    <ul class="nav nav-pills nav-stacked submenu">
                        <li role="presentation"><a href="yingling.php" class="guidebg">英灵图鉴</a></li>
                        <li role="presentation"><a href="#" class="equipbg">礼装图鉴</a></li>
                        <li role="presentation"><a href="#" class="materialbg">素材图鉴</a></li>

                    </ul>
                    <li role="presentation" class="menu3"><a href="#">攻略工具</a></li>
                    <ul class="nav nav-pills nav-stacked submenu">
                        <li role="presentation" style="display:none"><a href="#" class="introbg">入门介绍</a></li>
                        <li role="presentation"><a href="#" class="readbg">剧情前瞻</a></li>
                        <li role="presentation"><a href="#" class="capsulebg">扭蛋模拟</a></li>
                        <li role="presentation"><a href="#" class="mapbg">素材地图</a></li>
                        <li role="presentation"><a href="#" class="masterbg">主角装备</a></li>
                        <li role="presentation"><a href="#" class="comicsbg">官方漫画</a></li>
                        <li role="presentation"><a href="#" class="teambg">组队交友</a></li>
                    </ul>
                </ul>
            </div>

<script type="text/javascript" src="js/user.js"></script>
<script>
$(document).ready(function() {
  var hr=$(".myhome").attr('href');
  $(".myhome").attr('href',timestamp(hr));
});
function timestamp(url){  
     //  var getTimestamp=Math.random();  
       var getTimestamp=new Date().getTime();  
      if(url.indexOf("?")>-1){  
        url=url+"×tamp="+getTimestamp  
      }else{  
        url=url+"?timestamp="+getTimestamp  
      }  
      return url;  
    }  
    function newtarget(){
    //判断导航栏中窗口的选中问题
  //this.value=this.checked?1:-1;
  var top_val =$(".top_check").is(':checked')?1:-1; 
  $(".top_check").val(top_val); 
  var check_val = $(".top_check").val();
  var  a_all = $("a");
  var a_length =$("a").length; 
  if(check_val==1){
           for (var i = 0; i < a_length; i++) {
             if(typeof($("a").attr("target"))=="undefined"){
                  a_all.attr("target","_blank");
                //  $("#sideMenu").removeAttr("target");
             }
           } 
  }else if(check_val==-1){
      for (var i = 0; i < a_length; i++) {
          a_all.removeAttr("target");
      }
  }
 }  

</script>
<div class="col-xs-12 col-md-6">
<ul class="list-group articlelist">
<link rel="stylesheet" href="css/swiper.min.css">
<link rel="stylesheet" href="css/altas.css">
<script type="text/javascript" src="js/swiper.jquery.min.js"></script>
<style type="text/css">
						.data{width: 25px;height: 28px;}
						.WeekLv tr{cursor: pointer;}
						.WeekLv tbody th{
							width: 137px;
						}
						.drophead{background: #9BBAD3;}
						</style>
<div class="slider">
<div class="swiper-container swiper-container-horizontal">
<ul class="swiper-wrapper" style="transform: translate3d(-2272px, 0px, 0px); transition-duration: 0ms;"><li class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2" style="width: 538px; margin-right: 30px;"><a target="_blank" href="http://fgowiki.com/archives/13344" title="首页1"><img src="images/top_banner.png"></a></li>
<li class="swiper-slide" data-swiper-slide-index="0" style="width: 538px; margin-right: 30px;"><a target="_blank" href="#" title="首页2"><img src="images/top_banner(1).png"></a></li><li></li><li class="swiper-slide" data-swiper-slide-index="1" style="width: 538px; margin-right: 30px;"><a target="_blank" href="#" title="首页3"><img src="images/back37112-1.png"></a></li><li></li><li class="swiper-slide" data-swiper-slide-index="2" style="width: 538px; margin-right: 30px;"><a target="_blank" href="#" title="首页1"><img src="images/top_banner.png"></a></li><li></li><li class="swiper-slide swiper-slide-duplicate swiper-slide-active" data-swiper-slide-index="0" style="width: 538px; margin-right: 30px;"><a target="_blank" href="#" title="首页2"><img src="images/top_banner(1).png"></a></li></ul>
<div class="swiper-button-prev"></div>
<div class="swiper-button-next"></div>
</div>
</div>

<div class="announce">

<div class="genki-announcement" style="border: 1px solid #ffffff;background: #ffffff;"><li>
<a href="#">【同人漫画】女神来我家（后篇）<br><img src="images/nvshenlaiwojiashangg.jpg" width="100%" height="82"></a>
<span></span>
<a href="#" style="margin-left:1%">【同人漫画】女神来我家（前篇）&lt;<br><img src="images/nvshenlaiwojiashang.jpg" width="100%" height="82"></a>
</li>
</div> </div>

<span class="downloadspan">FateGrandOrder</span><table class="download">

<tbody><tr>
<td width="50%">日服客户端：Ver 1.37.0 <em style="color:#f50">2018-03-07</em></td>
<td>Wiki移动端：Ver 1.2.8</td>
</tr>
<tr>
<td>
<a href="#" target="_blank" class="android-app">Android</a>
<a href="#" target="_blank" class="ios-app">IOS</a>
</td>
<td>
<a href="#" target="_blank" class="android-app">Android</a>
<a href="#" target="_blank" class="ios-app">IOS</a>
</td>
</tr>
<tr>
<td>国服客户端：Ver 1.17.1 <em style="color:#f50">2018-01-23</em></td>
<td>游戏数据包：暂停更新</td>
</tr>
<tr>
<td>
<a target="_blank" href="#">苹果</a>
<a target="_blank" href="#">Android</a>
<a target="_blank" href="#">百度盘</a>
</td>
<td>
<a href="#">声明</a>
</td>
</tr>
</tbody></table>


<?php
$SQL='select * from fateone';
$m=mysqli_query($res,$SQL);
while($result=mysqli_fetch_assoc($m)){   
?>   


<div class="for-freshman">
<header>
<?php echo $result['title']  ?>
</header>
<table>
<tbody><tr>
<td>
<a href="#"><?php echo $result['word1']  ?></a>
<a href="#"><?php echo $result['word2']  ?></a>
<a href="#"><?php echo $result['word3']  ?></a>
</tr>
</tbody></table>
</div>

<?php
}
?>


<script type="text/javascript">
					    $.ajax({
					    	url: 'https://api.umowang.com/guides/banners/fgo',
					    	type: "GET",
					    	dataType: 'jsonp',
					    	jsonp: 'jsoncallback',
					    	jsonpCallback:'getindexdata',
        					cache:true,
					    	success:function(data){
					    		var	DataAll	= data.data;
								var length  = DataAll.length;
								for(i=0;i<length;i++){
									$(".swiper-wrapper").append('<li class="swiper-slide"><a target="_blank" href="'+DataAll[i].link+'" title='+DataAll[i].title+'><img src="'+DataAll[i].image+'"/></a><li>')
								}
								var swiper = new Swiper('.swiper-container', {
							        paginationClickable: true,
							        spaceBetween: 30,
							        centeredSlides: true,
							        autoplayDisableOnInteraction: false,
							        autoplay: 3000,
							        loop:true,
									prevButton:'.swiper-button-prev',
									nextButton:'.swiper-button-next'
						    	});
					    	}
					    })
					    var date = new Date();
					    var day = new Array("7", "1", "2", "3", "4", "5", "6")[date.getDay()];
					    $(".WeekLv tbody").each(function(){
					    	var that = $(this);
					    	that.find('tr:gt(2)').hide();
					    	if(that.index() == day){
					    		that.find('tr:gt(2)').show().addClass('drophead');
					    	}
					    	that.click(function(){
					    		that.find('tr:gt(2)').toggle().toggleClass('drophead');;
					    	})
					    })
					    </script>
</ul>
</div>
<div class="col-md-3">
<div class="panel-list">
<div class="clear"></div>
<div class="panel panel-primary newPets">
<a style="margin: 0;width: 100%;height: auto;" target="_blank" href="#"><img src="images/support.png"></a>
</div>
<div class="panel panel-primary newPets">
<div class="panel-heading">国服下载</div>
<div class="panel-body">
<img style="max-width:100%;" src="images/1520679615.png">
</div>
</div>
<div class="panel panel-primary newPets">
<div class="panel-heading">新增英灵</div>
<div class="panel-body">
<a href="#"><img src="images/198.jpg"></a>
<a href="#"><img src="images/197.jpg"></a>
<a href="#"><img src="images/196.jpg"></a>
</div>
</div>
<div class="panel panel-primary newEquips">
<div class="panel-heading">新增礼装</div>
<div class="panel-body">
<a href="#"><img src="images/710.jpg"></a>
<a href="#"><img src="images/709.jpg"></a>
<a href="#"><img src="images/708.jpg"></a>
<a href="#"><img src="images/706.jpg"></a>
<a href="#"><img src="images/705.jpg"></a>
<a href="#"><img src="images/704.jpg"></a>
<a href="#"><img src="images/703.jpg"></a>
<a href="#"><img src="images/702.jpg"></a>
</div>
</div>
<div class="panel panel-primary TOP">
<div class="panel-heading">最新文章</div>
<div class="panel-body">
<ul>
<li><a style="width:98%" title="【3.12-3.18】每周任务汉化图示" href="#">【3.12-3.18】每周任务汉化图示</a></li>
<li><a style="width:98%" title="【国服攻略】FGOwiki国服新年展望" href="#">【国服攻略】FGOwiki国服新年展望</a></li>
<li><a style="width:98%" title="【同人漫画】女神来我家（后篇）" href="#">【同人漫画】女神来我家（后篇）</a></li>
<li><a style="width:98%" title="【持续更新】英灵列传 No.46" href="#">【持续更新】英灵列传 No.46</a></li>
<li><a style="width:98%" title="【预告】「迦勒底boys collection 2018」即将开始！" href="#">【预告】「迦勒底boys collection 2018」即将开始！</a></li>
<li><a style="width:98%" title="【预告】「迦勒底boys collection 2018」期间限定礼装获取活动！" href="#">【预告】「迦勒底boys collection 2018」期间限定礼装获取活动！</a></li>
<li><a style="width:98%" title="【期间限定】「迦勒底boys collection 2018pick up召唤(日替)」即将开始！】" href="#">【期间限定】「迦勒底boys collection 2018pick up召唤(日替)」即将开始！】</a></li>
<li><a style="width:98%" title="【结束】维护公告(3/7 12:00北京时间实施)" href="#">【结束】维护公告(3/7 12:00北京时间实施)</a></li>
<li><a style="width:98%" title="【同人漫画】女神来我家（前篇）" href="#">【同人漫画】女神来我家（前篇）</a></li>
<li><a style="width:98%" title="【3.5-3.11】每周任务汉化图示" href="#">【3.5-3.11】每周任务汉化图示</a></li>
</ul>
</div>
</div>
<div class="panel panel-primary TAGS">
<div class="panel-heading">标签云</div>
<div class="panel-body">
<a href="#" class="tag-link-192 tag-link-position-1" title="14个话题" style="font-size: 12px;">FGO日常</a>
<a href="#" class="tag-link-116 tag-link-position-2" title="12个话题" style="font-size: 12px;">fgo漫画</a>
<a href="#" class="tag-link-176 tag-link-position-3" title="179个话题" style="font-size: 12px;">同人漫画</a>
<a href="#" class="tag-link-323 tag-link-position-4" title="81个话题" style="font-size: 12px;">国服</a>
<a href="#" class="tag-link-276 tag-link-position-5" title="12个话题" style="font-size: 12px;">每周任务</a>
<a href="#" class="tag-link-327 tag-link-position-6" title="154个话题" style="font-size: 12px;">汉化维护</a>
<a href="#" class="tag-link-329 tag-link-position-7" title="68个话题" style="font-size: 12px;">汉化通知</a>
<a href="#" class="tag-link-191 tag-link-position-8" title="122个话题" style="font-size: 12px;">汉化预告</a>
<a href="#" class="tag-link-76 tag-link-position-9" title="18个话题" style="font-size: 12px;">活动</a>
<a href="#" class="tag-link-108 tag-link-position-10" title="12个话题" style="font-size: 12px;">漫画</a>
<a href="#" class="tag-link-309 tag-link-position-11" title="35个话题" style="font-size: 12px;">版本更新</a>
<a href="#" class="tag-link-334 tag-link-position-12" title="46个话题" style="font-size: 12px;">英灵列传</a> </div>
</div>
</div>
</div>
</div>
</div>
<footer class="footborder">
<div class="container hidden-xs">
<div class="col-md-3 footlogo"></div>
<div class="col-md-6">
<ul>
<li class="css2bcc1448c4e52"><span>◈</span>直布罗陀攻略组　定位-攻略输出　职业-大众RBQ　宝具-ZCXM</li>
<li class="css2bcc1448c4e52"><span>◈</span>南风攻略组　　　定位-图鉴输出　<span>◈</span>援桌攻略组　定位-Room Zone!</li>
<li class="css2bcc1448c4e52"><span>◈</span>盾の契り攻略组　定位-剧情输出</li>
<li class="footabout css2bcc1448c4e52">手册bug建议群：570734014<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1257100766'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s95.cnzz.com/z_stat.php%3Fid%3D1257100766%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script><span id="cnzz_stat_icon_1257100766"><a href="http://www.cnzz.com/stat/website.php?web_id=1257100766" target="_blank" title="站长统计"><img border="0" hspace="0" vspace="0" src="./Fate_Grand Order中文Wiki主题攻略站 - FGO主题攻略站_files/pic.gif"></a></span><script src="./Fate_Grand Order中文Wiki主题攻略站 - FGO主题攻略站_files/z_stat.php" type="text/javascript"></script><script src="./Fate_Grand Order中文Wiki主题攻略站 - FGO主题攻略站_files/core.php" charset="utf-8" type="text/javascript"></script></li>
</ul>
</div>
<div class="col-md-3">
<ul class="snsicon">
<li><a target="_blank" href="#"><img src="images/qq.png" alt="FGO手册【建议/催更】" title="FGO手册【建议/催更】"></a></li>
<li><a target="_blank" href="#"><img src="images/mail.png"></a></li>
<li><a target="_blank" href="#"><img src="images/weibo.png"></a></li>
</ul>
</div>
</div>
</footer>
<script data-cfasync="false" src="js/email-decode.min.js"></script><script type="text/javascript">
var _hmt = _hmt || [];
$(window).scroll(function(){
	var menu = $(".nav-stacked.menu");
	var panel=$(".panel-list");
    var scrollTop = $(this).scrollTop();//滚动高度
    var scrollHeight = $(document).height();//内容高度
    var windowHeight = $(this).height();//浏览器高度
    var rightheight = $('.col-xs-12').height();//右侧容器的高度
    var leftheight = $('.col-md-3').height();//右侧容器的高度
	if(scrollTop>350){
		menu.addClass("topfixed");
		panel.addClass("topfixed");
		rowH=$(".row").height();
		mtop=rowH-$(".navi .topfixed").height();
		ptop=rowH-$(".panel-list.topfixed").height();
        if(scrollTop + windowHeight >= scrollHeight-$("footer.footborder").height()&&$(".navi .topfixed").height() >= windowHeight-$("footer.footborder").height()-60){
            if(leftheight < rightheight){
                menu.css({'position':'absolute','top': mtop});
            }
        }else{
			menu.css({'position': 'fixed','top': '60'});
		}
		if(scrollTop + windowHeight >= scrollHeight-$("footer.footborder").height()&&$(".panel-list.topfixed").height() >= windowHeight-$("footer.footborder").height()-60){
			panel.css({'position':'absolute','top': ptop});
		}else{
			panel.css({'position': 'fixed','top': '60'});
		}
	}else{
		menu.removeClass("topfixed");
		menu.css({'position':'relative','top':'0'});
		panel.removeClass("topfixed");
		panel.css({'position':'relative','top':'0'});
	}
});
$("#sideMenu").click(function(){
	$("#page").toggleClass("menu-open");
});
$(document).ready(function(){
  	var ua = navigator.userAgent;
	if(ua.indexOf('umowang') >  -1){
		$('#headertop').hide();
		$('.container').css("padding-top","0")
		$('.articlelist').css("border","0")
	}
	var hm = document.createElement("script");
  	hm.src = "https://hm.baidu.com/hm.js?1329d6baf2d1c8375760e23d86bacd27";
  	var s = document.getElementsByTagName("script")[0]; 
  	s.parentNode.insertBefore(hm, s);
  	if(!location.href.indexOf('login')){
        $("img").lazyload({
            effect : "fadeIn"
        });
    }
});

</script>
<script type="text/javascript" id="speedup_test" src="js/su_new2.js"></script>


</div></body></html>