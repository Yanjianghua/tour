<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-03-14 23:16:08
         compiled from "C:\wamp64\www\blog\yunguan\trunk\application\views\default\layout\index.html" */ ?>
<?php /*%%SmartyHeaderCode:125458c80938d4fe45-40265009%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6175e853f6e995e4dd95c1c0682d364e95e8e71e' => 
    array (
      0 => 'C:\\wamp64\\www\\blog\\yunguan\\trunk\\application\\views\\default\\layout\\index.html',
      1 => 1489417733,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '125458c80938d4fe45-40265009',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ad_1' => 0,
    'ad_2' => 0,
    'ad_3' => 0,
    'ad_4' => 0,
    'key' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58c809390ba825_44532750',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c809390ba825_44532750')) {function content_58c809390ba825_44532750($_smarty_tpl) {?><!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<html>
<head>
    <meta charset="utf-8" />
    <title></title>
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
<div id="headerdiv">
    <div class="top-div jy-bg-1">
        <div class="jy-w-1 jy-m-0 jy-p-tb-1 jy-pos-r jy-div-1">
            <i>家园旅游&nbsp;&nbsp;Hi最近要去哪里玩耍？</i>
					<span class="jy-f-right lod-dl">
						<a href="#" class="ico1">微信</a>
						<a href="#" class="ico2">手机客户端</a>
					</span>
        </div>
    </div>

    <!--广告区1-->
    <div id="banner-1" class="jy-w-1 jy-m-0" style="overflow: hidden;">
        <?php if (!empty($_smarty_tpl->tpl_vars['ad_1']->value)) {?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['ad_1']->value['ad_url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['ad_1']->value['ad_pic'];?>
" /></a>
        <?php } else { ?>
        <a href="/"><img src="" /></a>
        <?php }?>
    </div>

    <!--LOGO区-->
    <div class="jy-w-1 jy-m-2">
        <?php if (!empty($_smarty_tpl->tpl_vars['ad_2']->value)) {?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['ad_2']->value['ad_url'];?>
" class="logo" title="家园旅游"><img src="<?php echo $_smarty_tpl->tpl_vars['ad_2']->value['ad_pic'];?>
"></a>
        <?php } else { ?>
        <a href="/" class="logo" title="家园旅游"><img src="images/logo.png"></a>
        <?php }?>
        <?php if (!empty($_smarty_tpl->tpl_vars['ad_3']->value)) {?>
        <img src="<?php echo $_smarty_tpl->tpl_vars['ad_3']->value['ad_pic'];?>
" class="jy-f-right">
        <?php } else { ?>
        <img src="images/kf.jpg" class="jy-f-right">
        <?php }?>
    </div>

    <!--导航-->
    <div id="nav-div" class="jy-border-b-2">
        <div class="jy-m-0 jy-w-1 ">
            <div class="nav">
                <ul>
                    <li class="select1"><a href="#">首页</a></li>
                    <li><a href="list.html">周边游</a></li>
                    <li><a href="list.html">国内游</a></li>
                    <li><a href="list.html">出境游</a></li>
                    <li><a href="list.html">本地游玩</a></li>
                    <li><a href="list.html">景点门票</a></li>
                    <li><a href="list.html">主题游</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--导航与广告-->
<div id="scrollpicdiv" class="jy-pos-r" style="height: 510px;">
    <div class="jy-w-1 jy-m-0 jy-pos-r nav-list" style="z-index:2;">
        <div class="jy-p-1 jy-bg-3 jy-w-2" style="position: absolute;top: 15px;">
            <div class="nav-1 jy-border-b-3 jy-pb-1">
                <h3 class="jy-pb-1">本地游玩</h3>
                <a href="list.html">乳源大峡谷</a>
                <a href="list.html">云门寺</a>
                <a href="list.html">丹霞山</a>
                <a href="list.html">南华寺</a>
            </div>
            <div class="nav-1 jy-border-b-3 jy-m-1 jy-pb-1">
                <h3 class="jy-pb-1">周边游</h3>
                <a href="list.html">广州</a>
                <a href="list.html">清远 </a>
                <a href="list.html">深圳</a>
                <a href="list.html">惠州</a>
                <a href="list.html">江门</a>
            </div>
            <div class="nav-1 jy-border-b-3 jy-m-1 jy-pb-1">
                <h3 class="jy-pb-1">国内游</h3>
                <a href="list.html">云南</a>
                <a href="list.html">北京</a>
                <a href="list.html">青海</a>
                <a href="list.html">九寨沟</a>
                <a href="list.html">西藏</a>
            </div>
            <div class="nav-1 jy-border-b-3 jy-m-1 jy-pb-1">
                <h3 class="jy-pb-1">东南亚</h3>
                <a href="list.html">泰国</a>
                <a href="list.html">新加坡</a>
                <a href="list.html">马来西亚</a>
            </div>
            <div class="nav-1 jy-border-b-3 jy-m-1 jy-pb-1">
                <h3 class="jy-pb-1">韩国   日本    港澳台</h3>
                <a href="list.html">首尔</a>
                <a href="list.html">东京</a>
                <a href="list.html">香港</a>
                <a href="list.html">澳门</a>
                <a href="list.html">台湾</a>
            </div>
            <div class="nav-1 jy-m-1 jy-pb-1">
                <h3 class="jy-pb-1">欧洲   美国   俄罗斯</h3>
                <a href="#">法国 </a>
                <a href="#">德国</a>
                <a href="#">莫斯科</a>
                <a href="#">瑞士</a>
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
                    <a href="#">
                        <img src="images/mpic1.jpg" />
                        <span></span>
                        <h3>厦门-鼓浪屿4天半双飞自助游</h3>
                    </a>
                    <a href="#">
                        <img src="images/mpic2.jpg" />
                        <span></span>
                        <h3>厦门-鼓浪屿4天半双飞自助游</h3>
                    </a>
                    <a href="#">
                        <img src="images/mpic1.jpg" />
                        <span></span>
                        <h3>厦门-鼓浪屿4天半双飞自助游</h3>
                    </a>
                    <a href="#">
                        <img src="images/mpic2.jpg" />
                        <span></span>
                        <h3>厦门-鼓浪屿4天半双飞自助游</h3>
                    </a>
                    <a href="#">
                        <img src="images/mpic1.jpg" />
                        <span></span>
                        <h3>厦门-鼓浪屿4天半双飞自助游</h3>
                    </a>
                </div>
            </div>
            <!--本地游玩-->
            <div class="tg-div jy-p-2 jy-bg-7 jy-m-2 ">
                <h3 class="jy-h3-0 jy-cor-1 jy-ds-inl">本地游玩</h3>
                <div class="a-divbox-2">
                    <a href="#">
                        <img src="images/mpic3.jpg" />
                        <dl>
                            <dt>韶关-曲江大塘花海</dt>
                            <dt class="line-t">￥95</dt>
                            <dd>￥85</dd>
                        </dl>
                    </a>
                    <a href="#">
                        <img src="images/mpic3.jpg" />
                        <dl>
                            <dt>韶关-曲江大塘花海</dt>
                            <dt class="line-t">￥95</dt>
                            <dd>￥85</dd>
                        </dl>
                    </a>
                    <a href="#">
                        <img src="images/mpic3.jpg" />
                        <dl>
                            <dt>韶关-曲江大塘花海</dt>
                            <dt class="line-t">￥95</dt>
                            <dd>￥85</dd>
                        </dl>
                    </a>

                </div>
            </div>
        </div>
        <div class="tx-w-1 jy-f-left">
            <h3 class="jy-h3-0 jy-cor-0 jy-ds-inl">推荐线路</h3>
            <a href="#" class="jy-f-right">更多</a>
            <div class="jy-ul-1" id="listdivbox">
                <ul>
                    <li>
                        <a href="#"><img src="images/pic1.jpg" /></a>
									<span>
										<h3><a href="#"><em>广州 3天2晚</em>【交易会特惠】【广州塔＋珠江夜游＋国际复式园景LOFT公寓3天2晚自由行】住天河珠江新城伊莲·萨维尔酒店国际酒店复式园景...</a></h3>
										<dl>
                                            <dt class="tx-ico-1">酒店：广州花都合景喜来登度假酒店 </dt>
                                            <dt class="tx-ico-2">景点：长隆,长隆欢乐世界,长隆野生动物园 </dt>
                                        </dl>
									</span>
                        <label>
                            <dl>
                                <dt><em>￥</em>988<i>起</i></dt>
                                <dd>原价:￥1200/人</dd>
                            </dl>
                            <button type="button" value="">立即预定</button>
                        </label>
                    </li>
                    <li>
                        <a href="#"><img src="images/pic1.jpg" /></a>
									<span>
										<h3><a href="#"><em>广州 3天2晚</em>【交易会特惠】【广州塔＋珠江夜游＋国际复式园景LOFT公寓3天2晚自由行】住天河珠江新城伊莲·萨维尔酒店国际酒店复式园景...</a></h3>
										<dl>
                                            <dt class="tx-ico-1">酒店：广州花都合景喜来登度假酒店 </dt>
                                            <dt class="tx-ico-2">景点：长隆,长隆欢乐世界,长隆野生动物园 </dt>
                                        </dl>
									</span>
                        <label>
                            <dl>
                                <dt><em>￥</em>988<i>起</i></dt>
                                <dd>原价:￥1200/人</dd>
                            </dl>
                            <button type="button" value="">立即预定</button>
                        </label>
                    </li>
                    <li>
                        <a href="#"><img src="images/pic1.jpg" /></a>
									<span>
										<h3><a href="#"><em>广州 3天2晚</em>【交易会特惠】【广州塔＋珠江夜游＋国际复式园景LOFT公寓3天2晚自由行】住天河珠江新城伊莲·萨维尔酒店国际酒店复式园景...</a></h3>
										<dl>
                                            <dt class="tx-ico-1">酒店：广州花都合景喜来登度假酒店 </dt>
                                            <dt class="tx-ico-2">景点：长隆,长隆欢乐世界,长隆野生动物园 </dt>
                                        </dl>
									</span>
                        <label>
                            <dl>
                                <dt><em>￥</em>988<i>起</i></dt>
                                <dd>原价:￥1200/人</dd>
                            </dl>
                            <button type="button" value="">立即预定</button>
                        </label>
                    </li>
                    <li>
                        <a href="#"><img src="images/pic1.jpg" /></a>
									<span>
										<h3><a href="#"><em>广州 3天2晚</em>【交易会特惠】【广州塔＋珠江夜游＋国际复式园景LOFT公寓3天2晚自由行】住天河珠江新城伊莲·萨维尔酒店国际酒店复式园景...</a></h3>
										<dl>
                                            <dt class="tx-ico-1">酒店：广州花都合景喜来登度假酒店 </dt>
                                            <dt class="tx-ico-2">景点：长隆,长隆欢乐世界,长隆野生动物园 </dt>
                                        </dl>
									</span>
                        <label>
                            <dl>
                                <dt><em>￥</em>988<i>起</i></dt>
                                <dd>原价:￥1200/人</dd>
                            </dl>
                            <button type="button" value="">立即预定</button>
                        </label>
                    </li>
                    <li>
                        <a href="#"><img src="images/pic1.jpg" /></a>
									<span>
										<h3><a href="#"><em>广州 3天2晚</em>【交易会特惠】【广州塔＋珠江夜游＋国际复式园景LOFT公寓3天2晚自由行】住天河珠江新城伊莲·萨维尔酒店国际酒店复式园景...</a></h3>
										<dl>
                                            <dt class="tx-ico-1">酒店：广州花都合景喜来登度假酒店 </dt>
                                            <dt class="tx-ico-2">景点：长隆,长隆欢乐世界,长隆野生动物园 </dt>
                                        </dl>
									</span>
                        <label>
                            <dl>
                                <dt><em>￥</em>988<i>起</i></dt>
                                <dd>原价:￥1200/人</dd>
                            </dl>
                            <button type="button" value="">立即预定</button>
                        </label>
                    </li>
                    <li>
                        <a href="#"><img src="images/pic1.jpg" /></a>
									<span>
										<h3><a href="#"><em>广州 3天2晚</em>【交易会特惠】【广州塔＋珠江夜游＋国际复式园景LOFT公寓3天2晚自由行】住天河珠江新城伊莲·萨维尔酒店国际酒店复式园景...</a></h3>
										<dl>
                                            <dt class="tx-ico-1">酒店：广州花都合景喜来登度假酒店 </dt>
                                            <dt class="tx-ico-2">景点：长隆,长隆欢乐世界,长隆野生动物园 </dt>
                                        </dl>
									</span>
                        <label>
                            <dl>
                                <dt><em>￥</em>988<i>起</i></dt>
                                <dd>原价:￥1200/人</dd>
                            </dl>
                            <button type="button" value="">立即预定</button>
                        </label>
                    </li>
                    <li>
                        <a href="#"><img src="images/pic1.jpg" /></a>
									<span>
										<h3><a href="#"><em>广州 3天2晚</em>【交易会特惠】【广州塔＋珠江夜游＋国际复式园景LOFT公寓3天2晚自由行】住天河珠江新城伊莲·萨维尔酒店国际酒店复式园景...</a></h3>
										<dl>
                                            <dt class="tx-ico-1">酒店：广州花都合景喜来登度假酒店 </dt>
                                            <dt class="tx-ico-2">景点：长隆,长隆欢乐世界,长隆野生动物园 </dt>
                                        </dl>
									</span>
                        <label>
                            <dl>
                                <dt><em>￥</em>988<i>起</i></dt>
                                <dd>原价:￥1200/人</dd>
                            </dl>
                            <button type="button" value="">立即预定</button>
                        </label>
                    </li>
                    <li>
                        <a href="#"><img src="images/pic1.jpg" /></a>
									<span>
										<h3><a href="#"><em>广州 3天2晚</em>【交易会特惠】【广州塔＋珠江夜游＋国际复式园景LOFT公寓3天2晚自由行】住天河珠江新城伊莲·萨维尔酒店国际酒店复式园景...</a></h3>
										<dl>
                                            <dt class="tx-ico-1">酒店：广州花都合景喜来登度假酒店 </dt>
                                            <dt class="tx-ico-2">景点：长隆,长隆欢乐世界,长隆野生动物园 </dt>
                                        </dl>
									</span>
                        <label>
                            <dl>
                                <dt><em>￥</em>988<i>起</i></dt>
                                <dd>原价:￥1200/人</dd>
                            </dl>
                            <button type="button" value="">立即预定</button>
                        </label>
                    </li>
                    <li>
                        <a href="#"><img src="images/pic1.jpg" /></a>
									<span>
										<h3><a href="#"><em>广州 3天2晚</em>【交易会特惠】【广州塔＋珠江夜游＋国际复式园景LOFT公寓3天2晚自由行】住天河珠江新城伊莲·萨维尔酒店国际酒店复式园景...</a></h3>
										<dl>
                                            <dt class="tx-ico-1">酒店：广州花都合景喜来登度假酒店 </dt>
                                            <dt class="tx-ico-2">景点：长隆,长隆欢乐世界,长隆野生动物园 </dt>
                                        </dl>
									</span>
                        <label>
                            <dl>
                                <dt><em>￥</em>988<i>起</i></dt>
                                <dd>原价:￥1200/人</dd>
                            </dl>
                            <button type="button" value="">立即预定</button>
                        </label>
                    </li>
                    <li>
                        <a href="#"><img src="images/pic1.jpg" /></a>
									<span>
										<h3><a href="#"><em>广州 3天2晚</em>【交易会特惠】【广州塔＋珠江夜游＋国际复式园景LOFT公寓3天2晚自由行】住天河珠江新城伊莲·萨维尔酒店国际酒店复式园景...</a></h3>
										<dl>
                                            <dt class="tx-ico-1">酒店：广州花都合景喜来登度假酒店 </dt>
                                            <dt class="tx-ico-2">景点：长隆,长隆欢乐世界,长隆野生动物园 </dt>
                                        </dl>
									</span>
                        <label>
                            <dl>
                                <dt><em>￥</em>988<i>起</i></dt>
                                <dd>原价:￥1200/人</dd>
                            </dl>
                            <button type="button" value="">立即预定</button>
                        </label>
                    </li>

                </ul>
            </div>
        </div>


        <div class="clear"></div>
    </div>

    <!--景点门票-->
    <div class="jy-w-1 jy-m-3 jy-bg-7">
        <div class="tx-p-2 jy-pos-r">
            <h3 class="jy-h3-0 jy-cor-3 jy-ds-inl">景点门票</h3>
            <a href="#" class="jy-f-right jy-pr-2">更多</a>
            <div id="column" class="columdiv">
                <ul>
                    <li class="select2">韶关</li>
                    <li>广州</li>
                    <li>深圳</li>
                    <li>清远</li>
                    <li>珠海</li>
                </ul>
            </div>
            <div id="columnbox" class="columnbox">
                <div class="col-content">
                    <a href="#">
                        <img src="images/mpic5.jpg"/>
                        <span>广州长隆水上乐园</span>
                        <em>￥25/起</em>
                    </a>
                    <a href="#">
                        <img src="images/mpic5.jpg"/>
                        <span>广州长隆水上乐园</span>
                        <em>￥25/起</em>
                    </a>
                    <a href="#">
                        <img src="images/mpic5.jpg"/>
                        <span>广州长隆水上乐园</span>
                        <em>￥25/起</em>
                    </a>
                    <a href="#">
                        <img src="images/mpic5.jpg"/>
                        <span>广州长隆水上乐园</span>
                        <em>￥25/起</em>
                    </a>
                    <a href="#">
                        <img src="images/mpic5.jpg"/>
                        <span>广州长隆水上乐园</span>
                        <em>￥25/起</em>
                    </a>
                    <a href="#">
                        <img src="images/mpic5.jpg"/>
                        <span>广州长隆水上乐园</span>
                        <em>￥25/起</em>
                    </a>
                    <a href="#">
                        <img src="images/mpic5.jpg"/>
                        <span>广州长隆水上乐园</span>
                        <em>￥25/起</em>
                    </a>
                    <a href="#">
                        <img src="images/mpic5.jpg"/>
                        <span>广州长隆水上乐园</span>
                        <em>￥25/起</em>
                    </a>
                    <a href="#">
                        <img src="images/mpic5.jpg"/>
                        <span>广州长隆水上乐园</span>
                        <em>￥25/起</em>
                    </a>
                    <a href="#">
                        <img src="images/mpic5.jpg"/>
                        <span>广州长隆水上乐园</span>
                        <em>￥25/起</em>
                    </a>
                </div>


                <div class="col-content jy-hide">
                    <a href="#">
                        <img src="images/mpic6.jpg"/>
                        <span>广州长隆水上乐园</span>
                        <em>￥60/起</em>
                    </a>
                    <a href="#">
                        <img src="images/mpic6.jpg"/>
                        <span>广州长隆水上乐园</span>
                        <em>￥60/起</em>
                    </a>
                    <a href="#">
                        <img src="images/mpic6.jpg"/>
                        <span>广州长隆水上乐园</span>
                        <em>￥60/起</em>
                    </a>
                    <a href="#">
                        <img src="images/mpic6.jpg"/>
                        <span>广州长隆水上乐园</span>
                        <em>￥60/起</em>
                    </a>
                    <a href="#">
                        <img src="images/mpic6.jpg"/>
                        <span>广州长隆水上乐园</span>
                        <em>￥60/起</em>
                    </a>
                    <a href="#">
                        <img src="images/mpic6.jpg"/>
                        <span>广州长隆水上乐园</span>
                        <em>￥60/起</em>
                    </a>
                    <a href="#">
                        <img src="images/mpic6.jpg"/>
                        <span>广州长隆水上乐园</span>
                        <em>￥60/起</em>
                    </a>
                    <a href="#">
                        <img src="images/mpic6.jpg"/>
                        <span>广州长隆水上乐园</span>
                        <em>￥60/起</em>
                    </a>
                    <a href="#">
                        <img src="images/mpic6.jpg"/>
                        <span>广州长隆水上乐园</span>
                        <em>￥60/起</em>
                    </a>
                    <a href="#">
                        <img src="images/mpic6.jpg"/>
                        <span>广州长隆水上乐园</span>
                        <em>￥60/起</em>
                    </a>
                </div>

                <div class="col-content jy-hide">
                    <a href="#">
                        <img src="images/mpic7.jpg"/>
                        <span>广州长隆水上乐园</span>
                        <em>￥110/起</em>
                    </a>
                    <a href="#">
                        <img src="images/mpic7.jpg"/>
                        <span>广州长隆水上乐园</span>
                        <em>￥110/起</em>
                    </a>
                    <a href="#">
                        <img src="images/mpic7.jpg"/>
                        <span>广州长隆水上乐园</span>
                        <em>￥110/起</em>
                    </a>
                    <a href="#">
                        <img src="images/mpic7.jpg"/>
                        <span>广州长隆水上乐园</span>
                        <em>￥110/起</em>
                    </a>
                    <a href="#">
                        <img src="images/mpic7.jpg"/>
                        <span>广州长隆水上乐园</span>
                        <em>￥110/起</em>
                    </a>
                    <a href="#">
                        <img src="images/mpic7.jpg"/>
                        <span>广州长隆水上乐园</span>
                        <em>￥110/起</em>
                    </a>
                    <a href="#">
                        <img src="images/mpic7.jpg"/>
                        <span>广州长隆水上乐园</span>
                        <em>￥110/起</em>
                    </a>
                    <a href="#">
                        <img src="images/mpic7.jpg"/>
                        <span>广州长隆水上乐园</span>
                        <em>￥110/起</em>
                    </a>
                    <a href="#">
                        <img src="images/mpic7.jpg"/>
                        <span>广州长隆水上乐园</span>
                        <em>￥110/起</em>
                    </a>
                    <a href="#">
                        <img src="images/mpic7.jpg"/>
                        <span>广州长隆水上乐园</span>
                        <em>￥110/起</em>
                    </a>
                </div>

                <div class="col-content jy-hide">
                    <a href="#">
                        <img src="images/mpic5.jpg"/>
                        <span>广州长隆水上乐园</span>
                        <em>￥25/起</em>
                    </a>
                    <a href="#">
                        <img src="images/mpic5.jpg"/>
                        <span>广州长隆水上乐园</span>
                        <em>￥25/起</em>
                    </a>
                    <a href="#">
                        <img src="images/mpic5.jpg"/>
                        <span>广州长隆水上乐园</span>
                        <em>￥25/起</em>
                    </a>
                    <a href="#">
                        <img src="images/mpic5.jpg"/>
                        <span>广州长隆水上乐园</span>
                        <em>￥25/起</em>
                    </a>
                    <a href="#">
                        <img src="images/mpic5.jpg"/>
                        <span>广州长隆水上乐园</span>
                        <em>￥25/起</em>
                    </a>
                    <a href="#">
                        <img src="images/mpic5.jpg"/>
                        <span>广州长隆水上乐园</span>
                        <em>￥25/起</em>
                    </a>
                    <a href="#">
                        <img src="images/mpic5.jpg"/>
                        <span>广州长隆水上乐园</span>
                        <em>￥25/起</em>
                    </a>
                    <a href="#">
                        <img src="images/mpic5.jpg"/>
                        <span>广州长隆水上乐园</span>
                        <em>￥25/起</em>
                    </a>
                    <a href="#">
                        <img src="images/mpic5.jpg"/>
                        <span>广州长隆水上乐园</span>
                        <em>￥25/起</em>
                    </a>
                    <a href="#">
                        <img src="images/mpic5.jpg"/>
                        <span>广州长隆水上乐园</span>
                        <em>￥25/起</em>
                    </a>
                </div>

                <div class="col-content jy-hide">
                    <a href="#">
                        <img src="images/mpic6.jpg"/>
                        <span>广州长隆水上乐园</span>
                        <em>￥60/起</em>
                    </a>
                    <a href="#">
                        <img src="images/mpic6.jpg"/>
                        <span>广州长隆水上乐园</span>
                        <em>￥60/起</em>
                    </a>
                    <a href="#">
                        <img src="images/mpic6.jpg"/>
                        <span>广州长隆水上乐园</span>
                        <em>￥60/起</em>
                    </a>
                    <a href="#">
                        <img src="images/mpic6.jpg"/>
                        <span>广州长隆水上乐园</span>
                        <em>￥60/起</em>
                    </a>
                    <a href="#">
                        <img src="images/mpic6.jpg"/>
                        <span>广州长隆水上乐园</span>
                        <em>￥60/起</em>
                    </a>
                    <a href="#">
                        <img src="images/mpic6.jpg"/>
                        <span>广州长隆水上乐园</span>
                        <em>￥60/起</em>
                    </a>
                    <a href="#">
                        <img src="images/mpic6.jpg"/>
                        <span>广州长隆水上乐园</span>
                        <em>￥60/起</em>
                    </a>
                    <a href="#">
                        <img src="images/mpic6.jpg"/>
                        <span>广州长隆水上乐园</span>
                        <em>￥60/起</em>
                    </a>
                    <a href="#">
                        <img src="images/mpic6.jpg"/>
                        <span>广州长隆水上乐园</span>
                        <em>￥60/起</em>
                    </a>
                    <a href="#">
                        <img src="images/mpic6.jpg"/>
                        <span>广州长隆水上乐园</span>
                        <em>￥60/起</em>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>

<div id="fromshow2" style="display: none;" >
    <div class="formbg"></div>
    <div class="formdiv2">
        <form method="post" name="" id="form_01">
            <div id="myform3">
                <h3></h3>
                <label> <input type="text" name="username" value="" id="user1" placeholder="姓名" class="input1 jy-ico-1" /><dd>请输入用户名</dd> </label>
                <label> <input type="text" name="telnum" value="" id="user2" placeholder="手机号" class="input1 jy-ico-2" /><dd>请输入手机号</dd> </label>
            </div>
            <div  class="date-labe">
                <input class="laydate-icon" placeholder="出行时间" onClick="laydate()">
                <i></i>
            </div>
            <div class="date-labe numpeople-div" id="numpeople1">
                <label>成人<i class="reduc-i">-</i><input type="text" value="1" /><i class="add-i">+</i></label>
                <label>儿童<i class="reduc-i">-</i><input type="text" value="0" /><i class="add-i">+</i></label>
            </div>
            <button type="button" value="" class="but1">立即提交</button>
            <span id="closefrom2"></span>
        </form>
    </div>
</div>

<?php echo '<script'; ?>
 src="/statics/pc/js/hd.js"><?php echo '</script'; ?>
>
<!--底部-->
<div id="footer" class="jy-bg-8 jy-mt-3">
    <div class="jy-w-1 jy-m-0 bottom">
        <a href="#">关于我们 </a>
        <a href="#">广告报价</a>
        <a href="#">招聘信息 </a>
        <a href="#">服务条款 </a>
        <a href="#">保护隐私权</a>
        <a href="#">免责条款</a>
        <a href="#">联系我们</a>
        <p>Copyright © sg169.com All Rights Reserved. 韶关家园 版权所有</p>
    </div>
</div>
</body>
</html><?php }} ?>
