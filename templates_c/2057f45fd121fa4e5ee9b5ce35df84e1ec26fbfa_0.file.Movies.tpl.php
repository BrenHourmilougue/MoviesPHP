<?php
/* Smarty version 4.2.1, created on 2023-04-04 00:08:17
  from 'C:\xampp\htdocs\WEB2\MoviesPHP\templates\Movies.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_642b4e51a2d209_04354250',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2057f45fd121fa4e5ee9b5ce35df84e1ec26fbfa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\MoviesPHP\\templates\\Movies.tpl',
      1 => 1680559696,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Header.tpl' => 1,
    'file:Footer.tpl' => 1,
  ),
),false)) {
function content_642b4e51a2d209_04354250 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class='main'>

    <a href='newMovie' class="btn btn-primary" style="color:white;font-weight:600;--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; margin-left:7rem; width:150px;">Add a new movie</a>

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
                <li class="list-group-item description">
                            <a href='details/<?php echo $_smarty_tpl->tpl_vars['movie']->value->id;?>
' type="button" class="btn btn-info">Details</a>
                            <a href='edit/<?php echo $_smarty_tpl->tpl_vars['movie']->value->id;?>
' type='button' class='btn btn-success'>Edit</a>
                            <a href='delete/<?php echo $_smarty_tpl->tpl_vars['movie']->value->id;?>
' type='button' class='btn btn-danger'>Delete</a>
                </li>                
            </ul>
        </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>

</div>


<?php $_smarty_tpl->_subTemplateRender("file:Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
