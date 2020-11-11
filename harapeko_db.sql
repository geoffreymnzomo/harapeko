/*
SQLyog Community v11.52 (64 bit)
MySQL - 5.6.26 : Database - Harapeko
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`Harapeko` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `Harapeko`;

/*Table structure for table `coupon_purchases` */

DROP TABLE IF EXISTS `coupon_purchases`;

CREATE TABLE `coupon_purchases` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) DEFAULT NULL,
  `phonenumber` varchar(100) DEFAULT NULL,
  `creditcard` varchar(100) DEFAULT NULL,
  `securitycode` varchar(100) DEFAULT NULL,
  `no_coupons` varchar(100) DEFAULT NULL,
  `amount` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `coupon_purchases` */

insert  into `coupon_purchases`(`id`,`fullname`,`phonenumber`,`creditcard`,`securitycode`,`no_coupons`,`amount`) values (1,'Geoffrey','0726392015','2147483647','123','2','2000');

/*Table structure for table `credit_cards` */

DROP TABLE IF EXISTS `credit_cards`;

CREATE TABLE `credit_cards` (
  `credit_id` int(11) NOT NULL AUTO_INCREMENT,
  `cardnumber` int(11) NOT NULL,
  `expirydate` date NOT NULL,
  `secret_code` int(11) NOT NULL,
  PRIMARY KEY (`credit_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `credit_cards` */

insert  into `credit_cards`(`credit_id`,`cardnumber`,`expirydate`,`secret_code`) values (1,2147483647,'2016-02-29',123),(2,2147483647,'2016-07-30',234),(3,2147483647,'2016-10-31',345);

/*Table structure for table `foods` */

DROP TABLE IF EXISTS `foods`;

CREATE TABLE `foods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `food_title` varchar(100) NOT NULL,
  `food_coupon_price` varchar(100) NOT NULL,
  `restaurant_id` varchar(45) NOT NULL,
  `food_description` text NOT NULL,
  `food_type` varchar(100) NOT NULL,
  `foodimage_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*Data for the table `foods` */

insert  into `foods`(`id`,`food_title`,`food_coupon_price`,`restaurant_id`,`food_description`,`food_type`,`foodimage_name`) values (1,'gyu-don','400','1','','domburi','domburi_gyu-don_400yen'),(2,'gyu-don','500','2','','domburi','domburi_gyu-don_500yen'),(3,'katsu-don','900','1','','domburi','domburi_katsu-don_900yen'),(4,'maji-don','1000','2','','domburi','domburi_maji-don_1000yen'),(5,'maji-don','2500','3','','domburi','domburi_maji-don_2500yen'),(6,'natto-don','400','3','','domburi','domburi_natto-don_400yen'),(7,'jaja-ramen','900','2','','ramen','ramen_jaja-men_900yen'),(8,'kakuni-ramen','1000','3','','ramen','ramen_kakuni-ramen_1000yen'),(9,'niigata-ramen','800','4','','ramen','ramen_niigata-ramen_800yen'),(10,'shoyu-ramen','800','2','','ramen','ramen_shoyu-ramen_800yen'),(11,'spicy-ramen','900','4','','ramen','ramen_spicy-ramen_900yen'),(12,'tonkotsu-ramen','800','4','','ramen','ramen_tonkotsu-ramen_800yen'),(13,'california-roll','1000','5','','sushi','sushi_carlifonia-roll_1000yen'),(14,'nigiri-assort','500','4','','sushi','sushi_nigiri-assort_500yen'),(15,'nigiri-assort','1000','3','','sushi','sushi_nigiri-assort_1000yen'),(16,'sashimi','2000','4','','sushi','sushi_sashimi_2000yen'),(17,'sashimi','2500','1','','sushi','sushi_sashimi_2500yen'),(18,'temari-sushi','1200','1','','sushi','sushi_temari-sushi_1200yen');

/*Table structure for table `menu_det` */

DROP TABLE IF EXISTS `menu_det`;

CREATE TABLE `menu_det` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_title` varchar(100) NOT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `menu_det` */

insert  into `menu_det`(`menu_id`,`menu_title`) values (1,'Breakfast'),(2,'Lunch'),(3,'Dinner'),(4,'Lunch & Dinner');

/*Table structure for table `redemption_codes` */

DROP TABLE IF EXISTS `redemption_codes`;

CREATE TABLE `redemption_codes` (
  `code_id` int(11) NOT NULL AUTO_INCREMENT,
  `redemption_code` varchar(100) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `restaurant_id` varchar(45) DEFAULT NULL,
  `coupon_purchase_id` varchar(45) DEFAULT NULL,
  `expiry_date` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`code_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

/*Data for the table `redemption_codes` */

insert  into `redemption_codes`(`code_id`,`redemption_code`,`status`,`restaurant_id`,`coupon_purchase_id`,`expiry_date`) values (1,'309949A1XA-5J0M-ADZ0','0','5',NULL,NULL),(2,'309950A1XA-5J0M-ADZ','0','5',NULL,NULL),(3,'309951A1XA-5J0M-ADZ','0','5',NULL,NULL),(4,'309952A1XA-5J0M-ADZ','0','5',NULL,NULL),(5,'309953A1XA-5J0M-ADZ','0','1',NULL,NULL),(6,'309954A1XA-5J0M-ADZ','0','1',NULL,NULL),(7,'309955A1XA-5J0M-ADZ','0','1',NULL,NULL),(8,'309956A1XA-5J0M-ADZ','0','1',NULL,NULL),(9,'309957A1XA-5J0M-ADZ','0','2',NULL,NULL),(10,'309958A1XA-5J0M-ADZ','0','2',NULL,NULL),(11,'309959A1XA-5J0M-ADZ','0','2',NULL,NULL),(12,'309960A1XA-5J0M-ADZ','0','2',NULL,NULL),(13,'309961A1XA-5J0M-ADZ','0','3','0','2016-02-15'),(14,'309962A1XA-5J0M-ADZ','0','3','0','2016-02-15'),(15,'309963A1XA-5J0M-ADZ','0','3','0','2016-02-15'),(16,'309964A1XA-5J0M-ADZ','1','3','1','2016-02-15'),(17,'309965A1XA-5J0M-ADZ','0','4',NULL,NULL),(18,'309966A1XA-5J0M-ADZ','0','4',NULL,NULL),(19,'309967A1XA-5J0M-ADZ','0','4',NULL,NULL),(20,'309968A1XA-5J0M-ADZ','0','4',NULL,NULL);

/*Table structure for table `restaurant` */

DROP TABLE IF EXISTS `restaurant`;

CREATE TABLE `restaurant` (
  `rest_id` int(11) NOT NULL AUTO_INCREMENT,
  `rest_name` varchar(100) NOT NULL,
  `Contact_details` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `rest_operating_hrs` varchar(100) NOT NULL,
  `menu_description` text NOT NULL,
  `menu_offered` varchar(100) DEFAULT NULL,
  `capacity` varchar(100) DEFAULT NULL,
  `rest_long` varchar(100) DEFAULT NULL,
  `rest_lat` varchar(100) DEFAULT NULL,
  `rest_website` varchar(100) DEFAULT NULL,
  `rest_image1` varchar(100) DEFAULT NULL,
  `rest_image2` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`rest_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `restaurant` */

insert  into `restaurant`(`rest_id`,`rest_name`,`Contact_details`,`location`,`rest_operating_hrs`,`menu_description`,`menu_offered`,`capacity`,`rest_long`,`rest_lat`,`rest_website`,`rest_image1`,`rest_image2`) values (1,'Baffaro','025-779-4788','1111-12 Myogasawa Minamiuonuma Niigata','Lunch 11:30-14:00 and Dinner 17:00 21:00 Open on sundays','Yakiniku (BBQ Beef), Horumon (BBQ Offel), table d\'hôte','4','50','138.9494209','37.166743','http://www.buffalo.bz/','buffalo_appearance.jpg','buffalo_interior.jpg'),(2,'Taberunagottsu','0120-75-3938','564-1 Izumi Minamiuonuma Niigata','Lunch 11:00-15:00 L.O.14:30 and Dinner17:00-22:00 L.O.21:30 Lunch Open ','Italian, Western Food, Pizza','4','60','138.910245','37.104175','http://www.izumivillage.jp/restaurant','taberunagottsu_appearance.jpg','taberunagottsu_interior.jpg'),(3,'Pittsuriamakitoishi','050-5589-2437-For reservation only and 025-782-5049 -For inquiry ','372-2 Naka Minamiuonuma Niigata','Lunch 11:00-15:00 and Dinner 17:00-22:00 L.O.21:30','Pizza, Italian, Pasta','4','40','138.835789','37.024593','http://makitoishi.com/','pittsuriamakitoishi_appearance.jpg','pittsuriamakitoishi_interior.jpg'),(4,'Budounohana ','025-777-5888','5531-1 Urasa Minamiuonuma Niigata','Lunch 11:00-15:00 and Dinner 17:00-22:00','Continental Cuisine, Pasta, Pizza','4','80','138.91271','37.160624','http://www.echigowinery.com/hpgen/HPB/entries/2.html','budou_appearance.jpg','budou_interior.jpg'),(5,'Sobayanagamori','025-775-3887','415-23 Nagamori Minamiuonuma Niigata','Lunch Mon–Fri 11:00–3:00','Soba, Tempura','2','40','138.862622','37.1074777','http://www.sobaya-nagamori.jp/','sobanagamori_appearance.jpg','sobanagamori_interior.jpg');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
