<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-03-17 23:23:58
         compiled from "/Library/WebServer/Documents/blog/yunguan/trunk/application/views/default/wap/ticket/details.html" */ ?>
<?php /*%%SmartyHeaderCode:152803520058cbff8e3a98f8-99526995%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd23102951a8530c996f75718bd8f609265410952' => 
    array (
      0 => '/Library/WebServer/Documents/blog/yunguan/trunk/application/views/default/wap/ticket/details.html',
      1 => 1489764219,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '152803520058cbff8e3a98f8-99526995',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ticket' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58cbff8e40fc61_56445321',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58cbff8e40fc61_56445321')) {function content_58cbff8e40fc61_56445321($_smarty_tpl) {?><!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
    <title>周边游-<?php echo $_smarty_tpl->tpl_vars['ticket']->value['ticket_name'];?>
</title>
    <link rel="stylesheet" href="/statics/wap/css/comm.css" />
    <link rel="stylesheet" href="/statics/wap/css/index.css" />
    <link rel="stylesheet" href="/statics/wap/css/swiper.min.css" />
    <?php echo '<script'; ?>
 type="text/javascript" src="/statics/wap/js/jquery-1.8.3.min.js" ><?php echo '</script'; ?>
>
</head>
<body class="wap-bg-1">
<!--头部-->
<div id="header-box" class="wap-pst-r">
    <header class="wap-bg-5 wap-pst-r" id="listheader">
        <h3 class="wap-fnts-2"><?php echo cut_str($_smarty_tpl->tpl_vars['ticket']->value['ticket_name'],10);?>
</h3>
        <a href="#" class="list-top-a1"  id="check"><img src="/statics/wap/images/fkico.png" /></a>
        <a href="/m/ticket" class="list-top-a2"><img src="/statics/wap/images/jtico.png" /></a>
    </header>
    <div id="listnavbox" style="display:none;">
        <div class="navlist1 wap-bg-2 wap-pad-1">
            <ul class="listnav">
                <li class="index "><a href="/">首页</a></li>
                <li class="around "><a href="/m/around">周边游</a></li>
                <li class="inbound "><a href="/m/inbound">国内游</a></li>
                <li class="outbound "><a href="/m/outbound">境外游</a></li>
                <li class="ticket "><a href="/m/ticket">主题游</a></li>
                <li class="local "><a href="/m/local">本地游玩</a></li>
            </ul>
        </div>
    </div>
    <?php echo '<script'; ?>
 type="text/javascript">
        var Abut=document.getElementById("check");
        var ListNavBox=document.getElementById("listnavbox");
        Abut.onclick=function(){
            if(ListNavBox.style.display=="block"){
                ListNavBox.style.display="none";
            }else{
                ListNavBox.style.display="block";
            }

        }
    <?php echo '</script'; ?>
>
    <!-- 焦点图 -->
    <div class="swiper-container wap-max-h-1">
        <ul class="swiper-wrapper">
            <li class="swiper-slide"><img src="<?php echo $_smarty_tpl->tpl_vars['ticket']->value['ticket_pic1'];?>
" width="414" height="150" /> </li>
            <li class="swiper-slide"><img src="<?php echo $_smarty_tpl->tpl_vars['ticket']->value['ticket_pic2'];?>
" width="414" height="150" /> </li>
        </ul>
        <div class="numbox">
            <div class="numbg"></div>
            <div class="swiper-pagination picico">
            </div>
        </div>
    </div>
</div>

<section class="contentbox wap-bg-2">
    <div class="contentlist">
        <h3><?php echo $_smarty_tpl->tpl_vars['ticket']->value['ticket_name'];?>
</h3>
        <ul class="content-ul">
            <li>出发地<i><?php echo $_smarty_tpl->tpl_vars['ticket']->value['ticket_start_name'];?>
</i></li>
            <li>目的地<i><?php echo $_smarty_tpl->tpl_vars['ticket']->value['ticket_end_name'];?>
</i></li>
            <li><span>￥<?php echo $_smarty_tpl->tpl_vars['ticket']->value['ticket_market_price'];?>
<em>起/份</em></span></li>
        </ul>
    </div>

</section>


<!--车型图片-->
<section class="wap-bg-2  wap-marg-t-1">
    <div class="tab-nav2" id="tab-nav2">
        <ul>
            <li class="select6">详情</li>
            <li>费用说明</li>
        </ul>
    </div>
    <div id="navcontbox">

        <div class="contentpicbox ">
            <?php echo $_smarty_tpl->tpl_vars['ticket']->value['ticket_details'];?>

        </div>

        <!--详情与费用说明-->
        <div class="contentpicbox wap-hid" >
            <?php echo $_smarty_tpl->tpl_vars['ticket']->value['ticket_explain'];?>

        </div>
    </div>

</section>

<a href="/m/order?id=<?php echo $_smarty_tpl->tpl_vars['ticket']->value['ticket_id'];?>
&class=景点门票&name=<?php echo $_smarty_tpl->tpl_vars['ticket']->value['ticket_name'];?>
" class="wap-bg-5 wap-pst-f but-2">预约报名</a>
<!--底部-->
<?php echo $_smarty_tpl->getSubTemplate ('../common/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo '<script'; ?>
>
    $("#tab-nav2").find("ul").children().each(function() {
        var _index = $(this).index();
        $(this).mouseenter(function() {
            $(this).addClass("select6").siblings().removeClass("select6");
            $("#navcontbox").find("div").eq(_index).fadeIn().siblings().stop().hide();
        });
    })
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
  src="/statics/wap/js/swiper.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
        paginationType : 'fraction',
        autoplay:false,
        spaceBetween: 30
    });
    $('.ticket').addClass('gree');
<?php echo '</script'; ?>
>



</body>
</html><?php }} ?>
