-- MySQL dump 10.13  Distrib 5.5.43, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: louzhe_toutiao
-- ------------------------------------------------------
-- Server version	5.5.43-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `toutiao_article`
--

DROP TABLE IF EXISTS `toutiao_article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `toutiao_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `model` tinyint(2) NOT NULL DEFAULT '0' COMMENT '模型：0文章 1短文',
  `type` tinyint(2) NOT NULL DEFAULT '0' COMMENT '分类',
  `title` varchar(200) NOT NULL DEFAULT '' COMMENT '标题',
  `created_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `author_name` varchar(100) NOT NULL DEFAULT '' COMMENT '作者名字',
  `detail` text COMMENT '内容详情',
  `reader` int(11) NOT NULL DEFAULT '0' COMMENT '阅读次数',
  `agree` int(11) NOT NULL DEFAULT '0' COMMENT '支持次数',
  `img` varchar(200) NOT NULL DEFAULT '/css/logo.png',
  `is_recommend` tinyint(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `toutiao_article`
--

LOCK TABLES `toutiao_article` WRITE;
/*!40000 ALTER TABLE `toutiao_article` DISABLE KEYS */;
INSERT INTO `toutiao_article` VALUES (1,0,0,'更新-001-测试文章','0000-00-00 00:00:00','2016-03-13 02:13:13','小编','<p>\r\n	哈哈哈哈\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	222222\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	44444\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	6666\r\n</p>',9534,601,'2016-03-13-02-00-05-14578344057007.jpg',1),(2,0,0,'测试文章2','0000-00-00 00:00:00','2016-03-10 07:02:01','李四','可是对方立刻撒旦解放卢卡斯的',15120,5,'/css/logo.png',1),(3,0,0,'测试文章3','0000-00-00 00:00:00','2016-03-11 06:21:02','王五','多萨法撒旦法撒旦法大赛',846,2,'/css/logo.png',0),(4,0,0,'RAV4降3.3万元 本周紧凑型SUV降价排行','0000-00-00 00:00:00','2016-03-12 10:46:11','头条小编','　　[汽车之家 行情分析]  又到了我们的每周降价排行时间了，在本期内容中，我们将为大家带来合资紧凑型SUV的降价情况，例如大家关注的奇骏、翼虎、途观、CR-V等等车型都会出现在文章中。此外，本期文章我们还将引入“购车管家底价”这个新概念，简单说，购车管家底价是我们亲自采集的，您可以信赖的，能拿着这个价格去店中买到车的市场行情价格，下面我们也会详细介绍，话不多说，让我们进入今天的主题吧。\r\n\r\n汽车之家\r\n\r\n本周紧凑型SUV 降价排行\r\n车型	官方指导价（万元）	最高优惠幅度\r\n（万元）	约合折扣	所在页\r\n北京现代途胜	15.99-23.99	1.29	9.2	第1页\r\n东风本田CR-V	17.98-24.98	2.40	9.0	第1页\r\n上汽大众途观	19.98-31.58	3.20	8.8	第2页\r\n东风日产奇骏	18.18-26.78	2.90	8.7	第2页\r\n长安福特翼虎	19.38-27.58	3.40	8.7	第3页\r\n一汽丰田RAV4	18.38-27.28	3.30	8.4	第3页\r\n\r\n汽车之家\r\n\r\n>>想了解您所中意的紧凑型SUV的购车底价么？点击进入汽车之家车商城了解详情<<\r\n\r\n● 北京现代新途胜\r\n\r\n◆ 各地行情\r\n\r\n　　北京现代新途胜于2015年9月上市，作为一个该市场换装新颜的老兵，从我们的购车管家底价来看，这款车的优惠最大为1.29万元，折扣约合9.2折。从全国的市场表现来看，目前这款车的优惠根据排量的不同有一些差异，其中1.6T车型的优惠在5000-8000元，而2.0L车型的优惠多在8000元-1.3万元区间。',3937,190,'',0),(5,0,0,'本周紧凑型SUV降价排行','0000-00-00 00:00:00','2016-03-12 12:02:39','头条小编',NULL,9202,716,'',0),(6,0,0,'asdfdsfsad','0000-00-00 00:00:00','2016-03-12 12:06:58','头条小编','<h1>\r\n	本周紧凑型SUV降价排行\r\n</h1>',8183,538,'',0),(12,1,0,'wowowoowowow','0000-00-00 00:00:00','2016-03-13 06:02:47','123','为你我用了半年的积蓄，漂洋过海的来看你为了这次相聚我连，见面时的呼吸都曾反复练习言语。从来没能将我的情意表达千万分之一为了这个遗憾 <br />',9342,359,'2016-03-13-06-02-47-14578489678586.jpg',0),(10,0,0,'dsafsadfdsa2222','0000-00-00 00:00:00','2016-03-12 12:12:32','头条小编','　[<a class=\"ShuKeyWordLink\" href=\"http://car.autohome.com.cn/shuyu/detail_29_31_100.html\" target=\"_blank\">汽车之家</a> <a href=\"http://www.autohome.com.cn/15346/0/1/conjunction.html\" target=\"_blank\">行情分析</a>]&nbsp; 又到了我们的每周降价排行时间了，在本期内容中，我们将为大家带来合资<a class=\"ShuKeyWordLink\" href=\"http://car.autohome.com.cn/shuyu/detail_18_19_220.html#1053\" target=\"_blank\">紧凑型SUV</a>的降价情况，例如大家关注的<a class=\"ShuKeyWordLink\" href=\"http://www.autohome.com.cn/656/\" target=\"_blank\">奇骏</a>、<a class=\"ShuKeyWordLink\" href=\"http://www.autohome.com.cn/2863/\" target=\"_blank\">翼虎</a>、<a class=\"ShuKeyWordLink\" href=\"http://www.autohome.com.cn/874/\" target=\"_blank\">途观</a>、<a class=\"ShuKeyWordLink\" href=\"http://car.autohome.com.cn/shuyu/detail_57_62_921.html\" target=\"_blank\">CR-V</a>等等车型都会出现在文章中。此外，本期文章我们还将引入“<strong><span style=\"color:#cc0000;\">购车管家底价</span></strong>”这个新概念，简单说<strong>，购车管家底价是我们亲自采集的，您可以信赖的，能拿着这个价格去店中买到车的市场行情价格</strong>，下面我们也会详细介绍，话不多说，让我们进入今天的主题asdfdsafasdfasdf22222222222',9960,162,'',0),(11,0,0,'222222222222222','0000-00-00 00:00:00','2016-03-12 12:42:25','头条小编','33333333333333',2706,658,'2016-03-12-12-42-25-14577865455599.jpg',0),(13,1,0,'222','0000-00-00 00:00:00','2016-03-13 06:14:44','小编','The columns (and the directions) to be ordered by. Columns can be specified in either a string (e.g. \"id ASC, name DESC\") or an array (e.g. [\'id\' =&gt; SORT_ASC, \'name\' =&gt; SORT_DESC]).The method will automatically quote the column names unless a column contains some parenthesis (which means the column contains a DB expression).',200,23,'2016-03-13-06-14-44-14578496842166.jpg',0),(14,1,0,'2','0000-00-00 00:00:00','2016-03-13 06:43:35','2','搜索结果PHP数学运算: 向上/向下取整及四舍五入 - Li Guoliang搜索结果PHP数学运算: 向上/向下取整及四舍五入 - Li Guoliang搜索结果PHP数学运算: 向上/向下取整及四舍五入 - Li Guoliang搜索结果PHP数学运算: 向上/向下取整及四舍五入 - Li Guoliang搜索结果PHP数学运算: 向上/向下取整及四舍五入 - Li Guoliang',1024,23,'2016-03-13-06-43-35-14578514159022.jpg',0);
/*!40000 ALTER TABLE `toutiao_article` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `toutiao_config_info`
--

DROP TABLE IF EXISTS `toutiao_config_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `toutiao_config_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` tinyint(2) NOT NULL DEFAULT '0' COMMENT '类型：1为首页滚图',
  `title` varchar(200) NOT NULL DEFAULT '' COMMENT '标题',
  `img` varchar(200) NOT NULL DEFAULT '' COMMENT '图片',
  `url` varchar(200) NOT NULL DEFAULT '' COMMENT '跳转连接',
  `rank` int(11) NOT NULL DEFAULT '0' COMMENT '排序',
  `info` varchar(200) NOT NULL DEFAULT '' COMMENT '文字描述',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `toutiao_config_info`
