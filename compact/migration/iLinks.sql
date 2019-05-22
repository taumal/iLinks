-- MySQL dump 10.14  Distrib 5.5.54-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: localhost
-- ------------------------------------------------------
-- Server version	5.5.54-MariaDB-1ubuntu0.14.04.1

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
-- Table structure for table `links`
--

DROP TABLE IF EXISTS `links`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `links` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `topics_name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `visited_at` timestamp NULL DEFAULT NULL COMMENT 'CURRENT_TIMESTAMP',
  `tags` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `add_to_fav` int(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `FK36ILUS16335B86` (`created_by`),
  CONSTRAINT `FK36ILUS16335B86` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `links`
--

LOCK TABLES `links` WRITE;
/*!40000 ALTER TABLE `links` DISABLE KEYS */;
INSERT INTO `links` VALUES (1,'Comparison of email clients','https://en.wikipedia.org/wiki/Comparison_of_email_clients',2,NULL,NULL,1,0),(2,'A simple text email','https://commons.apache.org/proper/commons-email/userguide.html',2,'2017-09-18 12:00:00',NULL,1,0),(3,'PHP Create MySQL Tables','https://www.w3schools.com/php/php_mysql_create_table.asp',1,'2017-09-19 12:00:00',NULL,1,0),(4,'Admin dashboard template for Bootstrap','https://github.com/secondtruth/startmin',2,'2017-09-19 12:00:00',NULL,1,0),(5,'Zimbra git hub repository','https://github.com/Zimbra',1,'2017-09-19 12:00:00',NULL,1,0),(6,'Building Zimbra using Gitv','https://wiki.zimbra.com/wiki/Building_Zimbra_using_Git',1,'2017-09-19 12:00:00',NULL,1,0),(7,'Zimbra Documentation','https://www.zimbra.com/documentation/',1,'2017-09-19 12:00:00',NULL,1,0),(8,'Zimbra Downloads','https://www.zimbra.com/downloads/',1,'2017-09-19 12:00:00',NULL,1,0),(9,'Setting Up Zimbra Collaboration Suite (ZCS) on RHEL/CentOS 7/6','https://www.tecmint.com/install-zimbra-collaboration-suite-on-centos-rhel/',1,'2017-09-19 12:00:00',NULL,1,0),(10,'How to set up Zimbra mail server on CentOS','http://xmodulo.com/zimbra-mail-server-centos.html',1,'2017-09-19 12:00:00',NULL,1,0),(11,'How to Update Teamviewer on Ubuntu','http://www.kvcodes.com/2017/01/update-teamviewer-ubuntu/',1,'2017-09-19 12:00:00',NULL,1,0),(12,'The Perfect Server – CentOS 7 (Apache2, Dovecot, ISPConfig 3)','https://www.howtoforge.com/perfect-server-centos-7-apache2-mysql-php-pureftpd-postfix-dovecot-and-ispconfig3',1,'2017-09-19 12:00:00',NULL,1,0),(13,'Download free vector logos and icons!','https://www.brandeps.com/',1,'2017-09-19 12:00:00',NULL,1,0),(14,'Admin dashboard template for Bootstrap','https://github.com/secondtruth/startmin',1,'2017-09-19 12:00:00',NULL,1,0),(15,'crudx nahid github repository','https://github.com/nahid/crudx',1,'2017-09-19 12:00:00',NULL,1,0),(16,'Comparison of email clients','https://en.wikipedia.org/wiki/Comparison_of_email_clients',1,'2017-09-19 12:00:00',NULL,1,1),(17,'Startmin Admin Dashboard Demo','http://secondtruth.github.io/startmin/pages/index.html',1,'2017-09-19 12:00:00',NULL,1,0),(18,'16 best open source mail server projects','http://www.findbestopensource.com/tagged/mail-server',1,'2017-09-19 12:00:00',NULL,1,0),(19,'Mail-in-a-Box','https://mailinabox.email/',1,'2017-09-19 12:00:00',NULL,1,0),(20,'3 Awesome Complete Open Source Mail Servers Solutions For Linux and UNIX servers','https://www.cyberciti.biz/open-source/awesome-complete-open-source-mail-servers-solutions-for-linux-unix/',1,'2017-09-19 12:00:00',NULL,1,0),(21,'top ten open source email server','#',1,'2017-09-19 12:00:00',NULL,1,0),(22,'how to setup zimbra mail server on centos','#',1,'2017-09-19 12:00:00',NULL,1,0),(23,'zimbra open source download','#',1,'2017-09-19 12:00:00',NULL,1,0),(24,'Two open source secure email services','https://opensource.com/article/17/3/secure-email',1,'2017-09-19 12:00:00',NULL,1,0),(25,'open source email service','#',1,'2017-09-19 12:00:00',NULL,1,0),(26,'Commons Email','https://commons.apache.org/proper/commons-email/',1,'2017-09-19 12:00:00',NULL,1,0),(27,'A simple text email','https://commons.apache.org/proper/commons-email/userguide.html',1,'2017-09-19 12:00:00',NULL,1,1),(28,'Convert your images to base64','https://www.base64-image.de/',1,'2017-09-22 18:00:00',NULL,1,0),(29,'Filtering out spam with SpamAssassin ','https://workaround.org/ispmail/jessie/spamassassin',3,'2017-09-22 18:00:00',NULL,1,0),(30,'5 Ways to Send Email From Linux Command Line','https://tecadmin.net/ways-to-send-email-from-linux-command-line/#',3,'2017-09-22 18:00:00',NULL,1,0),(31,'Handling Spam with Postfix, SpamAssassin, Dovecot and Sieve.','http://moi.vonos.net/linux/email-sieve-spam/',3,'2017-09-22 18:00:00',NULL,1,0),(32,'Dovecot Sieve configuration','https://www.digitalocean.com/community/questions/dovecot-sieve-configuration',3,'2017-09-22 18:00:00',NULL,1,0),(33,'Simple Mailserver With Postfix, Dovecot, And Sieve On CentOS 7','https://www.vultr.com/docs/simple-mailserver-postfix-dovecot-sieve-centos-7',3,'2017-09-22 18:00:00',NULL,1,0),(34,'How to install and setup a powerful mail server on Linux','http://ary.kleinerman.org/posts/how-to-install-and-setup-a-powerful-mail-server-on-linux/',3,'2017-09-22 18:00:00',NULL,1,0),(35,'Mail filtering with Dovecot','https://blog.za3k.com/mail-filtering-with-dovecot/',3,'2017-09-22 18:00:00',NULL,1,0),(36,'Dovecot Logging','https://wiki1.dovecot.org/Logging',3,'2017-09-22 18:00:00',NULL,1,0),(37,' How to set-up server-side email filtering with Dovecot Sieve and Roundcube on a CentOS 6 VPS','https://www.rosehosting.com/blog/how-to-set-up-server-side-email-filtering-with-dovecot-sieve-and-roundcube-on-a-centos-6-vps/',3,'2017-09-22 18:00:00',NULL,1,0),(38,'Email with Postfix, Dovecot and MariaDB on CentOS 7','https://www.linode.com/docs/email/postfix/email-with-postfix-dovecot-and-mariadb-on-centos-7',3,'2017-09-22 18:00:00',NULL,1,0),(39,'How to install sieve for dovecot on CentOS 6?','http://www.wedebugyou.com/2014/02/how-to-install-sieve-for-dovecot-on-centos-6/',3,'2017-09-22 18:00:00',NULL,1,0),(40,'How to Install and configure mail-server (Postfix, Dovecot, MariaDB/MySQL) in CentOS/RHEL 7','http://blog.acmenet.ru/en/2014/11/25/mail-centos-en/',3,'2017-09-22 18:00:00',NULL,1,0),(41,'Pigeonhole Sieve Configuration','https://wiki2.dovecot.org/Pigeonhole/Sieve/Configuration',3,'2017-09-22 18:00:00',NULL,1,0),(42,'Pigeonhole Installation','https://wiki2.dovecot.org/Pigeonhole/Installation',3,'2017-09-22 18:00:00',NULL,1,0),(43,'How to compile dovecot with sieve and metadata plugin to Centos 6','http://webplay.pro/linux/centos/how-to-compile-dovecot-with-sieve-and-metadata-plugin-to-centos-6.html',3,'2017-09-22 18:00:00',NULL,1,0),(44,'Configure mail server on Centos 7 with Postfix, Dovecot, Apache, postfixadmin and Roundcube','http://blog.ceae.info/configure-mail-server-on-centos-7-with-postfix-dovecot-apache-postfixadmin-and-roundcube/',3,'2017-09-22 18:00:00',NULL,1,0),(45,'Sieve Mail Filtering Setup','https://easyengine.io/tutorials/mail/server/sieve-filtering/',3,'2017-09-22 18:00:00',NULL,1,0),(46,'Spam Tests','https://easyengine.io/tutorials/mail/server/testing/spam/',3,'2017-09-22 18:00:00',NULL,1,0),(47,'Pigeonhole Sieve examples','https://wiki2.dovecot.org/Pigeonhole/Sieve/Examples',3,'2017-09-22 18:00:00',NULL,1,0),(48,'How To Install & Set Up Dovecot Mail Server With Sieve And Virtual Users','https://www.howtoforge.com/dovecot_mail_server_sieve_virtual_users',3,'2017-09-22 18:00:00',NULL,1,0),(49,'How to set filters in roundcube with Sieve','http://www.smartdomotik.com/2015/09/04/how-to-set-filters-in-roundcube-with-sieve/',3,'2017-09-22 18:00:00',NULL,1,0),(50,' Sieve server-side mail filtering with Postfix, Dovecot ','http://koansys.com/tech/sieve-server-side-mail-filtering-with-postfix-dovecot',3,'2017-09-22 18:00:00',NULL,1,0),(51,'Server Side Mail Filtering using Sieve','https://ceng.metu.edu.tr/server-side-mail-filtering-using-sieve',3,'2017-09-22 18:00:00',NULL,1,0),(52,'Tutorial: Sieve, Managesieve filters with Dovecot and Roundcube','https://forum.vestacp.com/viewtopic.php?t=11363',3,'2017-09-22 18:00:00',NULL,1,0),(53,'Sieve not filtering email','https://stackoverflow.com/questions/30175366/sieve-not-filtering-email',3,'2017-09-22 18:00:00',NULL,1,0),(54,'Dovecot','https://wiki.archlinux.org/index.php/Dovecot',3,'2017-09-22 18:00:00',NULL,1,0),(55,'Pigeonhole Sieve Troubleshooting','https://wiki.dovecot.org/Pigeonhole/Sieve/Troubleshooting',3,'2017-09-22 18:00:00',NULL,1,0),(56,'Dovecot Sieve filters not working','https://stackoverflow.com/questions/39750890/dovecot-sieve-filters-not-working',3,'2017-09-22 18:00:00',NULL,1,0),(57,'Postfix and Dovecot Sieve spam filter does not work','https://serverfault.com/questions/610571/postfix-and-dovecot-sieve-spam-filter-does-not-work',3,'2017-09-22 18:00:00',NULL,1,0),(58,'Dovecot LDA with Postfix','https://wiki.dovecot.org/LDA/Postfix',3,'2017-09-22 18:00:00',NULL,1,0),(59,'SIEVE-FILTER','https://pigeonhole.dovecot.org/doc/man1/sieve-filter.1.html',3,'2017-09-22 18:00:00',NULL,1,0),(60,'invoke filtering manually in dovecot+sieve','https://serverfault.com/questions/662844/invoke-filtering-manually-in-dovecotsieve',3,'2017-09-22 18:00:00',NULL,1,0),(61,'Global Dovecot Sieve Rule','https://talk.plesk.com/threads/global-dovecot-sieve-rule.341552/',3,'2017-09-22 18:00:00',NULL,1,0),(62,'Dovecot+Sieve : move spam to spam folder - doesn\'t work','https://forums.opensuse.org/showthread.php/523330-Dovecot-Sieve-move-spam-to-spam-folder-doesn-t-work',3,'2017-09-22 18:00:00',NULL,1,0),(63,'Configure Sieve filters','https://github.com/tomav/docker-mailserver/wiki/Configure-Sieve-filters',3,'2017-09-22 18:00:00',NULL,1,0),(64,'How can I filter my email with Sieve server-side filters? ','https://support.tigertech.net/sieve',3,'2017-09-22 18:00:00',NULL,1,0),(65,'How can I purposely send a message that will be marked as spam in Gmail?','https://webapps.stackexchange.com/questions/5767/how-can-i-purposely-send-a-message-that-will-be-marked-as-spam-in-gmail',3,'2017-09-22 18:00:00',NULL,1,0),(66,'Test spam mail','https://spamassassin.apache.org/gtube/gtube.txt',3,'2017-09-22 18:00:00',NULL,1,0),(67,'EICAR Test for Reability of Anti-Virus E-Mail Protection','http://www.aleph-tec.com/eicar/',3,'2017-09-22 18:00:00',NULL,1,0),(68,'How to simulate spam mail?','http://o365info.com/simulate-spam-mail/',3,'2017-09-22 18:00:00',NULL,1,0),(69,'How to send a test spam message?','https://ficility.net/2013/04/19/how-to-send-a-test-spam-message/\r\n',3,'2017-09-22 18:00:00',NULL,1,0),(70,'Free Email Security Check','http://www.emailsecuritycheck.net/index.html',3,'2017-09-22 18:00:00',NULL,1,0),(71,'Any way I can send Spam to my mail perimeter in a controlled way for testing?','https://serverfault.com/questions/381308/any-way-i-can-send-spam-to-my-mail-perimeter-in-a-controlled-way-for-testing',3,'2017-09-22 18:00:00',NULL,1,0),(72,'The GTUBE','http://spamassassin.apache.org/gtube/',3,'2017-09-22 18:00:00',NULL,1,0),(73,'Sending yourself \"spam\" will not work','https://wiki.apache.org/spamassassin/TestingInstallation',3,'2017-09-22 18:00:00',NULL,1,0),(74,'Postfix, Dovecot and roundcube – Part 3','http://techlinux.net/2014/11/postfix-dovecot-roundcube-part-3/',3,'2017-09-22 18:00:00',NULL,1,0),(75,'Spamassassin, Dovecot and Postfix: Move spam to folder','https://serverfault.com/questions/764641/spamassassin-dovecot-and-postfix-move-spam-to-folder/778462',3,'2017-09-22 18:00:00',NULL,1,0),(76,'Move junk mail to a folder instead of deleting','https://www.howtoforge.com/community/threads/move-junk-mail-to-a-folder-instead-of-deleting.15704/',3,'2017-09-22 18:00:00',NULL,1,0),(77,'Problem to use sieve and dovcot to move spam mail to Junk folder','https://askubuntu.com/questions/841798/problem-to-use-sieve-and-dovcot-to-move-spam-mail-to-junk-folder',3,'2017-09-22 18:00:00',NULL,1,0),(78,'How to move spam to spam folder?','https://stackoverflow.com/questions/24256008/how-to-move-spam-to-spam-folder',3,'2017-09-22 18:00:00',NULL,1,0),(79,'Small Bootstrap Tagging Plugin With Autocomplete Support - Tagsy','http://www.jqueryscript.net/form/Small-Bootstrap-Tagging-Plugin-Autocomplete-Support-Tagsy.html',1,'2017-09-22 18:00:00',NULL,1,0),(80,'ProtonMail Review - Free Secure Email Service','https://www.lifewire.com/protonmail-review-4107075',4,'2017-09-23 18:00:00','mail',1,0),(81,'Write english','https://writeandimprove.com',4,'2017-09-23 18:00:00','java',1,0),(82,'Write english','http://www.prothom-alo.com/education/article/1330566/%E0%A6%B8%E0%A6%BE%E0%A6%AC%E0%A6%B2%E0%A7%80%E0%A6%B2-%E0%A6%87%E0%A6%82%E0%A6%B0%E0%A7%87%E0%A6%9C%E0%A6%BF-%E0%A6%B2%E0%A6%BF%E0%A6%96%E0%A6%A4%E0%A7%87-%E0%A6%9A%E0%A6%BE%E0%A6%A8',4,'2017-09-23 18:00:00','English',1,0),(83,'Autocomplete + Custom tag input ','https://codepen.io/curthusting/pen/FLhpE',1,'2017-09-23 18:00:00','html,css,javascript',1,0),(84,'Bootstrap Tags Input','https://bootstrap-tagsinput.github.io/bootstrap-tagsinput/examples/',1,'2017-09-23 18:00:00','html,css,javascript',1,0),(85,'Tags using Bootstrap Tags Input Plugin with Autocomplete','http://phppot.com/jquery/tags-using-bootstrap-tags-input-plugin-with-autocomplete/',1,'2017-09-23 18:00:00','html,css,javascript,php',1,0),(86,'Simple Link Directory','https://wordpress.org/plugins/simple-link-directory/',1,'2017-09-24 18:00:00','wordpress',1,0),(87,'WP Links Page','https://wordpress.org/plugins/wp-links-page',1,'2017-09-24 18:00:00','wordpress',1,0),(88,'নতুনদের জন্য Web Design','http://pondit.com/web-design-98.html',1,'2017-09-24 18:00:00','html,css',1,0),(89,'001 test','#',1,'2017-09-26 18:00:00','AL,WY',1,1),(90,'002 test','#',1,'2017-09-26 18:00:00','js,amber,json',1,1),(91,'003 test','#',1,'2017-09-26 18:00:00','js,java,taumal,sohel',1,1),(92,'004 test','#',1,'2017-09-26 18:00:00','java,dovecot,mail,clamav',1,1),(93,'005 test','#',1,'2017-09-26 18:00:00','php,js,java,anam',1,1),(94,'006 test','#',1,'2017-09-26 18:00:00','php,anam,sohel',1,1),(95,'007 test','#',1,'2017-09-26 18:00:00','java',1,0),(96,'008 test','#',1,'2017-09-26 18:00:00','java,php',1,0),(97,'009 test','#',1,'2017-09-27 18:00:00','java,php,kamal',1,0),(98,'How to check whether an array is empty using PHP?','https://stackoverflow.com/questions/2216052/how-to-check-whether-an-array-is-empty-using-php',1,'2017-10-04 18:00:00','php',1,0),(99,'How to check whether an array is empty using PHP?','https://stackoverflow.com/questions/2216052/how-to-check-whether-an-array-is-empty-using-php',4,'2017-10-04 18:00:00','php',1,0),(100,'How to remove some part of the URL in the address bar of the browser','https://stackoverflow.com/questions/21024045/how-to-remove-some-part-of-the-url-in-the-address-bar-of-the-browser',4,'2017-10-04 18:00:00','javascript',1,0),(101,'How to remove some part of the URL in the address bar of the browser','https://stackoverflow.com/questions/21024045/how-to-remove-some-part-of-the-url-in-the-address-bar-of-the-browsercc',4,'2017-10-04 18:00:00','test',1,0),(102,'001 test','https://writeandimprove.comfsdf',4,'2017-10-04 18:00:00','php,kamal',1,0),(103,'001 test','https://writeandimprove.com',1,'2017-10-04 18:00:00','php',1,1),(104,'changing the class name of a div in jquery','https://stackoverflow.com/questions/9517372/changing-the-class-name-of-a-div-in-jquery',1,'2017-10-06 18:00:00','javascript',1,0);
/*!40000 ALTER TABLE `links` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tag_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags`
--

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
INSERT INTO `tags` VALUES (1,'java'),(2,'php'),(3,'kamal'),(4,'javascript'),(5,'test');
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email_id` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `roles` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'CURRENT_TIMESTAMP',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'MR Taumal','taumal@qmail.com.bd','taumal','$2y$10$LTT6oO0UKKh.Ua3MF1Ua6.40JrAEFWMe4caBhlEZ4ufAKr4TD92rm',1,'admin','2017-09-20 10:36:20'),(2,'Abadul Islam','eban@qmail.com.bd','eban','$2y$10$kT9P/r0tfd2hglBKGQiHceupTWf8MfE7xjRH0PgnJE02jwXs7OJyK',1,'user','2017-09-20 10:39:00'),(3,'Sohel Ahmed','sohel@qmail.com.bd','sohel','$2y$10$UNozLeUHRjgajt32KxyUjOlHvIMKvRz4hMyIcFY293EBXQ9ksdaze',0,'user','2017-09-20 10:39:57'),(4,'Syeed Nasrul Islam','anam@qmail.com.bd','anom','$2y$10$1Q3Oy8Yj5tGTQNPA9qKSuOd2Joj4sHx9wODCJypHqupLvAuWrrrfC',1,'user','2017-10-02 04:12:47');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-10-09 19:57:05
