<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-03-16 23:29:07
         compiled from "/Library/WebServer/Documents/blog/yunguan/trunk/application/views/default/around/index.html" */ ?>
<?php /*%%SmartyHeaderCode:44804349858c8fad3aa3458-52358057%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '327fc0255280191d044a5f9837ea39d38fadb26a' => 
    array (
      0 => '/Library/WebServer/Documents/blog/yunguan/trunk/application/views/default/around/index.html',
      1 => 1489677904,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '44804349858c8fad3aa3458-52358057',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58c8fad3ad86d1_68214445',
  'variables' => 
  array (
    'system' => 0,
    'value' => 0,
    'around_recommend' => 0,
    'around' => 0,
    'o' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c8fad3ad86d1_68214445')) {function content_58c8fad3ad86d1_68214445($_smarty_tpl) {?><!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <title>家园旅游-周边游</title>
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
<body >
<?php echo $_smarty_tpl->getSubTemplate ('../common/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--主体-->
<div id="main">
    <!--筛选-->
    <div class="jy-m-0 jy-w-1">
        <div class="jy-m- jy-bg-3 jy-p-tb-1 jy-border-5">
            <div id="brand">
                <span>出发地</span>
                <ul>
                    <li class="select3"><a href="#">不限</a> </li>
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
" ><a href="around_start=<?php echo $_smarty_tpl->tpl_vars['value']->value['system_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['system_name'];?>
</a></li>
                    <?php }?>
                    <?php } ?>
                    <?php }?>
                </ul>

            </div>

            <div id="brand1" class="jy-border-bd-1">
                <span>目的地</span>
                <ul>
                    <li class="select3"><a href="#">不限</a> </li>
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
" ><a href="around_end=<?php echo $_smarty_tpl->tpl_vars['value']->value['system_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['system_name'];?>
</a></li>
                    <?php }?>
                    <?php } ?>
                    <?php }?>
                </ul>
            </div>

            <div id="brand2" class="jy-border-bd-1">
                <span>出游天数</span>
                <ul>
                    <li class="select3"><a href="#">不限</a> </li>
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
" ><a href="around_day=<?php echo $_smarty_tpl->tpl_vars['value']->value['system_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['system_name'];?>
</a></li>
                    <?php }?>
                    <?php } ?>
                    <?php }?>
                </ul>
            </div>
            <div id="brand3" class="jy-border-bd-1">
                <span>出发时间</span>
                <ul>
                    <li class="select3"><a href="#">不限</a> </li>
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
" ><a href="around_start_time=<?php echo $_smarty_tpl->tpl_vars['value']->value['system_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['system_name'];?>
</a></li>
                    <?php }?>
                    <?php } ?>
                    <?php }?>
                </ul>
            </div>
            <div id="brand4" class="jy-border-bd-1">
                <span>主题路线</span>
                <ul>
                    <li class="select3"><a href="#">不限</a> </li>
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
" ><a href="around_sub_line=<?php echo $_smarty_tpl->tpl_vars['value']->value['system_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['system_name'];?>
</a></li>
                    <?php }?>
                    <?php } ?>
                    <?php }?>
                </ul>
            </div>
        </div>
    </div>

    <div class="jy-w-1 jy-m-0 clears">
        <div class="jy-f-right tx-w-2 ">
            <!--本地游玩-->
            <div class="tg-div jy-p-2 jy-bg-3 jy-m-2 ">
                <h3 class="jy-h3-0  jy-ds-inl">猜您喜欢</h3>
                <div class="a-divbox-2">
                    <?php if (!empty($_smarty_tpl->tpl_vars['around_recommend']->value)) {?>
                    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['around_recommend']->value['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                    <a href="/around/details?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['around_id'];?>
">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['value']->value['around_pic1'];?>
" style="width: 255px;height: 150px;" />
                        <dl>
                            <dt><?php echo cut_str($_smarty_tpl->tpl_vars['value']->value['around_name'],30);?>
</dt>
                        </dl>
                    </a>
                    <?php } ?>
                    <?php }?>
                </div>
            </div>
        </div>
        <div class="tx-w-1 jy-f-left">
            <div class="jy-ul-1" id="listdivbox">
                <ul>
                    <?php if (!empty($_smarty_tpl->tpl_vars['around']->value)) {?>
                    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['around']->value['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                    <li>
                        <a href="/around/details?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['around_id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['value']->value['around_pic1'];?>
" style="width: 210px;height: 140px;" /></a>
                        <span>
										<h3><a href="/around/details?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['around_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['around_name'];?>
</a></h3>
                                        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['around_id'];?>
">
										<dl>
											<dt class="tx-ico-1">酒店：<?php echo $_smarty_tpl->tpl_vars['value']->value['around_address'];?>
 </dt>
											<dt class="tx-ico-2">景点：<?php echo $_smarty_tpl->tpl_vars['value']->value['around_spot'];?>
 </dt>
										</dl>
									</span>
                        <label>
                            <dl>
                                <dt><em>￥</em><?php echo $_smarty_tpl->tpl_vars['value']->value['around_market_price'];?>
<i>起</i></dt>
                                <dd>原价:￥<?php echo $_smarty_tpl->tpl_vars['value']->value['around_cost_price'];?>
/人</dd>
                            </dl>
                            <button type="button" value="" >立即预定</button>
                        </label>
                    </li>
                    <?php } ?>
                    <?php }?>


                </ul>
            </div>
        </div>
        <div class="clear"></div>
        <div class="pagination pagination-left">
            <ul>
                <li class="prev <?php if ($_smarty_tpl->tpl_vars['around']->value['page']==0) {?>disabled<?php }?>">
                    <a href="/around/index?page=<?php echo max($_smarty_tpl->tpl_vars['around']->value['page']-1,0);?>
" target="_blank"> ← <span class="hidden-480">Prev</span></a>
                </li>
                <?php $_smarty_tpl->tpl_vars['o'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['o']->step = 1;$_smarty_tpl->tpl_vars['o']->total = (int) ceil(($_smarty_tpl->tpl_vars['o']->step > 0 ? $_smarty_tpl->tpl_vars['around']->value['page_all']+1 - (1) : 1-($_smarty_tpl->tpl_vars['around']->value['page_all'])+1)/abs($_smarty_tpl->tpl_vars['o']->step));
if ($_smarty_tpl->tpl_vars['o']->total > 0) {
for ($_smarty_tpl->tpl_vars['o']->value = 1, $_smarty_tpl->tpl_vars['o']->iteration = 1;$_smarty_tpl->tpl_vars['o']->iteration <= $_smarty_tpl->tpl_vars['o']->total;$_smarty_tpl->tpl_vars['o']->value += $_smarty_tpl->tpl_vars['o']->step, $_smarty_tpl->tpl_vars['o']->iteration++) {
$_smarty_tpl->tpl_vars['o']->first = $_smarty_tpl->tpl_vars['o']->iteration == 1;$_smarty_tpl->tpl_vars['o']->last = $_smarty_tpl->tpl_vars['o']->iteration == $_smarty_tpl->tpl_vars['o']->total;?>
                <li class="<?php if ($_smarty_tpl->tpl_vars['around']->value['page']+1==$_smarty_tpl->tpl_vars['o']->value) {?>active<?php }?>"><a href="/around/index?page=<?php echo $_smarty_tpl->tpl_vars['o']->value-1;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['o']->value;?>
</a></li>
                <?php }} ?>
                <li class="next <?php if (($_smarty_tpl->tpl_vars['around']->value['page']+1)==$_smarty_tpl->tpl_vars['around']->value['page_all']) {?>disabled<?php }?>">
                    <a href="/around/index?page=<?php echo min($_smarty_tpl->tpl_vars['around']->value['page']+1,$_smarty_tpl->tpl_vars['around']->value['page_all']-1);?>
" target="_blank"><span class="hidden-480">Next</span> → </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div id="fromshow2" style="display: none;">
    <div class="formbg"></div>
    <div class="formdiv2">
        <form method="post" action="/around/order_add" name="" enctype="multipart/form-data" id="form_01">
            <div id="myform3">
                <h3></h3>
                <input type="hidden" name="order_class_tour" value="周边游" >
                <input type="hidden" name="order_name" id="order_name" value="" >
                <input type="hidden" name="order_correlation" id="order_correlation" value="" >
                <label> <input type="text" name="order_username" value="" id="user1" placeholder="姓名" class="input1 jy-ico-1" /><dd>请输入用户名</dd> </label>
                <label> <input type="text" name="order_tel" value="" id="user2" placeholder="手机号" class="input1 jy-ico-2" /><dd>请输入手机号</dd> </label>
            </div>
            <div  class="date-labe">
                <input class="laydate-icon" name="order_start_time" placeholder="出行时间" onClick="laydate()">
                <i></i>
            </div>
            <div class="date-labe numpeople-div" id="numpeople1">
                <label>成人<i onclick="numjj(0)" class="on1">-</i><input name="order_adult" type="text"  value="1" /><i onclick="numadd(0)" >+</i></label>
                <label>儿童<i onclick="numjj1(1)" class="on1">-</i><input name="order_children" type="text" value="0"  value="0" /><i onclick="numadd1(1)">+</i></label>
            </div>
            <button type="submit" value="" class="but1">立即提交</button>
            <span id="closefrom2"></span>
        </form>
    </div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
    var Listbox=document.getElementById("listdivbox");
    var Listbtn=Listbox.getElementsByTagName("button");
    var ListH3=Listbox.getElementsByTagName("h3");
    var ListID=Listbox.getElementsByTagName("input");

    var FromShow2=document.getElementById("fromshow2");
    var Fromdiv2=FromShow2.getElementsByTagName("div")[0]
    var FromH3=FromShow2.getElementsByTagName("h3")[0];
    var FromClose=document.getElementById("closefrom2");

    for (var i=0;i<Listbtn.length;i++) {
        Listbtn[i].index=i;
        Listbtn[i].onclick=function(){
            FromShow2.style.display="block";
            FromH3.innerHTML=ListH3[this.index].innerText;
            $("#order_name").val(ListH3[this.index].innerText);
            $("#order_correlation").val(ListID[this.index].value);
        }
    }

    FromClose.onclick=function(){
        FromShow2.style.display="none";
        FromH3.innerHTML="";
        $("#order_name").val('');
        $("#order_correlation").val('');
    }

    Fromdiv2.onclick=function(){
        FromShow2.style.display="none";
        FromH3.innerHTML="";
        $("#order_name").val('');
        $("#order_correlation").val('');
    }

    var pNum=document.getElementById("numpeople1");
    var pInp=pNum.getElementsByTagName("input");
    var pI=pNum.getElementsByTagName("i");
    var n=1,n1=0;
    function numadd(num){
        pInp[num].value=++n;
        pI[num].className="";
    }
    function numadd1(num){
        pInp[num].value=++n1;
        pI[num].className="";
    }
    function numjj(num){
        if(pInp[num].value<=1){
            return false;
        }else{
            pInp[num].value=--n;
        }
    }
    function numjj1(num){
        if(pInp[num].value==0){
            return false;
        }else{
            pInp[num].value=--n1;
        }
    }

    var ast = {
        getaround_start : null,//url中around_start值
        getaround_end : null,//url中around_end值
        getaround_day : null,//url中around_day值
        getaround_start_time : null,//url中around_start_time值
        getparound_sub_line : null,//url中around_sub_line值
        domaround_start : null,
        domaround_end : null,
        domaround_day : null,
        domaround_start_time : null,
        domaround_sub_line : null,
        init : function(){
            ast.urlResolve();//获取url中五个参数

            ast.domaround_start = $('#brand li');
            ast.operateSelect(ast.domaround_start,ast.getaround_start);
            ast.operateHref(ast.domaround_start,'around_start');

            ast.domaround_end = $('#brand1 li');
            ast.operateSelect(ast.domaround_end,ast.getaround_end);
            ast.operateHref(ast.domaround_end,'around_end');

            ast.domaround_day = $('#brand2 li');
            ast.operateSelect(ast.domaround_day,ast.getaround_day);
            ast.operateHref(ast.domaround_day,'around_day');

            ast.domaround_start_time = $('#brand3 li');
            ast.operateSelect(ast.domaround_start_time,ast.getaround_start_time);
            ast.operateHref(ast.domaround_start_time,'around_start_time');

            ast.domaround_sub_line = $('#brand4 li');
            ast.operateSelect(ast.domaround_sub_line,ast.getparound_sub_line);
            ast.operateHref(ast.domaround_sub_line,'around_sub_line');
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
                    tem = gets[i].split('around_start=');
                    if (tem.length==2){ast.getaround_start = tem[1];	continue;}
                    tem = gets[i].split('around_end=');
                    if (tem.length==2){ast.getaround_end = tem[1];	continue;}
                    tem = gets[i].split('around_day=');
                    if (tem.length==2){ast.getaround_day = tem[1];	continue;}
                    tem = gets[i].split('around_start_time=');
                    if (tem.length==2){ast.getaround_start_time = tem[1];	continue;}
                    tem = gets[i].split('around_sub_line=');
                    if (tem.length==2){ast.getparound_sub_line = tem[1];	continue;}
                }
            }
        },
        operateSelect : function(dom,urlattr){
            /*
             如果特定url参数不为空，比如brand=2，则首先清除不限的选中样式
             再循环查找到li属性ast=urlattr，标记选中，结束循环
             */
            if (urlattr!=null){
                dom.first().removeClass('select3');
                ast._urlattr = urlattr;
                dom.each(function(){
                    if ($(this).attr('ast')==ast._urlattr){
                        $(this).addClass('select3');	return;
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
                ast._getaround_start = ast.getaround_start;
                ast._getaround_end = ast.getaround_end;
                ast._getaround_day = ast.getaround_day;
                ast._getaround_start_time = ast.getaround_start_time;
                ast._getparound_sub_line = ast.getparound_sub_line;

                switch (ast._type){
                    case 'around_start':
                        ast._getaround_start = $(this).attr('ast');	break;
                    case 'around_end':
                        ast._getaround_end = $(this).attr('ast');	break;
                    case 'around_day':
                        ast._getaround_day = $(this).attr('ast');	break;
                    case 'around_start_time':
                        ast._getaround_start_time = $(this).attr('ast');	break;
                    case 'around_sub_line':
                        ast._getparound_sub_line = $(this).attr('ast');	break;
                }
                href = ast._getaround_start==null ? '?' : '?around_start=' + ast._getaround_start;
                href += ((href!='?' && ast._getaround_end!=null) ? '&' : '') + (ast._getaround_end==null ? '' : 'around_end=' + ast._getaround_end);
                href += ((href!='?' && ast._getaround_day!=null) ? '&' : '') + (ast._getaround_day==null ? '' : 'around_day=' + ast._getaround_day);
                href += ((href!='?' && ast._getaround_start_time!=null) ? '&' : '') + (ast._getaround_start_time==null ? '' : 'around_start_time=' + ast._getaround_start_time);
                href += ((href!='?' && ast._getparound_sub_line!=null) ? '&' : '') + (ast._getparound_sub_line==null ? '' : 'around_sub_line=' + ast._getparound_sub_line);
                $(this).children('a').attr('href',href);
            });
        }
    }
    $(function(){
        ast.init();
    });
    $('.around').addClass('select1');
<?php echo '</script'; ?>
>
<!--底部-->
<?php echo $_smarty_tpl->getSubTemplate ('../common/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html><?php }} ?>
