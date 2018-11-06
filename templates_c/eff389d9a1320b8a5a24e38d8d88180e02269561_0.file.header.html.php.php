<?php
/* Smarty version 3.1.31, created on 2018-04-08 14:40:34
  from "C:\xampp\htdocs\Z3T\Z3T\templates\header.html.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5aca0dc20359e6_81890812',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eff389d9a1320b8a5a24e38d8d88180e02269561' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Z3T\\Z3T\\templates\\header.html.php',
      1 => 1522244600,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aca0dc20359e6_81890812 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Przykład wykorzystania wzorca MVC</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="css/style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
	<a href="http://<?php echo '<?php ';?>echo $_SERVER['HTTP_HOST']<?php echo '?>';?>/<?php echo '<?php ';?>echo \Config\Website\Config::$subdir<?php echo '?>';?>index.php?controller=Klient&action=getAll">Klient</a>
<a href="http://<?php echo '<?php ';?>echo $_SERVER['HTTP_HOST']<?php echo '?>';?>/<?php echo '<?php ';?>echo \Config\Website\Config::$subdir<?php echo '?>';?>index.php?controller=Naprawa&action=getAll">Naprawa</a>
<br><br/>
(
<a href="http://<?php echo '<?php ';?>echo $_SERVER['HTTP_HOST']<?php echo '?>';?>/<?php echo '<?php ';?>echo \Config\Website\Config::$subdir<?php echo '?>';?>index.php?controller=Osprzet&action=getAll">Osprzet</a> 
<a href="http://<?php echo '<?php ';?>echo $_SERVER['HTTP_HOST']<?php echo '?>';?>/<?php echo '<?php ';?>echo \Config\Website\Config::$subdir<?php echo '?>';?>index.php?controller=Producent&action=getAll">Producent</a>
<a href="http://<?php echo '<?php ';?>echo $_SERVER['HTTP_HOST']<?php echo '?>';?>/<?php echo '<?php ';?>echo \Config\Website\Config::$subdir<?php echo '?>';?>index.php?controller=Status&action=getAll">Status</a>
) Opcje Tylko do wglądu
<br><br/>

<?php }
}
