<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-03-12 15:00:23
         compiled from "C:\wamp\www\blog\yunguan\trunk\application\views\admin\layout\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2117358c4f2075875e0-35420180%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2e3ffaec50343919118e7744a1c4da723250a7b' => 
    array (
      0 => 'C:\\wamp\\www\\blog\\yunguan\\trunk\\application\\views\\admin\\layout\\index.html',
      1 => 1487329413,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2117358c4f2075875e0-35420180',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_name' => 0,
    'sys_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58c4f2076c3431_19547609',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c4f2076c3431_19547609')) {function content_58c4f2076c3431_19547609($_smarty_tpl) {?><!DOCTYPE html>
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
							Dashboard
							<small>statistics and more</small>
						</h3>
						<ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								<a href="">首页</a>
								<span class="icon-angle-right"></span>
							</li>
						</ul>
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN DASHBOARD STATS -->
						<div class="row-fluid">
							<div class="span3 responsive" data-tablet="span6" data-desktop="span3">
								<div class="dashboard-stat blue">
									<div class="visual">
										<i class="icon-comments"></i>
									</div>
									<div class="details">
										<div class="number">
											1349
										</div>
										<div class="desc">
											New Feedbacks
										</div>
									</div>
									<a class="more" href="#">
										View more <i class="m-icon-swapright m-icon-white"></i>
									</a>
								</div>
							</div>
							<div class="span3 responsive" data-tablet="span6" data-desktop="span3">
								<div class="dashboard-stat green">
									<div class="visual">
										<i class="icon-shopping-cart"></i>
									</div>
									<div class="details">
										<div class="number">549</div>
										<div class="desc">New Orders</div>
									</div>
									<a class="more" href="#">
										View more <i class="m-icon-swapright m-icon-white"></i>
									</a>
								</div>
							</div>
							<div class="span3 responsive" data-tablet="span6  fix-offset" data-desktop="span3">
								<div class="dashboard-stat purple">
									<div class="visual">
										<i class="icon-globe"></i>
									</div>
									<div class="details">
										<div class="number">+89%</div>
										<div class="desc">Brand Popularity</div>
									</div>
									<a class="more" href="#">
										View more <i class="m-icon-swapright m-icon-white"></i>
									</a>
								</div>
							</div>
							<div class="span3 responsive" data-tablet="span6" data-desktop="span3">
								<div class="dashboard-stat yellow">
									<div class="visual">
										<i class="icon-bar-chart"></i>
									</div>
									<div class="details">
										<div class="number">12,5M$</div>
										<div class="desc">Total Profit</div>
									</div>
									<a class="more" href="#">
										View more <i class="m-icon-swapright m-icon-white"></i>
									</a>
								</div>
							</div>
						</div>
						<!-- END DASHBOARD STATS -->
						<!-- BEGIN PORTLET-->
						<div class="portlet box green">
							<div class="portlet-title">
								<div class="caption"><i class="icon-reorder"></i>&nbsp;系统信息</div>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									<a href="javascript:;" class="reload"></a>
								</div>
							</div>
							<div class="portlet-body form">
								<table class="table table-hover table-striped table-bordered">
									<?php if (!empty($_smarty_tpl->tpl_vars['sys_info']->value)) {?>
									<tr><td>服务器时间</td><td><?php echo $_smarty_tpl->tpl_vars['sys_info']->value['gmt_time'];?>
 (格林威治标准时间)</td></tr>
									<tr><td>服务器时间</td><td><?php echo $_smarty_tpl->tpl_vars['sys_info']->value['bj_time'];?>
 (北京时间)</td></tr>
									<tr><td>服务器ip地址</td><td><?php echo $_smarty_tpl->tpl_vars['sys_info']->value['server_ip'];?>
</td></tr>
									<tr><td>服务器解译引擎</td><td><?php echo $_smarty_tpl->tpl_vars['sys_info']->value['software'];?>
</td></tr>
									<tr><td>web服务端口</td><td><?php echo $_smarty_tpl->tpl_vars['sys_info']->value['port'];?>
</td></tr>
									<tr><td>服务器管理员</td><td><?php echo $_smarty_tpl->tpl_vars['sys_info']->value['admin'];?>
</td></tr>
									<tr><td>服务端剩余空间</td><td><?php echo $_smarty_tpl->tpl_vars['sys_info']->value['diskfree'];?>
</td></tr>
									<tr><td>系统当前用户名</td><td><?php echo $_smarty_tpl->tpl_vars['sys_info']->value['current_user'];?>
</td></tr>
									<tr><td>系统时区</td><td><?php echo $_smarty_tpl->tpl_vars['sys_info']->value['timezone'];?>
</td></tr>
									<?php }?>
								</table>
							</div>
						</div>
						<!-- END PORTLET-->
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

	<?php echo $_smarty_tpl->getSubTemplate ('../../common/importBottomAll.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<?php echo '<script'; ?>
 src="/statics/media/js/app.js"><?php echo '</script'; ?>
>
	<!--<?php echo '<script'; ?>
 src="/statics/media/js/table-editable.js"><?php echo '</script'; ?>
>-->

	<?php echo '<script'; ?>
>
		jQuery(document).ready(function() {
			App.init();
//			TableEditable.init();
			Setsidebarfun.init();
		});
	<?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
