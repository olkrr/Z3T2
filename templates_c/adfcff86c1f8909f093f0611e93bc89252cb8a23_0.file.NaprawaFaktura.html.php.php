<?php
/* Smarty version 3.1.31, created on 2018-11-02 21:24:38
  from "C:\xampp\htdocs\Z3T\templates\NaprawaFaktura.html.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5bdcb2864da739_60288652',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'adfcff86c1f8909f093f0611e93bc89252cb8a23' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Z3T\\templates\\NaprawaFaktura.html.php',
      1 => 1541190273,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bdcb2864da739_60288652 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17045036975bdcb2864c1fc0_84604206', 'body');
}
/* {block 'body'} */
class Block_17045036975bdcb2864c1fc0_84604206 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_17045036975bdcb2864c1fc0_84604206',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!DOCTYPE html>
<html lang="pl">
    <head>
         <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--<link rel='stylesheet' type='text/css' href='http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
css/style.css' />-->
        <link rel='stylesheet' type='text/css' href='/Z3T/css/style.css' />
        </head>
<body>
<div id="page-wrap">
    <div class="text">
<div id="tura">Turze, dnia <?php echo $_smarty_tpl->tpl_vars['faktura']->value['DataDostarczenia'];?>
 r. </div>
<h1 id="naglowek"> Zlecenie NR <?php echo $_smarty_tpl->tpl_vars['faktura']->value['IDNaprawa'];?>
 </h1><br/>
    
    <div id="naglowek">Klient: <?php echo $_smarty_tpl->tpl_vars['faktura']->value['Imie'];?>
 <?php echo $_smarty_tpl->tpl_vars['faktura']->value['Nazwisko'];?>
 <br/>
       Firma: <?php echo $_smarty_tpl->tpl_vars['faktura']->value['NazwaFirmy'];?>
 <br/>
       Adres:  <?php if (isset($_smarty_tpl->tpl_vars['Ulica']->value)) {?> ul.<?php echo $_smarty_tpl->tpl_vars['faktura']->value['Ulica'];?>
 <?php echo $_smarty_tpl->tpl_vars['faktura']->value['NumerDomu'];?>
 <?php }?> <?php echo $_smarty_tpl->tpl_vars['faktura']->value['KodPocztowy'];?>
 <?php echo $_smarty_tpl->tpl_vars['faktura']->value['Miejscowosc'];?>
 Tel. <?php echo $_smarty_tpl->tpl_vars['faktura']->value['NumerTelefonu'];?>
</div>
    Sprzęt: <?php echo $_smarty_tpl->tpl_vars['faktura']->value['ProducentNazwa'];?>
 <?php echo $_smarty_tpl->tpl_vars['faktura']->value['NazMyjki'];?>
<br/>
    Symptomy: <?php echo $_smarty_tpl->tpl_vars['faktura']->value['Symptomy'];?>
<br/>
    Przyczyna: <?php echo $_smarty_tpl->tpl_vars['faktura']->value['Diagnoza'];?>
<br/>
    Data naprawy BRAK DATY NAPRAWY<br/>
    Użyte części/czynności: <?php echo $_smarty_tpl->tpl_vars['faktura']->value['Czesci'];?>

    <div id="tura">Cena <?php echo $_smarty_tpl->tpl_vars['faktura']->value['KwotaNaprawy'];?>
</div>
        </div>
    </div>
    <div style="text-align:center"> <input id="drukowanie" type="button" value="drukowanie" onclick="drukuj()"></div>
   
    <?php echo '<script'; ?>
 src="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
js/Naprawa.js"><?php echo '</script'; ?>
>
    </body>
    </html>
    <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
<strong><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</strong>
<?php }?>
</div></div>
<?php
}
}
/* {/block 'body'} */
}
