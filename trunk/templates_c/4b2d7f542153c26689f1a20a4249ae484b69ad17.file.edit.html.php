<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-03-08 15:00:53
         compiled from "/Library/WebServer/Documents/blog/yunguan/trunk/application/views/admin/myusergroup/edit.html" */ ?>
<?php /*%%SmartyHeaderCode:10815830458bfac25048436-11833698%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b2d7f542153c26689f1a20a4249ae484b69ad17' => 
    array (
      0 => '/Library/WebServer/Documents/blog/yunguan/trunk/application/views/admin/myusergroup/edit.html',
      1 => 1481713686,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10815830458bfac25048436-11833698',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_name' => 0,
    'group' => 0,
    'menu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58bfac250b3766_38699830',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bfac250b3766_38699830')) {function content_58bfac250b3766_38699830($_smarty_tpl) {?><!DOCTYPE html>
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
	<link rel="stylesheet" href="/statics/media/css/group.css" />
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
						账户组添加
						<small>Background management system</small>
					</h3>
					<ul class="breadcrumb">
						<li>
							<i class="icon-home"></i>
							<a>系统菜单</a>
							<span class="icon-angle-right"></span>
							<a href="/Admin_MyUserGroup/index">账户组管理</a>
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
							<div class="caption"><i class="icon-reorder"></i>账户组添加</div>
							<div class="tools">
								<a href="javascript:;" class="collapse"></a>
								<!--<a href="#portlet-config" data-toggle="modal" class="config"></a>-->
								<a href="javascript:;" class="reload"></a>
								<a href="javascript:;" class="remove"></a>
							</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<form action="/Admin_MyUserGroup/add" method="post" class="form-horizontal">
								<div class="control-group">
									<label class="control-label">账户组名称：</label>
									<div class="controls">

										<input type="hidden" name="group_id" class="span6 m-wrap" value="<?php if (!empty($_smarty_tpl->tpl_vars['group']->value)) {
echo $_smarty_tpl->tpl_vars['group']->value['group_id'];
}?>" />
										<input type="text" name="group_name" placeholder="请输入账户组，最少2位字符" minlength="2" maxlength="18" class="span6 m-wrap" value="<?php if (!empty($_smarty_tpl->tpl_vars['group']->value)) {
echo $_smarty_tpl->tpl_vars['group']->value['group_name'];
}?>" />
										<span class="help-inline">请输入2～18位非特殊字符</span>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">权限设置：</label>
									<div class="controls">
										<?php echo menu_option($_smarty_tpl->tpl_vars['menu']->value,0,$_smarty_tpl->tpl_vars['group']->value['group_role']);?>

									</div>
								</div>

								<div class="control-group">
									<label class="control-label">说明：</label>
									<div class="controls">
										<input class="span6 m-wrap" type="text" name="group_desc" placeholder="请输入账户组说明" value="<?php if (!empty($_smarty_tpl->tpl_vars['group']->value)) {
echo $_smarty_tpl->tpl_vars['group']->value['group_desc'];
}?>" />
										<span class="help-inline">请输入账户组说明</span>
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
<?php echo '<script'; ?>
 type="text/javascript" src="/statics/media/js/ckeditor.js"><?php echo '</script'; ?>
>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<?php echo '<script'; ?>
 src="/statics/media/js/app.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/statics/media/js/table-editable.js"><?php echo '</script'; ?>
>
<!--<?php echo '<script'; ?>
 src="/statics/media/js/jquery.multi-select.js"><?php echo '</script'; ?>
>-->
<!--<?php echo '<script'; ?>
 src="/statics/media/js/form-components.js"><?php echo '</script'; ?>
>-->
<?php echo '<script'; ?>
>
	jQuery(document).ready(function() {
		App.init();
		TableEditable.init();
		Setsidebarfun.init();
//			FormComponents.init();
	});
	$('.show_role_1').change(function () {
		$('.show_role').attr('checked',true);
		$('.show_role').parent().addClass('checked');

	});
<?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
