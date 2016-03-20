<?php
    use frontend\controllers\SiteController;
?>
<!DOCTYPE html>
<html style="font-size: 112.4px;" data-dpr="1.5">
<head>
    <meta charset="UTF-8">
    <title><?=Yii::$app->params['company']?></title>
    <meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="keywords" content="<?=Yii::$app->params['company']?>">
    <meta name="description" content="<?=Yii::$app->params['company']?>">
<link href="/css/index.css" rel="stylesheet">
<script type="text/javascript">
        //主控逻辑
        window.NEWAP = {};
        NEWAP.localParam = function(search, hash) {
            var fn;
            search = search || window.location.search;
            hash = hash || window.location.hash;
            fn = function(str, reg) {
                var data;
                if (str) {
                    data = {};
                    str.replace(reg, function($0, $1, $2, $3) {
                        data[$1] = $3;
                    });
                    return data;
                  }
            };
            return {
                search: fn(search, new RegExp("([^?=&]+)(=([^&]*))?", "g")) || {},
                hash: fn(hash, new RegExp("([^#=&]+)(=([^&]*))?", "g")) || {}
            };
        };
        var hashparam = NEWAP.localParam().search['hash'];
        //默认路由不开启hash模式
        NEWAP.hashrouter = false;
        if (hashparam == "true") {
            NEWAP.hashrouter = true;
        }
        // 两种路由要准备两个名字 channel=XXX；/xxx
        NEWAP.routename = "";
          if (NEWAP.hashrouter) {
            NEWAP.routename = "channel=";
        }
    </script>
    <script src="/css/newaplib.1OhW3awmIxkk.12.js"></script>
    </head>
<body>
<h1 style="display: none;">卡车军团</h1>
    <div class="fixed" id="fixed" style="background: rgb(255, 255, 255); width: 100%; height: 100%; display: none; position: fixed; z-index: 10000;">
    </div>
    <script type="text/javascript">
        var Dpr = 1, uAgent = window.navigator.userAgent;
        var isIOS = uAgent.match(/iphone/i);
        var isYIXIN = uAgent.match(/yixin/i);
        var is2345 = uAgent.match(/Mb2345/i);
        var ishaosou = uAgent.match(/mso_app/i);
        var isSogou = uAgent.match(/sogoumobilebrowser/ig);
        var isLiebao = uAgent.match(/liebaofast/i);
        var isGnbr = uAgent.match(/GNBR/i);
        function resizeRoot(){
            var wWidth = (screen.width > 0) ? (window.innerWidth >= screen.width || window.innerWidth == 0) ? screen.width : window.innerWidth : window.innerWidth, wDpr, wFsize;
            var wHeight = (screen.height > 0) ? (window.innerHeight >= screen.height || window.innerHeight == 0) ? screen.height : window.innerHeight : window.innerHeight;
            if (window.devicePixelRatio) {
                wDpr = window.devicePixelRatio;
            } else {
                wDpr = isIOS ? wWidth > 818 ? 3 : wWidth > 480 ? 2 : 1 : 1;
            }
            if(isIOS) {
                wWidth = screen.width;
                wHeight = screen.height;
            }
            if(wWidth > wHeight){
                wWidth = wHeight;
            }
            wFsize = wWidth > 1080 ? 144 : wWidth / 7.5;
            wFsize = wFsize > 32 ? wFsize : 32;
            window.screenWidth_ = wWidth;
            document.getElementsByTagName('html')[0].dataset.dpr = wDpr;
            if(isYIXIN || is2345 || ishaosou || isSogou || isLiebao || isGnbr){
                setTimeout(function(){
                    document.getElementById("fixed").style.display="none";
                },500);
            }else{
                document.getElementsByTagName('html')[0].style.fontSize = wFsize + 'px';
                document.getElementById("fixed").style.display="none";
            }
            // alert("fz="+wFsize+";dpr="+window.devicePixelRatio+";UA="+uAgent+";width="+wWidth+";sw="+screen.width+";wiw="+window.innerWidth+";wsw="+window.screen.width+window.screen.availWidth);
        }
        resizeRoot();
    </script>
<header id="l-indexheader">
    <div class="u_topbar">
        <div class="u_logo"></div>
        
    </div>
    
</header>

<div class="weixin_fixed">
    <div class="bar_wrap">
        
        
    </div>
    <div class="contents">
        <div class="contents-tablist clearfix" style="width: 30240px; transform: translate3d(0px, 0px, 0px); transition-duration: 0.5s;"><div class="contents-tablist-wrap fl active" id="channel_all" style="width: 1440px; height: auto; min-height: 417px;">
    <div class="headslide">    


<script type="text/javascript" src="/css/demo_data/zepto_min.js"></script>
<script type="text/javascript" src="/css/demo_data/touchslider.js"></script>
    <div class="title" style="height:1px; overflow:hidden">1111</div>
    <div style="overflow: hidden; visibility: visible; list-style: outside none none; position: relative;" id="slider" class="swipe">
        <div class="count">
            <b class="bi">1</b>/<b class="bcount"><?=count($scroll_imgs)?></b>
        </div>
        <ul style="position: relative; transition: left 0ms ease-out 0s; width: 5464px; left: -4098px;" class="piclist">
        <?php foreach($scroll_imgs as $k => $scroll_img){ ?>
            <li style="width: 1366px; height: 260px; display: table-cell; padding: 0px; margin: 0px; float: left; vertical-align: top;"><p><?=$scroll_img->title?></p><img class="scroll-img" src="/uploadimg/<?=$scroll_img->img?>"></li>
        <?php } ?>
        </ul>
    </div>
