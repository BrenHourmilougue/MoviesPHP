<?php
/* Smarty version 4.2.1, created on 2023-03-31 20:02:42
  from 'C:\xampp\htdocs\WEB2\MoviesPHP\templates\editMovie.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6427204253eb75_33077162',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00421d0378d1f4267aa7796797fb3a71154b71ba' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\MoviesPHP\\templates\\editMovie.tpl',
      1 => 1680285753,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Header.tpl' => 1,
    'file:Footer.tpl' => 1,
  ),
),false)) {
function content_6427204253eb75_33077162 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class='container'>
    <h2>Edit movie</h2>
    <form action='editMovie/<?php echo $_smarty_tpl->tpl_vars['movie']->value->id;?>
' method='POST' enctype="multipart/form-data">

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input required name="title" type="text" value="<?php echo $_smarty_tpl->tpl_vars['movie']->value->title;?>
" class="form-control" >
        </div>

        <div class="mb-3">
            <label for="calification" class="form-label">Calification</label>
            <select required name='calification' class="form-select">
                <option selected value="<?php echo $_smarty_tpl->tpl_vars['movie']->value->calification;?>
"><?php echo $_smarty_tpl->tpl_vars['movie']->value->calification;?>
</option>
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
            <input required name="director" type="text" value="<?php echo $_smarty_tpl->tpl_vars['movie']->value->director;?>
" class="form-control" >
        </div>

        <div class="mb-3">
            <label for="year" class="form-label">Year</label>
            <input required name="year" type="number" value="<?php echo $_smarty_tpl->tpl_vars['movie']->value->year;?>
" class="form-control" >
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input required name="description" type="text" value="<?php echo $_smarty_tpl->tpl_vars['movie']->value->description;?>
" class="form-control" >
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
                    <?php ob_start();
echo $_smarty_tpl->tpl_vars['movie']->value->category_id;
$_prefixVariable1 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['cat']->value->id;
$_prefixVariable2 = ob_get_clean();
if (($_prefixVariable1 === $_prefixVariable2)) {?>
                        <option selected value="<?php echo $_smarty_tpl->tpl_vars['movie']->value->category_id;?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value->category;?>
</option>
                    <?php }?>
               <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'cat');
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['cat']->value->id;?>
"</option><?php echo $_smarty_tpl->tpl_vars['cat']->value->category;?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
