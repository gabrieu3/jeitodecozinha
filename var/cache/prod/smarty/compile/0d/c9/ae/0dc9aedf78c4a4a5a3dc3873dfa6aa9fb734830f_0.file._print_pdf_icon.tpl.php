<?php
/* Smarty version 3.1.33, created on 2020-08-30 23:47:25
  from 'C:\xampp\htdocs\oficial\admin\themes\default\template\controllers\slip\_print_pdf_icon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f4c1e6dc132d5_18634191',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0dc9aedf78c4a4a5a3dc3873dfa6aa9fb734830f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\oficial\\admin\\themes\\default\\template\\controllers\\slip\\_print_pdf_icon.tpl',
      1 => 1598823710,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4c1e6dc132d5_18634191 (Smarty_Internal_Template $_smarty_tpl) {
?>

<a class="btn btn-default _blank" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf',true,array(),array('submitAction'=>'generateOrderSlipPDF','id_order_slip'=>intval($_smarty_tpl->tpl_vars['order_slip']->value->id))),'html','UTF-8' ));?>
">
	<i class="icon-file-text"></i>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download credit slip','d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );?>

</a>

<?php }
}
