<?php
/* Smarty version 3.1.33, created on 2020-08-30 23:47:36
  from 'C:\xampp\htdocs\oficial\admin\themes\default\template\helpers\tree\tree_node_item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f4c1e78c87763_43982103',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf20953d1ee89c8855ae27c9001460b3f505fc2d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\oficial\\admin\\themes\\default\\template\\helpers\\tree\\tree_node_item.tpl',
      1 => 1598823711,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4c1e78c87763_43982103 (Smarty_Internal_Template $_smarty_tpl) {
?>
<li class="tree-item">
	<span class="tree-item-name">
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li>
<?php }
}
