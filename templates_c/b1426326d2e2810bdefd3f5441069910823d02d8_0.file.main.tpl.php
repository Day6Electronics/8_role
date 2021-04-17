<?php
/* Smarty version 3.1.39, created on 2021-04-17 20:11:17
  from 'C:\Serwery i inne szmery\xamp\htdocs\projekt8_role\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_607b24c5714ce3_13079363',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1426326d2e2810bdefd3f5441069910823d02d8' => 
    array (
      0 => 'C:\\Serwery i inne szmery\\xamp\\htdocs\\projekt8_role\\app\\views\\templates\\main.tpl',
      1 => 1618683074,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607b24c5714ce3_13079363 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<!--
	Transitive by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/main.css" />
                <meta name="description" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_description']->value)===null||$tmp==='' ? "Opis domyślny" : $tmp);?>
">
	</head>
	<body>

		<!-- Header -->
			<header id="header" class="alt">
				<div class="logo"><a href="">Kalkulator rezystora diody LED</a></div>
				<a href="#menu" class="toggle"><span>Menu</span></a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">Strona główna</a></li>
                                        <li><a href="#app_content"><?php echo $_smarty_tpl->tpl_vars['menubtn']->value;?>
</a></li>
                                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout"><?php echo $_smarty_tpl->tpl_vars['menuLogout']->value;?>
</a></li>
				</ul>
			</nav>

		<!-- Banner -->
		<!--
			To use a video as your background, set data-video to the name of your video without
			its extension (eg. images/banner). Your video must be available in both .mp4 and .webm
			formats to work correctly.
		-->
			<section id="banner" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/zdj2.jpg')">
                            
				<div class="inner">
                                    
					<h1>Kalkulator</h1>
                                        <p style="color:#FFF"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_description']->value)===null||$tmp==='' ? "Opis domyślny" : $tmp);?>
<br />
                                            <?php echo (($tmp = @$_smarty_tpl->tpl_vars['author']->value)===null||$tmp==='' ? "Autor domyślny" : $tmp);?>
</p>
					<a href="#app_content" class="button special scrolly"><?php echo $_smarty_tpl->tpl_vars['button']->value;?>
</a>
				</div>
                            
			</section>
                                        
<div class="content-wrapper">
    <div id="app_content" class="content">

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_469903480607b24c5712c24_18989436', 'content');
?>


    </div>

                <footer id="footer" class="wrapper">
				<div class="inner">
					<div class="copyright">
						&copy; Untitled Design: <a href="https://templated.co/">TEMPLATED</a>. Images <a href="https://unsplash.com/">Unsplash</a>. Video <a href="http://coverr.co/">Coverr</a>.
                                                <p><?php echo $_smarty_tpl->tpl_vars['author']->value;?>
</p>
					</div>
				</div>
			</footer>
    </div>
</div>               
			
		<!-- Scripts -->
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/skel.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/main.js"><?php echo '</script'; ?>
>

	</body>
</html><?php }
/* {block 'content'} */
class Block_469903480607b24c5712c24_18989436 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_469903480607b24c5712c24_18989436',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
}
