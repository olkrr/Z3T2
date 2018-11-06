<?php
/* Smarty version 3.1.31, created on 2018-06-13 13:06:10
  from "C:\xampp\htdocs\Z3T\templates\NaprawaAddForm.html.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b20faa25ef377_15864642',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7a3d97cde8f59487a33e550e6bf1a34f27ccae7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Z3T\\templates\\NaprawaAddForm.html.php',
      1 => 1528887928,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b20faa25ef377_15864642 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once 'C:\\xampp\\htdocs\\Z3T\\vendor\\smarty\\smarty\\libs\\plugins\\function.html_options.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18801330895b20faa25a6335_18129238', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7348966885b20faa25a9e01_96439023', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Main.html.php");
}
/* {block 'title'} */
class Block_18801330895b20faa25a6335_18129238 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_18801330895b20faa25a6335_18129238',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Dodanie Naprawy<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_7348966885b20faa25a9e01_96439023 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_7348966885b20faa25a9e01_96439023',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



 <h1>Dodaj naprawę</h1>
<form action="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Naprawa/insert" method="post">
    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['IDKlient']->value;?>
" required="required" name="IDKlient" /><br />
    
    IDProducent *: <div class=form-control> <?php echo smarty_function_html_options(array('name'=>'IDProducent','options'=>$_smarty_tpl->tpl_vars['producenci']->value),$_smarty_tpl);?>
 <br /></div>
    Nazwa Myjki *: <input type="text" class="form-control" required="required"  name="NazMyjki" /><br />
    IDTypMyjki *: <div class=form-control> <?php echo smarty_function_html_options(array('name'=>'IDTypMyjki','options'=>$_smarty_tpl->tpl_vars['myjki']->value),$_smarty_tpl);?>
<br /></div>
    IDOsprzet *: <div class=form-control> <?php echo smarty_function_html_options(array('name'=>'IDOsprzet','options'=>$_smarty_tpl->tpl_vars['osprzet']->value),$_smarty_tpl);?>
<br /></div>
    CzyWycena *: <div class=form-control> <?php echo smarty_function_html_options(array('name'=>'CzyWycena','options'=>$_smarty_tpl->tpl_vars['opcje']->value),$_smarty_tpl);?>
<br /></div>
    Symptomy *: <textarea type="text" class="form-control" required="required"  name="Symptomy" /></textarea><br />
    Diagnoza: <textarea type="text"  class="form-control"    name="Diagnoza" /></textarea><br />
    OpisNaprawy: <textarea type="text"  class="form-control"    name="OpisNaprawy" /></textarea><br />
    Czesci: <textarea type="text" class="form-control"  name="Czesci" /></textarea> <br />
    DataDostarczenia: *<input type="date" class="form-control" required="required"  name="DataDostarczenia" /><br />
    DataOdbioru: <input type="date"  class="form-control"   name="DataOdbioru" /><br />
    IDStatus: * <div class=form-control> <?php echo smarty_function_html_options(array('name'=>'IDStatus','options'=>$_smarty_tpl->tpl_vars['status']->value),$_smarty_tpl);?>
<br /></div>
    KwotaNaprawy: <input type="text"  class="form-control"    name="KwotaNaprawy" /><br />
    Kartka: <div class=form-control> <?php echo smarty_function_html_options(array('name'=>'Kartka','options'=>$_smarty_tpl->tpl_vars['opcje']->value),$_smarty_tpl);?>
<br /></div>
    Kontakt: <div class=form-control> <?php echo smarty_function_html_options(array('name'=>'Kontakt','options'=>$_smarty_tpl->tpl_vars['opcje']->value),$_smarty_tpl);?>
<br /></div>
    
    <input type="submit" value="Dodaj" />
</form>
	
<?php echo '<?php ';?>include 'templates/footer.html.php';  <?php echo '?>';?>
    
<?php
}
}
/* {/block 'body'} */
}
