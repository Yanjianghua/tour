<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-04-18 22:55:22
         compiled from "/Library/WebServer/Documents/blog/yunguan/trunk/application/views/admin/jysystemoutbound/index.html" */ ?>
<?php /*%%SmartyHeaderCode:188947693758f628da91fd42-15030856%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87f53c56d44d09c1e5431bc720c76a2ed0ff5809' => 
    array (
      0 => '/Library/WebServer/Documents/blog/yunguan/trunk/application/views/admin/jysystemoutbound/index.html',
      1 => 1492527245,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '188947693758f628da91fd42-15030856',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'web_name' => 0,
    'channel' => 0,
    'system_class' => 0,
    'k' => 0,
    'v' => 0,
    'system' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58f628da9dcaa3_34658988',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f628da9dcaa3_34658988')) {function content_58f628da9dcaa3_34658988($_smarty_tpl) {?><!DOCTYPE html>
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
							出境游配置管理
							<small>Background management system</small>
						</h3>
						<ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								<a>系统菜单</a>
								<span class="icon-angle-right"></span>
								<a href="">出境游配置管理</a>
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
								<div class="caption"><i class="icon-list"></i>出境游配置内容列表</div>
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
										<button onclick="location='/Admin_JySystemOutbound/add'" class="btn green" >
											新建内容 <i class="icon-plus"></i>
										</button>
									</div>
									<div class="btn-group pull-right">
										<form action="/Admin_JySystemOutbound/index" method="get" class="form-horizontal" style="margin:0;" enctype="multipart/form-data" >
											<div class="btn-group">
												<label class="control-label-index">类型：</label>
												<div class="controls-index">
													<select class="span12 select2" id="" name="system_class" data-placeholder="Choose a Category" >
														<option value="">请选择类型</option>
														<?php if (!empty($_smarty_tpl->tpl_vars['channel']->value)) {?>
														<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['channel']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
														<?php if ($_smarty_tpl->tpl_vars['system_class']->value==$_smarty_tpl->tpl_vars['k']->value) {?>
														<option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" selected><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
														<?php } else { ?>
														<option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
														<?php }?>
														<?php } ?>
														<?php }?>
													</select>
												</div>
											</div>
											<div class="btn-group">
												<button type="submit" class="btn green"><i class="icon-search"></i>&nbsp;查询
												</button>
											</div>
										</form>
									</div>
								</div>
								<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
									<thead>
									<tr>
										<th>ID</th>
										<th>类型</th>
										<th>名称</th>
										<th>类别</th>
										<th>首页显示</th>
										<th>备注</th>
										<th>状态</th>
										<th>操作</th>
									</tr>
									</thead>
									<tbody>
									<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['system']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
									<tr class="">
										<td><?php echo $_smarty_tpl->tpl_vars['v']->value['system_id'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['v']->value['system_class_name'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['v']->value['system_name'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['v']->value['system_type_name'];?>
</td>
										<td><?php echo menu_hide($_smarty_tpl->tpl_vars['v']->value['system_hide']);?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['v']->value['system_note'];?>
</td>
										<td><?php echo status($_smarty_tpl->tpl_vars['v']->value['status']);?>
</td>
										<td>
										<a class="btn_g icn-only <?php if ($_smarty_tpl->tpl_vars['v']->value['status']) {?>yellow<?php } else { ?>blue<?php }?>" href="/Admin_JySystemOutbound/<?php if ($_smarty_tpl->tpl_vars['v']->value['status']) {?>disable<?php } else { ?>enable<?php }?>?system_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['system_id'];?>
">
											<?php echo status_btn($_smarty_tpl->tpl_vars['v']->value['status']);?>

										</a>&nbsp;&nbsp;
										<a class="btn_g purple icn-only" href="/Admin_JySystemOutbound/edit?system_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['system_id'];?>
&system_class=<?php if (!empty($_smarty_tpl->tpl_vars['system_class']->value)) {
echo $_smarty_tpl->tpl_vars['system_class']->value;
}?>">
											修改
										</a>&nbsp;&nbsp;
										<a class="btn_g red icn-only" href="/Admin_JySystemOutbound/del?system_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['system_id'];?>
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
