<?php
/* Smarty version 3.1.39, created on 2021-04-17 19:21:23
  from 'C:\Serwery i inne szmery\xamp\htdocs\projekt8_role\app\views\loginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_607b1913253f37_88370271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c907e566c0a323bc1a7a93e65c53b441cf8280e3' => 
    array (
      0 => 'C:\\Serwery i inne szmery\\xamp\\htdocs\\projekt8_role\\app\\views\\loginView.tpl',
      1 => 1618680080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_607b1913253f37_88370271 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1838360151607b191324ed76_06338053', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_1838360151607b191324ed76_06338053 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1838360151607b191324ed76_06338053',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <div class="box">
	<div class="content">
            <h2 class="align-center">Logowanie</h2>
            <hr />
            <div class="l-box-lrg pure-u-1 pure-u-med-2-5" style="width:30%;margin: 2em auto;">
		<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post">
                    <fieldset>
		<div class="field half first">
                    <label for="id_login">Login:</label>
                    <input name="login" id="id_login" type="text" placeholder="login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
">
		</div>
		<div class="field half">
                    <label for="id_pass">Hasło:</label>
                    <input name="pass" id="id_pass" type="password" placeholder="hasło" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->pass;?>
">
		</div>
		<ul class="actions align-center">
                    <li><input value="Zaloguj" class="button special" type="submit"></li>
		</ul>
                    </fieldset>
		</form>
	</div>
    </div>
    </div>

<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
}
/* {/block 'content'} */
}