--

LOCK TABLES `toutiao_config_info` WRITE;
/*!40000 ALTER TABLE `toutiao_config_info` DISABLE KEYS */;
INSERT INTO `toutiao_config_info` VALUES (1,0,'测试滚图','http://imgsize.ph.126.net/?imgurl=http://img1.cache.netease.com/3g/2016/3/10/201603100819077eeb2.jpg_750x380x1x85.jpg&enlarge=true','https://www.baidu.com/',0,''),(2,0,'测试滚图2','https://ss0.bdstatic.com/70cFuHSh_Q1YnxGkpoWK1HF6hhy/it/u=3804510938,1491014550&fm=111&gp=0.jpg','https://www.baidu.com/s?wd=%E5%9B%BE%E7%89%87&rsv_spt=1&rsv_iqid=0x8a88627d00035a54&issp=1&f=8&rsv_bp=0&rsv_idx=2&ie=utf-8&tn=baiduhome_pg&rsv_enter=1',2,''),(3,2,'头条娱乐新闻测试','2016-03-12-13-00-29-14577876299688.jpg','/site/fun',2,'3小时前'),(4,1,'啦啦啦啦啦','2016-03-12-12-57-46-14577874660500.jpg','http://taobao.com',2,'');
/*!40000 ALTER TABLE `toutiao_config_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `toutiao_user`
--

DROP TABLE IF EXISTS `toutiao_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `toutiao_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `status` int(11) NOT NULL DEFAULT '0',
  `username` varchar(50) NOT NULL,
  `password_hash` varchar(200) NOT NULL,
  `auth_key` varchar(100) NOT NULL DEFAULT '',
  `access_token` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `toutiao_user`
--

LOCK TABLES `toutiao_user` WRITE;
/*!40000 ALTER TABLE `toutiao_user` DISABLE KEYS */;
INSERT INTO `toutiao_user` VALUES (3,10,'admin','$2y$13$U1kz.r23IYvMFu.SyrrjzOB7xS/qsj6JAfBKDc0fwQ4lU4fSHKRsK','','');
/*!40000 ALTER TABLE `toutiao_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-03-13 16:12:41
