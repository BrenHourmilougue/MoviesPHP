<?php
/* Smarty version 4.2.1, created on 2023-03-30 18:55:03
  from 'C:\xampp\htdocs\WEB2\Nueva carpeta\templates\Movies.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6425bee77089f2_75161832',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b0fe492fc16dd108b2e8b04eea15b5459b0a005' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\Nueva carpeta\\templates\\Movies.tpl',
      1 => 1680195300,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6425bee77089f2_75161832 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class='container'>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['movies']->value, 'movie');
$_smarty_tpl->tpl_vars['movie']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['movie']->value) {
$_smarty_tpl->tpl_vars['movie']->do_else = false;
?>
    <div class="card" style="width: 18rem;">
        <div class="card-header">
            <?php echo $_smarty_tpl->tpl_vars['movie']->value->title;?>

        </div>
        <ul class="list-group list-group-flush">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'cat');
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
?>
                <?php ob_start();
echo $_smarty_tpl->tpl_vars['movie']->value->category_id;
$_prefixVariable1 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['cat']->value->id;
$_prefixVariable2 = ob_get_clean();
if (($_prefixVariable1 === $_prefixVariable2)) {?>
                <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['cat']->value->category;?>
</li>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['movie']->value->year;?>
</li>
            <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['movie']->value->director;?>
</li>
            <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['movie']->value->calification;?>
</li>
            <li class="list-group-item description"><?php echo $_smarty_tpl->tpl_vars['movie']->value->description;?>
</li>
        </ul>
    </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
