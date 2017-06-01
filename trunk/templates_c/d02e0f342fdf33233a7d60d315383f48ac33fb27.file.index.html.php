<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-03-17 22:52:42
         compiled from "/Library/WebServer/Documents/blog/yunguan/trunk/application/views/default/wap/order/index.html" */ ?>
<?php /*%%SmartyHeaderCode:166742200258cbf3ad5097e1-02567114%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd02e0f342fdf33233a7d60d315383f48ac33fb27' => 
    array (
      0 => '/Library/WebServer/Documents/blog/yunguan/trunk/application/views/default/wap/order/index.html',
      1 => 1489762361,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '166742200258cbf3ad5097e1-02567114',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58cbf3ad66fd19_03954355',
  'variables' => 
  array (
    'name' => 0,
    'class' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58cbf3ad66fd19_03954355')) {function content_58cbf3ad66fd19_03954355($_smarty_tpl) {?><!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
    <title>预约报名</title>
    <link rel="stylesheet" href="/statics/wap/css/comm.css" />
    <link rel="stylesheet" href="/statics/wap/css/index.css" />
    <link rel="stylesheet" href="/statics/wap/css/swiper.min.css" />
    <?php echo '<script'; ?>
 type="text/javascript" src="/statics/wap/js/jquery-1.8.3.min.js" ><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/statics/wap/laydate/laydate.js" ><?php echo '</script'; ?>
>
</head>
<body>
<!--头部-->
<div id="header-box" class="wap-pst-r">
    <header class="wap-pst-a" id="listheader" style="top:2.0rem;z-index: 99;">
        <a href="content.html" class="list-top-a2"><img src="/statics/wap/images/jtico.png"  /></a>
    </header>
    <!-- 焦点图 -->
    <div class="swiper-container wap-max-h-1">
        <ul class="swiper-wrapper">
            <li class="swiper-slide"><img src="/statics/wap/images/topbanner.jpg" /> </li>
        </ul>
    </div>
</div>
<section id="frombox" class="wap-pad-1">
    <form action="/m/order_m/order_add" name="" enctype="multipart/form-data" name="myfrom" method="post" id="myform1" >
        <h3><?php if (!empty($_smarty_tpl->tpl_vars['name']->value)) {
echo $_smarty_tpl->tpl_vars['name']->value;
}?></h3>
        <ul class="wap-pad-1">
            <input type="hidden" name="order_class_tour" value="<?php if (!empty($_smarty_tpl->tpl_vars['class']->value)) {
echo $_smarty_tpl->tpl_vars['class']->value;
}?>" >
            <input type="hidden" name="order_name" value="<?php if (!empty($_smarty_tpl->tpl_vars['name']->value)) {
echo $_smarty_tpl->tpl_vars['name']->value;
}?>" >
            <input type="hidden" name="order_correlation" value="<?php if (!empty($_smarty_tpl->tpl_vars['id']->value)) {
echo $_smarty_tpl->tpl_vars['id']->value;
}?>" >
            <li><label><input type="text" name="order_username" value="" placeholder="您的姓名" class="input1 ico1 " /><dd>请输入用户名</dd></label></li>
            <li><label><input type="text" name="order_tel" value=""  placeholder="您的手机" class="input1 ico2"  /><dd>请输入手机号</dd></label></li>
            <li><label><input class="laydate-icon" name="order_start_time" placeholder="出行时间" onClick="laydate()"></label></li>
            <li id="numli">
                <span>成人<i class="reduc-i" >-</i><input type="text" name="order_adult" value="1" ><i class="add-i">+</i></span>
                <span>儿童<i class="reduc-i">-</i><input type="text" name="order_children" value="0"><i class="add-i">+</i></span>
            </li>
            <li><label><button type="submit" value="" >立即提交</button></label></li>
        </ul>
    </form>
</section>
<?php echo '<script'; ?>
>
    $(function() {
        //加
        $(".add-i").each(function() {
            $(this).click(function() {
                var num = $(this).prev().val();
                num++;
                $(this).prev().val(num);
            });
        });

        //减
        $(".reduc-i").each(function() {
            $(this).click(function() {
                var num2 = $(this).next().val();
                num2--;
                if(num2 <= 1) {
                    num2 = 1;
                }
                $(this).next().val(num2);
            })
        })

    })
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    $(function(){
        var tm1=false;
        var tm2=false;
        var tnum=/^1[34578]\d{9}$/;
        // 验证用户名
        $('input[name="order_username"]').focus(function(){
            $(this).next().text('姓名应为2个字符以上').removeClass('dd4').addClass('dd3');
        }).blur(function(){
            if($(this).val().length >= 2 && $(this).val().length <=12 && $(this).val()!=''){
                $(this).next().text('输入正确').removeClass('dd3').addClass('dd2');
                tm1=true;
            }else{
                $(this).next().text('请输入姓名').removeClass('dd2').addClass('dd3');
            }

        });

        //验证电话
        $('input[name="order_tel"]').focus(function(){
            $(this).next().text('请输入正确的电话号码').removeClass('dd4').addClass('dd3');
        }).blur(function(){
            if($(this).val().search(tnum)){
                $(this).next().text('请输入正确的电话号码').removeClass('dd2').addClass('dd3');

            }else{
                $(this).next().text('输入正确').removeClass('dd3')
                tm2=true;

            }

        });

    })
<?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
