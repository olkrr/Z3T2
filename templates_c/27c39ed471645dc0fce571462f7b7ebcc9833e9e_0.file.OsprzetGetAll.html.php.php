<?php
/* Smarty version 3.1.31, created on 2018-06-13 12:22:48
  from "/Applications/MAMP/htdocs/Z3T/templates/OsprzetGetAll.html.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b20f078581c96_31914078',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27c39ed471645dc0fce571462f7b7ebcc9833e9e' => 
    array (
      0 => '/Applications/MAMP/htdocs/Z3T/templates/OsprzetGetAll.html.php',
      1 => 1528885362,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b20f078581c96_31914078 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18514082865b20f07855da55_92894584', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13879324005b20f078560b59_51239098', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Main.html.php");
}
/* {block 'title'} */
class Block_18514082865b20f07855da55_92894584 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_18514082865b20f07855da55_92894584',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Lista osprzętów<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_13879324005b20f078560b59_51239098 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_13879324005b20f078560b59_51239098',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class ="container-fluid">
<div class ="page-header">
<h1>Osprzety</h1>
    </div>
<?php if (isset($_smarty_tpl->tpl_vars['osprzety']->value)) {
if (count($_smarty_tpl->tpl_vars['osprzety']->value) === 0) {?>
        <div class="alert alert-danger" role="alert">Brak osprzętów w bazie!</div>
<?php } else { ?>

<table class="table table-striped table-bordered" cellspacing="0" width="100%">
   
       <thead>
      <tr>
        <td><a>ID</a></td>
        <td>Osprzętu</td>
        
    </tr>
	</thead>
	<tbody>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['osprzety']->value, 'Osprzet', false, 'id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['Osprzet']->value) {
?>
	<tr>
   <td><?php echo $_smarty_tpl->tpl_vars['Osprzet']->value['IDOsprzet'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['Osprzet']->value['OsprzetNazwa'];?>
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
<div class="alert alert-danger" role="alert">Wersje osprzętów należy dodać w interfejsie phpmyadmin. NIE USUWAĆ ISTNIEJĄCYCH WPISÓW!</div>
</div>
<?php
}
}
/* {/block 'body'} */
}
