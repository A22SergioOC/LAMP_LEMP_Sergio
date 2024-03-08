<?php
/* Smarty version 4.3.4, created on 2024-03-06 09:19:47
  from '/app/admin199ljpx8peupdxyyhvl/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65e82723460379_21559381',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4b9c1d321f21a3c9b51636827b06a31f26d2b22' => 
    array (
      0 => '/app/admin199ljpx8peupdxyyhvl/themes/default/template/content.tpl',
      1 => 1707478622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65e82723460379_21559381 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
