<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-03-10 17:27:02
         compiled from "/Library/WebServer/Documents/blog/yunguan/trunk/application/views/admin/jyorder/edit.html" */ ?>
<?php /*%%SmartyHeaderCode:54128090958c26fb5d27a73-70091772%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14f54074ffddec2a26398ede9d1deab0aa28702d' => 
    array (
      0 => '/Library/WebServer/Documents/blog/yunguan/trunk/application/views/admin/jyorder/edit.html',
      1 => 1489138020,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54128090958c26fb5d27a73-70091772',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58c26fb5db2dd4_90064118',
  'variables' => 
  array (
    'web_name' => 0,
    'order' => 0,
    'order_array' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c26fb5db2dd4_90064118')) {function content_58c26fb5db2dd4_90064118($_smarty_tpl) {?><!DOCTYPE html>
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
							预约客户修改
							<small>Background management system</small>
						</h3>
						<ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								<a>系统菜单</a>
								<span class="icon-angle-right"></span>
								<a href="/Admin_JyOrder/index">预约客户管理</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN SAMPLE FORM PORTLET-->
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption"><i class="icon-reorder"></i>预约客户修改</div>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									<!--<a href="#portlet-config" data-toggle="modal" class="config"></a>-->
									<a href="javascript:;" class="reload"></a>
									<a href="javascript:;" class="remove"></a>
								</div>
							</div>
							<div class="portlet-body form">
								<!-- BEGIN FORM-->
								<form action="/Admin_JyOrder/add" method="post" class="form-horizontal" enctype="multipart/form-data" >
									<div class="control-group">
										<label class="control-label">预约名称：</label>
										<div class="controls">
											<input type="hidden" name="order_id" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['order_id'];?>
">
											<input type="text" name="order_name" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['order_name'];?>
" placeholder="请输入预约名称，最少2位字符" minlength="2" maxlength="98" class="span6 m-wrap" />
											<span class="help-inline">请输入2～98位非特殊字符</span>
										</div>
									</div>

									<div class="control-group">
										<label class="control-label">预约旅游类型：</label>
										<div class="controls">
											<select class="span6 select2" id="" name="order_class_tour" data-placeholder="Choose a Category" >
												<?php if (!empty($_smarty_tpl->tpl_vars['order_array']->value)) {?>
												<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order_array']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
												<?php if ($_smarty_tpl->tpl_vars['order']->value['order_class_tour']==$_smarty_tpl->tpl_vars['v']->value) {?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" selected><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
												<?php } else { ?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
												<?php }?>
												<?php } ?>
												<?php }?>
											</select>
											<span class="help-inline">&nbsp;请选择出发地</span>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">预约ID：</label>
										<div class="controls">
											<input type="text" name="order_correlation" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['order_correlation'];?>
" placeholder="请输入显示位置，最少2位字符"  class="span6 m-wrap" />
											<span class="help-inline">请输入ID</span>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">客户名称：</label>
										<div class="controls">
											<input type="text" name="order_username" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['order_correlation'];?>
" placeholder="请输入客户名称，最少2位字符" minlength="2" maxlength="98" class="span6 m-wrap" />
											<span class="help-inline">请输入2～98位非特殊字符</span>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">客户手机号：</label>
										<div class="controls">
											<input type="text" name="order_tel" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['order_tel'];?>
" placeholder="请输入手机号" minlength="11" maxlength="11" class="span6 m-wrap" />
											<span class="help-inline">请输入手机号</span>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">客户出行时间：</label>
										<div class="controls">
											<input type="date" name="order_start_time" value="<?php echo date('Y-m-d',$_smarty_tpl->tpl_vars['order']->value['order_start_time']);?>
" placeholder="请输入出行时间" class="span6 m-wrap" />
											<span class="help-inline">请输入出行时间</span>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">成人数量：</label>
										<div class="controls">
											<input type="number" name="order_adult" max="100" min="1" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['order_adult'];?>
" placeholder="请输入成人数量" class="span6 m-wrap" />
											<span class="help-inline">请输入成人数量</span>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">儿童数量：</label>
										<div class="controls">
											<input type="number" name="order_children" max="100" min="1" value="<?php echo $_smarty_tpl->tpl_vars['order']->value['order_children'];?>
" placeholder="请输入儿童数量" class="span6 m-wrap" />
											<span class="help-inline">请输入儿童数量</span>
										</div>
									</div>
									<div class="form-actions">
										<button type="submit" class="btn blue">Submit</button>
										<button type="button" class="btn">Cancel</button>
									</div>
								</form>
								<!-- END FORM-->
							</div>
						</div>
						<!-- END SAMPLE FORM PORTLET-->
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
