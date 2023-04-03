<?php
/* Smarty version 4.2.1, created on 2023-04-03 02:22:26
  from 'C:\xampp\htdocs\WEB2\MoviesPHP\templates\Movie.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_642a1c429596f0_09363442',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb2a665f81bd6896517bb7dfe52fb43654b8b688' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\MoviesPHP\\templates\\Movie.tpl',
      1 => 1680481286,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Header.tpl' => 1,
    'file:login.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_642a1c429596f0_09363442 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class='main'>
<?php $_smarty_tpl->_subTemplateRender("file:login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class='container'>

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
                <li class="list-group-item "><?php echo $_smarty_tpl->tpl_vars['movie']->value->description;?>
</li>
                <?php if (!(isset($_SESSION['USER_ID']))) {?>
                <li class="list-group-item ">
                            <a href='edit/<?php echo $_smarty_tpl->tpl_vars['movie']->value->id;?>
' type='button' class='btn btn-success'>Edit</a>
                            <a href='delete/<?php echo $_smarty_tpl->tpl_vars['movie']->value->id;?>
' type='button' class='btn btn-danger'>Delete</a>
                </li>        
                <?php }?>        
            </ul>
        </div>

    </div>

</div>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
