<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-03-17 23:06:26
         compiled from "/Library/WebServer/Documents/blog/yunguan/trunk/application/views/default/wap/outbound/index.html" */ ?>
<?php /*%%SmartyHeaderCode:9381312258cbfb729682b4-65394874%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5fbdd92114f851730e2c30caa1ce6bd9a03e701e' => 
    array (
      0 => '/Library/WebServer/Documents/blog/yunguan/trunk/application/views/default/wap/outbound/index.html',
      1 => 1489763003,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9381312258cbfb729682b4-65394874',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'system' => 0,
    'value' => 0,
    'outbound' => 0,
    'o' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58cbfb72acfdd5_40783505',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58cbfb72acfdd5_40783505')) {function content_58cbfb72acfdd5_40783505($_smarty_tpl) {?><!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
    <title>周边游</title>
    <link rel="stylesheet" href="/statics/wap/css/comm.css" />
    <link rel="stylesheet" href="/statics/wap/css/index.css" />
    <link rel="stylesheet" href="/statics/wap/css/swiper.min.css" />
</head>
<body class="wap-bg-1">

<header class="wap-bg-5 wap-pst-r" id="listheader">
    <h3 class="wap-fnts-2">周边旅游</h3>
    <a href="#" class="list-top-a1"  id="check"><img src="/statics/wap/images/fkico.png" /></a>
    <a href="/" class="list-top-a2"><img src="/statics/wap/images/jtico.png"  /></a>
</header>
<div id="listnavbox" style="display: none;">
    <div class="navlist1 wap-bg-2 wap-pad-1">
        <ul class="listnav">
            <li class="index "><a href="/">首页</a></li>
            <li class="around "><a href="/m/around">周边游</a></li>
            <li class="inbound "><a href="/m/inbound">国内游</a></li>
            <li class="outbound "><a href="/m/outbound">境外游</a></li>
            <li class="ticket "><a href="/m/ticket">主题游</a></li>
            <li class="local "><a href="/m/local">本地游玩</a></li>
        </ul>
        <h3 class="wap-fnts-1">出发地</h3>
        <div id="brand">
            <ul class="listnav">
                <li class="gree"><a href="#">不限</a> </li>
                <?php if (!empty($_smarty_tpl->tpl_vars['system']->value)) {?>
                <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['system']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                <?php if ($_smarty_tpl->tpl_vars['value']->value['system_class']==1) {?>
                <li ast="<?php echo $_smarty_tpl->tpl_vars['value']->value['system_id'];?>
" ><a href="outbound_start=<?php echo $_smarty_tpl->tpl_vars['value']->value['system_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['system_name'];?>
</a></li>
                <?php }?>
                <?php } ?>
                <?php }?>
            </ul>

        </div>
        <h3 class="wap-fnts-1">目的地</h3>
        <div id="brand1" class="jy-border-bd-1">
            <ul class="listnav">
                <li class="gree"><a href="#">不限</a> </li>
                <?php if (!empty($_smarty_tpl->tpl_vars['system']->value)) {?>
                <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['system']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                <?php if ($_smarty_tpl->tpl_vars['value']->value['system_class']==2) {?>
                <li ast="<?php echo $_smarty_tpl->tpl_vars['value']->value['system_id'];?>
" ><a href="outbound_end=<?php echo $_smarty_tpl->tpl_vars['value']->value['system_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['system_name'];?>
</a></li>
                <?php }?>
                <?php } ?>
                <?php }?>
            </ul>
        </div>
        <h3 class="wap-fnts-1">出游天数</h3>
        <div id="brand2" class="jy-border-bd-1">
            <ul class="listnav">
                <li class="gree"><a href="#">不限</a> </li>
                <?php if (!empty($_smarty_tpl->tpl_vars['system']->value)) {?>
                <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['system']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                <?php if ($_smarty_tpl->tpl_vars['value']->value['system_class']==3) {?>
                <li ast="<?php echo $_smarty_tpl->tpl_vars['value']->value['system_id'];?>
" ><a href="outbound_day=<?php echo $_smarty_tpl->tpl_vars['value']->value['system_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['system_name'];?>
</a></li>
                <?php }?>
                <?php } ?>
                <?php }?>
            </ul>
        </div>
        <h3 class="wap-fnts-1">出发时间</h3>
        <div id="brand3" class="jy-border-bd-1">
            <ul class="listnav">
                <li class="gree"><a href="#">不限</a> </li>
                <?php if (!empty($_smarty_tpl->tpl_vars['system']->value)) {?>
                <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['system']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                <?php if ($_smarty_tpl->tpl_vars['value']->value['system_class']==4) {?>
                <li ast="<?php echo $_smarty_tpl->tpl_vars['value']->value['system_id'];?>
" ><a href="outbound_start_time=<?php echo $_smarty_tpl->tpl_vars['value']->value['system_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['system_name'];?>
</a></li>
                <?php }?>
                <?php } ?>
                <?php }?>
            </ul>
        </div>
        <h3 class="wap-fnts-1">主题路线</h3>
        <div id="brand4" class="jy-border-bd-1">
            <ul class="listnav">
                <li class="gree"><a href="#">不限</a> </li>
                <?php if (!empty($_smarty_tpl->tpl_vars['system']->value)) {?>
                <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['system']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                <?php if ($_smarty_tpl->tpl_vars['value']->value['system_class']==5) {?>
                <li ast="<?php echo $_smarty_tpl->tpl_vars['value']->value['system_id'];?>
" ><a href="outbound_sub_line=<?php echo $_smarty_tpl->tpl_vars['value']->value['system_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['system_name'];?>
</a></li>
                <?php }?>
                <?php } ?>
                <?php }?>
            </ul>
        </div>

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

<!--国内旅游-->
<section id="content-box" class="wap-bg-2 wap-marg-t-1">
    <div class="text-list">
        <ul class="wap-ul-1">
            <?php if (!empty($_smarty_tpl->tpl_vars['outbound']->value)) {?>
            <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['outbound']->value['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
            <li>
                <a href="/m/outbound/details/<?php echo $_smarty_tpl->tpl_vars['value']->value['outbound_id'];?>
.html">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['value']->value['outbound_pic1'];?>
" style="width:400px;height:145px;" />
                    <dl class="text-dl-1 wap-pst-r">
                        <dd><?php echo cut_str($_smarty_tpl->tpl_vars['value']->value['outbound_name'],30);?>
</dd>
                        <dt><?php echo cut_str($_smarty_tpl->tpl_vars['value']->value['outbound_spot'],30);?>
</dt>
                        <label><b><?php echo $_smarty_tpl->tpl_vars['value']->value['outbound_end_name'];?>
</b><i class="wap-fr">￥<?php echo $_smarty_tpl->tpl_vars['value']->value['outbound_market_price'];?>
<em>起/份</em></i></label>
                    </dl>
                </a>
            </li>
            <?php } ?>
            <?php }?>
        </ul>
    </div>

</section>
<div class="clear"></div>
<div class="pagination pagination-left">
    <ul>
        <li class="prev <?php if ($_smarty_tpl->tpl_vars['outbound']->value['page']==0) {?>disabled<?php }?>">
            <a href="/m/outbound/page_<?php echo max($_smarty_tpl->tpl_vars['outbound']->value['page']-1,0);?>
.html" target="_blank"> ← <span class="hidden-480">Prev</span></a>
        </li>
        <?php $_smarty_tpl->tpl_vars['o'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['o']->step = 1;$_smarty_tpl->tpl_vars['o']->total = (int) ceil(($_smarty_tpl->tpl_vars['o']->step > 0 ? $_smarty_tpl->tpl_vars['outbound']->value['page_all']+1 - (1) : 1-($_smarty_tpl->tpl_vars['outbound']->value['page_all'])+1)/abs($_smarty_tpl->tpl_vars['o']->step));
if ($_smarty_tpl->tpl_vars['o']->total > 0) {
for ($_smarty_tpl->tpl_vars['o']->value = 1, $_smarty_tpl->tpl_vars['o']->iteration = 1;$_smarty_tpl->tpl_vars['o']->iteration <= $_smarty_tpl->tpl_vars['o']->total;$_smarty_tpl->tpl_vars['o']->value += $_smarty_tpl->tpl_vars['o']->step, $_smarty_tpl->tpl_vars['o']->iteration++) {
$_smarty_tpl->tpl_vars['o']->first = $_smarty_tpl->tpl_vars['o']->iteration == 1;$_smarty_tpl->tpl_vars['o']->last = $_smarty_tpl->tpl_vars['o']->iteration == $_smarty_tpl->tpl_vars['o']->total;?>
        <li class="<?php if ($_smarty_tpl->tpl_vars['outbound']->value['page']+1==$_smarty_tpl->tpl_vars['o']->value) {?>active<?php }?>"><a href="/m/outbound/page_<?php echo $_smarty_tpl->tpl_vars['o']->value-1;?>
.html" target="_blank"><?php echo $_smarty_tpl->tpl_vars['o']->value;?>
</a></li>
        <?php }} ?>
        <li class="next <?php if (($_smarty_tpl->tpl_vars['outbound']->value['page']+1)==$_smarty_tpl->tpl_vars['outbound']->value['page_all']) {?>disabled<?php }?>">
            <a href="/m/outbound/page_<?php echo min($_smarty_tpl->tpl_vars['outbound']->value['page']+1,$_smarty_tpl->tpl_vars['outbound']->value['page_all']-1);?>
.html" target="_blank"><span class="hidden-480">Next</span> → </a>
        </li>
    </ul>
</div>
<!--底部-->
<?php echo $_smarty_tpl->getSubTemplate ('../common/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo '<script'; ?>
 src="/statics/pc/js/jquery-1.8.3.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="application/javascript">
    var ast = {
        getoutbound_start : null,//url中outbound_start值
        getoutbound_end : null,//url中outbound_end值
        getoutbound_day : null,//url中outbound_day值
        getoutbound_start_time : null,//url中outbound_start_time值
        getpoutbound_sub_line : null,//url中outbound_sub_line值
        domoutbound_start : null,
        domoutbound_end : null,
        domoutbound_day : null,
        domoutbound_start_time : null,
        domoutbound_sub_line : null,
        init : function(){
            ast.urlResolve();//获取url中五个参数

            ast.domoutbound_start = $('#brand li');
            ast.operateSelect(ast.domoutbound_start,ast.getoutbound_start);
            ast.operateHref(ast.domoutbound_start,'outbound_start');

            ast.domoutbound_end = $('#brand1 li');
            ast.operateSelect(ast.domoutbound_end,ast.getoutbound_end);
            ast.operateHref(ast.domoutbound_end,'outbound_end');

            ast.domoutbound_day = $('#brand2 li');
            ast.operateSelect(ast.domoutbound_day,ast.getoutbound_day);
            ast.operateHref(ast.domoutbound_day,'outbound_day');

            ast.domoutbound_start_time = $('#brand3 li');
            ast.operateSelect(ast.domoutbound_start_time,ast.getoutbound_start_time);
            ast.operateHref(ast.domoutbound_start_time,'outbound_start_time');

            ast.domoutbound_sub_line = $('#brand4 li');
            ast.operateSelect(ast.domoutbound_sub_line,ast.getpoutbound_sub_line);
            ast.operateHref(ast.domoutbound_sub_line,'outbound_sub_line');
        },
        urlResolve : function(){
            /*
             以?分隔符，如果返回数组长度等于2，get[1]的数据类似brand=2&grade=13&price=0-5
             再以&分隔符分隔参数，再分别用brand=、grade=、price=得到各自的url参数
             */
            get = document.location.href.split('?');
            if (get.length==2){
                gets = get[1].split('&');
                for (i=0;i<gets.length;i++){
                    tem = gets[i].split('outbound_start=');
                    if (tem.length==2){ast.getoutbound_start = tem[1];	continue;}
                    tem = gets[i].split('outbound_end=');
                    if (tem.length==2){ast.getoutbound_end = tem[1];	continue;}
                    tem = gets[i].split('outbound_day=');
                    if (tem.length==2){ast.getoutbound_day = tem[1];	continue;}
                    tem = gets[i].split('outbound_start_time=');
                    if (tem.length==2){ast.getoutbound_start_time = tem[1];	continue;}
                    tem = gets[i].split('outbound_sub_line=');
                    if (tem.length==2){ast.getpoutbound_sub_line = tem[1];	continue;}
                }
            }
        },
        operateSelect : function(dom,urlattr){
            /*
             如果特定url参数不为空，比如brand=2，则首先清除不限的选中样式
             再循环查找到li属性ast=urlattr，标记选中，结束循环
             */
            if (urlattr!=null){
                dom.first().removeClass('gree');
                ast._urlattr = urlattr;
                dom.each(function(){
                    if ($(this).attr('ast')==ast._urlattr){
                        $(this).addClass('gree');	return;
                    }
                });
            }
        },
        operateHref : function(dom,type){
            /*
             将三url参数保存到副本中，type枚举:'brand'、'grade'、'price'
             当type='brand'表示操作<div id="brand">，此时ast._getbrand不取url中brand值，而取<li ast="2">中ast参数
             type='grade'、type='price' 类推

             _getbrand如果为空返回‘?’，不为空返回'?brand='
             href 不等于'?'且_getgrade不为空，则需要&拼接
             最终得到相应href字符串
             */
            ast._type = type;
            dom.each(function() {
                ast._getoutbound_start = ast.getoutbound_start;
                ast._getoutbound_end = ast.getoutbound_end;
                ast._getoutbound_day = ast.getoutbound_day;
                ast._getoutbound_start_time = ast.getoutbound_start_time;
                ast._getpoutbound_sub_line = ast.getpoutbound_sub_line;

                switch (ast._type){
                    case 'outbound_start':
                        ast._getoutbound_start = $(this).attr('ast');	break;
                    case 'outbound_end':
                        ast._getoutbound_end = $(this).attr('ast');	break;
                    case 'outbound_day':
                        ast._getoutbound_day = $(this).attr('ast');	break;
                    case 'outbound_start_time':
                        ast._getoutbound_start_time = $(this).attr('ast');	break;
                    case 'outbound_sub_line':
                        ast._getpoutbound_sub_line = $(this).attr('ast');	break;
                }
                href = ast._getoutbound_start==null ? '?' : '?outbound_start=' + ast._getoutbound_start;
                href += ((href!='?' && ast._getoutbound_end!=null) ? '&' : '') + (ast._getoutbound_end==null ? '' : 'outbound_end=' + ast._getoutbound_end);
                href += ((href!='?' && ast._getoutbound_day!=null) ? '&' : '') + (ast._getoutbound_day==null ? '' : 'outbound_day=' + ast._getoutbound_day);
                href += ((href!='?' && ast._getoutbound_start_time!=null) ? '&' : '') + (ast._getoutbound_start_time==null ? '' : 'outbound_start_time=' + ast._getoutbound_start_time);
                href += ((href!='?' && ast._getpoutbound_sub_line!=null) ? '&' : '') + (ast._getpoutbound_sub_line==null ? '' : 'outbound_sub_line=' + ast._getpoutbound_sub_line);
                $(this).children('a').attr('href',href);
            });
        }
    }
    $(function(){
        ast.init();
    });
    $('.outbound').addClass('gree');
<?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
