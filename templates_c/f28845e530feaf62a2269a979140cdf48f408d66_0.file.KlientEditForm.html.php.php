<?php
/* Smarty version 3.1.31, created on 2018-06-13 12:16:01
  from "/Applications/MAMP/htdocs/Z3T/templates/KlientEditForm.html.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b20eee1778651_50135897',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f28845e530feaf62a2269a979140cdf48f408d66' => 
    array (
      0 => '/Applications/MAMP/htdocs/Z3T/templates/KlientEditForm.html.php',
      1 => 1527678434,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b20eee1778651_50135897 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16852566195b20eee17542e0_87427198', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13498539815b20eee1757378_97305163', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Main.html.php");
}
/* {block 'title'} */
class Block_16852566195b20eee17542e0_87427198 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_16852566195b20eee17542e0_87427198',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Edycja<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_13498539815b20eee1757378_97305163 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_13498539815b20eee1757378_97305163',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h1>Edytuj dane Klienta</h1>

<form action="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Klient/update" method="post">
     <input type="hidden" id="id" name="id" value="<?php echo $_smarty_tpl->tpl_vars['Klient']->value['IDKlient'];?>
">
   
    Imie: <input type="text" class="form-control" required="required" id="Imie" name="Imie"  value="<?php echo $_smarty_tpl->tpl_vars['Klient']->value['Imie'];?>
"><br />
    Nazwisko: <input type="text" class="form-control" required="required"     id="Nazwisko" name="Nazwisko"  value="<?php echo $_smarty_tpl->tpl_vars['Klient']->value['Nazwisko'];?>
"><br />
    Nazwa Firmy : <input type="text" name="NazwaFirmy"   class= "form-control"   value="<?php echo $_smarty_tpl->tpl_vars['Klient']->value['NazwaFirmy'];?>
"><br />
    Telefon : <input type="text" class="form-control" required="required"     id="NumerTelefonu" name="NumerTelefonu"  value="<?php echo $_smarty_tpl->tpl_vars['Klient']->value['NumerTelefonu'];?>
"><br />
    E-mail : <input type="text" class="form-control" id="Email" name="Email"  value="<?php echo $_smarty_tpl->tpl_vars['Klient']->value['Email'];?>
"><br />
	Ulica : <input type="text" class="form-control" id="Ulica" name="Ulica"  value="<?php echo $_smarty_tpl->tpl_vars['Klient']->value['Ulica'];?>
"><br />
	Nr Domu : <input type="text" class="form-control" id="NumerDomu" name="NumerDomu"  value="<?php echo $_smarty_tpl->tpl_vars['Klient']->value['NumerDomu'];?>
"><br />
    Miejscowość : <input type="text" class="form-control" id="Miejscowosc" required="required"     name="Miejscowosc" value="<?php echo $_smarty_tpl->tpl_vars['Klient']->value['Miejscowosc'];?>
"><br />
    KodPocztowy :<input type="text" class="form-control" id="KodPocztowy" required="required"     name="KodPocztowy" value="<?php echo $_smarty_tpl->tpl_vars['Klient']->value['KodPocztowy'];?>
"><br />
    Nip : <input type="text" class="form-control" id="Nip" name="Nip" value="<?php echo $_smarty_tpl->tpl_vars['Klient']->value['Nip'];?>
"><br />
	Uwagi : <input type="textbox" class="form-control" id="Uwagi" name="Uwagi" value="<?php echo $_smarty_tpl->tpl_vars['Klient']->value['Uwagi'];?>
"><br />
    <input type="submit" class="btn btn-success" value="Aktualizuj" />
</form>
<?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
<strong><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</strong>
<?php }?>

<?php
}
}
/* {/block 'body'} */
}
