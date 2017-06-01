<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-03-17 14:51:24
         compiled from "/Library/WebServer/Documents/blog/yunguan/trunk/application/views/default/m/common/header.html" */ ?>
<?php /*%%SmartyHeaderCode:15460414258cb876cc41817-20262010%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73a9c7eb1fe5ffbf564ed301d30c22cd45e4a02b' => 
    array (
      0 => '/Library/WebServer/Documents/blog/yunguan/trunk/application/views/default/m/common/header.html',
      1 => 1489718711,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15460414258cb876cc41817-20262010',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ad_1' => 0,
    'ad_2' => 0,
    'ad_3' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58cb876cc85794_99266401',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58cb876cc85794_99266401')) {function content_58cb876cc85794_99266401($_smarty_tpl) {?><div id="headerdiv">
    <div class="top-div jy-bg-1">
        <div class="jy-w-1 jy-m-0 jy-p-tb-1 jy-pos-r jy-div-1">
            <i>家园旅游&nbsp;&nbsp;Hi最近要去哪里玩耍？</i>
            <span class="jy-f-right lod-dl">
						<a href="#" class="ico1">微信</a>
						<a href="/m/" class="ico2">手机客户端</a>
					</span>
        </div>
    </div>

    <!--广告区1-->
    <div id="banner-1" class="jy-w-1 jy-m-0" style="overflow: hidden;">
        <?php if (!empty($_smarty_tpl->tpl_vars['ad_1']->value)) {?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['ad_1']->value['ad_url'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['ad_1']->value['ad_pic'];?>
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
                    <li class="index "><a href="/" target="_blank">首页</a></li>
                    <li class="around "><a href="/around" target="_blank">周边游</a></li>
                    <li class="inbound "><a href="/inbound" target="_blank">国内游</a></li>
                    <li class="outbound "><a href="/outbound" target="_blank">出境游</a></li>
                    <li class="local "><a href="/local" target="_blank">本地游玩</a></li>
                    <li class="ticket "><a href="/ticket" target="_blank">景点门票</a></li>
                    <li class="theme "><a href="/theme" target="_blank">主题游</a></li>
                </ul>
            </div>
        </div>
    </div>
</div><?php }} ?>
