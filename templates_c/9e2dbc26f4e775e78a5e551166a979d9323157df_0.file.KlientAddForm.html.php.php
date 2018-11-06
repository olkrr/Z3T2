<?php
/* Smarty version 3.1.31, created on 2018-05-09 10:36:16
  from "/Applications/MAMP/htdocs/Z3T/templates/KlientAddForm.html.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5af2b300944ef6_53607618',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e2dbc26f4e775e78a5e551166a979d9323157df' => 
    array (
      0 => '/Applications/MAMP/htdocs/Z3T/templates/KlientAddForm.html.php',
      1 => 1524642226,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af2b300944ef6_53607618 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1168511995af2b300936943_78196351', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20583161835af2b30093a051_58169827', 'body');
?>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Main.html.php");
}
/* {block 'title'} */
class Block_1168511995af2b300936943_78196351 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_1168511995af2b300936943_78196351',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Dodanie<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_20583161835af2b30093a051_58169827 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_20583161835af2b30093a051_58169827',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h1>Dodaj Klienta</h1>
<form action="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Klient/insert" method="post">
    Imie: <input type="text" required="required"     name="Imie" /><br />
    Nazwisko: <input type="text" required="required"     name="Nazwisko" /><br />
    Nazwa Firmy: <input type="text" name="NazwaFirmy" /><br />
    Telefon: <input type="text" required="required"     name="NumerTelefonu" /><br />
    E-Mail: <input type="text" name="Email" /><br />
    Ulica: <input type="text" name="Ulica" /><br />
    NumerDomu: <input type="text" name="NumerDomu" /><br />
    Miejscowosc: <input type="text" required="required"     name="Miejscowosc" /><br />
    KodPocztowy: <input type="text" required="required"     name="KodPocztowy" /><br />
    Uwagi: <input type="text" name="Uwagi" /><br />
    Nip: <input type="text" name="Nip" /><br />
    <input type="submit" value="Dodaj" />
</form>

<?php
}
}
/* {/block 'body'} */
}
