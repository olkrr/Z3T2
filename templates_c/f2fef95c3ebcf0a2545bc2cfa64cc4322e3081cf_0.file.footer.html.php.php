<?php
/* Smarty version 3.1.31, created on 2018-06-13 12:36:17
  from "C:\xampp\htdocs\Z3T\templates\footer.html.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b20f3a1e27965_63770591',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2fef95c3ebcf0a2545bc2cfa64cc4322e3081cf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Z3T\\templates\\footer.html.php',
      1 => 1528883538,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b20f3a1e27965_63770591 (Smarty_Internal_Template $_smarty_tpl) {
?>
</div>
    <!-- /#page-content-wrapper -->
</div>

</p>
<div class="footer-copyright text-center py-3">Copyright 2018 - DZB Software</div>
<!-- Bootstrap core JavaScript -->
    <?php echo '<script'; ?>
 src="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
vendor/jquery/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
vendor/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>



 <?php echo '<script'; ?>
 src="http://<?php echo $_SERVER['HTTP_HOST'];
echo $_smarty_tpl->tpl_vars['subdir']->value;?>
skrypt.js"><?php echo '</script'; ?>
>



    <!-- Menu Toggle Script -->
    <?php echo '<script'; ?>
>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    <?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
