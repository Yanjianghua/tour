<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-04-22 22:29:30
         compiled from "/Library/WebServer/Documents/blog/yunguan/trunk/application/views/admin/layout/index.html" */ ?>
<?php /*%%SmartyHeaderCode:147911067658beabed7ceaa2-39722536%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4267d942df142a502ac7f5fe7c7a1bfb93bdce3b' => 
    array (
      0 => '/Library/WebServer/Documents/blog/yunguan/trunk/application/views/admin/layout/index.html',
      1 => 1492497796,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '147911067658beabed7ceaa2-39722536',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58beabed85c464_91228057',
  'variables' => 
  array (
    'web_name' => 0,
    'order_today' => 0,
    'order_week' => 0,
    'order_month' => 0,
    'order_all' => 0,
    'sys_info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58beabed85c464_91228057')) {function content_58beabed85c464_91228057($_smarty_tpl) {?><!DOCTYPE html>
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
							后台首页
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
										<i class="icon-comment"></i>
									</div>
									<div class="details">
										<div class="number">
											<?php echo $_smarty_tpl->tpl_vars['order_today']->value;?>

										</div>
										<div class="desc">
											今日预约
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
										<i class="icon-comment-alt"></i>
									</div>
									<div class="details">
										<div class="number"><?php echo $_smarty_tpl->tpl_vars['order_week']->value;?>
</div>
										<div class="desc">本周预约</div>
									</div>
									<a class="more" href="#">
										View more <i class="m-icon-swapright m-icon-white"></i>
									</a>
								</div>
							</div>
							<div class="span3 responsive" data-tablet="span6  fix-offset" data-desktop="span3">
								<div class="dashboard-stat purple">
									<div class="visual">
										<i class="icon-comments"></i>
									</div>
									<div class="details">
										<div class="number"><?php echo $_smarty_tpl->tpl_vars['order_month']->value;?>
</div>
										<div class="desc">本月预约</div>
									</div>
									<a class="more" href="#">
										View more <i class="m-icon-swapright m-icon-white"></i>
									</a>
								</div>
							</div>
							<div class="span3 responsive" data-tablet="span6" data-desktop="span3">
								<div class="dashboard-stat yellow">
									<div class="visual">
										<i class="icon-comments-alt"></i>
									</div>
									<div class="details">
										<div class="number"><?php echo $_smarty_tpl->tpl_vars['order_all']->value;?>
</div>
										<div class="desc">预约总数</div>
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
