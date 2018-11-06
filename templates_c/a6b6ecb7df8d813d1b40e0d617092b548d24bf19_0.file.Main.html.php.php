<?php
/* Smarty version 3.1.31, created on 2018-04-25 09:57:22
  from "/Applications/MAMP/htdocs/Z3T/templates/Main.html.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5ae034e2938d28_24855066',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6b6ecb7df8d813d1b40e0d617092b548d24bf19' => 
    array (
      0 => '/Applications/MAMP/htdocs/Z3T/templates/Main.html.php',
      1 => 1511168154,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html.php' => 1,
    'file:footer.html.php' => 1,
  ),
),false)) {
function content_5ae034e2938d28_24855066 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender("file:header.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6019875475ae034e2936610_12294855', 'body');
?>


<?php $_smarty_tpl->_subTemplateRender("file:footer.html.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {block 'body'} */
class Block_6019875475ae034e2936610_12294855 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_6019875475ae034e2936610_12294855',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
}
