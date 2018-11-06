<?php
/* Smarty version 3.1.31, created on 2018-06-13 12:19:22
  from "/Applications/MAMP/htdocs/Z3T/templates/KlientGetAll.html.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b20efaa948261_87115501',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '554341663aa891727e3600aa2c07b6a97c09b5a0' => 
    array (
      0 => '/Applications/MAMP/htdocs/Z3T/templates/KlientGetAll.html.php',
      1 => 1528885136,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b20efaa948261_87115501 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_911350395b20efaa8fb397_99487485', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16548648225b20efaa8fe7d7_54514564', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Main.html.php");
}
/* {block 'title'} */
class Block_911350395b20efaa8fb397_99487485 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_911350395b20efaa8fb397_99487485',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Lista klientów<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_16548648225b20efaa8fe7d7_54514564 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_16548648225b20efaa8fe7d7_54514564',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class ="container-fluid">
<div class ="page-header">

<h1>Klienci</h1>
    </div>
<?php if (isset($_smarty_tpl->tpl_vars['klienci']->value)) {
if (count($_smarty_tpl->tpl_vars['klienci']->value) === 0) {?>
        <div class="alert alert-danger" role="alert">Brak klientów w bazie!</div>
<?php } else { ?>
<td></td>
    <div>
<table id="example" class="table display table-striped table-bordered" cellspacing="0" width="100%"> 
   
       <thead>
      <tr>
        <!--<th><a>ID</a></th>-->
        <th>Imie/Nazwisko/Firma</th>
      <!--  <th>Nazwisko</th>
        <th>Nazwa Firmy</th> -->
        <th>Telefon</th>
        <th>Email</th>
        <th>Nip</th>
		<th>Uwagi</th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
	</thead>
	<tbody>
    
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['klienci']->value, 'Klient', false, 'id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['Klient']->value) {
?>
        <tr>
                    <!--<td><?php echo $_smarty_tpl->tpl_vars['Klient']->value['IDKlient'];?>
</td>-->
                    <td><?php echo $_smarty_tpl->tpl_vars['Klient']->value['Imie'];?>
 <?php echo $_smarty_tpl->tpl_vars['Klient']->value['Nazwisko'];?>
 
					<?php echo $_smarty_tpl->tpl_vars['Klient']->value['NazwaFirmy'];?>
</td>
                    <!--<td><?php echo $_smarty_tpl->tpl_vars['Klient']->value['Nazwisko'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['Klient']->value['NazwaFirmy'];?>
</td> -->
                    <td><?php echo $_smarty_tpl->tpl_vars['Klient']->value['NumerTelefonu'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['Klient']->value['Email'];?>
</td>
                    <?php if (($_smarty_tpl->tpl_vars['Klient']->value['Nip'] == null)) {?> 
						<td> <em>-Brak-</em>
						<?php } else { ?>
					<td><?php echo $_smarty_tpl->tpl_vars['Klient']->value['Nip'];?>
</td>
						<?php }?>
						<?php if (($_smarty_tpl->tpl_vars['Klient']->value['Uwagi'] == null)) {?> 
						<td> <em>-Brak-</em>
						<?php } else { ?>
					<td><?php echo $_smarty_tpl->tpl_vars['Klient']->value['Uwagi'];?>
</td>
						<?php }?>

            
            <td><a type="button" class="btn btn-info center-block" href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Naprawa/getNaprawyForKlient/<?php echo $_smarty_tpl->tpl_vars['Klient']->value['IDKlient'];?>
">Naprawy</a></td>
            <td><a type="button" class="btn btn-primary center-block" href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Klient/edit/<?php echo $_smarty_tpl->tpl_vars['Klient']->value['IDKlient'];?>
">Edytuj</a></td>
			<td><a type="button" class="btn btn-success center-block" href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Naprawa/add/<?php echo $_smarty_tpl->tpl_vars['Klient']->value['IDKlient'];?>
">Dodaj naprawę</a></td>
            <td><a type="button" class="btn btn-danger center-block" href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Klient/delete/<?php echo $_smarty_tpl->tpl_vars['Klient']->value['IDKlient'];?>
">Usuń</a></td>
            
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
<br/><br/>
<a href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Klient/add">Dodaj klienta</a><br/>
</div></div>
    

<?php
}
}
/* {/block 'body'} */
}
