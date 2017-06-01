<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-04-22 22:29:24
         compiled from "/Library/WebServer/Documents/blog/yunguan/trunk/application/views/admin/login/index.html" */ ?>
<?php /*%%SmartyHeaderCode:35379337758bea976248a62-52395250%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5d00c77d22c433070a8768ca2cb965f34c17a6b' => 
    array (
      0 => '/Library/WebServer/Documents/blog/yunguan/trunk/application/views/admin/login/index.html',
      1 => 1492497716,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35379337758bea976248a62-52395250',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58bea976282285_13311247',
  'variables' => 
  array (
    'code' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bea976282285_13311247')) {function content_58bea976282285_13311247($_smarty_tpl) {?><!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <title>后台登陆</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="/statics/media/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="/statics/media/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
    <link href="/statics/media/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="/statics/media/css/style-metro.css" rel="stylesheet" type="text/css"/>
    <link href="/statics/media/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="/statics/media/css/style-responsive.css" rel="stylesheet" type="text/css"/>
    <link href="/statics/media/css/default.css" rel="stylesheet" type="text/css" />
    <link href="/statics/media/css/uniform.default.css" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="/statics/media/css/login.css" rel="stylesheet" type="text/css"/>
    <!-- END PAGE LEVEL STYLES -->
    <link rel="shortcut icon" href="/statics/media/image/favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">
<!-- BEGIN LOGO -->
<div class="logo">
    <img src="/statics/media/image/logo-big.png" alt=""/>
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content">
    <!-- BEGIN LOGIN FORM -->
    <form class="form-vertical login-form" method="post" action="/Admin_Login/index/">
        <h3 class="form-title">登录到您的帐户</h3>
        <div class="alert alert-error hide">
            <button class="close" data-dismiss="alert"></button>
            <span>Enter any username and password.</span>
        </div>
        <div class="control-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">用户名</label>
            <div class="controls">
                <div class="input-icon left">
                    <i class="icon-user"></i>
                    <input class="m-wrap placeholder-no-fix" type="text" placeholder="用户名" name="user_name"/>
                </div>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label visible-ie8 visible-ie9">密码</label>
            <div class="controls">
                <div class="input-icon left">
                    <i class="icon-lock"></i>
                    <input class="m-wrap placeholder-no-fix" type="password" placeholder="密码" name="password"/>
                </div>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label visible-ie8 visible-ie9">验证码</label>
            <div class="controls">
                <div class="input-icon left">
                    <i class="icon-barcode"></i>
                    <input class="m-wrap-y placeholder-no-fix" type="text" placeholder="验证码" name="code"/>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
" alt="看不清楚，换一张" align="absmiddle" style="cursor: pointer;" onclick="javascript:newgdcode(this,this.src);" />
                    <!--<img src="<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
" class="codeimg" style="width: 84px;height: 26px;" />-->
                </div>
            </div>
        </div>
        <div class="form-actions">
            <label class="checkbox">
                <input type="checkbox" name="remember" value="1"/> 记住我
            </label>
            <button type="submit" class="btn green pull-right">
                登录 <i class="m-icon-swapright m-icon-white"></i>
            </button>
        </div>
    </form>
    <!-- END LOGIN FORM -->
</div>
<!-- END LOGIN -->
<!-- BEGIN COPYRIGHT -->
<div class="copyright">
    2016@后台管理模板
</div>
<!-- END COPYRIGHT -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<?php echo '<script'; ?>
 src="/statics/media/js/jquery-1.10.1.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/statics/media/js/jquery-migrate-1.2.1.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<?php echo '<script'; ?>
 src="/statics/media/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/statics/media/js/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<!--[if lt IE 9]>
<?php echo '<script'; ?>
 src="/statics/media/js/excanvas.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/statics/media/js/respond.min.js"><?php echo '</script'; ?>
>
<![endif]-->
<?php echo '<script'; ?>
 src="/statics/media/js/jquery.slimscroll.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/statics/media/js/jquery.blockui.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/statics/media/js/jquery.cookie.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/statics/media/js/jquery.uniform.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<?php echo '<script'; ?>
 src="/statics/media/js/jquery.validate.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<!--<?php echo '<script'; ?>
 src="/statics/media/js/app.js" type="text/javascript"><?php echo '</script'; ?>
>-->
<!--<?php echo '<script'; ?>
 src="/statics/media/js/login.js" type="text/javascript"><?php echo '</script'; ?>
>-->
<!-- END PAGE LEVEL SCRIPTS -->
<!--<?php echo '<script'; ?>
>-->
    <!--jQuery(document).ready(function () {-->
        <!--App.init();-->
        <!--Login.init();-->
    <!--});-->
<!--<?php echo '</script'; ?>
>-->
<!-- END JAVASCRIPTS -->
<?php echo '<script'; ?>
 type="text/javascript">  var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-37564768-1']);
_gaq.push(['_setDomainName', 'keenthemes.com']);
_gaq.push(['_setAllowLinker', true]);
_gaq.push(['_trackPageview']);
(function () {
    var ga = document.createElement('script');
    ga.type = 'text/javascript';
    ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(ga, s);
})();
function newgdcode(obj,url) {
    obj.src = url+ '?nowtime=' + new Date().getTime();
//后面传递一个随机参数，否则在IE7和火狐下，不刷新图片
}
<?php echo '</script'; ?>
>
</body>
<!-- END BODY -->
</html><?php }} ?>
