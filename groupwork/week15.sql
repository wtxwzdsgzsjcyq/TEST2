/*
SQLyog Ultimate v12.5.0 (32 bit)
MySQL - 5.7.21-log : Database - yingling
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
create database /*!32312 IF NOT EXISTS*/`yingling` /*!40100 DEFAULT CHARACTER SET utf8 */;

use `yingling`;

/*Table structure for table `fateone` */

drop table if exists `fateone`;

create table `fateone` (
  `id` int(11) not null,
  `title` varchar(100) default null,
  `word1` text,
  `word2` text,
  `word3` text,
  primary key (`id`)
) engine=innodb default charset=utf8;

/*Data for the table `fateone` */

insert  into `fateone`(`id`,`title`,`word1`,`word2`,`word3`) values 
(1,'游戏相关','引继流程','申诉','更新'),
(2,'英灵相关','技能一览','属性一览','成长一览'),
(3,'战斗界面','援助选择','队伍编成','对战界面');

/*Table structure for table `game` */

drop table if exists `game`;

create table `game` (
  `id` int(11) not null,
  `title` varchar(100) default null,
  `content` text,
  `press` text,
  primary key (`id`)
) engine=innodb default charset=utf8;

/*Data for the table `game` */

insert  into `game`(`id`,`title`,`content`,`press`) values 
(1,'【预告】期间限定活动「复刻:Saber Wars ～Lily的宇宙武者修行～ 轻量版」即将开始！','images/top_banner-3.jpg','◆活动时间◆ 2018年3月15日(周四) 17:00(预定)～3月29日(周四) 11:59截止 ◆活动概要◆ 将进行期间限定的「复刻:Saber Wars …'),
(2,'【预告】「迦勒底boys collection 2018」即将开始！','images/top_banner-2.jpg','◆活动时间◆ 2018年3月7日(周三) 维护结束后～3月14日(周三) 22:59 ※活动时间与「白亚之薔薇」的收取时间并不相同，请注意。 在活动期间内，每天…'),
(3,'【期间限定】「迦勒底boys collection 2018pick up召唤(日替)」即将开始！】','images/top_banner-1.jpg',' ◆「迦勒底boys collection 2018pick up召唤(日替)」◆ 时间:2018年3月7日(周三)维护结束后～3月21日(周三) 11:59将…');

/*Table structure for table `yingling` */

drop table if exists `yingling`;

create table `yingling` (
  `id` int(11) not null,
  `picture` char(50) default null,
  `yname` char(30) default null,
  `zhi` char(30) default null,
  `value1` int(10) default null,
  `value2` int(10) default null,
  `value3` int(10) default null,
  `value4` int(10) default null,
  `bao` char(50) default null,
  primary key (`id`)
) engine=innodb default charset=utf8;

/*Data for the table `yingling` */




insert  into `yingling`(`id`,`picture`,`yname`,`zhi`,`value1`,`value2`,`value3`,`value4`,`bao`) values 
(1,'images/200.jpg','浅上藤乃','Archer',1764,1716,11025,10299,'images/Buster.png'),
(2,'images/199.jpg','赛米拉米斯','Assassin',1945,1747,13266,11309,'images/Buster.png'),
(3,'images/198.jpg','葛饰北斋','Foreigner',1940,1870,13230,12100,'images/Arts.png'),
(4,'images/197.jpg','阿提拉','Archer',1862,1626,11637,9759,'images/Quick.png'),
(5,'images/196.jpg','艾蕾什基伽尔','Lancer',2356,1598,16065,10343,'images/Buster.png');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

create database user;
use user;

create table user(id int(10) 
not null auto_increment,username varchar(30),password varchar(40),primary key(id));