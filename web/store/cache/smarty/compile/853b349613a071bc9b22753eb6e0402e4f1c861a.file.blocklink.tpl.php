<?php /* Smarty version Smarty-3.1.8, created on 2013-10-08 19:04:07
         compiled from "/homez.151/thenailk/www/modules/blocklink/blocklink.tpl" */ ?>
<?php /*%%SmartyHeaderCode:135014559352543b071d1327-12073924%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '853b349613a071bc9b22753eb6e0402e4f1c861a' => 
    array (
      0 => '/homez.151/thenailk/www/modules/blocklink/blocklink.tpl',
      1 => 1360317207,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '135014559352543b071d1327-12073924',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'title' => 0,
    'blocklink_links' => 0,
    'lang' => 0,
    'blocklink_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_52543b076472c1_91235068',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52543b076472c1_91235068')) {function content_52543b076472c1_91235068($_smarty_tpl) {?>

<!-- Block links module -->
<div id="links_block_left" class="block">
	<h4 class="title_block">
	<?php if ($_smarty_tpl->tpl_vars['url']->value){?>
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
</a>
	<?php }else{ ?>
		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

	<?php }?>
	</h4>
	<ul class="block_content bullet">
	<?php  $_smarty_tpl->tpl_vars['blocklink_link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blocklink_link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blocklink_links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['blocklink_link']->key => $_smarty_tpl->tpl_vars['blocklink_link']->value){
$_smarty_tpl->tpl_vars['blocklink_link']->_loop = true;
?>
		<?php if (isset($_smarty_tpl->tpl_vars['blocklink_link']->value[$_smarty_tpl->tpl_vars['lang']->value])){?> 
			<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blocklink_link']->value['url'], ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['blocklink_link']->value['newWindow']){?> onclick="window.open(this.href);return false;"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blocklink_link']->value[$_smarty_tpl->tpl_vars['lang']->value], ENT_QUOTES, 'UTF-8');?>
</a></li>
		<?php }?>
	<?php } ?>
	</ul>
</div>
<!-- /Block links module -->
<?php }} ?>