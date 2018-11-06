<?php
/* Smarty version 3.1.31, created on 2018-06-13 12:36:28
  from "C:\xampp\htdocs\Z3T\templates\KlientAddForm.html.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b20f3ac664707_33748256',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11a30f26e524ee5ce3b6f435b3b5324b6b36f319' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Z3T\\templates\\KlientAddForm.html.php',
      1 => 1528885190,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b20f3ac664707_33748256 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2683465895b20f3ac645d08_64640921', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_40879405b20f3ac649e60_62723249', 'body');
?>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "Main.html.php");
}
/* {block 'title'} */
class Block_2683465895b20f3ac645d08_64640921 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_2683465895b20f3ac645d08_64640921',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Dodanie<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_40879405b20f3ac649e60_62723249 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_40879405b20f3ac649e60_62723249',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h1>Dodaj klienta</h1>
<form action="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Klient/insert" method="post">
    Imie: <input type="text" class="form-control" required="required"     name="Imie" /><br />
    Nazwisko: <input type="text" class="form-control" required="required"     name="Nazwisko" /><br />
    Nazwa Firmy: <input type="text" class="form-control" name="NazwaFirmy" /><br />
    Telefon: <input type="text" class="form-control" required="required"     name="NumerTelefonu" /><br />
    E-Mail: <input type="text" class="form-control" name="Email" /><br />
    Ulica: <input type="text" class="form-control" name="Ulica" /><br />
    NumerDomu: <input type="text" class="form-control" name="NumerDomu" /><br />
    Miejscowosc: <input type="text" class="form-control" required="required"     name="Miejscowosc" /><br />
    KodPocztowy: <input type="text" class="form-control" required="required"     name="KodPocztowy" /><br />
    Uwagi: <input type="text" class="form-control" name="Uwagi" /><br />
    Nip: <input type="text" class="form-control" name="Nip" /><br />
    <input type="submit" class="btn btn-success" value="Dodaj" />
</form>

<?php
}
}
/* {/block 'body'} */
}
