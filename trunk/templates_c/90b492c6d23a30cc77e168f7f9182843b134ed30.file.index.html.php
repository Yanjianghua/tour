<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-02-25 21:46:50
         compiled from "/Library/WebServer/Documents/blog/blog/trunk/application/views/default/channel/index.html" */ ?>
<?php /*%%SmartyHeaderCode:137445175658a697c4a46251-15287294%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90b492c6d23a30cc77e168f7f9182843b134ed30' => 
    array (
      0 => '/Library/WebServer/Documents/blog/blog/trunk/application/views/default/channel/index.html',
      1 => 1488030400,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137445175658a697c4a46251-15287294',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58a697c4a862a9_97725467',
  'variables' => 
  array (
    'web_name' => 0,
    'channel_name' => 0,
    'channel' => 0,
    'value' => 0,
    'channel_lei' => 0,
    'key' => 0,
    'recommend' => 0,
    'channel_id' => 0,
    'o' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a697c4a862a9_97725467')) {function content_58a697c4a862a9_97725467($_smarty_tpl) {?><!DOCTYPE html>
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
    <link href="/statics/media/css/blog.css" rel="stylesheet" type="text/css"/>
    <link href="/statics/media/css/search.css" rel="stylesheet" type="text/css"/>
    <link href="/statics/media/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
    <!-- END PAGE LEVEL STYLES -->
    <link rel="shortcut icon" href="/statics/media/image/favicon.ico" />
</head>
<body class="body-news-1">
<div class="row-fluid">
    <div class="news-Navigation">
        <div class="new-boke"><h3><a href="/" target="_blank">延江华的博客</a></h3></div>
        <div class=" search-default" style="">
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
    <div class="span12 blog-page">
        <div class="row-fluid">
            <div class="span9 article-block">
                <h1><?php if (!empty($_smarty_tpl->tpl_vars['channel_name']->value)) {
echo $_smarty_tpl->tpl_vars['channel_name']->value;
}?></h1>
                <?php if (!empty($_smarty_tpl->tpl_vars['channel']->value['rows'])) {?>
                <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['channel']->value['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
                <div class="row-fluid">
                    <div class="span4 blog-img blog-tag-data">
                        <img src="" alt="" style="height: 190px;width:256px;">
                        <ul class="unstyled inline">
                            <li><i class="icon-calendar"></i> <a href="#"><?php echo date('Y-m-d H:i:s',$_smarty_tpl->tpl_vars['value']->value['addtime']);?>
</a></li>
                        </ul>
                        <ul class="unstyled inline blog-tags">
                            <li>
                                <i class="icon-tags"></i>
                                <a href="#"><?php echo $_smarty_tpl->tpl_vars['value']->value['label_name'];?>
</a>
                            </li>
                        </ul>
                    </div>
                    <div class="span8 blog-article">
                        <h2><a href="/article/<?php echo $_smarty_tpl->tpl_vars['value']->value['article_id'];?>
.html"><?php echo $_smarty_tpl->tpl_vars['value']->value['article_title'];?>
</a></h2>
                        <p> <i class="icon-list-alt"></i> <?php echo $_smarty_tpl->tpl_vars['value']->value['article_keywords'];?>
</p>
                        <p><?php echo $_smarty_tpl->tpl_vars['value']->value['article_description'];?>
</p>
                        <a class="btn blue" href="/article/<?php echo $_smarty_tpl->tpl_vars['value']->value['article_id'];?>
.html" target="_blank">
                            阅读原文
                            <i class="m-icon-swapright m-icon-white"></i>
                        </a>
                    </div>
                </div>
                <hr>
                <?php } ?>
                <?php }?>
            </div>
            <!--end span9-->
            <div class="span3 blog-sidebar">
                <h2>文章分类</h2>
                <div class="top-news">
                    <?php if (!empty($_smarty_tpl->tpl_vars['channel_lei']->value)) {?>
                    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['channel_lei']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                    <a href="/channel/<?php echo $_smarty_tpl->tpl_vars['value']->value['channel_id'];?>
.html" target="_blank" class="btn <?php if ($_smarty_tpl->tpl_vars['key']->value%4==0) {?>red<?php } elseif ($_smarty_tpl->tpl_vars['key']->value%4==1) {?>green<?php } elseif ($_smarty_tpl->tpl_vars['key']->value%4==2) {?>yellow<?php } elseif ($_smarty_tpl->tpl_vars['key']->value%4==3) {?>blue<?php }?>">
                        <span><?php echo $_smarty_tpl->tpl_vars['value']->value['channel_name'];?>
</span>
                        <em><?php echo $_smarty_tpl->tpl_vars['value']->value['channel_note'];?>
</em>
                        <i class="icon-briefcase top-news-icon"></i>
                    </a>
                    <?php } ?>
                    <?php }?>
                </div>
                <div class="space20"></div>
                <h2>推荐文章</h2>
                <div class="blog-twitter">
                    <?php if (!empty($_smarty_tpl->tpl_vars['recommend']->value)) {?>
                    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['recommend']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                    <div class="blog-twitter-block">
                        <a href="/article/<?php echo $_smarty_tpl->tpl_vars['value']->value['article_id'];?>
.html" target="_blank"><?php echo $_smarty_tpl->tpl_vars['value']->value['article_title'];?>
</a>
                        <p><?php echo $_smarty_tpl->tpl_vars['value']->value['article_description'];?>
</p>
                        <span><?php echo date('Y-m-d H:i:s',$_smarty_tpl->tpl_vars['value']->value['addtime']);?>
</span>
                        <i class="icon-twitter blog-twiiter-icon"></i>
                    </div>
                    <?php } ?>
                    <?php }?>
                </div>
            </div>
            <!--end span3-->
        </div>
        <div class="pagination pagination-left">
            <ul>
                <li class="prev <?php if ($_smarty_tpl->tpl_vars['channel']->value['page']==0) {?>disabled<?php }?>">
                    <a href="/channel/index?id=<?php echo $_smarty_tpl->tpl_vars['channel_id']->value;?>
&page=<?php echo max($_smarty_tpl->tpl_vars['channel']->value['page']-1,0);?>
" target="_blank"> ← <span class="hidden-480">Prev</span></a>
                </li>
                <?php $_smarty_tpl->tpl_vars['o'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['o']->step = 1;$_smarty_tpl->tpl_vars['o']->total = (int) ceil(($_smarty_tpl->tpl_vars['o']->step > 0 ? $_smarty_tpl->tpl_vars['channel']->value['page_all']+1 - (1) : 1-($_smarty_tpl->tpl_vars['channel']->value['page_all'])+1)/abs($_smarty_tpl->tpl_vars['o']->step));
if ($_smarty_tpl->tpl_vars['o']->total > 0) {
for ($_smarty_tpl->tpl_vars['o']->value = 1, $_smarty_tpl->tpl_vars['o']->iteration = 1;$_smarty_tpl->tpl_vars['o']->iteration <= $_smarty_tpl->tpl_vars['o']->total;$_smarty_tpl->tpl_vars['o']->value += $_smarty_tpl->tpl_vars['o']->step, $_smarty_tpl->tpl_vars['o']->iteration++) {
$_smarty_tpl->tpl_vars['o']->first = $_smarty_tpl->tpl_vars['o']->iteration == 1;$_smarty_tpl->tpl_vars['o']->last = $_smarty_tpl->tpl_vars['o']->iteration == $_smarty_tpl->tpl_vars['o']->total;?>
                <li class="<?php if ($_smarty_tpl->tpl_vars['channel']->value['page']+1==$_smarty_tpl->tpl_vars['o']->value) {?>active<?php }?>"><a href="/channel/index?id=<?php echo $_smarty_tpl->tpl_vars['channel_id']->value;?>
&page=<?php echo $_smarty_tpl->tpl_vars['o']->value-1;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['o']->value;?>
</a></li>
                <?php }} ?>
                <li class="next <?php if (($_smarty_tpl->tpl_vars['channel']->value['page']+1)==$_smarty_tpl->tpl_vars['channel']->value['page_all']) {?>disabled<?php }?>">
                    <a href="/channel/index?id=<?php echo $_smarty_tpl->tpl_vars['channel_id']->value;?>
&page=<?php echo min($_smarty_tpl->tpl_vars['channel']->value['page']+1,$_smarty_tpl->tpl_vars['channel']->value['page_all']-1);?>
" target="_blank"><span class="hidden-480">Next</span> → </a>
                </li>
            </ul>
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
