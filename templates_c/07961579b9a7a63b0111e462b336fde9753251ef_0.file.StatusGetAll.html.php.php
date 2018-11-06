<?php
/* Smarty version 3.1.31, created on 2018-06-13 12:21:57
  from "/Applications/MAMP/htdocs/Z3T/templates/StatusGetAll.html.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b20f045755f88_07118170',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07961579b9a7a63b0111e462b336fde9753251ef' => 
    array (
      0 => '/Applications/MAMP/htdocs/Z3T/templates/StatusGetAll.html.php',
      1 => 1528885281,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b20f045755f88_07118170 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6175635595b20f04572baa1_89388995', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17536894115b20f04572e6f3_32013349', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Main.html.php");
}
/* {block 'title'} */
class Block_6175635595b20f04572baa1_89388995 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_6175635595b20f04572baa1_89388995',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Lista statusów<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_17536894115b20f04572e6f3_32013349 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_17536894115b20f04572e6f3_32013349',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class ="container">
<div class ="page-header">
<h1>Statusy</h1>
    </div>
<?php if (isset($_smarty_tpl->tpl_vars['statusy']->value)) {
if (count($_smarty_tpl->tpl_vars['statusy']->value) === 0) {?>
        <div class="alert alert-danger" role="alert">Brak statusów w bazie!</div>
<?php } else { ?>


<table class="table table-striped table-bordered" cellspacing="0" width="100%">   
   
       <thead>
      <tr>
        <td><a>ID</a></td>
        <td>Status</td>
        
    </tr>
	</thead>
	<tbody>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['statusy']->value, 'Status', false, 'id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['Status']->value) {
?>
	<tr>
   <td><?php echo $_smarty_tpl->tpl_vars['Status']->value['IDStatus'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['Status']->value['StatusNazwa'];?>
</td>
                </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

	</tbody>

</table>
<?php }
}
if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
<strong><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</strong>
<?php }?>

    <div class="alert alert-danger" role="alert">Statusy należy dodać w interfejsie phpmyadmin. NIE USUWAĆ ISTNIEJĄCYCH WPISÓW!</div>
</div>

<?php
}
}
/* {/block 'body'} */
}
