<?php
$res=mysqli_connect('localhost','root','972723fti1g1','yingling');
if(mysqli_connect_errno()){
  echo mysqli_connect_error();
}
mysqli_set_charset($res,'utf8');
?>


<!DOCTYPE html>
<!-- saved from url=(0025)https://fgowiki.com/guide -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><script src="js/hm.js"></script>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width,initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.lazyload.min.js"></script>
    <script type="text/javascript" src="js/jquery.base64.js"></script>
    <script type="text/javascript">var STATIC_BASE_HOST = 'img.fgowiki.com'; var STATIC_BASE_URL = '//img.fgowiki.com'</script>
    <title>Fate/Grand Order中文Wiki主题攻略站 [英灵列表]</title>
    <link rel="stylesheet" type="text/css" href="////cdn.fgowiki.com/wp-content/themes/umowang/layouts/home.css?ver=1.0.0" />
    <link rel="stylesheet" type="text/css" href="////cdn.fgowiki.com/wp-content/themes/umowang/layouts/footer.css?ver=1.0.0" />
    <meta name="description" content="[英灵列表]--英灵，即是其丰功伟绩在死后留为传说，已成信仰对象的英雄所变成的存在。通常，英灵作为保护人类的力量 ，被世界所召唤。而人类所召唤的就是从者（Servant）了。">
    <meta name="robots" content="noindex,follow,noodp">
    <link rel="canonical" href="https://fgowiki.com/guide">
    <meta property="og:locale" content="zh_CN">
    <meta property="og:type" content="article">
    <meta property="og:title" content="Fate/Grand Order中文Wiki主题攻略站 [英灵列表]">
    <meta property="og:description" content="[英灵列表]--英灵，即是其丰功伟绩在死后留为传说，已成信仰对象的英雄所变成的存在。通常，英灵作为保护人类的力量 ，被世界所召唤。而人类所召唤的就是从者（Servant）了。">
    <meta property="og:url" content="https://fgowiki.com/guide">
    <meta property="og:site_name" content="Fate/Grand Order中文Wiki主题攻略站">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:description" content="[英灵列表]--英灵，即是其丰功伟绩在死后留为传说，已成信仰对象的英雄所变成的存在。通常，英灵作为保护人类的力量 ，被世界所召唤。而人类所召唤的就是从者（Servant）了。">
    <meta name="twitter:title" content="Fate/Grand Order中文Wiki主题攻略站 [英灵列表]">

    <link rel="dns-prefetch" href="https://s.w.org/">
    <link rel="https://api.w.org/" href="https://fgowiki.com/wp-json/">
    <link rel="alternate" type="application/json+oembed" href="https://fgowiki.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Ffgowiki.com%2Fguide">
    <link rel="alternate" type="text/xml+oembed" href="https://fgowiki.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Ffgowiki.com%2Fguide&amp;format=xml">
</head>
<body>
<div id="page" class="">
    <link rel="stylesheet" href="css/font-im.css">


    <div class="login-top">
        <div class="container">
            <a title="Fate/Grand Order官网" class="navbar-brand head-link head-link-now myhome" href="#"><span data-icon="" class="icons_head"></span>主页</a>
            <a title="头像生成器" class="navbar-brand head-link" href="#"><span data-icon="" class="icons_head"></span>头像生成器</a>
            <img src="images/loading.gif" alt="logo" style="position:absolute;top:3px;left:50%;width:20px;margin-left: -10px;">
            <div class="checkbox pull-right" style=" margin:13px 0; width:80px;">
                <label>
                    <input class="top_check" type="checkbox" name="checkbox" value="-1" onclick="newtarget();">窗口
                </label>
            </div>
            <div class="user_info_pc pull-right"><a href="login.html" class="navbar-brand head-link">登陆</a></div>
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
            <a href="#" id="sideMenu" class="header-menu"></a>
            <div class="user_info_mob pull-right"><a href="#" class="head-link">登陆</a></div>
            <a title="头像生成器" class="head-link pull-right" href="#"><span data-icon="" class="icons_head"></span>头像生成器</a>
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
            <div class="col-md-9 col-xs-12">
                <link rel="stylesheet" href="css/newlist.css">
                <link rel="stylesheet" href="css/altas.css">
                <div class="t-modal dialog">
                    <div class="searchbar" style="border:none"> <div class="guanjianzi"> <input class="form-control guanjian" placeholder="输入关键字查询" style="margin: 0 2% 0 0;"><div class="checkbox pull-right" style="display:inline-block; width:55px; margin:6px 0 0 0px;  "><label style="color:#655640;font-weight: bold;"> <input class="tujian_check" type="checkbox" name="checkbox" value="-1" onclick="newwindow();">窗口 </label> </div></div> <button class="default-btn" id="key-search">

                    <a href="./user/insert.php">插入</a>

                    </button> <button class="default-btn" id="pc-filter">高级筛选</button></div><div id="pc-filter-show" style="border:4px double #AFA588;margin-top: 5px;display: none;"></div><div class="articlelist" style="margin-top: 5px;"><div id="DataList" class="petdata cf"> <div class="dataTitle cf"> <div class="td img fl"><span>头像</span></div> <div class="td name fl"><span>姓名</span></div><div class="td class fl"><span>职阶</span></div><div class="td bhp fl"><span>基础<br>生命值</span></div> <div class="td bat fl"><span>基础<br>攻击力</span></div><div class="td mhp fl"><span>最大<br>生命值</span></div><div class="td mat fl"><span>最大<br>攻击力</span></div> <div class="td np fl"><span>宝具</span></div> </div>




<?php


$SQL='select * from yingling ';
$m=mysqli_query($res,$SQL);
while($result=mysqli_fetch_assoc($m)){
    
   
?>


                    <div class="data pull-left" data-id="200"><div class="td img fl"><img class="lazy" style="width: 95%; height: auto;" src="<?php echo $result['picture'] ?>"></div><div class="td name fl"><span><br><?php echo $result['yname']  ?><br></span>
                    </div><div class="td class fl"><span><?php echo $result['zhi']  ?></span></div><div class="td bhp fl"><span><?php echo $result['value1']  ?></span></div><div class="td bat fl"><span><?php echo $result['value2']  ?></span></div><div class="td mhp fl"><span><?php echo $result['value3']  ?></span></div><div class="td mat fl"><span><?php echo $result['value4']  ?></span></div><div class="td np fl"><a href="./user/delete.php?id=<?php echo $result['id'] ?>">删除</a></div></div>


<?php
}
?>






                </div> </div>
               
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
                    <li class="footabout css2bcc1448c4e52">手册bug建议群：570734014<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1257100766'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s95.cnzz.com/z_stat.php%3Fid%3D1257100766%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script><span id="cnzz_stat_icon_1257100766"><a href="#" target="_blank" title="站长统计"><img border="0" hspace="0" vspace="0" src=images/pic.gif"></a></span><script src="images/z_stat.php" type="text/javascript"></script><script src="images/core.php" charset="utf-8" type="text/javascript"></script></li>
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


</div></body></html>
