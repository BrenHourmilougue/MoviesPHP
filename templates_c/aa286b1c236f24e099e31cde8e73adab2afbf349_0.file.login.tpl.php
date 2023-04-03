<?php
/* Smarty version 4.2.1, created on 2023-04-03 23:49:25
  from 'C:\xampp\htdocs\WEB2\MoviesPHP\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_642b49e51f5bf0_40961317',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa286b1c236f24e099e31cde8e73adab2afbf349' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\MoviesPHP\\templates\\login.tpl',
      1 => 1680558518,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642b49e51f5bf0_40961317 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <div class='main container'>
        <div>
            <h2>Login</h2>
            <form action="login" method="POST">
                <div>
                    <label for="email">Email: </label>
                    <input name="email" type="email" placeholder="example@example.com">
                </div>
                <div>
                    <label for="password">Password: </label>
                    <input name="password" type="password" placeholder="password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        

    </div>
<?php }
}
