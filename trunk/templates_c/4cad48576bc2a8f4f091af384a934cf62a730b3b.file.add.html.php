<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-04-22 22:33:12
         compiled from "/Library/WebServer/Documents/blog/yunguan/trunk/application/views/admin/jyaroundtour/add.html" */ ?>
<?php /*%%SmartyHeaderCode:167546853158bfe619494b81-36220891%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4cad48576bc2a8f4f091af384a934cf62a730b3b' => 
    array (
      0 => '/Library/WebServer/Documents/blog/yunguan/trunk/application/views/admin/jyaroundtour/add.html',
      1 => 1492871458,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '167546853158bfe619494b81-36220891',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_58bfe619500365_18324880',
  'variables' => 
  array (
    'web_name' => 0,
    'channel_1' => 0,
    'v' => 0,
    'channel_2' => 0,
    'channel_3' => 0,
    'channel_4' => 0,
    'channel_5' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58bfe619500365_18324880')) {function content_58bfe619500365_18324880($_smarty_tpl) {?><!DOCTYPE html>
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

	<?php echo '<script'; ?>
 type="text/javascript" src="/statics/media/js/ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
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
							周边游添加
							<small>Background management system</small>
						</h3>
						<ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								<a>系统菜单</a>
								<span class="icon-angle-right"></span>
								<a href="/Admin_JyAroundTour/index">周边游管理</a>
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
								<div class="caption"><i class="icon-reorder"></i>周边游内容添加</div>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									<!--<a href="#portlet-config" data-toggle="modal" class="config"></a>-->
									<a href="javascript:;" class="reload"></a>
									<a href="javascript:;" class="remove"></a>
								</div>
							</div>
							<div class="portlet-body form">
								<!-- BEGIN FORM-->
								<form action="/Admin_JyAroundTour/add" method="post" class="form-horizontal" enctype="multipart/form-data" >
									<div class="control-group">
										<label class="control-label">名称：</label>
										<div class="controls">
											<input type="text" name="around_name" placeholder="请输入内容标题，最少2位字符" minlength="2" maxlength="88" class="span6 m-wrap" />
											<span class="help-inline">请输入2～18位非特殊字符</span>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">出发地：</label>
										<div class="controls">
											<select class="span6 select2" id="" name="around_start" data-placeholder="Choose a Category" >
												<?php if (!empty($_smarty_tpl->tpl_vars['channel_1']->value)) {?>
												<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['channel_1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['system_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['system_name'];?>
</option>
												<?php } ?>
												<?php }?>
											</select>
											<span class="help-inline">&nbsp;请选择出发地</span>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">目的地：</label>
										<div class="controls">
											<select class="span6 select2" id="" name="around_end" data-placeholder="Choose a Category" >
												<?php if (!empty($_smarty_tpl->tpl_vars['channel_2']->value)) {?>
												<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['channel_2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['system_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['system_name'];?>
</option>
												<?php } ?>
												<?php }?>
											</select>
											<span class="help-inline">&nbsp;请选择目的地</span>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">出游天数：</label>
										<div class="controls">
											<select class="span6 select2" id="" name="around_day" data-placeholder="Choose a Category" >
												<?php if (!empty($_smarty_tpl->tpl_vars['channel_3']->value)) {?>
												<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['channel_3']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['system_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['system_name'];?>
</option>
												<?php } ?>
												<?php }?>
											</select>
											<span class="help-inline">&nbsp;请选择出游天数</span>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">出发时间：</label>
										<div class="controls">
											<select class="span6 select2" id="" name="around_start_time" data-placeholder="Choose a Category" >
												<?php if (!empty($_smarty_tpl->tpl_vars['channel_4']->value)) {?>
												<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['channel_4']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['system_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['system_name'];?>
</option>
												<?php } ?>
												<?php }?>
											</select>
											<span class="help-inline">&nbsp;请选择出发时间</span>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">主题路线：</label>
										<div class="controls">
											<select class="span6 select2" id="" name="around_sub_line" data-placeholder="Choose a Category" >
												<?php if (!empty($_smarty_tpl->tpl_vars['channel_5']->value)) {?>
												<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['channel_5']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['system_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['system_name'];?>
</option>
												<?php } ?>
												<?php }?>
											</select>
											<span class="help-inline">&nbsp;请选择主题路线</span>
										</div>
									</div>
                                    <div class="control-group">
                                        <label class="control-label"> 景点：</label>
                                        <div class="controls">
                                            <input class="span6 m-wrap" type="text" name="around_spot" placeholder="请输入景点" />
                                            <span class="help-inline">请输入景点，以'，'隔开</span>
                                        </div>
                                    </div>
									<div class="control-group">
										<label class="control-label"> 商家电话：</label>
										<div class="controls">
											<input class="span6 m-wrap" type="text" name="around_tel" placeholder="请输入商家电话" />
											<span class="help-inline">请输入商家电话，如0311-4746311、18888888888</span>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label"> 商家地址：</label>
										<div class="controls">
											<input class="span6 m-wrap" type="text" name="around_address" placeholder="请输入商家地址" />
											<span class="help-inline">请输入商家地址</span>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label"> 请输入原价：</label>
										<div class="controls">
											<input class="span6 m-wrap" type="text" name="around_cost_price" placeholder="请输入原价" />
											<span class="help-inline">请输入原价</span>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label"> 请输入现价：</label>
										<div class="controls">
											<input class="span6 m-wrap" type="text" name="around_market_price" placeholder="请输入现价" />
											<span class="help-inline">请输入现价</span>
										</div>
									</div>

									<div class="control-group">
										<label class="control-label"> 景点图片1：</label>
										<div class="controls">
											<input type="file" name="around_pic1" style="border:1px solid #e5e5e5;" class="span6 m-wrap"/>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label"> 景点图片2：</label>
										<div class="controls">
											<input type="file" name="around_pic2" style="border:1px solid #e5e5e5;" class="span6 m-wrap"/>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label"> 景点图片3：</label>
										<div class="controls">
											<input type="file" name="around_pic3" style="border:1px solid #e5e5e5;" class="span6 m-wrap"/>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label"> 景点图片4：</label>
										<div class="controls">
											<input type="file" name="around_pic4" style="border:1px solid #e5e5e5;" class="span6 m-wrap"/>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label"> WAP图片1：</label>
										<div class="controls">
											<input type="file" name="around_wap_pic1" style="border:1px solid #e5e5e5;" class="span6 m-wrap"/>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label"> WAP图片2：</label>
										<div class="controls">
											<input type="file" name="around_wap_pic2" style="border:1px solid #e5e5e5;" class="span6 m-wrap"/>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label"> 产品详情：</label>
										<div class="controls">
											<textarea id="content123" name="around_details" ></textarea>
											<?php echo '<script'; ?>
 type="text/javascript">
												CKEDITOR.replace('around_details', {
													toolbar: [
														['Source'],
														['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Print', 'SpellChecker', 'Scayt'],
														['Undo', 'Redo', '-', 'Find', 'Replace', '-', 'SelectAll', 'RemoveFormat'],
														['BidiLtr', 'BidiRtl'],
														'/', ['Bold', 'Italic', 'Underline', 'Strike'],
														['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', 'Blockquote', 'CreateDiv'],
														['JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock'],
														['Link', 'Unlink', 'Anchor'],
														['Image', 'SpecialChar', 'Table'],
														'/', ['Styles', 'Format', 'Font', 'FontSize'],
														['TextColor', 'BGColor'],
														['Maximize', 'ShowBlocks']
													]
												});
											<?php echo '</script'; ?>
>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label"> 费用说明：</label>
										<div class="controls">
											<textarea id="content12" name="around_explain" ></textarea>
											<?php echo '<script'; ?>
 type="text/javascript">
												CKEDITOR.replace('around_explain', {
													toolbar: [
														['Source'],
														['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Print', 'SpellChecker', 'Scayt'],
														['Undo', 'Redo', '-', 'Find', 'Replace', '-', 'SelectAll', 'RemoveFormat'],
														['BidiLtr', 'BidiRtl'],
														'/', ['Bold', 'Italic', 'Underline', 'Strike'],
														['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', 'Blockquote', 'CreateDiv'],
														['JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock'],
														['Link', 'Unlink', 'Anchor'],
														['Image', 'SpecialChar', 'Table'],
														'/', ['Styles', 'Format', 'Font', 'FontSize'],
														['TextColor', 'BGColor'],
														['Maximize', 'ShowBlocks']
													]
												});
											<?php echo '</script'; ?>
>
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
 type="text/javascript" src="/statics/media/js/form-components.js"><?php echo '</script'; ?>
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
