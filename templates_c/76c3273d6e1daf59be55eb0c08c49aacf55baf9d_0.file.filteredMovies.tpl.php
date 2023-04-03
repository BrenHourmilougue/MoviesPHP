<?php
/* Smarty version 4.2.1, created on 2023-03-31 20:44:37
  from 'C:\xampp\htdocs\WEB2\MoviesPHP\templates\filteredMovies.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64272a15da4753_94167883',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76c3273d6e1daf59be55eb0c08c49aacf55baf9d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\MoviesPHP\\templates\\filteredMovies.tpl',
      1 => 1680288276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_64272a15da4753_94167883 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class='container'>
        
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['movies']->value, 'movie');
$_smarty_tpl->tpl_vars['movie']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['movie']->value) {
$_smarty_tpl->tpl_vars['movie']->do_else = false;
?>

            <?php ob_start();
echo $_smarty_tpl->tpl_vars['movie']->value->category_id;
$_prefixVariable1 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['category']->value->id;
$_prefixVariable2 = ob_get_clean();
if (($_prefixVariable1 === $_prefixVariable2)) {?>
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                        <?php echo $_smarty_tpl->tpl_vars['movie']->value->title;?>

                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['category']->value->category;?>
</li>
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
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
