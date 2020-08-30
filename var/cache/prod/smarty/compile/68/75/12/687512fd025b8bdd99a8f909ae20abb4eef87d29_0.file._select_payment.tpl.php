<?php
/* Smarty version 3.1.33, created on 2020-08-30 23:47:22
  from 'C:\xampp\htdocs\oficial\admin\themes\default\template\controllers\orders\_select_payment.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f4c1e6ac24f24_37357979',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '687512fd025b8bdd99a8f909ae20abb4eef87d29' => 
    array (
      0 => 'C:\\xampp\\htdocs\\oficial\\admin\\themes\\default\\template\\controllers\\orders\\_select_payment.tpl',
      1 => 1598823710,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4c1e6ac24f24_37357979 (Smarty_Internal_Template $_smarty_tpl) {
?><select name="payment_module_name" id="payment_module_name">
  <?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payment_modules']->value, 'module');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['module']->value) {
?>
      <option value="<?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
" <?php if (isset($_POST['payment_module_name']) && $_smarty_tpl->tpl_vars['module']->value->name == $_POST['payment_module_name']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['module']->value->displayName;?>
</option>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php } else { ?>
      <option value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back office order','d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back office order','d'=>'Admin.Orderscustomers.Feature'),$_smarty_tpl ) );?>
</option>
  <?php }?>
</select>
<?php }
}
