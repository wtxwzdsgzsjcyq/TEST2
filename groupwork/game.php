<?php
$res=mysqli_connect('localhost','root','972723fti1g1','yingling');//连接数据库
//检查连接
if(mysqli_connect_errno()){
  echo mysqli_connect_error();
}
// 修改数据库连接字符集为 utf8
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
<style type="text/css">
.read {
    border: none;
    color: #fff;
    padding: 10px 30px;
    background-color:blue;
    background-size: contain;
    transition: background 0.3s ease-in-out;

}
</style>
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
            <div class="user_info_mob pull-right"><a href="login.html" class="head-link">登陆</a></div>
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
            <div class="col-xs-12 col-md-6">
                <ul class="list-group articlelist">
                

<?php
//查询表数据
$SQL='select * from game';
$m=mysqli_query($res,$SQL);  //执行查询
while($result=mysqli_fetch_assoc($m)){  //关联数组
?>   


                    <li class="list-group-item">
                        <div class="articlelist-item-head">
                            <h4 class="gamev"><?php echo $result['title']  ?></h4>

                        </div>
                        <div class="articlelist-item-body">
                            <a href="#">
                                <img width="800" height="300" src="<?php echo $result['content']  ?>" class="attachment-full size-full wp-post-image" alt="top_banner" sizes="(max-width: 800px) 100vw, 800px"> </a>
                            <pre class="helperContent" style="background:none;"><?php echo $result['press']  ?></pre>
                        </div>
                        <div class="articlelist-item-footer">
                            <a class="read" href="./user/insert2.php">插入</a>
                            <div>
                                <a class="read" href="./user/delete2.php?id=<?php echo $result['id'] ?>">删除</a>
                            </div>
                        </div>
                    </li>
                     <div class="bottom-line"></div>
<?php
}
?>

                    
                </ul>
                <div class="page_navi"><a href="#" class="current">1</a><a href="#">2</a><a href="#">3</a><a href="#">4</a><a href="#">5</a><a href="#">6</a><a href="#">7</a><a href="#">8</a><a href="#">9</a><a href="#">10</a><a href="#"><span class="icons_head" data-icon="5"></span></a><a href="#" class="extend" title="跳转到最后一页"><span data-icon="9" class="icons_head"></span></a></div>

            </div>
            <div class="col-md-3">
                <div class="clear"></div>
                <div class="panel-list">
                    <div class="panel panel-primary TOP">
                        <div class="panel-heading">TOP文章</div>
                        <div class="panel-body">
                            <ul>
                                <li><a href="#" title="【国服攻略】『夏日! 海洋! 开拓啦! FGO 2017 Summer』详细攻略">【国服攻略】『夏日! 海洋! 开拓啦! FGO 2017 Summer』详细攻略</a> - 1.7M views</li><li><a href="https://fgowiki.com/archives/11250" title="【国服攻略】『魔法少女纪行～Prisma•Corps～』详细攻略">【国服攻略】『魔法少女纪行～Prisma•Corps～』详细攻略</a> - 1.4M views</li><li><a href="https://fgowiki.com/archives/8412" title="【国服攻略】『Fate/Accel Zero Order』详细攻略">【国服攻略】『Fate/Accel Zero Order』详细攻略</a> - 1.2M views</li><li><a href="https://fgowiki.com/archives/11568" title="【国服攻略】『尼禄祭再临~2017 Autumn~』详细攻略">【国服攻略】『尼禄祭再临~2017 Autumn~』详细攻略</a> - 1.1M views</li><li><a href="https://fgowiki.com/archives/9766" title="【国服攻略】『天魔御伽草子 鬼岛』详细攻略">【国服攻略】『天魔御伽草子 鬼岛』详细攻略</a> - 860.6K views</li><li><a href="https://fgowiki.com/archives/12028" title="【国服攻略】『Halloween Comeback！超极☆大南瓜村～踏上冒险之旅……～』详细攻略">【国服攻略】『Halloween Comeback！超极☆大南瓜村～踏上冒险之旅……～』详细攻略</a> - 799.9K views</li><li><a href="https://fgowiki.com/archives/9409" title="【国服攻略】『星之三藏亲，远赴天竺』详细攻略">【国服攻略】『星之三藏亲，远赴天竺』详细攻略</a> - 782.7K views</li><li><a href="https://fgowiki.com/archives/7340" title="【国服攻略】『空之境界/the garden of order』详细攻略">【国服攻略】『空之境界/the garden of order』详细攻略</a> - 751.1K views</li><li><a href="https://fgowiki.com/archives/12513" title="【国服攻略】『第二代是Alter亲～2017圣诞节～』攻略">【国服攻略】『第二代是Alter亲～2017圣诞节～』攻略</a> - 704.1K views</li><li><a href="https://fgowiki.com/archives/8060" title="【国服攻略】『达芬奇与七位赝作英灵』详细攻略">【国服攻略】『达芬奇与七位赝作英灵』详细攻略</a> - 677.3K views</li> </ul>
                        </div>
                    </div>
                    <div class="panel panel-primary TAGS">
                        <div class="panel-heading">标签云</div>
                        <div class="panel-body">
                            <a href="#" title="14个话题" style="font-size: 12px;">FGO日常</a>
                            <a href="#" title="12个话题" style="font-size: 12px;">fgo漫画</a>
                            <a href="#" title="181个话题" style="font-size: 12px;">同人漫画</a>
                            <a href="#" title="81个话题" style="font-size: 12px;">国服</a>
                            <a href="#" title="12个话题" style="font-size: 12px;">每周任务</a>
                            <a href="#" class="tag-link-327 tag-link-position-6" title="154个话题" style="font-size: 12px;">汉化维护</a>
                            <a href="#" class="tag-link-329 tag-link-position-7" title="68个话题" style="font-size: 12px;">汉化通知</a>
                            <a href="#" class="tag-link-191 tag-link-position-8" title="123个话题" style="font-size: 12px;">汉化预告</a>
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
                    <li class="footabout css2bcc1448c4e52">手册bug建议群：570734014<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1257100766'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s95.cnzz.com/z_stat.php%3Fid%3D1257100766%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script><span id="cnzz_stat_icon_1257100766"><a href="#" target="_blank" title="站长统计"><img border="0" hspace="0" vspace="0" src="images/pic.gif"></a></span><script src="images/z_stat.php" type="text/javascript"></script><script src="images/core.php" charset="utf-8" type="text/javascript"></script></li>
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