<style>
    .scroll-img{
        width:100%;
        height:281px;
    }
</style>
<script type="text/javascript">
$(function(){

    var num=$('#slider').find('li').size();

    $('.bcount').text(num);

    $('.b_btn').click(function(){

        $(this).toggleClass('b_btn_active');

        $('.intro').toggle();

    })

})
var tt=new TouchSlider({id:'slider','auto':'-1',fx:'ease-out',direction:'left',speed:600,timeout:5000,'before':function(index){

    var es=document.getElementById('slider').getElementsByTagName('li');

    var it=$(es[index]).index()+1;

    $('.bi').text(it);

    var tx=$(es[index]).find('p').text();

    $('.title').text(tx);

}});
</script>
</div>
    <div class="content-list">
<section class="m_photoset m_article list-item clearfix" id="BHQ8UA42bjzhuyueke">
    <a href="<?=$head_news[0]->url?>">
        <div class="m_photoset_title">
            <?=$head_news[0]->title?>
        </div>
        <div class="m_photoset_pic">
            <div class="m_photoset_pic_wrap clearfix">
                <img src="/uploadimg/<?=$head_news[0]->img?>">
                <img src="/uploadimg/<?=$head_news[1]->img?>">
                <img src="/uploadimg/<?=$head_news[2]->img?>">
            </div>
        </div>
        <div class="m_photoset_info">
            <div class="m_article_desc clearfix">
                <div class="m_article_desc_l">
                        <span class="m_article_channel">娱乐新闻</span>
                    <span class="m_article_time"><?=$head_news[0]->info?></span>
                </div>
                <!--div class="m_article_desc_r">
                    <span class="iconfont"></span>360
                </div-->
            </div>
        </div>
    </a>
</section>
<?php foreach($articles as $article){ ?>
<?php if($article->img3){ ?>
    <section class="m_photoset m_article list-item clearfix" id="BHQ8UA42bjzhuyueke">
        <a href="/site/detail?id=<?=$article->id?>">
            <div class="m_photoset_title">
                <?=$article->title?>
            </div>
            <div class="m_photoset_pic">
                <div class="m_photoset_pic_wrap clearfix">
                    <img src="/uploadimg/<?=$article->img?>">
                    <img src="/uploadimg/<?=$article->img2?>">
                    <img src="/uploadimg/<?=$article->img3?>">
                </div>
            </div>
            <div class="m_photoset_info">
                <div class="m_article_desc clearfix">
                    <div class="m_article_desc_l">
                            <span class="m_article_channel">多图</span>
                        <span class="m_article_time"></span>
                    </div>
                    <div class="m_article_desc_r">
                        <span class="iconfont"></span><?=$article->reader?>
                    </div>
                </div>
            </div>
        </a>
    </section>
<?php }else{ ?>
    <section class="m_article list-item clearfix" id="BHQ96DG700963VRO">
        <a href="/site/detail?id=<?=$article->id?>">
            <div class="m_article_img">
                    <img src="/uploadimg/<?=$article->img?>">
            </div>
            <div class="m_article_info">
                <div class="m_article_title">
                    <span><?=$article->title?></span>
                </div>
                <div class="m_article_desc clearfix">
                    <div class="m_article_desc_l">
                        <?php if($article->is_recommend){ ?>
                            <span class="m_article_channel">推荐</span>
                        <?php } ?>
                        <span class="m_article_time"><?=SiteController::time_tran($article->updated_time)?></span>
                    </div>
                        <div class="m_article_desc_r">
                            <span class="iconfont"></span><?=$article->reader?>
                        </div>
                </div>
            </div>
        </a>
    </section>
<?php } ?>
<?php } ?>
</div>
    <div class="list-more" >
        <div class="loading-wrap">
            <ul class="pagination">
                <?php if(Yii::$app->request->get('page', 1) > 1){ ?>
                <li>
                    <a href="/site/index?page=<?=Yii::$app->request->get('page', 1)-1?>" rel="nofollow">
                        <span class="next">
                            上一页
                        </span>
                    </a>
                </li>
                <?php } ?>
                
                <?php for($i=1;$i<=(($total_page>=4)?4:$total_page);$i++){ ?>
                <li>
                    <a href="/site/index?page=<?=$i?>" rel="nofollow">
                    <span <?=(Yii::$app->request->get('page', 1)==$i)?'class="current"':'class="page-numbers"' ?>>
                        <?=$i?>
                    </span>
                    </a>
                </li>
                <?php } ?>
                <?php if(Yii::$app->request->get('page', 1) < $total_page){ ?>
                <li>
                    <a href="/site/index?page=<?=Yii::$app->request->get('page', 1)+1?>" rel="nofollow">
                        <span class="next">
                            下一页
                        </span>
                    </a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>
</div>
    </div>
</div>
<footer>
    <div class="copyright"><?=Yii::$app->params['company']?></div>
</footer>

</body></html>
