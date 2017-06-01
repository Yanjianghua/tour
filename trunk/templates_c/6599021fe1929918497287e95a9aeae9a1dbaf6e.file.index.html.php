<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-02-25 21:50:40
         compiled from "/Library/WebServer/Documents/blog/blog/trunk/application/views/default/layout/index.html" */ ?>
<?php /*%%SmartyHeaderCode:10277406858591817c05858-46984726%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6599021fe1929918497287e95a9aeae9a1dbaf6e' => 
    array (
      0 => '/Library/WebServer/Documents/blog/blog/trunk/application/views/default/layout/index.html',
      1 => 1488030639,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10277406858591817c05858-46984726',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58591817c3e5d4_89451481',
  'variables' => 
  array (
    'web_name' => 0,
    'article_recommend' => 0,
    'key' => 0,
    'value' => 0,
    'article_php' => 0,
    'article_linux' => 0,
    'article_mysql' => 0,
    'article_js' => 0,
    'article_http' => 0,
    'article_new' => 0,
    'channel_1' => 0,
    'channel_2' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58591817c3e5d4_89451481')) {function content_58591817c3e5d4_89451481($_smarty_tpl) {?><!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <title><?php echo $_smarty_tpl->tpl_vars['web_name']->value;?>
</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="延江华的博客、PHP博客、博客、延江华" name="keywords" />
    <meta content="PHP知识详解、Linux相关知识详解、mysql相关知识详解" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="/statics/media/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="/statics/media/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="/statics/media/css/style-metro.css" rel="stylesheet" type="text/css"/>
    <link href="/statics/media/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="/statics/media/css/style-responsive.css" rel="stylesheet" type="text/css"/>
    <link href="/statics/media/css/default.css" rel="stylesheet" type="text/css" id="style_color"/>
    <link href="/statics/media/css/uniform.default.css" rel="stylesheet" type="text/css"/>
    <link href="/statics/media/css/jquery.fancybox.css" rel="stylesheet" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="/statics/media/css/news.css" rel="stylesheet" type="text/css"/>
    <link href="/statics/media/css/search.css" rel="stylesheet" type="text/css"/>
    <link href="/statics/media/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
    <!-- END PAGE LEVEL STYLES -->
    <link rel="shortcut icon" href="/statics/media/image/favicon.ico" />
</head>
<body class="body-news-1">
<div class="row-fluid">
        <div class="news-Navigation">
            <div class="new-boke"><h3><a href="/" target="_blank">延江华的博客</a></h3></div>
            <div class=" search-default" >
                <form class="form-search" action="/search" method="get">
                    <div class="chat-form">
                        <div class="input-cont">
                            <input type="text" name="wd" placeholder="Search..." class="m-wrap" />
                        </div>
                        <button type="submit" class="btn green">
                            Search &nbsp;
                            <i class="m-icon-swapright m-icon-white"></i>
                        </button>
                    </div>
                </form>
            </div>
            <div class="about-me"><h3><a href="/about" target="_blank">关于我</a></h3></div>
            <div class="clear"></div>
        </div>
</div>
<!-- BEGIN PAGE CONTENT-->
<div class="row-fluid" style="">
    <div class="span12 news-page">
        <h1>&nbsp;&nbsp;&nbsp;&nbsp;经典文章</h1>
        <div class="row-fluid">
            <div class="span5">
                <div id="myCarousel" class="carousel slide">
                    <!-- Carousel indicators
                        <ol class="carousel-indicators">
                         <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                         <li data-target="#myCarousel" data-slide-to="1"></li>
                         <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        -->
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                        <?php if (!empty($_smarty_tpl->tpl_vars['article_recommend']->value)) {?>
                        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['article_recommend']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                        <div class="<?php if ($_smarty_tpl->tpl_vars['key']->value==0) {?>active<?php }?> item">
                            <a href="/article/<?php echo $_smarty_tpl->tpl_vars['value']->value['article_id'];?>
.html" target="_blank">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['value']->value['pic_url'];?>
" alt="" style="height:380px;width:573px;">
                            <div class="carousel-caption">
                                <h4><?php echo $_smarty_tpl->tpl_vars['value']->value['article_title'];?>
</h4>
                                <p><?php echo cut_str($_smarty_tpl->tpl_vars['value']->value['article_description'],50);?>
……</p>

                            </div>
                            </a>
                        </div>
                        <?php } ?>
                        <?php }?>

                    </div>
                    <!-- Carousel nav -->
                    <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                        <i class="m-icon-big-swapleft m-icon-white"></i>
                    </a>
                    <a class="carousel-control right" href="#myCarousel" data-slide="next">
                        <i class="m-icon-big-swapright m-icon-white"></i>
                    </a>
                </div>
                <div class="top-news">
                    <a href="/channel/1.html" class="btn blue" target="_blank">
                        <span>PHP</span>
                        <em>
                            <i class="icon-tags"></i>
                            漏洞, 详解, 接口
                        </em>
                        <i class="icon- icon-bullhorn top-news-icon"></i>
                    </a>
                </div>
                <?php if (!empty($_smarty_tpl->tpl_vars['article_php']->value)) {?>
                <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article_php']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
                <div class="news-blocks">
                    <h3><a href="/article/<?php echo $_smarty_tpl->tpl_vars['value']->value['article_id'];?>
.html" target="_blank"><?php echo $_smarty_tpl->tpl_vars['value']->value['article_title'];?>
</a></h3>
                    <div class="news-block-tags">
                        <strong><?php echo $_smarty_tpl->tpl_vars['value']->value['label_name'];?>
</strong>
                        <em><?php echo date("Y-m-d H:i:s",$_smarty_tpl->tpl_vars['value']->value['addtime']);?>
</em>
                    </div>
                    <p><img class="news-block-img pull-right" src="<?php echo $_smarty_tpl->tpl_vars['value']->value['pic_url'];?>
" alt=""><?php echo $_smarty_tpl->tpl_vars['value']->value['article_description'];?>
</p>
                    <a href="/article/<?php echo $_smarty_tpl->tpl_vars['value']->value['article_id'];?>
.html" target="_blank" class="news-block-btn">
                        阅读原文
                        <i class="m-icon-swapright m-icon-black"></i>
                    </a>
                </div>
                <?php } ?>
                <?php }?>
            </div>
            <!--end span5-->
            <div class="span4">
                <div class="top-news">
                    <a href="/channel/2.html" class="btn red" target="_blank">
                        <span>Linux</span>
                        <em>
                            <i class="icon-tags"></i>
                            UK, Canada, Asia
                        </em>
                        <i class="icon-globe top-news-icon"></i>
                    </a>
                </div>
                <?php if (!empty($_smarty_tpl->tpl_vars['article_linux']->value)) {?>
                <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article_linux']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
                <div class="news-blocks">
                    <h3><a href="/article/<?php echo $_smarty_tpl->tpl_vars['value']->value['article_id'];?>
.html" target="_blank"><?php echo $_smarty_tpl->tpl_vars['value']->value['article_title'];?>
</a></h3>
                    <div class="news-block-tags">
                        <strong><?php echo $_smarty_tpl->tpl_vars['value']->value['label_name'];?>
</strong>
                        <em><?php echo date("Y-m-d H:i:s",$_smarty_tpl->tpl_vars['value']->value['addtime']);?>
</em>
                    </div>
                    <p><img class="news-block-img pull-right" src="<?php echo $_smarty_tpl->tpl_vars['value']->value['pic_url'];?>
" alt=""><?php echo $_smarty_tpl->tpl_vars['value']->value['article_description'];?>
</p>
                    <a href="/article/<?php echo $_smarty_tpl->tpl_vars['value']->value['article_id'];?>
.html" class="news-block-btn" target="_blank">
                        阅读原文
                        <i class="m-icon-swapright m-icon-black"></i>
                    </a>
                </div>
                <?php } ?>
                <?php }?>

                <div class="top-news">
                    <a href="/channel/3.html" class="btn green" target="_blank">
                        <span>Mysql </span>
                        <em>
                            <i class="icon-tags"></i>
                            sql, 优化, Google
                        </em>
                        <i class="icon-briefcase top-news-icon"></i>
                    </a>
                </div>
                <?php if (!empty($_smarty_tpl->tpl_vars['article_mysql']->value)) {?>
                <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article_mysql']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
                <div class="news-blocks">
                    <h3><a href="/article/<?php echo $_smarty_tpl->tpl_vars['value']->value['article_id'];?>
.html" target="_blank"><?php echo $_smarty_tpl->tpl_vars['value']->value['article_title'];?>
</a></h3>
                    <div class="news-block-tags">
                        <strong><?php echo $_smarty_tpl->tpl_vars['value']->value['label_name'];?>
</strong>
                        <em><?php echo date("Y-m-d H:i:s",$_smarty_tpl->tpl_vars['value']->value['addtime']);?>
</em>
                    </div>
                    <p><img class="news-block-img pull-right" src="<?php echo $_smarty_tpl->tpl_vars['value']->value['pic_url'];?>
" alt=""><?php echo $_smarty_tpl->tpl_vars['value']->value['article_description'];?>
</p>
                    <a href="/article/<?php echo $_smarty_tpl->tpl_vars['value']->value['article_id'];?>
.html" class="news-block-btn" target="_blank">
                        阅读原文
                        <i class="m-icon-swapright m-icon-black"></i>
                    </a>
                </div>
                <?php } ?>
                <?php }?>
            </div>
            <!--end span4-->
            <div class="span3">
                <div class="top-news">
                    <a href="/channel/4.html" class="btn purple" target="_blank">
                        <span>JavaScript</span>
                        <em>
                            <i class="icon-tags"></i>
                            ajax, chart, node
                        </em>
                        <i class="icon-beaker top-news-icon"></i>
                    </a>
                </div>
                <?php if (!empty($_smarty_tpl->tpl_vars['article_js']->value)) {?>
                <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article_js']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
                <div class="news-blocks">
                    <h3><a href="/article/<?php echo $_smarty_tpl->tpl_vars['value']->value['article_id'];?>
.html" target="_blank"><?php echo $_smarty_tpl->tpl_vars['value']->value['article_title'];?>
</a></h3>
                    <div class="news-block-tags">
                        <strong><?php echo $_smarty_tpl->tpl_vars['value']->value['label_name'];?>
</strong>
                        <em><?php echo date("Y-m-d H:i:s",$_smarty_tpl->tpl_vars['value']->value['addtime']);?>
</em>
                    </div>
                    <p><img class="news-block-img pull-right" src="<?php echo $_smarty_tpl->tpl_vars['value']->value['pic_url'];?>
" alt=""><?php echo $_smarty_tpl->tpl_vars['value']->value['article_description'];?>
</p>
                    <a href="/article/<?php echo $_smarty_tpl->tpl_vars['value']->value['article_id'];?>
.html" class="news-block-btn" target="_blank">
                        阅读原文
                        <i class="m-icon-swapright m-icon-black"></i>
                    </a>
                </div>
                <?php } ?>
                <?php }?>
                <div class="top-news">
                    <a href="/channel/5.html" class="btn yellow" target="_blank">
                        <span>Http</span>
                        <em>
                            <i class="icon-tags"></i>
                            Football, Swimming, Tennis
                        </em>
                        <i class="icon-trophy top-news-icon"></i>
                    </a>
                </div>
                <?php if (!empty($_smarty_tpl->tpl_vars['article_http']->value)) {?>
                <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article_http']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
                <div class="news-blocks">
                    <h3><a href="/article/<?php echo $_smarty_tpl->tpl_vars['value']->value['article_id'];?>
.html" target="_blank"><?php echo $_smarty_tpl->tpl_vars['value']->value['article_title'];?>
</a></h3>
                    <div class="news-block-tags">
                        <strong><?php echo $_smarty_tpl->tpl_vars['value']->value['label_name'];?>
</strong>
                        <em><?php echo date("Y-m-d H:i:s",$_smarty_tpl->tpl_vars['value']->value['addtime']);?>
</em>
                    </div>
                    <p><img class="news-block-img pull-right" src="<?php echo $_smarty_tpl->tpl_vars['value']->value['pic_url'];?>
" alt=""><?php echo $_smarty_tpl->tpl_vars['value']->value['article_description'];?>
</p>
                    <a href="/article/<?php echo $_smarty_tpl->tpl_vars['value']->value['article_id'];?>
.html" target="_blank" class="news-block-btn">
                        阅读原文
                        <i class="m-icon-swapright m-icon-black"></i>
                    </a>
                </div>
                <?php } ?>
                <?php }?>
            </div>
            <!--end span3-->
        </div>
        <div class="space20"></div>
        <h2>最新文章 </h2>
        <div class="row-fluid">
            <?php if (!empty($_smarty_tpl->tpl_vars['article_new']->value)) {?>
            <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article_new']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
            <div class="span3">
                <div class="news-blocks">
                    <h3><a href="/article/<?php echo $_smarty_tpl->tpl_vars['value']->value['article_id'];?>
.html" target="_blank"><?php echo $_smarty_tpl->tpl_vars['value']->value['article_title'];?>
</a></h3>
                    <div class="news-block-tags">
                        <strong><?php echo $_smarty_tpl->tpl_vars['value']->value['label_name'];?>
</strong>
                        <em><?php echo date("Y-m-d H:i:s",$_smarty_tpl->tpl_vars['value']->value['addtime']);?>
</em>
                    </div>
                    <p><img class="news-block-img pull-right" src="<?php echo $_smarty_tpl->tpl_vars['value']->value['pic_url'];?>
" alt=""><?php echo cut_str($_smarty_tpl->tpl_vars['value']->value['article_description'],50);?>
...</p>
                    <a href="/article/<?php echo $_smarty_tpl->tpl_vars['value']->value['article_id'];?>
.html" target="_blank" class="news-block-btn">
                        阅读原文
                        <i class="m-icon-swapright m-icon-black"></i>
                    </a>
                </div>
            </div>
            <?php } ?>
            <?php }?>
        </div>
        <div class="space20"></div>
        <h2>文章分类</h2>
        <div class="row-fluid top-news">
            <?php if (!empty($_smarty_tpl->tpl_vars['channel_1']->value)) {?>
            <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['channel_1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
            <div class="span3">
                <a href="/channel/<?php echo $_smarty_tpl->tpl_vars['value']->value['channel_id'];?>
.html" target="_blank" class="btn <?php if ($_smarty_tpl->tpl_vars['key']->value==0) {?>red<?php } elseif ($_smarty_tpl->tpl_vars['key']->value==1) {?>green<?php } elseif ($_smarty_tpl->tpl_vars['key']->value==2) {?>yellow<?php } elseif ($_smarty_tpl->tpl_vars['key']->value==3) {?>blue<?php }?>">
                    <span><?php echo $_smarty_tpl->tpl_vars['value']->value['channel_name'];?>
</span>
                    <em><?php echo $_smarty_tpl->tpl_vars['value']->value['channel_note'];?>
</em>
                    <i class="icon-briefcase top-news-icon"></i>
                </a>
            </div>
            <?php } ?>
            <?php }?>
        </div>
        <div class="row-fluid top-news">
            <?php if (!empty($_smarty_tpl->tpl_vars['channel_2']->value)) {?>
            <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['channel_2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
            <div class="span3">
                <a href="/channel/<?php echo $_smarty_tpl->tpl_vars['value']->value['channel_id'];?>
.html" target="_blank" class="btn <?php if ($_smarty_tpl->tpl_vars['key']->value==0) {?>green<?php } elseif ($_smarty_tpl->tpl_vars['key']->value==1) {?>yellow<?php } elseif ($_smarty_tpl->tpl_vars['key']->value==2) {?>blue<?php } elseif ($_smarty_tpl->tpl_vars['key']->value==3) {?>red<?php }?>">
                    <span><?php echo $_smarty_tpl->tpl_vars['value']->value['channel_name'];?>
</span>
                    <em><?php echo $_smarty_tpl->tpl_vars['value']->value['channel_note'];?>
</em>
                    <i class="icon-briefcase top-news-icon"></i>
                </a>
            </div>
            <?php } ?>
            <?php }?>
        </div>
    </div>
</div>
<!-- END PAGE CONTENT-->

<?php echo $_smarty_tpl->getSubTemplate ('../common/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</body>
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
 src="/statics/media/js/jquery.uniform.min.js" type="text/javascript" ><?php echo '</script'; ?>
>
<!-- END CORE PLUGINS -->
<?php echo '<script'; ?>
 src="/statics/media/js/app.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    jQuery(document).ready(function() {
        App.init();
    });
<?php echo '</script'; ?>
>
<!-- END JAVASCRIPTS -->
</html><?php }} ?>
