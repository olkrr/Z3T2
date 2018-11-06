<?php
/* Smarty version 3.1.31, created on 2018-06-13 13:03:47
  from "C:\xampp\htdocs\Z3T\templates\NaprawaEditForm.html.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b20fa13877243_48208124',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e83e9a773d96ae950cbb19cf81eec89acb59a32a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Z3T\\templates\\NaprawaEditForm.html.php',
      1 => 1528887821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b20fa13877243_48208124 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once 'C:\\xampp\\htdocs\\Z3T\\vendor\\smarty\\smarty\\libs\\plugins\\function.html_options.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8848240905b20fa137f1509_54223180', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4937416725b20fa137f95f1_16993915', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Main.html.php");
}
/* {block 'title'} */
class Block_8848240905b20fa137f1509_54223180 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_8848240905b20fa137f1509_54223180',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Edycja<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_4937416725b20fa137f95f1_16993915 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_4937416725b20fa137f95f1_16993915',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h1>Edycja naprawy </h1>

<form  action="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
Naprawa/update" method="post">
    <input type="hidden" id="IDNaprawa" name="IDNaprawa" value="<?php echo $_smarty_tpl->tpl_vars['IDNaprawa']->value;?>
"> <br />
   
    <input type="hidden" class="form-control" required="required" id="IDKlient" name="IDKlient"  value="<?php echo $_smarty_tpl->tpl_vars['IDKlient']->value;?>
"><br />
    
    IDProducent:  <div class="form-control"> <?php echo smarty_function_html_options(array('name'=>'IDProducent','options'=>$_smarty_tpl->tpl_vars['producenci']->value,'selected'=>$_smarty_tpl->tpl_vars['IDProducent']->value),$_smarty_tpl);?>
<br /> </div>
    
    NazMyjki:  <input type="text" class="form-control" name="NazMyjki" required="required"      value="<?php echo $_smarty_tpl->tpl_vars['NazMyjki']->value;?>
"><br /> 
    
    IDTypMyjki: <div class="form-control"> <?php echo smarty_function_html_options(array('name'=>'IDTypMyjki','options'=>$_smarty_tpl->tpl_vars['myjki']->value,'selected'=>$_smarty_tpl->tpl_vars['IDTypMyjki']->value),$_smarty_tpl);?>
<br /> </div>
    
    IDOsprzet: <div class="form-control">  <?php echo smarty_function_html_options(array('name'=>'IDOsprzet','options'=>$_smarty_tpl->tpl_vars['osprzet']->value,'selected'=>$_smarty_tpl->tpl_vars['IDOsprzet']->value),$_smarty_tpl);?>
<br /> </div>
    
	CzyWycena: <div class="form-control">  <?php echo smarty_function_html_options(array('name'=>'CzyWycena','options'=>$_smarty_tpl->tpl_vars['opcje']->value,'selected'=>$_smarty_tpl->tpl_vars['CzyWycena']->value),$_smarty_tpl);?>
<br /> </div>
    
	Symptomy: <textarea type="textarea" class="form-control" required="required" id="Symptomy" name="Symptomy"  value=""><?php echo $_smarty_tpl->tpl_vars['Symptomy']->value;?>
</textarea><br />
    
    Diagnoza: <textarea type="textarea" class="form-control" id="Diagnoza" name="Diagnoza"  value=""> <?php echo $_smarty_tpl->tpl_vars['Diagnoza']->value;?>
 </textarea> <br />
    
    OpisNaprawy: <textarea type="textarea" class="form-control" id="OpisNaprawy" name="OpisNaprawy"  value=""><?php echo $_smarty_tpl->tpl_vars['OpisNaprawy']->value;?>
</textarea> <br />
    
    Czesci: <textarea type="textarea" class="form-control" id="Czesci" name="Czesci"  value=""><?php echo $_smarty_tpl->tpl_vars['Czesci']->value;?>
</textarea> <br />
    
    DataDostarczenia: <input type="date" class="form-control" required="required" id="DataDostarczenia" name="DataDostarczenia"  value="<?php echo $_smarty_tpl->tpl_vars['DataDostarczenia']->value;?>
"><br />
    
    DataOdbioru: <input type="date" class="form-control"  id="DataOdbioru" name="DataOdbioru"  value="<?php echo $_smarty_tpl->tpl_vars['DataOdbioru']->value;?>
"><br />
    
    IDStatus: <div class="form-control">  <?php echo smarty_function_html_options(array('name'=>'IDStatus','options'=>$_smarty_tpl->tpl_vars['status']->value,'selected'=>$_smarty_tpl->tpl_vars['IDStatus']->value),$_smarty_tpl);?>
<br /> </div>
    
    KwotaNaprawy: <input type="number" class="form-control" id="KwotaNaprawy" name="KwotaNaprawy"  value="<?php echo $_smarty_tpl->tpl_vars['KwotaNaprawy']->value;?>
"><br />
    
    Kartka: <div class="form-control">  <?php echo smarty_function_html_options(array('name'=>'Kartka','options'=>$_smarty_tpl->tpl_vars['opcje']->value,'selected'=>$_smarty_tpl->tpl_vars['Kartka']->value),$_smarty_tpl);?>
<br /> </div>
    
    Kontakt: <div class="form-control">  <?php echo smarty_function_html_options(array('name'=>'Kontakt','options'=>$_smarty_tpl->tpl_vars['opcje']->value,'selected'=>$_smarty_tpl->tpl_vars['Kontakt']->value),$_smarty_tpl);?>
<br /> </div>
    
    
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
