<?php
/* Smarty version 4.2.1, created on 2023-03-31 19:52:44
  from 'C:\xampp\htdocs\WEB2\MoviesPHP\templates\editCategory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64271dec970b45_02813302',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89c02e7ea307bccaefb5cf0f47671670eae960c5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\MoviesPHP\\templates\\editCategory.tpl',
      1 => 1680285093,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Header.tpl' => 1,
    'file:Footer.tpl' => 1,
  ),
),false)) {
function content_64271dec970b45_02813302 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class='container'>
    <h2>Edit category</h2>
    <form action='postEditCategory/<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
' method='POST' enctype="multipart/form-data">
        <div class="mb-3">
            <label for="category" class="form-label">Title</label>
            <input required name="category" type="text" value="<?php echo $_smarty_tpl->tpl_vars['category']->value->category;?>
" class="form-control" >
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
