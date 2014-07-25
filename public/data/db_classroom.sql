/*
Navicat MySQL Data Transfer

Source Server         : Hong
Source Server Version : 50528
Source Host           : localhost:3306
Source Database       : db_classroom

Target Server Type    : MYSQL
Target Server Version : 50528
File Encoding         : 65001

Date: 2012-12-29 21:05:16
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `tb_activity`
-- ----------------------------
DROP TABLE IF EXISTS `tb_activity`;
CREATE TABLE `tb_activity` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '活动的 ID',
  `title` varchar(200) CHARACTER SET utf8 NOT NULL COMMENT '标题',
  `intro` text CHARACTER SET utf8 NOT NULL COMMENT '活动内容',
  `pubtime` datetime NOT NULL COMMENT '发布时间',
  `author` varchar(10) CHARACTER SET utf8 NOT NULL COMMENT '发布者',
  `clicks` int(11) DEFAULT '1' COMMENT '点击量',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of tb_activity
-- ----------------------------
INSERT INTO `tb_activity` VALUES ('27', '预祝我们在第七届ITAI再创佳绩', '&nbsp;&nbsp;&nbsp; 再过几天，我们的同学就要去北京参加ITAT决赛，在这里，我们祝愿他们再次取得优异的成绩，并凯旋归来……<br />\r\njjj <br />', '2012-12-20 22:16:50', 'admin', '3');
INSERT INTO `tb_activity` VALUES ('28', '四级英语', '奋斗四六级英语 ，加油。。。。<br />', '2012-12-20 22:23:53', 'admin', '1');

-- ----------------------------
-- Table structure for `tb_download`
-- ----------------------------
DROP TABLE IF EXISTS `tb_download`;
CREATE TABLE `tb_download` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '下载ID',
  `title` varchar(200) CHARACTER SET utf8 NOT NULL COMMENT '标题',
  `download` varchar(200) CHARACTER SET utf8 DEFAULT NULL COMMENT '下载地址',
  `pubtime` datetime NOT NULL COMMENT '上传的时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of tb_download
-- ----------------------------
INSERT INTO `tb_download` VALUES ('10', 'c++题库', '../public/download/20121212220408.doc', '2012-12-12 22:04:08');

-- ----------------------------
-- Table structure for `tb_guestbook`
-- ----------------------------
DROP TABLE IF EXISTS `tb_guestbook`;
CREATE TABLE `tb_guestbook` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '留言ID',
  `guest` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '留言者',
  `gintro` varchar(200) CHARACTER SET utf8 NOT NULL COMMENT '留言',
  `pubtime` datetime DEFAULT NULL COMMENT '发表时间',
  `rely` varchar(20) CHARACTER SET utf8 DEFAULT NULL COMMENT '回复者',
  `rintro` varchar(300) CHARACTER SET utf8 DEFAULT NULL COMMENT '回言',
  `relytime` datetime DEFAULT NULL COMMENT '回复时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of tb_guestbook
-- ----------------------------
INSERT INTO `tb_guestbook` VALUES ('27', 'C语言', '怎么没有C预言的题库呢？<br />', '2012-12-12 22:06:15', 'admin', '我已经上传了&nbsp; ， 你去看看吧<br />', '2012-12-20 22:31:37');

-- ----------------------------
-- Table structure for `tb_member`
-- ----------------------------
DROP TABLE IF EXISTS `tb_member`;
CREATE TABLE `tb_member` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '成员ID',
  `member` varchar(20) NOT NULL DEFAULT '' COMMENT '成员名称',
  `grade` varchar(10) NOT NULL DEFAULT '10' COMMENT '年级',
  `direction` varchar(50) DEFAULT '编程' COMMENT '方向',
  `picture` varchar(100) DEFAULT NULL COMMENT '图片',
  `intro` text COMMENT '简介',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_member
-- ----------------------------
INSERT INTO `tb_member` VALUES ('26', '林晓东', '2011', 'JAVA', '../public/upload/20121212213607.jpg', '<p>\r\n	&nbsp;&nbsp;&nbsp; 一个满怀梦想的我来自美丽的海港城市福建省泉州市。2011年毕业于泉州六中，同年以考上了广西省宜州市河池学院。就读于计算机与信息科学系，主攻java。\r\n</p>\r\n<p>\r\n	&nbsp;&nbsp;&nbsp; 我本人喜欢体育运动,乒乓球,篮球,慢跑等。不过我最近喜欢上了爬山，也坚持每周去爬一次山。平时很少外出,因为再怎么玩也是在周围玩，四周除了山还是山，所以这是一个世外桃源值得我们去学习的地方，在这里没有城市的喧嚣，我可以专心的去学好自己的专业知识,俗话说得好：一份耕耘一份收获，“天道酬勤”....\r\n</p>\r\n<p>\r\n	<br />\r\n</p>');
INSERT INTO `tb_member` VALUES ('28', '熊鹏', '2011', 'PHP 网站开发', '../public/upload/20121212214119.jpg', '<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	&nbsp;&nbsp;&nbsp; 为人诚实、积极向上、性格随和、能吃苦，有较强的责任心和有良好的团队精神、勇于接受新的挑战。\r\n</p>');
INSERT INTO `tb_member` VALUES ('29', '韩天怡', '2011', 'C 语言', '../public/upload/20121212214509.JPG', '<p>\r\n	&nbsp; &nbsp; 我是一个性格开朗，待人热情真诚，工作积极主动的人。主攻C语言方向。曾担任过班级团支书，现担任班级组织委员。积极参加各种比赛，努力学习。在加强专业学习的同时，我不断地利用各种机会参与到社会实践中去，充分锤炼了自己各方面的能力。擅长绘画及唱歌、看书，广泛的爱好可以让我在学习之余很好地释放自己，也更全面地塑造了个人的能力。有高度的爱国主义精神，有正确的人生观、价值观，积极做好每一项工作。\r\n</p>\r\n<p>\r\n	&nbsp;&nbsp;&nbsp; 坚信“成功＝艰苦劳动＋正确方法＋少说空话。”\r\n</p>');
INSERT INTO `tb_member` VALUES ('31', '林叶川', '2011', 'JAVA', '../public/upload/20121228212750.JPG', '<p>\r\n	&nbsp;&nbsp;&nbsp; 学编程，需要学的东西很多，而且不是那么容易地就可以学会，需要不断的努力，积累。\r\n</p>\r\n<p>\r\n	&nbsp;&nbsp;&nbsp; 首先，目标要明确，但也不能一味的空想我想要干嘛，而是要做出实际行动，做好眼前应该做好的事、任务。理论结合实践，光看书是不行的，还要多敲代码，在此过程中会发现更多的问题，一定要想方设法去解决问题，这样会使自己记忆得更深刻，下次再遇到就会迎刃而解。在接下来的时间，我的任务还是要继续学好数据结构&amp;算法和java。近阶段还是得反复的学数据结构和算法，并在网上AC题目，做题能够检验自己的学习效果，并且能够更好的去掌握知识，提高解决实际问题的能力。平时也看看别人的代码，在别人的代码中能学到更多的东西。。。打好基础是关键，要学精，而不是广泛地学。。。\r\n</p>\r\n<p>\r\n	&nbsp;&nbsp;&nbsp; 天道酬勤！努力奋斗吧！！！时间说长也长也不长了，做好每天该做的事、任务。。。\r\n</p>');

-- ----------------------------
-- Table structure for `tb_news`
-- ----------------------------
DROP TABLE IF EXISTS `tb_news`;
CREATE TABLE `tb_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '新闻ID',
  `title` varchar(200) NOT NULL COMMENT '新闻标题',
  `content` text NOT NULL COMMENT '新闻内容',
  `promulgator` varchar(100) NOT NULL COMMENT '发布者',
  `pubtime` datetime NOT NULL COMMENT '发布时间',
  `clicks` int(11) DEFAULT '1' COMMENT '点击量',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_news
-- ----------------------------
INSERT INTO `tb_news` VALUES ('27', '预祝我们在第七届ITAI再创佳绩', '&nbsp;&nbsp;&nbsp; 再过几天，我们的同学就要去北京参加ITAT决赛，在这里，我们祝愿他们再次取得优异的成绩，并凯旋归来……<br />', 'admin', '2012-12-12 22:01:12', '2');
INSERT INTO `tb_news` VALUES ('28', '哈哈哈', '和噶和&nbsp; 噶就 000', 'admin', '2012-12-20 21:59:43', '1');

-- ----------------------------
-- Table structure for `tb_notice`
-- ----------------------------
DROP TABLE IF EXISTS `tb_notice`;
CREATE TABLE `tb_notice` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '公告ID',
  `notice` text CHARACTER SET utf8 NOT NULL COMMENT '公告的内容',
  `pubtime` datetime NOT NULL COMMENT '发布时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of tb_notice
-- ----------------------------
INSERT INTO `tb_notice` VALUES ('3', '<p>\r\n	网购拉动内需消费<br />\r\n<br />\r\n　　根据天猫方面的数据，11日零时后第一分钟，超过1000万独立用户涌入天猫。11日上午11时左右，天猫成交额突破79亿元，超越去年美国“网络星期一”（感恩节后的第一个星期一，是美国在线销售市场中一年里销售额最高的一天）的销售额12.51亿美元；13时38分，交易额突破100亿元，提前完成天猫官方的预计目标。\r\n</p>\r\n<hr>', '2012-11-13 06:26:09');
INSERT INTO `tb_notice` VALUES ('4', '<p>\r\n	呵呵 楼下的不是那种的 要中间没有间隔的 也就是最后一副图片显示完后,再循环第一副的时候不能有空白的间隔.\r\n</p>\r\n<p>\r\n	呵呵 楼下的不是那种的 要中间没有间隔的 也就是最后一副图片显示完后,再循环第一副的时候不能有空白的间隔.\r\n</p>\r\n<p>\r\n	呵呵 楼下的不是那种的 要中间没有间隔的 也就是最后一副图片显示完后,再循环第一副的时候不能有空白的间隔.\r\n</p>\r\n<br />', '2012-11-13 22:02:44');

-- ----------------------------
-- Table structure for `tb_produce`
-- ----------------------------
DROP TABLE IF EXISTS `tb_produce`;
CREATE TABLE `tb_produce` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '成果ID',
  `title` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT '标题',
  `produce` varchar(100) CHARACTER SET utf8 DEFAULT NULL COMMENT '图片',
  `intro` text CHARACTER SET utf8 NOT NULL COMMENT '简介',
  `pubtime` datetime NOT NULL COMMENT '发布时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of tb_produce
-- ----------------------------

-- ----------------------------
-- Table structure for `tb_user`
-- ----------------------------
DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '用户ID',
  `user` varchar(10) NOT NULL COMMENT '用户名称',
  `pwd` varchar(50) NOT NULL COMMENT '用户密码',
  `power` int(2) NOT NULL DEFAULT '1' COMMENT '用户的权限 0-》 超级 1-》普通',
  `reg_time` datetime NOT NULL COMMENT '注册的时间',
  `last_time` datetime NOT NULL COMMENT '最后的登陆时间',
  PRIMARY KEY (`id`,`user`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_user
-- ----------------------------
INSERT INTO `tb_user` VALUES ('20', 'admin', '820fc5f6b0d1a1bdcbaee54ee47a180d', '0', '2012-11-26 23:31:07', '2012-12-12 19:39:33');
INSERT INTO `tb_user` VALUES ('26', '602\r\n		  ', 'be1c2045730a204dca2966a95450e5ae', '1', '2012-11-26 23:42:12', '2012-11-26 23:42:12');
INSERT INTO `tb_user` VALUES ('27', '333\r\n		  ', 'ff603bfa705a7b6633cfdef0315da617', '1', '2012-11-26 23:44:31', '2012-11-26 23:44:31');
INSERT INTO `tb_user` VALUES ('28', '321\r\n		  ', 'e7c41da6aa18be4019db7254c1705c1f', '1', '2012-11-26 23:49:19', '2012-11-26 23:49:19');
