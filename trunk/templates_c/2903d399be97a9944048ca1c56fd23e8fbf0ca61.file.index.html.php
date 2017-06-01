<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-04-22 23:15:16
         compiled from "/Library/WebServer/Documents/blog/yunguan/trunk/application/views/default/wap/layout/index.html" */ ?>
<?php /*%%SmartyHeaderCode:183112516958cb88cbce8c69-26940236%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2903d399be97a9944048ca1c56fd23e8fbf0ca61' => 
    array (
      0 => '/Library/WebServer/Documents/blog/yunguan/trunk/application/views/default/wap/layout/index.html',
      1 => 1492826674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '183112516958cb88cbce8c69-26940236',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58cb88cbd158b7_72861960',
  'variables' => 
  array (
    'ad_4' => 0,
    'value' => 0,
    'ticket' => 0,
    'around' => 0,
    'inbound' => 0,
    'local' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58cb88cbd158b7_72861960')) {function content_58cb88cbd158b7_72861960($_smarty_tpl) {?><!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
    <title>韶关旅游</title>
    <link rel="stylesheet" href="/statics/wap/css/comm.css" />
    <link rel="stylesheet" href="/statics/wap/css/index.css" />
    <link rel="stylesheet" href="/statics/wap/css/swiper.min.css" />
    <?php echo '<script'; ?>
 type="text/javascript" src="/statics/wap/js/jquery-1.8.3.min.js"><?php echo '</script'; ?>
>
</head>
<body>
<!--头部-->
<div id="header-box" class="wap-pst-r">
    <!-- 焦点图 -->
    <div class="swiper-container wap-max-h-1">
        <ul class="swiper-wrapper">
            <?php if (!empty($_smarty_tpl->tpl_vars['ad_4']->value)) {?>
            <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ad_4']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
            <li class="swiper-slide"><a href="<?php echo $_smarty_tpl->tpl_vars['value']->value['ad_url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['value']->value['ad_pic'];?>
" width="400" height="220"/></a></li>
            <?php } ?>
            <?php }?>
        </ul>
        <div class="swiper-pagination"></div>
    </div>
</div>
<!--导航-->
<nav id="nav-box" class="wap-bg-2">
    <div class="wap-pad-3 wap-aft-clears">
        <a href="/m/theme"></a>
        <a href="/m/around"></a>
        <a href="/m/ticket"></a>
        <a href="/m/outbound"></a>
        <a href="/m/local"></a>
        <a href="/m/inbound"></a>
    </div>

</nav>

<!--景点门票，周边游等-->
<section id="content-box" class=" wap-marg-t-1">
    <div class="tab-nav wap-pad-1" id="tab-nav">
        <ul>
            <li class="select-1">景点门票</li>
            <li>周边游</li>
            <li>国内游</li>
            <li>本地游玩</li>
        </ul>

    </div>
    <div id="con-list">
        <!--景点门票-->
        <div class="text-list">
            <ul class="wap-ul-1">
                <?php if (!empty($_smarty_tpl->tpl_vars['ticket']->value)) {?>
                <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ticket']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                <li>
                    <a href="/m/ticket/details/<?php echo $_smarty_tpl->tpl_vars['value']->value['ticket_id'];?>
.html">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['value']->value['ticket_pic1'];?>
" />
                        <dl class="text-dl-1 wap-pst-r">
                            <dd><?php echo cut_str($_smarty_tpl->tpl_vars['value']->value['ticket_name'],15);?>
</dd>
                            <dt><?php echo cut_str($_smarty_tpl->tpl_vars['value']->value['ticket_spot'],30);?>
</dt>
                        </dl>
                    </a>
                    <span>￥<?php echo $_smarty_tpl->tpl_vars['value']->value['ticket_market_price'];?>
<em>起</em></span>
                </li>
                <?php } ?>
                <?php }?>
            </ul>
            <a href="/m/ticket/" class="more">查看更多</a>
        </div>

        <!--周边旅游-->
        <div class="text-list wap-hid">
            <ul class="wap-ul-1">
                <?php if (!empty($_smarty_tpl->tpl_vars['around']->value)) {?>
                <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['around']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                <li>
                    <a href="/m/around/details/<?php echo $_smarty_tpl->tpl_vars['value']->value['around_id'];?>
.html">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['value']->value['around_pic1'];?>
" />
                        <dl class="text-dl-1 wap-pst-r">
                            <dd><?php echo cut_str($_smarty_tpl->tpl_vars['value']->value['around_name'],30);?>
</dd>
                            <dt><?php echo cut_str($_smarty_tpl->tpl_vars['value']->value['around_spot'],30);?>
</dt>
                        </dl>
                    </a>
                    <span>￥<?php echo $_smarty_tpl->tpl_vars['value']->value['around_market_price'];?>
<em>起</em></span>
                </li>
                <?php } ?>
                <?php }?>
            </ul>
            <a href="/m/around/" class="more">查看更多</a>
        </div>
        <!--国内游-->
        <div class="text-list wap-hid">
            <ul class="wap-ul-1">
                <?php if (!empty($_smarty_tpl->tpl_vars['inbound']->value)) {?>
                <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['inbound']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                <li>
                    <a href="/m/inbound/details/<?php echo $_smarty_tpl->tpl_vars['value']->value['inbound_id'];?>
.html">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['value']->value['inbound_pic1'];?>
" />
                        <dl class="text-dl-1 wap-pst-r">
                            <dd><?php echo cut_str($_smarty_tpl->tpl_vars['value']->value['inbound_name'],30);?>
</dd>
                            <dt><?php echo cut_str($_smarty_tpl->tpl_vars['value']->value['inbound_spot'],30);?>
</dt>
                        </dl>
                    </a>
                    <span>￥<?php echo $_smarty_tpl->tpl_vars['value']->value['inbound_market_price'];?>
<em>起</em></span>
                </li>
                <?php } ?>
                <?php }?>
            </ul>
            <a href="/m/inbound" class="more">查看更多</a>
        </div>

        <!--本地游玩-->
        <div class="text-list wap-hid">
            <ul class="wap-ul-1">
                <?php if (!empty($_smarty_tpl->tpl_vars['local']->value)) {?>
                <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['local']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                <li>
                    <a href="/m/local/details/<?php echo $_smarty_tpl->tpl_vars['value']->value['local_id'];?>
.html">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['value']->value['local_pic1'];?>
" />
                        <dl class="text-dl-1 wap-pst-r">
                            <dd><?php echo cut_str($_smarty_tpl->tpl_vars['value']->value['local_name'],30);?>
</dd>
                            <dt><?php echo cut_str($_smarty_tpl->tpl_vars['value']->value['local_spot'],30);?>
</dt>
                        </dl>
                    </a>
                    <span>￥<?php echo $_smarty_tpl->tpl_vars['value']->value['local_market_price'];?>
<em>起</em></span>
                </li>
                <?php } ?>
                <?php }?>
            </ul>
            <a href="/m/local" class="more">查看更多</a>
        </div>
    </div>

</section>
<?php echo '<script'; ?>
>
    $("#tab-nav").find("ul").children().each(function() {
        var _index = $(this).index();
        $(this).mouseenter(function() {
            $(this).addClass("select-1").siblings().removeClass("select-1");
            $("#con-list").find("div").eq(_index).fadeIn().siblings().stop().hide();
        });
    })
<?php echo '</script'; ?>
>
<!--底部-->
<?php echo $_smarty_tpl->getSubTemplate ('../common/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>




<?php echo '<script'; ?>
  src="/statics/wap/js/swiper.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
        autoplay:5000,
        spaceBetween: 30
    });
<?php echo '</script'; ?>
>



</body>
</html>
<?php }} ?>
