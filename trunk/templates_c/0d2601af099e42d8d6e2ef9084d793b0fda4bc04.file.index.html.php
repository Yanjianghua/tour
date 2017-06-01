<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-03-17 23:23:55
         compiled from "/Library/WebServer/Documents/blog/yunguan/trunk/application/views/default/wap/ticket/index.html" */ ?>
<?php /*%%SmartyHeaderCode:170929403058cbff8b59f8a9-20223651%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d2601af099e42d8d6e2ef9084d793b0fda4bc04' => 
    array (
      0 => '/Library/WebServer/Documents/blog/yunguan/trunk/application/views/default/wap/ticket/index.html',
      1 => 1489764219,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170929403058cbff8b59f8a9-20223651',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'system' => 0,
    'value' => 0,
    'ticket' => 0,
    'o' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58cbff8b6cf5b1_41708287',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58cbff8b6cf5b1_41708287')) {function content_58cbff8b6cf5b1_41708287($_smarty_tpl) {?><!DOCTYPE html>
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
    <h3 class="wap-fnts-2">景点门票</h3>
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
" ><a href="ticket_start=<?php echo $_smarty_tpl->tpl_vars['value']->value['system_id'];?>
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
" ><a href="ticket_end=<?php echo $_smarty_tpl->tpl_vars['value']->value['system_id'];?>
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
" ><a href="ticket_day=<?php echo $_smarty_tpl->tpl_vars['value']->value['system_id'];?>
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
" ><a href="ticket_start_time=<?php echo $_smarty_tpl->tpl_vars['value']->value['system_id'];?>
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
" ><a href="ticket_sub_line=<?php echo $_smarty_tpl->tpl_vars['value']->value['system_id'];?>
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
            <?php if (!empty($_smarty_tpl->tpl_vars['ticket']->value)) {?>
            <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ticket']->value['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
            <li>
                <a href="/m/ticket/details/<?php echo $_smarty_tpl->tpl_vars['value']->value['ticket_id'];?>
.html">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['value']->value['ticket_pic1'];?>
" style="width:400px;height:145px;" />
                    <dl class="text-dl-1 wap-pst-r">
                        <dd><?php echo cut_str($_smarty_tpl->tpl_vars['value']->value['ticket_name'],30);?>
</dd>
                        <dt><?php echo cut_str($_smarty_tpl->tpl_vars['value']->value['ticket_spot'],30);?>
</dt>
                        <label><b><?php echo $_smarty_tpl->tpl_vars['value']->value['ticket_end_name'];?>
</b><i class="wap-fr">￥<?php echo $_smarty_tpl->tpl_vars['value']->value['ticket_market_price'];?>
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
        <li class="prev <?php if ($_smarty_tpl->tpl_vars['ticket']->value['page']==0) {?>disabled<?php }?>">
            <a href="/m/ticket/page_<?php echo max($_smarty_tpl->tpl_vars['ticket']->value['page']-1,0);?>
.html" target="_blank"> ← <span class="hidden-480">Prev</span></a>
        </li>
        <?php $_smarty_tpl->tpl_vars['o'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['o']->step = 1;$_smarty_tpl->tpl_vars['o']->total = (int) ceil(($_smarty_tpl->tpl_vars['o']->step > 0 ? $_smarty_tpl->tpl_vars['ticket']->value['page_all']+1 - (1) : 1-($_smarty_tpl->tpl_vars['ticket']->value['page_all'])+1)/abs($_smarty_tpl->tpl_vars['o']->step));
if ($_smarty_tpl->tpl_vars['o']->total > 0) {
for ($_smarty_tpl->tpl_vars['o']->value = 1, $_smarty_tpl->tpl_vars['o']->iteration = 1;$_smarty_tpl->tpl_vars['o']->iteration <= $_smarty_tpl->tpl_vars['o']->total;$_smarty_tpl->tpl_vars['o']->value += $_smarty_tpl->tpl_vars['o']->step, $_smarty_tpl->tpl_vars['o']->iteration++) {
$_smarty_tpl->tpl_vars['o']->first = $_smarty_tpl->tpl_vars['o']->iteration == 1;$_smarty_tpl->tpl_vars['o']->last = $_smarty_tpl->tpl_vars['o']->iteration == $_smarty_tpl->tpl_vars['o']->total;?>
        <li class="<?php if ($_smarty_tpl->tpl_vars['ticket']->value['page']+1==$_smarty_tpl->tpl_vars['o']->value) {?>active<?php }?>"><a href="/m/ticket/page_<?php echo $_smarty_tpl->tpl_vars['o']->value-1;?>
.html" target="_blank"><?php echo $_smarty_tpl->tpl_vars['o']->value;?>
</a></li>
        <?php }} ?>
        <li class="next <?php if (($_smarty_tpl->tpl_vars['ticket']->value['page']+1)==$_smarty_tpl->tpl_vars['ticket']->value['page_all']) {?>disabled<?php }?>">
            <a href="/m/ticket/page_<?php echo min($_smarty_tpl->tpl_vars['ticket']->value['page']+1,$_smarty_tpl->tpl_vars['ticket']->value['page_all']-1);?>
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
        getticket_start : null,//url中ticket_start值
        getticket_end : null,//url中ticket_end值
        getticket_day : null,//url中ticket_day值
        getticket_start_time : null,//url中ticket_start_time值
        getpticket_sub_line : null,//url中ticket_sub_line值
        domticket_start : null,
        domticket_end : null,
        domticket_day : null,
        domticket_start_time : null,
        domticket_sub_line : null,
        init : function(){
            ast.urlResolve();//获取url中五个参数

            ast.domticket_start = $('#brand li');
            ast.operateSelect(ast.domticket_start,ast.getticket_start);
            ast.operateHref(ast.domticket_start,'ticket_start');

            ast.domticket_end = $('#brand1 li');
            ast.operateSelect(ast.domticket_end,ast.getticket_end);
            ast.operateHref(ast.domticket_end,'ticket_end');

            ast.domticket_day = $('#brand2 li');
            ast.operateSelect(ast.domticket_day,ast.getticket_day);
            ast.operateHref(ast.domticket_day,'ticket_day');

            ast.domticket_start_time = $('#brand3 li');
            ast.operateSelect(ast.domticket_start_time,ast.getticket_start_time);
            ast.operateHref(ast.domticket_start_time,'ticket_start_time');

            ast.domticket_sub_line = $('#brand4 li');
            ast.operateSelect(ast.domticket_sub_line,ast.getpticket_sub_line);
            ast.operateHref(ast.domticket_sub_line,'ticket_sub_line');
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
                    tem = gets[i].split('ticket_start=');
                    if (tem.length==2){ast.getticket_start = tem[1];	continue;}
                    tem = gets[i].split('ticket_end=');
                    if (tem.length==2){ast.getticket_end = tem[1];	continue;}
                    tem = gets[i].split('ticket_day=');
                    if (tem.length==2){ast.getticket_day = tem[1];	continue;}
                    tem = gets[i].split('ticket_start_time=');
                    if (tem.length==2){ast.getticket_start_time = tem[1];	continue;}
                    tem = gets[i].split('ticket_sub_line=');
                    if (tem.length==2){ast.getpticket_sub_line = tem[1];	continue;}
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
                ast._getticket_start = ast.getticket_start;
                ast._getticket_end = ast.getticket_end;
                ast._getticket_day = ast.getticket_day;
                ast._getticket_start_time = ast.getticket_start_time;
                ast._getpticket_sub_line = ast.getpticket_sub_line;

                switch (ast._type){
                    case 'ticket_start':
                        ast._getticket_start = $(this).attr('ast');	break;
                    case 'ticket_end':
                        ast._getticket_end = $(this).attr('ast');	break;
                    case 'ticket_day':
                        ast._getticket_day = $(this).attr('ast');	break;
                    case 'ticket_start_time':
                        ast._getticket_start_time = $(this).attr('ast');	break;
                    case 'ticket_sub_line':
                        ast._getpticket_sub_line = $(this).attr('ast');	break;
                }
                href = ast._getticket_start==null ? '?' : '?ticket_start=' + ast._getticket_start;
                href += ((href!='?' && ast._getticket_end!=null) ? '&' : '') + (ast._getticket_end==null ? '' : 'ticket_end=' + ast._getticket_end);
                href += ((href!='?' && ast._getticket_day!=null) ? '&' : '') + (ast._getticket_day==null ? '' : 'ticket_day=' + ast._getticket_day);
                href += ((href!='?' && ast._getticket_start_time!=null) ? '&' : '') + (ast._getticket_start_time==null ? '' : 'ticket_start_time=' + ast._getticket_start_time);
                href += ((href!='?' && ast._getpticket_sub_line!=null) ? '&' : '') + (ast._getpticket_sub_line==null ? '' : 'ticket_sub_line=' + ast._getpticket_sub_line);
                $(this).children('a').attr('href',href);
            });
        }
    }
    $(function(){
        ast.init();
    });
    $('.ticket').addClass('gree');
<?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
