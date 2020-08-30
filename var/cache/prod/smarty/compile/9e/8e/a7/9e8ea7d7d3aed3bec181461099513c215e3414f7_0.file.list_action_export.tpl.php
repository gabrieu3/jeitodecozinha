<?php
/* Smarty version 3.1.33, created on 2020-08-30 23:47:24
  from 'C:\xampp\htdocs\oficial\admin\themes\default\template\controllers\request_sql\list_action_export.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f4c1e6c4dbdf8_27831335',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e8ea7d7d3aed3bec181461099513c215e3414f7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\oficial\\admin\\themes\\default\\template\\controllers\\request_sql\\list_action_export.tpl',
      1 => 1598823711,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4c1e6c4dbdf8_27831335 (Smarty_Internal_Template $_smarty_tpl) {
?>

<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['href']->value,'html','UTF-8' ));?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" class="btn btn-default">
	<i class="icon-cloud-upload"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }
}
