/*
// +----------------------------------------------------------------------
// | YFCMF [ WE CAN DO IT MORE SIMPLE]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2018 http://yfcmf.net All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: rainfer <rainfer520@qq.com>
// +----------------------------------------------------------------------
 */
DROP TABLE IF EXISTS `yf_menu`;
CREATE TABLE `yf_menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(36) NOT NULL COMMENT '标题',
  `enname` varchar(50) DEFAULT '' COMMENT '英文标题',
  `pid` int(10) NOT NULL DEFAULT '0' COMMENT '父级id',
  `url` varchar(100) NOT NULL DEFAULT '' COMMENT '外链或单页地址或列表地址',
  `target` varchar(20) DEFAULT '_self' COMMENT '打开方式',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0=隐藏 1=显示',
  `sort` int(4) NOT NULL DEFAULT '0' COMMENT '排序',
  `seo_title` varchar(255) DEFAULT '' COMMENT 'seo标题',
  `seo_kwd` varchar(255) DEFAULT '' COMMENT 'seo关键字',
  `seo_dec` varchar(255) DEFAULT '' COMMENT 'seo描述',
  `lang` varchar(10) NOT NULL DEFAULT 'zh-cn' COMMENT '语言',
  PRIMARY KEY (`id`),
  KEY `name` (`name`) USING BTREE,
  KEY `lang` (`lang`) USING BTREE,
  KEY `status` (`status`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='前台导航菜单';