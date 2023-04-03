<?php
/* Smarty version 4.2.1, created on 2023-03-31 18:44:52
  from 'C:\xampp\htdocs\WEB2\MoviesPHP\templates\CategoryForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64270e04e304d0_96248216',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b338c7279567f3ee0e488105fb0977db3118e802' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\MoviesPHP\\templates\\CategoryForm.tpl',
      1 => 1680280777,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Header.tpl' => 1,
    'file:Footer.tpl' => 1,
  ),
),false)) {
function content_64270e04e304d0_96248216 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class='container'>
    <h2>New category</h2>
    <form action='postNewCategory' method='POST' enctype="multipart/form-data">

        <div class="mb-3">
            <label for="category" class="form-label">Title</label>
            <input required name="category" type="text" class="form-control" >
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
