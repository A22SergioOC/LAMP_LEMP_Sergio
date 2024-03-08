<?php
/* Smarty version 4.3.4, created on 2024-03-06 10:19:07
  from '/app/admin199ljpx8peupdxyyhvl/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65e8350b1876f2_73633266',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e23b48c9f823e5711e34fcdd29f6762ecf94b84e' => 
    array (
      0 => '/app/admin199ljpx8peupdxyyhvl/themes/new-theme/template/content.tpl',
      1 => 1707478622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65e8350b1876f2_73633266 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
