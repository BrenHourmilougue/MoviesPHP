<?php
/* Smarty version 4.2.1, created on 2023-03-30 21:53:48
  from 'C:\xampp\htdocs\WEB2\MoviesPHP\templates\MoviesForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6425e8cc54f430_17570564',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bbd7f19d8347e62c6d32575724c7aeaf15ef5696' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\MoviesPHP\\templates\\MoviesForm.tpl',
      1 => 1680205394,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Header.tpl' => 1,
    'file:Footer.tpl' => 1,
  ),
),false)) {
function content_6425e8cc54f430_17570564 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class='container'>
    <form action='addMovie' method='POST' enctype="multipart/form-data">

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input required name="title" type="text" class="form-control" >
        </div>

        <div class="mb-3">
            <label for="calification" class="form-label">Calification</label>
            <select required name='calification' class="form-select">
                <option value=<?php echo 1;?>
>1</option>
                <option value=<?php echo 2;?>
>2</option>
                <option value=<?php echo 3;?>
>3</option>
                <option value=<?php echo 4;?>
>4</option>
                <option value=<?php echo 5;?>
>5</option>
            </select>
        </div>

        

        <div class="mb-3">
            <label for="director" class="form-label">Director</label>
            <input required name="director" type="text" class="form-control" >
        </div>

        <div class="mb-3">
            <label for="year" class="form-label">Year</label>
            <input required name="year" type="number" class="form-control" >
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input required name="description" type="text" class="form-control" >
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select required name='category' class="form-select">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'cat');
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
?>
                <option value=<?php echo $_smarty_tpl->tpl_vars['cat']->value->id;?>
</option><?php echo $_smarty_tpl->tpl_vars['cat']->value->category;?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
