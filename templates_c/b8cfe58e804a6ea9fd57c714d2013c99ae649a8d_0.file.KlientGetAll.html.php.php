<?php
/* Smarty version 3.1.31, created on 2018-04-08 14:40:33
  from "C:\xampp\htdocs\Z3T\Z3T\templates\KlientGetAll.html.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5aca0dc1f3e452_62864062',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8cfe58e804a6ea9fd57c714d2013c99ae649a8d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Z3T\\Z3T\\templates\\KlientGetAll.html.php',
      1 => 1522238490,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aca0dc1f3e452_62864062 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7906259325aca0dc1f18104_24542952', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17515287595aca0dc1f196e8_01379072', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Main.html.php");
}
/* {block 'title'} */
class Block_7906259325aca0dc1f18104_24542952 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_7906259325aca0dc1f18104_24542952',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Lista klientów<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_17515287595aca0dc1f196e8_01379072 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_17515287595aca0dc1f196e8_01379072',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h1>Lista Klientów</h1>
<?php if (isset($_smarty_tpl->tpl_vars['klienci']->value)) {
if (count($_smarty_tpl->tpl_vars['klienci']->value) === 0) {?>
        <b>Brak klientów w bazie!</b><br/><br/>
<?php } else { ?>
<td></td>
<table>
   
       <thead>
      <tr>
        <td><a>ID Klienta</a></td>
        <td>Imie</td>
        <td>Nazwisko</td>
        <td>Nazwa Firmy</td>
        <td>Telefon</td>
        <td>Email</td>
        <td>Nip</td>
      
        <td></td>
       <!-- <td></td-->
       <td></td>
    </tr>
	</thead>
	<tbody>
    
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['klienci']->value, 'Klient', false, 'id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['Klient']->value) {
?>
        <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['Klient']->value['IDKlient'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['Klient']->value['Imie'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['Klient']->value['Nazwisko'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['Klient']->value['NazwaFirmy'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['Klient']->value['NumerTelefonu'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['Klient']->value['Email'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['Klient']->value['Nip'];?>
</td>
            
<td><a href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Klient/edit/<?php echo $_smarty_tpl->tpl_vars['Klient']->value['IdKlient'];?>
">edytuj</a></td>
            <td><a href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Klient/delete/<?php echo $_smarty_tpl->tpl_vars['Klient']->value['IdKlient'];?>
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
<br/><br/>
<a href="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Klient/add">Dodaj klienta</a><br/>
<?php
}
}
/* {/block 'body'} */
}
