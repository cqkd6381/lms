/*
Navicat MySQL Data Transfer

Source Server         : laralms
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : laralms

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-04-16 17:48:34
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `career`
-- ----------------------------
DROP TABLE IF EXISTS `career`;
CREATE TABLE `career` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '职业路径表',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '路径名称',
  `introduction` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '路径介绍',
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '路径描述',
  `learning_nums` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '学习人数',
  `imgpath` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '路径图片',
  `status` tinyint(4) NOT NULL DEFAULT '2' COMMENT '状态1开启2关闭',
  `created_user` int(11) NOT NULL COMMENT '创建人id',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `pid` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `career_pid_index` (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of career
-- ----------------------------
INSERT INTO `career` VALUES ('29', 'YII框架应用', 'YII框架应用', '', '0', '', '2', '1', '2017-04-14 16:54:46', '2017-04-14 16:54:46', '4');
INSERT INTO `career` VALUES ('28', '初探YII框架', '初探YII框架2', '', '0', '', '2', '1', '2017-04-06 22:00:34', '2017-04-14 16:58:20', '4');
INSERT INTO `career` VALUES ('3', 'Android工程师', 'Laravel大量使用了PHP的面向对象编程的知识和新特性，我们可以通过这一系列的视频来理解PHP的OOP，从而达到更好地理解和使用Laravel的目的Laravel大量使用了PHP的面向对象编程的知识和新特性，我们可以通过这一系列的视频来理解PHP的OOP，从而达到更好地理解和使用Laravel的目的', 'tgtlCETtIxbZjFMvMBUGjnemgYu2Cm9t14Jecc6F', '5204', '1.png', '2', '1', '2017-03-29 22:01:10', '2017-04-14 21:39:37', '0');
INSERT INTO `career` VALUES ('4', 'PHP工程师', 'Laravel大量使用了PHP的面向对象编程的知识和新特性，我们可以通过这一系列的视频来理解PHP的OOP，从而达到更好地理解和使用Laravel的目的Laravel大量使用了PHP的面向对象编程的知识和新特性，我们可以通过这一系列的视频来理解PHP的OOP，从而达到更好地理解和使用Laravel的目的', 'Nel8glXfU65D9fVCZ51okszwG95cPTp0cnCjLmSL', '9467', '1.png', '1', '1', '2017-03-29 22:01:11', '2017-04-14 21:49:41', '0');
INSERT INTO `career` VALUES ('5', '响应式布局那些事', 'fWyUmDHaPFb3bUpxPIkl', 'imi3ZUCma4LcuSp67mLIxj3OnZ4JK63651IxhzJS', '1235', '1.png', '1', '1', '2017-03-29 22:01:12', '2017-03-29 22:01:12', '0');
INSERT INTO `career` VALUES ('6', 'JAVA工程师', 'lTWFa80xXEtn3ZUh16e3', 'HiV2rSNfxwAFCYw9HQ5kImrChnba5AsrGLMewhe3', '2951', '1.png', '1', '1', '2017-03-29 22:01:13', '2017-03-29 22:01:13', '0');
INSERT INTO `career` VALUES ('7', 'Linux运维工程师', 'zaXCiGUHXMJBJIlFgohe', 'tqsrgdSwuOfOBrdtQs6Lyzefz5BJynXlO0DuKYFa', '8538', '1.png', '1', '1', '2017-03-29 22:01:14', '2017-03-29 22:01:14', '0');
INSERT INTO `career` VALUES ('8', 'jQuery源码探索之旅', '4GMqs4lrbwIuY2v7Tsf0', 'UzELytJlfktXVO5oB36YqKX5ArF0rxVbKFskb5Fa', '2680', '1.png', '1', '1', '2017-03-29 22:01:19', '2017-03-29 22:01:19', '0');
INSERT INTO `career` VALUES ('9', '.NET工程师', '8nhHOvNt7okOxODbsC3T', 'f8G5bssSdoOFCBhrqI3peqHrOsP3OzUcLRFm0DdR', '1631', '1.png', '1', '1', '2017-03-29 22:01:20', '2017-03-29 22:01:20', '0');
INSERT INTO `career` VALUES ('10', 'IOS工程师', 'fnriz762iRIUJwcXtIeM', 'txSQUTVth6X0bEShSv2lTenpnLnbTNuspAXtwyLm', '3480', '1.png', '1', '1', '2017-03-29 22:01:26', '2017-03-29 22:01:26', '0');
INSERT INTO `career` VALUES ('11', '测试工程师', 'bjdHsFpVSwYk18ZdoFUt', 'h51aCjcMkRekFgLwjgxHbHB5U4TtwBfdYJPEgFUe', '566', '1.png', '1', '1', '2017-03-29 22:01:27', '2017-03-29 22:01:27', '0');
INSERT INTO `career` VALUES ('13', '带你玩转Yii框架', '带你玩转Yii框架', '带你玩转Yii框架', '0', 'demo.png', '1', '1', '2017-04-05 10:13:52', '2017-04-14 21:37:03', '0');

-- ----------------------------
-- Table structure for `career_course`
-- ----------------------------
DROP TABLE IF EXISTS `career_course`;
CREATE TABLE `career_course` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '路径-课程联系表',
  `course_id` int(11) NOT NULL COMMENT '课程id',
  `career_id` int(11) NOT NULL COMMENT '路径id',
  `created_user` bigint(20) NOT NULL COMMENT '创建人id',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `career_course_course_id_index` (`course_id`),
  KEY `career_course_career_id_index` (`career_id`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of career_course
-- ----------------------------
INSERT INTO `career_course` VALUES ('45', '29', '28', '1', '2017-04-14 17:04:03', '2017-04-14 17:04:03');
INSERT INTO `career_course` VALUES ('44', '6', '29', '1', '2017-04-14 17:03:53', '2017-04-14 17:03:53');
INSERT INTO `career_course` VALUES ('46', '20', '28', '1', '2017-04-14 17:04:05', '2017-04-14 17:04:05');
INSERT INTO `career_course` VALUES ('43', '21', '29', '1', '2017-04-14 17:03:52', '2017-04-14 17:03:52');
INSERT INTO `career_course` VALUES ('47', '17', '28', '1', '2017-04-14 17:04:06', '2017-04-14 17:04:06');

-- ----------------------------
-- Table structure for `career_user`
-- ----------------------------
DROP TABLE IF EXISTS `career_user`;
CREATE TABLE `career_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '路径学习表',
  `career_id` int(11) NOT NULL COMMENT '路径id',
  `user_id` int(11) NOT NULL COMMENT '用户id',
  `minutes` smallint(6) NOT NULL DEFAULT '0' COMMENT '路径总时长',
  `learning_hours` smallint(6) NOT NULL DEFAULT '0' COMMENT '已学时长',
  `completed_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '完成时间',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `career_user_career_id_index` (`career_id`),
  KEY `career_user_user_id_index` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of career_user
-- ----------------------------

-- ----------------------------
-- Table structure for `category`
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '课程分类表',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '分类名称',
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '分类介绍',
  `created_user` int(11) NOT NULL COMMENT '创建人id',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('1', '大数据', '大数据', '1', '2017-03-29 17:25:42', '2017-04-05 13:26:57');
INSERT INTO `category` VALUES ('2', 'WEB安全', 'uKqoKtUhnW', '1', '2017-03-29 17:25:44', '2017-03-29 17:25:44');
INSERT INTO `category` VALUES ('7', 'asdf', 'asdf', '1', '2017-04-06 14:02:51', '2017-04-06 14:06:05');
INSERT INTO `category` VALUES ('3', 'JAVA', 'DgfH75Vk1t', '1', '2017-03-29 22:25:07', '2017-03-29 22:25:07');
INSERT INTO `category` VALUES ('4', '测试', 'yxsmabGw8D', '1', '2017-03-29 22:25:08', '2017-03-29 22:25:08');
INSERT INTO `category` VALUES ('5', 'PHP', 'PHP', '1', '2017-04-05 13:07:49', '2017-04-05 13:07:49');
INSERT INTO `category` VALUES ('8', 'fff', 'fff', '1', '2017-04-06 14:24:20', '2017-04-06 14:44:36');
INSERT INTO `category` VALUES ('9', 'dddd', 'ddddh', '1', '2017-04-06 14:26:16', '2017-04-06 16:10:03');

-- ----------------------------
-- Table structure for `collections`
-- ----------------------------
DROP TABLE IF EXISTS `collections`;
CREATE TABLE `collections` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `collections_user_id_index` (`user_id`),
  KEY `collections_course_id_index` (`course_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of collections
-- ----------------------------

-- ----------------------------
-- Table structure for `course`
-- ----------------------------
DROP TABLE IF EXISTS `course`;
CREATE TABLE `course` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '课程表',
  `code` int(10) unsigned NOT NULL COMMENT '课程编号',
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '课程名称',
  `imgpath` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '课程图片路径',
  `imgpath2` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '课程图片路径2',
  `introduction` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '课程简介',
  `description` text COLLATE utf8_unicode_ci NOT NULL COMMENT '课程描述',
  `teacher_id` int(11) NOT NULL COMMENT '讲师id',
  `category_id` int(11) NOT NULL COMMENT '课程分类id',
  `courseware_nums` int(10) unsigned NOT NULL COMMENT '课件数量',
  `learning_nums` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '学习人数',
  `minutes` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '课程时长（分钟）',
  `difficulty` tinyint(4) NOT NULL DEFAULT '1' COMMENT '难度1初级2中级3高级',
  `is_recommend` tinyint(4) NOT NULL DEFAULT '2' COMMENT '是否推荐1是2否',
  `is_latest` tinyint(4) NOT NULL DEFAULT '1' COMMENT '是否最新1是2否',
  `display_order` int(10) unsigned NOT NULL DEFAULT '1' COMMENT '排序1-9999',
  `fee` decimal(8,2) NOT NULL DEFAULT '0.00' COMMENT '课程费用（人民币）',
  `status` tinyint(4) NOT NULL DEFAULT '2' COMMENT '状态1开启2关闭',
  `published_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '发布时间',
  `created_user` int(11) NOT NULL COMMENT '创建人id',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `course_code_unique` (`code`),
  KEY `course_teacher_id_index` (`teacher_id`),
  KEY `course_category_id_index` (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of course
-- ----------------------------
INSERT INTO `course` VALUES ('1', '87017', 'AAAAA', 'images/2017-04/2017040517280538.png', '', 'AAAAA', 'AAAAA', '5', '4', '7', '4058', '89', '1', '1', '1', '4892', '319.00', '1', '2017-03-29 19:28:44', '1', '2017-03-29 19:28:44', '2017-04-10 16:08:36');
INSERT INTO `course` VALUES ('2', '81412', 'wgwHS', '1.png', '', 'xTrJj3gu930PfXg8m17c', '8xDpd2zwsWDvv04FkWwBWDX1elh6dIOWbNJtjNsz', '5', '1', '8', '4912', '245', '1', '1', '1', '6048', '362.00', '1', '2017-03-29 19:29:05', '1', '2017-03-29 19:29:05', '2017-04-05 14:34:29');
INSERT INTO `course` VALUES ('3', '28536', 'kJzz2', '1.png', '', 'pEUNC8BVhzKNwrn7A4mf', '78kQrXly2OhkpuW5PwBJLNZg1oIxUU3ntKW7xDoV', '5', '3', '9', '9502', '255', '1', '1', '1', '2674', '346.00', '1', '2017-03-29 19:29:06', '1', '2017-03-29 19:29:06', '2017-04-05 13:29:10');
INSERT INTO `course` VALUES ('4', '30710', 'te6iH', '1.png', '', 'HASnTsnDBoTrnqf4nhGU', 'RySIvXyoNHlbbelQ75FLsWFkCeUfS9gNPpqtsCpG', '5', '1', '5', '7306', '265', '3', '1', '1', '3701', '206.00', '1', '2017-03-29 19:29:07', '1', '2017-03-29 19:29:07', '2017-03-29 19:29:07');
INSERT INTO `course` VALUES ('5', '40373', 'N2Tai', '1.png', '', 'wAlN1gjuVJIswCFqflTt', 'GgiIosLhaLVtTqwnkgpmQ9P7VGqV0gmQiQz9I28e', '5', '4', '11', '7851', '277', '1', '1', '1', '6431', '360.00', '1', '2017-03-29 19:29:08', '1', '2017-03-29 19:29:08', '2017-03-29 19:29:08');
INSERT INTO `course` VALUES ('6', '20251', 'ul0sn', 'images/2017-04/2017041416164047.png', '', 'UtMQeptAlcvXI1ggY8go', 'zhEuKjAgUpHMMScr1ohNtbqDXwXKxGOhlTpbGeEP', '5', '1', '12', '8668', '298', '1', '1', '1', '9497', '428.00', '1', '2017-03-29 19:29:09', '1', '2017-03-29 19:29:09', '2017-04-14 16:16:40');
INSERT INTO `course` VALUES ('7', '24561', 'nNit5', '1.png', '', 'ep9lGQmo3V1svEutKA4J', 'y8SPM7o0CUuqRLGCFvsgnr3EAlpfI9L5xo5SrPky', '5', '3', '10', '4350', '166', '2', '1', '1', '371', '234.00', '1', '2017-03-29 19:29:12', '1', '2017-03-29 19:29:12', '2017-03-29 19:29:12');
INSERT INTO `course` VALUES ('8', '29554', 'FotZD', 'images/2017-04/2017041416181320.png', '', 'ijAZ5uAUbPLaSF2M0ohi', 'gQoKdTVjJwtjLp2oP5Xj43Eb2gRx8uJf5rRuyyFt', '5', '1', '8', '7667', '155', '1', '1', '1', '8285', '428.00', '1', '2017-03-29 19:29:14', '1', '2017-03-29 19:29:14', '2017-04-14 16:18:13');
INSERT INTO `course` VALUES ('9', '95563', 'TceKi', '1.png', '', 'hDDz1f6r0ZXrRcwXg4Dm', 'aGlciLSzsl2XTlvrETJzyiCeAd6UEMivKSqMiQDe', '5', '2', '4', '2111', '144', '2', '1', '1', '2957', '143.00', '1', '2017-03-29 19:29:15', '1', '2017-03-29 19:29:15', '2017-03-29 19:29:15');
INSERT INTO `course` VALUES ('10', '76352', 'DnzJI', '1.png', '', 'a0F32hsr5T5cF9OTaDPv', 'qJzz05BLCQ6mIIhqnX9lil8UuwHPsKayCuunAq46', '5', '4', '9', '9895', '133', '2', '1', '1', '7630', '492.00', '1', '2017-03-29 19:29:16', '1', '2017-03-29 19:29:16', '2017-03-29 20:43:08');
INSERT INTO `course` VALUES ('11', '50917', 'CX8UU', '1.png', '', 'ioRVrPzxGHBRNiZIZ4Ss', 'dLKKjO1SQ4MtUGJO5ngKpNusKqzr2NAplKkVxkt2', '5', '1', '9', '4262', '122', '1', '1', '1', '6204', '300.00', '1', '2017-03-29 19:29:17', '1', '2017-03-29 19:29:17', '2017-03-29 19:29:17');
INSERT INTO `course` VALUES ('12', '78104', 'PwkQF', '1.png', '', 'SJKfQKeolwa0Cv7InYKd', '7ftyrIZXkbNOoGKW6HpsuVRcxAtZ8naA94vk9aqE', '5', '2', '12', '9936', '188', '2', '1', '1', '4584', '272.00', '1', '2017-03-29 19:29:18', '1', '2017-03-29 19:29:18', '2017-03-29 19:29:18');
INSERT INTO `course` VALUES ('13', '74740', 'LgGEL', '1.png', '', 'Xf8QVTx2aPI98GSOFRfa', 'HCPBbfJkvwKlvSRTimoN3EByubW9dvWuaflIRs9W', '5', '3', '11', '4581', '177', '1', '1', '1', '5515', '85.00', '1', '2017-03-29 19:29:19', '1', '2017-03-29 19:29:19', '2017-03-29 19:29:19');
INSERT INTO `course` VALUES ('14', '76002', '9049B', '1.png', '', '5cK9qmfR7QdjRN1Ryhr0', 'usseErrsARzw2nPKKmoPevNgDXASvDIWd1F0DDYe', '5', '2', '8', '7776', '144', '2', '1', '1', '7332', '138.00', '1', '2017-03-29 19:29:20', '1', '2017-03-29 19:29:20', '2017-03-29 19:29:20');
INSERT INTO `course` VALUES ('15', '46458', 'hMjyM', '1.png', '', 'TGe5jLGzYy0E1uLo3cQD', 'FYxJBPP1J7Acl3d6YvwJqfcC8agC2w7yX4pn1bdV', '5', '4', '7', '8681', '155', '2', '1', '1', '2875', '289.00', '1', '2017-03-29 19:29:21', '1', '2017-03-29 19:29:21', '2017-03-29 19:29:21');
INSERT INTO `course` VALUES ('16', '30809', '35G1G', '1.png', '', 'xCI3FFfViBV6t8nIKgoJ', 'dCPR1PXycCaPqcerpPgI6GaN3PxP5dfCZXOaehCC', '5', '2', '9', '279', '111', '3', '1', '1', '3663', '441.00', '1', '2017-03-29 19:29:22', '1', '2017-03-29 19:29:22', '2017-03-29 19:29:22');
INSERT INTO `course` VALUES ('17', '32349', '8h9WR', 'images/2017-04/2017041416175053.png', '', 's3J4tKJxG07XO9wuP5dc', 'l3jFENRMrXaRWBoGQwqPwXFirq5YmguFyS3lZR22', '5', '1', '15', '3763', '98', '1', '1', '1', '8670', '420.00', '1', '2017-03-29 19:29:24', '1', '2017-03-29 19:29:24', '2017-04-14 16:17:50');
INSERT INTO `course` VALUES ('18', '86853', 'XoqVx', '1.png', '', '8MZYpzdss0ZkUkoO6Thr', 'kmgueTXnH1c5xIVGythtE2zRbTvTRnvuvGu69udH', '5', '3', '11', '3855', '97', '3', '1', '1', '7689', '49.00', '1', '2017-03-29 19:29:25', '1', '2017-03-29 19:29:25', '2017-03-29 19:29:25');
INSERT INTO `course` VALUES ('19', '86354', 'jIcmP', '1.png', '', '5n8kIGqpDj3aTwjWIhLe', 'cW1lO1uRiHVML60gkgmzR6ozzN0xAEP1BB9L0tpc', '5', '1', '12', '5224', '96', '3', '1', '1', '1197', '388.00', '1', '2017-03-29 19:29:27', '1', '2017-03-29 19:29:27', '2017-03-29 19:29:27');
INSERT INTO `course` VALUES ('20', '54163', 'O2kCb', 'images/2017-04/2017041416170116.png', '', 'xmZC6BDhMDKPMcz3OyIu', 'oCAn5yOHSIdFfvYRFiLtw2wH7X7UttspmyhA6MAh', '5', '2', '10', '5130', '95', '1', '1', '1', '9215', '277.00', '1', '2017-03-29 19:29:33', '1', '2017-03-29 19:29:33', '2017-04-14 16:17:01');
INSERT INTO `course` VALUES ('21', '25618', 'x18Dh', 'images/2017-04/2017041416171550.png', '', 'qiLPbpqzOQPGpdEocMJf', 'EiIhgm6OsFJwH2QAn0ciD1EIwdAl59yukp3BX4Bd', '5', '2', '9', '2010', '99', '1', '1', '1', '9142', '322.00', '1', '2017-03-29 19:29:34', '1', '2017-03-29 19:29:34', '2017-04-14 16:17:15');
INSERT INTO `course` VALUES ('22', '95195', 'aKITc', '1.png', '', 'balCsOWWKq8RjxUqf8oR', 'WJOS6dsyWxMapVeG6p6rXuBYF2oNmUHjhNXG9rkx', '5', '4', '8', '7841', '211', '1', '1', '1', '1609', '282.00', '1', '2017-03-29 19:29:35', '1', '2017-03-29 19:29:35', '2017-03-29 19:29:35');
INSERT INTO `course` VALUES ('23', '87632', '6YKTz', '1.png', '', 'aBQoIJvGHSmGgyMv6u8K', '97RQCZrorWOASfjZMEkkdx1kwHwKBziefFW0J7cr', '5', '2', '7', '1395', '266', '2', '1', '1', '5878', '382.00', '1', '2017-03-29 19:29:36', '1', '2017-03-29 19:29:36', '2017-03-29 19:29:36');
INSERT INTO `course` VALUES ('24', '45671', 'mgiMW', '1.png', '', 'jCP7pPY8oslXv3YMTZfP', 'ZBxoPIR9CC7lo81rvzSwPrsiabJdg9g4YaZ1QOdk', '5', '1', '6', '9412', '255', '1', '1', '1', '2809', '383.00', '1', '2017-03-29 19:29:37', '1', '2017-03-29 19:29:37', '2017-03-29 19:29:37');
INSERT INTO `course` VALUES ('25', '83835', '25LcV', 'images/2017-04/2017041416173071.png', '', 'KQea1oNY5T1KgalOMR4H', 'cpZ3fmpRQfbBsmJoz7aNNR3JPpv1zyZqytTvEDb9', '5', '4', '15', '5445', '200', '1', '1', '1', '8696', '269.00', '1', '2017-03-29 19:29:38', '1', '2017-03-29 19:29:38', '2017-04-14 16:17:30');
INSERT INTO `course` VALUES ('26', '51510', 'lli5h', '1.png', '', 'HqElKnexU8EEkPRwIIfF', 'pen7QYTT7OzDnb9lKcqeXHasNwZXxQ35En6w4cBG', '5', '3', '14', '8537', '222', '2', '1', '1', '428', '298.00', '1', '2017-03-29 19:29:39', '1', '2017-03-29 19:29:39', '2017-03-29 19:29:39');
INSERT INTO `course` VALUES ('27', '40587', 'gmK9K', '1.png', '', 'yyA90eQq35gHilMgLAaf', 'evTrgN6koX1TBvugiQIsVumwDWdWYdImi4BVHCyU', '5', '2', '14', '9001', '221', '1', '1', '1', '6882', '84.00', '1', '2017-03-29 19:29:43', '1', '2017-03-29 19:29:43', '2017-03-29 19:29:43');
INSERT INTO `course` VALUES ('28', '97232', 'nbvL5', '1.png', '', 'aL9PjAfg4vmKdn2jnCWy', '95lqz4tKQPYDJyzWAF28hdkfkIvqHtbInRjYQbsX', '5', '2', '12', '9751', '223', '1', '1', '1', '6969', '391.00', '1', '2017-03-29 19:29:45', '1', '2017-03-29 19:29:45', '2017-03-29 19:29:45');
INSERT INTO `course` VALUES ('29', '79635', 'XuYhv', 'images/2017-04/2017041416220621.png', '', 'v2pm7xuXYmxxu6mUodaH', '4AChZ0uba8zb7GZpbhoRHR9StpHH4KghhOixJRYz', '5', '1', '10', '6435', '222', '1', '1', '1', '9698', '204.00', '1', '2017-03-29 19:29:46', '1', '2017-03-29 19:29:46', '2017-04-14 16:22:06');
INSERT INTO `course` VALUES ('30', '81511', 'LXeXP', '1.png', '', 'uMYMoeWcarePjdaclgja', '6dFL3IACSVmgJePxTYSbHGegXstnaat3Tvtb10rD', '5', '1', '6', '9242', '90', '2', '1', '1', '6095', '398.00', '1', '2017-03-29 19:29:47', '1', '2017-03-29 19:29:47', '2017-03-29 19:29:47');
INSERT INTO `course` VALUES ('31', '56242', '4PJpo', 'images/2017-04/2017041416203645.png', '', 'rXIohYx4WUAtIzOGZCRi', 'Z8IRzvqyNoAsYr8GNJHgavqA2hIhRDo01u3OJdyZ', '5', '4', '9', '1119', '87', '1', '1', '1', '7809', '28.00', '1', '2017-03-29 19:30:00', '1', '2017-03-29 19:30:00', '2017-04-14 16:20:36');
INSERT INTO `course` VALUES ('32', '63306', 'mW46s', '1.png', '', 'hPCr0v1pPmUQLtrYHfPI', 'w2rZWdpqyD2NWBoYFJxaC4dqridsaOeW1AWteGS4', '5', '3', '8', '1958', '69', '2', '1', '1', '4484', '279.00', '1', '2017-03-29 19:30:02', '1', '2017-03-29 19:30:02', '2017-03-29 21:25:24');
INSERT INTO `course` VALUES ('35', '568975', 'BBBB', 'images/2017-04/2017040517285562.png', '', 'BBBB', 'BBBB', '5', '2', '0', '0', '0', '3', '1', '1', '9999', '0.00', '2', '2017-04-05 17:28:55', '1', '2017-04-05 17:28:55', '2017-04-10 12:50:59');
INSERT INTO `course` VALUES ('34', '77963', '与《Yii框架》不得不说的故事—基础篇', 'images/2017-04/2017040514334242.png', '', '与《Yii框架》不得不说的故事—基础篇', '与《Yii框架》不得不说的故事—基础篇', '5', '5', '0', '0', '0', '1', '1', '1', '999', '0.00', '1', '2017-04-05 13:45:02', '1', '2017-04-05 13:45:02', '2017-04-10 12:50:57');
INSERT INTO `course` VALUES ('36', '22222', 'Linux基础', 'images/2017-04/2017040618551451.png', '', 'asdfasdf', 'asdfasdfdddddddddhhhh', '5', '1', '0', '0', '0', '1', '1', '1', '2222', '0.00', '1', '2017-04-06 15:23:28', '1', '2017-04-06 15:23:28', '2017-04-06 18:55:14');

-- ----------------------------
-- Table structure for `course_comment`
-- ----------------------------
DROP TABLE IF EXISTS `course_comment`;
CREATE TABLE `course_comment` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '课程评论表',
  `user_id` int(11) NOT NULL COMMENT '用户id',
  `course_id` int(11) NOT NULL COMMENT '课程id',
  `comment` text COLLATE utf8_unicode_ci NOT NULL COMMENT '评论内容',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `course_comment_user_id_index` (`user_id`),
  KEY `course_comment_course_id_index` (`course_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of course_comment
-- ----------------------------
INSERT INTO `course_comment` VALUES ('1', '1', '1', '这是我看过的做好的学习视频了。', '2017-04-07 15:37:31', '2017-04-07 15:37:31');
INSERT INTO `course_comment` VALUES ('2', '1', '1', '真的不错', '2017-04-07 15:39:30', '2017-04-07 15:39:30');
INSERT INTO `course_comment` VALUES ('3', '1', '1', '讲的很详细啊', '2017-04-07 15:40:39', '2017-04-07 15:40:39');
INSERT INTO `course_comment` VALUES ('4', '1', '1', '课件在哪下载？', '2017-04-07 15:41:05', '2017-04-07 15:41:05');
INSERT INTO `course_comment` VALUES ('5', '1', '1', '在右边可以直接下载的。', '2017-04-07 15:42:27', '2017-04-07 15:42:27');
INSERT INTO `course_comment` VALUES ('6', '11', '1', '这个课程以后会不会收费啊？', '2017-04-07 15:45:01', '2017-04-07 15:45:01');
INSERT INTO `course_comment` VALUES ('7', '1', '1', '@test100 肯定会的，前期运营希望有更多的用户注册使用，提点宝贵意见。', '2017-04-07 15:46:03', '2017-04-07 15:46:03');
INSERT INTO `course_comment` VALUES ('8', '1', '1', '阿斯蒂芬 阿斯蒂芬啊啊是否艾丝凡啊沙发萨斯风阿斯顿发沙发沙发沙发沙发斯蒂芬\n阿斯顿规范\n东方红\n到房管局\n打飞机', '2017-04-07 15:46:49', '2017-04-07 15:46:49');
INSERT INTO `course_comment` VALUES ('9', '1', '29', 'asdf', '2017-04-07 16:17:54', '2017-04-07 16:17:54');
INSERT INTO `course_comment` VALUES ('10', '1', '1', '不错啊', '2017-04-10 09:54:33', '2017-04-10 09:54:33');
INSERT INTO `course_comment` VALUES ('11', '1', '1', '讲的挺仔细！', '2017-04-10 16:58:33', '2017-04-10 16:58:33');
INSERT INTO `course_comment` VALUES ('12', '1', '1', 'heiehi', '2017-04-13 19:20:05', '2017-04-13 19:20:05');
INSERT INTO `course_comment` VALUES ('13', '1', '1', '中国啊', '2017-04-14 14:16:57', '2017-04-14 14:16:57');
INSERT INTO `course_comment` VALUES ('14', '1', '3', '不错\n阿斯蒂芬', '2017-04-14 21:04:00', '2017-04-14 21:04:00');

-- ----------------------------
-- Table structure for `course_user`
-- ----------------------------
DROP TABLE IF EXISTS `course_user`;
CREATE TABLE `course_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户-课程学习表',
  `user_id` int(10) unsigned NOT NULL COMMENT '用户id',
  `course_id` int(10) unsigned NOT NULL COMMENT '课程id',
  `progress` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '学习进度0-100',
  `learn_status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '学习状态1学习中2已完成',
  `last_learning_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '上次学习时间',
  `completed_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '完成时间',
  `total_learning_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '总学时（分钟）',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `course_user_user_id_index` (`user_id`),
  KEY `course_user_course_id_index` (`course_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of course_user
-- ----------------------------

-- ----------------------------
-- Table structure for `course_ware`
-- ----------------------------
DROP TABLE IF EXISTS `course_ware`;
CREATE TABLE `course_ware` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '课件表',
  `course_id` int(11) NOT NULL COMMENT '所属课程id',
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '课件名称',
  `filesize` int(10) unsigned NOT NULL COMMENT '课件大小',
  `minutes` int(10) unsigned NOT NULL COMMENT '课件时长',
  `display_order` int(10) unsigned NOT NULL DEFAULT '1' COMMENT '排序1-9999',
  `video_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '课件视频路径',
  `attribute` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '课件属性',
  `description` text COLLATE utf8_unicode_ci NOT NULL COMMENT '课件说明',
  `created_user` int(11) NOT NULL COMMENT '创建人id',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_charge` tinyint(4) NOT NULL DEFAULT '1' COMMENT '是否收费1收费2免费',
  PRIMARY KEY (`id`),
  KEY `course_ware_course_id_index` (`course_id`)
) ENGINE=MyISAM AUTO_INCREMENT=109 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of course_ware
-- ----------------------------
INSERT INTO `course_ware` VALUES ('1', '20', 'rsId2Tntuf', '0', '27', '8469', '1.mp4', '', 'tgd6DKilnZqIPlNwFNWSivYS3wEuOKDGZgLPxH6G', '1', '2017-03-29 21:43:51', '2017-03-29 21:43:51', '1');
INSERT INTO `course_ware` VALUES ('2', '16', 'rfkoUnBxoX', '0', '12', '5317', '1.mp4', '', 'mI817ao8bI0xcJ0adReJ48ddVkyALPzd9kf3ZjG5', '1', '2017-03-29 21:44:07', '2017-04-14 14:29:02', '2');
INSERT INTO `course_ware` VALUES ('3', '6', 'ob9mXBbyKw', '0', '18', '8046', '1.mp4', '', 'IHnuoLaSYyobk0yAERKL9QOuszxDsCW39Svn9jhE', '1', '2017-03-29 21:44:15', '2017-04-14 14:27:37', '2');
INSERT INTO `course_ware` VALUES ('4', '14', 'S7qbHsZhCi', '0', '6', '7432', '1.mp4', '', 'XpZGNdwmjyd4C8FI863jIhQDVCUoK6GdcQ70tujd', '1', '2017-03-29 21:44:16', '2017-03-29 21:44:16', '1');
INSERT INTO `course_ware` VALUES ('5', '9', 'RiUh3pBNhP', '0', '29', '2401', '1.mp4', '', 'pKN66r4Lgh9sebHUq8EKvBz066dwAkPzz2rEEDs8', '1', '2017-03-29 21:44:17', '2017-04-14 14:28:07', '2');
INSERT INTO `course_ware` VALUES ('6', '20', 'YVzqgTwgfv', '0', '10', '5651', '1.mp4', '', 'V3jariZl3TxWuYk2zYa3gaLiERO7sHRdyojcFtNI', '1', '2017-03-29 21:44:18', '2017-04-14 14:29:30', '2');
INSERT INTO `course_ware` VALUES ('7', '17', '6ufrTKo4A8', '0', '14', '4142', '1.mp4', '', 'q34eAwir0kWMncv1YGIhvT4LzeL7XgwYqmrfn6Fh', '1', '2017-03-29 21:44:19', '2017-04-14 14:29:07', '2');
INSERT INTO `course_ware` VALUES ('8', '9', 'vdSp9uFe8P', '0', '28', '9700', '1.mp4', '', 'txxoPMxC3EjBp1D9hsakw8IGqJaGwBmQYauR8qko', '1', '2017-03-29 21:44:20', '2017-03-29 21:44:20', '1');
INSERT INTO `course_ware` VALUES ('9', '18', 'Sjx27KcGC3', '0', '19', '2513', '1.mp4', '', 'DIWkA2bFuQVKl8lrwfGmcyBI1xSwj0hXiThlMiSY', '1', '2017-03-29 21:44:23', '2017-03-29 21:44:23', '1');
INSERT INTO `course_ware` VALUES ('10', '16', 'vVOGrOmfmA', '0', '30', '3339', '1.mp4', '', 'sU9Q5lHkbKV8YfyRaU2Q6fI7nSgggFhGdXwWtI6u', '1', '2017-03-29 21:44:24', '2017-04-14 14:29:01', '2');
INSERT INTO `course_ware` VALUES ('11', '16', 'fV6SImrYlK', '0', '29', '3957', '1.mp4', '', 'pL1BV35fdXNUZvVqWP1VRpSGYBU0w1knFm6mD0VV', '1', '2017-03-29 21:44:25', '2017-04-14 14:29:01', '2');
INSERT INTO `course_ware` VALUES ('12', '11', '1KZtbQd6UH', '0', '7', '4719', '1.mp4', '', 'BTjD4k3ocFIImhPUMX2QPYDLP4TLqN65Fytl4xWK', '1', '2017-03-29 21:44:28', '2017-04-14 14:28:18', '2');
INSERT INTO `course_ware` VALUES ('13', '12', 'EgdrbUOKIW', '0', '15', '250', '1.mp4', '', 'GnWRcy8cr28rpW6yXJAIyU3lDdi5REOCHWtlv8lB', '1', '2017-03-29 21:44:29', '2017-04-14 14:28:23', '2');
INSERT INTO `course_ware` VALUES ('14', '15', 'hofJrGbMW8', '0', '23', '5316', '1.mp4', '', 'QPserJ0SZ2fK7jhHPr3t58rDRFsd7D9hnxGkwtfm', '1', '2017-03-29 21:44:30', '2017-04-14 14:28:51', '2');
INSERT INTO `course_ware` VALUES ('15', '14', 't1ObZ0wBQw', '0', '8', '173', '1.mp4', '', 'Zk8HLfisN0GZx2zJ3bcemWN4RsnoIj9LN2Kenb1M', '1', '2017-03-29 21:44:31', '2017-04-14 14:28:34', '2');
INSERT INTO `course_ware` VALUES ('16', '15', 'wIlnE01o70', '0', '15', '3454', '1.mp4', '', 'E5QhTtLWT1NiVF68o7EmjtvHJxVpeEcs7vVIYn8Y', '1', '2017-03-29 21:44:31', '2017-04-14 14:28:51', '2');
INSERT INTO `course_ware` VALUES ('17', '15', 'c8sUOa8x6I', '0', '12', '9871', '1.mp4', '', 'wG8BRBYwXUD0sv2Zy7UtpWCiLL1VYLKfMhBSk3sQ', '1', '2017-03-29 21:44:32', '2017-03-29 21:44:32', '1');
INSERT INTO `course_ware` VALUES ('18', '4', 'sjwFQbcpuo', '0', '17', '511', '1.mp4', '', 'wmBHhkWhTeWTvuAJWNac1Bq4Yyf4YTrzwUEPNU6t', '1', '2017-03-29 21:44:33', '2017-04-14 14:27:26', '2');
INSERT INTO `course_ware` VALUES ('19', '11', 'bck1qi2YpU', '0', '29', '8241', '1.mp4', '', '9obZAjSp7kaNeVQte3P1raajWPE6ACiNbngxBRcr', '1', '2017-03-29 21:44:34', '2017-04-14 14:28:19', '2');
INSERT INTO `course_ware` VALUES ('20', '16', 'nq9FvJjuFa', '0', '28', '2697', '1.mp4', '', 'RHbvpYIDyypikub1MwPmBlWQWSwDXsLYbbovWbhZ', '1', '2017-03-29 21:44:35', '2017-04-14 14:29:00', '2');
INSERT INTO `course_ware` VALUES ('21', '15', 'OG3OXmC7Ik', '0', '13', '7304', '1.mp4', '', 'W7ULVxhVlA88DBx2R0J0qxXZ5nTVvh4KVFfplrYC', '1', '2017-03-29 21:44:35', '2017-04-14 14:28:53', '2');
INSERT INTO `course_ware` VALUES ('22', '6', 'LSo6FPAohZ', '0', '26', '6721', '1.mp4', '', '4ETcVBUpQQOiHgSVXmiyLhPNyqrxUR9IzV5CNvKv', '1', '2017-03-29 21:44:36', '2017-04-14 14:27:37', '2');
INSERT INTO `course_ware` VALUES ('23', '20', 'SSi5PKqoBU', '0', '30', '4461', '1.mp4', '', 'StIQNRd0xL1oTp5VLwJu7o9tr35bJ9NFNKg4ZtpI', '1', '2017-03-29 21:44:37', '2017-04-14 14:29:29', '2');
INSERT INTO `course_ware` VALUES ('24', '19', '3wVlesuY1C', '0', '21', '4594', '1.mp4', '', 'gmE5weaLx4AMn99uJoRcWGHUE1MSF48JRfaqgESI', '1', '2017-03-29 21:44:38', '2017-04-14 14:29:21', '2');
INSERT INTO `course_ware` VALUES ('25', '5', '0vFEjAdBLs', '0', '19', '123', '1.mp4', '', '5oXEgpLq89udLprd51Kuxw5cjfB97TQ9Bp4ymM9L', '1', '2017-03-29 21:44:38', '2017-04-14 14:27:31', '2');
INSERT INTO `course_ware` VALUES ('26', '16', '1cDmyf8OF3', '0', '12', '8342', '1.mp4', '', 'OCtJtO16vT8CMOtAOqM8f1S4TOyG6QgGM8TU1G5F', '1', '2017-03-29 21:44:39', '2017-03-29 21:44:39', '1');
INSERT INTO `course_ware` VALUES ('27', '7', 'Ue6lxNGHUW', '0', '19', '9075', '1.mp4', '', 'YbegHzi5wS97byhic0oidiaxxttHBmFSCrdz2tNU', '1', '2017-03-29 21:44:40', '2017-04-14 14:27:45', '2');
INSERT INTO `course_ware` VALUES ('28', '2', 'rn1tCgvq9g', '0', '30', '5502', '1.mp4', '', '2JHY2s7eGwyvDWVp9EZhaN2EZC8zTXijq0G1zeXq', '1', '2017-03-29 21:44:41', '2017-03-29 21:44:41', '1');
INSERT INTO `course_ware` VALUES ('29', '1', 'V9eD8JsgGE', '0', '12', '9836', '1.mp4', '', 'V9eD8JsgGEffffff', '1', '2017-03-29 21:44:42', '2017-04-10 15:46:44', '1');
INSERT INTO `course_ware` VALUES ('30', '19', 'oxSEWNJzo6', '0', '20', '8272', '1.mp4', '', 'PJRibfP2ie4oaKrxuawyxPGRoecSfZLrPG4kFmuo', '1', '2017-03-29 21:44:43', '2017-03-29 21:44:43', '1');
INSERT INTO `course_ware` VALUES ('31', '11', 'ATT6DvvScd', '0', '6', '7945', '1.mp4', '', 'BN2JKBVsoWAPXZpX5Uju4dElux1SUeAVpKPzeJBd', '1', '2017-03-29 21:44:45', '2017-04-14 14:28:19', '2');
INSERT INTO `course_ware` VALUES ('32', '14', 'PGqeZVK0jX', '0', '5', '553', '1.mp4', '', '9nary9ofMxF0mwnLm8KAD0NYukZ4vdY7zVng0ctv', '1', '2017-03-29 21:44:48', '2017-04-14 14:28:34', '2');
INSERT INTO `course_ware` VALUES ('33', '1', 'MOJALIXR76', '0', '15', '2191', '1.mp4', '', 'oiEFYDBP855joOjqglCtrcsq4J2XMYETyhWooCAi', '1', '2017-03-29 21:44:49', '2017-04-14 14:26:27', '2');
INSERT INTO `course_ware` VALUES ('34', '14', 'OZM6OpTM0s', '0', '10', '1728', '1.mp4', '', 'niOKwYVVjoStCvlQVCF00VzICtobAzRrVbwnFlOl', '1', '2017-03-29 21:44:50', '2017-04-14 14:28:35', '2');
INSERT INTO `course_ware` VALUES ('35', '6', 'sZZwljIJon', '0', '12', '5530', '1.mp4', '', 'agG6a5bQXjXtNbG5H6KH2zaDwi4OL9mOYXYehV05', '1', '2017-03-29 21:44:51', '2017-04-14 14:27:36', '2');
INSERT INTO `course_ware` VALUES ('36', '2', '8zSsR30hvG', '0', '15', '7652', '1.mp4', '', '57ubaHu1gJoT2c2eAoqEtRXuG0gD30k3Ji7U7mXi', '1', '2017-03-29 21:44:52', '2017-03-29 21:44:52', '1');
INSERT INTO `course_ware` VALUES ('37', '3', 'TId8jvpkcN', '0', '16', '9365', '1.mp4', '', 'h1IXyMGHPD9LUPasV2QEMEClYg52gsdYMuRB1F0q', '1', '2017-03-29 21:44:53', '2017-03-29 21:44:53', '1');
INSERT INTO `course_ware` VALUES ('38', '14', 'KGAcuZdE8v', '0', '27', '6026', '1.mp4', '', 'FbAOrNkLEMC0E8eh3rFcbRMLJ0Y5SuDR4nzdKnu1', '1', '2017-03-29 21:44:54', '2017-04-14 14:28:36', '2');
INSERT INTO `course_ware` VALUES ('39', '4', 'zWwBguzPBA', '0', '26', '7250', '1.mp4', '', '82yKoM9HDhUs3dqKBpxdyJUfWsn5TPutRVaL91lD', '1', '2017-03-29 21:44:55', '2017-03-29 21:44:55', '1');
INSERT INTO `course_ware` VALUES ('40', '11', 'JHbwuOKqjw', '0', '26', '8682', '1.mp4', '', '6iNo2VQawQj68di550cOpCPzWDAelFnYDi4AKERP', '1', '2017-03-29 21:44:55', '2017-03-29 21:44:55', '1');
INSERT INTO `course_ware` VALUES ('41', '15', 'fh5ND5xXIU', '0', '19', '9650', '1.mp4', '', 'ljMqtxcoVyhkxzJzPsVIb91UTXxQYsVsWq3BSAer', '1', '2017-03-29 21:44:57', '2017-03-29 21:44:57', '1');
INSERT INTO `course_ware` VALUES ('42', '19', 'Sorx9t5rjB', '0', '11', '6960', '1.mp4', '', 'ybPYUNrSIfpu0cNKyszFAuPoBJpBUzsXxmdBv8j7', '1', '2017-03-29 21:44:58', '2017-04-14 14:29:23', '2');
INSERT INTO `course_ware` VALUES ('43', '6', 'I7Nt9mtSOc', '0', '6', '8543', '1.mp4', '', '7rBGBmBPZHgqB53QEr3pMHal0Zy8oyAoHIrRtach', '1', '2017-03-29 21:45:02', '2017-04-14 14:27:38', '2');
INSERT INTO `course_ware` VALUES ('44', '3', 'upjW8qAYs1', '0', '9', '1825', '1.mp4', '', '6wriv3yZWiAB14Kq91O6ZmdkctrrM9dVVMpCapjY', '1', '2017-03-29 21:45:04', '2017-04-14 14:27:20', '2');
INSERT INTO `course_ware` VALUES ('45', '7', 'L3WhUdGtDv', '0', '8', '4892', '1.mp4', '', 'QaFKtgrOZT5b0aeXrMjwgvJEciQCxzDIkXTqNZ4d', '1', '2017-03-29 21:45:05', '2017-04-14 14:27:43', '2');
INSERT INTO `course_ware` VALUES ('46', '8', 'MlDbpVLCJq', '0', '24', '1380', '1.mp4', '', 'OQ1lDCUTAINTA2RDCZF2GdUJg1eqrQzKSlKK6v8q', '1', '2017-03-29 21:45:06', '2017-04-14 14:27:59', '2');
INSERT INTO `course_ware` VALUES ('47', '2', 'bEnjuKfB6A', '0', '25', '940', '1.mp4', '', '01vlLpdEQBfSHcHBYPIUFI8IKsC3pqGJawvb0cJm', '1', '2017-03-29 21:45:07', '2017-04-14 14:27:08', '2');
INSERT INTO `course_ware` VALUES ('48', '2', 'rl2eaW45EV', '0', '16', '2597', '1.mp4', '', 'gwjLNSbNb2fvMWzpVQ68F9VCR2aGDOYkPCpjUQap', '1', '2017-03-29 21:45:09', '2017-04-14 14:27:09', '2');
INSERT INTO `course_ware` VALUES ('49', '19', 'qgdDsG5A7r', '0', '25', '3237', '1.mp4', '', 's9EMZbeZ8IRIfESiIJMBRChM0ojPu81bnU2jFmYM', '1', '2017-03-29 21:45:11', '2017-04-14 14:29:21', '2');
INSERT INTO `course_ware` VALUES ('50', '14', 'fXz1zNfmz4', '0', '8', '1641', '1.mp4', '', 'dUAsbCDTW0R7fs2PCi6hFsKoQ7eyvv1u2St0Df0o', '1', '2017-03-29 21:45:13', '2017-04-14 14:28:35', '2');
INSERT INTO `course_ware` VALUES ('51', '12', 'JE9Dd8YMPw', '0', '18', '9479', '1.mp4', '', 'Ez8zo4Zf1cdaFv1shX6Ss2GGwQat6yLlI2f4TlGc', '1', '2017-03-29 21:45:15', '2017-03-29 21:45:15', '1');
INSERT INTO `course_ware` VALUES ('52', '18', 'BMTVSZP16I', '0', '30', '464', '1.mp4', '', 'ox4C2ktLNVb2OAt1nkIv5xyfqqL1SCKab3BjKG8q', '1', '2017-03-29 21:45:16', '2017-04-14 14:29:16', '2');
INSERT INTO `course_ware` VALUES ('53', '9', 'qbC3yuuyEb', '0', '29', '1692', '1.mp4', '', 'ox68yaUy8C9JVpiLeP6AlUGajdWevvsCtUkPTbuU', '1', '2017-03-29 21:45:17', '2017-04-14 14:28:05', '2');
INSERT INTO `course_ware` VALUES ('54', '7', 'tpUNLaCXMx', '0', '13', '9891', '1.mp4', '', '73u7ZMgfTWSJOW7ebf3Y7kPRzyFQtrRZdEhIfH45', '1', '2017-03-29 21:45:19', '2017-03-29 21:45:19', '1');
INSERT INTO `course_ware` VALUES ('55', '16', 'U44m2XISno', '0', '26', '256', '1.mp4', '', 'AExK7uUzx8MJNEwqIgKmk8KEfEG8okr2HRPcBY5P', '1', '2017-03-29 21:45:20', '2017-04-14 14:29:00', '2');
INSERT INTO `course_ware` VALUES ('56', '3', 'GpRrrtjMFh', '0', '18', '3077', '1.mp4', '', 'pS8jUo7y0PNtByFB0hL4molr5WHdL7AJFT6ykxFj', '1', '2017-03-29 21:45:21', '2017-04-14 14:27:21', '2');
INSERT INTO `course_ware` VALUES ('57', '20', 'MPxPTnVB5y', '0', '18', '2204', '1.mp4', '', 'noSFCrTDxI3X4ZC7IHiYu5gFDh734b0PDfYlLFi6', '1', '2017-03-29 21:45:22', '2017-04-14 14:29:28', '2');
INSERT INTO `course_ware` VALUES ('58', '20', 'n5v4Viz1Ul', '0', '25', '3743', '1.mp4', '', 'fowaJtZddTOlvTYe5UjT2t9koYEbZJKCS9Ukiokk', '1', '2017-03-29 21:45:23', '2017-04-14 14:29:28', '2');
INSERT INTO `course_ware` VALUES ('59', '2', 'i7iOVEGtCq', '0', '30', '5361', '1.mp4', '', 'pSBKfaVg5hB46dfFUOkOOAOcJ7qjtZRidYpYL8oa', '1', '2017-03-29 21:45:24', '2017-04-14 14:27:10', '2');
INSERT INTO `course_ware` VALUES ('60', '15', 'xyE0tSvwmi', '0', '30', '6777', '1.mp4', '', 'WEJF2qcCntxWfQF1bjE0H978GrBDblkJBQIuOdvN', '1', '2017-03-29 21:45:25', '2017-04-14 14:28:52', '2');
INSERT INTO `course_ware` VALUES ('61', '6', 'h7b7Xplgmu', '0', '10', '4960', '1.mp4', '', 'KE9m1jhVGd1cqkDNxeZn71JFkCeNOyJPYjGQLHqR', '1', '2017-03-29 21:45:26', '2017-04-14 14:27:36', '2');
INSERT INTO `course_ware` VALUES ('62', '8', 'VhkWT82I7B', '0', '26', '2647', '1.mp4', '', 'guNlKX2bECCZ3eJ3sMQXpYHlLtwySf3z49TM5Cpv', '1', '2017-03-29 21:45:26', '2017-04-14 14:28:00', '2');
INSERT INTO `course_ware` VALUES ('63', '8', 'vBUD7ahdYj', '0', '28', '3786', '1.mp4', '', 'LLPabsXylFnyWdh6YU9VFasPwOTixnr6PYsdFB3A', '1', '2017-03-29 21:45:27', '2017-04-14 14:28:00', '2');
INSERT INTO `course_ware` VALUES ('64', '10', 'qy5y0DqId0', '0', '28', '8973', '1.mp4', '', 'LziqIN96dct3OJQFx9ALAlzHbbJg8aadzi35ByrG', '1', '2017-03-29 21:45:34', '2017-03-29 21:45:34', '1');
INSERT INTO `course_ware` VALUES ('65', '14', 'lhvS2RtuQ2', '0', '19', '7586', '1.mp4', '', 'awAFdbYxBkHCuLv0lCpDUstWO3Qo9b1JlKuMkwDz', '1', '2017-03-29 21:45:35', '2017-03-29 21:45:35', '1');
INSERT INTO `course_ware` VALUES ('66', '17', 'j4nXiaX61d', '0', '15', '484', '1.mp4', '', 'C97hy0Q0uzj74C7texrfEimyWunlsdPeUvl48zFF', '1', '2017-03-29 21:45:36', '2017-04-14 14:29:06', '2');
INSERT INTO `course_ware` VALUES ('67', '4', '9gmDLZDEom', '0', '20', '3738', '1.mp4', '', 'N19V4wFXNaqZ3f9NZFCBtxbbeRHNlcUtIu7DWGO1', '1', '2017-03-29 21:45:37', '2017-04-14 14:27:26', '2');
INSERT INTO `course_ware` VALUES ('68', '7', 'aMqrqjp6TE', '0', '13', '3600', '1.mp4', '', 'yLjplb73HjrfUZrCMoXTKO0uvJ1L4Vukut0FO4bv', '1', '2017-03-29 21:45:38', '2017-04-14 14:27:42', '2');
INSERT INTO `course_ware` VALUES ('69', '11', 'gW39nA6QCC', '0', '23', '4802', '1.mp4', '', 'uDF492iMr8PgRbjfeujM1rLVkxEqgsKXsBByhVyn', '1', '2017-03-29 21:45:39', '2017-04-14 14:28:18', '2');
INSERT INTO `course_ware` VALUES ('70', '9', 'yPDBIng8av', '0', '7', '12', '1.mp4', '', 'vwm9UCkaqNl4ud8Bp9uHvD73gc3fMibp6wuAuN1u', '1', '2017-03-29 21:45:40', '2017-04-14 14:28:05', '2');
INSERT INTO `course_ware` VALUES ('71', '13', 'SefJDVbb0D', '0', '15', '197', '1.mp4', '', 'I4pVtmd8IRR2aFLyHI8Wq9ah01Ko1w278CmUPki6', '1', '2017-03-29 21:45:41', '2017-04-14 14:28:29', '2');
INSERT INTO `course_ware` VALUES ('72', '8', 'oeaahnf18u', '0', '6', '3900', '1.mp4', '', 'h8RIbi4kcnHotVbmLYcMuvJvm4n5CPf90sNOrMsL', '1', '2017-03-29 21:45:42', '2017-03-29 21:45:42', '1');
INSERT INTO `course_ware` VALUES ('73', '17', 'mxbvuwQZdN', '0', '13', '8594', '1.mp4', '', 'Oc4I5Z4OZQn4x0m0PhvGqNbbvWoXZkgmf3nyjYYx', '1', '2017-03-29 21:45:42', '2017-03-29 21:45:42', '1');
INSERT INTO `course_ware` VALUES ('74', '9', 'mWjt2ycxiB', '0', '18', '9677', '1.mp4', '', 'RuOWN11RWP0pj3rA6xLWHco3c1MDg1CSr1cZgJb3', '1', '2017-03-29 21:45:43', '2017-04-14 14:28:07', '2');
INSERT INTO `course_ware` VALUES ('75', '7', 'Aqc4uMyMpq', '0', '18', '6547', '1.mp4', '', 'ZQBvnQsYW24dYrycxFLCEePbYtebs7FSrtmAfYVH', '1', '2017-03-29 21:45:44', '2017-04-14 14:27:44', '2');
INSERT INTO `course_ware` VALUES ('76', '17', 'RGaEKnStul', '0', '29', '4291', '1.mp4', '', '35MPL90ijjRX07Qz6WR1U4iHHqczs9aUkFz5GySS', '1', '2017-03-29 21:45:45', '2017-04-14 14:29:07', '2');
INSERT INTO `course_ware` VALUES ('77', '12', 'R3WQsxbzY5', '0', '23', '467', '1.mp4', '', 'rlrZS7TmGwvr0wsserFGDxLV2lLItQG5GLK1V6g9', '1', '2017-03-29 21:45:46', '2017-04-14 14:28:24', '2');
INSERT INTO `course_ware` VALUES ('78', '7', 'JbyGKRS853', '0', '13', '5562', '1.mp4', '', 'HDMSAu60sTldj3C6Y6sTywhuNuFamN2SE4ie4WBw', '1', '2017-03-29 21:45:46', '2017-04-14 14:27:43', '2');
INSERT INTO `course_ware` VALUES ('79', '13', 'AVtzwg7T0M', '0', '14', '6435', '1.mp4', '', 'Rd9ZpCVYp4zuIMKWmWuAGwkYRLwTPvnVmX48Fdcx', '1', '2017-03-29 21:45:47', '2017-04-14 14:28:30', '2');
INSERT INTO `course_ware` VALUES ('80', '3', 'gng4M9XqN9', '0', '8', '8087', '1.mp4', '', '4ewgTDMtKe9GqeNhdiU5gG5JGcbDZ6P3MHkG9UNZ', '1', '2017-03-29 21:45:48', '2017-04-14 14:27:21', '2');
INSERT INTO `course_ware` VALUES ('81', '10', 'U2hWvLpYr6', '0', '21', '1862', '1.mp4', '', '2D6uAD3VwG41jcB7qKTBjIeq4bb5Hf877Cq9aLBk', '1', '2017-03-29 21:45:49', '2017-04-14 14:28:11', '2');
INSERT INTO `course_ware` VALUES ('82', '10', 'drVeN1FLzC', '0', '13', '6328', '1.mp4', '', 'FwIbYKVjY2WTQDH9TGYXU0BMGLOMrR5DKnrU9h8A', '1', '2017-03-29 21:45:50', '2017-04-14 14:28:12', '2');
INSERT INTO `course_ware` VALUES ('83', '17', '0nVRe2xM3U', '0', '14', '6335', '1.mp4', '', 'RfylkjJ8MmreCjp5DmrYUktqxbDR0TpLGJXOC3mQ', '1', '2017-03-29 21:45:51', '2017-04-14 14:29:08', '2');
INSERT INTO `course_ware` VALUES ('84', '6', 'd4U8VC8Lqg', '0', '18', '9288', '1.mp4', '', 'CYJD2jWxLcvtQUMqNwQEBw6doydQmp4dZ41RDqOH', '1', '2017-03-29 21:45:52', '2017-03-29 21:45:52', '1');
INSERT INTO `course_ware` VALUES ('85', '10', 'KCNvXHRqcA', '0', '8', '5198', '1.mp4', '', 'yzqbdpPxm46EjEX7Tkv3xA2SfF1E719gno5SuGd0', '1', '2017-03-29 21:45:52', '2017-04-14 14:28:11', '2');
INSERT INTO `course_ware` VALUES ('86', '19', 'u6wvWzu7M2', '0', '19', '1798', '1.mp4', '', 'A6dr4MuDBbjTPyWkBnchUMmljjEONRGzzyVxQTf3', '1', '2017-03-29 21:45:53', '2017-04-14 14:29:20', '2');
INSERT INTO `course_ware` VALUES ('87', '15', 'q7ISs9ylca', '0', '7', '8783', '1.mp4', '', 'jjmw5et22N0aq1Bi34dBAUq0OTWwU8ccAI8GgSr7', '1', '2017-03-29 21:45:54', '2017-04-14 14:28:53', '2');
INSERT INTO `course_ware` VALUES ('88', '15', 'yIjoVwm46g', '0', '28', '1988', '1.mp4', '', 'y7LZxlhrKitDOjHTt1J9I6KLKkhPvCYTWwbhrdCL', '1', '2017-03-29 21:45:55', '2017-04-14 14:28:50', '2');
INSERT INTO `course_ware` VALUES ('89', '19', '9XS9xTYxHz', '0', '20', '6135', '1.mp4', '', 'MEPWzz2nEk7ecWpddhVXYaPSWc1Hzfn7LQJhKoLx', '1', '2017-03-29 21:45:56', '2017-04-14 14:29:23', '2');
INSERT INTO `course_ware` VALUES ('90', '1', 'xCbUXVUC9M', '0', '17', '9049', '1.mp4', '', 'JqMAzkR7N9jCsoIYdUlW7yP3C8ug7gSk6SlL9R4a', '1', '2017-03-29 21:45:56', '2017-04-14 14:26:27', '2');
INSERT INTO `course_ware` VALUES ('91', '20', 'V0KopfTL6n', '0', '16', '4842', '1.mp4', '', 'vJLFUZokcTwKeO0alO3xAHIl9b5k9chINrOE0SWv', '1', '2017-03-29 21:45:57', '2017-04-14 14:29:29', '2');
INSERT INTO `course_ware` VALUES ('92', '13', '3xaoQplvau', '0', '8', '7671', '1.mp4', '', 'y97dAjnybHqcU6nQvpQDMQM37Rwi2Oxuu7iuMSLD', '1', '2017-03-29 21:45:58', '2017-04-14 14:28:30', '2');
INSERT INTO `course_ware` VALUES ('93', '7', 'fHxdF5fZ86', '0', '12', '1182', '1.mp4', '', 'HXl1373oNmSEVkOCQHw4RP1PsjoItpo6ZXWc7528', '1', '2017-03-29 21:46:00', '2017-04-14 14:27:42', '2');
INSERT INTO `course_ware` VALUES ('94', '5', 'VeokXe1WUs', '0', '15', '8479', '1.mp4', '', '28HBXU5DwsYP5qGJdSwk133Bzym7FANkKxpdyygc', '1', '2017-03-29 21:46:01', '2017-03-29 21:46:01', '1');
INSERT INTO `course_ware` VALUES ('95', '7', 'zxYVARofET', '0', '15', '8842', '1.mp4', '', 'arSrt4O4Mus6tJxnxAaB1WgnToxYLzogXsjmLZ2t', '1', '2017-03-29 21:46:02', '2017-04-14 14:27:44', '2');
INSERT INTO `course_ware` VALUES ('96', '19', 'EgVd7lma67', '0', '23', '5695', '1.mp4', '', 'F3gVpoo5z3w534V8EIBEx1AA4QbZHkX31e7PQj1K', '1', '2017-03-29 21:46:03', '2017-04-14 14:29:22', '2');
INSERT INTO `course_ware` VALUES ('97', '2', 'T28OT8KVcQ', '0', '21', '2981', '1.mp4', '', '5xw7bH5iqnip6zPLfeT8hxrt25i1umNMdJCg4o5o', '1', '2017-03-29 21:46:04', '2017-04-14 14:27:09', '2');
INSERT INTO `course_ware` VALUES ('98', '15', 'k98tSGkUiE', '0', '17', '342', '1.mp4', '', 'YtNAZZgDsA6l1eti3i2HK4pkfwCNMeLvgXhGDxcd', '1', '2017-03-29 21:46:04', '2017-04-14 14:28:50', '2');
INSERT INTO `course_ware` VALUES ('99', '8', 'sIm8EfyjPX', '0', '13', '1625', '1.mp4', '', '3PmiR3SJr7vGrApnVCCuPc7GjemaJlfM8wlJtzDz', '1', '2017-03-29 21:46:05', '2017-04-14 14:28:00', '2');
INSERT INTO `course_ware` VALUES ('100', '13', 'GeU0V9qdTC', '0', '21', '9453', '1.mp4', '', 'nlCIy2UxoUjM9Xd70ZFbY9d6sZsUi7ERBE8gCeVR', '1', '2017-03-29 21:46:12', '2017-03-29 21:46:12', '1');
INSERT INTO `course_ware` VALUES ('101', '1', 'test_courseware_1', '0', '15', '666', 'videos/2017-04/2017040514585987.mp4', '', 'test_courseware_1', '0', '2017-04-05 14:58:59', '2017-04-14 14:26:26', '2');
INSERT INTO `course_ware` VALUES ('102', '1', 'test_courseware_1', '0', '56', '333', 'videos/2017-04/2017040515051773.mp4', '', 'test_courseware_1', '1', '2017-04-05 15:05:17', '2017-04-10 15:43:26', '2');
INSERT INTO `course_ware` VALUES ('103', '1', 'test_courseware_3', '0', '33', '105', 'videos/2017-04/2017040516404598.mp4', '', 'test_courseware_3', '1', '2017-04-05 16:40:45', '2017-04-10 13:12:25', '2');
INSERT INTO `course_ware` VALUES ('104', '1', 'test_courseware_4', '0', '30', '400', 'videos/2017-04/2017040517083731.mp4', '', 'test_courseware_4', '1', '2017-04-05 17:08:37', '2017-04-10 15:46:40', '2');
INSERT INTO `course_ware` VALUES ('105', '36', 'Linux基础1', '0', '23', '1', 'videos/2017-04/2017040616214283.mp4', '', 'Linux基础1', '1', '2017-04-06 16:21:42', '2017-04-14 14:26:10', '2');

-- ----------------------------
-- Table structure for `goods`
-- ----------------------------
DROP TABLE IF EXISTS `goods`;
CREATE TABLE `goods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '商品表',
  `goods_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '商品名称',
  `goods_imgpath` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '商品图片路径',
  `goods_price` decimal(8,2) NOT NULL DEFAULT '0.00' COMMENT '商品单价',
  `goods_months` int(11) NOT NULL DEFAULT '0' COMMENT '商品可用月份1、2、3、6、12、24、36个月',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '商品状态1开启0关闭',
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '商品描述',
  `created_user` int(11) NOT NULL COMMENT '创建人id',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of goods
-- ----------------------------

-- ----------------------------
-- Table structure for `migrations`
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2017_03_23_093738_create_course_table', '1');
INSERT INTO `migrations` VALUES ('2017_03_23_095814_create_course_user_table', '1');
INSERT INTO `migrations` VALUES ('2017_03_23_100631_create_course_ware_table', '1');
INSERT INTO `migrations` VALUES ('2017_03_23_101818_create_course_comment_table', '1');
INSERT INTO `migrations` VALUES ('2017_03_23_102100_create_category_table', '1');
INSERT INTO `migrations` VALUES ('2017_03_23_102539_create_training_table', '1');
INSERT INTO `migrations` VALUES ('2017_03_23_103812_create_training_user_table', '1');
INSERT INTO `migrations` VALUES ('2017_03_23_104415_create_career_table', '1');
INSERT INTO `migrations` VALUES ('2017_03_23_105942_create_career_course_table', '1');
INSERT INTO `migrations` VALUES ('2017_03_23_110554_create_career_user_table', '1');
INSERT INTO `migrations` VALUES ('2017_03_23_111115_create_user_login_table', '1');
INSERT INTO `migrations` VALUES ('2017_03_23_111353_create_user_integral_table', '1');
INSERT INTO `migrations` VALUES ('2017_03_23_111621_create_user_integral_detail_table', '1');
INSERT INTO `migrations` VALUES ('2017_03_23_112400_create_order_table', '1');
INSERT INTO `migrations` VALUES ('2017_03_23_134132_create_goods_table', '1');
INSERT INTO `migrations` VALUES ('2017_03_23_140828_create_user_goods_table', '1');
INSERT INTO `migrations` VALUES ('2017_03_29_140005_create_order_goods_table', '1');
INSERT INTO `migrations` VALUES ('2017_03_30_121546_add_remember_token_to_users_table', '2');
INSERT INTO `migrations` VALUES ('2017_03_30_150620_create_posts_table', '3');
INSERT INTO `migrations` VALUES ('2017_03_30_163624_create_roles_table', '3');
INSERT INTO `migrations` VALUES ('2017_04_05_093622_add_pid_to_career_table', '4');
INSERT INTO `migrations` VALUES ('2017_04_07_160235_create_collections_table', '5');
INSERT INTO `migrations` VALUES ('2017_04_10_104941_add_is_charge_to_course_ware_table', '6');

-- ----------------------------
-- Table structure for `order`
-- ----------------------------
DROP TABLE IF EXISTS `order`;
CREATE TABLE `order` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '订单表',
  `order_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '订单号',
  `user_id` int(11) NOT NULL COMMENT '用户id',
  `phone` char(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '联系电话',
  `fee` decimal(8,2) NOT NULL DEFAULT '0.00' COMMENT '订单金额',
  `is_pay` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否付款0未支付1已支付',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `order_user_id_index` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of order
-- ----------------------------

-- ----------------------------
-- Table structure for `order_goods`
-- ----------------------------
DROP TABLE IF EXISTS `order_goods`;
CREATE TABLE `order_goods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL COMMENT '订单id',
  `goods_id` int(11) NOT NULL COMMENT '商品id',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `order_goods_order_id_index` (`order_id`),
  KEY `order_goods_goods_id_index` (`goods_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of order_goods
-- ----------------------------

-- ----------------------------
-- Table structure for `password_resets`
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for `permissions`
-- ----------------------------
DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '权限名称',
  `label` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of permissions
-- ----------------------------
INSERT INTO `permissions` VALUES ('1', 'edit_form', 'Edit The Form', '2017-03-30 20:29:37', '2017-03-30 20:29:37');
INSERT INTO `permissions` VALUES ('2', 'see_vip_video', 'See Vip Video', '2017-03-30 23:05:46', '2017-03-30 23:05:46');

-- ----------------------------
-- Table structure for `permission_role`
-- ----------------------------
DROP TABLE IF EXISTS `permission_role`;
CREATE TABLE `permission_role` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_role_id_foreign` (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of permission_role
-- ----------------------------
INSERT INTO `permission_role` VALUES ('2', '1');
INSERT INTO `permission_role` VALUES ('2', '3');
INSERT INTO `permission_role` VALUES ('2', '4');
INSERT INTO `permission_role` VALUES ('2', '5');

-- ----------------------------
-- Table structure for `posts`
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL COMMENT '用户id',
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '标题',
  `body` text COLLATE utf8_unicode_ci NOT NULL COMMENT '内容',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `posts_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of posts
-- ----------------------------
INSERT INTO `posts` VALUES ('1', '1', 'Reiciendis voluptatem non dicta consequatur.', 'Expedita ea magnam aut reiciendis aut et. Doloremque voluptates corporis quisquam in quia cum sed. Reiciendis cumque est accusantium sequi exercitationem maxime ipsum.', '2017-03-30 20:26:28', '2017-03-30 20:26:28');
INSERT INTO `posts` VALUES ('2', '2', 'At perferendis eius eaque provident.', 'Rerum repellendus quia recusandae porro occaecati sed aspernatur. Qui qui delectus voluptas quaerat animi. Qui cum sed nihil et. Vero vitae natus sunt. Asperiores voluptatibus quo et soluta omnis tempore reiciendis.', '2017-03-30 20:26:34', '2017-03-30 20:26:34');

-- ----------------------------
-- Table structure for `roles`
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '角色名称',
  `label` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES ('1', 'admin', 'Admin', '2017-03-30 20:28:04', '2017-03-30 20:28:04');
INSERT INTO `roles` VALUES ('2', 'member', 'Register Member', '2017-03-30 21:38:29', '2017-03-30 21:43:02');
INSERT INTO `roles` VALUES ('3', 'vip_member', 'Vip Member', '2017-03-30 22:57:30', '2017-03-30 22:57:30');
INSERT INTO `roles` VALUES ('4', 'trainer', 'Inside Trainer', '2017-03-30 23:00:06', '2017-03-30 23:00:06');
INSERT INTO `roles` VALUES ('5', 'teacher', 'Teacher', '2017-03-30 23:13:08', '2017-03-30 23:13:08');

-- ----------------------------
-- Table structure for `role_user`
-- ----------------------------
DROP TABLE IF EXISTS `role_user`;
CREATE TABLE `role_user` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `role_user_role_id_foreign` (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of role_user
-- ----------------------------
INSERT INTO `role_user` VALUES ('1', '1');
INSERT INTO `role_user` VALUES ('2', '2');
INSERT INTO `role_user` VALUES ('3', '3');
INSERT INTO `role_user` VALUES ('4', '4');
INSERT INTO `role_user` VALUES ('5', '5');
INSERT INTO `role_user` VALUES ('11', '2');

-- ----------------------------
-- Table structure for `training`
-- ----------------------------
DROP TABLE IF EXISTS `training`;
CREATE TABLE `training` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '线下课程表',
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '课程名称',
  `introduction` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '课程简介',
  `description` text COLLATE utf8_unicode_ci NOT NULL COMMENT '课程描述',
  `objective` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '课程对象',
  `plan_start_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '计划开始时间',
  `plan_end_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '计划结束时间',
  `plan_persons` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '拟定人数',
  `teacher_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '讲师列表',
  `display_order` int(10) unsigned NOT NULL DEFAULT '1' COMMENT '排序1-9999',
  `minutes` int(11) NOT NULL DEFAULT '0' COMMENT '时长',
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '地点',
  `is_recommend` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1' COMMENT '是否推荐1是2否',
  `status` tinyint(4) NOT NULL DEFAULT '2' COMMENT '状态1开启2关闭',
  `published_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '发布时间',
  `created_user` int(11) NOT NULL COMMENT '创建人id',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of training
-- ----------------------------

-- ----------------------------
-- Table structure for `training_user`
-- ----------------------------
DROP TABLE IF EXISTS `training_user`;
CREATE TABLE `training_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '线下报名表',
  `training_id` int(11) NOT NULL COMMENT '线下课程id',
  `user_id` int(11) NOT NULL COMMENT '用户id',
  `is_pass` tinyint(4) NOT NULL DEFAULT '0' COMMENT '审核状态0待审核1通过2未通过',
  `is_attend` tinyint(4) NOT NULL DEFAULT '2' COMMENT '是否出勤1是2否',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `training_user_training_id_index` (`training_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of training_user
-- ----------------------------

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户表',
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '用户名',
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '邮箱',
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '密码',
  `mobilephone` bigint(20) unsigned NOT NULL COMMENT '手机号',
  `telephone` char(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '座机',
  `realname` char(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '真实姓名',
  `qq` bigint(20) unsigned NOT NULL COMMENT 'qq号码',
  `sex` tinyint(4) NOT NULL DEFAULT '0' COMMENT '性别0保密1男2女',
  `reg_ip` char(16) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '注册IP',
  `last_login_ip` char(16) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '最后登录IP',
  `type` tinyint(4) NOT NULL DEFAULT '1' COMMENT '用户类型1学员2讲师3管理员',
  `active` tinyint(4) NOT NULL DEFAULT '1' COMMENT '是否启用1启用2关闭',
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '用户编号',
  `credential_no` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '身份证号码',
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '备注',
  `imgpath` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '头像路径',
  `last_login_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '最后登录时间',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'Admin', 'admin@qq.com', '$2y$10$97nr7XPmzn86C56yhdSVPOAb6O5KCbYxEiVgkyAEqGZQp0MNKhqm.', '18800002268', '0551-66666666', 'Admin', '1023935475', '0', '192.168.1.11', '192.168.1.12', '1', '1', '4FealHjO0v', '340122198908171411', 'kg4TQ3FRDI', '1.png', '2017-03-30 15:20:52', '2017-03-30 15:20:52', '2017-04-12 10:42:34', '8owigcqK5LpwhS62DfVyBcAUYdgVLwEtyUi1lfq8hGEt9l3ieCKXfqxgxm5P');
INSERT INTO `users` VALUES ('2', 'Member', 'member@qq.com', '$2y$10$7P4lO0zyO4R4dRzTeISWqePIxeu3SwqQ7Ha7We/hG3eUTD3HPvPgi', '18800004812', '0551-66666666', 'Member', '1023934044', '0', '192.168.1.11', '192.168.1.12', '2', '1', '7CGlccji55', '340122198908173420', 'JX52qwXTji', '1.png', '2017-03-30 15:22:44', '2017-03-30 15:22:44', '2017-04-10 14:24:48', 'KUmC42q563KRmYbgdGRkwii9w0GhiNsysKAbhthvwFcL1ixqTIapbxYUjV3L');
INSERT INTO `users` VALUES ('3', 'Vip_Member', 'vipmember@qq.com', '$2y$10$F7XIrnSVJkllsjRQp7ZED.RfMO9RrA.FYxGMv5S22t1MK9r/hNZMW', '18800006741', '0551-66666666', 'Vip_Member', '1023935927', '0', '192.168.1.11', '192.168.1.12', '3', '1', 'nYtbbZRNHG', '340122198908178720', 'LxfXHFKuLN', '1.png', '2017-03-30 15:24:54', '2017-03-30 15:24:54', '2017-03-30 15:24:54', '0E0y4Er67q');
INSERT INTO `users` VALUES ('4', 'Trainer', 'trainer@qq.com', '$2y$10$zdeaVJb.SMtDEMaq6pB0Eeag4SUTp7QiP35lEyhOEehvUq0ouYbdy', '18800006603', '0551-66666666', 'Trainer', '1023937417', '0', '192.168.1.11', '192.168.1.12', '4', '1', 'hQCa7Tmkp8', '340122198908177169', 'sDlKLLqyWU', '1.png', '2017-03-30 20:26:28', '2017-03-30 20:26:28', '2017-03-30 20:26:28', 'SqkNGMEU7O');
INSERT INTO `users` VALUES ('5', 'Teacher', 'teacher@qq.com', '$2y$10$lTa1T/mCnrwn03B7sd4Vvu8tI9hik9jzBlZ0LFebeIkrFFSb8FX9G', '18800007400', '0551-66666666', 'Teacher', '1023930299', '0', '192.168.1.11', '192.168.1.12', '5', '1', 'oKi5BFLf98', '340122198908174898', 'LyUxukHKRm', '1.png', '2017-03-30 20:26:34', '2017-03-30 20:26:34', '2017-03-30 20:26:34', '7CuWoZUcWE');
INSERT INTO `users` VALUES ('6', 'test201', 'brycen.wuckert@haley.com', '$2y$10$MMUA8JPxtWZcvcGGfUlWEupMvCDGbohSfqsJ8iThkIIpWt31T0LMu', '18800002925', '0551-66666666', 'Collin Kuphal', '1023931612', '0', '192.168.1.11', '192.168.1.12', '2', '1', 'wpwW30KEkI', '340122198908174928', '7PbNw6CsbU', '1.png', '2017-04-05 19:23:37', '2017-04-05 19:23:37', '2017-04-05 19:23:37', 'KeKaASqJF3');
INSERT INTO `users` VALUES ('7', 'test202', 'mcglynn.judd@boyle.com', '$2y$10$nHCB6WJJLDuNNXIV2k.RQeCM/MtH2rU8.m6b00CLkTPdEur0zw..2', '18800006865', '0551-66666666', 'Ezekiel Ferry', '1023936254', '0', '192.168.1.11', '192.168.1.12', '2', '1', 'KEGgEcGN9T', '340122198908172552', 'EbJeJKtfsk', '1.png', '2017-04-05 19:23:37', '2017-04-05 19:23:37', '2017-04-05 19:23:37', 's628qzkYzi');
INSERT INTO `users` VALUES ('8', 'test203', 'fay.lamont@yahoo.com', '$2y$10$E6jExORVO54fspi2n2nFZu3fQnYrfjQCKdNIEdgFs1HG3ZsIFekie', '18800004415', '0551-66666666', 'Cordia Stanton IV', '1023937722', '0', '192.168.1.11', '192.168.1.12', '2', '1', 'MQX34k4eea', '340122198908179950', 'jXX1ozinZE', '1.png', '2017-04-05 19:29:22', '2017-04-05 19:29:22', '2017-04-05 19:29:22', 'PAxrsvvpaH');
INSERT INTO `users` VALUES ('9', 'test204', 'udare@gmail.com', '$2y$10$5ZFtK24zz7i9rF0oTj05DeqCF.VfwULZ0vdeTI.SSR/J/At0odNb.', '18800001507', '0551-66666666', 'Fidel Kozey', '1023931027', '0', '192.168.1.11', '192.168.1.12', '2', '1', 'L7jD0B6ltl', '340122198908173493', 'RXqzsyAdyb', '1.png', '2017-04-05 19:29:22', '2017-04-05 19:29:22', '2017-04-05 19:29:22', 'b8T3fsT0fy');
INSERT INTO `users` VALUES ('10', 'test205', 'test1@qq.com', '$2y$10$dKEVB5whckiqI26LquMU8.AP5F1mG2vZhMMTxxn0fK18ZEf3Vmqb.', '0', '', '', '0', '0', '', '', '2', '1', '', '340122198908173499', '', '', '0000-00-00 00:00:00', '2017-04-05 20:16:13', '2017-04-05 20:19:17', 'PG4aEsdNCelC8R2jlEhGhelO0yGW2e9XrNxwxomeq9dMMKHDtMDP8iMjW9rZ');
INSERT INTO `users` VALUES ('11', 'test206', 'test100@qq.com', '$2y$10$97nr7XPmzn86C56yhdSVPOAb6O5KCbYxEiVgkyAEqGZQp0MNKhqm.', '0', '', '', '0', '0', '', '', '2', '1', '', '', '', '', '0000-00-00 00:00:00', '2017-04-05 21:20:12', '2017-04-11 18:44:36', 'q1vISU6kICeXHZULsrj3tAqB43Xlk7CAwQK6KGHbgNeeqqQh8lkFD4m9Za3I');
INSERT INTO `users` VALUES ('12', 'test207', 'test002@qq.com', '$2y$10$l9OimKl6LLlzdosFjUwhOOFfwaaJjj7IitMI87dmOeyWHjFOUZnd2', '0', '', '', '0', '0', '', '', '2', '1', '', '', '', '', '0000-00-00 00:00:00', '2017-04-06 11:18:26', '2017-04-06 11:18:44', '3ZVngbfZ1TAMpxp73qwyST50YVhRnQavEaiul4Eet2BGwBkPxogsN3tw5is9');
INSERT INTO `users` VALUES ('13', 'test208', 'test003@qq.com', '$2y$10$nS0hcsFQeZ4coEbsayIZieVHZfnCleRhfExpfxrtYNqi1mVXNMA96', '0', '', '', '0', '0', '', '', '2', '1', '', '', '', '', '0000-00-00 00:00:00', '2017-04-06 11:19:08', '2017-04-06 11:20:33', 'bDBTOrcmGsrmQDEKKYxOHmz1J5trM85Ry5PafUatOV3Qr03mVpgxe2K0lUd0');
INSERT INTO `users` VALUES ('14', 'test210', 'test004@qq.com', '$2y$10$yDhaWA2kC2ESQan7UOgj1uZQx6Cm1pmkT17tCL9xT0ukqu.OQhmbm', '0', '', '', '0', '0', '', '', '2', '1', '', '', '', '', '0000-00-00 00:00:00', '2017-04-06 11:20:49', '2017-04-06 11:26:50', 'WyKLOhMOVuC1cnJ0ubSTYECSu9CHUD9hyLQ42uVErHgnb9ydg81pgvi8dUZB');
INSERT INTO `users` VALUES ('15', 'test211', 'test211@qq.com', '$2y$10$6U6dARMVTZMYjeOW7IKaHu/RatoI8S38OWH4Wy4tc20Lil2vpbC8K', '0', '', '', '0', '0', '', '', '2', '2', 'xsRJDHLwog', '', '', '', '0000-00-00 00:00:00', '2017-04-11 09:56:28', '2017-04-11 10:02:07', 'OPFBl6XXl6nwgZSA4RGWRg3YYFdtd7ZZf3HGKLpcVpEVgd6YzrMv3OGV4WjK');
INSERT INTO `users` VALUES ('16', 'test212', 'test212@qq.com', '$2y$10$YK.IrTm9cFscYpO9Ho188uyDOQXI/mwDXGad0mPPh9.bJqmuVpdkO', '0', '', '', '0', '0', '', '', '2', '2', 'PqjEjEg03D', '', '', '', '0000-00-00 00:00:00', '2017-04-11 10:02:35', '2017-04-11 10:02:35', null);
INSERT INTO `users` VALUES ('17', 'test213', 'test213@qq.com', '$2y$10$yFMODeZA8VPlTPQGF92X3uxeoI1QpNqY.1vHLvFquY1YWzGF.RLVq', '0', '', '', '0', '0', '', '', '2', '2', 'uu0AJ3K32n', '', '', '', '0000-00-00 00:00:00', '2017-04-11 10:06:09', '2017-04-11 10:06:09', null);
INSERT INTO `users` VALUES ('32', '1023939153', '1023939153@qq.com', '$2y$10$eK2b7VIU5EqOSsKcjLTonOXJZCAf5zO1AdhSfB8mHdxRcG4fFZNcS', '0', '', '', '0', '0', '', '', '2', '2', '20170411195932SCXAGWN93j4uhr02pcF5zvjda9Ner33ZO1LSqgQr', '', '', '', '0000-00-00 00:00:00', '2017-04-11 19:59:32', '2017-04-11 19:59:32', null);
INSERT INTO `users` VALUES ('25', '443062061', '443062061@qq.com', '$2y$10$rlTMdvHpBFcWvnG0Ku62gO8deOSBhV4WrQMOft7v9rTUvLTqq3REm', '0', '', '', '0', '0', '', '', '2', '1', '1DlJNy1pHf4v4imwUzBAG4JH9yRb5XKk7y1Dt4cz', '', '', '', '0000-00-00 00:00:00', '2017-04-11 17:34:19', '2017-04-11 18:15:37', 'OXhPT5YtEWhQVxtHEmPS4HqHOj4AnLvO8bZrEFT2DEzAYSKv1SIgpdsoXB27');
INSERT INTO `users` VALUES ('29', '1023939151', '1023939151@qq.com', '$2y$10$EgRiFoiyZ062SsjpBAiebO1Q/PZSUFC0qpn8xCRc25.3aJxK.r9RO', '0', '', '', '0', '0', '', '', '2', '1', '20170411192026ueZ1W1gVPye2dzVMAgsBo6tAn0eEyZzn6xuBwH6e', '', '', '', '0000-00-00 00:00:00', '2017-04-11 19:20:26', '2017-04-11 19:20:57', null);
INSERT INTO `users` VALUES ('31', '1023939152', '1023939152@qq.com', '$2y$10$PXT5GXE/bJLbpQiXMD1gNOx4drwmafk3jPjN6L3z/2E34shzCF2pK', '0', '', '', '0', '0', '', '', '2', '2', '20170411195547LRvSuontHZfVm2wjK6SYK972b3JIFckdfYfFK5ya', '', '', '', '0000-00-00 00:00:00', '2017-04-11 19:55:47', '2017-04-11 19:55:47', null);
INSERT INTO `users` VALUES ('33', '1023939154', '1023939154@qq.com', '$2y$10$weLwI45x1ScBPgpMdNmntOPpYNNVaq/WZiaV9GMYzAK7oayZ1LqcG', '0', '', '', '0', '0', '', '', '2', '2', '201704112009184S1mXgkhEg1CQTmgUPUva6omVaPH2JvbOi7EEbkb', '', '', '', '0000-00-00 00:00:00', '2017-04-11 20:09:18', '2017-04-11 20:09:18', null);
INSERT INTO `users` VALUES ('34', '1023939155', '1023939155@qq.com', '$2y$10$ha2XeHuBWOgpvcwz//9niey6rwTr0Mdq8dhGVA9eFJcg4r5m7vSJW', '0', '', '', '0', '0', '', '', '2', '1', '20170411203355IphGTGzYcLru4Ki902LJZMWLGyRApRH0Uz965xwh', '', '', '', '0000-00-00 00:00:00', '2017-04-11 20:33:55', '2017-04-12 09:42:10', null);
INSERT INTO `users` VALUES ('35', '1023939159', '1023939159@qq.com', '$2y$10$dNwl0Ce9FlsdY7ctMpFv5.yS8fI42G8L5e/kOsqeVAdXrkywz0n26', '0', '', '', '0', '0', '', '', '2', '1', '201704141235086rNHPehaieLozhmGIDErNuMjJUvssRI0GStwQvf8', '', '', '', '0000-00-00 00:00:00', '2017-04-14 12:35:08', '2017-04-14 14:21:07', 'SezHN6xaRWBTuphK4vCyoMLVIsCqGT1YzEQnrjgDMh6O7xpWgfWPdZ2ezbuw');

-- ----------------------------
-- Table structure for `user_goods`
-- ----------------------------
DROP TABLE IF EXISTS `user_goods`;
CREATE TABLE `user_goods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '已付款订单，判断用户权限（持久化存储）',
  `order_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '订单号',
  `user_id` int(11) NOT NULL COMMENT '用户id',
  `goods_id` int(11) NOT NULL COMMENT '商品id',
  `goods_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '商品名称',
  `goods_months` int(11) NOT NULL DEFAULT '0' COMMENT '商品可用月份',
  `goods_price` decimal(8,2) NOT NULL DEFAULT '0.00' COMMENT '商品价格',
  `start_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '开始时间,从付款成功开始',
  `expire_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '到期时间',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `user_goods_user_id_index` (`user_id`),
  KEY `user_goods_goods_id_index` (`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user_goods
-- ----------------------------
INSERT INTO `user_goods` VALUES ('1', '1', '12', '1', '1个月会员', '1', '30.00', '2017-04-10 14:36:14', '2017-05-10 14:36:23', '2017-04-10 14:36:35', '2017-04-10 14:36:41');
INSERT INTO `user_goods` VALUES ('2', '2', '12', '1', '1 month user', '1', '30.00', '2017-04-10 14:47:25', '2017-05-01 14:47:44', '2017-04-10 14:47:56', '2017-04-10 14:47:56');

-- ----------------------------
-- Table structure for `user_integral`
-- ----------------------------
DROP TABLE IF EXISTS `user_integral`;
CREATE TABLE `user_integral` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户积分表',
  `user_id` int(11) NOT NULL COMMENT '用户id',
  `integral` int(11) NOT NULL DEFAULT '0' COMMENT '总积分',
  `desctiption` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '备注',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user_integral
-- ----------------------------

-- ----------------------------
-- Table structure for `user_integral_detail`
-- ----------------------------
DROP TABLE IF EXISTS `user_integral_detail`;
CREATE TABLE `user_integral_detail` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户积分明细表',
  `user_integral_id` int(11) NOT NULL COMMENT '积分表id',
  `integral_status` tinyint(4) NOT NULL COMMENT '积分操作1添加积分2消费积分',
  `integral_value` int(11) NOT NULL DEFAULT '0' COMMENT '积分',
  `integral_content` smallint(6) NOT NULL COMMENT '积分内容1登录积分2看视频积分3购买积分',
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '备注',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `user_integral_detail_user_integral_id_index` (`user_integral_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user_integral_detail
-- ----------------------------

-- ----------------------------
-- Table structure for `user_login`
-- ----------------------------
DROP TABLE IF EXISTS `user_login`;
CREATE TABLE `user_login` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户登录表',
  `user_id` int(11) NOT NULL COMMENT '用户id',
  `login_ip` char(16) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '登录ip',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `user_login_user_id_foreign` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user_login
-- ----------------------------
