<?php
/* Smarty version 3.1.31, created on 2018-06-13 13:24:16
  from "C:\xampp\htdocs\Z3T\templates\ProducentGetAll.html.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b20fee097aee8_03371078',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76454add39b04bcf6928f4b9ceda2464f559a8eb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Z3T\\templates\\ProducentGetAll.html.php',
      1 => 1528885274,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b20fee097aee8_03371078 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18441923955b20fee0922568_63049509', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13901989615b20fee0926475_37189876', 'body');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Main.html.php");
}
/* {block 'title'} */
class Block_18441923955b20fee0922568_63049509 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_18441923955b20fee0922568_63049509',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Lista producentów<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_13901989615b20fee0926475_37189876 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_13901989615b20fee0926475_37189876',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class ="container-fluid">
<div class ="page-header">
<h1>Producenci</h1>
    </div>
<?php if (isset($_smarty_tpl->tpl_vars['producenci']->value)) {
if (count($_smarty_tpl->tpl_vars['producenci']->value) === 0) {?>
    <div class="alert alert-danger" role="alert">Brak producenci w bazie!</div>
<?php } else { ?>

<table class="table table-striped table-bordered" cellspacing="0" width="100%">
   
       <thead>
      <tr>
        <td><a>ID</a></td>
        <td>Producent</td>
        
    </tr>
	</thead>
	<tbody>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['producenci']->value, 'Producent', false, 'id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['Producent']->value) {
?>
	<tr>
   <td><?php echo $_smarty_tpl->tpl_vars['Producent']->value['IDProducent'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['Producent']->value['ProducentNazwa'];?>
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
<div class="alert alert-danger" role="alert">Dodatkowych producentów należy dodać w interfejsie phpmyadmin. NIE USUWAĆ ISTNIEJĄCYCH WPISÓW!</div>
</div>
<?php
}
}
/* {/block 'body'} */
}
