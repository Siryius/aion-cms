

SET FOREIGN_KEY_CHECKS=0;
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
INSERT INTO `realms` VALUES ('1', 'Test Server', '127.0.0.1', 'root', 'aion', 'players');

-- ----------------------------
-- Table structure for `votemodcat`
-- ----------------------------
DROP TABLE IF EXISTS `votemodcat`;
CREATE TABLE `votemodcat` (
  `id` int(11) NOT NULL,
  `category` text,
  `icon` text,
  `e` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`e`)
) ENGINE=MyISAM AUTO_INCREMENT=77 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of votemodcat
-- ----------------------------
INSERT INTO `votemodcat` VALUES ('1', 'Kinah', null, '68');
INSERT INTO `votemodcat` VALUES ('2', 'Consumables', null, '69');
INSERT INTO `votemodcat` VALUES ('3', 'Stones & Enchants', null, '70');
INSERT INTO `votemodcat` VALUES ('4', 'Aether & Gatherables', null, '71');
INSERT INTO `votemodcat` VALUES ('5', 'Dyes', null, '72');
INSERT INTO `votemodcat` VALUES ('6', 'Weapons', null, '73');
INSERT INTO `votemodcat` VALUES ('7', 'Armors', null, '74');
INSERT INTO `votemodcat` VALUES ('8', 'Recepits', null, '75');
INSERT INTO `votemodcat` VALUES ('9', 'Stigma', null, '76');

-- ----------------------------
-- Table structure for `votemodules`
-- ----------------------------
DROP TABLE IF EXISTS `votemodules`;
CREATE TABLE `votemodules` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(32) DEFAULT NULL,
  `image` varchar(128) DEFAULT NULL,
  `url` varchar(128) DEFAULT NULL,
  `reward_points` int(11) DEFAULT NULL,
  `e` int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`e`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of votemodules
-- ----------------------------
INSERT INTO `votemodules` VALUES ('1', 'Xtremetop100', 'http://www.eternion-wow.com/images/votenew.jpg', 'www.in.gr', '8', '10');
INSERT INTO `votemodules` VALUES ('2', 'Gator.Ru Top100', 'http://pics.livejournal.com/samaritanyn/pic/0007cr07.gif', null, '3', '11');
INSERT INTO `votemodules` VALUES ('3', 'Rpg Paradize', 'http://aion.atomixro.com/images/rpgparadise.jpg', null, '3', '12');
INSERT INTO `votemodules` VALUES ('4', 'TopofGames', 'http://aion.atomixro.com/images/topofgames.jpg', null, '2', '13');
INSERT INTO `votemodules` VALUES ('5', 'Aion Top200', 'http://aion.atomixro.com/images/top200.gif', null, '2', '14');
INSERT INTO `votemodules` VALUES ('6', 'Gtop100', 'http://aion.atomixro.com/images/gtop100.jpg', 'http://www.in.gr', '2', '15');
INSERT INTO `votemodules` VALUES ('7', 'Aion TopList', 'http://aion.atomixro.com/images/aiontoplist.png', null, '3', '16');
INSERT INTO `votemodules` VALUES ('8', 'Gamesites 99', 'http://aion.atomixro.com/images/gamsites99.gif', null, '2', '17');
INSERT INTO `votemodules` VALUES ('9', 'Vote on Tgfs', 'http://aion.atomixro.com/images/voteontfgs.jpg', null, '1', '18');

