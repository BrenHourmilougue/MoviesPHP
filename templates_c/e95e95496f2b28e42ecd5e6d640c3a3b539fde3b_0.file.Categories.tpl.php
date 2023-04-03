<?php
/* Smarty version 4.2.1, created on 2023-04-04 00:08:21
  from 'C:\xampp\htdocs\WEB2\MoviesPHP\templates\Categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_642b4e55d4b640_73987638',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e95e95496f2b28e42ecd5e6d640c3a3b539fde3b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\MoviesPHP\\templates\\Categories.tpl',
      1 => 1680558980,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_642b4e55d4b640_73987638 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class='main'>

    <h3>Categories</h3>

    <a href='newCategory' class="btn btn-primary" style="color:white;font-weight:600;--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; margin-left:7rem; width:200px;">Add a new category</a>

    <div class='container'>
        <ul class="list-group list-group-xxl">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'cat');
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
?>
            <div>
                <a href='filter/<?php echo $_smarty_tpl->tpl_vars['cat']->value->id;?>
' type="button" class="list-group-item list-group-item-action">
                    <?php echo $_smarty_tpl->tpl_vars['cat']->value->category;?>

                </a>  
                <?php if (!(isset($_SESSION['USER_ID']))) {?>  
                <div>
                    <a href='editCategory/<?php echo $_smarty_tpl->tpl_vars['cat']->value->id;?>
' type='button' class='btn btn-success'>Edit</a>
                    <a href='deleteCategory/<?php echo $_smarty_tpl->tpl_vars['cat']->value->id;?>
' type='button' class='btn btn-danger'>Delete</a>
                </div>
                <?php }?>
            </div>
                
                    
                
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </div>
    
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
