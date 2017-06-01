<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-03-15 11:24:57
         compiled from "C:\wamp\www\blog\yunguan\trunk\application\views\admin\jythemetour\index.html" */ ?>
<?php /*%%SmartyHeaderCode:686758c8b40931f7d9-71944878%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59b2d88f6627c6fc610934b526e68aff618cf745' => 
    array (
      0 => 'C:\\wamp\\www\\blog\\yunguan\\trunk\\application\\views\\admin\\jythemetour\\index.html',
      1 => 1489047399,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '686758c8b40931f7d9-71944878',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_name' => 0,
    'theme' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58c8b4095b5be3_80751859',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c8b4095b5be3_80751859')) {function content_58c8b4095b5be3_80751859($_smarty_tpl) {?><!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title><?php echo $_smarty_tpl->tpl_vars['web_name']->value;?>
</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<!-- BEGIN PAGE LEVEL STYLES -->
	<link href="/statics/media/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="/statics/media/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
	<link href="/statics/media/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="/statics/media/css/style-metro.css" rel="stylesheet" type="text/css"/>
	<link href="/statics/media/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="/statics/media/css/style-responsive.css" rel="stylesheet" type="text/css"/>
	<link href="/statics/media/css/default.css" rel="stylesheet" type="text/css" id="style_color"/>
	<link href="/statics/media/css/uniform.default.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" type="text/css" href="/statics/media/css/select2_metro.css" />
	<link rel="stylesheet" href="/statics/media/css/DT_bootstrap.css" />
	<!-- END PAGE LEVEL STYLES -->
	<?php echo $_smarty_tpl->getSubTemplate ('../../common/importAll.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<link rel="shortcut icon" href="/statics/media/image/favicon.ico" />
</head>
<!-- END HEAD -->
<body class="page-header-fixed">
	<?php echo $_smarty_tpl->getSubTemplate ('../../common/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<!-- BEGIN CONTAINER -->
	<div class="page-container">
		<?php echo $_smarty_tpl->getSubTemplate ('../../common/sidebar.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<!-- BEGIN PAGE -->
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div id="portlet-config" class="modal hide">
				<div class="modal-header">
					<button data-dismiss="modal" class="close" type="button"></button>
					<h3>Widget Settings</h3>
				</div>
				<div class="modal-body">
					Widget settings form goes here
				</div>
			</div>
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN PAGE CONTAINER-->
			<div class="container-fluid">
				<!-- BEGIN PAGE HEADER-->
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN STYLE CUSTOMIZER -->
						<div class="color-panel hidden-phone">
							<div class="color-mode-icons icon-color"></div>
							<div class="color-mode-icons icon-color-close"></div>
							<div class="color-mode">
								<p>THEME COLOR</p>
								<ul class="inline">
									<li class="color-black current color-default" data-style="default"></li>
									<li class="color-blue" data-style="blue"></li>
									<li class="color-brown" data-style="brown"></li>
									<li class="color-purple" data-style="purple"></li>
									<li class="color-grey" data-style="grey"></li>
									<li class="color-white color-light" data-style="light"></li>
								</ul>
								<label>
									<span>Layout</span>
									<select class="layout-option m-wrap small">
										<option value="fluid" selected>Fluid</option>
										<option value="boxed">Boxed</option>
									</select>
								</label>
								<label>
									<span>Header</span>
									<select class="header-option m-wrap small">
										<option value="fixed" selected>Fixed</option>
										<option value="default">Default</option>
									</select>
								</label>
								<label>
									<span>Sidebar</span>
									<select class="sidebar-option m-wrap small">
										<option value="fixed">Fixed</option>
										<option value="default" selected>Default</option>
									</select>
								</label>
								<label>
									<span>Footer</span>
									<select class="footer-option m-wrap small">
										<option value="fixed">Fixed</option>
										<option value="default" selected>Default</option>
									</select>
								</label>
							</div>
						</div>
						<!-- END BEGIN STYLE CUSTOMIZER -->
						<h3 class="page-title">
							主题游管理
							<small>Background management system</small>
						</h3>
						<ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								<a>系统菜单</a>
								<span class="icon-angle-right"></span>
								<a href="">主题游管理</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN DASHBOARD STATS -->
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption"><i class="icon-list"></i>主题游内容列表</div>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									<!--<a href="#portlet-config" data-toggle="modal" class="config"></a>-->
									<a href="javascript:;" class="reload"></a>
									<a href="javascript:;" class="remove"></a>
								</div>
							</div>
							<div class="portlet-body">
								<div class="clearfix">
									<div class="btn-group">
										<button onclick="location='/Admin_JyThemeTour/add'" class="btn green" >
											新建内容 <i class="icon-plus"></i>
										</button>
									</div>
									<div class="btn-group pull-right">
										<button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="icon-angle-down"></i>
										</button>
										<ul class="dropdown-menu pull-right">
											<li><a href="#">Print</a></li>
											<li><a href="#">Save as PDF</a></li>
											<li><a href="#">Export to Excel</a></li>
										</ul>
									</div>
								</div>
								<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
									<thead>
									<tr>
										<th>ID</th>
										<th>标题</th>
										<th>出发地</th>
										<th>目的地</th>
										<th>出游天数</th>
										<th>出发时间</th>
										<th>主题线路</th>
										<th>原价</th>
										<th>现价</th>
										<th>状态</th>
										<th>操作</th>
									</tr>
									</thead>
									<tbody>
									<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['theme']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
									<tr class="">
										<td><?php echo $_smarty_tpl->tpl_vars['v']->value['theme_id'];?>
</td>
										<td><?php echo cut_str($_smarty_tpl->tpl_vars['v']->value['theme_name'],15);?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['v']->value['theme_start_name'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['v']->value['theme_end_name'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['v']->value['theme_day_name'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['v']->value['theme_start_time_name'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['v']->value['theme_sub_line_name'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['v']->value['theme_cost_price'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['v']->value['theme_market_price'];?>
</td>
										<td><?php echo status($_smarty_tpl->tpl_vars['v']->value['status']);?>
</td>
										<td>
										<a class="btn_g icn-only <?php if ($_smarty_tpl->tpl_vars['v']->value['status']) {?>yellow<?php } else { ?>blue<?php }?>" href="/Admin_JyThemeTour/<?php if ($_smarty_tpl->tpl_vars['v']->value['status']) {?>disable<?php } else { ?>enable<?php }?>?theme_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['theme_id'];?>
">
											<?php echo status_btn($_smarty_tpl->tpl_vars['v']->value['status']);?>

										</a>&nbsp;&nbsp;
										<a class="btn_g icn-only blue" href="/Admin_JyThemeTour/recommend?theme_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['theme_id'];?>
">
											首页推荐
										</a>&nbsp;&nbsp;
										<a class="btn_g purple icn-only" href="/Admin_JyThemeTour/edit?theme_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['theme_id'];?>
">
											修改
										</a>&nbsp;&nbsp;
										<a class="btn_g red icn-only" href="/Admin_JyThemeTour/del?theme_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['theme_id'];?>
">
											删除
										</a>
										</td>
									</tr>
									<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
						<!-- END DASHBOARD STATS -->
					</div>
				</div>
				<!-- END PAGE CONTENT-->
			</div>
			<!-- END PAGE CONTAINER-->
		</div>
		<!-- END PAGE -->
	</div>
	<!-- END CONTAINER -->
	<?php echo $_smarty_tpl->getSubTemplate ('../../common/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<!-- BEGIN CORE PLUGINS -->
	<?php echo $_smarty_tpl->getSubTemplate ('../../common/importBottomAll.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<!-- END CORE PLUGINS -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<?php echo '<script'; ?>
 type="text/javascript" src="/statics/media/js/select2.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="/statics/media/js/jquery.dataTables.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="/statics/media/js/DT_bootstrap.js"><?php echo '</script'; ?>
>
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<?php echo '<script'; ?>
 src="/statics/media/js/app.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/statics/media/js/table-editable.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
		jQuery(document).ready(function() {
			App.init();
			TableEditable.init();
			Setsidebarfun.init();
		});
	<?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
