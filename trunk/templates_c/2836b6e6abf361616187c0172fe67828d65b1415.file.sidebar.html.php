<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-12-20 20:10:48
         compiled from "/Library/WebServer/Documents/blog/blog/trunk/application/views/common/sidebar.html" */ ?>
<?php /*%%SmartyHeaderCode:19715204855859194bc45a07-50113236%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2836b6e6abf361616187c0172fe67828d65b1415' => 
    array (
      0 => '/Library/WebServer/Documents/blog/blog/trunk/application/views/common/sidebar.html',
      1 => 1482235840,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19715204855859194bc45a07-50113236',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5859194bcc0ce7_83288751',
  'variables' => 
  array (
    'menu_id' => 0,
    'my_menu' => 0,
    'value' => 0,
    'value1' => 0,
    'value2' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5859194bcc0ce7_83288751')) {function content_5859194bcc0ce7_83288751($_smarty_tpl) {?><!-- BEGIN SIDEBAR -->
<div class="page-sidebar nav-collapse collapse">
    <!-- BEGIN SIDEBAR MENU -->
    <ul class="page-sidebar-menu">
        <li>
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            <div class="sidebar-toggler hidden-phone"></div>
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
        </li>
        <li>
            <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
            <form class="sidebar-search">
                <div class="input-box">
                    <a href="javascript:;" class="remove"></a>
                    <input type="text" placeholder="Search..." />
                    <input type="button" class="submit" value=" " />
                </div>
            </form>
            <!-- END RESPONSIVE QUICK SEARCH FORM -->
        </li>
        <li <?php if (!$_smarty_tpl->tpl_vars['menu_id']->value) {?>class="start active" <?php }?>>
            <a href="/Admin_Layout/index/">
                <i class="icon-home"></i>
                <span class="title">Dashboard</span>
                <span class="selected"></span>
            </a>
        </li>
        <?php if (!empty($_smarty_tpl->tpl_vars['my_menu']->value)) {?>
        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['my_menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
        <li class="dropdown" >
        <a class="ajaxify" href="/<?php echo $_smarty_tpl->tpl_vars['value']->value['menu_controller'];?>
/<?php echo $_smarty_tpl->tpl_vars['value']->value['menu_method'];?>
">
            <i class="<?php echo $_smarty_tpl->tpl_vars['value']->value['module_icon'];?>
"></i>
            <span class="title"><?php echo $_smarty_tpl->tpl_vars['value']->value['menu_name'];?>
</span>
            <span class="selected"></span>
            <?php if (!empty($_smarty_tpl->tpl_vars['value']->value['children'])) {?>
            <span class="arrow"></span>
            <?php }?>
        </a>
        <ul class="sub-menu">
            <?php if (!empty($_smarty_tpl->tpl_vars['value']->value['children'])) {?>
            <?php  $_smarty_tpl->tpl_vars['value1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value1']->_loop = false;
 $_smarty_tpl->tpl_vars['key1'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['value']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value1']->key => $_smarty_tpl->tpl_vars['value1']->value) {
$_smarty_tpl->tpl_vars['value1']->_loop = true;
 $_smarty_tpl->tpl_vars['key1']->value = $_smarty_tpl->tpl_vars['value1']->key;
?>

            <li class="<?php echo $_smarty_tpl->tpl_vars['value1']->value['menu_controller'];?>
 page_name">
            <!--<li class="start">-->
                <a href="/<?php echo $_smarty_tpl->tpl_vars['value1']->value['menu_controller'];?>
/<?php echo $_smarty_tpl->tpl_vars['value1']->value['menu_method'];?>
">
                    <i class="<?php echo $_smarty_tpl->tpl_vars['value1']->value['module_icon'];?>
"></i>
                    <?php echo $_smarty_tpl->tpl_vars['value1']->value['menu_name'];?>

                    <?php if (!empty($_smarty_tpl->tpl_vars['value1']->value['children'])) {?>
                    <span class="arrow"></span>
                    <?php }?>
                </a>
                <?php if (!empty($_smarty_tpl->tpl_vars['value1']->value['children'])) {?>
                <?php  $_smarty_tpl->tpl_vars['value2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['value1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value2']->key => $_smarty_tpl->tpl_vars['value2']->value) {
$_smarty_tpl->tpl_vars['value2']->_loop = true;
?>
                <ul class="sub-menu">
                    <li><a href="/<?php echo $_smarty_tpl->tpl_vars['value2']->value['menu_controller'];?>
/<?php echo $_smarty_tpl->tpl_vars['value2']->value['menu_method'];?>
">
                        <?php echo $_smarty_tpl->tpl_vars['value2']->value['menu_name'];?>

                    </a></li>
                </ul>
                <?php } ?>
                <?php }?>
            </li>
            <?php } ?>
            <?php }?>
        </ul>
        </li>
        <?php } ?>
        <?php }?>
    </ul>
    <!-- END SIDEBAR MENU -->
</div>
<!-- END SIDEBAR --><?php }} ?>
