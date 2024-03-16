<?php
/* Smarty version 4.3.4, created on 2024-03-16 14:41:50
  from '/app/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65f5a19edea988_53775691',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df6ce1a8ddb421b61b7bc846e98a0cd584dce004' => 
    array (
      0 => '/app/themes/classic/templates/index.tpl',
      1 => 1697822646,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f5a19edea988_53775691 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_173925429165f5a19ede96b4_81911200', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_108398518065f5a19ede9964_45672840 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_132810475965f5a19ede9fb8_35914165 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_29066352265f5a19ede9d74_74401445 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_132810475965f5a19ede9fb8_35914165', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_173925429165f5a19ede96b4_81911200 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_173925429165f5a19ede96b4_81911200',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_108398518065f5a19ede9964_45672840',
  ),
  'page_content' => 
  array (
    0 => 'Block_29066352265f5a19ede9d74_74401445',
  ),
  'hook_home' => 
  array (
    0 => 'Block_132810475965f5a19ede9fb8_35914165',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_108398518065f5a19ede9964_45672840', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_29066352265f5a19ede9d74_74401445', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
