<?php
/* Smarty version 3.1.39, created on 2021-04-17 20:07:34
  from 'C:\Serwery i inne szmery\xamp\htdocs\projekt8_role\app\views\calcView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_607b23e6a32818_74070739',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5162706768c27a3dfc4ae53efdfe1e0410ed6ccc' => 
    array (
      0 => 'C:\\Serwery i inne szmery\\xamp\\htdocs\\projekt8_role\\app\\views\\calcView.tpl',
      1 => 1618682852,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_607b23e6a32818_74070739 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1977574826607b23e6a2a3c7_94555802', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_1977574826607b23e6a2a3c7_94555802 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1977574826607b23e6a2a3c7_94555802',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div style="width:90%; margin: 2em auto;">
            <style scoped="">
                .button-logout{
                    color: white;
                    border-radius: 5px;
                    background: rgb(230, 50, 50);
                    font-size: 120%;
                }
            </style>
            <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout"  class="button-logout pure-button">Wyloguj</a>
            <span style="float:right;">Użytkownik: <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
, Rola: <?php echo $_smarty_tpl->tpl_vars['user']->value->role;?>
</span>
        </div>
	
    
    <div class="box">
	<div class="content">
            <h2 class="align-center" style="margin: 0em auto">Oblicz rezystor</h2>
            <hr />
            <div class="l-box-lrg pure-u-1 pure-u-med-2-5" style="width:40%;margin: 2em auto;">
		<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
calcCompute" method="post">
                    <fieldset>
		<div class="field half first">
                    <label for="v1">Napięcie zasilania (V):</label>
                    <input name="v1" id="v1" type="text" placeholder="Napięcie zasilania (V)" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->v1;?>
">
		</div>
		<div class="field half">
                    <label for="v2">Napięcie przewodzenia (V):</label>
                    <input name="v2" id="v2" type="text" placeholder="Napięcie przewodzenia (V)" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->v2;?>
">
		</div>
		<div class="field half first">
                    <label for="amp">Prąd przewodzenia (mA):</label>
                    <input name="amp" id="amp" type="text" placeholder="Prąd przewodzenia (mA)" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->amp;?>
">
		</div>
		<ul class="actions align-center">
                    <li><input value="Oblicz wartość rezystora" class="button special" type="submit"></li>
		</ul>
                    </fieldset>
		</form>
	</div>
    </div>
    </div>

<div style="width:90%; margin: 2em auto;">
    
<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ((isset($_smarty_tpl->tpl_vars['resistor']->value->resistor))) {?>
	<h4>Wynik:</h4>
	<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['resistor']->value->resistor;?>
 Ohm
	</p>
<?php }?>
</div>
<?php
}
}
/* {/block 'content'} */
}
