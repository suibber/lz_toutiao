<?php
    use frontend\controllers\SiteController;
?>
<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=no">

    <!-- block title -->
    <title><?=$article->title?></title>
    <!-- block style -->
    <!-- block description -->
    
    <meta name="description" content="">

    <!-- block style -->
    
    <link href="/css/toutiao.css" rel="stylesheet">

<style></style></head>
<body class="wx_content">


    <script type="text/javascript">

            function UrlSearch()
            {
                var name,value;
                var str=location.href; //取得整个地址栏
                var num=str.indexOf("?")
                str=str.substr(num+1); //取得所有参数   stringvar.substr(start [, length ]

                var arr=str.split("&"); //各个参数放到数组里
                for(var i=0;i < arr.length;i++){
                    num=arr[i].indexOf("=");
                    if(num>0){
                        name=arr[i].substring(0,num);
                        value=arr[i].substr(num+1);
                        this[name]=value;
                    }
                }
            }

            var Request = new UrlSearch(); //实例化

            var  document_id         = "28727";
            var isapp = Request.isapp;
            if(isapp == undefined) isapp =  "";
            var cfg = Request.cfg;
            if(cfg == undefined) cfg =  "cfg_b-ad_h-sm_h-pm_h-cfg_e";
            var  uid                 =  Request.uid;
            if(uid == undefined) uid =  "2449884";
            var  wu                  =  Request.wu;
            if(wu == undefined) wu   =  "oqODdsxllax3vc_amu_48B8GsDQY";
            var  view_openid         =  Request.view_openid;
            var  v                   =  Request.v;

            if(view_openid == undefined) view_openid =  "";
        </script>
            <script type="text/javascript">

        if(v !== undefined){
            $(document).ready(function() {
                var config_duration = '13';
                var t = setTimeout(function () {
                    $.ajax({
                        type: 'POST',
                        async: true,
                        url: '/index.php?s=/Home/Follow/getDoc.html',
                        data: {
                            uid: "2449884",
                            v: v
                        }
                    });
                }, parseInt(config_duration) * 1000);
            });
        }else {
            $.ajax({
                type: "POST",
                async: true,
                url: "/index.php?s=/Home/Follow/info.html",
                data: "cat_id=65&document_id=28727&wu=" + wu + "&uid=" + uid + "&view_openid=" + view_openid,
                success: function (data) {
                    var config_duration = '13';
                    var t = setTimeout(function () {
                        $.ajax({
                            type: 'POST',
                            async: true,
                            url: '/index.php?s=/Home/Follow/getDoc.html',
                            data: {
                                uid: "2449884",
                                v: data.data
                            }
                        });
                    }, parseInt(config_duration) * 1000);
                }
            });
        }
</script>
    <div class="rich_media" data-action="/index.php?s=/Home/Article/ajaxShare.html" data-attr="uid=2449884&amp;id=28727">
        <div class="rich_media_inner">
            <div>
                <!-- 顶部广告 START-->
                    <div class="ad_widget8"></div>                <!-- 顶部广告 END-->

                <div class="rich_media_area_primary">
                    <h2 class="rich_media_title"><?=$article->title?></h2>

                    <div class="rich_media_meta_list"><em class="rich_media_meta rich_media_meta_text" id="post-date"><?=$article->updated_time?></em>
                            <div class="is_show_other">
                                                            <a class="rich_media_meta rich_media_meta_link rich_media_meta_nickname" href="javascript:;"><?=$article->author_name?></a>                            </div>
                    </div>

                    <div class="rich_media_content hide_content" id="js_content">
<!--正文部分 开始-->
<p style="color: rgb(62, 62, 62); line-height: 1.75em; font-family: 微软雅黑; font-size: 13.33px; white-space: normal; -ms-word-wrap: break-word !important; min-height: 1em; max-width: 100%; box-sizing: border-box !important; background-color: rgb(255, 255, 255);">
<?=str_ireplace('/kindeditor/', Yii::$app->params['backendUrl'].'/kindeditor/', $article->detail)?>
</p>
<!--正文部分 结束-->
                    </div>
                        <div class="is_show_change">
                        <!--关联文章-->
                        <div id="content_2">
                            <div class="sc">
                                <link href="/css/style_relative.css?16" rel="stylesheet">
                                <div class="rich_media_relative">
                                    <div class="rich_media_relative_header">
                                        <div class="deco"></div>
                                        <h4>相关推荐</h4>
                                        <!--h5 id="reload_relative_article">换一换</h5-->
                                        <div class="clearfix"></div>
                                    </div>
<!-- 相关推荐 START-->
                                    <div class="ad_widget11">
<style>
    html{
        line-height: 1.6;
        font-size: 100%
    }
    body{
        color: #333;
    }
    *{
        margin: 0;
        padding: 0;
    }
    a{
        color: #333;
        text-decoration: none;
    }
    a:hover{
        color: #333;
        text-decoration: none;
    }
    ul, li {
        list-style: outside none none;
    }
    #ad{
        background: #fff ;
        font-family: Microsoft YaHei,simsun,Verdana,Geneva,sans-serif;
        margin:  0 auto;
    }
    .ad_pic {
        position: relative;
    }   
    .ad_icon {
        bottom: 0;
        position: absolute;
        right: 0;
    }

    /*广告前端展示：纯图式 */
    .ad_pic,.ad_pic_text{
        margin-bottom: 3%
    }
    @media (max-width: 320px){
     .ad_icon img{
        width: 60px
     }
    }


.clearfix::after {
    clear: both;
    content: "";
    display: block;
    height: 0;
    visibility: hidden;
}
.m_article .m_article_img {
    float: left;
    height: 75px;
    margin-right: 0.2rem;
    overflow: hidden;
    position: relative;
    width: 92px;
}
.m_article_img img{
    width:92px;
    height:75px !important;
}
.m_article .m_article_info {
    overflow: hidden;
    padding-bottom: 4px;
}
.m_article {
    border-bottom: 1px solid #e5e5e5;
    padding: 10px 0;
}
section {
    background: #f6f6f6 none repeat scroll 0 0;
}
.clearfix::after {
    clear: both;
    content: "";
    display: block;
    height: 0;
    visibility: hidden;
}
.m_article .m_article_desc .m_article_desc_r {
    background-position: left 0;
    background-repeat: no-repeat;
    background-size: contain;
    color: #888;
    float: right;
}
.m_article .m_article_desc .m_article_desc_l {
    float: left;
}
.m_article .m_article_desc .m_article_time {
    color: #888;
    display: inline-block;
    font-size: 14px;
}
</style>

<?php foreach($random_articles as $article){ ?>
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

</div>                                    <!-- 相关推荐 END-->
                                    <div class="rich_media_relative_body clearfix">

                                    </div>
                                </div>


                            </div>
                        </div>
                        </div>


                        

<div class="is_show_other">


                        <div class="rich_media_tool" style="margin-bottom: 0px;"><a class="media_tool_meta meta_primary" href="#">阅读原文</a>
                            <div class="media_tool_meta tips_global meta_primary" id="js_read_area">阅读
                                <span><?=$article->reader?></span></div>
                            <span class="media_tool_meta meta_primary tips_global meta_praise" id="praise" data-action="/index.php?s=/Home/Article/ajaxUpdate.html" data-attr="uid=2449884&amp;id=28727"><i class="icon_praise_gray"></i><span class="praise_num"><?=$article->agree?></span></span>
                        </div>
                        </div>
                </div>

                
                                    
            </div>
        </div>

        <div class="ArticleInfo">
        </div>
</body>

</html>
