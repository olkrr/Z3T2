<?php
/* Smarty version 3.1.31, created on 2018-05-23 13:30:38
  from "/Applications/MAMP/htdocs/Z3T/templates/NaprawaAddForm.html.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b0550de238773_07252075',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24afe6008135f9f6b02d1f1878042ba768b15dc0' => 
    array (
      0 => '/Applications/MAMP/htdocs/Z3T/templates/NaprawaAddForm.html.php',
      1 => 1527075034,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b0550de238773_07252075 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once '/Applications/MAMP/htdocs/Z3T/vendor/smarty/smarty/libs/plugins/function.html_options.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8253316075b0550de21b454_43037342', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12228639845b0550de21e248_22221930', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Main.html.php");
}
/* {block 'title'} */
class Block_8253316075b0550de21b454_43037342 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_8253316075b0550de21b454_43037342',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Dodanie Naprawy<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_12228639845b0550de21e248_22221930 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_12228639845b0550de21e248_22221930',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



 <h1>Dodaj Naprawe</h1>
<form action="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Naprawa/insert" method="post">
    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['IDKlient']->value;?>
" required="required" name="IDKlient" /><br />
    
    IDProducent *: <?php echo smarty_function_html_options(array('name'=>'IDProducent','options'=>$_smarty_tpl->tpl_vars['producenci']->value),$_smarty_tpl);?>
 <br />
    Nazwa Myjki *: <input type="text" required="required"  name="NazMyjki" /><br />
    IDTypMyjki *: <?php echo smarty_function_html_options(array('name'=>'IDTypMyjki','options'=>$_smarty_tpl->tpl_vars['myjki']->value),$_smarty_tpl);?>
<br />
    IDOsprzet *: <?php echo smarty_function_html_options(array('name'=>'IDOsprzet','options'=>$_smarty_tpl->tpl_vars['osprzet']->value),$_smarty_tpl);?>
<br />
    CzyWycena *: <?php echo smarty_function_html_options(array('name'=>'CzyWycena','options'=>$_smarty_tpl->tpl_vars['opcje']->value),$_smarty_tpl);?>
<br />
    Symptomy *: <input type="text" required="required"  name="Symptomy" /><br />
    Diagnoza: <input type="text"      name="Diagnoza" /><br />
    OpisNaprawy: <input type="text"      name="OpisNaprawy" /><br />
    Czesci: <input type="text"   name="Czesci" /><br />
    DataDostarczenia: *<input type="date" required="required"  name="DataDostarczenia" /><br />
    DataOdbioru: <input type="date"     name="DataOdbioru" /><br />
    IDStatus: *<?php echo smarty_function_html_options(array('name'=>'IDStatus','options'=>$_smarty_tpl->tpl_vars['status']->value),$_smarty_tpl);?>
<br />
    KwotaNaprawy: <input type="text"      name="KwotaNaprawy" /><br />
    Kartka: <?php echo smarty_function_html_options(array('name'=>'Kartka','options'=>$_smarty_tpl->tpl_vars['opcje']->value),$_smarty_tpl);?>
<br />
    Kontakt: <?php echo smarty_function_html_options(array('name'=>'Kontakt','options'=>$_smarty_tpl->tpl_vars['opcje']->value),$_smarty_tpl);?>
<br />
    
    <input type="submit" value="Dodaj" />
</form>
	
<?php echo '<?php ';?>include 'templates/footer.html.php';  <?php echo '?>';?>
    
<?php
}
}
/* {/block 'body'} */
}