-- ----------------------------
-- Table structure for `voterewards1`
-- ----------------------------
DROP TABLE IF EXISTS `voterewards1`;
CREATE TABLE `voterewards1` (
  `id` int(10) unsigned NOT NULL,
  `realm` tinyint(3) unsigned DEFAULT NULL,
  `name` varchar(32) DEFAULT NULL,
  `description` text,
  `itemid` bigint(20) unsigned NOT NULL,
  `points` int(10) unsigned DEFAULT NULL,
  `icon` text,
  `class` text,
  `e` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`e`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of voterewards1
-- ----------------------------
INSERT INTO `voterewards1` VALUES ('1', '1', 'Kinah ', '100000', '182400001', '10', 'http://www.aiondatabase.com/res/icons/40/icon_item_qina01.png', '2', '10');
INSERT INTO `voterewards1` VALUES ('2', '1', 'Kinah', '500000', '182400001', '45', 'http://www.aiondatabase.com/res/icons/40/icon_item_qina01.png', '2', '11');
INSERT INTO `voterewards1` VALUES ('3', '1', 'Kinah', '1000000', '182400001', '85', 'http://www.aiondatabase.com/res/icons/40/icon_item_qina01.png', '2', '12');
INSERT INTO `voterewards1` VALUES ('4', '1', 'Kinah', '5000000', '182400001', '425', 'http://www.aiondatabase.com/res/icons/40/icon_item_qina01.png', '2', '13');
INSERT INTO `voterewards1` VALUES ('5', '1', 'Kinah', '10000000', '182400001', '800', 'http://www.aiondatabase.com/res/icons/40/icon_item_qina01.png', '2', '14');

-- ----------------------------
-- Table structure for `voterewards2`
-- ----------------------------
DROP TABLE IF EXISTS `voterewards2`;
CREATE TABLE `voterewards2` (
  `id` int(10) unsigned NOT NULL,
  `realm` tinyint(3) unsigned DEFAULT NULL,
  `name` varchar(32) DEFAULT NULL,
  `description` text,
  `itemid` int(10) unsigned DEFAULT NULL,
  `points` tinyint(3) unsigned DEFAULT NULL,
  `category` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `icon` text,
  `class` text,
  `e` int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`e`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of voterewards2
-- ----------------------------
INSERT INTO `voterewards2` VALUES ('1', '1', 'Wind Serum', '100', '162000025', '10', null, 'http://www.aiondatabase.com/res/icons/40/icon_item_potion_cure04b.png', '3', '11');
INSERT INTO `voterewards2` VALUES ('2', '1', 'Greater Recovery Potion', '10', '162000044', '8', null, 'http://www.aiondatabase.com/res/icons/40/icon_item_dish25.png', '3', '12');
INSERT INTO `voterewards2` VALUES ('3', '1', 'Monitor Aether Dumpling', '10', '160002138', '5', null, 'http://www.aiondatabase.com/res/icons/40/icon_item_potion_hpmp02_4.png', '4', '13');
INSERT INTO `voterewards2` VALUES ('4', '1', 'Greater Divine Life Serum', '10', '162000034', '10', null, 'http://www.aiondatabase.com/res/icons/40/icon_item_potion_hp04_3.png', '3', '14');
INSERT INTO `voterewards2` VALUES ('5', '1', 'Greater Divine Mana Serum', '10', '162000037', '10', null, 'http://www.aiondatabase.com/res/icons/40/icon_item_potion_mp04_3.png', '3', '15');

-- ----------------------------
-- Table structure for `voterewards3`
-- ----------------------------
DROP TABLE IF EXISTS `voterewards3`;
CREATE TABLE `voterewards3` (
  `id` int(10) unsigned NOT NULL,
  `realm` tinyint(3) unsigned DEFAULT NULL,
  `name` varchar(32) DEFAULT NULL,
  `description` text,
  `itemid` int(10) unsigned DEFAULT NULL,
  `points` tinyint(3) unsigned DEFAULT NULL,
  `icon` text,
  `class` text,
  `e` int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`e`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of voterewards3
-- ----------------------------
INSERT INTO `voterewards3` VALUES ('1', '1', 'Manastone: Accuracy +25', '20', '167000516', '50', 'http://www.aiondatabase.com/res/icons/40/icon_item_magicstone_04.png', '3', '19');
INSERT INTO `voterewards3` VALUES ('2', '1', 'Manastone: Attack +5', '20', '167000518', '50', 'http://www.aiondatabase.com/res/icons/40/icon_item_magicstone_04.png', '3', '20');
INSERT INTO `voterewards3` VALUES ('3', '1', 'Manastone: Block +25', '20', '167000521', '50', 'http://www.aiondatabase.com/res/icons/40/icon_item_magicstone_04.png', '3', '21');
INSERT INTO `voterewards3` VALUES ('4', '1', 'Manastone: Crit Strike +15', '20', '167000522', '50', 'http://www.aiondatabase.com/res/icons/40/icon_item_magicstone_04.png', '3', '22');
INSERT INTO `voterewards3` VALUES ('5', '1', 'Manastone: Evasion +15', '20', '167000517', '50', 'http://www.aiondatabase.com/res/icons/40/icon_item_magicstone_04.png', '3', '23');
INSERT INTO `voterewards3` VALUES ('6', '1', 'Manastone: HP +85', '20', '167000514', '50', 'http://www.aiondatabase.com/res/icons/40/icon_item_magicstone_04.png', '3', '24');
INSERT INTO `voterewards3` VALUES ('7', '1', 'Manastone: MP +85', '20', '167000515', '50', 'http://www.aiondatabase.com/res/icons/40/icon_item_magicstone_04.png', '3', '25');
INSERT INTO `voterewards3` VALUES ('8', '1', 'Manastone: Magic Boost +25', '20', '167000519', '50', 'http://www.aiondatabase.com/res/icons/40/icon_item_magicstone_04.png', '3', '26');
INSERT INTO `voterewards3` VALUES ('9', '1', 'Manastone: M. Accuracy +12', '20', '167000541', '50', 'http://www.aiondatabase.com/res/icons/40/icon_item_magicstone_04.png', '3', '27');
INSERT INTO `voterewards3` VALUES ('10', '1', 'Manastone: Resist Magic +12', '20', '167000542', '50', 'http://www.aiondatabase.com/res/icons/40/icon_item_magicstone_04.png', '3', '28');
INSERT INTO `voterewards3` VALUES ('11', '1', 'Manastone: Parry +25', '20', '167000520', '50', 'http://www.aiondatabase.com/res/icons/40/icon_item_magicstone_04.png', '3', '29');
INSERT INTO `voterewards3` VALUES ('12', '1', 'Manastone: Flight Time +6', '10', '167000523', '50', 'http://www.aiondatabase.com/res/icons/40/icon_item_magicstone_04.png', '3', '30');
INSERT INTO `voterewards3` VALUES ('13', '1', 'L55 Enchantment Stone x15', '20', '166000055', '60', 'http://www.aiondatabase.com/res/icons/40/icon_item_enchantstone03.png', '2', '31');
INSERT INTO `voterewards3` VALUES ('14', '1', 'L60 Enchantment Stone x15', '15', '166000060', '70', 'http://www.aiondatabase.com/res/icons/40/icon_item_enchantstone03.png', '2', '32');
INSERT INTO `voterewards3` VALUES ('15', '1', 'L65 Enchantment Stone x15', '15', '166000065', '80', 'http://www.aiondatabase.com/res/icons/40/icon_item_enchantstone04.png', '2', '33');
INSERT INTO `voterewards3` VALUES ('16', '1', 'L70 Enchantment Stone x15', '15', '166000070', '90', 'http://www.aiondatabase.com/res/icons/40/icon_item_enchantstone04.png', '2', '34');
INSERT INTO `voterewards3` VALUES ('17', '1', 'L101 Enchantment Stone x10', '10', '166000101', '100', 'http://www.aiondatabase.com/res/icons/40/icon_item_enchantstone06.png', '2', '35');
INSERT INTO `voterewards3` VALUES ('18', '1', 'L190 Enchantment Stone x10', '10', '166000190', '120', 'http://www.aiondatabase.com/res/icons/40/icon_item_enchantstone07.png', '2', '36');

-- ----------------------------
-- Table structure for `voterewards4`
-- ----------------------------
DROP TABLE IF EXISTS `voterewards4`;
CREATE TABLE `voterewards4` (
  `id` int(10) unsigned NOT NULL,
  `realm` tinyint(3) unsigned DEFAULT NULL,
  `name` varchar(32) DEFAULT NULL,
  `description` text,
  `itemid` int(10) unsigned DEFAULT NULL,
  `points` int(10) unsigned DEFAULT NULL,
  `icon` text CHARACTER SET utf8,
  `class` text,
  `e` int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`e`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of voterewards4
-- ----------------------------
INSERT INTO `voterewards4` VALUES ('1', '1', 'Aether Powder x100', '100', '152000901', '20', 'http://www.aiondatabase.com/res/icons/40/icon_item_od04.png', '2', '10');
INSERT INTO `voterewards4` VALUES ('2', '1', 'Greater Aether Crystal x100', '100', '152000903', '50', 'http://www.aiondatabase.com/res/icons/40/icon_item_od03_r.png', '3', '11');
INSERT INTO `voterewards4` VALUES ('3', '1', 'Pure Aether Gem x 50', '50', '152000906', '100', 'http://www.aiondatabase.com/res/icons/40/icon_item_od02_l.png', '4', '12');
INSERT INTO `voterewards4` VALUES ('4', '1', 'Brilliant Aether x10', '10', '152000910', '150', 'http://www.aiondatabase.com/res/icons/40/icon_item_od01_u.png', '5', '13');

-- ----------------------------
-- Table structure for `voterewards5`
-- ----------------------------
DROP TABLE IF EXISTS `voterewards5`;
CREATE TABLE `voterewards5` (
  `id` int(10) unsigned NOT NULL,
  `realm` tinyint(3) unsigned DEFAULT NULL,
  `name` varchar(32) DEFAULT NULL,
  `description` text,
  `itemid` int(10) unsigned DEFAULT NULL,
  `points` tinyint(3) unsigned DEFAULT NULL,
  `icon` text CHARACTER SET utf8,
  `class` text,
  `e` int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`e`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of voterewards5
-- ----------------------------
INSERT INTO `voterewards5` VALUES ('1', '1', 'Dye: Hot Orange', '6', '169220004', '10', 'http://www.aiondatabase.com/res/icons/40/icon_cash_item_dye_orange_01.png', '2', '11');
INSERT INTO `voterewards5` VALUES ('2', '1', 'Dye: True Red', '6', '169220001', '10', 'http://www.aiondatabase.com/res/icons/40/icon_cash_item_dye_orange_01.png', '2', '12');
INSERT INTO `voterewards5` VALUES ('3', '1', 'Dye: Hot Pink', '6', '169220006', '10', 'http://www.aiondatabase.com/res/icons/40/icon_cash_item_dye_orange_01.png', '2', '13');
INSERT INTO `voterewards5` VALUES ('4', '1', 'Dye: True Black', '6', '169220003', '15', 'http://www.aiondatabase.com/res/icons/40/icon_cash_item_dye_orange_01.png', '2', '14');
INSERT INTO `voterewards5` VALUES ('7', '1', 'Dye: Deep Blue', '6', '169220010', '15', 'http://www.aiondatabase.com/res/icons/40/icon_cash_item_dye_orange_01.png', '2', '15');
INSERT INTO `voterewards5` VALUES ('5', '1', 'Dye: True White', '6', '169220002', '20', 'http://www.aiondatabase.com/res/icons/40/icon_cash_item_dye_orange_01.png', '2', '16');
INSERT INTO `voterewards5` VALUES ('8', '1', 'Dye: Olive Green', '6', '169220009', '20', 'http://www.aiondatabase.com/res/icons/40/icon_cash_item_dye_orange_01.png', '2', '17');
INSERT INTO `voterewards5` VALUES ('6', '1', 'Dye: Mustard', '6', '169220007', '20', 'http://www.aiondatabase.com/res/icons/40/icon_cash_item_dye_orange_01.png', '2', '18');
INSERT INTO `voterewards5` VALUES ('9', '1', 'Dye: Rich Purple ', '6', '169220005', '33', 'http://www.aiondatabase.com/res/icons/40/icon_cash_item_dye_orange_01.png', '2', '19');
INSERT INTO `voterewards5` VALUES ('10', '1', 'Dye: Green Tea', '6', '169220008', '33', 'http://www.aiondatabase.com/res/icons/40/icon_cash_item_dye_orange_01.png', '2', '20');

-- ----------------------------
-- Table structure for `voterewards6`
-- ----------------------------
DROP TABLE IF EXISTS `voterewards6`;
CREATE TABLE `voterewards6` (
  `id` int(10) unsigned NOT NULL,
  `realm` tinyint(3) unsigned DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `description` text,
  `itemid` int(10) unsigned DEFAULT NULL,
  `points` int(3) unsigned DEFAULT NULL,
  `icon` text CHARACTER SET utf8,
  `class` text,
  `e` int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`e`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of voterewards6
-- ----------------------------
INSERT INTO `voterewards6` VALUES ('1', '1', 'Archon Recruit\'s Sword', '1', '100000976', '200', 'http://www.aiondatabase.com/res/icons/40/icon_item_sword_l02.png', '4', '19');
INSERT INTO `voterewards6` VALUES ('2', '1', 'Elite Archon Squad Leader\'s Sword', '1', '100000806', '250', 'http://www.aiondatabase.com/res/icons/40/icon_item_sword_u02.png', '5', '20');
INSERT INTO `voterewards6` VALUES ('3', '1', 'Archon Recruit\'s Warhammer', '1', '100100740', '200', 'http://www.aiondatabase.com/res/icons/40/icon_item_mace_l02.png', '4', '21');
INSERT INTO `voterewards6` VALUES ('4', '1', 'Elite Archon Squad Leader\'s Warhammer', '1', '100100552', '250', 'http://www.aiondatabase.com/res/icons/40/icon_item_mace_u02.png', '5', '22');
INSERT INTO `voterewards6` VALUES ('5', '1', 'Archon Recruit\'s Dagger', '1', '100200867', '200', 'http://www.aiondatabase.com/res/icons/40/icon_item_dagger_l02.png', '4', '23');
INSERT INTO `voterewards6` VALUES ('6', '1', 'Archon Squad Leader\'s Dagger', '1', '100200659', '250', 'http://www.aiondatabase.com/res/icons/40/icon_item_dagger_u02.png', '5', '24');
INSERT INTO `voterewards6` VALUES ('7', '1', 'Archon Recruit\'s Jewel', '1', '100500759', '200', 'http://www.aiondatabase.com/res/icons/40/icon_item_orb_l02.png', '4', '25');
INSERT INTO `voterewards6` VALUES ('8', '1', 'Archon Squad Leader\'s Jewel', '1', '100500553', '250', 'http://www.aiondatabase.com/res/icons/40/icon_item_orb_u02.png', '5', '26');
INSERT INTO `voterewards6` VALUES ('9', '1', 'Archon Recruit\'s Tome', '1', '100600815', '200', 'http://www.aiondatabase.com/res/icons/40/icon_item_book_l02.png', '4', '27');
INSERT INTO `voterewards6` VALUES ('10', '1', 'Archon Squad Leader\'s Tome', '1', '100600590', '250', 'http://www.aiondatabase.com/res/icons/40/icon_item_book_u02.png', '5', '28');
INSERT INTO `voterewards6` VALUES ('11', '1', 'Archon Recruit\'s Spear', '1', '101300712', '200', 'http://www.aiondatabase.com/res/icons/40/icon_item_polearm_l02.png', '4', '29');
INSERT INTO `voterewards6` VALUES ('12', '1', 'Archon Squad Leader\'s Spear', '1', '101300526', '250', 'http://www.aiondatabase.com/res/icons/40/icon_item_polearm_u02.png', '5', '30');
INSERT INTO `voterewards6` VALUES ('13', '1', 'Archon Recruit\'s Staff', '1', '101500761', '200', 'http://www.aiondatabase.com/res/icons/40/icon_item_staff_l02.png', '4', '31');
INSERT INTO `voterewards6` VALUES ('14', '1', 'Archon Squad Leader\'s Staff', '1', '101500550', '250', 'http://www.aiondatabase.com/res/icons/40/icon_item_staff_u02.png', '5', '32');
INSERT INTO `voterewards6` VALUES ('15', '1', 'Archon Recruit\'s Longbow', '1', '101700780', '200', 'http://www.aiondatabase.com/res/icons/40/icon_item_bow_l02.png', '4', '33');
INSERT INTO `voterewards6` VALUES ('16', '1', 'Archon Squad Leader\'s Longbow', '1', '101700572', '250', 'http://www.aiondatabase.com/res/icons/40/icon_item_bow_u02.png', '5', '34');

-- ----------------------------
-- Table structure for `voterewards7`
-- ----------------------------
DROP TABLE IF EXISTS `voterewards7`;
CREATE TABLE `voterewards7` (
  `id` int(10) unsigned NOT NULL,
  `realm` tinyint(3) unsigned DEFAULT NULL,
  `name` varchar(60) DEFAULT NULL,
  `description` text,
  `itemid` int(10) unsigned DEFAULT NULL,
  `points` int(3) unsigned DEFAULT NULL,
  `icon` text CHARACTER SET utf8,
  `class` text,
  `e` int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`e`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of voterewards7
-- ----------------------------
INSERT INTO `voterewards7` VALUES ('1', '1', 'N/A', '0', '1', '0', null, '2', '7');

-- ----------------------------
-- Table structure for `voterewards8`
-- ----------------------------
DROP TABLE IF EXISTS `voterewards8`;
CREATE TABLE `voterewards8` (
  `id` int(10) unsigned NOT NULL,
  `realm` tinyint(3) unsigned DEFAULT NULL,
  `name` varchar(32) DEFAULT NULL,
  `description` text,
  `itemid` int(10) unsigned DEFAULT NULL,
  `points` int(3) unsigned DEFAULT NULL,
  `icon` text CHARACTER SET utf8,
  `class` text,
  `e` int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`e`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of voterewards8
-- ----------------------------
INSERT INTO `voterewards8` VALUES ('1', '1', 'N/A', '0', '1', '0', null, '2', '6');

-- ----------------------------
-- Table structure for `voterewards9`
-- ----------------------------
DROP TABLE IF EXISTS `voterewards9`;
CREATE TABLE `voterewards9` (
  `id` int(10) unsigned NOT NULL,
  `realm` tinyint(3) unsigned DEFAULT NULL,
  `name` varchar(32) DEFAULT NULL,
  `description` text,
  `itemid` int(10) unsigned DEFAULT NULL,
  `points` int(3) unsigned DEFAULT NULL,
  `icon` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `class` text NOT NULL,
  `e` int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`e`)
) ENGINE=MyISAM AUTO_INCREMENT=145 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of voterewards9
-- ----------------------------
INSERT INTO `voterewards9` VALUES ('1', '1', 'Flash of Recovery VI ', '1', '140000471', '10', 'Stigma', '', '73');
INSERT INTO `voterewards9` VALUES ('2', '1', 'Punishing Earth I', '1', '140000336', '10', 'Stigma', '', '74');
INSERT INTO `voterewards9` VALUES ('3', '1', 'Sympathetic Heal II', '1', '140000317', '10', 'Stigma', '', '75');
INSERT INTO `voterewards9` VALUES ('4', '1', 'Splendor of Recovery III', '1', '140000470', '10', 'Stigma', '', '76');
INSERT INTO `voterewards9` VALUES ('5', '1', 'Earth\'s Wrath V', '1', '140000335', '10', 'Stigma', '', '77');
INSERT INTO `voterewards9` VALUES ('6', '1', 'Stabilize II', '1', '140000415', '10', 'Stigma', '', '78');
INSERT INTO `voterewards9` VALUES ('7', '1', 'Ancestral Marchutan\'s Light I', '1', '140000181', '30', 'Stigma', '', '79');
INSERT INTO `voterewards9` VALUES ('8', '1', 'Ancestral Yustiel\'s Light I', '1', '140000180', '30', 'Stigma', '', '80');
INSERT INTO `voterewards9` VALUES ('9', '1', 'Healing Conduit VII', '1', '140000494', '10', 'Stigma', '', '81');
INSERT INTO `voterewards9` VALUES ('10', '1', 'Hit Mantra I', '1', '140000484', '10', 'Stigma', '', '82');
INSERT INTO `voterewards9` VALUES ('11', '1', 'Promise of Aether IV', '1', '140000430', '10', 'Stigma', '', '83');
INSERT INTO `voterewards9` VALUES ('12', '1', 'Soul Crush II', '1', '140000483', '10', 'Stigma', '', '84');
INSERT INTO `voterewards9` VALUES ('13', '1', 'Protective Ward VI', '1', '140000374', '10', 'Stigma', '', '85');
INSERT INTO `voterewards9` VALUES ('14', '1', 'Splash Swing III', '1', '140000438', '10', 'Stigma', '', '86');
INSERT INTO `voterewards9` VALUES ('15', '1', 'Word of Life IV', '1', '140000393', '10', 'Stigma', '', '87');
INSERT INTO `voterewards9` VALUES ('16', '1', 'Recovery Spell II', '1', '140000473', '10', 'Stigma', '', '88');
INSERT INTO `voterewards9` VALUES ('17', '1', 'Ancestral Aetheric Field I', '1', '140000183', '30', 'Stigma', '', '89');
INSERT INTO `voterewards9` VALUES ('18', '1', 'Ancestral Word of Spellstopping ', '1', '140000182', '30', 'Stigma', '', '90');
INSERT INTO `voterewards9` VALUES ('19', '1', 'Ambush VI', '1', '140000419', '10', 'Stigma', '', '91');
INSERT INTO `voterewards9` VALUES ('20', '1', 'Venemous Strike I', '1', '140000356', '10', 'Stigma', '', '92');
INSERT INTO `voterewards9` VALUES ('21', '1', 'Sigil Strike VII', '1', '140000425', '10', 'Stigma', '', '93');
INSERT INTO `voterewards9` VALUES ('22', '1', 'Rune Burst V', '1', '140000360', '10', 'Stigma', '', '94');
INSERT INTO `voterewards9` VALUES ('23', '1', 'Rune Knife IV', '1', '140000433', '10', 'Stigma', '', '95');
INSERT INTO `voterewards9` VALUES ('24', '1', 'Escape I', '1', '140000095', '10', 'Stigma', '', '96');
INSERT INTO `voterewards9` VALUES ('25', '1', 'Ancestral Darkness Rune I', '1', '140000179', '30', 'Stigma', '', '97');
INSERT INTO `voterewards9` VALUES ('26', '1', 'Ancestral Radiant Rune I', '1', '140000178', '30', 'Stigma', '', '98');
INSERT INTO `voterewards9` VALUES ('27', '1', 'Lockdown V', '1', '140000311', '10', 'Stigma', '', '99');
INSERT INTO `voterewards9` VALUES ('28', '1', 'Second Wind I', '1', '140000394', '10', 'Stigma', '', '100');
INSERT INTO `voterewards9` VALUES ('29', '1', 'Severe Weakening Blow VI', '1', '140000408', '10', 'Stigma', '', '101');
INSERT INTO `voterewards9` VALUES ('30', '1', 'Dauntless Spirit IV', '1', '140000321', '10', 'Stigma', '', '102');
INSERT INTO `voterewards9` VALUES ('31', '1', 'Vengeful Strike V', '1', '140000375', '10', 'Stigma', '', '103');
INSERT INTO `voterewards9` VALUES ('32', '1', 'Crippling Cut VI', '1', '140000330', '10', 'Stigma', '', '104');
INSERT INTO `voterewards9` VALUES ('33', '1', 'Siegebreaker III', '1', '140000397', '10', 'Stigma', '', '105');
INSERT INTO `voterewards9` VALUES ('34', '1', 'Draining Blow II', '1', '140000495', '10', 'Stigma', '', '106');
INSERT INTO `voterewards9` VALUES ('35', '1', 'Ancestral Force Blast I', '1', '140000172', '30', 'Stigma', '', '107');
INSERT INTO `voterewards9` VALUES ('36', '1', 'Ancestral Piercing Wave I', '1', '140000173', '30', 'Stigma', '', '108');
INSERT INTO `voterewards9` VALUES ('37', '1', 'Call Condors I', '1', '140000420', '10', 'Stigma', '', '109');
INSERT INTO `voterewards9` VALUES ('38', '1', 'Call Condors I 2.0', '1', '140000421', '10', 'Stigma', '', '110');
INSERT INTO `voterewards9` VALUES ('39', '1', 'Arrow Deluge VII', '1', '140000485', '10', 'Stigma', '', '111');
INSERT INTO `voterewards9` VALUES ('40', '1', 'Trap of Slowing IV', '1', '140000343', '10', 'Stigma', '', '112');
INSERT INTO `voterewards9` VALUES ('41', '1', 'Silence Arrow VI', '1', '140000466', '10', 'Stigma', '', '113');
INSERT INTO `voterewards9` VALUES ('42', '1', 'Breath of Nature IV', '1', '140000334', '10', 'Stigma', '', '114');
INSERT INTO `voterewards9` VALUES ('43', '1', 'Snare Trap V 2.0', '1', '140000431', '10', 'Stigma', '', '115');
INSERT INTO `voterewards9` VALUES ('44', '1', 'Snare Trap V', '1', '140000432', '30', 'Stigma', '', '116');
INSERT INTO `voterewards9` VALUES ('45', '1', 'Ancestral Brightwing Arrow I', '1', '140000176', '30', 'Stigma', '', '117');
INSERT INTO `voterewards9` VALUES ('46', '1', 'Ancestral Darkwing Arrow I', '1', '140000177', '30', 'Stigma', '', '118');
INSERT INTO `voterewards9` VALUES ('47', '1', 'Ice Sheet IV', '1', '140000383', '10', 'Stigma', '', '119');
INSERT INTO `voterewards9` VALUES ('48', '1', 'Ice Sheet IV 2.0', '1', '140000384', '10', 'Stigma', '', '120');
INSERT INTO `voterewards9` VALUES ('49', '1', 'Wind Cut Down V', '1', '140000364', '10', 'Stigma', '', '121');
INSERT INTO `voterewards9` VALUES ('50', '1', 'Exchange Vitality I 2.0', '1', '140000390', '10', 'Stigma', '', '122');
INSERT INTO `voterewards9` VALUES ('51', '1', 'Curse of Weakness III', '1', '140000409', '10', 'Stigma', '', '123');
INSERT INTO `voterewards9` VALUES ('52', '1', 'Fire Burst III', '1', '140000487', '10', 'Stigma', '', '124');
INSERT INTO `voterewards9` VALUES ('53', '1', 'Ice Harpoon II', '1', '140000424', '10', 'Stigma', '', '125');
INSERT INTO `voterewards9` VALUES ('54', '1', 'Ancestral Lava Tsunami I', '1', '140000185', '30', 'Stigma', '', '126');
INSERT INTO `voterewards9` VALUES ('55', '1', 'Ancestral Magma Eruption I', '1', '140000184', '30', 'Stigma', '', '127');
INSERT INTO `voterewards9` VALUES ('56', '1', 'Blessing of Fire V', '1', '140000378', '10', 'Stigma', '', '128');
INSERT INTO `voterewards9` VALUES ('57', '1', 'Ignite Aether VI', '1', '140000355', '10', 'Stigma', '', '129');
INSERT INTO `voterewards9` VALUES ('58', '1', 'Withering Gloom I', '1', '140000423', '10', 'Stigma', '', '130');
INSERT INTO `voterewards9` VALUES ('59', '1', 'Absorb Vitality VII', '1', '140000391', '10', 'Stigma', '', '131');
INSERT INTO `voterewards9` VALUES ('60', '1', 'Weaken Spirit IV', '1', '140000452', '10', 'Stigma', '', '132');
INSERT INTO `voterewards9` VALUES ('61', '1', 'Cyclone of Wrath II', '1', '140000377', '10', 'Stigma', '', '133');
INSERT INTO `voterewards9` VALUES ('62', '1', 'Ancestral Spirit Flow I', '1', '140000186', '30', 'Stigma', '', '134');
INSERT INTO `voterewards9` VALUES ('63', '1', 'Ancestral Spirit Self Destruct I', '1', '140000187', '30', 'Stigma', '', '135');
INSERT INTO `voterewards9` VALUES ('64', '1', 'Provoking Roar VI', '1', '140000337', '10', 'Stigma', '', '136');
INSERT INTO `voterewards9` VALUES ('65', '1', 'Barricade of Steel I', '1', '140000365', '10', 'Stigma', '', '137');
INSERT INTO `voterewards9` VALUES ('66', '1', 'Holy Shield IV', '1', '140000373', '10', 'Stigma', '', '138');
INSERT INTO `voterewards9` VALUES ('67', '1', 'Break Power IV', '1', '140000366', '10', 'Stigma', '', '139');
INSERT INTO `voterewards9` VALUES ('68', '1', 'Incite Rage V', '1', '140000376', '10', 'Stigma', '', '140');
INSERT INTO `voterewards9` VALUES ('69', '1', 'Punishment V', '1', '140000461', '10', 'Stigma', '', '141');
INSERT INTO `voterewards9` VALUES ('70', '1', 'Siegebreaker III', '1', '140000398', '10', 'Stigma', '', '142');
INSERT INTO `voterewards9` VALUES ('71', '1', 'Ancestral Holy Punishment I', '1', '140000174', '30', 'Stigma', '', '143');
INSERT INTO `voterewards9` VALUES ('72', '1', 'Ancestral Righteous Punishment I', '1', '140000175', '30', 'Stigma', '', '144');

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
INSERT INTO `votes` VALUES ('127.0.0.1', 'admin', '1', '1285288852');
INSERT INTO `votes` VALUES ('127.0.0.1', 'admin', '2', '1285289294');
INSERT INTO `votes` VALUES ('127.0.0.1', 'admin', '3', '1285289303');
INSERT INTO `votes` VALUES ('127.0.0.1', 'admin', '4', '1285289371');
