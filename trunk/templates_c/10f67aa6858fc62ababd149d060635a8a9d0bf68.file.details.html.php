<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-03-16 18:53:39
         compiled from "/Library/WebServer/Documents/blog/yunguan/trunk/application/views/default/theme/details.html" */ ?>
<?php /*%%SmartyHeaderCode:32753000958ca6eb3d75334-10748973%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10f67aa6858fc62ababd149d060635a8a9d0bf68' => 
    array (
      0 => '/Library/WebServer/Documents/blog/yunguan/trunk/application/views/default/theme/details.html',
      1 => 1489661582,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32753000958ca6eb3d75334-10748973',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'theme' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58ca6eb3e09604_67294490',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ca6eb3e09604_67294490')) {function content_58ca6eb3e09604_67294490($_smarty_tpl) {?><!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <title>周边游-<?php echo $_smarty_tpl->tpl_vars['theme']->value['theme_name'];?>
</title>
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

    <div class="jy-m-0 jy-w-1">
        <div class="jy-m- jy-bg-7 jy-p-2 jy-border-5">
            <!--组图-->
            <div id="slidepic" class="jy-f-left">
                <div id="bigpicbox">
                    <ul>
                        <li class="shows"><img src="<?php echo $_smarty_tpl->tpl_vars['theme']->value['theme_pic1'];?>
" width="480" height="320" /> </li>
                        <li><img src="<?php echo $_smarty_tpl->tpl_vars['theme']->value['theme_pic2'];?>
" width="480" height="320" /> </li>
                        <li><img src="<?php echo $_smarty_tpl->tpl_vars['theme']->value['theme_pic3'];?>
" width="480" height="320" /> </li>
                        <li><img src="<?php echo $_smarty_tpl->tpl_vars['theme']->value['theme_pic4'];?>
" width="480" height="320" /> </li>
                    </ul>
                </div>

                <div id="spicbox" class="spicbox" >
                    <ul>
                        <li class="select5"><img src="<?php echo $_smarty_tpl->tpl_vars['theme']->value['theme_pic1'];?>
" /> </li>
                        <li><img src="<?php echo $_smarty_tpl->tpl_vars['theme']->value['theme_pic2'];?>
" /> </li>
                        <li><img src="<?php echo $_smarty_tpl->tpl_vars['theme']->value['theme_pic3'];?>
" /> </li>
                        <li><img src="<?php echo $_smarty_tpl->tpl_vars['theme']->value['theme_pic4'];?>
" /> </li>

                    </ul>
                </div>
            </div>
            <!--右侧内容-->
            <div class="jy-f-left cont-div" >
                <h3 id="h3-title"><?php echo $_smarty_tpl->tpl_vars['theme']->value['theme_name'];?>
</h3>
                <label><i>出发地</i><em><?php echo $_smarty_tpl->tpl_vars['theme']->value['theme_start_name'];?>
</em></label>
                <label><i>目的地</i><em><?php echo $_smarty_tpl->tpl_vars['theme']->value['theme_end_name'];?>
</em></label>
                <span id="table-box">
							<dd><em>￥<?php echo $_smarty_tpl->tpl_vars['theme']->value['theme_market_price'];?>
<i>起/份</i></em><b>￥<?php echo $_smarty_tpl->tpl_vars['theme']->value['theme_cost_price'];?>
/起</b></dd>
							<button type="button" value="" id="nybut">立即抢购</button>
						</span>
                <label><i>商家地址</i><?php echo $_smarty_tpl->tpl_vars['theme']->value['theme_address'];?>
</label>
                <dl>
                    <dt><?php echo $_smarty_tpl->tpl_vars['theme']->value['theme_tel'];?>
</dt>
                    <dd>免费资讯电话</dd>
                </dl>

            </div>
            <div class="clear"></div>
        </div>

        <div class="jy-bg-3 jy-m-2 jy-border-5">
            <div class="jy-border-b-5">
                <h3 class="jy-p-lr-2 jy-dsp-inblo jy-bg-8 jy-ft-color-0">产品详情</h3>
            </div>
            <div class="text-content jy-p-2">
                <?php echo $_smarty_tpl->tpl_vars['theme']->value['theme_details'];?>

            </div>
        </div>

        <!--费用说明-->
        <div class="jy-bg-3 jy-m-2 jy-border-5">
            <div class="jy-border-b-5">
                <h3 class="jy-p-lr-2 jy-dsp-inblo jy-bg-8 jy-ft-color-0">费用说明</h3>
            </div>
            <div class="text-content jy-p-2">
                <?php echo $_smarty_tpl->tpl_vars['theme']->value['theme_explain'];?>

            </div>
        </div>

    </div>
</div>
<?php echo '<script'; ?>
>
    $("#spicbox").find("ul").children().each(function() {
        var _index = $(this).index();
        $(this).mouseenter(function() {
            $(this).addClass("select5").siblings().removeClass("select5");
            $("#bigpicbox").find("ul").children().eq(_index).fadeIn(2000).siblings().stop().hide();
        });
    })
<?php echo '</script'; ?>
>
</div>

<div id="fromshow">
    <div class="formbg"></div>
    <div class="formdiv">
        <form method="post" action="/theme/order_add" name="" enctype="multipart/form-data">
            <div id="myform2">
                <h3 id="fromh3"></h3>
                <input type="hidden" name="order_class_tour" value="主题游" >
                <input type="hidden" name="source" value="details" >
                <input type="hidden" name="order_name" value="<?php echo $_smarty_tpl->tpl_vars['theme']->value['theme_name'];?>
" >
                <input type="hidden" name="order_correlation" value="<?php echo $_smarty_tpl->tpl_vars['theme']->value['theme_id'];?>
" >
                <label> <input type="text" name="order_username" value="" id="user1" placeholder="姓名" class="input1 jy-ico-1" /><dd>请输入用户名</dd> </label>
                <label> <input type="text" name="order_tel" value="" id="user2" placeholder="手机号" class="input1 jy-ico-2" /><dd>请输入手机号</dd> </label>
            </div>
            <div  class="date-labe">
                <input class="laydate-icon" name="order_start_time" placeholder="出行时间" onClick="laydate()">
                <i></i>
            </div>
            <div class="date-labe numpeople-div" id="numpeople">
                <label>成人<i class="reduc-i">-</i><input name="order_adult" type="text" value="1" /><i class="add-i">+</i></label>
                <label>儿童<i class="reduc-i">-</i><input name="order_children" type="text" value="0" /><i class="add-i">+</i></label>
            </div>
            <button type="submit" value="" class="but1">立即提交</button>
            <span id="closefrom"></span>
        </form>
    </div>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
    var NyBut=document.getElementById("nybut");
    var H3Title=document.getElementById("h3-title");

    var FromShow=document.getElementById("fromshow");
    var FromDiv=FromShow.getElementsByTagName("div")[0]
    var FromH3=document.getElementById("fromh3");
    var FromSpan=document.getElementById("closefrom");

    var tBalebox=document.getElementById("table-box");
    var tButtom=tBalebox.getElementsByTagName("button");
    var tTdSpan=tBalebox.getElementsByTagName("span");

    for (var j=0;j<tButtom.length;j++) {
        tButtom[j].val=j;
        tButtom[j].onclick=function(){
            FromShow.style.display="block";
            FromH3.innerHTML=tTdSpan[this.val].innerText;
        }
    }
    NyBut.onclick=function(){
        FromShow.style.display="block";
        FromH3.innerHTML=H3Title.innerText;
    }

    FromSpan.onclick=function(){
        FromShow.style.display="none";
        FromH3.innerHTML="";
        window.location.reload();
    }
    FromDiv.onclick=function(){
        FromShow.style.display="none";
        FromH3.innerHTML="";
        window.location.reload();
    }
    $(function(){
        //加
        $(".add-i").each(function(){
            $(this).click(function(){
                var num=$(this).prev().val();
                num++;
                $(this).prev().val(num);
            });
        });

        //减
        $(".reduc-i").each(function(){
            $(this).click(function(){
                var num2=$(this).next().val();
                num2--;
                if(num2 <= 1){
                    num2=1;
                }
                $(this).next().val(num2);
            })
        })

    })
    $('.theme').addClass('select1');
<?php echo '</script'; ?>
>

<!--底部-->
<?php echo $_smarty_tpl->getSubTemplate ('../common/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html><?php }} ?>
