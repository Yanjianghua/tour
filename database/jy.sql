--
-- 菜单功能 `jy_menu_url`
--

DROP TABLE IF EXISTS `jy_menu_url`;
CREATE TABLE IF NOT EXISTS `jy_menu_url` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(50) NOT NULL,
  `menu_controller` varchar(255) NOT NULL,
  `menu_method` varchar(255) NOT NULL,
  `menu_note` varchar(255) DEFAULT NULL COMMENT '描述',
  `menu_hide` int(3) DEFAULT NULL COMMENT '是否显示',
  `module_icon` varchar(32) DEFAULT 'icon-th' COMMENT '菜单模块图标',
  `father_menu` int(11) NOT NULL DEFAULT '0' COMMENT '上级菜单',
  `menu_built` int(11) NOT NULL DEFAULT '0' COMMENT '是否为内置菜单',
  `status` int(11) NOT NULL DEFAULT '1' COMMENT '启用、禁用',
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='菜单' AUTO_INCREMENT=1 ;

--
-- 操作日志表 `jy_sys_log`
--

DROP TABLE IF EXISTS `jy_sys_log`;
CREATE TABLE IF NOT EXISTS `jy_sys_log` (
  `op_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(32) NOT NULL,
  `action` varchar(255) NOT NULL,
  `class_name` varchar(255) NOT NULL COMMENT '操作了那个类的对象',
  `class_obj` varchar(32) NOT NULL COMMENT '操作的对象是谁，可能为对象的ID',
  `result` text NOT NULL COMMENT '操作的结果',
  `op_time` int(11) NOT NULL,
  PRIMARY KEY (`op_id`),
  KEY `op_time` (`op_time`),
  KEY `class_name` (`class_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='操作日志表' AUTO_INCREMENT=1 ;

--
-- 后台用户 `jy_user`
--

DROP TABLE IF EXISTS `jy_user`;
CREATE TABLE IF NOT EXISTS `jy_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `real_name` varchar(255) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_desc` varchar(255) DEFAULT NULL,
  `login_time` int(11) DEFAULT NULL COMMENT '登陆时间',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `login_ip` varchar(32) DEFAULT NULL,
  `user_group` int(11) NOT NULL COMMENT '账户组ID',
  `template` varchar(32) NOT NULL DEFAULT 'default' COMMENT '主题模版',
  `shortcuts` text COMMENT '快捷菜单',
  `show_quicknote` int(11) NOT NULL DEFAULT '1' COMMENT '是否显示quicknote',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name` (`user_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='后台用户' AUTO_INCREMENT=1 ;


--
-- 账户组 `jy_user_group`
--

DROP TABLE IF EXISTS `jy_user_group`;
CREATE TABLE IF NOT EXISTS `jy_user_group` (
  `group_id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(32) DEFAULT NULL,
  `group_role` text CHARACTER SET utf8 COLLATE utf8_unicode_ci COMMENT '初始权限1,5,17,18,22,23,24,25',
  `owner_id` int(11) DEFAULT NULL COMMENT '创建人ID',
  `group_desc` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(3) DEFAULT '0',
  PRIMARY KEY (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='账户组' AUTO_INCREMENT=1 ;

--
-- 周边游表 `jy_around_tour`
--

DROP TABLE IF EXISTS `jy_around_tour`;
CREATE TABLE IF NOT EXISTS `jy_around_tour` (
  `around_id` int(11) NOT NULL AUTO_INCREMENT,
  `around_name` varchar(200) DEFAULT NULL,
  `around_start` int(3) DEFAULT '0' COMMENT '起点、出发地点',
  `around_end` int(3) DEFAULT '0' COMMENT '终点、目的地',
  `around_day` int(3) DEFAULT '0' COMMENT '出游天数',
  `around_start_time` int(3) DEFAULT '0' COMMENT '出发时间',
  `around_address` varchar(200) DEFAULT '' COMMENT '商家地址',
  `around_spot` varchar(200) DEFAULT '' COMMENT '景点',
  `around_sub_line` int(3) DEFAULT '0' COMMENT '主题线路',
  `around_tel` varchar(20) DEFAULT '' COMMENT '商家电话',
  `around_pic1` varchar(100) DEFAULT '' COMMENT '景点图片1',
  `around_pic2` varchar(100) DEFAULT '' COMMENT '景点图片2',
  `around_pic3` varchar(100) DEFAULT '' COMMENT '景点图片3',
  `around_pic4` varchar(100) DEFAULT '' COMMENT '景点图片4',
  `around_wap_pic1` varchar(100) DEFAULT '' COMMENT 'WAP图片1',
  `around_wap_pic2` varchar(100) DEFAULT '' COMMENT 'WAP图片2',
  `around_cost_price` varchar(100) DEFAULT '' COMMENT '原价',
  `around_market_price` varchar(100) DEFAULT '' COMMENT '现价',
  `around_details` text NOT NULL COMMENT '产品详情',
  `around_explain` text NOT NULL COMMENT '费用说明',
  `around_time` int(11) NOT NULL,
  `status` int(3) DEFAULT '0',
  PRIMARY KEY (`around_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='周边游表' AUTO_INCREMENT=1 ;

--
-- 国内游表 `jy_inbound_tour`
--

DROP TABLE IF EXISTS `jy_inbound_tour`;
CREATE TABLE IF NOT EXISTS `jy_inbound_tour` (
  `inbound_id` int(11) NOT NULL AUTO_INCREMENT,
  `inbound_name` varchar(200) DEFAULT NULL,
  `inbound_start` int(3) DEFAULT '0' COMMENT '起点、出发地点',
  `inbound_end` int(3) DEFAULT '0' COMMENT '终点、目的地',
  `inbound_day` int(3) DEFAULT '0' COMMENT '出游天数',
  `inbound_start_time` int(3) DEFAULT '0' COMMENT '出发时间',
  `inbound_address` varchar(200) DEFAULT '' COMMENT '商家地址',
  `inbound_spot` varchar(200) DEFAULT '' COMMENT '景点',
  `inbound_sub_line` int(3) DEFAULT '0' COMMENT '主题线路',
  `inbound_tel` varchar(20) DEFAULT '' COMMENT '商家电话',
  `inbound_pic1` varchar(100) DEFAULT '' COMMENT '景点图片1',
  `inbound_pic2` varchar(100) DEFAULT '' COMMENT '景点图片2',
  `inbound_pic3` varchar(100) DEFAULT '' COMMENT '景点图片3',
  `inbound_pic4` varchar(100) DEFAULT '' COMMENT '景点图片4',
  `inbound_wap_pic1` varchar(100) DEFAULT '' COMMENT 'WAP图片1',
  `inbound_wap_pic2` varchar(100) DEFAULT '' COMMENT 'WAP图片2',
  `inbound_cost_price` varchar(100) DEFAULT '' COMMENT '原价',
  `inbound_market_price` varchar(100) DEFAULT '' COMMENT '现价',
  `inbound_details` text NOT NULL COMMENT '产品详情',
  `inbound_explain` text NOT NULL COMMENT '费用说明',
  `inbound_time` int(11) NOT NULL,
  `status` int(3) DEFAULT '0',
  PRIMARY KEY (`inbound_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='国内游表' AUTO_INCREMENT=1 ;

--
-- 出境游表 `jy_outbound_tour`
--

DROP TABLE IF EXISTS `jy_outbound_tour`;
CREATE TABLE IF NOT EXISTS `jy_outbound_tour` (
  `outbound_id` int(11) NOT NULL AUTO_INCREMENT,
  `outbound_name` varchar(200) DEFAULT NULL,
  `outbound_start` int(3) DEFAULT '0' COMMENT '起点、出发地点',
  `outbound_end` int(3) DEFAULT '0' COMMENT '终点、目的地',
  `outbound_day` int(3) DEFAULT '0' COMMENT '出游天数',
  `outbound_start_time` int(3) DEFAULT '0' COMMENT '出发时间',
  `outbound_address` varchar(200) DEFAULT '' COMMENT '商家地址',
  `outbound_spot` varchar(200) DEFAULT '' COMMENT '景点',
  `outbound_sub_line` int(3) DEFAULT '0' COMMENT '主题线路',
  `outbound_tel` varchar(20) DEFAULT '' COMMENT '商家电话',
  `outbound_pic1` varchar(100) DEFAULT '' COMMENT '景点图片1',
  `outbound_pic2` varchar(100) DEFAULT '' COMMENT '景点图片2',
  `outbound_pic3` varchar(100) DEFAULT '' COMMENT '景点图片3',
  `outbound_pic4` varchar(100) DEFAULT '' COMMENT '景点图片4',
  `outbound_wap_pic1` varchar(100) DEFAULT '' COMMENT 'WAP图片1',
  `outbound_wap_pic2` varchar(100) DEFAULT '' COMMENT 'WAP图片2',
  `outbound_cost_price` varchar(100) DEFAULT '' COMMENT '原价',
  `outbound_market_price` varchar(100) DEFAULT '' COMMENT '现价',
  `outbound_details` text NOT NULL COMMENT '产品详情',
  `outbound_explain` text NOT NULL COMMENT '费用说明',
  `outbound_time` int(11) NOT NULL,
  `status` int(3) DEFAULT '0',
  PRIMARY KEY (`outbound_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='出境游表' AUTO_INCREMENT=1 ;

--
-- 本地游玩表 `jy_local_tour`
--

DROP TABLE IF EXISTS `jy_local_tour`;
CREATE TABLE IF NOT EXISTS `jy_local_tour` (
  `local_id` int(11) NOT NULL AUTO_INCREMENT,
  `local_name` varchar(200) DEFAULT NULL,
  `local_start` int(3) DEFAULT '0' COMMENT '起点、出发地点',
  `local_end` int(3) DEFAULT '0' COMMENT '终点、目的地',
  `local_day` int(3) DEFAULT '0' COMMENT '出游天数',
  `local_start_time` int(3) DEFAULT '0' COMMENT '出发时间',
  `local_address` varchar(200) DEFAULT '' COMMENT '商家地址',
  `local_sub_line` int(3) DEFAULT '0' COMMENT '主题线路',
  `local_spot` varchar(200) DEFAULT '' COMMENT '景点',
  `local_tel` varchar(20) DEFAULT '' COMMENT '商家电话',
  `local_pic1` varchar(100) DEFAULT '' COMMENT '景点图片1',
  `local_pic2` varchar(100) DEFAULT '' COMMENT '景点图片2',
  `local_pic3` varchar(100) DEFAULT '' COMMENT '景点图片3',
  `local_pic4` varchar(100) DEFAULT '' COMMENT '景点图片4',
  `local_wap_pic1` varchar(100) DEFAULT '' COMMENT 'WAP图片1',
  `local_wap_pic2` varchar(100) DEFAULT '' COMMENT 'WAP图片2',
  `local_cost_price` varchar(100) DEFAULT '' COMMENT '原价',
  `local_market_price` varchar(100) DEFAULT '' COMMENT '现价',
  `local_details` text NOT NULL COMMENT '产品详情',
  `local_explain` text NOT NULL COMMENT '费用说明',
  `local_time` int(11) NOT NULL,
  `status` int(3) DEFAULT '0',
  PRIMARY KEY (`local_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='本地游玩表' AUTO_INCREMENT=1 ;

--
-- 景点门票表 `jy_ticket_tour`
--

DROP TABLE IF EXISTS `jy_ticket_tour`;
CREATE TABLE IF NOT EXISTS `jy_ticket_tour` (
  `ticket_id` int(11) NOT NULL AUTO_INCREMENT,
  `ticket_name` varchar(200) DEFAULT NULL,
  `ticket_start` int(3) DEFAULT '0' COMMENT '起点、出发地点',
  `ticket_end` int(3) DEFAULT '0' COMMENT '终点、目的地',
  `ticket_day` int(3) DEFAULT '0' COMMENT '出游天数',
  `ticket_start_time` int(3) DEFAULT '0' COMMENT '出发时间',
  `ticket_address` varchar(200) DEFAULT '' COMMENT '商家地址',
  `ticket_spot` varchar(200) DEFAULT '' COMMENT '景点',
  `ticket_sub_line` int(3) DEFAULT '0' COMMENT '主题线路',
  `ticket_tel` varchar(20) DEFAULT '' COMMENT '商家电话',
  `ticket_pic1` varchar(100) DEFAULT '' COMMENT '景点图片1',
  `ticket_pic2` varchar(100) DEFAULT '' COMMENT '景点图片2',
  `ticket_pic3` varchar(100) DEFAULT '' COMMENT '景点图片3',
  `ticket_pic4` varchar(100) DEFAULT '' COMMENT '景点图片4',
  `ticket_wap_pic1` varchar(100) DEFAULT '' COMMENT 'WAP图片1',
  `ticket_wap_pic2` varchar(100) DEFAULT '' COMMENT 'WAP图片2',
  `ticket_cost_price` varchar(100) DEFAULT '' COMMENT '原价',
  `ticket_market_price` varchar(100) DEFAULT '' COMMENT '现价',
  `ticket_details` text NOT NULL COMMENT '产品详情',
  `ticket_explain` text NOT NULL COMMENT '费用说明',
  `ticket_time` int(11) NOT NULL,
  `status` int(3) DEFAULT '0',
  PRIMARY KEY (`ticket_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='景点门票表' AUTO_INCREMENT=1 ;

--
-- 主题游表 `jy_theme_tour`
--

DROP TABLE IF EXISTS `jy_theme_tour`;
CREATE TABLE IF NOT EXISTS `jy_theme_tour` (
  `theme_id` int(11) NOT NULL AUTO_INCREMENT,
  `theme_name` varchar(200) DEFAULT NULL,
  `theme_start` int(3) DEFAULT '0' COMMENT '起点、出发地点',
  `theme_end` int(3) DEFAULT '0' COMMENT '终点、目的地',
  `theme_day` int(3) DEFAULT '0' COMMENT '出游天数',
  `theme_start_time` int(3) DEFAULT '0' COMMENT '出发时间',
  `theme_address` varchar(200) DEFAULT '' COMMENT '商家地址',
  `theme_sub_line` int(3) DEFAULT '0' COMMENT '主题线路',
  `theme_spot` varchar(200) DEFAULT '' COMMENT '景点',
  `theme_tel` varchar(20) DEFAULT '' COMMENT '商家电话',
  `theme_pic1` varchar(100) DEFAULT '' COMMENT '景点图片1',
  `theme_pic2` varchar(100) DEFAULT '' COMMENT '景点图片2',
  `theme_pic3` varchar(100) DEFAULT '' COMMENT '景点图片3',
  `theme_pic4` varchar(100) DEFAULT '' COMMENT '景点图片4',
  `theme_wap_pic1` varchar(100) DEFAULT '' COMMENT 'WAP图片1',
  `theme_wap_pic2` varchar(100) DEFAULT '' COMMENT 'WAP图片2',
  `theme_cost_price` varchar(100) DEFAULT '' COMMENT '原价',
  `theme_market_price` varchar(100) DEFAULT '' COMMENT '现价',
  `theme_details` text NOT NULL COMMENT '产品详情',
  `theme_explain` text NOT NULL COMMENT '费用说明',
  `theme_time` int(11) NOT NULL,
  `status` int(3) DEFAULT '0',
  PRIMARY KEY (`theme_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='主题游表' AUTO_INCREMENT=1 ;


--
-- 标签表 `jy_system`
--

DROP TABLE IF EXISTS `jy_system`;
CREATE TABLE IF NOT EXISTS `jy_system` (
  `system_id` int(11) NOT NULL AUTO_INCREMENT,
  `system_class` int(3) DEFAULT '0',
  `system_type` int(3) DEFAULT '0' COMMENT '比如：周边游等。',
  `system_name` varchar(32) DEFAULT NULL,
  `system_hide` int(3) NOT NULL COMMENT '是否在首页轮转显示',
  `system_note` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `system_time` int(11) NOT NULL,
  `status` int(3) DEFAULT '0',
  PRIMARY KEY (`system_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='标签表' AUTO_INCREMENT=1 ;


--
-- 图片广告位表 `jy_pic_ad`
--

DROP TABLE IF EXISTS `jy_pic_ad`;
CREATE TABLE IF NOT EXISTS `jy_pic_ad` (
  `ad_id` int(11) NOT NULL AUTO_INCREMENT,
  `ad_title` varchar(50) DEFAULT NULL COMMENT '标题',
  `ad_position` varchar(50) DEFAULT NULL COMMENT '位置',
  `ad_hide` int(3) NOT NULL COMMENT '是否在首页轮转显示',
  `ad_pic` varchar(255) NOT NULL COMMENT '图片',
  `ad_url` varchar(255) NOT NULL COMMENT '跳转链接',
  `ad_time` int(11) NOT NULL,
  `status` int(3) DEFAULT '0',
  PRIMARY KEY (`ad_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='图片广告位表' AUTO_INCREMENT=1 ;


--
-- 客户预约表 `jy_order`
--

DROP TABLE IF EXISTS `jy_order`;
CREATE TABLE IF NOT EXISTS `jy_order` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_name` varchar(50) DEFAULT NULL COMMENT '预约名称',
  `order_class_tour` varchar(50) DEFAULT NULL COMMENT '预约旅游类型',
  `order_correlation` int(11) NOT NULL COMMENT '预约ID',
  `order_username` varchar(50) DEFAULT NULL COMMENT '客户名称',
  `order_tel` varchar(11) NOT NULL COMMENT '客户手机号',
  `order_start_time` int(11) NOT NULL COMMENT '客户出行时间',
  `order_adult` int(3) NOT NULL COMMENT '成人数量',
  `order_children` int(3) NOT NULL COMMENT '儿童数量',
  `order_time` int(11) NOT NULL,
  `status` int(3) DEFAULT '0',
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='图片广告位表' AUTO_INCREMENT=1 ;



