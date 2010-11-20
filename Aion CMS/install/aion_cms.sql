/*
Navicat MySQL Data Transfer

Source Server         : Aion Engine
Source Server Version : 50141
Source Host           : localhost:3306
Source Database       : aion_cms

Target Server Type    : MYSQL
Target Server Version : 50141
File Encoding         : 65001

Date: 2010-11-20 12:50:29
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `donate_log`
-- ----------------------------
DROP TABLE IF EXISTS `donate_log`;
CREATE TABLE `donate_log` (
  `entry` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(32) DEFAULT NULL,
  `txn_id` varchar(32) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `status` varchar(16) DEFAULT NULL,
  `amount` float unsigned DEFAULT NULL,
  `info` blob,
  PRIMARY KEY (`entry`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of donate_log
-- ----------------------------

-- ----------------------------
-- Table structure for `donate_rewards`
-- ----------------------------
DROP TABLE IF EXISTS `donate_rewards`;
CREATE TABLE `donate_rewards` (
  `entry` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) DEFAULT NULL,
  `realm` int(10) unsigned DEFAULT NULL,
  `description` text,
  `item` int(10) unsigned DEFAULT NULL,
  `quantity` tinyint(3) unsigned DEFAULT NULL,
  `kinah` int(10) unsigned DEFAULT NULL,
  `price` float unsigned DEFAULT NULL,
  PRIMARY KEY (`entry`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of donate_rewards
-- ----------------------------

-- ----------------------------
-- Table structure for `realms`
-- ----------------------------
DROP TABLE IF EXISTS `realms`;
CREATE TABLE `realms` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) DEFAULT NULL,
  `sqlhost` varchar(32) DEFAULT NULL,
  `sqluser` varchar(32) DEFAULT NULL,
  `sqlpass` varchar(32) DEFAULT NULL,
  `chardb` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of realms
-- ----------------------------
INSERT INTO `realms` VALUES ('1', 'Aion Server', '127.0.0.1', 'root', 'aion', 'aengine_gs');

-- ----------------------------
-- Table structure for `vote_links`
-- ----------------------------
DROP TABLE IF EXISTS `vote_links`;
CREATE TABLE `vote_links` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(32) DEFAULT NULL,
  `image` varchar(128) DEFAULT NULL,
  `url` varchar(128) DEFAULT NULL,
  `reward_points` int(11) DEFAULT NULL,
  `e` int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`e`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of vote_links
-- ----------------------------
INSERT INTO `vote_links` VALUES ('1', 'Xtremetop100', 'http://www.eternion-wow.com/images/votenew.jpg', 'http://www.in.gr', '8', '10');
INSERT INTO `vote_links` VALUES ('2', 'Gator.Ru Top100', 'http://pics.livejournal.com/samaritanyn/pic/0007cr07.gif', 'http://www.in.gr', '3', '11');
INSERT INTO `vote_links` VALUES ('3', 'Rpg Paradize', 'http://aion.atomixro.com/images/rpgparadise.jpg', 'http://www.in.gr', '3', '12');
INSERT INTO `vote_links` VALUES ('4', 'TopofGames', 'http://aion.atomixro.com/images/topofgames.jpg', 'http://www.in.gr', '2', '13');
INSERT INTO `vote_links` VALUES ('5', 'Aion Top200', 'http://aion.atomixro.com/images/top200.gif', 'http://www.in.gr', '2', '14');
INSERT INTO `vote_links` VALUES ('6', 'Gtop100', 'http://aion.atomixro.com/images/gtop100.jpg', 'http://www.in.gr', '2', '15');
INSERT INTO `vote_links` VALUES ('7', 'Aion TopList', 'http://aion.atomixro.com/images/aiontoplist.png', 'http://www.in.gr', '3', '16');
INSERT INTO `vote_links` VALUES ('8', 'Gamesites 99', 'http://aion.atomixro.com/images/gamsites99.gif', 'http://www.in.gr', '2', '17');
INSERT INTO `vote_links` VALUES ('9', 'Vote on Tgfs', 'http://aion.atomixro.com/images/voteontfgs.jpg', 'http://www.in.gr', '1', '18');

-- ----------------------------
-- Table structure for `vote_rewards`
-- ----------------------------
DROP TABLE IF EXISTS `vote_rewards`;
CREATE TABLE `vote_rewards` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `realm` tinyint(3) unsigned DEFAULT NULL,
  `name` varchar(32) DEFAULT NULL,
  `description` text,
  `itemid` bigint(20) unsigned NOT NULL,
  `points` int(10) unsigned DEFAULT NULL,
  `icon` text,
  `class` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of vote_rewards
-- ----------------------------
INSERT INTO `vote_rewards` VALUES ('1', '1', '---- Kinah ----', '', '182400001', '0', 'http://www.aiondatabase.com/res/icons/40/icon_item_qina01.png', '2');
INSERT INTO `vote_rewards` VALUES ('2', '1', 'Kinah ', '100000', '182400001', '10', 'http://www.aiondatabase.com/res/', '2');
INSERT INTO `vote_rewards` VALUES ('3', '1', 'Kinah', '500000', '182400001', '45', 'http://www.aiondatabase.com/res/', '2');
INSERT INTO `vote_rewards` VALUES ('4', '1', 'Kinah', '1000000', '182400001', '85', 'http://www.aiondatabase.com/res/', '2');
INSERT INTO `vote_rewards` VALUES ('5', '1', 'Kinah', '5000000', '182400001', '255', 'http://www.aiondatabase.com/res/', '2');
INSERT INTO `vote_rewards` VALUES ('6', '1', 'Kinah', '10000000', '182400001', '255', 'http://www.aiondatabase.com/res/', '2');
INSERT INTO `vote_rewards` VALUES ('7', '1', ' --- Manastones ---', '', '167000516', '0', 'http://www.aiondatabase.com/res/icons/40/icon_item_magicstone_04.png', '2');
INSERT INTO `vote_rewards` VALUES ('8', '1', 'Manastone: Accuracy +25', '20', '167000516', '50', 'http://www.aiondatabase.com/res/icons/40/icon_item_magicstone_04.png', '3');
INSERT INTO `vote_rewards` VALUES ('9', '1', 'Manastone: Attack +5', '20', '167000518', '50', 'http://www.aiondatabase.com/res/icons/40/icon_item_magicstone_04.png', '3');
INSERT INTO `vote_rewards` VALUES ('10', '1', 'Manastone: Block +25', '20', '167000521', '50', 'http://www.aiondatabase.com/res/icons/40/icon_item_magicstone_04.png', '3');
INSERT INTO `vote_rewards` VALUES ('11', '1', 'Manastone: Crit Strike +15', '20', '167000522', '50', 'http://www.aiondatabase.com/res/icons/40/icon_item_magicstone_04.png', '3');
INSERT INTO `vote_rewards` VALUES ('12', '1', 'Manastone: Evasion +15', '20', '167000517', '50', 'http://www.aiondatabase.com/res/icons/40/icon_item_magicstone_04.png', '3');
INSERT INTO `vote_rewards` VALUES ('13', '1', 'Manastone: HP +85', '20', '167000514', '50', 'http://www.aiondatabase.com/res/icons/40/icon_item_magicstone_04.png', '3');
INSERT INTO `vote_rewards` VALUES ('14', '1', 'Manastone: MP +85', '20', '167000515', '50', 'http://www.aiondatabase.com/res/icons/40/icon_item_magicstone_04.png', '3');
INSERT INTO `vote_rewards` VALUES ('15', '1', 'Manastone: Magic Boost +25', '20', '167000519', '50', 'http://www.aiondatabase.com/res/icons/40/icon_item_magicstone_04.png', '3');
INSERT INTO `vote_rewards` VALUES ('16', '1', 'Manastone: M. Accuracy +12', '20', '167000541', '50', 'http://www.aiondatabase.com/res/icons/40/icon_item_magicstone_04.png', '3');
INSERT INTO `vote_rewards` VALUES ('17', '1', 'Manastone: Resist Magic +12', '20', '167000542', '50', 'http://www.aiondatabase.com/res/icons/40/icon_item_magicstone_04.png', '3');
INSERT INTO `vote_rewards` VALUES ('18', '1', 'Manastone: Parry +25', '20', '167000520', '50', 'http://www.aiondatabase.com/res/icons/40/icon_item_magicstone_04.png', '3');
INSERT INTO `vote_rewards` VALUES ('19', '1', 'Manastone: Flight Time +6', '10', '167000523', '50', 'http://www.aiondatabase.com/res/icons/40/icon_item_magicstone_04.png', '3');
INSERT INTO `vote_rewards` VALUES ('20', '1', 'L55 Enchantment Stone x15', '20', '166000055', '60', 'http://www.aiondatabase.com/res/icons/40/icon_item_enchantstone03.png', '2');
INSERT INTO `vote_rewards` VALUES ('21', '1', 'L60 Enchantment Stone x15', '15', '166000060', '70', 'http://www.aiondatabase.com/res/icons/40/icon_item_enchantstone03.png', '2');
INSERT INTO `vote_rewards` VALUES ('22', '1', 'L65 Enchantment Stone x15', '15', '166000065', '80', 'http://www.aiondatabase.com/res/icons/40/icon_item_enchantstone04.png', '2');
INSERT INTO `vote_rewards` VALUES ('23', '1', 'L70 Enchantment Stone x15', '15', '166000070', '90', 'http://www.aiondatabase.com/res/icons/40/icon_item_enchantstone04.png', '2');
INSERT INTO `vote_rewards` VALUES ('24', '1', 'L101 Enchantment Stone x10', '10', '166000101', '100', 'http://www.aiondatabase.com/res/icons/40/icon_item_enchantstone06.png', '2');
INSERT INTO `vote_rewards` VALUES ('25', '1', 'L190 Enchantment Stone x10', '10', '166000190', '120', 'http://www.aiondatabase.com/res/icons/40/icon_item_enchantstone07.png', '2');

-- ----------------------------
-- Table structure for `votes`
-- ----------------------------
DROP TABLE IF EXISTS `votes`;
CREATE TABLE `votes` (
  `ip` varchar(16) DEFAULT NULL,
  `account` varchar(16) DEFAULT NULL,
  `module` tinyint(3) unsigned DEFAULT NULL,
  `time` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of votes
-- ----------------------------
INSERT INTO `votes` VALUES (null, null, null, null);
