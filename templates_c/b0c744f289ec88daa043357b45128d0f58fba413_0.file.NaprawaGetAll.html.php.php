<?php
/* Smarty version 3.1.31, created on 2018-06-13 12:47:15
  from "C:\xampp\htdocs\Z3T\templates\NaprawaGetAll.html.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b20f633052c81_81166524',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0c744f289ec88daa043357b45128d0f58fba413' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Z3T\\templates\\NaprawaGetAll.html.php',
      1 => 1528885148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b20f633052c81_81166524 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5225903845b20f632f1c3e0_97074049', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20319995015b20f632f20275_79735060', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Main.html.php");
}
/* {block 'title'} */
class Block_5225903845b20f632f1c3e0_97074049 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_5225903845b20f632f1c3e0_97074049',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Lista napraw<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_20319995015b20f632f20275_79735060 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_20319995015b20f632f20275_79735060',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class ="container-fluid">
<div class ="page-header">
<h1>Naprawy</h1>
    
    
    
    
    
    </div>
<?php if (isset($_smarty_tpl->tpl_vars['naprawy']->value)) {
if (count($_smarty_tpl->tpl_vars['naprawy']->value) === 0) {?>

        <div class="alert alert-danger" role="alert">Brak napraw w bazie!</div>
<?php } else { ?>
    <div>
<table id="example" class="table display table-striped table-bordered table-responsive" cellspacing="0" width="100%">
   <thead>
      <tr>
		<!--<th><a>ID</a></th>-->
        <th><a>Imie/Nazwisko/Firma</a></th>
        <th><a>Producent</a></th>
        <th><a>Model Myjki</a></th>
        <th><a>Typ Myjki</a></th>
        <th><a>Osprzęt</a></th>
        <th><a>Wycena?</a></th>
        <th><a>Data Dostarczenia</a></th>
        <th><a>Data Odbioru</a></th>
        <th><a>Należność</a></th>
        <th><a>Opis</a></th>
        <th><a>Status</a></th>
        <th></th>
          <th></th>
    </tr>
</thead>
<tbody>
    
    
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['naprawy']->value, 'Naprawa', false, 'id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['Naprawa']->value) {
?>
<tr>
<!--<td><?php echo $_smarty_tpl->tpl_vars['Naprawa']->value['IDNaprawa'];?>
</td>-->
<td><?php echo $_smarty_tpl->tpl_vars['Naprawa']->value['Imie'];?>
 <?php echo $_smarty_tpl->tpl_vars['Naprawa']->value['Nazwisko'];?>
 <?php echo $_smarty_tpl->tpl_vars['Naprawa']->value['NazwaFirmy'];?>
 </td>   
<td><?php echo $_smarty_tpl->tpl_vars['Naprawa']->value['ProducentNazwa'];?>
</td> 
<td><?php echo $_smarty_tpl->tpl_vars['Naprawa']->value['NazMyjki'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['Naprawa']->value['NazwaTypMyjki'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['Naprawa']->value['OsprzetNazwa'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['Naprawa']->value['Opcja'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['Naprawa']->value['DataDostarczenia'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['Naprawa']->value['DataOdbioru'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['Naprawa']->value['KwotaNaprawy'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['Naprawa']->value['OpisNaprawy'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['Naprawa']->value['StatusNazwa'];?>
</td>



    <td><a type="button" class="btn btn-primary center-block" href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Naprawa/edit/<?php echo $_smarty_tpl->tpl_vars['Naprawa']->value['IDNaprawa'];?>
">edytuj</a></td>
    <td><a type="button" class="btn btn-danger center-block" href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Naprawa/delete/<?php echo $_smarty_tpl->tpl_vars['Naprawa']->value['IDNaprawa'];?>
">usuń</a></td>
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
</div></div>
<?php
}
}
/* {/block 'body'} */
}
