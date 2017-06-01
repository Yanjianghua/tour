<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-02-17 11:34:47
         compiled from "/Library/WebServer/Documents/blog/blog/trunk/application/views/admin/mymenu/edit.html" */ ?>
<?php /*%%SmartyHeaderCode:208253435358591ff397eec0-83831434%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49265400a218abf9c013d98d501ee60405c1aafe' => 
    array (
      0 => '/Library/WebServer/Documents/blog/blog/trunk/application/views/admin/mymenu/edit.html',
      1 => 1482376764,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '208253435358591ff397eec0-83831434',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58591ff3a1ccc4_86727045',
  'variables' => 
  array (
    'web_name' => 0,
    'menu_info' => 0,
    'menu' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58591ff3a1ccc4_86727045')) {function content_58591ff3a1ccc4_86727045($_smarty_tpl) {?><!DOCTYPE html>
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
						菜单添加
						<small>add menu</small>
					</h3>
					<ul class="breadcrumb">
						<li>
							<i class="icon-home"></i>
							<a>系统菜单</a>
							<span class="icon-angle-right"></span>
							<a href="/Admin_MyMenu/index">菜单管理</a>
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
							<div class="caption"><i class="icon-reorder"></i>菜单添加</div>
							<div class="tools">
								<a href="javascript:;" class="collapse"></a>
								<!--<a href="#portlet-config" data-toggle="modal" class="config"></a>-->
								<a href="javascript:;" class="reload"></a>
								<a href="javascript:;" class="remove"></a>
							</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<form action="/Admin_MyMenu/add" method="post" class="form-horizontal">
								<div class="control-group">
									<label class="control-label">菜单名称：</label>
									<div class="controls">
										<input type="hidden" name="menu_id" value="<?php echo $_smarty_tpl->tpl_vars['menu_info']->value['menu_id'];?>
" />
										<input type="text" name="menu_name" placeholder="请输入菜单名称，最少1位字符" minlength="1" maxlength="18" class="span6 m-wrap" value="<?php echo $_smarty_tpl->tpl_vars['menu_info']->value['menu_name'];?>
"/>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">控制器名称：</label>
									<div class="controls">
										<input type="text" name="menu_controller" placeholder="请输入控制器名称，Admin_*" minlength="6" maxlength="28" class="span6 m-wrap" value="<?php echo $_smarty_tpl->tpl_vars['menu_info']->value['menu_controller'];?>
" />
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">方法名称：</label>
									<div class="controls">
										<input type="text" name="menu_method" placeholder="请输入方法名称，最少3位字符" minlength="3" maxlength="18" class="span6 m-wrap" value="<?php echo $_smarty_tpl->tpl_vars['menu_info']->value['menu_method'];?>
"/>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">是否显示在菜单栏：</label>
									<div class="controls">
										<input type="radio" class="toggle" name="menu_hide" <?php if ($_smarty_tpl->tpl_vars['menu_info']->value['menu_hide']==1) {?>checked="checked"<?php }?> value="1" /> <span class="help-inline">是</span>
										<input type="radio" class="toggle" name="menu_hide" <?php if ($_smarty_tpl->tpl_vars['menu_info']->value['menu_hide']==0) {?>checked="checked"<?php }?> value="0" /> <span class="help-inline">否</span>
									</div>
								</div>

								<div class="control-group">
									<label class="control-label">图标：</label>
									<div class="controls">
										<input class="span3 m-wrap" id="icon_id" type="text" name="module_icon" placeholder="请选择图标" value="<?php echo $_smarty_tpl->tpl_vars['menu_info']->value['module_icon'];?>
"/>
										<button class="btn blue" type="button" id="icon_select">更改图标</button>
									</div>
									<?php echo $_smarty_tpl->getSubTemplate ('../../common/icon.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

								</div>

								<div class="control-group">
									<label class="control-label">上级菜单：</label>
									<div class="controls">
										<select class="span6 select2" id="select2_sample1" name="father_menu" data-placeholder="Choose a Category" >
											<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
											<?php if ($_smarty_tpl->tpl_vars['v']->value['menu_id']==$_smarty_tpl->tpl_vars['menu_info']->value['father_menu']) {?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['menu_id'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['v']->value['menu_name'];?>
</option>
											<?php } else { ?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['menu_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['menu_name'];?>
</option>
											<?php }?>
											<?php } ?>
										</select>
										<span class="help-inline">&nbsp;请选择上级菜单</span>
									</div>
								</div>

								<div class="control-group">
									<label class="control-label">备注：</label>
									<div class="controls">
										<textarea class="span6 m-wrap" rows="3" name="menu_note"><?php echo $_smarty_tpl->tpl_vars['menu_info']->value['menu_note'];?>
</textarea>
									</div>
								</div>
								<div class="form-actions">
									<button type="submit" class="btn blue">Submit</button>
									<button type="button" class="btn" onclick="location='/Admin_MyMenu/index'">Cancel</button>
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
 src="/statics/media/js/form-components.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
	jQuery(document).ready(function() {
		App.init();
		TableEditable.init();
		Setsidebarfun.init();
		FormComponents.init();
	});
	$('#icon_select').click(function(){
		$('#myModal').modal({
			backdrop:true,
			keyboard:true,
			show:true
		});
	});
	$('.icon').click(function () {
		var obj=$(this);
		$('#icon_preview').removeClass().addClass(obj.text());
		$('#icon_id').val(obj.text());
		$('#myModal').modal('toggle');
	});
<?php echo '</script'; ?>
>
</body>
</html><?php }} ?>
