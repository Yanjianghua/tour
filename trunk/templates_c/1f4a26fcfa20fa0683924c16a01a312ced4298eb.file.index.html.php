<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-04-22 23:15:10
         compiled from "/Library/WebServer/Documents/blog/yunguan/trunk/application/views/default/layout/index.html" */ ?>
<?php /*%%SmartyHeaderCode:188341712558bcd677b4d976-21314695%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f4a26fcfa20fa0683924c16a01a312ced4298eb' => 
    array (
      0 => '/Library/WebServer/Documents/blog/yunguan/trunk/application/views/default/layout/index.html',
      1 => 1492827436,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '188341712558bcd677b4d976-21314695',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58bcd677d069d4_45733124',
  'variables' => 
  array (
    'system_around' => 0,
    'value' => 0,
    'system_inbound' => 0,
    'system_outbound' => 0,
    'system_local' => 0,
    'system_ticket' => 0,
    'system_theme' => 0,
    'ad_4' => 0,
    'key' => 0,
    'around_t' => 0,
    'inbound_t' => 0,
    'outbound_t' => 0,
    'local_t' => 0,
    'ticket_t' => 0,
    'local' => 0,
    'around' => 0,
    'inbound' => 0,
    'outbound' => 0,
    'system' => 0,
    'sysytem_key' => 0,
    'ticket' => 0,
    'system_value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bcd677d069d4_45733124')) {function content_58bcd677d069d4_45733124($_smarty_tpl) {?><!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<html>
<head>
    <meta charset="utf-8" />
    <title>家园旅游</title>
    <link rel="stylesheet" href="/statics/pc/css/index_all.css" />
    <?php echo '<script'; ?>
 src="/statics/pc/js/jquery-1.8.3.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/statics/pc/laydate/laydate.js" ><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/statics/pc/js/from1.js" ><?php echo '</script'; ?>
>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ('../common/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--导航与广告-->
<div id="scrollpicdiv" class="jy-pos-r" style="height: 510px;">
    <div class="jy-w-1 jy-m-0 jy-pos-r nav-list" style="z-index:2;">
        <div class="jy-p-1 jy-bg-3 jy-w-2" style="position: absolute;top: 15px;">
            <div class="nav-1 jy-border-b-3 jy-pb-1">
                <a href="/around"><h3 class="jy-pb-1">周边游</h3></a>
                <?php if (!empty($_smarty_tpl->tpl_vars['system_around']->value)) {?>
                <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['system_around']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                <a href="/around?around_end=<?php echo $_smarty_tpl->tpl_vars['value']->value['system_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['system_name'];?>
</a>
                <?php } ?>
                <?php }?>
            </div>
            <div class="nav-1 jy-border-b-3 jy-m-1 jy-pb-1">
                <a href="/inbound"><h3 class="jy-pb-1">国内游</h3></a>
                <?php if (!empty($_smarty_tpl->tpl_vars['system_inbound']->value)) {?>
                <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['system_inbound']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                <a href="/around?around_end=<?php echo $_smarty_tpl->tpl_vars['value']->value['system_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['system_name'];?>
</a>
                <?php } ?>
                <?php }?>
            </div>
            <div class="nav-1 jy-border-b-3 jy-m-1 jy-pb-1">
                <a href="/outbound"><h3 class="jy-pb-1">出境游</h3></a>
                <?php if (!empty($_smarty_tpl->tpl_vars['system_outbound']->value)) {?>
                <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['system_outbound']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                <a href="/around?around_end=<?php echo $_smarty_tpl->tpl_vars['value']->value['system_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['system_name'];?>
</a>
                <?php } ?>
                <?php }?>
            </div>
            <div class="nav-1 jy-border-b-3 jy-m-1 jy-pb-1">
                <a href="/local"><h3 class="jy-pb-1">本地游玩</h3></a>
                <?php if (!empty($_smarty_tpl->tpl_vars['system_local']->value)) {?>
                <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['system_local']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                <a href="/around?around_end=<?php echo $_smarty_tpl->tpl_vars['value']->value['system_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['system_name'];?>
</a>
                <?php } ?>
                <?php }?>
            </div>
            <div class="nav-1 jy-border-b-3 jy-m-1 jy-pb-1">
                <a href="/ticket"><h3 class="jy-pb-1">景点门票</h3></a>
                <?php if (!empty($_smarty_tpl->tpl_vars['system_ticket']->value)) {?>
                <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['system_ticket']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                <a href="/around?around_end=<?php echo $_smarty_tpl->tpl_vars['value']->value['system_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['system_name'];?>
</a>
                <?php } ?>
                <?php }?>
            </div>
            <div class="nav-1 jy-m-1 jy-pb-1">
                <a href="/theme"><h3 class="jy-pb-1">主题游</h3></a>
                <?php if (!empty($_smarty_tpl->tpl_vars['system_theme']->value)) {?>
                <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['system_theme']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                <a href="/around?around_end=<?php echo $_smarty_tpl->tpl_vars['value']->value['system_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['system_name'];?>
</a>
                <?php } ?>
                <?php }?>
            </div>
        </div>
    </div>
    <!--焦点图-->
    <div class="scrollbox">
        <div id="picbox" class="picbox">
            <ul>
                <?php if (!empty($_smarty_tpl->tpl_vars['ad_4']->value)) {?>
                <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ad_4']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                <?php if ($_smarty_tpl->tpl_vars['key']->value==0) {?>
                    <li class="on2"><a href="<?php echo $_smarty_tpl->tpl_vars['value']->value['ad_url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['value']->value['ad_pic'];?>
" /></a></li>
                <?php } else { ?>
                    <li ><a href="<?php echo $_smarty_tpl->tpl_vars['value']->value['ad_url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['value']->value['ad_pic'];?>
" /></a></li>
                <?php }?>
                <?php } ?>
                <?php }?>
            </ul>
        </div>
        <div class="btndiv jy-pos-a" id="numdiv">
            <ul>
                <li class="on3">1</li>
                <li>2</li>
                <li>3</li>
                <li>4</li>
            </ul>
        </div>
    </div>
</div>
<?php echo '<script'; ?>
 type="text/javascript" src="/statics/pc/js/scroll.js" ><?php echo '</script'; ?>
>
<!--主体-->
<div id="main">
    <div class="jy-w-1 jy-m-3 clears">
        <div class="jy-f-right tx-w-2">
            <div class="tg-div jy-p-2 jy-bg-7">
                <h3 class="jy-h3-0 jy-cor-0 jy-ds-inl">团购惠</h3>
                <div class="a-divbox-1">
                    <?php if (!empty($_smarty_tpl->tpl_vars['around_t']->value)) {?>
                    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['around_t']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                    <a href="/around/details?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['around_id'];?>
">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['value']->value['around_pic1'];?>
" width="255" height="150" />
                        <span></span>
                        <h3><?php echo cut_str($_smarty_tpl->tpl_vars['value']->value['around_name'],15);?>
</h3>
                    </a>
                    <?php } ?>
                    <?php }?>
                    <?php if (!empty($_smarty_tpl->tpl_vars['inbound_t']->value)) {?>
                    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['inbound_t']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                    <a href="/inbound/details?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['inbound_id'];?>
">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['value']->value['inbound_pic1'];?>
" width="255" height="150" />
                        <span></span>
                        <h3><?php echo cut_str($_smarty_tpl->tpl_vars['value']->value['inbound_name'],15);?>
</h3>
                    </a>
                    <?php } ?>
                    <?php }?>
                    <?php if (!empty($_smarty_tpl->tpl_vars['outbound_t']->value)) {?>
                    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['outbound_t']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                    <a href="/outbound/details?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['outbound_id'];?>
">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['value']->value['outbound_pic1'];?>
" width="255" height="150" />
                        <span></span>
                        <h3><?php echo cut_str($_smarty_tpl->tpl_vars['value']->value['outbound_name'],15);?>
</h3>
                    </a>
                    <?php } ?>
                    <?php }?>
                    <?php if (!empty($_smarty_tpl->tpl_vars['local_t']->value)) {?>
                    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['local_t']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                    <a href="/local/details?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['local_id'];?>
">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['value']->value['local_pic1'];?>
" width="255" height="150" />
                        <span></span>
                        <h3><?php echo cut_str($_smarty_tpl->tpl_vars['value']->value['local_name'],15);?>
</h3>
                    </a>
                    <?php } ?>
                    <?php }?>
                    <?php if (!empty($_smarty_tpl->tpl_vars['ticket_t']->value)) {?>
                    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ticket_t']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                    <a href="/ticket/details?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['ticket_id'];?>
">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['value']->value['ticket_pic1'];?>
" width="255" height="150" />
                        <span></span>
                        <h3><?php echo cut_str($_smarty_tpl->tpl_vars['value']->value['ticket_name'],15);?>
</h3>
                    </a>
                    <?php } ?>
                    <?php }?>
                </div>
            </div>
            <!--本地游玩-->
            <div class="tg-div jy-p-2 jy-bg-7 jy-m-2 ">
                <h3 class="jy-h3-0 jy-cor-1 jy-ds-inl">本地游玩</h3>
                <div class="a-divbox-2">
                    <?php if (!empty($_smarty_tpl->tpl_vars['local']->value)) {?>
                    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['local']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                    <a href="/local/details?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['local_id'];?>
">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['value']->value['local_pic1'];?>
" width="255" height="150" />
                        <dl>
                            <dt><?php echo cut_str($_smarty_tpl->tpl_vars['value']->value['local_name'],20);?>
</dt>
                            <dt class="line-t">￥95</dt>
                            <dd>￥85</dd>
                        </dl>
                    </a>
                    <?php } ?>
                    <?php }?>
                </div>
            </div>
        </div>
        <div class="tx-w-1 jy-f-left">
            <h3 class="jy-h3-0 jy-cor-0 jy-ds-inl">推荐路线</h3>
            <a href="/around" class="jy-f-right">更多</a>
            <div class="jy-ul-1" id="listdivbox">
                <ul>
                    <?php if (!empty($_smarty_tpl->tpl_vars['around']->value)) {?>
                    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['around']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                    <li>
                        <a href="/around/details?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['around_id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['value']->value['around_pic1'];?>
" width="210" height="140" /></a>
									<span>
										<h3><a href="/around/details?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['around_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['around_name'];?>
</a></h3>
										<dl>
                                            <dt class="tx-ico-1">酒店：<?php echo $_smarty_tpl->tpl_vars['value']->value['around_address'];?>
 </dt>
                                            <dt class="tx-ico-2">景点：<?php echo $_smarty_tpl->tpl_vars['value']->value['around_spot'];?>
 </dt>
                                        </dl>
									</span>
                        <label>
                            <dl>
                                <dt><em>￥</em><?php echo $_smarty_tpl->tpl_vars['value']->value['around_market_price'];?>
<i>起</i></dt>
                                <dd>原价:￥<?php echo $_smarty_tpl->tpl_vars['value']->value['around_cost_price'];?>
/人</dd>
                            </dl>
                            <a href="/around/details?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['around_id'];?>
" target="_blank"><button type="button" value="">前往预定</button></a>
                        </label>
                    </li>
                    <?php } ?>
                    <?php }?>
                    <?php if (!empty($_smarty_tpl->tpl_vars['inbound']->value)) {?>
                    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['inbound']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                    <li>
                        <a href="/inbound/details?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['inbound_id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['value']->value['inbound_pic1'];?>
" width="210" height="140" /></a>
									<span>
										<h3><a href="/inbound/details?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['inbound_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['inbound_name'];?>
</a></h3>
										<dl>
                                            <dt class="tx-ico-1">酒店：<?php echo $_smarty_tpl->tpl_vars['value']->value['inbound_address'];?>
 </dt>
                                            <dt class="tx-ico-2">景点：<?php echo $_smarty_tpl->tpl_vars['value']->value['inbound_spot'];?>
 </dt>
                                        </dl>
									</span>
                        <label>
                            <dl>
                                <dt><em>￥</em><?php echo $_smarty_tpl->tpl_vars['value']->value['inbound_market_price'];?>
<i>起</i></dt>
                                <dd>原价:￥<?php echo $_smarty_tpl->tpl_vars['value']->value['inbound_cost_price'];?>
/人</dd>
                            </dl>
                            <a href="/inbound/details?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['inbound_id'];?>
" target="_blank"><button type="button" value="">前往预定</button></a>
                        </label>
                    </li>
                    <?php } ?>
                    <?php }?>
                    <?php if (!empty($_smarty_tpl->tpl_vars['outbound']->value)) {?>
                    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['outbound']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                    <li>
                        <a href="/outbound/details?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['outbound_id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['value']->value['outbound_pic1'];?>
" width="210" height="140" /></a>
									<span>
										<h3><a href="/outbound/details?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['outbound_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['outbound_name'];?>
</a></h3>
										<dl>
                                            <dt class="tx-ico-1">酒店：<?php echo $_smarty_tpl->tpl_vars['value']->value['outbound_address'];?>
 </dt>
                                            <dt class="tx-ico-2">景点：<?php echo $_smarty_tpl->tpl_vars['value']->value['outbound_spot'];?>
 </dt>
                                        </dl>
									</span>
                        <label>
                            <dl>
                                <dt><em>￥</em><?php echo $_smarty_tpl->tpl_vars['value']->value['outbound_market_price'];?>
<i>起</i></dt>
                                <dd>原价:￥<?php echo $_smarty_tpl->tpl_vars['value']->value['outbound_cost_price'];?>
/人</dd>
                            </dl>
                            <a href="/outbound/details?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['outbound_id'];?>
" target="_blank"><button type="button" value="">前往预定</button></a>
                        </label>
                    </li>
                    <?php } ?>
                    <?php }?>

                </ul>
            </div>
        </div>


        <div class="clear"></div>
    </div>

    <!--景点门票-->
    <div class="jy-w-1 jy-m-3 jy-bg-7">
        <div class="tx-p-2 jy-pos-r">
            <h3 class="jy-h3-0 jy-cor-3 jy-ds-inl">景点门票</h3>
            <a href="/ticket" class="jy-f-right jy-pr-2">更多</a>
            <div id="column" class="columdiv">
                <ul>
                    <?php if (!empty($_smarty_tpl->tpl_vars['system']->value)) {?>
                    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['system']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                    <?php if ($_smarty_tpl->tpl_vars['key']->value==0) {?>
                        <li class="select2"><?php echo $_smarty_tpl->tpl_vars['value']->value['system_name'];?>
</li>
                    <?php } else { ?>
                        <li><?php echo $_smarty_tpl->tpl_vars['value']->value['system_name'];?>
</li>
                    <?php }?>
                    <?php } ?>
                    <?php }?>

                </ul>
            </div>
            <div id="columnbox" class="columnbox">
                <?php if (!empty('ticket')&&!empty($_smarty_tpl->tpl_vars['system']->value)) {?>
                <?php  $_smarty_tpl->tpl_vars['system_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['system_value']->_loop = false;
 $_smarty_tpl->tpl_vars['sysytem_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['system']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['system_value']->key => $_smarty_tpl->tpl_vars['system_value']->value) {
$_smarty_tpl->tpl_vars['system_value']->_loop = true;
 $_smarty_tpl->tpl_vars['sysytem_key']->value = $_smarty_tpl->tpl_vars['system_value']->key;
?>
                    <?php if ($_smarty_tpl->tpl_vars['sysytem_key']->value==0) {?>
                    <div class="col-content">
                    <?php } else { ?>
                    <div class="col-content jy-hide">
                    <?php }?>
                        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ticket']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                        <?php if ($_smarty_tpl->tpl_vars['system_value']->value['system_id']==$_smarty_tpl->tpl_vars['value']->value['ticket_end']) {?>
                        <a href="/ticket/details?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['ticket_id'];?>
">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['value']->value['ticket_pic1'];?>
" width="225" height="155"/>
                            <span><?php echo $_smarty_tpl->tpl_vars['value']->value['ticket_name'];?>
</span>
                            <em>￥<?php echo $_smarty_tpl->tpl_vars['value']->value['ticket_market_price'];?>
/起</em>
                        </a>
                        <?php }?>
                        <?php } ?>
                    </div>
                <?php } ?>
                <?php }?>

            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>

<!--<div id="fromshow2" style="display: none;" >-->
    <!--<div class="formbg"></div>-->
    <!--<div class="formdiv2">-->
        <!--<form method="post" name="" id="form_01">-->
            <!--<div id="myform3">-->
                <!--<h3></h3>-->
                <!--<label> <input type="text" name="username" value="" id="user1" placeholder="姓名" class="input1 jy-ico-1" /><dd>请输入用户名</dd> </label>-->
                <!--<label> <input type="text" name="telnum" value="" id="user2" placeholder="手机号" class="input1 jy-ico-2" /><dd>请输入手机号</dd> </label>-->
            <!--</div>-->
            <!--<div  class="date-labe">-->
                <!--<input class="laydate-icon" placeholder="出行时间" onClick="laydate()">-->
                <!--<i></i>-->
            <!--</div>-->
            <!--<div class="date-labe numpeople-div" id="numpeople1">-->
                <!--<label>成人<i class="reduc-i">-</i><input type="text" value="1" /><i class="add-i">+</i></label>-->
                <!--<label>儿童<i class="reduc-i">-</i><input type="text" value="0" /><i class="add-i">+</i></label>-->
            <!--</div>-->
            <!--<button type="button" value="" class="but1">立即提交</button>-->
            <!--<span id="closefrom2"></span>-->
        <!--</form>-->
    <!--</div>-->
<!--</div>-->
<?php echo '<script'; ?>
 type="text/javascript">
    $('.index').addClass('select1');
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/statics/pc/js/hd.js"><?php echo '</script'; ?>
>
<!--底部-->
<?php echo $_smarty_tpl->getSubTemplate ('../common/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</body>
</html><?php }} ?>
