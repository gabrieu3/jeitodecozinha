<?php
/* Smarty version 3.1.33, created on 2020-08-30 23:47:40
  from 'C:\xampp\htdocs\oficial\themes\classic\templates\catalog\_partials\product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f4c1e7ca97db8_05238306',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b27723efa2b38ab4a8f131e32840dbe9b7d0765' => 
    array (
      0 => 'C:\\xampp\\htdocs\\oficial\\themes\\classic\\templates\\catalog\\_partials\\product-additional-info.tpl',
      1 => 1598823725,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4c1e7ca97db8_05238306 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
