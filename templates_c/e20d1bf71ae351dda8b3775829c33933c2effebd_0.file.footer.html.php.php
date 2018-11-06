<?php
/* Smarty version 3.1.31, created on 2018-06-13 11:52:21
  from "/Applications/MAMP/htdocs/Z3T/templates/footer.html.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b20e9555c0b05_85700581',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e20d1bf71ae351dda8b3775829c33933c2effebd' => 
    array (
      0 => '/Applications/MAMP/htdocs/Z3T/templates/footer.html.php',
      1 => 1528883537,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b20e9555c0b05_85700581 (Smarty_Internal_Template $_smarty_tpl) {
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
