<?php
/* Smarty version 3.1.31, created on 2017-03-07 16:37:20
  from "C:\Users\yuki\workspace\github\hbsnow-sandbox\smarty-test\_include.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58bed3b09d5ca1_27163692',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd4e463b8adfff32742c948e9f99450a955e38cf' => 
    array (
      0 => 'C:\\Users\\yuki\\workspace\\github\\hbsnow-sandbox\\smarty-test\\_include.tpl',
      1 => 1488901037,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58bed3b09d5ca1_27163692 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_assignInScope('val1', "val1");
?>
<p><?php echo $_smarty_tpl->tpl_vars['val1']->value;?>
</p>
<p><?php echo WEEK_0;?>
</p>
<p><?php echo WEEK_1;?>
</p>
<?php echo HTML_CODE;?>



<?php if (($_smarty_tpl->tpl_vars['val1']->value === "val1")) {?>
  <p>同じ</p>
<?php } else { ?>
  <p>違うよ</p>
<?php }
}
}
