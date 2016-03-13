<?php
    use frontend\controllers\SiteController;
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>卡车军团-娱乐</title>
<meta name="keywords" content="笑话,搞笑,笑话大全 爆笑,笑话大全,卡车军团,幽默笑话,爆笑笑话" />
<meta name="description" content="卡车军团是一个原创的卡事笑话分享社区,卡车网友分享的搞笑段子、搞笑图片大全,都是卡友最珍贵的开心经历,卡车爆笑卡事笑话只在卡车军团！"/>
<link href="http://static.qiushibaike.com/css/dist/web/app.min.css?v=765cbc3cc05d2ffe1a2bc4767db001b5" rel="stylesheet" type="text/css" />
</head>
<body>
<!-- Main content Start -->
<div id="content" class="main" style="width:100%;">
<div class="content-block clearfix" style="width:100%;">

<div id="content-left" class="col1" style="width:100%;">

<?php foreach($articles as $article){ ?>
<div class="article block untagged mb15" id='qiushi_tag_115464542' style='padding-bottom:80px;'>
    <div class="author clearfix">
        <a href="/users/21019241" target="_blank" rel="nofollow">
            <img src="/uploadimg/<?=$article->img?>" alt="<?=$article->author_name?>"/>
        </a>
        <a href="/users/21019241" target="_blank" title="<?=$article->author_name?>">
            <h2><?=$article->author_name?></h2>
        </a>
    </div>
    <div class="content">
        <?=$article->detail?>
    </div>
    <div class="stats">
        <span class="stats-vote">
            <i class="number"><?=$article->reader?></i>好笑
        </span>
        <span class="stats-vote">
             · <i class="number"><?=$article->agree?></i>不好笑
        </span>
    </div>
    <div id="qiushi_counts_115464542" class="stats-buttons bar clearfix">
        <ul class="clearfix">
            <li id="vote-up-115464542" class="up">
                <a href="javascript:voting(115464542,1)" class="voting" data-article="115464542" id="up-115464542" rel="nofollow">
                    <i class="iconfont" data-icon-actived="&#xf0061;" data-icon-original="&#xf001f;">&#xf001f;</i>
                    <span class="number hidden">664</span>
                </a>
            </li>
            <li id="vote-dn-115464542" class="down">
                <a href="javascript:voting(115464542,-1)" class="voting" data-article="115464542" id="dn-115464542" rel="nofollow">
                    <i class="iconfont" data-icon-actived="&#xf0020;" data-icon-original="&#xf0020;">&#xf0020;</i>
                    <span class="number hidden">-26</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="single-share">
    <!-- JiaThis Button BEGIN -->
    <div class="jiathis_style">
        <span class="jiathis_txt">分享到：</span>
        <a class="jiathis_button_weixin"></a>
        <a class="jiathis_button_qzone"></a>
        <a class="jiathis_button_tsina"></a>
        <a class="jiathis_button_tqq"></a>
        <a class="jiathis_button_renren"></a>
    </div>
    <script type="text/javascript" src="http://v3.jiathis.com/code/jia.js" charset="utf-8"></script>
    <!-- JiaThis Button END -->
    </div>
</div>
<?php } ?>
<div class="single-clear"></div>
    <ul class="pagination">
        <?php if(Yii::$app->request->get('page', 1) > 1){ ?>
        <li>
            <a href="/site/fun?page=<?=Yii::$app->request->get('page', 1)-1?>" rel="nofollow">
                <span class="next">
                    上一页
                </span>
            </a>
        </li>
        <?php } ?>
        
        <?php for($i=1;$i<=(($total_page>=6)?6:$total_page);$i++){ ?>
        <li>
            <a href="/site/fun?page=<?=$i?>" rel="nofollow">
            <span <?=(Yii::$app->request->get('page', 1)==$i)?'class="current"':'class="page-numbers"' ?>>
                <?=$i?>
            </span>
            </a>
        </li>
        <?php } ?>
        <?php if(Yii::$app->request->get('page', 1) < $total_page){ ?>
        <li>
            <a href="/site/fun?page=<?=Yii::$app->request->get('page', 1)+1?>" rel="nofollow">
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
</body>
</html>

