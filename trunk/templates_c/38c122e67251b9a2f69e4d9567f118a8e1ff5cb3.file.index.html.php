<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-04-22 22:59:14
         compiled from "/Library/WebServer/Documents/blog/yunguan/trunk/application/views/admin/jytickettour/index.html" */ ?>
<?php /*%%SmartyHeaderCode:213248134858c109143b1bd3-81458099%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38c122e67251b9a2f69e4d9567f118a8e1ff5cb3' => 
    array (
      0 => '/Library/WebServer/Documents/blog/yunguan/trunk/application/views/admin/jytickettour/index.html',
      1 => 1492832832,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213248134858c109143b1bd3-81458099',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58c10914446119_22352294',
  'variables' => 
  array (
    'web_name' => 0,
    'ticket' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c10914446119_22352294')) {function content_58c10914446119_22352294($_smarty_tpl) {?><!DOCTYPE html>
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
							景点门票管理
							<small>Background management system</small>
						</h3>
						<ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								<a>系统菜单</a>
								<span class="icon-angle-right"></span>
								<a href="">景点门票管理</a>
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
								<div class="caption"><i class="icon-list"></i>景点门票内容列表</div>
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
										<button onclick="location='/Admin_JyTicketTour/add'" class="btn green" >
											新建内容 <i class="icon-plus"></i>
										</button>
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
 $_from = $_smarty_tpl->tpl_vars['ticket']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
									<tr class="">
										<td><?php echo $_smarty_tpl->tpl_vars['v']->value['ticket_id'];?>
</td>
										<td><?php echo cut_str($_smarty_tpl->tpl_vars['v']->value['ticket_name'],15);?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['v']->value['ticket_start_name'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['v']->value['ticket_end_name'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['v']->value['ticket_day_name'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['v']->value['ticket_start_time_name'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['v']->value['ticket_sub_line_name'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['v']->value['ticket_cost_price'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['v']->value['ticket_market_price'];?>
</td>
										<td><?php echo status($_smarty_tpl->tpl_vars['v']->value['status']);?>
</td>
										<td>
										<a class="btn_g icn-only <?php if (!$_smarty_tpl->tpl_vars['v']->value['status']) {?>red<?php } else { ?>blue<?php }?>" href="/Admin_JyTicketTour/<?php if ($_smarty_tpl->tpl_vars['v']->value['status']) {?>disable<?php } else { ?>enable<?php }?>?ticket_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['ticket_id'];?>
">
											<?php echo status_btn($_smarty_tpl->tpl_vars['v']->value['status']);?>

										</a>&nbsp;&nbsp;
										<a class="btn_g icn-only <?php if ($_smarty_tpl->tpl_vars['v']->value['status']==2) {?>red<?php } else { ?>blue<?php }?>" href="/Admin_JyTicketTour/<?php if ($_smarty_tpl->tpl_vars['v']->value['status']==2) {?>enable<?php } else { ?>recommend<?php }?>?ticket_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['ticket_id'];?>
">
											<?php if ($_smarty_tpl->tpl_vars['v']->value['status']==2) {?>取消<?php } else { ?>推荐<?php }?>
										</a>&nbsp;&nbsp;
										<a class="btn_g icn-only <?php if ($_smarty_tpl->tpl_vars['v']->value['status']==3) {?>red<?php } else { ?>blue<?php }?>" href="/Admin_JyTicketTour/<?php if ($_smarty_tpl->tpl_vars['v']->value['status']==3) {?>enable<?php } else { ?>group<?php }?>?ticket_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['ticket_id'];?>
">
											<?php if ($_smarty_tpl->tpl_vars['v']->value['status']==3) {?>取&nbsp;&nbsp;&nbsp;消<?php } else { ?>团购惠<?php }?>
										</a>&nbsp;&nbsp;
										<a class="btn_g purple icn-only" href="/Admin_JyTicketTour/edit?ticket_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['ticket_id'];?>
">
											修改
										</a>&nbsp;&nbsp;
										<a class="btn_g yellow icn-only" href="/Admin_JyTicketTour/del?ticket_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['ticket_id'];?>
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
